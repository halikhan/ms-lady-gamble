@extends('admin.layouts.master')
@section('content_header')
<style>
    .update_btn{
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    }
    </style>
@endsection

@section('content_body')
<form  method="post" action="{{route('faq.update', 1)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group col-md-12">
        <input type="hidden" name="hidden" value="{{$faq->id}}">
        <label>Question:</label>
        <textarea type="text" name="question" placeholder="Question" rows="3" class="form-control content">{{$faq->question}}</textarea>
    </div>
    <!-- link -->
    <div class="form-group col-md-12 col-sm-3">
        <label>Answer:</label>
        <textarea type="text" name="answer" id="editor1" placeholder="Answer" rows="3" class="form-control link " required> {!!$faq->answer !!}</textarea>
    </div>

    <div class="form-group col-md-12 col-sm-3">
      <button type="submit" class="update_btn"> Update</button>
    </div>
  </form>
@endsection('content_body')
