<?php
require_once 'varSQL/dbmysql.php';

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

echo $lista;
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
      <script type="text/javascript" src="js/cotizador1.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/simulad.css">
 

</head>

<body>


    <datalist id="cat_pre">
        <?php

    
        $tabprec = "SELECT * FROM $tabPre WHERE red = '$red' AND unidad = '$lista'  ";
        $qtabprec = $dbo->query($tabprec);

        foreach ($qtabprec as $opciones){ ?>

        <option value="<?php echo $opciones['descripcion'];?>"><?php echo $opciones['descripcion'];?></option>
        <option value="<?php echo $opciones['descripcion'];?>"><?php echo $opciones['idsap'];?></option>
            <?php
        }
        $tabprec2 = "SELECT * FROM $tabPre WHERE red = '$red' AND unidad = '$lista'   ";
        $qtabprec2 = $dbo->query($tabprec2);

        foreach ($qtabprec2 as $opciones){ ?>

        <option value="<?php echo $opciones['idsap'];?>"><?php echo $opciones['idsap'];?></option>

            <?php
        }

        ?> 
    </datalist>


       
    <datalist id="cat_prOCED">
        <?php
        
        $tabproced = "SELECT * FROM $tabproced ORDER BY procedimiento ASC ";
        $qtabproced = $dbo->query($tabproced);

        foreach ($qtabproced as $opciones){ ?>

        <option value="<?php echo $opciones['procedimiento'];?>"><?php echo $opciones['procedimiento'];?></option>

            <?php
        }
       
        ?> 
    </datalist>


    <form method="POST" action="savepaq.php" id="formCot" autocomplete="off">


    
        <div class="titleSection2">INTEGRACION DE PAQUETES</div>

        <div id="backgeneral">

            <input type="text" placeholder="Empresa o Médico..." class="empresa" name="empresa">

            <input type="list" list="cat_prOCED" placeholder="Procedimiento..." class="empresa left proced" name="procedimiento" required>
            
            

        </div>

        <input type="submit" value="INTEGRAR PAQUETE" id="generar" name="generar"> 
            <div id="backPaqRegresarCero" class="navbot">
                <a href="selectPaq.php"><img src="img/regresarOK3.png" id="regresar"></a>                 
            </div>

        <div id="backHabit">

        
            <table id="tableHabi">

                <tr >
                    <th class="GRUPOA">GRUPO</th>
                    <th class="colArticulo">PRODUCTO O SERVICIO</th>
                    <th class="colCantidad">CANTIDAD</th>
                </tr>


                <?php

                    $consCed1 = "SELECT * FROM $tabform  WHERE hasta40";
                    $qconsCed1 = $dbo->query($consCed1);

                    while ($filaCed = $qconsCed1->fetch(PDO::FETCH_ASSOC)) {




                    echo '
                    
                    
                            <tr class="fila0"> 
                    
                            
                                <td hidden><input type="text" name="id_art[]" value="' . $filaCed['id'] . '"></td>
                        
                            </tr>

                            <tr class="fila2" id="bloqHAB"> 

                                <td>
                                    <select required>
                                        <option value="" selected>Grupo</option>
                                        <option value="ATENCION QUIRURGICA">Servicios Quirúrgicos</option>
                                        <option value="HOSPITALIZACION">Servicios Hospitalarios</option>
                                        <option value="MEDICAMENTOS">Medicamentos</option>
                                        <option value="INSUMOS">Insumos</option>
                                    </select>
                                </td>

                                <td colspan="1">
                                    <input type="list" list="cat_pre" name="articuloHab[' . $filaCed['id'] . ']" class="articulo" placeholder="Artículos o Servicios" "> 
                                </td>
                                <td colspan="1">
                                    <input type="number" class="cantidad center"  step="0.01" name="cantidadHab[' . $filaCed['id'] . ']"   spellcheck="false"  >
                                </td>
                               
                            </tr>
                    
                    
                    ';
                            

                    
                    }

                ?>



                

            </table>


          
        
        </div>

      
    </form>
    <!--
    <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
                -->

</body>

</html>