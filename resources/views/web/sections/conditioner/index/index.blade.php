@extends('web.layout.master')

@section('title')
    Кондиционеры
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}?v1.0">
    <link rel="stylesheet" href="{{ asset('css/conditioner-card.css') }}?v1.0">
@endpush

@section('content')

    @include('web.sections.conditioner.index.sidebar', [
        'filterByArray' => [
            'Марка' => ['name' => 'brand', 'values' => $filter['brand']],
            'Площадь помещения' => ['name' => 'area', 'values' => $filter['area']],
            'Тип кондиционера' => ['name' => 'type', 'values' => $filter['type']],
        ],
        'filterByBoolean' => ['Инвертор' => 'invertor', 'Wi-Fi' => 'wi-fi'],
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
                            'invertor' => $model['conditioner']['invertor'],
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
        {{ $models->links() }}
    </div>
@endsection
