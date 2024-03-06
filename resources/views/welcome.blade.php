@extends('layout.master')


@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/welcome-carousel.css') }}?v1.0">
    <link rel="stylesheet" href="{{ asset('css/features.css') }}?v1.0">
    <link rel="stylesheet" href="{{ asset('css/welcome-cards.css') }}?v1.0">
@endpush

@section('content')
    @include('partials.welcome-carousel')
    @include('partials.welcome-cards')
    @include('partials.features')
@endsection
