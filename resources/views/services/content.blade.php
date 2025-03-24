@extends('layouts.app')

@section('title', 'Mazagan Informática')

@section('content')
    @include('services.banner')

    @if($service == 'macloud')
        @include('services.macloud')
    @elseif($service == 'gestaodeativos')
        @include('services.gestaodeativos')
    @elseif($service == 'suportetecnico')
        @include('services.suportetecnico')
    @elseif($service == 'consultoria')
        @include('services.consultoria')
    @elseif($service == 'terceirizacao')
        @include('services.terceirizacao')
    @elseif($service == 'criacaodesites')
        @include('services.criacao-de-sites')
    @elseif($service == 'emailcorporativo')
        @include('services.e-mail-corporativo')
    @elseif($service == 'segurancadedados')
        @include('services.segurança-de-dados')
    @endif

@endsection

@section('scripts')
@endsection
