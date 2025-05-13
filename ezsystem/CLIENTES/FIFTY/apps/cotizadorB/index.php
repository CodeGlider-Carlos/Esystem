<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>deodi by</title>
    
    <link rel="icon" type="favicon/x-icon" href="img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/index.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


    <link rel="stylesheet" type="text/css" href="css/indexx.css">
    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
    <script type="text/javascript">
        /*
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|android|samsung|nokia|lg|huawei/) > -1) {
            document.location = "http://seicapp.com/movil/";
        }
        */
       
    </script>


</head>

<body>
    
    <section id="backLoad">

        <div id="contIcL">
            <div id="icLoad">
                
            </div>
        </div>
        <div id="tileLoad">Cargando...</div>
    </section>

    <section id="bobybody">
        
        <img id="backIndex" src="img/BACK_LOGIN.jpg">
     
        <div id="backIndexColor"></div>
  
        <section id="backNav">

            <div id="line1"></div>
            <div id="line2"></div>
            <div id="line3"></div>
            <div id="line4"></div>
            <div id="line5"></div>
            <div id="line6"></div>

            <div id="backBck3">


         
                <form id="loguin" action="loglog/loglog.php" method="POST" autocomplete="off" >

                    <div id="barr1">
                        <img id="logseica" src="img/50D_BLANCO_ALL.png">
                    </div>

                    <div id="loguinTEXT">Log In</div>

                    <input type="text" name="usersu" id="usersu" placeholder="Usuario" required>
                    <input type="password" name="passw" id="passw" placeholder="Contraseña" required>

                    <input type="submit" name="loglo" value="Entrar" id="loglo">
                 

                </form>
           

              
            </div>   


          
        </section>

     

    </section>


</body>

</html>