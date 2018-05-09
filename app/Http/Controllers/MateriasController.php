<?php

namespace App\Http\Controllers;

use App\materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$materias = materias::all();//query de todos los maestros con toda su info

    	return view('materias', compact('materias'));//regreamos a la vista de maestros.blade.php con la info de los salones
    }
}