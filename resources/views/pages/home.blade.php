@extends('layouts.site')

@section('title', 'Caio Fernandes | Soluções Ambientais')

@section(
    'meta_description',
    'Licenciamento ambiental, estudos de fauna e flora, educação ambiental e consultoria técnica.'
)

@section('content')

    @include('pages.home.sections.hero')

    @include('pages.home.sections.services')

    @include('pages.home.sections.statistics')

    @include('pages.home.sections.about')

    @include('pages.home.sections.book')

    @include('pages.home.sections.projects')

    @include('pages.home.sections.clients')

    @include('pages.home.sections.clipping')

    @include('pages.home.sections.contact-cta')

@endsection