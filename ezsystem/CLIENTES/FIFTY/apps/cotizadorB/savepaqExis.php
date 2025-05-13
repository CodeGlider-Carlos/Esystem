<?php
session_start();
require_once 'varSQL/dbmysql.php';


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

    <link rel="stylesheet" type="text/css" href="css/simulad.css">
 

</head>

<body>

     <!--
      
            <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">
      
-->
  

        <section id="bobybody">

            <?php

                    
                if (isset($_POST['generar'])) {

                    $filtrarU = $_POST['generar'];

                    $empresa = $_POST['empresa'];

              
                    $procedimiento = $_POST['procedimiento'];


                    $unidad = $_POST['unidad'];
                    $region = $_POST['region'];

                    $fechahoy = date('Y-m-d');
                    //////VALIDAR PROCEDIMIENTO
             
                    
                    $valydproc = "SELECT * FROM $tabproced WHERE procedimiento = '$procedimiento' ";
                    $qvalydproc = $dbo->query($valydproc);                    

                    
                    while ($fila = $qvalydproc->fetch(PDO::FETCH_ASSOC)) {

                        $especialidad = $fila['especialidad'];  
                        
                        
                    }



                    ///////VALIDAR EXISTTENCIA DE PAQUETE

                    $vayidpq = "SELECT * FROM $cat_paq WHERE  empresa LIKE '%$empresa%' AND procedimiento LIKE '%$procedimiento%' ";
                    $qvayidpq = $dbo->query($vayidpq);                    

                    
                    while ($fila = $qvayidpq->fetch(PDO::FETCH_ASSOC)) {

                        $idpaqb = $fila['id'];  
                        
                        
                    }

                 

                    if(empty($idpaqb)){

                        if(!empty($procedimiento) AND !empty($empresa)){

                            $save = "INSERT INTO $cat_paq VALUES (NULL,'$region','$unidad','$empresa',NULL,'$especialidad','$procedimiento','SI','$fechahoy',NULL,'$userLog')";

                            $qsave = $dbo->query($save);


                        }


                    }


                    $idpaqTAB = "SELECT * FROM $cat_paq WHERE  empresa LIKE '%$empresa%' AND procedimiento LIKE '%$procedimiento%' ";
                    $qidpaqTAB = $dbo->query($idpaqTAB);                    

                    
                    while ($fila = $qidpaqTAB->fetch(PDO::FETCH_ASSOC)) {

                        $idpaqqq = $fila['id'];  
                                    
                        
                    }
              
                    ////VALIDAR EXISTENCIA DE PAQUETE BASE CON ID DE PAQUETE
                    $valyIDba = "SELECT * FROM $cat_paqBA WHERE idpaq LIKE '%$idpaqqq%' ";
                    $qvalyIDba = $dbo->query($valyIDba);                    

                    
                    while ($fila = $qvalyIDba->fetch(PDO::FETCH_ASSOC)) {

                        $idpaLY = $fila['id'];                    
                                        
                        
                    }
               
                    if(!empty($idpaLY)){

                    }else{
                    

                        foreach ($_POST['id_paqex'] as $verCoti) {


                            $tipoC = isset($_POST['tipoC'][$verCoti]) ? $_POST['tipoC'][$verCoti] : false;
                            $qtipoC = (string) ($tipoC);

                            $cantidad = isset($_POST['cantidad'][$verCoti]) ? $_POST['cantidad'][$verCoti] : false;

                            $articuloEX = isset($_POST['articuloEX'][$verCoti]) ? $_POST['articuloEX'][$verCoti] : false;
                            $qarticuloEX = (string) ($articuloEX);

                            $accion = isset($_POST['accion'][$verCoti]) ? $_POST['accion'][$verCoti] : false;
                            $qaccion = (string) ($accion);

                    
                            $idsap = isset($_POST['idsap'][$verCoti]) ? $_POST['idsap'][$verCoti] : false;
                            $costo = isset($_POST['costo'][$verCoti]) ? $_POST['costo'][$verCoti] : false;
                            $factor = isset($_POST['factor'][$verCoti]) ? $_POST['factor'][$verCoti] : false;

                            $comparar = isset($_POST['comparar'][$verCoti]) ? $_POST['comparar'][$verCoti] : false;


                            $precioventa =  $cantidad*$costo*$factor;
                            $preciosinFACTOR =  $cantidad*$costo;    

                            ////////GUARDAR 
                          
                      

                                if(!empty($articuloEX) AND !empty($cantidad) AND !empty($tipoC) AND !empty($accion)){

                                

                                        $VALYHAB1 = "SELECT * FROM $tabPre WHERE  descripcion = '$qarticuloEX'  ";
                                        $QVALYHAB1 = $dbo->query($VALYHAB1);
                                        
                                        while ($fila = $QVALYHAB1->fetch(PDO::FETCH_ASSOC)) {
                                    
                                            $idsap1 = $fila['idsap'];  
                                            $costo1 = $fila['costo'];  
                                            $factor1 = $fila['factor']; 
                                            /*
                                            $precioventa =  $cantidad*$costo1*$factor1;
                                            $preciosinFACTOR =  $cantidad*$costo1;   */   
                                        }

                                        $save0 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaqqq','$qtipoC','$cantidad','$idsap','$qarticuloEX','$costo','$preciosinFACTOR','$factor','$precioventa','$comparar','$userLog', 'SI')";

                                        $qsave0 = $dbo->query($save0);


                                }
                            
                      
                        

                            
                        }

                        
                     
                    }


                    if (!empty($qsave0)) {



                        ?>
                            <section id="contdatsave">
                                    
                                    <div id="backRegresar" class="navbot">
                                        <a href="selectPaq.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                        <div id="datsave"><?php echo 'paquete ingreado'; ?></div>
                                    </div>
                                
                                </section>
                            <?php
                            } else {

                            ?>
                                <section id="contdatsave">
                                            
                                        

                                <div id="backRegresar" class="navbot">
                                    <a href="selectPaq.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'paquete no integrado o ya existente'; ?></div>
                                </div>

                            </section>
                        <?php


                    }
                }

            ?>

        </section>
    
</body>

</html>