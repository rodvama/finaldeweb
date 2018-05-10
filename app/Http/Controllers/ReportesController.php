<?php
/**
 * Created by PhpStorm.
 * User: jessicamcavazoserhard
 * Date: 5/8/18
 * Time: 7:42 PM
 */

namespace App\Http\Controllers;

use App\grupos;
use App\maestro;
use App\salones;
use App\materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function salonesDeMaestro(maestro $maestro) {

        $grupos = grupos::where('profesor', '=', $maestro->nombre)->distinct()->get();

        if ($grupos === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($grupos)]);
    }

    public function gruposDeMateria(request $request) {

        $materia = grupos::where('clave', '=', $request->materia)->distinct()->get();

        if ($materia === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($materia)]);
    }

    public function salonEnHorario(Request $request) {

        $salones = grupos::select('clave')->where('horario', '!=', $request->horario)->distinct()->get();

        if($salones === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($salones)]);
    }

    public function profesorDisponibleEnHorario(Request $request) {

        $maestro = grupos::select('profesor')->where('horario', '!=', $request->disponible)->distinct()->get();

        if($maestro === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($maestro)]);
    }

    public function profesorNoDisponibleEnHorario(Request $request) {

        $maestro = grupos::select('profesor')->where('horario', '=', $request->ocupado)->distinct()->get();

        if($maestro === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($maestro)]);
    }

    public function claseEnHorario(Request $request) {

        $clase = grupos::select('horario')->where('salon', '=', $request->salon)->distinct()->get();

        if($clase === null)
            return response()->json(['data' => 'error']);
        else
            return response()->json(['data' => json_encode($clase)]);

    }

    public function index()
    {
        $maestros = maestro::all();//Traer maestros para opciones
        $materias = materias::all();
        $salones = salones::all();

        return view('reportes', compact('maestros'), compact('materias'))->with(compact('salones'));//regreamos a la vista de maestros.blade.php con la info de los salones
    }
}