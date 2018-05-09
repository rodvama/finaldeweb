@extends('layouts.app'){{-- Usar este template para todos los front end --}}

{{-- Descomentar lo de abajo para agregar style especifico para cada view --}}
{{-- @section('style')
@endsection--}}

@section('content'){{--Abrimos la section para el contenido dentro del body, para el template--}}
<div class="container">
	<div class="row-fluid">
		<h1>Salones:</h1>
		<table id='table'>
			<thead>
				<tr>
					<td><h3>Numero de salon</h3></td>
					<td><h3>Capacidad</h3></td>
					<td><h3>Administrado por:</h3></td>
				</tr>
			</thead>
			<tbody id="newRow">
				@foreach($salones as $salon){{-- Trae los datos de la base de datos. --}}
					<tr id="salon-{{$salon->id}}">
						<td class="{{$salon->id}}">{{$salon->numSalon}}</td>
						<td class="{{$salon->id}}">{{$salon->capacidad}}</td>
						<td class="{{$salon->id}}">{{$salon->admin}}</td>
						<td>
							<button class="btn" id="editar-{{$salon->id}}" onclick="editarSalon('{{$salon->id}}')">Editar</button>
							<button class="btn" id="guardar-{{$salon->id}}" style="display: none" onclick="guardarSalon('{{$salon->id}}')">Guardar</button>
						</td>
						<td><button class="btn" onclick="eliminarSalon('{{$salon->id}}')">Eliminar</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row-fluid">
		<h1>Subir Salon</h1>
		<form id="myForm">
			<p>Numero de salon:</p>
			<input type="text" name="numSalon">
			<p>Capacidad:</p>
			<input type="number" name="capacidad">
			<p>Admnistrado por:</p>
			<select name="admin">
				<option value="" disabled selected>Choose your option</option>
			<?php
                $maestros = \App\maestro::all()
				?>
				@foreach($maestros as $maestro)
					<option value="{{$maestro->id}}">{{$maestro->nombre}}</option>
				@endforeach
			</select>
			<br><br>
			<button class="btn waves-effect waves-light" type="submit" name="action" onclick="subirSalon()">Submit<i class="material-icons right">send</i></button>
		</form>
	</div>
</div>
@endsection{{--Terminamos la section de contenido--}}

@section('scripts'){{-- Se abre la seccion de scripts para agregar javascript especifico a cada vista --}}
	<script src="{{asset('js/salon.js')}}"></script>
	<script src="{{asset('js/maestro.js')}}"></script>
@endsection