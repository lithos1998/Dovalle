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
        go_section('#contact-us-div');
    }

    if(window.location.pathname == '/nosotros'){
        go_section('#about-us');
    }

    if(window.location.pathname == '/referencias'){
        go_section('#our-references');
    }

    $('.chosen-select').chosen({
        width: '100%', // Ajusta el ancho automáticamente
        no_results_text: "No se encontraron resultados", // Mensaje cuando no hay resultados
        placeholder_text_multiple: "Selecciona opciones..." // Texto por defecto
    });

    $('.select-tag').chosen({
        placeholder_text_multiple: 'Seleccione'
    });

    function getDate() {
        const today = new Date();
        const day = today.getDate().toString().padStart(2, '0'); // Día con dos dígitos
        const month = (today.getMonth() + 1).toString().padStart(2, '0'); // Mes (se suma 1 porque enero es 0)
        const year = today.getFullYear();
    
        return `${year}-${month}-${day}`;
    }

    function getDateExpired(months) {
        const today = new Date();
        
        today.setMonth(today.getMonth() + months);
        
        const day = today.getDate().toString().padStart(2, '0'); // Día con dos dígitos
        const month = (today.getMonth() + 1).toString().padStart(2, '0'); // Mes (se suma 1 porque enero es 0)
        const year = today.getFullYear();
    
        return `${year}-${month}-${day}`;
    }
    
    window.onload = function() {
        document.getElementById('start').value = getDate();
        document.getElementById('expired').value = getDateExpired(3);
    };

    function go_section(section_id){
        var contact_top = $(section_id).offset().top - 130;
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
        if ($(window).width() <= 920) {
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
        toggleMenu(194);
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
            go_section('#contact-us-div');
        }
    });

    $('#Valores').click(function(e){
        if(window.location.pathname == '/'){
            e.preventDefault();
            go_section('#about-us');
        }
    });

    $('#Referencias').click(function(e){
        if(window.location.pathname == '/'){
            e.preventDefault();
            go_section('#our-references');
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

    $('#itemSelect').on('change', function(){
        const itemSelect = document.getElementById('itemSelect');
        const selectedOption = itemSelect.options[itemSelect.selectedIndex];
        const price = selectedOption.getAttribute('data-price');

        if (price) {
            document.getElementById('amount').value = price;
        } else {
            document.getElementById('amount').value = '';
        }
    });

    formulario.on('submit', validateForm);

});