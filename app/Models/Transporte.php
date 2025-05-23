<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $table = 'transportes';
    protected $primaryKey = 'id_transporte';

    protected $fillable = ['codigo', 'nombre', 'razon_social'];

    public function camiones(){
        return $this->hasMany('id_transporte');
    }
}
