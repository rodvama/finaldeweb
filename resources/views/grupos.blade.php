@extends('layouts.app'){{-- Usar este template para todos los front end --}}

{{-- Descomentar lo de abajo para agregar style especifico para cada view --}}
{{-- @section('style')
@endsection--}}

@section('content'){{--Abrimos la section para el contenido dentro del body, para el template--}}
<div class="container">
	<div class="row-fluid">
		<h1>Grupos:</h1>
		<table id='table'>
			<thead>
				<tr>
					<td><h3>Materia</h3></td>
					<td><h3># Grupo</h3></td>
					<td><h3>Horario</h3></td>
          <td><h3>Laboratorio</h3></td>
					<td><h3>Salon</h3></td>
					<td><h3>Profesor</h3></td>
          <td><h3>Responsabilidad</h3></td>
					<td><h3>Ingles</h3></td>
					<td><h3>Honors</h3></td>
				</tr>
			</thead>
			<tbody id="newRow">
				@foreach($grupos as $grupo){{-- Trae los datos de la base de datos. --}}
					<tr id="grupo-{{$grupo->id}}">
						<td class="{{$grupo->id}}">{{$grupo->clave}}</td>
						<td class="{{$grupo->id}}">{{$grupo->numGrupo}}</td>
						<td class="{{$grupo->id}}">{{$grupo->horario}}</td>
            <td class="{{$grupo->id}}">{{$grupo->c}}</td>
						<td class="{{$grupo->id}}">{{$grupo->salon}}</td>
						<td class="{{$grupo->id}}">{{$grupo->profesor}}</td>
            <td class="{{$grupo->id}}">{{$grupo->responsabilidad}}</td>
						<td class="{{$grupo->id}}">{{$grupo->ingles}}</td>
						<td class="{{$grupo->id}}">{{$grupo->honors}}</td>
						<td>
							<button class="btn" id="editar-{{$grupo->id}}" onclick="editarGrupo('{{$grupo->id}}')">Editar</button>
							<button class="btn" id="guardar-{{$grupo->id}}" style="display: none" onclick="guardarGrupo('{{$grupo->id}}')">Guardar</button>
						</td>
						<td><button class="btn" onclick="eliminarGrupo('{{$grupo->id}}')">Eliminar</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row-fluid">
		<h1>Subir Grupo</h1>
		<form id="myForm">
			<p>Clave de materia:</p>
			<input type="text" name="clave">
			<p>Número de grupo:</p>
			<input type="number" name="numGrupo">
			<p>Horario:</p>
			<input type="text" name="horario">
      <p>Horario Lab:</p>
			<input type="text" name="laboratorio">
      <p>Salón:</p>
			<input type="text" name="salon">
      <p>Profesor:</p>
			<input type="text" name="profesor">
      <p>Responsabilidad:</p>
			<input type="number" name="responsabilidad">
      <p>Inglés:</p>
			<label>
				<input class="with-gap" type="radio" name="ingles" value="1">
				<span>Si</span>
			</label>
			<br>
			<label>
				<input class="with-gap" type="radio" name="ingles" value="0" checked>
				<span>No</span>
			</label>
      <p>Honors:</p>
			<label>
				<input class="with-gap" type="radio" name="honors" value="1">
				<span>Si</span>
			</label>
			<br>
			<label>
				<input class="with-gap" type="radio" name="honors" value="0" checked>
				<span>No</span>
			</label><br>
			<button class="btn waves-effect waves-light" type="submit" name="action" onclick="subirGrupo()">Submit<i class="material-icons right">send</i></button>
		</form>
	</div>
</div>
@endsection{{--Terminamos la section de contenido--}}

@section('scripts'){{-- Se abre la seccion de scripts para agregar javascript especifico a cada vista --}}
	<script src="{{asset('js/grupo.js')}}"></script>
@endsection