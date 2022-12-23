@extends('web.layouts.master')
@section('content')

<style>

    .disabledBtn{
        opacity:0.6;
        pointer-events:none;
        cursor:not-allowed;
    }

 @media only screen and (max-width: 768px) {
    .carat-pg .item-det {
    min-width: 250px !important;
}
.itemScroll {
    overflow-x: scroll;
}
.privacy-and-policy-main .privacy-and-policy-content h1 {
    padding-top: 20% !important;
}
button:hover {
    background-color: transparent !important;
    color: black !important;
}
 }
 @media only screen and (max-width: 428px) {
    .privacy-and-policy-main .privacy-and-policy-content h1 {
    padding-top: 30% !important;
}
 }
</style>

    <!-- main -->
    <!-- main -->
    <div class="privacy-and-policy-main">
        <div class="carat-pg container-xxl privacy-and-policy-content">
            <div class="container">
                <h1>Cart</h1>
                <form action="{{route('check-out')}}" method="POST">
                    @csrf
                    <div class="row mul-check">
                        <div class="itemScroll">
                        <div class="col-lg-12 d-flex justify-content-between mb1">
                            <div class="item-det">
                                Items
                            </div>
                            <div class="item-det">
                                Price
                            </div>
                            <div class="item-det">
                                Qty.
                            </div>
                            <div class="item-det">
                                Amount
                            </div>

                        </div>
                        @foreach ( $packages as $package )

                            <div class="col-lg-12  mb1 ih">
                                <div class="cart-card d-flex justify-content-between">
                                    <div class="item-det">
                                        <label for="chip-add{{$package->id}}" class="chip-add">
                                            <input type="checkbox" id="chip-add{{$package->id}}" hidden class='chip-check'>
                                            <img src="{{asset('img/package/'.$package->img)}}" alt="">
                                        </label>
                                    </div>
                                    <div class="item-det item-price">
                                        <span>$</span>
                                        <input type="text" value="{{$package->price}}"    class="dis-inp" name="data[price][]" readonly>


                                    </div>
                                    <div class="item-det">
                                        <input class="qty-inp" name="data[qty][]" type="number" min="1" placeholder="Enter Qty." readonly>
                                    </div>
                                    <div class="item-det item-amount">
                                        <span>$</span>
                                        <input readonly class="prod-amount">
                                        <input type="hidden" name="hidden_total_amount_name" value="" id="hidden_total_amount">

                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                        <input type="hidden" name="hidden_amount" value="" id="hidden_amount">
                        <div class="col-lg-12 d-flex justify-content-end mb1 mt1">
                            <label for="" class='amnt'>Amount: </label>
                            <label for="" class="totl-amnt"><span>$</span> <span class="tt-amnt">0</span></label>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end ">
                            <div class="tooltip-wrapper disabledBtn" data-title="Dieser Link führt zu Google">
                                <a href="{{route('check-out')}}">
                                    <button type="submit" class="check-out-btn " > <i class="fa fa-shopping-cart"></i> Check Out</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

    const loopu = () => {
         $('.chip-check').each((i,op)=>{
                if(op.checked){
                    $('.tooltip-wrapper').removeClass('disabledBtn');
                    return false
                }else{
                    $('.tooltip-wrapper').addClass('disabledBtn');
                }
            })
    }

        $(".chip-check").change((e) => {
            var clos_inp = e.target.parentNode.parentNode.parentNode.children[2].children[0];
            var checkedSubmit = false;
                console.log(e.currentTarget.checked)
            if (e.currentTarget.checked == true) {
                $(e.currentTarget.parentNode.parentNode.parentNode).find('.qty-inp').removeAttr('readonly')
                e.currentTarget.classList.add('bordo')
                $(clos_inp).val(1)
                $(clos_inp).trigger('change')
            } else {
                let opio = $('.qty-inp')
               $(e.currentTarget.parentNode.parentNode.parentNode).find('.qty-inp').attr('readonly',true)
                e.currentTarget.classList.remove('bordo')
            }

           loopu()


        })

        // $("[type='number']").keypress(function (evt) {
        //     evt.preventDefault();
        // });

        // product amount
        $('.qty-inp').change((e) => {
            var qty = e.target.value;
            var price = e.target.parentNode.parentNode.children[1].children[1].value;
            var amount = qty * price;
            var multi_amount = e.target.parentNode.parentNode.children[3].children[1];
            multi_amount.value = amount;
            // total amount
            var sum = 0;
            var y = $('.prod-amount')
            for (var i = 0; i < y.length; i++) {
                sum += Number(y[i].value)
            }
            $('.tt-amnt').text(sum);
            // console.log(amount);
            // console.log(sum);
            $(hidden_total_amount).val(amount);
            $(hidden_amount).val(sum);

        })


        // if checkbox is unchecked then reomve it's price
        $(".chip-check").on('change', (e) => {
            let new_prce = e.target.parentNode.parentNode.parentNode.children[1].children[1];
            var checkbox = $(".chip-check");


            for (var i = 0; i < checkbox.length; i++) {
                if (e.target.checked != true ) {
                    // new_prce.disabled = false;
                    let new_amnt = e.target.parentNode.parentNode.parentNode.children[3].children[1].value = null;
                    let new_qty = e.target.parentNode.parentNode.parentNode.children[2].children[0];
                    var sum = 0;
                    new_qty.value=null
                    var y = $('.prod-amount')

                    for (var i = 0; i < y.length; i++) {
                        sum += Number(y[i].value)
                    }

                    $('.tt-amnt').text(sum - new_amnt)
                } else {
                    console.log(new_prce.value)

                    return;
                }
            }
        })

    </script>

@endsection


