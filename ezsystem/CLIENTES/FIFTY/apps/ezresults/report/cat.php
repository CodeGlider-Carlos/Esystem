<?php


require_once '../varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

$year = isset($_POST['year']) ? $_POST['year'] : false;
$objetivos = isset($_POST['objetivos']) ? $_POST['objetivos'] : false;
$perspectiva = isset($_POST['perspectiva']) ? $_POST['perspectiva'] : false;
$tipopro = isset($_POST['tipopro']) ? $_POST['tipopro'] : false;
$servderpcom = isset($_POST['servderpcom']) ? $_POST['servderpcom'] : false;

$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : false;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_catalogo</title>
    <link rel="icon" type="favicon/x-icon" href="../img/logos/deYELL2.svg" />
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="../css/syarofonts.css">
    <link rel="stylesheet" type="text/css" href="css/caty.css">

    <!---------------------  CONTROLADORES JS----------------------->


    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>



</head>

<body>
    <div id="cinta">
        <h1 class="titulo"></h1>
        <!--------------------CONTENEDOR NAVEGACION BAJO PARA CERRAR NORMA Y REGRESAR A ELEGIR NORMA-->
    
    </div>

    <div id="CAT_OBJETIVOS">

        <?php 

            if (isset($_POST['catobj'])) {
                            
                $clienteu = $_POST['cliente'];
                $year = $_POST['year'];
                $tipobj = $_POST['tipobj'];
                $perspectiva = $_POST['perspectiva'];
                $servdepcom = $_POST['servderpcom'];
                $gerdir = $_POST['gerdir'];

                if($tipobj == 'ESTRATEGICO'){

                    ?>

                        <section id="cbecera">     
                            <div id="oculPrint"></div>
                            <input type="image" src="../img/impresionblack.svg" id="printIcon" onclick="print();">
                            <div id="nombreformprint">  <?php
                                echo 'CATALOGO DE INDICADORES/'.$clienteu.'/'.$year.'/'.$tipobj.'/'.$perspectiva.'/'.$servdepcom;
                            ?>

                            </div>

                            <img id="logcliente" src="../logclient/logclient.png" />
                            <div id="seicapp"><?php   echo 'deodi by seicapp';?></div>   
                            <div id="fechacorte"><?php $fechacorte=date('d/m/y'); echo 'CORTE AL:  ' . $fechacorte;  ?></div>

                        </section>

                        <section id="conttab">

                            <table id="tablatab">

                                <tr id="columnas">
                                    <th id="objts">ID</th>
                                    <th id="objts">RESPONSABLE</th>
                                    <th id="nameind">INDICADOR</th>
                                    <th id="tipoind">TIPO</th>
                                    <th id="pondes">POND</th>
                                    <th id="metas">META</th>

                                </tr>

                                <?php

                                    $tabindi = "SELECT * FROM $smartobj WHERE unidad = '$clienteu' AND yearini LIKE '%$year%'
                                    AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND gerdir LIKE '%$gerdir%' ";
                                    $qtabindi = $dbo->query($tabindi);

                                    //////////////////impresion de tabla
                                    while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                        $num = $fila['num'];
                                        $objetivo = $fila['objetivo'];
                                        $unmed = $fila['unmed'];
                                        $pond = $fila['pond'];
                                        $perspectiva = $fila['perspectiva'];
                                        $meta = $fila['meta'];
                                        $idobj = $fila['idobj'];
                                        $useresp = $fila['useresp'];
                                        $perspectiva = $fila['perspectiva'];

                                        ?>
                                            <tr>
                                                <td class="center"><?php echo  $idobj;  ?></td>
                                                <td class="center"><?php echo  $useresp;  ?></td>
                                                <td ><?php echo  $objetivo;  ?></td>
                                                <td class="center"><?php echo  $perspectiva;  ?></td>
                                                <td class="center"><?php echo number_format($pond,1).'%'; ?></td>
                                                <td class="center">
                                                    <?php 

                                                        if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                            $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                            echo '$'. number_format($meta); 
                                                        }elseif($unmed == 'PORCENTAJE DE'){
                                                            echo number_format($meta, 2) . '%';
                                                        }elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' 
                                                                OR $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                            echo $meta ;
                                                        }elseif($unmed == 'HORAS PROMEDIO DE'){
                                                            echo $meta.'hrs.' ;
                                                        }elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                            echo $meta.' días' ;
                                                        }elseif($unmed == 'INDICE DE'){
                                                            echo number_format($meta,1); 
                                                        }
                                                    ?>
                                                </td>
                                            </tr>

                                        <?php

                                    }
                                    
                                
                                ?>

                            
                                    
                            </table>

                        </section>
                    
                    <?php

                }elseif($tipobj == 'FUNCIONAL'){
    
                    ?>
                    
                    <section id="cbecera">     
                        <div id="oculPrint"></div>
                        <input type="image" src="../img/impresionblack.svg" id="printIcon" onclick="print();">
                        <div id="nombreformprint">  <?php
                            echo 'CATALOGO DE INDICADORES/'.$clienteu.'/'.$year.'/'.$tipobj.'/'.$perspectiva.'/'.$servdepcom;
                        ?>

                        </div>

                        <img id="logcliente" src="../logclient/logclient.png" />
                        <div id="seicapp"><?php   echo 'deodi by seicapp';?></div>   
                        <div id="fechacorte"><?php $fechacorte=date('d/m/y'); echo 'CORTE AL:  ' . $fechacorte;  ?></div>

                    </section>

                    <section id="conttab">

                        <table id="tablatab">

                            <tr id="columnas">
                                <th id="objts">ID</th>
                                <th id="objts">RESPONSABLE</th>
                                <th id="nameind">INDICADOR</th>
                                <th id="tipoind">TIPO</th>
                                <th id="pondes">POND</th>
                                <th id="metas">META</th>

                            </tr>

                            <?php

                                $tabindi = "SELECT * FROM $smartobjfun WHERE unidad = '$clienteu' AND yearini LIKE '%$year%'
                                AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND gerdir LIKE '%$gerdir%' ";
                                $qtabindi = $dbo->query($tabindi);

                                //////////////////impresion de tabla
                                while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                    $num = $fila['num'];
                                    $objetivo = $fila['objetivo'];
                                    $unmed = $fila['unmed'];
                                    $pond = $fila['pond'];
                                    $perspectiva = $fila['perspectiva'];
                                    $meta = $fila['meta'];
                                    $idobj = $fila['idobfun'];
                                    $useresp = $fila['useresp'];
                                    $perspectiva = $fila['perspectiva'];

                                    ?>
                                        <tr>
                                            <td class="center"><?php echo  $idobj;  ?></td>
                                            <td class="center"><?php echo  $useresp;  ?></td>
                                            <td ><?php echo  $objetivo;  ?></td>
                                            <td class="center"><?php echo  $perspectiva;  ?></td>
                                            <td class="center"><?php echo number_format($pond,1).'%'; ?></td>
                                            <td class="center">
                                                <?php 

                                                    if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                        $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                        echo '$'. number_format($meta); 
                                                    }elseif($unmed == 'PORCENTAJE DE'){
                                                        echo number_format($meta, 2) . '%';
                                                    }elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' 
                                                            OR $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                        echo $meta ;
                                                    }elseif($unmed == 'HORAS PROMEDIO DE'){
                                                        echo $meta.'hrs.' ;
                                                    }elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                        echo $meta.' días' ;
                                                    }elseif($unmed == 'INDICE DE'){
                                                        echo number_format($meta,1); 
                                                    }
                                                ?>
                                            </td>
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

    </div>

    <div id="CAT_INDICA">

        <?php 

            if (isset($_POST['catindic'])) {
                            
                $clienteu = $_POST['cliente'];
                $year = $_POST['year'];
                $tipoind = $_POST['tipoind'];
                $perspectiva = $_POST['perspectiva'];
                $servdepcom = $_POST['servderpcom'];

                ?>
                    <section id="cbecera">     
                        <div id="oculPrint"></div>
                        <input type="image" src="../img/impresionblack.svg" id="printIcon" onclick="print();">
                        <div id="nombreformprint">  <?php
                            echo 'CATALOGO DE INDICADORES/'.$clienteu.'/'.$year.'/'.$tipoind.'/'.$perspectiva.'/'.$servdepcom;
                        ?>

                        </div>

                        <img id="logcliente" src="../logclient/logclient.png" />
                        <div id="seicapp"><?php   echo 'deodi by seicapp';?></div>   
                        <div id="fechacorte"><?php $fechacorte=date('d/m/y'); echo 'CORTE AL:  ' . $fechacorte;  ?></div>

                    </section>

                    <section id="conttab">

                        <table id="tablatab">

                            <tr id="columnas">
                                <th id="objts">ID OBJETIVO</th>
                                <th id="objts">ID INDICADOR</th>
                                <th id="objts">RESPONSABLE</th>
                                <th id="nameind">INDICADOR</th>
                                <th id="tipoind">TIPO</th>
                                <th id="pondes">POND</th>
                                <th id="metas">META</th>

                            </tr>

                            <?php

                                $tabindi = "SELECT * FROM $smartindi WHERE unidad = '$clienteu' AND yearini LIKE '%$year%' AND tipo LIKE '%$tipoind%'
                                AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%'";
                                $qtabindi = $dbo->query($tabindi);

                                //////////////////impresion de tabla
                                while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                    $num = $fila['num'];
                                    $indicador = $fila['indicador'];
                                    $unmed = $fila['unmed'];
                                    $pond = $fila['pond'];
                                    $perspectiva = $fila['perspectiva'];
                                    $meta = $fila['meta'];
                                    $logro = $fila['logro'];
                                    $idobj = $fila['idobj'];
                                    $idindi = $fila['idindi'];
                                    $cumplimiento = $fila['cumplimiento'];
                                    $desempeno = $fila['desempeno'];
                                    $useresp = $fila['useresp'];
                                    $tipo = $fila['tipo'];

                                    ?>
                                        <tr>
                                            <td class="center"><?php echo  $idobj;  ?></td>
                                            <td class="center"><?php echo  $idindi;  ?></td>
                                            <td class="center"><?php echo  $useresp;  ?></td>
                                            <td ><?php echo  $indicador;  ?></td>
                                            <td class="center"><?php echo  $tipo;  ?></td>
                                            <td class="center"><?php echo number_format($pond,1).'%'; ?></td>
                                            <td class="center">
                                                <?php 

                                                    if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                        $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                        echo '$'. number_format($meta); 
                                                    }elseif($unmed == 'PORCENTAJE DE'){
                                                        echo number_format($meta, 2) . '%';
                                                    }elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' 
                                                            OR $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                        echo $meta ;
                                                    }elseif($unmed == 'HORAS PROMEDIO DE'){
                                                        echo $meta.'hrs.' ;
                                                    }elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                        echo $meta.' días' ;
                                                    }elseif($unmed == 'INDICE DE'){
                                                        echo number_format($meta,1); 
                                                    }
                                                ?>
                                            </td>
                                        </tr>

                                    <?php

                                }
                                
                            
                            ?>

                        
                                
                        </table>

                    </section>
                
                <?php

            }

        ?>
        
    </div>

    <div id="TAB_OBJETIVOS">

        <?php 

            if (isset($_POST['tabobj'])) {
                            
                $clientesu = $_POST['cliente'];
                $year = $_POST['year'];
                $tipobj = $_POST['tipobj'];
                $perspectiva = $_POST['perspectiva'];
                $servdepcom = $_POST['servderpcom'];
                $gerdir = $_POST['gerdir'];
                $periodo = $_POST['periodo'];

                if($periodo == 1){
                    $conmes = 'm1';
                }elseif($periodo == 2){
                    $conmes = 'm2';
                }elseif($periodo == 3){
                    $conmes = 'm3';
                }elseif($periodo == 4){
                    $conmes = 'm4';
                }elseif($periodo == 5){
                    $conmes = 'm5';
                }elseif($periodo == 6){
                    $conmes = 'm6';
                }elseif($periodo == 7){
                    $conmes = 'm7';
                }elseif($periodo == 8){
                    $conmes = 'm8';
                }elseif($periodo == 9){
                    $conmes = 'm9';
                }elseif($periodo == 10){
                    $conmes = 'm10';
                }elseif($periodo == 11){
                    $conmes = 'm11';
                }elseif($periodo == 12){
                    $conmes = 'm12';
                }
            

                if($tipobj == 'ESTRATEGICO'){

                    ?>

                        <section id="cbecera">     
                            <div id="oculPrint"></div>
                            <input type="image" src="../img/impresionblack.svg" id="printIcon" onclick="print();">
                            <div id="nombreformprint">  <?php
                                echo 'TABLERO DE OBJETIVOS/'.$clientesu.'/'.$year.'/'.$periodo.'/'.$tipobj.'/'.$perspectiva.'/'.$servdepcom;
                            ?>

                            </div>

                            <img id="logcliente" src="../logclient/logclient.png" />
                            <div id="seicapp"><?php   echo 'deodi by seicapp';?></div>   
                            <div id="fechacorte"><?php $fechacorte=date('d/m/y'); echo 'CORTE AL:  ' . $fechacorte;  ?></div>


                            <?php 
                            ////////////////GLOBAL
                            $valdobj = "SELECT * FROM $smartobj WHERE yearini LIKE '%$year%'
                            AND unidad LIKE '%$clientesu%' AND useresp LIKE '%$servderpcom%' AND activo = 'SI' 
                            AND perspectiva LIKE '%$perspectiva%' AND gerdir = '$gerdir'";
                            $qvaldobj = $dbo->query($valdobj);
                            while ($fila= $qvaldobj->fetch(PDO::FETCH_ASSOC)) {

                                $valdyobj = $fila['idglobj'];
                                $nameobj = $fila['objetivo'];
                                $idobj = $fila['idobj'];


                                
                                $desmefin = current($dbo->query("SELECT SUM(alldes) FROM $taboj WHERE yearini LIKE '%$year%'
                                AND unidad LIKE '%$clientesu%' AND useresp LIKE '%$servderpcom%' AND perspectiva LIKE '%$perspectiva%' AND gerdir = '$gerdir' AND idglobj = '$valdyobj'  ")->fetch());
                                    
                            }       
                            
                            if(empty($desmefin)){

                                
                            
                                ?><div id="fechacorte" ><?php echo 'NE';?></div><?php

                                }else{
                                    ?><div id="fechacorte" ><?php echo 'DESEMPEÑO INTEGRAL: '. number_format($desmefin,2).'%' ;?></div><?php
                            }

                            ?>
                        </section>
                
                        <section id="conttab">

                            <table id="tablatab">

                                <tr id="columnas">
                                    <th >ID</th>
                                    <th >RESPONSABLE</th>
                                    <th >INDICADOR</th>    
                                    <th >PERSPECTIVA</th>
                                    <th >POND</th>
                                    <th >META</th>
                                    <th >LOGRO</th>
                                    <th >CUMPLE</th>
                                    <th >DESEMPEÑO</th>
                                </tr>
                                
                                <section id="semf">

                                    <?php 
                                        ///////////////////////////////////SEMAFORO VIGENT
                                        //////blue

                                        $seminblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                        $qseminblu = $dbo->query($seminblu);
                                        while ($filase= $qseminblu->fetch(PDO::FETCH_ASSOC)) {

                                            $minblu = $filase['liminferior'];

                                        }

                                        $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                        $qsemaxblu = $dbo->query($semaxblu);
                                        while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                            $maxblu = $filase['limsuperior'];

                                        }

                                        //////green

                                        $semingreen = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                        $qsemingreen = $dbo->query($semingreen);
                                        while ($filase= $qsemingreen->fetch(PDO::FETCH_ASSOC)) {

                                            $mingreen= $filase['liminferior'];

                                        }

                                        $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                        $qsemaxblu = $dbo->query($semaxblu);
                                        while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                            $maxgreen = $filase['limsuperior'];

                                        }

                                        //////yell

                                        $seminyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                        $qseminyell = $dbo->query($seminyell);
                                        while ($filase= $qseminyell->fetch(PDO::FETCH_ASSOC)) {

                                            $minyell= $filase['liminferior'];

                                        }

                                        $semaxyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                        $qsemaxyell = $dbo->query($semaxyell);
                                        while ($filase= $qsemaxyell->fetch(PDO::FETCH_ASSOC)) {

                                            $maxyell = $filase['limsuperior'];

                                        }

                                        //////red

                                        $seminred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                        $qseminred = $dbo->query($seminred);
                                        while ($filase= $qseminred->fetch(PDO::FETCH_ASSOC)) {

                                            $minred= $filase['liminferior'];

                                        }

                                        $semaxred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                        $qsemaxred = $dbo->query($semaxred);
                                        while ($filase= $qsemaxred->fetch(PDO::FETCH_ASSOC)) {

                                            $maxred = $filase['limsuperior'];

                                        }

                                        //////guind

                                        $seminguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                        $qseminguind = $dbo->query($seminguind);
                                        while ($filase= $qseminguind->fetch(PDO::FETCH_ASSOC)) {

                                            $minguind= $filase['liminferior'];

                                        }

                                        $semaxguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                        $qsemaxguind = $dbo->query($semaxguind);
                                        while ($filase= $qsemaxguind->fetch(PDO::FETCH_ASSOC)) {

                                            $maxguind = $filase['limsuperior'];

                                        }

                                    ?>

                                </section>

                                <?php


                            
                                    $valdobj2 = "SELECT * FROM $smartobj WHERE unidad = '$clientesu' AND yearini LIKE '%$year%'
                                    AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND gerdir LIKE '%$gerdir%'
                                    AND activo = 'SI' ";
                                    $qvaldobj2 = $dbo->query($valdobj2);

                                    while ($fila= $qvaldobj2->fetch(PDO::FETCH_ASSOC)) {

                                        $valdyobj2 = $fila['idglobj'];
                                    }

                                    if(!empty($valdyobj2)){

                                    

                                    $tabindi = "SELECT * FROM $smartobj WHERE  unidad = '$clientesu' AND yearini LIKE '%$year%'
                                    AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND gerdir LIKE '%$gerdir%'
                                    AND idglobj LIKE '%$valdyobj2%' AND activo = 'SI'";

                                    $qtabindi = $dbo->query($tabindi);

                                    //////////////////impresion de tabla
                                    while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                        $num = $fila['num'];
                                        $objetivo = $fila['objetivo'];
                                        $unmed = $fila['unmed'];               
                                        $perspect = $fila['perspectiva'];
                                        $meta = $fila['meta'];  
                                        $pond = $fila['pond'];               
                                        $idobj = $fila['idobj'];           
                                        $useresp = $fila['useresp'];
                                        $idglobj = $fila['idglobj'];  
                        
                                            ?>

                                                
                                                <tr>
                                                    <td class="center"><?php echo $idobj ;?></td>
                                                    <td class="center"><?php echo $useresp ;?></td>
                                                    <td ><?php echo $objetivo ;?></td>
                                                    <td class="center"><?php echo $perspect ;?></td>
                                                    <td class="center"><?php echo number_format($pond, 2) . '%'; ;?></td>
                                                
                                                    <td id="metA" class="center">
                                                        <?php

                                                            if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                            $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                                echo '$'. number_format($meta); 
                                                            }
                                                            elseif($unmed == 'PORCENTAJE DE'){
                                                                echo number_format($meta, 2) . '%';
                                                            }
                                                            elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' OR $unmed == 'INDICE DE' OR
                                                                    $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE' OR $unmed == 'PROMEDIO DE'){
                                                                echo $meta ;
                                                            }
                                                            elseif($unmed == 'HORAS PROMEDIO DE'){
                                                                echo $meta.'hrs.';
                                                            }
                                                            elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                                echo $meta.' días';
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                
                                                    <td id="logr" class="center">

                                                    
                                                                <?php


                                                                //////////////////////calcular datos por objetivo

                                                                if(empty($periodo)){
                                                                    $allobj = current($dbo->query("SELECT COUNT(*) FROM $smartindi WHERE unidad LIKE '%$clientesu%' AND activo = 'SI' AND idobj = '$idobj'")->fetch());                                                            
                                                                    $sumobj = current($dbo->query("SELECT SUM(logro) FROM $smartindi WHERE unidad LIKE '%$clientesu%' AND activo = 'SI' AND idobj = '$idobj' ")->fetch());
                                                                    
                                                                }else{
                                                                    $allobj = current($dbo->query("SELECT COUNT(*) FROM $smartindi WHERE unidad LIKE '%$clientesu%' AND activo = 'SI' AND idobj = '$idobj'")->fetch());                                                            
                                                                    $sumobj = current($dbo->query("SELECT SUM(logro) FROM $smartindi WHERE unidad LIKE '%$clientesu%' AND activo = 'SI' AND idobj = '$idobj' AND $conmes ")->fetch());
                                                                    
                                                                }
                                                            
                                                        
                                                                
                                                                    if($allobj == 0){
                                                                    
                                                                        echo 'NE';   
                                                                    }else{

                                                                        $logro = $sumobj/$allobj;

                                                                        if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                                        $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                                            echo '$'. number_format($logro);
                                                                        }
                                                                        elseif($unmed == 'PORCENTAJE DE'){
                                                                            echo number_format($logro, 2) . '%';
                                                                        }
                                                                        elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' OR 
                                                                                $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                                            echo $logro ;
                                                                        }
                                                                        elseif($unmed == 'HORAS PROMEDIO DE'){
                                                                            echo $logro.'hrs.' ;
                                                                        }
                                                                        elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
                                                                            echo $logro.' días' ;
                                                                        }
                                                                        elseif($unmed == 'INDICE DE' OR $unmed == 'PROMEDIO DE'){
                                                                            echo number_format($logro, 1); 
                                                                        }
                                                                    }
                                                                
                                                                ?>
                                                    
                                                    </td>
                                                    
                                                    <td id="resultad" class="center">

                                                        
                                                                <?php

                                                                

                                                                    if($allobj == 0){
                                                                        
                                                                            echo 'NE';                                   
                                                                        }else{
                                                                            $cumplimiento = ($logro*100)/$meta;
                                                                            if($cumplimiento >= $minguind & $cumplimiento < $maxguind){
                                                                            echo number_format($cumplimiento, 2) . '%';                           
                                                                            }elseif($cumplimiento >= $minred & $cumplimiento < $maxred){
                                                                                echo number_format($cumplimiento, 2) . '%';                       
                                                                            }elseif($cumplimiento >= $minyell & $cumplimiento < $maxyell){
                                                                                echo number_format($cumplimiento, 2) . '%';                      
                                                                            }elseif($cumplimiento >= $mingreen & $cumplimiento < $maxgreen){
                                                                            echo number_format($cumplimiento, 2) . '%';                       
                                                                            }elseif($cumplimiento >= $minblu){
                                                                            echo number_format($cumplimiento, 2) . '%';                               
                                                                            }
                                                                        
                                                                    }                                        
                                                                
                                                                ?>
                                                    

                                                    </td>

                                                    <td id="desempen" class="center">

                                                        <?php

                                                            
                                                            
                                                            if($allobj == 0){
                                                                                    
                                                                echo 'NE'; 
                                                            }else{
                                                                $cumplimi = ($logro*100)/$meta;
                                                                $descum = ($pond*$cumplimi)/100;
                                                            

                                                                echo number_format($descum, 2) . '%';
                                                            
                                                            
                                                                

                                                            }
                                                        ?>

                                                    </td>

                                                </tr>



                                            <?php



                                    }
                                }
                                    
                                ?>

                            
                                    
                            </table>

                        </section>

                    
                    <?php

                }elseif($tipobj == 'FUNCIONAL'){

                    $clienteu = $_POST['cliente'];
                    $year = $_POST['year'];
                    $tipobj = $_POST['tipobj'];
                    $perspectiva = $_POST['perspectiva'];
                    $servdepcom = $_POST['servderpcom'];
                    $gerdir = $_POST['gerdir'];

                    ?>
                    
                         <section id="cbecera">     
                            <div id="oculPrint"></div>
                            <input type="image" src="../img/impresionblack.svg" id="printIcon" onclick="print();">
                            <div id="nombreformprint">  <?php
                                echo 'TABLERO DE OBJETIVOS/'.$clientesu.'/'.$year.'/'.$tipobj.'/'.$perspectiva.'/'.$servdepcom;
                            ?>

                            </div>

                            <img id="logcliente" src="../logclient/logclient.png" />
                            <div id="seicapp"><?php   echo 'deodi by seicapp';?></div>   
                            <div id="fechacorte"><?php $fechacorte=date('d/m/y'); echo 'CORTE AL:  ' . $fechacorte;  ?></div>


                            <?php 
                            ////////////////GLOBAL
                            $valdobj = "SELECT * FROM $smartobjfun WHERE yearini LIKE '%$year%'
                            AND unidad LIKE '%$clientesu%' AND useresp LIKE '%$servderpcom%' AND activo = 'SI' 
                            AND perspectiva LIKE '%$perspectiva%' AND gerdir = '$gerdir'";
                            $qvaldobj = $dbo->query($valdobj);
                            while ($fila= $qvaldobj->fetch(PDO::FETCH_ASSOC)) {

                                $valdyobj = $fila['idglobf'];
                                $nameobj = $fila['objetivo'];
                                $idobj = $fila['idobfun'];
                                $desmefin = current($dbo->query("SELECT SUM(alldes) FROM $taboj WHERE yearini LIKE '%$year%'
                                AND unidad LIKE '%$clientesu%' AND useresp LIKE '%$servderpcom%' AND perspectiva LIKE '%$perspectiva%' AND gerdir = '$gerdir' AND idglobf = '$valdyobj'  ")->fetch());
                                    
                            }       
                            
                            if(empty($desmefin)){

                                
                            
                                ?><div id="fechacorte" ><?php echo 'NE';?></div><?php

                                }else{
                                    ?><div id="fechacorte" ><?php echo 'DESEMPEÑO INTEGRAL: '. number_format($desmefin,2).'%' ;?></div><?php
                            }

                            ?>
                        </section>
                
                        <section id="conttab">

                            <table id="tablatab">

                                <tr id="columnas">
                                    <th >ID</th>
                                    <th >RESPONSABLE</th>
                                    <th >INDICADOR</th>    
                                    <th >PERSPECTIVA</th>
                                    <th >POND</th>
                                    <th >META</th>
                                    <th >LOGRO</th>
                                    <th >CUMPLE</th>
                                    <th >DESEMPEÑO</th>
                                </tr>
                                
                                <section id="semf">

                                    <?php 
                                        ///////////////////////////////////SEMAFORO VIGENT
                                        //////blue

                                        $seminblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                        $qseminblu = $dbo->query($seminblu);
                                        while ($filase= $qseminblu->fetch(PDO::FETCH_ASSOC)) {

                                            $minblu = $filase['liminferior'];

                                        }

                                        $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                        $qsemaxblu = $dbo->query($semaxblu);
                                        while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                            $maxblu = $filase['limsuperior'];

                                        }

                                        //////green

                                        $semingreen = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                        $qsemingreen = $dbo->query($semingreen);
                                        while ($filase= $qsemingreen->fetch(PDO::FETCH_ASSOC)) {

                                            $mingreen= $filase['liminferior'];

                                        }

                                        $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                        $qsemaxblu = $dbo->query($semaxblu);
                                        while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                            $maxgreen = $filase['limsuperior'];

                                        }

                                        //////yell

                                        $seminyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                        $qseminyell = $dbo->query($seminyell);
                                        while ($filase= $qseminyell->fetch(PDO::FETCH_ASSOC)) {

                                            $minyell= $filase['liminferior'];

                                        }

                                        $semaxyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                        $qsemaxyell = $dbo->query($semaxyell);
                                        while ($filase= $qsemaxyell->fetch(PDO::FETCH_ASSOC)) {

                                            $maxyell = $filase['limsuperior'];

                                        }

                                        //////red

                                        $seminred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                        $qseminred = $dbo->query($seminred);
                                        while ($filase= $qseminred->fetch(PDO::FETCH_ASSOC)) {

                                            $minred= $filase['liminferior'];

                                        }

                                        $semaxred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                        $qsemaxred = $dbo->query($semaxred);
                                        while ($filase= $qsemaxred->fetch(PDO::FETCH_ASSOC)) {

                                            $maxred = $filase['limsuperior'];

                                        }

                                        //////guind

                                        $seminguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                        $qseminguind = $dbo->query($seminguind);
                                        while ($filase= $qseminguind->fetch(PDO::FETCH_ASSOC)) {

                                            $minguind= $filase['liminferior'];

                                        }

                                        $semaxguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                        $qsemaxguind = $dbo->query($semaxguind);
                                        while ($filase= $qsemaxguind->fetch(PDO::FETCH_ASSOC)) {

                                            $maxguind = $filase['limsuperior'];

                                        }

                                    ?>

                                </section>

                                <?php


                            
                                    $valdobj2 = "SELECT * FROM $smartobjfun WHERE unidad = '$clientesu' AND yearini LIKE '%$year%'
                                    AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND gerdir LIKE '%$gerdir%'
                                    AND activo = 'SI' ";
                                    $qvaldobj2 = $dbo->query($valdobj2);

                                    while ($fila= $qvaldobj2->fetch(PDO::FETCH_ASSOC)) {

                                        $valdyobj2 = $fila['idglobf'];
                                    }

                                    if(!empty($valdyobj2)){

                                    

                                    $tabindi = "SELECT * FROM $smartobj WHERE  unidad = '$clientesu' AND yearini LIKE '%$year%'
                                    AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND gerdir LIKE '%$gerdir%'
                                    AND idglobf LIKE '%$valdyobj2%' AND activo = 'SI'";

                                    $qtabindi = $dbo->query($tabindi);

                                    //////////////////impresion de tabla
                                    while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                        $num = $fila['num'];
                                        $objetivo = $fila['objetivo'];
                                        $unmed = $fila['unmed'];               
                                        $perspect = $fila['perspectiva'];
                                        $meta = $fila['meta'];  
                                        $pond = $fila['pond'];               
                                        $idobj = $fila['idobfun'];           
                                        $useresp = $fila['useresp'];
                                        $idglobj = $fila['idglobf'];  
                        
                                            ?>

                                                
                                                <tr>
                                                    <td class="center"><?php echo $idobj ;?></td>
                                                    <td class="center"><?php echo $useresp ;?></td>
                                                    <td ><?php echo $objetivo ;?></td>
                                                    <td class="center"><?php echo $perspect ;?></td>
                                                    <td class="center"><?php echo number_format($pond, 2) . '%'; ;?></td>
                                                
                                                    <td id="metA" class="center">
                                                        <?php

                                                            if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                            $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                                echo '$'. number_format($meta); 
                                                            }
                                                            elseif($unmed == 'PORCENTAJE DE'){
                                                                echo number_format($meta, 2) . '%';
                                                            }
                                                            elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' OR $unmed == 'INDICE DE' OR
                                                                    $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE' OR $unmed == 'PROMEDIO DE'){
                                                                echo $meta ;
                                                            }
                                                            elseif($unmed == 'HORAS PROMEDIO DE'){
                                                                echo $meta.'hrs.';
                                                            }
                                                            elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                                echo $meta.' días';
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                
                                                    <td id="logr" class="center">

                                                    
                                                                <?php


                                                                //////////////////////calcular datos por objetivo
                                                                $allobj = current($dbo->query("SELECT COUNT(*) FROM $smartindi WHERE unidad LIKE '%$clientesu%' AND activo = 'SI' AND idobj = '$idobj'")->fetch());                                                            
                                                                $sumobj = current($dbo->query("SELECT SUM(logro) FROM $smartindi WHERE unidad LIKE '%$clientesu%' AND activo = 'SI' AND idobj = '$idobj'")->fetch());
                                                                
                                                        
                                                                
                                                                    if($allobj == 0){
                                                                    
                                                                        echo 'NE';   
                                                                    }else{

                                                                        $logro = $sumobj/$allobj;

                                                                        if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                                        $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                                            echo '$'. number_format($logro);
                                                                        }
                                                                        elseif($unmed == 'PORCENTAJE DE'){
                                                                            echo number_format($logro, 2) . '%';
                                                                        }
                                                                        elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' OR 
                                                                                $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                                            echo $logro ;
                                                                        }
                                                                        elseif($unmed == 'HORAS PROMEDIO DE'){
                                                                            echo $logro.'hrs.' ;
                                                                        }
                                                                        elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
                                                                            echo $logro.' días' ;
                                                                        }
                                                                        elseif($unmed == 'INDICE DE' OR $unmed == 'PROMEDIO DE'){
                                                                            echo number_format($logro, 1); 
                                                                        }
                                                                    }
                                                                
                                                                ?>
                                                    
                                                    </td>
                                                    
                                                    <td id="resultad" class="center">

                                                        
                                                                <?php

                                                                

                                                                    if($allobj == 0){
                                                                        
                                                                            echo 'NE';                                   
                                                                    }else{
                                                                        $cumplimiento = ($logro*100)/$meta;
                                                                        if($cumplimiento >= $minguind & $cumplimiento < $maxguind){
                                                                            echo number_format($cumplimiento, 2) . '%';                           
                                                                        }elseif($cumplimiento >= $minred & $cumplimiento < $maxred){
                                                                            echo number_format($cumplimiento, 2) . '%';                       
                                                                        }elseif($cumplimiento >= $minyell & $cumplimiento < $maxyell){
                                                                            echo number_format($cumplimiento, 2) . '%';                      
                                                                        }elseif($cumplimiento >= $mingreen & $cumplimiento < $maxgreen){
                                                                            echo number_format($cumplimiento, 2) . '%';                       
                                                                        }elseif($cumplimiento >= $minblu){
                                                                            echo number_format($cumplimiento, 2) . '%';                               
                                                                        }
                                                                    
                                                                    }                                        
                                                                
                                                                ?>
                                                    

                                                    </td>

                                                    <td id="desempen" class="center">

                                                        <?php

                                                            
                                                            
                                                            if($allobj == 0){
                                                                                    
                                                                echo 'NE'; 
                                                            }else{
                                                                $cumplimi = ($logro*100)/$meta;
                                                                $descum = ($pond*$cumplimi)/100;
                                                            

                                                                echo number_format($descum, 2) . '%';
                                                            
                                                            
                                                                

                                                            }
                                                        ?>

                                                    </td>

                                                </tr>



                                            <?php



                                    }
                                }
                                    
                                ?>

                            
                                    
                            </table>

                        </section>

                
                <?php

                }
            }

        ?>

    </div>

    <div id="TAB_INDICA">

        <?php 

            if (isset($_POST['tabind'])) {
                            
                $clienteu = $_POST['cliente'];
                $year = $_POST['year'];
                $periodo = $_POST['periodo'];
                $tipoind = $_POST['tipoind'];
                $perspectiva = $_POST['perspectiva'];
                $servdepcom = $_POST['servderpcom'];

                    if($periodo == 1){
                        $conmes = 'm1';
                    }elseif($periodo == 2){
                        $conmes = 'm2';
                    }elseif($periodo == 3){
                        $conmes = 'm3';
                    }elseif($periodo == 4){
                        $conmes = 'm4';
                    }elseif($periodo == 5){
                        $conmes = 'm5';
                    }elseif($periodo == 6){
                        $conmes = 'm6';
                    }elseif($periodo == 7){
                        $conmes = 'm7';
                    }elseif($periodo == 8){
                        $conmes = 'm8';
                    }elseif($periodo == 9){
                        $conmes = 'm9';
                    }elseif($periodo == 10){
                        $conmes = 'm10';
                    }elseif($periodo == 11){
                        $conmes = 'm11';
                    }elseif($periodo == 12){
                        $conmes = 'm12';
                    }
                            

                ?>

                <section id="cbecera">     
                    <div id="oculPrint"></div>
                    <input type="image" src="../img/impresionblack.svg" id="printIcon" onclick="print();">
                    <div id="nombreformprint">  <?php
                            echo 'TABLERO DE INDICADORES/'.$clienteu.'/'.$year.'/'.$tipoind.'/'.$perspectiva.'/'.$servdepcom;
                        ?>

                    </div>

                    <img id="logcliente" src="../logclient/logclient.png" />
                        <div id="seicapp"><?php   echo 'deodi by seicapp';?></div>   
                    <div id="fechacorte"><?php $fechacorte=date('d/m/y'); echo 'CORTE AL:  ' . $fechacorte;  ?></div>

                    <?php

                        if(empty($periodo)){

                            $sumades = current($dbo->query("SELECT SUM(desempeno) FROM $smartindi WHERE unidad = '$clienteu' AND yearini LIKE '%$year%' AND tipo LIKE '%$tipoind%'
                            AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%'  ")->fetch());
    
                        }else{
                            $sumades = current($dbo->query("SELECT SUM(desempeno) FROM $smartindi WHERE unidad = '$clienteu' AND yearini LIKE '%$year%' AND tipo LIKE '%$tipoind%'
                            AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND $conmes ")->fetch());
    
                        }

                       
                    ?>
                    <div id="seicapp"><?php echo 'DESEMPEÑO INTEGRAL: '. number_format($sumades,2).'%';?></div>   
                
                </section>

                <section id="conttab">

                    <table id="tablatab">

                        <tr id="columnas">
                        
                            <th id="objts">INDICADOR</th>
                            <th id="objts">RESPONSABLE</th>
                            <th id="nameind">INDICADOR</th>
                            <th id="tipoind">TIPO</th>
                            <th id="pondes">POND</th>
                            <th id="metas">META</th>
                            <th id="metas">LOGRO</th>
                            <th id="metas">CUMPLE</th>
                            <th id="metas">DESEMPEÑO</th>
                        </tr>

                        <?php

                    
                        if(empty($periodo)){
                            $tabindi = "SELECT * FROM $smartindi WHERE unidad = '$clienteu' AND yearini LIKE '%$year%' AND tipo LIKE '%$tipoind%'
                            AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' ";
                            $qtabindi = $dbo->query($tabindi);
                        }else{
                            $tabindi = "SELECT * FROM $smartindi WHERE unidad = '$clienteu' AND yearini LIKE '%$year%' AND tipo LIKE '%$tipoind%'
                            AND perspectiva LIKE '%$perspectiva%' AND useresp LIKE '%$servdepcom%' AND $conmes ";
                            $qtabindi = $dbo->query($tabindi);

                        }


                            //////////////////impresion de tabla
                            while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                $num = $fila['num'];
                                $indicador = $fila['indicador'];
                                $unmed = $fila['unmed'];
                                $pond = $fila['pond'];
                                $perspectiva = $fila['perspectiva'];
                                $meta = $fila['meta'];
                                $logro = $fila['logro'];
                                $idobj = $fila['idobj'];
                                $idindi = $fila['idindi'];
                                $cumplimiento = $fila['cumplimiento'];
                                $desempeno = $fila['desempeno'];
                                $useresp = $fila['useresp'];
                                $tipo = $fila['tipo'];
                        
                                ?>
                                    <tr>
                                        
                                        <td class="center"><?php echo  $idindi;  ?></td>
                                        <td class="center"><?php echo  $useresp;  ?></td>
                                        <td ><?php echo  $indicador;  ?></td>
                                        <td class="center"><?php echo  $tipo;  ?></td>
                                        <td class="center"><?php echo number_format($pond,1).'%'; ?></td>

                                        <td class="center">

                                            <?php 

                                                if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                    $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                    echo '$'. number_format($meta); 
                                                }elseif($unmed == 'PORCENTAJE DE'){
                                                    echo number_format($meta, 2) . '%';
                                                }elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' 
                                                        OR $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                    echo $meta ;
                                                }elseif($unmed == 'HORAS PROMEDIO DE'){
                                                    echo $meta.'hrs.' ;
                                                }elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                    echo $meta.' días' ;
                                                }elseif($unmed == 'INDICE DE'){
                                                    echo number_format($meta,1); 
                                                }
                                            ?>
                                        </td>


                                        <td class="centerr">

                                            <?php 

                                                if($unmed == 'VENTAS POR' OR $unmed == 'INGRESOS POR' OR $unmed == 'GASTOS POR' OR
                                                    $unmed == 'GASTO DE' OR $unmed == 'VALOR DE'){
                                                    echo '$'. number_format($logro); 
                                                }elseif($unmed == 'PORCENTAJE DE'){
                                                    echo number_format($logro, 2) . '%';
                                                }elseif($unmed == 'TOTAL DE' OR $unmed == 'NUMERO DE' 
                                                        OR $unmed == 'ROTACION DE' OR $unmed == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
                                                    echo $logro ;
                                                }elseif($unmed == 'HORAS PROMEDIO DE'){
                                                    echo $logro.'hrs.' ;
                                                }elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                    echo $logro.' días' ;
                                                }elseif($unmed == 'INDICE DE'){
                                                    echo number_format($logro,1); 
                                                }
                                            ?>
                                        </td>

                                        <td class="centerr"><?php echo number_format($cumplimiento,2).'%'  ?></td>
                                        <td class="centerr"><?php echo number_format($desempeno,2).'%'  ?></td>
                                
                                            

                                    </tr>

                                <?php

                            }
                            
                        
                        ?>

                    
                            
                    </table>

                </section>

            <?php
            }

        ?>
        
    </div>




       

</body>
</html>
