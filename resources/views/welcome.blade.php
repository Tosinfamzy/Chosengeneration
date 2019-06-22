<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*
 COLORS:
 Light green: #7ed56f
 Medium green: #55c57a
 Dark green: #28b485
 */

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: "lato", sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 1.7;
                color:#777;
                padding: 30px;
            }
            header {
                height: 95vh;
                background-image: linear-gradient(to right,#7ed56fd2, #28b485ec), url(../img/group.jpeg);
                background-size: cover;
                clip-path: polygon(0 0 ,100% 0 , 100% 80%, 0 100%);
                background-position: top;
                position: relative;
            }
            .logo-box {
                position:absolute;
                top: 40px;
                left:40px;

            }

            .logo{
                height: 35px;
            }

            .text-box{
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .heading-primary
            {
                color: #ffffff;
                text-transform: uppercase;

            }

            .heading-primary-main{
                display: block;
                font-size: 60px;
                font-weight: 400;
                letter-spacing: 35px;
                animation-name: moveInLeft;
                animation-duration: 4s;
            }

            .heading-primary-sub{
                display: block;
                font-size: 20px;
                font-weight: 400;
                letter-spacing: 15;
                animation-name: moveInLeft;
                animation-duration: 4s;
            }

            @keyframes moveInLeft {
                0%{
                    opacity: 0;
                    transform: translateX(-100%);
                }
                80%{
                    transform:translateX(-10px);
                }
                100%{
                    opacity: 1;
                    transform: translate(0);
                }
            }
            @keyframes moveInRight {
                0%{
                    opacity: 0;
                    transform: translateX(100%);
                }
                80%{
                    transform:translateX(10px);
                }
                100%{
                    opacity: 1;
                    transform: translate(0);
                }
            }
        </style>
    </head>
    <body>
    <header>
        <div class="logo-box">
            <img src="{{asset("img/group.jpeg")}}" alt="logo" class="logo">
        </div>

        <div class="text-box">
            <h1 class="heading-primary">
                        <span class="heading-primary-main">
                            Chosen Generation
                        </span>
                <span class="heading-primary-sub">
                            Adding Value to Society
                        </span>
            </h1>
        </div>

    </header>
    </body>
</html>
