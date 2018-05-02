@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<h1>Lista de opciones</h1>
    </div>
    <div class="row"> 	
			<a class="waves-effect waves-light btn-large" href="{{ url('maestros') }}"><i \class="material-icons right">cloud</i>Maestros</a>
    </div>
    <div class="row"> 	
			<a class="waves-effect waves-light btn-large" href="{{ url('salones') }}"><i \class="material-icons right">cloud</i>Salones</a>
    </div>
</div>
@endsection