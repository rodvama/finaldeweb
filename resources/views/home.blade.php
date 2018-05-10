@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    		<h1 style="font-size: 600%;">Bienvenido</h1>
    	</div>
    	<div class="row justify-content-center">
    	<h2>{{Auth::user()->name}}</h2>
    </div>
</div>
@endsection