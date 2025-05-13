<?php
session_start();
require_once '../varSQL/dbmysql.php';
require_once '../varSQL/var.php';
require_once '../varSQL/bd.php';


$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];


$borrarEve = isset($_POST['borrarEve']) ? $_POST['borrarEve'] : false;
$mesmes = isset($_POST['mesmes']) ? $_POST['mesmes'] : false;
echo $borrarEve;
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/saveCalendar.css">
    <!---------------------  CONTROLADORES JS----------------------->



</head>

<body>



    <!--
        <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">

    -->

    <section id="updateAlert">

    <section id="var">

        <?php


      

            if(!empty($borrarEve)){

                foreach ($_POST['id_ev'] as $idsave) {


                    $eliminar = isset($_POST['eliminar'][$idsave]) ? $_POST['eliminar'][$idsave] : false;
                    $qeliminar = (string) ($eliminar);


                    if(empty($eliminar)){
                        
                    }else{
                        $save = "UPDATE $eventKy SET activo ='$qeliminar' WHERE id='$idsave'";
                        $qsave = $db_task->query($save);
                    }

                }

            }else{

                $fechahoy = date('Y-m-d');

                $dechaevento = isset($_POST['dechaevento']) ? $_POST['dechaevento'] : false;
                $descripEvent = isset($_POST['descripEvent']) ? $_POST['descripEvent'] : false;
                $lugarEvent = isset($_POST['lugarEvent']) ? $_POST['lugarEvent'] : false;
                $todoeldia = isset($_POST['todoeldia']) ? $_POST['todoeldia'] : false;
                    
                $desde = isset($_POST['desde']) ? $_POST['desde'] : false;                 
                $hasta = isset($_POST['hasta']) ? $_POST['hasta'] : false;

            
                $array = isset($_POST['asistentes']) ? $_POST['asistentes'] : false;
                $asistentes = json_encode($array);

                $yoConvoco = $userLog;

                $yearev = isset($_POST['yearev']) ? $_POST['yearev'] : false;
                
                $mesnum = isset($_POST['mesnum']) ? $_POST['mesnum'] : false;
                $diames = isset($_POST['diames']) ? $_POST['diames'] : false;
                $diames = isset($_POST['diames']) ? $_POST['diames'] : false;


                $fechaE =  $yearev.'/'.$mesnum.'/'.$diames;
                $fechc= new DateTime( $fechaE );
                $fechapro = $fechc->format('Y-m-d');
                        
                $save = "INSERT INTO $eventKy VALUES   (NULL,'$yearev','SI', '$mesmes','$mesnum', '$diames','$fechapro','$desde','$hasta',
                '$descripEvent','$lugarEvent','EN_CURSO','$userLog', '$asistentes','$userLog','$fechahoy',NULL,NULL)";

                $qsave = $db_task->query($save);
        
                        
            }
                        

        ?>

    </section>


    <?php





        if (!empty($qsave)) {

            ?>

                <section id="contdatsave">

                    <?php

                        if($mesmes == 'ENERO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miEnero.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'FEBRERO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miFebrero.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'MARZO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miMarzo.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'ABRIL'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miAbril.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'MAYO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miMayo.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'JUNIO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miJunio.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'JULIO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miJulio.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'AGOSTO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miAgosto.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'SEPTIEMBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miSeptiembre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'OCTUBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miOctubre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'NOVIEMBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miNoviembre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'DICIEMBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miDiciembre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </div>
                            <?php

                        }
                    ?>
                 </section>

            <?php
            }else{

            ?>

                <section id="contdatsave">

                    <?php

                        if($mesmes == 'ENERO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miEnero.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'FEBRERO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miFebrero.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'MARZO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miMarzo.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'ABRIL'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miAbril.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'MAYO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miMayo.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'JUNIO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miJunio.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'JULIO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miJulio.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'AGOSTO'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miAgosto.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'SEPTIEMBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miSeptiembre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'OCTUBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miOctubre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'NOVIEMBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miNoviembre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }elseif($mesmes == 'DICIEMBRE'){
                            ?>
                                <div id="backRegresar" class="navbot">
                                    <a href="miDiciembre.php"><img src="../img/ICONOS/regresarOK3.png" id="regresar"></a>
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </div>
                            <?php

                        }
                    ?>
                 </section>
                 
            <?php


        }
        


        ?>

    </section>


</body>

</html>