<?php
require_once '../varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

$year = isset($_POST['year']) ? $_POST['year'] : false;
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : false;
$periodom = isset($_POST['periodo']) ? $_POST['periodo'] : false;
$messave =$periodo;

$clientesu = isset($_POST['clientesu']) ? $_POST['clientesu'] : false;

$region = isset($_POST['region']) ? $_POST['region'] : false;
$dueno = isset($_POST['dueno']) ? $_POST['dueno'] : false;
$tipouser = isset($_POST['usuario']) ? $_POST['usuario'] : false;
$alobj = isset($_POST['alobj']) ? $_POST['alobj'] : false;

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>objetivos</title>
    
    <link rel="icon" type="favicon/x-icon" href="../img/seicappico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/cuad.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/cuadroma_9.css">
</head>
<body>


<div id="meses_variables">
    <?php
    if($periodo == '01'){
        $conmes = 'm1';
    }elseif($periodo == '02'){
        $conmes = 'm2';
    }elseif($periodo == '03'){
        $conmes = 'm3';
    }elseif($periodo == '04'){
        $conmes = 'm4';
    }elseif($periodo == '05'){
        $conmes = 'm5';
    }elseif($periodo == '06'){
        $conmes = 'm6';
    }elseif($periodo == '07'){
        $conmes = 'm7';
    }elseif($periodo == '08'){
        $conmes = 'm8';
    }elseif($periodo == '09'){
        $conmes = 'm9';
    }elseif($periodo == '10'){
        $conmes = 'm10';
    }elseif($periodo == '11'){
        $conmes = 'm11';
    }elseif($periodo == '12'){
        $conmes = 'm12';
    }



    if($messave == '1'){
        $mescol = 'm1';
    }elseif($messave == '2'){
        $mescol = 'm2';
    }elseif($messave == '3'){
        $mescol = 'm3';
    }elseif($messave == '4'){
        $mescol = 'm4';
    }elseif($messave == '5'){
        $mescol = 'm5';
    }elseif($messave == '6'){
        $mescol = 'm6';
    }elseif($messave == '7'){
        $mescol = 'm7';
    }elseif($messave == '8'){
        $mescol = 'm8';
    }elseif($messave == '9'){
        $mescol = 'm9';
    }elseif($messave == '10'){
        $mescol = 'm10';
    }elseif($messave == '11'){
        $mescol = 'm11';
    }elseif($messave == '12'){
        $mescol = 'm12';
    }         
    ?>
</div>
    <!--
    <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">

-->
    <?php 

    
        
            ?>

                <section id="backLoad">

                    <div id="contIcL">
                        <div id="icLoad">
                            
                        </div>
                    </div>
                    <div id="tileLoad">Cargando...</div>
                </section>
                
           
                <section id="contTab">

                    <div id="back1" class="backtab">

                            <?php


                                  require_once 'tabObjetivos.php';

                               
                            ?>
                        
                    </div>
                    
                
                    <div id="back4" class="backtab">
                        <?php
                           require_once 'perspectivas.php';
                        ?>

                    <div class="titleSection2"><h5>PERSPECTIVAS</h5></div>
                    </div>
                
                    <div id="back6" class="backtab">
                        <div class="titleSection2"><h5>DESEMPEÑO</h5></div>
                        <div id="back6uno" class="backtab">

                            

                            <div id="backAguja">

                                <section id="semf">

                                    <?php 
                                        ///////////////////////////////////SEMAFORO VIGENT
                                        //////blue

                                        $seminblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                        $qseminblu = $dbo->query($seminblu);
                                        while ($filase= $qseminblu->fetch(PDO::FETCH_ASSOC)) {

                                            $minblu = $filase['liminferior'];

                                        }

                                        $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                        $qsemaxblu = $dbo->query($semaxblu);
                                        while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                            $maxblu = $filase['limsuperior'];

                                        }

                                        //////green

                                        $semingreen = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                        $qsemingreen = $dbo->query($semingreen);
                                        while ($filase= $qsemingreen->fetch(PDO::FETCH_ASSOC)) {

                                            $mingreen= $filase['liminferior'];

                                        }

                                        $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                        $qsemaxblu = $dbo->query($semaxblu);
                                        while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                            $maxgreen = $filase['limsuperior'];

                                        }

                                        //////yell

                                        $seminyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                        $qseminyell = $dbo->query($seminyell);
                                        while ($filase= $qseminyell->fetch(PDO::FETCH_ASSOC)) {

                                            $minyell= $filase['liminferior'];

                                        }

                                        $semaxyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                        $qsemaxyell = $dbo->query($semaxyell);
                                        while ($filase= $qsemaxyell->fetch(PDO::FETCH_ASSOC)) {

                                            $maxyell = $filase['limsuperior'];

                                        }

                                        //////red

                                        $seminred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                        $qseminred = $dbo->query($seminred);
                                        while ($filase= $qseminred->fetch(PDO::FETCH_ASSOC)) {

                                            $minred= $filase['liminferior'];

                                        }

                                        $semaxred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                        $qsemaxred = $dbo->query($semaxred);
                                        while ($filase= $qsemaxred->fetch(PDO::FETCH_ASSOC)) {

                                            $maxred = $filase['limsuperior'];

                                        }

                                        //////guind

                                        $seminguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                        $qseminguind = $dbo->query($seminguind);
                                        while ($filase= $qseminguind->fetch(PDO::FETCH_ASSOC)) {

                                            $minguind= $filase['liminferior'];

                                        }

                                        $semaxguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                        $qsemaxguind = $dbo->query($semaxguind);
                                        while ($filase= $qsemaxguind->fetch(PDO::FETCH_ASSOC)) {

                                            $maxguind = $filase['limsuperior'];

                                        }

                                    

                                    ?>

                                </section>
                    
                                <?php
                                    ////////////////VALIDACIONES
                                           
                                    $desempenoA = current($dbo->query("SELECT SUM(resultado) FROM $alobj WHERE yearini LIKE '%$year%' AND useresp LIKE '%$dueno%' AND activo = 'SI' ")->fetch());
                     
                                 
                                    
                                        if($desempenoA == NULL){
                                        
                                        ?><img src="../img/aguja.svg" id="aguja" class="agujAvin"><?php 
                                        ?><div class="destotal" ><?php echo 'NE';?></div><?php

                                        }else{            
                            
                                        if($desempenoA==0){
                                            ?><img src="../img/aguja.svg" id="aguja" class="agujAvin"><?php 
                                            ?><div class="destotal" ><?php echo 'NE';?></div><?php
                                        }else{

                                            if($desempenoA >= 0 & $desempenoA <5){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj015"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 5 & $desempenoA <15){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj015"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 15 & $desempenoA <25){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj1525"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 25 & $desempenoA <35){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj2535"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 35 & $desempenoA <45){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj3545"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 45 & $desempenoA <55){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj4555"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 55 & $desempenoA <65){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj5575"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 65 & $desempenoA <75){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj5575"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 75 & $desempenoA <85){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj7585"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 85 & $desempenoA <95){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj8595"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }elseif($desempenoA >= 95){
                                                ?><img src="../img/aguja.svg" id="aguja" class="aguj95100"><?php 
                                                ?><div class="destotal" ><?php echo number_format($desempenoA, 2) . '%';?></div><?php
                                            }
                                        }
                                    }
                                ?>
                                
                            </div>

                        </div>

                    
                    </div>
            
                    <div id="back8" class="backtab">
                        <div id="reload">
                            
                            <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">

                        </div> 
                        <div id="backRegresar">
                            <a href="selectobj.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
                        </div>
                    </div>


                    
                </section>

            <?php 

      
    ?>

</body>
</html>