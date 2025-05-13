<?php
require_once 'varSQL/dbmysql.php';

$adminrol=$_SESSION['rol'];

$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];

$adminrol=$_SESSION['rol'];

$paquete = $_POST['paquete'];
$accion = $_POST['accion'];

$unidad = $_POST['lista'];
$red = $_POST['red'];

$procedimientoNAME = '';

$namePAQ = "SELECT * FROM $cat_paq WHERE id = '$paquete' ";
$QnamePAQ = $dbo->query($namePAQ);                    


while ($fila = $QnamePAQ->fetch(PDO::FETCH_ASSOC)) {

    $procedimientoNAME = $fila['procedimiento'];  
    
    
}

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

<body id="bodyModpaq">


       
        <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIconVer" onclick="location.reload();">


        <datalist id="cat_pre">
            <?php
            
            $tabprec = "SELECT * FROM $tabPre";
            $qtabprec = $dbo->query($tabprec);

            foreach ($qtabprec as $opciones){ ?>

            <option value="<?php echo $opciones['descripcion'];?>"><?php echo $opciones['descripcion'];?></option>

                <?php
            }
            $tabprec2 = "SELECT * FROM $tabPre";
            $qtabprec2 = $dbo->query($tabprec2);

            foreach ($qtabprec2 as $opciones){ ?>

            <option value="<?php echo $opciones['descripcion'];?>"><?php echo $opciones['idsap'];?></option>

                <?php
            }

            ?> 
        </datalist>

    
        <div id="backRegresarMOD" class="navbot">
            <a href="selectPaq.php"><img src="img/regresarOK3.png" id="regresar"></a>                     
        </div>

        <form  method="POST" action="savepaqExis.php" autocomplete="off">

            <div class="titleSection5">CREAR PAQUETE A PARTIR DE <?php echo $procedimientoNAME;?></div>

            <input hidden type="text" name="unidad" value="<?php echo $unidad;?>" >
            <input hidden type="text" name="region" value="<?php echo $region;?>" >
            <section id="backGuardar">

            
                <input type="image" src="img/guardarOK3.png" id="modi">
                <input type="submit" id="modisubmit" name="generar">

            </section>
            


            <div id="modpaqqq" >

                <input hidden type="text" name="procedimiento" value="<?php echo $procedimientoNAME;?>" >

                <input type="text" placeholder="Nuevo Nombre..." class="empresa2" name="empresa" required>
    

                <table id="tableMOdEx">

                    <tr>
                        <th class="col0">TIPO</th>
                    
                        <th class="col1">CANTIDAD</th>
                        <th class="col2">ARTICULO</th>
                        <th class="col3">COSTO UNITARIO</th>
                        <th class="col4">FACTOR</th>
                        <th class="colCompara2">COMPARAR</th>
                        <th class="col5">ACCION</th>
                    </tr>

            

                    <?php

                            ////////////////////////////////////////////////DATOS ARTICULOS
                            $valydpaq = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND activo = 'SI'   ORDER BY tipo ASC ";
                            $qvalydpaq = $dbo->query($valydpaq);                    


                            while ($fila = $qvalydpaq->fetch(PDO::FETCH_ASSOC)) {
                                $idly = $fila['id'];    
                                $tipo = $fila['tipo'];      
                                $cantidad = $fila['cantidad'];  
                                $idsap = $fila['idsap']; 
                                $artiser = $fila['artiser'];
                                $costoP = $fila['costo'];
                                $factorP = $fila['factor'];

                                $PRECIO = "SELECT * FROM $tabPre WHERE idsap = '$idsap'  ";
                                $QPRECIO = $dbo->query($PRECIO);                    
    
    
                                while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
    
                                    $costo = $filas['costo'];  
                                    $factor = $filas['factor']; 
                                    $descripcionY = $filas['descripcion']; 
                                    $idsapLY = $filas['idsap']; 
                                




                                    echo '
                                    
                                    
                                        <tr>
                                        
                                        

                            
                                            <td ><input type="text" name="id_paqex[]" value="' . $fila['id'] . '"></td>

                                            <td ><input type="text" name="idsap[' . $fila['id'] .  ']"  value="' . $idsap . '"></td>


                                            <td hidden> <input type="text" class="center" name="idartserv[' . $fila['id'] .  ']" value="' . $idly . '">  </td>


                                            <td>
                                                <select name="tipoC[' . $fila['id'] . ']" id=tipoMO class="center ">
                                                    <option value="'. $tipo .'" > '. $tipo . '</option>
                                                    <option value=""></option>
                                                    <option value="HABITACION" >HABITACION</option>
                                                    <option value="ATENCION QUIRURGICA" >ATENCION QUIRURGICA</option>
                                                    <option value="INSUMOS" >INSUMOS</option>
                                                    <option value="MEDICAMENTOS" >MEDICAMENTOS</option>
                                                </select>
                                            </td>


                                            <td >
                                                <input type="text" class="center" name="cantidad[' . $fila['id'] .  ']" value="' . $cantidad . '"> 
                                        
                                            </td>

                                            

                                            ';

/*
                                            if(!empty($idsapLY) ){
*/
                                                echo '

                                                    
                                                    <td >
                                                        <input type="text" class="left" name="articuloEX[' . $fila['id'] .  ']" value="' . $artiser . '"> 
                                                
                                                    </td>

                                                    <td class="center">

                                                        <input type="text" class="center coloblue" placeholder="" value="" readonly> 
                                            
                                                        <input  type="text" class="center coloblue" name="costo[' . $fila['id'] .  ']" placeholder="costo unitario" value="' . $costo . '" readonly> 
                                            
                                                    </td>

                                                    <td class="center">

                                                        <input type="text" class="center coloblue" placeholder="" value="" readonly> 
                                                
                                                        <input hidden type="text" class="center coloblue" name="factor[' . $fila['id'] . ']" placeholder="factor" value="' . $factor . '" readonly> 
                                                
                                                    </td>
                                                    
                                                ';
/*
                                            }else{
                                                echo '


                                                    <td >
                                                        <input type="text" class="center" name="articuloEX[' . $fila['id'] .  ']" value="' . $artiser . '"> 
                                                
                                                    </td>

                                                    <td class="center">

                                                        <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                        <input hidden type="text" class="center coloblue" name="costo[' . $fila['id'] .  ']" placeholder="costo unitario" value="' . $costoP . '" readonly> 
                                            
                                                    </td>

                                                    <td class="center">

                                                        <input type="text" class="center coloblue" placeholder="" value="" readonly> 
                                                
                                                        <input hidden type="text" class="center coloblue" name="factor[' . $fila['id'] . ']" placeholder="factor" value="' . $factorP . '" readonly> 
                                                
                                                    </td>
                                                
                                                ';

                                            }
*/
                                            echo '

                                            <td colspan="1">
                                                <input type="number" class="compara center"  step="0.01" name="comparar[' . $fila['id'] . ']"   spellcheck="false"  >
                                            </td>
                                                
                                            
                                            <td class="center">
                                                <select name="accion[' . $fila['id'] .  ']" >
                                                
                                                    <option value="INTEGRAR">INTEGRAR</option>
                                                    <option value="">ELIMINAR</option>
                                                
                                                </select>
                                            </td>
                                        </tr>
                                    ';


                        
                            }
                                
                                
                            }



                    ?>


                </table>

                    
            </div>
        
         
        </form>

    
</body>

</html>