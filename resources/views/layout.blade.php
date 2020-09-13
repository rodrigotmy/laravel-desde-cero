<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Laravel')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('/js/app.js') }}" defer></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | Copyright C {{ date('Y') }}
		</footer>
	</div>

</body>

</html>