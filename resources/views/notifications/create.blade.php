@section('title', 'About')

@extends('layout')

@section('content')
	<h1>About</h1>
	<p>¿Desea recibir notificaciones?</p>
	<form method="POST" action=" {{ route('notification.store') }}">
		@csrf
		<input name="url" placeholder="Nombre..." value="{{ old('url') }}"><br>
		{!! $errors -> first('url', '<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="Ingrese su email" value="{{ old('email') }}">
		{!! $errors -> first('email', '<br><small>:message</small><br>') !!}
		<button>Enviar</button>
	</form>
@endsection