
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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{route('add-gift')}}">
                    <button class="btn btn-success">
                        <i class="fas fa-plus"></i>
                    </button>
                    </a>
                </div>
                <!-- search bar -->
                <form action="{{route('search_Gift')}}" class="form-wrapper" method="GET">
                    <div class="row">
                        <!-- search bar -->
                        <div class="topnav col-md-4">
                            <input name="search" class="form-control" id="search_content" type="text" placeholder="Search..">
                        </div>
                        <!-- search button-->
                        <button type="submit" class="btn btn-primary col-md-0 justify-content-start" id="search_button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <div class="col-md-12" style="overflow-x:auto;">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th >#</th>
                                <th >Gift</th>
                                <th >Price</th>
                                <th >Card Number</th>
                                <th >Serial Number or Pin Code</th>
]                                {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending">Image</th> --}}
                                {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending">Price</th> --}}
                                <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" width="100">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @if(count($users) > 0)
                            @foreach($users as $user)
                            <tr role="row" class="odd">
                                <td>{{ $loop->index+1 }}</td>
                                <!-- name -->
                                <td class="{{'name'.$user->id}}">{{$user->coupon->name}}</td>
                                <!-- image -->
                                <td class="{{'UniqueCode'.$user->id}}">${{$user->coupon->price}}</td>
                                <td class="{{'UniqueCode'.$user->id}}">{{$user->card_number}}</td>
                                <td class="{{'UniqueCode'.$user->id}}">{{$user->serial_number}}</td>
                                {{-- <td width="20%">
                                    <img src="{{ (!empty($user->image))?
									url('public/uploads/gifts/'.$user->image):
                                    url('public/uploads/gifts/no_image.jpg.png') }}"
									style="width:80px; height:80px;">
								</td> --}}
                                <!-- price -->
                                 {{-- <td class="{{'price'.$user->id}}">$ {{$user->price}}</td> --}}

                                <td>
                                    <!-- Delete -->
                                    <a href="{{ route('Gift.delete',$user->id) }}" class="confirmation" id="delete"><i class="fa fa-trash"></i></a>
                                    <!-- Edit -->
                                    <a href="#" class="editButton" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$user->id}}" data-id="{{$user->id}}">
                                        <i class="fa fa-edit"></i></a>
{{--                                        <a href="{{ route('send.email',$user->id) }}" class="mailButton" class="btn btn-primary" data-toggle="modal">--}}
{{--                                            <i class="fas fa-envelope-open-text"></i></a>--}}
                                </td>
                            </tr>
                            {{--form For Update --}}
                            <form id="editForm" method="POST" action="{{route('Gift.update', 1)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- hidden input -->
                              <input id="hidden" type="hidden" value="{{$user->id}}" name="Gift_hidden">
                              {{-- Modal For Update --}}
                                  <div class="modal" id="myModal{{$user->id}}">
                                     <div class="modal-dialog">
                                   <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Modal Heading</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                            <!-- name -->
                                            <div class="form-group col-md-7">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="{{$user->name}}" placeholder="Enter name"
                                                class="form-control name" required max="50">
                                            </div>

                                                    <!-- code -->
                                                    <div class="form-group col-md-7">
                                                        <label for="">Code</label>
                                                        <input type="number" required name="UniqueCode" value="{{$user->UniqueCode}}" placeholder="Enter price"
                                                        class="form-control email">
                                                    </div>
                                            <div class="form-group col-md-7">
                                                      <!-- Image -->
                                                <img class="img-thumbnail" src="{{ (!empty($user->image))?
                                                    url('public/uploads/gifts/'.$user->image):
                                                    url('public/uploads/gifts/no_image.jpg') }}"
                                                    style="width:100px; height:100px;"><br>
                                                    <label for="">Image</label>

                                                    <input type="file" name="image" placeholder="Upload image" class="form-control image_input">
                                                 </div>


                                                    <!-- Price -->
                                                    <div class="form-group col-md-7">
                                                        <label for="">Price</label>
                                                        <input type="number" required name="price" value="{{$user->price}}" placeholder="Enter price"
                                                        class="form-control email">
                                                    </div>

                                                      <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>

                                                </form>
                                            </div>
                                        @endforeach

                                        @else
                                        <tr><td colspan="5"><h6 align="center">No record(s) found</h6></td></tr>
                                        @endif
                        </tbody>
                    </table>
                            {!! $users->links('pagination::bootstrap-4') !!}
                    <!-- Create view -->
                    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUserModalLabel">Add New Gift</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{route('Gift.store')}}" enctype="multipart/form-data">
                                    @include('admin.Gift.Gift_master')
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="createButton">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



    {{-- javascript work  --}}
<script>
    $(document).ready(function(){

        // create
        $('#add_item').on('click', function(){
        });


        var element = $('li a[href*="'+ window.location.pathname +'"]');
        element.parent().addClass('menu-open');

        // global vars
        var Gift = "";
        // fetch Gift
        function fetch_Gift(id){
            $.ajax({
                url: '<?php echo(route("Gift.show", 0)); ?>',
                type: 'GET',
                data: {id: id},
                dataType: 'JSON',
                async: false,
                success: function (data) {
                    Gift = data.Gift;
                    console.log(Gift)
                }
            });
        }
         //*** edit ***//
         $('.editButton').on('click', function(){
            // alert();
            var id = $(this).data('id');
            // alert(id);
            fetch_Gift(id);
            $('#editForm').attr('action', "{{route('Gift.update', 1)}}");
            $('#hidden').val(id);
            $('#myModal').modal('show');
             });

    });
</script>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
@endsection('content_body')
