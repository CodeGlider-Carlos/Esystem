'use strict'
window.addEventListener('load', function () {

    var contenedor = document.getElementById('backLoad');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';



    
});



$(document).ready(function () {


  
    ////////////////botones


    setTimeout(() => {
        $('#botonConfIcon').fadeIn('50')
    }, 800)

    setTimeout(() => {
        $('#contnames').fadeIn('50')
    }, 800)

    setTimeout(() => {
        $('#salir').fadeIn('50')
    }, 800)
    setTimeout(() => {
        $('#mural').fadeIn('50')
    }, 500)



});


///////////////////////////
$(document).ready(function () {

    $("#bothab").click(function () {

        setTimeout(() => {
             $('#bothab').css('background', '#0797FF')
             $('#botqx').css('background', 'rgb(53, 53, 233)')
             $('#botIns').css('background', 'rgb(53, 53, 233)')
             $('#botmed').css('background', 'rgb(53, 53, 233)')


            $('#tableHabi').css('display', 'block')
            $('#tableQx').css('display', 'none')
            $('#tableIns').css('display', 'none')
            $('#tableMed').css('display', 'none')
        
        }, 0)
 
    });

    $("#botqx").click(function () {

        setTimeout(() => {
            $('#bothab').css('background', 'rgb(53, 53, 233)')
            $('#botqx').css('background', '#0797FF')
            $('#botIns').css('background', 'rgb(53, 53, 233)')
            $('#botmed').css('background', 'rgb(53, 53, 233)')
          


            $('#tableHabi').css('display', 'none')
            $('#tableQx').css('display', 'block')
            $('#tableIns').css('display', 'none')
            $('#tableMed').css('display', 'none')
        
        }, 0)

    });


    $("#botIns").click(function () {

        setTimeout(() => {
            $('#bothab').css('background', 'rgb(53, 53, 233)')
            $('#botqx').css('background', 'rgb(53, 53, 233)')
            $('#botIns').css('background', '#0797FF')
            $('#botmed').css('background', 'rgb(53, 53, 233)')
          


            $('#tableHabi').css('display', 'none')
            $('#tableQx').css('display', 'none')
            $('#tableIns').css('display', 'block')
            $('#tableMed').css('display', 'none')
        
        }, 0)

    });


    $("#botmed").click(function () {

        setTimeout(() => {
            
            $('#bothab').css('background', 'rgb(53, 53, 233)')
            $('#botqx').css('background', 'rgb(53, 53, 233)')
            $('#botIns').css('background', 'rgb(53, 53, 233)')
            $('#botmed').css('background', '#0797FF')
          


            $('#tableHabi').css('display', 'none')
            $('#tableQx').css('display', 'none')
            $('#tableIns').css('display', 'none')
            $('#tableMed').css('display', 'block')
        
        }, 0)

    });

    $("#cerrarMod").click(function () {

        setTimeout(() => {

            $('#botonOneIcon').css('color', '#7F796E')
            $('#botonOneIcon').css('font-family', 'erasdemi')
            $('#botonDosIcon').css('color', '#7F796E')
            $('#botonDosIcon').css('font-family', 'erasdemi')
            $('#botonTresIcon').css('color', '#7F796E')
            $('#botonTresIcon').css('font-family', 'erasdemi')
            $('#botonFourIcon').css('color', '#7F796E')
            $('#botonFourIcon').css('font-family', 'erasdemi')
            $('#botonFiveIcon').css('color', '#7F796E')
            $('#botonFiveIcon').css('font-family', 'erasdemi')
            $('#botonConfIcon').css('color', '#7F796E')
            $('#botonConfIcon').css('font-family', 'erasdemi')

            $('#modInicioTit').css('display', 'block')
            $('#modConfTit').css('display', 'none')
            $('#modOneTit').css('display', 'none')
            $('#modDosTit').css('display', 'none')
            $('#modTresTit').css('display', 'none')
            $('#modFourTit').css('display', 'none')
            $('#modFiveTit').css('display', 'none')
            $('#cerrarMod').css('display', 'none')
            $('#modConf').css('display', 'none')
            $('#modOne').css('display', 'none')
            $('#modDos').css('display', 'none')
            $('#modTres').css('display', 'none')
            $('#modFour').css('display', 'none')
            $('#modFive').css('display', 'none')
            $('#modOne').css('display', 'none')
            $('#mural').css('display', 'block')



        }, 0)

    });


    $("#backCerrar").click(function () {

        setTimeout(() => {

            $('#iframeTask').css('display', 'none')
            $('#iframeTaskVer').css('display', 'none')
            $('#backCerrar').css('display', 'none')

          
           

        }, 0)

    });

    $("#abrimenu").click(function () {

        $('#mural').css('top', '35px')
        $('#abrimenu').css('display', 'none')
        $('#backMenu2').css('display', 'block')
        $('#abrimenu2').css('display', 'block')

        
    });
    $("#abrimenu2").click(function () {

        $('#mural').css('top', '0%')
        $('#abrimenu').css('display', 'block')
        $('#abrimenu2').css('display', 'none')
        $('#backMenu2').css('display', 'none')
        $('#backFiltros').css('display', 'none')
        $('#iframeIntegrarPaq').css('display', 'none')
        $('#iframeCotizarPaq').css('display', 'none')
        $('#iframeElimPaq').css('display', 'none')
        $('#iframeModPaq').css('display', 'none')
    });


    $("#intpaq").click(function () {

        $('#iframeIntegrarPaq').css('display', 'block')
        $('#iframeCotizarPaq').css('display', 'none')
        $('#iframeModPaq').css('display', 'none')
        $('#iframeElimPaq').css('display', 'none')

        $('#intpaq').css('color', '#fa5e5e')
        $('#intcot').css('color', 'white')
        $('#elcot').css('color', 'white')
        $('#modpaq').css('color', 'white')
  
    });
//          rgb(41, 41, 41)
    $("#intcot").click(function () {

        $('#iframeIntegrarPaq').css('display', 'none')
        $('#iframeCotizarPaq').css('display', 'block')
        $('#iframeModPaq').css('display', 'none')
        $('#iframeElimPaq').css('display', 'none')

        $('#intpaq').css('color', 'white')
        $('#intcot').css('color', '#fa5e5e')
        $('#elcot').css('color', 'white')
        $('#modpaq').css('color', 'white')
  
    });

    $("#modpaq").click(function () {

        $('#iframeIntegrarPaq').css('display', 'none')
        $('#iframeCotizarPaq').css('display', 'none')
        $('#iframeElimPaq').css('display', 'none')
        $('#iframeModPaq').css('display', 'block')

        $('#intpaq').css('color', 'white')
        $('#intcot').css('color', 'white')
        $('#elcot').css('color', 'white')
        $('#modpaq').css('color', '#fa5e5e')
  
    });


    $("#elcot").click(function () {

        $('#iframeIntegrarPaq').css('display', 'none')
        $('#iframeCotizarPaq').css('display', 'none')
        $('#iframeModPaq').css('display', 'none')
        $('#iframeElimPaq').css('display', 'block')

       
        $('#intpaq').css('color', 'white')
        $('#intcot').css('color', 'white')
        $('#modpaq').css('color', 'white')
        $('#elcot').css('color', '#fa5e5e')
  
  
    });


    $("#nameFiltros").mouseover(function(){
        $('#backFiltros').css('display', 'block')

   
      });

      $("#nameFiltros").mouseout(function(){
  
   
      });




});


