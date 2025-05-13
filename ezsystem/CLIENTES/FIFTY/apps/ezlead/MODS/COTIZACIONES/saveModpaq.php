<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';

$adminrol=$_SESSION['rol'];

$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];

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
$vincumod = $_POST['vincumod']; 


$promo = $_POST['promo'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ LEAD+</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->
      <script type="text/javascript" src="js/coti.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/saveCoti.css">
 

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
     
                <!--  <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">
            -->

            <form method="POST" action="revimod.php" id="backregresar">

                <div id="backbackRegre">

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

                                    
                        if (isset($_POST['modPaq'])) {

                                    
                        $regionPq = $_POST['regionPq'];
                        $unidadPq = $_POST['unidadPq'];
                   

                        $promo = $_POST['promo'];
                        $vincumod = $_POST['vincumod'];
                 
                        $idmedico = $_POST['idmedico'];
                        $idtarjeta = $_POST['idtarjeta'];
                        $idtarj_med = $_POST['idtarj_med'];
                        
                        
                            $fechahoy = date('Y-m-d');
                            //////VALIDAR PROCEDIMIENTO
                        
                
                            foreach ($_POST['id_mod'] as $verCoti) {

                                $idlye = isset($_POST['idlye'][$verCoti]) ? $_POST['idlye'][$verCoti] : false;
                                $qidlye = (string) ($idlye);


                                $tipoLY = isset($_POST['tipoLY'][$verCoti]) ? $_POST['tipoLY'][$verCoti] : false;
                                $qtipoLY = (string) ($tipoLY);

                                $idsapLY = isset($_POST['idsapLY'][$verCoti]) ? $_POST['idsapLY'][$verCoti] : false;
                                $qidsapLY = (string) ($idsapLY);
                                
                                $artiserLY = isset($_POST['artiserLY'][$verCoti]) ? $_POST['artiserLY'][$verCoti] : false;
                                $qartiserLY = (string) ($artiserLY);

                                /////MODIFICAR PRODUCTOS EN PAQUETE
                                $cantidad = isset($_POST['cantidad'][$verCoti]) ? $_POST['cantidad'][$verCoti] : false;
                                $costo = isset($_POST['costoLY'][$verCoti]) ? $_POST['costoLY'][$verCoti] : false;
                                $factor = isset($_POST['factorLY'][$verCoti]) ? $_POST['factorLY'][$verCoti] : false;

                                $accion = isset($_POST['accionLy'][$verCoti]) ? $_POST['accionLy'][$verCoti] : false;
                                $qaccion = (string) ($accion);

                                                            
                                /////ELIMINAR DE PAQUETE
                                if(!empty($accion) AND  $accion == 'ELIMINAR'){

                                    $update = "UPDATE $cat_paquetes_med SET activo='0' WHERE id='$qidlye' ";
                                    $qsqve = $dbcot->query($update);
                                    
                                }

                                ////MODIFICAR CANTIDAD
                                if(!empty($accion) AND  $accion == 'MOD'){
                                    ////////GUARDAR 

                                    if(!empty($cantidad) ){

                                        $updco = $cantidad*$costo*$factor;

                                        $update = "UPDATE $cat_paquetes_med SET cantidad='$cantidad' WHERE id='$qidlye' ";
                                        $qsqve = $dbcot->query($update);

                                        $update2 = "UPDATE $cat_paquetes_med SET factor='$costo' WHERE id='$qidlye' ";
                                        $qsqve = $dbcot->query($update2);
                                        
                                        $update3 = "UPDATE $cat_paquetes_med SET factor='$factor' WHERE id='$qidlye' ";
                                        $qsqve = $dbcot->query($update3);

                                        $update4 = "UPDATE $cat_paquetes_med SET precioventa='$updco' WHERE id='$qidlye' ";
                                        $qsqve = $dbcot->query($update4);

                                    
                                        
                                    }

                                    if(!empty($costo) AND  $accion == 'MOD'){

                                        
                                        $preciosinfactor = $cantidad*$costo;

                                        $update = "UPDATE $cat_paquetes_med SET costo='$costo' WHERE id='$qidlye' ";
                                        $qsqve = $dbcot->query($update);

                                        $update2 = "UPDATE $cat_paquetes_med SET factor='$factor' WHERE id='$qidlye' ";
                                        $qsqve2 = $dbcot->query($update2);

                                        $update4 = "UPDATE $cat_paquetes_med SET preciosinfactor='$preciosinfactor' WHERE id='$qidlye' ";
                                        $qsqve4 = $dbcot->query($update4);

                                    }

                                }

                                                        
                            }
                        

                            //////AGREGAR ARTICULOS Y SERVICIOS EXTRAS
                                /////VALIDACION DE PAQUETE EXISTENTE
                                $tabpaqIDnuevo= "SELECT * FROM $cat_coti_med WHERE idtarjmed = '$idtarj_med'  ";

                                $qtabpaqIDnuevo = $dbcot->query($tabpaqIDnuevo);          

                                                    
                                while ($filpro = $qtabpaqIDnuevo->fetch(PDO::FETCH_ASSOC)) {
                                    $paqlyid =$filpro['id'];
                                

                                }

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
                                    }
                                    $save0 = "INSERT INTO $cat_paquetes_med VALUES (NULL,'$regionPq','$unidadPq','$idtarjeta','$redName','$idtarj_med','$idmedico','$paqlyid','$qtipoC','$cantidadC','$idsapLYC','$qarticuloC','$costoC','$previosinfact','$factorC','$previosVenta','$userLog', '1' )";

                                    $qsave0 = $dbcot->query($save0);

                                }
                            

                            }


                            if(!empty($qsqve) OR !empty($qsave0)){
                                ?>
                                    <div id="regresartxt">Datos guardados, regresar! <?php echo 'cantidadC: '. $cantidad;?></div>
                                <?php

                            }else{

                                ?>
                                    <div id="regresartxt">Datos NO guardados, regresar! <?php echo 'cantidadC: '. $cantidad;?></div>
                                <?php
                            }

                        }


                            
                    ?>
                </div>

            </form>

       </section>
   
       <div id="blockMod"></div>


    </modseg>


</body>

</html>