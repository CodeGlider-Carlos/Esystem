<?php
session_start();
require_once 'varSQL/bd.php';
require_once 'varSQL/var.php';
if (empty($_SESSION['usuario'])) {
    session_destroy();
    header("Location: ../../../../../index.php");
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
    <title>ez system</title>

    <link rel="icon" type="favicon/x-icon" href="img/ICONOS/ezico.ico" />

    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <!---------------------  CONTROLADORES JS----------------------->

    <script type="text/javascript" src="js/index1.js"></script>
    <!---------------------  LINK DE ESTILOS GENERALES----------------------->


    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/TareasUpdate.css">
    <link rel="stylesheet" type="text/css" href="css/graficas.css">
    <link rel="stylesheet" type="text/css" href="css/idexsuite.css">
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
        <form action="../../../index.php" id="lognav7" class="bakBoton">

            <input type="image" src="img/suite/exit.svg" class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form>

    </navleft>

    <navsup id="navsup">
        <div id="backUser">
            <img id="lognav0" src="img/apps/apps/ezsystem.png" class="imagUser">
            <div id="nameuser">
                <div class="useruu"><?php echo $userNom; ?></div>
            </div>
        </div>
    </navsup>

    <div id="backallS"></div>

    <section id="backallres">

        <!-- id antiguo backTask -->
        <div id="backTaskNewDash">

            <!-- Carga componente de tareas  -->
            <div id="calendarContainer" class="calendarContainer"></div>



            <!-- <iframe src="calendarTASK/miCalendarTask.php" frameborder="0"></iframe> -->
        </div>





        <!-- <div id="backallobj">
            <img src="img/graf/gra_a.png" class="img_grafa0">
            <div class="circobj">
                <img src="img/graf/gra_c50.png" class="img_grafa">

            </div>

            <img src="img/logos/50d_icoBlanco.png" class="img_cliente">
        </div>


        <div id="backppto">
            <img src="img/graf/gra_a.png" class="img_grafa0">
            <div class="cirppto">
                <img src="img/graf/gra_c85.png" class="img_grafa">
            </div>


        </div> -->


        <!-- <div id="backBARRAS">


            <table class="taball">

                <tr>
                    <th class="colicon"></th>
                    <th class="colbarr"></th>
                </tr>

                <tr id="barralead">
                    <td>

                        <div class="backicon2">

                            <img src="img/apps/lead.png" class="imaboto2" id="leadmas2">

                        </div>

                    </td>

                    <td>
                        <div class="barraBack">
                            <div class="barraProg1 porce65">


                            </div>
                        </div>
                    </td>
                </tr>


                <tr id="barrarisk">
                    <td>

                        <div class="backicon2">
                            <img src="img/apps/risk.png" class="imaboto2">
                        </div>

                    </td>

                    <td>
                        <div class="barraBack">
                            <div class="barraProg2 porce70">


                            </div>
                        </div>
                    </td>
                </tr>


                <tr id="barraresult">
                    <td>

                        <div class="backicon2">
                            <img src="img/apps/result.png" class="imaboto2">
                        </div>

                    </td>

                    <td>
                        <div class="barraBack">
                            <div class="barraProg3 porce20">


                            </div>
                        </div>
                    </td>
                </tr>


                <tr id="barracomply">
                    <td>

                        <div class="backicon2">
                            <img src="img/apps/comply.png" class="imaboto2">
                        </div>

                    </td>

                    <td>
                        <div class="barraBack">
                            <div class="barraProg4 porce90">


                            </div>
                        </div>
                    </td>
                </tr>


                <tr id="barratask">
                    <td>

                        <div class="backicon2">
                            <img src="img/apps/task.png" class="imaboto2">
                        </div>

                    </td>

                    <td>
                        <div class="barraBack">
                            <div class="barraProg1 porce95">


                            </div>
                        </div>
                    </td>
                </tr>


                <tr id="barraassess">
                    <td>

                        <div class="backicon2">
                            <img src="img/apps/assess.png" class="imaboto2">
                        </div>

                    </td>

                    <td>
                        <div class="barraBack">
                            <div class="barraProg2 porce50">


                            </div>
                        </div>
                    </td>
                </tr>


            </table>

        </div> -->

        <!-- <div class="backCIRC" id="backCIRC1">
            <img src="img/graf/gra_b45.png" class="imagdl" id="gdl">
            <div class="circUno">
                <div class="circDos">

                </div>
            </div>
            <img src="img/apps/gdl.png" class="imagdltxt" id="gdl">
        </div>

        <div class="backCIRC" id="backCIRC2">
            <img src="img/graf/gra_b45.png" class="imagdl" id="gdl">
            <div class="circUno2">
                <div class="circDos">

                </div>
            </div>
            <img src="img/apps/qps.png" class="imagdltxt" id="gdl">
        </div>

        <div class="backCIRC" id="backCIRC3">
            <img src="img/graf/gra_b45.png" class="imagdl" id="gdl">
            <div class="circUno2">
                <div class="circDos">

                </div>
            </div>
            <img src="img/apps/fms.png" class="imagdltxt" id="gdl">
        </div>
        <div id="blockMod"></div> -->



        <div id="backBOTONES">

            <div id="backiboton">

                <form class="backiconA" action="apps/ezrisk/indexRisk.php" method="POST" autocomplete="off">

                    <img src="img/apps/risk.png" class="imaboto">
                    <input type="submit" class="inputboton" name="risk2" id="risk2">
                    <img src="img/apps/apps/ezrisk.png" class="imaname" id="text_risk">
                </form>

                <form class="backicon" action="apps/ezresults/indexResults.php" method="POST" autocomplete="off">

                    <img src="img/apps/result.png" class="imaboto">
                    <input type="submit" class="inputboton" name="results2" id="results2">
                    <img src="img/apps/apps/ezresults.png" class="imaname" id="text_results">

                </form>

                <form class="backicon" action="" method="POST" autocomplete="off">

                    <img src="img/apps/comply.png" class="imaboto">
                    <input type="submit" class="inputboton" name="comply2" id="comply2">
                    <img src="img/apps/apps/ezcomply.png" class="imaname" id="text_comply">

                </form>


                <form class="backicon" action="apps/ezleadplus/suitecrm.php" method="POST" autocomplete="off">

                    <img src="img/apps/lead.png" class="imaboto">
                    <input type="submit" class="inputboton" name="leadmas2" id="leadmas">
                    <img src="img/apps/apps/ezleadplus.png" class="imaname" id="textleadmas">
                </form>






                <form class="backicon" action="apps/eztask/indexTask.php" method="POST" autocomplete="off">

                    <img src="img/apps/task.png" class="imaboto">
                    <input type="submit" class="inputboton" name="task2" id="task2">
                    <img src="img/apps/apps/eztask.png" class="imaname" id="text_task">
                </form>



                <form class="backicon" action="apps/ezdocu/modOp.php" method="POST" autocomplete="off">

                    <img id="imgezdocument" src="img/apps/ezdocument.png" class="imaboto">
                    <input type="submit" class="inputboton" name="ezdocument" id="ezdocument">
                    <img src="img/apps/apps/document.png" class="imaname" id="text_ezdocument">
                </form>
                <form class="backicon" action="apps/ezleadlead/suitecrm.php" method="POST" autocomplete="off">

                    <img src="img/apps/lead.png" class="imaboto">
                    <input type="submit" class="inputboton" name="lead" id="ezlead">
                    <img src="img/apps/apps/ezlead.png" class="imaname" id="text_leadled">
                </form>

                <form class="backicon" action="" method="POST" autocomplete="off">

                    <img src="img/ICONOS/config.svg" class="imaboto">
                    <input type="submit" class="inputboton" name="assess2" id="assess2">
                    <img src="img/apps/apps/config.png" class="imaname" id="text_assess">

                </form>
            </div>
        </div>

    </section>




    <!-- Sript que integra las tareas -->
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'calendarTASK/miCalendarTask.php',
                type: 'GET',
                success: function(response) {
                    $('#calendarContainer').html(response);
                },
                error: function() {
                    alert('Hubo un error al cargar el calendario.');
                }
            });
        });
    </script>


</body>

</html>