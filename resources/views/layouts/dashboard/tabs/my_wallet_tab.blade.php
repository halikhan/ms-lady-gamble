<div class="wallet-headings">
    <h1 class="my-wallet-heading">MY WALLET</h1>
    <h4>Balance</h4>
    <h1>{{$amount}} Amount</h1>
</div>
<h6 class=summary-heading>SUMMARY</h6>
<div class="summary-div">
    <!-- table of my wallet -->
    <div class="table">
        <div class="head">
            <h5>TRANSACTION NO</h5>
            <h5>TYPE</h5>
            <h5>DATE</h5>
            <h5>AMOUNT</h5>
            <h5>STATUS</h5>
        </div>
        @foreach ($wallets as $wallet )
        <div class="first-row rows">
            <h6>{{$wallet->transaction_id}}</h6>
            <h6>DEPOSIT</h6>
            <h6>{{$wallet->created_at->format('d/m/Y')}}</h6>
            <h6>{{$wallet->amount}}</h6>
            <h6>SUCCESS</h6>
        </div>
        @endforeach
    </div>
</div>
