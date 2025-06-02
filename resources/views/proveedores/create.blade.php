@extends('layouts.app')

@section('title', 'Crear Proveedor')

@section('content')
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Nuevo Proveedor</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <strong>Errores encontrados:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block font-semibold">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                       class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label for="telefono" class="block font-semibold">Teléfono</label>
                <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"
                       class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label for="email" class="block font-semibold">Correo electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                       class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label for="direccion" class="block font-semibold">Dirección</label>
                <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}"
                       class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200">
            </div>

            <div class="flex justify-end">
                <a href="{{ route('proveedores.index') }}"
                   class="mr-2 bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancelar</a>
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
@endsection
