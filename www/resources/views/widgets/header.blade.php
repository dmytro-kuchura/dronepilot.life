<header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-middle">
        <div class="container position-s">
            <div class="row m-0">
                <div class="col-xl-5 col-lg-5 menu-position col-xl-40per p-0  position-initial">
                    <div id="menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="level">
                                <a href="{{ route('blog') }}" class="page-scroll">Блог</a>
                            </li>
                            <li class="level">
                                <a href="{{ route('contacts') }}" class="page-scroll">Контакты</a>
                            </li>
                            <li class="level">
                                <a href="{{ route('about') }}" class="page-scroll">Обо мне</a>
                            </li>
{{--                            <li class="level">--}}
{{--                                <a href="{{ route('map') }}" class="page-scroll">Карта полетов--}}
{{--                                    <div class="menu-label"><span class="new-menu"> New </span></div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-6 col-xl-20per align-center left-sm p-0">
                    <div class="header-middle-left">
                        <div class="navbar-header float-none-sm">
                            <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                                <img alt="Roadie" src="/images/logo-main.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-6 col-xl-40per p-0">
                    <div class="right-side header-right-link">
                        <ul>
                            <li class="search-box">
                                <a><span></span></a>
                            </li>
                            <li class="side-toggle">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                        type="button"><i class="fa-bar"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="sidebar-search-wrap">
    <div class="sidebar-table-container">
        <div class="sidebar-align-container">
            <div class="search-closer right-side"></div>
            <div class="search-container">
                <form method="get" action="search" id="search-form">
                    <input type="text" id="s" class="search-input" name="search" placeholder="Что ищем?">
                </form>
                <span>Укажите что ищем и нажмите Enter</span>
            </div>
        </div>
    </div>
</div>
