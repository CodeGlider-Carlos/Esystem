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
    $('#slognav1').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt1').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav1').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt1').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });



    
    ///////////////////////////////////////
    $('#slognav2').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt2').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav2').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt2').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#slognav3').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt3').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav3').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt3').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });

    
    ///////////////////////////////////////
    $('#slognav4').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt4').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav4').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt4').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#slognav5').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt5').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav5').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt5').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });



    
    ///////////////////////////////////////
    $('#slognav6').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt6').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav6').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt6').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#slognav7').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt7').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav7').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt7').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });






    
    
    $('#MAS1').click(function () {
        
        setTimeout(() => {
            $('#section2').css('display', 'block')
            $('#MAS2').css('display', 'block')
            $('#MENOS2').css('display', 'block')
        }, 0)

   
    });


    $('#MAS2').click(function () {
        
        setTimeout(() => {
            $('#section3').css('display', 'block')
   
        }, 0)

   
    });




    
    $('#MENOS2').click(function () {
        
        setTimeout(() => {
            $('#section2').css('display', 'none')
            $('#MAS2').css('display', 'none')
            $('#MENOS2').css('display', 'none')
        }, 0)

   
    });

    $('#botcomen').click(function () {
        
        setTimeout(() => {
            $('#backtasky').css('display', 'none')
            $('#backcommen').css('display', 'block')
            $('#lineAC2').css('display', 'block')
            $('#lineAC1').css('display', 'none')
        }, 0)

   
    });



    
       
    $('#bottask').click(function () {
        
        setTimeout(() => {
            $('#backtasky').css('display', 'block')
            $('#backcommen').css('display', 'none')
            $('#lineAC2').css('display', 'none')
            $('#lineAC1').css('display', 'block')
           
        }, 0)


   
    });


});




