<?php
session_start();
require_once '../../../varSQL/bd.php';
require_once '../varSQL/db_risk.php';
require_once '../../../varSQL/var.php';
if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../../index.php");
}
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];


$mes = date('m');



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez risk</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/cons.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/cons.css">
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

            <img  src="../img/suite/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexRisk.php" id="slognav1">

                <input type="submit" class="submit" id="lognav1">

            </form>

           
        </div>


        <div class="bakBoton">

            <img  src="../img/suite/ced.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../CED/ced.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2">

            </form>
           
        </div>


        <div class="bakBoton">

            <img  src="../img/suite/risk.svg" class="lognav">
            <div id="txt3" class="txttx"><strong>RIESGOS</strong></div>

            
            <form action="../risk/risk.php" id="slognav3">

                <input type="submit" class="submit" id="lognav3">

            </form>
           
        </div>



        <div class="bakBoton">

            <img  src="../img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="../CONS/cons.php" id="slognav4">

                <input type="submit" class="submit" id="">

            </form>
            <div class="line1"></div>
        </div>

        <div class="bakBoton">

            <img  src="../../../img/ICONOS/printok1.png" class="lognav">
            <div id="txt5" class="txttx"><strong>IMPRESIONES</strong></div>


            <form action="../PRINT/printy.php" id="slognav5">

                <input type="submit" class="submit" id="lognav5">

            </form>

        </div>

        <form action="../../../suite.php"  id="lognav7"  class="bakBoton">
                
            <input type="image" src="../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>


    <navsup id="navsup">

           
        <div id="backUser">

            <img id="lognav0" src="../../../img/apps/apps/ezrisk.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>


    <div id="backall"></div>

    <modseg  id="modprosp">


        <?php


    
            foreach ($_POST['id_edi'] as $idsave) {

                $accion = isset($_POST['accion'][$idsave]) ? $_POST['accion'][$idsave] : false;
                $qaccion = (string) ($accion);
                //////ELIMINAR
                if(empty($accion)){

                }else{
                

                    
                    $updetapa = "UPDATE $regllas SET region='NULL' WHERE id='$idsave' ";
                    $qupdetapa = $dbo->query($updetapa);

                    $updetapa2 = "UPDATE $regllas SET unidad='$userLog' WHERE id='$idsave' ";
                    $Qupdetapa2 = $dbo->query($updetapa2);

                    $updetapa3 = "UPDATE $regllas SET ejercicio='NULL' WHERE id='$idsave' ";
                    $qupdetapa3 = $dbo->query($updetapa3);

                    /*  CODIGO PARA BORRAR FILA COMPLETA
                        $updetapa = "DELETE FROM $regllas WHERE id='$idsave' ";
                        $qupdetapa = $dbo->query($updetapa);
                    */
                }

            }
        ?>
                
     
        <form method="POST" action="cons.php" id="backregresar">

            <div id="backbackRegre">


                
                <img src="../img/suite/regresar2.png" id="imagRegresar">

                <input type="submit" name="subback" id="subback">

                <?php


                if(!empty($qupdetapa)){
                                    ?>
                        <div id="regresartxt">Datos guardados, regresar!</div>
                    <?php

                }else{

                    ?>
                        <div id="regresartxt">Datos NO guardados, regresar!</div>
                    <?php
                }


                ?>


            </div>

        </form>
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>