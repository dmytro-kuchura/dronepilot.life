<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DRONE PILOT <sup>info</sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}"><i
                class="fas fa-fw fa-tachometer-alt"></i><span>Главная</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Контент
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Статьи</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Статьи:</h6>
                <a class="collapse-item" href="{{ route('blog.list') }}">Список статей</a>
                <a class="collapse-item" href="{{ route('blog.create') }}">Создать статью</a>
                <a class="collapse-item" href="{{ route('categories.create') }}">Список категорий</a>
                <a class="collapse-item" href="{{ route('categories.create') }}">Создать категорию</a>
                <a class="collapse-item" href="{{ route('tags.create') }}">Список тегов</a>
                <a class="collapse-item" href="{{ route('tags.create') }}">Создать тег</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Обратная связь</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Подписчики</a>
                <a class="collapse-item" href="utilities-border.html">Форма обратной связи</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Остальное
    </div>

    <li class="nav-item">
        <a class="nav-link" href="charts.html"><i class="fas fa-fw fa-chart-area"></i><span>Статистика</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="charts.html"><i class="fas fa-fw fa-chart-area"></i><span>Уведомления</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html"><i class="fas fa-fw fa-table"></i><span>Настройки</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
