<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ms Lady Gamble's</title>


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
    style="height:100vh;width:60%;margin-left:auto;margin-right: auto;background-repeat: no-repeat;background-size: cover; background-image:  url({{$message->embed(asset('img/1x/emailimage.jpg'))}});">

        <tr>
            <th>
                <h1 style="font-family: Gobold;color: #f5a801;text-transform: capitalize; padding-top:220px;">Thank You For Subscription!</h1><br><h2>{{ $details->email }}</h2>
            </th>
        </tr>
        <tr>
            <th>
                <p style="font-family: Poppins-SemiBold;color: #fff;">We received it indeed! We've share it with the entire team, they were all very touched.
                <br>
                Thank you so much! We were planning on answering you soon.
                </p>
            </th>
        </tr>
    </table>

</body>
</html>

