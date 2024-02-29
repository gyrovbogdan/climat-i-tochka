@extends('layout.master')

@section('title')
    Кондиционеры
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/conditioner-card.css') }}">
@endpush


@section('content')
    @include('partials.sidebar')
    <div class="container py-3">
        @if (count($conditioners))
            <div class="row row-cols-1 row-cols-md-2 row-cols-sm-1 row-cols-lg-2 row-cols-xl-3">
                @foreach ($conditioners as $conditioner)
                    <div class="col mb-3 px-1">
                        @include('cards.conditioner', [
                            'image' => 'https://ac-snab.ru/upload/iblock/aa7/aa752cc89065b492700fad7de38abab6.jpg',
                            'name' => $conditioner['name'],
                            'brand' => $conditioner['brand'],
                            'country' => $conditioner['country'],
                            'area' => $conditioner['area'],
                            'price' => $conditioner['price'],
                            'id' => $conditioner['id'],
                        ])
                    </div>
                @endforeach
            </div>
        @else
            @include('partials.not-found-message')
        @endif
    </div>
    <div class="container ali">
        {{ $conditioners->links() }}
    </div>
@endsection
