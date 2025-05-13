<?php
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


$yearho = $_POST['year'];
$periodo = $_POST['periodo'];
$tipotask = $_POST['tipotask'];
$unidadcli = $_POST['unidadSel'];
$tipotask = $_POST['tipotask'];
$accion = $_POST['accion'];
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
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/idextask.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/idextask.css">
    <link rel="stylesheet" type="text/css" href="DASH/css/dash_task.css">
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
            <div class="line1"></div>
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

       


        <div id="taskPersonmis">

                <table id="tabla_task">

                    <tr id="columnasTaCon">
                     
                        <th id="id">ID</th>                                   
                        <th id="venc">FECHA DE VENCIMIENTO</th> 
                        <th id="fechain">FECHA INICIAL</th>                               
                        <th id="estatus">ESTATUS</th>
                        <th id="tarea">TAREA</th>     
                        <th id="obsent">OBSERVACIONES O ENTREGABLES</th>                           
                        <th id="resptask">RESPONSABLE DE TAREA</th>                                 
                        <th id="notascumple">NOTAS SEGUIMIENTO</th>
                          
                        <th id="seguim">RESPONSABLE DE SEGUIMIENTO</th>  
                          
                    </tr>

                        <?php



                            if($adminrol == $radmin){
                                                                
                                $vencimq = "SELECT * FROM $tabtaskY WHERE ejercicio = '$yearho' AND unidad = '$unidadcli' AND mesfinpro LIKE '%$periodo' AND usertask LIKE '%$usertask' ";

                                $ejec = $db_task->query($vencimq);
                            }else{
                                
                                    $vencimq = "SELECT * FROM $tabtaskY WHERE ejercicio = '$yearho'  AND unidad = '$clientesu' AND mesfinpro LIKE '%$periodo'  AND (usertask LIKE '%$userLog%' OR usuarioregistra LIKE '%$userLog%') ";

                                    $ejec = $db_task->query($vencimq);
                            
                            }
                          
                                /////////////////////// CONSULTA///////////////////////////////////////////////////////////////

                                        
                                while ($fila = $ejec->fetch(PDO::FETCH_ASSOC)) {
                                                
                                    $id = $fila['id'];  
                                    $fechaprograma = $fila['fechaprogramada'];                                                
                                    $fechahoy = $fila['fechahoy'];  
                                    $estatus = $fila['estatus'];  
                                    $tarea = $fila['tarea'];  
                                    $observaciones = $fila['observaciones'];  
                                    $responsabletarea = $fila['responsabletarea']; 
                                    $responsableminuta = $fila['respseguimiento'];  
                                
                                    $observacionescumple = $fila['observacionescumple'];  
                                 
                                    ?>
                            
                                <tr>
                                
                                    <td class="center"><?php echo   $id ?></td>                                              
                                    <td class="center"><?php echo   $fechaprograma?></td>                                    
                                    <td class="center"><?php echo   $fechahoy?></td>
                                    <td class="center"><?php echo   $estatus?></td>
                                    <td ><?php echo   $tarea?></td>
                                    <td ><?php echo   $observaciones?></td>
                                    <td ><?php echo  $responsabletarea?></td>
                                    <td ><?php echo   $observacionescumple?></td>
                                    <td ><?php echo   $responsableminuta?></td>
                                
                                </tr>

                                <tr>
                                                <td colspan="9"><div class="linTask"></div></td>
                                            </tr>
                                <?php

                            
                                }                           
                                
                                
                            
                        ?>
                </table>

            </div>


     
        <div id="blockMod"></div>

    </section>




</body>

</html>