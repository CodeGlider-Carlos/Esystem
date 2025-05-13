<?php
 session_start();
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php'; 
 if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../index.php");
}



$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];

$tipotask = isset($_POST['tipotask']) ? $_POST['tipotask'] : false;    
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ TASK</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/idextask.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/idextask.css">
    <link rel="stylesheet" type="text/css" href="css/asignarcal.css">
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

          
        <img  src="img/asignar2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>ASIGNACION</strong></div>

            <form action="indexTask.php" >

                <input type="submit" class="submit" id="slognav1">

            </form>

          
        </div>
     

        <div class="bakBoton" id="bakBoton2">

            <img  src="img/ICONOS/calificar.png" class="lognavCal">
            <div id="txt2" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="evaluar.php" >

                <input type="submit" class="submit" id="slognav2">

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../../img/suite/dash.png" class="lognav">
            <div id="txt3" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="DASH/dash_task.php" >

                <input type="submit" class="submit" id="slognav3" >

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../../img/suite/print.png" class="lognav">
            <div id="txt4" class="txttx"><strong>IMPRESIONES</strong></div>

            <form action="print_task.php" >

                <input type="submit" class="submit" id="slognav4" >

            </form>

        </div>

        <form action="../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

        <div id="backUser">

            <img id="lognav0" src="../../img/apps/apps/eztask.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">
        
 
            <input type="image" src="../../img/ICONOS/recarga2.svg" id="reloadIcon" onclick="location.reload();">


           <?php
           
                if(isset($_POST['svaeTask'])){


                    $ucliente = isset($_POST['ucliente']) ? $_POST['ucliente'] : false;    
                    $year = isset($_POST['year']) ? $_POST['year'] : false;    
                    $periodo = isset($_POST['periodo']) ? $_POST['periodo'] : false;    
                    $tipotask = isset($_POST['tipotask']) ? $_POST['tipotask'] : false;   
                    $nombreMin = isset($_POST['nombre']) ? $_POST['nombre'] : false;   

                    if($tipotask == 'PROY'){
                        $idproy = isset($_POST['idproy']) ? $_POST['idproy'] : false;  
                    }
                    $ejercicio = date('y');  
                    


                    $fechahoy = date('Y-m-d');
                    $periodo = date('m');               
                   
                
                
                    ////variables para datos de TASK 1//////
                    foreach ($_POST['id_task'] as $idsave) {

                        $asigna = isset($_POST['asigna'][$idsave]) ? $_POST['asigna'][$idsave] : false;
                        $qasigna = (string) ($asigna);

                        $verificador = isset($_POST['verificador'][$idsave]) ? $_POST['verificador'][$idsave] : false;
                        $qverificador = (string) ($verificador);


                        $enfoque = isset($_POST['enfoque'][$idsave]) ? $_POST['enfoque'][$idsave] : false;
                        $qenfoque = (string) ($enfoque);

                        $tarea = isset($_POST['tarea'][$idsave]) ? $_POST['tarea'][$idsave] : false;
                        $qtarea = (string) ($tarea);

                        $resptask = isset($_POST['resptarea'][$idsave]) ? $_POST['resptarea'][$idsave] : false;
                        $qresptask = (string) ($resptask);

                    
                        

                        $obstask = isset($_POST['obstask'][$idsave]) ? $_POST['obstask'][$idsave] : false;
                        $qobstask = (string) ($obstask);

                        $fechaco = isset($_POST['fechaco'][$idsave]) ? $_POST['fechaco'][$idsave] : false;
                        $qfechaco = (string) ($fechaco);

                        $fechc= new DateTime( $qfechaco );
                        $fechapro = $fechc->format('Y-m-d');
                        $mesfinpro = $fechc->format('m');
                        $yerfinpro = $fechc->format('y');
                        $diafinpro = $fechc->format('d');



                    
                  
                        $valyuser = "SELECT * FROM $sresuall WHERE  nombre = '$qresptask' ";
                        $qvalyuser = $db_users->query($valyuser);
                        
                        while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
                    
                            $userkaskLY = $fila['usuario'];  
                            $nombreREsp = $fila['nombre'];  
                            $unidadU = $fila['unidad'];  
                            $acronu = $fila['acronu']; 

                          

                            $tavcli = "SELECT * FROM $clirisk WHERE  acronu = '$acronu' AND  ver = 'SI' ";
                            $qtavcli = $db_users->query($tavcli);
                            
                            while ($fila = $qtavcli->fetch(PDO::FETCH_ASSOC)) {
                        
                                $acroCLY = $fila['acronu'];  

                            
                                echo $acroCLY;

                                if($acronu == $acroCLY){

                                    
                                $valynameTask = "SELECT * FROM $sresuall WHERE  nombre = '$nombreREsp' AND acronu = '$acroCLY' ";
                                $qvalynameTask = $db_users->query($valynameTask);
                                
                                while ($fila = $qvalynameTask->fetch(PDO::FETCH_ASSOC)) {
                            
                                    $regionNAME = $fila['acroregion'];  
                                    $ucliente = $fila['acronu'];  
                                    $userkask = $fila['usuario']; 
                                    $dirger = $fila['dirger'];  
                                    $userjefe = $fila['userjefe'];  
                                    
                                
                    
                            
                    
                                    $fechahoy = date('Y-m-d');
                    
                            
                        
                                    if(!empty($tarea) &&  !empty($resptask)  && !empty($fechaco)  ){

                                    
                                        $tabsave1a = "INSERT INTO $task_Name VALUES (NULL,'$regionNAME','$ucliente','$yerfinpro','$mesfinpro','$tipotask','$nombreMin',
                                        '$userLog','$fechahoy' )";
                            
                                            $qtabsave1a = $db_task->query($tabsave1a);


                                            $idname = "SELECT * FROM $task_Name WHERE  nombre = '$nombreMin' ";
                                            $qidname = $db_task->query($idname);
                                            
                                            while ($fila = $qidname->fetch(PDO::FETCH_ASSOC)) {
                                        
                                                $nombreMinNAME = $fila['nombre'];  
                                                $idnameNAMe = $fila['id'];  

                                            }
                                        

                                        
                                    
                                            $tabsave1 = "INSERT INTO $tabtaskY VALUES (NULL,'$regionNAME','$ucliente','$dirger','$userjefe','$yerfinpro','$tipotask','$idnameNAMe',
                                            '$fechahoy',NULL,'$qasigna','$qverificador','$qenfoque','$qtarea','$qresptask',
                                            '$fechapro','$yerfinpro','$mesfinpro','$diafinpro','$qobstask','EN CURSO',
                                            NULL,NULL,NULL,NULL,NULL,'$userLog','$userkaskLY','task','SI',NULL,NULL )";
                            
                                            $qtabsave1 = $db_task->query($tabsave1);
                                        

                                    
                

                                    }

                                }
                            }
                            

                        }


                    }


                }

                if($tipotask == 'PROY'){

                    ?>
                        <form method="POST" action="index_proy.php" id="backregresar">

                            <div id="backbackRegre">

                                
                                <img src="img/ICONOS/regresar2.png" id="imagRegresar">

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

                }else{
                    ?>
                        <form method="POST" action="indexTask.php" id="backregresar">

                            <div id="backbackRegre">

                                
                                <img src="img/ICONOS/regresar2.png" id="imagRegresar">

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
                }
                    ?>



                   

                <?php
                }elseif(isset($_POST['updateTask'])){

                    $ucliente = isset($_POST['ucliente']) ? $_POST['ucliente'] : false;    
                    $year = isset($_POST['year']) ? $_POST['year'] : false;    
                    $periodo = isset($_POST['periodo']) ? $_POST['periodo'] : false;    
                    $tipotask = isset($_POST['tipotask']) ? $_POST['tipotask'] : false;    
                    



                    $ejercicio = date('y');  
                    


                    $fechahoy = date('Y-m-d');
                    $periodo = date('m');               
                
                       
                    foreach ($_POST['idUpdate'] as $idtask) {
                        
                        $idUpdate = isset($_POST['idUpdate'][$idtask]) ? $_POST['idUpdate'][$idtask] : false;
                        $qidUpdate = (string)($idUpdate);

                        $idy = isset($_POST['idy'][$idtask]) ? $_POST['idy'][$idtask] : false;
                        $qidy = (string)($idy);
                       
                        $editESTAT = isset($_POST['estatusUpdate'][$idtask]) ? $_POST['estatusUpdate'][$idtask] : false;
                        $qeditESTAT = (string)($editESTAT);
                       
                        
                        $fpg1 = isset($_POST['fechacumpleUpdate'][$idtask]) ? $_POST['fechacumpleUpdate'][$idtask] : false;                    
                        $fech1 = new DateTime( $fpg1 );
                        $fechaUprisk = $fech1->format('Y-m-d');
                        
                        $editOBS = isset($_POST['obscUpdate'][$idtask]) ? $_POST['obscUpdate'][$idtask] : false;
                        $qeditOBS = (string)($editOBS);

                        $resptask = isset($_POST['respta'][$idtask]) ? $_POST['respta'][$idtask] : false;
                        $qresptask = (string)($resptask);





                        $regionUn = isset($_POST['regionUn'][$idtask]) ? $_POST['regionUn'][$idtask] : false;
                        $qregionUn = (string)($regionUn);

                        $unidadU = isset($_POST['unidadU'][$idtask]) ? $_POST['unidadU'][$idtask] : false;
                        $qunidadU = (string)($unidadU);

                        $userjefe = isset($_POST['userjefe'][$idtask]) ? $_POST['userjefe'][$idtask] : false;
                        $quserjefe = (string)($userjefe);

                        $dep = isset($_POST['dep'][$idtask]) ? $_POST['dep'][$idtask] : false;
                        $qdep = (string)($dep);

                        $dirger = isset($_POST['dirger'][$idtask]) ? $_POST['dirger'][$idtask] : false;
                        $qdirger = (string)($dirger);


                        $fichero = isset($_POST['fichero'][$idtask]) ? $_POST['fichero'][$idtask] : false;
                        $Qfichero = (string)($fichero);

                        $idy = isset($_POST['idy'][$idtask]) ? $_POST['idy'][$idtask] : false;
                        $qidy = (string)($idy);
                        

                        $checkbox = isset($_POST['checkbox'][$idtask]) ? $_POST['checkbox'][$idtask] : false;
                        $qcheckbox = (string)($checkbox);
                        
                        $qupriskS = '';
                        $qsaverisk = '';

                            if (!empty($editESTAT)) {

                                if($editESTAT == 'ELIMINAR' OR $editESTAT == 'CANCELADA' OR $editESTAT == 'CANCELADA' ){

                                    $actualizarTask1 = "UPDATE $tabtaskY SET activo='NO' WHERE id='$idtask' ";
                                    $ejecutarupd1 = $db_task->query($actualizarTask1);
                
                            
                                    $ejecutarupd2 = '' ;
                                    $ejecutarupd3 = '' ;
                                }else{

                                    $actualizarTask1 = "UPDATE $tabtaskY SET estatus='$qeditESTAT' WHERE id='$idtask' ";
                                    $ejecutarupd1 = $db_task->query($actualizarTask1);
                
                            
                                
                                    if($editESTAT == 'EN_FECHA'){
                                            

                                            $insertarR = "INSERT INTO $regllas VALUES (NULL,'$ejercicio','$qregionUn','$qunidadU','$fechaUprisk','$periodo','r8','GLD','$userLog',
                                            NULL,NULL, NULL,NULL,'$qdirger','$quserjefe','$qdep','$qresptask','ENFXGLD11','F73GLD','F73GLD_TAREAS NO CUMPLIDAS','NO',
                                            NULL, NULL,NULL,NULL,'$qeditOBS', NULL, NULL, NULL, NULL,1)";

                                            $qsaverisk = $db_risk->query($insertarR);
                                    }elseif($editESTAT == 'NO_CUMPLIDA'){
                                            $insertarR = "INSERT INTO $regllas VALUES (NULL,'$ejercicio','$qregionUn','$qunidadU','$fechaUprisk','$periodo','r8','GLD','$userLog',
                                            NULL,NULL, NULL,NULL,'$qdirger','$quserjefe','$qdep','$qresptask','ENFXGLD11','F73GLD','F73GLD_TAREAS NO CUMPLIDAS','SI',
                                            NULL, 0.357142857,NULL,1.785714286,'$qeditOBS', NULL, NULL, NULL, NULL,1)";

                                            $qsaverisk = $db_risk->query($insertarR);
                                    }elseif($editESTAT == 'DESPUES_DE_FECHA'){
                                            $insertarR = "INSERT INTO $regllas VALUES (NULL,'$ejercicio','$qregionUn','$qunidadU','$fechaUprisk','$periodo','r8','GLD','$userLog',
                                            NULL,NULL, NULL,NULL,'$qdirger','$quserjefe','$qdep','$qresptask','ENFXGLD11','F74GLD','F74GLD_TAREAS CUMPLIDAS  A DESTIEMPO','SI',
                                            NULL, 0.357142857,NULL,1.785714286,'$qeditOBS', NULL, NULL, NULL, NULL,1)";

                                            $qsaverisk = $db_risk->query($insertarR);
                                    }

                                }
                            
                            }


                            
                                
                            if (!empty($fpg1)) {
                                $actualizarTask2 = "UPDATE $tabtaskY SET fechacumple = '$fechaUprisk' WHERE id='$idtask' ";                  
                                $ejecutarupd2 = $db_task->query($actualizarTask2);

                                $ejecutarupd1 = '' ;
                                $ejecutarupd3 = '' ;
                            }

                            if (!empty($editOBS)) {
                                $actualizarTask3 = "UPDATE $tabtaskY SET observacionescumple='$editOBS' WHERE id='$idtask' ";                  
                                $ejecutarupd3 = $db_task->query($actualizarTask3);

                        
                                $ejecutarupd1 = '' ;
                                $ejecutarupd2 = '' ;
                            }

                           
                        
    
                    

                    }

                
                  
                    if($tipotask == 'PROY'){
                        ?>
                            <form method="POST" action="index_proy.php" id="backregresar">

                                <div id="backbackRegre">

                                    
                                    <img src="img/ICONOS/regresar2.png" id="imagRegresar">

                                    <input type="submit" name="subback" id="subback">

                                    <?php


                                    if (!empty($ejecutarupd1) OR !empty($qsavedoc)){

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
                    }else{
                        ?>
                            <form method="POST" action="evaluar.php" id="backregresar">

                                <div id="backbackRegre">

                                    
                                    <img src="img/ICONOS/regresar2.png" id="imagRegresar">

                                    <input type="submit" name="subback" id="subback">

                                    <?php


                                    if (!empty($ejecutarupd1) OR !empty($qsavedoc) ){

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

                  

                <?php
                }elseif(isset($_POST['altaproy'])){


                    $region = isset($_POST['region']) ? $_POST['region'] : false;                      
                    $ucliente = isset($_POST['ucliente']) ? $_POST['ucliente'] : false;  
         

             

                    $tipoproy = isset($_POST['tipoproy']) ? $_POST['tipoproy'] : false; 
                    $nombreproy = isset($_POST['nombreproy']) ? $_POST['nombreproy'] : false;   
                    $lider = isset($_POST['lider']) ? $_POST['lider'] : false;  
                    $funcional = isset($_POST['funcional']) ? $_POST['funcional'] : false;  
                 
                    $obstask = isset($_POST['obstask']) ? $_POST['obstask'] : false;  


                    
                    $fechaini = isset($_POST['fechaini']) ? $_POST['fechaini'] : false;    
                 
              

   
                    $fechafin = isset($_POST['fechafin']) ? $_POST['fechafin'] : false;    
                 


                    $fechahoy = date('Y-m-d');


                        $tabsave1 = "INSERT INTO $task_proy VALUES (NULL,'$region','$ucliente','$tipoproy','$nombreproy','$lider','$funcional','$obstask',
                        '$fechaini','$fechafin','$userLog','$fechahoy','1' )";
        
                    $qtabsave1 = $db_task->query($tabsave1);

                       
                    ?>

                    <form method="POST" action="index_proy.php" id="backregresar">

                        <div id="backbackRegre">

                            
                            <img src="img/ICONOS/regresar2.png" id="imagRegresar">

                            <input type="submit" name="subback" id="subback">

                            <?php


                            if (!empty($qtabsave1)  ){

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

    </section>




</body>

</html>