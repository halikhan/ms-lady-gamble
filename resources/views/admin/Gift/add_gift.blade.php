@extends('admin.layouts.master')
@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark"><i class="nav-icon fas fa-gifts"></i> Coupon</h1>

    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


@endsection

@section('content_body')
<!-- Index view -->
<h1>Add Coupon</h1>
<form action="{{route('coupon.store')}}" method="POST">
    @csrf
    <div class="appendRow">
        <div class="appendBtn btn btn-primary">
            <i class="fa fa-plus"></i>
        </div>

        @csrf
        <div class="row">
            <div class="col-lg-4 d-flex flex-column mt-3">
                <label for="">Gift Card Name</label>
                @php
                    $gifts = App\Models\Coupon::all();
                @endphp
                <select name="gift_card[]" class="js-example-disabled-results" required>
                    <option value="" selected disabled>Gift Card Name</option>
                    @foreach ( $gifts as $gift )
                    <option value="{{$gift->id}}" title="{{ $gift->name }},{{ $gift->price }}">{{$gift->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-4 d-flex flex-column mt-3">
                <label for="">Card Number or link </label>
                <input name="card_number[]" type="text" required>
            </div>
            <div class="col-lg-4 d-flex flex-column mt-3">
                <label for="">Serial number or Pin code</label>
                <input name="serial_number[]" type="text" required >
            </div>
        </div>

    </div>
    <button type="submit">Submit</button>
</form>
<script>

var vg = {!!json_encode($gifts)!!}


    $(".appendBtn").on('click', (e) => {
        console.log(vg)
        $(".appendRow").append(`
        <div class="row apendedRow">
            <button class="rowDelBtn btn btn-danger" onclick='rowDel(this)'>
                <i class="fa fa-minus"></i>
            </button>
            <div class="col-lg-4 d-flex flex-column mt-3">
            <label for="">Gift Card Name</label>
            @php
                    $gifts = App\Models\Coupon::all();
            @endphp
            <select name="gift_card[]" class="js-example-disabled-results" required>
                <option value="" selected disabled>Gift Card Name</option>
                @foreach ( $gifts as $gift )
                <option value="{{$gift->id}}" title="{{ $gift->name }},{{ $gift->price }}">{{$gift->name}}</option>
                @endforeach
              </select>
        </div>
            <div class="col-lg-4 d-flex flex-column mt-3">
                <label for="">Card Number or link</label>
                <input  name="card_number[]" type="text" required>
            </div>
            <div class="col-lg-4 d-flex flex-column mt-3">
                <label for="">Serial number or Pin code</label>
                <input name="serial_number[]" type="text" required>
            </div>
        </div>
        `)
        $('select').select2();
    // setInterval(() => {
        $(document).ready(function() {
        // alert('hello')
        console.log("hello")
            function formatState(state) {
                console.log(state)
                if (!state.id) {
                    return state.text;
                }
                var $state = $(
                    `<span><div class="row"><div class="col-md-12"><h6>${state?.title?.split(",")[0]}</h6></div><div class="col-md-6"><i class="fa fa-dollar-sign"></i> ${state.title.split(",")[1]}</div></div></span>`
                );
                return $state;
            };
            $('select').select2({
                closeOnSelect: false,
                templateResult: formatState
            });
        });
    // }, 1000);
    })
    $('select').select2();
    // setInterval(() => {
        $(document).ready(function() {
        // alert('hello')
        console.log("hello")
            function formatState(state) {
                console.log(state)
                if (!state.id) {
                    return state.text;
                }
                var $state = $(
                    `<span><div class="row"><div class="col-md-12"><h6>${state?.title?.split(",")[0]}</h6></div><div class="col-md-6"><i class="fa fa-dollar-sign"></i> ${state.title.split(",")[1]}</div></div></span>`
                );
                return $state;
            };
            $('select').select2({
                closeOnSelect: false,
                templateResult: formatState
            });
        });
    // }, 1000);

    var $disabledResults = $(".js-example-disabled-results");
    $disabledResults.select2();

    function rowDel(e) {
        var appendedRow = e.parentNode;
        $(appendedRow).remove();
    }

</script>
<style>
    .select2-container .select2-selection--single {
        height: 31px !important;
        align-items: center !important;
        display: flex !important;
    }

</style>
@endsection('content_body')
