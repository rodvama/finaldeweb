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
            <td class="{{$grupo->id}}">{{$grupo->laboratorio}}</td>
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
			<p>Materia:</p>
			 <select class="browser-default" name="clave">
			 	<option value="" disabled selected>Escoja el horario desado:</option>
        @foreach($materias as $materia)
        	<option value="{{$materia->clave}}">{{$materia->nombre}}</option>
        @endforeach
      </select>
      <br>
			<p>Número de grupo:</p>
			<input type="number" name="numGrupo">
			<p>Profesor:</p>
			<select class="browser-default" name="profesor">
      	<option value="" disabled selected>Escoja el maestro deseado:</option>
        @foreach($maestros as $maestro)
          <option value="{{$maestro->nombre}}">{{$maestro->nombre}}</option>
        @endforeach
      </select>
      <br>
			<p>Horario:</p>
			<select class="browser-default" name="horario">
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
      <p>Horario Lab:</p>
      <select class="browser-default" name="laboratorio">
				<option value="" disabled selected>Escoja el horario desado:</option>
				<option value="N/A">N/A</option>
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
      <p>Salón:</p>
      <select class="browser-default" name="salon">
      	<option value="" disabled selected>Escoja el salon deseado:</option>
        @foreach($salones as $salon)
          <option value="{{$salon->numSalon}}">{{$salon->numSalon}}</option>
        @endforeach
      </select>
      <br>
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