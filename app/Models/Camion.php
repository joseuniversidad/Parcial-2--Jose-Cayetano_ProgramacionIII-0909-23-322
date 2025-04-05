<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camion';
    protected $primaryKey = 'id_camion';

    protected $fillable = ['placa', 'codig_interno', 'color','modelo', 'capacidad_toneladas', 'id_transporte', 'id_marca'];

    public function camiones(){
        return $this->hasMany('id_transporte');
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca', 'id_marca');
    }
    
    public function transportes()
    {
        return $this->belongsTo(Transporte::class, 'id_transporte', 'id_transporte');
    }

}
