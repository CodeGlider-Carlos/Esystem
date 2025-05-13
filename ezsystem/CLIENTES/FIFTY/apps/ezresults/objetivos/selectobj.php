<?php
require_once '../../../varSQL/dbmysql.php';
session_start();
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];


/////VALIDACION USUARIO
$valyUser = "SELECT * FROM $sresual WHERE usuario LIKE '%$userLog%' ";
$qvalyUser = $dbo->query($valyUser);
while ($fila= $qvalyUser->fetch(PDO::FETCH_ASSOC)) {

    $unidadLy = $fila['unidad'];
    $acronuLy = $fila['acronu'];
    $tupouserly = $fila['tipouser'];
}
//echo $userLog;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>selectObj</title>
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/selectOBJ.css">

    <!---------------------  CONTROLADORES JS----------------------->
    <script type="text/javascript" src="js/cuad.js"></script>
</head>
<body>



    <form method="POST" action="" autocomplete="off">

        <section id="fondoform">
        
            <input type="text" id="filtros" value="TABLERO DE OBJETIVOS" readonly >

            
            <select id="year" name="year" required> 
                <option value="" selected >ejercicio...</option>
                <?php

                    $tabejer = "SELECT * FROM $tabyear";
                    $qtabejer = $dbo->query($tabejer);

                    foreach ( $qtabejer as $opciones){ ?>

                    <option value="<?php echo $opciones['num'];?>"><?php echo $opciones['completo'];?></option>

                        <?php
                
                    }
                ?>
            </select>

            <select name="periodo" id="periodo" >
                <option value="" selected class="optionSELECTED">x periodo</option>
                    <option value='01'>ENERO</option>
                    <option value='02'>FEBRERO</option>
                    <option value='03'>MARZO</option>
                    <option value='04'>ABRIL</option>
                    <option value='05'>MAYO</option>
                    <option value='06'>JUNIO</option>
                    <option value='07'>JULIO</option>
                    <option value='08'>AGOSTO</option>
                    <option value='09'>SEPTIEMBRE</option>
                    <option value='10'>OCTUBRE</option>
                    <option value='11'>NOVIEMBRE</option>
                    <option value='12'>DICIEMBRE</option>

            </select>

            <select id="region" name="region" required> 

                <option value="" selected >región...</option>
                <?php

                    if($adminrol == $radmin OR $adminrol == $raddg){
                        $tabunid = "SELECT * FROM $clirisk";
                    }elseif($adminrol == $radreg){
                        $tabunid = "SELECT * FROM $clirisk WHERE acroregion = '$acronuLy' ";
                    }else{
                        $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$acronuLy' ";
                    }

                  
                    $qtabunid = $dbo->query($tabunid);

                    foreach ( $qtabunid as $opciones){ ?>

                    <option value="<?php echo $opciones['acroregion'];?>"><?php echo $opciones['region'];?></option>

                        <?php
                
                    }
                ?>
            </select>

            <select id="cliente" name="clientesu" required> 
                <option value="" selected >unidad...</option>
                <?php

                    if($adminrol == $radmin OR $adminrol == $raddg){
                        $tabunid = "SELECT * FROM $clirisk";
                    }elseif($adminrol == $radreg){
                        $tabunid = "SELECT * FROM $clirisk WHERE acroregion = '$acronuLy' ";
                    }else{
                        $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$acronuLy' ";
                    }

                  
                    $qtabunid = $dbo->query($tabunid);

                    foreach ( $qtabunid as $opciones){ ?>

                    <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                        <?php
                
                    }
                ?>
                   <option value=""  >NA</option>
            </select>

          
            <select id="servdepcom" name="dueno" required>

                <option value="" selected >dueño de objetivo...</option>

                <?php

                    if($adminrol == $radmin OR $adminrol == $raddg){

                        $userstabla = "SELECT * FROM $gedir WHERE tipouser = 'regional' OR tipouser = 'fifty'";
                        $pusersselect = $dbo->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['clave'].'';?>"><?php echo $opciones['nombre'];?></option>

                            <?php
            
                        }
                    }elseif($adminrol == $radreg){
                        $userstabla = "SELECT * FROM $gedir WHERE region = '$unidadLy' AND tipouser = 'regional' ";
                        $pusersselect = $dbo->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                            <?php
            
                        }

                    }
                    
                ?> 


            </select>

            <select name="usuario" require>

                <option value="" selected >usuario...</option>
               
                <?php

                    if($adminrol == $radmin){

                        $userstabla = "SELECT * FROM $gedir WHERE tipouser = 'regional' OR tipouser = 'fifty'";
                        $pusersselect = $dbo->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['tipouser'].'';?>"><?php echo $opciones['clave'];?></option>

                            <?php
            
                        }
                    }elseif($adminrol == $radreg){
                        $userstabla = "SELECT * FROM $gedir WHERE region = '$unidadLy' AND tipouser = 'regional'";
                        $pusersselect = $dbo->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['tipouser'];?>"><?php echo $opciones['clave'];?></option>

                            <?php
            
                        }

                    }
                    
                ?> 

            </select>

            <select name="alobj" require>
                <option value="">Alcance de Objetivos...</option>
                <option value="<?php echo $tabojb_dg;?>">CORPORATIVO</option>
                <option value="<?php echo $tabojb_reg;?>">REGIONAL</option>
                <option value="<?php echo $tabojb_unid;?>">UNIDAD</option>
            </select>
            
            <input type="submit" id="buscarrisk" name="buscarrisk" value="BUSCAR" >
            <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
            <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
        </section>

    </form>


</body>
</html>