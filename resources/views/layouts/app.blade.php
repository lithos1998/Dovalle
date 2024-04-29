<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, minimum-scale-1.0, user-scalable=no">
    <meta name="author" content="Carlos Riveros">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="icon" href="/assets/img/icono.ico">
    <script src="https://kit.fontawesome.com/aa47ff6f99.js" crossorigin="anonymous"></script>
    
    <title>Estudio Dovalle</title>
</head>
<body>
    @if (session()->has('alert'))
        <x-alert :message="session()->get('alert')['message']"></x-alert>
    @endif

    <!-- btn volver arriba -->
    <div class="btn-volver-arriba" id="btnVolverArriba">
        <a href="#" class="volver-arriba-a">
            <i class="fas fa-arrow-circle-up"></i>
        </a>
    </div> 
    
    <!-- boton wpp -->
    <div class="btn-wpp">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+5491159779954&text=Hola%20deseo%20informacion">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    @include('components.nav')
    
    <section class="main">
        @yield('content')
    </section>

    @include('components.footer')

     <!-- jquery -->
    <script   src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
    <script src="https://kit.fontawesome.com/dfa42ae890.js" crossorigin="anonymous"></script>
</body>