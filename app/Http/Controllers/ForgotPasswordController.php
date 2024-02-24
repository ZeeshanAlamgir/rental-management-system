<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repo\ForgotPassword\ForgotPasswordInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public $forgot_password = '';
    public function __construct(ForgotPasswordInterface $forgotPasswordInterface)
    {
        $this->forgot_password = $forgotPasswordInterface;
    }

    public function forgotPasswordForm ()
    {
        return view('app.forgot.forgot-password');
    }

    public function sendForgotPasswordMail ( Request $request )
    {
        $forgot_password = $this->forgot_password->forgotPassword( $request->input('email') );
        if( !$forgot_password )
        {
            return apiErrorResponse();
        }
        else
        {
            return apiSuccessResponse(null,'We have e-mailed your password reset link!');
        }
    }

    public function tokenValidation ( $email, $token )
    {
        $token_validity = $this->forgot_password->tokenValidation( $email, $token );
        if( !is_null( $token_validity ) && !empty( $token_validity ) && is_object($token_validity) )
        {
            return view('app.forgot.reset');
        }
        else
        {
            return to_route('tutor.login.view')->withDanger('wrong', 'Invalid Token');
        }
    }

    public function resetPassword ( Request $request )
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');

        $user = User::whereEmail($email)->first();
        $user->password = Hash::make($password);
        $user->save();
        return apiSuccessResponse();
    }
}
