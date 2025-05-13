<?php
session_start();
require_once '../../varSQL/var.php';
require_once '../../varSQL/bd.php';
require_once 'varSQL/dbmysql.php';

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
    <title>ez results</title>

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

        <?php

        if ($adminrol == $radmin) {

        ?>
            <div class="bakBoton">

                <img src="img/registro.png" class="lognav">
                <div id="txt3" class="txttx"><strong>REGISTRO</strong></div>

                <form action="select_registra.php">

                    <input type="submit" class="submit" id="slognav3">

                </form>

            </div>
        <?php

        }

        ?>




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

                <form id="mod_indica" method="POST" action="resultados/tableroRes.php">

                    <div class="namesect">RESULTADOS REGIONALES</div>

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


                    <select id="user" name="tabdueno" class="input" required>

                        <?php

                        if ($adminrol == $radmin) {

                        ?>
                            <option value="" selected>Resultados de...</option>
                            <?php

                            $tabus = "SELECT * FROM $userIndica WHERE rol = '$rolRolDIG' ";
                            $qtabus = $dbo->query($tabus);

                            foreach ($qtabus as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radreg) {

                            ?>
                            <option value="" selected>Resultados de...</option>
                            <?php

                            $tabus = "SELECT * FROM $userIndica WHERE rol = '$rolRolDI' AND region  = '$userAcroregion' ";
                            $qtabus = $dbo->query($tabus);

                            foreach ($qtabus as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                            <?php

                            }
                        } else {
                            ?>
                            <option value="" selected>ACCESO RESTRINGIDO</option>
                        <?php
                        }


                        ?>
                    </select>


                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

                <form id="mod_estado" method="POST" action="results.php">

                    <div class="namesect">RESULTADOS GERENCIAS</div>

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

                    <select id="user" name="tabdueno" class="input" required>

                        <option value="" selected>Resultados de...</option>
                        <?php

                        if ($adminrol == $radmin) {
                            ///validar tipo de usuario en tabla de usuarios

                            $tabus2 = "SELECT * FROM $userIndica WHERE rol = '$rolRolDI' ";
                            $qtabus2 = $dbo->query($tabus2);

                            foreach ($qtabus2 as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radreg) {

                            $tabus2 = "SELECT * FROM $userIndica WHERE rol = '$rolRolDI' AND region  = '$userAcroregion' ";
                            $qtabus2 = $dbo->query($tabus2);

                            foreach ($qtabus2 as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radger) {



                            $tabvalyus = "SELECT * FROM $sresuall WHERE usuario = '$userLog' AND activo ='1' ";

                            $qtabvalyus = $db_users->query($tabvalyus);



                            while ($filpto = $qtabvalyus->fetch(PDO::FETCH_ASSOC)) {
                                $tipouserly = $filpto['tipouser'];
                            }

                            $tabus2 = "SELECT * FROM $userIndica WHERE tipouser = '$tipouserly' AND unidad  = '$userUnidadAcronu' ";
                            $qtabus2 = $dbo->query($tabus2);

                            foreach ($qtabus2 as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                            <?php

                            }
                        } else {
                            ?>
                            <option value="" selected>ACCESO RESTRINGIDO</option>
                        <?php
                        }





                        ?>
                    </select>

                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

                <form id="mod_estrat" method="POST" action="resultados/tableroRes.php">

                    <div class="namesect">RESULTADOS JEFATURAS</div>


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

                    <select id="user" name="tabdueno" class="input" required>

                        <option value="" selected>Resultados de...</option>
                        <?php

                        if ($adminrol == $radmin) {
                            $tabus = "SELECT * FROM $userIndica  WHERE rol = '$rolRolMA' ";
                            $qtabus = $dbo->query($tabus);

                            foreach ($qtabus as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                            <?php

                            }
                        } elseif ($adminrol == $radreg) {
                            $tabus = "SELECT * FROM $userIndica  WHERE rol = '$rolRolMA' AND region  = '$userAcroregion' ";
                            $qtabus = $dbo->query($tabus);

                            foreach ($qtabus as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                                <?php

                            }
                        } elseif ($adminrol == $radger) {

                            $tabus = "SELECT * FROM $userIndica  WHERE rol = '$rolRolMA' AND unidad  = '$userAcronu'  ";


                            ///validar tipo de usuario en tabla de usuarios
                            $valyuser = "SELECT * FROM $sresuall WHERE dirger = '$userLog'  ";
                            $qvalyuser = $db_users->query($valyuser);

                            while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
                                $tipouserU = $fila['tipouser'];


                                $tabus = "SELECT * FROM $userIndica WHERE tipouser = '$tipouserU' AND unidad  = '$userUnidadAcronu'  ";
                                $qtabus = $dbo->query($tabus);

                                foreach ($qtabus as $opciones) { ?>

                                    <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                                <?php

                                }
                            }
                        } else {

                            ///validar tipo de usuario en tabla de usuarios
                            $valyuser = "SELECT * FROM $sresuall WHERE usuario = '$userLog'  ";
                            $qvalyuser = $db_users->query($valyuser);
                            while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
                                $tipouserU = $fila['tipouser'];
                            }

                            $tabus = "SELECT * FROM $userIndica WHERE tipouser = '$tipouserU' AND unidad  = '$userUnidadAcronu'  ";

                            foreach ($qtabus as $opciones) { ?>

                                <option value="<?php echo $opciones['tipouser']; ?>"><?php echo $opciones['region'] . '/' . $opciones['unidad'] . '/' . $opciones['pos']; ?></option>

                        <?php

                            }
                        }




                        ?>
                    </select>
                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
                </form>

            </div>

        </div>


        <div id="backriel">
            <button class="boton_riel" id="boton_riel1">Regionales</button>
            <button class="boton_riel marginleft" id="boton_riel2">Gerencias</button>
            <button class="boton_riel marginleft" id="boton_riel3">Jefaturas</button>
        </div>
        <div id="blockMod"></div>
    </section>





</body>

</html>