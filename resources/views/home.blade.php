@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Bienvenido, {{ Auth::user()->name }}</h1>
    <p>Seleccioná una opción del menú lateral para comenzar.</p>

    <form method="POST" action="{{ route('logout') }}" class="mt-6">
        @csrf
        <button type="submit" class="py-2 px-4 bg-red-500 text-white rounded hover:bg-red-600">
            Cerrar sesión
        </button>
    </form>
@endsection
