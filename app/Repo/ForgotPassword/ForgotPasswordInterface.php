<?php

namespace App\Repo\ForgotPassword;

interface ForgotPasswordInterface
{
    public function forgotPassword( $email );
    public function tokenValidation( $email, $token );
    // public function resetPassword( $email, $token );
}
