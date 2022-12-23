@extends('web.layouts.master')
<style type="text/css">
    .first-row {
  /*  text-align: left !important;
padding-top: 10px !important;*/
}

</style>
<style>
    @media only screen and (min-width: 2560px) {
        .dashboard-main .sidenav {
           position: relative;
           width: 590px !important;
           margin-left: 20px;

        }
        .sidenav .sidenav-nav-items {
          margin: 3% 0;
       }
       .dashboard-main .dashboard-row {
    padding-top: 8%;
}
    }
    @media only screen and (min-width: 1920px) {
        .dashboard-main .sidenav {
           position: relative;
           width: 440px ;
           margin-left: 18px;
        }
        .sidenav .sidenav-nav-items {
          margin: 3% 0;
       }
       .dashboard-main .dashboard-row {
    padding-top: 8%;
}
    }
    @media only screen and (max-width: 1600px) {
        .dashboard-main .sidenav {
           position: relative;
           width: 355px ;
           margin-left: 18px;
        }
        .sidenav .sidenav-nav-items {
          margin: 3% 0;
       }
       .dashboard-main .dashboard-row {
    padding-top: 8%;
}
    }
    @media only screen and (max-width: 1440px) {
        .dashboard-main .sidenav {
           position: relative;
           width: 320px ;
           margin-left: 18px;
        }
        .sidenav .sidenav-nav-items {
          margin: 3% 0;
       }

    }
    @media only screen and (max-width: 1366px) {
        .dashboard-main .sidenav {
           position: relative;
           width: 300px ;
           margin-left: 18px;
        }
        .sidenav .sidenav-nav-items {
          margin: 3% 0;
       }

    }
    @media only screen and (max-width: 1024px) {
        .dashboard-main .sidenav {
           position: relative;
           width: 220px !important;
           margin-left: 18px;
        }
        .sidenav .sidenav-nav-items {
          margin: 3% 0;
       }
       .sidenav .sidenav-open-button {
    display: none !important;
    font-size: 3rem;
}
.dashboard-main .sidenav {
    top: 28%;
}
.dashboard-main .my-info-section {
    padding-top: 5%;
}

.redeem-div {
    padding-top: 0px !important;
}
.sidenav-nav-items a {
    font-size: 22px !important;
}

    }

    @media only screen and (max-width: 768px) {
        .sidenav .sidenav-open-button {
    display: block !important;
    font-size: 3rem;
}
.dashboard-main .sidenav {
    top: 55%;
}
.tab-content .info-main {
    padding: 6%;
}
.redeem-div {
    padding-top: 50px !important;
}
.coins-input input {
    width: 100%;
}
.sidenav-nav-items a {
    font-size: 18px !important;
}
.dashboard-main .sidenav {
           position: fixed;
           width: 235px ;
           margin-left: 0px;
        }
        .sidenav {
    position: fixed;
    left: -237px;
    top: 45%;
}
.sideBarShow {
    left: 0px;
}
button:hover {
    background-color: transparent !important;
    color: black !important;
}
    }
    @media only screen and (max-width: 820px) {
div.sidenav .sidenav-nav-items {
    margin: 6% 0 ;
}
nav ul.navbar-nav>*+* {
    margin-left: 0rem !important;

}
.navBtnss {
    /* margin: 10px 0px; */
    margin-bottom: 12px;
}

    }

@media only screen and (max-width: 912px) {
.my-info-section {
    width: 90% !important;
    margin: auto;
}
.sidenav-nav-items a {
    font-size: 16px !important;
}
.dashboard-main .sidenav {
    top: 55%;
}
.coins-input input {
    border: 1px solid #cb8d08;
    background-color: transparent;
    width: 90%;
}
}
@media only screen and (max-width: 1280px){
.dashboard-main .sidenav {
    width: 280px ;
}
}
</style>


@section('content')



<div class="dashboard-main">
    <div class="row g-0 dashboard-row">
        <div class="col-lg-3">
            <div class="sidenav sideNavBar">
                <i class="fas fa-align-left sidenav-open-button sidenav-open-btn"></i>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item sidenav-nav-items sideBarShow">
                        <a class="nav-link active sidenav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">MY INFO</a>
                    </li>
                    <li class="nav-item sidenav-nav-items">
                        <a class="nav-link sidenav-link" href="#" id="wallet-tab" data-bs-toggle="tab" data-bs-target="#wallet" type="button" role="tab" aria-controls="wallet" aria-selected="true">MY WALLET</a>
                    </li>
                    <li class="nav-item sidenav-nav-items">
                        <a class="nav-link sidenav-link" href="#" id="deposit-tab" data-bs-toggle="tab" data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit" aria-selected="true">DEPOSIT</a>
                    </li>
                    <li class="nav-item sidenav-nav-items sideBarShow">
                        <a class="nav-link  sidenav-link" href="#" id="redeem-tab" data-bs-toggle="tab" data-bs-target="#redeem" type="button" role="tab" aria-controls="redeem" aria-selected="true">REDEEM</a>
                    </li>

                    <li class="nav-item sidenav-nav-items sideBarShow">
                        <a class="nav-link  sidenav-link" href="#" id="changepassword-tab" data-bs-toggle="tab" data-bs-target="#changepassword" type="button" role="tab" aria-controls="changepassword" aria-selected="true">CHANGE PASSWORD</a>
                    </li>

                    <li class="nav-item sidenav-nav-items sideBarShow">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <!--<button type="submit" class="nav-link btn" href="{{route('web_login')}}">Sign Out</button>-->
                        <a class="nav-link sidenav-link"href="{{route('web_login')}}" tabindex="-1" aria-disabled="true"> <button type="submit" style="background:none;color:#fff">LOGOUT</button></a>
                         </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 my-info-section">
            <div class="tab-content" id="myTabContent">

                        <!-- tab4 -->
                        <div class="tab-pane fade" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
                            @include('dashboard.tabs.change_password')
                        </div>


                <!-- tab1 -->
                <div class="tab-pane fade show active info-main" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include('dashboard.tabs.my_info_tab')
                </div>

                <!-- tab2 -->
                <div class="tab-pane fade my-wallet-main" id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
                    @include('dashboard.tabs.my_wallet_tab')
                </div>
                <!-- tab3 -->

                <div class="tab-pane fade my-deposit-main" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                    @include('dashboard.tabs.deposit')
                </div>

                <div class="tab-pane fade" id="redeem" role="tabpanel" aria-labelledby="redeem-tab">
                    @include('dashboard.tabs.redeem_tab')
                </div>


            </div>
        </div>
</div>
</div>
<script>
    @if (Session::has('sucess-data'))
    swal("Profile Updated", "Profile Updated Successfully!", "success");
    @endif

    @if (Session::has('payment-successful'))
    swal("Payment Sucessfull", "Payment Sucessfull done", "success");
    @endif

     @if (Session::has('withdraw_request'))
    swal("Request sent", "Redeem Request Has Been Sent", "success");
    @endif
    @if (Session::has('deposit_request'))
    swal("Request sent", "Deposit Request Has Been Sent", "success");
    @endif
     @if (Session::has('address_check'))
    swal( "Error","Kindly Add  Bitcoin Wallet Address in info tab", "error");
    @endif

    @if (Session::has('update-password'))
    swal( "Password Updated","Your Password Has Been Updated", "success");
    @endif

        // @error('pin_code')
        //     swal("Payment Sucessfull", "{{$errors->first('pin_code')}}", "error");

        // @enderror
        // @error('pin_code_confirm')
        //     swal("Payment Sucessfull", "{{$errors->first('pin_code_confirm')}}", "error");

        // @enderror

</script>

@endsection


