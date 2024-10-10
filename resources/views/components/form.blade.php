<div id="contact-us-div">
    <div class="contact-us container" id="contact-us">    
        <div class="budget">
            <h2>Solicita tu presupuesto aqui</h2>
            <form id="budget-form" class="budget-form" action="/sentMail" enctype="application/x-www-form-urlencoded" method="POST">
                @csrf

                <div class="form-group">
                    <label for="inputNombre">Nombre *</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder=" Nombre">
                    <span class="input-error">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Email *</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder=" Email@email.com">
                    <span class="input-error">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group">
                    <label for="inputTelefono">Telefono *</label>
                    <input type="number" class="form-control" name="telefono" id="telefono" placeholder=" Ej. 49428484">
                    <span class="input-error">{{ $errors->first('telefono') }}</span>
                </div>

                <div class="form-group">
                    <label for="inputRubro">Rubro *</label>
                    <input type="text" class="form-control" name="rubro" id="rubro" placeholder=" Ej. Gastronomia">
                    <span class="input-error">{{ $errors->first('rubro') }}</span>
                </div>

                <div class="form-group">
                    <label for="inputM2">M2 *</label>
                    <input type="number" class="form-control" name="m2" id="m2" placeholder=" Ej. 200">
                    <span class="input-error">{{ $errors->first('m2') }}</span>
                </div>
                
                <div class="form-group">
                    <label for="inputDireccion">Direccion *</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder=" 1234 nombre calle">
                    <span class="input-error">{{ $errors->first('direccion') }}</span>
                </div>

                <div class="form-group">
                    <label for="inputTramite">Tramite *</label>
                    <input type="text" class="form-control" value="<?= isset($_GET['tramite']) ? $_GET['tramite'] : ""; ?>" name="tramite" id="tramite" placeholder=" Ej. Habilitacion">
                    <span class="input-error">{{ $errors->first('tramite') }}</span>
                </div>
                
                <button type="submit" class="boton-form">Enviar</button>
            </form>
            <span class="span-obligatorios">* Campos obligatorios</span>
        </div>
        
        <div class="contact-data">
            @foreach ( Data::$contact_info as $info )
                <div><div class="box"><i class="{{ $info['icon'] }}"></i></div> <p>{{ $info['title'] }}</p></div>
            @endforeach
        
            <iframe id="mapa" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d376.4275724969588!2d-58.40324159481736!3d-34.60473912207922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaece9ec6895%3A0x84747b9ca69c6ef5!2sAv.%20Corrientes%202565%2C%20C1046AAD%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1712951180468!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
        </div>
    </div>
</div>