<?php
session_start();
require_once '../../../varSQL/bd.php';
require_once '../varSQL/db_risk.php';
require_once '../../../varSQL/var.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];

$mes = date('m');


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

<body id="bodyprint">
        <?php

                if (isset($_POST['printy'])){

                    $tipo = $_POST['tipo'];


                    $year = $_POST['year'];     
                    $yearfx = $_POST['year'];                            
                    $periodo = $_POST['mes'];
                    $cliente = $_POST['cliente'];
                    $depto = $_POST['depto'];
                    $trabaj = $_POST['trabaj'];
                    
                    $macro = $_POST['macro'];

                    $formmacro = $_POST['macro'];
                    $enfcat = $_POST['enfcat'];
                    $enfoque = $_POST['enfcat'];
                    $sino = $_POST['sino'];
                    $evento = $_POST['evento'];

                    $evaluador = $_POST['evaluador'];
                    


                    if($tipo == 'CEDULA' ){

                        ?>

                            <section id="backcabe" >

                                <div id="nombreformprint">  <?php

                            
                                    echo 'CATALOGO DE FALLAS POTENCIALES/'.  $macro  .  '/' .  $enfcat ;
                                    ?>

                                </div>


                                    <!--
                                    <section id="backprint">


                                        <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                        <script>

                                            function imprimir(){

                                                var contenedor = document.getElementById('backprint')
                                                contenedor.style.display = 'none';
                                                window.print ();
                                                contenedor.style.display = 'block';
                                            }

                                        </script>

                                    </section>
                                        -->
                            </section>

                            <section id="backTable">

                            
                                <table class="table" id="tableCed">


                                        <tr id="columnas">
                                            <th  id="macro">MACRO</th>
                                            <th  id="enfoque">ENFOQUE</th>
                                            <th  id="falla">FALLA POTENCIAL</th>
                                            <th  id="r">R</th>
                                            <th  id="s">S</th>
                                            <th  id="n">N</th>
                                            <th  id="obs">OBSERVACIONES</th>

                                        </tr>

                                        <?php

                                        $pcat = "SELECT * FROM $tabcatllas WHERE macro LIKE '%$macro%' AND enfoque LIKE '%$enfcat%'";
                                        $printcat = $dbo->query($pcat);

                                            while ($filareg = $printcat->fetch(PDO::FETCH_ASSOC)) {
                                            
                                                echo '<tr> 
                                                <td class="center" id=macroo>' . $filareg['macro'] . '</td>
                                                <td class="justify" id=enfoquee>' . $filareg['enfoque'] . '</td>
                                                <td class="justify" id=fallaa>' . $filareg['falla'] . '</td>
                                                <td id=rr></td>
                                                <td id=ss></td>
                                                <td id=nn></td>
                                                <td id=obss></td>
                                        
                                                </tr>';

                                            } 
                                            ?>
                                            
                                            <?php
                                        
                                        ?>
                                            
                                

                            
                                                    
                        
                                </table>

                                

                            </section>
            
                
                        <?php

                    }elseif($tipo == 'DESEMPENO' ){

                        ?>

                            <section id="backcabe" >

                                <div id="nombreformprint">  <?php


                                    echo 'DESEMPEÑO DE PROCESOS/'.$year.'/'.$periodo.'/'.$cliente.'/'.$depto.'/'.$trabaj.'/'.  $macro  .  '/' .  $enfoque  .  '/' . $sino.  '/' . $evento;
                                    ?>

                                </div>


                                <!--
                                <section id="backprint">


                                    <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                    <script>

                                        function imprimir(){

                                            var contenedor = document.getElementById('backprint')
                                            contenedor.style.display = 'none';
                                            window.print ();
                                            contenedor.style.display = 'block';
                                        }

                                    </script>

                                </section>
                                    -->
                            </section>

                            <section id="backTable">


                                <?php
                                    
                                    if($adminrol == $radmin){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());
                                    }elseif($adminrol == $radreg){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());
                                    }elseif($adminrol == $radger){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                    }elseif($adminrol == $radman){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                    }
                                    
                            
                            
                                    $totalop = $casosNO + $casosdefalla;

                                    if ($totalop > 0) {
                                        $resul = (($totalop - $casosdefalla) * 100 / $totalop);
                                    }

                                ?>

                                <table class="desempResul">

                                    <tr>
                                        <th class="labelEta2">RESULTADOS</th>
                                    </tr>

                                    <tr><td class="center"><?php   echo 'FALLAS: ' . $casosdefalla;?></td></tr>

                                    <tr> <td class="center"><?php   echo 'OPORTUNIDADES: ' . $totalop ;?></td></tr>

                                    <tr>

                                        <td id="mestra" class="center">
                                            <?php

                                                $muestraactual = "SELECT * FROM $tabmuestrav";
                                                $mueact = $db_result->query($muestraactual);

                                                while ($fila = $mueact->fetch(PDO::FETCH_ASSOC)) {

                                                    $mact = $fila['muestravigente'];                    
                                                }

                                                if ($totalop >= $mact) {
                                                    echo 'MUESTRA SUFICIENTE';
                                                } else {
                                                    echo 'MUESTRA NO SUFICIENTE';
                                                }
                                            ?>            

                                        </td>

                                    </tr>

                                    <tr>

                                        <td id="resultado" class="center">

                                            
                                            <?php
                                                if ($totalop == 0) {
                                                    echo 'NO EVALUADO';
                                                } else {
                                                    echo 'RESULTADO: ' . number_format($resul, 2) . '%' . '<br>';
                                                }
                                            ?>  

                                        </td>

                                    </tr>
                                    
                                </table>

                                <table class="table" id="tableCed">
                                    <tr id="columnas">
                                        <th id="fallaD">ID</th>
                                        <th id="fallaD">ENFOQUE</th>
                                        <th id="fallaD">CRITERIO OBSERVADO</th>
                                        <th id="existeD">¿EXISTE FALLA?</th>
                                        <th id="nombreD">NOMBRE</th>
                                    </tr>                               
                            
                                    <?php


                                            if($adminrol == $radmin){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }elseif($adminrol == $radreg){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }elseif($adminrol == $radger){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }elseif($adminrol == $radman){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' 
                                                AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }
                                            while ($fila = $qtabfall->fetch(PDO::FETCH_ASSOC)) {
                                                $trabajadorNAME = $fila['trabajador']; 
                                                $idenfx = $fila['idenfx']; 
                                                $idREG = $fila['id'];

                                                $fallafall = $fila['falla']; 
                                                $riesg = $fila['riesgo']; 


                                                $bdlyenfoq= "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
                                                $qbdlyenfoq = $dbo->query($bdlyenfoq);

                                                while ($fila = $qbdlyenfoq->fetch(PDO::FETCH_ASSOC)) {
                                                    $enfoqueNAME = $fila['enfoque']; 

                                                }


                                                    ?>
                                                        <tr>
                                                            <td class="left"><?php echo $idREG;  ?></td>  
                                                            <td class="left"><?php echo $enfoqueNAME;  ?></td>  
                                                            <td class="left"><?php echo $fallafall;  ?></td>                                              
                                                            <td class="center"><?php echo $riesg;  ?></td>
                                                            <td class="left"><?php echo $trabajadorNAME;  ?></td>      
                                                        
                                                        </tr>                                       
                                                            
                                                    <?php

                                            }


                                    ?>
                                        
                                </table>


                            </section>

                        <?php
                    }elseif($tipo == 'COLABORADOR' ){

                        ?>

                            <section id="backcabePrint" >

                                <div id="nombreformprint">  <?php


                                    echo 'DESEMPEÑO DE PROCESOS/'.$year.'/'.$periodo.'/'.$cliente.'/'.$depto.'/'.$trabaj.'/'.  $macro  .  '/' .  $enfoque  .  '/' . $sino.  '/' . $evento;
                                    ?>

                                </div>


                                <!--
                                <section id="backprint">


                                    <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                    <script>

                                        function imprimir(){

                                            var contenedor = document.getElementById('backprint')
                                            contenedor.style.display = 'none';
                                            window.print ();
                                            contenedor.style.display = 'block';
                                        }

                                    </script>

                                </section>
                                    -->
                            </section>

                            <section id="backTablePrint">


                                <?php
                                    
                                    if($adminrol == $radmin){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());
                                    }elseif($adminrol == $radreg){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());
                                    }elseif($adminrol == $radger){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                    }elseif($adminrol == $radman){
                                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                        
                                        $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                    }
                                    
                            
                            
                                    $totalop = $casosNO + $casosdefalla;

                                    if ($totalop > 0) {
                                        $resul = (($totalop - $casosdefalla) * 100 / $totalop);
                                    }

                                ?>

                                <table class="desempResul">

                                    <tr>
                                        <th class="labelEta2">RESULTADOS</th>
                                    </tr>

                                    <tr><td class="center"><?php   echo 'FALLAS: ' . $casosdefalla;?></td></tr>

                                    <tr> <td class="center"><?php   echo 'OPORTUNIDADES: ' . $totalop ;?></td></tr>

                                    <tr>

                                        <td id="mestra" class="center">
                                            <?php

                                                $muestraactual = "SELECT * FROM $tabmuestrav";
                                                $mueact = $db_result->query($muestraactual);

                                                while ($fila = $mueact->fetch(PDO::FETCH_ASSOC)) {

                                                    $mact = $fila['muestravigente'];                    
                                                }

                                                if ($totalop >= $mact) {
                                                    echo 'MUESTRA SUFICIENTE';
                                                } else {
                                                    echo 'MUESTRA NO SUFICIENTE';
                                                }
                                            ?>            

                                        </td>

                                    </tr>

                                    <tr>

                                        <td id="resultado" class="center">

                                            
                                            <?php
                                                if ($totalop == 0) {
                                                    echo 'NO EVALUADO';
                                                } else {
                                                    echo 'RESULTADO: ' . number_format($resul, 2) . '%' . '<br>';
                                                }
                                            ?>  

                                        </td>

                                    </tr>
                                    
                                </table>

                                <table class="table" id="tableCed">
                                    <tr id="columnas">
                                        <th id="fallaD">ID</th>
                                        <th id="fallaD">ENFOQUE</th>
                                        <th id="fallaD">CRITERIO OBSERVADO</th>
                                        <th id="existeD">¿EXISTE FALLA?</th>
                                        <th id="nombreD">NOMBRE</th>
                                    </tr>                               
                            
                                    <?php


                                            if($adminrol == $radmin){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }elseif($adminrol == $radreg){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }elseif($adminrol == $radger){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }elseif($adminrol == $radman){
                                                $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' 
                                                AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                                $qtabfall = $dbo->query($tabfall);

                                            }
                                            while ($fila = $qtabfall->fetch(PDO::FETCH_ASSOC)) {
                                                $trabajadorNAME = $fila['trabajador']; 
                                                $idenfx = $fila['idenfx']; 
                                                $idREG = $fila['id'];

                                                $fallafall = $fila['falla']; 
                                                $riesg = $fila['riesgo']; 


                                                $bdlyenfoq= "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
                                                $qbdlyenfoq = $dbo->query($bdlyenfoq);

                                                while ($fila = $qbdlyenfoq->fetch(PDO::FETCH_ASSOC)) {
                                                    $enfoqueNAME = $fila['enfoque']; 

                                                }


                                                    ?>
                                                        <tr>
                                                            <td class="left"><?php echo $idREG;  ?></td>  
                                                            <td class="left"><?php echo $enfoqueNAME;  ?></td>  
                                                            <td class="left"><?php echo $fallafall;  ?></td>                                              
                                                            <td class="center"><?php echo $riesg;  ?></td>
                                                            <td class="left"><?php echo $trabajadorNAME;  ?></td>      
                                                        
                                                        </tr>                                       
                                                            
                                                    <?php

                                            }


                                    ?>
                                        
                                </table>


                            </section>

                        <?php
                    }elseif($tipo == 'MAPA' ){

                        ?>                                        
                            
                            <section id="backcabe" >

                                <div id="nombreformprint">  <?php


                                    echo 'MATRIZ DE RIESGOS/'.$year.'/'.$periodo.'/'.$cliente.  $macro  .  '/' .  $enfoque ;
                                    ?>

                                </div>


                                <!--
                                <section id="backprint">


                                    <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                    <script>

                                        function imprimir(){

                                            var contenedor = document.getElementById('backprint')
                                            contenedor.style.display = 'none';
                                            window.print ();
                                            contenedor.style.display = 'block';
                                        }

                                    </script>

                                </section>
                                    -->
                            </section>

                            
                            <section id="backTable">

                                <table class="table" id="tableCed">
                                    <tr id="columnas">
                                        
                                        <th id="fallaD">ENFOQUE</th>
                                        <th id="fallaD">FALLA</th>
                                        <th id="existeD">CASOS</th>
                                        <th id="nombreD">PROBABILIDAD</th>
                                        <th id="nombreD">SEVERIDIAD</th>
                                        <th id="nombreD">GESTION</th>
                                        <th id="nombreD">NPR</th>
                                        <th id="nombreD">PRIORIDAD</th>
                                    </tr>                               
                            
                                    <?php


                                        
                                            $tabfallr = "SELECT * FROM $calcrisk WHERE  yearfx LIKE '%$year%' AND mes LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                            AND macro LIKE '%$macro%'  AND enfoque LIKE '%$enfoque%'  AND enfoque LIKE '%$enfoque%' ORDER BY res DESC ";
                                            $qtabfallr = $dbo->query($tabfallr);

                                            
                                            while ($fila = $qtabfallr->fetch(PDO::FETCH_ASSOC)) {
                                                $enfoqueRISK = $fila['enfoque']; 
                                                $fallaRISK = $fila['falla']; 
                                                $totalRISK = $fila['total']; 
                                                $res_probRISK = $fila['res_prob']; 
                                                $res_sevRISK = $fila['res_sev']; 
                                                $res_barRISK = $fila['res_bar']; 
                                                $nprRISK = $fila['res']; 


                                                                                                        ?>
                                                        <tr>

                                                            <td class="left"><?php echo $enfoqueRISK;  ?></td>  
                                                            <td class="left"><?php echo $fallaRISK;  ?></td>                                              
                                                            <td class="center"><?php echo $totalRISK;  ?></td>
                                                            <td class="center"><?php echo $res_probRISK;  ?></td>      
                                                            <td class="center"><?php echo $res_sevRISK;  ?></td>  
                                                            <td class="center"><?php echo $res_barRISK;  ?></td>  
                                                            <td class="center"><?php echo $nprRISK;  ?></td>  
                                                        


                                                                <?php
                                                                    if($nprRISK == 0){         
                                                                        ?>
                                                                            <td >NO EVALUADO</td>
                                                                        <?php
                                                                    }elseif($nprRISK >= 0.01 & $nprRISK <= 5){
                                                                        ?>
                                                                            <td class="muybajo"><strong>MUY BAJA</strong></td>
                                                                        <?php
                                                                    }elseif($nprRISK >= 5.1 & $nprRISK <= 35){
                                                                        ?>
                                                                            <td class="bajo"><strong>BAJA</strong></td>
                                                                        <?php
                                                                    }elseif($nprRISK >= 35.1 & $nprRISK <= 85){
                                                                        ?>
                                                                            <td class="medio"><strong>MEDIA</strong></td>
                                                                        <?php
                                                                    }elseif($nprRISK >= 85.1 & $nprRISK <= 120){
                                                                        ?>
                                                                        <td class="alto"><strong>ALTA</strong></td>
                                                                    <?php
                                                                    }elseif($nprRISK >= 120.1){
                                                                        ?>
                                                                        <td class="muyalto"><strong>MUY ALTA</strong></td>
                                                                    <?php
                                                                    }
                                                                ?>
                                                            
                                                        
                                                        </tr>                                       
                                                            
                                                    <?php

                                            }


                                    ?>
                                        
                                </table>


                            </section>

                        <?php

                    }elseif($tipo == 'EVALUADORES' ){
                        $nombreEV = '';
                        $bdnameEVAL= "SELECT * FROM $sresuall WHERE  usuario = '$evaluador'  ";
                        $qbdnameEVAL = $db_users->query($bdnameEVAL);

                        while ($fila = $qbdnameEVAL->fetch(PDO::FETCH_ASSOC)) {
                            $nombreEV = $fila['nombre']; 

                        }


                        ?>

                            
                            
                            <section id="backcabe" >

                                <div id="nombreformprint">  <?php


                                    echo 'OBSERVACIONES POR EVALUADORES/'.$year.'/'.$periodo.'/'.$cliente.  $macro  .  '/' .  $enfoque.'/'.$nombreEV ;
                                    ?>

                                </div>


                                <!--
                                <section id="backprint">


                                    <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                    <script>

                                        function imprimir(){

                                            var contenedor = document.getElementById('backprint')
                                            contenedor.style.display = 'none';
                                            window.print ();
                                            contenedor.style.display = 'block';
                                        }

                                    </script>

                                </section>
                                    -->
                            </section>

                
                            <section id="backTable">


                                <?php
                                    
                            
                                        $casosNOE = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                        AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND evaluador = '$evaluador' ")->fetch());
                                        
                                        $casosdefallaE = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                        AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND evaluador = '$evaluador' ")->fetch());
                                
                            
                            
                                    $totalopE = $casosNOE + $casosdefallaE;

                                    if ($totalopE > 0) {
                                        $resulE = (($totalopE - $casosdefallaE) * 100 / $totalopE);
                                    }


                                    
                                
                                ?>

                                <table class="desempResul">

                                    <tr>
                                        <th class="labelEta2">RESULTADOS</th>
                                    </tr>

                                    <tr><td class="center"><?php   echo 'FALLAS: ' . $casosdefallaE;?></td></tr>

                                    <tr> <td class="center"><?php   echo 'OPORTUNIDADES: ' . $totalopE ;?></td></tr>

                                    <tr>

                                        <td id="mestra" class="center">
                                            <?php

                                                $muestraactual = "SELECT * FROM $tabmuestrav";
                                                $mueact = $db_result->query($muestraactual);

                                                while ($fila = $mueact->fetch(PDO::FETCH_ASSOC)) {

                                                    $mact = $fila['muestravigente'];                    
                                                }

                                                if ($totalopE >= $mact) {
                                                    echo 'MUESTRA SUFICIENTE';
                                                } else {
                                                    echo 'MUESTRA NO SUFICIENTE';
                                                }
                                            ?>            

                                        </td>

                                    </tr>

                                    <tr>

                                        <td id="resultado" class="center">

                                            
                                            <?php
                                                if ($totalopE == 0) {
                                                    echo 'NO EVALUADO';
                                                } else {
                                                    echo 'RESULTADO: ' . number_format($resulE, 2) . '%' . '<br>';
                                                }
                                            ?>  

                                        </td>

                                    </tr>
                                    
                                </table>

                                <table class="table" id="tableCed">
                                    <tr id="columnas">
                                        <th id="fallaD">ID</th>
                                        <th id="fallaD">ENFOQUE</th>
                                        <th id="fallaD">CRITERIO OBSERVADO</th>
                                        <th id="existeD">¿EXISTE FALLA?</th>
                                        <th id="nombreD">NOMBRE</th>
                                    </tr>                               
                            
                                    <?php


                                        
                                            $tabfallE = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                            AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' AND evaluador = '$evaluador'  ";
                                            $qtabfallE = $dbo->query($tabfallE);

                                            while ($fila = $qtabfallE->fetch(PDO::FETCH_ASSOC)) {
                                                $trabajadorNAME = $fila['trabajador']; 
                                                $idenfx = $fila['idenfx']; 
                                                $idREG = $fila['id']; 

                                                $fallafall = $fila['falla']; 
                                                $riesg = $fila['riesgo']; 


                                                $bdlyenfoq= "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
                                                $qbdlyenfoq = $dbo->query($bdlyenfoq);

                                                while ($fila = $qbdlyenfoq->fetch(PDO::FETCH_ASSOC)) {
                                                    $enfoqueNAME = $fila['enfoque']; 

                                                }


                                                    ?>
                                                        <tr>
                                                        
                                                            <td class="left"><?php echo $idREG;  ?></td>  
                                                            <td class="left"><?php echo $enfoqueNAME;  ?></td>  
                                                            <td class="left"><?php echo $fallafall;  ?></td>                                              
                                                            <td class="center"><?php echo $riesg;  ?></td>
                                                            <td class="left"><?php echo $trabajadorNAME;  ?></td>      
                                                        
                                                        </tr>                                       
                                                            
                                                    <?php

                                            }


                                    ?>
                                        
                                </table>


                            </section>

                        <?php
                    }elseif($tipo == 'EVENTOS' ){


                        ?>

                            <section id="backcabe" >

                                <div id="nombreformprint">  <?php


                                    echo 'CONSECUENCIAS POR TIPO DE FALLA/'.$year.'/'.$periodo.'/'.$cliente.  $macro  .  '/' .  $enfoque.'/'.$evento;
                                    ?>

                                </div>


                                <!--
                                <section id="backprint">


                                    <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                    <script>

                                        function imprimir(){

                                            var contenedor = document.getElementById('backprint')
                                            contenedor.style.display = 'none';
                                            window.print ();
                                            contenedor.style.display = 'block';
                                        }

                                    </script>

                                </section>
                                    -->
                            </section>

                
                            <section id="backTable">

                                <table class="table" id="tableCed">
                                    <tr id="columnas">
                                        <th id="fallaD">ID</th>
                                        <th id="fallaD">ENFOQUE</th>
                                        <th id="fallaD">CRITERIO OBSERVADO</th>
                                        <th id="existeD">¿EXISTE FALLA?</th>
                                        <th id="fallaD">TIPO</th>
                                        <th id="fallaD">EVENTO</th>
                                        <th id="nombreD">NOMBRE</th>
                                    </tr>                               
                            
                                    <?php


                                        
                                            $tabfallE = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                            AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                            $qtabfallE = $dbo->query($tabfallE);

                                            while ($fila = $qtabfallE->fetch(PDO::FETCH_ASSOC)) {
                                                $trabajadorNAME = $fila['trabajador']; 
                                                $idenfx = $fila['idenfx']; 
                                                $idREG = $fila['id']; 

                                                $fallafall = $fila['falla']; 
                                                $riesg = $fila['riesgo']; 
                                                $tipoEV = $fila['tipo'];
                                                $eventoEV = $fila['evento'];
                                            
                                                $bdlyenfoq= "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
                                                $qbdlyenfoq = $dbo->query($bdlyenfoq);

                                                while ($fila = $qbdlyenfoq->fetch(PDO::FETCH_ASSOC)) {
                                                    $enfoqueNAME = $fila['enfoque']; 

                                                }

                                                    ?>
                                                        <tr>
                                                        
                                                            <td class="left"><?php echo $idREG;  ?></td>  
                                                            <td class="left"><?php echo $enfoqueNAME;  ?></td>  
                                                            <td class="left"><?php echo $fallafall;  ?></td>                                              
                                                            <td class="center"><?php echo $riesg;  ?></td>
                                                            <td class="left"><?php echo $tipoEV;  ?></td>      
                                                            <td class="left"><?php echo $eventoEV;  ?></td>      
                                                            <td class="left"><?php echo $trabajadorNAME;  ?></td>    
                                                        </tr>                                       
                                                            
                                                    <?php

                                            }


                                    ?>
                                        
                                </table>


                            </section>

                        <?php
                    }


                }
        ?>
</body>


    
</html>