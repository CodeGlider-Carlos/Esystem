<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$tipouser=$_SESSION['tipouser'];


$ididpaq = $_POST['paquete'];

$pf = $_POST['pf'];
$precioSINFAC = '$'.number_format($pf,2);

$iva2 = $_POST['iva2'];
$precioIVA2 = '$'.number_format($iva2,2);


$TOTALTOT2 = $_POST['TOTALTOT2'];
$precioTOT2 = '$'.number_format($TOTALTOT2,2);



$namepaq = "SELECT * FROM $cat_coti_med WHERE id = '$ididpaq'  ";
$qnamepaq = $dbcot->query($namepaq);                    


while ($fila = $qnamepaq->fetch(PDO::FETCH_ASSOC)) {

    $idpaqmed = $fila['id'];
    $nombrePa = $fila['procedimiento'];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead+</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/reportes.css">
 

</head>

<body id="bodyprint">

    <section id="verCotizacion">

        <div id="cabecera">
            <img id="logseica" src="../../../../img/logos/tuLogo.png">


            <section id="backprint">


                <input type="image" src="../../../../img/ICONOS/print1.svg" id="printIcon" onclick="imprimir();">

                <script>

                    function imprimir(){

                        var contenedor = document.getElementById('backprint')
                        contenedor.style.display = 'none';
                        window.print ();
                        contenedor.style.display = 'block';
                    }

                </script>

            </section>
        </div>

        <div class="titleSection3"><?php echo $nombrePa;?></div>

        <div id="backCotiz">



            <table id="tablecotiz">

                    <tr>
                        <th class="colcotz1">CANTIDAD</th>
                        <th class="colcotz2">ARTICULO</th>
                    
                    </tr>

                    <tr>
                        <td colspan="5" class="nametipo">HABITACION</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq = "SELECT * FROM $cat_paquetes_med WHERE idpaq = '$idpaqmed' AND tipo LIKE '%HABITACION%' AND activo = '1' ";
                                $qvalydpaq = $db_leadplus->query($valydpaq);                    


                                while ($fila = $qvalydpaq->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidad = $fila['cantidad'];  
                                    $idsap = $fila['idsap']; 
                                    $artiser = $fila['artiser'];
                                    $costo = $fila['costo'];  
                                    $costoCO ='$'.number_format($costo,2);
                                    $factor = $fila['factor']; 
                                    $precioventaP = $fila['precioventa'];
                                    $precioventa ='$'.number_format($precioventaP,2);

                                    $COSTOsuM =  $cantidad*$costo* $factor;
                                    $COSTOTOhb ='$'.number_format($COSTOsuM,2);

                                    ?>

                                        <tr>
                                            <td class="center"><?php echo $cantidad;?></td>
                                            <td><?php echo $artiser;?></td>

                                              
                                        </tr>

                                    <?php

                                

                                
                                    
                                }

                        
                            
                    ?>

                    <tr>
                        <td colspan="5" class="nametipo">ATENCION QUIRURGICA</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq2 = "SELECT * FROM $cat_paquetes_med WHERE idpaq = '$idpaqmed' AND tipo LIKE '%ATENCION QUIRURGICA%' AND activo = '1' ";
                                $qvalydpaq2 = $dbcot->query($valydpaq2);                    


                                while ($fila = $qvalydpaq2->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidad2 = $fila['cantidad'];  
                                    $idsap2 = $fila['idsap']; 
                                    $artiser2 = $fila['artiser'];

                                    $costo2 = $fila['costo'];  
                                    $costo2CO ='$'.number_format($costo2,2);
                                    $factor2 = $fila['factor']; 
                                    $precioventa2P = $fila['precioventa'];
                                    $precioventa2 ='$'.number_format($precioventa2P,2);
                                    $COSTOsuM2 =  $cantidad2*$costo2* $factor2;

                                    $COSTOTOQx ='$'.number_format($COSTOsuM2,2);


                                ?>

                                    <tr>
                                        <td class="center"><?php echo $cantidad2;?></td>
                                        <td><?php echo $artiser2;?></td>

                                        
                                        
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        

                    ?>

                    <tr>
                        <td colspan="5" class="nametipo">INSUMOS</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq3 = "SELECT * FROM $cat_paquetes_med WHERE idpaq = '$idpaqmed' AND tipo LIKE '%INSUMOS%' AND activo = '1' ";
                                $qvalydpaq3 = $dbcot->query($valydpaq3);                    


                                while ($fila = $qvalydpaq3->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidad3 = $fila['cantidad'];  
                                    $idsap3 = $fila['idsap']; 
                                    $artiser3 = $fila['artiser'];
                                    $costo3 = $fila['costo'];  
                                    $costo3CO ='$'.number_format($costo3,2);
                                    $factor3 = $fila['factor']; 
                                    $precioventa3P = $fila['precioventa'];
                                    $precioventa3 ='$'.number_format($precioventa3P,2);

                                    $COSTOsuM3 =  $cantidad3*$costo3* $factor3;
                            
                                    $COSTOTOins ='$'.number_format($COSTOsuM3,2);

                                ?>

                                    <tr>
                                        <td class="center"><?php echo $cantidad3;?></td>
                                        <td><?php echo $artiser3;?></td>

                                      
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        

                    ?>




              



            </table>

            <div class="numhoja">HOJA 1/2</div>

        </div>

     

    </section>

    <section id="verCotizacion2">

        <div id="backCotiz2">

        
            <table id="tablecotiz">

                    <tr>
                        <th class="colcotz1">CANTIDAD</th>
                        <th class="colcotz2">ARTICULO</th>
                        <?php


                        ?>
                    </tr>

                 



                    <tr>
                        <td colspan="5" class="nametipo">MEDICAMENTOS</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq4 = "SELECT * FROM $cat_paquetes_med WHERE idpaq = '$idpaqmed' AND tipo LIKE '%MEDICAMENTOS%' AND activo = '1' ";
                                $qvalydpaq4 = $dbcot->query($valydpaq4);                    


                                while ($fila = $qvalydpaq4->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidad4 = $fila['cantidad'];  
                                    $idsap4 = $fila['idsap']; 
                                    $artiser4 = $fila['artiser'];

                                    $costo4 = $fila['costo']; 
                                    $costo4CO ='$'.number_format($costo4,2); 
                                    $factor4 = $fila['factor']; 
                                    $precioventa4P = $fila['precioventa'];
                                    $precioventa4 ='$'.number_format($precioventa4P,2);


                                    $COSTOsuM4 =  $cantidad4*$costo4* $factor4;
                                    $COSTOTOmed ='$'.number_format($COSTOsuM4,2);

                                ?>

                                    <tr>
                                        <td class="center"><?php echo $cantidad4;?></td>
                                        <td><?php echo $artiser4;?></td>

                                      
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        
                            
                    ?>




            </table>
            

            <div id="analisisCOTI">
                    
            

                <table id="tablecotiz2">


                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                 
            
                    <tr>
                        <td class="center">Subtotal</td>
                        <td class="center"><?php echo $precioSINFAC;?></td>
                    </tr>
                    
                    
                    <tr>
                        <td class="center">IVA</td>
                        <td class="center"><?php echo $precioIVA2;?></td>
                    </tr>
                    <tr>
                        <td class="center">Total</td>
                        <td class="center"><?php echo $precioTOT2;?></td>
                    </tr>
                
                    
                </table>

            </div>

            <div id="leyenda">
                    
                NO INCLUYE: <br> <br>

                Cualquier servicio o producto no especificado en el paquete, tales como estudios de imagenología o laboratorio,
                materiales de curación, ambulancia, complicaciones, cirugías alternas, honorarios médicos, honorarios de anestesiología, tiempo de la intervención quirúrgica u hospitalización mayor al ofrecido.
             

                Le sugerimos que antes del procedimiento revise el contenido del paquete. 
              

                En caso de incurrir en gastos extras, éstos se cobrarán por separado del paquete, de acuerdo a la lista de precios vigente. 
                
                No se realizarán reembolsos de materiales, medicamentos o servicios no utilizados del paquete.
                <br> <br>
                Nota: 
                <br> <br>
                Este paquete puede estar sujeto a cambios sin previo aviso.
                <br> <br>
                Vigencia del 
                Paquete Diciembre 2024.

            
            </div>

        <div>

        <div class="numhoja">HOJA 2/2</div>

    </section>

</body>

</html>