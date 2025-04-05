<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;

class CamionController extends Controller
{
    public function index()
    {
        $camiones= Camion::paginate(10);
        return view('camiones.index', compact('camiones'));
    }

    public function create()
    {
        return view('camiones.create');
    }

    public function store(Request $request){
    
    $request->validate([
        'placa' => 'required|string|max:255',
        'codig_interno' => 'required|string|max:255',
        'id_transporte' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'modelo' => 'required|date|max:255',
        'capacidad_toneladas' => 'required|string|max:255',
        'id_marca' => 'required|string|max:255',
    ]);
    Camion::create($request->all());
    return redirect()->route('camiones.index')->with('success', 'Camion agregado correctamente.');
}
    public function edit($id)
    {
        $camion = Camion::findOrFail($id);
        return view('camiones.edit', compact('camion'));
    }

    public function update(Request $request, $camion)
    {
        $request->validate([
            'placa' => 'required|string|max:255',
            'codig_interno' => 'required|string|max:255',
            'id_transporte' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'modelo' => 'required|date|max:255',
            'capacidad_toneladas' => 'required|string|max:255',
            'id_marca' => 'required|string|max:255',
        ]);

        $camion = Camion::findOrFail($camion);    
        $camion->update($request->all());
        return redirect()->route('camiones.index') ->with('success', 'Camion actualizado correctamente.');
    }

    public function destroy($id)
{
    $camion = Camion::findOrFail($id);
    $camion->delete();
    return redirect()->route('camiones.index')->with('success', 'Camión eliminado correctamente.');
}
}