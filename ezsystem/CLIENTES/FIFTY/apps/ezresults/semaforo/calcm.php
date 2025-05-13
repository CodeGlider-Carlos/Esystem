<?php
require_once '../../../varSQL/dbmysql.php';
session_start();
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_muestra</title>
  
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="../css/syarofonts.css">
    <link rel="stylesheet" type="text/css" href="css/dcalcmy.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>

<input type="image" src="../../../img/ICONOS/recargaOK3.png" id="reloadIcon" onclick="location.reload();">

    <section id="finitas">

        <?php
            /*TAMAÑO DE MUESTRA PARA POBLACIONES INFINITAS

                z= parametro de nivel de confianza(tabla de especifidad)
                e=error de estimacion maximo(%permitido del resultado hacia arriba o hacia abajo)
                p=probabilidad de que ocurra el error(si no hay datos previos se asigna 0.50)
                q=probabilidad de que ocurra NO el error(si no hay datos previos se asigna 0.50)
                N = TAMAÑO DE LA MUESTRA 


                $numeradorfinita = ($N*($z*$z)*$p*$q);
                    $denomfinita = ($e*$e)*($N-1)+($z*$z)*$p*$q;
                    $calcfinita = $numeradorfinita / $denomfinita;
                */
            if (isset($_POST['calcularfinita'])) {
                $z = $_POST['z'];///
                $p = $_POST['p'];
                $q = 1- $p;///
                $e = $_POST['e'];///
                $N = $_POST['N'];

        
                $numeradorfinita = ($N*($z*$z)*$p*$q);
                $denomfinita = ($e*$e)*($N-1)+($z*$z)*$p*$q;
                $calcfinita = $numeradorfinita / $denomfinita;
    
                if($calcfinita >0 ){
    
                    ?>
                    <input type="text" id="filtros" value="MUESTRA PARA POBLACIONES FINITAS" readonly >
                    <form method="POST" class="formmuestra">
                    
                        <div id="backRegresarB" class="navbot">
                            <a href="popfinita.php"><img src="../../../img/ICONOS/regresarOK3.png" id="regresar"></a>
                        </div>
                        <input type="text" id="resultcalc" value="<?php echo 'MUESTRA: '. number_format($calcfinita,0) ; ?>" readonly >

                        <input hidden type="text"  name="resultcalc" value="<?php echo number_format($calcfinita,0) ; ?>" readonly >

                    
                        <input type="submit" id="savemuestra" name="savemuestrafi" value="GUARDAR MUESTRA" >   
                    </form>
                        <?php

                }
                    
                
            }
        

                
        ?>

       


    </section>

    <section id="infinitas">

        <?php
            /*TAMAÑO DE MUESTRA PARA POBLACIONES INFINITAS

                z= parametro de nivel de confianza(tabla de especifidad)
                e=error de estimacion maximo(%permitido del resultado hacia arriba o hacia abajo)
                p=probabilidad de que ocurra el error(si no hay datos previos se asigna 0.50)
                q=probabilidad de que ocurra NO el error(si no hay datos previos se asigna 0.50)

            $numeradorinfinita = (($z * $z) * $p * $q);
                $denomininfinita = ($e * $e);
                $calcinfinita = $numeradorinfinita / $denomininfinita;
                */
            if (isset($_POST['calcularinfinita'])) {
                $z = $_POST['z'];///
                $p = $_POST['p'];
                $q = 1- $p;///
                $e = $_POST['e'];///
            

        
                $numeradorinfinita = (($z * $z) * $p * $q);
                $denomininfinita = ($e * $e);
                $calcinfinita = $numeradorinfinita / $denomininfinita;
    
                if($calcinfinita >0 ){
    
                
                    ?>
                    <form method="POST" class="formmuestra">

                        <input type="text" id="resultcalc" value="<?php echo 'MUESTRA: '. number_format($calcinfinita, 2) ; ?>"  readonly>
                        <input hidden type="text" name="resultcalc" value="<?php echo $calcinfinita; ?>" readonly >
                        <div id="backRegresarB" class="navbot">
                            <a href="popinfinita.php"><img src="../../../img/ICONOS/regresarOK3.png" id="regresar"></a>
                        </div>
                        <input type="submit" id="savemuestra" name="savemuestrain" value="GUARDAR MUESTRA?" >    
                    </form>
                    <?php

                }
            
                
                

            }
        ?>

    </section>

    <section id="SAVEmuestra">

        <?php 

            if (isset($_POST['savemuestrafi'])) {

                if($adminrol == $radmin){   

                    $resultcalc = $_POST['resultcalc'];

                    $fehoy   = date('d/m/y');
                
                    $actualizarm1 = "UPDATE $tabmuestrav SET muestravigente = '$resultcalc' WHERE id='1'";            
                    $qactualizarm1 = $dbo->query($actualizarm1);

                    $actualizarm2 = "UPDATE $tabmuestrav SET usuarioactualizo = '$userLog' WHERE id='1'";            
                    $qactualizarm2 = $dbo->query($actualizarm2);

                    $actualizarm3 = "UPDATE $tabmuestrav SET fechactualizo = '$fehoy' WHERE id='1'";            
                    $qactualizarm3 = $dbo->query($actualizarm3);

                    ?>
                        <div id="backRegresarC" class="navbot">
                            <a href="popfinita.php"><img src="../../../img/ICONOS/regresarOK3.png" id="regresar"></a>
                        </div>
                        <section id="contdatsaveC">
                                <div id="datsaveC"><?php echo 'muestra guardada...'; ?></div>
                            </section>
                    <?php            

                }
            }
            if (isset($_POST['savemuestrain'])) {

                if($adminrol == $radmin){   

                    $resultcalc = $_POST['resultcalc'];

                    $fehoy   = date('d/m/y');
                
                    $actualizarm1 = "UPDATE $tabmuestrav SET muestravigente = '$resultcalc' WHERE id='1'";            
                    $qactualizarm1 = $dbo->query($actualizarm1);

                    $actualizarm2 = "UPDATE $tabmuestrav SET usuarioactualizo = '$userLog' WHERE id='1'";            
                    $qactualizarm2 = $dbo->query($actualizarm2);

                    $actualizarm3 = "UPDATE $tabmuestrav SET fechactualizo = '$fehoy' WHERE id='1'";            
                    $qactualizarm3 = $dbo->query($actualizarm3);

                    ?>
                        <div id="backRegresarC" class="navbot">
                            <a href="popinfinita.php"><img src="../../../img/ICONOS/regresarOK3.png" id="regresar"></a>
                        </div>
                        <section id="contdatsaveC">
                                <div id="datsaveC"><?php echo 'muestra guardada...'; ?></div>
                            </section>
                    <?php            
                }
            }
        
        ?>

    </section>

    <section id="saveSemaforo">

        <?php 

            if($adminrol == $radmin){       

                if (isset($_POST['savesem'])) {

                    $year = $_POST['year'];
                    $unidadc = $_POST['cliente'];
                    $semafo = $_POST['semafo'];

                    if($semafo == 'uno'){
                        $maxblue = 200;
                        $minblue = 100.0001;
                        $maxgreen = 100;
                        $mingreen = 95.001;
                        $maxyell = 95;
                        $minyell = 85.001;
                        $maxred = 85;
                        $minred = 75.001;
                        $maxguin = 75;
                        $minguin = 0;
                    }elseif($semafo == 'dos'){
                        $maxblue = 200;
                        $minblue = 95.0001;
                        $maxgreen = 95;
                        $mingreen = 90.0001;
                        $maxyell = 90;
                        $minyell = 80.0001;
                        $maxred = 80;
                        $minred = 70.0001;
                        $maxguin = 70;
                        $minguin = 0;
                    }elseif($semafo == 'tres'){
                        $maxblue = 200;
                        $minblue = 90.0001;
                        $maxgreen = 90;
                        $mingreen = 85.001;
                        $maxyell = 85;
                        $minyell = 75.0001;
                        $maxred = 75;
                        $minred =65.001;
                        $maxguin = 65;
                        $minguin = 0;
                    }
                
                    $fehoy   = date('d/m/y');
                    $valdsem = "SELECT * FROM $tabsemaf WHERE id = 1 ";
                    $qvaldsem = $dbo->query($valdsem);
                                        
                    /////////////////////// validacion///////////////////////////////////////////////////////////////
                    
                    while ($fila = $qvaldsem->fetch(PDO::FETCH_ASSOC)) {
                        $idvy = $fila['id'];       

                    }

                    if(empty($idvy)){


                        $savesem= "INSERT INTO $tabsemaf VALUES (NULL,'$unidadc','$year','deodi','1','$minblue','$maxblue','$fehoy' )";
                        $qsavesem = $dbo->query($savesem);

                        $savesem2= "INSERT INTO $tabsemaf VALUES (NULL,'$unidadc','$year','deodi','2','$mingreen','$maxgreen','$fehoy' )";
                        $qsavesem2 = $dbo->query($savesem2);

                        $savesem3= "INSERT INTO $tabsemaf VALUES (NULL,'$unidadc','$year','deodi','3','$minyell','$maxyell','$fehoy' )";
                        $qsavesem3 = $dbo->query($savesem3);

                        $savesem4= "INSERT INTO $tabsemaf VALUES (NULL,'$unidadc','$year','deodi','4','$minred','$maxred','$fehoy' )";
                        $qsavesem4 = $dbo->query($savesem4);

                        $savesem5= "INSERT INTO $tabsemaf VALUES (NULL,'$unidadc','$year','deodi','5','$minguin','$maxguin','$fehoy' )";
                        $qsavesem5 = $dbo->query($savesem5);

                    }else{

                        $fehoy   = date('d/m/y');
                        ///////////////////////////////////////////////////////////////////////////////
                        $ejercicio6 = "UPDATE $tabsemaf SET ejercicio = '$year' WHERE id='1'";            
                        $qejercicio6 = $dbo->query($ejercicio6);

                        $ejercicio7 = "UPDATE $tabsemaf SET ejercicio = '$year' WHERE id='2'";            
                        $qejercicio7 = $dbo->query($ejercicio7);

                        $ejercicio8 = "UPDATE $tabsemaf SET ejercicio = '$year' WHERE id='3'";            
                        $qejercicio8 = $dbo->query($ejercicio8);

                        $ejercicio9 = "UPDATE $tabsemaf SET ejercicio = '$year' WHERE id='4'";            
                        $qejercicio9 = $dbo->query($ejercicio9);

                        $ejercicio10 = "UPDATE $tabsemaf SET ejercicio = '$year' WHERE id='5'";            
                        $qejercicio10 = $dbo->query($ejercicio10);

                        ///////////////////////////////////////////////////////////////////////////////
                        $inferior6 = "UPDATE $tabsemaf SET liminferior = '$minblue' WHERE id='1'";            
                        $qinferior6 = $dbo->query($inferior6);

                        $inferior7 = "UPDATE $tabsemaf SET liminferior = '$mingreen' WHERE id='2'";            
                        $qinferior7 = $dbo->query($inferior7);

                        $inferior8 = "UPDATE $tabsemaf SET liminferior = '$minyell' WHERE id='3'";            
                        $qinferior8 = $dbo->query($inferior8);

                        $inferior9 = "UPDATE $tabsemaf SET liminferior = '$minred' WHERE id='4'";            
                        $qinferior9 = $dbo->query($inferior9);

                        $inferior10 = "UPDATE $tabsemaf SET liminferior = '$minguin' WHERE id='5'";            
                        $qinferior10 = $dbo->query($inferior10);
                        //////////////////////////////////////////////////////////////////////////////
                        $superior6 = "UPDATE $tabsemaf SET limsuperior = '$maxblue' WHERE id='1'";            
                        $qsuperior6 = $dbo->query($superior6);

                        $superior7 = "UPDATE $tabsemaf SET limsuperior = '$maxgreen' WHERE id='2'";            
                        $qsuperior7 = $dbo->query($superior7);

                        $superior8 = "UPDATE $tabsemaf SET limsuperior = '$maxyell' WHERE id='3'";            
                        $qinferior8 = $dbo->query($superior8);

                        $superior9 = "UPDATE $tabsemaf SET limsuperior = '$maxred' WHERE id='4'";            
                        $qsuperior9 = $dbo->query($superior9);

                        $superior10 = "UPDATE $tabsemaf SET limsuperior = '$maxguin' WHERE id='5'";            
                        $qsuperior10 = $dbo->query($superior10);            
                        /////////////////////////////////////////////////////////////////////////////
                        $versei6 = "UPDATE $tabsemaf SET versei = 'USUARIO' WHERE id='1'";            
                        $qversei6 = $dbo->query($versei6);

                        $versei7 = "UPDATE $tabsemaf SET versei = 'USUARIO' WHERE id='2'";            
                        $qversei7 = $dbo->query($versei7);

                        $versei8 = "UPDATE $tabsemaf SET versei = 'USUARIO' WHERE id='3'";            
                        $qversei8 = $dbo->query($versei8);

                        $versei9 = "UPDATE $tabsemaf SET versei = 'USUARIO' WHERE id='4'";            
                        $qversei9 = $dbo->query($versei9);

                        $versei10 = "UPDATE $tabsemaf SET versei = 'USUARIO' WHERE id='5'";            
                        $qversei10 = $dbo->query($versei10);
                        ////////////////////////////////////////////////////////////////////////////
                        $fechact6 = "UPDATE $tabsemaf SET fechact = '$fehoy' WHERE id='1'";            
                        $qfechact6 = $dbo->query($fechact6);

                        $fechact7 = "UPDATE $tabsemaf SET fechact = '$fehoy' WHERE id='2'";            
                        $qfechact7 = $dbo->query($fechact7);

                        $fechact8 = "UPDATE $tabsemaf SET fechact = '$fehoy' WHERE id='3'";            
                        $qfechact8 = $dbo->query($fechact8);

                        $fechact9 = "UPDATE $tabsemaf SET fechact = '$fehoy' WHERE id='4'";            
                        $qfechact9 = $dbo->query($fechact9);

                        $fechact10 = "UPDATE $tabsemaf SET fechact = '$fehoy' WHERE id='5'";            
                        $qfechact10 = $dbo->query($fechact10);
                        //////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////
                        $unidad = "UPDATE $tabsemaf SET unidad = '$unidadc' WHERE id='1'";            
                        $qunidad = $dbo->query($unidad);

                        $unidad2 = "UPDATE $tabsemaf SET unidad = '$unidadc' WHERE id='2'";            
                        $qunidad2 = $dbo->query($unidad2);

                        $unidad3 = "UPDATE $tabsemaf SET unidad = '$unidadc' WHERE id='3'";            
                        $qunidad3 = $dbo->query($unidad3);

                        $unidad4 = "UPDATE $tabsemaf SET unidad = '$unidadc' WHERE id='4'";            
                        $qunidad4 = $dbo->query($unidad4);

                        $unidad5 = "UPDATE $tabsemaf SET unidad = '$unidadc' WHERE id='5'";            
                        $qunidad5 = $dbo->query($unidad5);
                        //////////////////////////////////////////////////////////////////////////
                    }

                    ?>
                        <div id="backRegresarC" class="navbot">
                            <a href="interval.php"><img src="../../../img/ICONOS/regresarOK3.png" id="regresar"></a>
                        </div>
                        <section id="contdatsaveC">
                                <div id="datsaveC"><?php echo 'semáforo guardado...'; ?></div>
                            </section>
                    <?php

                }

            }else{
                ?>
                    <div id="backRegresarC" class="navbot">
                        <a href="interval.php"><img src="../../../img/ICONOS/regresarOK3.png" id="regresar"></a>
                    </div>
                    <section id="contdatsaveC">
                        <div id="datsaveC"><?php echo 'lo siento, acción restringida'; ?></div>
                    </section>
                <?php
            }

        ?>

    </section>
    

</body>
</html>


