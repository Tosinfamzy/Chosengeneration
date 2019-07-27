<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chosen Generation | Adding Value to Society</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
    <header>
        <div class="logo-box">
            <img src="{{asset("img/logo-full.png")}}" alt="logo" class="logo">
        </div>
        @include('nav.main')

        <div class="text-box">
            <h1 class="heading-primary">
                        <span class="heading-primary-main">
                            Chosen Generation
                        </span>
                <span class="heading-primary-sub">
                            Adding Value to Society
                </span>
            </h1>
            <a href="#about-us" class="btn btn-white btn-animated">Know more about us</a>
        </div>

    </header>

    <div id="about-us" class="about-us">
        <h2 id="about-us-h2">Know More About Who We Are</h2>
        <div class="about-us-section">
            <div class="about-us-content">
                <p>Left</p>
            </div>
            <div class="about-us-content">
                <p>Middle</p>
            </div>
            <div class="about-us-content">
                <p>Right</p>
            </div>
        </div>
    </div>
    </body>
</html>
