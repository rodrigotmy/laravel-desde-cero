@section('title', 'Agregar genero')

@extends('layout')

@section('content')
	<h1>Agregar nuevo genero</h1>

	<form method="POST" action="{{ route('musics.store') }}">
		@include('musics._form', ['btnText' => 'Guardar'])

	</form>
@endsection