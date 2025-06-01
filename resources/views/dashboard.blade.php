@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Bienvenido, {{ Auth::user()->name }}</h1>
    <p>Seleccioná una opción del menú lateral para comenzar.</p>
@endsection
