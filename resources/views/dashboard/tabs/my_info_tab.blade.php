{{--
 <?php
$myInfo = App\Models\BasicInfo::where('user_id', Auth::id())->first();
$userInfo = App\Models\User::where('id', Auth::id())->first();

?>
 --}}



<form action="{{ route('my-info') }}" method="POST">
    @csrf
    <div class="myinfo-heading info-h1 col-lg-12">
        <h1>MY INFO</h1>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </div>
    <div class="info-tab">
        <div class="row">
            <div class="fname col-lg-4">
                <h6 class="my-info-subheading">FIRST NAME</h6>
                <input class="myinfo-inputs" value="{{ Auth::user()->first_name }}" type="text" name="first_name"
                    id="fname">
            </div>
            <div class="sname col-lg-4">
                <h6 class="my-info-subheading">SECOND NAME</h6>
                <input class="myinfo-inputs" value="{{ Auth::user()->last_name }}" type="text" name="last_name" id="lname">
            </div>
            <div class="email col-lg-4">
                <h6 class="my-info-subheading">USER NAME</h6>
                <input class="myinfo-inputs" value="{{ Auth::user()->Username }}" type="text" name="Username"
                    id="uname">
            </div>
        </div>
        <div class="row">
            <div class="email col-lg-4">
                <h6 class="my-info-subheading">DATE OF BIRTH</h6>
                <input class="myinfo-inputs" value="{{ Auth::user()->D_O_Birth }}" type="date" name="D_O_Birth"
                    id="udate">
            </div>
            <div class="email col-lg-4">
                <h6 class="my-info-subheading">STATE</h6>
                <input class="myinfo-inputs" value="{{ Auth::user()->state }}" type="text" name="state" id="ustate">
            </div>
            <div class="contact col-lg-4">
                <h6 class="my-info-subheading">CONTACT NO.</h6>
                <input class="myinfo-inputs" value="{{ @$myInfo->contact_no }}" name="contact_no" id="uphone"
                     maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" type="tel">
            </div>
        </div>
        <div class="row">
            <div class="email col-lg-4">
                <h6 class="my-info-subheading">EMAIL</h6>
                <input class="myinfo-inputs" readonly value="{{ Auth::user()->email }}" type="email" name="email"
                    >
            </div>
            <div class="address col-lg-8">
                <h6 class="my-info-subheading">ADDRESS</h6>
                <input class="myinfo-inputs" value="{{ @$myInfo->address }}" type="text" name="address" id="uaddress">
            </div>

        </div>
        <div class="row">
            <div class="zipcode col-lg-4">
                <h6 class="my-info-subheading">ZIP CODE</h6>
                <input class="myinfo-inputs" value="{{ @$myInfo->zip_code }}" type="text" name="zip_code" id="uzip">
            </div>
            <div class="city col-lg-4">
                <h6 class="my-info-subheading">CITY</h6>
                <input class="myinfo-inputs" value="{{ @$myInfo->city }}" type="text" name="city" id="ucity">
            </div>
            <div class="country col-lg-4">
                <h6 class="my-info-subheading">COUNTRY</h6>
                <input class="myinfo-inputs" value="{{ @$myInfo->country }}" type="text" name="country" id="ucountry">
            </div>
        </div>

    </div>

    <div class="myinfo-heading col-lg-12">
        <h1>BANK DETAILS</h1>
    </div>
    <div class="info-tab">
        <div class="row">
            <div class="fname col-lg-4">
                <h6 class="my-info-subheading">BANK NAME</h6>
                <input class="myinfo-inputs" name="bank_name" value="{{ $myInfo->bank_name ?? '' }}" type="text"
                    placeholder="Bank Name" id="bankname">
            </div>
            <div class="sname col-lg-4">
                <h6 class="my-info-subheading">ACCOUNT TITLE</h6>
                <input class="myinfo-inputs" name="account_title" value="{{ $myInfo->account_title ?? '' }}"
                    type="text" placeholder="Account Title" id="accounttitle">
            </div>
            <div class="email col-lg-4">
                <h6 class="my-info-subheading">IBAN</h6>
                <input class="myinfo-inputs" name="iban" value="{{ $myInfo->iban ?? '' }}" type="text"
                    placeholder="Iban" id="ibannumber">
            </div>
        </div>
    </div>

    <div class="myinfo-heading bitcoin-h1 col-lg-12">
        <h1>BITCOIN WALLET ADDRESS</h1>
    </div>
    <div class="info-tab">
        <div class="row">
            <div class="bankname col-lg-8">
                <input name="bitcoin_wallet_address" value="{{ $myInfo->bitcoin_wallet_address ?? '' }}"
                    class="myinfo-inputs" type="text" placeholder="Bitcoin Wallet Address" id="bitcoinwallet">
            </div>
        </div>
    </div>
    <button class="info-button mailregister">SAVE</button>
</form>

<script type="text/javascript">
    document.getElementById('uphone').addEventListener('input', function(e) {
                var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(".mailregister").click(function(){
            var firstname = $("#fname").val();
            var lastname = $("#lname").val();
            var username = $("#uname").val();
            var bank = $("#bankname").val();
            var account = $("#accounttitle").val();
            var useraddress = $("#uaddress").val();
            var usercity = $("#ucity").val();
            var userzip = $("#uzip").val();
            var userstate = $("#ustate").val();
            var usercontact = $("#uphone").val();
            var userdate = $("#udate").val();
            var ibannum = $("#ibannumber").val();
            var usercountry = $("#ucountry").val();
            var bitcoinwalletnum = $("#bitcoinwallet").val();

            if (!firstname) {
                // alert('Type Your valid Email');
                toastr.error('Please enter first name');
                return false;
            }
            if (!lastname) {
                // alert('Type Your valid Email');
                toastr.error('Please enter last name');
                return false;
            }
            if (!username) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user name');
                return false;
            }
            if (!userdate) {
                // alert('Type Your valid Email');
                toastr.error('Please select date');
                return false;
            }
            if (!userstate) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user state');
                return false;
            }
            if (!usercontact) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user contact');
                return false;
            }
            // if (!useremail) {

            //     toastr.error('Please enter user email');
            //     return false;
            // }
            if (!useraddress) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user address');
                return false;
            }
            if (!userzip) {
                // alert('Type Your valid Email');
                toastr.error('Please enter zip');
                return false;
            }
            if (!usercity) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user city');
                return false;
            }

            if (!usercountry) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user country');
                return false;
            }
            if (!bank) {
                // alert('Type Your valid Email');
                toastr.error('Please enter bank name');
                return false;
            }
            if (!account) {
                // alert('Type Your valid Email');
                toastr.error('Please enter account title');
                return false;
            }
            if (!ibannum) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user IBAN number');
                return false;
            }
            if (!bitcoinwalletnum) {
                // alert('Type Your valid Email');
                toastr.error('Please enter user bitcoin wallett address');

                return false;
            }

        });
        </script>


