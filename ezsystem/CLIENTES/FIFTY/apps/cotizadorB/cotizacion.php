<?php
require_once 'varSQL/dbmysql.php';
session_start();

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$adminrol=$_SESSION['rol'];

$paquete = $_POST['paquete'];
$promo = $_POST['promo'];
$descuento = $_POST['descuento'];
$aumento = $_POST['aumento'];


$comisionSo = $_POST['comisionSo'];
$comisionOT = $_POST['comisionOT'];

$unidad = $_POST['lista'];

$red = $_POST['red'];

$namepaq = "SELECT * FROM $cat_paq WHERE id = '$paquete'  ";
$qnamepaq = $dbo->query($namepaq);                    


while ($fila = $qnamepaq->fetch(PDO::FETCH_ASSOC)) {

    $namepaqq = $fila['empresa'];  

}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lead+</title>
    
    <link rel="icon" type="favicon/x-icon" href="img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/simulad.css">
 

</head>

<body>






    <section id="verCotizacion">

  
        <div class="titleSection3">INTEGRACION SIMULACION/<?php echo $namepaqq;?></div>

        <div id="backCotiz">

    

            <table id="tablecotiz">

                    <tr>
                        <th class="colcotz1">CANTIDAD</th>
                        <th class="colcotz2">ARTICULO/SERVICIO</th>

                        <?php

                            if($adminrol == 'COM'){
                                ?>
                               
                                    <th class="colcotz4">TOTAL</th>
                                <?php
                            
                            }else{
                                ?>
                                  <th class="colcotz3">COSTO</th>
                                  <th class="colcotz4">FACTOR</th>
                                  <th class="colcotz3">VENTA</th>
                                  <th class="colcotz4">TOTAL</th>
                            <?php

                            }

                        ?>
                      

                       <!--

                        <th class="colcotz5">VENTA</th>
                        <th class="colcotz5">PRECIO OTRO</th>
                        <th class="colcotz5">DIFERENCIA</th>
                        -->
                    </tr>

                    <tr>
                        <td colspan="7" class="seccion">HOSPITALIZACION</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS

                                if($unidad == 'TM2'){
                                    $valydpaq = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete'   AND tipo LIKE  '%HOSPITALIZACION%' AND activo = 'SI' ";
                                    $qvalydpaq = $dbo->query($valydpaq);  
                                }else{
                                    $valydpaq = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete'  AND tipo LIKE '%HABITACION%' AND activo = 'SI'  ";
                                    $qvalydpaq = $dbo->query($valydpaq);  
                                }
                                  


                                while ($fila = $qvalydpaq->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidadPq = $fila['cantidad'];  
                                    $idsapPaq = $fila['idsap']; 



                                    $costPaq = $fila['costo'];
                                    $costoPaq ='$'.number_format($costPaq,2);

                                    $factorPaq = $fila['factor'];

                                    
                                    $precioVenPaq = $costPaq*$factorPaq;
                                    $precioVentaPaq ='$'.number_format($precioVenPaq,2);

                                    $totalPaq = $cantidadPq*$precioVenPaq;
                                    $totalPaquete ='$'.number_format($totalPaq,2);






                                    $PRECIO = "SELECT * FROM $tabPre WHERE idsap = '$idsapPaq' AND unidad = '$unidad' AND red ='$red'  ";
                                    $QPRECIO = $dbo->query($PRECIO);                    
      
        
                                    while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
        
                                        $costo = $filas['costo'];  
                                        $costoCO ='$'.number_format($costo,2);

                                        $factorBB = $filas['factor']; 
                                        $precioventa = $filas['precioventa']; 
    
                                        $preciocompetencia = $fila['preciocompetencia']; 
                                        $artiser = $filas['descripcion']; 
                                        $idsapLY = $filas['idsap']; 

                                        $COSTOsuM =  $costo* $factorBB;
                                        $COSTOTOhb ='$'.number_format($COSTOsuM,2);

                                        $VENTA =  $cantidadPq*$COSTOsuM;
                                        $QVENTA ='$'.number_format($VENTA,2);

                                    }


                             
                                   
                                

                                   

                                    if(empty($preciocompetencia)){

                                      
                                        $difPorcer = 'SD';   
    
                                        $clasedif = '';
    
                                    

                                    }else{
                                        $difidif = ($precioventa*100/$preciocompetencia)-100;

                                        $difPorcer = number_format($difidif,2).'%';
    
                                        if($difidif <0){
    
                                            $clasedif = 'difAZUL';
    
                                        }elseif($difidif>0){
                                            $clasedif = 'difRED';
                                        }
                                    }

                                 

                                ?>

                                    <tr>
                                        <td class="center colorwhite"><?php echo $cantidadPq;?></td>
                                        <td class="left colorwhite"><?php echo $artiser;?></td>

                                        <?php

                                            if($adminrol == 'COM'){
                                                ?>
                                                 
                                                    
                                                    <td class="center colorwhite"><?php echo $QVENTA;?></td>
                                                <?php

                                            }else{
                                                ?>
                                                <!--
                                                    <td class="center colorwhite"><?php echo $costoCO;?></td>
                                                    <td class="center colorwhite"><?php echo $factor;?></td>
                                                    <td class="center colorwhite"><?php echo $COSTOTOhb;?></td>
                                                    <td class="center colorwhite"><?php echo $QVENTA;?></td>
                                            -->
                                                    <td class="center colorwhite"><?php echo $costoPaq;?></td>
                                                    <td class="center colorwhite"><?php echo $factorPaq;?></td>
                                                    <td class="center colorwhite"><?php echo $precioVentaPaq;?></td>


                                                    <td class="center colorwhite"><?php echo $totalPaquete;?></td>
                                                <?php

                                            }

                                            ?>

                                            <!--
                                      
                                        <td class="center colorwhite"><?php echo '$'. number_format($preciocompetencia,2) ;?></td>
                                        <td class="center colorwhite"><div class="<?php echo $clasedif;?>"><?php echo $difPorcer;?></div></td>

                                        -->
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        

                    ?>

                    <tr>
                        <td colspan="7" class="seccion">ATENCION QUIRURGICA</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq2 = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%ATENCION QUIRURGICA%' AND activo ='SI' ";
                                $qvalydpaq2 = $dbo->query($valydpaq2);                    


                                while ($fila = $qvalydpaq2->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidadPq2 = $fila['cantidad'];  
                                    $idsapPaq2 = $fila['idsap']; 



                                    $costPaq2 = $fila['costo'];
                                    $costoPaq2 ='$'.number_format($costPaq2,2);

                                    $factorPaq2 = $fila['factor'];

                                    $precioVenPaq2 = $costPaq2*$factorPaq2;
                                    $precioVentaPaq2 ='$'.number_format($precioVenPaq2,2);

                                    $totalPaq2 = $cantidadPq2*$precioVenPaq2;
                                    $totalPaquete2 ='$'.number_format($totalPaq2,2);

                                    $artiserPaq2 = $fila['artiser']; 



                                    $PRECIO = "SELECT * FROM $tabPre WHERE idsap = '$idsapPaq2' AND unidad = '$unidad' AND red ='$red'  ";
                                    $QPRECIO = $dbo->query($PRECIO);                    
      
        
                                    while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
                                         /*
                                        $costo2 = $filas['costo'];  
                                        $costo2CO ='$'.number_format($costo2,2);

                                        $factor2 = $filas['factor']; 
                                        $precioventa2 = $filas['precioventa']; 
    
                                        $preciocompetencia2 = $fila['preciocompetencia']; 
                                   
                                        $idsapLY2 = $filas['idsap']; 

                                     


                                        $COSTOsuM2 =  $costo2* $factor2;
                                        $COSTOTOhb2 ='$'.number_format($COSTOsuM2,2);

                                        $VENTA2 =  $cantidadPq2*$COSTOsuM2;
                                        $VENTAQX ='$'.number_format($VENTA2,2);*/
                                    }


                                    
                                 



                                    if(empty($preciocompetencia2)){

                                      
                                        $difPorcer2 = 'SD';   
    
                                        $clasedif2 = '';
    
                                    

                                    }else{

                                        $difidif2 = ($precioventa2*100/$preciocompetencia2)-100;
                                        $difPorcer2 = number_format($difidif2,2).'%';
    
                                        if($difidif2 <0){
    
                                            $clasedif2 = 'difAZUL';
    
                                        }elseif($difidif2>0){
                                            $clasedif2 = 'difRED';
                                        }
                                    }

                                ?>

                                    <tr>
                                        <td class="center colorwhite"><?php echo $cantidadPq2;?></td>
                                        <td class="left colorwhite"><?php echo $artiserPaq2;?></td>

                                        <?php

                                        if($adminrol == 'COM'){
                                            ?>
                                                <td class="center colorwhite"><?php echo $VENTAQX;?></td>
                                            <?php

                                        }else{
                                            ?>
                                            <!--
                                                <td class="center colorwhite"><?php echo $costo2CO;?></td>
                                                <td class="center colorwhite"><?php echo $factor2;?></td>
                                                <td class="center colorwhite"><?php echo $COSTOTOhb2;?></td>
                                                <td class="center colorwhite"><?php echo $VENTAQX;?></td>

                                        -->

                                                <td class="center colorwhite"><?php echo $costoPaq2;?></td>
                                                    <td class="center colorwhite"><?php echo $factorPaq2;?></td>
                                                    <td class="center colorwhite"><?php echo $precioVentaPaq2;?></td>


                                                    <td class="center colorwhite"><?php echo $totalPaquete2;?></td>
                                            <?php

                                        }

                                        ?>
                                      <!--
                                       
                                        <td class="center colorwhite"><?php echo '$'. number_format($preciocompetencia2,2) ;?></td>
                                        <td class="center colorwhite"><div class="<?php echo $clasedif2;?>"><?php echo $difPorcer2;?></div></td>
                                    -->

                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        

                    ?>

                    <tr>
                        <td colspan="7" class="seccion">INSUMOS</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq3 = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%INSUMOS%' AND activo = 'SI' ";
                                $qvalydpaq3 = $dbo->query($valydpaq3);                    


                                while ($fila = $qvalydpaq3->fetch(PDO::FETCH_ASSOC)) {

                                    
                                    $cantidadPq3 = $fila['cantidad'];  
                                    $idsapPaq3 = $fila['idsap']; 



                                    $costPaq3 = $fila['costo'];
                                    $costoPaq3 ='$'.number_format($costPaq3,2);

                                    $factorPaq3 = $fila['factor'];

                                       
                                    $precioVenPaq3 = $costPaq3*$factorPaq3;
                                    $precioVentaPaq3 ='$'.number_format($precioVenPaq3,2);

                                    $totalPaq3 = $cantidadPq3*$precioVenPaq3;
                                    $totalPaquete3 ='$'.number_format($totalPaq3,2);

                                    $artiserPaq3 = $fila['artiser']; 



                                    $PRECIO = "SELECT * FROM $tabPre WHERE idsap = '$idsapPaq3' AND unidad = '$unidad' AND red ='$red'  ";
                                    $QPRECIO = $dbo->query($PRECIO);                    
      
        
                                    while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
                                         /*
                                        $costo3 = $filas['costo'];  
                                        $costo3CO ='$'.number_format($costo3,2);

                                        $factor3 = $filas['factor']; 
                                        $precioventa3 = $filas['precioventa']; 
    
                                        $preciocompetencia3 = $fila['preciocompetencia']; 
                                        $artiser3 = $filas['descripcion']; 
                                        $idsapLY3 = $filas['idsap']; 

                                  



                                        $COSTOsuM3 =  $costo3* $factor3;
                                        $COSTOTOins ='$'.number_format($COSTOsuM3,2);

                                        $VENTA3 =  $cantidad3*$COSTOsuM3;
                                        $VENTAINS ='$'.number_format($VENTA3,2);*/
                                    }







                                    if(empty($preciocompetencia3)){

                                      
                                        $difPorcer3 = 'SD';   
    
                                        $clasedif3 = '';
    
                                    

                                    }else{
                                        $difidif3 = ($precioventa3*100/$preciocompetencia3)-100;
                                        $difPorcer3 = number_format($difidif3,2).'%';
    
                                        if($difidif3 <0){
    
                                            $clasedif3 = 'difAZUL';
    
                                        }elseif($difidif3>0){
                                            $clasedif3 = 'difRED';
                                        }
    
                                    }
                                    
                                 
                                ?>

                                    <tr>
                                        <td class="center colorwhite"><?php echo $cantidadPq3;?></td>
                                        <td class="left colorwhite"><?php echo $artiserPaq3;?></td>

                                        
                                        <?php

                                        if($adminrol == 'COM'){
                                            ?>
                                                <td class="center colorwhite"><?php echo $VENTAINS;?></td>     
                                            <?php


                                        }else{
                                            ?>

                                            <!--
                                                <td class="center colorwhite"><?php echo $costo3CO;?></td>
                                                <td class="center colorwhite"><?php echo $factor3;?></td>
                                                <td class="center colorwhite"><?php echo $COSTOTOins;?></td>
                                                <td class="center colorwhite"><?php echo $VENTAINS;?></td> 

                                        -->

                                                    <td class="center colorwhite"><?php echo $costoPaq3;?></td>
                                                    <td class="center colorwhite"><?php echo $factorPaq3;?></td>
                                                    <td class="center colorwhite"><?php echo $precioVentaPaq3;?></td>


                                                    <td class="center colorwhite"><?php echo $totalPaquete3;?></td>
                                         
                                            <?php

                                        }

                                        ?>


                                      <!--
                                                                       

                                        <td class="center colorwhite"><?php echo '$'. number_format($preciocompetencia3,2) ;?></td>
                                        <td class="center colorwhite"><div class="<?php echo $clasedif3;?>"><?php echo $difPorcer3;?></div></td>
                                    -->
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        

                    ?>




                    <tr>
                        <td colspan="7" class="seccion">MEDICAMENTOS</td>
                    </tr>

                    <?php

                                ////////////////////////////////////////////////DATOS ARTICULOS
                                $valydpaq4 = "SELECT * FROM $cat_paqBA WHERE idpaq = '$paquete' AND tipo LIKE '%MEDICAMENTOS%' AND activo = 'SI' ";
                                $qvalydpaq4 = $dbo->query($valydpaq4);                    


                                while ($fila = $qvalydpaq4->fetch(PDO::FETCH_ASSOC)) {

                                    $cantidadPq4 = $fila['cantidad'];  
                                    $idsapPaq4 = $fila['idsap']; 



                                    $costPaq4 = $fila['costo'];
                                    $costoPaq4 ='$'.number_format($costPaq4,2);

                                    $factorPaq4 = $fila['factor'];

                                               
                                    $precioVenPaq4 = $costPaq4*$factorPaq4;
                                    $precioVentaPaq4 ='$'.number_format($precioVenPaq4,2);

                                    $totalPaq4 = $cantidadPq4*$precioVenPaq4;
                                    $totalPaquete4 ='$'.number_format($totalPaq4,2);

                                    $artiserPaq4 = $fila['artiser']; 




                                    $PRECIO4 = "SELECT * FROM $tabPre WHERE idsap = '$idsapPaq4' AND unidad = '$unidad' AND red ='$red'  ";
                                    $QPRECIO4 = $dbo->query($PRECIO4);                    
      
        
                                    while ($filas = $QPRECIO4->fetch(PDO::FETCH_ASSOC)) {
                                        /*
                                        $costo4 = $filas['costo'];  
                                        $costo4CO ='$'.number_format($costo4,2);

                                        $factor4 = $filas['factor']; 
                                        $precioventa4 = $filas['precioventa']; 
    
                                        $preciocompetencia4 = $fila['preciocompetencia']; 
                                        $artiser4 = $filas['descripcion']; 
                                        $idsapLY4 = $filas['idsap']; 

                                      
                                        
                                        $COSTOsuM4 =  $costo4* $factor4;
                                        $COSTOTOmed ='$'.number_format($COSTOsuM4,2);

                                        $VENTA4 =  $cantidad4*$COSTOsuM4;
                                        $VENTAMED ='$'.number_format($VENTA4,2);*/
                                    }








                                    if(empty($preciocompetencia4)){

                                      
                                        $difPorcer4 = 'SD';   
    
                                        $clasedif4 = '';
    
                                    

                                    }else{
                                        $difidif4 = ($precioventa4*100/$preciocompetencia4)-100;
                                        $difPorcer4 = number_format($difidif4,2).'%';
    
                                        if($difidif4 <0){
    
                                            $clasedif4 = 'difAZUL';
    
                                        }elseif($difidif4>0){
                                            $clasedif4 = 'difRED';
                                        }
                                    }
                                          
                                   

                                ?>

                                    <tr>
                                        <td class="center colorwhite"><?php echo $cantidadPq4;?></td>
                                        <td class="left colorwhite"><?php echo $artiserPaq4;?></td>

                                        <?php

                                        if($adminrol == 'COM'){

                                            ?>
                                                <td class="center colorwhite" ><?php echo $VENTAMED;?></td>
                                            <?php
                                        }else{
                                            ?>

                                            <!--
                                                <td class="center colorwhite"><?php echo $costo4CO;?></td>
                                                <td class="center colorwhite"><?php echo $factor4;?></td>
                                                <td class="center colorwhite"><?php echo $COSTOTOmed;?></td>
                                                <td class="center colorwhite" ><?php echo $VENTAMED;?></td>
                                        -->

                                                
                                                    <td class="center colorwhite"><?php echo $costoPaq4;?></td>
                                                    <td class="center colorwhite"><?php echo $factorPaq4;?></td>
                                                    <td class="center colorwhite"><?php echo $precioVentaPaq4;?></td>


                                                    <td class="center colorwhite"><?php echo $totalPaquete4;?></td>
                                         
                                            <?php

                                        }

                                        ?>

                                       <!--
                                   
                                        <td class="center colorwhite"><?php echo '$'. number_format($preciocompetencia4,2) ;?></td>
                                        <td class="center colorwhite"><div class="<?php echo $clasedif4;?>"><?php echo $difPorcer4;?></div></td>
                                    -->
                                    </tr>

                                <?php

                                

                                
                                    
                                }

                        
                            
                    ?>




            </table>

        </div>

                
        <div class="titleSection4">ANALISIS DE PRECIO</div>

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

                   
                        $porce = $descuento;  
                    
                   
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


                if(empty($aumento)){
                    $aumeOT = 0;
                    $aumeOTmo = '$0.00';
                    $aumeOTtxt = '0.00%';
                }else{

                
                    /////descuento en moneda
                    $aumeOT =  $precioventa*$aumento;
                    $aumeOTmo = '$'.number_format($aumeOT,2);
                    $aumeOTtxt = number_format(($aumento*100),0) .'%';
                }

                //////VALIDACION PORCENTAJE DE AUMENTO


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
                $precioPROMOdesC= $precioventa+$aumeOT-$precioPROMO-$totdesc-$comSO-$comOT;
                $precioAntesdeIva= '$'.number_format($precioPROMOdesC,2);


                //////IVA
                $iva = $precioPROMOdesC*0.16;
                $precioIVA= '$'.number_format($iva,2);

                /////PRECIO TOTAL (DESPUES DE IVA)
                $TOTALTOT = $precioPROMOdesC+$iva;
                $precioTOT = '$'.number_format($TOTALTOT,2);

                //////UTILIDAD

                $utilidad = $precioPROMOdesC-$preciosinfactor;
                $Util = '$'.number_format($utilidad,2);


                //////MARGEN DE UTILIDAD
            
                $margenU = ($utilidad*100)/$precioPROMOdesC;
                $MARGENutilidad = number_format($margenU,2).'%';

            ?>



            <table id="tablecotiz2">


                <tr>
                    <th>CONCEPTO</th>
                    <th>RESULTADO</th>
                </tr>

                <?php

                    if($adminrol == 'COM'){
                        
                    }else{
                        ?>
                            <tr>
                                <td class="colorblack">COSTO SIN FACTOR</td>
                                <td class="center colorwhite"><?php echo $precioSINFAC;?></td>
                            </tr>

                        <?php
                    }
                ?>

                

                <tr>
                    <td class="colorblack">PRECIO DE VENTA</td>
                    <td class="center colorwhite"><?php echo $precioVENT;?></td>
                </tr>

                <tr>
                    <td class="colorblack">PROMOCION</td>
                    <td class="center colorwhite"><?php echo $mnamepro;?></td>
                </tr>

                <tr>
                    <td class="colorblack"></td>
                    <td class="center colorwhite"><?php echo $precioPROM;?></td>
                </tr>
                    <?php

                        if($adminrol == 'COM'){
                            
                        }else{

                            ?>

                                <tr>
                                    <td class="colorblack">AUMENTO</td>
                                    <td class="center colorwhite"><?php echo $aumeOTtxt;?></td>
                                </tr>
                                

                            <?php
                        }

                    ?>
                

                <tr>
                    <td class="colorblack"></td>
                    <td class="center colorwhite"><?php echo $aumeOTmo;?></td>
                </tr>

                <tr>
                    <td class="colorblack">% DE DESCUENTO</td>
                    <td class="center colorwhite"><?php echo $textdesc;?></td>
                </tr>

                <tr>
                    <td class="colorblack"></td>
                    <td class="center colorwhite"><?php echo $descuen;?></td>
                </tr>


                <?php


                    if($adminrol == 'COM'){

                    }else{

                        ?>

                            <tr>
                                <td class="">COMISION SOCIO</td>
                                <td class="center colorwhite"><?php echo $comSOmo;?></td>
                            </tr>

                            <tr>
                                <td class="">% COMISION OTROS</td>
                                <td class="center colorwhite"><?php echo $comOTtxt;?></td>
                            </tr>

                            <tr>
                                <td class=""></td>
                                <td class="center colorwhite"><?php echo $comOTmo;?></td>
                            </tr>

                        <?php
                        
                    }


                ?>

                <tr>
                    <td class="colorblack">SUBTOTAL</td>
                    <td class="center colorwhite"><?php echo $precioAntesdeIva;?></td>
                </tr>
                                
                <tr>
                    <td class="colorblack">IVA</td>
                    <td class="center colorwhite"><?php echo $precioIVA;?></td>
                </tr>
                <?php


                    if($adminrol == 'COM'){

                    }else{


                    ?>

                        <tr>
                            <td class="colorblack">TOTAL</td>
                            <td class="center colorwhite"><?php echo $precioTOT;?></td>
                        </tr>

                    <?php
                    }

                ?>

                

                <tr>

                <?php

                  ////////////////////////////////////////////////////////////////////////////////////////MARGEN DE UTILIDAD MINIMO POR UNIDAD
                $utilmin = "SELECT * FROM $cat_util WHERE unidad = '$unidad' AND red ='$red'  ";
                $qutilmin = $dbo->query($utilmin);                    


                while ($filas = $qutilmin->fetch(PDO::FETCH_ASSOC)) {

                    $utilidadmin = $filas['utilidadmin'];  
                    $utmi =$utilidadmin*100;
                }

             
             
                                  
                if($margenU < $utmi ){

                    ?>

                        <script type="text/javascript">
                            
                            alert('Cuidado, precio NO autorizado!');
                        
                        </script>
                    <?php

                }

                if($adminrol == 'COM'){

                }else{
                    ?>

                <td class="colorblack">MARGEN UTILIDAD</td>
                    <td class="center colorwhite"><?php echo $MARGENutilidad;?></td>
                </tr>
                
                <tr>
                    <td class="colorblack">UTILIDAD</td>
                    <td class="center colorwhite"><?php echo $Util;?></td>
                </tr>
                    <?php
                }

                ?>
                    
                
            </table>


            
            <div id="backbackpri">

       


                <div id="printregresar">
                 
                    <div id="backRegresarCot" class="navbot">
                        <a href="selectCotiz.php"><img src="img/regresarOK3.png" id="regresar"></a>                 
                    </div>

                </div>

                <form id="backprint" method="POST" action="printY.php" target="_blank" >

                    <input hidden type="text" value="<?php echo $paquete;?>" name="paquete" >
                    <input hidden type="text" value="<?php echo $promo;?>" name="promo" >
                    <input hidden type="text" value="<?php echo $descuento;?>" name="descuento" >
                    <input hidden type="text" value="<?php echo $comisionSo;?>" name="comisionSo" >
                    <input hidden type="text" value="<?php echo $comisionOT;?>" name="comisionOT" >
                    <input hidden type="text" value="<?php echo $aumento;?>" name="aumento" >

                    <?php
                        $VENTAOK = $precioAntesdeIva
                    ?>
                                        
                    <input hidden type="text" value="<?php echo $VENTAOK;?>" name="ventaok" >
                    <input hidden type="text" value="<?php echo $precioIVA;?>" name="precioIVA" >
                    <input hidden type="text" value="<?php echo $precioTOT;?>" name="precioTOT" >
                    <input hidden type="text" value="<?php echo $unidad;?>" name="unidad" >

                    <input type="image" src="img/printOK2.png" id="modi">
                    <input type="submit" id="printIcon" name="print">
                  
                    <input type="button"  id="reloadIcon" value="+" onclick="location.reload();">
       

                </form>

               
            </div>

        </div>

    

      
        
    </section>

    
</body>

</html>