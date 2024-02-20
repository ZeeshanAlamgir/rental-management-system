<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function signupForm ( Request $request )
    {
        $data['plans'] = Plan::all();
        return view('auth.signup', compact('data'));
    }

    public function store ( RegisterUserRequest $request )
    {
        dd($request->all());
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
