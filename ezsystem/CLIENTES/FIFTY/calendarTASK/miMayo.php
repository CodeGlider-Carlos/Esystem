<?php
session_start();
require_once '../varSQL/dbmysql.php';
require_once '../varSQL/var.php';
require_once '../varSQL/bd.php';

$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

$yearHoy = date('Y');
$yearMin = date('y');
$mesHoy = date('m');
$diaHoy = date('d');




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_consulta</title>

    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/miCalendar.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="css/miCalendario.css">

</head>

        <section id="calendar">

            <div id="tabenero" class="backtabla"  method="POST" action="#">
      

                <table id="tablata">


                    <tr id="columnas">
                        <th>L</th>
                        <th>M</th>
                        <th>M</th>
                        <th>J</th>
                        <th>V</th>
                        <th>S</th>
                        <th>D</th>
                    </tr>

                    <?php

                            $valyuserLog = "SELECT * FROM $tabusName WHERE usuario = '$userLog'  ";
                            $qvalyuserLog = $db_users->query($valyuserLog); 

                            while ($tabcal = $qvalyuserLog->fetch(PDO::FETCH_ASSOC))  {
                                $nombreco = $tabcal['usuario'];

                            }


                       


                            $tabdiamy = "SELECT * FROM $diaesyear WHERE year LIKE '%$yearHoy%'  AND mes = 'MAYO'  ";

                            $qtabdiamy = $db_task->query($tabdiamy); 

                            while ($tabcal = $qtabdiamy->fetch(PDO::FETCH_ASSOC))  {
                                $year = $tabcal['year'];
                                $mesnum = $tabcal['mesnum']; 
                                $mesmes = $tabcal['mes']; 
                                $lunes = $tabcal['lunes']; 
                                $martes = $tabcal['martes']; 
                                $miercoles = $tabcal['miercoles']; 
                                $jueves = $tabcal['jueves']; 
                                $viernes = $tabcal['viernes']; 
                                $sabado = $tabcal['sabado']; 
                                $domingo = $tabcal['domingo']; 

                                /////ID PARA ABRIR VENTANAS Y GUARDAR EVENTOS
                                $idverL = 'MAYO'.$lunes;
                                $idverMA = 'MAYO'.$martes;
                                $idverMI = 'MAYO'.$miercoles;
                                $idverJ = 'MAYO'.$jueves;
                                $idverV = 'MAYO'.$viernes;
                                $idverS = 'MAYO'.$sabado;
                                $idverD = 'MAYO'.$domingo;
                       
                                    ////TOTALES
                             
                                   

                                    $alltask1 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$lunes'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());
                                    $alltask2 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$martes'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());
                                    $alltask3 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$miercoles'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());
                                    $alltask4 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$jueves'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());
                                    $alltask5 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$viernes'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());
                                    $alltask6 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$sabado'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());
                                    $alltask7 = current($db_task->query("SELECT COUNT(id) FROM $tabtask  WHERE yearpro = '$yearMin' AND diapro = '$domingo'  AND mespro LIKE '%$mesnum%'
                                    AND useresp = '$nombreco' ")->fetch());



                                ?>
                                    <tr>
                                        <td class="bloq">

                                            <div id="backlunes">

                                                <div class="diames"><strong><?php echo $lunes;?></strong></div>

                                            

                                                <?php
                                                    if($alltask1 > 0){

                                                        if(empty($lunes)){

                                                        }else{
                                                            ?>

                                                            <form   method="POST" action="#">
                                                        
                                                                <input type="submit"   class="tottareas" value="<?php echo $alltask1.' tareas';?>" name="subverEvent" >
                                                                <input hidden  type="text"   value="<?php echo $lunes;?>" name="verTask" >
                                                                <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >

                                                            </form>

                                                            

                                                            <?php
                                                        }

                                                    }
                                                    
                                                ?>

                                            

                                                <form class="backEventBoton" method="POST" action="#">

                                                    <input  hidden type="text" value="<?php echo $mesnum ?>" name="mesnum">
                                                    <input id="<?php echo $idverL; ?>" type="submit" value="<?php echo $idverL; ?>"  name="printev" class="submitmas"> 
                                                    <?php
                                                        
                                                        if(empty($lunes)){

                                                        }else{
                                                            ?>
                                                                <div class="maseventos" >+</div>
                                                            <?php
                                                        }
                                                    ?> 
                                                </form>

                                            </div>

                                       
                                         
                                        </td>
                                        
                                 
                                        <td class="bloq">

                                            <div id="backmartes">

                                                <div class="diames"><strong><?php echo $martes;?></strong></div>
                                               
                                                <?php
                                                    if($alltask2 > 0){

                                                        if(empty($martes)){

                                                        }else{
                                                            ?>

                                                            <form   method="POST" action="#">
                                                                <input type="submit"   class="tottareas" value="<?php echo $alltask2.' tareas';?>" name="subverEvent" >
                                                                <input hidden type="text"   value="<?php echo $martes;?>" name="verTask" >
                                                                <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >

                                                            </form>
                                                        <?php
                                                        }

                                                    }
                                                    
                                                ?>

                                                <form class="backEventBoton" method="POST" action="#">

                                                    <input  hidden type="text" value="<?php echo $mesnum ?>" name="mesnum">
                                                    <input id="<?php echo $idverMA; ?>" type="submit" value="<?php echo $idverMA; ?>"  name="printev" class="submitmas">
                                                    <?php
                                                        
                                                        if(empty($martes)){

                                                        }else{
                                                            ?>
                                                                <div class="maseventos" >+</div>
                                                            <?php
                                                        }
                                                    ?> 
                                                </form>

                                            </div>

                                        </td>
                                        
                                
                                        <td class="bloq">

                                            <div id="backmiercoles">

                                                <div class="diames"><strong><?php echo $miercoles;?></strong></div>
                                               
                                            
                                                <?php
                                                    if($alltask3 > 0){

                                                        if(empty($miercoles)){

                                                        }else{
                                                            ?>

                                                            <form   method="POST" action="#">

                                                                <input type="submit"   class="tottareas" value="<?php echo $alltask3.'tareas';?>" name="subverEvent" >
                                                                <input hidden type="text"   value="<?php echo $miercoles;?>" name="verTask" >
                                                                <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >

                                                            </form>

                                                        <?php
                                                        }

                                                    }
                                                    
                                                ?>

                                            
                                                <form class="backEventBoton" method="POST" action="#">

                                                    <input  hidden type="text" value="<?php echo $mesnum; ?>" name="mesnum">
                                                    <input id="<?php echo $idverMI; ?>" type="submit" value="<?php echo $idverMI; ?>"  name="printev" class="submitmas"> 
                                                    <?php
                                                        
                                                        if(empty($miercoles)){

                                                        }else{
                                                            ?>
                                                                <div class="maseventos" >+</div>
                                                            <?php
                                                        }
                                                    ?>

                                                </form>

                                            </div>

                                        </td>

                                        
                                 
                                        <td class="bloq">

                                            <div id="backjueves">

                                                <div class="diames"><strong><?php echo $jueves;?></strong></div>
                                              

                                                <?php
                                                    if($alltask4 > 0){

                                                        if(empty($jueves)){

                                                        }else{
                                                            ?>
                                                            <form   method="POST" action="#">
                                                                <input type="submit"   class="tottareas" value="<?php echo $alltask4.'tareas';?>" name="subverEvent" >
                                                                <input hidden type="text"   value="<?php echo $jueves;?>" name="verTask" >
                                                                <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >
                                                            </form>
                                                        <?php
                                                        }

                                                    }
                                                    
                                                ?>

                                                        
                                                <form class="backEventBoton" method="POST" action="#">

                                                    <input  hidden type="text" value="<?php echo $mesnum; ?>" name="mesnum">
                                                    <input id="<?php echo $idverJ; ?>" type="submit" value="<?php echo $idverJ; ?>"  name="printev" class="submitmas"> 
                                                    <?php
                                                        
                                                        if(empty($jueves)){

                                                        }else{
                                                            ?>
                                                                <div class="maseventos" >+</div>
                                                            <?php
                                                        }
                                                    ?>

                                                </form>


                                            </div>
                                      
                                      
                                        </td>
                                        
                               
                                        <td class="bloq">

                                            <div id="backviernes">

                                                <div class="diames"><strong><?php echo $viernes;?></strong></div>
                                             
                                                <?php
                                                    if($alltask5 > 0){

                                                        if(empty($viernes)){

                                                        }else{
                                                            ?>
                                                               <form   method="POST" action="#">

                                                                    <input type="submit"   class="tottareas" value="<?php echo $alltask5.'tareas';?>" name="subverEvent" >
                                                                    <input hidden type="text"   value="<?php echo $viernes;?>" name="verTask" >
                                                                    <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >

                                                                </form>
                                                        <?php
                                                        }

                                                    }
                                                    
                                                ?>

                                                <form class="backEventBoton" method="POST" action="#">

                                                    <input  hidden type="text" value="<?php echo $mesnum; ?>" name="mesnum">
                                                    <input id="<?php echo $idverV; ?>" type="submit" value="<?php echo $idverV; ?>"  name="printev" class="submitmas"> 

                                                    <?php
                                                        
                                                        if(empty($viernes)){

                                                        }else{
                                                            ?>
                                                                <div class="maseventos" >+</div>
                                                            <?php
                                                        }
                                                    ?>
                                                    
                                                </form>
                                            </div>
                                        </td>
                           

                                        <td class="bloq">

                                                <div id="backsabado">
                                                    
                                              

                                                    <div class="diames"><strong><?php echo $sabado;?></strong></div>
                                                

                                                    <?php
                                                        if($alltask6 > 0){

                                                            if(empty($sabado)){

                                                            }else{
                                                                ?>

                                                                <form   method="POST" action="#">
                                                                    <input type="submit"   class="tottareas" value="<?php echo $alltask6.'tareas';?>" name="subverEvent" >
                                                                    <input hidden type="text"   value="<?php echo $sabado;?>" name="verTask" >
                                                                    <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >
                                                                </form>
                                                            <?php
                                                            }

                                                        }
                                                        
                                                    ?>
                                                            
                                                    <form class="backEventBoton" method="POST" action="#">

                                                        <input  hidden type="text" value="<?php echo $mesnum;?>" name="mesnum">
                                                        <input id="<?php echo $idverS; ?>" type="submit" value="<?php echo $idverS; ?>"  name="printev" class="submitmas"> 

                                                        <?php
                                                            
                                                            if(empty($sabado)){

                                                            }else{
                                                                ?>
                                                                    <div class="maseventos" >+</div>
                                                                <?php
                                                            }
                                                        ?>
                                                    
                                                
                                                    </form>

                                                </div>

                                        </td>
                                        
                               
                                        <td class="bloq">

                                            <div id="backdomingo">

                                                <div class="diames"><strong><?php echo $domingo;?></strong></div>

                                           
                                                <?php
                                                    if($alltask7 > 0){

                                                        if(empty($domingo)){

                                                        }else{
                                                            ?>

                                                                <form   method="POST" action="#">
                                                                    <input type="submit"   class="tottareas" value="<?php echo $alltask7.'tareas';?>" name="subverEvent" >
                                                                    <input hidden type="text"   value="<?php echo $domingo;?>" name="verTask" >
                                                                    <input hidden  type="text"   value="<?php echo $mesnum;?>" name="mesnum" >

                                                                </form>
                                                        <?php
                                                        }

                                                    }
                                                    
                                                ?>

                                                <form class="backEventBoton" method="POST" action="#">

                                                    <input  hidden type="text" value="<?php echo $mesnum;?>" name="mesnum">
                                                    <input id="<?php echo $idverD; ?>" type="submit" value="<?php echo $idverD; ?>"  name="printev" class="submitmas"> 

                                                    <?php
                                                        
                                                        if(empty($domingo)){

                                                        }else{
                                                            ?>
                                                                <div class="maseventos" >+</div>
                                                            <?php
                                                        }
                                                    ?>
                                                
                                                </form>

                                            </div>
                                        </td>
                                        
                                    </tr>
                                <?php
                            }
                    ?>



                    
                </table>

            </div>

        </section>

            
            <?php


                $printev = isset($_POST['printev']) ? $_POST['printev'] : false;
                $verTask = isset($_POST['verTask']) ? $_POST['verTask'] : false;
                $verEvent = isset($_POST['verEvent']) ? $_POST['verEvent'] : false;

                /////EVENTOS NUEVOS

                $cerrarEv = isset($_POST['cerrarEv']) ? $_POST['cerrarEv'] : false;

             

                

                if(!empty($cerrarEv)){

                }else{
                    if(!empty($verTask)){


                        ?>

                            <section id="eventos">  

                                <div class="eventonuevo">

                                    <?php
                                        $verTask = isset($_POST['verTask']) ? $_POST['verTask'] : false;
                                        $mesnum = isset($_POST['mesnum']) ? $_POST['mesnum'] : false;
                                        $diames = substr("$verTask", -2);

                            
                            
                                    ?>

                                    <div method="POST" action="saveCalendar.php">

                                        <div class="titleEVnew"><strong>MIS TAREAS</strong></div>

                                        <div  id="fechaevento"><?php echo $diames.'-'.$mesnum.'-'.$year; ?></div>
                                        <input hidden type="text" name="dechaevento" value="<?php echo $year.'-'.$mesnum.'-'.$diames; ?>"></input>  

                                        <input hidden type="text" name="yearev" value="<?php echo $year; ?>"></input> 
                                        <input hidden type="text" name="mesmes" value="<?php echo $mesmes; ?>"></input> 
                                        <input hidden type="text" name="mesnum" value="<?php echo $mesnum; ?>"></input> 
                                        <input hidden type="text" name="diames" value="<?php echo $diames; ?>"></input> 

                                
                                        <div class="barraEv"></div>

                                        <div id="backTask">

                                
                                            <table id="tablataTask">


                                                
                                                <tr id="columnasTask">
                                                    <th class="coltsk1"></th>
                                                    <th class="coltsk2">TAREA</th>
                                                    <th class="coltsk3"></th>
                                                </tr>


                                        

                                                <?php

                                                    $tabevn = "SELECT * FROM $tabtask WHERE yearPro = '$yearMin' AND  mespro LIKE '%$mesnum%' AND diapro LIKE '%$verTask%' AND useresp = '$nombreco'";
                                                    $qtabevn = $db_task->query($tabevn);                                 


                                                    while ($fila = $qtabevn->fetch(PDO::FETCH_ASSOC)) {
                                                    $tarea = $fila['actividad'];  
                                                    $estatus = $fila['frecuencia']; 
                                                    $fechaEs = $fila['fechapro']; 

                                                    $fechc= new DateTime( $fechaEs );
                                                    $fechapro = $fechc->format('d-m-Y');
                                                    $diaev = $fila['diapro'];

                                                    ?>

                                                        <tr>
                                                            <td class="center"><strong><div id="diaev"><?php echo $diaev;?></div></strong></td>
                                                         
                                                            <td><?php echo $tarea;?></td>
                                                            <td><?php echo $estatus;?></td>
                                                        </tr>


                                                    <?php


                                                    }



                                                ?>

                                            </table>
                                        

                                        </div>
                                    
                                    
                                    </div>


                                    <form  method="POST" action="#">
                                        
                                        <input type="submit" value="Cerrar" id="cerrarTask" name="subcerrarEv">

                                        <input hidden type="text" value="cerrarEv" name="cerrarEv" >
                                    </form>

                                </div>

                            </section>

                        <?php

                    }else{



                    }
                }
                

                   
            ?>
   
