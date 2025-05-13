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

            <form action="PRINT/print_task.php" >

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

       


                    
            <form id="backForm" method="POST" autocomplete="off" action="save_task.php" method="POST" onkeydown="return event.key != 'Enter';" enctype="multipart/form-data">
        
                <section id="backGuardarUpd">

                    <input type="submit" id="submit" value="ACTUALIZAR" name="updateTask">

                </section>      
                                
                <section id="conttablaUpd">

                

                    <table id="tablataUpd">

                        <tr>
                            <th class="col0"></th>
                            <th class="col1"></th>
                            <th class="col2"></th>
                            <th class="col3"></th>
                            <th class="col4"></th>
                            <th class="col5"></th>
                            <th class="col6"></th>
                        </tr>



                        <?php

                           


                                if($adminrol == $radmin){
                                                                                    
                                    $taskckeck = "SELECT * FROM $tabtaskY WHERE  ejercicio LIKE '%$year%' AND usertask LIKE '%$resptarea%' AND mesfinpro LIKE '%$periodo%' AND unidad LIKE '%$unidadSel%'  AND activo = 'SI' ";
                                    $ejeccheck = $db_task->query($taskckeck); 
                                    
                                }elseif($adminrol == $radreg){
                                                                                        
                                    $taskckeck = "SELECT * FROM $tabtaskY WHERE  ejercicio LIKE '%$year%'  AND mesfinpro LIKE '%$periodo%' AND region LIKE '%$$userAcroregion%'  AND activo = 'SI'   ";
                                    $ejeccheck = $db_task->query($taskckeck); 
                                    
                                }elseif($adminrol == $radger){
                                                                                        
                                    $taskckeck = "SELECT * FROM $tabtaskY WHERE  ejercicio LIKE '%$year%'  AND mesfinpro LIKE '%$periodo%' AND unidad LIKE '%$unidadSel%' AND activo = 'SI' AND usuarioregistra = '$userLog' OR usertask LIKE '%$resptarea%'     ";
                                    $ejeccheck = $db_task->query($taskckeck); 
                                    
                                }elseif($adminrol == $radman){
                                                                                        
                                    $taskckeck = "SELECT * FROM $tabtaskY WHERE  ejercicio LIKE '%$year%'  AND mesfinpro LIKE '%$periodo%' AND unidad LIKE '%$unidadSel%' AND activo = 'SI'  AND  usuarioregistra = '$userLog' OR usertask LIKE '%$userLog%'  ";
                                    $ejeccheck = $db_task->query($taskckeck); 
                                    
                                }
                        
                                        
                                while ($regitask = $ejeccheck->fetch(PDO::FETCH_ASSOC))  {
                                 
                                    $idclass = $regitask['id']; 
                                    $estatus = $regitask['estatus']; 
                                    $fpg1 = $regitask['fechaprogramada']; 

                                    if(empty($fpg1) oR $fpg1 == '0000-00-00'){
                                        $fechaUno = 'SIN FECHA';
                                    }else{
                                        $fechaUno = $fpg1;
                                    }
                                    $fech1 = new DateTime( $fpg1 );
                                    $fechcumya = $fech1->format('d-m-Y');
                                    $obsobs = $regitask['observacionescumple'];
                                    $fpg2 = $regitask['fechacumple']; 
                                    $fech2 = new DateTime( $fpg2 );
                                    $fechcumya2 = $fech1->format('d-m-Y');

                                    $usertask = $regitask['usertask']; 
                                    $regionT = $regitask['region']; 
                                    $unidadT = $regitask['unidad']; 
    
                                    $rutaEvaly = $regitask['ruta'];

                                    $valyuser2 = "SELECT * FROM $sresuall WHERE  usuario LIKE '%$usertask%'  ";
                                    $qvalyuser2 = $db_users->query($valyuser2);
                                    
                                    while ($fila2 = $qvalyuser2->fetch(PDO::FETCH_ASSOC)) {
                                
                                        $userkaskLY = $fila2['usuario'];  
                                        $nombreREsp = $fila2['nombre'];  
                                    
                                    }
                              
                                    $tabper = "SELECT * FROM $personal WHERE nombreco LIKE '%$nombreREsp%' ";
                                    $qtabper = $db_assess->query($tabper);
                  
                                    while ($fila = $qtabper->fetch(PDO::FETCH_ASSOC)) {
                                            $regionUn = $fila['region'];
                                            $unidadU = $fila['unidad'];
                                            $userjefe = $fila['userjefe'];
                                            $dep = $fila['dep'];
                                            $dirger = $fila['dirger'];
                                       
                                    }


                                    if(empty($fpg2)){
                                        $classaTASK="INPUTASK";
                                    }else{
                                        $classaTASK="INPUTASKya";
                                    }

                                    echo '

                                        <tr id="bloq0">
                                            <td colspan="6" ><div class="lineaTask"></div></td>
                                            <td hidden><input type="text" name="idUpdate[]"  value="' . $regitask['id'] . '"  class="idupdate"/></td>   
                                               
                                        </tr>

                                        <tr id="bloq1">

                                            <th colspan="4">Responsable de Tarea</th>
                                            <th colspan="3">Responsable de Seguimiento</th>                                        
                                        
                                        </tr>

                                        <tr id="bloq1b">
                                             <td hidden ><input type="text" name="idy[' . $regitask['id'] . ']"  value="' . $regitask['id'] . '"  class="idupdate"/></td>   
                                            <td colspan="4" class="input" >' . $regitask['responsabletarea'] . '</td>
                                            <td hidden ><input type="text" name="respta[' . $regitask['id'] . ']" value=" '  . $regitask['responsabletarea'] . ' "></td>
                                            <td colspan="3" class="input" >' . $regitask['respseguimiento'] . '</td>
                                            <td  hidden ><input type="text" name="regionUn[' . $regitask['id'] . ']" value=" '  . $regionUn . ' "></td>
                                            <td  hidden ><input type="text" name="unidadU[' . $regitask['id'] . ']" value=" '  . $unidadU . ' "></td>
                                            <td  hidden ><input type="text" name="userjefe[' . $regitask['id'] . ']" value=" '  . $userjefe . ' "></td>
                                            <td  hidden ><input type="text" name="dep[' . $regitask['id'] . ']" value=" '  . $dep . ' "></td>
                                            <td  hidden ><input type="text" name="dirger[' . $regitask['id'] . ']" value=" '  . $dirger . ' "></td>

                                        </tr>
                                    
                                        <tr id="bloq2">
                                        
                                            <th colspan="1">ID</th>
                                            <th colspan="6">Tarea</th>
                                        
                                        </tr>

                                        <tr id="">
        
                                            
                                                <td class="inputB" >' . $regitask['id'] . '</td>
                                                <td colspan="6">
                                                    <textarea class="'.$classaTASK.'">' . $regitask['tarea'] . '</textarea>
                                             
                                                </td>   
                                        </tr>
                                    
                                        <tr id="bloq3">
                                

                                            <th colspan="3">Entregable</th>
                                            <th colspan="1">Fecha Pro</th>
                                            <th colspan="1">Fecha Real</th>
                                            <th colspan="1">Estatus</th>
                                            <th colspan="1">Observación</th>
                                        </tr>                                    
                                
                                        <tr id="bloq3b">
                                            
                                            <td colspan="3"><textarea type="text"  class="inputENT" spellcheck="false" placeholder="' . $regitask['observaciones'] . '" readonly></textarea></td>
                                            
                                            <td ><input type="text"  class=" input center" value="' . $fechaUno . ' " readonly></td>

                                            ';

                                            if(empty($fpg2) OR $fpg2 == NULL OR $fpg2 == "0000-00-00"){

                                                echo '
                                                    <td ><input type="date"  class="input" value="Fecha Real" name="fechacumpleUpdate[' . $regitask['id'] . ']"></td>

                                                ';

                                            }else{
                                                    echo '
                                                    
                                                    <td><input tupe="text" class="input" name="fechacumpleUpdate[' . $regitask['id'] . ']"  placeholder="' . $fpg2 . ' o (AAAA-MM-DD)"></td>
                                                    
                                                    ';
                                            }


                                                echo '

                                            <td >


                                                <select class="inputNUE" name="estatusUpdate[' . $regitask['id'] . ']" value="' . $regitask['estatus'] . '" >

                                                    <option value=""  selected >' . $regitask['estatus'] . '</option>
                                                                
                                                    <option value=""  >nuevo estatus...</option>
                                                    <option value="EN_FECHA" >CUMPLIDA EN FECHA</option>
                                                    <option value="DESPUES_DE_FECHA" >CUMPLIDA DESPUES DE FECHA</option>               
                                                    <option value="EN_CURSO" >EN CURSO</option>                                            
                                                    <option value="NO_CUMPLIDA" >NO CUMPLIDA</option>
                                                    <option value="ATRASADA" >ATRASADA</option>
                                                    <option value="CANCELADA" >CANCELDA</option>
                                                    <option value="REASIGNADA" >REASIGNADA</option>
                                                    <option value="ELIMINAR" >ELIMINADA</option>
                                                </select>


                                            </td>


                                        
                                            <td ><textarea type="text"  class="inputEVALobs justy" spellcheck="false" name="obscUpdate[' . $regitask['id'] . ']" placeholder="' . $regitask['observacionescumple'] . '"></textarea></td>
                                            
                                        </tr>

                                        <tr>
                                            <td colspan=""></td>
                                            <td></td>
                                            <td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="">  <input type="file" name="fichero[' . $regitask['id'] . ']" id="fichero[]" class="file" value="" >
                                            </td>
                                        </tr>

              
                                        ';
                                       
                                        
                                        if(empty($rutaEvaly)){

                                            echo '
                                            <tr>
                                                <td ></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <input type="checkbox" name="checkbox[' . $regitask['id'] . ']" value="1" >
                                                </td>
                                                 <td></td>
                                                  <td></td>
                                            </tr>
                                            ';
                                            

                                        }else{{

                                            echo '

                                                <tr>
                                                    <td ></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <input type="checkbox" name="checkbox[' . $regitask['id'] . ']" value="1" >
                                                    </td>
                                                    
                                                    
                                                    <td class="activ2" colspan="1"></td>
                                                    <td class="activ2" colspan="1"><a href="' . $regitask['ruta'] .'" class="botmenu" id="verdoc" target="_blank">VER EVIDENCIA</a></td>
                                                </tr>
                                            ';

                                        }}

                                        echo  '
                                    ';

                                    
                                }


                        ?>
                         

                    </table>

                </section>
            
            </form> 

        
      


     
        <div id="blockMod"></div>

    </section>




</body>

</html>