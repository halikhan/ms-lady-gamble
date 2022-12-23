<!DOCTYPE html>
<html lang="en">

<head>
    <?php
            $url = $_SERVER['REQUEST_URI'];
            $icon;$dash ;
            if(strpos($url,"dashboard")){
                $icon = '../';
                $dash = 'dashboard';
            }else{
                $icon = null;
                $dash = null;
            }
        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ms Lady Gamble's</title>

    <link rel="shortcut icon" href="{{get_favicon_logo()}}" type="image/x-icon">
    <!-- mainCss -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- wow -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- font-awsom -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


</head>
<style>
:root {
    --tawk-header-background-color: #f5a801 !important;
    --tawk-header-text-color: #ffffff !important;
}
.tawk-button {

    background-color:  #f5a801 !important;
    background-color: var(--tawk-header-background-color) !important;

}

 /* @media only screen and (max-width: 820px){

.container-fluid.for-padding-bottom{
  padding-bottom: 1rem;
}

  } */

  /* @media only screen and (max-width:820px){
        .navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 16px !important;
    list-style: none;
}
nav ul.navbar-nav>*+* {
    margin-left: 0rem;
    margin-bottom: 10px;
}



    } */

</style>


<body>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    {{-- nav bar start --}}
   <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <nav class="navbar navbar-expand-lg fixed-top for-fixed-background-color" id="navbarMain">
        <div class="container-fluid for-padding-bottom">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{get_main_logo()}}" height=" " width="100% " alt=" " ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link   <?php if (stripos($_SERVER['REQUEST_URI'],'home') !== false) {echo 'active';} ?>"
                            aria-current="page" href="{{route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'about_us') !== false) {echo 'active';} ?>"
                            href="{{route('about_us')}}">ABOUT</a>
                    </li>


                    {{-- <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'how_to_play') !== false) {echo 'active';} ?>" href="{{route('how_to_play')}}" >HOW TO PLAY</a>
                    </li> --}}
                    @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'web_register') !== false) {echo 'active';} ?>" href="{{ route('resgister.index') }}" >CREATE AN ACCOUNT</a>
                    </li>
                    @endif

                    @auth
                    @if (auth()->user()->type ==='Admin')
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'web_register') !== false) {echo 'active';} ?>" href="{{ route('resgister.index') }}" >CREATE AN ACCOUNT</a>

                    </li>
                    @elseif (auth()->user()->type ==='User')
                    @endif
                    @endauth

                    <li class="nav-item">
                        <!--<a class="nav-link liveChatBtn <?php if (stripos($_SERVER['REQUEST_URI'],'liveChat.php') !== false) {echo 'active';} ?>"-->
                        <!--    href="javascript:void(FB.CustomerChat.showDialog())">Live Chat</a>-->
                        <a class="nav-link liveChatBtn <?php if (stripos($_SERVER['REQUEST_URI'],'liveChat.php') !== false) {echo 'active';} ?>"
                        href="javascript:void(0)" onclick="chatToggle()">LIVE CHAT</a>
                    </li>
                    {{-- @auth
                    @if (auth()->user()->type ==='User')
                    <li class="nav-item">
                        <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'shop.blade.php') !== false) {echo 'active';} ?>"
                            href="{{route('shop')}}">Shop</a>
                    </li>
                    @endif
                    @endauth --}}
                    @auth
                    @if (auth()->user()->type ==='User')
                    {{-- <li class="nav-item">
                        <a class="nav-link custom-nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'redem.php') !== false) {echo 'active';} ?>"
                            href="{{route('user-dashboard')}}?tab=redeem-tab">REDEEM YOUR WINNINGS</a>
                    </li> --}}
                    @endif
                    @endauth
                    {{-- <li class="nav-item">
                    <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'faq') !== false) {echo 'active';} ?>"
                          href="{{route('faq')}}">FAQ's</a>
                    </li> --}}

                    <li class="nav-item navBtnss">
                        @auth
                        @if (auth()->user()->type ==='Admin')
                        <a class="nav-link" href="{{route('web_login')}}">LOG IN</a>
                        @endif
                        @if (auth()->user()->type ==='User')
                        <a class="nav-link" href="{{route('user-dashboard')}}">MY PROFILE</a>
                        @endauth

                        @else
                        <li class="nav-item" >
                            <a class="nav-link" href="{{route('web_login')}}">LOG IN</a>
                        </li>
                      {{-- <li class="nav-item">-->
                      <a class="nav-link" href="{{route('web_register')}}">SIGN UP</a>
                </li> --}}
                        @endif
                    </li>
                    <li class="nav-item navBtnss">
                        @auth
                        @if (auth()->user()->type ==='User')
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="nav-link btn" href="{{route('web_login')}}">SIGN OUT</button>
                        </form>
                        @endauth
                        @else
                        {{-- <a class="nav-link btn"
                            <?php if (stripos($_SERVER['REQUEST_URI'],'faq.php') !== false) echo 'active'; ?>
                            href="{{route('web_register')}}">Sign Up</a> --}}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- nav bar end --}}
    <div class="mainDiv my-scrollbar" data-scrollbar>
        @yield('content')
        {{-- footer start --}}
        <footer class="mt5 footerBottom cstm-footer-margin" >
            <div class="container-xxl">
                {{-- <div class="row ">
                    <div class="col-lg-3 ">
                        <a href="{{route('home')}}">
                            <img src="{{get_footer_logo()}}" height="100% " width="100% " alt=" ">
                        </a>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="fSubMain ">PAGES</div>
                        <div class="fSub "><a href="{{route('home')}}">home</a></div>
                        <div class="fSub "><a href="{{route('about_us')}}">ABOUT</a></div>
                        @auth
                        @if (auth()->user()->type ==='User')
                        <div class="fSub "><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Deposit</a>
                        </div>
                        @endif
                        @endauth
                        <div class="fSub "><a href="javascript:void(0);" onclick="chatToggle()">LIVE CHAT</a></div>
                        @auth
                        @if (auth()->user()->type ==='User')
                        <div class="fSub "><a href="{{route('user-dashboard')}}?tab=redeem-tab">REDEEM YOUR WINNINGS</a></div>
                        @endauth
                        @else
                         <div class="fSub "><a href="{{route('web_login')}}">REDEEM YOUR WINNINGS</a></div>
                        @endif

                    </div>
                    <div class="col-lg-3 ">
                        <div class="fSubMain ">QUICK LINKS</div>
                        <div class="fSub "><a href="{{route('condition')}}">TERMS & CONDITION</a></div>
                        <div class="fSub "><a href="{{route('policy')}}">PRIVACY & POLICY</a></div>
                        <div class="fSub "><a href="{{route('ada-compliance')}}">ADA Compliance Statement</a></div>
                        <div class="fSub "><a href="{{route('faq')}}">FAQ’s</a></div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="fSubMain ">CONTACT US</div>
                        <!--<div class="fSub d-flex align-items-baseline "><i class="fa fa-phone-alt "></i><a-->
                        <!--        href="tel:{{get_setting_by_key('Contact Number')}} ">{{get_setting_by_key('Contact Number')}}</a>-->
                        <!--</div>-->
                        <div class="fSub d-flex align-items-baseline "><i class="fa fa-envelope "></i><a
                                href="mailto:{{get_setting_by_key('Email')}} ">{{get_setting_by_key('Email')}}</a></div>
                        <div class="fSub d-flex align-items-baseline ">
                            <i class="fa fa-map-marker-alt "></i>
                            <a href=" javascript:void()">
                                {{get_setting_by_key('Address Line 1')}}<br />
                                {{get_setting_by_key('Address Line 2')}}
                            </a>
                        </div>
                        <div class="fSub ">
                            <a href="{{get_setting_by_key('Facebook')}}" target="_blank "><i
                                    class="fab fa-facebook-f "></i></a>
                            <a href="{{get_setting_by_key('Instagram')}}" target="_blank "><i
                                    class="fab fa-instagram "></i></a>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-lg-12 text-center rightsCopy">
                        <p><a href="{{route('condition')}}">TERMS & CONDITION</a> | <a href="{{route('policy')}}">PRIVACY POLICY</a> | <a href="{{route('ada-compliance')}}">ADA COMPLIANCE STATEMENT</a> | <a href="{{route('faq')}}"> FAQ’s </a></p>
                        <div class="socialIcon">
                            <a href="{{get_setting_by_key('Facebook')}}" target="_blank "><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="{{get_setting_by_key('Instagram')}}" target="_blank "><i
                                class="fab fa-instagram "></i></a>
                            <a href="{{get_setting_by_key('twitter')}}" target="_blank "><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="{{get_setting_by_key('youtube')}}" target="_blank "><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        </div>
                        {{get_setting_by_key('rights')}} <?php echo date("Y"); ?> BY <span>Ms Lady Gamble's</span> </br>
                        DESIGNED AND DEVELOPED BY <a href=" https://designprosusa.com/ " target="_blank ">DESIGN PROS USA</a>
                    </div>
                </div>
            </div>
        </footer>
        {{-- <div id="fb-root"></div> --}}

        <!-- Your Chat plugin code -->
        {{-- <div id="fb-customer-chat" class="fb-customerchat">
        </div> --}}
    </div>
    {{-- footer end --}}
    <!-- deposit modal -->
    {{-- Scripts --}}
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.js"-->
    <!--    integrity="sha512-3Csz15JaSnj/L3/crtY2nJ0SJusskVc+wjv6qqC31RKV+JRLnV0kXZhodM+pkOKT71UZjJauQjSJuErMsrro+g=="-->
    <!--    crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.min.js"-->
    <!--    integrity="sha512-UmrYi6FvCoDgKRTzLOvAj/egIrJtoTIQV0u/stO1h5f4DQNcXnhwnY0rel5zduc3CNqO6LfVI8ZaGUKCrLIo7g=="-->
    <!--    crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!-- Anime -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Wow -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"
        integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- main -->
    <script src="{{asset('js/main.js')}}"></script>
    {{-- sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


    <script>
        new WOW().init();
        @if(Session::has('notApprove'))
        swal({
            title: "error",
            text: "Your Account is not Approve yet , Please try later",
            icon: "error",
            button: "Ok",
        });
        @endif
        @if(Session::has('emailnotfound'))
        swal({
            title: "error",
            text: "Your email or password is not found",
            icon: "error",
            button: "Ok",
        });
        @endif

         @if(Session::has('Usernotfoun'))
        swal({
            title: "error",
            text: "Your email or password is not valid",
            icon: "error",
            button: "Ok",
        });
        @endif
        @if(Session::has('credentialsNotMatch'))
        swal({
            title: "error",
            text: "The provided credentials do not match our records.",
            icon: "error",
            button: "Ok",
        });
        @endif
    </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });

		$(function(){
			$(document).on('click','#delete',function(e){
				 e.preventDefault();
				 var link = $(this).attr("href");
				Swal.fire({
				title: 'Are you sure?',
				text: "To Delete this Data?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = link
					Swal.fire(
					'Deleted!',
					'Your file has been deleted.',
					'success'
					)
				}
				});
			});
		});
</script>

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6352cbf6b0d6371309caca84/1gftmpfb6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> --}}
<!--End of Tawk.to Script-->

  <script>

    //   var chatbox = document.getElementById('fb-customer-chat');
    //   chatbox.setAttribute("page_id", "101351378451358");
    //   chatbox.setAttribute("attribution", "biz_inbox");

    //   window.fbAsyncInit = function() {
    //     FB.init({
    //       xfbml            : true,
    //       version          : 'v12.0'
    //     });
    //   };

    //   (function(d, s, id) {
    //     var js, fjs = d.getElementsByTagName(s)[0];
    //     if (d.getElementById(id)) return;
    //     js = d.createElement(s); js.id = id;
    //     js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    //     fjs.parentNode.insertBefore(js, fjs);
    //   }(document, 'script', 'facebook-jssdk'));
    //   $(".liveChatBtn").on('click',function(){
    //       console.log("hello")
    //     $("#fb-customer-chat").click()
    //     })

    //     function chatToggle(){
    //         var ifram = $('#fb-root iframe')
    //         if(ifram[0].classList.length > 0){
    //             if(ifram[0].classList.contains('fb_customer_chat_bounce_out_v2')){
    //             FB.CustomerChat.showDialog()
    //             }else{
    //                 FB.CustomerChat.hideDialog()
    //             }
    //         }
    //         else{
    //             FB.CustomerChat.showDialog()
    //         }

    //         console.log(ifram)
    //     }

    </script>
    <style>
        .swal-button {
            background: linear-gradient(179deg, #fef180, #bd761c, #fff281) !important;
            border-radius: 50px !important;
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            font-family: poppinbold !important;
            animation: glowing 1500ms infinite !important;
        }

        .swal-text {
            font-weight: 600 !important;
        }

        .swal-title {
            font-weight: 700 !important;
        }

    </style>
    <script>
        $(".custom-nav-link").on('click', () => {
            console.log('it work')

        })
    </script>
    <script>
    //   var chatbox = document.getElementById('fb-customer-chat');
    //   chatbox.setAttribute("page_id", "102744218234025");
    //   chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
     </script>

     <script>
         @if(Session::has('message'))
         var type = "{{ Session::get('alert-type','info') }}"
         switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
         }
         @endif
     </script>

     @if($errors->any())
     @foreach($errors->all() as $error)
     <script>
         toastr.error('{{$error}}');
     </script>
     @endforeach
     @endif
</body>

</html>
@include('web.layouts.modals.modal')
