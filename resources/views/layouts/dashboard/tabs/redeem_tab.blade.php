
   <style type="text/css">
.coins-input input{
            /*background-color: #808080 !important;*/

     }
.first-row{

  padding-top: 10px !important;

}
    #pageloader {
            background: rgba(255, 255, 255, 0.8);
            display: none;
            height: 100vh;
            position: fixed;
            width: 100%;
            z-index: 9999;
            top: 0;
            left: 0;
        }
        #pageloader img {
            width: 200px;
            height: 200px;
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }
        input::placeholder{
            color: #808080 !important;
        }

    </style> 
<!--   <div id="pageloader">
<img src="{{ asset('img/1x/Spinner-1s-200px.gif') }}" alt="processing..." />
</div> -->
<form action="{{route('withdraw_request')}}" id="myform" method="POST" onsubmit="return pinvalidation()">
    @csrf
<div class="redeem-div">
    <div class="redeem-head-subhead">
        <h1 class="redeem-h1 redeem-headings">REDEEM</h1>
        <p class="redeem-subhead">BTC rate will apply as per the date and time of request approval.</p>
    </div>
    <div class="coins-input d-flex">
        <div class="coins1">
            <h6 class=redeem-headings>PIN</h6>
            <input class="coins-input2 col-lg-12" type="text" id="pin_code" name="pin_code" placeholder="pin#" required="" >
      
        </div>

        <div class="coins2">
            <h6 class=redeem-headings>Re-Enter PIN</h6>
            <input class="coins-input2 col-lg-12" type="text" name="pin_code_confirm" placeholder="Re-Enter Pin#" required="" id="pin_code_confirm" onkeyup='check();'>


        </div>

              

        <div class="coins2">
            <h6 class=redeem-headings>CashAPP Cash Tag</h6>
            <input class="coins-input2 col-lg-12" type="text" name="cashapp_tag" placeholder="$" required="">
        </div>


    </div>
    
 <span id='message'></span>
    <div class="coins-input d-flex">
        <div class="coins1">
            <h6 class=redeem-headings>venmo tag</h6>
            <input class="coins-input2 col-lg-12" type="text" name="venmo_tag" placeholder="@" required="">
            <p>(if Cash App is having issues)</p>

        </div>
    </div>
    <div class="mt-4" style="padding-right: 1rem;">
        <div class="row">
            <div class="col-lg-12">
                <p>NOTE:IF YOU ARE REQUESTING $201-300 YOU WILL NEED TO PROVIDE BANKING INFO SO AN ACH BANK TRANSFER CAN BE COMPLETED.ACH BANK TRANSFERS USUALLY TAKE 1-3 BUSINESS DAYS </p>
            </div>
        </div>
    </div>
    <div class="coins-input d-flex">
        <div class="coins1">
            <h6 class=redeem-headings>Amount Requested</h6>
            <input class="coins-input2 col-lg-12" type="number" name="amount_request" placeholder="Amount Requested" required="">
        </div>
        <div class="coins2">
            <h6 class=redeem-headings>Bank Name</h6>
            <input class="coins-input2 col-lg-12" type="text" name="bank_name" placeholder="Bank Name" required="">
        </div>
        <div class="coins2">
            <h6 class=redeem-headings>ABA</h6>
            <input class="coins-input2 col-lg-12" type="text" name="aba" placeholder="ABA" required="">
        </div>
    </div>
    <div class="coins-input d-flex">
        <div class="coins1">
            <h6 class=redeem-headings>ROUNTING</h6>
            <input class="coins-input2 col-lg-12" type="text" name="routing" placeholder="ROUNTING" required="">
        </div>
        <div class="coins3">
            <button class="btn btn-primary coins-button" type="submit">REDEEM NOW</button>
        </div>
    </div>
  
</form>
    <div class="redeem-buttons">


        <ul class="nav redeem-tabs nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active redeem-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">CURRENT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link redeem-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">COMPLETED</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h6 class=summary-heading>SUMMARY</h6>
                <div class="summary-div">
                    <!-- table of my redeem -->
<!-- REQUESTED ID
TRANSACTION NO/ID
REQUESTED DATE
COMPLETED DATE
PAYMENT TYPE
STATUS -->
                    <div class="table">
                        <div class="head">
                            <h5>REQUESTED ID</h5>
                            <h5>TRANSACTION NO/ID</h5>
                            <h5>REQUESTED DATE</h5>
                            <h5>COMPLETED DATE</h5>
                            <h5>PAYMENT TYPE</h5>
                            <h5>STATUS</h5>
                        </div>
                          @foreach($withdraw_request as $withdraw_request_details)
                        <div class="first-row rows">
                             @if($withdraw_request_details->status==0)
                             <h6>{{$withdraw_request_details->id}}</h6>
                             <h6>In Process..</h6>
                             <h6>{{$withdraw_request_details->request_date}}</h6>
                             
                           <h6>In Process..</h6>
                            <h6>In Process..</h6>

                            @if($withdraw_request_details->status==0)
                             <h6>Pending</h6>
                            @else
                             <h6>Approved</h6>
                            @endif
                           @endif
                           
                         
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h6 class=summary-heading>SUMMARY</h6>
                <div class="summary-div">
                    <!-- table of my redeem -->
                    <div class="table">
                        <div class="head">
                          <h5>REQUESTED ID</h5>
                            <h5>TRANSACTION NO/ID</h5>
                            <h5>REQUESTED DATE</h5>
                            <h5>COMPLETED DATE</h5>
                            <h5>PAYMENT TYPE</h5>
                            <h5>STATUS</h5>
                        </div>
 @foreach($withdraw_request as $withdraw_request_details)

                        <div class="first-row rows">
                          @if($withdraw_request_details->status==1)
                               <h6>{{$withdraw_request_details->id}}</h6>
                             <h6>{{$withdraw_request_details->approve_id}}</h6>
                             <h6>{{$withdraw_request_details->request_date}}</h6>
                             
                             <h6>{{$withdraw_request_details->created_at}}</h6>
                             
                           <h6>{{$withdraw_request_details->approve_tag}}</h6>
                          

                            @if($withdraw_request_details->status==0)
                             <h6>Pending</h6>
                            @else
                             <h6>Approved</h6>
                            @endif
                           @endif
                        </div>
                       

 @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="btn btn-lg  redeem-btn-1">CURRENT</button>
        <button class="btn btn-lg  redeem-btn-2">COMPLETED</button> -->
    </div>

</div>
<script type="text/javascript">
   var check = function() {
  if (document.getElementById('pin_code').value ==
    document.getElementById('pin_code_confirm').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

 function pinvalidation(){

 if (document.getElementById('pin_code').value ==
    document.getElementById('pin_code_confirm').value) {
   return true;
  }else{
    return false;
  }

}
</script>
<script type="text/javascript">
    // <img src="{{ asset('assets_new/img/Spinner-1s-200px.gif') }}"  height="100%" width="100%" alt="" style="color: white" />



    $(document).ready(function() {
            // $("#pageloader").fadeIn();

//         $("#myform").on("click", function(e) {
//             $("#pageloader").fadeIn();
//             $("#pageloader").css("display", 'flex');
//             $(".mainDiv.my-scrollbar").css("position", 'sticky' )

// document.getElementsByClassName("my-scrollbar")[0].addEventListener("wheel", (e)=>{
//     $(e).find('.scroll-content').css('transform','translate3d(0px, 0px, 0px)');
//     window.scroll(0,0)
//     e.preventDefault()
// })

//         });

        // $("#pageloader").fadeIn();

    });
</script>