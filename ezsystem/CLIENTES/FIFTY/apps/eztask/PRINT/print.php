<?php
 session_start();
 require_once '../../../varSQL/bd.php'; 
 require_once '../../../varSQL/var.php'; 
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

$unidadcli = '';
$periodo = '';


$fechahoy = date('Y-m-d');

$fechc= new DateTime( $fechahoy );
$fechaHy = $fechc->format('d-m-Y');


$yearho = $_POST['year'];
$periodo = $_POST['periodo'];
$region = $_POST['region'];
$unidadcli = $_POST['unidadSel'];
$tipotask = $_POST['tipotask'];
$usertask = $_POST['resptarea'];



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ TASK</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="../js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="../js/idextask.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/idextask.css">
    <link rel="stylesheet" type="text/css" href="../css/asignarcal.css">
    <link rel="stylesheet" type="text/css" href="css/dash_print.css">
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


      <div id="taskPerson">

                <table id="tabla_task">

                    <tr id="columnasTa">
                     
                        <th class="nombreT">NOMBRE</th>
                      
                        <th>TAREAS</th>                       
                        <th>CUMPLIDAS</th>
                        <th>EN CURSO</th>
                        <th>RESULTADO</th>
                        <th>UNIDAD</th>
                        
                    </tr>

                        <?php



                            $valyuser = "SELECT * FROM $sresuall ";
                            $qvalyuser = $db_users->query($valyuser);

                            while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {

                                $userkaskLY = $fila['usuario']; 
                                $nombre = $fila['nombre']; 
                                $unidadUs = $fila['acronu'];      


                                $valyUnid = "SELECT * FROM $clirisk WHERE ver = 'SI'";
                                $qvalyUnid = $db_users->query($valyUnid);
    
                                while ($fila = $qvalyUnid->fetch(PDO::FETCH_ASSOC)) {
    
                                    $acronuLY = $fila['acronu']; 

                             

                                if($unidadUs == $acronuLY){

                                
                                    if($adminrol == $radmin){

                                        if(empty($usertask)){

                                            $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                                            $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY'  AND estatus LIKE '%EN_CURSO%' AND activo = 'SI'  ")->fetch());
                                            $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY'  AND estatus LIKE '%CANCELADA%' AND activo = 'SI'  ")->fetch());
                                            $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY'   AND estatus LIKE '%REASIGNADA%' AND activo = 'SI'  ")->fetch());
                                        
                                        
                                        
                                            $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'   AND activo = 'SI'   ")->fetch());
                            

                                        }else{

                                            $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND usertask = '$usertask'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                                            $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND usertask = '$usertask'  AND estatus LIKE '%EN_CURSO%' AND activo = 'SI'  ")->fetch());
                                            $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND usertask = '$usertask'  AND estatus LIKE '%CANCELADA%' AND activo = 'SI'  ")->fetch());
                                            $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND usertask = '$usertask'  AND estatus LIKE '%REASIGNADA%' AND activo = 'SI'  ")->fetch());
                                        
                                        
                                        
                                            $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND usertask = '$usertask'  AND activo = 'SI'   ")->fetch());
                            
                                        }
                                        
                        
                                    }elseif($adminrol == $radreg){

                                    
                                        if(empty($usertask)){
                                            $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') ")->fetch());
                                            $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                            $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                            $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                        
                                        
                                        
                                            $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                            
                                        }else{
                                            $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND usertask = '$usertask'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') ")->fetch());
                                            $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND usertask = '$usertask' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                            $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND usertask = '$usertask' AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                            $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND usertask = '$usertask' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                        
                                        
                                        
                                            $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND usertask = '$usertask' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                            
                                        }
                                        
                                       
                        
                                    }else{

                                        
                        

                                        if(empty($usertask)){
                                                                   

                                      
                                            $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                                            $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                                            $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                                            $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND usertask = '$userLog'   ")->fetch());
                                        
                                        
                                        
                                            $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND activo = 'SI' AND usertask = '$userLog'   ")->fetch());
                            
                                        
                                        }else{

                                    
                                            $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND usertask = '$usertask' AND activo = 'SI'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )     ")->fetch());
                                            $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'   AND usertask = '$usertask' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' ")->fetch());
                                            $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND usertask = '$userkaskLY'  AND usertask = '$usertask' AND estatus LIKE '%CANCELADA%' AND activo = 'SI'   ")->fetch());
                                            $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'   AND usertask = '$usertask' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI'   ")->fetch());
                                        
                                        
                                        
                                            $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND usertask = '$usertask' AND activo = 'SI'   ")->fetch()); 
                                        
                                        }
                                      

                                    } 
                            

                                    $cumplidasTask = $taskCumplidas+$taskEnCurso;

                                    $totalTask = $taskTotal-$taskCanceladas-$taskReasignadas;

                                    if($totalTask>0){


                                        $porce1 = ($cumplidasTask*100)/$totalTask;                           

                                        $porceTex1 = '%'.number_format($porce1,2);

                                        ?>

                                            <tr>
                                              
                                                <td class=" nombreT"><?php echo $nombre;?></td>
                                               
                                                
                                                <td class="center"><?php echo $totalTask;?></td>
                                               
                                                <td class="center"><?php echo $taskCumplidas;?></td>
                                                <td class="center"><?php echo $taskEnCurso;?></td>
                                               
                                                    <?php
                                                    
                                                        if($porce1 < 50){
                                                            ?>
                                                                 <td class="center colorBlack"><strong><?php echo $porceTex1;?>  </strong></td>
                                                            <?php
                                                        }elseif($porce1 >=50 AND $porce1 <70 ){
                                                            ?>
                                                                <td class="center colorRed"><strong><?php echo $porceTex1;?>  </strong></td>
                                                        <?php
                                                        }elseif($porce1 >=70 AND $porce1 <85 ){
                                                            ?>
                                                                <td class="center colorYell"><strong><?php echo $porceTex1;?>  </strong></td>
                                                        <?php
                                                        }elseif($porce1 >=85 AND $porce1 <98 ){
                                                            ?>
                                                                <td class="center colorGreen"><strong><?php echo $porceTex1;?>  </strong></td>
                                                        <?php
                                                        }elseif($porce1 >=98 ){
                                                            ?>
                                                                <td class="center colorBlue"><strong><?php echo $porceTex1;?> </strong></td>
                                                        <?php
                                                        }
                                                    
                                                    
                                                    ?>

                                                <td class="center"><?php echo $unidadUs;?></td>
                                               
                                            </tr>
                                            <tr>
                                                <td colspan="6"><div class="linTask"></div></td>
                                            </tr>
                                           
        
        
                                        <?php

                                    }else{
                                        $porceTex1 = 'SD';
                                    }
                                

                                }
                            }
                                
                                

                            }
                        ?>
                </table>



                <?php


                ?>
            </div>



</body>

</html>