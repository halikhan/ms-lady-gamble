@extends('web.layouts.master')
@section('content')
    <style>
        .forget_password {
            margin: 20px 0px;
        }

        form {
            padding-top: 310px !important;
        }

        footer {
            margin-top: 0px !important;
        }

        .login-main .login-content {
            padding: 0%;
        }

        .form-control:focus {
            box-shadow: unset;
        }

        .btn-primary:hover {
            color: #000000;
            background-color: #f5a801;
            border-color: #f5a801;
        }

        .form-control::placeholder {
            color: #808080;
            font-family: poppinlight;
        }

        .login-main .login-form a {
            color: #808080;
            padding-top: 2%;
            text-decoration: none;
            font-family: poppinlight;
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            color: #fff;
            background-color: #f5a801;
            border-color: #f5a801;
            box-shadow: unset;
        }

        label.already-account-lable span a {
            color: #cb8d08 !important;
            text-decoration: none;
        }

        @media only screen and (max-width: 375px) {
            div.login-main .login-banner h1 {
                top: 28% !important;
            }
        }

        @media only screen and (max-width: 414px) {
            div.login-main .login-banner h1 {
                top: 26%;
            }

            .mainDiv .login-main .login-banner form {
                padding-top: 300px !important;
            }
        }

        @media only screen and (max-width: 428px) {
            .login-main .login-banner h1 {
                top: 25%;
            }

            .login-main .login-banner {
                height: 640px;
                background-size: cover;
            }

            form {
                padding-top: 280px !important;
            }
        }

        @media only screen and (max-width: 540px) {
            .mainDiv .login-main .login-banner form {
                padding-top: 280px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .login-main .login-banner form {
                padding-top: 400px !important;
            }
        }

        @media only screen and (max-width: 820px) {
            .login-banner form {
                padding-top: 450px !important;
            }

            .navbar-nav {
                display: flex;
                flex-direction: column;
                padding-left: 0;
                margin-bottom: 16px !important;
                list-style: none;
            }

            nav ul.navbar-nav>*+* {
                margin-left: 0rem;
            }
        }

        @media only screen and (max-width: 1024px) {
            .login-main .login-banner {
                width: 100%;
                height: 100vh;
                background-size: cover;
            }

            form {
                padding-top: 500px !important;
            }
        }

        @media only screen and (min-width: 1600px) {
            .login-main .login-banner {
                height: 100vh;
                background-size: contain;
            }

            form {
                padding-top: 350px !important;
            }
        }

        @media only screen and (min-width: 1920px) {
            form {
                padding-top: 420px !important;
            }
        }

        @media only screen and (min-width: 2560px) {
            form {
                padding-top: 570px !important;
            }
        }
    </style>
    <div class="login-main">
        <div class="login-banner">
            <h1>LOG IN</h1>
            <form class="login-form" action="{{ route('web_login') }}" method="POST">
                @csrf
                <div class="mb-4 col-lg-4 col-md-6 col-sm-12 login-email-pt">
                    {{-- @if (Session::has('message'))
                        <p class="alert
                        {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('message') }}</p>
                        <script type="text/javascript">
                            setTimeout(function() {
                                location.reload()
                            }, 2000);
                        </script>
                    @endif --}}
                    @if (Session::get('Usernotfound'))
                        <?php
                        session()->forget('Usernotfound');
                        ?>
                        <div class="alert my-2 alert-danger">
                            <p>{{ 'Your email or password is incorrect' }}</p>
                        </div>
                        <script type="text/javascript">
                            setTimeout(function() {
                                location.reload()
                            }, 2000);
                        </script>
                    @endif
                    <input name="email" type="email" id="subPwd" class="form-control " id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="mb-4 col-lg-4 col-md-6 col-sm-12 login-password-pt">
                    <input name="password" id="ConfirmPwd" type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">

                    {{-- <input type="hidden" placeholder="Password" id="ConfirmPwd" name="type" value="User" class="form-control"> --}}

                </div>

                <div>
                    <label class="already-account-lable mb-3">
                        <span> If you don't have account? <a href="{{ route('resgister.index') }}">Click Here</a></span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary border-0">LOG IN</button>
                <!--<a href="forget.php">Forget Password</a>-->
                @if (Route::has('password.request'))
                    <div class="forget_password">
                        <a href="{{ route('password.request') }}">Forget Password?</a>
                    </div>
                @endif
            </form>
        </div>
    </div>
    <div class="login-content">
        {{-- <form class="login-form" action="{{route('web_login')}}" method="POST">
    @csrf
<div class="mb-4 col-lg-4 col-md-4 col-sm-12 login-email-pt">
<input name ="email" type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
</div>
<div class="mb-4 col-lg-4 col-md-4 col-sm-12 login-password-pt">
<input  name ="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>

<button type="submit" class="btn btn-primary border-0">LOGIN</button>
<!--<a href="forget.php">Forget Password</a>-->
@if (Route::has('password.request'))
                    <div class="forget_password">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                @endif
</form> --}}

    </div>
    <script type="text/javascript">
        $(".mailregister").click(function() {
            var Email = $("#subPwd").val();
            var Cnfpassword = $("#ConfirmPwd").val();
            if (!Email) {
                // alert('Type Your valid Email');
                toastr.error('Please Enter your valid email address');
                return false;
            }
            if (!Cnfpassword) {
                // alert('Type Your valid Email');
                toastr.error('Please Enter your Password');
                return false;
            }
        });
    </script>
@endsection
