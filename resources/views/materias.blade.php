@extends('layouts.app'){{-- Usar este template para todos los front end --}}

{{-- Descomentar lo de abajo para agregar style especifico para cada view --}}
{{-- @section('style')
@endsection--}}

@section('content'){{--Abrimos la section para el contenido dentro del body, para el template--}}
<div class="container">
	<div class="row-fluid">
		<h1>Materias:</h1>
		<table id='table'>
			<thead>
				<tr>
					<td><h3>Clave</h3></td>
					<td><h3>Nombre</h3></td>
				</tr>
			</thead>
			<tbody id="newRow">
				@foreach($materias as $materia){{-- Trae los datos de la base de datos. --}}
					<tr id="materia-{{$materia->id}}">
						<td class="{{$materia->id}}">{{$materia->clave}}</td>
						<td class="{{$materia->id}}">{{$materia->nombre}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection{{--Terminamos la section de contenido--}}

@section('scripts'){{-- Se abre la seccion de scripts para agregar javascript especifico a cada vista --}}
	<script src="{{asset('js/maestro.js')}}"></script>
@endsection