<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm bg-nav">
	<div class="container bg-white">
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name') }}
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">{{ __('Home') }}</a></li>
				<li class="nav-item"><a class="nav-link {{ setActive('projects.*') }}" href="{{route('projects.index')}}">{{ __('Portfolio') }}</a></li>
				{{-- <li class="nav-item"><a class="nav-link {{ setActive('musics.index') }}" href="{{route('musics.index')}}">Musics</a></li> --}}
				<li class="nav-item"><a class="nav-link {{ setActive('contact.index') }}" href="{{route('contact.index')}}">{{ __('Contact') }}</a></li>
				<li class="nav-item"><a class="nav-link {{ setActive('about.index') }}" href="{{route('about.index')}}">{{ __('About') }}</a></li>
				@auth
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"
						>{{ __('Sign out') }}</a>
					</li>
				@else
					<li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				@endauth
			</ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>