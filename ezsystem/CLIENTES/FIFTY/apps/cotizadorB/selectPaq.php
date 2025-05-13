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
  
    <form id="fondoform0" method="POST" action="tipocreacion.php">




        <select id="comisionSo" name="tipocreacion" required> 
            <option value="" selected >Tipo creación...</option>
            <option value="CERO"  >DESDE CERO</option>
            <option value="EXISTE"  >A PARTIR DE PAQUETE EXISTENTE</option>
        </select>

         
        <select id="comisionSo" name="region" required> 
            <option value="" selected >Región...</option>
            
            <option value="PUE"  >PUEBLA</option>
            <option value="JAL"  >JALISCO</option>
        </select>

        <select id="comisionSo" name="lista" required> 
            <option value="" selected >Unidad...</option>
            
            <option value="TM2"  >ANGELOPOLIS</option>
            <option value="ZR"  >ZONA REAL</option>
            <option value="CMP  "  >SAN MANUEL</option>
        </select>

        <select id="comisionSo" name="red" required> 
            <option value="" selected >Red...</option>
            
            <option value="FIFTY"  >FIFTY</option>
        </select>   

        <select id="promo" name="paquete" > 
        
            <option value="" selected >Paquete Existente...</option>
            <?php

                $tabejer = "SELECT * FROM $cat_paq WHERE activo = 'SI' ";
                $qtabejer = $dbo->query($tabejer);

                foreach ( $qtabejer as $opciones){ ?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['empresa'].'/'.$opciones['procedimiento'];?></option>

                    <?php
                
                    }
                ?>
        </select>
        
        <input  hidden type="text" value="MOD" name="accion">


        <input type="submit" id="buscarrisk" name="catobj" value="COTINUAR" >
        <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
        <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
    </form>
    
</body>

</html>