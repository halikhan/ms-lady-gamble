
<style>
    .termsAndConditionScroll {
        overflow-y: scroll;
    height: 457px;
    }

    @media only screen and (max-device-width: 1440px){
        .checkmark {
           left: 182px  !important;
    }}
    @media only screen and (max-device-width: 1024px){
        .checkmark {
            top: 1px !important;
            left: 177px !important;
        }
    }
    @media only screen and (max-device-width: 768px){
        .checkmark {
            top: 1px !important;
            left: 30px !important;
        }

    }
    @media only screen and (max-device-width: 540px){
        .checkmark {
            top: 1px !important;
            left: 45px !important;
    }}
    @media only screen and (max-device-width: 540px){
        .checkmark {
            top: 1px !important;
            left: 1px !important;
    }}
</style>

<div class="modal fade deposit-mod" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <h1>Terms And Condition</h1>
                <div class='termsAndConditionScroll'>
                    {!!$condtion->description ?? ''!!}
                </div>
                <!--<p>A Terms and Conditions&nbsp;<strong>is not required</strong>&nbsp;and&nbsp;<strong>it&#39;s not mandatory by law</strong>. Unlike Privacy Policies, which are required by laws such as the GDPR,&nbsp;<a href="https://termsfeed.com/blog/caloppa/">CalOPPA</a>&nbsp;and many others, there&#39;s no law or regulation on Terms and Conditions.</p>-->

                <!--<p>However, having a Terms and Conditions gives you the right to terminate the access of abusive users or to terminate the access to users who do not follow your rules and guidelines, as well as other desirable business benefits.</p>-->

                <!--<p>It&#39;s extremely important to have this agreement if you operate a SaaS app.</p>-->

                <!--<p>Here are a few examples of how this agreement can help you:</p>-->

                <!--<ul>-->
                <!--    <li>If users abuse your website or mobile app in any way, you can terminate their account. Your &quot;Termination&quot; clause can inform users that their accounts would be terminated if they abuse your service.</li>-->
                <!--    <li>If users can post content on your website or mobile app (create content and share it on your platform), you can remove any content they created if it infringes copyright. Your Terms and Conditions will inform users that they can only create and/or share content they own rights to. Similarly, if users can register for an account and choose a username, you can inform users that they are not allowed to choose usernames that may infringe trademarks, i.e. usernames like&nbsp;<em>Google</em>,&nbsp;<em>Facebook</em>, and so on.</li>-->
                <!--    <li>If you sell products or services, you could cancel specific orders if a product price is incorrect. Your Terms and Conditions can include a clause to inform users that certain orders, at your sole discretion, can be canceled if the products ordered have incorrect prices due to various errors.</li>-->
                <!--    <li>And many more examples.</li>-->
                <!--</ul>-->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label class="containerCS d-flex justify-content-center">
                        <span>
                            I agree with all <a href="">Terms &amp; Conditions</a> and <a href="">Privacy Policy</a>
                        </span>
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route('cart')}}">
                    <button class="mod-btn">Accept</button>
                </a>
                {{-- <button class="mod-btn" data-bs-dismiss="modal">Decline</button> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add-card" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('payment')}}" method="POST">
                @csrf
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 card-input">
                        <label class="card-label" for="">Card Number</label>
                        <input type="text" name="card_no" placeholder="4222101481">
                    </div>
                    <div class="col-lg-6 card-input">
                        <label class="card-label" for="">Expiration-Year</label>
                        <select name="exp_year" id="input-select">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>
                            <option value="2037">2037</option>
                            <option value="2038">2038</option>
                            <option value="2039">2039</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 card-input">
                            <label class="card-label"   for="">Expiration-Month</label>
                            <select name="exp_month" id="input-select">
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                            </select>
                        </div>
                        <div class="col-lg-6 card-input">
                            <label class="card-label"  for="">cvv</label>
                            <input type="number" name="cvv">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="mod-btn card-bttn" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="mod-btn card-bttn">Proceed</button>
            </div>
        </form>
        </div>
    </div>
</div>


<!--cash app-->

<div class="modal fade" id="add-cash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="">

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="mod-btn card-bttn" data-bs-dismiss="modal">Close</button>
                <!--<button type="submit" class="mod-btn card-bttn">Proceed</button>-->
            </div>
        </form>
        </div>
    </div>
</div>
<style>
    .containerCS.d-flex span:nth-child(1) {
        color: #000;
    }
.card-input input{
    background-color: transparent;
    border: 1px solid  #cb8d08;
    padding: 14px;
    width: 100%;
    margin-bottom: 8%;

}
.card-input label{
    font-size: 16px;
margin-bottom: 10px;
    font-family: gobolditalic;
}
#input-select{
    background-color: transparent;
    border: 1px solid #cb8d08;
    padding: 14px;
    width: 100%;
}

}
    .checkmark {
        left: 25%;
    }
.card-bttn{
    background-color: #f5a801;
    color: black;
    font-family: poppinbold;
    padding: 12px,45px !important;
    margin: 10px,0;
    border-radius:5px !important;
    width: fit-content;
}
</style>
