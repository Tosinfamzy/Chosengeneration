    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                @if(!Request::is('/'))
                <li class="navigation__item"><a href="/" class="navigation__link"><span>01</span>Home</a></li>
                @endif
                <li class="navigation__item"><a href="/about" class="navigation__link"><span><?php echo  Request::is('/') ?'01':'02' ?></span>About</a></li>
                <li class="navigation__item"><a href="/glofest" class="navigation__link"><span><?php echo  Request::is('/') ?'02':'03' ?></span>Glofest</a></li>
                <li class="navigation__item"><a href="/events" class="navigation__link"><span><?php echo  Request::is('/') ?'03':'04' ?></span>Events</a></li>
                <li class="navigation__item"><a href="/contact" class="navigation__link"><span><?php echo  Request::is('/') ?'04':'05' ?></span>Contact</a></li>
            </ul>
        </nav>
    </div>
