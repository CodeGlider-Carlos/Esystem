<?php
session_start();
require_once '../../../varSQL/bd.php';
require_once '../varSQL/db_risk.php';
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

    <script type="text/javascript" src="js/cons.js"></script>
    <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="../../../css/allrisk.css">
    <link rel="stylesheet" type="text/css" href="css/cons.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
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


            <form action="../RISK/risk.php" id="slognav3">

                <input type="submit" class="submit" id="lognav3">

            </form>

        </div>



        <div class="bakBoton">

            <img src="../img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="cons.php" id="slognav4">

                <input type="submit" class="submit" id="">

            </form>
            <div class="line1"></div>
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

            <img id="lognav0" src="../../../img/apps/apps/ezrisk.png" class="imagUser">
            <div id="nameuser">
                <div class="useruu"><?php echo $userNom; ?></div>
            </div>

        </div>

    </navsup>


    <div id="backall"></div>
    <modseg id="modprosp">




        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">TIPO</div>


            <form class="tabcpo" method="POST" action="cons.php">



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


                <datalist id="catpersl">

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
                <input type="list" name="trabaj" id="depto" list="catpersl" class="input" placeholder="...">



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

                <div for="categoria" class="label">Id de Registro</div>
                <input type="text" name="idy" class="input" placeholder="...">



                <input type="submit" value="FILTRAR" id="savemod" name="buscarfa">

            </form>

            </div>

        </section>


        <section id="section2" class="sectionmod">




            <form id="backForm" method="POST" action="consSAVE.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                <div class="namesect" id="namesect3">CONSULTA DE REGISTROS</div>

                <?php

                if (isset($_POST['buscarfa'])) {

                ?>
                    <input type="submit" value="CONTINUAR" id="modsave">
                <?php

                }

                ?>

                <div id="backRisk">

                    <div id="backacciones">

                        <div class="namecotasky left"></div>


                        <?php

                        if (isset($_POST['buscarfa'])) {

                            $idy = $_POST['idy'];


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


                        ?>

                            <section id="backcabe">

                                <div id="nombreformprint"> <?php


                                                            echo 'EDICION/' . $year . '/' . $periodo . '/' . $cliente . '/' . $depto . '/' . $trabaj . '/' .  $macro  .  '/' .  $enfoque  .  '/' . $sino .  '/' . $evento;
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
                                    <thead>
                                        <!-- Encabezados -->
                                        <tr id="columnas">
                                            <th class="colstav1">ID</th>
                                            <th class="colstav2">CRITERIO OBSERVADO</th>
                                            <th class="colstav3">¿EXISTE FALLA?</th>
                                            <th class="colstav4">NOMBRE</th>
                                            <?php if ($adminrol == $radmin): ?>
                                                <th class="colstav5">EVALUADOR</th>
                                            <?php endif; ?>
                                            <th class="colstav5">ACCIÓN</th>
                                        </tr>
                                        <!-- Filtros por columna -->
                                        <tr>
                                            <th><input type="text" placeholder="Filtrar ID" class="column-filter input-search"></th>
                                            <th><input type="text" placeholder="Filtrar Criterio" class="column-filter input-search"></th>
                                            <th><input type="text" placeholder="Filtrar Falla" class="column-filter input-search"></th>
                                            <th><input type="text" placeholder="Filtrar Nombre" class="column-filter input-search"></th>
                                            <?php if ($adminrol == $radmin): ?>
                                                <th><input type="text" placeholder="Filtrar Evaluador" class="column-filter input-search"></th>
                                            <?php endif; ?>
                                            <th></th> <!-- Sin filtro para acciones -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Consulta según el rol
                                        if ($adminrol == $radmin) {
                                            $tabfall = "SELECT * FROM $regllas WHERE ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'";
                                        } elseif ($adminrol == $radreg) {
                                            $tabfall = "SELECT * FROM $regllas WHERE ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' AND evaluador = '$userLog' AND id LIKE '%$idy%'";
                                        } else {
                                            $tabfall = "SELECT * FROM $regllas WHERE ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo LIKE '%$evento%' AND riesgo LIKE '%$sino%' AND evaluador = '$userLog' AND id LIKE '%$idy%'";
                                        }

                                        $qtabfall = $dbo->query($tabfall);

                                        while ($filaR = $qtabfall->fetch(PDO::FETCH_ASSOC)) {
                                            $trabajadorNAME = $filaR['trabajador'];
                                            $idenfx = $filaR['idenfx'];
                                            $idREG = $filaR['id'];
                                            $evaluadorE = $filaR['evaluador'];
                                            $fallafall = $filaR['falla'];
                                            $riesg = $filaR['riesgo'];

                                            // Obtener nombre del enfoque
                                            $enfoqueNAME = '';
                                            $qbdlyenfoq = $dbo->query("SELECT * FROM $enfxtab WHERE idenfx = '$idenfx'");
                                            if ($fila = $qbdlyenfoq->fetch(PDO::FETCH_ASSOC)) {
                                                $enfoqueNAME = $fila['enfoque'];
                                            }

                                            echo '<tr>';
                                            echo '<td>' . $idREG . '</td>';
                                            echo '<td class="justify">' . $fallafall . '</td>';
                                            echo '<td>' . $riesg . '</td>';
                                            echo '<td>' . $trabajadorNAME . '</td>';

                                            if ($adminrol == $radmin) {
                                                echo '<td>' . $evaluadorE . '</td>';
                                            }

                                            echo '<td>
                    <select class="select" name="accion[' . $idREG . ']">
                        <option value="" selected>...</option>
                        <option value="ELI">ELIMINAR</option>
                    </select>
                  </td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>



                            </section>



                        <?php


                        }
                        ?>
                    </div>

                </div>

            </form>

        </section>






        <div id="blockMod"></div>


    </modseg>

    <script>
        $(document).ready(function() {
            var table = $('#tableCed').DataTable({
                paging: false,
                scrollX: true,
                orderCellsTop: true,
                fixedHeader: true,
                autoWidth: false,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });

            // Filtro por columna con inputs en la segunda fila
            $('#tableCed thead tr:eq(1) th').each(function(i) {
                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table.column(i).search(this.value).draw();
                    }
                });
            });
        });
    </script>

</body>

</html>