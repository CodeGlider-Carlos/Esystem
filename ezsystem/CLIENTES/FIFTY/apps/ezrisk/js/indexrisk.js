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
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav1').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt1').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });



    
    ///////////////////////////////////////
    $('#lognav2').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt2').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav2').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt2').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#lognav3').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt3').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav3').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt3').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });

    
    ///////////////////////////////////////
    $('#lognav4').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt4').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav4').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt4').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#lognav5').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt5').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav5').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt5').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });



    
    ///////////////////////////////////////
    $('#lognav6').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt6').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav6').mouseout(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'none')
            $('#txt6').css('display', 'none')
            $('#blockMod').css('display', 'none')
        }, 0)
    });


    
    ///////////////////////////////////////
    $('#lognav7').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt7').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#lognav7').mouseout(function () {
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
            $('#backRisk').css('display', 'none')
            $('#lineAC2').css('display', 'block')
            $('#lineAC1').css('display', 'none')
            $('#lineAC3').css('display', 'none')
        }, 0)

   
    });



    
       
    $('#bottask').click(function () {
        
        setTimeout(() => {
            $('#backtasky').css('display', 'block')
            $('#backcommen').css('display', 'none')  
            $('#backRisk').css('display', 'none')
            $('#lineAC2').css('display', 'none')
            $('#lineAC1').css('display', 'block')
            $('#lineAC3').css('display', 'none')
        }, 0)


   
    });

   
    $('#bottab').click(function () {
        
        setTimeout(() => {
            $('#backtasky').css('display', 'none')
            $('#backcommen').css('display', 'none')  
            $('#backRisk').css('display', 'block')
            $('#lineAC2').css('display', 'none')
            $('#lineAC1').css('display', 'none')
            $('#lineAC3').css('display', 'block')
        }, 0)


   
    });

   
    $("#backmod1").click(function () {

        $("#backClave").css("display", "block")
    });

    $("#backClave").click(function () {

        $("#backClave").css("display", "none")
    });

    

    ///////////////////////////////////////////////

    $("#backmod2").click(function () {

        $("#backMetas").css("display", "block")
    });

    $("#backMetas").click(function () {

        $("#backMetas").css("display", "none")
    });


    ///////////////////////////////////////////////

    $("#backmod3").click(function () {

        $("#backCrit").css("display", "block")
    });

    $("#backCrit").click(function () {

        $("#backCrit").css("display", "none")
    });

    ///////////////////////////////////////////////

    $("#backmod4").click(function () {

        $("#backGestion").css("display", "block")
    });

    $("#backGestion").click(function () {

        $("#backGestion").css("display", "none")
    });

  ///////////////////////////////////////////////

    $("#backmod5").click(function () {

        $("#backCalid").css("display", "block")
    });

    $("#backCalid").click(function () {

        $("#backCalid").css("display", "none")
    });



});




