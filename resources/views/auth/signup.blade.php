{{-- @extends('auth.layout')
@section('my-css')
<style>
    ul {
        padding-left:1rem !important;
    }
</style>
@endsection

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="index-2.html">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                <defs>
                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                        y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill: currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1">{{ env('APP_NAME') }}</h2>
                        </a>
                        <!-- /Brand logo-->

                        <!-- Left Text-->
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0"
                            style="    display: flex !important;
                        justify-content: center;
                        align-items: flex-start !important;">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100" src="{{ asset('app-assets/images/pages/signup.svg') }}"
                                    alt="multi-steps">
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        <div class="col-lg-9 auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                            <div class="width-700">
                                <center>
                                    <h2>User Information</h2>
                                </center>

                                <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                    <div id="step1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                                                @error('name')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                                @error('email')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <label for="">Country</label>
                                                <select class="form-select" name="country_code" id="time_zone">
                                                    <option value="AU">Australia (AU)</option>
                                                    <option value="NZ">New Zealand (NZ)</option>
                                                    <option value="US">United State (US)</option>
                                                    <option value="SG">Singapore (SG)</option>
                                                    <option value="IN">India (IN)</option>
                                                </select>
                                                @error('country_code')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-9">
                                                <label for="">Phone No</label>
                                                <input type="number" class="form-control" name="phone_no"
                                                    placeholder="Phone No" value="{{old('phone_no')}}">
                                                @error('phone_no')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="">Plan</label>
                                                <select name="plan_id" class="form-select">
                                                    @foreach ($data['plans'] as $plan)
                                                        <option value="{{ $plan->id }}">{{ $plan->plan }}</option>
                                                    @endforeach
                                                </select>
                                                @error('plan_id')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4 captcha">
                                                <span>{!! captcha_img() !!}</span>
                                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                    &#x21bb;
                                                </button>
                                            </div>
                                            <div class="col-md-8">
                                                <input id="captcha" type="text" class="form-control"
                                                    placeholder="Enter Captcha" name="captcha">
                                                @error('captcha')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div id="step2">
                                        <h2>Enter OTP to verify Account</h2>
                                        <div class="row">
                                            <div class="col-md-12"></div>
                                            <label for="">OTP</label>
                                            <input type="text" class="form-control" placeholder="OTP to Verify Account">
                                        </div>
                                    </div>
                                    <div class="row mt-2 d-flex justify-content-between">
                                        <div class="col-md-3">
                                            <button class="btn btn-success w-100">Back</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary btn-block w-100">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('my-script')
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endsection --}}

@extends('auth.layout')
@section('my-css')
    <style>
        ul {
            padding-left: 1rem !important;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        #signUpForm {
            max-width: 940px;
            background-color: #ffffff;
            margin: 40px auto;
            padding: 40px;
            box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
            border-radius: 12px;
        }
        #signUpForm label {
            padding-left: 0px;
        }

        #signUpForm .form-header {
            gap: 5px;
            text-align: center;
            font-size: .9em;
        }

        #signUpForm .form-header .stepIndicator {
            position: relative;
            flex: 1;
            padding-bottom: 30px;
        }

        #signUpForm .form-header .stepIndicator.active {
            font-weight: 600;
        }

        #signUpForm .form-header .stepIndicator.finish {
            font-weight: 600;
            color: #009688;
        }

        #signUpForm .form-header .stepIndicator::before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 9;
            width: 20px;
            height: 20px;
            background-color: #d5efed;
            border-radius: 50%;
            border: 3px solid #ecf5f4;
        }

        #signUpForm .form-header .stepIndicator.active::before {
            background-color: #a7ede8;
            border: 3px solid #d5f9f6;
        }

        #signUpForm .form-header .stepIndicator.finish::before {
            background-color: #009688;
            border: 3px solid #b7e1dd;
        }

        #signUpForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f3f3f3;
        }

        #signUpForm .form-header .stepIndicator.active::after {
            background-color: #a7ede8;
        }

        #signUpForm .form-header .stepIndicator.finish::after {
            background-color: #009688;
        }

        #signUpForm .form-header .stepIndicator:last-child:after {
            display: none;
        }

        #signUpForm input {
            padding: 9px 20px;
            width: 100%;
            font-size: 1em;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
        }

        #signUpForm input:focus {
            border: 1px solid #009688;
            outline: 0;
        }

        #signUpForm input.invalid {
            border: 1px solid #ffaba5;
        }

        #signUpForm .step {
            display: none;
        }

        #signUpForm .form-footer {
            overflow: auto;
            gap: 20px;
        }

        #signUpForm .form-footer button {
            background-color: #009688;
            border: 1px solid #009688 !important;
            color: #ffffff;
            border: none;
            padding: 13px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            flex: 1;
            margin-top: 5px;
        }

        #signUpForm .form-footer button:hover {
            opacity: 0.8;
        }

        #signUpForm .form-footer #prevBtn {
            background-color: #fff;
            color: #009688;
        }
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 13px;
            position: relative;
            z-index: 2;
            padding-right: 6px !important;
        }
        .toggle-password,.toggle-confirm-password {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="index-2.html">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                <defs>
                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                        y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill: currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1">{{ env('APP_NAME') }}</h2>
                        </a>
                        <!-- /Brand logo-->

                        <!-- Left Text-->
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0"
                            style="    display: flex !important;
                        justify-content: center;
                        align-items: flex-start !important;">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100" src="{{ asset('app-assets/images/pages/signup.svg') }}"
                                    alt="multi-steps">
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        <div class="col-lg-9 auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                            <div class="width-940">
                                <center>
                                    <h2>Profile Setup</h2>
                                </center>

                                {{-- <h1 class="text-center fs-4">Form Wizard - Multi Step Form</h1> --}}
                                <form id="signUpForm" action="#!">
                                    <!-- start step indicators -->
                                    <div class="form-header d-flex mb-2">
                                        <span class="stepIndicator">User Information</span>
                                        <span class="stepIndicator">OTP Verification</span>
                                        <span class="stepIndicator">Onboarding Process</span>
                                        <span class="stepIndicator">Password</span>
                                    </div>
                                    <!-- end step indicators -->

                                    <!-- step one -->
                                    <div class="step">
                                        <p class="text-center mb-2">Create your account</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                                                @error('name')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                                @error('email')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <label for="">Country</label>
                                                <select class="form-select" name="country_code" id="time_zone">
                                                    <option value="AU">Australia (AU)</option>
                                                    <option value="NZ">New Zealand (NZ)</option>
                                                    <option value="US">United State (US)</option>
                                                    <option value="SG">Singapore (SG)</option>
                                                    <option value="IN">India (IN)</option>
                                                </select>
                                                @error('country_code')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-9">
                                                <label for="">Phone No</label>
                                                <input type="number" class="form-control" name="phone_no"
                                                    placeholder="Phone No" value="{{old('phone_no')}}">
                                                @error('phone_no')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="">Plan</label>
                                                <select name="plan_id" class="form-select">
                                                    @foreach ($data['plans'] as $plan)
                                                        <option value="{{ $plan->id }}">{{ $plan->plan }}</option>
                                                    @endforeach
                                                </select>
                                                @error('plan_id')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2 mb-2">
                                            <div class="col-md-3 captcha">
                                                <span>{!! captcha_img() !!}</span>
                                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                    &#x21bb;
                                                </button>
                                            </div>
                                            <div class="col-md-9">
                                                <input id="captcha" type="text" class="form-control"
                                                    placeholder="Enter Captcha" name="captcha">
                                                @error('captcha')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>

                                    <!-- step two -->
                                    <div class="step">
                                        <p class="text-center mb-4">User Account Verfication</p>
                                        <div class="row mt-2 mb-2">
                                            <label for="">Enter OTP</label>
                                            <input type="number" class="form-control" placeholder="OTP" name="otp">
                                        </div>
                                    </div>

                                    <!-- step three -->
                                    <div class="step">
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="">Company Details</label>
                                                <input type="text" class="form-control" name="company_details" placeholder="Company Details" value="{{old('company_details')}}">
                                                @error('company_details')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Company Name</label>
                                                <input type="text" class="form-control" name="company_name" placeholder="Company Name" value="{{old('company_details')}}">
                                                @error('company_details')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                                @error('email')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Phone No</label>
                                                <input type="number" class="form-control" name="phone_no" placeholder="Phone No" value="{{old('phone_no')}}">
                                                @error('phone_no')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="">Website</label>
                                                <input type="text" class="form-control" name="website" placeholder="Website" value="{{old('website')}}">
                                                @error('website')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">ABN</label>
                                                <input type="text" class="form-control" name="abn" placeholder="ABN" value="{{old('abn')}}">
                                                @error('abn')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2 mb-2">
                                            <div class="col-md-6">
                                                <label for="">ACN</label>
                                                <input type="text" class="form-control" name="acn" placeholder="ACN" value="{{old('acn')}}">
                                                @error('acn')
                                                    <ul>
                                                        <li style="color: red">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Are you Registered for GST ?</label>
                                                <select name="register_for_gst" class="form-select" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step">
                                        <div class="row mt-2 mb-2">
                                            <div class="col-md-6">
                                                <input type="password" id="password-field" placeholder="Password" oninput="this.className = ''"
                                                    name="password">
                                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password">
                                                    </span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" id="confirm-password-field" placeholder="Confirm Password"
                                                    oninput="this.className = ''" name="password">
                                                    <span confirm_toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-confirm-password">
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- start previous / next buttons -->
                                    <div class="form-footer d-flex">
                                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                    <!-- end previous / next buttons -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('my-script')
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
        var currentTab = 0;
         // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        function showTab(n) { // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block"; //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            } //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) { // This function will figure out which tab to display
            var x = document.getElementsByClassName("step"); // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false; // Hide the current tab:
            x[currentTab].style.display = "none"; // Increase or decrease the current tab by 1:
            currentTab = currentTab + n; // if you have reached the end of the form...
            if (currentTab >= x.length) { // ... the form gets submitted:
                document.getElementById("signUpForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() { // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input"); // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) { // If a field is empty...
                    if (y[i].value == "") {              // add an "invalid" class to the field:
                    y[i].className += " invalid";              // and set the current valid status to false
                    valid = false;
                }
            }          // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
             }          return valid;
             // return the valid status
            }
            function fixStepIndicator(n) {          // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }          //... and adds the "active" class on the current step:
             x[n].className += " active";
            }
            $(document).on('click',".toggle-password",function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
            $(document).on('click',".toggle-confirm-password",function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $('#confirm-password-field');
                console.log("input",input);
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });


    </script>
@endsection
