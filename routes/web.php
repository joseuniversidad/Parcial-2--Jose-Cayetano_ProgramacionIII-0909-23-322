<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MarcaController;   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\TransporteController;


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