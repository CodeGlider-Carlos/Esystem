'use strict'
window.addEventListener('load', function () {

    var contenedor = document.getElementById('backLoad');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';



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



    ///////////////////////////////////////
    $('#botmov1').mouseover(function () {
        setTimeout(() => {
            $('#slidTit1').css('display', 'block')


        }, 0)
    });
    $('#botmov1').mouseout(function () {
        setTimeout(() => {
            $('#slidTit1').css('display', 'none')

        }, 0)
    });
    ///////////////////////////////////////
    $('#botmov2').mouseover(function () {
        setTimeout(() => {
            $('#slidTit2').css('display', 'block')


        }, 0)
    });
    $('#botmov2').mouseout(function () {
        setTimeout(() => {
            $('#slidTit2').css('display', 'none')

        }, 0)
    });

    ///////////////////////////////////////
    $('#botmov3').mouseover(function () {
        setTimeout(() => {
            $('#slidTit3').css('display', 'block')


        }, 0)
    });
    $('#botmov3').mouseout(function () {
        setTimeout(() => {
            $('#slidTit3').css('display', 'none')

        }, 0)
    });

    ///////////////////////////////////////
    $('#botmov4').mouseover(function () {
        setTimeout(() => {
            $('#slidTit4').css('display', 'block')


        }, 0)
    });
    $('#botmov4').mouseout(function () {
        setTimeout(() => {
            $('#slidTit4').css('display', 'none')

        }, 0)
    });
    ///////////////////////////////////////
    $('#botmov5').mouseover(function () {
        setTimeout(() => {
            $('#slidTit5').css('display', 'block')


        }, 0)
    });
    $('#botmov5').mouseout(function () {
        setTimeout(() => {
            $('#slidTit5').css('display', 'none')

        }, 0)
    });

    ///////////////////////////////////////
    $('#botmov6').mouseover(function () {
        setTimeout(() => {
            $('#slidTit6').css('display', 'block')


        }, 0)
    });
    $('#botmov6').mouseout(function () {
        setTimeout(() => {
            $('#slidTit6').css('display', 'none')

        }, 0)
    });

    ///////////////////////////////////////
    $('#botmov7').mouseover(function () {
        setTimeout(() => {
            $('#slidTit7').css('display', 'block')


        }, 0)
    });
    $('#botmov7').mouseout(function () {
        setTimeout(() => {
            $('#slidTit7').css('display', 'none')

        }, 0)
    });

    ///////////////////////////////////////
    $('#botmov8').mouseover(function () {
        setTimeout(() => {
            $('#slidTit8').css('display', 'block')


        }, 0)
    });
    $('#botmov8').mouseout(function () {
        setTimeout(() => {
            $('#slidTit8').css('display', 'none')

        }, 0)
    });

});
