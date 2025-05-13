<?php
require_once 'varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location:index.php");
endif;
$adminrol=$_SESSION['rol'];

$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];

$adminrol=$_SESSION['rol'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>deodi</title>
    
    <link rel="icon" type="favicon/x-icon" href="img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/simulad.css">
 

</head>

<body>
  
    <form id="fondoform3" method="POST" action="eliminarPaq.php">

        <select id="paquete" name="paquete" required> 
            <option value="" selected >Paquete...</option>
            <?php

                $tabejer = "SELECT * FROM $cat_paq WHERE activo = 'SI' ";
                $qtabejer = $dbo->query($tabejer);

                foreach ( $qtabejer as $opciones){ ?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['empresa'].'/'.$opciones['procedimiento'];?></option>

                    <?php
                
                    }
                ?>
        </select>

        <select id="accion" name="accion" required> 

            <option value="" selected >....</option>
            <option value="eliminar" >ELIMINAR</option>


        </select>


        <input type="submit" id="buscarrisk" name="ELIMINAR" value="ELIMINAR" >
        <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
        <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
    </form>

</body>

</html>