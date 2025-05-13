<?php
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';

            
///////////////////////////////PRECIO VENTA

$precioventa = current($dbcot->query("SELECT SUM(precioventa) FROM $cat_paqBA WHERE idpaq = '$idpaq' AND activo = 'SI'  ")->fetch());



//////////////////////ESTATUS 5 REPRESENTA PROCEDIMIENTOS YA CONCILIADOS O REALIZADOS

////////////////////////////////////CIRUGIAS REALIZADAS PARA PRODUCTIVIDAD MINIMA

$allcirugias = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE idtarjemp = '$idtarjemp' /*AND estatus = '5'*/    ")->fetch());                                                          
          
/////////VINCULACION COMERCIAL
////////////////////////////////////CIRUGIAS REALIZADAS PARA COMISION DE VINCULACION COMERCIAL POR CAPTACION DE MEDICOS NUEVOS

$cx_vinc_cap_med = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE idmed = '$idmed' AND idtarjemp = '$idtarjemp' /*AND estatus = '5'*/ AND useresp = 'VIC'   ")->fetch());                                                          
   


////////////////////////////////////CIRUGIAS REALIZADAS PARA PRODUCTIVIDAD MINIMA

$allcirugiasVIC = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE  idtarjemp = '$idtarjemp' /*AND estatus = '5'*/  AND useresp = 'VIC'  ")->fetch());                                                          
   





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ACUERDO SOCIOS




if($p_bene4 == 'SOCIOS'){
    $comSOCios = $precioventa*0.1;
    $comSOmo = '$'.number_format($comSOCios,2);
}else{
    $comSOCios = 0;
    $comSOmo = '$'.number_format($comSOCios,2);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ACUERDO OTROS
//////////////////ACUERDO 1


if(empty($ac1)){
    $acuerdo1 = 0;
}else{
    if($p_unmed1 == '%'){
        $acuerdo1 = $precioventa*$p_valor1;
    }elseif($p_unmed1 == '$'){
        $acuerdo1 =$p_valor1;
    }
}
//////////////////ACUERDO 2


if(empty($ac2)){
    $acuerdo2 = 0;
}else{
    if($p_unmed2 == '%'){
        $acuerdo2 = $precioventa*$p_valor2;
    }elseif($p_unmed2 == '$'){
        $acuerdo2 =$p_valor2;
    }
}

//////////////////ACUERDO 3


if(empty($ac3)){
    $acuerdo3 = 0;
}else{


 
    if($allcirugias > $p_numnin3){
  
       if($p_unmed3 == '%'){
            $acuerdo3 = $precioventa*$p_valor3;
        }elseif($p_unmed3 == '$'){
            $acuerdo3 =$p_valor3;
        }
   }else{
     $acuerdo3 = 0;
   }
   
}

//////////////////ACUERDO 4


if(empty($ac4)){
    $acuerdo4 = 0;
}else{
    if($p_unmed4 == '%'){
        $acuerdo4 = $precioventa*$p_valor4;
    }elseif($p_unmed4 == '$'){
        $acuerdo4 =$p_valor4;
    }
}




$comOT = $acuerdo4+$acuerdo3+$acuerdo2+$acuerdo1-$comSOCios;
$comOTmo= '$'.number_format($comOT,2);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////VINCULACION COMERCIAL
//////////////////ACUERDO CAPTACION DE NUEVOS MEDICOS PARA VINCULACION COMERCIAL

    if($cx_vinc_cap_med > 0 & $cx_vinc_cap_med <=3){


        $tabac1= "SELECT * FROM $cat_acuerdos WHERE  id = '1' ";
        $qtabac1 = $dbc->query($tabac1);   
        while ($filpro0 = $qtabac1->fetch(PDO::FETCH_ASSOC)) {
            $valorAc1 =$filpro0['valor'];
        }


        $tabac2= "SELECT * FROM $cat_acuerdos WHERE  id = '2' ";
        $qtabac2 = $dbc->query($tabac2);   
        while ($filpro0 = $qtabac2->fetch(PDO::FETCH_ASSOC)) {
            $valorAc2 =$filpro0['valor'];
        }

        $tabac3= "SELECT * FROM $cat_acuerdos WHERE  id = '3' ";
        $qtabac3 = $dbc->query($tabac3);   
        while ($filpro0 = $qtabac3->fetch(PDO::FETCH_ASSOC)) {
            $valorAc3 =$filpro0['valor'];
        }

        if($useresp == 'VIC' ){
            if($precioventa <= 18000 ){

                $comVincM =  $valorAc1;
                $comVincMpRINT= '$'.number_format($comVincM,2);
    
            }elseif($precioventa > 18000 & $precioventa < 30000){
    
                $comVincM =  $valorAc2;
                $comVincMpRINT= '$'.number_format($comVincM,2);
            }elseif($precioventa > 30000){
    
                $comVincM =  $valorAc3;
                $comVincMpRINT= '$'.number_format($comVincM,2);
            }
        }else{
            $comVincM =0;
        }
       


    }else{
        $comVincM = 0;
        $comVincMpRINT= '$'.number_format($comVincM,2);
}



$tabacvinc= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' AND useresp = 'VIC' AND estatus = '5' ";
$qtabacvinc = $dbc->query($tabacvinc);
  
while ($filpro0 = $qtabacvinc->fetch(PDO::FETCH_ASSOC)) {


    $ac1V =$filpro0['ac1'];
    $bene1V =$filpro0['bene1'];
    $unmed1V =$filpro0['unmed1'];
    $valor1V =$filpro0['valor1'];
    
    if(empty($ac1V)){
        $p_ac1V = NULL;
        $p_bene1V = NULL;
        $p_unmed1V = NULL;
        $p_valor1V = NULL;
    }else{
        $p_ac1V = $ac1V;
        $p_bene1V = $bene1V;
        $p_unmed1V = $unmed1V;
        $p_valor1V = $valor1V;
    }


    $ac2V =$filpro0['ac2'];
    $bene2V =$filpro0['bene2'];
    $unmed2V =$filpro0['unmed2'];
    $valor2V =$filpro0['valor2'];

    if(empty($ac2V)){
        $p_ac2V = NULL;
        $p_bene2V = NULL;
        $p_unmed2V = NULL;
        $p_valor2V = NULL;
    }else{
        $p_ac2V = $ac2V;
        $p_bene2V = $bene2V;
        $p_unmed2V = $unmed2V;
        $p_valor2V = $valor2V;
    }





    $ac3V =$filpro0['ac3'];
    $bene3V =$filpro0['bene3'];
    $numnin3V =$filpro0['numin'];
    $unmed3V =$filpro0['unmed3'];
    $valor3V =$filpro0['valor3'];


    if(empty($ac3)){
        $p_ac3V = NULL;
        $p_bene3V = NULL;
        $p_numnin3V =NULL;
        $p_unmed3V = NULL;
        $p_valor3V = NULL;
    }else{
        $p_ac3V = $ac3;
        $p_bene3V = $bene3V;
        $p_numnin3V =$numnin3V;
        $p_unmed3V = $unmed3V;
        $p_valor3V = $valor3V;
    }




    $ac4V =$filpro0['ac4'];
    $bene4V =$filpro0['bene4'];
    $unmed4V =$filpro0['unmed4'];
    $valor4V =$filpro0['valor4'];


    if(empty($ac4V)){
        $p_ac4V = NULL;
        $p_bene4V = NULL;
        $p_unmed4V = NULL;
        $p_valor4V = NULL;
    }else{
        $p_ac4V = $ac4V;
        $p_bene4V = $bene4V;
        $p_unmed4V = $unmed4V;
        $p_valor4V = $valor4V;
    }



}


//////////////////ACUERDO 1


if(empty($ac1V)){
    $acuerdo1V = 0;
}else{
    if($p_unmed1V == '%'){
        $acuerdo1V = $precioventa*$p_valor1V;
    }elseif($p_unmed1V == '$'){
        $acuerdo1V =$p_valor1V;
    }
}

//////////////////ACUERDO 2


if(empty($ac2V)){
    $acuerdo2V = 0;
}else{
    if($p_unmed2V == '%'){
        $acuerdo2V = $precioventa*$p_valor2V;
    }elseif($p_unmed2V == '$'){
        $acuerdo2V =$p_valor2V;
    }
}

//////////////////ACUERDO 3


if(empty($ac3V)){
    $acuerdo3V= 0;
}else{


 
    if($allcirugiasVIC > $p_numnin3V){
  
       if($p_unmed3V == '%'){
            $acuerdo3V = $precioventa*$p_valor3V;
        }elseif($p_unmed3V == '$'){
            $acuerdo3V =$p_valor3V;
        }
   }else{
     $acuerdo3V = 0;
   }
   
}
//////////////////ACUERDO 4


if(empty($ac4V)){
    $acuerdo4V = 0;
}else{
    if($p_unmed4V == '%'){
        $acuerdo4V = $precioventa*$p_valor4V;
    }elseif($p_unmed4 == '$'){
        $acuerdo4V =$p_valor4V;
    }
}


//////////////COMISION FINAL 
$comisionVCo = $acuerdo1V+$acuerdo2V+$acuerdo3V+$acuerdo4V;
$comisionVCOTIZ= '$'.number_format($comisionVCo,2);


////////////////////////////////////////////////////////////////////////////PROMOCIONES///////////////////////////////////////////////////////////////////


            //////VALIDACIONES PRECIOS DE PROMOCIONES

            if(empty($promo)){
                $precioPROM = '$0.00';
                $precioPROMO = 0;  
                $mnamepro = 'SIN PROMOCION';
            }else{
            
                $preciopr = "SELECT * FROM $tabPre WHERE idsap = '$promo'  ";
                $qpreciopr = $dbcot->query($preciopr);                    


                while ($fila = $qpreciopr->fetch(PDO::FETCH_ASSOC)) {

                    $precioPROMO = $fila['precioventa'];  
                }

                $precioPROM = '$'.number_format($precioPROMO,2);
                $valyprom = "SELECT * FROM $cat_prom WHERE codsap = '$promo'  ";
                $qvalyprom = $dbcot->query($valyprom);                    
                
                
                while ($fila = $qvalyprom->fetch(PDO::FETCH_ASSOC)) {
                
                    $nombrePROM = $fila['nombre'];  
                    $mnamepro =  $nombrePROM;
                }

            }





///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    <div id="analisisCOTI">
        
        <?php


            ///PRECIO SIN FACTOR DE UTILIDAD
            $preciosinfactor = current($dbcot->query("SELECT SUM(preciosinfactor) FROM $cat_paqBA WHERE idpaq = '$idpaq' AND activo = 'SI'  ")->fetch());
            ////PRECIO CON FACTOR DE UTILIDAD
            $precioventa = current($dbcot->query("SELECT SUM(precioventa) FROM $cat_paqBA WHERE idpaq = '$idpaq' AND activo = 'SI'  ")->fetch());
            
        
            $precioSINFAC = '$'.number_format($preciosinfactor,2);
            $precioVENT = '$'.number_format($precioventa,2);
        
                
              
        /////UTILIDAD FINAL DESPUES DE COMISIONES, DESCUENTOS, ETC (ANTES DE IVA)
        //$utilidadFIN= $precioventa+$aumeOT-$precioPROMO-$totdesc-$comSO-$comOT-$comisionVCo-$preciosinfactor;




            //////IVA
            $iva = $precioventa*0.16;
            $precioIVA= '$'.number_format($iva,2);

            /////PRECIO TOTAL (DESPUES DE IVA)
            $TOTALTOT = $precioventa+$iva;
            $precioTOT = '$'.number_format($TOTALTOT,2);

            //////UTILIDAD

            $utilidad = $precioventa-$preciosinfactor;
            $Util = '$'.number_format($utilidad,2);


            //////MARGEN DE UTILIDAD
        
            $margenU = ($utilidad*100)/$precioventa;
            $MARGENutilidad = number_format($margenU,2).'%';


            ///////////////////////AJUTE DE MEDICAMENTOS E INSUMOS CONFORME PARA MODIFICAR PRECIO DE VENTA VS PRECIO FIFTY
            $precioventaMED = current($dbcot->query("SELECT SUM(precioventa) FROM $cat_paqBA WHERE idpaq = '$idpaqy' AND activo = 'SI' AND tipo = 'MEDICAMENTOS' ")->fetch());
            $precioventaINS = current($dbcot->query("SELECT SUM(precioventa) FROM $cat_paqBA WHERE idpaq = '$idpaqy' AND activo = 'SI' AND tipo = 'INSUMOS' ")->fetch());
        
            /*

                pf = PRECIO FIFTY
                pv = PRECIO DE VENTA

                Tm = TOTAL MEDICAMENTOS
                Ti = TOTAL INSUMOS

                TTmi = TOTAL DE MEDICAMENTOS E INSUMOS

                XA = TOTAL POR AJUSTAR (DIRENCIA ENTRE EL PRECIO FIFTY Y EL PRECIO DE VENTA)

                XA = pf - pv-(Tm+ti)

                Aj = PORCENTAJE DE AJUSTE

                psmi = PRECIO DE VENTA MENOS MEDICAMENTOS E INSUMOS

            */

                $pf = $preciohosp;
                $pfFF = '$'.number_format($pf,2);



                $pv = $precioventa;
                $pvVV = '$'.number_format($precioventa,2);

                $Tm = $precioventaMED;
                $Ti = $precioventaINS;
                $TTmi = $Tm+$Ti;

                $psmi =  $pv-$TTmi;

                $XA =  $pf - $psmi-$TTmi;


                
                $utilFIN = $precioventa-$preciosinfactor-$precioPROMO-$comSOCios-$comisionVCo-$acuerdo4-$acuerdo3-$acuerdo2-$acuerdo1;

                $utilidadFIN= $pf-$preciosinfactor-$precioPROMO-$comSOCios-$comVincM-$comisionVCo-$comOT;
                $utilidadFINMO= '$'.number_format($utilidadFIN,2);




                $Aj = ($XA*100)/$TTmi;
                $PORCEaj = number_format($Aj,2).'%';

                /////////////////////////////////CON PRECIO AJUSTADO

                    //////IVA2
                    $iva2 = $pf*0.16;
                    $precioIVA2= '$'.number_format($iva2,2);

                    /////PRECIO TOTAL (DESPUES DE IVA)2
                    $TOTALTOT2 = $pf+$iva;
                    $precioTOT2 = '$'.number_format($TOTALTOT2,2);

                    //////UTILIDAD2

                    $utilidad2 = $pf-$preciosinfactor;
                    $Util2 = '$'.number_format($utilidad2,2);


                    //////MARGEN DE UTILIDAD2
                
                    $margenU2 = ($utilidad2*100)/$pf;
                    $MARGENutilidad2 = number_format($margenU2,2).'%';

                    

        ?>


    </div>
<?php



