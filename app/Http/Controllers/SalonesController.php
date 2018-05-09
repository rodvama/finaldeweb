<?php

namespace App\Http\Controllers;

use App\salones;
use App\maestro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$salones = salones::all();//query de todos los salones con toda su info

    	return view('salones', compact('salones'));//regreamos a la vista de salones.blade.php con la info de los salones
    }

    public function guardar(Request $request)//recibimos info a guardar
    {
        $salon = salones::where('numSalon', '=', $request->input('numSalon'))->first();//checamos que no exista ya.

        if($salon === null) {//si no existe lo creamos con la info recibida Tambien se guarda en la base de datos
        	$salones = salones::create(request([
        		'numSalon', 'capacidad', 'admin'
            ]));

            return response()->json([//regresamos json con datos que se guardaron
                'estatus' => 'exito', 
                'data' => [
                    'id' => $salones->id,
                    'salon' => $salones->numSalon,
                    'capacidad' => $salones->capacidad,
                    'admin'=> $salones->admin
                ]
            ]);
        }
        else
            return response()->json(['estatus' => 'error', 'salon' => $salon->numSalon]);//si no se puedo crear, regresamos error mensaje
    }

    public function eliminar(salones $salon)//recibimos el salon  a borrar
    {
        $salon->delete();//borramos salon
        echo "exito";//regresamos mensaje de exito
    }

    public function actualizar(salones $salon, Request $request)//recibimos el salon a cambiar y los nuevos datos
    {        
        $sal = salones::where('numSalon', '=', $request->input('numSalon'))->first();//query para ver si el salon ya existe
        $flag = false;

        //Hacemos los cambios 
        $salon->capacidad = $request->capacidad;
        $salon->admin = $request->admin;

        //Si el numero de salon no existe hacer cambio y mandar true
        if ($sal === null) {
            $salon->numSalon = $request->numSalon;
            $flag = true;
        }
        $salon->save();//guardamos cambio

        return response()->json(['respuesta' => $flag, 'salon' => $salon->numSalon]);//regreamos respuesta en json
    }
}