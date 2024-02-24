<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rentaaa</title>
</head>
<body>
    <center>
        <img style="" src="{{ asset('app-assets/images/rental/rentaaa.png') }}" />
    </center>
    <br>
    Hi User,<br><br>

    We've received your login request. To proceed, please use the following OTP for <br> authentication: <br><br>

    One-Time Password (OTP): <b>{{$user->otp}}</b> <br>

    Your Basic Details: <br>
    Name: <b>{{$user->name}}</b> <br>
    Email: <b>{{$user->email}}</b> <br>
    Code: <b>{{$user->country_code}}</b> <br>
    Phone number: <b>{{$user->phone_no}}</b> <br>
    Your Plan: <b>{{$user?->userPlan?->plan}}</b> <br>

    If you didn't initiate this login request, please ignore this email. For any concerns, <br> please contact our support executive. <br><br>

    Stay secure! <br><br>

    Best regards, <br>
    Rentaaa Support <br>

    This code is valid for a one-time login only.
</body>
</html>
