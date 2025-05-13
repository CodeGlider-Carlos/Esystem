'use strict'

//////////////////////////////////////////////////CARGA HOME////////////////////////////////////////////////////



////////OPERACION TASK/////////////
$(document).ready(function () {

/*
    $('#ENERO01').click(function () {
        setTimeout(() => {
            $('#acciones').css('display', 'none')
            $('#eventonuevo').css('display', 'block')           
        }, 0)

     
    });
*/
    $('#botonEne').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'block')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')   
            
         
              
            $('#botonEne').css('background-color', '#e4874e') 
            $('#botonFeb').css('background-color', 'transparent')  
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')  

       
        }, 0)
    });
  


    $('#botonFeb').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'block')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')  
            

            $('#botonEne').css('background-color', 'transparent') 
            $('#botonFeb').css('background-color', '#e4874e')
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')   


        }, 0)
    });

    $('#botonMar').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'block')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')     
            
          
            $('#botonEne').css('background-color', 'transparent') 
            $('#botonFeb').css('background-color', 'transparent')
            $('#botonMar').css('background-color', '#e4874e')  
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')   
        }, 0)
    });

    $('#botonAbr').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'block')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')       
            
            
           
            $('#botonEne').css('background-color', 'transparent') 
            $('#botonFeb').css('background-color', 'transparent')
            $('#botonMar').css('background-color', 'transparent')  
            $('#botonAbr').css('background-color', '#e4874e')   
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')   
        }, 0)
    });

    $('#botonMay').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'block')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')  
            
            
         
            $('#botonEne').css('background-color', 'transparent') 
            $('#botonFeb').css('background-color', 'transparent')
            $('#botonMar').css('background-color', 'transparent')  
            $('#botonAbr').css('background-color', 'transparent')   
            $('#botonMay').css('background-color', '#e4874e') 
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')    
        }, 0)
    });

    $('#botonJun').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'block')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')       
            
            

               
         
            $('#botonEne').css('background-color', 'transparent') 
            $('#botonFeb').css('background-color', 'transparent')
            $('#botonMar').css('background-color', 'transparent')  
            $('#botonAbr').css('background-color', 'transparent')   
            $('#botonMay').css('background-color', 'transparent') 
            $('#botonJun').css('background-color', '#e4874e')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')    
            
            
        }, 0)
    });

    $('#botonJul').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'block')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')     

            
            
            $('#botonEne').css('background-color', 'transparent') 
            $('#botonFeb').css('background-color', 'transparent')
            $('#botonMar').css('background-color', 'transparent')  
            $('#botonAbr').css('background-color', 'transparent')   
            $('#botonMay').css('background-color', 'transparent') 
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', '#e4874e')
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent') 
        }, 0)
    });

    $('#botonAgo').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'block')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')  
            
                 
        
            $('#botonEne').css('background-color', 'transparent')  
            $('#botonFeb').css('background-color', 'transparent')  
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', '#e4874e')  
            $('#botonSep').css('background-color', 'transparent')   
            $('#botonOct').css('background-color', 'transparent')    
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')   
        }, 0)
    });

    $('#botonSep').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'block')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')    
            
                       
          
            $('#botonEne').css('background-color', 'transparent')  
            $('#botonFeb').css('background-color', 'transparent')  
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', '#e4874e')    
            $('#botonOct').css('background-color', 'transparent')    
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')   
        }, 0)
    });

    $('#botonOct').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'block')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'none')           

                          
          
            $('#botonEne').css('background-color', 'transparent')  
            $('#botonFeb').css('background-color', 'transparent')  
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', '#e4874e')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', 'transparent')  
        }, 0)
    });

    $('#botonNov').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'block')     
            $('#miDiciembre').css('display', 'none')  
            
          
            $('#botonEne').css('background-color', 'transparent')  
            $('#botonFeb').css('background-color', 'transparent')  
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', '#e4874e')  
            $('#botonDic').css('background-color', 'transparent')  
        }, 0)
    });

    $('#botonDic').click(function () {
        setTimeout(() => {
            $('#minEnero').css('display', 'none')
            $('#miFebrero').css('display', 'none')   
            $('#miMarzo').css('display', 'none')     
            $('#miAbril').css('display', 'none')     
            $('#miMayo').css('display', 'none')     
            $('#miJunio').css('display', 'none')     
            $('#miJulio').css('display', 'none')     
            $('#miAgosto').css('display', 'none')     
            $('#miSeptiembre').css('display', 'none')     
            $('#miOctubre').css('display', 'none')     
            $('#miNoviembre').css('display', 'none')     
            $('#miDiciembre').css('display', 'block')      
            
               
           
            
            $('#botonEne').css('background-color', 'transparent')  
            $('#botonFeb').css('background-color', 'transparent')  
            $('#botonMar').css('background-color', 'transparent')   
            $('#botonAbr').css('background-color', 'transparent')  
            $('#botonMay').css('background-color', 'transparent')   
            $('#botonJun').css('background-color', 'transparent')  
            $('#botonJul').css('background-color', 'transparent')  
            $('#botonAgo').css('background-color', 'transparent')  
            $('#botonSep').css('background-color', 'transparent')    
            $('#botonOct').css('background-color', 'transparent')  
            $('#botonNov').css('background-color', 'transparent')  
            $('#botonDic').css('background-color', '#e4874e')  
        }, 0)
    });


    $('#cerrar').click(function () {

       setTimeout(() => {

            $('#acciones').css('display', 'block!important')
            $('#eventonuevo').css('display', 'none')
   
           alert('ss');
        }, 0)
        
      
     

    });



});
