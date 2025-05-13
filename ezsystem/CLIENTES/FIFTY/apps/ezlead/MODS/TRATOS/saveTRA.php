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
    <title>CRM_PROSPECTOS</title>
    
    <link rel="icon" type="favicon/x-icon" href="deodi50d/img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/tratos.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/tratos.css">
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


            if (isset($_POST['savemod'])){

                $etapa = $_POST['etapa'];
                $Pid0 = $_POST['Pid0'];
                $person = $_POST['person'];

                $updetapa = "UPDATE $cat_tarjetas_med SET estatus='$etapa' WHERE id='$Pid0' ";
                $qupdetapa = $dbc->query($updetapa);

                ?>

                    <form method="POST" action="../../suitecrm.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

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

                $tarj_med = $_POST['Pid0'];
                $person = $_POST['person'];
                
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
                    $tabsave1 = "INSERT INTO $tabtaskY VALUES (NULL,'$Pregion0','$Punidad0','ADMIN','ADMIN','$yerfinpro','1','$tarj_med',
                    '$fechahoy',NULL,'$userLog','$userLog','TRATOS','$accion','$nombreREsp',
                    '$fechapro','$yerfinpro','$mesfinpro','$diafinpro',NULL,'EN CURSO',
                    NULL,NULL,NULL,NULL,NULL,'$userLog','$userkaskLY','lead','SI' )";
                }else{
                    $tabsave1 = "INSERT INTO $tabtaskY VALUES (NULL,'$Pregion0','$Punidad0','$dirger','$userjefe','$yerfinpro','1','$tarj_med',
                    '$fechahoy',NULL,'$userLog','$userLog','TRATOS','$accion','$nombreREsp',
                    '$fechapro','$yerfinpro','$mesfinpro','$diafinpro',NULL,'EN CURSO',
                    NULL,NULL,NULL,NULL,NULL,'$userLog','$userkaskLY','lead','SI' )";
                }
               

  

                $qtabsave1 = $db_task->query($tabsave1);




                ?>

                    <form method="POST" action="tratos.php" id="backregresar">

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

                $Pid0 = $_POST['Pid0'];
                $person = $_POST['person'];
                
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

        

                $tabco = "INSERT INTO $hist_coment VALUES (NULL,'$Pregion0','$Punidad0','1','$Pid0',
                '$comment','$fechapro','$diafinpro','$mesfinpro','$yerfinpro','$userLog','$fechahoy',NULL,NULL,'1' )";

                $qtabco = $db_leadplus->query($tabco);




                ?>

                    <form method="POST" action="tratos.php" id="backregresar">

                        <div id="backbackRegre">

                    
                            <input hidden type="text" value="<?php echo $person; ?>" name="person">

                            <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid">

                    
                            
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
            }

        ?>
    
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>