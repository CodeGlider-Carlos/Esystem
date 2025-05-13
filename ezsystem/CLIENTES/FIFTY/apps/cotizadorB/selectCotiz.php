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
  
    <form id="fondoform1" method="POST" action="cotizacion.php">

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

        <select id="paquete" name="paquete" required> 
            <option value="" selected >Paquete...</option>
            <?php

                $tabejer = "SELECT * FROM $cat_paq WHERE activo = 'SI'";
                $qtabejer = $dbo->query($tabejer);

                foreach ( $qtabejer as $opciones){ ?>

                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['empresa'].'/'.$opciones['procedimiento'];?></option>

                    <?php
                
                    }
                ?>
        </select>

        <select id="promo" name="promo" > 
            <option value="" selected >Promoción...</option>

            <?php

                $tabpro = "SELECT * FROM $cat_prom WHERE tipo = '1'  ";
                $qtabpro = $dbo->query($tabpro);

                foreach ($qtabpro as $opciones){ ?>

                <option value="<?php echo $opciones['codsap']?>"><?php echo $opciones['nombre'];?></option>

                    <?php
                
                    }
            ?>

        </select>
        
        <select id="comisionOT" name="aumento" > 
            <option value="" selected >Aumento...</option>
            <option value=0.03  >3%</option>
            <option value=0.04  >4%</option>
            <option value=0.05  >5%</option>
            <option value=0.06  >6%</option>
            <option value=0.07  >7%</option>
            <option value=0.08  >8%</option>
            <option value=0.09  >9%</option>
            <option value=0.10  >10%</option>
            <option value=0.15  >15%</option>
            <option value=0.20  >20%</option>
            <option value=0.25  >25%</option>
            <option value=0.30  >30%</option>
            <option value=0.35  >35%</option>
            <option value=0.38  >38%</option>
            <option value=0.40  >40%</option>
            <option value=0.45  >45%</option>
            <option value=0.47  >47%</option>
            <option value=0.48  >48%</option>
            <option value=0.49  >49%</option>
            <option value=0.50  >50%</option>
            <option value=0.55  >55%</option>
            <option value=0.60  >60%</option>
            <option value=0.65  >65%</option>
            <option value=0.70  >70%</option>
            <option value=0.75  >75%</option>
            <option value=0.80  >80%</option>
            <option value=0.85  >85%</option>
            <option value=0.90  >90%</option>
            <option value=0.95  >95%</option>
            <option value=0.100  >100%</option>
            
        </select>
        <select id="descuento" name="descuento" > 
            <option value="" selected >Descuento...</option>
            <option value=0.03  >3%</option>
            <option value=0.04  >4%</option>
            <option value=0.05  >5%</option>
            <option value=0.06  >6%</option>
            <option value=0.07  >7%</option>
            <option value=0.08  >8%</option>
            <option value=0.09  >9%</option>
            <option value=0.10  >10%</option>
            <option value=0.15  >15%</option>
            <option value=0.16  >16%</option>
            <option value=0.17  >17%</option>
            <option value=0.18  >18%</option>
            <option value=0.20  >20%</option>
            <option value=0.25  >25%</option>
            <option value=0.30  >30%</option>
            <option value=0.35  >35%</option>
            <option value=0.38  >38%</option>
            <option value=0.40  >40%</option>
            <option value=0.45  >45%</option>
            <option value=0.46  >46%</option>
            <option value=0.47  >47%</option>
            <option value=0.48  >48%</option>
            <option value=0.49  >49%</option>
            <option value=0.50  >50%</option>
           
        </select>

        

        <select id="comisionSo" name="comisionSo" > 
            <option value="" selected >Comisión a Socio...</option>
            <option value=0.10  >10%</option>
            

        </select>

        <select id="comisionOT" name="comisionOT" > 
            <option value="" selected >Comisión a Otros...</option>
            <option value=0.03  >3%</option>
            <option value=0.04  >4%</option>
            <option value=0.05  >5%</option>
            <option value=0.06  >6%</option>
            <option value=0.07  >7%</option>
            <option value=0.08  >8%</option>
            <option value=0.09  >9%</option>
            <option value=0.10  >10%</option>
        </select>

        <input type="submit" id="buscarrisk" name="catobj" value="INTEGRAR" >
        <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
        <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
    </form>
    
</body>

</html>