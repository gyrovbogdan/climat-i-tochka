@extends('web.layout.master')

@section('title')
    Купить кондиционер в Симферополе недорого | Установка кондиционеров | Климат и Точка Крым
@endsection

@section('meta')
    @include('web.layout.partials.meta', [
        'description' =>
            'Климат и точка Крым. Установка кондиционеров в Симферополе - широкий выбор сплит-систем по доступным ценам. Профессиональная установка. Официальная гарантия.',
        'ogTitle' => 'Купить кондиционер в Симферополе недорого | Установка кондиционеров | Климат и Точка Крым',
        'ogDescription' => 'Купить кондиционер в Симферополе по выгодной цене. Большой выбор сплит-систем. Профессиональная установка.
                                                Сервисное обслуживание. Климат и Точка Крым',
        'ogUrl' => env('APP_URL') . '/conditioners',
    ])
@endsection

@push('stylesheets')
    @vite(['public/css/app/sections/conditioner/index/card.css', 'public/css/app/sections/conditioner/index/sidebar.css'])
@endpush

@section('content')

    @include('web.sections.conditioner.index.sidebar', [
        'filterByArray' => [
            'Марка' => ['name' => 'brand', 'values' => $filterList['brand']],
            'Площадь помещения' => ['name' => 'area', 'values' => $filterList['area']],
            'Тип кондиционера' => ['name' => 'type', 'values' => $filterList['type']],
        ],
        'filterByBoolean' => ['Инвертор' => 'inverter', 'Wi-Fi' => 'wi-fi'],
    ])

    <div class="container py-3">
        @if (count($models))
            <div class="row row-cols-1 row-cols-md-2 row-cols-sm-1 row-cols-lg-2 row-cols-xl-3">
                @foreach ($models as $model)
                    <div class="col mb-3 px-1">
                        @include('web.sections.conditioner.index.card', [
                            'image' => $model['conditioner']['images'][0] ?? 'placeholder.jpg',
                            'name' => $model['conditioner']['name'] . ' ' . $model['name'],
                            'brand' => $model['conditioner']['brand'],
                            'type' => $model['conditioner']['type'],
                            'inverter' => $model['conditioner']['inverter'],
                            'area' => $model['area'],
                            'price' => $model['price'],
                            'promo_price' => $model['promo_price'],
                            'id' => $model['id'],
                        ])
                    </div>
                @endforeach
            </div>
        @else
            @include('web.sections.conditioner.index.not-found-message')
        @endif
    </div>
    <div class="container ali">
        {{ $models->withQueryString()->links() }}
    </div>
@endsection
