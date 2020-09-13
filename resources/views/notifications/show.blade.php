@extends('layout')

@section('title', 'Notification | ' . $notification->url)

@section('content')
	<h1>{{ $notification->url }}</h1>
	<p>{{ $notification->email }}</p>
	<p>{{ $notification->created_at->diffForHumans() }}</p>
@endsection