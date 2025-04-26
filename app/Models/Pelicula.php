<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'pelicula';

    protected $primaryKey = 'id';

    protected $fillable = ['titulo', 'genero', 'puntuacion', 'actor_principal', 'actor_secundario', 'fecha_publicacion'];
    public function getPelicula()
    {
        return $this->hasMany('id');
    }
}
