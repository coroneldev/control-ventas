@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Nuevo Producto</h1>

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

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block font-semibold">Nombre del producto <span class="text-red-500">*</span></label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                       class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200"
                       required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block font-semibold">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="3"
                          class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200"
                          maxlength="1000">{{ old('descripcion') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="precio" class="block font-semibold">Precio <span class="text-red-500">*</span></label>
                <input type="number" step="0.01" name="precio" id="precio" value="{{ old('precio') }}"
                       class="w-full mt-1 border border-gray-300 p-2 rounded focus:ring focus:ring-blue-200"
                       required min="0">
            </div>

            <div class="flex justify-end">
                <a href="{{ route('productos.index') }}"
                   class="mr-2 bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancelar</a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
@endsection
