<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <img style="" src="{{ asset('app-assets/images/rental/rentaaa.png') }}" />
    </center>
    <br>
    <b>Password Reset Request Starr365</b><br><br>
    Click link for reset your password
    {{-- <h3 style="font-family: 'Google Sans';color:black">Dear {{ $tutor }},</h3>
    <p style="font-family: 'Google Sans';color:black"> --}}
        {{-- We noticed that you recently requested to reset your password for your <strong>OXFORD ONLINE HOME TUTORS account.</strong> To initiate the password reset process, please click on the link below:
        <br><br> --}}
        <a style="
        text-decoration: none;
        font-weight: bold;
        background-color: black;
        color: white;
        padding: 10px;
        border-radius: 8px;" href="{{ route('token.validation', ['email'=>$email,'token'=>$token]) }}">Click Here to Reset Password</a>
        {{-- <br><br> --}}
        {{-- If you did not request a password reset, please ignore this email. Your account security is important to us, and we appreciate your attention to this matter.<br><br>
        Thank you,<br>
        OXFORD ONLINE HOME TUTORS TEAM. --}}
    </p>
</body>
</html>
