@extends('layout.master')

@section('title')
    Кондиционеры
@endsection


@section('content')
    <!-- content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel carousel-dark border slide bg-white"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="https://www.mitsubishi.ru/upload/medialibrary/f94/%D0%9A%D0%9E%D0%9D%D0%94%D0%98%D0%A6%D0%98%D0%9E%D0%9D%D0%95%D0%A0.jpg"
                                    class="d-block w-100 " alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="https://www.mitsubishi.ru/upload/medialibrary/f94/%D0%9A%D0%9E%D0%9D%D0%94%D0%98%D0%A6%D0%98%D0%9E%D0%9D%D0%95%D0%A0.jpg"
                                    class="d-block w-100 " alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="https://www.mitsubishi.ru/upload/medialibrary/f94/%D0%9A%D0%9E%D0%9D%D0%94%D0%98%D0%A6%D0%98%D0%9E%D0%9D%D0%95%D0%A0.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $conditioner['name'] }}
                        </h4>

                        <hr />

                        <p>
                            {{ $conditioner['description'] }}
                        </p>

                        <div class="">
                            <div class='d-flex justify-content-between'>
                                <p class='text-muted'>Марка</p>
                                <p class='text-muted fw-medium'>{{ $conditioner['brand'] }}</p>
                            </div>
                            <div class='d-flex justify-content-between'>
                                <p class='text-muted'>Площадь</p>
                                <p class='text-muted fw-medium'>{{ $conditioner['area'] }} м. кв.</p>
                            </div>
                            <div class='d-flex justify-content-between'>
                                <p class='text-muted'>Страна</p>
                                <p class='text-muted fw-medium'>{{ $conditioner['country'] }}</p>
                            </div>
                        </div>

                        <div class="my-4 mx-3 btn btn-warning">
                            <span class="h5">Заказать за {{ $conditioner['price'] }}₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->

        <section class=" border-top py-4 my-4">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-lg-8 mb-4">
                        <div class="border rounded-2 px-3 py-2 bg-white">
                            <!-- Pills navs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">Установка</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">Обслуживание</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                                        aria-controls="contact-tab-pane" aria-selected="false">Часто задаваемые
                                        вопросы</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <h6 class="mt-3 px-2"> Профессиональная установка кондиционера за 3
                                        часа!</h6>
                                    <ul class="px-5">
                                        <li>Бесплатный выезд инженера для консультации.</li>
                                        <li>Подбор оптимального места для установки.</li>
                                        <li>Соблюдение всех норм и требований.</li>
                                        <li>Гарантия на монтаж 1 год.</li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">


                                    <h6 class="mt-3 px-2"> Продлите срок службы вашего кондиционера!</h6>
                                    <ul class="px-5">
                                        <li>Регулярная чистка и дезинфекция.</li>
                                        <li>Проверка работоспособности всех систем.</li>
                                        <li>Дозаправка хладагента.</li>
                                        <li>Гарантия на обслуживание 1 год.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    <h6 class="mt-3 px-2">
                                        Ответы на самые популярные вопросы о кондиционерах.</h6>
                                    <ul class="px-5">
                                        <li>Как выбрать кондиционер?</li>
                                        <li>Где лучше установить кондиционер?</li>
                                        <li>Как часто нужно чистить кондиционер?</li>
                                        <li>Сколько стоит установка кондиционера?</li>
                                    </ul>
                                    <h6 class="mt-3 px-2"> Звоните! Наши специалисты ответят на любые ваши вопросы. </h6>
                                </div>
                            </div>
                            <!-- Pills content -->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="px-0 rounded-2 shadow-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Также от этой марки:</h5>
                                    <div class="d-flex mb-3">
                                        <a href="#" class="me-3">
                                            <img src="https://www.mitsubishi.ru/upload/medialibrary/f94/%D0%9A%D0%9E%D0%9D%D0%94%D0%98%D0%A6%D0%98%D0%9E%D0%9D%D0%95%D0%A0.jpg"
                                                style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="" class="nav-link mb-1">
                                                Rucksack Backpack Large <br />
                                                Line Mounts
                                            </a>
                                            <strong class="text-dark"> $38.90</strong>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
