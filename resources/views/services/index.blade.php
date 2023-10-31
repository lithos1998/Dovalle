@extends('layouts.app')


@section('content')
    
    <div class="index-services">
       <div class="services">
            <h2>Servicios para administraciones</h2>

            <x-services_data id="1"/>

            <h2>Servicios para inmobiliarias</h2>

            <x-services_data id="2"/>
        </div>
    </div>
@endsection