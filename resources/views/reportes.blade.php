@extends('layouts.app'){{-- Usar este template para todos los front end --}}

{{-- Descomentar lo de abajo para agregar style especifico para cada view --}}
{{-- @section('style')
@endsection--}}

@section('content'){{--Abrimos la section para el contenido dentro del body, para el template--}}
<div class="container">
    <div class="row-fluid">
        <h1>Reportes</h1>
    </div>

    <div class="row-fluid">
        <h3>Salones de Maestro</h3>
            <p>Nombre del maestro:</p>
            <select class="browser-default" id="maestro">
                <option value="" disabled selected>Escoja el horario desado:</option>
                @foreach($maestros as $maestro)
                    <option value="{{$maestro->id}}">{{$maestro->nombre}}</option>
                @endforeach
            </select>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="salonesDeMaestro()">Submit<i class="material-icons right">send</i></button>
    </div>
    <br>
    <br>

    <div class="row-fluid">
        <h3>Grupos de Materia</h3>
            <select class="browser-default" id="materia">
                <option value="" disabled selected>Escoja el horario desado:</option>
                @foreach($materias as $materia)
                    <option value="{{$materia->clave}}">{{$materia->nombre}}</option>
                @endforeach
            </select>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="gruposDeMateria()">Submit<i class="material-icons right">send</i></button>
        </form
    </div>
    <br>
    <br>

    <div class="row-fluid">
        <h3>Disponibilidad de Salones</h3>
            <p>Horario:</p>
            <select class="browser-default" id="horario">
                <option value="" disabled selected>Escoja el horario desado:</option>
                <option value="7/3 LuJu">7/3 LuJu</option>
                <option value="8+/3 LuJu">8+/3 LuJu</option>
                <option value="10/3 LuJu">10/3 LuJu</option>
                <option value="11+/3 LuJu">11+/3 LuJu</option>
                <option value="1/3 LuJu">1/3 LuJu</option>
                <option value="2+/3 LuJu">2+/3 LuJu</option>
                <option value="4/3 LuJu">4/3 LuJu</option>
                <option value="7/3 MaVi">7/3 MaVi</option>
                <option value="8+/3 MaVi">8+/3 MaVi</option>
                <option value="10/3 MaVi">10/3 MaVi</option>
                <option value="11+/3 MaVi">11+/3 MaVi</option>
                <option value="1/3 MaVi">1/3 MaVi</option>
                <option value="2+/3 MaVi">2+/3 MaVi</option>
                <option value="4/3 MaVi">4/3 MaVi</option>
                <option value="6/6 Lu">6/6 Lu</option>
                <option value="6/6 Ma">6/6 Ma</option>
                <option value="6/6 Mi">6/6 Mi</option>
                <option value="6/6 Ju">6/6 Ju</option>
                <option value="6/6 Vi">6/6 Vi</option>
            </select>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="salonEnHorario()">Submit<i class="material-icons right">send</i></button>
    </div>
    <br>
    <br>

        <div class="row-fluid">
            <h3>Profesores Disponibles</h3>
                <p>Horario:</p>
                <select class="browser-default" id="disponible">
                    <option value="" disabled selected>Escoja el horario desado:</option>
                    <option value="7/3 LuJu">7/3 LuJu</option>
                    <option value="8+/3 LuJu">8+/3 LuJu</option>
                    <option value="10/3 LuJu">10/3 LuJu</option>
                    <option value="11+/3 LuJu">11+/3 LuJu</option>
                    <option value="1/3 LuJu">1/3 LuJu</option>
                    <option value="2+/3 LuJu">2+/3 LuJu</option>
                    <option value="4/3 LuJu">4/3 LuJu</option>
                    <option value="7/3 MaVi">7/3 MaVi</option>
                    <option value="8+/3 MaVi">8+/3 MaVi</option>
                    <option value="10/3 MaVi">10/3 MaVi</option>
                    <option value="11+/3 MaVi">11+/3 MaVi</option>
                    <option value="1/3 MaVi">1/3 MaVi</option>
                    <option value="2+/3 MaVi">2+/3 MaVi</option>
                    <option value="4/3 MaVi">4/3 MaVi</option>
                    <option value="6/6 Lu">6/6 Lu</option>
                    <option value="6/6 Ma">6/6 Ma</option>
                    <option value="6/6 Mi">6/6 Mi</option>
                    <option value="6/6 Ju">6/6 Ju</option>
                    <option value="6/6 Vi">6/6 Vi</option>
                </select>
                <br>
                <button class="btn waves-effect waves-light" type="submit" name="action" onclick="profesorDisponibleEnHorario()">Submit<i class="material-icons right">send</i></button>
        </div>
    <br>
    <br>

    <div class="row-fluid">
        <h3>Profesores en clase</h3>
            <p>Horario:</p>
            <select class="browser-default" id="ocupado">
                <option value="" disabled selected>Escoja el horario desado:</option>
                <option value="7/3 LuJu">7/3 LuJu</option>
                <option value="8+/3 LuJu">8+/3 LuJu</option>
                <option value="10/3 LuJu">10/3 LuJu</option>
                <option value="11+/3 LuJu">11+/3 LuJu</option>
                <option value="1/3 LuJu">1/3 LuJu</option>
                <option value="2+/3 LuJu">2+/3 LuJu</option>
                <option value="4/3 LuJu">4/3 LuJu</option>
                <option value="7/3 MaVi">7/3 MaVi</option>
                <option value="8+/3 MaVi">8+/3 MaVi</option>
                <option value="10/3 MaVi">10/3 MaVi</option>
                <option value="11+/3 MaVi">11+/3 MaVi</option>
                <option value="1/3 MaVi">1/3 MaVi</option>
                <option value="2+/3 MaVi">2+/3 MaVi</option>
                <option value="4/3 MaVi">4/3 MaVi</option>
                <option value="6/6 Lu">6/6 Lu</option>
                <option value="6/6 Ma">6/6 Ma</option>
                <option value="6/6 Mi">6/6 Mi</option>
                <option value="6/6 Ju">6/6 Ju</option>
                <option value="6/6 Vi">6/6 Vi</option>
            </select>
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="profesorNoDisponibleEnHorario()">Submit<i class="material-icons right">send</i></button>
    </div>
    <br>
    <br>

    <div class="row-fluid">
        <h3>Clases en Horario</h3>
            <p>Horario:</p>
            <select class="browser-default" id="clases">
                <option value="" disabled selected>Escoja el horario desado:</option>
                <option value="7/3 LuJu">7/3 LuJu</option>
                <option value="8+/3 LuJu">8+/3 LuJu</option>
                <option value="10/3 LuJu">10/3 LuJu</option>
                <option value="11+/3 LuJu">11+/3 LuJu</option>
                <option value="1/3 LuJu">1/3 LuJu</option>
                <option value="2+/3 LuJu">2+/3 LuJu</option>
                <option value="4/3 LuJu">4/3 LuJu</option>
                <option value="7/3 MaVi">7/3 MaVi</option>
                <option value="8+/3 MaVi">8+/3 MaVi</option>
                <option value="10/3 MaVi">10/3 MaVi</option>
                <option value="11+/3 MaVi">11+/3 MaVi</option>
                <option value="1/3 MaVi">1/3 MaVi</option>
                <option value="2+/3 MaVi">2+/3 MaVi</option>
                <option value="4/3 MaVi">4/3 MaVi</option>
                <option value="6/6 Lu">6/6 Lu</option>
                <option value="6/6 Ma">6/6 Ma</option>
                <option value="6/6 Mi">6/6 Mi</option>
                <option value="6/6 Ju">6/6 Ju</option>
                <option value="6/6 Vi">6/6 Vi</option>
            </select>
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="claseEnHorario()">Submit<i class="material-icons right">send</i></button>
    </div>
    <br>
    <br>
</div>
@endsection{{--Terminamos la section de contenido--}}

@section('scripts'){{-- Se abre la seccion de scripts para agregar javascript especifico a cada vista --}}
<script src="{{asset('js/reportes.js')}}"></script>
@endsection