<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camion';

    protected $fillable = ['placa', 'codig_interno', 'color','modelo', 'capacidad_toneladas', 'id_transporte', 'id_marca'];

    public function camiones(){
        return $this->hasMany('id_transporte');
    }

}
