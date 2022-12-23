<style type="text/css">
    .first-row {

        padding-top: 10px !important;

    }

    input::placeholder {
        color: #808080 !important;
    }
</style>
<style>
    @media only screen and (min-width: 2560px) {

        .coins2,
        .coins3 {
            margin-left: 0px;
        }

        .coins-input {
            margin-right: 20px;
            padding-top: 30px;
        }

        .coins-input input {
            padding: 30px;
        }
    }

    @media only screen and (min-width: 1920px) {

        .coins2,
        .coins3 {
            margin-left: 0px;
        }

        .coins-input {
            margin-right: 20px;
            padding-top: 30px;
        }

        .coins-input input {
            padding: 30px;
        }
    }

    @media only screen and (max-width: 1600px) {

        .coins2,
        .coins3 {
            margin-left: 0px;
        }

        .coins-input {
            margin-right: 20px;
            padding-top: 30px;
        }

        .coins-input input {
            padding: 30px;
        }
    }

    @media only screen and (max-width: 768px) {

        .coins-input .coins1,
        .coins2,
        .coins3 {
            margin: 40px 0px;
        }
    }

    @media only screen and (max-width: 428px) {
        .sidenav .sidenav-open-button {
            font-size: 30px;
            position: absolute;
            top: 46.7%;
            right: -22%;
        }

        .info-h1 {
            padding-top: 60px;
        }

        .redeem-div {
            margin-top: 40px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .coins-input .coins1,
        .coins2,
        .coins3 {
            margin: 30px 0px;
        }
    }

    .for-font-color {
        color: #fff !important;
    }

    .for-font-color a {
        color: #fff !important;

    }
</style>

<style>
    #redeempageloader {
        background: rgba(255, 255, 255, 0.8);
        display: none;
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
        top: 0;
        left: 0;
    }
    #redeempageloader img {
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    .error {
        color: red;
    }
</style>


<div class="redeem-div">
    <div id="redeempageloader">
        <img src="{{ asset('img/1x/Preloader.gif') }}" alt="processing..." />
    </div>
    <div class="redeem-head-subhead">
        <h1 class="redeem-h1 redeem-headings">REDEEM REQUESTS </h1>
        <p class="redeem-subhead">BTC rate will apply as per the date and time of request approval.</p>
    </div>

    <div class="coins-input">
        <form action="{{ route('withdraw_request') }}" id="Redeem_Form" method="POST" onsubmit="return pinvalidation()">
            @csrf
            <div class="row">
                <div class="coins1 col-lg-6">
                    <h6 class="redeem-headings">COINS</h6>
                    <input class="coins-input2 col-lg-12" name="bit_coin_wallet" type="number" id="#"
                        name="" placeholder="Coins" required>

                </div>

                <div class="coins2 col-lg-6">
                    <h6 class="redeem-headings">IN USD</h6>
                    <input class="coins-input2 col-lg-12" name="amount_requested" type="number" name=""
                        placeholder="IN USD" id="#" onkeyup='check();' required>

                </div>
            </div>
            <br />
            <div class="row">
                <div class="coins2 col-lg-6">
                    <h6 class="redeem-headings">Pin Code</h6>
                    <input class="coins-input2 col-lg-12" name="pin_code" type="number" name=""
                        placeholder="Pin Code" id="#" required>
                </div>
                <div class="coins2 col-lg-6">
                    <div class="redeem">
                        <button class="info-button" type="submit">REDEEM NOW</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-lg-12">
            <div class="currentCompleted">
                <ul class="nav nav-pills justify-content-center gap">
                    <li class="nav-item sideNavItems currentItem">
                        <a class="nav-link active sidenav-link currentPadding" id="current-tab" data-bs-toggle="tab"
                            data-bs-target="#current" type="button" role="tab" aria-controls="current"
                            aria-selected="true">CURRENT</a>
                    </li>
                    <li class="nav-item sideNavItems currentItem">
                        <a class="nav-link sidenav-link currentPadding" href="#" id="completed-tab"
                            data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab"
                            aria-controls="completed" aria-selected="true">COMPLETED</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 ">
            <div class="tab-content">
                <div class="tab-pane fade show active " id="current" role="tabpanel" aria-labelledby="current-tab">
                    <h6 class=summary-heading>SUMMARY</h6>
                    <div class="summary-div">
                        <div class="table">
                            <div class="head">
                                <h5>TRANSACTION NO</h5>
                                <h5>Pin Code</h5>
                                <h5>DATE</h5>
                                <h5>COINS</h5>
                                <h5>AMOUNT</h5>
                                <h5>STATUS</h5>
                            </div>
                            @foreach ($withdraw_request as $wallet)
                            @if ($wallet->status != 1)
                                <div class="first-row rows">
                                    <h6>{{ $wallet->user_id }}</h6>
                                    {{-- <h6>DEPOSIT</h6> --}}
                                    <h6>{{ $wallet->pin_code }}</h6>
                                    <h6>{{ $wallet->created_at->format('d/m/Y') }}</h6>
                                    <h6>{{ $wallet->bit_coin_wallet }}</h6>
                                    <h6>$ {{ $wallet->amount_request }} </h6>
                                    {{-- <h6>SUCCESS</h6> --}}
                                    <h6>
                                        @if ($wallet->status == 1)
                                            Approved
                                        @else
                                            Pending
                                        @endif
                                    </h6>
                                </div>
                                @endif
                            @endforeach

                        </div>

                    </div>
                    {{-- {{ $withdraw_request->links() }} --}}
                </div>

                <div class="tab-pane fade " id="completed" role="tabpanel" aria-labelledby="completed-tab">
                    <h6 class=summary-heading>SUMMARY</h6>
                    <div class="summary-div">
                        <div class="table">
                            <div class="head">
                                <h5>TRANSACTION NO</h5>
                                <h5>Pin Code</h5>

                                {{-- <h5>DATE</h5> --}}
                                <h5>DATE</h5>
                                <h5>COINS</h5>
                                <h5>AMOUNT</h5>
                                <h5>STATUS</h5>
                            </div>
                            @foreach ($withdraw_request as $wallet)
                                @if ($wallet->status == 1)
                                    <div class="first-row rows">
                                        <h6>{{ $wallet->user_id }}</h6>
                                        <h6>{{ $wallet->pin_code }}</h6>
                                        <h6>{{ $wallet->created_at->format('d/m/Y') }}</h6>
                                        <h6>{{ $wallet->bit_coin_wallet }}</h6>
                                        <h6>$ {{ $wallet->amount_request }} </h6>
                                        <h6>
                                            Approved
                                            {{-- @if ($wallet->status == 1)
                                            Approved
                                            @else
                                                Pending
                                            @endif --}}
                                        </h6>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>
                    {{-- {{ $withdraw_request->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var check = function() {
        if (document.getElementById('pin_code').value ==
            document.getElementById('pin_code_confirm').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
    }

    function pinvalidation() {

        if (document.getElementById('pin_code').value ==
            document.getElementById('pin_code_confirm').value) {
            return true;
        } else {
            return false;
        }

    }
</script>

<script type="text/javascript">
    document.getElementById('phonebride').addEventListener('input', function(e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
    document.getElementById('phone13').addEventListener('input', function(e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
</script>
<script type="text/javascript">
    $("#Redeem_Form").on('submit', function() {
        $("#redeempageloader").fadeIn();
    });
</script>
