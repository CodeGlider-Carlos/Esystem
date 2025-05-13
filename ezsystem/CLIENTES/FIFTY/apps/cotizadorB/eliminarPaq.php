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
$adminrol=$_SESSION['rol'];
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

    <section id="bobybody">


        <?php

                        
            if (isset($_POST['ELIMINAR'])) {

                        
                    
                        $idpaq = $_POST['paquete'];
                    
                        $fechahoy = date('Y-m-d');
            

                    
                        $update = "UPDATE $cat_paq SET activo='NO' WHERE id='$idpaq' ";
                        $qsqve = $dbo->query($update);
                    
                    

                
                        if (!empty($qsqve)) {



                            ?>
                                <section id="contdatsave">
                                        
                                        <div id="backRegresar" class="navbot">
                                            <a href="selectPaqElim.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                            <div id="datsave"><?php echo 'paquete eliminado'; ?></div>
                                        </div>
                                    
                                    </section>
                                <?php
                                } else {

                                ?>
                                    <section id="contdatsave">
                                                
                                            

                                    <div id="backRegresar" class="navbot">
                                        <a href="selectPaqElim.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                        <div id="datsave"><?php echo 'paquete no eliminado'; ?></div>
                                    </div>

                                </section>
                            <?php


                        }
            }elseif(isset($_POST['fuera'])) {

                        
                $filtrarU = $_POST['fuera'];
                $idpaq = $_POST['idpaq'];
            
                $fechahoy = date('Y-m-d');
                //////VALIDAR PROCEDIMIENTO
                $userLog = 'XION';
                    

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


                            $save0 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaq','$qtipoC','$cantidadAgc','FC','$qarticuloAgc','$costoAgc','$factorAgc','$precioventaC','$userLog', 'SI')";

                            $qsqve = $dbo->query($save0);


                    }
                
                        

                    
                }
            
        
                if (!empty($qsqve)) {



                    ?>
                        <section id="contdatsave">
                                
                                <div id="backRegresar" class="navbot">
                                    <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'paquete ingreado'; ?></div>
                                </div>
                            
                            </section>
                        <?php
                        } else {

                        ?>
                            <section id="contdatsave">
                                        
                                    

                            <div id="backRegresar" class="navbot">
                                <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                <div id="datsave"><?php echo 'paquete no integrado o ya existente'; ?></div>
                            </div>

                        </section>
                    <?php


                }

            }elseif(isset($_POST['dentro'])) {

                        
                $filtrarU = $_POST['dentro'];
                $idpaq = $_POST['idpaq'];
            
                $fechahoy = date('Y-m-d');
                //////VALIDAR PROCEDIMIENTO
                $userLog = 'XION';
            

    

                foreach ($_POST['id_dentro'] as $verCoti) {

                    

                    ////AGEGAR PRODUCTOS DENTRO DE CATALOGO
                    $tipo = isset($_POST['tipoC'][$verCoti]) ? $_POST['tipoC'][$verCoti] : false;
                    $qtipo = (string) ($tipo);

                    $cantidadAg = isset($_POST['cantidadAgc'][$verCoti]) ? $_POST['cantidadAgc'][$verCoti] : false;

                    $articuloAg = isset($_POST['articuloAgc'][$verCoti]) ? $_POST['articuloAgc'][$verCoti] : false;                        
                    $qarticuloAg = (string) ($articuloAg);
            
                    $agregar = isset($_POST['agregarc'][$verCoti]) ? $_POST['agregarc'][$verCoti] : false;
                    $qagregar = (string) ($agregar);


        
                    echo $qtipo.'<br>';
            
                
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
                                                
                            }

                            $save0 = "INSERT INTO $cat_paqBA VALUES (NULL,'$idpaq','$qtipo','$cantidadAg','$idsap1','$qarticuloAg','$costo1','$factor1','$precioventa','$userLog', 'SI')";

                            $qsqve = $dbo->query($save0);


                    }
                        

                    
                }
            

        
                if (!empty($qsqve)) {



                    ?>
                        <section id="contdatsave">
                                
                                <div id="backRegresar" class="navbot">
                                    <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'paquete ingreado'; ?></div>
                                </div>
                            
                            </section>
                        <?php
                        } else {

                        ?>
                            <section id="contdatsave">
                                        
                                    

                            <div id="backRegresar" class="navbot">
                                <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>
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