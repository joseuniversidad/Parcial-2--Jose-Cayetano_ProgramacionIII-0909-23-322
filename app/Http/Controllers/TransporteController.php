<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;


class TransporteController extends Controller
{
    public function index()
    {
        $transportes = Transporte::paginate(10);
        return view('transportes.index', compact('transportes'));
    }

    public function create()
    {
        return view('transportes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:255',
            'nombre' => 'required|string',
            'razon_social' => 'required|string|max:255',
        ]);
        Transporte::create($request->all());
        return redirect()->route('transportes.index');
    }

    public function show($id)
    {
        return view('transportes.show', compact('id'));
    }

    public function edit($id)
    {
        $transporte = Transporte::findOrFail($id);
        return view('transportes.edit', compact('transporte'));
    }

    public function update(Request $request, $transporte)
    {
        
        request()->validate([
            'codigo' => 'required|string|max:255',
            'nombre' => 'required|string',
            'razon_social' => 'required|string|max:255',
        ]);
        $transporte = Transporte::findOrFail($transporte);
        $transporte->update($request->all());
        return redirect()->route('transportes.index');
    }

    public function destroy($id)
    {
        $transporte = Transporte::findOrFail($id);
        $transporte->delete($id);
        return redirect()->route('transportes.index')->with('success', 'Transporte eliminado correctamente.');

    }
}
