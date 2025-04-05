<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;


class MarcaController extends Controller
{
    public  function index()
    {
         $marcas = Marca::paginate(10);
        return view('marcas.index', compact('marcas'));
    }
    public function create()
    {
        return view('marcas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            
            'descripcion' => 'required|string',
        ]);

        Marca::create($request->all());
        return redirect()->route('marcas.index')->with('success', 'Marca agregada correctamente.');
    }
    public function edit(Marca $marca)
    {
        return view('marcas.edit', compact('marca'));
    }
    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'descripcion' => 'required|string',
        ]);

        $marca->update($request->all());
        return redirect()->route('marcas.index')->with('success', 'Marca actualizada correctamente.');
    }
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marcas.index')->with('success', 'Marca eliminada correctamente.');
    }
}