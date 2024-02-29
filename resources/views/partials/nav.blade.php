<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg fixed-top justify-content-lg-center px-3"
    data-bs-theme="dark">
    <div class="d-lg-flex">
        <a class="navbar-brand" href="{{ route('index', false) }}">Климат и Точка Крым <span class=icon-dot>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'index') === 0 ? 'active' : '' }}"
                        aria-current="page" href="{{ route('index', false) }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'conditioners.index') === 0 ? 'active' : '' }}"
                        href="{{ route('conditioners.index', false) }}">Кондиционеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'ventilations.index') === 0 ? 'active' : '' }}"
                        href="{{ route('ventilations.index', false) }}">Вентиляция</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Услуги
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ремонтные работы</a></li>
                        <li><a class="dropdown-item" href="#">Обслуживание</a></li>
                        <li><a class="dropdown-item" href="#">Установка</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
