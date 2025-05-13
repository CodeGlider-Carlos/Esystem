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

                    
                if (isset($_POST['generar'])) {

                    
                    $filtrarU = $_POST['generar'];

                    $empresa = $_POST['empresa'];
                    $procedimiento = $_POST['procedimiento'];
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

                        if(!empty($procedimiento) ){

                            $save = "INSERT INTO $cat_paq VALUES (NULL,'$empresa','$especialidad','$procedimiento','SI','$fechahoy',NULL,'$userLog')";

                            $qsave = $dbo->query($save);


                        }


                    }
                 

                    $idpaqta = "SELECT * FROM $cat_paq WHERE  empresa LIKE '%$empresa%' AND procedimiento LIKE '%$procedimiento%' ";
                    $qidpaqta = $dbo->query($idpaqta);                    

                    
                    while ($fila = $qidpaqta->fetch(PDO::FETCH_ASSOC)) {

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
                    

                        foreach ($_POST['id_art'] as $HABHAB) {


                            $articuloHab = isset($_POST['articuloHab'][$HABHAB]) ? $_POST['articuloHab'][$HABHAB] : false;
                            $qarticuloHab = (string) ($articuloHab);
                            $cantidadHab = isset($_POST['cantidadHab'][$HABHAB]) ? $_POST['cantidadHab'][$HABHAB] : false;
                            $comparahab = isset($_POST['comparahab'][$HABHAB]) ? $_POST['comparahab'][$HABHAB] : false;
                     


                    
                            ////////GUARDAR 

                        

                        

                                if(!empty($articuloHab) AND !empty($cantidadHab) ){

                                    /////HABITACION

                                

                                        $VALYHAB1 = "SELECT * FROM $tabPre WHERE  descripcion = '$qarticuloHab'  ";
                                        $QVALYHAB1 = $dbo->query($VALYHAB1);
                                        
                                        while ($fila = $QVALYHAB1->fetch(PDO::FETCH_ASSOC)) {
                                    
                                            $idsap1 = $fila['idsap'];  
                                            $costo1 = $fila['costo'];  
                                            $factor1 = $fila['factor']; 
                                            
                                            $precioventa =  $cantidadHab*$costo1*$factor1;
                                            $preciosinFACTOR =  $cantidadHab*$costo1;      
                                        }

                                        $save0 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaqqq','HABITACION','$cantidadHab','$idsap1','$qarticuloHab','$costo1','$preciosinFACTOR','$factor1','$precioventa','$comparahab','$userLog', 'SI')";

                                        $qsave0 = $dbo->query($save0);


                                }
                            
                      
                        

                            
                        }

                        
                        foreach ($_POST['id_QX'] as $QXQX) {


                            $articuloQx = isset($_POST['articuloQx'][$QXQX]) ? $_POST['articuloQx'][$QXQX] : false;
                            $qarticuloQx = (string) ($articuloQx);
                            $cantidadQx = isset($_POST['cantidadQx'][$QXQX]) ? $_POST['cantidadQx'][$QXQX] : false;
                            $comparaqx = isset($_POST['comparaqx'][$QXQX]) ? $_POST['comparaqx'][$QXQX] : false;

                    
                             ////// quirofano
                            
                            

                                if(!empty($articuloQx) AND !empty($cantidadQx) ){


                                    $VALYQX = "SELECT * FROM $tabPre WHERE  descripcion = '$qarticuloQx'  ";
                                    $QVALYQX = $dbo->query($VALYQX);
                                    

                                    
                                    while ($fila = $QVALYQX->fetch(PDO::FETCH_ASSOC)) {
                                
                                        $idsap2 = $fila['idsap'];  
                                        $costo2 = $fila['costo'];  
                                        $factor2 = $fila['factor']; 
                                        
                                                                
                                            $precioventa2 =  $cantidadQx*$costo2*$factor2;
                                            $preciosinFACTOR2 =  $cantidadQx*$costo2;
                                    }

                                    $save2 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaqqq','ATENCION QUIRURGICA Y ANESTESICA','$cantidadQx','$idsap2','$qarticuloQx','$costo2','$preciosinFACTOR2','$factor2','$precioventa2','$comparaqx','$userLog','SI')";

                                    $qsave0 = $dbo->query($save2);


                                }
                    
                        

                            
                        }

                        foreach ($_POST['id_INS'] as $INSINS) {



                      

                            $articuloIns = isset($_POST['articuloIns'][$INSINS]) ? $_POST['articuloIns'][$INSINS] : false;
                            $qarticuloIns = (string) ($articuloIns);
                            $cantidadIns = isset($_POST['cantidadIns'][$INSINS]) ? $_POST['cantidadIns'][$INSINS] : false;
                            $comparains = isset($_POST['comparains'][$INSINS]) ? $_POST['comparains'][$INSINS] : false;


                                ////// insumos
                            


                                if(!empty($articuloIns) AND !empty($cantidadIns) ){

                                    
                                    $VALYINS = "SELECT * FROM $tabPre WHERE  descripcion = '$qarticuloIns'  ";
                                    $QVALYINS = $dbo->query($VALYINS);
                                    

                                    
                                    while ($fila = $QVALYINS->fetch(PDO::FETCH_ASSOC)) {
                                
                                        $idsap3 = $fila['idsap'];  
                                        $costo3 = $fila['costo'];  
                                        $factor3 = $fila['factor']; 

                                        $precioventa3 =  $cantidadIns*$costo3*$factor3;
                                        $preciosinFACTOR3 =  $cantidadIns*$costo3;
                                 

                                    $save3 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaqqq','INSUMOS','$cantidadIns','$idsap3','$qarticuloIns','$costo3','$preciosinFACTOR3','$factor3','$precioventa3','$comparains','$userLog','SI')";

                                   $qsave0 = $dbo->query($save3);
                                    }

                                }
                                
                         
                        

                            
                        }

                        foreach ($_POST['id_MED'] as $MEDMED) {




                            $articuloMed = isset($_POST['articuloMed'][$MEDMED]) ? $_POST['articuloMed'][$MEDMED] : false;
                            $qarticuloMed = (string) ($articuloMed);
                            $cantidadMed = isset($_POST['cantidadMed'][$MEDMED]) ? $_POST['cantidadMed'][$MEDMED] : false;
                            $comparamed = isset($_POST['comparamed'][$MEDMED]) ? $_POST['comparamed'][$MEDMED] : false;



                                ////// medicamentos
                            

                        

                                if(!empty($articuloMed) AND !empty($cantidadMed) ){


                                        
                                    $VALYMED = "SELECT * FROM $tabPre WHERE  descripcion = '$qarticuloMed'  ";
                                    $QVALYMED = $dbo->query($VALYMED);
                                    

                                      
                                    while ($fila = $QVALYMED->fetch(PDO::FETCH_ASSOC)) {
                                
                                        $idsap4 = $fila['idsap'];  
                                        $costo4 = $fila['costo'];  
                                        $factor4 = $fila['factor']; 
                                        
                                        $precioventa4 =  $cantidadMed*$costo4*$factor4;    
                                        $preciosinFACTOR4 =  $cantidadMed*$costo4;
                                    }


                                    $save4 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaqqq','MEDICAMENTOS','$cantidadMed','$idsap4','$qarticuloMed','$costo4','$preciosinFACTOR4','$factor4','$precioventa4','$comparamed','$userLog','SI')";

                                    $qsave0 = $dbo->query($save4);


                                }
                        
                        

                            
                        }
                    }


                    if (!empty($qsave0)) {



                        ?>
                            <section id="contdatsave">
                                    
                                    <div id="backRegresar" class="navbot">
                                        <a href="integrarpaq.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                        <div id="datsave"><?php echo 'paquete ingreado'; ?></div>
                                    </div>
                                
                                </section>
                            <?php
                            } else {

                            ?>
                                <section id="contdatsave">
                                            
                                        

                                <div id="backRegresar" class="navbot">
                                    <a href="integrarpaq.php"><img src="img/regresarOK3.png" id="regresar"></a>
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