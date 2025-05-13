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

$paquete = $_POST['paquete'];
$promo = $_POST['promo'];
$descuento = $_POST['descuento'];
$comisionSo = $_POST['comisionSo'];
$unidad = $_POST['unidad'];

$aumento = $_POST['aumento'];
$ventaok = $_POST['ventaok'];
$precioIVA = $_POST['precioIVA'];
$precioTOT = $_POST['precioTOT'];

$namepaq = "SELECT * FROM $cat_paq WHERE id = '$paquete'  ";
$qnamepaq = $dbo->query($namepaq);                    


while ($fila = $qnamepaq->fetch(PDO::FETCH_ASSOC)) {

    $nombrePa = $fila['procedimiento'];

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>deodi</title>
    
    <link rel="icon" type="favicon/x-icon" href="img/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/reportes.css">
 

</head>

<body id="bodyprint">

    <section id="verCotizacion">

        <div id="cabecera">
            <img id="logseica" src="img/MARCA A COLOR.png">


            <section id="backprint">


                <input type="image" src="img/printOK2.png" id="printIcon" onclick="imprimir();">

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
                        <?php

                                if($adminrol == 'SS'){

                                    ?>
                                        <th class="colcotz2">PRECIO VENTA</th>
                                    <?php

                                }

                        ?>

                    </tr>

                    <tr>
                        <td colspan="5" class="nametipo">HOSPITALIZACION</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS

                                if($unidad == 'TM2'){
                                    $valydpaq = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%HOSPITALIZACION%' AND activo = 'SI' ";
                                    $qvalydpaq = $dbo->query($valydpaq);   
                                }else{
                                    $valydpaq = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%HABITACION%' AND activo = 'SI' ";
                                    $qvalydpaq = $dbo->query($valydpaq);   
                                }
                                             


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

                                                <?php

                                                    if($adminrol == 'SS'){

                                                        ?>
                                                            <td class="center"><?php echo $precioventa;?></td>
                                                        <?php

                                                    }

                                                ?>
                                        </tr>

                                    <?php

                                

                                
                                    
                                }

                        
                            
                    ?>

                    <tr>
                        <td colspan="5" class="nametipo">ATENCION QUIRURGICA</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq2 = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%ATENCION QUIRURGICA%' AND activo = 'SI' ";
                                $qvalydpaq2 = $dbo->query($valydpaq2);                    


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

                                        
                                        <?php

                                            if($adminrol == 'SS'){

                                                ?>
                                                    <td class="center"><?php echo $precioventa2;?></td>
                                                <?php

                                            }

                                        ?>
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        

                    ?>

                    <tr>
                        <td colspan="5" class="nametipo">INSUMOS</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq3 = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%INSUMOS%' AND activo = 'SI' ";
                                $qvalydpaq3 = $dbo->query($valydpaq3);                    


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

                                        <?php

                                            if($adminrol == 'SS'){

                                                ?>
                                                    <td class="center"><?php echo $precioventa3;?></td>
                                                <?php

                                            }

                                            ?>
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

                        if($adminrol == 'ADMIN'){

                            ?>
                                <th class="colcotz2">PRECIO VENTA</th>
                            <?php

                        }

                        ?>
                    </tr>

                 



                    <tr>
                        <td colspan="5" class="nametipo">MEDICAMENTOS</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq4 = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%MEDICAMENTOS%' AND activo = 'SI' ";
                                $qvalydpaq4 = $dbo->query($valydpaq4);                    


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

                                        <?php

                                            if($adminrol == 'SS'){

                                                ?>
                                                    <td class="center"><?php echo $precioventa4;?></td>
                                                <?php

                                            }

                                        ?>
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        
                            
                    ?>




            </table>
            

            <div id="analisisCOTI">
                    
                <?php
                    ///PRECIO SIN FACTOR DE UTILIDAD
                    $preciosinfactor = current($dbo->query("SELECT SUM(preciosinfactor) FROM $cat_paqBA WHERE idpaq = '$paquete' AND activo = 'SI'  ")->fetch());
                    ////PRECIO CON FACTOR DE UTILIDAD
                    $precioventa = current($dbo->query("SELECT SUM(precioventa) FROM $cat_paqBA WHERE idpaq = '$paquete' AND activo = 'SI'  ")->fetch());
                    
                    

                    $precioSINFAC = '$'.number_format($preciosinfactor,2);
                    $precioVENT = '$'.number_format($precioventa,2);
                
                        
                                                
                    //////VALIDACIONES PRECIOS DE PROMOCIONES

                    if(empty($promo)){
                        $precioPROM = '$0.00';
                        $precioPROMO = 0;  
                        $mnamepro = 'SIN PROMOCION';
                    }else{
                    


                     
                        $preciopr = "SELECT * FROM $tabPre WHERE idsap = '$promo'  ";
                        $qpreciopr = $dbo->query($preciopr);                    


                        while ($fila = $qpreciopr->fetch(PDO::FETCH_ASSOC)) {

                            $precioPROMO = $fila['precioventa'];  

                        }


                        $precioPROM = '$'.number_format($precioPROMO,2);

                        $valyprom = "SELECT * FROM $cat_prom WHERE codsap = '$promo'  ";
                        $qvalyprom = $dbo->query($valyprom);                    
                        
                        
                        while ($fila = $qvalyprom->fetch(PDO::FETCH_ASSOC)) {
                        
                            $nombrePROM = $fila['nombre'];  
                        
                        }

                        
                        $mnamepro =  $nombrePROM;
                    

                    }
            
                    //////VALIDACION PORCENTAJE DE DESCUENTO


                    if(empty($descuento)){
                        $totdesc = 0;
                        $descuen = '$0.00';
                        $textdesc = '0.00%';
                    }else{

                        $valydesc = "SELECT * FROM $cat_prom WHERE id = '$descuento'  ";
                        $qvalydesc = $dbo->query($valydesc);                    
                        
                        
                        while ($fila = $qvalydesc->fetch(PDO::FETCH_ASSOC)) {
                        
                            $porce = $fila['porce'];  
                        
                        }
                        /////descuento en moneda
                        $totdesc =  $precioventa*$descuento;
                        $descuen = '$'.number_format($totdesc,2);
                        $textdesc = number_format(($descuento*100),0) .'%';
                    }


                    //////VALIDACION PORCENTAJE DE COMISION DE SOCIOS


                    if(empty($comisionSo)){
                        $comSO = 0;
                        $comSOmo = '$0.00';
                        $comSOtxt = '0.00%';
                    }else{

                    
                        /////descuento en moneda
                        $comSO =  $precioventa*$comisionSo;
                        $comSOmo = '$'.number_format($comSO,2);
                        $comSOtxt = number_format(($comisionSo*100),0) .'%';
                    }

                    //////VALIDACION PORCENTAJE DE COMISION A VENDEDORES U OTROS


                    if(empty($comisionOT)){
                        $comOT = 0;
                        $comOTmo = '$0.00';
                        $comOTtxt = '0.00%';
                    }else{

                    
                        /////descuento en moneda
                        $comOT =  $precioventa*$comisionOT;
                        $comOTmo = '$'.number_format($comOT,2);
                        $comOTtxt = number_format(($comisionOT*100),0) .'%';
                    }


                    /////SUB TOTAL (ANTES DE IVA)
                    $precioPROMOdesC= $precioventa-$precioPROMO-$totdesc-$comSO-$comOT;
                  
                   

                   $antesdeiva = $precioPROMOdesC ;
                    $precioAntesdeIva= '$'.number_format($antesdeiva,2);


                 
                    $precioTOT = $_POST['precioTOT']

                ?>

                <table id="tablecotiz2">


                    <tr>
                        <th></th>
                        <th></th>
                    </tr>

            
                    <tr>
                        <td class="center">Subtotal</td>
                        <td class="center"><?php echo $ventaok;?></td>
                    </tr>
                    
                    
                    <tr>
                        <td class="center">IVA</td>
                        <td class="center"><?php echo $precioIVA;?></td>
                    </tr>
                    <tr>
                        <td class="center">Total</td>
                        <td class="center"><?php echo $precioTOT;?></td>
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
                Paquete Diciembre 2025.

            
            </div>

        <div>

        <div class="numhoja">HOJA 2/2</div>

    </section>

</body>

</html>