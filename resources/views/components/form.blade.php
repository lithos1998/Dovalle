<div id="contact-us-div">
    <div class="contact-us" id="contact-us">    
        <div class="budget">
            <h2>Solicita tu presupuesto aqui</h2>
            <form id="budget-form" class="budget-form" action="/sentMail" enctype="multipart/form-data" method="POST">
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
                    <input type="text" class="form-control" name="tramite" id="tramite" placeholder=" Ej. Habilitacion">
                    <span class="input-error">{{ $errors->first('tramite') }}</span>
                </div>
                
                <button type="submit" class="boton-form">Enviar</button>
            </form>
            <span class="span-obligatorios">* Campos obligatorios</span>
        </div>
        
        <div class="contact-data">
            <div><div class="box"><i class="fa-regular fa-envelope"></i></div> <p>estudiodovalle@gmail.com</p></div>
            <div><div class="box"><i class="fa-brands fa-whatsapp"></i></div> <p>11-5977-9954</p></div>
            <div><div class="box"><i class="fa-brands fa-facebook"></i></div> <p>EstudioDovalle Srl</p></div>
            <div><div class="box"><i class="fa-brands fa-instagram"></i></div> <p>@estudiodovalle</p></div>
            <div><div class="box"><i class="fa-solid fa-location-dot"></i></div> <p>Pilar 836, Liniers</p></div>
        
            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.2573092721927!2d-58.51974722467467!3d-34.64820415984828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc851b2a7222f%3A0x313f4203aa3a4059!2sPilar%20836%2C%20C1408%20CABA!5e0!3m2!1ses!2sar!4v1693251378598!5m2!1ses!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>