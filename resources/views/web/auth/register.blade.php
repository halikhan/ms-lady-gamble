@extends('web.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <style>.form-control:focus {
            box-shadow: unset;
        }

        .already-account-lable a:hover {
            color: #cb8d08;
        }

        .signup-form .mb2 {
            margin-bottom: 1.6rem !important;
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

        .signup-form {
            padding: 0px 25%;
            margin-top: 0rem;
            padding-top: 210px;
        }

        .login-main .login-banner h1 {

            top: 12.5%;
        }

        .login-main .login-banner {
            width: 100%;
            height: 1180px;
            background-size: contain;
            background-position: top;
            background-repeat: no-repeat;
            position: relative;
        }

        .personalInformation h2 {
            font-family: Gobold;
            font-size: 3rem;
            color: #f5a801;
            margin-bottom: 30px
        }

        .form-check-label {
            color: #808080;
            font-family: poppinlight;
            display: block;
            padding-left: 16px;
        }

        .form-check-label a {
            color: #f5a801;
            text-decoration: none;
        }

        input.form-check-input {
            padding: 10px;
        }

        footer {
            margin-top: 0px !important;
        }

        @media only screen and (max-width: 428px) {
            .login-main .login-banner h1 {
                top: 20.5%;
            }

            .signup-form {
                padding: 0px 20%;
                margin-top: 0rem;
                padding-top: 200px;
            }

            .login-main .login-banner {
                width: 100%;
                height: 700px;
                background-size: cover;
                background-position: top;
                background-repeat: no-repeat;
                position: relative;
            }

            .already-account-lable {
                font-size: 12px;
            }

            footer.footerBottom.cstm-footer-margin {
                margin-top: 64rem !important;
            }
        }

        @media only screen and (max-width: 540px) {
            .footerBottom.cstm-footer-margin {
                margin-top: 32rem !important;
            }
        }

        @media only screen and (max-width: 820px) {
            .signup-form {
                padding: 0px 10%;
                margin-top: 0rem;
                padding-top: 210px;
            }

            .login-main .login-banner h1 {
                font-size: 2rem;
            }

            .personalInformation h2 {
                font-size: 2rem;
            }

        }
        </style>
        <style>
        #pageloader {
              background:rgb(129 129 129 / 17%);
              display: none;
              height: 100%;
              position: fixed;
              width: 100%;
              z-index: 9999;
              top: 0;
              left: 0;
          }

          #pageloader img {
              left: 50%;
              /* margin-left: -32px;
                      margin-top: -32px; */
              position: absolute;
              height: 50%;
              width: 50%;
              top: 50%;
              transform: translate(-50%, -50%);
              filter: grayscale(1);
          }
            .error{
                color: red;
            }

        </style>
         <div id="pageloader">
            <img src="{{asset('img/1x/Preloader.gif') }}" alt="processing..." />
        </div>
    <div class="login-main">
        <!-- <div class="signup-banner">
          <h1>SIGN UP</h1>
        </div> -->
        {{-- <script>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        </script> --}}
        <div class="login-banner">

            <form class="signup-form" id="UserRegiterForm" action="{{ route('user-resgister') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Account Information</h1>
                    </div>
                    @csrf

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control" id="fname" name="first_name" aria-describedby="emailHelp"
                            placeholder="First Name">
                        {{-- @error('first_name')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control" id="lname" name="last_name" aria-describedby="emailHelp"
                            placeholder="Last Name" >
                        {{-- @error('last_name')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control "id="uname" name="Username" aria-describedby="emailHelp"
                            placeholder="Username" >
                        {{-- @error('Username')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="email" class="form-control "id="uemail" name="email" aria-describedby="emailHelp"
                            placeholder="Email" >
                        {{-- @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="password" class="form-control"id="pwd" name="password" placeholder="Password" >
                        {{-- @error('firstname')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="password" class="form-control"id="cpwd"  name="password_confirmation"
                            placeholder="Confirm Password" >
                        {{-- @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center personalInformation">
                        <h2>Personal Information</h2>
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control" id="uaddress" name="address" aria-describedby="emailHelp"
                            placeholder="Address" >
                        {{-- @error('address')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control "id="ucity" name="city" aria-describedby="emailHelp"
                            placeholder="City" >
                        {{-- @error('city')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control "id="uzip" name="zip_code" aria-describedby="emailHelp"
                            placeholder="Zip" >
                        {{-- @error('zip_code')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control "id="ustate" name="state" aria-describedby="emailHelp"
                            placeholder="State" >
                        {{-- @error('state')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="text" class="form-control "id="ucountry" name="country" aria-describedby="emailHelp"
                            placeholder="Country" >
                        {{-- @error('country')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input class="form-control "id="uphone" name="contact_no"
                            placeholder="Phone Number" maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" type="tel">
                        {{-- @error('contact_no')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="mb2 col-lg-6 col-md-6">
                        <input type="date" class="form-control "id="udate" name="D_O_Birth" aria-describedby="emailHelp"
                            placeholder="Date of Birth" >
                        {{-- @error('D_O_Birth')
                            <div class="error">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="col-lg-12">
                        <div class="letterRadio">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="ucheck" name="checktype"
                                    value="1" required>
                                <label class="form-check-label">
                                    I am at least 18 years old and have read the <a href="{{ route('condition') }}">Terms
                                        & Conditions</a>, <a href="{{ route('policy') }}">Privacy Policy</a>, and <a
                                        href="{{ route('ada-compliance') }}">ADA Compliance</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-4">
                    <div>
                        <label class="already-account-lable">
                            <span> Already have an account? <a href="{{ route('web_login') }}">Click Here</a></span>
                        </label>
                    </div>
                    <button type="submit" class="subscribeButton mailregister">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('uphone').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(".mailregister").click(function(){
            var firstname = $("#fname").val();
            var lastname = $("#lname").val();
            var username = $("#uname").val();
            var useremail = $("#uemail").val();
            var password = $("#pwd").val();
            var cpassword = $("#cpwd").val();
            var useraddress = $("#uaddress").val();
            var usercity = $("#ucity").val();
            var userzip = $("#uzip").val();
            var userstate = $("#ustate").val();
            var usercontact = $("#uphone").val();
            var userdate = $("#udate").val();
            var usercheck = $("#ucheck").val();
            var usercountry = $("#ucountry").val();

            if (!firstname) {
                // alert('Type Your valid Email');
                toastr.error('Please enter first name');
                return false;
            }
            if (!lastname) {
                // alert('Type Your valid Email');
                toastr.error('Please enter last name');
                return false;
            }
            if (!username) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user name');
                return false;
            }
            if (!useremail) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user email');
                return false;
            }
            if (!password) {
                // alert('Type Your valid Email');
                toastr.error('Please enter password');
                return false;
            }
            if (!cpassword) {
                // alert('Type Your valid Email');
                toastr.error('Please enter confirm password');
                return false;
            }
            if (!useraddress) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user address');
                return false;
            }
            if (!usercity) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user city');
                return false;
            }
            if (!userzip) {
                // alert('Type Your valid Email');
                toastr.error('Please enter zip');
                return false;
            }
            if (!userstate) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user state');
                return false;
            }
            if (!usercountry) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user country');
                return false;
            }

            if (!usercontact) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user contact');
                return false;
            }
            if (!userdate) {
                // alert('Type Your valid Email');
                toastr.error('Please select date');
                return false;
            }
            if (!usercheck) {
                // alert('Type Your valid Email');
                toastr.error('Please ensure you are under 18 or read terms & conditions');
                return false;
            }

        });
        </script>
    <script type="text/javascript">
        $("#UserRegiterForm").on('submit',function() {
        $("#pageloader").fadeIn();
        });
    </script>



@endsection

