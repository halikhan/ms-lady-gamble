<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ms-Lady-Gamble-s</title>


    <style>
          @font-face {
            font-family: Poppins-SemiBold;
            src: url('/fonts/Poppins-SemiBold.tff');
        }
        @font-face {
            font-family:Cinzel-Medium;
            src: url('/fonts/Cinzel-Medium.tff');

        }
    </style>

</head>

<body>

    <table
    style="height:100%;width:70%; position: relative;  margin-left:auto;margin-right: auto;background-repeat: no-repeat;background-size: 100%; background-image: url({{ $message->embed(asset('img/1x/gambling-background.jpg')) }});">
        <tr>
            {{-- ({{$message->embed(asset('front_assets/images/lotti-email-background.png'))}}) --}}
            <th style="text-align: left; display: flex;
            justify-content: center; font-size: 22px;width: 100%;margin-left: -25px; color: #fff;margin: 6px auto;text-align: center;">
                <img align="center"  src="{{ $message->embed(asset('img/logos/aJ8BmKsV1X.png')) }}" alt=""
                style="width: 34%;margin: 20px auto auto auto; object-fit: cover;">
            </th>
        </tr>
        <tr>
            <th style="padding-top: 40px;">
                <p
                    style="border: 2px dashed #f0c419;
               width: 10%;
               height: 60px;
               margin: auto;
               padding: 2rem;
               border-radius: 150px;">
                    <img src="{{ $message->embed('https://cdn-icons-png.flaticon.com/512/4630/4630926.png') }}"
                        alt="" style="width: 90%; object-fit: contain; height: 100%;">
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h1
                    style=" padding-top: 10px; font-family: system-ui;color: #fff;font-weight:800; text-transform: capitalize; font-size: 48px;">
                    Your Newsletter</h1>
            </th>
        </tr>
        <tr>
            <th style="padding-bottom: 0px;">
                {{-- <p style="font-family: system-ui;font-weight: 600;font-size: 22px;width: 100%; color: #fff;margin: 6px auto;text-align: center;">

                </p> --}}
                <p style="font-family: system-ui;font-weight: 600;font-size: 22px;width: 100%; color: #fff;margin: 6px auto;text-align: center;">
                    Subscription Confirmation to Ms Lady <br> Gamble's Players Club! <br>  Sign Up to get free credits
                </p>
            </th>
        </tr>
        <tr>
            <th style="padding-bottom: 0px;">
                <p
                    style="
              font-family: system-ui;
              font-size: 24px;
              width: 100%;
              font-weight: 900;
              color: #fff;
              margin: 6px auto;
              text-align: center;
              ">
                    CODE: {{ $FreeCreditCode->value }}
                </p>
            </th>
        </tr>
        <tr>
            <th style="padding-top: 40px; padding-bottom: 60px;">
                {{-- <a href="#" style="text-decoration: none;"><button style="padding: 10px 20px; font-family: system-ui;
                font-size: 18px;
                border-radius: 4px;
                font-weight: 400;
                background: #f5a801;
                border: none;
                  color: #fff;">Confirm Email</button></a> --}}
            </th>
        </tr>


    </table>

</body>

</html>
