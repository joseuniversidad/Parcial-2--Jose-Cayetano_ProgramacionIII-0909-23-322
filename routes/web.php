<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MarcaController;   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\PeliculaController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('productos', ProductoController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('camiones', 'App\Http\Controllers\CamionController');
Route::resource('transportes', 'App\Http\Controllers\TransporteController');
Route::patch('camiones/{id}', [CamionController::class, 'update'])->name('camiones.update');
Route::delete('camiones/{camion}', [CamionController::class, 'destroy'])->name('camiones.destroy');
Route::delete('transportes/{id}', [TransporteController::class, 'destroy'])->name('transportes.destroy');
Route::get('/peliculas', [PeliculaController::class, 'index']);
Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/create', [PeliculaController::class, 'create'])->name('peliculas.create');
Route::get('/peliculas/{id}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
Route::delete('/peliculas/{id}', [PeliculaController::class, 'destroy'])->name('peliculas.destroy');
Route::post('/peliculas', [PeliculaController::class, 'store'])->name('peliculas.store');
Route::put('/peliculas/{id}', [PeliculaController::class, 'update'])->name('peliculas.update');
Route::get('/peliculas/{id}', [PeliculaController::class, 'show'])->name('peliculas.show');
Route::get('/camiones', [CamionController::class, 'index'])->name('camiones.index');

