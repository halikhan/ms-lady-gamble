@extends('admin.layouts.master')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark"><i class="nav-icon fas fa-clipboard-check"></i> Sold Coupons</h1>

</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

@endsection

@section('content_body')
<!-- Index view -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <!-- search bar -->
                <form action="{{route('search_users')}}" class="form-wrapper">
                    <div class="row">
                        <!-- search bar -->
                        <div class="topnav col-md-4">
                            <input name="query" class="form-control" id="search_content" type="text" placeholder="Search..">
                        </div>
                        <!-- search button-->
                        <button type="submit" class="btn btn-primary col-md-0 justify-content-start" id="search_button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- status buttons -->

            <!-- /.card-header -->
            <div class="card-body">
                <div class="col-md-12" style="overflow-x:auto;">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending">Gift</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending">User</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending">Card Number</th>
                                <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Baskets: activate to sort column ascending">Player Types</th> -->
                                <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1" colspan="1" aria-label="Registration Date: activate to sort column ascending" width="200">Serial Number or Pin code</th>
                                <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1" colspan="1" aria-label="Registration Date: activate to sort column ascending" width="200">Price</th>
                                <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" width="100">Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($sold_Coupons as $sold_Coupon )
                            <tr role="row" class="odd">
                                <td class="">{{@$sold_Coupon->coupon->name}}</td>
                                <td class="">{{@$sold_Coupon->user->first_name.' '.@$sold_Coupon->user->last_name}}</td>
                                <td class="">{{@$sold_Coupon->card_number}}</td>
                                <td class="">{{@$sold_Coupon->serial_number}}</td>
                                <td class="">{{@$sold_Coupon->coupon->price  }}</td>
                                <td class="">{{@$sold_Coupon->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                {{-- @if(count($users) > 0)
                {{$users->appends(request()->except('page'))->links()}}
                @endif --}}
            </div>
        </div>
    </div>
</div>

<!-- Profile view -->


<!-- Create view -->


<!-- Edit view -->


<!-- Delete view -->


@endsection('content_body')
