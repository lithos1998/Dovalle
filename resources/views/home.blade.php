@extends('layouts.app')


@section('content')

    @include('components.services')
    
    <div class="about-us" id="about-us" >
        <h2 class="text-center">¿Por que elegirnos?</h2>
        <p class="container text-center text-nosotros">Desde estudio Dovalle queremos ayudarte para que puedas cumplir tus sueños y comiences a disfrutarlo.</p>
        <p class="container text-center text-nosotros"> Te aseguramos profesionalismo, eficacia y rapidez en nuestro trabajo para que vos puedas hacer el tuyo sin problemas.</p>                 
    </div>

    @include('components.form')

@endsection