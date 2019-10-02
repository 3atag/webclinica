$('#submenu-institucional>a').on('click', function () {
    $('#submenu-institucional').collapse('hide');
});

$('#submenu-nuestros>a').on('click', function () {
    $('#submenu-nuestros').collapse('hide');
});


/*************************************************************************/
/*****************************     JQUERY     ****************************/
/*************************************************************************/

$(function () {
    'use strict';

    /* Pagina activa en menu principal */

    $('.navegacion-principal li a').on('click', function () {
        $(this).addClass('activoPrin');

    });

    /* Tabs Subpagina nuestros */

    $('.submenu-nuestros a:first').addClass('activo');
    $('.contenido-subpaginas > div').hide();
    $('.contenido-subpaginas > div:first').show();
    $('.submenu-nuestros a').on('click', function () {

        $('.submenu-nuestros a').removeClass('activo');
        $(this).addClass('activo');
        $('.contenido-subpaginas > div').hide();
        let enlace = $(this).attr('href');
        $(enlace).fadeIn(600);
        return false;

    });

    /* Menu hamburgesa subpaginas */

    $('.boton-submenu-nuestros').on('click', function () {
        $('.submenu-nuestros').slideToggle();
    });

    // Reaccionar a Resize en la pantalla
    let breakpoint = 751;
    $(window).resize(function () {
        if ($(document).width() >= breakpoint) {
            $('.submenu-nuestros').show();
        } else {
            $('.submenu-nuestros').hide();
        }
    });


    /* Pagina actual */

    $('body.institucional .navegacion-principal a:contains("Institucional")').addClass('principalActivo');
    $('body.servicios .navegacion-principal a:contains("Nuestros servicios")').addClass('principalActivo');
    
});