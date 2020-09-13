@extends('layout')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead text-secudary">Bienvenida(o) este es mi primer proyecto desarrollado con Laravel desde cero, dedicando un tiempo diario a aprender y practicar hizo que esto sea posible. <br> Aún queda un largo camino por aprender y me siento feliz con este pequeño pero humilde trabajo.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact.index') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6 my-3">
            <img class="img-fluid mb-4" src="img/home.svg" alt="Desarrollo-Web">
        </div>
    </div>
</div>

@endsection
{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}