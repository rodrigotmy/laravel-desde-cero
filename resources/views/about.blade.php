@extends('layout')

@section('title', 'Acerca')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 my-3">
            <img class="img-fluid mb-4" src="img/about.svg" alt="Quién-soy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quién soy</h1>
            <p class="lead text-secudary">Me llamo Rodrigo, me encuentro en aprendizaje con el desarrollo web enfocado a Laravel, este proyecto muestra los conocimientos adquiridos por parte mia durante estos tiempos de la contingencia.<br><br>
            Proximamente espero adentrarme en la instrustria del Desarrollo Web con un empleo, por ahora a seguir aprendiendo y que todo marche de acuerdo a los planes de Dios.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact.index') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
    </div>
</div>

@endsection