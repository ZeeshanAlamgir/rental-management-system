<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenticateController extends Controller
{
    public function signupForm ( Request $request )
    {
        $data['plans'] = Plan::all();
        return view('auth.signup', compact('data'));
    }

    public function store ( RegisterUserRequest $request )
    {
        $user = new User();
        dd($request->all());
    }

    public function captchaVerification ( Request $request )
    {
        $validator = validator::make($request->all(),
            ['captcha_value' => 'required|captcha']
        );
        if ($validator->fails()) {
            return response()->json([
                "message"=>"Invalid Captcha",
                "status"=>400
            ]);
        } else {
            return response()->json([
                "message"=>"Captcha Validated",
                "status"=>200
            ]);
        }
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
