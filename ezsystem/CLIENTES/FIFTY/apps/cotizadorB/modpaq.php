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

$paquete = $_POST['paquete'];
$accion = $_POST['accion'];

$unidad = $_POST['lista'];

$red = $_POST['red'];

$namepaqq = "SELECT * FROM $cat_paq WHERE id = '$paquete'  ";
$qnamepaqq = $dbo->query($namepaqq);                    


while ($fila = $qnamepaqq->fetch(PDO::FETCH_ASSOC)) {

    $namepaqq = $fila['procedimiento'];  

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
            <a href="selectPaqAct.php"><img src="img/regresarOK3.png" id="regresar"></a>                 
        </div>


        <form  method="POST" action="saveModpaq.php" autocomplete="off">

            <?php

            if($accion == 'MOD'){

                ?>
                    <div class="titleSection5">MODIFICAR PAQUETE/<?php echo $namepaqq;?></div>

                    
                    <section id="backGuardar">

                   
                        <input type="image" src="img/guardarOK3.png" id="modi">
                        <input type="submit" id="modisubmit" name="modificar">

                    </section>

                    




                    <div id="modpaqqq" >

                        <input hidden type="text" name="idpaq" value="<?php echo $paquete;?>" >

                        <table id="tableMOd">

                            <tr>
                                <th class="col0">TIPO</th>
                            
                                <th class="col1">CANTIDAD</th>
                                <th class="col2">ARTICULO</th>
                                <th class="col3">COSTO UNITARIO</th>
                                <th class="col4">FACTOR</th>
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

                                            $idsapLY = $filas['idsap']; 
                                        }




                                            echo '
                                            
                                            
                                                <tr>
                                                
                                                

                                    
                                                    <td hidden><input type="text" name="id_mod[]" value="' . $fila['id'] . '"></td>


                                                    <td hidden> <input type="text" class="center" name="idartserv[' . $fila['id'] .  ']" value="' . $idly . '">  </td>


                                                    <td ><input type="text" class="center coloblue" value="' . $tipo .  '"></td>
                                                
                                                    <td >
                                                        <input type="text" class="center" name="cantidad[' . $fila['id'] .  ']" value="' . $cantidad . '"> 
                                                
                                                    </td>

                                                    <td ><input type="text" class="left articuloM coloblue"  value="' . $artiser .  '"></td>
                                               
                                                    

                                                    ';


                                                    if(!empty($idsapLY) ){

                                                        echo '
                                                            <td class="center">

                                                                <input type="text" class="center coloblue" placeholder="" value="" readonly> 
                                                                
                                                                <input hidden type="text" class="center coloblue" name="costo[' . $fila['id'] .  ']" placeholder="costo unitario" value="' . $costo . '" readonly> 
                                                    
                                                            </td>

                                                            <td class="center">

                                                                <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                        
                                                                <input hidden type="text" class="center coloblue" name="factor[' . $fila['id'] . ']" placeholder="factor" value="' . $factor . '" readonly> 
                                                        
                                                            </td>
                                                           
                                                        ';

                                                    }else{
                                                        echo '

                                                            <td class="center">
                                                                <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                    
                                                                <input hidden type="text" class="center coloblue" name="costo[' . $fila['id'] .  ']" placeholder="costo unitario" value="' . $costoP . '" readonly> 
                                                    
                                                            </td>

                                                            <td class="center">

                                                                <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                        
                                                                <input hidden type="text" class="center coloblue" name="factor[' . $fila['id'] . ']" placeholder="factor" value="' . $factorP . '" readonly> 
                                                        
                                                            </td>
                                                       
                                                        ';

                                                    }

                                                    echo '
                                                   
                                                  
                                                    <td class="center">
                                                        <select name="accion[' . $fila['id'] .  ']" >

                                                            <option value="MODIFICAR">ACTUALIZAR</option>
                                                            <option value="NO">ELIMINAR</option>
                                                        
                                                        </select>
                                                    </td>
                                                </tr>
                                            ';


                                

                                        
                                        
                                    }



                            ?>


                        </table>

                         
                    </div>
                <?php

            }elseif($accion == 'FUERA'){

                ?>
                 
                    <div class="titleSection5">AGREGAR ARTICULOS O SERVICIOS FUERA DE CATAOLOG/<?php echo $namepaqq;?></div>

                    <section id="backGuardar">

                        <input type="image" src="img/guardarOK3.png" id="modi">
                        <input type="submit" id="modisubmit" name="fuera">
                    </section>


 
                
                    <div id="modpaqqq" >

                        <input hidden type="text" name="idpaq" value="<?php echo $paquete;?>" >
                       
                     
                        <table id="tableMOd">

                                <tr>
                                    <th class="col0">TIPO</th>
                                
                                    <th class="col1">CANTIDAD</th>
                                    <th class="col2">ARTICULO</th>
                                    <th class="col3">COSTO UNITARIO</th>
                                    <th class="col4">FACTOR</th>
                                    <th class="col5">ACCION</th>
                                </tr>

                            

                                    

                                            <?php

                                    
                                            $consCed = "SELECT * FROM $tabform  WHERE hasta10";
                                            $qconsCed = $dbo->query($consCed);

                                            while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {

                                                echo '
                                        
                                        
                                                        <tr class="fila2" id="bloqHAB"> 

                                                        <td hidden><input type="text" name="id_fuera[]" value="' . $filaCed['id'] . '"></td>


                                                            <td>
                                                                <select name="tipoC[' . $filaCed['id'] . ']" id=tipoMO>
                                                                    <option value="" selected>Tipo...</option>
                                                                    <option value="HABITACION" >HABITACION</option>
                                                                    <option value="ATENCION QUIRURGICA" >ATENCION QUIRURGICA</option>
                                                                    <option value="INSUMOS" >INSUMOS</option>
                                                                    <option value="MEDICAMENTOS" >MEDICAMENTOS</option>
                                                                </select>
                                                            </td>
                                                            <td colspan="1">
                                                                <input type="number" class="cantidad center" step="0.01" name="cantidadAg[' . $filaCed['id'] . ']"  placeholder="Cantidad" spellcheck="false"  >
                                                            </td>

                                                            <td colspan="1">
                                                                <input type="list" list="cat_pre" name="articuloAg[' . $filaCed['id'] . ']" class="articulo" placeholder="Artículos o Servicios" "> 
                                                            </td>

                                                            <td>

                                                                <input type="number" step="0.01" name="costoAg[' . $filaCed['id'] . ']" placeholder="costo unitario" id=tipoMO> 
                                                            </td>
                                                            <td>

                                                                <input type="number" step="0.01" name="factorAg[' . $filaCed['id'] . ']" placeholder="factor" id=tipoMO> 
                                                            </td>

                                                            <td>
                                                                <select name="agregar[' . $filaCed['id'] . ']" id=tipoMO>

                                                                    <option value="" selected>Agregar?</option>
                                                                    <option value="SI">SI</option>
                                                                
                                                                </select>
                                                            </td>
                                                    
                                                        
                                                        </tr>
                                                
                                                
                                                ';

                                            }


                                            ?>

                                        



                        </table>

                    </div>     
                <?php

            }elseif($accion == 'DENTRO'){

                ?>
              
                    <div class="titleSection5">AGREGAR ARTICULOS O SERVICIOS EN CATALOGO/<?php echo $namepaqq;?></div>

                    <section id="backGuardar">

                      
                        <input type="image" src="img/guardarOK3.png" id="modi">
                        <input type="submit" id="modisubmit" name="dentro">

                    </section>


           

                    <div id="modpaqqq" >
                        <input hidden type="text" name="idpaq" value="<?php echo $paquete;?>" >

                      
                        <table id="tableMOd">

                                <tr>
                                    <th class="col0">TIPO</th>
                                
                                    <th class="col1">CANTIDAD</th>
                                    <th class="col2">ARTICULO</th>
                                    <th class="col3">COSTO UNITARIO</th>
                                    <th class="col4">FACTOR</th>
                                    <th class="col5">ACCION</th>
                                </tr>

                            


                                        
                                        <?php

                                    
                                            $consCed = "SELECT * FROM $tabform  WHERE hasta20";
                                            $qconsCed = $dbo->query($consCed);

                                            while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {

                                                echo '
                                        
                                        
                                                        <tr class="fila2" id="bloqHAB"> 

                                                            <td hidden><input type="text" name="id_dentro[]" value="' . $filaCed['id'] . '"></td>


                                                            <td>
                                                                <select name="tipoC[' . $filaCed['id'] . ']" id=tipoMO>
                                                                    <option value="" selected>Tipo...</option>
                                                                    <option value="HABITACION" >HABITACION</option>
                                                                    <option value="ATENCION QUIRURGICA" >ATENCION QUIRURGICA</option>
                                                                    <option value="INSUMOS" >INSUMOS</option>
                                                                    <option value="MEDICAMENTOS" >MEDICAMENTOS</option>
                                                                </select>
                                                            </td>
                                                            <td colspan="1">
                                                                <input type="number" class="cantidad center"  step="0.01" name="cantidadAgc[' . $filaCed['id'] . ']"  placeholder="Cantidad" spellcheck="false"  >
                                                            </td>

                                                            <td colspan="1">
                                                                <input type="list" list="cat_pre" name="articuloAgc[' . $filaCed['id'] . ']" class="articulo" placeholder="Artículos o Servicios" "> 
                                                            </td>

                                                            <td>

                                                                <input type="text"  readonly id=tipoMO  class="coloblue"> 
                                                            </td>
                                                            <td>

                                                                <input type="text"  readonly id=tipoMO class="coloblue"> 
                                                            </td>

                                                            <td>
                                                                <select name="agregarc[' . $filaCed['id'] . ']" id=tipoMO>

                                                                    <option value="" selected>Agregar?</option>
                                                                    <option value="SI">SI</option>
                                                                
                                                                </select>
                                                            </td>
                                                    
                                                        
                                                        </tr>
                                                
                                                
                                                ';

                                            }



                                        ?>


                        </table>

                         
                    </div>        
                <?php

            }if($accion == 'update'){

                ?>
                    <div class="titleSection5">ACTUALIZAR PRECIOS/<?php echo $namepaqq;?></div>

                    
                    <section id="backGuardar">

                   
                        <input type="image" src="img/guardarOK3.png" id="modi">
                        <input type="submit" id="modisubmit" name="update">

                    </section>

                    




                    <div id="modpaqqq" >

                        <input hidden type="text" name="idpaq" value="<?php echo $paquete;?>" >

                        <table id="tableMOd">

                            <tr>
                                <th class="col0">TIPO</th>
                            
                                <th class="col1">CANTIDAD</th>
                                <th class="col2">ARTICULO</th>
                                <th class="col3">COSTO</th>
                                <th class="col4">FACTOR</th>
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
                                       

                                        $PRECIO = "SELECT * FROM $tabPre WHERE idsap = '$idsap' AND unidad = '$unidad' AND red ='$red' ";
                                        $QPRECIO = $dbo->query($PRECIO);                    
            
            
                                        while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
            
                                            $costo = $filas['costo'];  
                                            $factor = $filas['factor']; 
                                            $idsapLY = $filas['idsap']; 

                                        
                                        }




                                            echo '
                                            
                                            
                                                <tr>
                                                
                                                

                                    
                                                    <td hidden><input type="text" name="id_mod[]" value="' . $fila['id'] . '"></td>


                                                    <td hidden> <input type="text" class="center" name="idartserv[' . $fila['id'] .  ']" value="' . $idly . '">  </td>


                                                    <td ><input type="text" class="center coloblue" value="' . $tipo .  '"></td>
                                                
                                                    <td >
                                                        <input type="text" class="center" name="cantidad[' . $fila['id'] .  ']" value="' . $cantidad . '"> 
                                                
                                                    </td>

                                                    <td ><input type="text" class="left articuloM coloblue"  value="' . $artiser .  '"></td>
                                               
                                                    

                                                    ';


                                                    if(!empty($idsapLY) ){

                                                        echo '
                                                            <td class="center">

                                                                <input type="text" class="center coloblue" placeholder="" value="' . $costo . '" readonly> 
                                                                
                                                                <input hidden type="text" class="center coloblue" name="costo[' . $fila['id'] .  ']" placeholder="costo unitario" value="' . $costo . '" readonly> 
                                                    
                                                            </td>

                                                            <td class="center">

                                                                <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                        
                                                                <input hidden type="text" class="center coloblue" name="factor[' . $fila['id'] . ']" placeholder="factor" value="' . $factor . '" readonly> 
                                                        
                                                            </td>
                                                           
                                                        ';

                                                    }else{
                                                        echo '

                                                            <td class="center">
                                                                <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                    
                                                                <input hidden type="text" class="center coloblue" name="costo[' . $fila['id'] .  ']" placeholder="costo unitario" value="' . $costoP . '" readonly> 
                                                    
                                                            </td>

                                                            <td class="center">

                                                                <input type="text" class="center coloblue"  placeholder="" value="" readonly> 
                                                        
                                                                <input hidden type="text" class="center coloblue" name="factor[' . $fila['id'] . ']" placeholder="factor" value="' . $factorP . '" readonly> 
                                                        
                                                            </td>
                                                       
                                                        ';

                                                    }

                                                    echo '
                                                   
                                                  
                                                    <td class="center">
                                                        <select name="accion[' . $fila['id'] .  ']" >

                                                            <option value="MODIFICAR">ACTUALIZAR</option>
                                                            <option value="NO">ELIMINAR</option>
                                                        
                                                        </select>
                                                    </td>
                                                </tr>
                                            ';


                                

                                        
                                        
                                    }



                            ?>


                        </table>

                         
                    </div>
                <?php

            }


            ?>


      
            
         
        </form>

    
</body>

</html>