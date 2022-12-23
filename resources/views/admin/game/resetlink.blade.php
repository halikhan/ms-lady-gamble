@if(Auth::user()->id!=1)
<b>User ID:</b> {{Auth::user()->id}}
<br>
<b>First Name:</b>{{Auth::user()->first_name}}<br>
<b>Last Name:</b>{{Auth::user()->last_name}}<br>
{{-- <b>Pin Code:</b>{{$details->pin_code}}<br> --}}
<b>Bitcoin Wallet Address:</b>{{$details->user->basicInfo->bitcoin_wallet_address ?? '-'}}<br>
<b>Amount Request:</b>${{$details->amount_request}}<br>
<b>Request Date Time:</b>{{now()}}<br>
@else
<b>User ID:</b> {{Auth::user()->id}}
<br>
<b>First Name:</b>{{Auth::user()->first_name}}<br>
<b>Last Name:</b>{{Auth::user()->last_name}}<br>
<b>Email:</b>{{Auth::user()->email}}<br>
{{-- <b>Pin Code:</b>{{$details->pin_code}}<br> --}}
<b>Bitcoin Wallet Address:</b>{{$details->user->basicInfo->bitcoin_wallet_address ?? '-'}}<br>
<b>Amount Request:</b>${{$details->amount_request}}<br>
<b>Request Date Time:</b>{{now()}}<br>
@endif


