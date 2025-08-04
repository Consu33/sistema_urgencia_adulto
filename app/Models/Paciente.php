<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    protected $fillable = [
    'nombre',
    'apellido',
    'rut',
    'categoria_id',
    'estado_id'
    ];

    public function categoria() {
    return $this->belongsTo(Categoria::class);
    }

    public function estado() {
    return $this->belongsTo(Estado::class);
    }
}
