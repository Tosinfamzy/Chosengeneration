
@extends('layout')
@section('content')

    @include('nav.main')

    <style>
        /*@import url("https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap");*/
        * {
            font-family: "Saira Semi Condensed", sans-serif;
            transition: all 0.5s ease;
        }

        body {
            background: #7ed56f;
        }

        .container {
            width: 100%;
            height: 100%;
            padding: 0 16px;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 400px;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
        }
        form div, form label, form input, form textarea {
            width: 100%;
        }

        .field:nth-of-type(2) {
            margin: 16px 0;
        }

        label, input, textarea {
            padding: 8px;
        }

        label, [placeholder] {
            color: #555;
        }

        label i {
            margin: 0 10px 0 0;
        }

        .field:focus-within label {
            color: #000;
            letter-spacing: 2px;
        }

        input, textarea {
            background: rgba(255, 255, 255, 0.5);
            border: none;
            border-radius: 4px;
            box-shadow: 0 8px 6px -6px #555;
        }
        input:focus, textarea:focus {
            background: white;
            box-shadow: none;
        }

        textarea {
            resize: none;
        }
        textarea::-webkit-scrollbar {
            width: 0;
        }

        button {
            background: #2f4ad0;
            margin: 16px 0 50px 0;
            padding: 8px 16px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 8px 6px -6px #555;
        }
        button:hover {
            letter-spacing: 2px;
            box-shadow: none;
        }

        .social-media {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
        }
        :not(.social-media) {
            /*font-size: 14px;*/
        }
        .social-media span {
            font-size: 16px;
        }
        .social-media span .fas {
            margin: 0 0 0 10px;
        }
        .social-media a {
            color: #000;
            font-size: 20px;
        }

        @media (max-width: 425px) {
            form {
                width: 100%;
            }
        }

    </style>
    <header>
        <div class="logo-box">
            <img src="{{asset("img/logo-full.png")}}" alt="logo" class="logo">
        </div>
        <div class="text-box">
            <h1 class="heading-primary">
            <span class="heading-primary-main">
               Contact Us
            </span>
            </h1>
        </div>

    </header>

<div class="container">
    <form>
        <div class="field" tabindex="1">
            <label for="username">
                <i class="far fa-user"></i>Your Name
            </label>
            <input name="username" type="text" placeholder="e.g. john doe" required>
        </div>
        <div class="field" tabindex="2">
            <label for="email">
                <i class="far fa-envelope"></i>Your Email
            </label>
            <input name="email" type="text" placeholder="email@domain.com" required>
        </div>
        <div class="field" tabindex="3">
            <label for="message">
                <i class="far fa-edit"></i>Your Message
            </label>
            <textarea name="message" placeholder="type here" required></textarea>
        </div>
        <button type="reset">Send Us a Message</button>

    </form>
</div>

@endsection