@section('title', 'Contacto')

@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST" action=" {{ route('message.store') }} ">
				@csrf
				<h1 class="display-4">{{ __('Contact') }}</h1>
				<div class="form-group">
					<label for="name">{{ __('Name') }}</label>
					<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
						id="name"
						name="name" placeholder="Escribe aquí tu nombre.."
						value="{{ old('name') }}">
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>

				<div class="form-group">
					<label for="email">{{ __('Email') }}</label>
					<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
						id="email" name="email"
						type="email" placeholder="Escribe aquí tu correo electronico" value="{{ old('email') }}">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>

				<div class="form-group">
					<label for="subject">{{ __('Subject') }}</label>
					<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
						id="subject" name="subject"
						placeholder="Escribe aquí el asunto de tu mensaje..." value="{{ old('subject') }}">
						@error('subject')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>

				<div class="form-group">
					<label for="content">{{ __('Content') }}</label>
					<textarea class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
						id="content" name="content"
						placeholder="Escribe aquí el contenido de tu mensaje..." value="{{ old('name') }}"></textarea>
						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>

				<button class="btn btn-primary btn-lg btn-block">{{ __('Send') }}</button>
				<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">{{ __('Cancel') }}</a>
			</form>
		</div>
	</div>

</div>
@endsection