<footer role="footer">
    <h1>
        <a href="{{ route('home') }}" title="Drone Pilot | blog">
            <img src="/images/logo.png" title="Drone Pilot | blog" alt="Drone Pilot | blog"/>
        </a>
    </h1>

    <div class="contat-from-wrapper">
        <form method="post">
            <div class="row">
                <div class="col-md-offset-4 col-md-3">
                    <input name="name" id="name" type="text" placeholder="Введите Ваше имя">
                </div>

                <div class="col-md-3">
                    <input name="submit" class="submit" id="submit" type="submit" value="Отправить" style="margin: 0">
                </div>
            </div>
        </form>
    </div>

    <nav role="footer-nav">
        <ul>
            {{--            <li class="{{ $uri === 'works' ? 'nav-active' : '' }}">--}}
            {{--                <a href="{{ route('works') }}" title="Работы">Работы</a>--}}
            {{--            </li>--}}
            <li class="{{ $uri === 'about' ? 'nav-active' : '' }}">
                <a href="{{ route('about') }}" title="Обо мне">Обо мне</a>
            </li>
            <li class="{{ $uri === 'blog' ? 'nav-active' : '' }}">
                <a href="{{ route('blog') }}" title="Блог">Блог</a>
            </li>
            <li class="{{ $uri === 'contacts' ? 'nav-active' : '' }}">
                <a href="{{ route('contacts') }}" title="Контакты">Контакты</a>
            </li>
        </ul>
    </nav>
    <ul role="social-icons">
        <li><a href="https://www.facebook.com/dmitry.kychyra"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/dmitry.k__/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
    <p class="copy-right">&copy; 2019 Kuchura Dmitry</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
<!-- custom -->
<script src="{{ asset('/js/nav.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/custom.js') }}" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/effects/masonry.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/effects/imagesloaded.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/effects/classie.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/effects/AnimOnScroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/effects/modernizr.custom.js') }}"></script>
<!-- jquery.countdown -->
<script src="{{ asset('/js/html5shiv.js') }}" type="text/javascript"></script>
