@extends('layouts.app')


@section('content')
    <div class="index-services">
       <div class="services">
            <h2>Servicios para administraciones</h2>
            <div class="data">
                @foreach (Data::$services as $service )
                    @if ($service[3] != 'inmobiliaria')    
                        <div class="service">           
                            <img src="https://picsum.photos/300/300">
                            
                            <div>
                                <h3>{{ $service[0] }}</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium vehicula lorem a consequat. Suspendisse ac dapibus mi, ac blandit ex. Donec turpis massa, ullamcorper eu iaculis et, laoreet in erat. Curabitur imperdiet urna est, id posuere dui auctor nec. Ut vehicula posuere diam, at condimentum quam iaculis quis. Nunc vitae nisi nec purus faucibus placerat sed id massa. Fusce vel efficitur nunc. Quisque at porta purus. Sed vestibulum ante ultrices mi interdum, ac vulputate dui maximus. Sed ante lectus, bibendum in tempus id, accumsan at sem. Morbi fringilla, nunc et vestibulum efficitur, libero ligula egestas neque, maximus mollis diam odio dapibus quam. Vivamus sit amet malesuada magna. Sed et elit finibus, ultricies velit sit amet, tempus neque. Aenean ultrices sodales erat, non sollicitudin nulla eleifend nec.</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <h2>Servicios para inmobiliarias</h2>

            <div class="data">
                @foreach (Data::$services as $service )
                    @if ($service[3] != 'administracion')    
                        <div class="service">           
                            <a class="icon-div" href="/servicios/{{ $service[1] }}">
                                <i class="{{ $service[2] }}"></i>
                            </a>
                            <h3>{{ $service[0] }}</h3>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection