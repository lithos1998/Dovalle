@extends('layouts.app')


@section('content')
    <div class="index-services">
       <div class="services">
            <h2>Servicios para administraciones</h2>
            <div class="data">
                @foreach (Data::$services as $service )
                    @if ($service['type'] != 'inmobiliaria')    
                        <div class="service">           
                            <img src="https://picsum.photos/450/300">
                            
                            <div>
                                <h3>{{ $service['name'] }}</h3>
                                <p class="original">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium vehicula lorem a consequat. Suspendisse ac dapibus mi, ac blandit ex. Donec turpis massa, ullamcorper eu iaculis et, laoreet in erat.
                                </p>
                                <p class="extra"> id posuere dui auctor nec.Curabitur imperdiet urna est, id posuere dui auctor nec.Curabitur imperdiet urna est, id posuere dui auctor nec</p> 
                                <input type="checkbox" id="check-{{ $service['id'] }}">
                                <label for="check-{{ $service['id'] }}" class="see-more"></label>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <h2>Servicios para inmobiliarias</h2>

            <div class="data">
                @foreach (Data::$services as $service )
                    @if ($service['type'] != 'administracion')    
                        <div class="service">           
                            <a class="icon-div" href="/servicios/{{ $service['id'] }}">
                                <i class="{{ $service['class'] }}"></i>
                            </a>
                            <h3>{{ $service['name'] }}</h3>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection