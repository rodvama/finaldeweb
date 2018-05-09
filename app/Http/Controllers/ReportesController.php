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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReportesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function salonesDeMaestro(Request $request) {
        $ma = salones::where('admin', '=', $request->input('maestro'))->first();//query para ver si el maestro ya existe
        $flag = false;


    }

    public function gruposDeMateria(Request $request) {
        $ma = salones::where('admin', '=', $request->input('maestro'))->first();//query para ver si el maestro ya existe
        $flag = false;


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
        //$maestros = maestro::all();//query de todos los maestros con toda su info

        return view('reportes');//regreamos a la vista de maestros.blade.php con la info de los salones
    }
}