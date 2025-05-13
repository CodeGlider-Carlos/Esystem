'use strict'
/*
window.addEventListener('load', function () {

    var contenedor = document.getElementById('backLoad');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';




});

*/
$(document).ready(function () {


    ///////////barras/////////////

    $('#backIndex').animate({
        width: '54%',
        top: '3%'

    }, 1000)


    setTimeout(() => {
        $('#bobybody').fadeOut('slow')
    }, 1000)

    setTimeout(() => {
        $('#backall').css('overflow-y', 'scroll')
    }, 1000)

    setTimeout(() => {
        $('#backall').show('slow')
    }, 1000)


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


    ///////////////////////////////////////

    $('.backicon').mouseover(function () {
        setTimeout(() => {
            $('#texmodExit').css('box-shadow', '1px 0px 13px 0px #ff3131')

        }, 0)
    });
    $('.backicon').mouseout(function () {
        setTimeout(() => {
            $('#texmodExit').css('box-shadow', '1px 0px 3px 0px #191919')

        }, 0)
    });





});





$(document).ready(function () {
    ///////////////////////////////////////

    $("#enero").click(function () {

        $('#contDos').animate({
            left: '0%',
        }, 500)
    });

    $("#febrero").click(function () {

        $('#contDos').animate({
            left: '0%',
        }, 500)
    });

    $("#marzo").click(function () {

        $('#contDos').animate({
            left: '-30%',
        }, 500)
    });

    $("#abril").click(function () {

        $('#contDos').animate({
            left: '-58%',
        }, 500)
    });

    $("#mayo").click(function () {

        $('#contDos').animate({
            left: '-85%',
        }, 500)
    });

    $("#junio").click(function () {

        $('#contDos').animate({
            left: '-111%',
        }, 500)
    });

    $("#julio").click(function () {

        $('#contDos').animate({
            left: '-140%',
        }, 500)
    });

    $("#agosto").click(function () {

        $('#contDos').animate({
            left: '-167%',
        }, 500)
    });
    $("#septiembre").click(function () {

        $('#contDos').animate({
            left: '-194%',
        }, 500)
    });
    $("#octubre").click(function () {

        $('#contDos').animate({
            left: '-222%',
        }, 500)
    });
    $("#noviembre").click(function () {

        $('#contDos').animate({
            left: '-249%',
        }, 500)
    });
    $("#diciembre").click(function () {

        $('#contDos').animate({
            left: '-275%',
        }, 500)
    });

    ///////////////////////////////////////

    $("#eneroA").click(function () {

        $('#contDosA').animate({
            left: '0%',
        }, 500)
    });

    $("#febreroA").click(function () {

        $('#contDosA').animate({
            left: '0%',
        }, 500)
    });

    $("#marzoA").click(function () {

        $('#contDosA').animate({
            left: '-30%',
        }, 500)
    });

    $("#abrilA").click(function () {

        $('#contDosA').animate({
            left: '-58%',
        }, 500)
    });

    $("#mayoA").click(function () {

        $('#contDosA').animate({
            left: '-85%',
        }, 500)
    });

    $("#junioA").click(function () {

        $('#contDosA').animate({
            left: '-111%',
        }, 500)
    });

    $("#julioA").click(function () {

        $('#contDosA').animate({
            left: '-140%',
        }, 500)
    });

    $("#agostoA").click(function () {

        $('#contDosA').animate({
            left: '-167%',
        }, 500)
    });
    $("#septiembreA").click(function () {

        $('#contDosA').animate({
            left: '-194%',
        }, 500)
    });
    $("#octubreA").click(function () {

        $('#contDosA').animate({
            left: '-222%',
        }, 500)
    });
    $("#noviembreA").click(function () {

        $('#contDosA').animate({
            left: '-249%',
        }, 500)
    });
    $("#diciembreA").click(function () {

        $('#contDosA').animate({
            left: '-275%',
        }, 500)
    });






    ///////////////////////////////////////

    $("#eneroC").click(function () {

        $('#contDosC').animate({
            left: '0%',
        }, 500)
    });

    $("#febreroC").click(function () {

        $('#contDosC').animate({
            left: '0%',
        }, 500)
    });

    $("#marzoC").click(function () {

        $('#contDosC').animate({
            left: '-30%',
        }, 500)
    });

    $("#abrilC").click(function () {

        $('#contDosC').animate({
            left: '-58%',
        }, 500)
    });

    $("#mayoC").click(function () {

        $('#contDosC').animate({
            left: '-85%',
        }, 500)
    });

    $("#junioC").click(function () {

        $('#contDosC').animate({
            left: '-111%',
        }, 500)
    });

    $("#julioC").click(function () {

        $('#contDosC').animate({
            left: '-140%',
        }, 500)
    });

    $("#agostoC").click(function () {

        $('#contDosC').animate({
            left: '-167%',
        }, 500)
    });
    $("#septiembreC").click(function () {

        $('#contDosC').animate({
            left: '-194%',
        }, 500)
    });
    $("#octubreC").click(function () {

        $('#contDosC').animate({
            left: '-222%',
        }, 500)
    });
    $("#noviembreC").click(function () {

        $('#contDosC').animate({
            left: '-249%',
        }, 500)
    });
    $("#diciembreC").click(function () {

        $('#contDosC').animate({
            left: '-275%',
        }, 500)
    });




    ///////////////////////////////////////

    $("#eneroCd").click(function () {

        $('#contDosD').animate({
            left: '0%',
        }, 500)
    });

    $("#febreroCd").click(function () {

        $('#contDosD').animate({
            left: '0%',
        }, 500)
    });

    $("#marzoCd").click(function () {

        $('#contDosD').animate({
            left: '-30%',
        }, 500)
    });

    $("#abrilCd").click(function () {

        $('#contDosD').animate({
            left: '-58%',
        }, 500)
    });

    $("#mayoCd").click(function () {

        $('#contDosD').animate({
            left: '-85%',
        }, 500)
    });

    $("#junioCd").click(function () {

        $('#contDosD').animate({
            left: '-111%',
        }, 500)
    });

    $("#julioCd").click(function () {

        $('#contDosD').animate({
            left: '-140%',
        }, 500)
    });

    $("#agostoCd").click(function () {

        $('#contDosD').animate({
            left: '-167%',
        }, 500)
    });
    $("#septiembreCd").click(function () {

        $('#contDosD').animate({
            left: '-194%',
        }, 500)
    });
    $("#octubreCd").click(function () {

        $('#contDosD').animate({
            left: '-222%',
        }, 500)
    });
    $("#noviembreCd").click(function () {

        $('#contDosD').animate({
            left: '-249%',
        }, 500)
    });
    $("#diciembreCd").click(function () {

        $('#contDosD').animate({
            left: '-275%',
        }, 500)
    });
    //////////////

    $("#ingresos").click(function () {

        $('#contenedorUTILIDAD').css('display', 'none')

        $('#contenedorVENTAS').css('display', 'block')
        $('#contenedorCOSTOS').css('display', 'none')
        $('#contenedorGASTOS').css('display', 'none')
        $('#contComCostos').css('display', 'none')
        $('#contComGastos').css('display', 'none')

        $('#ingresos').css('background', 'black')
        $('#costos').css('background', '#ffb331')
        $('#gastos').css('background', '#545353')
        $('#utilidad').css('background', 'transparent')

            .css('color', 'black')
    });

    $("#costos").click(function () {


        $('#contenedorUTILIDAD').css('display', 'none')
        $('#contenedorVENTAS').css('display', 'none')
        $('#contenedorCOSTOS').css('display', 'block')
        $('#contenedorGASTOS').css('display', 'none')
        $('#contComCostos').css('display', 'block')
        $('#contComGastos').css('display', 'none')


        $('#ingresos').css('background', '#ff5a31')
        $('#costos').css('background', 'black')
        $('#gastos').css('background', '#545353')
        $('#utilidad').css('background', 'transparent')
            .css('color', 'black')
    });

    $("#gastos").click(function () {

        $('#contenedorUTILIDAD').css('display', 'none')
        $('#contenedorVENTAS').css('display', 'none')
        $('#contenedorCOSTOS').css('display', 'none')
        $('#contenedorGASTOS').css('display', 'block')
        $('#contComCostos').css('display', 'none')
        $('#contComGastos').css('display', 'block')


        $('#ingresos').css('background', '#ff5a31')
        $('#costos').css('background', '#ffb331')
        $('#gastos').css('background', 'black')
        $('#utilidad').css('background', 'transparent')
            .css('color', 'black')

    });
    //
    $("#utilidad").click(function () {


        $('#contenedorVENTAS').css('display', 'none')
        $('#contenedorCOSTOS').css('display', 'none')
        $('#contenedorGASTOS').css('display', 'none')
        $('#contenedorUTILIDAD').css('display', 'block')
        $('#contComCostos').css('display', 'none')
        $('#contComGastos').css('display', 'none')


        $('#ingresos').css('background', '#ff5a31')
        $('#costos').css('background', '#ffb331')
        $('#gastos').css('background', '#545353')
        $('#utilidad').css('background', 'black')
            .css('color', 'white')
    });






    $("#modcome").click(function () {


        $('#granback_estados').css('display', 'none')
        $('#granback_comercial').css('display', 'block')
        $('#granback_okrs').css('display', 'none')
    });



    $("#modest").click(function () {


        $('#granback_estados').css('display', 'block')
        $('#granback_comercial').css('display', 'none')
        $('#granback_okrs').css('display', 'none')
    });


    $("#okrs").click(function () {


        $('#granback_okrs').css('display', 'block')
        $('#granback_comercial').css('display', 'none')
        $('#granback_estados').css('display', 'none')
    });






    $("#botCom1").click(function () {
        $('#com1').css('display', 'block')
    });
    $("#botCom2").click(function () {
        $('#com2').css('display', 'block')
    });
    $("#botCom3").click(function () {
        $('#com3').css('display', 'block')
    });
    $("#botCom4").click(function () {
        $('#com4').css('display', 'block')
    });
    $("#botCom5").click(function () {
        $('#com5').css('display', 'block')
    });

    $("#botCom6").click(function () {
        $('#com6').css('display', 'block')
    });
    $("#botCom7").click(function () {
        $('#com7').css('display', 'block')
    });

    $("#botCom8").click(function () {
        $('#com8').css('display', 'block')
    });
    $("#botCom9").click(function () {
        $('#com9').css('display', 'block')
    });
    $("#botCom10").click(function () {
        $('#com10').css('display', 'block')
    });
    $("#botCom11").click(function () {
        $('#com11').css('display', 'block')
    });
    $("#botCom12").click(function () {
        $('#com12').css('display', 'block')
    });
    $("#botCom13").click(function () {
        $('#com13').css('display', 'block')
    });
    $("#botCom14").click(function () {
        $('#com14').css('display', 'block')
    });
    $("#botCom15").click(function () {
        $('#com15').css('display', 'block')
    });
    $("#botCom16").click(function () {
        $('#com16').css('display', 'block')
    });
    $("#botCom17").click(function () {
        $('#com17').css('display', 'block')
    });
    $("#botCom18").click(function () {
        $('#com18').css('display', 'block')
    });
    $("#botCom19").click(function () {
        $('#com19').css('display', 'block')
    });

    $("#botCom20").click(function () {
        $('#com20').css('display', 'block')
    });

    $("#botCom21").click(function () {
        $('#com21').css('display', 'block')
    });

    $("#botCom22").click(function () {
        $('#com22').css('display', 'block')
    });

    $("#botCom23").click(function () {
        $('#com23').css('display', 'block')
    });

    $("#botCom24").click(function () {
        $('#com24').css('display', 'block')
    });

    $("#botCom25").click(function () {
        $('#com25').css('display', 'block')
    });

    $("#botCom26").click(function () {
        $('#com26').css('display', 'block')
    });

    $("#botCom27").click(function () {
        $('#com27').css('display', 'block')
    });


    $("#botCom28").click(function () { $('#com28').css('display', 'block' )   });
    $("#botCom29").click(function () { $('#com29').css('display', 'block' )   });
    $("#botCom30").click(function () { $('#com30').css('display', 'block' )   });
    $("#botCom31").click(function () { $('#com31').css('display', 'block' )   });
    $("#botCom32").click(function () { $('#com32').css('display', 'block' )   });
    $("#botCom33").click(function () { $('#com33').css('display', 'block' )   });
    $("#botCom34").click(function () { $('#com34').css('display', 'block' )   });
    $("#botCom35").click(function () { $('#com35').css('display', 'block' )   });
    $("#botCom36").click(function () { $('#com36').css('display', 'block' )   });
    $("#botCom37").click(function () { $('#com37').css('display', 'block' )   });
    $("#botCom38").click(function () { $('#com38').css('display', 'block' )   });
    $("#botCom39").click(function () { $('#com39').css('display', 'block' )   });
    $("#botCom40").click(function () { $('#com40').css('display', 'block' )   });
    $("#botCom41").click(function () { $('#com41').css('display', 'block' )   });
    $("#botCom42").click(function () { $('#com42').css('display', 'block' )   });
    $("#botCom43").click(function () { $('#com43').css('display', 'block' )   });
    $("#botCom44").click(function () { $('#com44').css('display', 'block' )   });
    $("#botCom45").click(function () { $('#com45').css('display', 'block' )   });
    $("#botCom46").click(function () { $('#com46').css('display', 'block' )   });
    $("#botCom47").click(function () { $('#com47').css('display', 'block' )   });
    $("#botCom48").click(function () { $('#com48').css('display', 'block' )   });
    $("#botCom49").click(function () { $('#com49').css('display', 'block' )   });
    $("#botCom50").click(function () { $('#com50').css('display', 'block' )   });
    $("#botCom51").click(function () { $('#com51').css('display', 'block' )   });
    $("#botCom52").click(function () { $('#com52').css('display', 'block' )   });
    $("#botCom53").click(function () { $('#com53').css('display', 'block' )   });
    $("#botCom54").click(function () { $('#com54').css('display', 'block' )   });
    $("#botCom55").click(function () { $('#com55').css('display', 'block' )   });
    $("#botCom56").click(function () { $('#com56').css('display', 'block' )   });
    $("#botCom57").click(function () { $('#com57').css('display', 'block' )   });
    $("#botCom58").click(function () { $('#com58').css('display', 'block' )   });
    $("#botCom59").click(function () { $('#com59').css('display', 'block' )   });
    $("#botCom60").click(function () { $('#com60').css('display', 'block' )   });
    $("#botCom61").click(function () { $('#com61').css('display', 'block' )   });
    $("#botCom62").click(function () { $('#com62').css('display', 'block' )   });
    $("#botCom63").click(function () { $('#com63').css('display', 'block' )   });
    $("#botCom64").click(function () { $('#com64').css('display', 'block' )   });
    $("#botCom65").click(function () { $('#com65').css('display', 'block' )   });
    $("#botCom66").click(function () { $('#com66').css('display', 'block' )   });
    $("#botCom67").click(function () { $('#com67').css('display', 'block' )   });
    $("#botCom68").click(function () { $('#com68').css('display', 'block' )   });
    $("#botCom69").click(function () { $('#com69').css('display', 'block' )   });
    $("#botCom70").click(function () { $('#com70').css('display', 'block' )   });
    $("#botCom71").click(function () { $('#com71').css('display', 'block' )   });
    $("#botCom72").click(function () { $('#com72').css('display', 'block' )   });
    $("#botCom73").click(function () { $('#com73').css('display', 'block' )   });
    $("#botCom74").click(function () { $('#com74').css('display', 'block' )   });
    $("#botCom75").click(function () { $('#com75').css('display', 'block' )   });
    $("#botCom76").click(function () { $('#com76').css('display', 'block' )   });
    $("#botCom77").click(function () { $('#com77').css('display', 'block' )   });
    $("#botCom78").click(function () { $('#com78').css('display', 'block' )   });
    $("#botCom79").click(function () { $('#com79').css('display', 'block' )   });
    $("#botCom80").click(function () { $('#com80').css('display', 'block' )   });
    


    $("#contComCostos").click(function () {
        $('#com1').css('display', 'none')
        $('#com2').css('display', 'none')
        $('#com3').css('display', 'none')
        $('#com4').css('display', 'none')
        $('#com5').css('display', 'none')
        $('#com6').css('display', 'none')
        $('#com7').css('display', 'none')
        $('#com8').css('display', 'none')
        $('#com9').css('display', 'none')
        $('#com10').css('display', 'none')
        $('#com11').css('display', 'none')
        $('#com12').css('display', 'none')
        $('#com13').css('display', 'none')
        $('#com14').css('display', 'none')
        $('#com15').css('display', 'none')
        $('#com16').css('display', 'none')
        $('#com17').css('display', 'none')
        $('#com18').css('display', 'none')
        $('#com19').css('display', 'none')
        $('#com20').css('display', 'none')
        $('#com21').css('display', 'none')
        $('#com22').css('display', 'none')
        $('#com23').css('display', 'none')
        $('#com24').css('display', 'none')
     


    });


    $("#contComGastos").click(function () {
       
        $('#com25').css('display', 'none')
        $('#com26').css('display', 'none')
        $('#com27').css('display', 'none')
        $('#com28').css('display', 'none')
        $('#com29').css('display', 'none')
        $('#com30').css('display', 'none')
        $('#com31').css('display', 'none')
        $('#com32').css('display', 'none')
        $('#com33').css('display', 'none')
        $('#com34').css('display', 'none')
        $('#com35').css('display', 'none')
        $('#com36').css('display', 'none')
        $('#com37').css('display', 'none')
        $('#com38').css('display', 'none')
        $('#com39').css('display', 'none')
        $('#com40').css('display', 'none')
        $('#com41').css('display', 'none')
        $('#com42').css('display', 'none')
        $('#com43').css('display', 'none')
        $('#com44').css('display', 'none')
        $('#com45').css('display', 'none')
        $('#com46').css('display', 'none')
        $('#com47').css('display', 'none')
        $('#com48').css('display', 'none')
        $('#com49').css('display', 'none')
        $('#com50').css('display', 'none')
        $('#com51').css('display', 'none')
        $('#com52').css('display', 'none')
        $('#com53').css('display', 'none')
        $('#com54').css('display', 'none')
        $('#com55').css('display', 'none')
        $('#com56').css('display', 'none')
        $('#com57').css('display', 'none')
        $('#com58').css('display', 'none')
        $('#com59').css('display', 'none')
        $('#com60').css('display', 'none')
        $('#com61').css('display', 'none')
        $('#com62').css('display', 'none')
        $('#com63').css('display', 'none')
        $('#com64').css('display', 'none')
        $('#com65').css('display', 'none')
        $('#com66').css('display', 'none')
        $('#com67').css('display', 'none')
        $('#com68').css('display', 'none')
        $('#com69').css('display', 'none')
        $('#com70').css('display', 'none')
        $('#com71').css('display', 'none')
        $('#com72').css('display', 'none')
        $('#com73').css('display', 'none')
        $('#com74').css('display', 'none')
        $('#com75').css('display', 'none')
        $('#com76').css('display', 'none')
        $('#com77').css('display', 'none')
        $('#com78').css('display', 'none')
        $('#com79').css('display', 'none')
        $('#com80').css('display', 'none')


    });





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
    $('#slognav4').mouseover(function () {
        setTimeout(() => {
            $('#navleftx').css('display', 'block')
            $('#txt5').css('display', 'block')
            $('#blockMod').css('display', 'block')
        }, 0)
    });
    $('#slognav4').mouseout(function () {
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



    ////////////////////RIEL

    $("#boton_riel1").click(function () {
        $('#mod_Lin').css('display', 'block')
        $('#mod_Proceso').css('display', 'none')
        $('#mod_Respon').css('display', 'none')
        $('#mod_Prog').css('display', 'none')
    });

    $("#boton_riel2").click(function () {
        $('#mod_Lin').css('display', 'none')
        $('#mod_Proceso').css('display', 'block')
        $('#mod_Respon').css('display', 'none')
        $('#mod_Prog').css('display', 'none')
    });
    $("#boton_riel3").click(function () {
        $('#mod_Lin').css('display', 'none')
        $('#mod_Proceso').css('display', 'none')
        $('#mod_Respon').css('display', 'block')
        $('#mod_Prog').css('display', 'none')
    });

    $("#boton_riel4").click(function () {
        $('#mod_Lin').css('display', 'none')
        $('#mod_Proceso').css('display', 'none')
        $('#mod_Respon').css('display', 'none')
        $('#mod_Prog').css('display', 'block')
    });

    $("#boton_riel5").click(function () {
        $('#mod_Lin').css('display', 'none')
        $('#mod_Proceso').css('display', 'none')
        $('#mod_Respon').css('display', 'none')
        $('#mod_Prog').css('display', 'none')
    });




    
    ////////////////////RIEL

    $("#botrut1").click(function () {
        $('#rutinas1').css('display', 'block')
        $('#etapa1').css('display', 'none')

        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut2").click(function () {
        $('#rutinas2').css('display', 'block')
        $('#etapa2').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut3").click(function () {
        $('#rutinas3').css('display', 'block')
        $('#etapa3').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut4").click(function () {
        $('#rutinas4').css('display', 'block')
        $('#etapa4').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut5").click(function () {
        $('#rutinas5').css('display', 'block')
        $('#etapa5').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut6").click(function () {
        $('#rutinas6').css('display', 'block')
        $('#etapa6').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut7").click(function () {
        $('#rutinas7').css('display', 'block')
        $('#etapa7').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut8").click(function () {
        $('#rutinas8').css('display', 'block')
        $('#etapa8').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut9").click(function () {
        $('#rutinas9').css('display', 'block')
        $('#etapa9').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut10").click(function () {
        $('#rutinas10').css('display', 'block')
        $('#etapa10').css('display', 'none')


        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut11").click(function () {
        $('#rutinas11').css('display', 'block')
        $('#etapa11').css('display', 'none')


        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut12").click(function () {
        $('#rutinas12').css('display', 'block')
        $('#etapa12').css('display', 'none')

        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut13").click(function () {
        $('#rutinas13').css('display', 'block')
        $('#etapa13').css('display', 'none')


        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut14").click(function () {
        $('#rutinas14').css('display', 'block')
        $('#etapa14').css('display', 'none')


        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });
    $("#botrut15").click(function () {
        $('#rutinas15').css('display', 'block')
        $('#etapa15').css('display', 'none')


        $('#rutinas1').css('display', 'none')
        $('#rutinas2').css('display', 'none')
        $('#rutinas3').css('display', 'none')
        $('#rutinas4').css('display', 'none')
        $('#rutinas5').css('display', 'none')
        $('#rutinas6').css('display', 'none')
        $('#rutinas7').css('display', 'none')
        $('#rutinas8').css('display', 'none')
        $('#rutinas9').css('display', 'none')
        $('#rutinas10').css('display', 'none')
        $('#rutinas11').css('display', 'none')
        $('#rutinas12').css('display', 'none')
        $('#rutinas13').css('display', 'none')
        $('#rutinas14').css('display', 'none')
        $('#rutinas15').css('display', 'none')
    });

    //////cerrar

    $("#rutinas1").click(function () {
        $('#rutinas1').css('display', 'none')
        $('#etapa1').css('display', 'block')
        
    });
    
    $("#rutinas2").click(function () {
        $('#rutinas2').css('display', 'none')
        $('#etapa2').css('display', 'block')
    });
    $("#rutinas3").click(function () {
        $('#rutinas3').css('display', 'none')
        $('#etapa3').css('display', 'block')
    });

    
    $("#rutinas4").click(function () {
        $('#rutinas4').css('display', 'none')
        $('#etapa4').css('display', 'block')
    });
    $("#rutinas5").click(function () {
        $('#rutinas5').css('display', 'none')
        $('#etapa5').css('display', 'block')
    });
    $("#rutinas6").click(function () {
        $('#rutinas6').css('display', 'none')
        $('#etapa6').css('display', 'block')
    });
    $("#rutinas7").click(function () {
        $('#rutinas7').css('display', 'none')
        $('#etapa7').css('display', 'block')
    });
    $("#rutinas8").click(function () {
        $('#rutinas8').css('display', 'none')
        $('#etapa8').css('display', 'block')
    });
    $("#rutinas9").click(function () {
        $('#rutinas9').css('display', 'none')
        $('#etapa9').css('display', 'block')
    });
    $("#rutinas10").click(function () {
        $('#rutinas10').css('display', 'none')
        $('#etapa10').css('display', 'block')
    });
    $("#rutinas11").click(function () {
        $('#rutinas11').css('display', 'none')
        $('#etapa11').css('display', 'block')
    });
    $("#rutinas12").click(function () {
        $('#rutinas12').css('display', 'none')
        $('#etapa12').css('display', 'block')
    });
    $("#rutinas13").click(function () {
        $('#rutinas13').css('display', 'none')
        $('#etapa13').css('display', 'block')
    });
    $("#rutinas14").click(function () {
        $('#rutinas14').css('display', 'none')
        $('#etapa14').css('display', 'block')
    });
    $("#rutinas15").click(function () {
        $('#rutinas15').css('display', 'none')
        $('#etapa15').css('display', 'block')
        
    });
  




     //////////HOVER MODELOS


     $('#botonhome1').mouseover(function () {
        $('#gld').css('display', 'block')
    });
    $('#botonhome1').mouseout(function () {
        $('#gld').css('display', 'none')
    });



    $('#botonhome2').mouseover(function () {
        $('#fin').css('display', 'block')
    });
    $('#botonhome2').mouseout(function () {
        $('#fin').css('display', 'none')
    });



    $('#botonhome3').mouseover(function () {
        $('#prov').css('display', 'block')
    });
    $('#botonhome3').mouseout(function () {
        $('#prov').css('display', 'none')
    });



    $('#botonhome3b').mouseover(function () {
        $('#vinc').css('display', 'block')
    });
    $('#botonhome3b').mouseout(function () {
        $('#vinc').css('display', 'none')
    });




    $('#botonhome4').mouseover(function () {
        $('#qps').css('display', 'block')
    });
    $('#botonhome4').mouseout(function () {
        $('#qps').css('display', 'none')
    });




    $('#botonhome5').mouseover(function () {
        $('#mmu').css('display', 'block')
    });
    $('#botonhome5').mouseout(function () {
        $('#mmu').css('display', 'none')
    });




    $('#botonhome6').mouseover(function () {
        $('#pci').css('display', 'block')
    });
    $('#botonhome6').mouseout(function () {
        $('#pci').css('display', 'none')
    });



    $('#botonhome7').mouseover(function () {
        $('#fms').css('display', 'block')
    });
    $('#botonhome7').mouseout(function () {
        $('#fms').css('display', 'none')
    });



    $('#botonhome8').mouseover(function () {
        $('#sqe').css('display', 'block')
    });
    $('#botonhome8').mouseout(function () {
        $('#sqe').css('display', 'none')
    });





    $('#botonhome9').mouseover(function () {
        $('#misp').css('display', 'block')
    });
    $('#botonhome9').mouseout(function () {
        $('#misp').css('display', 'none')
    });




    $('#botonhome10').mouseover(function () {
        $('#mci').css('display', 'block')
    });
    $('#botonhome10').mouseout(function () {
        $('#mci').css('display', 'none')
    });




    $('#botonhome11').mouseover(function () {
        $('#ginf').css('display', 'block')
    });
    $('#botonhome11').mouseout(function () {
        $('#ginf').css('display', 'none')
    });




    $('#botonhome12').mouseover(function () {
        $('#px').css('display', 'block')
    });
    $('#botonhome12').mouseout(function () {
        $('#px').css('display', 'none')
    });



    /////////////////////////////////////



    $('#botrut').mouseover(function () {
        setTimeout(() => {
            $('.boronrutinas').css('box-shadow', '1px 0px 3px 0px #191919')
           
        }, 0)
    });
    $('#botrut').mouseout(function () {
        setTimeout(() => {
            $('.boronrutinas').css('box-shadow', '1px 0px 3px 0px #191919')
           
        }, 0)
    });





    $("#verRESP").click(function () {
        $('.tablebackresp').css('display', 'block')
        $('#verRESP').css('display', 'none')
        $('#backresp').css('z-index', '1000')
        
    });      
  


    $(".tablebackresp").click(function () {
        $('.tablebackresp').css('display', 'none')
        $('#verRESP').css('display', 'block')
        $('#backresp').css('z-index', '10')
    });

    

});




