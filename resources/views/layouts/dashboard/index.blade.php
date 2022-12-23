@extends('web.layouts.master')
<style type="text/css">
    .first-row {
  /*  text-align: left !important;
padding-top: 10px !important;*/
}

</style>

@section('content')



<div class="dashboard-main">

    <div class="row g-0 dashboard-row">
        <div class="col-lg-3">
            <div class="sidenav">
                <i class="fas fa-align-left sidenav-open-button"></i>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item sidenav-nav-items">
                        <a class="nav-link active sidenav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">MY INFO</a>
                    </li>
                    <li class="nav-item sidenav-nav-items">
                        <a class="nav-link sidenav-link" href="#" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">MY WALLET</a>
                    </li>
                    <li class="nav-item sidenav-nav-items">
                        <a class="nav-link sidenav-link" href="#" id="redeem-tab" data-bs-toggle="tab" data-bs-target="#redeem" type="button" role="tab" aria-controls="redeem" aria-selected="true">REDEEM</a>
                    </li>

                    <li class="nav-item sidenav-nav-items">
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

                <!-- tab1 -->
                <div class="tab-pane fade show active info-main" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include('dashboard.tabs.my_info_tab')
                </div>

                <!-- tab2 -->
                <div class="tab-pane fade my-wallet-main" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @include('dashboard.tabs.my_wallet_tab')
                </div>
                <!-- tab3 -->

                <div class="tab-pane fade" id="redeem" role="tabpanel" aria-labelledby="redeem-tab">
                    @include('dashboard.tabs.redeem_tab')
                </div>
                <!-- tab4 -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
</div>
<script>
    @if (Session::has('sucess-data'))
    swal("Good job!", "You clicked the button!", "success");
    @endif

    @if (Session::has('payment-successful'))
    swal("Payment Sucessfull", "Payment Sucessfull done", "success");
    @endif

     @if (Session::has('withdraw_request'))
    swal("Payment Sucessfull", "Withdraw Request Has Been Sent", "success");
    @endif
@error('pin_code')
    swal("Payment Sucessfull", "{{$errors->first('pin_code')}}", "error");

@enderror
@error('pin_code_confirm')
    swal("Payment Sucessfull", "{{$errors->first('pin_code_confirm')}}", "error");

@enderror

</script>

@endsection
