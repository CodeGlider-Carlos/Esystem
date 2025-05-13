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

$yearho = '';


if (isset($_POST['dash'])){


    $unidadcli = $_POST['unidadcli'];
}
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
    <link rel="stylesheet" type="text/css" href="css/dash_task.css">
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

            <img  src="../img/iconos/asignar.png" class="lognav">
            <div id="txt1" class="txttx"><strong>TAREAS</strong></div>

            <form action="../indexTask.php" >

                <input type="submit" class="submit" id="slognav1">

            </form>

          
        </div>

            
        <div class="bakBoton" id="bakBoton2">

        <img  src="../img/ICONOS/calificar.png" class="lognavCal">
        <div id="txt2" class="txttx"><strong>SEGUIMIENTO</strong></div>

        <form action="../evaluar.php" >

            <input type="submit" class="submit" id="slognav2">

        </form>

        </div>


        <div class="bakBoton">

            <img  src="../../../img/suite/dash.png" class="lognav">
            <div id="txt3" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="dash_task.php" >

                <input type="submit" class="submit" id="slognav3" >

            </form>
            <div class="line1"></div>
        </div>

        <div class="bakBoton">

            <img  src="../../../img/suite/print.png" class="lognav">
            <div id="txt4" class="txttx"><strong>IMPRIMIR</strong></div>

            <form action="../print_task.php" >

                <input type="submit" class="submit" id="slognav4" >

            </form>

        </div>

        <form action="../../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

        <div id="backUser">

            <img id="lognav0" src="../../../img/apps/apps/eztask.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">

        <section id="backtask">

           
            <div id="calculos">

                <?php
            

                    if($adminrol == $radmin){

                        $AtaskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                        $AtaskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND activo = 'SI'  ")->fetch());
        

                        
                        $AcumplidasTask = $AtaskCumplidas+$AtaskEnCurso-$AtaskCanceladas-$AtaskReasignadas;
            
                        $AtotalTask = $AtaskTotal-$AtaskCanceladas-$AtaskReasignadas;

                        $porce = (($AcumplidasTask)*100)/ $AtotalTask;
                        $porceTex = '%'.number_format($porce,2);

                        $AtaskCumplidasM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM1= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'  AND activo = 'SI' ")->fetch());
        
                        $allcumpleMes1 = $AtaskCumplidasM1+$AtaskEnCursoM1;
                        $allmes1 = $AtaskTotalM1-$AtaskCanceladasM1-$AtaskReasignadasM1;

                        $AtaskCumplidasM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )  AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM2= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'  AND activo = 'SI'  ")->fetch());
                        
                        $allcumpleMes2 = $AtaskCumplidasM2+$AtaskEnCursoM2;
                        $allmes2 = $AtaskTotalM2-$AtaskCanceladasM2-$AtaskReasignadasM2;

        
                        $AtaskCumplidasM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM3= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'  AND activo = 'SI'  ")->fetch());
        
                        $allcumpleMes3 = $AtaskCumplidasM3+$AtaskEnCursoM3;
                        $allmes3 = $AtaskTotalM3-$AtaskCanceladasM3-$AtaskReasignadasM3;

                        $AtaskCumplidasM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM4= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'  AND activo = 'SI'  ")->fetch());
                        
                        $allcumpleMes4 = $AtaskCumplidasM4+$AtaskEnCursoM4;
                        $allmes4 = $AtaskTotalM4-$AtaskCanceladasM4-$AtaskReasignadasM4;

                        $AtaskCumplidasM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM5= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'  AND activo = 'SI' ")->fetch());
        
                        $allcumpleMes5 = $AtaskCumplidasM5+$AtaskEnCursoM5;
                        $allmes5 = $AtaskTotalM5-$AtaskCanceladasM5-$AtaskReasignadasM5;

                        $AtaskCumplidasM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )  AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM6= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'  AND activo = 'SI'  ")->fetch());
                        
                        $allcumpleMes6 = $AtaskCumplidasM6+$AtaskEnCursoM6;
                        $allmes6 = $AtaskTotalM6-$AtaskCanceladasM6-$AtaskReasignadasM6;

        
                        $AtaskCumplidasM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )  AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM7= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND estatus LIKE '%REASIGNADA%' AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'  AND activo = 'SI'  ")->fetch());
        
                        $allcumpleMes7 = $AtaskCumplidasM7+$AtaskEnCursoM7;
                        $allmes7 = $AtaskTotalM7-$AtaskCanceladasM7-$AtaskReasignadasM7;

                        $AtaskCumplidasM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM8= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'  AND activo = 'SI'  ")->fetch());
        
                        $allcumpleMes8 = $AtaskCumplidasM8+$AtaskEnCursoM8;
                        $allmes8 = $AtaskTotalM8-$AtaskCanceladasM8-$AtaskReasignadasM8;

                        $AtaskCumplidasM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM9= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'  AND activo = 'SI'  ")->fetch());
                    
                        $allcumpleMes9 = $AtaskCumplidasM9+$AtaskEnCursoM9;
                        $allmes9 = $AtaskTotalM9-$AtaskCanceladasM9-$AtaskReasignadasM9;

        
                        $AtaskCumplidasM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM10= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'  AND activo = 'SI'  ")->fetch());
        
                        $allcumpleMes10 = $AtaskCumplidasM10+$AtaskEnCursoM10;
                        $allmes10 = $AtaskTotalM10-$AtaskCanceladasM10-$AtaskReasignadasM10;

                        $AtaskCumplidasM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND estatus LIKE '%CANCELADA%' AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM11= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'  AND activo = 'SI'  ")->fetch());
                        
                        $allcumpleMes11 = $AtaskCumplidasM11+$AtaskEnCursoM11;
                        $allmes11 = $AtaskTotalM11-$AtaskCanceladasM11-$AtaskReasignadasM11;

        
                        $AtaskCumplidasM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM12= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'  AND activo = 'SI'  ")->fetch());
        
                        $allcumpleMes12 = $AtaskCumplidasM12+$AtaskEnCursoM12;
                        $allmes12 = $AtaskTotalM12-$AtaskCanceladasM12-$AtaskReasignadasM12;
                    
                    }elseif($adminrol == $radreg){

                    
                        $AtaskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        

                        
                        $AcumplidasTask = $AtaskCumplidas+$AtaskEnCurso;
            
                        $AtotalTask = $AtaskTotal-$AtaskCanceladas-$AtaskReasignadas;

                        $porce = (($AcumplidasTask)*100)/ $AtotalTask;
                        $porceTex = '%'.number_format($porce,2);


                        $AtaskCumplidasM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM1= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes1 = $AtaskCumplidasM1+$AtaskEnCursoM1;
                        $allmes1 = $AtaskTotalM1-$AtaskCanceladasM1-$AtaskReasignadasM1;

                        $AtaskCumplidasM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM2= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
                        
                        $allcumpleMes2 = $AtaskCumplidasM2+$AtaskEnCursoM2;
                        $allmes2 = $AtaskTotalM2-$AtaskCanceladasM2-$AtaskReasignadasM2;

        
                        $AtaskCumplidasM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM3= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes3 = $AtaskCumplidasM3+$AtaskEnCursoM3;
                        $allmes3 = $AtaskTotalM3-$AtaskCanceladasM3-$AtaskReasignadasM3;

                        $AtaskCumplidasM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM4= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
                        
                        $allcumpleMes4 = $AtaskCumplidasM4+$AtaskEnCursoM4;
                        $allmes4 = $AtaskTotalM4-$AtaskCanceladasM4-$AtaskReasignadasM4;

                        $AtaskCumplidasM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM5= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes5 = $AtaskCumplidasM5+$AtaskEnCursoM5;
                        $allmes5 = $AtaskTotalM5-$AtaskCanceladasM5-$AtaskReasignadasM5;

                        $AtaskCumplidasM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM6= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
                        
                        $allcumpleMes6 = $AtaskCumplidasM6+$AtaskEnCursoM6;
                        $allmes6 = $AtaskTotalM6-$AtaskCanceladasM6-$AtaskReasignadasM6;

        
                        $AtaskCumplidasM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM7= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes7 = $AtaskCumplidasM7+$AtaskEnCursoM7;
                        $allmes7 = $AtaskTotalM7-$AtaskCanceladasM7-$AtaskReasignadasM7;

                        $AtaskCumplidasM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM8= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes8 = $AtaskCumplidasM8+$AtaskEnCursoM8;
                        $allmes8 = $AtaskTotalM8-$AtaskCanceladasM8-$AtaskReasignadasM8;

                        $AtaskCumplidasM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM9= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
                    
                        $allcumpleMes9 = $AtaskCumplidasM9+$AtaskEnCursoM9;
                        $allmes9 = $AtaskTotalM9-$AtaskCanceladasM9-$AtaskReasignadasM9;

        
                        $AtaskCumplidasM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM10= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes10 = $AtaskCumplidasM10+$AtaskEnCursoM10;
                        $allmes10 = $AtaskTotalM10-$AtaskCanceladasM10-$AtaskReasignadasM10;

                        $AtaskCumplidasM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM11= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
                        
                        $allcumpleMes11 = $AtaskCumplidasM11+$AtaskEnCursoM11;
                        $allmes11 = $AtaskTotalM11-$AtaskCanceladasM11-$AtaskReasignadasM11;

        
                        $AtaskCumplidasM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND  region = '$userAcroregion'   AND activo = 'SI' ")->fetch());
                        $AtaskEnCursoM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO') AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladasM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND estatus LIKE '%CANCELADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadasM12= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND estatus LIKE '%REASIGNADA%' AND region = '$userAcroregion'  AND activo = 'SI'  ")->fetch());
                        $AtaskTotalM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'  AND activo = 'SI' AND region = '$userAcroregion' ")->fetch());
        
                        $allcumpleMes12 = $AtaskCumplidasM12+$AtaskEnCursoM12;
                        $allmes12 = $AtaskTotalM12-$AtaskCanceladasM12-$AtaskReasignadasM12;



                    }else{
                    


                        $AtaskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND usertask = '$userLog'  AND activo = 'SI' ")->fetch());
                        $AtaskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_CURSO%' AND usertask = '$userLog'   AND activo = 'SI'  ")->fetch());
                        $AtaskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%CANCELADA%' AND usertask = '$userLog'   AND activo = 'SI'  ")->fetch());
                        $AtaskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%REASIGNADA%' AND usertask = '$userLog'   AND activo = 'SI'  ")->fetch());
                    
                    
                    
                        $AtaskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        

                        
                        $AcumplidasTask = $AtaskCumplidas+$AtaskEnCurso-$AtaskCanceladas-$AtaskReasignadas;
            
                        $AtotalTask = $AtaskTotal-$AtaskCanceladas-$AtaskReasignadas;

                        $porce = (($AcumplidasTask)*100)/ $AtotalTask;
                        $porceTex = '%'.number_format($porce,2);


                        $AtaskCumplidasM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'   ")->fetch());
                        $AtaskCanceladasM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM1= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%01%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes1 = $AtaskCumplidasM1+$AtaskEnCursoM1;
                        $allmes1 = $AtaskTotalM1-$AtaskCanceladasM1-$AtaskReasignadasM1;

                        $AtaskCumplidasM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM2= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%02%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        
                        $allcumpleMes2 = $AtaskCumplidasM2+$AtaskEnCursoM2;
                        $allmes2 = $AtaskTotalM2-$AtaskCanceladasM2-$AtaskReasignadasM2;

        
                        $AtaskCumplidasM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM3= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%03%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes3 = $AtaskCumplidasM3+$AtaskEnCursoM3;
                        $allmes3 = $AtaskTotalM3-$AtaskCanceladasM3-$AtaskReasignadasM3;

                        $AtaskCumplidasM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' ) AND activo = 'SI'  AND usertask = '$userLog' ")->fetch());
                        $AtaskEnCursoM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM4= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM4 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%04%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        
                        $allcumpleMes4 = $AtaskCumplidasM4+$AtaskEnCursoM4;
                        $allmes4 = $AtaskTotalM4-$AtaskCanceladasM4-$AtaskReasignadasM4;

                        $AtaskCumplidasM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM5= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM5 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%05%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes5 = $AtaskCumplidasM5+$AtaskEnCursoM5;
                        $allmes5 = $AtaskTotalM5-$AtaskCanceladasM5-$AtaskReasignadasM5;

                        $AtaskCumplidasM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM6= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM6 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%06%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        
                        $allcumpleMes6 = $AtaskCumplidasM6+$AtaskEnCursoM6;
                        $allmes6 = $AtaskTotalM6-$AtaskCanceladasM6-$AtaskReasignadasM6;

        
                        $AtaskCumplidasM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM7= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'    AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM7 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%07%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes7 = $AtaskCumplidasM7+$AtaskEnCursoM7;
                        $allmes7 = $AtaskTotalM7-$AtaskCanceladasM7-$AtaskReasignadasM7;

                        $AtaskCumplidasM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM8= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI' AND usertask = '$userLog'   ")->fetch());
                        $AtaskTotalM8 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%08%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes8 = $AtaskCumplidasM8+$AtaskEnCursoM8;
                        $allmes8 = $AtaskTotalM8-$AtaskCanceladasM8-$AtaskReasignadasM8;

                        $AtaskCumplidasM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM9= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM9 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%09%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                    
                        $allcumpleMes9 = $AtaskCumplidasM9+$AtaskEnCursoM9;
                        $allmes9 = $AtaskTotalM9-$AtaskCanceladasM9-$AtaskReasignadasM9;

        
                        $AtaskCumplidasM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND estatus LIKE '%CANCELADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM10= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM10 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%10%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes10 = $AtaskCumplidasM10+$AtaskEnCursoM10;
                        $allmes10 = $AtaskTotalM10-$AtaskCanceladasM10-$AtaskReasignadasM10;

                        $AtaskCumplidasM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM11= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'    AND estatus LIKE '%REASIGNADA%'   AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM11 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%11%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        
                        $allcumpleMes11 = $AtaskCumplidasM11+$AtaskEnCursoM11;
                        $allmes11 = $AtaskTotalM11-$AtaskCanceladasM11-$AtaskReasignadasM11;

        
                        $AtaskCumplidasM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )    AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskEnCursoM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND (estatus = 'EN_CURSO' OR estatus = 'EN CURSO')  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskCanceladasM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND estatus LIKE '%CANCELADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskReasignadasM12= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'    AND estatus LIKE '%REASIGNADA%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
                        $AtaskTotalM12 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%12%'  AND activo = 'SI' AND usertask = '$userLog'  ")->fetch());
        
                        $allcumpleMes12 = $AtaskCumplidasM12+$AtaskEnCursoM12;
                        $allmes12 = $AtaskTotalM12-$AtaskCanceladasM12-$AtaskReasignadasM12;
                    }

                    
                    if($allmes1 >0){
                        $porcem1 = (($allcumpleMes1)*100)/ $allmes1;
                        $porceTexm1 = '%'.number_format($porcem1,2);
                    }else{
                        $porceTexm1 = 'SD';
                    }
                    
                    if($allmes2 >0){
                        $porcem2 = (($allcumpleMes2)*100)/ $allmes2;
                        $porceTexm2 = '%'.number_format($porcem2,2);
                    }else{
                        $porceTexm2 = 'SD';
                    }


                    
                    if($allmes3 >0){
                        $porcem3 = (($allcumpleMes3)*100)/ $allmes3;
                        $porceTexm3 = '%'.number_format($porcem3,2);
                    }else{
                        $porceTexm3 = 'SD';
                    }

                    if($allmes4 >0){
                        $porcem4 = (($allcumpleMes4)*100)/ $allmes4;
                        $porceTexm4 = '%'.number_format($porcem4,2);
                    }else{
                        $porceTexm4 = 'SD';
                    }
                
                    if($allmes5 >0){
                        $porcem5 = (($allcumpleMes5)*100)/ $allmes5;
                        $porceTexm5 = '%'.number_format($porcem5,2);
                    }else{
                        $porceTexm5 = 'SD';
                    }


                    if($allmes6 >0){
                        $porcem6 = (($allcumpleMes6)*100)/ $allmes6;
                        $porceTexm6 = '%'.number_format($porcem6,2);
                    }else{
                        $porceTexm6 = 'SD';
                    }

                    if($allmes7 >0){
                        $porcem7 =(($allcumpleMes7)*100)/ $allmes7;
                        $porceTexm7 = '%'.number_format($porcem7,2);
                    }else{
                        $porceTexm7 = 'SD';
                    }

                    if($allmes8 >0){
                        $porcem8 =(($allcumpleMes8)*100)/ $allmes8;
                        $porceTexm8 = '%'.number_format($porcem8,2);
                    }else{
                        $porceTexm8 = 'SD';
                    }

                    if($allmes9 >0){
                        $porcem9 = (($allcumpleMes9)*100)/ $allmes9;
                        $porceTexm9 = '%'.number_format($porcem9,2);
                    }else{
                        $porceTexm9 = 'SD';
                    }
                

                    if($allmes10 >0){
                        $porcem10 =(($allcumpleMes10)*100)/ $allmes10;
                        $porceTexm10 = '%'.number_format($porcem10,2);
                    }else{
                        $porceTexm10 = 'SD';
                    }

                    if($allmes11 >0){
                        $porcem11= (($allcumpleMes11)*100)/ $allmes11;
                        $porceTexm11 = '%'.number_format($porcem11,2);
                    }else{
                        $porceTexm11 = 'SD';
                    }

                    if($allmes12 >0){
                        $porcem12 = (($allcumpleMes12)*100)/ $allmes12;
                        $porceTexm12 = '%'.number_format($porcem12,2);
                    }else{
                        $porceTexm12 = 'SD';
                    }

            
                    if($porceTexm1 =='SD'){$classp1 ='porceSD';
                    }elseif($porcem1<2.5){$classp1 ='porce0';
                    }elseif($porcem1>2.5 AND $porcem1<=5){$classp1 ='porce5';
                    }elseif($porcem1>5 AND $porcem1<=10){$classp1 ='porce10';
                    }elseif($porcem1>10 AND $porcem1<=15){$classp1 ='porce15';
                    }elseif($porcem1>15 AND $porcem1<=20){$classp1 ='porce20';
                    }elseif($porcem1>20 AND $porcem1<=25){$classp1 ='porce25';
                    }elseif($porcem1>25 AND $porcem1<=30){$classp1 ='porce30';
                    }elseif($porcem1>30 AND $porcem1<=35){$classp1 ='porce35';
                    }elseif($porcem1>35 AND $porcem1<=40){$classp1 ='porce40';
                    }elseif($porcem1>40 AND $porcem1<=45){$classp1 ='porce45';
                    }elseif($porcem1>45 AND $porcem1<=50){$classp1 ='porce50';
                    }elseif($porcem1>50 AND $porcem1<=55){$classp1 ='porce55';
                    }elseif($porcem1>55 AND $porcem1<=60){$classp1 ='porce60';
                    }elseif($porcem1>60 AND $porcem1<=65){$classp1 ='porce65';
                    }elseif($porcem1>65 AND $porcem1<=70){$classp1 ='porce70';
                    }elseif($porcem1>70 AND $porcem1<=75){$classp1 ='porce75';
                    }elseif($porcem1>75 AND $porcem1<=80){$classp1 ='porce80';
                    }elseif($porcem1>80 AND $porcem1<=85){$classp1 ='porce85';
                    }elseif($porcem1>85 AND $porcem1<=90){$classp1 ='porce90';
                    }elseif($porcem1>90 AND $porcem1<=95){$classp1 ='porce95';
                    }elseif($porcem1>95 AND $porcem1<=98){$classp1 ='porce98';
                    }elseif($porcem1>98){$classp1 ='porce100';
                    }
                    
                    if($porceTexm2 =='SD'){$classp2 ='porceSD';
                    }elseif($porcem2<2.5){$classp2 ='porce0';
                    }elseif($porcem2>2.5 AND $porcem2<=5){$classp2 ='porce5';
                    }elseif($porcem2>5 AND $porcem2<=10){$classp2 ='porce10';
                    }elseif($porcem2>10 AND $porcem2<=15){$classp2 ='porce15';
                    }elseif($porcem2>15 AND $porcem2<=20){$classp2 ='porce20';
                    }elseif($porcem2>20 AND $porcem2<=25){$classp2 ='porce25';
                    }elseif($porcem2>25 AND $porcem2<=30){$classp2 ='porce30';
                    }elseif($porcem2>30 AND $porcem2<=35){$classp2 ='porce35';
                    }elseif($porcem2>35 AND $porcem2<=40){$classp2 ='porce40';
                    }elseif($porcem2>40 AND $porcem2<=45){$classp2 ='porce45';
                    }elseif($porcem2>45 AND $porcem2<=50){$classp2 ='porce50';
                    }elseif($porcem2>50 AND $porcem2<=55){$classp2 ='porce55';
                    }elseif($porcem2>55 AND $porcem2<=60){$classp2 ='porce60';
                    }elseif($porcem2>60 AND $porcem2<=65){$classp2 ='porce65';
                    }elseif($porcem2>65 AND $porcem2<=70){$classp2 ='porce70';
                    }elseif($porcem2>70 AND $porcem2<=75){$classp2 ='porce75';
                    }elseif($porcem2>75 AND $porcem2<=80){$classp2 ='porce80';
                    }elseif($porcem2>80 AND $porcem2<=85){$classp2 ='porce85';
                    }elseif($porcem2>85 AND $porcem2<=90){$classp2 ='porce90';
                    }elseif($porcem2>90 AND $porcem2<=95){$classp2 ='porce95';
                    }elseif($porcem2>95 AND $porcem2<=98){$classp2 ='porce98';
                    }elseif($porcem2>98){$classp2 ='porce100';
                    }
                    
                    
                    
                    
                    
                    if($porceTexm3 =='SD'){$classp3 ='porceSD';
                    }elseif($porcem3<2.5){$classp3 ='porce0';
                    }elseif($porcem3>2.5 AND $porcem3<=5){$classp3 ='porce5';
                    }elseif($porcem3>5 AND $porcem3<=10){$classp3 ='porce10';
                    }elseif($porcem3>10 AND $porcem3<=15){$classp3 ='porce15';
                    }elseif($porcem3>15 AND $porcem3<=20){$classp3 ='porce20';
                    }elseif($porcem3>20 AND $porcem3<=25){$classp3 ='porce25';
                    }elseif($porcem3>25 AND $porcem3<=30){$classp3 ='porce30';
                    }elseif($porcem3>30 AND $porcem3<=35){$classp3 ='porce35';
                    }elseif($porcem3>35 AND $porcem3<=40){$classp3 ='porce40';
                    }elseif($porcem3>40 AND $porcem3<=45){$classp3 ='porce45';
                    }elseif($porcem3>45 AND $porcem3<=50){$classp3 ='porce50';
                    }elseif($porcem3>50 AND $porcem3<=55){$classp3 ='porce55';
                    }elseif($porcem3>55 AND $porcem3<=60){$classp3 ='porce60';
                    }elseif($porcem3>60 AND $porcem3<=65){$classp3 ='porce65';
                    }elseif($porcem3>65 AND $porcem3<=70){$classp3 ='porce70';
                    }elseif($porcem3>70 AND $porcem3<=75){$classp3 ='porce75';
                    }elseif($porcem3>75 AND $porcem3<=80){$classp3 ='porce80';
                    }elseif($porcem3>80 AND $porcem3<=85){$classp3 ='porce85';
                    }elseif($porcem3>85 AND $porcem3<=90){$classp3 ='porce90';
                    }elseif($porcem3>90 AND $porcem3<=95){$classp3 ='porce95';
                    }elseif($porcem3>95 AND $porcem3<=98){$classp3 ='porce98';
                    }elseif($porcem3>98){$classp3 ='porce100';
                    }
                    
                    
                    if($porceTexm4 =='SD'){$classp4 ='porceSD';
                    }elseif($porcem4<2.5){$classp4 ='porce0';
                    }elseif($porcem4>2.5 AND $porcem4<=5){$classp4 ='porce5';
                    }elseif($porcem4>5 AND $porcem4<=10){$classp4 ='porce10';
                    }elseif($porcem4>10 AND $porcem4<=15){$classp4 ='porce15';
                    }elseif($porcem4>15 AND $porcem4<=20){$classp4 ='porce20';
                    }elseif($porcem4>20 AND $porcem4<=25){$classp4 ='porce25';
                    }elseif($porcem4>25 AND $porcem4<=30){$classp4 ='porce30';
                    }elseif($porcem4>30 AND $porcem4<=35){$classp4 ='porce35';
                    }elseif($porcem4>35 AND $porcem4<=40){$classp4 ='porce40';
                    }elseif($porcem4>40 AND $porcem4<=45){$classp4 ='porce45';
                    }elseif($porcem4>45 AND $porcem4<=50){$classp4 ='porce50';
                    }elseif($porcem4>50 AND $porcem4<=55){$classp4 ='porce55';
                    }elseif($porcem4>55 AND $porcem4<=60){$classp4 ='porce60';
                    }elseif($porcem4>60 AND $porcem4<=65){$classp4 ='porce65';
                    }elseif($porcem4>65 AND $porcem4<=70){$classp4 ='porce70';
                    }elseif($porcem4>70 AND $porcem4<=75){$classp4 ='porce75';
                    }elseif($porcem4>75 AND $porcem4<=80){$classp4 ='porce80';
                    }elseif($porcem4>80 AND $porcem4<=85){$classp4 ='porce85';
                    }elseif($porcem4>85 AND $porcem4<=90){$classp4 ='porce90';
                    }elseif($porcem4>90 AND $porcem4<=95){$classp4 ='porce95';
                    }elseif($porcem4>95 AND $porcem4<=98){$classp4 ='porce98';
                    }elseif($porcem4>98){$classp4 ='porce100';
                    }
                    
                    
                    if($porceTexm5 =='SD'){$classp5 ='porceSD';
                    }elseif($porcem5<2.5){$classp5 ='porce0';
                    }elseif($porcem5>2.5 AND $porcem5<=5){$classp5 ='porce5';
                    }elseif($porcem5>5 AND $porcem5<=10){$classp5 ='porce10';
                    }elseif($porcem5>10 AND $porcem5<=15){$classp5 ='porce15';
                    }elseif($porcem5>15 AND $porcem5<=20){$classp5 ='porce20';
                    }elseif($porcem5>20 AND $porcem5<=25){$classp5 ='porce25';
                    }elseif($porcem5>25 AND $porcem5<=30){$classp5 ='porce30';
                    }elseif($porcem5>30 AND $porcem5<=35){$classp5 ='porce35';
                    }elseif($porcem5>35 AND $porcem5<=40){$classp5 ='porce40';
                    }elseif($porcem5>40 AND $porcem5<=45){$classp5 ='porce45';
                    }elseif($porcem5>45 AND $porcem5<=50){$classp5 ='porce50';
                    }elseif($porcem5>50 AND $porcem5<=55){$classp5 ='porce55';
                    }elseif($porcem5>55 AND $porcem5<=60){$classp5 ='porce60';
                    }elseif($porcem5>60 AND $porcem5<=65){$classp5 ='porce65';
                    }elseif($porcem5>65 AND $porcem5<=70){$classp5 ='porce70';
                    }elseif($porcem5>70 AND $porcem5<=75){$classp5 ='porce75';
                    }elseif($porcem5>75 AND $porcem5<=80){$classp5 ='porce80';
                    }elseif($porcem5>80 AND $porcem5<=85){$classp5 ='porce85';
                    }elseif($porcem5>85 AND $porcem5<=90){$classp5 ='porce90';
                    }elseif($porcem5>90 AND $porcem5<=95){$classp5 ='porce95';
                    }elseif($porcem5>95 AND $porcem5<=98){$classp5 ='porce98';
                    }elseif($porcem5>98){$classp5 ='porce100';
                    }
                    
                    
                    
                    
                    if($porceTexm6 =='SD'){$classp6 ='porceSD';
                    }elseif($porcem6<2.5){$classp6 ='porce0';
                    }elseif($porcem6>2.5 AND $porcem6<=5){$classp6 ='porce5';
                    }elseif($porcem6>5 AND $porcem6<=10){$classp6 ='porce10';
                    }elseif($porcem6>10 AND $porcem6<=15){$classp6 ='porce15';
                    }elseif($porcem6>15 AND $porcem6<=20){$classp6 ='porce20';
                    }elseif($porcem6>20 AND $porcem6<=25){$classp6 ='porce25';
                    }elseif($porcem6>25 AND $porcem6<=30){$classp6 ='porce30';
                    }elseif($porcem6>30 AND $porcem6<=35){$classp6 ='porce35';
                    }elseif($porcem6>35 AND $porcem6<=40){$classp6 ='porce40';
                    }elseif($porcem6>40 AND $porcem6<=45){$classp6 ='porce45';
                    }elseif($porcem6>45 AND $porcem6<=50){$classp6 ='porce50';
                    }elseif($porcem6>50 AND $porcem6<=55){$classp6 ='porce55';
                    }elseif($porcem6>55 AND $porcem6<=60){$classp6 ='porce60';
                    }elseif($porcem6>60 AND $porcem6<=65){$classp6 ='porce65';
                    }elseif($porcem6>65 AND $porcem6<=70){$classp6 ='porce70';
                    }elseif($porcem6>70 AND $porcem6<=75){$classp6 ='porce75';
                    }elseif($porcem6>75 AND $porcem6<=80){$classp6 ='porce80';
                    }elseif($porcem6>80 AND $porcem6<=85){$classp6 ='porce85';
                    }elseif($porcem6>85 AND $porcem6<=90){$classp6 ='porce90';
                    }elseif($porcem6>90 AND $porcem6<=95){$classp6 ='porce95';
                    }elseif($porcem6>95 AND $porcem6<=98){$classp6 ='porce98';
                    }elseif($porcem6>98){$classp6 ='porce100';
                    }
                    
                    
                    
                    
                    if($porceTexm7 =='SD'){$classp7 ='porceSD';
                    }elseif($porcem7<2.5){$classp7 ='porce0';
                    }elseif($porcem7>2.5 AND $porcem7<=5){$classp7 ='porce5';
                    }elseif($porcem7>5 AND $porcem7<=10){$classp7 ='porce10';
                    }elseif($porcem7>10 AND $porcem7<=15){$classp7 ='porce15';
                    }elseif($porcem7>15 AND $porcem7<=20){$classp7 ='porce20';
                    }elseif($porcem7>20 AND $porcem7<=25){$classp7 ='porce25';
                    }elseif($porcem7>25 AND $porcem7<=30){$classp7 ='porce30';
                    }elseif($porcem7>30 AND $porcem7<=35){$classp7 ='porce35';
                    }elseif($porcem7>35 AND $porcem7<=40){$classp7 ='porce40';
                    }elseif($porcem7>40 AND $porcem7<=45){$classp7 ='porce45';
                    }elseif($porcem7>45 AND $porcem7<=50){$classp7 ='porce50';
                    }elseif($porcem7>50 AND $porcem7<=55){$classp7 ='porce55';
                    }elseif($porcem7>55 AND $porcem7<=60){$classp7 ='porce60';
                    }elseif($porcem7>60 AND $porcem7<=65){$classp7 ='porce65';
                    }elseif($porcem7>65 AND $porcem7<=70){$classp7 ='porce70';
                    }elseif($porcem7>70 AND $porcem7<=75){$classp7 ='porce75';
                    }elseif($porcem7>75 AND $porcem7<=80){$classp7 ='porce80';
                    }elseif($porcem7>80 AND $porcem7<=85){$classp7 ='porce85';
                    }elseif($porcem7>85 AND $porcem7<=90){$classp7 ='porce90';
                    }elseif($porcem7>90 AND $porcem7<=95){$classp7 ='porce95';
                    }elseif($porcem7>95 AND $porcem7<=98){$classp7 ='porce98';
                    }elseif($porcem7>98){$classp7 ='porce100';
                    }
                    
                    
                    
                    if($porceTexm8 =='SD'){$classp8 ='porceSD';
                    }elseif($porcem8<2.5){$classp8 ='porce0';
                    }elseif($porcem8>2.5 AND $porcem8<=5){$classp8 ='porce5';
                    }elseif($porcem8>5 AND $porcem8<=10){$classp8 ='porce10';
                    }elseif($porcem8>10 AND $porcem8<=15){$classp8 ='porce15';
                    }elseif($porcem8>15 AND $porcem8<=20){$classp8 ='porce20';
                    }elseif($porcem8>20 AND $porcem8<=25){$classp8 ='porce25';
                    }elseif($porcem8>25 AND $porcem8<=30){$classp8 ='porce30';
                    }elseif($porcem8>30 AND $porcem8<=35){$classp8 ='porce35';
                    }elseif($porcem8>35 AND $porcem8<=40){$classp8 ='porce40';
                    }elseif($porcem8>40 AND $porcem8<=45){$classp8 ='porce45';
                    }elseif($porcem8>45 AND $porcem8<=50){$classp8 ='porce50';
                    }elseif($porcem8>50 AND $porcem8<=55){$classp8 ='porce55';
                    }elseif($porcem8>55 AND $porcem8<=60){$classp8 ='porce60';
                    }elseif($porcem8>60 AND $porcem8<=65){$classp8 ='porce65';
                    }elseif($porcem8>65 AND $porcem8<=70){$classp8 ='porce70';
                    }elseif($porcem8>70 AND $porcem8<=75){$classp8 ='porce75';
                    }elseif($porcem8>75 AND $porcem8<=80){$classp8 ='porce80';
                    }elseif($porcem8>80 AND $porcem8<=85){$classp8 ='porce85';
                    }elseif($porcem8>85 AND $porcem8<=90){$classp8 ='porce90';
                    }elseif($porcem8>90 AND $porcem8<=95){$classp8 ='porce95';
                    }elseif($porcem8>95 AND $porcem8<=98){$classp8 ='porce98';
                    }elseif($porcem8>98){$classp8 ='porce100';
                    }
                    
                    if($porceTexm9 =='SD'){$classp9 ='porceSD';
                    }elseif($porcem9<2.5){$classp9 ='porce0';
                    }elseif($porcem9>2.5 AND $porcem9<=5){$classp9 ='porce5';
                    }elseif($porcem9>5 AND $porcem9<=10){$classp9 ='porce10';
                    }elseif($porcem9>10 AND $porcem9<=15){$classp9 ='porce15';
                    }elseif($porcem9>15 AND $porcem9<=20){$classp9 ='porce20';
                    }elseif($porcem9>20 AND $porcem9<=25){$classp9 ='porce25';
                    }elseif($porcem9>25 AND $porcem9<=30){$classp9 ='porce30';
                    }elseif($porcem9>30 AND $porcem9<=35){$classp9 ='porce35';
                    }elseif($porcem9>35 AND $porcem9<=40){$classp9 ='porce40';
                    }elseif($porcem9>40 AND $porcem9<=45){$classp9 ='porce45';
                    }elseif($porcem9>45 AND $porcem9<=50){$classp9 ='porce50';
                    }elseif($porcem9>50 AND $porcem9<=55){$classp9 ='porce55';
                    }elseif($porcem9>55 AND $porcem9<=60){$classp9 ='porce60';
                    }elseif($porcem9>60 AND $porcem9<=65){$classp9 ='porce65';
                    }elseif($porcem9>65 AND $porcem9<=70){$classp9 ='porce70';
                    }elseif($porcem9>70 AND $porcem9<=75){$classp9 ='porce75';
                    }elseif($porcem9>75 AND $porcem9<=80){$classp9 ='porce80';
                    }elseif($porcem9>80 AND $porcem9<=85){$classp9 ='porce85';
                    }elseif($porcem9>85 AND $porcem9<=90){$classp9 ='porce90';
                    }elseif($porcem9>90 AND $porcem9<=95){$classp9 ='porce95';
                    }elseif($porcem9>95 AND $porcem9<=98){$classp9 ='porce98';
                    }elseif($porcem9>98){$classp9 ='porce100';
                    }
                    
                    
                    
                    
                    
                    if($porceTexm10 =='SD'){$classp10 ='porceSD';
                    }elseif($porcem10<2.5){$classp10 ='porce0';
                    }elseif($porcem10>2.5 AND $porcem10<=5){$classp10 ='porce5';
                    }elseif($porcem10>5 AND $porcem10<=10){$classp10 ='porce10';
                    }elseif($porcem10>10 AND $porcem10<=15){$classp10 ='porce15';
                    }elseif($porcem10>15 AND $porcem10<=20){$classp10 ='porce20';
                    }elseif($porcem10>20 AND $porcem10<=25){$classp10 ='porce25';
                    }elseif($porcem10>25 AND $porcem10<=30){$classp10 ='porce30';
                    }elseif($porcem10>30 AND $porcem10<=35){$classp10 ='porce35';
                    }elseif($porcem10>35 AND $porcem10<=40){$classp10 ='porce40';
                    }elseif($porcem10>40 AND $porcem10<=45){$classp10 ='porce45';
                    }elseif($porcem10>45 AND $porcem10<=50){$classp10 ='porce50';
                    }elseif($porcem10>50 AND $porcem10<=55){$classp10 ='porce55';
                    }elseif($porcem10>55 AND $porcem10<=60){$classp10 ='porce60';
                    }elseif($porcem10>60 AND $porcem10<=65){$classp10 ='porce65';
                    }elseif($porcem10>65 AND $porcem10<=70){$classp10 ='porce70';
                    }elseif($porcem10>70 AND $porcem10<=75){$classp10 ='porce75';
                    }elseif($porcem10>75 AND $porcem10<=80){$classp10 ='porce80';
                    }elseif($porcem10>80 AND $porcem10<=85){$classp10 ='porce85';
                    }elseif($porcem10>85 AND $porcem10<=90){$classp10 ='porce90';
                    }elseif($porcem10>90 AND $porcem10<=95){$classp10 ='porce95';
                    }elseif($porcem10>95 AND $porcem10<=98){$classp10 ='porce98';
                    }elseif($porcem10>98){$classp10 ='porce100';
                    }
                    
                    if($porceTexm11 =='SD'){$classp11 ='porceSD';
                    }elseif($porcem11<2.5){$classp11 ='porce0';
                    }elseif($porcem11>2.5 AND $porcem11<=5){$classp11 ='porce5';
                    }elseif($porcem11>5 AND $porcem11<=10){$classp11 ='porce10';
                    }elseif($porcem11>10 AND $porcem11<=15){$classp11 ='porce15';
                    }elseif($porcem11>15 AND $porcem11<=20){$classp11 ='porce20';
                    }elseif($porcem11>20 AND $porcem11<=25){$classp11 ='porce25';
                    }elseif($porcem11>25 AND $porcem11<=30){$classp11 ='porce30';
                    }elseif($porcem11>30 AND $porcem11<=35){$classp11 ='porce35';
                    }elseif($porcem11>35 AND $porcem11<=40){$classp11 ='porce40';
                    }elseif($porcem11>40 AND $porcem11<=45){$classp11 ='porce45';
                    }elseif($porcem11>45 AND $porcem11<=50){$classp11 ='porce50';
                    }elseif($porcem11>50 AND $porcem11<=55){$classp11 ='porce55';
                    }elseif($porcem11>55 AND $porcem11<=60){$classp11 ='porce60';
                    }elseif($porcem11>60 AND $porcem11<=65){$classp11 ='porce65';
                    }elseif($porcem11>65 AND $porcem11<=70){$classp11 ='porce70';
                    }elseif($porcem11>70 AND $porcem11<=75){$classp11 ='porce75';
                    }elseif($porcem11>75 AND $porcem11<=80){$classp11 ='porce80';
                    }elseif($porcem11>80 AND $porcem11<=85){$classp11 ='porce85';
                    }elseif($porcem11>85 AND $porcem11<=90){$classp11 ='porce90';
                    }elseif($porcem11>90 AND $porcem11<=95){$classp11 ='porce95';
                    }elseif($porcem11>95 AND $porcem11<=98){$classp11 ='porce98';
                    }elseif($porcem11>98){$classp11 ='porce100';
                    }
                    
                    
                    
                    if($porceTexm12 =='SD'){$classp12 ='porceSD';
                    }elseif($porcem12<2.5){$classp12 ='porce0';
                    }elseif($porcem12>2.5 AND $porcem12<=5){$classp12 ='porce5';
                    }elseif($porcem12>5 AND $porcem12<=10){$classp12 ='porce10';
                    }elseif($porcem12>10 AND $porcem12<=15){$classp12 ='porce15';
                    }elseif($porcem12>15 AND $porcem12<=20){$classp12 ='porce20';
                    }elseif($porcem12>20 AND $porcem12<=25){$classp12 ='porce25';
                    }elseif($porcem12>25 AND $porcem12<=30){$classp12 ='porce30';
                    }elseif($porcem12>30 AND $porcem12<=35){$classp12 ='porce35';
                    }elseif($porcem12>35 AND $porcem12<=40){$classp12 ='porce40';
                    }elseif($porcem12>40 AND $porcem12<=45){$classp12 ='porce45';
                    }elseif($porcem12>45 AND $porcem12<=50){$classp12 ='porce50';
                    }elseif($porcem12>50 AND $porcem12<=55){$classp12 ='porce55';
                    }elseif($porcem12>55 AND $porcem12<=60){$classp12 ='porce60';
                    }elseif($porcem12>60 AND $porcem12<=65){$classp12 ='porce65';
                    }elseif($porcem12>65 AND $porcem12<=70){$classp12 ='porce70';
                    }elseif($porcem12>70 AND $porcem12<=75){$classp12 ='porce75';
                    }elseif($porcem12>75 AND $porcem12<=80){$classp12 ='porce80';
                    }elseif($porcem12>80 AND $porcem12<=85){$classp12 ='porce85';
                    }elseif($porcem12>85 AND $porcem12<=90){$classp12 ='porce90';
                    }elseif($porcem12>90 AND $porcem12<=95){$classp12 ='porce95';
                    }elseif($porcem12>95 AND $porcem12<=98){$classp12 ='porce98';
                    }elseif($porcem12>98){$classp12 ='porce100';
                    }
                
                

                


                ?>


            </div>

            <div id="backCircle">   
            

                <?php
                
                    if($porce == 0){
                        ?>
                            
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c0.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 0 AND $porce <= 2.5){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c2.5.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 2.5 AND $porce <= 5){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c5.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 5 AND $porce <= 10){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c10.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 10 AND $porce <= 15){
                        ?>
                            
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c15.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 15 AND $porce <= 20){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c20.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 20 AND $porce <= 25){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c25.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 25 AND $porce <= 30){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c30.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 30 AND $porce <= 35){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c35.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 35 AND $porce <= 40){
                        ?>
                            <div class="cirpptoTask">
                                
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c40.png" class="img_grafaTask"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 40 AND $porce <= 45){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c45.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 45 AND $porce <= 50){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c50.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 50 AND $porce <= 55){
                        ?>
                            
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">
                                <img src="../../../img/graf/gra_c55.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 55 AND $porce <= 60){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c60.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 60 AND $porce <= 65){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c65.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 65 AND $porce <= 70){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0"> 
                                <img src="../../../img/graf/gra_c70.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 70 AND $porce <= 75){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0"> 
                                <img src="../../../img/graf/gra_c75.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 75 AND $porce <= 80){
                        ?>
                            
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">
                                <img src="../../../img/graf/gra_c80.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 80 AND $porce <= 85){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0"> 
                                <img src="../../../img/graf/gra_c85.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 85 AND $porce <= 90){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c90.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 90 AND $porce <= 95){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c95.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 95 AND $porce <= 98){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c98.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }elseif($porce > 98 AND $porce <= 100){
                        ?>
                        
                            <div class="cirppto">
                                <img src="../../../img/graf/gra_a.png" class="img_grafa0">  
                                <img src="../../../img/graf/gra_c100.png" class="img_grafa"> 
                                <div class="textPorce"><?php echo $porceTex;?></div>
                            </div>
                        <?php
                        
                    }
                ?>
                
            


            </div>

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


                                        $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' ")->fetch());
                                        $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI'  ")->fetch());
                                        $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%CANCELADA%' AND activo = 'SI'  ")->fetch());
                                        $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI'  ")->fetch());
                                    
                                    
                                    
                                        $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND activo = 'SI'   ")->fetch());
                        
                        
                                    }elseif($adminrol == $radreg){

                                    

                                        
                                        $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') ")->fetch());
                                        $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                        $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                        $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                                    
                                    
                                    
                                        $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  ")->fetch());
                        
                        
                                    }else{

                                        $usarYask1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_FECHA%'  AND usertask = '$userkaskLY' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') ")->fetch());
                                        $usarYask1b = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%CUMPLIDA%'  AND usertask = '$userkaskLY' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  ")->fetch());
                                        $usarYask2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%DESPUES_DE_FECHA%' AND usertask = '$userkaskLY' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')   ")->fetch());
                                        $usarYask3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_CURSO%' AND usertask = '$userkaskLY' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  ")->fetch());
                        
                                        $usarYaskAll = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND activo = 'SI'   AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  ")->fetch());
                        
                        

                                        $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  ")->fetch());
                                        $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  ")->fetch());
                                        $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')   ")->fetch());
                                        $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND usertask = '$userkaskLY' AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')   ")->fetch());
                                    
                                    
                                    
                                        $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND usertask = '$userkaskLY' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')   ")->fetch());
                        
                                    } 
                            

                 
                                    $cumplidasTask = $taskCumplidas+$taskEnCurso-$taskCanceladas-$taskReasignadas;

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

            </div>

            <div id="taskMeses">

                <table class="tablemeses">

                    <tr>
                        <td class="altobar"><div class="barrbarr <?php echo $classp1;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp2;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp3;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp4;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp5;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp6;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp7;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp8;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp9;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp10;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp11;?>"><?php ?></div></td>
                        <td class="altobar"><div class="barrbarr <?php echo $classp12;?>"><?php ?></div></td>
                    </tr>
                    <tr>
                        <td class="mesbo"><?php echo $porceTexm1?></td>
                        <td class="mesbo"><?php echo $porceTexm2?></td>
                        <td class="mesbo"><?php echo $porceTexm3?></td>
                        <td class="mesbo"><?php echo $porceTexm4?></td>
                        <td class="mesbo"><?php echo $porceTexm5?></td>
                        <td class="mesbo"><?php echo $porceTexm6?></td>
                        <td class="mesbo"><?php echo $porceTexm7?></td>
                        <td class="mesbo"><?php echo $porceTexm8?></td>
                        <td class="mesbo"><?php echo $porceTexm9?></td>
                        <td class="mesbo"><?php echo $porceTexm10?></td>
                        <td class="mesbo"><?php echo $porceTexm11?></td>
                        <td class="mesbo"><?php echo $porceTexm12?></td>
                    </tr>

                    <tr>
                        <th>ENE</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>ABR</th>
                        <th>MAY</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGO</th>
                        <th>SEP</th>
                        <th>OCT</th>
                        <th>NOV</th>
                        <th>DIC</th>
                    </tr>
                    
                </table>

            </div>

            <div id="tipoTask">

                <table class="tableTIp">


                    <?php

                            $valyuser = "SELECT * FROM $estatipotask WHERE cla = 'TIPO' ";
                            $qvalyuser = $db_task->query($valyuser);

                            while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {

                                $nombreMIN = $fila['nombre']; 
                                $acronimoMIN = $fila['acronimo']; 



                                if($adminrol == $radmin){


                                    $taskCumplidasT = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND tipominuta = '$acronimoMIN' ")->fetch());
                                    $taskEnCursoT = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND tipominuta = '$acronimoMIN' ")->fetch());
                                    $taskCanceladasT = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%CANCELADA%' AND activo = 'SI'  AND tipominuta = '$acronimoMIN' ")->fetch());
                                    $taskReasignadasT= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%REASIGNADA%' AND activo = 'SI'  AND tipominuta = '$acronimoMIN' ")->fetch());
                                    
                                    
                                    
                                    $taskTotalT = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%' AND activo = 'SI'   AND tipominuta = '$acronimoMIN' ")->fetch());
                    

                                    
                    
                                }elseif($adminrol == $radreg){

                                    

                                    
                                    $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') AND tipominuta = '$acronimoMIN'  ")->fetch());
                                    $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') AND tipominuta = '$acronimoMIN'  ")->fetch());
                                    $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog')  AND tipominuta = '$acronimoMIN'  ")->fetch());
                                    $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') AND tipominuta = '$acronimoMIN'   ")->fetch());
                                    
                                    
                                    
                                    $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND activo = 'SI' AND (region = '$userAcroregion' OR usuarioregistra = '$userLog') AND tipominuta = '$acronimoMIN'   ")->fetch());
                    
                    
                                }else{

                                    $usarYask1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_FECHA%'  AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'  ")->fetch());
                                    $usarYask1b = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%CUMPLIDA%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  AND tipominuta = '$acronimoMIN'  ")->fetch());
                                    $usarYask2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%DESPUES_DE_FECHA%'  AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'   ")->fetch());
                                    $usarYask3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_CURSO%'  AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog')  AND tipominuta = '$acronimoMIN'  ")->fetch());
                    
                                    $usarYaskAll = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND activo = 'SI'   AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'   ")->fetch());
                    
                    

                                    $taskCumplidas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND (estatus = 'EN_FECHA' OR estatus = 'CUMPLIDA' OR estatus = 'DESPUES_DE_FECHA' )   AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'   ")->fetch());
                                    $taskEnCurso = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'   AND estatus LIKE '%EN_CURSO%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'   ")->fetch());
                                    $taskCanceladas = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%CANCELADA%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'    ")->fetch());
                                    $taskReasignadas= current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'    AND estatus LIKE '%REASIGNADA%' AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'    ")->fetch());
                                    
                                    
                                    
                                    $taskTotal = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE  yearfinpro LIKE '%$yearho%' AND unidad LIKE '%$unidadcli%' AND mesfinpro LIKE '%$periodo%'  AND activo = 'SI' AND (usertask = '$userLog' OR usuarioregistra =  '$userLog') AND tipominuta = '$acronimoMIN'    ")->fetch());
                    
                                } 

                                if($taskTotalT > 0){

                                    $CumpleT = $taskCumplidasT+$taskEnCursoT;
                                    $totfaBarT = $taskTotalT-$taskCanceladasT-$taskReasignadasT;

                                    $porceToc = ($CumpleT*100)/$totfaBarT;


                                    if($porceToc == 0){
                                        $classPt = 'Bporce0';
                                    }elseif($porceToc > 0 AND $porceToc <=2.5){
                                        $classPt = 'Bporce2_5';
                                    }elseif($porceToc > 0 AND $porceToc <=2.5){
                                        $classPt = 'Bporce2_5';
                                    }elseif($porceToc > 2.5 AND $porceToc <=5){
                                        $classPt = 'Bporce5';
                                    }elseif($porceToc > 5 AND $porceToc <=10){
                                        $classPt = 'Bporce10';
                                    }elseif($porceToc > 10 AND $porceToc <=15){
                                        $classPt = 'Bporce15';
                                    }elseif($porceToc > 15 AND $porceToc <=20){
                                        $classPt = 'Bporce20';
                                    }elseif($porceToc > 20 AND $porceToc <=25){
                                        $classPt = 'Bporce25';
                                    }elseif($porceToc > 25 AND $porceToc <=30){
                                        $classPt = 'Bporce30';
                                    }elseif($porceToc > 30 AND $porceToc <=35){
                                        $classPt = 'Bporce35';
                                    }elseif($porceToc > 35 AND $porceToc <=40){
                                        $classPt = 'Bporce40';
                                    }elseif($porceToc > 40 AND $porceToc <=45){
                                        $classPt = 'Bporce45';
                                    }elseif($porceToc > 45 AND $porceToc <=50){
                                        $classPt = 'Bporce50';
                                    }elseif($porceToc > 50 AND $porceToc <=55){
                                        $classPt = 'Bporce55';
                                    }elseif($porceToc > 55 AND $porceToc <=60){
                                        $classPt = 'Bporce60';
                                    }elseif($porceToc > 60 AND $porceToc <=65){
                                        $classPt = 'Bporce65';
                                    }elseif($porceToc > 65 AND $porceToc <=70){
                                        $classPt = 'Bporce70';
                                    }elseif($porceToc > 70 AND $porceToc <=75){
                                        $classPt = 'Bporce75';
                                    }elseif($porceToc > 75 AND $porceToc <=80){
                                        $classPt = 'Bporce80';
                                    }elseif($porceToc > 80 AND $porceToc <=85){
                                        $classPt = 'Bporce85';
                                    }elseif($porceToc > 85 AND $porceToc <=90){
                                        $classPt = 'Bporce90';
                                    }elseif($porceToc > 90 AND $porceToc <=95){
                                        $classPt = 'Bporce95';
                                    }elseif($porceToc > 95 AND $porceToc <=98){
                                        $classPt = 'Bporce98';
                                    }elseif($porceToc > 98 ){
                                        $classPt = 'Bporce100';
                                    }

                                ?>
                                <tr>
                                    <td><?php echo $nombreMIN;?></td>
                                    <td ><div class="barrbak"><div class="barrapo <?php echo $classPt;?>"></div></div></td>
                                </tr>


                                <?php

                                }
                                    
                            }
                            ?>
                </table>

            </div>


            <?php

                if($adminrol == $radmin){

                    ?>
                        <form id="filtrosFi" method="POST" action="dash_task.php" autocomplete="off" >

                            <select id="cliente" name="unidadcli"  required>  

                                <option value="" selected >Unidad...</option>
                                
                                <option value=""  >FIFTY...</option>
                                <?php

                                 

                                        $tabunid = "SELECT * FROM $clirisk WHERE ver = 'SI' ";
                                        $qtabunid = $db_users->query($tabunid);

                                        foreach ( $qtabunid as $opciones){ ?>

                                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                            <?php
                                    
                                        }
                                   
                                ?>
                            </select>

                          
                            <input type="submit" name="dash" value="FILTRAR" id="botonFIl">

                        </form>
                    <?php
                }  elseif($adminrol == $radreg){

                    ?>
                        <form method="POST" action="dash_task.php" autocomplete="off">

                            <select id="cliente" name="unidadcli"   required>  

                                <option value="" selected >Unidad...</option>

                                <?php

                                  
                                        $tabunid = "SELECT * FROM $clirisk WHERE region = '$userRegion' AND ver = 'SI'  ";
                                        $qtabunid = $db_users->query($tabunid);

                                        foreach ( $qtabunid as $opciones){ ?>

                                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                            <?php
                                    
                                        }
                                 
                                    
                                ?>
                            </select>

                          
                            <input type="submit" name="dash" value="FILTRAR" id="botonFIl">

                        </form>
                    <?php
                }

            ?>

            

                  
                 
       

        </section>
        
        <div id="blockMod"></div>

    </section>




</body>

</html>