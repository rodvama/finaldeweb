<?php

namespace App\Http\Controllers;

use App\grupos;
use App\salones;
use App\maestro;
use App\materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GruposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$grupos = grupos::all();
        $materias = materias::all();
        $maestros = maestro::all();
        $salones = salones::all();

    	return view('grupos', compact('grupos'), compact('materias'))->with(compact('maestros'))->with( compact('salones'));
    }

    public function guardar(Request $request)//recibimos info a guardar
    {
        $grupo = grupos::where('numGrupo', '=', $request->input('numGrupo'))->first();//checamos que no exista ya.

        if($grupo === null) {//si no existe lo creamos con la info recibida Tambien se guarda en la base de datos
        	$grupos = grupos::create(request([
        		'clave', 'numGrupo', 'horario', 'laboratorio', 'salon', 'profesor', 'responsabilidad', 'ingles', 'honors',
            ]));

            return response()->json([//regresamos json con datos que se guardaron
                'estatus' => 'exito', 
                'data' => [
                    'id' => $grupos->id,
                    'clave' => $grupos->clave,
                    'numGrupo' => $grupos->numGrupo,
                    'horario'=> $grupos->horario,
                    'laboratorio' => $grupos->laboratorio,
                    'salon' => $grupos->salon,
                    'profesor'=> $grupos->profesor,
                    'responsabilidad' => $grupos->responsabilidad,
                    'ingles' => $grupos->ingles,
                    'honors'=> $grupos->honors
                ]
            ]);
        }
        else
            return response()->json(['estatus' => 'error', 'grupo' => $grupo->numGrupo]);//si no se puedo crear, regresamos error mensaje
    }

    public function eliminar(grupos $grupo)//recibimos el grupo  a borrar
    {
        $grupo->delete();//borramos grupo
        echo "exito";//regresamos mensaje de exito
    }

    public function actualizar(grupos $grupo, Request $request)//recibimos el grupo a cambiar y los nuevos datos
    {        
        $gpo = grupos::where('numGrupo', '=', $request->input('numGrupo'))->first();//query para ver si el salon ya existe
        $flag = false;

        //Hacemos los cambios 
        $grupo->clave = $request->clave;
        $grupo->horario = $request->horario;
        $grupo->laboratorio = $request->laboratorio;
        $grupo->salon = $request->salon;
        $grupo->profesor = $request->profesor;
        $grupo->responsabilidad = $request->responsabilidad;
        $grupo->ingles = $request->ingles;
        $grupo->honors = $request->honors;

        //Si el numero de grupo no existe hacer cambio y mandar true
        if ($gpo === null) {
            $grupo->numGrupo = $request->numGrupo;
            $flag = true;
        }
        $grupo->save();//guardamos cambio

        return response()->json(['respuesta' => $flag, 'grupo' => $grupo->numGrupo]);//regreamos respuesta en json
    }
}