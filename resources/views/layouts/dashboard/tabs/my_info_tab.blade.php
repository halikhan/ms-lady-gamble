<form action="{{route('my-info')}}" method="POST">
    @csrf
<div class="myinfo-heading info-h1 col-lg-12">
    <h1>MY INFO</h1>
</div>
<div class="info-tab">
    <div class="row">
        <div class="fname col-lg-4">
            <h6 class="my-info-subheading">FIRST NAME</h6>
            <input class="myinfo-inputs" value="{{Auth::user()->first_name}}" type="text" name="first_name">
        </div>
        <div class="sname col-lg-4">
            <h6 class="my-info-subheading">SECOND NAME</h6>
            <input class="myinfo-inputs" value="{{Auth::user()->last_name}}" type="text" name="second_name">
        </div>
        <div class="email col-lg-4">
            <h6 class="my-info-subheading">USER NAME</h6>
            <input class="myinfo-inputs" readonly value="{{Auth::user()->Username}}" type="text" name="Username">
        </div>
    </div>
    <div class="row">
        <div class="contact col-lg-4">
            <h6 class="my-info-subheading">CONTACT NO.</h6>
            <input class="myinfo-inputs" type="text" value="{{@$myInfo->contact_no}}" name="contact_no">
        </div>
        <div class="email col-lg-4">
            <h6 class="my-info-subheading">DATE OF BIRTH</h6>
            <input class="myinfo-inputs" readonly value="{{Auth::user()->D_O_Birth}}" type="date" name="email">
        </div>
        <div class="email col-lg-4">
            <h6 class="my-info-subheading">STATE</h6>
            <input class="myinfo-inputs" readonly value="{{Auth::user()->state}}" type="text" name="state">
        </div>
    </div>
    <div class="row">
        <div class="address col-lg-12">
            <h6 class="my-info-subheading">ADDRESS</h6>
            <input class="myinfo-inputs" value="{{@$myInfo->address}}" type="text" name="address">
        </div>
    </div>
    <div class="row">
        <div class="zipcode col-lg-4">
            <h6 class="my-info-subheading">ZIP CODE</h6>
            <input class="myinfo-inputs" value="{{@$myInfo->zip_code}}" type="text" name="zip_code">
        </div>
        <div class="city col-lg-4">
            <h6 class="my-info-subheading">CITY</h6>
            <input class="myinfo-inputs" value="{{@$myInfo->city}}" type="text" name="city">
        </div>
        <div class="country col-lg-4">
            <h6 class="my-info-subheading">COUNTRY</h6>
            <input class="myinfo-inputs" value="{{@$myInfo->country}}" type="text" name="country">
        </div>
    </div>

</div>


<div class="myinfo-heading bank-h1 col-lg-12">
    <h1>BANK DETAILS</h1>
</div>
<div class="info-tab">
    <div class="row">
        <div class="bankname col-lg-4">
            <h6 class="my-info-subheading">BANK NAME</h6>
            <input class="myinfo-inputs" type="text" value="{{@$myInfo->bank_name}}" name="bank_name">
        </div>
        <div class="accounttitle col-lg-4">
            <h6 class="my-info-subheading">ACCOUNT TITLE</h6>
            <input class="myinfo-inputs" type="text" value="{{@$myInfo->account_title}}" name="account_title">
        </div>
        <div class="iban col-lg-4">
            <h6 class="my-info-subheading">IBAN</h6>
            <input class="myinfo-inputs" type="email"value="{{@$myInfo->iban}}"  name="iban">
        </div>
    </div>
</div>


<div class="myinfo-heading bitcoin-h1 col-lg-12">
    <h1>BITCOIN WALLET ADDRESS</h1>
</div>
<div class="info-tab">
    <div class="row">
        <div class="bankname col-lg-12">
            <input class="myinfo-inputs" type="text"value="{{@$myInfo->bitcoin_wallet_address}}" name="bitcoin_wallet_address">
        </div>
    </div>
</div>
<button class="info-button">SAVE</button>
</form>
