@extends('web.layouts.master')
@section('content')

    <div class="faq-main">
        <div class="faq-banner">
            <h1>PRIVACY POLICY</h1>
        </div>
        <div class="container-xxl container privacy-and-policy-content customcontainer mt-4">
            {!!$policy->description!!}
        </div>
    </div>
@endsection
