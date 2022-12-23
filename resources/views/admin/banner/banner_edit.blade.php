@extends('admin.layouts.master')
@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark"><i class="nav-icon fas fa-text-width"></i> Content Mangement</h1>
  </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- fancybox styles -->
<style>
  /* The switch - the box around the slider */
  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  /* Hide default HTML checkbox */
  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  input:checked + .slider {
    background-color: #2196F3;
  }
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
</style>

<!-- see more (description) -->
<style>
  div.text-container {
      margin: 0 auto;
      width: 75%;
  }
  .hideContent {
      overflow: hidden;
      line-height: 1em;
      height: 2em;
  }
  .showContent {
      line-height: 1em;
      height: auto;
  }
  .showContent{
    height: auto;
  }
  h1 {
    font-size: 24px;
  }
  p {
      padding: 10px 0;
  }

  .show-more {
      padding: 10px 0;
      text-align: center;
  }
    .customized_table_height.card .card-body {
        max-height: 81vh;
        overflow: scroll;
    }
</style>
@endsection

@section('content_body')
<section class="content">
    <div class="container-fluid" style="overflow-x: hidden; overflow-y: auto; max-height: 100%;">
        <div class="modal-body row">
            <!-- page -->
            <form method="post" action="{{route('banner.update',$banner->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group col-md-6 col-sm-3">
                    <label>Page:</label>
                    <input type="text" name="page" placeholder="Page" value="{{$banner->page}}" class="form-control page" required>
                </div>
                <!-- title -->
                <div class="form-group col-md-6 col-sm-3">
                    <label>Title:</label>
                    <input type="text" name="title" placeholder="Title" value="{{$banner->title}}" class="form-control title">
                </div>
                <!-- image -->
                {{-- <div class="form-group col-md-12">
              <label>Image:</label>
              <input type="file" name="image" placeholder="Image" id="photo-add" class="form-control image">
              <div class="col-md-3 preview_wrapper" >
                  <img src="{{$banner->image? asset('img/banners').'/'.$banner->image : asset('img/noimg.jpg')}}" class="preview_image" alt="" width="100%">
        </div>
    </div> --}}
    <!-- description -->
    <div class="form-group col-md-12">
        <label>Description:</label>
        <textarea type="text" name="description" id="editor1" placeholder="Description" class="form-control description">{{$banner->description}}</textarea>
    </div>
    <!-- status -->

    <div class="form-group col-md-2 text-center">
        <button type="submit" class="btn btn-primary form-control" style="color: #fff;
              background-color: #640b0b !important;
              border-color: #640b0b;">Save</button>
    </div>
    </form>
</div>
<script>
$('#photo-add').on('change', (e) => {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
        console.log('RESULT', reader.result);
        $('.preview_wrapper img').attr('src', reader.result)
    }
    reader.readAsDataURL(file);

})
</script>

</div><!-- /.container-fluid -->
</section>
@endsection('content_body')
