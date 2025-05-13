'use strict'

////////CARGA DE PAGINA Y ANIMACION INICIAL

window.addEventListener('load', function () {

    var contenedor = document.getElementById('backLoad');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';



    $('#contTab').fadeIn('fast')
});

$(document).ready(function () {



    $("#botmov1").click(function () {



        $('#form1').css('display', 'block')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'none')


    });

    $("#botmov2").click(function () {

        $('#form1').css('display', 'none')
        $('#form2').css('display', 'block')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'none')


    });

    $("#botmov3").click(function () {

        $('#form1').css('display', 'none')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'block')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'none')


    });

    $("#botmov4").click(function () {

        $('#form1').css('display', 'none')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'block')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'none')


    });

    $("#botmov5").click(function () {

        $('#form1').css('display', 'none')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'block')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'none')


    });

    $("#botmov6").click(function () {

        $('#for1m').css('display', 'none')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'block')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'none')


    });

    $("#botmov7").click(function () {

        $('#form1').css('display', 'none')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'block')
        $('#form8').css('display', 'none')


    });

    $("#botmov8").click(function () {

        $('#form1').css('display', 'none')
        $('#form2').css('display', 'none')
        $('#form3').css('display', 'none')
        $('#form4').css('display', 'none')
        $('#form5').css('display', 'none')
        $('#form6').css('display', 'none')
        $('#form7').css('display', 'none')
        $('#form8').css('display', 'block')


    });


    $("#backClick1").click(function () {

        $("#back1").css("transform", "scale(1,1)")
            .css("z-index", "200")
            .css("top", "1%")
            .css("left", "1%")
            .css("height", "91%")
            .css("width", "75%")

        $("#backClick1").css("display", "none")
        $("#backClick1b").css("display", "block")


        $("#tablataINDI").css("display", "none")
        $("#tablataINDImes").css("display", "block")

    });

    $("#backClick1b").click(function () {

        $("#back1").css("transform", "scale(1,1)")
            .css("z-index", "1")
            .css("top", "1%")
            .css("left", "1%")
            .css("height", "90.7%")
            .css("width", "75%")

        $("#backClick1").css("display", "block")
        $("#backClick1b").css("display", "none")


        $("#tablataINDI").css("display", "block")
        $("#tablataINDImes").css("display", "none")

    });


    ////////////////////////////////////////KPIS


    $("#backClick4").click(function () {

        $("#back4").css("transform", "scale(2,2)")
            .css("z-index", "100")
            .css("top", "22%")
            .css("left", "12%")
            .css("height", "39%")
        $("#backClick4").css("display", "none")
        $("#backClick4b").css("display", "block")

    });

    $("#backClick4b").click(function () {

        $("#back4").css("transform", "scale(1,1)")
            .css("z-index", "1")
            .css("top", "33%")
            .css("left", "77.1%")
            .css("height", "39%")
        $("#backClick4").css("display", "block")
        $("#backClick4b").css("display", "none")

    });

    $("#backClick6dos").click(function () {

        $("#back6dos").css("transform", "scale(2,2)")
            .css("z-index", "100")
            .css("top", "-13%")
            .css("left", "-20%")
            .css("width", "56%")
            .css("height", "112%")
        $("#backClick6dos").css("display", "none")
        $("#backClick6dosb").css("display", "block")
            .css("height", "126px")
    });

    $("#backClick6dosb").click(function () {

        $("#back6dos").css("transform", "scale(1,1)")
            .css("z-index", "1")
            .css("top", "14%")
            .css("left", "41%")
            .css("width", "56%")
            .css("height", "73%")
        $("#backClick6dos").css("display", "block")
        $("#backClick6dosb").css("display", "none")
            .css("height", "80px")

    });



    /////////////////////////////////////////////////

});


