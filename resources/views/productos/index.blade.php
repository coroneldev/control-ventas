@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Listado de Productos</h1>
        <a href="{{ route('productos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Nuevo Producto
        </a>
    </div>

    <!-- Tabla de productos -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 font-medium text-gray-700">ID</th>
                    <th class="px-6 py-3 font-medium text-gray-700">Nombre</th>
                    <th class="px-6 py-3 font-medium text-gray-700">Precio</th>
                    <th class="px-6 py-3 font-medium text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Productos de prueba -->
                <tr>
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">Producto Demo</td>
                    <td class="px-6 py-4">$100.00</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="#" class="text-blue-500 hover:underline">Editar</a>
                        <form action="#" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <!-- Agrega más productos aquí -->
            </tbody>
        </table>
    </div>
</div>
@endsection
