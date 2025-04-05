<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $fillable=[
    'nombre_producto',
    'descripcion_producto',
    'precio_producto',
    'precio_venta_producto',
    'fecha_vencimiento_producto',
    ];
    
    public $timestamps=true;
    
    use HasFactory;
}
