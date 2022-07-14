$(document).ready(function(){

    var alerta = $('.alerta-form');

    function hideAlert(){
        //alerta.fadeOut(2000);
        alerta.hide();
    }
    setInterval(hideAlert, 5000);

    //efecto fixedheader
    var fixedHeader = $('.fixed-header');
    $(window).on('scroll',function(){
        var serviciosTop = $('#servicios').offset().top; //la distancia entre top y la seccion nosotros
        if($(window).scrollTop() >= serviciosTop){
            fixedHeader.css('margin-top',0);
        }else if($(window).scrollTop() < serviciosTop){
            fixedHeader.css('margin-top','-90px');
        }
    });
    //botonVolverArriba
    var btnVolver = $('.volver-arriba-a');
    $(window).on('scroll',function(){
        var alturaTop = $('#servicios').offset().top;
        if($(window).scrollTop() >= alturaTop){
            btnVolver.css('margin-right',0);
        }else if($(window).scrollTop() < alturaTop){
            btnVolver.css('margin-right','-100px');
        }
    });

    //efectos jquery
    $('.volver-arriba-a').on('click',function(e){
        e.preventDefault();//previene la accion por defecto
        if($(window).scrollTop() !== 0){
            $('html,body').animate({scrollTop:0}, 2000);
        }
    });
    //mover los enlaces
    $('.scroll-suave').on('click',function(e){
        e.preventDefault();
        var seccion = $($(this).attr('href')).offset().top;
        $('html,body').stop().animate({scrollTop: seccion}, 1000);
    });

    // modal
    $('.img-modal').on('click',function(){
        var rutaimg = $(this).attr('src');

        var modal ='<div class="modalSlide" id="modalSlide"><img src="'+rutaimg+'" alt=""><div class="btn-cerrar-modal" id="btnCerrarModal"><i class="fas fa-times"></i></div></div>';
        $('#referencias').after(modal);  
        
        $('.btn-cerrar-modal').on('click', function(){
            $('.modalSlide').remove();
        });  
        
        $(document).on('keyup', function(e){
            if(e.which == 27){
                $('.modalSlide').remove();
            }
        });

    });

    


    //slide
    var count = 0;
    var slider = $('#slider');
    var btnSig = $('.btn-siguiente');
    var btnAnt = $('#btnAnterior');
    //divs selector
    var divs = $('.divs');
    var cantDivs = divs.length;
    
    var anchoPantalla = $(window).width();
    if(anchoPantalla >= 1300){
        var porcentajeizq = '-2%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 1299 && anchoPantalla >= 1200){
        var porcentajeizq = '-5%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 1199 && anchoPantalla >= 1101){
        var porcentajeizq = '-10%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 1099 && anchoPantalla >= 1001){
        var porcentajeizq = '-18%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 900 && anchoPantalla >= 801){
        var porcentajeizq = '-27%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 800 && anchoPantalla >= 701){
        var porcentajeizq = '-37%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 700 && anchoPantalla >= 601){
        var porcentajeizq = '-40%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 600 && anchoPantalla >= 556){
        var porcentajeizq = '-42%';
        var porcentajeder = '-38%';
    }else if(anchoPantalla <= 550){
        var porcentajeizq = '-40%';
        var porcentajeder = '-28%';
    }

    

    $('#slider .slide:last').insertBefore('#slider .slide:first');
    slider.css('margin-left', porcentajeizq);
    
    //esconde todos los divs
    divs.css("display","none");

    function cambiarTit($num){
        divs.css("display","none");
        var selector = ".div-cliente" + $num ;
        
        $(selector).css("display","block");
    }

    cambiarTit(count);

    function movDerecha(){
        if(count != cantDivs - 1){
            count++;
        }else{
            count = 0;
        }
        cambiarTit(count);
        // slider.css('margin-left', porcentajeder);
        // $('#slider .slide:first').insertAfter('#slider .slide:last');
        // slider.css('margin-left', porcentajeizq);
        resetInterval();
        slider.stop().animate({
            marginLeft: porcentajeder
        }, 700, function(){
            $('#slider .slide:first').insertAfter('#slider .slide:last');
            slider.css('margin-left', porcentajeizq);
        });
    }
    btnSig.on('click', movDerecha);
    
    function movIzquierda(){
        resetInterval();
        if(count == 0){
            count = cantDivs - 1;
        }else{
            count--;
        }
        cambiarTit(count);
        $('#slider .slide:last').insertBefore('#slider .slide:first');
        slider.css('margin-left', porcentajeder)
        slider.stop().animate({
            marginLeft: porcentajeizq
        }, 700);
        
        // slider.css('margin-left', porcentajeder);
        // slider.css('margin-left', porcentajeizq);
        
        
    }
    btnAnt.on('click',movIzquierda)

    var intervalo = setInterval(movDerecha,5000);
    
    function resetInterval(){
        clearInterval(intervalo);
        intervalo = setInterval(movDerecha,5000);
    }



    // formulario
    var formulario = $('#formulario');
    var nombre = $('#nombre');
    var email = $('#email');
    var telefono = $('#telefono');
    var rubro = $('#rubro');
    var metros = $('#m2');
    var direccion = $('#direccion');
    var tramite = $('#tramite');

    function validarForm(e){
        if(nombre.val() == '' || nombre.val() == null){
            e.preventDefault();
            nombre.css("border-color", "red");
        }else{
            nombre.css("border-color","#fff");
        }  

        if(email.val() == '' || email.val() == null){
            e.preventDefault();
            email.css("border-color", "red");
        }else{
            email.css("border-color","#fff");
        } 
        
        if(telefono.val() == '' || telefono.val() == null){
            e.preventDefault();
            telefono.css("border-color", "red");
        }else{
            telefono.css("border-color","#fff");
        } 

        if(rubro.val() == '' || rubro.val() == null){
            e.preventDefault();
            rubro.css("border-color", "red");
        }else{
            rubro.css("border-color","#fff");
        } 

        if(metros.val() == '' || metros.val() == null){
            e.preventDefault();
            metros.css("border-color", "red");
        }else{
            metros.css("border-color","#fff");
        } 

        if(direccion.val() == '' || direccion.val() == null){
            e.preventDefault();
            direccion.css("border-color", "red");
        }else{
            direccion.css("border-color","#fff");
        } 

        if(tramite.val() == '' || tramite.val() == null){
            e.preventDefault();
            tramite.css("border-color", "red");
        }else{
            tramite.css("border-color","#fff");
        } 

        
    }

    formulario.on('submit',validarForm);

    // menu hamburguesa
    var num_menu = 1;
    $('#btnMenu').on('click',function(e){
        e.preventDefault();
        if(num_menu == 1){
            $('.menu-mobile .menu-principal').css("left","0");
            num_menu = 0;
        }else{
            $('.menu-mobile .menu-principal').css("left","-100%");
            num_menu = 1;
        }
    });
    $('.menu-mobile .menu-principal a').on('click',function(){
        $('.menu-mobile .menu-principal').css("left","-100%");
        num_menu = 1;
    });
    
    

    
    
});