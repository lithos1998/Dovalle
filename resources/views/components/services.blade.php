<div class="services">
    <h2>Servicios para administraciones</h2>
    <div class="data">
        <x-service :services="Data::$services" condition="inmobiliaria"/>
    </div>

    <h2>Servicios para inmobiliarias</h2>

    <div class="data">
        <x-service :services="Data::$services" condition="administracion"/>
    </div>
</div>