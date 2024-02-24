@extends('auth.layout')
@section('custom-css')
    <style>

        ::selection {
            background: rgba(26, 188, 156, 0.3);
        }

        .main-container {
            max-width: 440px;
            padding: 0 20px;
            margin-top: 5%;
            /* margin: 170px auto; */
        }

        .wrapper {
            width: 100%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            height: 90px;
            background: #00394f ;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form {
            padding: 30px 25px 25px 25px;
        }

        .wrapper form .row {
            height: 45px;
            margin-bottom: 30px;
            position: relative;
        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 60px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        form .row input:focus {
            border-color: #00394f ;
            box-shadow: inset 0px 0px 2px 2px #00394f ;
        }

        form .row input::placeholder {
            color: #999;
        }

        .wrapper form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #00394f ;
            border: 1px solid #00394f ;
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form .pass {
            margin: -8px 0 20px 0;
        }

        .wrapper form .pass a {
            color: #00394f ;
            font-size: 17px;
            text-decoration: none;
        }

        .wrapper form .pass a:hover {
            text-decoration: underline;
        }

        .wrapper form .button input {
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            background: #00394f ;
            border: 1px solid #00394f ;
            cursor: pointer;
        }

        form .button input:hover {
            background: #00394f ;
        }

        .wrapper form .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 17px;
        }
        .forgot-password-div {
            padding-bottom: 10px;
            display: flex;
            justify-content: center;
        }
        .forgot-password {
            text-decoration: none;
        }

    </style>
@endsection

@section('content')
    <div class="main-container container">
        <div class="wrapper">
            <div class="title"><span>Reset Password</span></div>
            <form method="POST" id="reset-password-form">
                @csrf
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                    <input type="hidden" name="email" value="{{ request()->email }}" id="email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="row button" style="margin-bottom: 10px !important;">
                    <input type="submit" value="Reset" id="reset-btn">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer-scripts')
<script>
    $( document ).on( 'click', '#reset-btn', function (e) {
        e.preventDefault();

        let custom_validation_message_array = [];
        let required_field_array = [];
        let email = $('#email').val();
        let password = $('#password').val();
        let confirm_password = $('#confirm_password').val();

        let data = {
            'password': password ?? null,
            'confirm_password': confirm_password ?? null
        };
        for (const key in data) {
            if ( data[key] == []) {
                required_field_array.push(key);
            }
        }
        if (required_field_array.length > 0) {
            for (let i = 1; i < required_field_array.length; i++) {
                if (required_field_array[i].includes('password')) {
                    custom_validation_message_array.push("Password");
                }
                if (required_field_array[i].includes('confirm_password')) {
                    custom_validation_message_array.push("Confirm Password");
                }
            }
            for (let j = 0; j < custom_validation_message_array.length; j++) {
                toastr.error(custom_validation_message_array[j] + " is required");
            }
        }
        else if( password.length>0 && confirm_password.length>0 ) {
            if( password != confirm_password ) {
                toastr.error( "Confirm Password is incorrect" );
            }
            else
            {
                $.ajax({
                    type: "POST",
                    url: "{{ route('password.reset') }}",
                    data: {
                        _token : "{{ csrf_token() }}",
                        email:email,
                        password: password

                    },
                    success: function (response) {
                        if(response.status) {
                            toastr.success("Password Changed Successfully");
                            $('#password').val('');
                            $('#confirm_password').val('');
                            $('#reset-btn').attr('disabled', true);
                            setTimeout(() => {
                                let redirectTo = "<?php echo route('tutor.login.view') ?>";
                                window.location.href=redirectTo;
                            }, 1500);
                        }
                    }
                });
            }
        }


    } );
</script>
@endsection
