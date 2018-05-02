<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salones extends Model
{
	protected $fillable = [
        'numSalon', 'capacidad', 'admin',
    ];   
}
