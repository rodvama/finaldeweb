@extends('layouts.app'){{-- Usar este template para todos los front end --}}

{{-- Descomentar lo de abajo para agregar style especifico para cada view --}}
{{-- @section('style')
@endsection--}}

@section('content'){{--Abrimos la section para el contenido dentro del body, para el template--}}
<div class="container">
	<div class="row-fluid">
		<h1>Maestros:</h1>
		<table id='table'>
			<thead>
				<tr>
					<td><h3>Nombre</h3></td>
					<td><h3>Nomina</h3></td>
					<td><h3>Telefono</h3></td>
				</tr>
			</thead>
			<tbody id="newRow">
				@foreach($maestros as $maestro){{-- Trae los datos de la base de datos. --}}
					<tr id="maestro-{{$maestro->id}}">
						<td class="{{$maestro->id}}">{{$maestro->nombre}}</td>
						<td class="{{$maestro->id}}">{{$maestro->nomina}}</td>
						<td class="{{$maestro->id}}">{{$maestro->telefono}}</td>
						<td>
							<button class="btn" id="editar-{{$maestro->id}}" onclick="editarMaestro('{{$maestro->id}}')">Editar</button>
							<button class="btn" id="guardar-{{$maestro->id}}" style="display: none" onclick="guardarMaestro('{{$maestro->id}}')">Guardar</button>
						</td>
						<td><button class="btn" onclick="eliminarMaestro('{{$maestro->id}}')">Eliminar</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	
	<div class="row-fluid">
		<h1>Subir Maestro</h1>
		<form id="myForm">
			<p>Nomina:</p>
			<input type="text" name="nomina">
			<p>Nombre:</p>
			<input type="text" name="nombre">
			<p>Telefono</p>
			<input type="number" name="telefono">
			<button class="btn waves-effect waves-light" type="submit" name="action" onclick="subirMaestro()">Submit<i class="material-icons right">send</i></button>
		</form>
	</div>
</div>
@endsection{{--Terminamos la section de contenido--}}

@section('scripts'){{-- Se abre la seccion de scripts para agregar javascript especifico a cada vista --}}
	<script src="{{asset('js/maestro.js')}}"></script>
@endsection