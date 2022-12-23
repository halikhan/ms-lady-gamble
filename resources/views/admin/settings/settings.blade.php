@extends('admin.layouts.master')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
  <h1 class="m-0 text-dark"><i class="nav-icon fas fa-cogs"></i> Configuration Settings</h1>
</div>
<!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <!-- <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Zones</li> -->
  </ol>
</div>
<!-- /.col -->
</div>
@endsection

@section('content_body')
{{-- <style>
    .contacttypehiiden{
        display: none;
    }
</style> --}}
<div class="container col-md-12">
    <!-- wallet -->
    {{-- @if (Session::get('settingsuccess'))
    <?php
    session()->forget('settingsuccess');
    ?>
    <div class="alert my-2 alert-success">
        <p>{{ 'Your data updated successfully' }}</p>
    </div>
    <script type="text/javascript">
        setTimeout(function () {
                location.reload()
            }, 2000);
    </script>
    @endif --}}
    <form action="{{route('setting.store')}}" method="post" class="row signup_wallet" style="background-color:white;" enctype="multipart/form-data">
        @csrf
        @foreach($settings as $setting)
            <!-- main_logo -->
            <div class="form-group col-md-12 mb-2">
                <label>
                    <small>
                        <strong>{{$setting->key}}: </strong>
                    </small>
                </label>


            @if ($setting->key == 'Contact')
            <input class="form-control form-control-sm col-md-12 contacttypehiiden" value="{{$setting->value}}" name="{{$setting->key}}" id="uphone" maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" type="tel" required>
           @else
           <input type="text" name="{{$setting->key}}" class="form-control form-control-sm col-md-12" value="{{$setting->value}}" required>
            @endif
            </div>
        @endforeach
        <div class="col-md-10"></div>
        <!-- submit button -->
        <div class="form-group col-md-2 text-center">
            <button type="submit" class="btn btn-primary form-control-sm"><small>Save Changes</small></button>
        </div>
    </form>
    <hr>
</div>

<script type="text/javascript">
    document.getElementById('uphone').addEventListener('input', function(e) {
                var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
</script>
<script>
$(document).ready(function(){
    // global vars
    // persistent active sidebar
    var element = $('li a[href*="'+ window.location.pathname +'"]');
    element.parent().addClass('menu-open');
});
</script>

@endsection
