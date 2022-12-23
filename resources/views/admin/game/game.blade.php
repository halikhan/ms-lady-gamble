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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@endsection

@section('content_body')



    <!-- Index view -->
    <div class="row">

        <div class="col-md-12">
            <div class="card customized_table_height">

                <div class="card-header">
                    <h2>Game Management</h2>

                    <div class="card-tools">
                        <button class="btn btn-success" id="add_item" data-toggle="modal" data-target="#addArticleModal">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Email Address: activate to sort column ascending">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Email Address: activate to sort column ascending">Game
                                        Type</th>
                                    <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Actions: activate to sort column ascending"
                                        width="100">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($withdraw) > 0)
                                    @foreach ($withdraw as $key => $withdraw_list)
                                        <tr role="row" class="odd">
                                            <td>{{ $key + 1 }}</td>
                                            <td class="{{ 'name' . $withdraw_list->id }}">
                                                {{ $withdraw_list->game_type ?? '-' }}</td>

                                            <td class='d-flex align-items-center justify-content-around'>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#status_update{{ $withdraw_list->id }}"><i
                                                        class="fas fa-edit  admin-icons"></i></button>
                                                <a href="{{ route('game.destroy', $withdraw_list->id) }}" type="button"
                                                    id="delete" class="btn btn-default"><i
                                                        class="fas fa-trash  admin-icons"></i></a>
                                            </td>
                                        </tr>

                                        <!--  View Modal start -->
                                        <div class="modal fade" id="status_update{{ $withdraw_list->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Game Type
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('game.update', ['id' => $withdraw_list->id]) }}"
                                                            id="myform" onsubmit="return transaction_id()">
                                                            <div class="col-md-12">
                                                                <input name="game_type"
                                                                    value="{{ $withdraw_list->game_type }}"
                                                                    class="form-control" type="text"
                                                                    placeholder="Game Type" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
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

                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->

    <!-- Create view -->
    <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addArticleModalLabel">Add New Game</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{-- @include('admin.faq.faq_master') --}}
                    <div class="col-md-12">
                        <input name="game_type" class="form-control" type="text" placeholder="Game Type" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
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
