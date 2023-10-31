
@php
    use App\Models\Service;
    
    $services = Service::select('services.*')
        ->join('category_service', 'services.service_id', '=', 'category_service.service_id')
        ->where('category_service.category_id', $id )
        ->get();
@endphp

<div class="data">
    @foreach ($services as $service )                      
        <div class="service">           
            <img src="https://picsum.photos/450/300">
            
            <div>
                <h3>{{ $service['name'] }}</h3>
                <p>{{ $service['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>

{{-- <p class="original">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium vehicula lorem a consequat. Suspendisse ac dapibus mi, ac blandit ex. Donec turpis massa, ullamcorper eu iaculis et, laoreet in erat.
    <span class="extra"> id posuere dui auctor nec.Curabitur imperdiet urna est, id posuere dui auctor nec.Curabitur imperdiet urna est, id posuere dui auctor nec</span> 
    <input type="checkbox" id="check-{{ $service['service_id'] }}">
    <label for="check-{{ $service['service_id'] }}" class="see-more"></label>
</p> --}}