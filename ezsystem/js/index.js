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
    
    
    
    

 ///////////////////////////////////////

    $('.backicon').mouseover(function () {
        setTimeout(() => {
          
           
        }, 0)
    });
    $('.backicon').mouseout(function () {
        setTimeout(() => {
            $('#texmodExit').css('box-shadow', '1px 0px 3px 0px #191919')
           
        }, 0)
    });






        ///////////////////////////////////////
   
   
        $('#leadmas2').mouseover(function () {
            setTimeout(() => {
                $('#text_lead').css('display', 'block')
       
            }, 0)
        });
        $('#leadmas2').mouseout(function () {
            setTimeout(() => {
                $('#text_lead').css('display', 'none')
            }, 0)
        });


         ///////////////////////////////////////
   
   
         $('#risk2').mouseover(function () {
            setTimeout(() => {
                $('#text_risk').css('display', 'block')
       
            }, 0)
        });
        $('#risk2').mouseout(function () {
            setTimeout(() => {
                $('#text_risk').css('display', 'none')
            }, 0)
        });


        
         ///////////////////////////////////////
   
   
         $('#results2').mouseover(function () {
            setTimeout(() => {
                $('#text_results').css('display', 'block')
       
            }, 0)
        });
        $('#results2').mouseout(function () {
            setTimeout(() => {
                $('#text_results').css('display', 'none')
            }, 0)
        });


          ///////////////////////////////////////
   
   
          $('#comply2').mouseover(function () {
            setTimeout(() => {
                $('#text_comply').css('display', 'block')
       
            }, 0)
        });
        $('#comply2').mouseout(function () {
            setTimeout(() => {
                $('#text_comply').css('display', 'none')
            }, 0)
        });


           ///////////////////////////////////////
   
   
           $('#task2').mouseover(function () {
            setTimeout(() => {
                $('#text_task').css('display', 'block')
       
            }, 0)
        });
        $('#task2').mouseout(function () {
            setTimeout(() => {
                $('#text_task').css('display', 'none')
            }, 0)
        });



         ///////////////////////////////////////
   
   
         $('#assess2').mouseover(function () {
            setTimeout(() => {
                $('#text_assess').css('display', 'block')
       
            }, 0)
        });
        $('#assess2').mouseout(function () {
            setTimeout(() => {
                $('#text_assess').css('display', 'none')
            }, 0)
        });
  
  

         ///////////////////////////////////////
   
   
         $('#ezbudget').mouseover(function () {
            setTimeout(() => {
                $('#text_ezbudget').css('display', 'block')
       
            }, 0)
        });
        $('#ezbudget').mouseout(function () {
            setTimeout(() => {
                $('#text_ezbudget').css('display', 'none')
            }, 0)
        });

        
         ///////////////////////////////////////
   
   
         $('#ezdocument').mouseover(function () {
            setTimeout(() => {
                $('#text_ezdocument').css('display', 'block')
       
            }, 0)
        });
        $('#ezdocument').mouseout(function () {
            setTimeout(() => {
                $('#text_ezdocument').css('display', 'none')
            }, 0)
        });
  
});




