@foreach ($services as $service )
    <div class="service">           
        <a class="icon-div" href="{{-- /servicios/{{ $service['service_id'] }} --}}">
            <i class="{{ $service['icon'] }}"></i>
        </a>
        <h3>{{ $service['name'] }}</h3>
    </div>
@endforeach