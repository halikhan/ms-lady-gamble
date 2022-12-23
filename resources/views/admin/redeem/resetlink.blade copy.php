

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
            src: url(./assets/font/Poppins-SemiBold.ttf);
        }
        @font-face {
            font-family:Cinzel-Medium;
            src: url(./assets/font/Cinzel-Medium.ttf);
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
    style="height:100vh;width:60%;margin-left:auto;margin-right: auto;background-repeat: no-repeat;background-size: cover; background-image: url(https://catherineasquithgallery.com/uploads/posts/2021-03/1614840870_35-p-fon-kazino-36.jpg);">

       <tr>
        <th >
            <h1 style="font-family: Gobold;color: #f5a801;text-transform: capitalize; padding-top:220px;">Here is your Redeem discription</h1>
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
                    {{-- <b>Pin Code:</b><br> --}}
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Pin Code:</b>
                    <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize;">{{$details->pin_code}}</h3><br>
                    {{-- <b style="font-family: Poppins-SemiBold;color: #ffffff;">Bitcoin Wallet Address:</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{$details->user->basicInfo->bitcoin_wallet_address ?? '-'}}</h3><br> --}}
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Amount Request:$</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{$details->amount_request}}</h3><br>
                    <b style="font-family: Poppins-SemiBold;color: #ffffff;">Request Date Time:</b>
                       <h3  style="font-family: Gobold;color: #f5a801;text-transform: capitalize; ">{{now()}}</h3><br>

                <br>
                <h3  style="font-family: Gobold;color: #ffffff;text-transform: capitalize; ">Thank you so much!.</h3><br>

        </td>
        </tr>


    </table>


</body>

</html>

