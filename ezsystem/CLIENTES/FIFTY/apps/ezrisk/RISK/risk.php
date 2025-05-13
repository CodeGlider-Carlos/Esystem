<?php
session_start();
require_once '../varSQL/db_risk.php';
require_once '../../../varSQL/bd.php';
require_once '../../../varSQL/var.php';
if (empty($_SESSION['usuario'])) {
    session_destroy();
    header("Location: ../../../../../../../../index.php");
}
$adminrol = $_SESSION['rol'];
$userLog = $_SESSION['usuario'];
$userNom = $_SESSION['nombre'];
$userUnidad = $_SESSION['unidad'];
$userAcronu = $_SESSION['acronu'];
$userAcroregion = $_SESSION['acroregion'];
$userRegion = $_SESSION['region'];
$userUnidadAcronu = $_SESSION['acronu'];
$tipoUser = $_SESSION['tipouser'];
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

    <link rel="stylesheet" type="text/css" href="../../../css/allrisk.css">
    <link rel="stylesheet" type="text/css" href="css/risk.css">
    <link rel="stylesheet" type="text/css" href="css/riskMAPA.css">
    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
    <script type="text/javascript">
        /*
       
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|android|samsung|nokia|oppo|lg|huawei/) > -1) {
            document.location = "movil/";
        }*/
    </script>


    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- jQuery (necesario para DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>

<body id="bodyrisk">

    <navleft id="navleft">


        <div class="bakBoton" id="bakBoton1">

            <img src="../img/suite/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexRisk.php" id="slognav1">

                <input type="submit" class="submit" id="lognav1">

            </form>


        </div>


        <div class="bakBoton">

            <img src="../img/suite/ced.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../CED/ced.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2">

            </form>

        </div>


        <div class="bakBoton">

            <img src="../img/suite/risk.svg" class="lognav">
            <div id="txt3" class="txttx"><strong>RIESGOS</strong></div>


            <form action="risk.php" id="slognav3">

                <input type="submit" class="submit" id="">

            </form>
            <div class="line1"></div>
        </div>



        <div class="bakBoton">

            <img src="../img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="../CONS/cons.php" id="slognav4">

                <input type="submit" class="submit" id="lognav4">

            </form>

        </div>

        <div class="bakBoton">

            <img src="../../../img/ICONOS/printok1.png" class="lognav">
            <div id="txt5" class="txttx"><strong>IMPRESIONES</strong></div>


            <form action="../PRINT/printy.php" id="slognav5">

                <input type="submit" class="submit" id="lognav5">

            </form>

        </div>


        <form action="../../../suite.php" id="lognav7" class="bakBoton">

            <input type="image" src="../img/suite/exit.svg" class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form>

    </navleft>

    <navsup id="navsup">


        <div id="backUser">

            <img id="lognav0" src="../img/suite/ezriskuser1.png" class="imagUser">
            <div id="nameuser">
                <div class="useruu"><?php echo $userNom; ?></div>
            </div>

        </div>

    </navsup>


    <div id="backall"></div>

    <modseg id="modprosp">




        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">TIPO</div>


            <form class="tabcpo" method="POST" action="risk.php">


                <select name="tipo" class="input4" required>

                    <option value="" selected>...</option>
                    <option value="CEDULA">FALLAS POTENCIALES</option>
                    <option value="MATRIZ">MATRIZ DE RIESGOS</option>
                    <option value="DESEMPENO">DESEMPEÑO DE PROCESOS</option>
                    <option value="COLABORADOR">DESEMPEÑO DE COLABORADOR</option>
                    <option value="EVENTOS">CONSECUENCIAS POR TIPO DE FALLA</option>
                    <option value="EVALUADORES">EVALUADORES</option>

                    <!-- <option value="REPORTE EJECUTIVO" >REPORTE EJECUTIVO</option>-->

                </select>
                <div for="categoria" class="labelEta2">FILTROS</div>

                <div for="categoria" class="label">Año</div>
                <select id="year" name="year" class="input" required>
                    <option value="" selected>...</option>
                    <?php

                    $tabejer = "SELECT * FROM $tabyear";
                    $qtabejer = $db_all->query($tabejer);

                    foreach ($qtabejer as $opciones) { ?>

                        <option value=<?php echo $opciones['num'] ?>><?php echo $opciones['completo'] ?></option>

                    <?php

                    }
                    ?>
                </select>

                <div for="categoria" class="label">Mes</div>
                <select name="mes" id="periodo" class="input">
                    <option value="" selected class="optionSELECTED">...</option>
                    <option value=01>ENERO</option>
                    <option value=02>FEBRERO</option>
                    <option value=03>MARZO</option>
                    <option value=04>ABRIL</option>
                    <option value=05>MAYO</option>
                    <option value=06>JUNIO</option>
                    <option value=07>JULIO</option>
                    <option value=08>AGOSTO</option>
                    <option value=09>SEPTIEMBRE</option>
                    <option value=10>OCTUBRE</option>
                    <option value=11>NOVIEMBRE</option>
                    <option value=12>DICIEMBRE</option>

                </select>

                <div for="categoria" class="label">Unidad</div>

                <select id="cliente" name="cliente" class="input" required>

                    <option value="" selected>...</option>
                    <?php

                    if ($adminrol == $radmin) {

                        $tabunid = "SELECT * FROM $clirisk";
                        $qtabunid = $db_users->query($tabunid);

                        foreach ($qtabunid as $opciones) { ?>

                            <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                        }
                    } elseif ($adminrol == $radreg) {
                        $tabunid = "SELECT * FROM $clirisk WHERE region = '$userRegion'  ";
                        $qtabunid = $db_users->query($tabunid);

                        foreach ($qtabunid as $opciones) { ?>

                            <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                        }
                    } elseif ($adminrol == $radger) {
                        $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userAcronu'  ";
                        $qtabunid = $db_users->query($tabunid);

                        foreach ($qtabunid as $opciones) { ?>

                            <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                        }
                    } elseif ($adminrol == $radman) {
                        $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userAcronu'  ";
                        $qtabunid = $db_users->query($tabunid);

                        foreach ($qtabunid as $opciones) { ?>

                            <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                    <?php

                        }
                    }

                    ?>
                </select>


                <div for="categoria" class="label">Departamento</div>
                <select name="depto" id="depto" class="input">
                    <option value="" selected class="optionSELECTED">...</option>

                    <?php

                    if ($adminrol == $radmin) {

                        $tabfun = "SELECT * FROM $sresuall ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>
                        <?php
                        }
                    } elseif ($adminrol == $radreg) {

                        $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                        <?php
                        }
                    } elseif ($adminrol == $radger) {

                        $tabfun = "SELECT * FROM $sresuall WHERE userjefe LIKE  '%$userLog%' OR usuario LIKE  '%$userLog%'";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                        <?php
                        }
                    } elseif ($adminrol == $radman & $tipoUser == 'rh') {

                        $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                        <?php
                        }
                    } elseif ($adminrol == $radman) {

                        $tabfun = "SELECT * FROM $sresuall WHERE usuario =  '$userLog' ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                    <?php
                        }
                    }

                    ?>

                </select>


                <datalist id="catpersonal">

                    <?php

                    if ($adminrol == $radmin) {

                        $userstabla = "SELECT * FROM $personal ORDER BY nombreco ASC";
                    } elseif ($adminrol == $radreg) {

                        $userstabla = "SELECT * FROM $personal WHERE region = '$userAcroregion' ";
                    } elseif ($adminrol == $radger) {

                        $userstabla = "SELECT * FROM $personal WHERE dirger = '$userLog' ";
                    } elseif ($adminrol == $radman & $tipoUser == 'rh') {

                        $userstabla = "SELECT * FROM $personal WHERE region = '$userAcroregion' ";
                    } elseif ($adminrol == $radman) {

                        $userstabla = "SELECT * FROM $personal WHERE   userjefe = '$userLog' ";
                    }

                    $pusersselect = $db_assess->query($userstabla);

                    foreach ($pusersselect as $opciones) { ?>

                        <option value="<?php echo $opciones['nombreco'] ?>"><?php echo $opciones['unidad'] . '/' . $opciones['nombre'] . '/' . $opciones['nombreco'] ?></option>

                    <?php
                    }

                    ?>
                </datalist>

                <div for="categoria" class="label">Colaborador</div>
                <input type="list" name="trabaj" id="depto" list="catpersonal" class="input" placeholder="...">



                <div for="categoria" class="label">Estándar</div>

                <select name="macro" class="input">

                    <option value="" selected class="optionSELECTED">...</option>
                    <?php

                    $macrotabla = "SELECT * FROM $macro";
                    $macroselec = $db_all->query($macrotabla);

                    foreach ($macroselec as $opciones) { ?>

                        <option value="<?php echo $opciones['macro']; ?>" class="color"><?php echo $opciones['macro'] . '/' . $opciones['nombre']; ?></option>

                    <?php
                    }

                    ?>

                </select>

                <div for="categoria" class="label">Enfoques</div>

                <datalist id="catenfx">
                    <?php
                    $userstabla = "SELECT * FROM $enfxtab";
                    $pusersselect = $dbo->query($userstabla);

                    foreach ($pusersselect as $opciones) { ?>

                        <option value="<?php echo $opciones['enfoque']; ?>"><?php echo $opciones['idenfx'] . '/' . $opciones['enfoque']; ?></option>

                    <?php
                    }

                    ?>
                </datalist>

                <input type="list" name="enfcat" id="enfcat" list="catenfx" class="input" placeholder="...">



                <div for="categoria" class="label">Presencia de Falla</div>

                <select class="input" name="sino">
                    <option value="" selected>...</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>

                <div for="categoria" class="label">Cuasifallas y Eventos</div>

                <select class="input" name="evento">
                    <option value="" selected>...</option>
                    <option value="CF">Cuasi Falla</option>
                    <option value="EA">Evento Adverso</option>
                    <option value="EC">Evento Centinela</option>
                    <option value="EM">Error de Medicación</option>
                    <option value="RAM">Reacción Adversa a la Medicación</option>
                    <option value="RAT">Reacción Aversa a la Transfusión</option>
                </select>

                <div for="categoria" class="label">Observaciones por Evaluadores</div>

                <select name="evaluador" id="evaluador" class="input">

                    <option value="" selected class="optionSELECTED">Evaluador...</option>

                    <?php

                    if ($adminrol == $radmin) {

                        $tabfun = "SELECT * FROM $sresuall ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>
                        <?php
                        }
                    } elseif ($adminrol == $radreg) {

                        $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                        <?php
                        }
                    } elseif ($adminrol == $radger) {

                        $tabfun = "SELECT * FROM $sresuall WHERE userjefe LIKE  '%$userLog%' OR usuario LIKE  '%$userLog%'";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                        <?php
                        }
                    } elseif ($adminrol == $radman & $tipoUser == 'rh') {

                        $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                        <?php
                        }
                    } elseif ($adminrol == $radman) {

                        $tabfun = "SELECT * FROM $sresuall WHERE usuario =  '$userLog' ";
                        $qtabfun = $db_users->query($tabfun);

                        foreach ($qtabfun as $opciones) { ?>

                            <option value="<?php echo $opciones['usuario'] ?>"><?php echo $opciones['acroregion'] . '/' . $opciones['acronu'] . '/' . $opciones['deparea'] ?></option>

                    <?php
                        }
                    }



                    ?>

                </select>

                <input type="submit" value="FILTRAR" id="savemod" name="buscarfa">

                <!--
                    <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIconVer" onclick="location.reload();">
                        -->
            </form>

            </div>

        </section>


        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3">RIESGOS PRIORITARIOS</div>


            <div id="backrisk">
                <img id="botrisk" src="../img/suite/risk3.png" class="botrisk">
                <div class="lineAC" id="lineAC3"></div>
            </div>



            <div id="backbottask">
                <img id="bottask" src="../img/suite/tareas2.png" class="bottask">
                <div class="lineAC" id="lineAC1"></div>
            </div>


            <div id="backbotcomen">
                <img id="botcomen" src="../img/suite/comentarios2.png" class="botcomen">
                <div class="lineAC" id="lineAC2"></div>
            </div>


            <div id="backtasky">

                <div id="backaccionesAct_r">

                    <div class="namecotasky0 left">Actividades Nuevas</div>

                    <datalist id="cat_rissk">

                        <?php


                        if (isset($_POST['buscarfa'])) {
                            $tabrisk = "SELECT * FROM  $calcrisk WHERE unidad LIKE '%$cliente%'  ";

                            $qtabrisk = $db_risk->query($tabrisk);

                            foreach ($qtabrisk as $opciones) { ?>
                                <option value="<?php echo $opciones['falla'] ?>"></option>
                            <?php
                            }
                        } else {
                            $tabrisk = "SELECT * FROM  $calcrisk WHERE unidad LIKE '%$userUnidadAcronu%'  ";

                            $qtabrisk = $db_risk->query($tabrisk);

                            foreach ($qtabrisk as $opciones) { ?>
                                <option value="<?php echo $opciones['falla'] ?>"></option>
                        <?php
                            }
                        }






                        ?>

                    </datalist>

                    <datalist id="cattrab">

                        <?php

                        if ($adminrol == $radmin) {

                            $tavTasY = "SELECT * FROM $sresuall ";
                        } elseif ($adminrol == $radreg) {

                            $tavTasY = "SELECT * FROM $sresuall ";
                        } elseif ($adminrol == $radger) {

                            $tavTasY = "SELECT * FROM $sresuall WHERE acronu  = '$userUnidadAcronu' OR acronu = '$userAcroregion' OR acronu = 'FIFTY'  ";
                        } elseif ($adminrol == $radman) {

                            $tavTasY = "SELECT * FROM $sresuall WHERE acronu  = '$userUnidadAcronu' OR acronu = '$userAcroregion' OR acronu = 'FIFTY'  ";
                        }


                        $tavTas = $db_users->query($tavTasY);

                        foreach ($tavTas as $opciones) { ?>

                            <option value="<?php echo $opciones['nombre']; ?>"><?php echo $opciones['acronu'] . '/' . $opciones['nombre']; ?></option>

                        <?php
                        }


                        ?>
                    </datalist>


                    <form method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <table class="tableTASK">
                            <tr>

                                <th class="label colstav2">Responsable de Tarea</th>
                                <th class="label colstav3">Fecha Prog</th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>

                            <tr>



                                <td><input type="list" list="cattrab" class="date" name="resptask" required></td>

                                <td>
                                    <input type="date" class="date" name="fechapro" required>
                                </td>
                                <td colspan="2">



                                </td>

                            </tr>

                            <tr>
                                <th colspan="2" class="label colstav2">Riesgo Asociado</th>
                                <th></th>
                                <th></th>
                            </tr>

                            <tr>
                                <td colspan="2"> <input type="list" list="cat_rissk" class="testareaobs" spellcheck="false" name="riesgo" required></td>

                            </tr>

                            <tr>
                                <th colspan="2" class="label colstav2">Tarea</th>
                                <th></th>
                                <th></th>
                            </tr>

                            <tr>
                                <td colspan="2"> <textarea class="testareaobs" spellcheck="false" name="tarea" required></textarea></td>


                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeTask"></td>
                            </tr>

                        </table>

                    </form>

                </div>

                <div id="backahistorias">

                    <div class="namecotasky left">Bitácora de Actividades</div>


                    <div id="backtabTask">






                        <?php

                        if ($adminrol == $radmin) {
                            $bdpros = "SELECT * FROM $tabtaskY WHERE activo = 'SI' AND app = 'risk'   ";
                            $qbdpros = $db_task->query($bdpros);
                        } elseif ($adminrol == $radreg) {
                            $bdpros = "SELECT * FROM $tabtaskY WHERE region LIKE '%$userAcroregion%' AND activo = 'SI'  AND usuarioregistra = '$userLog' OR usertask = '$userLog' AND app = 'risk' ";
                            $qbdpros = $db_task->query($bdpros);
                        } else {
                            $bdpros = "SELECT * FROM $tabtaskY WHERE usertask LIKE '%$userLog%' AND activo = 'SI' AND usuarioregistra = '$userLog' OR usertask = '$userLog' AND app = 'risk' ";
                            $qbdpros = $db_task->query($bdpros);
                        }


                        while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                            $PidH = $filpro['id'];


                            $tareaH = $filpro['tarea'];
                            $fechaproH = $filpro['fechaprogramada'];
                            $fechacuH = $filpro['fechacumple'];

                            $estatusH = $filpro['estatus'];

                            $obsH = $filpro['observacionescumple'];

                            $PuserespH = $filpro['usertask'];
                            $fallapo = $filpro['fallapo'];

                            $tabrisk = "SELECT * FROM $tabcatllas WHERE  id_falla LIKE '%$fallapo%'  ";
                            $qtabrisk = $db_risk->query($tabrisk);

                            while ($fila = $qtabrisk->fetch(PDO::FETCH_ASSOC)) {

                                $falla = $fila['falla'];
                            }


                            $valyuser = "SELECT * FROM $sresuall WHERE  usuario = '$PuserespH'  ";
                            $qvalyuser = $db_users->query($valyuser);

                            while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {

                                $userkaskLY = $fila['nombre'];
                            }

                        ?>

                            <form id="formHist" method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                                <table class="tableHIST">

                                    <tr>

                                        <th class="label colstavh1">Id</th>
                                        <th class="label colstavh2 " colspan="6">Tarea</th>

                                    </tr>


                                    <tr>
                                        <td> <input type="text" class="activ" name="idtask" value="<?php echo $PidH; ?>" readonly> </td>
                                        <td colspan="6"><input type="text" class="printask" value="<?php echo $tareaH; ?>"></td>
                                    </tr>

                                    <tr>
                                        <th class="colstavh1">Programado</th>
                                        <th class=" center" colspan="3">Responsable de Tarea</th>

                                        <th class="colstavh7"></th>
                                        <th class="colstavh2">Estatus</th>
                                        <th class="colstavh3">Acción</th>


                                    </tr>




                                    <tr>

                                        <td class="center"><input type="text" class="activ" value="<?php echo $fechaproH; ?>" readonly></td>
                                        <td class="center" colspan="3"><input type="text" class="activRexp" value="<?php echo $userkaskLY; ?>" readonly></td>

                                        <td class="colstavh1"></td>

                                        <td>
                                            <select class="enfoqueaccH" name="estatus">
                                                <option value="" selected><?php echo $estatusH; ?></option>
                                                <option value="">Cambiar Estatus a...</option>
                                                <option></option>

                                                <option value="EN CURSO">EN CURSO</option>
                                                <option value="CUMPLIDA">CUMPLIDA</option>
                                                <option value="CANCELADA">CANCELADA</option>
                                                <option value="REPROGRAMADA">REPROGRAMADA</option>

                                            </select>
                                        </td>

                                        <td><input type="submit" value="CAMBIAR" id="editar" name="update"></td>

                                    </tr>

                                    <tr>
                                        <th class="colstavh1" colspan="5">Riesgo Asociado</th>
                                        <th class="colstavh1" colspan="2">Observaciones</th>
                                    </tr>

                                    <tr>
                                        <td colspan="5"><textarea class="textareaH" spellcheck="false"><?php echo $falla; ?></textarea></td>
                                        <td colspan="2"><textarea class="textareaH" spellcheck="false" name="obs"><?php echo $obsH; ?></textarea></td>


                                    </tr>



                                </table>

                            </form>

                            <div class="liendiv"></div>

                        <?php

                        }


                        ?>






                    </div>




                </div>

            </div>

            <div id="backcommen">

                <div id="backaccionesAct_r">
                    <div class="namecotasky0 left">Comentario</div>


                    <form method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">
                        <!--
                        <input hidden type="text" value="<?php echo $Pregion0; ?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0; ?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $person; ?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0; ?>" name="Pid0">
                            -->
                        <table class="tableComent">
                            <tr>
                                <th class="label colstav1C">Fecha de Registro</th>
                                <th class="label colstav2C" colspan="2">Comentario</th>
                                <th class="label colstav3C"></th>

                            </tr>

                            <tr>
                                <td>
                                    <input type="date" class="date" name="fechapro">
                                </td>
                                <td colspan="3">

                                    <textarea class="testareaobsC" name="comment"></textarea>
                                </td>


                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>

                        </table>






                    </form>

                </div>


                <div id="backahistorias">

                    <div class="namecotasky left">Bitácora de Comentarios</div>

                    <div id="backtabTask">


                        <?php

                        if ($adminrol == $radmin) {
                            $bdpros = "SELECT * FROM $tasky_hist_coment WHERE activo = '1' AND app =  'risk' ";
                            $qbdpros = $db_task->query($bdpros);
                        } elseif ($adminrol == $radmin) {
                            $bdpros = "SELECT * FROM $tasky_hist_coment WHERE region LIKE '%$userAcroregion%'AND useralta = '$userLog' AND activo = '1'  AND app =  'risk'";
                            $qbdpros = $db_task->query($bdpros);
                        } else {
                            $bdpros = "SELECT * FROM $tasky_hist_coment WHERE  useralta = '$userLog'  AND activo = '1' AND app =  'risk' ";
                            $qbdpros = $db_task->query($bdpros);
                        }


                        while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                            $PidH = $filpro['id'];
                            $fechacoment = $filpro['fechacoment'];
                            $coment = $filpro['coment'];



                        ?>

                            <form id="formHist" method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                                <table class="tableHIST">

                                    <tr>
                                        <th class="colstavh1"></th>
                                        <th class="colstavh2"></th>
                                        <th class="colstavh3"></th>
                                        <th class="colstavh4"></th>
                                        <th class="colstavh5"></th>
                                        <th class="colstavh6"></th>
                                        <th class="colstavh7"></th>
                                    </tr>

                                    <tr>
                                        <td colspan="7"><textarea class="textareaC" spellcheck="false"><?php echo $coment; ?></textarea></td>
                                    </tr>



                                    <tr>
                                        <td hidden><input type="text" value="<?php echo $PidH; ?>" name="idcoment"> </td>
                                        <td class="center"><?php echo $fechacoment; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <select class="enfoqueaccH" name="estatus">
                                                <option value="" selected>Estatus...</option>

                                                <option value="ELIMINAR">ELIMINAR</option>

                                            </select>
                                        </td>

                                        <td><input type="submit" value="CAMBIAR" id="editar" name="delco"></td>
                                    </tr>




                                </table>

                            </form>

                            <div class="liendiv"></div>

                        <?php

                        }


                        ?>






                    </div>

                </div>


            </div>



            <div id="backRisk">

                <div id="backacciones">

                    <div class="namecotasky left"></div>




                    <?php

                    if (isset($_POST['buscarfa'])) {

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



                        if ($tipo == 'CEDULA') {

                    ?>

                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'CATALOGO DE FALLAS POTENCIALES/' .  $macro  .  '/' .  $enfcat;
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
                                        <th id="macro">MACRO</th>
                                        <th id="enfoque">ENFOQUE</th>
                                        <th id="falla">FALLA POTENCIAL</th>
                                        <th id="r">R</th>
                                        <th id="s">S</th>
                                        <th id="n">N</th>
                                        <th id="obs">OBSERVACIONES</th>

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

                        } elseif ($tipo == 'DESEMPENO') {

                        ?>

                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'DESEMPEÑO DE PROCESOS/' . $year . '/' . $periodo . '/' . $cliente . '/' . $depto . '/' . $trabaj . '/' .  $macro  .  '/' .  $enfoque  .  '/' . $sino .  '/' . $evento;
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

                                echo $trabaj;

                                if ($adminrol == $radmin) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());
                                } elseif ($adminrol == $radreg) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());
                                } elseif ($adminrol == $radger) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                } elseif ($adminrol == $radman) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND trabajador = '$trabaj' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog'  AND tipo LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND trabajador = '$trabaj'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
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

                                    <tr>
                                        <td class="center"><?php echo 'FALLAS: ' . $casosdefalla; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="center"><?php echo 'OPORTUNIDADES: ' . $totalop; ?></td>
                                    </tr>

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


                                    if ($adminrol == $radmin) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                            AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' ";
                                        $qtabfall = $dbo->query($tabfall);
                                    } elseif ($adminrol == $radreg) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                            AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                        $qtabfall = $dbo->query($tabfall);
                                    } elseif ($adminrol == $radger) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                            AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                        $qtabfall = $dbo->query($tabfall);
                                    } elseif ($adminrol == $radman) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' 
                                                            AND macro LIKE '%$macro%'  AND trabajador = '$trabaj' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog'  AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                        $qtabfall = $dbo->query($tabfall);
                                    }

                                    while ($fila = $qtabfall->fetch(PDO::FETCH_ASSOC)) {
                                        $trabajadorNAME = $fila['trabajador'];
                                        $idenfx = $fila['idenfx'];
                                        $idREG = $fila['id'];

                                        $fallafall = $fila['falla'];
                                        $riesg = $fila['riesgo'];


                                        $bdlyenfoq = "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
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
                        } elseif ($tipo == 'COLABORADOR') {

                        ?>

                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'COLABORADOR/' . $year . '/' . $periodo . '/' . $cliente . '/' . $depto . '/' . $trabaj . '/' .  $macro  .  '/' .  $enfoque  .  '/' . $sino .  '/' . $evento;
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



                                if ($adminrol == $radmin) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' ")->fetch());
                                } elseif ($adminrol == $radreg) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' ")->fetch());
                                } elseif ($adminrol == $radger) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
                                } elseif ($adminrol == $radman) {
                                    $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND trabajador = '$trabaj' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog'  AND tipo LIKE '%$evento%' ")->fetch());

                                    $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND trabajador = '$trabaj'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' AND tipo LIKE '%$evento%' ")->fetch());
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

                                    <tr>
                                        <td class="center"><?php echo 'FALLAS: ' . $casosdefalla; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="center"><?php echo 'OPORTUNIDADES: ' . $totalop; ?></td>
                                    </tr>

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


                                    if ($adminrol == $radmin) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                            AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' ";
                                        $qtabfall = $dbo->query($tabfall);
                                    } elseif ($adminrol == $radreg) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                            AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                        $qtabfall = $dbo->query($tabfall);
                                    } elseif ($adminrol == $radger) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                            AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                        $qtabfall = $dbo->query($tabfall);
                                    } elseif ($adminrol == $radman) {
                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' 
                                                            AND macro LIKE '%$macro%'  AND trabajador = '$trabaj' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog'  AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%'  ";
                                        $qtabfall = $dbo->query($tabfall);
                                    }

                                    while ($fila = $qtabfall->fetch(PDO::FETCH_ASSOC)) {
                                        $trabajadorNAME = $fila['trabajador'];
                                        $idenfx = $fila['idenfx'];
                                        $idREG = $fila['id'];

                                        $fallafall = $fila['falla'];
                                        $riesg = $fila['riesgo'];


                                        $bdlyenfoq = "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
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
                        } elseif ($tipo == 'MATRIZ') {

                        ?>

                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'MATRIZ DE RIESGOS/' . $year . '/' . $periodo . '/' . $cliente .  $macro  .  '/' .  $enfoque;
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
                                            if ($nprRISK == 0) {
                                            ?>
                                                <td>NO EVALUADO</td>
                                            <?php
                                            } elseif ($nprRISK >= 0.01 & $nprRISK <= 5) {
                                            ?>
                                                <td class="muybajo"><strong>MUY BAJA</strong></td>
                                            <?php
                                            } elseif ($nprRISK >= 5.1 & $nprRISK <= 35) {
                                            ?>
                                                <td class="bajo"><strong>BAJA</strong></td>
                                            <?php
                                            } elseif ($nprRISK >= 35.1 & $nprRISK <= 85) {
                                            ?>
                                                <td class="medio"><strong>MEDIA</strong></td>
                                            <?php
                                            } elseif ($nprRISK >= 85.1 & $nprRISK <= 120) {
                                            ?>
                                                <td class="alto"><strong>ALTA</strong></td>
                                            <?php
                                            } elseif ($nprRISK >= 120.1) {
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

                        } elseif ($tipo == 'EVALUADORES') {
                            $nombreEV = '';
                            $bdnameEVAL = "SELECT * FROM $sresuall WHERE  usuario = '$evaluador'  ";
                            $qbdnameEVAL = $db_users->query($bdnameEVAL);

                            while ($fila = $qbdnameEVAL->fetch(PDO::FETCH_ASSOC)) {
                                $nombreEV = $fila['nombre'];
                            }


                        ?>



                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'OBSERVACIONES POR EVALUADORES/' . $year . '/' . $periodo . '/' . $cliente .  $macro  .  '/' .  $enfoque . '/' . $nombreEV;
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
                                echo $periodo . '<br>';
                                echo $evaluador . '<br>';
                                echo $year . '<br>';
                                echo $cliente . '<br>';
                                $casosNOE = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo LIKE '%NO%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND evaluador LIKE '%$evaluador%' ")->fetch());

                                $casosdefallaE = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                    AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND evaluador LIKE '%$evaluador%' ")->fetch());



                                $totalopE = $casosNOE + $casosdefallaE;

                                if ($totalopE > 0) {
                                    $resulE = (($totalopE - $casosdefallaE) * 100 / $totalopE);
                                }




                                ?>

                                <table class="desempResul">

                                    <tr>
                                        <th class="labelEta2">RESULTADOS</th>
                                    </tr>

                                    <tr>
                                        <td class="center"><?php echo 'FALLAS: ' . $casosdefallaE; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="center"><?php echo 'OPORTUNIDADES: ' . $totalopE; ?></td>
                                    </tr>

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


                                        $bdlyenfoq = "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
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
                        } elseif ($tipo == 'EVENTOS') {


                        ?>

                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'CONSECUENCIAS POR TIPO DE FALLA/' . $year . '/' . $periodo . '/' . $cliente .  $macro  .  '/' .  $enfoque . '/' . $evento;
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

                                        $bdlyenfoq = "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
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
                        } elseif ($tipo == 'MAPA') {

                        ?>

                            <section id="backLoad">

                                <div id="contIcL">
                                    <div id="icLoad">

                                    </div>
                                </div>
                                <div id="tileLoad">Cargando...</div>
                            </section>

                            <section id="backmapmap">


                                <div id="mapmap">

                                    <div id="imgmap">

                                        <div class="m1">


                                            <?php

                                            $tabcat = "SELECT * FROM $calcrisk ";
                                            $qtabcat = $dbo->query($tabcat);

                                            while ($fila = $qtabcat->fetch(PDO::FETCH_ASSOC)) {

                                                $idy = $fila['id_falla'];

                                                $ALLRISK = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy'  AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK == 0) {
                                                } else {
                                                    $res =  $SUMRISK / $ALLRISK;
                                                    if ($res >= 120.1) {

                                                        $resid = $res;
                                                    }
                                                }
                                            }
                                            if (empty($resid)) {
                                            } else {
                                            ?>
                                                <div id="riskmas">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m2">

                                            <?php

                                            $tabcat2 = "SELECT * FROM $calcrisk ";
                                            $qtabcat2 = $dbo->query($tabcat2);

                                            while ($fila = $qtabcat2->fetch(PDO::FETCH_ASSOC)) {

                                                $idy2 = $fila['id_falla'];


                                                $ALLRISK2 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy2' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK2 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy2' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK2 == 0) {
                                                } else {

                                                    $res2 =  $SUMRISK2 / $ALLRISK2;
                                                    if ($res2 >= 115.1 & $res2 <= 120) {

                                                        $resid2 = $res2;
                                                    }
                                                }
                                            }
                                            if (empty($resid2)) {
                                            } else {
                                            ?>
                                                <div id="riskmas2">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m3">

                                            <?php

                                            $tabcat3 = "SELECT * FROM $calcrisk ";
                                            $qtabcat3 = $dbo->query($tabcat3);

                                            while ($fila = $qtabcat3->fetch(PDO::FETCH_ASSOC)) {

                                                $idy3 = $fila['id_falla'];


                                                $ALLRISK3 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy3' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK3 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy3' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK3 == 0) {
                                                } else {
                                                    $res3 =  $SUMRISK3 / $ALLRISK3;
                                                    if ($res3 >= 110.1 & $res3 <= 115) {

                                                        $resid3 = $res3;
                                                    }
                                                }
                                            }
                                            if (empty($resid3)) {
                                            } else {
                                            ?>
                                                <div id="riskmas3">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>


                                        </div>

                                        <div class="m4">

                                            <?php

                                            $tabcat4 = "SELECT * FROM $calcrisk ";
                                            $qtabcat4 = $dbo->query($tabcat4);

                                            while ($fila = $qtabcat4->fetch(PDO::FETCH_ASSOC)) {

                                                $idy4 = $fila['id_falla'];


                                                $ALLRISK4 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy4' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK4 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy4' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK4 == 0) {
                                                } else {

                                                    $res4 =  $SUMRISK4 / $ALLRISK4;
                                                    if ($res4 >= 105.1 & $res4 <= 110) {

                                                        $resid4 = $res4;
                                                    }
                                                }
                                            }
                                            if (empty($resid4)) {
                                            } else {
                                            ?>
                                                <div id="riskmas4">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m5">

                                            <?php
                                            $tabcat5 = "SELECT * FROM $calcrisk ";
                                            $qtabcat5 = $dbo->query($tabcat5);

                                            while ($fila = $qtabcat5->fetch(PDO::FETCH_ASSOC)) {

                                                $idy5 = $fila['id_falla'];


                                                $ALLRISK5 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy5' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK5 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy5' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK5 == 0) {
                                                } else {
                                                    $res5 =  $SUMRISK5 / $ALLRISK5;
                                                    if ($res5 >= 100.1 & $res5 <= 105) {

                                                        $resid5 = $res5;
                                                    }
                                                }
                                            }
                                            if (empty($resid5)) {
                                            } else {
                                            ?>
                                                <div id="riskmas5">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m6">

                                            <?php

                                            $tabcat6 = "SELECT * FROM $calcrisk ";
                                            $qtabcat6 = $dbo->query($tabcat6);

                                            while ($fila = $qtabcat6->fetch(PDO::FETCH_ASSOC)) {

                                                $idy6 = $fila['id_falla'];


                                                $ALLRISK6 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy6' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK6 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy6' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK6 == 0) {
                                                } else {
                                                    $res6 =  $SUMRISK6 / $ALLRISK6;
                                                    if ($res6 >= 95.1 & $res6 <= 100) {

                                                        $resid6 = $res6;
                                                    }
                                                }
                                            }
                                            if (empty($resid6)) {
                                            } else {
                                            ?>
                                                <div id="riskmas6">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m7">

                                            <?php
                                            $tabcat7 = "SELECT * FROM $calcrisk ";
                                            $qtabcat7 = $dbo->query($tabcat7);

                                            while ($fila = $qtabcat7->fetch(PDO::FETCH_ASSOC)) {

                                                $idy7 = $fila['id_falla'];


                                                $ALLRISK7 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy7' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK7 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy7' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK7 == 0) {
                                                } else {
                                                    $res7 =  $SUMRISK7 / $ALLRISK7;
                                                    if ($res7 >= 90.1 & $res7 <= 95) {

                                                        $resid7 = $res7;
                                                    }
                                                }
                                            }
                                            if (empty($resid7)) {
                                            } else {
                                            ?>
                                                <div id="riskmas7">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m8">

                                            <?php

                                            $tabcat8 = "SELECT * FROM $calcrisk ";
                                            $qtabcat8 = $dbo->query($tabcat8);

                                            while ($fila = $qtabcat8->fetch(PDO::FETCH_ASSOC)) {

                                                $idy8 = $fila['id_falla'];


                                                $ALLRISK8 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy8' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK8 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy8' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());


                                                if ($ALLRISK8 == 0) {
                                                } else {

                                                    $res8 =  $SUMRISK8 / $ALLRISK8;
                                                    if ($res8 >= 85.1 & $res8 <= 90) {

                                                        $resid8 = $res8;
                                                    }
                                                }
                                            }
                                            if (empty($resid8)) {
                                            } else {
                                            ?>
                                                <div id="riskmas8">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m9">

                                            <?php

                                            $tabcat9 = "SELECT * FROM $calcrisk ";
                                            $qtabcat9 = $dbo->query($tabcat9);

                                            while ($fila = $qtabcat9->fetch(PDO::FETCH_ASSOC)) {

                                                $idy9 = $fila['id_falla'];


                                                $ALLRISK9 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy9' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK9 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy9' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK9 == 0) {
                                                } else {
                                                    $res9 =  $SUMRISK9 / $ALLRISK9;
                                                    if ($res9 >= 80.1 & $res9 <= 85) {

                                                        $resid9 = $res9;
                                                    }
                                                }
                                            }
                                            if (empty($resid9)) {
                                            } else {
                                            ?>
                                                <div id="riskmas9">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m10">

                                            <?php

                                            $tabcat10 = "SELECT * FROM $calcrisk ";
                                            $qtabcat10 = $dbo->query($tabcat10);

                                            while ($fila = $qtabcat10->fetch(PDO::FETCH_ASSOC)) {

                                                $idy10 = $fila['id_falla'];


                                                $ALLRISK10 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy10' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK10 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy10' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK10 == 0) {
                                                } else {

                                                    $res10 =  $SUMRISK10 / $ALLRISK10;
                                                    if ($res10 >= 75.1 & $res10 <= 80) {

                                                        $resid10 = $res10;
                                                    }
                                                }
                                            }
                                            if (empty($resid10)) {
                                            } else {
                                            ?>
                                                <div id="riskmas10">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m11">

                                            <?php


                                            $tabcat11 = "SELECT * FROM $calcrisk ";
                                            $qtabcat11 = $dbo->query($tabcat11);

                                            while ($fila = $qtabcat11->fetch(PDO::FETCH_ASSOC)) {

                                                $idy11 = $fila['id_falla'];


                                                $ALLRISK11 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy11' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK11 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy11' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());


                                                if ($ALLRISK11 == 0) {
                                                } else {

                                                    $res11 =  $SUMRISK11 / $ALLRISK11;
                                                    if ($res11 >= 70.1 & $res11 <= 75) {

                                                        $resid11 = $res11;
                                                    }
                                                }
                                            }
                                            if (empty($resid11)) {
                                            } else {
                                            ?>
                                                <div id="riskmas11">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m12">

                                            <?php


                                            $tabcat12 = "SELECT * FROM $calcrisk ";
                                            $qtabcat12 = $dbo->query($tabcat12);

                                            while ($fila = $qtabcat12->fetch(PDO::FETCH_ASSOC)) {

                                                $idy12 = $fila['id_falla'];


                                                $ALLRISK12 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy12' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK12 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy12' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK12 == 0) {
                                                } else {
                                                    $res12 =  $SUMRISK12 / $ALLRISK12;
                                                    if ($res12 >= 65.1 & $res12 <= 70) {

                                                        $resid12 = $res12;
                                                    }
                                                }
                                            }
                                            if (empty($resid12)) {
                                            } else {
                                            ?>
                                                <div id="riskmas12">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m13">

                                            <?php


                                            $tabcat13 = "SELECT * FROM $calcrisk ";
                                            $qtabcat13 = $dbo->query($tabcat13);

                                            while ($fila = $qtabcat13->fetch(PDO::FETCH_ASSOC)) {

                                                $idy13 = $fila['id_falla'];


                                                $ALLRISK13 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy13' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK13 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy13' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK13 == 0) {
                                                } else {
                                                    $res13 =  $SUMRISK13 / $ALLRISK13;
                                                    if ($res13 >= 60.1 & $res13 <= 65) {

                                                        $resid13 = $res13;
                                                    }
                                                }
                                            }
                                            if (empty($resid13)) {
                                            } else {
                                            ?>
                                                <div id="riskmas13">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m14">

                                            <?php

                                            $tabcat14 = "SELECT * FROM $calcrisk ";
                                            $qtabcat14 = $dbo->query($tabcat14);

                                            while ($fila = $qtabcat14->fetch(PDO::FETCH_ASSOC)) {

                                                $idy14 = $fila['id_falla'];


                                                $ALLRISK14 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy14' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK14 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy14' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK14 == 0) {
                                                } else {
                                                    $res14 =  $SUMRISK14 / $ALLRISK14;
                                                    if ($res14 >= 55.1 & $res14 <= 60) {

                                                        $resid14 = $res14;
                                                    }
                                                }
                                            }
                                            if (empty($resid14)) {
                                            } else {
                                            ?>
                                                <div id="riskmas14">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m15">

                                            <?php

                                            $tabcat15 = "SELECT * FROM $calcrisk ";
                                            $qtabcat15 = $dbo->query($tabcat15);

                                            while ($fila = $qtabcat15->fetch(PDO::FETCH_ASSOC)) {

                                                $idy15 = $fila['id_falla'];


                                                $ALLRISK15 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy15' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK15 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy15' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK15 == 0) {
                                                } else {
                                                    $res15 =  $SUMRISK15 / $ALLRISK15;
                                                    if ($res15 >= 50.1 & $res15 <= 55) {

                                                        $resid15 = $res15;
                                                    }
                                                }
                                            }
                                            if (empty($resid15)) {
                                            } else {
                                            ?>
                                                <div id="riskmas15">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m16">

                                            <?php

                                            $tabcat16 = "SELECT * FROM $calcrisk ";
                                            $qtabcat16 = $dbo->query($tabcat16);

                                            while ($fila = $qtabcat16->fetch(PDO::FETCH_ASSOC)) {

                                                $idy16 = $fila['id_falla'];


                                                $ALLRISK16 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy16' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK16 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy16' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK16 == 0) {
                                                } else {
                                                    $res16 =  $SUMRISK16 / $ALLRISK16;
                                                    if ($res16 >= 45.1 & $res16 <= 50) {

                                                        $resid16 = $res16;
                                                    }
                                                }
                                            }
                                            if (empty($resid16)) {
                                            } else {
                                            ?>
                                                <div id="riskmas16">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m17">

                                            <?php

                                            $tabcat17 = "SELECT * FROM $calcrisk ";
                                            $qtabcat17 = $dbo->query($tabcat17);

                                            while ($fila = $qtabcat17->fetch(PDO::FETCH_ASSOC)) {

                                                $idy17 = $fila['id_falla'];


                                                $ALLRISK17 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy17' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK17 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy17' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK17 == 0) {
                                                } else {
                                                    $res17 =  $SUMRISK17 / $ALLRISK17;
                                                    if ($res17 >= 40.1 & $res17 <= 45) {

                                                        $resid17 = $res17;
                                                    }
                                                }
                                            }
                                            if (empty($resid17)) {
                                            } else {
                                            ?>
                                                <div id="riskmas17">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m18">

                                            <?php

                                            $tabcat18 = "SELECT * FROM $calcrisk ";
                                            $qtabcat18 = $dbo->query($tabcat18);

                                            while ($fila = $qtabcat18->fetch(PDO::FETCH_ASSOC)) {

                                                $idy18 = $fila['id_falla'];


                                                $ALLRISK18 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy18' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK18 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy18' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());


                                                if ($ALLRISK18 == 0) {
                                                } else {
                                                    $res18 =  $SUMRISK18 / $ALLRISK18;
                                                    if ($res18 >= 35.1 & $res18 <= 40) {

                                                        $resid18 = $res18;
                                                    }
                                                }
                                            }
                                            if (empty($resid18)) {
                                            } else {
                                            ?>
                                                <div id="riskmas18">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m19">

                                            <?php

                                            $tabcat19 = "SELECT * FROM $calcrisk ";
                                            $qtabcat19 = $dbo->query($tabcat19);

                                            while ($fila = $qtabcat19->fetch(PDO::FETCH_ASSOC)) {

                                                $idy19 = $fila['id_falla'];


                                                $ALLRISK19 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy19' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK19 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy19' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK19 == 0) {
                                                } else {
                                                    $res19 =  $SUMRISK19 / $ALLRISK19;
                                                    if ($res19 >= 30.1 & $res19 <= 35) {

                                                        $resid19 = $res19;
                                                    }
                                                }
                                            }
                                            if (empty($resid19)) {
                                            } else {
                                            ?>
                                                <div id="riskmas19">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m20">

                                            <?php

                                            $tabcat20 = "SELECT * FROM $calcrisk ";
                                            $qtabcat20 = $dbo->query($tabcat20);

                                            while ($fila = $qtabcat20->fetch(PDO::FETCH_ASSOC)) {

                                                $idy20 = $fila['id_falla'];


                                                $ALLRISK20 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy20' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK20 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy20' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK20 == 0) {
                                                } else {
                                                    $res20 =  $SUMRISK20 / $ALLRISK20;
                                                    if ($res20 >= 25.1 & $res20 <= 30) {

                                                        $resid20 = $res20;
                                                    }
                                                }
                                            }
                                            if (empty($resid20)) {
                                            } else {
                                            ?>
                                                <div id="riskmas20">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m21">

                                            <?php

                                            $tabcat21 = "SELECT * FROM $calcrisk ";
                                            $qtabcat21 = $dbo->query($tabcat21);

                                            while ($fila = $qtabcat21->fetch(PDO::FETCH_ASSOC)) {

                                                $idy21 = $fila['id_falla'];


                                                $ALLRISK21 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy21' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK21 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy21' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK21 == 0) {
                                                } else {
                                                    $res21 =  $SUMRISK21 / $ALLRISK21;
                                                    if ($res21 >= 20.1 & $res21 <= 25) {

                                                        $resid21 = $res21;
                                                    }
                                                }
                                            }
                                            if (empty($resid21)) {
                                            } else {
                                            ?>
                                                <div id="riskmas21">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m22">

                                            <?php

                                            $tabcat22 = "SELECT * FROM $calcrisk ";
                                            $qtabcat22 = $dbo->query($tabcat22);

                                            while ($fila = $qtabcat22->fetch(PDO::FETCH_ASSOC)) {

                                                $idy22 = $fila['id_falla'];


                                                $ALLRISK22 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy22' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK22 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy22' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK22 == 0) {
                                                } else {
                                                    $res22 =  $SUMRISK22 / $ALLRISK22;
                                                    if ($res22 >= 15.1 & $res22 <= 20) {

                                                        $resid22 = $res22;
                                                    }
                                                }
                                            }
                                            if (empty($resid22)) {
                                            } else {
                                            ?>
                                                <div id="riskmas22">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m23">

                                            <?php

                                            $tabcat23 = "SELECT * FROM $calcrisk ";
                                            $qtabcat23 = $dbo->query($tabcat23);

                                            while ($fila = $qtabcat23->fetch(PDO::FETCH_ASSOC)) {

                                                $idy23 = $fila['id_falla'];


                                                $ALLRISK23 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy23' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK23 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy23' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK23 == 0) {
                                                } else {
                                                    $res23 =  $SUMRISK23 / $ALLRISK23;
                                                    if ($res23 >= 10.1 & $res23 <= 15) {

                                                        $resid23 = $res23;
                                                    }
                                                }
                                            }
                                            if (empty($resid23)) {
                                            } else {
                                            ?>
                                                <div id="riskmas23">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m24">

                                            <?php

                                            $tabcat24 = "SELECT * FROM $calcrisk ";
                                            $qtabcat24 = $dbo->query($tabcat24);

                                            while ($fila = $qtabcat24->fetch(PDO::FETCH_ASSOC)) {

                                                $idy24 = $fila['id_falla'];


                                                $ALLRISK24 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy24' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK24 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy24' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());



                                                if ($ALLRISK24 == 0) {
                                                } else {
                                                    $res24 =  $SUMRISK24 / $ALLRISK24;
                                                    if ($res24 >= 5.1 & $res24 <= 10) {

                                                        $resid24 = $res24;
                                                    }
                                                }
                                            }
                                            if (empty($resid24)) {
                                            } else {
                                            ?>
                                                <div id="riskmas24">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="m25">


                                            <?php

                                            $tabcat25 = "SELECT * FROM $calcrisk ";
                                            $qtabcat25 = $dbo->query($tabcat25);

                                            while ($fila = $qtabcat25->fetch(PDO::FETCH_ASSOC)) {

                                                $idy25 = $fila['id_falla'];


                                                $ALLRISK25 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy25' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());
                                                $SUMRISK25 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND id_falla = '$idy25' AND unidad LIKE '%$cliente%' AND macro LIKE '%$formmacro%' ")->fetch());


                                                if ($ALLRISK25 == 0) {
                                                } else {
                                                    $res25 =  $SUMRISK25 / $ALLRISK25;
                                                    if ($res25 >= 0 & $res25 <= 5) {

                                                        $resid25 = $res25;
                                                    }
                                                }
                                            }
                                            if (empty($resid25)) {
                                            } else {
                                            ?>
                                                <div id="riskmas25">
                                                    <img id="botonrisk" src="../img/suite/risk.png">
                                                </div>

                                            <?php
                                            }
                                            ?>

                                        </div>

                                    </div>



                                    <div id="TEXTmap">

                                        <div id="m1T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat = $dbo->query($tavcatcat);

                                                while ($fila = $qtavcatcat->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid = $fila['id_falla'];
                                                    $fallaT = $fila['falla'];
                                                    $mesf = $fila['mes'];
                                                    $allrisk = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk == 0) {
                                                    } else {

                                                        $resT = $resres / $allrisk;

                                                        if ($resT >= 120.1) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf;  ?></td>
                                                                <td class="just"><?php echo $fallaT;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT >= 0.01 & $resT <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT >= 5.1 & $resT <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT >= 35.1 & $resT <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT >= 85.1 & $resT <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>
                                            </table>

                                        </div>
                                        <div id="m2T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat2 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat2 = $dbo->query($tavcatcat2);

                                                while ($fila = $qtavcatcat2->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid2 = $fila['id_falla'];
                                                    $fallaT2 = $fila['falla'];
                                                    $mesf2 = $fila['mes'];
                                                    $allrisk2 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid2' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres2 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid2' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk2 == 0) {
                                                    } else {

                                                        $resT2 = $resres2 / $allrisk2;

                                                        if ($resT2 >= 115.1 & $resT2 <= 120) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf2;  ?></td>
                                                                <td class="just"><?php echo $fallaT2;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT2 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT2 >= 0.01 & $resT2 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT2 >= 5.1 & $resT2 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT2 >= 35.1 & $resT2 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT2 >= 85.1 & $resT2 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT2 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>
                                            </table>

                                        </div>
                                        <div id="m3T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat3 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat3 = $dbo->query($tavcatcat3);

                                                while ($fila = $qtavcatcat3->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid3 = $fila['id_falla'];
                                                    $fallaT3 = $fila['falla'];
                                                    $mesf3 = $fila['mes'];
                                                    $allrisk3 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid3' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres3 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid3' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk3 == 0) {
                                                    } else {

                                                        $resT3 = $resres3 / $allrisk3;

                                                        if ($resT3 >= 110.1 & $resT3 <= 115) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf3;  ?></td>
                                                                <td class="just"><?php echo $fallaT3;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT3 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT3 >= 0.01 & $resT3 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT3 >= 5.1 & $resT3 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT3 >= 35.1 & $resT3 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT3 >= 85.1 & $resT3 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT3 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m4T" class="backtabText">



                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat4 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat4 = $dbo->query($tavcatcat4);

                                                while ($fila = $qtavcatcat4->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid4 = $fila['id_falla'];
                                                    $fallaT4 = $fila['falla'];
                                                    $mesf4 = $fila['mes'];
                                                    $allrisk4 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid4' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres4 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid4' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk4 == 0) {
                                                    } else {

                                                        $resT4 = $resres4 / $allrisk4;

                                                        if ($resT4 >= 105.1 & $resT4 <= 110) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf4;  ?></td>
                                                                <td class="just"><?php echo $fallaT4;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT4 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT4 >= 0.01 & $resT4 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT4 >= 5.1 & $resT4 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT4 >= 35.1 & $resT4 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT4 >= 85.1 & $resT4 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT4 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m5T" class="backtabText">



                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat5 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat5 = $dbo->query($tavcatcat5);

                                                while ($fila = $qtavcatcat5->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid5 = $fila['id_falla'];
                                                    $fallaT5 = $fila['falla'];
                                                    $mesf5 = $fila['mes'];
                                                    $allrisk5 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid5' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres5 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid5' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk5 == 0) {
                                                    } else {

                                                        $resT5 = $resres5 / $allrisk5;

                                                        if ($resT5 >= 100.1 & $resT5 <= 105) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf5;  ?></td>
                                                                <td class="just"><?php echo $fallaT5;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT5 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT5 >= 0.01 & $resT5 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT5 >= 5.1 & $resT5 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT5 >= 35.1 & $resT5 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT5 >= 85.1 & $resT5 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT5 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m6T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat6 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat6 = $dbo->query($tavcatcat6);

                                                while ($fila = $qtavcatcat6->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid6 = $fila['id_falla'];
                                                    $fallaT6 = $fila['falla'];
                                                    $mesf6 = $fila['mes'];
                                                    $allrisk6 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid6' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres6 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid6' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk6 == 0) {
                                                    } else {

                                                        $resT6 = $resres6 / $allrisk6;

                                                        if ($resT6 >= 95.1 & $resT6 <= 100) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf6;  ?></td>
                                                                <td class="just"><?php echo $fallaT6;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT6 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT6 >= 0.01 & $resT6 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT6 >= 5.1 & $resT6 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT6 >= 35.1 & $resT6 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT6 >= 85.1 & $resT6 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT6 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m7T" class="backtabText">



                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat7 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat7 = $dbo->query($tavcatcat7);

                                                while ($fila = $qtavcatcat7->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid7 = $fila['id_falla'];
                                                    $fallaT7 = $fila['falla'];
                                                    $mesf7 = $fila['mes'];
                                                    $allrisk7 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid7' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres7 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid7' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk7 == 0) {
                                                    } else {

                                                        $resT7 = $resres7 / $allrisk7;

                                                        if ($resT7 >= 90.1 & $resT7 <= 95) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf7;  ?></td>
                                                                <td class="just"><?php echo $fallaT7;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT7 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT7 >= 0.01 & $resT7 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT7 >= 5.1 & $resT7 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT7 >= 35.1 & $resT7 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT7 >= 85.1 & $resT7 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT7 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m8T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat8 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat8 = $dbo->query($tavcatcat8);

                                                while ($fila = $qtavcatcat8->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid8 = $fila['id_falla'];
                                                    $fallaT8 = $fila['falla'];
                                                    $mesf8 = $fila['mes'];
                                                    $allrisk8 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid8' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres8 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid8' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk8 == 0) {
                                                    } else {

                                                        $resT8 = $resres8 / $allrisk8;

                                                        if ($resT8 >= 85.1 & $resT8 <= 90) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf8;  ?></td>
                                                                <td class="just"><?php echo $fallaT8;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT8 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT8 >= 0.01 & $resT8 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT8 >= 5.1 & $resT8 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT8 >= 35.1 & $resT8 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT8 >= 85.1 & $resT8 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT8 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m9T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat9 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat9 = $dbo->query($tavcatcat9);

                                                while ($fila = $qtavcatcat9->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid9 = $fila['id_falla'];
                                                    $fallaT9 = $fila['falla'];
                                                    $mesf9 = $fila['mes'];
                                                    $allrisk9 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid9' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres9 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid9' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk9 == 0) {
                                                    } else {

                                                        $resT9 = $resres9 / $allrisk9;

                                                        if ($resT9 >= 80.1 & $resT9 <= 85) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf9;  ?></td>
                                                                <td class="just"><?php echo $fallaT9;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT9 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT9 >= 0.01 & $resT9 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT9 >= 5.1 & $resT9 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT9 >= 35.1 & $resT9 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT9 >= 85.1 & $resT9 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT9 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m10T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat10 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat10 = $dbo->query($tavcatcat10);

                                                while ($fila = $qtavcatcat10->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid10 = $fila['id_falla'];
                                                    $fallaT10 = $fila['falla'];
                                                    $mesf10 = $fila['mes'];
                                                    $allrisk10 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid10' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres10 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid10' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk10 == 0) {
                                                    } else {

                                                        $resT10 = $resres10 / $allrisk10;

                                                        if ($resT10 >= 75.1 & $resT10 <= 80) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf10;  ?></td>
                                                                <td class="just"><?php echo $fallaT10;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT10 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT10 >= 0.01 & $resT10 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT10 >= 5.1 & $resT10 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT10 >= 35.1 & $resT10 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT10 >= 85.1 & $resT10 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT10 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m11T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat11 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat11 = $dbo->query($tavcatcat11);

                                                while ($fila = $qtavcatcat11->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid11 = $fila['id_falla'];
                                                    $fallaT11 = $fila['falla'];
                                                    $mesf11 = $fila['mes'];
                                                    $allrisk11 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid11' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres11 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid11' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk11 == 0) {
                                                    } else {

                                                        $resT11 = $resres11 / $allrisk11;

                                                        if ($resT11 >= 70.1 & $resT11 <= 75) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf11;  ?></td>
                                                                <td class="just"><?php echo $fallaT11;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT11 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT11 >= 0.01 & $resT11 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT11 >= 5.1 & $resT11 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT11 >= 35.1 & $resT11 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT11 >= 85.1 & $resT11 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT11 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m12T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat12 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat12 = $dbo->query($tavcatcat12);

                                                while ($fila = $qtavcatcat12->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid12 = $fila['id_falla'];
                                                    $fallaT12 = $fila['falla'];
                                                    $mesf12 = $fila['mes'];
                                                    $allrisk12 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid12' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres12 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid12' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk12 == 0) {
                                                    } else {

                                                        $resT12 = $resres12 / $allrisk12;

                                                        if ($resT12 >= 65.1 & $resT12 <= 70) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf12;  ?></td>
                                                                <td class="just"><?php echo $fallaT12;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT12 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT12 >= 0.01 & $resT12 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT12 >= 5.1 & $resT12 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT12 >= 35.1 & $resT12 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT12 >= 85.1 & $resT12 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT12 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m13T" class="backtabText">
                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat13 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat13 = $dbo->query($tavcatcat13);

                                                while ($fila = $qtavcatcat13->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid13 = $fila['id_falla'];
                                                    $fallaT13 = $fila['falla'];
                                                    $mesf13 = $fila['mes'];
                                                    $allrisk13 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid13' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres13 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid13' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk13 == 0) {
                                                    } else {

                                                        $resT13 = $resres13 / $allrisk13;

                                                        if ($resT13 >= 60.1 & $resT13 <= 65) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf13;  ?></td>
                                                                <td class="just"><?php echo $fallaT13;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT13 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT13 >= 0.01 & $resT13 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT13 >= 5.1 & $resT13 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT13 >= 35.1 & $resT13 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT13 >= 85.1 & $resT13 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT13 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m14T" class="backtabText">



                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat14 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat14 = $dbo->query($tavcatcat14);

                                                while ($fila = $qtavcatcat14->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid14 = $fila['id_falla'];
                                                    $fallaT14 = $fila['falla'];
                                                    $mesf14 = $fila['mes'];
                                                    $allrisk14 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid14' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres14 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid14' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk14 == 0) {
                                                    } else {

                                                        $resT14 = $resres14 / $allrisk14;

                                                        if ($resT14 >= 55.1 & $resT14 <= 60) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf14;  ?></td>
                                                                <td class="just"><?php echo $fallaT14;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT14 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT14 >= 0.01 & $resT14 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT14 >= 5.1 & $resT14 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT14 >= 35.1 & $resT14 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT14 >= 85.1 & $resT14 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT14 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m15T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat15 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat15 = $dbo->query($tavcatcat15);

                                                while ($fila = $qtavcatcat15->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid15 = $fila['id_falla'];
                                                    $fallaT15 = $fila['falla'];
                                                    $mesf15 = $fila['mes'];
                                                    $allrisk15 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid15' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres15 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid15' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk15 == 0) {
                                                    } else {

                                                        $resT15 = $resres15 / $allrisk15;

                                                        if ($resT15 >= 50.1 & $resT15 <= 55) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf15;  ?></td>
                                                                <td class="just"><?php echo $fallaT15;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT15 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT15 >= 0.01 & $resT15 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT15 >= 5.1 & $resT15 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT15 >= 35.1 & $resT15 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT15 >= 85.1 & $resT15 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT15 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m16T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat16 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat16 = $dbo->query($tavcatcat16);

                                                while ($fila = $qtavcatcat16->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid16 = $fila['id_falla'];
                                                    $fallaT16 = $fila['falla'];
                                                    $mesf16 = $fila['mes'];
                                                    $allrisk16 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid16' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres16 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid16' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk16 == 0) {
                                                    } else {

                                                        $resT16 = $resres16 / $allrisk16;

                                                        if ($resT16 >= 45.1 & $resT16 <= 50) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf16;  ?></td>
                                                                <td class="just"><?php echo $fallaT16;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT16 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT16 >= 0.01 & $resT16 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT16 >= 5.1 & $resT16 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT16 >= 35.1 & $resT16 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT16 >= 85.1 & $resT16 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT16 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m17T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat17 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat17 = $dbo->query($tavcatcat17);

                                                while ($fila = $qtavcatcat17->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid17 = $fila['id_falla'];
                                                    $fallaT17 = $fila['falla'];
                                                    $mesf17 = $fila['mes'];
                                                    $allrisk17 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid17' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres17 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid17' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk17 == 0) {
                                                    } else {

                                                        $resT17 = $resres17 / $allrisk17;

                                                        if ($resT17 >= 40.1 & $resT17 <= 45) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf17;  ?></td>
                                                                <td class="just"><?php echo $fallaT17;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT17 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT17 >= 0.01 & $resT17 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT17 >= 5.1 & $resT17 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT17 >= 35.1 & $resT17 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT17 >= 85.1 & $resT17 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT17 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m18T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat18 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat18 = $dbo->query($tavcatcat18);

                                                while ($fila = $qtavcatcat18->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid18 = $fila['id_falla'];
                                                    $fallaT18 = $fila['falla'];
                                                    $mesf18 = $fila['mes'];
                                                    $allrisk18 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid18' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres18 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid18' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk18 == 0) {
                                                    } else {

                                                        $resT18 = $resres18 / $allrisk18;

                                                        if ($resT18 >= 35.1 & $resT18 <= 40) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf18;  ?></td>
                                                                <td class="just"><?php echo $fallaT18;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT18 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT18 >= 0.01 & $resT18 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT18 >= 5.1 & $resT18 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT18 >= 35.1 & $resT18 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT18 >= 85.1 & $resT18 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT18 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m19T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat19 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat19 = $dbo->query($tavcatcat19);

                                                while ($fila = $qtavcatcat19->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid19 = $fila['id_falla'];
                                                    $fallaT19 = $fila['falla'];
                                                    $mesf19 = $fila['mes'];
                                                    $allrisk19 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid19' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres19 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid19' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk19 == 0) {
                                                    } else {

                                                        $resT19 = $resres19 / $allrisk19;

                                                        if ($resT19 >= 30.1 & $resT19 <= 35) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf19;  ?></td>
                                                                <td class="just"><?php echo $fallaT19;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT19 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT19 >= 0.01 & $resT19 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT19 >= 5.1 & $resT19 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT19 >= 35.1 & $resT19 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT19 >= 85.1 & $resT19 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT19 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m20T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat20 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat20 = $dbo->query($tavcatcat20);

                                                while ($fila = $qtavcatcat20->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid20 = $fila['id_falla'];
                                                    $fallaT20 = $fila['falla'];
                                                    $mesf20 = $fila['mes'];
                                                    $allrisk20 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid20' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres20 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid20' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk20 == 0) {
                                                    } else {

                                                        $resT20 = $resres20 / $allrisk20;

                                                        if ($resT20 >= 25.1 & $resT20 <= 30) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf20;  ?></td>
                                                                <td class="just"><?php echo $fallaT20;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT20 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT20 >= 0.01 & $resT20 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT20 >= 5.1 & $resT20 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT20 >= 35.1 & $resT20 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT20 >= 85.1 & $resT20 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT20 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m21T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat21 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat21 = $dbo->query($tavcatcat21);

                                                while ($fila = $qtavcatcat21->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid21 = $fila['id_falla'];
                                                    $fallaT21 = $fila['falla'];
                                                    $mesf21 = $fila['mes'];
                                                    $allrisk21 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid21' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres21 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid21' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk21 == 0) {
                                                    } else {

                                                        $resT21 = $resres21 / $allrisk21;

                                                        if ($resT21 >= 20.1 & $resT21 <= 25) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf21;  ?></td>
                                                                <td class="just"><?php echo $fallaT21;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT21 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT21 >= 0.01 & $resT21 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT21 >= 5.1 & $resT21 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT21 >= 35.1 & $resT21 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT21 >= 85.1 & $resT21 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT21 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m22T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat22 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat22 = $dbo->query($tavcatcat22);

                                                while ($fila = $qtavcatcat22->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid22 = $fila['id_falla'];
                                                    $fallaT22 = $fila['falla'];
                                                    $mesf22 = $fila['mes'];
                                                    $allrisk22 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid22' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres22 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid22' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk22 == 0) {
                                                    } else {

                                                        $resT22 = $resres22 / $allrisk22;

                                                        if ($resT22 >= 15.01 & $resT22 <= 20) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf22;  ?></td>
                                                                <td class="just"><?php echo $fallaT22;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT22 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT22 >= 0.01 & $resT22 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT22 >= 5.1 & $resT22 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT22 >= 35.1 & $resT22 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT22 >= 85.1 & $resT22 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT22 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m23T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat23 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat23 = $dbo->query($tavcatcat23);

                                                while ($fila = $qtavcatcat23->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid23 = $fila['id_falla'];
                                                    $fallaT23 = $fila['falla'];
                                                    $mesf23 = $fila['mes'];
                                                    $allrisk23 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid23' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres23 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid23' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk23 == 0) {
                                                    } else {

                                                        $resT23 = $resres23 / $allrisk23;

                                                        if ($resT23 >= 10.01 & $resT23 <= 15) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf23;  ?></td>
                                                                <td class="just"><?php echo $fallaT23;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT23 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT23 >= 0.01 & $resT23 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT23 >= 5.1 & $resT23 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT23 >= 35.1 & $resT23 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT23 >= 85.1 & $resT23 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT23 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m24T" class="backtabText">

                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat24 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat24 = $dbo->query($tavcatcat24);

                                                while ($fila = $qtavcatcat24->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid24 = $fila['id_falla'];
                                                    $fallaT24 = $fila['falla'];
                                                    $mesf24 = $fila['mes'];
                                                    $allrisk24 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid24' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres24 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid24' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk24 == 0) {
                                                    } else {

                                                        $resT24 = $resres24 / $allrisk24;

                                                        if ($resT24 >= 5.01 & $resT24 <= 10) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf24;  ?></td>
                                                                <td class="just"><?php echo $fallaT24;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT24 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT24 >= 0.01 & $resT24 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT24 >= 5.1 & $resT24 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT24 >= 35.1 & $resT24 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT24 >= 85.1 & $resT24 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT24 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>

                                        </div>
                                        <div id="m25T" class="backtabText">


                                            <table id="tablata">
                                                <div class="ocucol"></div>
                                                <tr id="columnas">
                                                    <th>MES</th>
                                                    <th>FALLA</th>
                                                    <th>PRIORIDAD</th>
                                                </tr>

                                                <?php

                                                $tavcatcat25 = "SELECT * FROM $calcrisk ";
                                                $qtavcatcat25 = $dbo->query($tavcatcat25);

                                                while ($fila = $qtavcatcat25->fetch(PDO::FETCH_ASSOC)) {

                                                    $fallaid25 = $fila['id_falla'];
                                                    $fallaT25 = $fila['falla'];
                                                    $mesf25 = $fila['mes'];
                                                    $allrisk25 = current($dbo->query("SELECT COUNT(*) FROM $calcrisk  WHERE id_falla ='$fallaid25' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%'  ")->fetch());
                                                    /*SEVERIDAD GENERAL E IMPACTO EN NORMATIVIDAD Y POLITICAS* */
                                                    $resres25 = current($dbo->query("SELECT SUM(res) FROM $calcrisk WHERE id_falla ='$fallaid25' AND yearfx LIKE '%$yearfx%' AND mes LIKE '%$mes%' AND macro LIKE '%$formmacro%' AND unidad LIKE '%$cliente%' ")->fetch());


                                                    if ($allrisk25 == 0) {
                                                    } else {

                                                        $resT25 = $resres25 / $allrisk25;

                                                        if ($resT25 >= 0 & $resT25 <= 5) {

                                                ?>
                                                            <tr>
                                                                <td class="center"><?php echo $mesf25;  ?></td>
                                                                <td class="just"><?php echo $fallaT25;  ?></td>
                                                                <td class="center">

                                                                    <?php

                                                                    if ($resT25 == 0) {
                                                                    ?>
                                                                        <div class="pri0">NO EVALUADO</div>
                                                                    <?php
                                                                    } elseif ($resT25 >= 0.01 & $resT25 <= 5) {
                                                                    ?>
                                                                        <div class="pri5">MUY BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT25 >= 5.1 & $resT25 <= 35) {
                                                                    ?>
                                                                        <div class="pri4">BAJA</div>
                                                                    <?php
                                                                    } elseif ($resT25 >= 35.1 & $resT25 <= 85) {
                                                                    ?>
                                                                        <div class="pri3">MEDIA</div>
                                                                    <?php
                                                                    } elseif ($resT25 >= 85.1 & $resT25 <= 120) {
                                                                    ?>
                                                                        <div class="pri2">ALTA</div>
                                                                    <?php
                                                                    } elseif ($resT25 >= 120.1) {
                                                                    ?>
                                                                        <div class="pri1">MUY ALTA</div>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </td>

                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }


                                                ?>

                                            </table>
                                        </div>

                                    </div>

                                </div>

                            </section>




                    <?php
                        }
                    }
                    ?>
                </div>

            </div>

        </section>

        <div id="blockMod"></div>


    </modseg>



</body>

</html>