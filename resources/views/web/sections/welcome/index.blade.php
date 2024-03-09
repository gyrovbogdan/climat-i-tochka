@extends('web.layout.master')


@push('stylesheets')
    @vite(['public/css/app/sections/welcome/cards.css', 'public/css/app/sections/welcome/carousel.css', 'public/css/app/sections/welcome/features.css'])
@endpush

@section('content')
    @include('web.sections.welcome.carousel')
    @include('web.sections.welcome.cards')
    @include('web.sections.welcome.features')
@endsection
