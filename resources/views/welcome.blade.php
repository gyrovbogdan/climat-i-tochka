@extends('layout.master')


@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/welcome-carousel.css', false) }}">
    <link rel="stylesheet" href="{{ asset('css/features.css', false) }}">
    <link rel="stylesheet" href="{{ asset('css/welcome-cards.css', false) }}">
@endpush

@section('content')
    @include('partials.welcome-carousel')
    @include('partials.welcome-cards')
    @include('partials.features')
@endsection
