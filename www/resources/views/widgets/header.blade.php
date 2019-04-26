<header role="header">
    <div class="container">
        <h1>
            <a href="{{ route('home') }}" title="Drone Pilot | blog">
                <img src="/images/logo-main.png" title="Drone Pilot | blog" alt="Drone Pilot | blog"/>
            </a>
        </h1>
        <nav role="header-nav" class="navy">
            <ul>
                <li class="{{ $uri === 'works' ? 'nav-active' : '' }}">
                    <a href="{{ route('works') }}" title="Работы">Работы</a>
                </li>
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
    </div>
</header>
