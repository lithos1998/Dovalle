@foreach ($services as $service )
    @if ($service['type'] != $condition)    
        <div class="service">           
            <a class="icon-div" href="/servicios/{{ $service['id'] }}">
                <i class="{{ $service['class'] }}"></i>
            </a>
            <h3>{{ $service['name'] }}</h3>
        </div>
    @endif
@endforeach