@extends('pages.base')

@section('title', 'Mi Perfil')

@section('head')
    <meta name="description" content="Página de mi perfil">
@endsection

@section('main')
<x-card-user nombre="John Doe" description="Desarrollador de software"></x-card-user>
@endsection
