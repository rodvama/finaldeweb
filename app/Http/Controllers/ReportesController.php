<?php
/**
 * Created by PhpStorm.
 * User: jessicamcavazoserhard
 * Date: 5/8/18
 * Time: 7:42 PM
 */

namespace App\Http\Controllers;

use App\maestro;
use App\salones;
use App\materias;
use App\grupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function salonesDeMaestro(maestro $maestro) {

        $grupos = grupos::where('profesor', '=', $maestro->nombre)->get();

        if ($grupos === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($grupos)]);
             // return view('resp.respMaestro', compact($grupos));
    }

    public function gruposDeMateria(materias $materia) {
        $grupos = grupos::where('clave', '=', $materia->clave)->get();

        if ($grupos === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($grupos)]);
    }

    public function salonEnHorario(Request $request) {
        $ma = salones::where('admin', '=', $request->input('maestro'))->first();//query para ver si el maestro ya existe
        $flag = false;


    }

    public function profesorDisponibleEnHorario(Request $request) {
        $ma = salones::where('admin', '=', $request->input('maestro'))->first();//query para ver si el maestro ya existe
        $flag = false;


    }

    public function profesorNoDisponibleEnHorario(Request $request) {
        $ma = salones::where('admin', '=', $request->input('maestro'))->first();//query para ver si el maestro ya existe
        $flag = false;


    }

    public function claseEnHorario(Request $request) {
        $ma = salones::where('admin', '=', $request->input('maestro'))->first();//query para ver si el maestro ya existe
        $flag = false;


    }

    public function index()
    {
        $maestros = maestro::all();//Traer maestros para opciones
        $materias = materias::all();

        return view('reportes', compact('maestros'), compact('materias'));//regreamos a la vista de maestros.blade.php con la info de los salones
    }
}