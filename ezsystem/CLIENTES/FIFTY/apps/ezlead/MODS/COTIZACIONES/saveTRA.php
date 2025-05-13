<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
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
    <title>ez lead+</title>
    
    
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/coti.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/saveCoti.css">
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


            if (isset($_POST['saveProg'])){

                $etapa = $_POST['etapa'];
                $idtarj_med = $_POST['idtarj_med'];
                $namepaqq = $_POST['namepaqq'];
            
                $costo = $_POST['costo'];
                $precio = $_POST['precio'];
                $ajmedin = $_POST['ajmedin'];
                $preciohosp = $_POST['preciohosp'];
                $iva = $_POST['iva'];
                $total = $_POST['total'];
                $utilidadpor = $_POST['utilidadpor'];
                $utilidadmo = $_POST['utilidadmo'];
                $mnamepro = $_POST['mnamepro'];
                $promopor = $_POST['promopor'];
                $comso = $_POST['comso'];
                $comvic = $_POST['comvic'];
                $comOT = $_POST['comOT'];
                $fechahoy = date('Y-m-d');




                  /////ACTUALIZAR ETAPA Y DATOS EN TARJETA
                $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' ";
                $qbdpros0 = $dbc->query($bdpros0);
                  
                while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                    $Pid0 =$filpro0['id'];

                }


                $updetapa = "UPDATE $cat_tarjetas_med SET estatus='3' WHERE id='$Pid0' ";
                $qupdetapa = $dbc->query($updetapa);

                $updetapa = "UPDATE $cat_tarjetas_med SET procedimiento='$namepaqq' WHERE id='$Pid0' ";
                $qupdetapa = $dbc->query($updetapa);



                $updetapa2 = "UPDATE $cat_tarjetas_med SET costo='$costo' WHERE id='$Pid0' ";
                $qupdetapa2 = $dbc->query($updetapa2);

                $updetapa3 = "UPDATE $cat_tarjetas_med SET precio='$precio' WHERE id='$Pid0' ";
                $qupdetapa3 = $dbc->query($updetapa3);

                $updetapa4 = "UPDATE $cat_tarjetas_med SET ajuste='$ajmedin' WHERE id='$Pid0' ";
                $qupdetapa4 = $dbc->query($updetapa4);

                $updetapa5 = "UPDATE $cat_tarjetas_med SET preciohosp='$preciohosp' WHERE id='$Pid0' ";
                $qupdetapa5 = $dbc->query($updetapa5);

                $updetapa6 = "UPDATE $cat_tarjetas_med SET iva='$iva' WHERE id='$Pid0' ";
                $qupdetapa6 = $dbc->query($updetapa6);

                $updetapa7 = "UPDATE $cat_tarjetas_med SET total='$total' WHERE id='$Pid0' ";
                $qupdetapa7 = $dbc->query($updetapa7);

                $updetapa8 = "UPDATE $cat_tarjetas_med SET utilidadpor='$utilidadpor' WHERE id='$Pid0' ";
                $qupdetapa8 = $dbc->query($updetapa8);


                $updetapa9 = "UPDATE $cat_tarjetas_med SET utilidadmo='$utilidadmo' WHERE id='$Pid0' ";
                $qupdetapa9 = $dbc->query($updetapa9);

                $updetapa10 = "UPDATE $cat_tarjetas_med SET namepromo='$mnamepro' WHERE id='$Pid0' ";
                $qupdetapa10 = $dbc->query($updetapa10);

                $updetapa11 = "UPDATE $cat_tarjetas_med SET promo='$promopor' WHERE id='$Pid0' ";
                $qupdetapa11 = $dbc->query($updetapa11);

                $updetapa12 = "UPDATE $cat_tarjetas_med SET comso='$comso' WHERE id='$Pid0' ";
                $qupdetapa12 = $dbc->query($updetapa12);

                $updetapa13 = "UPDATE $cat_tarjetas_med SET comvic='$comvic' WHERE id='$Pid0' ";
                $qupdetapa13 = $dbc->query($updetapa13);

                $updetapa14 = "UPDATE $cat_tarjetas_med SET comotros='$comOT' WHERE id='$Pid0' ";
                $qupdetapa14 = $dbc->query($updetapa14);

              


                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
           

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
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

            }elseif (isset($_POST['saveTRAcoti'])){
                $etapa = $_POST['etapa'];
                $idtarj_med = $_POST['idtarj_med'];

              
                                 
                  /////ACTUALIZAR ETAPA Y DATOS EN TARJETA
                  $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' ";
                  $qbdpros0 = $dbc->query($bdpros0);
                    
                  while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                      $Pid0 =$filpro0['id'];
  
                  }
  
  
                  $updetapa = "UPDATE $cat_tarjetas_med SET estatus='$etapa' WHERE id='$Pid0' ";
                  $qupdetapa = $dbc->query($updetapa);
                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
        

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
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

            }elseif (isset($_POST['saveYAvinc'])){
                $etapa = $_POST['etapa'];
                $idtarj_med = $_POST['idtarj_med'];

                if($etapa == '6'){
                    $tabcoti= "SELECT * FROM $cat_coti_med WHERE  idtarjmed = '$idtarj_med' ";
                    $qtabcoti = $dbcot->query($tabcoti);
                      
                    while ($filpro0 = $qtabcoti->fetch(PDO::FETCH_ASSOC)) {
                        $PidCot =$filpro0['id'];
    
                    }

                    
                    $udpcot = "UPDATE $cat_coti_med SET useraprueba='$userLog' WHERE id='$PidCot' ";
                    $qudpcot = $dbcot->query($udpcot);

                    $udpcot2 = "UPDATE $cat_coti_med SET fechaprueba='$fechahoy' WHERE id='$PidCot' ";
                    $qudpcot2 = $dbcot->query($udpcot2);



                }
                  /////GUARDAR USUARIO Y FECHA DE AUTORIZACION
                elseif($etapa == '7'){

                    $tabcoti= "SELECT * FROM $cat_coti_med WHERE  idtarjmed = '$idtarj_med' ";
                    $qtabcoti = $dbcot->query($tabcoti);
                      
                    while ($filpro0 = $qtabcoti->fetch(PDO::FETCH_ASSOC)) {
                        $PidCot =$filpro0['id'];
    
                    }

                    
                    $udpcot3 = "UPDATE $cat_coti_med SET userautoriza='$userLog' WHERE id='$PidCot' ";
                    $qudpcot3 = $dbcot->query($udpcot3);

                    $udpcot4 = "UPDATE $cat_coti_med SET fechautoriza='$fechahoy' WHERE id='$PidCot' ";
                    $qudpcot4 = $dbcot->query($udpcot4);
                }



                
                  /////ACTUALIZAR ETAPA Y DATOS EN TARJETA
                  $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' ";
                  $qbdpros0 = $dbc->query($bdpros0);
                    
                  while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                      $Pid0 =$filpro0['id'];
  
                  }
  
  
                  $updetapa = "UPDATE $cat_tarjetas_med SET estatus='$etapa' WHERE id='$Pid0' ";
                  $qupdetapa = $dbc->query($updetapa);
                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
        

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
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

            }elseif (isset($_POST['saveProbar'])){
                $etapa = $_POST['etapa'];
                $idtarj_med = $_POST['idtarj_med'];

                if($etapa == '6'){
                    $tabcoti= "SELECT * FROM $cat_coti_med WHERE  idtarjmed = '$idtarj_med' ";
                    $qtabcoti = $dbcot->query($tabcoti);
                      
                    while ($filpro0 = $qtabcoti->fetch(PDO::FETCH_ASSOC)) {
                        $PidCot =$filpro0['id'];
    
                    }

                    
                    $udpcot = "UPDATE $cat_coti_med SET useraprueba='$userLog' WHERE id='$PidCot' ";
                    $qudpcot = $dbcot->query($udpcot);

                    $udpcot2 = "UPDATE $cat_coti_med SET fechaprueba='$fechahoy' WHERE id='$PidCot' ";
                    $qudpcot2 = $dbcot->query($udpcot2);



                }
               


                
                  /////ACTUALIZAR ETAPA Y DATOS EN TARJETA
                  $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' ";
                  $qbdpros0 = $dbc->query($bdpros0);
                    
                  while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                      $Pid0 =$filpro0['id'];
  
                  }
  
  
                  $updetapa = "UPDATE $cat_tarjetas_med SET estatus='$etapa' WHERE id='$Pid0' ";
                  $qupdetapa = $dbc->query($updetapa);
                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
        

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
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

            }elseif (isset($_POST['saveAutorizar'])){
                $etapa = $_POST['etapa'];
                $idtarj_med = $_POST['idtarj_med'];

              
                  /////GUARDAR USUARIO Y FECHA DE AUTORIZACION
                 if($etapa == '7'){

                    $tabcoti= "SELECT * FROM $cat_coti_med WHERE  idtarjmed = '$idtarj_med' ";
                    $qtabcoti = $dbcot->query($tabcoti);
                      
                    while ($filpro0 = $qtabcoti->fetch(PDO::FETCH_ASSOC)) {
                        $PidCot =$filpro0['id'];
    
                    }

                    
                    $udpcot3 = "UPDATE $cat_coti_med SET userautoriza='$userLog' WHERE id='$PidCot' ";
                    $qudpcot3 = $dbcot->query($udpcot3);

                    $udpcot4 = "UPDATE $cat_coti_med SET fechautoriza='$fechahoy' WHERE id='$PidCot' ";
                    $qudpcot4 = $dbcot->query($udpcot4);
                }



                
                  /////ACTUALIZAR ETAPA Y DATOS EN TARJETA
                  $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' ";
                  $qbdpros0 = $dbc->query($bdpros0);
                    
                  while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                      $Pid0 =$filpro0['id'];
  
                  }
  
  
                  $updetapa = "UPDATE $cat_tarjetas_med SET estatus='$etapa' WHERE id='$Pid0' ";
                  $qupdetapa = $dbc->query($updetapa);
                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
        

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
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

                $tarj_med = $_POST['idtarjeta'];
                $person = $_POST['nombremed'];
                
                $Pregion0 = $_POST['Pregion0'];
                $Punidad0 = $_POST['Punidad0'];

            

                $accion = $_POST['accion'];

                $fechapro = $_POST['fechapro'];

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
             
                $valynameTask = "SELECT * FROM $tablplant WHERE  nombreco = '$nombreREsp'  ";
                $qvalynameTask = $db_assess->query($valynameTask);
                
                while ($fila = $qvalynameTask->fetch(PDO::FETCH_ASSOC)) {
            
                    $regionNAME = $fila['region'];  
                    $ucliente = $fila['unidad'];  
                    $userkask = $fila['dep']; 
                    $dirger = $fila['dirger'];  
                    $userjefe = $fila['userjefe'];  
                }

             
                if($adminrol== $radmin ){
                    $tabsave1 = "INSERT INTO $tabtaskY VALUES (NULL,'$Pregion0','$Punidad0','ADMIN','ADMIN','$yerfinpro','2','$tarj_med',
                    '$fechahoy',NULL,'$userLog','$userLog','TRATOS','$accion','$nombreREsp',
                    '$fechapro','$yerfinpro','$mesfinpro','$diafinpro',NULL,'EN CURSO',
                    NULL,NULL,NULL,NULL,NULL,'$userLog','$userkaskLY','lead','SI' )";
                }else{
                    $tabsave1 = "INSERT INTO $tabtaskY VALUES (NULL,'$Pregion0','$Punidad0','$dirger','$userjefe','$yerfinpro','2','$tarj_med',
                    '$fechahoy',NULL,'$userLog','$userLog','TRATOS','$accion','$nombreREsp',
                    '$fechapro','$yerfinpro','$mesfinpro','$diafinpro',NULL,'EN CURSO',
                    NULL,NULL,NULL,NULL,NULL,'$userLog','$userkaskLY','lead','SI' )";
                }
               

  

                $qtabsave1 = $db_task->query($tabsave1);




                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $tarj_med; ?>" name="Pid">

                    
                            
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

                $Pid0 = $_POST['idtarjeta'];
                $person = $_POST['nombremed'];
                
                $Pregion0 = $_POST['Pregion0'];
                $Punidad0 = $_POST['Punidad0'];

                $comment = $_POST['comment'];
        
                $fechapro = $_POST['fechapro'];

                $fechc= new DateTime( $fechapro );
                $fechapro = $fechc->format('Y-m-d');
                $mesfinpro = $fechc->format('m');
                $yerfinpro = $fechc->format('y');
                $diafinpro = $fechc->format('d');


                $fechahoy = date('Y-m-d');

        

                $tabco = "INSERT INTO $hist_coment VALUES (NULL,'$Pregion0','$Punidad0','2','$Pid0',
                '$comment','$fechapro','$diafinpro','$mesfinpro','$yerfinpro','$userLog','$fechahoy',NULL,NULL,'1' )";

                $qtabco = $db_leadplus->query($tabco);




                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

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
            }elseif(isset($_POST['delco'])){

                $idcoment = $_POST['idcoment'];
                $estatus = $_POST['estatus'];


          
                if(empty($estatus)){

                }else{

                    $updestat = "UPDATE $hist_coment SET activo='0' WHERE id='$idcoment' ";
                    $qupdestat = $db_leadplus->query($updestat);
                }


                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

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

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                            
                            <img src="../../img/suite/regresar2.png" id="imagRegresar">

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
            }
            
            
        ?>
    
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>