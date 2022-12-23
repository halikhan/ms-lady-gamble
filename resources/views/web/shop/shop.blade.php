@extends('web.layouts.master')
@section('content')
    <style>
        h1 {
            font-family: Gobold;
            color: #f5a801;
        }

        .counter {
            position: relative;
            width: 40%;
        }

        .counter input {
            width: 100%;
            background: none;
            border: 2px solid #f5a801;
            color: #f5a801;
            text-align: center;
            border-radius: 5px;

        }

        .cardPrice p {
            color: #f5a801;
            font-weight: 700;
        }

        .counter .add,
        .counter .min {
            position: absolute;
            top: 0;
            background: none;
            border: none;
            font-size: 16px;
            color: #f5a801;
        }

        .counter .add:hover,
        .counter .min:hover {
            background-color: none;
            background: none;
        }

        .counter .add {
            left: 0;
        }

        .counter .min {
            right: 0;
        }

        .cardItems .col-lg-3 {
            display: flex;
            justify-content: center;
        }

        .lowerSec {
            display: flex;
            justify-content: center;
        }

        .cardItems .col-lg-3 label {
            border: 1px solid #f5a801;
            padding: 1rem;
            border-radius: 10px;
            width: 100%;
        }

        .cardItems .col-lg-3 {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .select label {
            background: #f5a801;
        }

        .select .cardPrice p {
            color: #000;
        }

        .select .counter input {
            border: 2px solid #000;
            color: #000;
        }
        .select label{
            color:#000 !important;
        }
        .imgBox {
            width: 100%;
            height: 150px;
        }

        .imgBox img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 10px;
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            opacity: 1;
        }

        .cardItems .col-lg-12 {
            padding: 3rem;
        }

        .total {
            text-align: right;
            color: #f5a801;
            padding-right: 3rem;
        }

        .hide {
            display: none;
        }

        .butnDiv {
            width: 100%;
            text-align: right;
            padding: 0 3rem;
            overflow: hidden;
        }

        .check-out-btn {
            padding: 10px 50px;

        }

        .row {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .cards-shop-page .nav-link{
            color:#fff;
            margin-left:5px;
            margin-right:5px;
            min-width: 80px;
        }
        .cards-shop-page .nav-pills{
            padding: 0 10px;
        }
        .for-gift-name label{
            color: #eca201;
            margin-bottom: 12px;
            font-size: 18px;
            font-weight: 700;
            border: none !important;
            padding: 0 !important;
        }
        .for-gift-remain label{
            color: #eca201;
            margin-top: 12px;
            border: none !important;
            padding: 0 !important;
        }
        .for-center-card{
            display: flex;
            justify-content: center;
        }
    </style>
    <div class="cards-shop-page">
        <h1 class="text-center mt5 mb3">
            Shop
        </h1>



        {{-- cards tabs --}}
        <ul class="nav nav-pills mb-3 for-center-card" id="pills-tab" role="tablist">
            @if (auth()->user()->user_balance<10)
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-below-tab" data-bs-toggle="pill" data-bs-target="#pills-below" type="button"
                    role="tab" aria-controls="pills-below" aria-selected="false">Below $10</button>
            </li>
            @endif
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-10-tab" data-bs-toggle="pill" data-bs-target="#pills-10" type="button"
                    role="tab" aria-controls="pills-10" aria-selected="true">$10</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-25-tab" data-bs-toggle="pill" data-bs-target="#pills-25" type="button"
                    role="tab" aria-controls="pills-25" aria-selected="false">$25</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-100-tab" data-bs-toggle="pill" data-bs-target="#pills-100" type="button"
                    role="tab" aria-controls="pills-100" aria-selected="false">$100</button>
            </li>
        </ul>
        <form action="{{route('user-gift-purchase')}}">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-10" role="tabpanel" aria-labelledby="pills-10-tab">
                <div class="cardItems">
                    <div class="row">
                        @foreach ($gift_10 as $key => $value)
                        {{-- <input type="hidden" name="gift_id[]" value="{{$value->id}}"> --}}
                            <div class="col-lg-3 col-sm-6">
                                <div class="cardDivi w-100">
                                    <input type="checkbox" id="checkbox{{  $value->id }}"  value="{{$value->id}}" name="gift_10_check[]" hidden class="chip-check">

                                    <label for="checkbox{{ $value->id }}">
                                        <div class="giftCard">
                                            <div class="d-flex cardPrice justify-content-between">
                                                <p>$<span>{{ $value->price }}</span></p>
                                                <div class="counter">

                                                    <input type="number" min="0" name="gift_10_qty[]" value="0" disabled class="qty-inp" id="{{$value->id}}">

                                                </div>
                                            </div>
                                            <div class="for-gift-name">
                                                <label for="">{{$value->name}}</label>
                                            </div>
                                            <div class="lowerSec">
                                                <div class="imgBox">
                                                    <img src="https://media.istockphoto.com/photos/gift-card-with-tied-bow-picture-id1289735749?b=1&k=20&m=1289735749&s=170667a&w=0&h=FCM6qH1kpGFSTF14s_Oa9hmykzS-4MXThi062pGZzhQ=">
                                                </div>
                                            </div>
                                            <div class="for-gift-remain">
                                                <label for="">Remaining: <span class="remain_gift">{{count($value->remainGifts)}}</span></label>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-25" role="tabpanel" aria-labelledby="pills-25-tab">
                <div class="cardItems">
                    <div class="row">
                        @foreach ($gift_25 as $key => $value)
                        {{-- <input type="hidden" name="gift_id[]" value="{{$value->id}}"> --}}
                            <div class="col-lg-3 col-sm-6">
                                <div class="cardDivi w-100">
                                    <input type="checkbox" id="checkbox{{ $value->id }}" value="{{$value->id}}" name="gift_25_check[]" hidden class="chip-check">
                                    <label for="checkbox{{ $value->id }}">
                                        <div class="giftCard">
                                            <div class="d-flex cardPrice justify-content-between">
                                                <p>$<span>{{ $value->price }}</span></p>
                                                <div class="counter">

                                                    <input type="number" min="0" name="gift_25_qty[]" value="0" disabled class="qty-inp"  id="{{$value->id}}">

                                                </div>
                                            </div>
                                            <div class="for-gift-name">
                                                <label for="">{{$value->name}}</label>
                                            </div>
                                            <div class="lowerSec">
                                                <div class="imgBox">
                                                    <img src="https://media.istockphoto.com/photos/gift-card-with-tied-bow-picture-id1289735749?b=1&k=20&m=1289735749&s=170667a&w=0&h=FCM6qH1kpGFSTF14s_Oa9hmykzS-4MXThi062pGZzhQ=">
                                                </div>
                                            </div>
                                            <div class="for-gift-remain">
                                                <label for="">Remaining: <span>{{count($value->remainGifts)}}</span></label>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-100" role="tabpanel" aria-labelledby="pills-100-tab">
                <div class="cardItems">
                    <div class="row">
                        @foreach ($gift_100 as $key => $value)
                        {{-- <input type="hidden" name="gift_id[]" value="{{$value->id}}"> --}}
                            <div class="col-lg-3 col-sm-6">
                                <div class="cardDivi w-100">
                                    <input type="checkbox" id="checkbox{{ $value->id }}" value="{{$value->id}}" name="gift_100_check[]" hidden class="chip-check">
                                    <label for="checkbox{{ $value->id }}">
                                        <div class="giftCard">
                                            <div class="d-flex cardPrice justify-content-between">
                                                <p>$<span>{{ $value->price }}</span></p>
                                                <div class="counter">
                                                    <input type="number" name="gift_100_qty[]" min="1" value="0" disabled class="qty-inp" id="{{$value->id}}">

                                                </div>
                                            </div>
                                            <div class="for-gift-name">
                                                <p><label for="">{{$value->name}}</label></p>
                                            </div>
                                            <div class="lowerSec">
                                                <div class="imgBox">
                                                    <img src="https://media.istockphoto.com/photos/gift-card-with-tied-bow-picture-id1289735749?b=1&k=20&m=1289735749&s=170667a&w=0&h=FCM6qH1kpGFSTF14s_Oa9hmykzS-4MXThi062pGZzhQ=">
                                                </div>
                                            </div>
                                            <div class="for-gift-remain">
                                                <label for="">Remaining: <span>{{count($value->remainGifts)}}</span></label>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-below" role="tabpanel" aria-labelledby="pills-below-tab">
                <div class="cardItems">
                    <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <label for="cash" onclick="chatToggle()" class="pay-card d-flex flex-column  align-items-center justify-content-center">
                                    <div class="pay-img">
                                        <img src="{{asset('img/1x/cash.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="total">Total: $<span class="totalAmount">0</span> </h3>
                    </div>
                        <input type="hidden" value="0" class="totalAmountHidden" name="total_ammount">
                    <div class="col-lg-12">
                        <div class="butnDiv">
                        <button class="check-out-btn" disabled>Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        {{-- cards tabs ends here --}}
    </div>


    <script>
        var sumArr = 0
        var shopData = {!! json_encode($gifts) !!}
        var data = [];
        var sum;
        var totalAmount = 0;
        // console.log(shopData)
        $('input:checkbox').change(function(e) {
            var parentDiv = e.target.parentNode;
            if ($(this).is(":checked")) {
                $(parentDiv).addClass("select")
                //   console.log(e.target.parentNode)
            } else {
                $(parentDiv).removeClass("select")
            }
        });
        $('input:checkbox').change(function(e) {
            var parentInput = e.target.parentNode.childNodes[3].childNodes[1].childNodes[1].children[1].children[0];
            console.log(parentInput)
            if (!$(this).is(":checked")) {
                $(parentInput).attr("disabled", true);
            } else {
                $(parentInput).attr("disabled", false);
            }
        });
        $(".qty-inp").on('change keyup ', (e) => {
            if(data.length > 0){
                data.map((v,i)=>{
                    if(v.id == e.target.id){
                        data.splice(i,1)
                    }
                })
            }
           var priceValue = Number($(e.target.parentNode.previousElementSibling).find("span").text())
           data.push({priceValue, qty:e.target.value, id:e.target.id,sum:0 })
           pluser()

        //    owais code


        });

        $('.chip-check').change((e) => {
            $(".chip-check").each((i,v)=>{
            if(!$(v).is(':checked')){
                var inputCheck = $(e.target.parentNode).find('.giftCard input')
                data.map((t,i)=>{
                    // alert(t)
                    if(t.id === inputCheck[0].id){
                        t.qty = 0;
                        // $(v).val(0)
                    }
                })
            }
            pluser()
        })

        if(e.target.checked){
            $('.check-out-btn').prop('disabled', false)
            $(e.target.parentNode).find('.qty-inp').val(1);
            $(".qty-inp").trigger('change')

        }else{
            $('.check-out-btn').prop('disabled', true)
            $(e.target.parentNode).find('.qty-inp').val(0);
        }

        console.log(data)
        })
        function pluser() {
            sumArr = 0
            data.map((v,i)=>{
                v.sum = (Number(v.qty)*v.priceValue)
                sumArr += v.sum;
            })
            console.log(sumArr)
            $(".totalAmount").text(sumArr)
            $(".totalAmountHidden").val(sumArr)
        }
        @if (Session::has('qty-error'))
            swal("Quantity exceed!", "Please Check again", "error");
        @endif
        @if (Session::has('amount-error'))
            swal("Amount exceed!", "Please Check again", "error");
        @endif
        @if (Session::has('gift-purchase'))
            swal("Gift Coupon Purchase", "Gift Coupon Purchase Sucessfully", "success");
        @endif

    </script>
@endsection
