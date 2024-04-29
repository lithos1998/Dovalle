<div class="data">
    @foreach ($services as $service )                      
        <div class="service">           
            <img src="/assets/img/services/{{ $service['image'] }}.png">
            
            <div>
                <h3>{{ $service['name'] }}</h3>
                <p>{{ $service['description'] }}.</p>
            </div>
        </div>
    @endforeach
</div>