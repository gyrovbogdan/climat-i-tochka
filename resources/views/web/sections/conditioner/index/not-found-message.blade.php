<div class="container my-5">
    <div class="position-relative p-5 text-center text-muted bg-body border rounded-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban"
            viewBox="0 0 16 16">
            <path
                d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
        </svg>
        <h1 class="text-body-emphasis">По вашему запросу ничего не найдено</h1>
        <p class="col-lg-6 mx-auto mb-4">
            Попробуйте изменить запрос или очистите его.
        </p>
        <a class="btn btn-primary px-5 mb-5" href="{{ route('conditioners.index') }}">
            Очистить
        </a>
    </div>
</div>
