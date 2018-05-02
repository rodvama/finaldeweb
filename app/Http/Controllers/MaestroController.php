<?php

namespace App\Http\Controllers;

use App\maestro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaestroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$maestros = maestro::all();//query de todos los maestros con toda su info

    	return view('maestros', compact('maestros'));//regreamos a la vista de maestros.blade.php con la info de los salones
    }

    public function guardar(Request $request)//recibimos info a guardar
    {
        $ma = maestro::where('nomina', '=', $request->input('nomina'))->first();//checamos que no exista ya.

        if ($ma === null) {//si no existe lo creamos con la info recibida Tambien se guarda en la base de datos
            $maestro = maestro::create(request([
        	   'nomina', 'nombre', 'telefono'
            ]));
        
            return response()->json([//regresamos json con datos que se guardaron
                'estatus' => 'exito', 
                'data' => [
                    'id' => $maestro->id,
                    'nomina' => $maestro->nomina,
                    'nombre' => $maestro->nombre,
                    'telefono'=> $maestro->telefono
                ]
            ]);
        }
        else 
            return response()->json(['estatus' => 'error', 'nom' => $ma->nomina]);//si no se puedo crear, regresamos error mensaje
    }

    public function eliminar(maestro $maestro)//recibimos maestro a borrar
    {
        $maestro->delete();//borramos maestro
        echo "exito";//regresamos mensaje de exito
    }

    public function actualizar(maestro $maestro, Request $request)//recibimos el maestro a cambiar y los nuevos datos
    {        
        $ma = maestro::where('nomina', '=', $request->input('nomina'))->first();//query para ver si el maestro ya existe
        $flag = false;

        //Hacemos los cambios 
        $maestro->nombre = $request->nombre;
        $maestro->telefono = $request->telefono;

        //Si la nomina del maestro no existe, hacer cambio y mandar true
        if ($ma === null) {
            $maestro->nomina = $request->nomina;
            $flag = true;
        }
        $maestro->save();//guardamos cambio
        return response()->json(['respuesta' => $flag, 'nom' => $maestro->nomina]);//regreamos respuesta en json
    }
}