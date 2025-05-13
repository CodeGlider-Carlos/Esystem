<?php
session_start();
require_once '../../varSQL/var.php';
require_once '../../varSQL/bd.php';
require_once 'varSQL/dbmysql.php';
if (empty($_SESSION['usuario'])) {
    session_destroy();
    header("Location: ../../../../../../../index.php");
}
$adminrol = $_SESSION['rol'];
$userLog = $_SESSION['usuario'];
$userNom = $_SESSION['nombre'];
$userUnidad = $_SESSION['unidad'];
$userAcronu = $_SESSION['acronu'];
$userAcroregion = $_SESSION['acroregion'];
$userRegion = $_SESSION['region'];
$userUnidadAcronu = $_SESSION['acronu'];


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ RESULTS</title>

    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />

    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <!---------------------  CONTROLADORES JS----------------------->

    <script type="text/javascript" src="js/ezresults.js"></script>
    <!---------------------  LINK DE ESTILOS GENERALES----------------------->


    <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/idexresults.css">
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

            <img src="img/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="indexResults.php">

                <input type="submit" class="submit" id="slognav1">

            </form>


        </div>

        <div class="bakBoton">

            <img src="img/okrs.png" class="lognav">
            <div id="txt2" class="txttx"><strong>OKRS</strong></div>

            <form action="select_okrs.php">

                <input type="submit" class="submit" id="slognav2">

            </form>
            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img src="img/registro.png" class="lognav">
            <div id="txt3" class="txttx"><strong>REGISTRO</strong></div>

            <form action="select_registra.php">

                <input type="submit" class="submit" id="slognav3">

            </form>

        </div>


        <form action="../../suite.php" id="lognav7" class="bakBoton">

            <input type="image" src="../../img/suite/exit.svg" class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form>

    </navleft>

    <navsup id="navsup">



        <div id="backUser">

            <img id="lognav0" src="../../img/apps/apps/ezresults.png" class="imagUser">
            <div id="nameuser">
                <div class="useruu"><?php echo $userNom; ?></div>
            </div>

        </div>

    </navsup>

    <div id="backallS"></div>

    <section id="backallres">

        <div id="back_rrusel">

            <div id="mover">

                <form id="mod_indica" method="POST" action="registra/registra_indicas.php">

                    <div class="namesect">INDICADORES</div>

                    <select name="region" class="input">
                        <option value="" class="left" selected>Región...</option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>
                    </select>

                    <select id="unidad" name="unidad" class="input" required>

                        <option value="" selected>Unidad...</option>
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
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radman) {
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                            }
                        }

                        ?>
                    </select>

                    <select id="yearyearSel" name="year" class="input">
                        <option value="" selected>Año...</option>
                        <option value="23">2023</option>
                        <option value="24">2024</option>
                        <option value="25">2025</option>
                    </select>

                    <select id="periodo" name="periodo" class="input">
                        <option value="" selected>Mes...</option>
                        <option value="01">ENE</option>
                        <option value="02">FEB</option>
                        <option value="03">MAR</option>
                        <option value="04">ABR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option>
                        <option value="07">JUL</option>
                        <option value="08">AGO</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option>
                        <option value="11">NOV</option>
                        <option value="12">DIC</option>
                    </select>

                    <select id="user" name="tabdueno" class="input" required>

                        <option value="" selected>Resultados de...</option>
                        <?php

                        if ($adminrol == $radmin) {
                            $tabus = "SELECT * FROM $userIndica";
                        } else {

                            ///validar tipo de usuario en tabla de usuarios
                            $valyuser = "SELECT * FROM $sresuall WHERE usuario = '$userLog'  ";
                            $qvalyuser = $db_users->query($valyuser);
                            while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
                                $tipouserU = $fila['tipouser'];
                            }

                            $tabus = "SELECT * FROM $userIndica WHERE tipouser = '$tipouserU' ";
                        }


                        $qtabus = $dbo->query($tabus);

                        foreach ($qtabus as $opciones) { ?>

                            <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                        <?php

                        }
                        ?>
                    </select>


                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

                <form id="mod_estrat" method="POST" action="registra/registra_estrategias.php">

                    <div class="namesect">ESTRATEGIAS COMERCIALES</div>

                    <select name="region" class="input">
                        <option value="" class="left" selected>Región...</option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>
                    </select>

                    <select id="unidad" name="unidad" class="input" required>

                        <option value="" selected>Unidad...</option>
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
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radman) {
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                            }
                        }

                        ?>
                    </select>
                    <select id="yearyearSel" name="year" class="input">
                        <option value="" selected>Año...</option>
                        <option value="23">2023</option>
                        <option value="24">2024</option>
                        <option value="25">2025</option>
                    </select>

                    <select id="periodo" name="periodo" class="input">
                        <option value="" selected>Mes...</option>
                        <option value="01">ENE</option>
                        <option value="02">FEB</option>
                        <option value="03">MAR</option>
                        <option value="04">ABR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option>
                        <option value="07">JUL</option>
                        <option value="08">AGO</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option>
                        <option value="11">NOV</option>
                        <option value="12">DIC</option>
                        <option value="">ACUMULADO</option>
                    </select>

                    <select id="yearyearSel" name="accion" class="input">
                        <option value="" selected>Acción...</option>
                        <option value="AGREGAR">AGREGAR</option>
                        <option value="CONSULTAR">CONSULTAR O MODIFICAR</option>

                    </select>

                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

                <form id="mod_estado" method="POST" action="registra/registra_estados.php">

                    <div class="namesect">ESTADO DE RESULTADOS</div>


                    <select name="region" class="input">
                        <option value="" class="left" selected>Región...</option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>
                    </select>

                    <select id="unidad" name="unidad" class="input" required>

                        <option value="" selected>Unidad...</option>
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
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radman) {
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                            }
                        }

                        ?>
                    </select>

                    <select id="yearyearSel" name="year" class="input">
                        <option value="" selected>Año...</option>
                        <option value="23">2023</option>
                        <option value="24">2024</option>
                        <option value="25">2025</option>
                    </select>

                    <select id="periodo" name="periodo" class="input">
                        <option value="" selected>Mes...</option>
                        <option value="01">ENE</option>
                        <option value="02">FEB</option>
                        <option value="03">MAR</option>
                        <option value="04">ABR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option>
                        <option value="07">JUL</option>
                        <option value="08">AGO</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option>
                        <option value="11">NOV</option>
                        <option value="12">DIC</option>
                    </select>
                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>



                <form id="mod_flujo" method="POST" action="">

                    <div class="namesect">FLUJO DE EFECTIVO</div>


                    <select name="region" class="input">
                        <option value="" class="left" selected>Región...</option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>
                    </select>

                    <select id="unidad" name="unidad" class="input" required>

                        <option value="" selected>Unidad...</option>
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
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radman) {
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                            }
                        }

                        ?>
                    </select>
                    <select id="yearyearSel" name="yearyearSel" class="input">
                        <option value="" selected>Año...</option>
                        <option value="23">2023</option>
                        <option value="24">2024</option>
                        <option value="25">2025</option>
                    </select>

                    <select id="periodo" name="periodoSel" class="input">
                        <option value="" selected>Mes...</option>
                        <option value="01">ENE</option>
                        <option value="02">FEB</option>
                        <option value="03">MAR</option>
                        <option value="04">ABR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option>
                        <option value="07">JUL</option>
                        <option value="08">AGO</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option>
                        <option value="11">NOV</option>
                        <option value="12">DIC</option>
                        <option value="">ACUMULADO</option>
                    </select>
                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

                <form id="mod_prod" method="POST" action="registra/registra_productividad.php">

                    <div class="namesect">PRODUCTIVIDAD</div>

                    <select name="region" class="input">
                        <option value="" class="left" selected>Región...</option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>
                    </select>

                    <select id="unidad" name="unidad" class="input" required>

                        <option value="" selected>Unidad...</option>
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
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radman) {
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                            $qtabunid = $db_users->query($tabunid);

                            foreach ($qtabunid as $opciones) { ?>

                                <option value="<?php echo $opciones['acronu']; ?>"><?php echo $opciones['unidad']; ?></option>

                        <?php

                            }
                        }

                        ?>
                    </select>

                    <select id="yearyearSel" name="year" class="input">
                        <option value="" selected>Año...</option>
                        <option value="23">2023</option>
                        <option value="24">2024</option>
                        <option value="25">2025</option>
                    </select>

                    <select id="periodo" name="periodo" class="input">
                        <option value="" selected>Mes...</option>
                        <option value="01">ENE</option>
                        <option value="02">FEB</option>
                        <option value="03">MAR</option>
                        <option value="04">ABR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option>
                        <option value="07">JUL</option>
                        <option value="08">AGO</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option>
                        <option value="11">NOV</option>
                        <option value="12">DIC</option>
                    </select>
                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

            </div>

        </div>


        <div id="backriel">
            <button class="boton_riel" id="boton_riel1">Indicadorees</button>
            <button class="boton_riel marginleft" id="boton_riel2">Resultados</button>
            <button class="boton_riel marginleft" id="boton_riel3">Comerciales</button>
            <button class="boton_riel marginleft" id="boton_riel4">Efectivo</button>
            <button class="boton_riel marginleft" id="boton_riel5">Productividad</button>
        </div>

        <div id="blockMod"></div>

    </section>





</body>

</html>