<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';


$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead+</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/suiteco.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/suiteco.css">
    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
     <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
      <script type="text/javascript">   
        /*
       
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|android|samsung|nokia|oppo|lg|huawei/) > -1) {
            document.location = "movil/";
        }*/
    </script>



</head>

<body class="body_ezlead">


    <navleft id="navleft">


        <div class="bakBoton" id="bakBoton1">

            <img id="lognav1" src="../../img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

        </div>


        <div class="bakBoton">

            <img id="lognav2" src="../../img/suite/pros2.png" class="lognav">
            <div id="txt2" class="txttx"><strong>PROSPECTOS</strong></div>

            <form action="../PROSPECTOS/selectprospect.php" id="slognav2">

                <input type="submit" class="submit" >

            </form>

        </div>


        <div class="bakBoton">

            <img id="lognav3" src="../../img/suite/tarj2.png" class="lognav">
            <div id="txt3" class="txttx"><strong>TARJETA DE CONTACTO</strong></div>

            
            <form action="../TARJETAS/selectipo.php" id="slognav3">

                <input type="submit" class="submit" >

            </form>

        </div>

        <div class="bakBoton">

            <img id="lognav4" src="../../img/suite/cot2.png" class="lognav">
            <div id="txt4" class="txttx"><strong>SIMULACION</strong></div>

            <form action="../COTI/suiteco.php" >

                <input type="submit" class="submit" id="slognav4">

            </form>
            <div class="line1"></div>
        </div>

        
        <div class="bakBoton">

            <img id="lognav5" src="../../../../img/suite/dash.png" class="lognav">
            <div id="txt5" class="txttx"><strong>DASHBOARD</strong></div>
 
            <form action="../DASHBOARD/dash_lead.php" >

                <input type="submit" class="submit" id="slognav5">

            </form>
        </div>

          
        <div class="bakBoton">

            <img id="lognav6" src="../../../../img/suite/print.png" class="lognav">
            <div id="txt6" class="txttx"><strong>IMPRIMIR</strong></div>
 
            <form action="../PRINT/print_lead.php" >

                <input type="submit" class="submit" id="slognav6">

            </form>
            
          
        </div>



        <form action="../../../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>


    <navsup id="navsup">

        <div id="backUser">

            <img id="lognav0" src="../../../../img/apps/apps/ezleadplus.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>


    </navsup>

    <div id="backall"></div>


    <modseg  id="modprosp">



   
        <div class="txttxconstruc"><strong>EN CONSTRUCCION</strong></div>
        
        <img  src="../../../../img/suite/enobra.png" class="construc">
       
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>