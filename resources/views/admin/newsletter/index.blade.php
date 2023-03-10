@extends('admin.layouts.master')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark"><i class="nav-icon fas fa-text-width"></i> Newsletter</h1>
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
<!-- Index view -->
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="card customized_table_height">
      <!-- /.card-header -->
      <div class="card-header">

        {{-- <div class="card-tools">
            <button class="btn btn-success" id="add_item" data-toggle="modal" data-target="#addArticleModal">
                <i class="fas fa-plus"></i>
            </button>
        </div> --}}
        <!-- search bar -->
        {{-- <form action="{{route('search_brands')}}" class="form-wrapper">
          <div class="row">
              <!-- search bar -->
              <div class="topnav col-md-4 col-sm-4">
                <input name="query" class="form-control" id="search_content" type="text" placeholder="Search..">
              </div>
              <!-- search button-->
              <button type="submit" class="btn btn-primary col-md-0 col-sm-0 justify-content-start" id="search_button">
                <i class="fas fa-search"></i>
              </button>

          </div>
        </form> --}}

      </div>
      <div class="card-body">
        <div class="col-md-12 col-sm-12" style="overflow-x:auto;">
          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline " role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">#</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Emails</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($newsletterData) > 0)
                @foreach($newsletterData as $key => $value)
                  <tr role="row" class="odd">
                    <!-- content (with see more collapse) -->
                    <td class="{{'content'.$value->id}}" width="50">
                      <div class="content hideContent">
                        {{$key+1}}
                      </div>
                      </td>
                    </td>
                    <td class="{{'content'.$value->id}}" width="500">
                        <div class="content hideContent">
                          {{$value->email}}
                        </div>
                        </td>
                      </td>
                    <!-- actions -->
                    <td width="100">

                        <!-- Delete -->
                        {{-- <a href="#" class="deleteButton">
                          <i class="fas fa-trash red ml-1"></i>
                        </a> --}}
                        {{-- <a href="{{ route('newsletter.delete',$value->id) }}" class="confirmation" id="delete"><i class="fa fa-trash"></i></a> --}}

                        <a  href="{{ route('newsletter.delete',$value->id) }}" id="delete"><button class="btn btn-info" type="button" data-original-title="btn btn-info" title="">Delete</button></a>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr><td colspan="4"><h6 align="center">No article(s) found</h6></td></tr>
              @endif

            </tbody>
            <tfoot>

            </tfoot>
          </table>
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        @if(count($newsletterData) > 0)
        {{-- {{$faqs->appends(request()->except('page'))->links()}} --}}
        @endif
            <div class="pagination-wrapper">
                {{-- {!! $newsletterData->links() !!} --}}
            </div>
      </div>
    </div>
  </div>
</div>

 <!-- Create view -->
{{-- <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addArticleModalLabel">Add New FAQ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{route('faq.store')}}" enctype="multipart/form-data">
        @csrf
        @include('admin.faq.faq_master')
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}

<!-- Edit view -->
{{-- <div class="modal fade" id="editArticleModal" tabindex="-1" role="dialog" aria-labelledby="editArticleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editArticleModalLabel">Edit FAQ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editForm" method="POST" action="{{route('article.update', 1)}}" enctype="multipart/form-data">
        <!-- hidden input -->
        @method('PUT')
        <input id="hidden" type="hidden" name="hidden">
        @csrf
        @include('admin.faq.faq_master')
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}

<!-- Detail view -->
{{-- <div class="modal fade" id="viewArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Article Detail</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- TABS -->
            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active bci" data-toggle="tab" href="#bci">Basic Article Information</a>
              </li>
              <li class="nav-item" role="presentation" >
                <a class="nav-link" data-toggle="tab" href="#si">Shop Information</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#pi">Payment Information</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#ig">Image Gallery</a>
              </li>
            </ul>

            <!-- TAB CONTENT -->
            <div class="tab-content" id="myTabContent">
              <!-- basic article info -->
              <div class="tab-pane fade show active" id="bci">
                <div class="card-body">
                  <div class="col-md-12 col-sm-12">
                    <img class="shop_keeper_picture" src="{{asset('img/logo.png')}}" width="150">
                    <hr style="color:gray;">
                    <table class="table table-bordered table-striped">
                        <tbody id="table_row_wrapper">
                            <tr role="row" class="odd">
                                <td class="">Name</td>
                                <td class="name"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Contact #</td>
                                <td class="contact_number"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Whatsapp #</td>
                                <td class="whatsapp_number"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Article Type</td>
                                <td class="type"></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Shop info -->
              <div class="tab-pane fade" id="si">
                <div class="card-body">
                  <div class="col-md-12 col-sm-12">
                    <img class="shop_picture" src="{{asset('img/logo.png')}}" width="150">
                    <hr style="color:gray;">
                    <table class="table table-bordered table-striped">
                        <tbody id="table_row_wrapper">
                            <tr role="row" class="odd">
                                <td class="">Shop Name</td>
                                <td class="shop_name"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Shop #</td>
                                <td class="shop_number"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Floor #</td>
                                <td class="floor"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Area</td>
                                <td class="area"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Market</td>
                                <td class="market"></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Payment info -->
              <div class="tab-pane fade" id="pi">
                <div class="card-body">
                  <div class="col-md-12 col-sm-12">
                    <hr style="color:gray;">
                    <table class="table table-bordered table-striped">
                        <tbody id="table_row_wrapper">
                            <tr role="row" class="odd">
                                <td class="">Status</td>
                                <td class="status"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Visting Days</td>
                                <td class="visiting_days"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Cash on Delivery</td>
                                <td class="cash_on_delivery"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Opening Balance</td>
                                <td class="opening_balance"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Business to Date</td>
                                <td class="business_to_date"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Outstanding Balance</td>
                                <td class="outstanding_balance"></td>
                            </tr>
                            <tr role="row" class="odd" hidden>
                                <td class="">Special Discount</td>
                                <td class="special_discount"></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Image Gallery -->
              <div class="tab-pane fade" id="ig">
                <div class="card-body row overflow-auto col-md-12 p-3 gallery_wrapper" style="height:28rem;">
                    <a target="_blank" href="{{asset('img/logo.png')}}" class="col-md-4 mb-3">
                      <img class="col-md-12 shop_keeper_picture" src="{{asset('img/logo.png')}}">
                    </a>
                    <a target="_blank" href="{{asset('img/logo.png')}}" class="col-md-4 mb-3">
                      <img class="col-md-12 shop_keeper_picture" src="{{asset('img/logo.png')}}">
                    </a>
                    <a target="_blank" href="{{asset('img/logo.png')}}" class="col-md-4 mb-3">
                      <img class="col-md-12 shop_keeper_picture" src="{{asset('img/logo.png')}}">
                    </a>
                    <a target="_blank" href="{{asset('img/logo.png')}}" class="col-md-4 mb-3">
                      <img class="col-md-12 shop_keeper_picture" src="{{asset('img/logo.png')}}">
                    </a>
                  <!-- </div> -->
                </div>
              </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-primary" data-dismiss="modal" style="float: right;">Close</button>
            </div>
        </div>
    </div>
</div> --}}

<!-- Delete view -->
<div class="modal fade" id="deleteArticleModal" tabindex="-1" role="dialog" aria-labelledby="deleteArticleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteArticleModalLabel">Delete Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <form id="deleteForm" method="get" action="{{ route('newsletter.delete',$value->id ?? '') }}"> --}}
        <form id="deleteForm" method="get" action="#">
        <!-- hidden input -->
        @method('DELETE')
        @csrf
        <input class="hidden" type="hidden" name="hidden">
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger" id="deleteButton">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    // $('#area_id').select2();
    // $('#market_id').select2();
    // datatable
    // $('#example1').DataTable();
    // $('#example1').dataTable({
    //   "bPaginate": false,
    //   "bLengthChange": false,
    //   "bFilter": true,
    //   "bInfo": false,
    //   "searching":false
    // });
    // get url params
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null) {
            return null;
        }
        return decodeURI(results[1]) || 0;
    }

    // persistent active sidebar
    var element = $('li a[href*="'+ window.location.pathname +'"]');
    element.parent().parent().parent().addClass('menu-open');
    element.addClass('active');

    // fancybox init
    $(".fancybox").fancybox({
        helpers: {
            title : {
                type : 'float'
            }
        }
    });
    // global vars
    var article = "";
    // fetch article
    function fetch_article(id){
        $.ajax({
            url: '<?php echo(route("faq.show", 0)); ?>',
            type: 'GET',
            data: {id: id},
            dataType: 'JSON',
            async: false,
            success: function (data) {
                article = data.data;
                console.log(article)
            }
        });
    }
    // create
    $('#add_article').on('click', function(){

    });
    // edit
    $('.editButton').on('click', function(){
        var id = $(this).data('id');
        fetch_article(id);
        $('#hidden').val(id);

        // image
        // un hide preview div
        // $('#editForm .preview_wrapper').prop('hidden', false);

        // content
        $('#editForm .content').val(article.question ? article.question : '');

        // link
        $('#editForm .link').val(article.answer ? article.answer : '');

        $('#editArticleModal').modal('show');
    });

    // detail
    $('.detailButton').on('click', function(){
      $('.bci').trigger('click');
      var id = $(this).data('id');
      fetch_article(id);
      // var article = $(this).data('object');
      $('.name').html(article.name ? article.name : '');
      $('.contact_number').html(article.contact_number ? article.contact_number : '');
      $('.whatsapp_number').html(article.whatsapp_number);
      if(article.shop_keeper_picture){
          var shop_path = $(this).data('shopkeeper');
          $('.shop_keeper_picture').attr('src', shop_path);
      }
      else{
          var shop_path = '{{asset("img/logo.png")}}';
          $('.shop_keeper_picture').attr('src', shop_path);
      }
      $('.type').html(article.type ? article.type : '');
      $('.shop_name').html(article.shop_name ? article.shop_name : '');
      $('.shop_number').html(article.shop_number ? article.shop_number : '');
      $('.floor').html(article.floor ? article.floor : '');
      $('.area').html((article.market && article.market.area) ? article.market.area.name : '');
      $('.market').html(article.market ? article.market.name : '');
      if(article.shop_picture){
          var shop_path = $(this).data('shop');
          $('.shop_picture').attr('src', shop_path);
      }
      else{
          var shop_path = '{{asset("img/logo.png")}}';
          $('.shop_picture').attr('src', shop_path);
      }
      // image gallery work
      $('.gallery_wrapper').html('');
      if(article.article_images.length > 0){
          for(var i = 0; i < article.article_images.length; i++){
          $('.gallery_wrapper').append(`<div class="col-md-4 mb-3"><a target="_blank" href="{{asset('img/article_images')}}/`+article.article_images[i].location+`" class="col-md-12"><img class="col-md-12 shop_keeper_picture" src="{{asset('img/article_images')}}/`+article.article_images[i].location+`"></a><button class="btn btn_del_article_image" value="`+article.article_images[i].id+`" type="button"><i class="fas fa-trash red ml-1"></i></button></div>`);
          }
      }
      $('.status').html(article.status ? article.status : '');
      $('.visiting_days').html(article.visiting_days ? article.visiting_days : '');
      $('.cash_on_delivery').html(article.cash_on_delivery ? article.cash_on_delivery : '');
      $('.opening_balance').html(article.opening_balance ? ("Rs. " + article.opening_balance.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")) : '');
      $('.business_to_date').html(article.business_to_date ? ("Rs. " + article.business_to_date.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")) : '');
      $('.outstanding_balance').html(article.outstanding_balance ? ("Rs. " + article.outstanding_balance.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")) : '');
      // $('.special_discount').html(article.special_discount ? ("Rs. " + article.special_discount) : '');
      $('#viewArticleModal').modal('show');
      });
      // delete
      $('.deleteButton').on('click', function(){
      var id = $(this).data('id');
      $('#deleteForm').attr('action', "#");
      $('#deleteForm .hidden').val(id);
      $('#deleteArticleModalLabel').text('Delete email: ' + $('.email' + id).html() + "?");
      $('#deleteArticleModal').modal('show');
    });
    // on show-more click (see more collapse)
    $(".show-more a").on("click", function() {
      var $this = $(this);
      var $content = $this.parent().prev("div.content");
      var linkText = $this.text().toUpperCase();

      if(linkText === "SHOW MORE"){
          linkText = "Show less";
          $content.switchClass("hideContent", "showContent", 100);
      } else {
          linkText = "Show more";
          $content.switchClass("showContent", "hideContent", 100);
      };
      $this.text(linkText);
    });
    // on image click (preview)
    $('#editForm .image').on('change', function(){
      // console.log($(this)[0]);
      // console.log($(this).parent().find('img'));
      var input = ($(this))[0];
      var preview_target = $(this).parent().find('img');
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              preview_target
                      .attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
      }
    });

});
</script>


<script>
    CKEDITOR.replace( 'editor2' );
</script>
@endsection('content_body')
