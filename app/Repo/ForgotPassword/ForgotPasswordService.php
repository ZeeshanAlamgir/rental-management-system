<?php

namespace App\Repo\ForgotPassword;

use App\Mail\ForgotPasswordMail;
use App\Models\ForgotPassword;
use App\Models\Tutor;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Notifications\ResetPasswordNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class ForgotPasswordService implements ForgotPasswordInterface
{
    public function forgotPassword( $email )
    {
        $token = Str::random(64);
        $check_email_response = User::checkEmail( $email );
        if ( !$check_email_response )
        {
            return false;
        }
        else
        {
            $forgot_password = new ForgotPassword();
            $forgot_password->email = $email ?? null;
            $forgot_password->token = $token;
            $forgot_password->created_at = Carbon::now();
            $forgot_password->save();
            $user = User::whereEmail($email)->first();
            $data =
            [
                'name' => $user->name,
                'token'=> $token,
                'email'=> $user->email
            ];
            Notification::send( $user, new ResetPasswordNotification( $data ) );
            return true;
        }
    }

    public function tokenValidation( $email, $token )
    {
        $forgot_password = ForgotPassword::whereEmailAndToken($email,$token)->first();
        return $forgot_password;
    }
}
