<nav class="side-navbar box-scroll sidebar-scroll">
    <span class="heading">Контент</span>
    <ul class="list-unstyled">
        <li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i class="la la-list-alt"></i><span>Блог</span></a>
            <ul id="dropdown-ui" class="collapse list-unstyled pt-0">
                <li><a href="{{ route('blog.list') }}">Список</a></li>
                <li><a href="{{ route('blog.create') }}">Создать</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-tables" aria-expanded="false" data-toggle="collapse"><i class="la la-th-large"></i><span>Работы</span></a>
            <ul id="dropdown-tables" class="collapse list-unstyled pt-0">
                <li><a href="{{ route('works.list') }}">Список</a></li>
                <li><a href="{{ route('works.create') }}">Создать</a></li>
            </ul>
        </li>

        <li><a href="{{ route('subscribers.list') }}"><i class="la la-user"></i><span>Подписчики</span></a></li>
        <li><a href="{{ route('contacts.list') }}"><i class="la la-envelope"></i><span>Форма обратной связи</span></a></li>
    </ul>
    <span class="heading">Страницы</span>
    <ul class="list-unstyled">
        <li><a href="#dropdown-pricing" aria-expanded="false" data-toggle="collapse"><i class="la la-usd"></i><span>Статистика</span></a>
            <ul id="dropdown-pricing" class="collapse list-unstyled pt-0">
                <li><a href="pages-pricing-tables-01.html">Style 01</a></li>
                <li><a href="pages-pricing-tables-02.html">Style 02</a></li>
            </ul>
        </li>

        <li><a href="maps-leaflet.html"><i class="la la la-exclamation"></i><span>Уведомления</span></a></li>
        <li><a href="maps-leaflet.html"><i class="la la-cog"></i><span>Настройи</span></a></li>
    </ul>
</nav>
