<style>
    .cash-img{
        width: 100px;
    }
    .cash-img img{
        width: 100%;
    }
    .cash-content{
        padding-right: 2rem;
    }
    @media screen and (max-width: 1024px) {
    .privacy-and-policy-main .privacy-and-policy-content h1 {
    padding-top: 20% !important;
}
    @media screen and (max-width: 428px) {
    .privacy-and-policy-main .privacy-and-policy-content h1 {
    padding-top: 40% !important;
}
</style>
@extends('web.layouts.master')
@section('content')
<div class="privacy-and-policy-main">
    <div class="carat-pg container-xxl privacy-and-policy-content">
        <div class="container">
            <h1>payment</h1>
            <div class="row">
                <div class="col-sm-4">
                    <input type="radio" data-bs-toggle="modal" data-bs-target="#add-card" id="card" name="pay-mthod" value="card" class="rad-btn">
                    <label for="card" class="pay-card d-flex flex-column align-items-center  justify-content-center">
                        <div class="pay-img">
                            <img src="{{asset('img/1x/card.png')}}" alt="">
                        </div>
                        <h3>Card</h3>
                    </label>
                </div>
                {{-- <div class="col-sm-4">
                    <input type="radio" id="cash"   data-bs-toggle="modal" data-bs-target="#add-cash" name="pay-mthod" value="cash" class="rad-btn" >
                    <label for="cash" class="pay-card d-flex flex-column  align-items-center justify-content-center">
                        <div class="pay-img">
                            <img src="{{asset('img/1x/cash.png')}}" alt="">

                        </div>
                        <h3>Cash</h3>
                    </label>
                </div> --}}
                {{-- <div class="col-sm-4">
                    <input type="radio" id="bitpay" name="pay-mthod" value="bitpay" class="rad-btn">
                    <label for="bitpay" class="pay-card d-flex flex-column align-items-center  justify-content-center">
                        <div class="pay-img">
                            <img src="{{asset('img/1x/bitpay.png')}}" alt="">
                        </div>
                        <h3>Bitcoin</h3>
                    </label>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add-cash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="">

            <div class="modal-header">
                <h5>Cash App </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <div class="row">
                        <div class="col-lg-6">
                           <div class="d-flex justify-content-center align-items-center">
                            <div class="cash-content">click ></div>
                            <div class="cash-img">
                                <a href="https://cash.app/$KingofPalmsGaming/{{$sessiomAmount}}" target="_blank">
                                <img src="{{asset('img/1x/cashapp.png')}}" alt="">
                                </a>
                            </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="cash-content">or scan ></div>
                                <div class="cash-img">
                                    {!! $QrCodeHTML!!}
                                </div>
                               </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                             <div class="cash-content">click ></div>
                             <div class="cash-img">
                                <a href="https://cash.app/$KingofPalmsGaming2/{{$sessiomAmount}}" target="_blank">
                                 <img src="{{asset('img/1x/cashapp.png')}}" alt="">
                                </a>
                             </div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="cash-content">or scan ></div>
                                <div class="cash-img">
                                    {!! $QrCodeHTML2!!}
                                </div>
                               </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                             <div class="cash-content">click ></div>
                             <div class="cash-img">
                                <a href="https://cash.app/$KingofPalmsGaming3/{{$sessiomAmount}}" target="_blank">
                                 <img src="{{asset('img/1x/cashapp.png')}}" alt="">
                                </a>
                             </div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="cash-content">or scan ></div>
                                <div class="cash-img">
                                    {!! $QrCodeHTML3!!}
                                </div>
                               </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                             <div class="cash-content">click ></div>
                             <div class="cash-img">
                                <a href="https://cash.app/$KingofPalmsGaming4/{{$sessiomAmount}}" target="_blank">
                                 <img src="{{asset('img/1x/cashapp.png')}}" alt="">
                                </a>
                             </div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="cash-content">or scan ></div>
                                <div class="cash-img">
                                    {!! $QrCodeHTML4!!}
                                </div>
                               </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                             <div class="cash-content">click ></div>
                             <div class="cash-img">
                                <a href="https://cash.app/$kopfive/{{$sessiomAmount}}" target="_blank">
                                 <img src="{{asset('img/1x/cashapp.png')}}" alt="">
                                </a>
                             </div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="cash-content">or scan ></div>
                                <div class="cash-img">
                                    {!! $QrCodeHTML5!!}
                                </div>
                               </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="mod-btn card-bttn" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
