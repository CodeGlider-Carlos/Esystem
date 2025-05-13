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
    <title>sy_semafcal</title>

    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/selectsema.css">
    <!---------------------  CONTROLADORES JS----------------------->
    <script type="text/javascript" src="js/selectsilidd.js"></script>

</head>
<body>

  
    <section  >

        <section id="fondoformse">

            <div id="form1" >
                <iframe src="interval.php" class="iframe">
                </iframe>
            </div>
            <div id="form2" >
                <iframe src="popfinita.php" class="iframe">
                </iframe>
            </div>
            <div id="form3" >
                <iframe src="popinfinita.php" class="iframe">
                </iframe>
            </div>
            
            <section id="movslidse">

                <div id="botmov1" class="botmov"><div id="slidTit1" class="tileslid">INTERVALOS</div></div>
                <div id="botmov2" class="botmov"><div id="slidTit2" class="tileslid">MUESTRA P.FINITA</div></div>
                <div id="botmov3" class="botmov"><div id="slidTit3" class="tileslid">MUESTRA P.INFINITA</div></div>

            </section>
        </section>
    
    </section>



</body>
</html>