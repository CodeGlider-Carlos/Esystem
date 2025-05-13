'use strict'
window.addEventListener('load', function () {

    var contenedor = document.getElementById('backLoad');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';



    
});


$(document).ready(function () {



    ///////////barras/////////////

    $('#backBck1').animate({
        left: '-100%',

    }, 1100)

    $('#backBck2back').animate({
        left: '-100%',
    }, 1500)
    $('#backBck3back').animate({
        left: '100%',
    }, 1500)
    $('#backBck4').animate({
        left: '-100%',
    }, 1500)
    $('#backBck5').animate({
        left: '-100%',
    }, 1100)

    /////////////////barra inferior

    setTimeout(() => {
        $('#backmas').fadeIn('50')
    }, 800)
    setTimeout(() => {
        $('#navleft').fadeIn('50')
    }, 800)

       

});


//////////////////BOTONES//////////////////////////
$(document).ready(function () {
    ///////////////////////////////////////
   
    ///////////////////////////////////////
    $('#iconsalir').mouseover(function () {
        setTimeout(() => {
            $('#texmodExit').css('display', 'block')
            $('#textnav').css('z-index', '21')
        }, 0)
    });
    $('#iconsalir').mouseout(function () {
        setTimeout(() => {
            $('#texmodExit').css('display', 'none')
            $('#textnav').css('z-index', '5')
        }, 0)
    });


});




