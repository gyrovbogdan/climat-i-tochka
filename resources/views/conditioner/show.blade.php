@extends('layout.master')

@section('title')
    Кондиционер {{ $model['conditioner']['brand'] }}
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/conditioner-show.css') }}">
@endpush

@section('content')
    <!-- content -->
    <section class="py-5">
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-lg-6">
                        @include('conditioner.show-carousel', [
                            'images' => $model['conditioner']['images'] ?? ['placeholder.jpg'],
                            'promo_price' => $model['promo_price'],
                            'price' => $model['price'],
                        ])
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-3 mt-2">
                            <h4 class="title text-dark">
                                {{ $model['conditioner']['name'] . ' ' . $model['name'] }}
                            </h4>

                            <hr />

                            <p class="fw-semibold">
                                {!! $model['conditioner']['description'] !!}
                            </p>

                            <hr>
                            <div class="fw-medium">
                                <a class='d-flex justify-content-between'
                                    href="{{ route('conditioners.index', ['brand[]' => $model['conditioner']['brand']]) }}">
                                    <p class='text-muted'>Марка</p>
                                    <p class='text-muted'>{{ $model['conditioner']['brand'] }}</p>
                                </a>
                                <a class='d-flex justify-content-between'
                                    href="{{ route('conditioners.index', ['area[]' => $model['conditioner']['area']]) }}">
                                    <p class='text-muted'>Площадь</p>
                                    <p class='text-muted'>{{ $model['area'] }} м. кв.</p>
                                </a>
                                <a class='d-flex justify-content-between'
                                    href="{{ route('conditioners.index', ['type[]' => $model['conditioner']['type']]) }}">
                                    <p class='text-muted'>Тип установки</p>
                                    <p class='text-muted'>{{ $model['conditioner']['type'] }}</p>
                                </a>
                                <a class='d-flex justify-content-between'
                                    href="{{ route('conditioners.index', ['invertor' => $model['conditioner']['invertor']]) }}">
                                    <p class='text-muted'>Инвертор</p>
                                    <p class='text-muted'>{{ $model['conditioner']['invertor'] ? 'Да' : 'Нет' }}</p>
                                </a>

                                <div class='d-flex justify-content-between'>
                                    <p class='text-muted'>Страна</p>
                                    <p class='text-muted'>{{ $model['conditioner']['country'] }}</p>
                                </div>


                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="my-4 mx-3 btn btn-buy">
                                    <span class="h5">Заказать за
                                        @if ($model['promo_price'])
                                            <strong
                                                class="fs-5">{{ number_format($model['promo_price'], 2, ',', ' ') }}₽</strong>
                                            <span
                                                class='text-decoration-line-through text-muted'>{!! number_format($model['price'], 2, ',', '&nbsp') !!}₽</span>
                                        @else
                                            <strong
                                                class="fs-5">{{ number_format($model['price'], 2, ',', ' ') }}₽</strong>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->

        <section class=" border-top py-4 my-4">
            <div class="container">
                <div class="row gx-4">
                    @include('partials.tabs', [
                        'model' => $model,
                        'services' => $services,
                        'additionalServices' => $additionalServices,
                    ])
                    @include('partials.also', [
                        'conditioner' => $fromSeries[0],
                        'models' => $fromSeries[0]['conditionerModel']->where('id', '!=', $model['id']),
                    ])
                </div>
            </div>
        </section>

    </section>
@endsection
