<?php
session_start();
require_once '../../../varSQL/bd.php';
require_once '../varSQL/db_risk.php';
require_once '../../../varSQL/var.php';
if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../../index.php");
}
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];


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

      <script type="text/javascript" src="js/ced.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/ced.css">
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

            <img  src="../img/suite/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexRisk.php" id="slognav1">

                <input type="submit" class="submit" id="lognav1">

            </form>

           
        </div>


        <div class="bakBoton">

            <img  src="../img/suite/ced.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../CED/ced.php" id="slognav2">

                <input type="submit" class="submit" id="">

            </form>
            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img  src="../img/suite/risk.svg" class="lognav">
            <div id="txt3" class="txttx"><strong>RIESGOS</strong></div>

            
            <form action="../risk/risk.php" id="slognav3">

                <input type="submit" class="submit" id="lognav3">

            </form>

        </div>



        <div class="bakBoton">

            <img  src="../img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="../CONS/cons.php" id="slognav4">

                <input type="submit" class="submit" id="lognav4">

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../../../img/ICONOS/printok1.png" class="lognav">
            <div id="txt5" class="txttx"><strong>IMPRESIONES</strong></div>


            <form action="../PRINT/printy.php" id="slognav5">

                <input type="submit" class="submit" id="lognav5">

            </form>

        </div>

        <form action="../../../suite.php"  id="lognav7"  class="bakBoton">
                
            <input type="image" src="../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

        
        <div id="backUser">

            <img id="lognav0" src="../../../img/apps/apps/ezrisk.png" class="imagUser"> 
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
    
    <div id="backall"></div>
    <modseg  id="modprosp">


        <?php
            $uncliente = $_POST['cliente'];
        
            $ejercicio = date('y');
            $fechareg = isset($_POST['fechahoy']) ? $_POST['fechahoy'] : false;

            foreach ($_POST['idfx'] as $idsave) {


                $periodo = isset($_POST['periodo'][$idsave]) ? $_POST['periodo'][$idsave] : false;
                $qperiodo = (string) ($periodo);

                $usuario = isset($_POST['usuario'][$idsave]) ? $_POST['usuario'][$idsave] : false;
                $qusuario = (string) ($usuario);

                $servicio = isset($_POST['servicio'][$idsave]) ? $_POST['servicio'][$idsave] : false;
                $qservicio = (string) ($servicio);


                $turno = isset($_POST['turno'][$idsave]) ? $_POST['turno'][$idsave] : false;
                $qturno = (string) ($turno);

                $trab = isset($_POST['trab'][$idsave]) ? $_POST['trab'][$idsave] : false;
                $qtrab = (string) ($trab);

                $fallapo = isset($_POST['fallapo'][$idsave]) ? $_POST['fallapo'][$idsave] : false;
                $qfallapo = (string) ($fallapo);

                $alcance = isset($_POST['alcance'][$idsave]) ? $_POST['alcance'][$idsave] : false;
                $qalcance = (string) ($alcance);            

                $riesgo = isset($_POST['riesgo'][$idsave]) ? $_POST['riesgo'][$idsave] : false;
                $qriesgo = (string) ($riesgo);

                $tipo = isset($_POST['tipo'][$idsave]) ? $_POST['tipo'][$idsave] : false;
                $qtipo = (string) ($tipo);

                $severidad = isset($_POST['severidad'][$idsave]) ? $_POST['severidad'][$idsave] : false;

                $nocumplecon = isset($_POST['nocumplecon'][$idsave]) ? $_POST['nocumplecon'][$idsave] : false;

                $costo = isset($_POST['costo'][$idsave]) ? $_POST['costo'][$idsave] : false;

                $obs = isset($_POST['obs'][$idsave]) ? $_POST['obs'][$idsave] : false;
                $qobs = (string) ($obs);


                $evento = isset($_POST['evento'][$idsave]) ? $_POST['evento'][$idsave] : false;
                $qevento = (string) ($evento);



            

                $fallx = "SELECT * FROM $tabcatllas WHERE falla = '$qfallapo'";
                $qfallx = $dbo->query($fallx);

                while ($fila = $qfallx->fetch(PDO::FETCH_ASSOC)) {
                    $idid = $fila['id'];
                    $xidfalla = $fila['id_falla'];
                    $xfallapo = $fila['falla'];
                    $xmacro = $fila['macro'];
                    $xidenfx = $fila['id_enfoque'];
                    $idfactor = $fila['idfactor'];
                    $nomacro = $fila['nomacro'];
                

                }

                $VALYtRAB = "SELECT * FROM $personal WHERE nombreco = '$qtrab' ";
                $QVALYtRAB = $db_assess->query($VALYtRAB);

                while ($fila = $QVALYtRAB->fetch(PDO::FETCH_ASSOC)) {
                    $idid = $fila['id'];
                    $userjefe = $fila['userjefe'];
                    $dep = $fila['dep'];
                    $region = $fila['region'];
                    $dirger = $fila['dirger'];

                }

            
                //////////////////////////////////////////////////////////////////////////////////////////////////////////
                ////////////////////////////INSERTAR EN REGISTRO DE FALLAS////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////////////////////////////

            
            

                    if (!empty($usuario) and !empty($trab) and !empty($fallapo)and !empty($riesgo) and !empty($servicio)) {

                        if ($riesgo == 'SI') {

                            $insertar = "INSERT INTO $regllas VALUES (NULL, '$ejercicio','$region', '$uncliente','$fechareg', '$periodo','$idfactor','$xmacro','$qusuario','$alcance', '$servicio','$nomacro','$turno',
                            '$dirger','$userjefe','$dep','$qtrab','$xidenfx','$xidfalla','$qfallapo', '$riesgo', '$tipo', '$nocumplecon','$evento','$severidad','$qobs','$costo', NULL, NULL, NULL,1)";


                    
                        } else {
                            $insertar = "INSERT INTO $regllas VALUES (NULL, '$ejercicio','$region', '$uncliente','$fechareg', '$periodo','$idfactor','$xmacro','$qusuario','$alcance', '$servicio','$nomacro','$turno',
                            '$dirger','$userjefe','$dep','$qtrab','$xidenfx','$xidfalla','$qfallapo', '$riesgo', '$tipo', '$nocumplecon','$evento',NULL,'$qobs',NULL, NULL, NULL, NULL,1)";


                        }
                        $ejecutar = $dbo->query($insertar);
                    }

                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ////////////////////////////INSERTAR EN TABLA PARA CALCULO DE RIESGO////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                

                    $tabclrk = "SELECT * FROM $clirisk WHERE acronu = '$uncliente'";
                    $qtabclrk = $db_users->query($tabclrk);

                    while ($fila = $qtabclrk->fetch(PDO::FETCH_ASSOC)) {
                        $sevemp = $fila['sevemp'];
                        $prev = $fila['prev'];
                        $regionCli = $fila['acroregion'];
                    }


                    if(empty($xidfalla)){

                    }else{

                

                        /**TOTAL DE CASOS */
                        $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE falla LIKE '$xidfalla%' AND riesgo = 'NO' ")->fetch());
                        $casosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE falla LIKE '$xidfalla%' AND riesgo = 'SI' ")->fetch());
                        /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                        $sev = current($dbo->query("SELECT SUM(severidad) FROM $regllas WHERE falla LIKE '$xidfalla%' AND riesgo ='SI' ")->fetch());
                        $nompol = current($dbo->query("SELECT SUM(lineamientos) FROM $regllas WHERE falla LIKE '$xidfalla%' AND riesgo ='SI' ")->fetch());
                        $costomed = current($dbo->query("SELECT SUM(costo) FROM $regllas WHERE falla LIKE '$xidfalla%' AND riesgo ='SI' ")->fetch());

                        /*TOTAL DE OPORTUNIDADES*/
                        $totalop = $casosNO + $casosSI;

                        /*PROMEDIO DE IMPACTO NOMPOL*/
                        if ($casosSI == 0) {

                            $lin = 0;

                        } else {
                            $lin = ($nompol / $casosSI);
                        }

                        /*INDICE DE SEVERIDAD*/
                        if ($casosSI == 0) {
                            $sevintegral =  $lin + $sevemp;
                        } else {
                            $sever = $sev / $casosSI;
                            $sevintegral = $sever + $lin + $sevemp;
                        }

                        /*INDICE DE PROBABILIDAD*/

                        if ($totalop == 0) {
                            $proba = 3;
                        } elseif ($casosSI / $totalop >= 0.00& $casosSI / $totalop < 0.20) {
                            $proba = 1;
                        } elseif ($casosSI / $totalop >= 0.20& $casosSI / $totalop < 0.40) {
                            $proba = 2;
                        } elseif ($casosSI / $totalop >= 0.40& $casosSI / $totalop < 0.60) {
                            $proba = 3;
                        } elseif ($casosSI / $totalop >= 0.60& $casosSI / $totalop < 0.80) {
                            $proba = 4;
                        } elseif ($casosSI / $totalop >= 0.80) {
                            $proba = 5;
                        }

                        /*INDICE DE BARRERAS DE SEGURIDAD*/

                        if ($totalop == 0) {
                            $detBARR = 1.666666667 + $prev;
                        } else {
                            $porBarr = ($casosNO * 100) / $totalop;


                            if ($totalop == 0) {

                            } elseif ($porBarr >= 0.00& $porBarr <= 20.00) {
                                $detBARR = 2.777777778 + $prev;
                            } elseif ($porBarr >= 20.01& $porBarr <= 40.00) {
                                $detBARR = 2.222222222 + $prev;
                            } elseif ($porBarr >= 40.01& $porBarr <= 60.00) {
                                $detBARR = 1.666666667 + $prev;
                            } elseif ($porBarr >= 60.01& $porBarr <= 80.00) {
                                $detBARR = 1.111111111 + $prev;
                            } elseif ($porBarr >= 80.01& $porBarr <= 100) {
                                $detBARR = 0.555555556 + $prev;
                            }
                        }

                        $detectab = $detBARR;

                        /*COSTO PROMEDIO*/

                        if ($totalop == 0) {
                            $costopro = 0;
                        } else {
                            $costopro = $costomed / $totalop;
                        }

                        /**RIESGO RESIDUAL */
                        $riskR = $sevintegral * $proba * $detectab;


                        $tavcal = "SELECT * FROM  $calcrisk WHERE id_falla = '$xidfalla' AND mes = '$periodo'";
                        $qtavcal = $dbo->query($tavcal);

                        while ($fila = $qtavcal->fetch(PDO::FETCH_ASSOC)) {
                            $valdidfaca = $fila['id_falla'];
                            $ididcal = $fila['id'];
                        }


                        if (!empty($valdidfaca)) {

                            $upriskS = "UPDATE $calcrisk SET res_sev = '$sevintegral' WHERE id='$ididcal'";
                            $qupriskS = $dbo->query($upriskS);

                            $upriskPR = "UPDATE $calcrisk SET res_prob = '$proba' WHERE id='$ididcal'";
                            $qupriskPR = $dbo->query($upriskPR);

                            $upriskB = "UPDATE $calcrisk SET res_bar = '$detectab' WHERE id='$ididcal'";
                            $qupriskB = $dbo->query($upriskB);

                            $upriskR = "UPDATE $calcrisk SET res = '$riskR' WHERE id='$ididcal'";
                            $qupriskR = $dbo->query($upriskR);

                            $upriskRc = "UPDATE $calcrisk SET costopro = '$costopro' WHERE id='$ididcal'";
                            $qupriskRc = $dbo->query($upriskRc);

                            $upriskRt = "UPDATE $calcrisk SET total = '$totalop' WHERE id='$ididcal'";
                            $qupriskRt = $dbo->query($upriskRt);

                        } else {
                            $enfxname = "SELECT * FROM $tabcatllas WHERE id_falla = '$xidfalla'";
                            $qenfxname = $dbo->query($enfxname);

                            while ($fila = $qenfxname->fetch(PDO::FETCH_ASSOC)) {

                                $enfoque = $fila['enfoque'];
                            }

                            $saverisk = "INSERT INTO $calcrisk VALUES (NULL,'$regionCli','$uncliente','$ejercicio', '$periodo','$xmacro','$xidenfx','$enfoque','$xidfalla', '$qfallapo', 
                                                            '$sevintegral', '$proba', '$detectab', '$riskR','$costopro','$casosSI','$qusuario','$fechareg')";


                            $qsaverisk = $dbo->query($saverisk);
                        }
                    }
                
            }


          

            ?>

                <form method="POST" action="ced.php" id="backregresar">

                    <div id="backbackRegre">
                        
                        <img src="../img/suite/regresar2.png" id="imagRegresar">

                        <input type="submit" name="subback" id="subback">

                        <?php


                        if(!empty($ejecutar)){
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
      
                
     
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>