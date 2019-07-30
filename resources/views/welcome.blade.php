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
            <a href="#about-us" class="btn btn-white btn-animated">Know more about us</a>
        </div>

    </header>

    <div id="about-us" class="about-us">
        <h2 id="about-us-h2">Know More About Who We Are</h2>
        <div class="about-us-section">
            <div class="about-us-content">
                <p>Left</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="about-us-content">
                <p>Middle</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="about-us-content">
                <p>Right</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>

    @endsection

