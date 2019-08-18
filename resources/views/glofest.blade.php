@extends('layout')
@section('content')
    @include('nav.main')
    <style>
        /*   Comic strip jumpy style gallery   */
        * {
            font-family: Arial, sans-serif;
        }
        .container {
            width:650px; margin:auto; overflow:hidden; height:450px;
        }
        .boxframe1 {
            width:530px;
            height: 100px;
            display:inline-block;
            -webkit-transition:all 1s;
        }

        .openFrame {
            height: 200px;
            width: 100%;
        }

        .size1, .size2, .size3 {
            position:relative;
            float:left;
            overflow:hidden;
            height: 100%;
            width: 50px;
            margin:3px;
            background: #ccc;
            -webkit-transition:all 1s;
        }

        .gallimg {
            height:100%;
            position: relative;
            opacity: 0.2;
            -webkit-transition:all 1s;
            -webkit-filter: grayscale(100%);
        }

        .fullshine {
            opacity: 1;
            -webkit-filter: grayscale(0%);
        }

        .shinewidth {
            /*width: inherit;*/
        }


        .lastimg, .firstimg {
            width: 0px !important;
            opacity: 0;
            margin: 0;
        }

        .fixRightBox {
            position:fixed;
            right:20px;
            top:50px;
        }

        .fixLeftBox {
            position:fixed;
            left:20px;
            top:50px;
        }

        a {
            font-family: Arial, sans-serif;
            color:#fff;
            font-size:14px;
            background:#7AB2FF;
            padding:5px 12px;
            display:block;
            margin:5px 2px;
            border-radius:4px;
            text-decoration:underline;
        }

        a:hover {
            cursor:pointer;
        }
    </style>
   <header>
    <div class="logo-box">
        <img src="{{asset("img/logo-full.png")}}" alt="logo" class="logo">
    </div>
    <div class="text-box">
        <h1 class="heading-primary">
            <span class="heading-primary-main">
               glowfest
            </span>
        </h1>
    </div>

    </header>

    <div class="glowfest">
        <img src="{{asset("img/glowfest.jpeg")}}" alt="glofest ad" class="glofest-ad">
    </div>


    <div class="container">
        <div style="width:1000px;">

            <div id="firstRowImages" class="boxframe1">
                <div class="slidebox size1 firstimg" style="width: 100px;"><img class="gallimg row1 firstimg" src=""></div>

                <div class="slidebox size1" style="width: 100px;"><img class="gallimg row1" width="300" src="{{asset('img/glofest1.jpeg')}}"></div>

                <div class="slidebox size1" style="width: 100px;"><img class="gallimg row1" width="300" src="{{asset('img/glofest2.jpeg')}}"></div>

                <div class="slidebox size1" style="width: 100px;"><img class="gallimg row1" width="300" src="{{asset('img/glofest3.jpeg')}}"></div>

                <div class="slidebox size1" style="width: 100px;"><img class="gallimg row1" width="300" src="{{asset('img/glofest4.jpeg')}}"></div>

                <div class="slidebox size1" style="width: 100px;"><img class="gallimg row1" width="300" src="{{asset('img/glofest5.jpeg')}}"></div>

                <div class="slidebox size1 lastimg" style="width: 100px;"><img class="gallimg row1 lastimg" src="{{asset('img/glofest6.jpeg')}}" style=""></div>

            </div>


            <div id="secondRowImages" class="boxframe1 openFrame">

                <div class="slidebox size2 firstimg" style="width: 100px;"><img class="gallimg row1 firstimg" src=""></div>

                <div class="slidebox size2" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest7.jpeg')}}"></div>

                <div class="slidebox size2" style="width: 227px;"><img class="gallimg row1 fullshine" width="227" src="{{asset('img/glofest8.jpeg')}}"></div>

                <div class="slidebox size2" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest9.jpeg')}}"></div>

                <div class="slidebox size2" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest10.jpeg')}}"></div>

                <div class="slidebox size2" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest11.jpeg')}}"></div>

                <div class="slidebox size2 lastimg" style="width: 100px;"><img class="gallimg row1 lastimg" src="" style=""></div>

            </div>


            <div id="thirdRowImages" class="boxframe1">

                <div class="slidebox size3 firstimg" style="width: 100px;"><img class="gallimg row1 firstimg" src=""></div>

                <div class="slidebox size3" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest12.jpeg')}}"></div>

                <div class="slidebox size3" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest13.jpeg')}}"></div>

                <div class="slidebox size3" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest14.jpeg')}}"></div>

                <div class="slidebox size3" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest15.jpeg')}}"></div>

                <div class="slidebox size3" style="width: 100px;"><img class="gallimg row1" width="227" src="{{asset('img/glofest16.jpeg')}}"></div>

                <div class="slidebox size3 lastimg" style="width: 100px;"><img class="gallimg row1 lastimg" src=""></div>

            </div>



        </div>
    </div>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>

    <script>

        //show first img
        function startOff() {
            $('.boxframe1').removeClass('openFrame');
            $('.slidebox').css('width','100px');
            $('img').removeClass('fullshine');
            var thewidth = $('#firstRowImages').contents('.size1:nth-child(2)').contents().width();
            $('.size1:nth-child(2)').width(thewidth);
            $('.size1:nth-child(2)').contents().addClass('fullshine');
            $('#firstRowImages').addClass('openFrame');
        };

        // click an image to display
        $('.gallimg').hover(function switchimg(){
            var thewidth = (this).width;
            $('.slidebox').css('width','100px');
            $('img').removeClass('fullshine');
            $('.boxframe1').removeClass('openFrame');
            $(this).addClass('fullshine').parent('div').width(thewidth).parent().addClass('openFrame');

        });



    </script>


    @endsection