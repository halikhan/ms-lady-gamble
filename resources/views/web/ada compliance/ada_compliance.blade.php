@extends('web.layouts.master')
@section('content')
<style>
.privacy-and-policy-content p {
    color: #b3b3b3;
    text-align: center;
    font-family: poppinlight;
    min-height: 385px;
}

@media only screen and (max-width: 820px) {
div.privacy-and-policy-content p {
    min-height: 618px;
}
}
@media only screen and (min-width: 1920px) {
    .privacy-and-policy-content p {
    min-height: 518px;
}
}

@media only screen and (max-width: 1024px) {
    .privacy-and-policy-content p {
    min-height: 800px;
}
}
@media only screen and (min-width: 2560px) {
    .privacy-and-policy-content p {
    min-height: 805px;
}
}
</style>
    <!-- main -->
    <div class="faq-main">
        <div class="faq-banner">
            <h1>ADA COMPLIANCE STATEMENT</h1>

        </div>
    <div class="privacy-and-policy-main">
        <div class="container-xxl container privacy-and-policy-content customcontainer">
            {!! $adaCompliance->description!!}
        </div>
    </div>
    </div>
@endsection
