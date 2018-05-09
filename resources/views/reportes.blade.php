<?php
/**
 * Created by PhpStorm.
 * User: jessicamcavazoserhard
 * Date: 5/8/18
 * Time: 8:18 PM
 */

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
        <h1>Salones de Maestro</h1>
        <form id="salonDeMaestro">
            <p>Nombre del maestro:</p>
            <input type="text" name="maestro">
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="salonesDeMaestro()">Submit<i class="material-icons right">send</i></button>
        </form>
    </div>

    <div class="row-fluid">
        <h1>Grupos de Materia</h1>
        <form id="gruposDeMateria">
            <p>Nombre de materia:</p>
            <input type="text" name="materia">
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="gruposDeMateria()">Submit<i class="material-icons right">send</i></button>
        </form>
    </div>

    <div class="row-fluid">
        <h1>Disponibilidad de Salones</h1>
        <form id="salonEnHorario">
            <p>Horario:</p>
            <select>
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
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="salonEnHorario()">Submit<i class="material-icons right">send</i></button>
        </form>
    </div>

        <div class="row-fluid">
            <h1>Profesores Disponibles</h1>
            <form id="profesorDisponibleEnHorario">
                <p>Horario:</p>
                <select>
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
                <button class="btn waves-effect waves-light" type="submit" name="action" onclick="profesorDisponibleEnHorario()">Submit<i class="material-icons right">send</i></button>
            </form>
        </div>

    <div class="row-fluid">
        <h1>Profesores en clase</h1>
        <form id="profesorNoDisponibleEnHorario">
            <p>Horario:</p>
            <select>
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
        </form>
    </div>

    <div class="row-fluid">
        <h1>Clases en Horario</h1>
        <form id="claseEnHorario">
            <p>Horario:</p>
            <select>
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
        </form>
    </div>
</div>
@endsection{{--Terminamos la section de contenido--}}

@section('scripts'){{-- Se abre la seccion de scripts para agregar javascript especifico a cada vista --}}
<script src="{{asset('js/salon.js')}}"></script>
<script src="{{asset('js/maestro.js')}}"></script>
@endsection