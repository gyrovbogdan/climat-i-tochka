@extends('layout.master')

@section('title')
    Example
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/welcome-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/features.css') }}">
@endpush

@section('content')
    @include('partials.welcome-carousel')
    @include('partials.welcome-cards')
    @include('partials.features')
@endsection
