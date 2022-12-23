
<style>
    .error-wrapper {
    background-color: #55110d;
    height: 100%;
    padding-top: 10%
}
.subscribeButton {
  border: 1px solid #f5a801;
  padding: 10px 45px;
  border-radius: 0.25rem;
  color: #000;
  font-size: 14px;
  background-color: #f5a801;
  transition: 0.5s ease-in-out;
  margin-top: 10px;
  margin-left: 15%;
  font-family: Gobold;
  position: absolute;
  top: 100%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.subscribeButton:hover {
  font-family: Gobold;
  background-color: transparent;
  transition: 0.5s ease-in-out;
  border: 1px solid #ffffff;
  color: #fff;
}
.error-wrapper .error-container {
    -webkit-transform: skew(0deg, -10deg);
    -moz-transform: skew(0deg, -10deg);
    -o-transform: skew(0deg, -10deg);
    -ms-transform: skew(0deg, -10deg);
    transform: skew(0deg, -10deg);
    background-color: #55110d;
    padding: 60px
}

.error-wrapper .error-container .error {
    -webkit-transform: skew(0deg, 10deg);
    -moz-transform: skew(0deg, 10deg);
    -o-transform: skew(0deg, 10deg);
    -ms-transform: skew(0deg, 10deg);
    transform: skew(0deg, 10deg);
    margin: 0 auto;
    text-align: center;
    width: 350px
}

.error-wrapper .error-container .error .error-title {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: 5px;
    text-transform: uppercase
}

.error-wrapper .error-container .error .error-number {
    font-size: 100px;
    font-weight: 700;
    letter-spacing: 5px;

    text-shadow: 0 3px 0 #151515 , 0 14px 10px rgba(0, 0, 0, .15), 0 24px 2px rgba(0, 0, 0, .1), 0 34px 30px rgba(0, 0, 0, .1)
}

.error-wrapper .error-container .error .error-description {
    font-size: 14px;
    font-weight: 300;
    padding: 0 40px
}

.error-wrapper .error-container .error .error-or {
    height: 20px;
    margin: 30px 0 10px;
    position: relative;
    text-align: center
}

.error-wrapper .error-container .error .error-or .or-line {
    background-color: #55110d;
    height: 1px;
    left: 40px;
    position: absolute;
    right: 40px;
    top: 10px
}


.error-wrapper .error-container .error .error-or .or {
    -lh-property: 0;
    left: -webkit-calc(50% - 30px);
    left: -moz-calc(50% - 30px);
    left: calc(50% - 30px);
    background-color: #55110d;
    height: 20px;
    margin: 0 auto;
    position: absolute;
    text-transform: uppercase;
    top: 2px;
    width: 60px
}

.error-wrapper .error-container .error .error-textbox {
    padding: 0 40px
}

.error-wrapper .error-container .error .error-textbox .form-control {
    background-color: #151515 ;
    border: 0
}

.error-wrapper .error-container .error .error-submit {
    padding: 0 40px
}

.error-wrapper .error-container .error .error-submit input {
    font-size: 13px;
    font-weight: 300;
    text-transform: uppercase
}

.error-wrapper .error-container .error .error-actions {
    display: block;
    height: 40px;
    list-style: none;
    padding: 5px
}

.error-wrapper .error-container .error .error-actions>li {
    display: inline-block;
    float: left;
    width: 33%
}

.error-wrapper .error-container .error .error-actions>li a i {
    color: #292929;
    font-size: 32px
}

.error-wrapper .error-container.error-500 {
    background-color: #ffc107

}

.error-wrapper .error-container.error-500 .error .error-or .or-line {
    background-color: #d39e00
}

.error-wrapper .error-container.error-500 .error .error-or .or {
    background-color: #ffc107
}

.error-wrapper .error-container.error-401 {
    background-color: #55110d
}

.error-wrapper .error-container.error-401 .error .error-or .or-line {
    background-color: #3d0705
}

.error-wrapper .error-container.error-401 .error .error-or .or {
    background-color: #55110d
}

.neon-sign {
            font-family: Gobold;
            font-size: 2.5rem;
            margin: 2rem;
            color: #ffc107;
            opacity: 1;
            text-shadow: 1px 0 0 #f5a801,
                -1px 0 0 #f5a801,
                0 1px 0 #f5a801,
                0 -1px 0 #f5a801,
                0 0 5px #f5a801,
                0 0 10px #f5a801,
                0 0 15px #f5a801,
                0 0 25px #f5a801,
                0 0 50px #f5a801;
            animation: neon-sign-hue 20s infinite linear,
                glitch 8s infinite alternate,
                buzz 0.2s infinite alternate;
        }



        @keyframes neon-sign-hue {
            50% {
                text-shadow: 1px 0 0 $color_2,
                    -1px 0 0 $color_2,
                    0 1px 0 $color_2,
                    0 -1px 0 $color_2,
                    0 0 5px $color_2,
                    0 0 10px $color_2,
                    0 0 15px $color_2,
                    0 0 25px $color_2,
                    0 0 50px $color_2;
            }

            100% {
                text-shadow: 1px 0 0 $color_1,
                    -1px 0 0 #f5a801,
                    0 1px 0 #f5a801,
                    0 -1px 0 #f5a801,
                    0 0 5px #f5a801,
                    0 0 10px #f5a801,
                    0 0 15px #f5a801,
                    0 0 25px #f5a801,
                    0 0 50px #f5a801;
            }
        }



        @keyframes glitch {
            40% {
                opacity: 1;
            }

            42% {
                opacity: 0.8;
            }

            43% {
                opacity: 1;
            }

            45% {
                opacity: 0.2;
            }

            46% {
                opacity: 1;
            }
        }

        @keyframes buzz {
            70% {
                opacity: 0.8;
            }
        }
@media only screen and (max-width:600px) {
    .error-wrapper {
        padding-top: 5%
    }
    .error-wrapper .error-container {
        -webkit-transform: skew(0deg, -5deg);
        -moz-transform: skew(0deg, -5deg);
        -o-transform: skew(0deg, -5deg);
        -ms-transform: skew(0deg, -5deg);
        transform: skew(0deg, -5deg)
    }
    .error-wrapper .error-container .error {
        -webkit-transform: skew(0deg, 5deg);
        -moz-transform: skew(0deg, 5deg);
        -o-transform: skew(0deg, 5deg);
        -ms-transform: skew(0deg, 5deg);
        transform: skew(0deg, 5deg);
        width: auto
    }
}
</style>
<div class="error-wrapper">
    <div class="error-container">
        <div class="error">
            <div class="error-title">
                Error
            </div>
            <div class="error-number neon-sign">
                404
            </div>
            <div class="error-description">
                Sorry, The page you were looking for doesn't exist
            </div>

            <ul class="error-actions">
                <li>
                    <a type="button" href="">
                         {{-- <button type="button" class="btn btn-info">Back</button> --}}
                    </a>
                </li>
                {{-- @if (Auth::user()->type == 'Admin')
                    <li>
                        <a type="button" href="{{ route('home') }}">
                            <button type="button" class="subscribeButton">Back</button>
                        </a>
                    </li>
                    @elseif (Auth::user()->type == 'User')
                    <li>
                        <a type="button" href="{{ route('home') }}">
                             <button type="button" class="subscribeButton">Back</button>
                        </a>
                    </li>
                    @else
                    <li>
                        <a type="button" href="{{ route('home') }}">
                             <button type="button" class="subscribeButton">Back</button>
                        </a>
                    </li>
                    @endif --}}
                    <li>
                        <a type="button" href="{{ route('home') }}">
                             <button type="button" class="subscribeButton">Back</button>
                        </a>
                    </li>
            </ul>
        </div>
    </div>
</div>
