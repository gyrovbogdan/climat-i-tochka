<div id="myCarousel" class="carousel slide mb-6"{{--  data-bs-ride="carousel" --}}>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    @php
        $promo_price = $model['promo_price'];
        $price = $model['price'];
        $id = $model['id'];
        $name = $model['conditioner']['name'];
        $serviceName = 'Профессиональная чистка кондиционеров';
        $servicePrice = 3500;
    @endphp
    <div class="carousel-inner">

        <div class="carousel-item second-image active">
            <div class="container h-100 px-5">
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
                                <h2
                                    class="text-white fw-semibold bg-danger bg-gradient card-img-top border-bottom border-white py-1">
                                    @if ($promo_price)
                                        СКИДКА
                                        <span class=''>
                                            -{{ (1 - round($promo_price / $price, 2)) * 100 }}%</span>
                                    @endif
                                </h2>
                                <div class="card-body">
                                    <h1 class="rounded-4-bottom fw-semibold text-danger ">
                                        @if ($promo_price)
                                            <span class='text-decoration-line-through text-light fs-2'>
                                                {!! number_format($price, 2, ',', '&nbsp;') !!}₽
                                            </span>
                                            <strong class="">
                                                {!! number_format($promo_price, 2, ',', '&nbsp;') !!}₽
                                            </strong>
                                        @else
                                            <strong class="fs-3">{{ number_format($price, 2, ',', ' ') }}₽</strong>
                                        @endif
                                    </h1>
                                    <div class="">
                                        <h3 class="mx-auto text-light">{{ $name }}
                                        </h3>
                                    </div>
                                    <div>
                                        <a href="{{ route('conditioners.show', ['conditioner' => $id]) }}"
                                            class="btn btn-lg btn-outline-light my-2">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item first-image">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h2>{{ $serviceName }}</h2>
                    <p class="caption-text fw-semibold fs-1 text-danger">
                        {{ number_format($servicePrice, 2, ',', ' ') }}₽</p>
                    <p><a class="btn btn-lg btn-outline-light bg-blur" href="{{ route('conditioners.index') }}">
                            Заказать</a></p>
                </div>
            </div>
        </div>

        <div class="carousel-item third-image">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Дышите легко!</h1>
                    <p class="caption-text fw-semibold ml-auto">Очистка и дезинфекция систем вентиляции.</p>
                    <p><a class="btn btn-lg btn-light" href="{{ route('conditioners.index') }}">Заказать чистку</a>
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
</div>
