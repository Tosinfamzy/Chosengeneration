@extends('layout')
@section('content')
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
            {{--<a href="#about-us" class="btn btn-white btn-animated">Know more about us</a>--}}
        </div>
        <video src="img/bg-video.mp4" autoplay="true" loop="true" muted class="bg-video">
        </video>

    </header>

    <section class="section-features" id="about-us">

        <div class="row">
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Vision</h3>
                    <p class="feature-box__text">
                        Our vision is to see young people discover their blueprint, realise their potential,
                        and find their place. Discovering your kingdom purpose is a journey
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Mission</h3>
                    <p class="feature-box__text">
                        To produce authentic, young BELIEVERS, who understand their calling and potential, are maturing in their faith,
                        and committed to nurturing and inspiring others to become what God has created them to be.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">OUR BELIEVE</h3>
                    <p class="feature-box__text">
                        “There is one body and one spirit…there is one Lord, one faith, one baptism, and one God and Father of us all.”
                        Ephesians 4:4
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">What we do</h3>
                    <p class="feature-box__text">
                        We are a youth organisation determined to add value to the lives of young people.
                    </p>
                </div>
            </div>
        </div>
    </section>


    @endsection

