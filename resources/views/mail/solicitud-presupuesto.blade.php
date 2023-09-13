<div class="mail" style="flex-direction:column !important">
    <p>{{ $data->request->get('nombre') }} consulta por {{ $data->request->get('tramite') }}</p>
    <p>En razon del rubro {{ $data->request->get('rubro') }} con {{ $data->request->get('m2') }} metros cuadrados</p>
    <p>Ubicado en {{ $data->request->get('direccion') }} </p>
    <h2 style="margin-left: 25px !important">Datos de contacto</h2>
    <p>email: {{ $data->request->get('email') }}</p>
    <p>telefono: {{ $data->request->get('telefono') }}</p>

    <span>Este es un mensaje enviado automaticamente por EstudioDovalle.com no responder</span>
</div>