<?php
session_start();
require_once '../../varSQL/bd_lead.php';
require_once '../../../../varSQL/var.php';
require_once '../../../../varSQL/bd.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$fechahoy = date('Y-m-d');
  
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead</title>
    
    <link rel="icon" type="favicon/x-icon" href="deodi50d/img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/nego.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/nego.css">
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

<body class="body_ezlead">

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

            <form action="../PROSPECTOS/prospect_px.php" id="slognav2">

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


      


        <form action="../../../../suite.php" id="lognav7"  class="bakBoton">
                
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

        <?php


            if(isset($_POST['savemod'])){

          
                $Pid0 = $_POST['Pid0'];
                $person = $_POST['person'];
                $tipotarj = $_POST['tipotarj'];
                foreach ($_POST['id_task'] as $idsave) {

                    $estatus = isset($_POST['estatus'][$idsave]) ? $_POST['estatus'][$idsave] : false;
                    $qestatus = (string) ($estatus);

                                     
                    $fechaco = isset($_POST['fechaco'][$idsave]) ? $_POST['fechaco'][$idsave] : false;
                    $qfechaco = (string) ($fechaco);

                    $obscu = isset($_POST['obscu'][$idsave]) ? $_POST['obscu'][$idsave] : false;
                    $qobscu = (string) ($obscu);
                    
                    $fechc= new DateTime( $qfechaco );
                    $fechapro = $fechc->format('Y-m-d');
                    $mesfinpro = $fechc->format('m');
                    $yerfinpro = $fechc->format('y');
                    $diafinpro = $fechc->format('d');


                    if(empty($estatus)){

                    }else{

                        if(!empty($estatus) & !empty($fechaco)){
                            $updetapa = "UPDATE $lead_task SET estatus='$qestatus' WHERE id='$idsave' ";
                            $qupdetapa = $dbc->query($updetapa);

                            $updetapa1 = "UPDATE $lead_task SET fechcumple='$fechapro' WHERE id='$idsave' ";
                            $qupdetapa1 = $dbc->query($updetapa1);

                            $updetapa2 = "UPDATE $lead_task SET estatus='$yerfinpro' WHERE id='$idsave' ";
                            $qupdetapa2 = $dbc->query($updetapa2);

                            $updetapa3 = "UPDATE $lead_task SET estatus='$diafinpro' WHERE id='$idsave' ";
                            $qupdetapa3 = $dbc->query($updetapa3);

                            $updetapa4 = "UPDATE $lead_task SET observacionescumple='$obscu' WHERE id='$idsave' ";
                            $qupdetapa4 = $dbc->query($updetapa4);
                        }
                        
                    }
                  

                }

      

                ?>

                    <form method="POST" action="nego.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">
                            <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">
                            
                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qupdetapa)){
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

            }elseif(isset($_POST['svaeTask'])){

                $idtarj = $_POST['Pid0'];
                $person = $_POST['person'];
                $useresp = $_POST['useresp'];
                $Pregion0 = $_POST['Pregion0'];
                $Punidad0 = $_POST['Punidad0'];
                $etapa = $_POST['etapa'];
                $tipotarj = $_POST['tipotarj'];

                $accion = $_POST['accion'];
                $fechapro = $_POST['fechapro'];
                $prio = $_POST['prio'];

                $fechc= new DateTime( $fechapro );
                $fechapro = $fechc->format('Y-m-d');
                $mesfinpro = $fechc->format('m');
                $yerfinpro = $fechc->format('y');
                $diafinpro = $fechc->format('d');


                $fechahoy = date('Y-m-d');

                $obs = $_POST['obs'];



                $valyuser = "SELECT * FROM $sresuall WHERE  usuario = '$userLog'  ";
                $qvalyuser = $db_users->query($valyuser);
                
                while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
            
                    $userkaskLY = $fila['usuario'];  
                    $nombreREsp = $fila['nombre'];  
                }
             
                $valynameTask = "SELECT * FROM $users_leadlead WHERE  user = '$useresp'  ";
                $qvalynameTask = $dbc->query($valynameTask);
                
                while ($fila = $qvalynameTask->fetch(PDO::FETCH_ASSOC)) {
            
                    $usRegion = $fila['region'];   
                    $usUNidad = $fila['unidad'];   
                    $nombreTask = $fila['nombre'];   
                }


           
                if($tipotarj == 'EMPRESA'){
                    $tabsave1 = "INSERT INTO $lead_task VALUES (NULL,'$usRegion','$usUNidad','$etapa','$tipotarj','$idtarj','$fechahoy','$accion','$prio',
                    '$nombreTask','$fechapro','$yerfinpro','$mesfinpro','$diafinpro','$obs','EN CURSO',
                    NULL,NULL,NULL,NULL,NULL,'$userLog','$useresp','lead','SI' )";
                }else{

                }
                  
              

  

                $qtabsave1 = $dbc->query($tabsave1);




                ?>

                    <form method="POST" action="nego.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $idtarj; ?>" name="Pid">
                            <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">

                    
                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

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

                $idtarj = $_POST['Pid0'];
                $person = $_POST['person'];
                $tipotarj = $_POST['tipotarj'];
                $Pregion0 = $_POST['Pregion0'];
                $Punidad0 = $_POST['Punidad0'];
                $etapa = $_POST['etapa'];
                $tipocoment = $_POST['tipocoment'];
                $comment = $_POST['comment'];
        
                $fechapro = $_POST['fechapro'];

                $fechc= new DateTime( $fechapro );
                $fechapro = $fechc->format('Y-m-d');
                $mesfinpro = $fechc->format('m');
                $yerfinpro = $fechc->format('y');
                $diafinpro = $fechc->format('d');


                $fechahoy = date('Y-m-d');

        

                $tabco = "INSERT INTO $hist_comentlead VALUES (NULL,'$Pregion0','$Punidad0','$etapa','$tipotarj','$idtarj','$tipocoment',
                '$comment','$fechapro','$diafinpro','$mesfinpro','$yerfinpro','$userLog','$fechahoy',NULL,NULL,'SI',NULL,NULL )";

                $qtabco = $dbc->query($tabco);




                ?>

                    <form method="POST" action="nego.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $idtarj; ?>" name="Pid">
                            <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">
                    
                            
                            <img src="../../img/suite/regresar.png" id="imagRegresar">

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
            }elseif(isset($_POST['modCom'])){

          
                $Pid0 = $_POST['Pid0'];
                $person = $_POST['person'];
                $tipotarj = $_POST['tipotarj'];

                foreach ($_POST['id_comm'] as $idsave) {

                    $estatus = isset($_POST['estatus'][$idsave]) ? $_POST['estatus'][$idsave] : false;
                    $qestatus = (string) ($estatus);

                     
                    if(empty($estatus)){

                    }else{

                     
                            $updetapa = "UPDATE $hist_comentlead SET activo='NO' WHERE id='$idsave' ";
                            $qupdetapa = $dbc->query($updetapa);

                       
                        
                    }
                  

                }

      

                ?>

                    <form method="POST" action="nego.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">
                            <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">
                            
                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qupdetapa)){
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

            }elseif(isset($_POST['saveWhats'])){

                $idtarj = $_POST['Pid0'];
                $person = $_POST['person'];
                $tipotarj = $_POST['tipotarj'];
                $Pregion0 = $_POST['Pregion0'];
                $Punidad0 = $_POST['Punidad0'];
                $etapa = $_POST['etapa'];
                $tipocoment = $_POST['tipocoment'];
                $comment = $_POST['comment'];
        
                $fechapro = $_POST['fechapro'];

                $fechc= new DateTime( $fechapro );
                $fechapro = $fechc->format('Y-m-d');
                $mesfinpro = $fechc->format('m');
                $yerfinpro = $fechc->format('y');
                $diafinpro = $fechc->format('d');


                $fechahoy = date('Y-m-d');

        

                $tabco = "INSERT INTO $hist_comentlead VALUES (NULL,'$Pregion0','$Punidad0','$etapa','$tipotarj','$idtarj','$tipocoment',
                '$comment','$fechapro','$diafinpro','$mesfinpro','$yerfinpro','$userLog','$fechahoy',NULL,NULL,'SI',NULL,NULL )";

                $qtabco = $dbc->query($tabco);



                
                foreach ($_FILES['fichero']['tmp_name'] as $key => $tmp_name) {

                    $filename = $_FILES['fichero']['name'][$key];
                    $temporalName = $_FILES['fichero']['tmp_name'][$key];

                    ///EXTRAER EXTENSION
                    $path_parts = pathinfo($filename);
                    $ext = $path_parts['extension'];


                 
                    ///UBICACION DE ARCHIVOS
                    $directorio = '../DOCTOS/TRATOS';
                    ////NUEVO NOMBRE DE DOCUMENTO, INCLUYE EL ORDEN DE IMPRESION, EL ID DEL DOCUMENTO O FALLAPO Y EL CONSECUTIVO


                    $valyid = "SELECT * FROM $hist_comentlead WHERE region = '$Pregion0' AND unidad = '$Punidad0' AND etapa = '1' AND tipotarjeta = '$tipotarj' AND idtarjeta = '$idtarj' ";
                    $qvalyid = $dbc->query($valyid);
                    
                    while ($fila = $qvalyid->fetch(PDO::FETCH_ASSOC)) {
                
                        $iddoct = $fila['id'];  
                    
                    }

                    /////NOMBRE FICHERO -ARCHIVO-

                    $nuevoname =  $filename;
                    $ruta =  $directorio .'/'. $nuevoname;
                    //////1-FX1ALP-1-OFICIO DE SUFICIENCIA-1
                    if (!file_exists($directorio)) {
                        mkdir($directorio, 0777);
                    }

                    $opendir = opendir($directorio);
                   
                    if (move_uploaded_file($_FILES['fichero']['tmp_name'][$key], $ruta)) {

                        ////////////GUARDAR ARCHIVOS EN BD/*
                        $updetapa = "UPDATE $hist_comentlead SET ruta='$ruta' WHERE id='$iddoct' ";
                        $qupdetapa = $dbc->query($updetapa);

                        $updetapa1 = "UPDATE $hist_comentlead SET nombrearchivo='$nuevoname' WHERE id='$iddoct' ";
                        $qupdetapa1 = $dbc->query($updetapa1);
                    }
                }


                ?>

                    <form method="POST" action="nego.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $idtarj; ?>" name="Pid">
                            <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">
                    
                            
                            <img src="../../img/suite/regresar.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qupdetapa)){
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
            }elseif(isset($_POST['cambiar'])){

          
                $etapa = $_POST['etapa'];
                $Pid0 = $_POST['Pid0'];
                $person = $_POST['person'];
                $tipotarj = $_POST['tipotarj'];

                if($tipotarj == 'EMPRESA'){
                    $updetapa = "UPDATE $cat_tarjetas_leademp SET estatus='$etapa' WHERE id='$Pid0' ";
                    $qupdetapa = $dbc->query($updetapa);
                }else{
                    $updetapa = "UPDATE $cat_tarjetas_leadpx SET estatus='$etapa' WHERE id='$Pid0' ";
                    $qupdetapa = $dbc->query($updetapa);
                }
                

              
      

                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">
                            <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">
                            
                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if(!empty($qupdetapa)){
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