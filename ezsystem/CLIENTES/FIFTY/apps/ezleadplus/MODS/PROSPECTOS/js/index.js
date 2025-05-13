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
    $('#lognav1').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt1').css('display', 'block')
        }, 0)
    });
    $('#lognav1').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt1').css('display', 'none')
        }, 0)
    });



    
    ///////////////////////////////////////
    $('#lognav2').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt2').css('display', 'block')
        }, 0)
    });
    $('#lognav2').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt2').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#lognav3').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt3').css('display', 'block')
        }, 0)
    });
    $('#lognav3').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt3').css('display', 'none')
        }, 0)
    });

    
    ///////////////////////////////////////
    $('#lognav4').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt4').css('display', 'block')
        }, 0)
    });
    $('#lognav4').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt4').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#lognav5').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt5').css('display', 'block')
        }, 0)
    });
    $('#lognav5').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt5').css('display', 'none')
        }, 0)
    });



    
    ///////////////////////////////////////
    $('#lognav6').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt6').css('display', 'block')
        }, 0)
    });
    $('#lognav6').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt6').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#lognav7').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt7').css('display', 'block')
        }, 0)
    });
    $('#lognav7').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt7').css('display', 'none')
        }, 0)
    });

});




