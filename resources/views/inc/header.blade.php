<div>
<header>
    <div class="header-navigation">
        <img src="{{asset('img/logo-full.png')}}" alt="" height="150px" width="350px">
        <div class="navigation">
            <ul>
                <li><a href="/about">About</a></li>
                <li><a href="/glofest">Glofest</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="overlay"></div>
        {{--Abstract the video--}}
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{asset('img/bg-video.mp4')}}" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">Chosen Generation</h1>
                <p class="lead mb-0">Adding value to the lives of young people</p>
            </div>
        </div>
    </div>
</header>
</div>
