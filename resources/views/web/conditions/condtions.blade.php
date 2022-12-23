@extends("web.layouts.master")
@section("content")

    <div class="faq-main">
        <div class="faq-banner">
            <h1>TERMS AND CONDITIONS</h1>
        </div>
        <div class="container-xxl container terms-and-condition-content mt-4">
            {!!$condtion->description !!}
        </div>
    </div>
@endsection
