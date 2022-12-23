@extends('web.layouts.master')

@section('content')

 <div class="about-main">

    <div class="about-banner">
        <h1>ABOUT US</h1>
    </div>
    <div class="container-xxl about-content text-center customcontainer">
        <div class="aboutSubHeading">
            <h2>What we do?</h2>
        </div>
        {!! $about->description !!}
    </div>
</div>

 <style>
     .customcontainer p  {
         color: #fff;
         text-align: left;
     }

     .customcontainer ul li  {
         color: #fff;
         text-align: left;
     }

     .customcontainer ol li  {
         color: #fff;
         text-align: left;
     }
     .customcontainer ul li  a{
         color: #fff;
         text-align: left;
         text-decoration: none;
     }
     .customcontainer ol li  a{
         color: #fff;
         text-align: left;
         text-decoration: none;
     }
     .customcontainer a{
         color: #fff;
         text-decoration: none;
     }
 </style>
@endsection
