<?php
 session_start();
 require_once '../../../varSQL/var.php'; 
 require_once '../../../varSQL/bd.php'; 
 require_once '../varSQL/dbmysql.php'; 

 
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
    <title>ez results</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="../js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="../js/ezresults.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/idexresults.css">
    <link rel="stylesheet" type="text/css" href="css/print_results.css">
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

<body>

    <navleft id="navleft">


        <div class="bakBoton" id="bakBoton1">

            <img  src="../img/iconos/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexResults.php" id="slognav1">

                <input type="submit" class="submit" id="">

            </form>

          
        </div>


        <div class="bakBoton">

            <img  src="../img/iconos/registro.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../select_registra.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2" >

            </form>
        
        </div>

       
        <div class="bakBoton">

            <img  src="../../../img/suite/print.png" class="lognav">
            <div id="txt4" class="txttx"><strong>IMPRIMIR</strong></div>

            <form action="print_results.php" >

                <input type="submit" class="submit" id="slognav4" >

            </form>
            <div class="line1"></div>
        </div>


        <form action="../../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">     

        <div id="backUser">

            <img id="lognav0" src="../../../img/suite/ezsystem.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">



   
        <div class="txttxconstruc"><strong>EN CONSTRUCCION</strong></div>
        
        <img  src="../../../img/suite/enobra.png" class="construc">
              
        <div id="blockMod"></div>

    </section>

 



</body>

</html>