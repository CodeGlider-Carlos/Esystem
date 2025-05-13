<?php
require_once 'varSQL/dbmysql.php';
session_start();
/*
if (empty($_SESSION['usuario'])) :
    header("Location:index.php");
endif;
*/
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$adminrol=$_SESSION['rol'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lead+</title>
    
    <link rel="icon" type="favicon/x-icon" href="img/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <!---------------------  CONTROLADORES JS----------------------->

    <script type="text/javascript" src="js/cotizador1.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/simulad.css">
 

</head>

<body>

    <section id="backLoad">

        <div id="contIcL">
            <div id="icLoad">
                
            </div>
        </div>
        <div id="tileLoad">Cargando...</div>
    </section>

    <section id="backNavBarra">


        <div id="barranav">

            <div id="abrimenu">

                <div class="abrirmenuLine"></div>
                <div class="abrirmenuLine"></div>
                <div class="abrirmenuLine"></div>
            </div>

            <div id="userUnid"><?php echo 'SIMULADOR|COTIZACION';?></div>
                       

        </div>

        <div id="backUser">

            <div id="userU"><?php echo $userNom; ?></div>
            <input hidden type="text" value="<?php echo $userLog; ?>" name="userlog" >
            <img id="userLogo" src="img/userOk.png">
            <div id="line2"></div>
        </div>

     

        <div id="backdegra"></div>

    </section>
    
    <section id="bobybody">


        <section id="backMenu2">

            
            <div id="modulosMenu">

                <div id="abrimenu2">

                    <div class="abrirmenuLine2"></div>
                    <div class="abrirmenuLine2"></div>
                    <div class="abrirmenuLine2"></div>
                </div>


                <div class="modulosMenu1" id="intpaq">

                    <div class="posiBotonM"><strong>Integrar Cotización</strong></div>
                    
                </div>

                <div class="modulosMenu2" id="intcot">

                    <div class="posiBotonM"><strong>Simular Cotización</strong></div>
                
                </div>

                <div class="modulosMenu3" id="modpaq">

                    <div class="posiBotonM"><strong>Modificar/Actualizar</strong></div>
            
                </div>

                <div class="modulosMenu4" id="elcot">
                    <div class="posiBotonM"><strong>Eliminar Cotización</strong></div>
                    
                </div>
            </div>

          
            
        </section>
    

        <section id="mod">


            <section id="mural">

 

                <iframe src="selectPaq.php" id="iframeIntegrarPaq">
                </iframe>

                <iframe src="selectCotiz.php" id="iframeCotizarPaq">
                </iframe>

                <iframe src="selectPaqAct.php" id="iframeModPaq">
                </iframe>

                <iframe src="selectPaqElim.php" id="iframeElimPaq">
                </iframe>

            </section>

        </section>

        <form action="loglog/logout.php" id="salirDeo"  class="namemod">
                
                <input type="image" src="img/salirOK.png" id="iconsalir" class="imgmod" name="exitdk">
           

            </form> 
    </section>

    
</body>

</html>