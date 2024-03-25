<section id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item promo-item active">
            <div class="container h-100 px-5 pb-5">
                <div class="row h-100">
                    <div class="col-lg-6">
                        <div class="d-flex w-100 h-100 justify-content-center">
                            <div class="conditioner-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div class="text-center d-flex justify-content-lg-center flex-column">
                            <div class="card bg-transparent bg-darkened bg-blur border-white">
                                <h1
                                    class="text-white fw-semibold bg-danger bg-gradient card-img-top border-bottom border-white h2 py-1">
                                    @if (isset($model['promo_price']))
                                        СКИДКА
                                        <span class=''>
                                            -{{ (1 - round($model['promo_price'] / $model['price'], 2)) * 100 }}%</span>
                                    @else
                                        <span class=''>ХИТ-ПРОДАЖ!</span>
                                    @endif
                                </h1>
                                <div class="card-body">
                                    <h1 class="rounded-4-bottom fw-semibold text-danger ">
                                        @if (isset($model['promo_price']))
                                            <span class='text-decoration-line-through text-light fs-2'>
                                                {!! number_format($model['price'], 2, ',', '&nbsp;') !!}₽
                                            </span>
                                            <strong class="">
                                                {!! number_format($model['promo_price'], 2, ',', '&nbsp;') !!}₽
                                            </strong>
                                        @else
                                            @if (isset($model['price']))
                                                <strong
                                                    class="fs-3">{{ number_format($model['price'], 2, ',', ' ') }}₽</strong>
                                            @endif
                                        @endif
                                    </h1>
                                    <div class="">
                                        <h1 class="mx-auto text-light h3 fs-5">
                                            {{ $model['conditioner']['name'] ?? '-' }}
                                        </h1>
                                    </div>
                                    <div>
                                        @if (isset($model['id']))
                                            <a href="{{ route('conditioners.show', ['conditioner' => $model['id']]) }}"
                                                class="btn btn-lg btn-outline-light my-2">Подробнее</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item service-item">
            <div class="container">
                <div class="carousel-caption text-start">
                    <div class="card-body">
                        <h1 class="text-white">{{ $service['name'] ?? '-' }}</h1>
                        <h1 class="rounded-4-bottom fw-semibold text-danger ">
                            @if (isset($service['price']))
                                {!! is_numeric($service['price']) ? number_format($service['price'], 2, ',', '&nbsp;') : $service['price'] !!}₽
                            @endif
                        </h1>
                        <div>
                            <p class="mx-auto text-light h3 fs-5">Дышите легко!
                            </p>
                        </div>
                        <div>
                            <button class="btn btn-lg btn-outline-light my-2" data-bs-toggle="modal"
                                data-bs-target="#contact-modal">Подробнее</и>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item conditioners-item">
            <div class="container">
                <div class="carousel-caption text-center d-flex flex-column align-items-center">
                    <h1>Установка кондиционера</h1>
                    <p class="caption-text fw-semibold">Для любых целей и под любой кошелек</p>
                    <p><a class="btn btn-lg btn-light" href="{{ route('conditioners.index') }}">Посмотреть
                            кондиционеры</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
