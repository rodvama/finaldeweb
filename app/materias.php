<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    protected $fillable = [
        'clave', 'nombre', 'laboratorio',
    ];
}
