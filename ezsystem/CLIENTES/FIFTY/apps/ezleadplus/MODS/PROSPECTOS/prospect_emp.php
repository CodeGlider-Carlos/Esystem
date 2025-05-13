<?php
session_start();
require_once '../../varSQL/bd_lead.php';
require_once '../../../../varSQL/var.php';
require_once '../../../../varSQL/bd.php';
$adminrol = $_SESSION['rol'];
$userLog = $_SESSION['usuario'];
$userNom = $_SESSION['nombre'];
$userUnidad = $_SESSION['unidad'];
$userAcronu = $_SESSION['acronu'];
$userAcroregion = $_SESSION['acroregion'];
$userRegion = $_SESSION['region'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead</title>


    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />

    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <!---------------------  CONTROLADORES JS----------------------->

    <script type="text/javascript" src="js/prospect.js"></script>
    <!---------------------  LINK DE ESTILOS GENERALES----------------------->


    <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/prospect.css">
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

            <img id="lognav1" src="../../img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit">

            </form>

        </div>


        <div class="bakBoton">

            <img id="lognav2" src="../../img/suite/pros2.png" class="lognav">
            <div id="txt2" class="txttx"><strong>PROSPECTOS</strong></div>


            <form action="../PROSPECTOS/prospect_px.php" id="slognav2">

                <input type="submit" class="submit">

            </form>

            <div class="line1"></div>

        </div>


        <div class="bakBoton">

            <img id="lognav3" src="../../img/suite/tarj2.png" class="lognav">
            <div id="txt3" class="txttx"><strong>TARJETA DE CONTACTO</strong></div>


            <form action="../TARJETAS/selectipo.php" id="slognav3">

                <input type="submit" class="submit">

            </form>

        </div>



        <form action="../../../../suite.php" id="lognav7" class="bakBoton">

            <input type="image" src="../../img/suite/exit.svg" class="lognav" name="exitdk">

            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form>

    </navleft>


    <navsup id="navsup">

        <div id="backUser">

            <img id="lognav0" src="../../../../img/apps/apps/ezlead.png" class="imagUser">
            <div id="nameuser">
                <div class="useruu"><?php echo $userNom; ?></div>
            </div>

        </div>

    </navsup>



    <div id="backall"></div>
    <modseg id="modprosp">


        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">AGREGAR EMPRESA</div>

            <?php

            if (isset($_POST['modemp'])) {
                $idpros = $_POST['idpros'];

                if ($adminrol == $radmin) {
                    $tabprosemp = "SELECT * FROM $crm_prosElead WHERE id = '$idpros'  ";
                } elseif ($adminrol == $radger) {
                    $tabprosemp = "SELECT * FROM $crm_prosElead WHERE id = '$idpros'  ";
                } else {
                    $tabprosemp = "SELECT * FROM $crm_prosElead WHERE id = '$idpros'  AND useralta = '$userLog' ";
                }


                $qtabprosemp = $dbc->query($tabprosemp);


                while ($fila = $qtabprosemp->fetch(PDO::FETCH_ASSOC)) {
                    $idupd = $fila['id'];
                    $categoria = $fila['categoria'];
                    $region = $fila['region'];
                    $unidad = $fila['unidad'];
                    $nombreco = $fila['nombreco'];
                    $acron = $fila['acron'];
                    $especialidad = $fila['especialidad'];
                    $tel1 = $fila['tel1'];
                    $tel2 = $fila['tel2'];
                    $nombrecontacto = $fila['nombrecontacto'];
                    $email = $fila['email'];
                    $fuente = $fila['fuente'];
                    $finterna = $fila['finterna'];
                    $useresp = $fila['useresp'];
                    $obs = $fila['obs'];
                }
            ?>

                <form method="POST" action="prospect_emp.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                    <input type="submit" value="EMPRESAS" class="botprosp1a">

                </form>

                <form method="POST" action="prospect_px.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                    <input type="submit" value="PACIENTES" class="botprosp2a">

                </form>


                <form class="tabcpo" method="POST" action="save_emp.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                    <div for="categoria" class="label">Región</div>

                    <select id="region" name="region" class="select">
                        <option value="" selected><?php echo $region; ?></option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>

                    </select>

                    <div for="categoria" class="label">Unidad</div>

                    <select id="region" name="unidad" class="select" required>

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

                    <div for="categoria" class="label">Categoria</div>

                    <select id="categoria" name="categoria" class="select">
                        <option value="" selected><?php echo $categoria; ?></option>
                        <option value="PACIENTE">PACIENTE</option>
                        <option value="ORGANIZACION PRIVADA">ORGANIZACION PRIVADA</option>
                        <option value="ORGANIZACION PUBLICA">ORGANIZACION PUBLICA</option>
                        <option value="NUCLEO MEDICO">NUCLEO MEDICO</option>
                        <option value="ADMINISTRADORA DE SERVICIOS">ADMINISTRADORA DE SERVICIOS</option>
                        <option value="ASEGURADORA">ASEGURADORA</option>
                        <option value="MEDICOS PRIVADOS">MEDICOS PRIVADOS</option>
                        <option value="SOCIOS">SOCIOS</option>
                    </select>

                    <div for="organizacion" class="label">Nombre</div>
                    <input type="text" id="organizacion" name="organizacion" class="input" placeholder="<?php echo $nombreco; ?>">

                    <div for="organizacion" class="label">Acrónimo</div>
                    <input type="text" id="acron" name="acron" class="input" placeholder="<?php echo $acron; ?>">


                    <div for="especialidad" class="label">Especialidad</div>

                    <select id="especialidad" name="especialidad" class="select">
                        <option value="" selected><?php echo $especialidad; ?></option>
                        <option value="NO APLICA">NO APLICA</option>
                        <option value="CIRUGIA GENERAL">CIRUGIA GENERAL</option>
                        <option value="ORTOPEDIA Y TRAUMATOLOGIA">ORTOPEDIA Y TRAUMATOLOGIA</option>
                        <option value="NEUROCIRUGIA">NEUROCIRUGIA</option>
                        <option value="OTORRINOLARINGOLOGIA">OTORRINOLARINGOLOGIA</option>
                        <option value="GINECOLOGIA Y OBSTETRICIA">GINECOLOGIA Y OBSTETRICIA</option>
                        <option value="CIRUGIA BARIATRICA">CIRUGIA BARIATRICA</option>
                        <option value="CIRUGIA PEDIATRIA">CIRUGIA PEDIATRIA</option>
                        <option value="CIRUGIA ONCOLOGICA">CIRUGIA ONCOLOGICA</option>
                        <option value="CIRUGIA PLASTICA">CIRUGIA PLASTICA</option>
                        <option value="ODONTOLOGIA">ODONTOLOGIA</option>
                        <option value="OFTALMOLOGIA">OFTALMOLOGIA</option>
                        <option value="OTROS">OTROS</option>

                    </select>

                    <div for="telefono" class="label">Teléfono de la Red</div>
                    <input type="text" id="telefono" name="telefono" class="input" placeholder="<?php echo $tel1; ?>">

                    <div for="NOM" class="label">Nombre de Contacto</div>
                    <input type="text" id="organizacion" name="nombreco" class="input" placeholder="<?php echo $nombrecontacto; ?>">

                    <div for="whats" class="label">Teléfono de Contacto</div>
                    <input type="text" id="whats" name="whats" class="input" placeholder="<?php echo $tel2; ?>">

                    <div for="email" class="label">Correo Electrónico</div>
                    <input type="text" id="email" name="email" class="input" placeholder="<?php echo $email; ?>">

                    <div for="fuente" class="label">Fuente de Contacto</div>
                    <select id="fuente" name="fuente" class="select">
                        <option value="" selected><?php echo $fuente; ?></option>
                        <option value="REDES">REDES SOCIALES</option>
                        <option value="LLAMADA">LLAMADA</option>
                        <option value="RECEPCION">RECEPCION</option>
                        <option value="WHATSAPP">WHATSAPP</option>
                        <option value="CONSULTORIO">VISITA A CONSULTORIO</option>
                        <option value="ORGANIZACION">VISITA A EMPRESA</option>
                        <option value="OTRA">OTRA</option>
                    </select>


                    <div for="finterna" class="label">Contacto Hospital</div>
                    <select id="finterna" name="finterna" class="select">
                        <option value="" selected><?php echo $finterna; ?></option>
                        <?php

                        if ($adminrol == $radmin) {
                            $tabuslead = "SELECT * FROM $users_leadlead";
                        } elseif ($adminrol == $radreg) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } elseif ($adminrol == $radcom) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } else {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                        }


                        $qtabuslead = $dbc->query($tabuslead);

                        foreach ($qtabuslead as $opciones) { ?>

                            <option value="<?php echo $opciones['user']; ?>"><?php echo $opciones['nombre']; ?></option>

                        <?php

                        }
                        ?>
                        <option value="AYR">ADMISION Y RELACIONES PUBLICAS</option>
                    </select>

                    <div for="useresp" class="label">Usuario Responsable</div>
                    <select id="useresp" name="useresp" class="select">
                        <option value="" selected><?php echo $useresp; ?></option>

                        <?php

                        if ($adminrol == $radmin) {
                            $tabuslead = "SELECT * FROM $users_leadlead";
                        } elseif ($adminrol == $radreg) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } elseif ($adminrol == $radcom) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } else {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                        }


                        $qtabuslead = $dbc->query($tabuslead);

                        foreach ($qtabuslead as $opciones) { ?>

                            <option value="<?php echo $opciones['user']; ?>"><?php echo $opciones['nombre']; ?></option>

                        <?php

                        }
                        ?>

                    </select>

                    <div for="obs" class="label">Observaciones</div>
                    <textarea id="obs" name="obs" class="textarea" spellcheck="false" placeholder="<?php echo $obs; ?>">

                            </textarea>
                    <input hidden type="text" id="nombre" name="idupd" class="input" value="<?php echo $idupd; ?>">

                    <input type="submit" value="GUARDAR" id="GUARDAR" name="updateprosp">


                </form>

            <?php

            } else {

            ?>

                <div class="type_container">
                    <form method="POST" action="prospect_emp.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input type="submit" value="EMPRESAS" class="botprosp1a">

                    </form>

                    <form method="POST" action="prospect_px.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input type="submit" value="PACIENTES" class="botprosp2a">

                    </form>

                </div>


                <form class="tabcpo" method="POST" action="save_emp.php" autocomplete="off" onkeydown="return event.key != 'Enter';">




                    <div for="categoria" class="label">Región</div>

                    <select id="region" name="region" class="select">
                        <option value="" selected>...</option>
                        <option value="JAL">JALISCO</option>
                        <option value="PUE">PUEBLA</option>

                    </select>

                    <div for="categoria" class="label">Unidad</div>



                    <select id="region" name="unidad" class="select" required>

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

                    <div for="categoria" class="label">Categoria</div>

                    <select id="categoria" name="categoria" class="select" required>
                        <option value="" selected>...</option>
                        <option value="PACIENTE">PACIENTE</option>
                        <option value="ORGANIZACION PRIVADA">ORGANIZACION PRIVADA</option>
                        <option value="ORGANIZACION PUBLICA">ORGANIZACION PUBLICA</option>
                        <option value="NUCLEO MEDICO">NUCLEO MEDICO</option>
                        <option value="ADMINISTRADORA DE SERVICIOS">ADMINISTRADORA DE SERVICIOS</option>
                        <option value="ASEGURADORA">ASEGURADORA</option>
                        <option value="MEDICOS PRIVADOS">MEDICOS PRIVADOS</option>
                        <option value="SOCIOS">SOCIOS</option>
                    </select>

                    <div for="organizacion" class="label">Nombre de la Empresa</div>
                    <input type="text" id="organizacion" name="organizacion" class="input" required>

                    <div for="organizacion" class="label">Acrónimo de la Empresa</div>
                    <input type="text" id="acron" name="acron" class="input" placeholder="nombre corto..." required>


                    <div for="especialidad" class="label">Especialidad</div>

                    <select id="especialidad" name="especialidad" class="select" required>
                        <option value="NO APLICA">NO APLICA</option>
                        <option value="CIRUGIA GENERAL">CIRUGIA GENERAL</option>
                        <option value="ORTOPEDIA Y TRAUMATOLOGIA">ORTOPEDIA Y TRAUMATOLOGIA</option>
                        <option value="NEUROCIRUGIA">NEUROCIRUGIA</option>
                        <option value="OTORRINOLARINGOLOGIA">OTORRINOLARINGOLOGIA</option>
                        <option value="GINECOLOGIA Y OBSTETRICIA">GINECOLOGIA Y OBSTETRICIA</option>
                        <option value="CIRUGIA BARIATRICA">CIRUGIA BARIATRICA</option>
                        <option value="CIRUGIA PEDIATRIA">CIRUGIA PEDIATRIA</option>
                        <option value="CIRUGIA ONCOLOGICA">CIRUGIA ONCOLOGICA</option>
                        <option value="CIRUGIA PLASTICA">CIRUGIA PLASTICA</option>
                        <option value="ODONTOLOGIA">ODONTOLOGIA</option>
                        <option value="OFTALMOLOGIA">OFTALMOLOGIA</option>
                        <option value="OTROS">OTROS</option>

                    </select>

                    <div for="telefono" class="label">Teléfono de la Empresa</div>
                    <input type="text" id="telefono" name="telefono" class="input">

                    <div for="NOM" class="label">Nombre de Contacto</div>
                    <input type="text" id="organizacion" name="nombreco" class="input" required>

                    <div for="whats" class="label">Teléfono de Contacto</div>
                    <input type="text" id="whats" name="whats" class="input" required>

                    <div for="email" class="label">Correo Electrónico</div>
                    <input type="text" id="email" name="email" class="input">


                    <div for="fuente" class="label">Fuente de Contacto</div required>
                    <select id="fuente" name="fuente" class="select">
                        <option value="" selected>...</option>
                        <option value="REDES">REDES SOCIALES</option>
                        <option value="LLAMADA">LLAMADA</option>
                        <option value="RECEPCION">RECEPCION</option>
                        <option value="WHATSAPP">WHATSAPP</option>
                        <option value="CONSULTORIO">VISITA A CONSULTORIO</option>
                        <option value="ORGANIZACION">VISITA A EMPRESA</option>
                        <option value="OTRA">OTRA</option>
                    </select>


                    <div for="finterna" class="label">Contacto Hospital</div>
                    <select id="finterna" name="finterna" class="select" required>
                        <option value="" selected>...</option>
                        <?php

                        if ($adminrol == $radmin) {
                            $tabuslead = "SELECT * FROM $users_leadlead";
                        } elseif ($adminrol == $radreg) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } elseif ($adminrol == $radcom) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } else {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                        }


                        $qtabuslead = $dbc->query($tabuslead);

                        foreach ($qtabuslead as $opciones) { ?>

                            <option value="<?php echo $opciones['user']; ?>"><?php echo $opciones['nombre']; ?></option>

                        <?php

                        }
                        ?>
                        <option value="AYR">ADMISION Y RELACIONES PUBLICAS</option>
                    </select>

                    <div for="useresp" class="label">Usuario Responsable</div>
                    <select id="useresp" name="useresp" class="select" required>
                        <option value="" selected>...</option>
                        <?php

                        if ($adminrol == $radmin) {
                            $tabuslead = "SELECT * FROM $users_leadlead";
                        } elseif ($adminrol == $radreg) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } elseif ($adminrol == $radcom) {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                        } else {
                            $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                        }


                        $qtabuslead = $dbc->query($tabuslead);

                        foreach ($qtabuslead as $opciones) { ?>

                            <option value="<?php echo $opciones['user']; ?>"><?php echo $opciones['nombre']; ?></option>

                        <?php

                        }
                        ?>
                    </select>

                    <div for="obs" class="label">Observaciones</div>
                    <textarea id="obs" name="obs" class="textarea" spellcheck="false">

                            </textarea>

                    <input type="submit" value="GUARDAR" id="GUARDAR" name="savenuevoprosp">


                </form>

            <?php

            }

            ?>



        </section>

        <section id="section2" class="sectionmod">

            <input type="text" placeholder="BUSCAR..." class="namesect" id="Buscar">
            <div class="namesect" id="namesect3b">PROSPECTOS</div>

            <div id="backtable">


                <div id="backtab">


                    <table class="table">

                        <tr class="title">
                            <td>Categoría</td>
                            <td>Organización</td>
                            <td>Nombre de Contacto</td>
                            <td>Teléfono Contacto</td>
                            <td>Celular</td>
                            <td>Valor</td>
                            <td>Estatus</td>
                            <td>Asesor</td>
                            <td>Acciones</td>
                        </tr>

                        <?php

                        if ($adminrol == $radmin) {
                            $bdpros = "SELECT * FROM $crm_prosElead ";
                            $qbdpros = $dbc->query($bdpros);
                        } elseif ($adminrol == $radger) {
                            $bdpros = "SELECT * FROM $crm_prosElead WHERE region LIKE '%$userAcroregion%' ";
                            $qbdpros = $dbc->query($bdpros);
                        } else {
                            $bdpros = "SELECT * FROM $crm_prosElead WHERE useresp LIKE '%$userLog%' ";
                            $qbdpros = $dbc->query($bdpros);
                        }


                        while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                            $Pid = $filpro['id'];
                            $Pcategoria = $filpro['categoria'];


                            $Pnombre = $filpro['nombreco'];
                            $PnombreCon = $filpro['nombrecontacto'];
                            $Ptel1 = $filpro['tel1'];
                            $Ptel2 = $filpro['tel2'];
                            $Ptipomo = $filpro['tipomo'];

                            $valor = $filpro['valor'];
                            $Pvalor = $Ptipomo . ' ' . '$' . number_format($valor, 2);



                            $Petapa = $filpro['etapa'];

                            if ($Petapa == '1') {
                                $backcol = 'etpacolor1';
                            } elseif ($Petapa == '2') {
                                $backcol = 'etpacolor2';
                            } elseif ($Petapa == '3') {
                                $backcol = 'etpacolor3';
                            } elseif ($Petapa == '4') {
                                $backcol = 'etpacolor4';
                            } elseif ($Petapa == '0') {
                                $backcol = '';
                            }


                            $Puseresp = $filpro['useresp'];

                        ?>
                            <tr class="fil">

                                <td class="center"><?php echo $Pcategoria; ?></td>

                                <td class="center"><?php echo $Pnombre; ?></td>
                                <td class="center"><?php echo $PnombreCon; ?></td>
                                <td class="center"><?php echo $Ptel1; ?></td>
                                <td class="center"><?php echo $Ptel2; ?></td>
                                <td class="center"><?php echo $Pvalor; ?></td>
                                <td class="center <?php echo $backcol; ?>"></td>
                                <td class="center"><?php echo $Puseresp; ?></td>
                                <td class="center">

                                    <form method="POST" action="prospect_emp.php" autocomplete="off" onkeydown="return event.key != 'Enter';">



                                        <input hidden type="text" value="<?php echo $Pid; ?>" name="idpros"> <!--AGREGAR DATOS PHP--->

                                        <input type="submit" value="EDITAR" id="editar" name="modemp">
                                    </form>


                                </td>
                            </tr>
                        <?php

                        }


                        ?>


                    </table>

                </div>

            </div>

        </section>



        <div id="blockMod"></div>


    </modseg>



</body>

</html>