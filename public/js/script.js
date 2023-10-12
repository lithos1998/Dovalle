$(document).ready(function(){
    var nav = $('#pc-nav');
    var nav_top = nav.offset().top;
    var btnVolver = $('.volver-arriba-a');
    var menu_mobile = false;
    var fixed_header = false;
    var formulario = $('#budget-form');
    var nombre = $('#nombre');
    var email = $('#email');
    var telefono = $('#telefono');
    var rubro = $('#rubro');
    var metros = $('#m2');
    var direccion = $('#direccion');
    var tramite = $('#tramite');

    if(window.location.pathname == '/contacto'){
        go_contact();
    }

    function go_contact(){
        var contact_top = $('#contact-us-div').offset().top;
        $("html, body").animate({ scrollTop: contact_top }, 600);
    }

    function enableMenu(){
        $('#nav-pc').addClass('d-none');
        $('#nav-mobile').removeClass('d-none');
    }

    function disableMenu(){
        $('#nav-mobile').addClass('d-none');
        $('#nav-pc').removeClass('d-none');
    }

    function checkMenu(){
        if ($(window).width() <= 900) {
            enableMenu();            
        }else{
            disableMenu();
        }
    }

    function toggleMenu(menu_top){
        if(fixed_header == true && menu_mobile == false){
            menu_top = 60;
            $('.nav-links-mobile').css('position', 'fixed');
        }
        $('.nav-links-mobile').animate({top: menu_top}, 400);
    }

    function showMobileMenu(){        
        toggleMenu(210);
        menu_mobile = true;
        $('#bars-menu').removeClass('fa-bars');
        $('#bars-menu').addClass('fa-xmark');
    }

    function hideMobileMenu(){
        $('.nav-links-mobile').css('position', 'absolute');
        toggleMenu('-250px');
        menu_mobile = false;
        $('#bars-menu').addClass('fa-bars');
        $('#bars-menu').removeClass('fa-xmark');
    }

    function validateForm(e){
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

    checkMenu();

    // on scroll 
    $(window).scroll(function () { 
        if ($(window).scrollTop() >= nav_top - 5) {
            nav.addClass('fixed_header');
            fixed_header = true;
        }else if ($(window).scrollTop() <= nav_top) {
            nav.removeClass('fixed_header');
            fixed_header = false;
        }

        if ($(window).scrollTop() >= 500) {
            btnVolver.css('margin-right', 0);
        } else {
            btnVolver.css('margin-right', '-100px');
        }
    })

    // on resize
    $(window).resize(function(){
        checkMenu();
    });

    $(document).on("click", function(event) {
        if (menu_mobile == true) {            
            var obj = $("#nav-mobile");
            if (!$(event.target).closest(obj).length) {
                hideMobileMenu();
            }
        }
    });

    $('#btnVolverArriba').click(function (e) { 
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 600);

        return false;
    });

    $('#Contacto').click(function(e){
        if(window.location.pathname == '/'){
            e.preventDefault();
            go_contact();
        }
    });

    $('#mobile-menu').click(function(e){
        e.preventDefault();
        if (menu_mobile == true) {
            hideMobileMenu();
        } else {
            showMobileMenu();
        }
    });

    formulario.on('submit', validateForm);

    
});