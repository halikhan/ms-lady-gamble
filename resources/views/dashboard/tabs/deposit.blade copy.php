<style>
    .formSelectLetter {
        width: 100%;
        border: none;
        outline: none;
        color: gray;
        border: 1px solid #cb8d08;
        background-color: transparent;
        padding: 20px 8px;
        font-size: 14px;
        font-family: poppinmedium;
    }

    option {
        background-color: black;
        color: #ffffff;
    }
</style>
<style>
    #depositpageloader {
        background: rgba(255, 255, 255, 0.8);
        display: none;
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
        top: 0;
        left: 0;
    }

    #depositpageloader img {
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .error {
        color: red;
    }
</style>

<div id="depositpageloader">
    <img src="{{ asset('img/1x/Preloader.gif') }}" alt="processing..." />
</div>
<?php
$allgametype = App\Models\Gametype::all();
// $allDepositData = App\Models\Deposit::all();
// dd($allDepositData);
?>

    <div class="redeem-div">

        <div class="redeem-head-subhead">
            <h1 class="redeem-h1 redeem-headings">DEPOSIT</h1>
        </div>
        <div class="coins-input">
            <form action="{{ route('deposit.store') }}" id="depositlodaerForm" method="POST" onsubmit="return pinvalidation()">
                @csrf
            <div class="row">
                <div class="coins1 col-lg-4">
                    <h6 class="redeem-headings">GAMES</h6>
                    <select class="formSelectLetter" name="game_type" aria-label="Default select example" required>
                        <option selected disabled value="">ALL THE GAMES</option>
                        @foreach ($allgametype as $game)
                            <option value="{{ $game->id }}">{{ $game->game_type }}</option>
                        @endforeach
                        {{-- <option value="1">RIVERSWEEPS</option>
                        <option value="2">GOLDEN DRAGON</option> --}}
                    </select>
                </div>
            </div>
        <br />
        <div class="row">
            <div class="coins1 col-lg-4">
                <h6 class="redeem-headings">Deposit Amount Box</h6>
                <input class="coins-input2 col-lg-12" name="deposit_amount_box" type="number" id="#"
                    name="" placeholder="Deposit Amount Box" required>
            </div>
            <div class="coins2 col-lg-4">
                <h6 class="redeem-headings">Pin Code Box</h6>
                <input class="coins-input2 col-lg-12" name="pin_code_box" type="number" name=""
                    placeholder="Pin Code Box" id="#" onkeyup='check();' required>
            </div>
            <div class="coins3 col-lg-4">
                <div class="redeem">
                    <button class="info-button" type="submit">DEPOSIT NOW</button>
                </div>
            </div>
        </div>
    </form>
        {{-- <div class="col-lg-12">
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
                                <h5>AMOUNT</h5>
                                <h5>STATUS</h5>
                            </div>
                            @foreach ($allDepositData as $data)
                                <div class="first-row rows">
                                    <h6>{{ $data->user_id }}</h6>
                                    <h6>{{ $data->pin_code_box }} </h6>
                                    <h6>{{ $data->created_at->format('d/m/Y') }}</h6>
                                    <h6>$ {{ $data->deposit_amount_box }}</h6>
                                    <h6>
                                        @if ($data->status == 1)
                                            Approved
                                        @else
                                            Pending
                                        @endif
                                    </h6>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="completed" role="tabpanel" aria-labelledby="completed-tab">
                    <h6 class=summary-heading>SUMMARY</h6>
                    <div class="summary-div">
                        <div class="table">
                            <div class="head">
                                <h5>TRANSACTION NO</h5>
                                <h5>Pin Code</h5>
                                <h5>DATE</h5>
                                <h5>AMOUNT</h5>
                                <h5>STATUS</h5>
                            </div>
                            @foreach ($allDepositData as $data)
                                @if ($data->status == 1)
                                <div class="first-row rows">
                                    <h6>{{ $data->user_id }}</h6>
                                    <h6> {{ $data->pin_code_box }} </h6>
                                    <h6>{{ $data->created_at->format('d/m/Y') }}</h6>
                                    <h6>$ {{ $data->deposit_amount_box }}</h6>
                                        <h6>
                                            Approved
                                        </h6>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
        </div> --}}
    </div>



<script type="text/javascript">
    $("#depositlodaerForm").on('submit', function() {
        $("#depositpageloader").fadeIn();
    });
</script>
