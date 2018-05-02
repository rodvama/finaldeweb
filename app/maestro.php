<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestro extends Model
{
	  protected $fillable = [
        'nomina', 'nombre', 'telefono',
    ];
}
