@php
    $nav_links = [
        'Inicio' => '/', 'Servicios' => '/servicios', 'Valores' => '/nosotros', 'Referencias' => '/referencias', 'Contacto' => '/contacto'
    ]
@endphp


<div class="nav-header">
    <img src="/img/logotipo.png">

    <div class="data-header">
        <div><i class="fa-regular fa-envelope"></i> <p>estudiodovalle@gmail.com</p></div>
        <div><i class="fa-brands fa-whatsapp"></i> <p>11-5977-9954</p></div>
        <div><i class="fa-solid fa-location-dot"></i> <p>Av. Corrientes 2565 3º 4</p></div>
    </div>
</div>

<nav class="pc-nav" id="pc-nav">
    <div class="nav-links" id="nav-pc">
        @foreach ($nav_links as $link => $redirect)
            <a class="nav-link" id="{{ $link }}" href="{{ $redirect }}">{{ $link }}</a>            
        @endforeach
    </div>

    <div class="nav-links d-none"  id="nav-mobile">
        <a class="nav-link mobile-menu" id="mobile-menu" href="#"><i id="bars-menu" class="fa-solid fa-bars"></i></a>                    
    </div>

    <div class="nav-social">
        <a href="https://www.facebook.com/nicolas.lavalle.77" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://instagram.com/estudiodovalle?igshid=f8unfj0veppy" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+5491159779954&text=Hola%20deseo%20informacion"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="mailto:estudiodovalle@gmail.com"><i class="fa-regular fa-envelope"></i></a>
    </div>
</nav>

<div class="nav-links-mobile" id="nav-mobile">
    @foreach ($nav_links as $link => $redirect)
        <a class="nav-link" id="{{ $link }}" href="{{ $redirect }}">{{ $link }}</a>            
    @endforeach
</div>

<div class="data-header-mobile">
    <div class="email-estudio"><i class="fa-solid fa-envelope"></i> <p>estudiodovalle@gmail.com</p></div>
    <div style="width:100%;margin-top:15px">
        <div class="address-estudio"><i class="fa-solid fa-location-dot"></i> <p>Av. Corrientes 2565 3º 4</p></div>
        <div class="phone-estudio"><i class="fa-solid fa-phone"></i> <p>11-5977-9954</p></div>
    </div>
</div>


{{-- <div class="fixed-header" id="fixedHeader">
    <a href="#" class="logo"><img src="img/estudio.png" alt="logo"></a>
    <nav class="menu-principal">
        <a class="scroll-suave" href="#">INICIO</a>
        <a class="scroll-suave" href="#nosotros">NOSOTROS</a>
        <a class="scroll-suave" href="#servicios">SERVICIOS</a>
        <a class="scroll-suave" href="#referencias">REFERENCIAS</a>
        <a class="scroll-suave" href="#contacto">CONTACTO</a>
    </nav>
    <div class="redes-presupuesto">
        <a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://m.facebook.com/nicolas.lavalle.779" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://instagram.com/estudiodovalle?igshid=f8unfj0veppy" target="_blank"><i class="fab fa-instagram-square"></i></a>
    </div>
</div> --}}