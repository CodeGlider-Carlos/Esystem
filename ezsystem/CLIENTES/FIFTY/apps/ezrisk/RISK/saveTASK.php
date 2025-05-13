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
$userUnidadAcronu=$_SESSION['acronu'];




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

      <script type="text/javascript" src="js/risk.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/risk.css">
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

            
            <form action="risk.php" id="slognav3">

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

        <div class="bakBoton">

            <img  src="../img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="../CONS/cons.php" id="slognav4">

                <input type="submit" class="submit" id="lognav4">

            </form>

        </div>




        <form action="../../../loglog/logout.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

       
        <div id="backUser">

            <img id="lognav0" src="../img/suite/ezriskuser1.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>

    
    <div id="backall"></div>
    <modseg  id="modprosp">
   
        <?php
            if(isset($_POST['svaeTask'])){

                $resptask = $_POST['resptask'];
                $riesgo = $_POST['riesgo'];  
                $tarea = $_POST['tarea'];

          
                $valyuser = "SELECT * FROM $sresuall WHERE  nombre = '$resptask'  ";
                $qvalyuser = $db_users->query($valyuser);
                
                while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
            
                    $userkaskLY = $fila['usuario'];  
                    $nombreREsp = $fila['nombre'];  
                }
             
                $valynameTask = "SELECT * FROM $tablplant WHERE  nombreco = '$nombreREsp'  ";
                $qvalynameTask = $db_assess->query($valynameTask);
                
                while ($fila = $qvalynameTask->fetch(PDO::FETCH_ASSOC)) {
            
                    $regionNAME = $fila['region'];  
                    $ucliente = $fila['unidad'];  
                    $userkask = $fila['dep']; 
                    $dirger = $fila['dirger'];  
                    $userjefe = $fila['userjefe'];  
                }

             
                

                $fechapro = $_POST['fechapro'];

                $fechc= new DateTime( $fechapro );
                $fechapro = $fechc->format('Y-m-d');
                $mesfinpro = $fechc->format('m');
                $yerfinpro = $fechc->format('y');
                $diafinpro = $fechc->format('d');


                $fechahoy = date('Y-m-d');

              
                if(empty($riesgo)){

                }else{

                    $tabrisk = "SELECT * FROM $tabcatllas WHERE  falla LIKE '%$riesgo%'  ";
                    $qtabrisk = $db_risk->query($tabrisk);
                    
                    while ($fila = $qtabrisk ->fetch(PDO::FETCH_ASSOC)) {
                
                        $id_falla = $fila['id_falla'];  
                        $enfoque = $fila['enfoque'];   
                    }
    
                    $tabsave1 = "INSERT INTO $tabtaskY VALUES (NULL,'$regionNAME','$ucliente','$dirger','$userjefe','$yerfinpro','GESTION DE RIESGOS',NULL,
                    '$fechahoy','$id_falla','$userLog','$userLog','$enfoque','$tarea','$nombreREsp',
                    '$fechapro','$yerfinpro','$mesfinpro','$diafinpro',NULL,'EN CURSO',
                    NULL,NULL,NULL,NULL,NULL,'$userLog','$userkaskLY','risk','SI' )";
    
                    $qtabsave1 = $db_task->query($tabsave1);
    
                }

              



                ?>

                    <form method="POST" action="risk.php" id="backregresar">

                        <div id="backbackRegre">

                            
                            <img src="../img/suite/regresar.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qtabsave1)){
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

                <?php
            }elseif(isset($_POST['svaeCom'])){

               
                $valynameTask = "SELECT * FROM $sresuall WHERE  usuario = '$userLog'  ";
                $qvalynameTask = $db_users->query($valynameTask);
                
                while ($fila = $qvalynameTask->fetch(PDO::FETCH_ASSOC)) {
            
                    $regionNAME = $fila['region'];  
                    $ucliente = $fila['unidad'];  
                   
                }

                $comment = $_POST['comment'];        
                $fechapro = $_POST['fechapro'];

                $fechc= new DateTime( $fechapro );
                $fechapro = $fechc->format('Y-m-d');
                $mesfinpro = $fechc->format('m');
                $yerfinpro = $fechc->format('y');
                $diafinpro = $fechc->format('d');


                $fechahoy = date('Y-m-d');

        

                $tabco = "INSERT INTO $tasky_hist_coment VALUES (NULL,'$regionNAME','$ucliente',
                '$comment','$fechapro','$diafinpro','$mesfinpro','$yerfinpro','$userLog','$fechahoy',NULL,NULL,'risk','1' )";

                $qtabco = $db_task->query($tabco);




                ?>

                <form method="POST" action="risk.php" id="backregresar">

                    <div id="backbackRegre">

                        
                        <img src="../img/suite/regresar.png" id="imagRegresar">

                        <input type="submit" name="subback" id="subback">

                        <?php


                        if(!empty($qtabco)){
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

                <?php
            }elseif(isset($_POST['update'])){

                $idtask = $_POST['idtask'];
                $obs = $_POST['obs'];
                $estatus = $_POST['estatus'];


                if(empty($obs)){
                   
                }else{
                    $updobs = "UPDATE $tabtaskY SET observacionescumple='$obs' WHERE id='$idtask' ";
                    $qupdobs = $db_task->query($updobs);
                }

                if(empty($estatus)){

                }else{

                    $updestat = "UPDATE $tabtaskY SET estatus='$estatus' WHERE id='$idtask' ";
                    $qupdestat = $db_task->query($updestat);
                }


                ?>

                    <form method="POST" action="risk.php" id="backregresar">

                        <div id="backbackRegre">

                            
                            <img src="../img/suite/regresar.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qupdestat) OR !empty($qupdobs)){
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

                <?php
            }elseif(isset($_POST['delco'])){

                $idcoment = $_POST['idcoment'];
                $estatus = $_POST['estatus'];


          
                if(empty($estatus)){

                }else{

                    $updestat = "UPDATE $tasky_hist_coment SET activo='0' WHERE id='$idcoment' ";
                    $qupdestat = $db_task->query($updestat);
                }


                ?>

                    <form method="POST" action="risk.php" id="backregresar">

                        <div id="backbackRegre">

                            
                            <img src="../img/suite/regresar.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qupdestat) ){
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

                <?php
            }
        ?>




        <div id="blockMod"></div>


    </modseg>



</body>

</html>