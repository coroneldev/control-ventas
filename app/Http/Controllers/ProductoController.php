<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Mostrar lista de productos
        return view('productos.index');
    }

    public function create()
    {
        // Mostrar formulario para crear un producto
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar el producto
        // Producto::create($request->all()); // Solo cuando esté el modelo
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function show($id)
    {
        // Mostrar detalles de un producto
        return view('productos.show', compact('id'));
    }

    public function edit($id)
    {
        // Mostrar formulario para editar un producto
        return view('productos.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar el producto
        // Producto::find($id)->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($id)
    {
        // Eliminar el producto
        // Producto::destroy($id);
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
