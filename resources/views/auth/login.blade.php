<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="National Specialist Database">
    <meta name="robots" content="index, follow" />
    <title>{{env('APP_NAME') . ' | Login'}}</title>
    <link rel="shortcut icon" href="{{get_favicon_logo()}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>

    .form-control:focus {
    border-color: unset;
    outline: 0;
    box-shadow: unset;
}
    .loginAdmin{
        height: 100vh;
        overflow: hidden;
        width: 100%;
        position: relative;
        background: url("{{asset('img/banners/adminBg.png')}}");
        background-size:cover;
        background-position: top;
    }
    .loginAdmin::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(20 20 20 / 70%);
        height: 100%;
        width: 100%;
    }
    .loginAdmin::after{
        content:'';
        background: url('{{asset("img/banners/adminBackground.png")}}');
        position: absolute;
        height: 100%;
        width: 50%;
        top: 54%;
        left: 70%;
        transform: translate(-50%, -50%);
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }
    /* } */
    .form-control{
        outline: none;
        box-shadow: none
    }
    .form-control,
    button{
        margin-top: 2rem
    }
    input{
        background-color: #0000005c!important;
        border-color: #f5a801 !important;
        color: white !important;
        padding: 20px !important;
        border-radius: 8px !important;
        height: auto !important;
        font-family: poppins !important;
    }
    input::placeholder {
        font-family: poppins !important;
    }
    button.logInBtn{
        background-color: #f5a801;
        color: black;
        padding: 10px 45px;
        font-family: poppins;
        border: none;
        color: #fff;
        border-radius: 8px
    }

    h1{
        color: #fff;
        font-family: Gobold;
        text-transform: uppercase;
        margin-bottom: 3rem;
    }
    .col-lg-4{
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translate(-50%, -50%);
    }
    @media only screen and (max-width:1024px){
        .col-lg-4{
            top: 50%;
            left: 50%;
            z-index: 2;
            width: 70%;
        }
        .loginAdmin::after{
            top: 50%;
            left: 50%;
            z-index: 0;
            width: 90%;

        }
        .loginAdmin::before{
            z-index: 1;
            background-color: #000000c7
        }
    }
    @media only screen and (max-width:600px){
        .col-lg-4{
            width: 95%;
        }
    }
    @media only screen and (max-width:820px){
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



</style>
<body >


    <div class="loginAdmin">


        <div class="col-lg-4 text-center">
            <h1>Admin Panel</h1>
            @if (Session::get('Usernotfound'))
            <?php
            session()->forget('Usernotfound');
            ?>
            <div class="alert my-2 alert-danger">
                <p>{{ 'Your email or password is incorrect' }}</p>
            </div>
            <script type="text/javascript">
                setTimeout(function () {
                        location.reload()
                    }, 2000);
            </script>
            @endif
                {{-- <form method="POST" action="{{ route('login') }}"> --}}
                    <form method="POST" action="{{ route('admin_login') }}">
                @csrf
                <input type="text" placeholder="Email" id="subPwd" name="email" class=" form-control">
                <input type="password" placeholder="Password" id="ConfirmPwd" name="password" class="form-control">
                {{-- <input type="hidden" placeholder="Password" id="ConfirmPwd" name="type" value="Admin" class="form-control"> --}}
                @if (Route::has('password.request'))
                    {{-- <div>
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div> --}}
                @endif
                <button type="submit" class="logInBtn mailregister">Login</button>
            </form>
        </div>
    </div>




    <script type="text/javascript">
        $(".mailregister").click(function(){
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
</body>
</html>
