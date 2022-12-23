@extends('admin.layouts.master')


@section('content_header')
    <style>
        .btn-info.btn-sm {
            padding: 5px !important;
        }

        .first-row {

            padding-top: 10px !important;
        }
    </style>
    <style>
        .btn-info.btn-sm {
            padding: 5px !important;
        }
    </style>
    <!-- <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="nav-icon fas fa-users"></i> Withdraw Requests</h1>

            </div>
        </div> -->
    <style type="text/css">
        #pageloader {
            background: rgba(255, 255, 255, 0.8);
            display: none;
            height: 100%;
            position: fixed;
            width: 100%;
            z-index: 9999;
            top: 0;
            left: 0;
        }

        #pageloader img {
            left: 50%;
            /*margin-left: -32px;
          margin-top: -32px;*/
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .row {
            width: 100% !important;
        }

        .row .col-sm-6 {
            margin-bottom: 10px;
        }

        .min-he {
            min-height: 30px;
        }

        .paginate_button.active:hover {
            background: none !important;
            border: none !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border: none !important;
        }

        .customized_table_height.card .card-body {
            max-height: 81vh;
            overflow: scroll;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}} -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>  -->
    <!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@endsection

@section('content_body')



    <!-- Index view -->
    <div class="row">

        <div class="col-md-12">
            <div class="card customized_table_height">

                <div class="card-header">
                    <h2>Deposit Management</h2>
                    <!-- search bar -->
                    <!-- <form action="" class="form-wrapper">
                            <div class="row"> -->
                    <!-- search bar -->
                    <!--    <div class="topnav col-md-4">
                                    <input name="query" class="form-control" id="search_content" type="text" placeholder="Search..">
                                </div> -->
                    <!-- search button-->
                    <!--        <button type="submit" class="btn btn-primary col-md-0 justify-content-start" id="search_button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form> -->



                </div>
                <!-- status buttons -->

                <div id="pageloader">
                    <img src="{{ asset('img/1x/Preloader.gif') }}" alt="processing..." />
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12" style="overflow-x:auto;">
                        <table id="example_data" class="table table-striped table-bordered" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending">User ID</th> --}}
                                    {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending">Pin Code</th> --}}
                                    {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending">Bitcoin Wallet Address</th> --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Email Address: activate to sort column ascending">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Email Address: activate to sort column ascending">Deposit
                                        Amount Box</th>
                                    <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Registration Date: activate to sort column ascending"
                                        width="200">Pin Code</th>
                                    <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Registration Date: activate to sort column ascending"
                                        width="200">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Baskets: activate to sort column ascending">Date/Time
                                    </th>
                                    <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Actions: activate to sort column ascending"
                                        width="100">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($withdraw) > 0)
                                    @foreach ($withdraw as $key => $withdraw_list)
                                        <tr role="row" class="odd">
                                            {{-- <td class="{{'name'.$withdraw_list->id}}">{{$withdraw_list->user->first_name ?? '-'}} {{$withdraw_list->user->last_name ?? '-'}}</td> --}}
                                            <td>{{ $key + 1 }}</td>
                                            <td class="{{ 'name' . $withdraw_list->id }}">
                                                {{ $withdraw_list->deposit_amount_box ?? '-' }}</td>
                                            {{-- <td class="{{'last_name'.$withdraw_list->id}}">{{$withdraw_list->user->basicInfo->bitcoin_wallet_address ?? '-'}}</td> --}}
                                            <td class="{{ 'last_name' . $withdraw_list->id }}">
                                                {{ $withdraw_list->pin_code_box ?? '-' }}</td>
                                            <!-- email -->
                                            @if ($withdraw_list->status == 0)
                                                <td class="{{ 'last_name' . $withdraw_list->id }}">Pending</td>
                                            @else
                                                <td class="{{ 'last_name' . $withdraw_list->id }}">Approved</td>
                                            @endif
                                            <td class="{{ 'last_name' . $withdraw_list->id }}">
                                                {{ date('m/d/y g:i A', strtotime($withdraw_list->created_at)) ?? '-' }}</td>

                                            <td class='d-flex align-items-center justify-content-around'>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#status_update{{ $withdraw_list->id }}"><i
                                                        class="fas fa-edit  admin-icons"></i></button>
                                                <i class="fa fa-eye  admin-icons" data-toggle="modal"
                                                    data-target="#view_details{{ $withdraw_list->id }}"></i>
                                                <!--   <a href="#" class="editButton" data-id="{{ $withdraw_list->id }}">
                                                <i class="fas fa-edit blue ml-1"></i>
                                            </a> -->
                                            </td>
                                        </tr>
                                        <!-- Update withdraw request modal start -->
                                        <!-- Update withdraw request modal end -->
                                        <!--  View Modal start -->

                                        <div class="modal fade" id="view_details{{ $withdraw_list->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Withdraw Request
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label>User Name:</label>

                                                                {{ $withdraw_list->user->first_name ?? '-' }}
                                                                {{ $withdraw_list->user->last_name ?? '-' }}
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Pin Code:</label> {{ $withdraw_list->pin_code_box }}
                                                            </div>
                                                            {{-- <div class="col-sm-6">
                                                    <label>Bitcoin Wallet Address :</label> {{$withdraw_list->user->basicInfo->bitcoin_wallet_address ?? '-'}}
                                                </div> --}}
                                                            {{-- <div class="col-sm-6">
                                                    <label>Venmo Tag:</label> {{$withdraw_list->venmo_tag}}
                                                </div> --}}
                                                            <div class="col-sm-6">
                                                                <label>Deposit Amount Box:</label>
                                                                ${{ $withdraw_list->deposit_amount_box }}
                                                            </div>
                                                            {{-- <div class="col-sm-6">
                                                    <label>Bank Name:</label> {{$withdraw_list->bank_name}}
                                                </div> --}}
                                                            {{-- <div class="col-sm-6">
                                                    <label>Aba:</label> {{$withdraw_list->aba}}
                                                </div> --}}
                                                            {{-- <div class="col-sm-6">
                                                    <label>Routing:</label> {{$withdraw_list->routing}}
                                                </div> --}}
                                                            <div class="col-sm-6">
                                                                <label>Status:</label>

                                                                @if ($withdraw_list->status == 1)
                                                                    Approved
                                                                @else
                                                                    Pending
                                                                @endif

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="modal fade" id="status_update{{ $withdraw_list->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Deposit Request
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('deposit.update', ['id' => $withdraw_list->id]) }}"
                                                            id="myform" onsubmit="return transaction_id()">
                                                            <div class="row">
                                                                <div class="col-sm-6 d-flex flex-column">
                                                                    <label>STATUS:</label>
                                                                    <label class="form-control">
                                                                        @if ($withdraw_list->status == 1)
                                                                            Approved
                                                                        @else
                                                                            Pending
                                                                        @endif
                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Confirm</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- View Modal end -->
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <h6 align="center">No record(s) found</h6>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>

                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{-- @if (count($withdraw_list) > 0)
                {{$users->appends(request()->except('page'))->links()}}
                @endif --}}
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->

    <!-- Profile view -->
    <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body" style="overflow-x:auto;">
                    <img class="profile" src="" width="150" style="position: relative; left:33%;">
                    <hr style="color:gray;">
                    <table class="table table-bordered table-striped">
                        <tbody id="table_row_wrapper">
                            <tr role="row" class="odd">
                                <td class="">First Name</td>
                                <td class="fullname"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Last Name</td>
                                <td class="last_name"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Username</td>
                                <td class="user_name"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Email Address</td>
                                <td class="emailAddress"></td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="">Registration Date</td>
                                <td class="registrationDate"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" data-dismiss="modal" style="float: right;">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create view -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('user.store') }}">
                    @include('admin.user.user_master')
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="createButton">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit view -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg csModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" method="POST" action="{{ route('user.update', 1) }}">
                    <!-- hidden input -->
                    @method('PUT')
                    <input id="hidden" type="hidden" name="hidden">
                    @include('admin.user.user_master')
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete view -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteForm" method="POST" action="{{ route('user.destroy', 1) }}">
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
        $(document).ready(function() {
            //*** datatables ***//
            // $('#example1').dataTable({
            //     "bPaginate": false,
            //     "bLengthChange": false,
            //     "bFilter": true,
            //     "bInfo": false,
            //     "searching":false
            // });

            // persistent active sidebar
            var element = $('li a[href*="' + window.location.pathname + '"]');
            element.parent().addClass('menu-open');

            // global vars
            var user = "";
            // fetch user
            function fetch_user(id) {
                $.ajax({
                    url: '<?php echo route('user.show', 0); ?>',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    dataType: 'JSON',
                    async: false,
                    success: function(data) {
                        user = data.user;
                        console.log(user)
                    }
                });
            }

            //*** View Profile ***//
            $('.viewProfileButton').on('click', function() {
                var id = $(this).data('id');
                fetch_user(id);

                $("#viewUserModal .profile").attr("src", "{{ asset('dist/img/avatar.png') }}");
                $('#viewUserModal .fullname').html(user.first_name ? user.first_name : '');
                $('#viewUserModal .last_name').html(user.last_name ? user.last_name : '');
                $('#viewUserModal .emailAddress').html(user.email ? user.email : '');
                $('#viewUserModal .registrationDate').html(user.created_at ? new Date(user.created_at)
                    .toDateString() : '');

                $('#viewUserModal').modal('show');
            });
            // create
            $('#add_item').on('click', function() {});
            //*** edit ***//
            $('.editButton').on('click', function() {
                // alert();
                var id = $(this).data('id');
                // alert(id);

                fetch_user(id);
                $('#editForm').attr('action', "{{ route('user.update', 1) }}");
                $('#hidden').val(id);
                $('#editForm .name').val(user.first_name ? user.first_name : '');
                $('#editForm .last_name').val(user.last_name ? user.last_name : '');
                $('#editForm .email').val(user.email ? user.email : '');
                $('#editUserModal').modal('show');
            });
            // delete
            $('.deleteButton').on('click', function() {
                var id = $(this).data('id');
                $('#deleteForm').attr('action', "{{ route('user.destroy', 1) }}");
                $('#deleteForm .hidden').val(id);
                $('#deleteUserModalLabel').text('Delete User: ' + $('.name' + id).html() + "?");
                $('#deleteUserModal').modal('show');
            });
        });


        $(document).ready(function() {
            $('#example_data').DataTable();
        });
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.4.2/b-colvis-1.4.2/b-html5-1.4.2/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example_test').DataTable({
                buttons: [
                    'copyHtml5',
                ]
            });
        });
    </script>
    <script type="text/javascript">
        // <img src="{{ asset('assets_new/img/Spinner-1s-200px.gif') }}"  height="100%" width="100%" alt="" style="color: white" />



        $(document).ready(function() {

            $("#myform").on("submit", function() {



                $("#pageloader").fadeIn();

            });

            // $("#pageloader").fadeIn();

        });

        function transaction_id() {

            tra = $("#tra_id").val();

            if (tra == "") {


                return false;
            }
        }
    </script>
@endsection('content_body')
