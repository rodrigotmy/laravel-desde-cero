@extends('layout')

@section('title', 'Musica | ' . $projectMusics->title)

@section('content')
	<h1>{{ $projectMusics->title }}</h1>
	<a href="{{ route('musics.edit', $projectMusics) }}">Editar</a>
	<form method="POST" action="{{ route('musics.destroy', $projectMusics) }}">
		@csrf @method('DELETE')
		<button>Eliminar</button>
	</form>
	<p>{{ $projectMusics->description }}</p>
	<p>{{ $projectMusics->created_at->diffForHumans() }}</p>
@endsection