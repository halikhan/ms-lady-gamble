
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    .changePasswordHeading {
     color: white;
     font-family: gobolditalic;
     margin-top: 15px;

    }
    .passwordHeading {
     color: white;
     font-family: gobolditalic;
     margin-top: 40px;

    }
    .password input::placeholder,
    .changePassword input::placeholder {
     font-family: poppins;
    }
    .updateButton {
     background-color: #cb8d08 !important;
 border: 1px solid #cb8d08 !important;
 font-family: gobolditalic;
 color: white;
 padding: 10px 65px 10px 65px;
    }
    .update {
        margin-top: 20px;
    }
    @media only screen and (max-width: 768px) {
        .passwordSection {
            padding: 0px 45px;
        }
        .changePasswordHeading {
            padding-top: 10%;
        }
    }
    @media only screen and (max-width: 428px) {
        .passwordSection {
            padding: 0px 30px;
        }
        .changePasswordHeading {
            padding-top: 25%;
        }
    }
 </style>
 @if ($errors->any())
 @foreach ($errors->all() as $error)
     <script>
         toastr.error('{{ $error }}');
     </script>
 @endforeach
@endif
<div class="passwordSection">
<div class="changePasswordHeading">
    <h1>CHANGE PASSWORD</h1>
</div>

<form action="{{route('update_password')}}" method="POST">
    @csrf
    <div class="row">
        <input type="hidden" value="{{auth()->user()->id}}" name="hidden">
        <div class="password col-lg-4">
            <h6 class="passwordHeading">PASSWORD</h6>
            <input class="myinfo-inputs" id="subPwd" type="password" placeholder="Password" name="password" >

        </div>

        <div class="changePassword col-lg-4">
            <h6 class="passwordHeading">CONFIRM PASSWORD</h6>
            <input class="myinfo-inputs" type="password" id="ConfirmPwd"  placeholder="Confirm Password" name="confrim_password">

        </div>
        <div class="update">
            <button class="updateButton mailregister" type="submit" onClick="validateFm();">UPDATE</button>
        </div>
    </div>
</form>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(".mailregister").click(function(){
            var Email = $("#subPwd").val();
            var Cnfpassword = $("#ConfirmPwd").val();
            if (!Email) {
                // alert('Type Your valid Email');
                toastr.error('Please Enter Password');
                return false;
            }
            if (!Cnfpassword) {
                // alert('Type Your valid Email');
                toastr.error('Please Enter Confirm Password');
                return false;
            }
        });
        </script>





