<div class="wallet-headings">
    <h1 class="my-wallet-heading">MY WALLET</h1>
    <h4>Balance</h4>
    {{-- <h1>{{ Auth::user()->user_balance }} 200.00 coins</h1> --}}

    @if ($wallattotalamont == null)
    <h1>{{ $totalcoins ?? ''}} coins</h1>
    @elseif ($wallattotalamont)
    <h1>{{ $wallattotalamont ?? ''}} coins</h1>
    @else
    <h1>00.00 coins</h1>
    @endif
    <div class="summary-heading" style="font-size:80%">
        <span>Actual Coins: {{ $totalcoins}} | Free Credit Coins: @if ($userfreecreditamount)
            {{ $userfreecreditamount ?? ''}}
            @elseif ($userfreecreditamount == null)
            00.00
            @endif
        </span>
    </div>

    {{--
    @if ($totalcoins)
    <h1>{{ $totalcoins ?? ''}} coins</h1>
    @else
    <h1>00.00 coins</h1>
    @endif
    --}}

</div>

<h6 class=summary-heading>SUMMARY</h6>
<div class="summary-div">
    <!-- table of my wallet -->
    <div class="table">
        <div class="head">
            <h5>TRANSACTION NO</h5>
            {{-- <h5>TYPE</h5> --}}
            <h5>DATE</h5>
            <h5>COINS</h5>
            <h5>AMOUNT</h5>
            <h5>STATUS</h5>
        </div>

        @foreach ($withdraw_request as $wallet )
            <div class="first-row rows">
                <h6>{{$wallet->user_id}}</h6>
                {{-- <h6>DEPOSIT</h6> --}}
                <h6>{{$wallet->created_at->format('d/m/Y')}}</h6>
                <h6>{{$wallet->bit_coin_wallet}}</h6>
                <h6>$ {{$wallet->amount_request}} </h6>
                {{-- <h6>SUCCESS</h6> --}}
                <h6>@if ($wallet->status == 1)
                    Approved
                    @else
                    Pending
                    @endif </h6>
            </div>
        @endforeach

        {{-- <div class="first-row rows">
            <h6>0123-456-789</h6>
            <h6>DEPOSIT</h6>
            <h6>1/1/2021</h6>
            <h6>50.00</h6>
            <h6>SUCCESS</h6>
            </div>
            <div class="first-row rows">
                <h6>0123-456-789</h6>
                <h6>DEPOSIT</h6>
                <h6>1/1/2021</h6>
                <h6>50.00</h6>
                <h6>SUCCESS</h6>
            </div>
            <div class="first-row rows">
                <h6>0123-456-789</h6>
                <h6>DEPOSIT</h6>
                <h6>1/1/2021</h6>
                <h6>50.00</h6>
                <h6>SUCCESS</h6>
        </div> --}}

    </div>
    {{-- {{ $withdraw_request->links() }} --}}
</div>


