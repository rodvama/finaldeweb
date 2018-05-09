<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
  protected $fillable = [
    'clave', 'numGrupo', 'horario', 'laboratorio', 'salon', 'profesor', 'responsabilidad', 'ingles', 'honors',
  ];
}
