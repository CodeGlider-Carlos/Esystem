<?php
require_once 'varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location:index.php");
endif;

$adminrol=$_SESSION['rol'];

$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>deodi</title>
    
    <link rel="icon" type="favicon/x-icon" href="img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/suited_9.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/cotizador.css">
 

</head>

<body>

     
        <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">
   
   
  

        <section id="bobybody">


            <?php

                            
                if (isset($_POST['modificar'])) {

                            
                    $filtrarU = $_POST['modificar'];
                    $idpaq = $_POST['idpaq'];
                
                    $fechahoy = date('Y-m-d');
                    //////VALIDAR PROCEDIMIENTO
                  
        
                    foreach ($_POST['id_mod'] as $verCoti) {

                        $idartserv = isset($_POST['idartserv'][$verCoti]) ? $_POST['idartserv'][$verCoti] : false;
                        $qidartserv = (string) ($idartserv);

                        /////MODIFICAR PRODUCTOS EN PAQUETE
                        $cantidad = isset($_POST['cantidad'][$verCoti]) ? $_POST['cantidad'][$verCoti] : false;
                        $costo = isset($_POST['costo'][$verCoti]) ? $_POST['costo'][$verCoti] : false;
                        $factor = isset($_POST['factor'][$verCoti]) ? $_POST['factor'][$verCoti] : false;
                        $accion = isset($_POST['accion'][$verCoti]) ? $_POST['accion'][$verCoti] : false;
                        $qaccion = (string) ($accion);

                                                    
                        /////ELIMINAR DE PAQUETE
                        if(!empty($accion) AND  $accion == 'NO'){

                            $update = "UPDATE $cat_paqBA SET activo='$qaccion' WHERE id='$qidartserv' ";
                            $qsqve = $dbo->query($update);
                            
                        }

                        ////MODIFICAR CANTIDAD
                        if(!empty($accion) AND  $accion == 'MODIFICAR'){
                            ////////GUARDAR 
                            if(!empty($cantidad) ){

                                $updco = $cantidad*$costo*$factor;

                                $update = "UPDATE $cat_paqBA SET cantidad='$cantidad' WHERE id='$qidartserv' ";
                                $qsqve = $dbo->query($update);

                                $update2 = "UPDATE $cat_paqBA SET factor='$costo' WHERE id='$qidartserv' ";
                                $qsqve = $dbo->query($update2);
                                
                                $update3 = "UPDATE $cat_paqBA SET factor='$factor' WHERE id='$qidartserv' ";
                                $qsqve = $dbo->query($update3);

                                $update4 = "UPDATE $cat_paqBA SET precioventa='$updco' WHERE id='$qidartserv' ";
                                $qsqve = $dbo->query($update4);

                            
                                
                            }

                            if(!empty($costo) ){

                                
                                $preciosinfactor = $cantidad*$costo;

                                $update = "UPDATE $cat_paqBA SET costo='$costo' WHERE id='$qidartserv' ";
                                $qsqve = $dbo->query($update);

                                $update2 = "UPDATE $cat_paqBA SET factor='$factor' WHERE id='$qidartserv' ";
                                $qsqve2 = $dbo->query($update2);

                                $update4 = "UPDATE $cat_paqBA SET preciosinfactor='$preciosinfactor' WHERE id='$qidartserv' ";
                                $qsqve4 = $dbo->query($update4);

                            }

                        }

                                                
                    }
                

            
                    if (!empty($qsqve)) {



                        ?>
                            <section id="contdatsave">
                                    
                                    <div id="backRegresar" class="navbot">
                                        <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                        <div id="datsave"><?php echo 'Paquete Modificado'; ?></div>
                                    </div>
                                
                                </section>
                            <?php
                            } else {

                            ?>
                                <section id="contdatsave">
                                            
                                        

                                <div id="backRegresar" class="navbot">
                                    <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'Paquete No Modificado'; ?></div>
                                </div>

                            </section>
                        <?php


                    }

                }elseif(isset($_POST['fuera'])) {

                            
                    $filtrarU = $_POST['fuera'];
                    $idpaq = $_POST['idpaq'];
                
                    $fechahoy = date('Y-m-d');
                    //////VALIDAR PROCEDIMIENTO
              
                       

                    foreach ($_POST['id_fuera'] as $verCoti) {


                        /////AGREGAR PRODUCTOS FUERA DE CATALOGO

                        $tipoC = isset($_POST['tipoC'][$verCoti]) ? $_POST['tipoC'][$verCoti] : false;
                        $qtipoC = (string) ($tipoC);

                        $cantidadAgc = isset($_POST['cantidadAg'][$verCoti]) ? $_POST['cantidadAg'][$verCoti] : false;

                        $articuloAgc = isset($_POST['articuloAg'][$verCoti]) ? $_POST['articuloAg'][$verCoti] : false;
                        $qarticuloAgc = (string) ($articuloAgc);

                        $costoAgc = isset($_POST['costoAg'][$verCoti]) ? $_POST['costoAg'][$verCoti] : false;
                        $factorAgc = isset($_POST['factorAg'][$verCoti]) ? $_POST['factorAg'][$verCoti] : false;
                        
                        $agregarc = isset($_POST['agregar'][$verCoti]) ? $_POST['agregar'][$verCoti] : false;
                        $qagregarc = (string) ($agregarc);

                  

                        ////AGRAGAR ARTICULOS O SERVICIOS FUERDA DE CATALOGO

                        if(!empty($tipoC) AND !empty($cantidadAgc)  AND !empty($articuloAgc)  AND !empty($agregarc) AND !empty($costoAgc) AND !empty($factorAgc) ){

                            /////HABITACION

                                $precioventaC = $cantidadAgc*$costoAgc+$factorAgc;
                                $preciosinfactor = $cantidadAgc*$costoAgc;

                                $save0 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaq','$qtipoC','$cantidadAgc','FC','$qarticuloAgc','$costoAgc','$preciosinfactor','$factorAgc','$precioventaC','NULL','$userLog', 'SI')";

                                $qsqve = $dbo->query($save0);


                        }
                    
                            

                        
                    }
                
            
                    if (!empty($qsqve)) {



                        ?>
                            <section id="contdatsave">
                                    
                                    <div id="backRegresar" class="navbot">
                                        <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                        <div id="datsave"><?php echo 'Artículo o Servicio Integrado'; ?></div>
                                    </div>
                                
                                </section>
                            <?php
                            } else {

                            ?>
                                <section id="contdatsave">
                                            
                                        

                                <div id="backRegresar" class="navbot">
                                    <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'Artículo o Servicio No Integrado'; ?></div>
                                </div>

                            </section>
                        <?php


                    }

                }elseif(isset($_POST['dentro'])) {

                            
                    $filtrarU = $_POST['dentro'];
                    $idpaq = $_POST['idpaq'];
                
                    $fechahoy = date('Y-m-d');
                    //////VALIDAR PROCEDIMIENTO
               
                

        

                    foreach ($_POST['id_dentro'] as $verCoti) {

                       

                        ////AGEGAR PRODUCTOS DENTRO DE CATALOGO
                        $tipo = isset($_POST['tipoC'][$verCoti]) ? $_POST['tipoC'][$verCoti] : false;
                        $qtipo = (string) ($tipo);

                        $cantidadAg = isset($_POST['cantidadAgc'][$verCoti]) ? $_POST['cantidadAgc'][$verCoti] : false;

                        $articuloAg = isset($_POST['articuloAgc'][$verCoti]) ? $_POST['articuloAgc'][$verCoti] : false;                        
                        $qarticuloAg = (string) ($articuloAg);
             
                        $agregar = isset($_POST['agregarc'][$verCoti]) ? $_POST['agregarc'][$verCoti] : false;
                        $qagregar = (string) ($agregar);


            
                     
                
                    
                                        ////// AGREGAR ARTICULOS O SERVICIOS DENTRO DE CATALOGO
                        
                    
                        if(!empty($tipo) AND !empty($cantidadAg)  AND !empty($articuloAg)  AND !empty($agregar) ){

                            /////HABITACION

                        

                                $VALYHAB1 = "SELECT * FROM $tabPre WHERE  descripcion = '$articuloAg'  ";
                                $QVALYHAB1 = $dbo->query($VALYHAB1);
                                
                                while ($fila = $QVALYHAB1->fetch(PDO::FETCH_ASSOC)) {
                            
                                    $idsap1 = $fila['idsap'];  
                                    $costo1 = $fila['costo'];  
                                    $factor1 = $fila['factor']; 
                                    
                                    $precioventa =  $cantidadAg*$costo1*$factor1;
                                    $preciosinfactor = $cantidadAg*$costo1;
                                }
                               
                                /*
                                echo 'factor1'. $factor1.'<br>';
                                echo 'precioventa'. $precioventa.'<br>';*/
                                $save0 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaq','$qtipo','$cantidadAg','$idsap1','$qarticuloAg','$costo1','$preciosinfactor','$factor1','$precioventa','NULL','$userLog', 'SI')";

                                $qsqve = $dbo->query($save0);


                        }
                            

                        
                    }
                

            
                    if (!empty($qsqve)) {



                        ?>
                            <section id="contdatsave">
                                    
                                    <div id="backRegresar" class="navbot">
                                        <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                        <div id="datsave"><?php echo 'Artículo o Servicio Integrado'; ?></div>
                                    </div>
                                
                                </section>
                            <?php
                            } else {

                            ?>
                                <section id="contdatsave">
                                            
                                        

                                <div id="backRegresar" class="navbot">
                                    <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'Artículo o Servicio No Integrado'; ?></div>
                                </div>

                            </section>
                        <?php


                    }
                }elseif(isset($_POST['update'])){

                }



                    
            ?>

       </section>
       
</body>

</html>