<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('productos\index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required|string|max:255',
            'descripcion_producto' => 'required|string',
            'precio_producto' => 'required|numeric',
            'precio_venta_producto' => 'required|numeric',
            'fecha_vencimiento_producto' => 'required|date',
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente.');
    }

    public function edit(Producto $producto)
    {
        $producto = Producto::findOrFail($producto->id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre_producto' => 'required|string|max:255',
            'descripcion_producto' => 'required|string',
            'precio_producto' => 'required|numeric',
            'precio_venta_producto' => 'required|numeric',
            'fecha_vencimiento_producto' => 'required|date',
        ]);
        
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}