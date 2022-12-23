<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body style="margin-top: 20px;
        background-color: #f7f7ff;">
    <div class="container" style="width: 1200px; margin: auto;">
        <div class="card" style="position: relative;
                display: flex;
                flex-direction: column;
                min-width: 600px !important;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0px solid rgba(0, 0, 0, 0);
                border-radius: .25rem;
                margin-bottom: 1.5rem;
                box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0
                rgb(206 206 238 / 54%);">
            <div class="card-body">
                <div id="invoice" style="padding: 0px;">
                    <div class="invoice overflow-auto" style="position:
                            relative;
                            background-color: #FFF;
                            min-height: 680px;
                            padding: 15px">
                        <div style="min-width: 600px">
                            <header style="padding: 10px 0;
                                    margin-bottom: 20px;
                                    border-bottom: 1px solid #916501;">
                                <div class="row" style="width: 100%;">
                                    <div class="col">
                                        <a href="">
                                            <img src="{{asset('img/1x/king of palm.png')}}" width="30%" alt=""
                                                style=" float: left;background: black;">
                                        </a>
                                    </div>
                                    <div class="col company-details" style="text-align:
                                            right">
                                        <h2 class="name" style="margin-top:
                                                0;
                                                margin-bottom: 0">
                                            <a target="_blank" href="javascript:;" style="text-decoration:
                                                    none;
                                                    font-size: 25px;
                                                    color: black;">
                                                   {{ config('app.name') }}
                                            </a>
                                        </h2>
                                        <div>{{get_setting_by_key('Address Line 1') .', '.get_setting_by_key('Address Line 2')}}</div>
                                        <div>{{get_setting_by_key('Email')}}</div>
                                        <div>{{get_setting_by_key('Contact Number')}}</div>
                                    </div>
                                </div>
                            </header>
                            <main>
                                <div class="row contacts" style="margin-bottom:
                                        20px">
                                    <div class="col invoice-to" style="text-align:
                                            left">
                                        <div class="text-gray-light">INVOICE TO:
                                        </div>
                                        <h2 class="to" style="margin-top: 0;
                                                margin-bottom: 0">
                                            {{Auth::user()->first_name.' '.Auth::user()->last_name ?? " "}}</h2>
                                        <div class="address">{{Auth::user()->email}}</div>
                                        <div>{{Auth::user()->basicInfo->contact_no ?? " "}}</div>
                                    </div>
                                </div>
                                <div class="col invoice-details" style="text-align:
                                        right">
                                    <h1 class="invoice-id" style="margin-top:
                                            0;
                                            color: #916501;">INVOICE # {{$details['order']->id ?? " "}}</h1>
                                    <div class="date">Date of Invoice: {{\Carbon\Carbon::now()}}
                                    </div>
                                </div>
                        </div>
                        <table style="width: 100%;
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                    margin-bottom: 20px;margin-top:1rem;">

                            <thead>
                                <tr>
                                    <th class="gold-color" style="padding: 15px;
                                                background: #eee;
                                                border-bottom: 1px solid #fff;
                                                white-space: nowrap;color: #916501;
                                                font-weight: 800;
                                                font-size: 18px">#</th>
                                    <th class="text-left gold-color" style="padding: 15px;
                                                background: #eee;
                                                border-bottom: 1px solid #fff;
                                                white-space: nowrap;
                                                font-weight: 800;color: #916501;
                                                font-size: 18px">COIN</th>
                                    <th class="text-right gold-color" style="padding: 15px;
                                                background: #eee;color: #916501;
                                                border-bottom: 1px solid #fff;
                                                white-space: nowrap;
                                                font-weight: 800;
                                                font-size: 18px">QUANTITY</th>

                                    <th class="text-right gold-color" style="padding: 15px;
                                                background: #eee;
                                                border-bottom: 1px solid #fff;
                                                white-space: nowrap;
                                                font-weight: 800;color: #916501;
                                                font-size: 18px">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($details['order']->carts as $item )

                                <tr>
                                    <td class="no" style="padding: 15px;
                                                background: #916501;
                                                border-bottom: 1px solid #fff;
                                                font-weight: 700 !important;
                                                font-size: 20px !important;">{{$loop->iteration}}</td>
                                    <td class="text-left" style="padding: 15px;
                                                background: #eee;
                                                border-bottom: 1px solid #fff">
                                        <h3 style="color: #916501; margin-top:8px; margin-bottom: 8px;">
                                            {{$item->price ?? " "}}
                                        </h3>
                                    </td>
                                    <td class="unit" style="text-align:
                                                right;padding: 15px;
                                                background: #ddd;
                                                border-bottom: 1px solid #fff;
                                                font-size: 1.2em">{{$item->qty  ?? " "}}</td>
                                    <td class="qty" style="text-align:
                                                right;padding: 15px; background:
                                                #eee; border-bottom: 1px solid
                                                #fff ;
                                                font-size: 1.2em"> $ {{$item->ammount ?? " "}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=" 1 " style="background: 0 0; border-bottom: none; white-space: nowrap; text-align: right; padding: 30px 20px; font-size: 1.5em; color: #916501; font-weight: 700; border-top: 1px solid #aaa; border-top:
                                        none "></td>
                                    <td colspan="2 "
                                        style="background: 0 0; border-bottom: none; white-space: nowrap; text-align: right; padding: 30px 20px; font-size: 1.5em; color: #916501; font-weight: 700; border-top: 1px solid #aaa ">
                                        GRAND TOTAL :
                                    </td>
                                    <td style="background: 0 0; border-bottom: none; white-space: nowrap; text-align: right; padding: 30px 20px; color: #916501; font-weight: 700; border-top: 1px solid #aaa; color: #916501; font-size:
                                        1.4em; border-top: 1px solid #916501 ">{{$details['order']->carts[0]->total_amount ?? " "}}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="thanks "
                            style="font-size: 22px !important; color: #916501 !important; font-weight: 900; ">Thank you!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
