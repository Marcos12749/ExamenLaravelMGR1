<?php

namespace App\Http\Controllers;

use App\Models\ProductMGR;
use Illuminate\Http\Request;

class ProductMGRController extends Controller
{
    // Mostrar listado
    public function index()
    {
        $products = ProductMGR::all();
        return view('products.index_mgr', compact('products'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('products.create');
    }

    // Guardar producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0'
        ]);

        ProductMGR::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto creado correctamente');
    }

    // Mostrar un producto individual
    public function show($id)
    {
        $product = ProductMGR::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $product = ProductMGR::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Actualizar producto
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0'
        ]);

        $product = ProductMGR::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    // Eliminar producto
    public function destroy($id)
    {
        $product = ProductMGR::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado correctamente');
    }
}
