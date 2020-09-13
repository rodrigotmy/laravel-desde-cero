@section('title', 'Notification')

@extends('layout')

@section('content')
	<h1>Notification</h1>
	{{-- <a href="{{ route("notifications.create") }}">Agregar</a> --}}
	<a href="{{ route('notification.create') }}">Agregar email</a>
	<ul class="listNotifications">

		@forelse ($listNotification as $itemNotification)
			<li><a href="{{ route('notification.show', $itemNotification) }}">{{ $itemNotification->email }}</a></li>
		@empty
			<li> Sin emails registrados</li>
		@endforelse
	</ul>
@endsection