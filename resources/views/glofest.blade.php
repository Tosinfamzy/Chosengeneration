@extends('layout')
@section('content')
    @include('nav.main')
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
    @endsection