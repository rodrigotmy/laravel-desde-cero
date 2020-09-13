@section('title', 'Music')

@extends('layout')

@section('content')
	<h1>Music</h1>
	<a href="{{ route('musics.create') }}">Agregar genero</a>
	<ul>
		@forelse ($projectMusics as $projectMusic)
			<li> <a href="{{ route('musics.show', $projectMusic) }}"> {{ $projectMusic->title }} </a> </li>
		@empty
			<li> Sin Música </li>
		@endforelse
		{{-- {{ $projectMusics ?? ''->links() }} --}}
	</ul>
@endsection