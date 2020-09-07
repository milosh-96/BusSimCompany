<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:200,400,500,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                background: #F5F5F5;
                margin: 0;
                padding:0;
            }
            #logo {
                width: 100px;
                height: 100px;
                margin: 0 auto;
                z-index: 999;
                margin-bottom: -20px;
            }
            #logo > img {
                width: 100%;
            }

            #hero {
                width: 100%;
                padding-top:10px;
                box-sizing: border-box;
                background: #EDEDED;
            }
            #hero > .title {
                width: 100%;
                margin:0 auto;
                box-sizing: border-box;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 32px;
                text-align:left;
                padding:0 20px;
                margin-top: 30px;
                color: #1C7D25;
            }
            #hero > .description {
                font-family: Roboto;
                font-style: italic;
                font-weight: 500;
                font-size: 24px;
                color: #1C7D25;
                width:100%;
                padding: 20px;
            }
            .buttons {
                width:100%;
                display:flex;
                box-sizing: border-box;
            }
            a.btn {
                width: 100%;
                background: #f6ad55;
                display: block;
                text-align: center;
                line-height: 40px;
                padding: 15px 5px;
                font-family: Roboto;
                font-style: italic;
                font-weight: 500;
                font-size: 36px;
                color: #FFFFFF;
                text-decoration: none;
            }
            .buttons > a.btn:hover {
                background: #1C7D25;
            }

            a.btn#cta-first {
            }
            a.btn#cta-second {
                font-size: 24px;
            }

            @media screen and (min-width:1024px) {
                #logo {
                    margin-top: 38px;
                }
                #hero {
                    padding-top: 60px;
                    height: 300px;
                }
                #hero > .title {
                    font-size: 54px;
                    line-height: 60px;
                    padding:0 100px;
                }
                #hero > .description {
                    height: 175px;
                    padding:0 100px;
                }
                .buttons {
                    padding-left:700px;
                    margin-top: -120px;
                }
                a.btn {
                    width:240px;
                    border-radius: 7px;
                }
                a.btn#cta-first {
                    margin-right:5px;
                }
                a.btn#cta-second {
                    margin-right: 10px;
                }
            }




            ul {
                margin:0;padding:0;
            }

        </style>
    </head>
    <body>
        <div id="page">
            <div id="logo">
                <img src="/images/logo.png" alt="logo">
            </div>
            <div id="hero">
                <div class="title">
                    Add more depth to Bus Simulator
                </div>
                <div class="description">
                    <ul style="list-style: none;margin:0;">
                    <li>-Share your routes quickly.</li>
                    <li>-Get randomized driving schedule.</li>
                    <li>-Manage your online company.</li>
                    <li>-And other features...</li>
                    </ul>
                </div>
                <div class="buttons">
                    <a class="btn" href="{{route('register')}}" id="cta-first">
                        Start Now!
                    </a>
                    <a class="btn" href="{{route('share')}}" id="cta-second">
                        Quickly Share Route
                    </a>
                </div>
            </div>


            </div>
    </body>
</html>

