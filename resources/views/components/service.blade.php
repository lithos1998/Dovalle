@foreach ($services as $service )
    @if ($service[3] != $condition)    
        <div class="service">           
            <a class="icon-div" href="/servicios/{{ $service[1] }}">
                <i class="{{ $service[2] }}"></i>
            </a>
            <h3>{{ $service[0] }}</h3>
        </div>
    @endif
@endforeach