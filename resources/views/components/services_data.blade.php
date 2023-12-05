
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
            <img src="/assets/img/services/{{ $service['image'] }}.png">
            
            <div>
                <h3>{{ $service['name'] }}</h3>
                <p>{{ $service['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>