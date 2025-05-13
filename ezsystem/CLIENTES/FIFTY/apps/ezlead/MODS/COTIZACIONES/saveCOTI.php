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
$tipouser=$_SESSION['tipouser'];
$fechahoy = date('Y-m-d');


$idpaqqq = $_POST['idpaqy'];
$namepaqq = $_POST['namepaqq'];
$especialidad0 = $_POST['especialidad0'];

$nombremed = $_POST['nombremed']; ///NOMBRE ME MEDICO TRATANTE
$idmedico = $_POST['idmedico']; 
$idtarjeta = $_POST['idtarjeta']; 
$redName = $_POST['redName']; 
$idtarj_med = $_POST['idtarj_med']; 

$regionPq = $_POST['regionPq']; 
$unidadPq = $_POST['unidadPq']; 


/////VALIDACION DE PAQUETE EXISTENTE
$valypaqmed= "SELECT * FROM $cat_coti_med WHERE idtarjmed = '$idtarj_med' ";

$qvalypaqmed = $dbcot->query($valypaqmed);          

                      
while ($filpro = $qvalypaqmed->fetch(PDO::FETCH_ASSOC)) {
    $paqly =$filpro['idpaq'];
 

  }

  if(empty($paqly)){
   
        
        $insertar = "INSERT INTO $cat_coti_med VALUES (

        NULL,'$regionPq','$unidadPq','$idtarjeta','$redName','$idtarj_med','$idpaqqq','$idmedico','$especialidad0','$namepaqq','$userLog','$fechahoy',NULL,NULL,NULL,NULL,NULL,'1' )";
        
        $saveCOTI = $dbcot->query($insertar);


        $update = "UPDATE $cat_tarjetas_med SET estatus='6' WHERE id='$idtarj_med' ";
        $qsqve = $dbc->query($update);
    

  }

 
  





  
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

      <script type="text/javascript" src="js/coti.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/saveCoti.css">
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

            <img id="lognav1" src="../../img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img id="lognav2" src="../../img/suite/pros2.png" class="lognav">
            <div id="txt2" class="txttx"><strong>PROSPECTOS</strong></div>

            <form action="../PROSPECTOS/prospect_med.php" id="slognav2">

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



        <form action="../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../img/suite/exit.svg"  class="lognav" name="exitdk">

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
   

        <form method="POST" action="../../suitecrm.php" id="backregresar">

            <div id="backbackRegre">

                <?php


                if (isset($_POST['savePaq'])){

                    $namepaqq = $_POST['namepaqq'];                    


                    $regionPq = $_POST['regionPq'];
                    $unidadPq = $_POST['unidadPq'];
            

                    $promo = $_POST['promo'];
                    $vincumod = $_POST['vincumod'];
                
                    $idmedico = $_POST['idmedico'];
                    $idtarjeta = $_POST['idtarjeta'];
                    $idtarj_med = $_POST['idtarj_med'];
                    

                    ?>
                
                
                    <input hidden type="text" value="<?php echo $namepaqq; ?>" name="coti">
                    <input hidden type="text" value="<?php echo $promo; ?>" name="promo">
                    <input hidden type="text" value="<?php echo $vincumod; ?>" name="vincumod">
                
                    <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                    <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                    <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                    <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">
                    <input hidden type="text" value="<?php echo $idtarj_med;?>" name="idtarj_med">


                    <img src="../../img/suite/regresar2.png" id="imagRegresar">

                    <input type="submit" name="subback" id="subback">

                

                        <?php

                        
                        /////VALIDACION DE PAQUETE EXISTENTE
                        $valypaqmed2= "SELECT * FROM $cat_coti_med WHERE idtarjmed = '$idtarj_med' ";

                        $qvalypaqmed2 = $dbcot->query($valypaqmed2);          

                                            
                        while ($filpro = $qvalypaqmed2->fetch(PDO::FETCH_ASSOC)) {
                            $paqly2 =$filpro['idpaq'];
                        
                            $paqlyid =$filpro['id'];
                        }


                                                    }

                        ///// ARTICULOS PREESTABLECIDOS O CON MODIFICACION INICIAL
                        foreach ($_POST['id_vinc'] as $art) {


                            $idpaq = isset($_POST['idpaq'][$art]) ? $_POST['idpaq'][$art] : false;
                            $qidpaq = (string) ($idpaq);
                            
                            $idsapLY = isset($_POST['idsapLY'][$art]) ? $_POST['idsapLY'][$art] : false;
                            $qidsapLY = (string) ($idsapLY);

                            $tipoLY = isset($_POST['tipoLY'][$art]) ? $_POST['tipoLY'][$art] : false;
                            $qtipoLY = (string) ($tipoLY);
                            $artiserLY = isset($_POST['artiserLY'][$art]) ? $_POST['artiserLY'][$art] : false;
                            $qartiserLY = (string) ($artiserLY);
                            $cantidad = isset($_POST['cantidad'][$art]) ? $_POST['cantidad'][$art] : false;
                            $costoLY = isset($_POST['costoLY'][$art]) ? $_POST['costoLY'][$art] : false;
                            $factorLY = isset($_POST['factorLY'][$art]) ? $_POST['factorLY'][$art] : false;
                            $ventaLy = isset($_POST['ventaLy'][$art]) ? $_POST['ventaLy'][$art] : false;

                            $accionLy = isset($_POST['accionLy'][$art]) ? $_POST['accionLy'][$art] : false;
                            $qaccionLy = (string) ($accionLy);

                            $previosinfact = $costoLY *$cantidad;
                            $previosVenta = $previosinfact*$factorLY;
                            if(!empty($paqly2)){

                                if($accionLy == 'GUARDAR'){

                                    
                                        $save0 = "INSERT INTO $cat_paquetes_med VALUES (NULL,'$regionPq','$unidadPq','$idtarjeta','$redName','$idtarj_med','$idmedico','$paqlyid','$qtipoLY','$cantidad','$qidsapLY','$qartiserLY','$costoLY','$previosinfact','$factorLY','$previosVenta','$userLog', '1' )";
        
                                        $qsave0 = $dbcot->query($save0);
                                    
                                }
                            
                            }

                        }
                            

                        //////AGREGAR ARTICULOS Y SERVICIOS EXTRAS

                        foreach ($_POST['id_ag'] as $agr) {

                            //////////////////////////////

                            $tipoC = isset($_POST['tipoC'][$agr]) ? $_POST['tipoC'][$agr] : false;
                            $qtipoC = (string) ($tipoC);
                            $cantidadC = isset($_POST['cantidadC'][$agr]) ? $_POST['cantidadC'][$agr] : false;
                        
                            $articuloC = isset($_POST['articuloC'][$agr]) ? $_POST['articuloC'][$agr] : false;
                            $qarticuloC = (string) ($articuloC);

                            $agregarC = isset($_POST['agregarC'][$agr]) ? $_POST['agregarC'][$agr] : false;
                            $qagregarC = (string) ($agregarC);
                        

                            if(empty($agregarC)){

                            }else{

                                if(!empty($tipoC) AND !empty($cantidadC) AND !empty($articuloC) ){


                                    
                                        /////VALIDACION DE PRECIOS
                                        $PRECIO = "SELECT * FROM $tabPre WHERE descripcion = '$articuloC'  ";
                                        $QPRECIO = $dbcot->query($PRECIO);                    
            
            
                                        while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
            
                                            $costoC = $filas['costo'];  
                                            $factorC = $filas['factor']; 
                                            $precioventaC = $filas['precioventa']; 
                                            $artiserC = $filas['descripcion']; 
                                            $idsapLYC = $filas['idsap']; 
                                        }
    
                                        $previosinfact = $costoC *$cantidadC;
                                        $previosVenta = $previosinfact*$factorC;

                                
                                $save0 = "INSERT INTO $cat_paquetes_med VALUES (NULL,'$regionPq','$unidadPq','$idtarjeta','$redName','$idtarj_med','$idmedico','$paqlyid','$qtipoC','$cantidadC','$idsapLYC','$artiserC','$costoC','$previosinfact','$factorC','$previosVenta','$userLog', 'SI')";

                                $qsave0b = $dbcot->query($save0);

                            }
                        

                        }


                        if(!empty($qsave0)){
                            ?>
                                <div id="regresartxt">Datos guardados, regresar!</div>
                            <?php

                        }else{

                            ?>
                                <div id="regresartxt">Datos NO guardados, regresar!</div>
                            <?php
                        }
                
                }
            

            
                ?>
            

            </div>

        </form>

    </div>

    <div id="blockMod"></div>


    </modseg>



</body>

</html>