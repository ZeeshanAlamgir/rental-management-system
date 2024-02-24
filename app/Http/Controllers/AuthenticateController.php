<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\UserDetails;
use App\Notifications\SendOTPNotification;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthenticateController extends Controller
{
    public function signupForm ( Request $request )
    {
        $data['plans'] = Plan::all();
        return view('auth.signup', compact('data'));
    }

    public function captchaVerification ( Request $request )
    {
        $errors_arr = [];
        $validator = validator::make($request->all(),
            [
                'user_data' => 'required|array',
                'user_data.*'=>'required',
                'user_data.captcha_value'=>'required|captcha'
            ],
            [
                'user_data.name'=>"Name is missing",
                'user_data.email'=>"Email is missing",
                'user_data.time_zone'=>"Country is missing",
                'user_data.phone_no'=>"Phone No is missing",
                'user_data.plan_id'=>"Plan is missing",
                'user_data.captcha_value'=>"Invalid Captcha"
            ]
        );
        if ($validator->fails()) {
            foreach($validator->errors()->messages() as $error)
            {
                array_push($errors_arr,$error[0]);
            }
            return apiErrorResponse($errors_arr);
        } else {
            try
            {
                $response = self::registerUser( $request->user_data );
                if( $response )
                    return apiSuccessResponse("OTP has been send to your email");
                else
                    return apiErrorResponse("Email is already registered",403);
            }
            catch ( Exception $ex )
            {
                return apiErrorResponse($ex->getMessage());
            }
        }
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public static function registerUser ( $data )
    {
        $check_user = User::checkEmail( $data['email'] );
        if( $check_user )
        {
            return false;
        }
        $otp = generateRandomNumbers();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->country_code = $data['time_zone'];
        $user->phone_no = $data['phone_no'];
        $user->plan_id = $data['plan_id'];
        $user->role = User::CUSTOMER;
        $user->otp = $otp;
        $user->save();
        $registered_user = User::with('userPlan:id,plan')->whereEmail( $data['email'] )->first();
        setUserCookie('otp', Crypt::encrypt($otp),3600);
        setUserCookie('email', $registered_user->email,3600);
        setUserCookie('phone_no', $registered_user->phone_no,3600);
        $registered_user->notify(new SendOTPNotification( $registered_user ));
        return true;
    }

    public function checkOTP ( Request $request )
    {

        $cookie = crypt::decrypt($_COOKIE['otp']);
        if( $cookie == $request->otp )
        {
            $data = [
                'email'=>$_COOKIE['email'],
                'phone_no'=>$_COOKIE['phone_no']
            ];
            return apiSuccessResponse("OTP Verified Successfully", $data);
        }
        else
            return apiErrorResponse("Incorrect OTP. Please Try Again");
    }

    public function completeRegistration ( Request $request )
    {
        $errors_arr = [];
        $validator = validator::make($request->all(),
            [
                'data' => 'required|array',
                'data.*'=>'required',
            ],
            [
                'data.company_details'=>"Company Details is missing",
                'data.company_name'=>"Company name is missing",
                'data.website'=>"Website is missing",
                'data.abn'=>"ABN No is missing",
                'data.acn'=>"ANC No is missing",
                'data.reg_gst'=>"Registration GST is missing",
                'data.street_address_1'=>"Street Address (Line 1) is missing",
                'data.street_address_2'=>"Street Address (Line 2) is missing",
                'data.city'=>"City is missing",
                'data.post_code'=>"Post Code is missing",
                'data.state'=>"State is missing",
                'data.country'=>"Country is missing",
                'data.password'=>"Password is missing"
            ]
        );
        if ($validator->fails()) {
            foreach($validator->errors()->messages() as $error)
            {
                array_push($errors_arr,$error[0]);
            }
            return apiErrorResponse($errors_arr);
        } else
        {
            try
            {
                $user = User::whereEmail( $_COOKIE['email'] )->first();
                $user_details = new UserDetails();
                $user_details->company_name = $request['data']['company_name'];
                $user_details->company_details = $request['data']['company_details'];
                $user_details->website = $request['data']['website'];
                $user_details->abn = $request['data']['abn'];
                $user_details->acn = $request['data']['acn'];
                $user_details->reg_gst = $request['data']['reg_gst'] =='no' ? "no" :"yes";
                $user_details->street_address_1 = $request['data']['street_address_1'];
                $user_details->street_address_2 = $request['data']['street_address_2'];
                $user_details->city = $request['data']['city'];
                $user_details->post_code = $request['data']['post_code'];
                $user_details->state = $request['data']['state'];
                $user_details->country = $request['data']['country'] ;
                $user_details->user_id = $user->id;
                $user_details->save();
                resetPassword( $_COOKIE['email'], $request['data']['password'] );
                return apiSuccessResponse("Account Created Sucessfully");
            }
            catch( Exception $ex )
            {
                return apiErrorResponse( $ex->getMessage() );
            }
        }
    }

    public function login ( Request $request )
    {
        $credientials =
        [
            'email'  => $request['email'],
            'password'  => $request['password'],
        ];
        if(Auth::attempt($credientials))
            return redirect()->route('dashboard');
        else
        {
            Session::flash( 'message-login', "Invalid Email or Password, try again." );
            return redirect()->back()->withInput($request->only('email'));
        }
    }
}
