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
 $userUnidadAcronu=$_SESSION['acronu'];



 $year = isset($_POST['year']) ? $_POST['year'] : false;
 $periodo = isset($_POST['periodo']) ? $_POST['periodo'] : false;
 $periodom = isset($_POST['periodo']) ? $_POST['periodo'] : false;
 $messave =$periodo;
 $clientesu = isset($_POST['unidad']) ? $_POST['unidad'] : false;
 $tabdueno = isset($_POST['tabdueno']) ? $_POST['tabdueno'] : false;
 $tabregion = isset($_POST['region']) ? $_POST['region'] : false;
 $tabunidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;
 
 $tabRes = $vartabindi.$tabdueno;
 
 
 $valyuser= "SELECT * FROM $sresuall WHERE tipouser = '$tabdueno' AND acronu LIKE '%$tabunidad%' ";
 $qvalyuser = $db_users->query($valyuser);
 while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {                                 
     $regionNAM = $fila['region'];
     $unidNAME = $fila['unidad'];
     $usuariotask = $fila['usuario'];
 }
 
 if($tabdueno=='GER'){
     $vadyoj = "SELECT * FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$usuariotask%' AND activo = 'SI' AND region LIKE '%$tabregion%' ";
 }else{
     $vadyoj = "SELECT * FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$usuariotask%' AND activo = 'SI' AND unidad LIKE '%$clientesu%' ";
 
 }
 
 $qvadyoj = $dbo->query($vadyoj);
 while ($fila= $qvadyoj->fetch(PDO::FETCH_ASSOC)) {
 
     $dydy = $fila['idindi'];
     $serespy = $fila['useresp'];
     $regiony = $fila['region'];
 }

 ?>
 
<div id="variables">



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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ RESULTS</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="../js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="../js/ezresults.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/idexresults.css">
    <link rel="stylesheet" type="text/css" href="css/tableroResul.css">
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

            <img  src="../img/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexResults.php" id="slognav1">

                <input type="submit" class="submit" id="">

            </form>

          
        </div>


        <div class="bakBoton">

            <img  src="../img/registro.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../select_registra.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2" >

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



        <div id="back1" class="backtab">

            <?php

                require_once 'tabResultados.php';
              
            ?>
            
        </div>

        <div id="backGlobal">
            <?php
       
                   
                $desempenoA = current($dbo->query("SELECT SUM(resultado) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
                    
              

                $printDes = number_format($desempenoA,2).'%';
            ?>

            <div id="backallobj">  

                <img src="../img/graf/gra_a.png" class="img_grafa0">  
                <div class="circobj">

                    <?php
                            if($desempenoA >=0 & $desempenoA <=2.5){
                                ?>
                                   <img src="../img/graf/gra_a0.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >2.5 & $desempenoA <=5){
                                ?>
                                   <img src="../img/graf/gra_a5.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >5 & $desempenoA <=10){
                                ?>
                                   <img src="../img/graf/gra_a10.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >10 & $desempenoA <=15){
                                ?>
                                   <img src="../img/graf/gra_a15.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >15 & $desempenoA <=20){
                                ?>
                                   <img src="../img/graf/gra_a20.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >20 & $desempenoA <=25){
                                ?>
                                   <img src="../img/graf/gra_a25.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >25 & $desempenoA <=30){
                                ?>
                                   <img src="../img/graf/gra_a30.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >30 & $desempenoA <=35){
                                ?>
                                   <img src="../img/graf/gra_a35.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >35 & $desempenoA <=40){
                                ?>
                                   <img src="../img/graf/gra_a40.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >40 & $desempenoA <=45){
                                ?>
                                   <img src="../img/graf/gra_a45.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >45 & $desempenoA <=50){
                                ?>
                                   <img src="../img/graf/gra_a50.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >50 & $desempenoA <=55){
                                ?>
                                   <img src="../img/graf/gra_a55.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >55 & $desempenoA <=60){
                                ?>
                                   <img src="../img/graf/gra_a60.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >60 & $desempenoA <=65){
                                ?>
                                   <img src="../img/graf/gra_a65.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >65 & $desempenoA <=70){
                                ?>
                                   <img src="../img/graf/gra_a70.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >70 & $desempenoA <=75){
                                ?>
                                   <img src="../img/graf/gra_a75.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >75 & $desempenoA <=80){
                                ?>
                                   <img src="../img/graf/gra_a80.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >80 & $desempenoA <=85){
                                ?>
                                   <img src="../img/graf/gra_a85.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >85 & $desempenoA <=90){
                                ?>
                                   <img src="../img/graf/gra_a90.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >90 & $desempenoA <=95){
                                ?>
                                   <img src="../img/graf/gra_a95.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }elseif($desempenoA >95 ){
                                ?>
                                   <img src="../img/graf/gra_a100.png" class="img_grafa"> 
                                   <div class="desmep"><strong><?php echo $printDes; ?></strong></div> 
                                <?php
                            }
                    ?>
                    
                 
                </div>


            </div>
        </div>


        <div id="backMEses">
            <?php

                require_once 'tabmeses.php';

            ?>
           <div class="barrablack"></div>
        </div>
              
        <div id="blockMod"></div>

    </section>

 



</body>

</html>