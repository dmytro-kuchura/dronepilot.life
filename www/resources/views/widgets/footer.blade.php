<div class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-xl-3 f-col">
                        <div class="footer-static-block"><span class="opener plus"></span>
                            <h3 class="title">Контакты<span></span></h3>
                            <ul class="footer-block-contant address-footer">
                                <li class="item"><i class="fa fa-envelope"> </i>
                                    <p><a href="mailto:dronepilot.blog@gmail.com">dronepilot.blog@gmail.com </a></p>
                                </li>
                                <li class="item"><i class="fa fa-phone"> </i>
                                    <p><a href="tg://resolve?domain=fee1good_ua">Telegram </a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 footer-center">
                        <div class="row">
                            <div class="col-xl-4 f-col">
                                <div class="footer-static-block"><span class="opener plus"></span>
                                    <h3 class="title">Правила <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        @foreach($rules as $rule)
                                            <li>
                                                <a href="{{ route('map.inner', ['country' => $rule->alias]) }}"><i class="fa fa-angle-right"></i>{{ $rule->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 f-col">
                                <div class="footer-static-block"><span class="opener plus"></span>
                                    <h3 class="title">Категории <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        @foreach($result as $obj)
                                            <li>
                                                <a href="{{ route('blog.category', ['category' => $obj->alias]) }}"><i class="fa fa-angle-right"></i>{{ $obj->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 f-col">
                                <div class="footer-static-block"><span class="opener plus"></span>
                                    <h3 class="title">Дополнительно <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        <li>
                                            <a href="{{ route('contacts') }}"><i class="fa fa-angle-right"></i>Контакты</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}"><i class="fa fa-angle-right"></i>Обо мне</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog') }}"><i class="fa fa-angle-right"></i>Блог</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('map') }}"><i class="fa fa-angle-right"></i>Карта полетов</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 f-col footer-about">
                        <div class="footer-static-block"><span class="opener plus"></span>
                            <h3 class="title">Подписка на новости<span></span></h3>
                            <subscribe></subscribe>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom ">
                <div class="row mtb-30">
                    <div class="col-lg-6 ">
                        <div class="footer_social mb-sm-30 center-sm">
                            <ul class="social-icon">
                                <li>
                                    <div class="title">Подписаться :</div>
                                </li>
                                <li><a href="https://www.facebook.com/dmitry.kychyra" target="_blank" title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                                <li><a href="https://twitter.com/fee1good_ua" target="_blank" title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                                <li><a href="https://instagram.com/dmitry.k__/" target="_blank" title="Instagram" class="twitter"><i class="fa fa-instagram"> </i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCxi9O86RrN79vePnBH7c_Tg?view_as=subscriber" target="_blank" title="Youtube" class="pinterest"><i class="fa fa-youtube"> </i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-bg">
        <div class="container">
            <div class="row  align-center">
                <div class="col-12 mb-30">
                    <div class="site-link">
                        <ul>
                            <li><a href="{{ route('about') }}">Обо мне </a>/</li>
                            <li><a href="{{ route('blog') }}">Блог </a>/</li>
                            <li><a href="{{ route('contacts') }}">Контакты </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="">
                        <div class="copy-right ">© 2019 Make with <i class="fa fa-heart"> </i> by <a
                                href="javascript:void(0)">Dmitry Kuchura</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scroll-top">
    <div class="scrollup"></div>
</div>
