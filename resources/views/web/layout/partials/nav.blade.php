<nav class="navbar navbar-expand-lg fixed-top main-color bg-main fw-bold bg-gradient" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index', false) }}">Климат и Точка Крым <span class=icon-dot>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'index') === 0 ? 'active' : '' }}"
                        href="{{ route('index', false) }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'conditioners') === 0 ? 'active' : '' }}"
                        href="{{ route('conditioners.index', false) }}">Кондиционеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'ventilations') === 0 ? 'active' : '' }}"
                        href="{{ route('ventilations.index', false) }}">Вентиляция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(Route::currentRouteName(), 'services') === 0 ? 'active' : '' }}"
                        href="{{ route('services.index', false) }}">Услуги</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="modal" data-bs-target="#contact-modal">
                        Контакты
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

@include('web.layout.partials.contact-modal')
