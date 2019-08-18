@extends('layout')
@section('content')
    <header class="others">
        <div class="logo-box">
            <img src="{{asset("img/logo-full.png")}}" alt="logo" class="logo">
        </div>
        @include('nav.main')

        <div class="text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">
                    About us
                </span>
            </h1>
        </div>


    </header>
@endsection