<?php
$pin_code = Session::get('pin_code');
$bit_coin_wallet = Session::get('bit_coin_wallet');
$amount_request = Session::get('amount_request');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ms-Lady-Gamble-s</title>


    <style>
        * {
            margin: 0;
            padding: 0;
        }
        @font-face {
            font-family: Poppins-SemiBold;
            src: url('/fonts/Poppins-SemiBold.tff');
        }
        @font-face {
            font-family:Cinzel-Medium;
            src: url('/fonts/Cinzel-Medium.tff');

        }
      .for-blur-background tbody tr th h1 {
        height:100px;
      }
      .for-blur-background tbody tr th p {
        height:450px;
      }


        </style>

</head>
<body>

    <table class="for-blur-background"
    style="height:100vh;width:60%;margin-left:auto;margin-right: auto;background-repeat: no-repeat;background-size: cover; background-image:  url({{$message->embed(asset('img/1x/emailimage.jpg'))}});">

       <tr>
        <th >
            <h1 style="font-family: Gobold;color: #f5a801;text-transform: capitalize; padding-top:220px;">Here is your Redeem description</h1>
        </th>
    </tr>

        <tr>
            <td align="center">

                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">User ID:</b>
                    <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize;">{{Auth::user()->id}}</h3>
                    <br>
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">First Name:</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize;">{{Auth::user()->first_name}}</h3><br>
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Last Name:</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{Auth::user()->last_name}}</h3><br>

                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Pin Code:</b>
                    <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize;">{{$pin_code}}</h3><br>
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Amount Request:$</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{$amount_request}}</h3><br>
                       <b style="font-family: Poppins-SemiBold;color: #ffffff;">Bit Coin Wallet:$</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{$bit_coin_wallet}}</h3><br>
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Request Date Time:</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{now()}}</h3><br>

                <br>
                <h3  style="font-family: Gobold;color: #ffffff;text-transform: capitalize; ">Thank you so much!.</h3><br>

        </td>
        </tr>


    </table>


</body>

</html>

