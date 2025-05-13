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

 

    $("#abrimenu").click(function () {

        $('#mural').css('top', '2%')
        $('#abrimenu').css('display', 'none')
        $('#backMenu2').css('display', 'block')
        $('#abrimenu2').css('display', 'block')


    });

    $("#abrimenu2").click(function () {

        $('#mural').css('top', '0%')
        $('#abrimenu').css('display', 'block')
        $('#abrimenu2').css('display', 'none')
        $('#backMenu2').css('display', 'none')

    });


    $("#nameFiltros").mouseover(function () {
        $('#backFiltros').css('display', 'block')


    });

    $("#nameFiltros").mouseout(function () {
        $('#backFiltros').css('display', 'none')


    });



    $("#progqxBoton").click(function () {

        setTimeout(() => {
            $('#progqxBoton').css('background', '#0797FF')
            $('#eventBoton').css('background', 'rgb(53, 53, 233)')
            $('#mtaskBoton').css('background', 'rgb(53, 53, 233)')



            $('#iframeCal').css('display', 'block')
            $('#iframeCal2').css('display', 'none')
            $('#iframeCal3').css('display', 'none')

        }, 0)

    });



    $("#dash1").click(function () {

        setTimeout(() => {
       
            $('#dash1').css('background', '#0797FF')            
            $('#backlogdeo50').css('display', 'none')
            $('#iframeSuitedirgen').css('display', 'block')
            $('#cedrrarDash').css('display', 'block')
        }, 0)

    });

    $("#cedrrarDash").click(function () {

        setTimeout(() => {

            $('#iframeSuitedirgen').css('display', 'none')   
            $('#dash1').css('background', 'transparent')         
            $('#backlogdeo50').css('display', 'block')
            $('#cedrrarDash').css('display', 'none')

        }, 0)
   

    });

    
    $("#eventBoton").click(function () {

        setTimeout(() => {
            $('#progqxBoton').css('background', 'rgb(53, 53, 233)')
            $('#eventBoton').css('background', '#0797FF')
            $('#mtaskBoton').css('background', 'rgb(53, 53, 233)')



            $('#iframeCal').css('display', 'none')
            $('#iframeCal2').css('display', 'block')
            $('#iframeCal3').css('display', 'none')

        }, 0)

    });



    $("#mtaskBoton").click(function () {

        setTimeout(() => {

            $('#progqxBoton').css('background', 'rgb(53, 53, 233)')
            $('#eventBoton').css('background', 'rgb(53, 53, 233)')
            $('#mtaskBoton').css('background', '#0797FF')



            $('#iframeCal').css('display', 'none')
            $('#iframeCal2').css('display', 'none')
            $('#iframeCal3').css('display', 'block')

        }, 0)

    });



    $("#verIngresos").click(function () {

        setTimeout(() => {
            $('#verIngresos').css('display', 'none')
            $('#igresosDet').css('display', 'block')
            $('#cerrarIngre').css('display', 'block')
           
          
        }, 0)

    });

    $("#cerrarIngre").click(function () {

        setTimeout(() => {
            $('#verIngresos').css('display', 'block')
            $('#igresosDet').css('display', 'none')
            $('#cerrarIngre').css('display', 'none')
           

        }, 0)

    });



    $("#vertask").click(function () {

        setTimeout(() => {
            $('#vertask').css('display', 'none')
            $('#tablaTaskyy').css('display', 'block')
            $('#cerrartask').css('display', 'block')
           

        }, 0)

    });

    $("#cerrartask").click(function () {

        setTimeout(() => {
            $('#cerrartask').css('display', 'none')
            $('#tablaTaskyy').css('display', 'none')
            $('#vertask').css('display', 'block')
           

        }, 0)

    });

    $("#verEstadosR").click(function () {

        setTimeout(() => {
            $('#contEstados').css('display', 'block')
           

        }, 0)

    });



    $("#cerrarEstadosR").click(function () {

        setTimeout(() => {
            $('#contEstados').css('display', 'none')
           

        }, 0)

    });



    $("#verUt").click(function () {

        setTimeout(() => {
            $('#tableUtilidad').css('display', 'block')
            $('#verUt').css('display', 'none')
            $('#cerrarUt').css('display', 'block')
        }, 0)

    });


    $("#cerrarUt").click(function () {

        setTimeout(() => {
            $('#cerrarUt').css('display', 'none')
            $('#tableUtilidad').css('display', 'none')
            $('#verUt').css('display', 'block')

        }, 0)        

    });


    $("#verPROD").click(function () {

        setTimeout(() => {
            $('#prodcutback2').css('display', 'block')
            $('#verPROD').css('display', 'none')
            $('#cerrarPROD').css('display', 'block')
        }, 0)

    });


    $("#cerrarPROD").click(function () {

        setTimeout(() => {
            $('#cerrarPROD').css('display', 'none')
            $('#prodcutback2').css('display', 'none')
            $('#verPROD').css('display', 'block')

        }, 0)        

    });



    $("#verppto").click(function () {

        setTimeout(() => {
            $('#pptoback2').css('display', 'block')
            $('#verppto').css('display', 'none')
            $('#cerrarppto').css('display', 'block')
        }, 0)

    });


    $("#cerrarppto").click(function () {

        setTimeout(() => {
            $('#cerrarppto').css('display', 'none')
            $('#pptoback2').css('display', 'none')
            $('#verppto').css('display', 'block')

        }, 0)        

    });



    $("#verobj").click(function () {

        setTimeout(() => {
            $('.globres').css('display', 'block')
            $('#verobj').css('display', 'none')
            $('#cerrarobj').css('display', 'block')
        }, 0)

    });


    $("#cerrarobj").click(function () {

        setTimeout(() => {
            $('#cerrarobj').css('display', 'none')
            $('.globres').css('display', 'none')
            $('#verobj').css('display', 'block')

        }, 0)        

    });


    $("#verproy").click(function () {

        setTimeout(() => {
            $('#tableProyect').css('display', 'block')
            $('#verproy').css('display', 'none')
            $('#cerrarproy').css('display', 'block')
        }, 0)

    });


    $("#cerrarproy").click(function () {

        setTimeout(() => {
            $('#cerrarproy').css('display', 'none')
            $('#tableProyect').css('display', 'none')
            $('#verproy').css('display', 'block')

        }, 0)        

    });


    //////AMPLIAR ESTADO DE RESULTADOS


    $("#expandirER").click(function () {

        setTimeout(() => {

            $('#expandirER').css('display', 'none')
            $('#contraerER').css('display', 'block')

            $('#estadosRE1').css('width', '90%')


            $('#tablataRESventa').css('font-size', '0.9vw')
            $('#tablataRESventa2').css('font-size', '0.9vw')


            $('#contenedorCOSTOS').css('height', '463px')
            $('#tablataCosto').css('font-size', '0.9vw')
            $('#tablataCosto2').css('font-size', '0.9vw')


            $('#contenedorGASTOS').css('height', '1427px')
            $('#tablataGasto').css('font-size', '0.9vw')
            $('#tablataGasto2').css('font-size', '0.9vw')

            $('#contenedorUTILIDAD').css('height', '112px')
            $('#backUtilidad').css('font-size', '0.9vw')
        

        }, 0)

    });



    $("#contraerER").click(function () {

        setTimeout(() => {

            $('#expandirER').css('display', 'block')
            $('#contraerER').css('display', 'none')

            $('#estadosRE1').css('width', '48%')


            $('#tablataRESventa').css('font-size', '0.8vw')
            $('#tablataRESventa2').css('font-size', '0.8vw')


            $('#contenedorCOSTOS').css('height', '436px')
            $('#tablataCosto').css('font-size', '0.8vw')
            $('#tablataCosto2').css('font-size', '0.8vw')


            $('#contenedorGASTOS').css('height', '1182px')
            $('#tablataGasto').css('font-size', '0.7vw')
            $('#tablataGasto2').css('font-size', '0.7vw')

            $('#contenedorUTILIDAD').css('height', '117px')
            $('#backUtilidad').css('font-size', '0.8vw')
        

        }, 0)

    });

});


