@section('title', 'Editar genero')

@extends('layout')

@section('content')
	<div class="container">
		<h1>Editar genero</h1>
		@include('partials.validation-errors')
		<form method="POST" action="{{ route('musics.update', $projectMusics) }}">
			@method('PATCH')
			@include('musics._form', ['btnText' => 'Actualizar'])

		</form>
	</div>
@endsection