<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::paginate(10);
        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'puntuacion' => 'required|integer|min:1|max:10',
            'actor_principal' => 'required|string|max:255',
            'actor_secundario' => 'required|string|max:255',
            'fecha_publicacion' => 'required|date',
        ]);

        
        Pelicula::create($request->all());

        return redirect()->route('peliculas.index')->with('success', 'Película creada con éxito.');
    }

    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.show', compact('pelicula'));
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.edit', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
        // Validar datos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'puntuacion' => 'required|integer|min:1|max:10',
            'actor_principal' => 'required|string|max:255',
            'actor_secundario' => 'required|string|max:255',
            'fecha_publicacion' => 'required|date',
        ]);

        // Buscar y actualizar la película
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());

        return redirect()->route('peliculas.index')->with('success', 'Película actualizada con éxito.');
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('peliculas.index')->with('success', 'Película eliminada con éxito.');
    }

    public function search(Request $request)
    {
        $busqueda = $request->input('busqueda');

        $peliculas = Pelicula::where('titulo', 'like', "%$busqueda%")
                            ->orWhere('genero', 'like', "%$busqueda%")
                            ->paginate(10);

        return view('peliculas.index', compact('peliculas'));
    }
}
