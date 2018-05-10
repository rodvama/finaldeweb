@extends('layouts.app')

@section('content')
@foreach($grupos as $grupo)
	<h1>{{$grupo->clave}}</h1>
	<h1>{{$grupo->numGrupo}}</h1>
	<h1>{{$grupo->horario}}</h1>
	<h1>{{$grupo->laboratorio}}</h1>
	<h1>{{$grupo->salon}}</h1>
	<h1><{{$grupo->profesor}}</h1>
@endsection