<?php
require_once 'varSQL/dbmysql.php';
?>




<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////GLOBAL


   
//userUnidadAcronu
    if(empty($filtrarU)){

        ////////////////////RESULTADOS

        if($userUnidad == 'FIFTY' ){
            $allreus1 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes1 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%' AND activo = 'SI'  ")->fetch());
    
    
            $allreus2 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes2 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%' AND activo = 'SI'  ")->fetch());
    
    
            $allreus3 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%'  AND activo = 'SI'   ")->fetch());                                                          
            $sumRes3 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%' AND activo = 'SI'  ")->fetch());
    
    
            $allreus4 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes4 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());
    
    
            $allreus5 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes5 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'  ")->fetch());
    
    
            $allreus6 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes6 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%' AND activo = 'SI'  ")->fetch());
    
    
            $allreus7 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes7 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());
    
    
            $allreus8 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%'  AND activo = 'SI'   ")->fetch());                                                          
            $sumRes8 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());
    
    
            $allreus9 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes9 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%' AND activo = 'SI'  ")->fetch());
    
    
            $allreus10 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes10 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());
    
    
            ///////////////OBJETIVOS
    
            $allreus11 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes11 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());
    
            $allreus12 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes12 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());
    
            $allreus13 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%'  AND activo = 'SI'    ")->fetch());                                                          
            $sumRes13 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%' AND activo = 'SI'   ")->fetch());

        }else{
            $allreus1 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'    ")->fetch());                                                          
            $sumRes1 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus2 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes2 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus3 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes3 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus4 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes4 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());
    
    
            $allreus5 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes5 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus6 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes6 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus7 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes7 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());
    
    
            $allreus8 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());                                                          
            $sumRes8 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus9 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes9 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            $allreus10 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes10 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
    
            ///////////////OBJETIVOS
    
            $allreus11 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());                                                          
            $sumRes11 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%'   ")->fetch());
    
            $allreus12 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());                                                          
            $sumRes12 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
    
            $allreus13 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());                                                          
            $sumRes13 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());

        }

       //

    }else{
         ////////////////////RESULTADOS



            if($userUnidad == 'FIFTY' ){

               
                if(empty($periodoSel)){

                    
                    $allreus1 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());                                                          
                    $sumRes1 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus2 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());                                                          
                    $sumRes2 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus3 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes3 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    $allreus4 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes4 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    $allreus5 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes5 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    $allreus6 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%'  AND activo = 'SI'    AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());                                                          
                    $sumRes6 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus7 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());                                                          
                    $sumRes7 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus8 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes8 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus9 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes9 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus10 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes10 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    ///////////////OBJETIVOS
            
                    $allreus11 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes11 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
                    $allreus12 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'   ")->fetch());                                                          
                    $sumRes12 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
                    $allreus13 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes13 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());

                }else{


                    $allreus1 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_fif WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());                                                          
                    $sumRes1 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_fif WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus2 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_corp WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes2 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_corp WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus3 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_apop WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes3 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_apop WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus4 = current($dbo->query("SELECT COUNT(metames) FROM $tabres_mmultip WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND metames = '%$periodoSel%'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());                                                          
                    $sumRes4 = current($dbo->query("SELECT SUM(metames) FROM $tabres_mmultip WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND metames = '%$periodoSel%'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'")->fetch());
            
            
                    $allreus5 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());                                                          
                    $sumRes5 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    $allreus6 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_gem WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes6 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_gem WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
            
            
                    $allreus7 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_gea WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes7 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_gea WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    $allreus8 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_jenf WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes8 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_jenf WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
            
            
                    $allreus9 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_jfarm WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes9 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_jfarm WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            
                    $allreus10 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_jserv WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes10 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_jserv WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
            
            
                    ///////////////OBJETIVOS
            
                    $allreus11 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabojb_dg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes11 = current($dbo->query("SELECT SUM($mesCO) FROM $tabojb_dg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
            
                    $allreus12 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabojb_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'   ")->fetch());                                                          
                    $sumRes12 = current($dbo->query("SELECT SUM($mesCO) FROM $tabojb_reg WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
                    $allreus13 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabojb_unid WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());                                                          
                    $sumRes13 = current($dbo->query("SELECT SUM($mesCO) FROM $tabojb_unid WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%' ")->fetch());
    
                }
            }else{

                if(empty($periodoSel)){

                                    
                    $allreus1 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes1 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_fif WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus2 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes2 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_corp WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus3 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes3 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_apop WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
            
                    $allreus4 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes4 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_mmultip WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
            
                    $allreus5 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'     ")->fetch());                                                          
                    $sumRes5 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_reg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
            
                    $allreus6 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'     ")->fetch());                                                          
                    $sumRes6 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gem WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
            
                    $allreus7 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes7 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_gea WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus8 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes8 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jenf WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus9 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes9 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jfarm WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus10 = current($dbo->query("SELECT COUNT(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes10 = current($dbo->query("SELECT SUM(resultado) FROM $tabres_jserv WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
            
                    ///////////////OBJETIVOS
            
                    $allreus11 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes11 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_dg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
                    $allreus12 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'     ")->fetch());                                                          
                    $sumRes12 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_reg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());
            
                    $allreus13 = current($dbo->query("SELECT COUNT(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'     ")->fetch());                                                          
                    $sumRes13 = current($dbo->query("SELECT SUM(resultado) FROM $tabojb_unid WHERE yearini LIKE '%$year%' AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());


                }else{

                    
                    $allreus1 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_fif WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'  ")->fetch());                                                          
                    $sumRes1 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_fif WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'  ")->fetch());
            
            
                    $allreus2 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_corp WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes2 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_corp WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'  ")->fetch());
            
            
                    $allreus3 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_apop WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes3 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_apop WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus4 = current($dbo->query("SELECT COUNT(metames) FROM $tabres_mmultip WHERE yearini LIKE '%$year%'  AND activo = 'SI'   AND metames = '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes4 = current($dbo->query("SELECT SUM(metames) FROM $tabres_mmultip WHERE yearini LIKE '%$year%' AND activo = 'SI'   AND metames = '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'  ")->fetch());
            
            
                    $allreus5 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes5 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_reg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus6 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_gem WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes6 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_gem WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus7 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_gea WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes7 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_gea WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus8 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_jenf WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes8 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_jenf WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus9 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_jfarm WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes9 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_jfarm WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    $allreus10 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabres_jserv WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'    ")->fetch());                                                          
                    $sumRes10 = current($dbo->query("SELECT SUM($mesCO) FROM $tabres_jserv WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
            
                    ///////////////OBJETIVOS
            
                    $allreus11 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabojb_dg WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes11 = current($dbo->query("SELECT SUM($mesCO) FROM $tabojb_dg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
                    $allreus12 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabojb_reg WHERE yearini LIKE '%$year%'  AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'     ")->fetch());                                                          
                    $sumRes12 = current($dbo->query("SELECT SUM($mesCO) FROM $tabojb_reg WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
            
                    $allreus13 = current($dbo->query("SELECT COUNT($mesCO) FROM $tabojb_unid WHERE yearini LIKE '%$year%'  AND activo = 'SI'  AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());                                                          
                    $sumRes13 = current($dbo->query("SELECT SUM($mesCO) FROM $tabojb_unid WHERE yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$userUnidadAcronu%' AND region LIKE '%$regionSel%'   ")->fetch());
                }
               
    
            }
         
         }
    
  



        $allreus = $allreus1+$allreus2+$allreus3+$allreus4+$allreus5+$allreus6+$allreus7+$allreus8+$allreus9+$allreus10+$allreus11+$allreus12+$allreus13;

        $sumRes = $sumRes1+$sumRes2+$sumRes3+$sumRes4+$sumRes5+$sumRes6+$sumRes7+$sumRes8+$sumRes9+$sumRes10+$sumRes11+$sumRes12+$sumRes13;

        if($allreus > 0){

            $sumResAll = $sumRes/13 ;
        
            $resulresul = number_format($sumResAll,2).'%';
        }else{
        
            $resulresul = 'NE';
        }

     
//////////////////////////////////////////////////////////////////////////////////////////////CONSULTAS PROCESOS Y NORMAS


    if(empty($filtrarU) ){

        if($adminrol == $radmin){

            $all_procesos = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$mesme%' ")->fetch());
            $all_procesosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND riesgo = 'SI' AND periodo LIKE '%$mesme%' ")->fetch());
        
        
            $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$mesme%' AND falla LIKE '%SSA%'")->fetch());
            $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%'  AND falla LIKE '%SSA%'")->fetch());
        
        
            $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$mesme%' AND falla LIKE '%STPS%'")->fetch());
            $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%' AND falla LIKE '%STPS%'")->fetch());
        
        
            $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$mesme%' AND falla LIKE '%NOMXOT%'")->fetch());
            $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%' AND falla LIKE '%NOMXOT%'")->fetch());
       
            
        }elseif($adminrol == $radreg){

            $all_procesos = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$mesme%' AND region LIKE '%$userAcroregion%' ")->fetch());
            $all_procesosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND riesgo = 'SI' AND periodo LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
        
        
            $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$mesme%' AND falla LIKE '%SSA%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%'  AND falla LIKE '%SSA%' AND region LIKE '%$userAcroregion%' ")->fetch());
        
        
            $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$mesme%' AND falla LIKE '%STPS%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%' AND falla LIKE '%STPS%' AND region LIKE '%$userAcroregion%'  ")->fetch());
        
        
            $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$mesme%' AND falla LIKE '%NOMXOT%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%' AND falla LIKE '%NOMXOT%' AND region LIKE '%$userAcroregion%' ")->fetch());
       

        }elseif($adminrol == $radger){

            $all_procesos = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $all_procesosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND riesgo = 'SI' AND periodo LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
        
        
            $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$mesme%' AND falla LIKE '%SSA%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%'  AND falla LIKE '%SSA%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
        
        
            $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$mesme%' AND falla LIKE '%STPS%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%' AND falla LIKE '%STPS%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
        
        
            $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$mesme%' AND falla LIKE '%NOMXOT%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$mesme%' AND falla LIKE '%NOMXOT%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
       

        }
  
    }else{

        if($adminrol == $radmin){

            $all_procesos = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
            $all_procesosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND riesgo = 'SI' AND periodo LIKE '%$periodoSel%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
        
        
            $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%SSA%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
            $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%'  AND falla LIKE '%SSA%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
        
        
            $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$periodoSel%' AND falla LIKE '%STPS%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
            $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%STPS%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
        
        
            $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$periodoSel%' AND falla LIKE '%NOMXOT%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
            $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%NOMXOT%'  AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
       
            
        }elseif($adminrol == $radreg){

            $all_procesos = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
            $all_procesosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND riesgo = 'SI' AND periodo LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
        
        
            $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%SSA%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%'  AND falla LIKE '%SSA%' AND region LIKE '%$userAcroregion%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
        
        
            $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$periodoSel%' AND falla LIKE '%STPS%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
            $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%STPS%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
        
        
            $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$periodoSel%' AND falla LIKE '%NOMXOT%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%NOMXOT%' AND region LIKE '%$userAcroregion%' ")->fetch());
       

        }elseif($adminrol == $radger){

            $all_procesos = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $all_procesosSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND riesgo = 'SI' AND periodo LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
        
        
            $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%SSA%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%'  AND falla LIKE '%SSA%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
        
        
            $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$periodoSel%' AND falla LIKE '%STPS%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%STPS%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
        
        
            $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  periodo LIKE '%$periodoSel%' AND falla LIKE '%NOMXOT%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
            $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND  riesgo = 'NO' AND periodo LIKE '%$periodoSel%' AND falla LIKE '%NOMXOT%' AND unidad LIKE '%$userUnidadAcronu%'  ")->fetch());
       

        }
  }

//////////////////////////////////////PROCESOS

if($all_procesos == 0){
    $PROCESOS_RESULTADOS = 'NE';
}else{
    $deseProcesos = $all_procesosSI*100/$all_procesos;
    $PROCESOS_RESULTADOS = number_format($deseProcesos,2) ."%";
}

?>
    <div id="semaforo_procesos">

        <?php

            if($all_procesos == 0){
                $porcentajPROC = 'porceNEp';
            }elseif($deseProcesos == 0){
                $porcentajPROC = 'porce0p';
            }elseif($deseProcesos  >0 & $deseProcesos < 5){
                $porcentajPROC = 'porce5p';
            }elseif($deseProcesos  >=5 & $deseProcesos < 10){
                $porcentajPROC = 'porce10p';
            }elseif($deseProcesos  >=10 & $deseProcesos < 15){
                $porcentajPROC = 'porce15p';
            }elseif($deseProcesos  >=15 & $deseProcesos < 20){
                $porcentajPROC = 'porce20p';
            }elseif($deseProcesos  >=20 & $deseProcesos < 25){
                $porcentajPROC = 'porce25p';
            }elseif($deseProcesos  >=25 & $deseProcesos < 30){
                $porcentajPROC = 'porce30p';
            }elseif($deseProcesos  >=30 & $deseProcesos < 35){
                $porcentajPROC = 'porce35p';
            }elseif($deseProcesos  >=35 & $deseProcesos < 40){
                $porcentajPROC = 'porce40p';
            }elseif($deseProcesos  >=40 & $deseProcesos < 45){
                $porcentajPROC = 'porce45p';
            }elseif($deseProcesos  >=45 & $deseProcesos < 50){
                $porcentajPROC = 'porce50p';
            }elseif($deseProcesos  >=50 & $deseProcesos < 55){
                $porcentajPROC = 'porce55p';
            }elseif($deseProcesos  >=55 & $deseProcesos < 60){
                $porcentajPROC = 'porce60p';
            }elseif($deseProcesos  >=60 & $deseProcesos < 65){
                $porcentajPROC = 'porce65p';
            }elseif($deseProcesos  >=65 & $deseProcesos < 70){
                $porcentajPROC = 'porce70p';
            }elseif($deseProcesos  >=70 & $deseProcesos < 75){
                $porcentajPROC = 'porce75p';
            }elseif($deseProcesos  >=75 & $deseProcesos < 80){
                $porcentajPROC = 'porce80p';
            }elseif($deseProcesos  >=80 & $deseProcesos < 85){
                $porcentajPROC = 'porce85p';
            }elseif($deseProcesos  >=85 & $deseProcesos < 90){
                $porcentajPROC = 'porce90p';
            }elseif($deseProcesos  >=90 & $deseProcesos < 95){
                $porcentajPROC = 'porce95p';
            }elseif($deseProcesos  >=95 & $deseProcesos < 100){
                $porcentajPROC = 'porce98p';
            }elseif($deseProcesos  >=100){
                $porcentajPROC = 'porce100p';
            }

        ?>

    </div>

<?php
    //////////////////////////////////////NORMAS

    $sumALL = $SSA_ALL+$STPS_ALL+$NOMXOT_ALL;

    if($SSA_ALL== 0){
        $porcetxt_SSA = 'NE';
    }else{
        $porce_SSA =  $SSA_NO*100/$SSA_ALL;   
        $porcetxt_SSA = number_format($porce_SSA,2) ."%";
    }

    if($STPS_ALL== 0){
        $porcetxt_STPS = 'NE';
    }else{
        $porce_STPS =  $STPS_NO*100/$STPS_ALL;   
        $porcetxt_STPS = number_format($porce_STPS,2) ."%";
    }

    if($NOMXOT_ALL== 0){
        $porcetxt_NOMXOT = 'NE';
    }else{
        $porce_NOMXOT =  $NOMXOT_NO*100/$NOMXOT_ALL;   
        $porcetxt_NOMXOT = number_format($porce_NOMXOT,2) ."%";
    }



if($sumALL > 0){
  
    $sumNOMno = $SSA_NO+$STPS_NO+$NOMXOT_NO;

  
    $PRON_DESEMPENO = $sumNOMno*100/$sumALL;

    $NOMS_DESEMPENO = number_format($PRON_DESEMPENO,2) ."%";
}else{
    $NOMS_DESEMPENO = 'NE';
}
?>
    <div id="semaforo_noms">

        <?php

            if($sumALL == 0 OR empty($sumALL) OR empty($PRON_DESEMPENO)){
                $porcentajnoms = 'porceNEp';
            }elseif($PRON_DESEMPENO == 0){
                $porcentajnoms = 'porce0p';
            }elseif($PRON_DESEMPENO  >0 & $PRON_DESEMPENO < 5){
                $porcentajnoms = 'porce5p';
            }elseif($PRON_DESEMPENO  >=5 & $PRON_DESEMPENO < 10){
                $porcentajnoms = 'porce10p';
            }elseif($PRON_DESEMPENO  >=10 & $PRON_DESEMPENO < 15){
                $porcentajnoms = 'porce15p';
            }elseif($PRON_DESEMPENO  >=15 & $PRON_DESEMPENO < 20){
                $porcentajnoms = 'porce20p';
            }elseif($PRON_DESEMPENO  >=20 & $PRON_DESEMPENO < 25){
                $porcentajnoms = 'porce25p';
            }elseif($PRON_DESEMPENO  >=25 & $PRON_DESEMPENO < 30){
                $porcentajnoms = 'porce30p';
            }elseif($PRON_DESEMPENO  >=30 & $PRON_DESEMPENO < 35){
                $porcentajnoms = 'porce35p';
            }elseif($PRON_DESEMPENO  >=35 & $PRON_DESEMPENO < 40){
                $porcentajnoms = 'porce40p';
            }elseif($PRON_DESEMPENO  >=40 & $PRON_DESEMPENO < 45){
                $porcentajnoms = 'porce45p';
            }elseif($PRON_DESEMPENO  >=45 & $PRON_DESEMPENO < 50){
                $porcentajnoms = 'porce50p';
            }elseif($PRON_DESEMPENO  >=50 & $PRON_DESEMPENO < 55){
                $porcentajnoms = 'porce55p';
            }elseif($PRON_DESEMPENO  >=55 & $PRON_DESEMPENO < 60){
                $porcentajnoms = 'porce60p';
            }elseif($PRON_DESEMPENO  >=60 & $PRON_DESEMPENO < 65){
                $porcentajnoms = 'porce65p';
            }elseif($PRON_DESEMPENO  >=65 & $PRON_DESEMPENO < 70){
                $porcentajnoms = 'porce70p';
            }elseif($PRON_DESEMPENO  >=70 & $PRON_DESEMPENO < 75){
                $porcentajnoms = 'porce75p';
            }elseif($PRON_DESEMPENO  >=75 & $PRON_DESEMPENO < 80){
                $porcentajnoms = 'porce80p';
            }elseif($PRON_DESEMPENO  >=80 & $PRON_DESEMPENO < 85){
                $porcentajnoms = 'porce85p';
            }elseif($PRON_DESEMPENO  >=85 & $PRON_DESEMPENO < 90){
                $porcentajnoms = 'porce90p';
            }elseif($PRON_DESEMPENO  >=90 & $PRON_DESEMPENO < 95){
                $porcentajnoms = 'porce95p';
            }elseif($PRON_DESEMPENO  >=95 & $PRON_DESEMPENO < 100){
                $porcentajnoms = 'porce98p';
            }elseif($PRON_DESEMPENO  >=100){
                $porcentajnoms = 'porce100p';
            }

        ?>

    </div>
<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////PROYECTOS



    if(empty($filtrarU) ){

   
        if($adminrol == $radmin){

            $alltaskyPROY = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  mesfinpro LIKE '%$mesme%'  ")->fetch());
    
            $proyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%ATRASADA%' AND mesfinpro LIKE '%$mesme%'  ")->fetch());
            $proyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$mesme%' ")->fetch());
            
            $proySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_FECHA%' AND mesfinpro LIKE '%$mesme%'  ")->fetch());
            $proySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$mesme%'  ")->fetch());
        
            $proySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$mesme%'  ")->fetch());
      

        }elseif($adminrol == $radreg){

            $alltaskyPROY = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
    
            $proyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%ATRASADA%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'   ")->fetch());
            $proyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
            $proySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_FECHA%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            $proySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
        
            $proySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
      
        }elseif($adminrol == $radger){

            $alltaskyPROY = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
    
            $proyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%ATRASADA%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
            $proyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
            
            $proySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_FECHA%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
            $proySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
        
            $proySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
      

        }
          
 
    }else{

    
        if($adminrol == $radmin){

            $alltaskyPROY = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
    
            $proyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%ATRASADA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
            $proyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            $proySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
            $proySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
        
            $proySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());
      

        }elseif($adminrol == $radreg){

            $alltaskyPROY = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
    
            $proyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%ATRASADA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%'  AND unidad LIKE '%$unidadSel%' ")->fetch());
            $proyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            $proySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            $proySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
        
            $proySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
      
        }elseif($adminrol == $radger){

            $alltaskyPROY = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
    
            $proyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%ATRASADA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            $proyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            
            $proySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
            $proySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE  estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
        
            $proySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtaskypro  WHERE   estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND unidad LIKE '%$unidadSel%' ")->fetch());
      

        }
   }

       
    $proyOp = $proyNO1+$proyNO2+$proySI1+$proySI2+$proySI3;
    $proySI = $proySI1+$proySI2;
    $proyNO =$proyNO1+$proyNO2;



    if(empty($alltaskyPROY)){

       $PROYECTO_DESEMPENO = 'SP';

    }else{

        if($proyOp == 0){

            $PROYECTO_DESEMPENO = 'SP';
        }else{
            $PROY_DESEMPENO =  (($proyOp-$proyNO)*100)/$proyOp;
            $PROYECTO_DESEMPENO = number_format($PROY_DESEMPENO,2) ."%";
        }
       
    }
    ?>
        <div id="semaforo_proye">

            <?php

                if($alltaskyPROY == 0 OR empty($alltaskyPROY) OR empty($PROY_DESEMPENO)){
                    $porcentajPROy = 'porceNEp';
                }elseif($PROY_DESEMPENO == 0){
                    $porcentajPROy = 'porce0p';
                }elseif($PROY_DESEMPENO  >0 & $PROY_DESEMPENO < 5){
                    $porcentajPROy = 'porce5p';
                }elseif($PROY_DESEMPENO  >=5 & $PROY_DESEMPENO < 10){
                    $porcentajPROy = 'porce10p';
                }elseif($PROY_DESEMPENO  >=10 & $PROY_DESEMPENO < 15){
                    $porcentajPROy = 'porce15p';
                }elseif($PROY_DESEMPENO  >=15 & $PROY_DESEMPENO < 20){
                    $porcentajPROy = 'porce20p';
                }elseif($PROY_DESEMPENO  >=20 & $PROY_DESEMPENO < 25){
                    $porcentajPROy = 'porce25p';
                }elseif($PROY_DESEMPENO  >=25 & $PROY_DESEMPENO < 30){
                    $porcentajPROy = 'porce30p';
                }elseif($PROY_DESEMPENO  >=30 & $PROY_DESEMPENO < 35){
                    $porcentajPROy = 'porce35p';
                }elseif($PROY_DESEMPENO  >=35 & $PROY_DESEMPENO < 40){
                    $porcentajPROy = 'porce40p';
                }elseif($PROY_DESEMPENO  >=40 & $PROY_DESEMPENO < 45){
                    $porcentajPROy = 'porce45p';
                }elseif($PROY_DESEMPENO  >=45 & $PROY_DESEMPENO < 50){
                    $porcentajPROy = 'porce50p';
                }elseif($PROY_DESEMPENO  >=50 & $PROY_DESEMPENO < 55){
                    $porcentajPROy = 'porce55p';
                }elseif($PROY_DESEMPENO  >=55 & $PROY_DESEMPENO < 60){
                    $porcentajPROy = 'porce60p';
                }elseif($PROY_DESEMPENO  >=60 & $PROY_DESEMPENO < 65){
                    $porcentajPROy = 'porce65p';
                }elseif($PROY_DESEMPENO  >=65 & $PROY_DESEMPENO < 70){
                    $porcentajPROy = 'porce70p';
                }elseif($PROY_DESEMPENO  >=70 & $PROY_DESEMPENO < 75){
                    $porcentajPROy = 'porce75p';
                }elseif($PROY_DESEMPENO  >=75 & $PROY_DESEMPENO < 80){
                    $porcentajPROy = 'porce80p';
                }elseif($PROY_DESEMPENO  >=80 & $PROY_DESEMPENO < 85){
                    $porcentajPROy = 'porce85p';
                }elseif($PROY_DESEMPENO  >=85 & $PROY_DESEMPENO < 90){
                    $porcentajPROy = 'porce90p';
                }elseif($PROY_DESEMPENO  >=90 & $PROY_DESEMPENO < 95){
                    $porcentajPROy = 'porce95p';
                }elseif($PROY_DESEMPENO  >=95 & $PROY_DESEMPENO < 100){
                    $porcentajPROy = 'porce98p';
                }elseif($PROY_DESEMPENO  >=100){
                    $porcentajPROy = 'porce100p';
                }

            ?>

        </div>
    <?php

    
    ////////////////////////////////////////////////////////////////////////////////////////TASKY


        if(empty($filtrarU) ){

            if($adminrol == $radmin){
                $alltasky = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND mesfinpro LIKE '%$mesme%'")->fetch());    

                $tkyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%ATRASADA%'  AND mesfinpro LIKE '%$mesme%' ")->fetch());
                $tkyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$mesme%'")->fetch());
                
                $tkySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_FECHA%'  AND mesfinpro LIKE '%$mesme%'")->fetch());
                $tkySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$mesme%' ")->fetch());
        
                $tkySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$mesme%'")->fetch());
            }elseif($adminrol == $radreg){
                $alltasky = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());    

                $tkyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%ATRASADA%'  AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $tkyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                
                $tkySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_FECHA%'  AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $tkySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$mesme%'AND region LIKE '%$userAcroregion%'  ")->fetch());
        
                $tkySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$mesme%' AND region LIKE '%$userAcroregion%' ")->fetch());
            }if($adminrol == $radger){
                $alltasky = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND mesfinpro LIKE '%$mesme%'")->fetch());    

                $tkyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%ATRASADA%'  AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
                $tkyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
                
                $tkySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_FECHA%'  AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
                $tkySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
        
                $tkySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$mesme%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
            }

          
    
        }else{

           
            if($adminrol == $radmin){
                $alltasky = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ")->fetch());    

                $tkyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%ATRASADA%'  AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
                $tkyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
                
                $tkySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_FECHA%'  AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
                $tkySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
        
                $tkySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$regionSel%'AND unidad LIKE '%$unidadSel%'  ")->fetch());
            }elseif($adminrol == $radreg){
                $alltasky = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND region LIKE '%$regionSel%' ")->fetch());    

                $tkyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%ATRASADA%'  AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND region LIKE '%$regionSel%' ")->fetch());
                $tkyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%'  AND region LIKE '%$regionSel%' ")->fetch());
                
                $tkySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_FECHA%'  AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%'  AND region LIKE '%$regionSel%' ")->fetch());
                $tkySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$periodoSel%'AND region LIKE '%$userAcroregion%' AND region LIKE '%$regionSel%'  ")->fetch());
        
                $tkySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$periodoSel%' AND region LIKE '%$userAcroregion%' AND region LIKE '%$regionSel%' ")->fetch());
            }elseif($adminrol == $radger){
                $alltasky = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND mesfinpro LIKE '%$periodoSel%'")->fetch());    

                $tkyNO1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%ATRASADA%'  AND mesfinpro LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
                $tkyNO2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%NO_CUMPLIDA%' AND mesfinpro LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
                
                $tkySI1 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_FECHA%'  AND mesfinpro LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
                $tkySI2 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%DESPUES_DE_FECHA%' AND mesfinpro LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
        
                $tkySI3 = current($dbo->query("SELECT COUNT(*) FROM $tabtask  WHERE activo = 'SI' AND estatus LIKE '%EN_CURSO%' AND mesfinpro LIKE '%$periodoSel%' AND unidad LIKE '%$userUnidadAcronu%' ")->fetch());
            }
 
        }
                        
     

  

$servtkySI = $tkySI1+$tkySI2;
$servtkyNO =$tkyNO1+$tkyNO2+$tkySI3;

$servOPky = $servtkyNO+$servtkySI;

if($alltasky == 0 OR $servOPky == 0){

    $TASK_DESEMPENO = 'ST';

 }else{
     $TASK_DESEMP =  (($servOPky-$servtkyNO)*100)/$servOPky;
     $TASK_DESEMPENO = number_format($TASK_DESEMP,2) ."%";
 }


 ?>
 <div id="semaforo_task">

     <?php

         if( $alltasky == 0 OR empty($alltasky) OR empty($TASK_DESEMP)){
             $porcentajtask = 'porceNEp';
         }elseif($TASK_DESEMP == 0){
             $porcentajtask = 'porce0p';
         }elseif($TASK_DESEMP  >0 & $TASK_DESEMP < 5){
             $porcentajtask = 'porce5p';
         }elseif($TASK_DESEMP  >=5 & $TASK_DESEMP < 10){
             $porcentajtask = 'porce10p';
         }elseif($TASK_DESEMP  >=10 & $TASK_DESEMP < 15){
             $porcentajtask = 'porce15p';
         }elseif($TASK_DESEMP  >=15 & $TASK_DESEMP < 20){
             $porcentajtask = 'porce20p';
         }elseif($TASK_DESEMP  >=20 & $TASK_DESEMP < 25){
             $porcentajtask = 'porce25p';
         }elseif($TASK_DESEMP  >=25 & $TASK_DESEMP < 30){
             $porcentajtask = 'porce30p';
         }elseif($TASK_DESEMP  >=30 & $TASK_DESEMP < 35){
             $porcentajtask = 'porce35p';
         }elseif($TASK_DESEMP  >=35 & $TASK_DESEMP < 40){
             $porcentajtask = 'porce40p';
         }elseif($TASK_DESEMP  >=40 & $TASK_DESEMP < 45){
             $porcentajtask = 'porce45p';
         }elseif($TASK_DESEMP  >=45 & $TASK_DESEMP < 50){
             $porcentajtask = 'porce50p';
         }elseif($TASK_DESEMP  >=50 & $TASK_DESEMP < 55){
             $porcentajtask = 'porce55p';
         }elseif($TASK_DESEMP  >=55 & $TASK_DESEMP < 60){
             $porcentajtask = 'porce60p';
         }elseif($TASK_DESEMP  >=60 & $TASK_DESEMP < 65){
             $porcentajtask = 'porce65p';
         }elseif($TASK_DESEMP  >=65 & $TASK_DESEMP < 70){
             $porcentajtask = 'porce70p';
         }elseif($TASK_DESEMP  >=70 & $TASK_DESEMP < 75){
             $porcentajtask = 'porce75p';
         }elseif($TASK_DESEMP  >=75 & $TASK_DESEMP < 80){
             $porcentajtask = 'porce80p';
         }elseif($TASK_DESEMP  >=80 & $TASK_DESEMP < 85){
             $porcentajtask = 'porce85p';
         }elseif($TASK_DESEMP  >=85 & $TASK_DESEMP < 90){
             $porcentajtask = 'porce90p';
         }elseif($TASK_DESEMP  >=90 & $TASK_DESEMP < 95){
             $porcentajtask = 'porce95p';
         }elseif($TASK_DESEMP  >=95 & $TASK_DESEMP < 100){
             $porcentajtask = 'porce98p';
         }elseif($TASK_DESEMP  >=100){
             $porcentajtask = 'porce100p';
         }

     ?>

 </div>
<?php


/*///////////////////////////////////////////////////////////////////////////////////SATISFACCION PACIENTES*/


///////SATISFACCION PACIENTES
/*

    if(empty($filtrarU)){

        $SUM_PP1 = current($dbo->query("SELECT SUM(acumulado) FROM $tabsema WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS CLINICOS'  AND mesnum LIKE '%$mesme%'  ")->fetch());
        $SUM_PP2 = current($dbo->query("SELECT SUM(acumulado) FROM $tabsema WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS DE SOPORTE'  AND mesnum LIKE '%$mesme%'  ")->fetch());
        
        
        $ALL_PP1 = current($dbo->query("SELECT COUNT(acumulado) FROM $tabsema  WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS CLINICOS' AND mesnum LIKE '%$mesme%' ")->fetch());
        $ALL_PP2 = current($dbo->query("SELECT COUNT(acumulado) FROM $tabsema  WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS DE SOPORTE' AND mesnum LIKE '%$mesme%' ")->fetch());
       
       
        if($ALL_PP1 == 0 OR empty($ALL_PP1)){

            $satisPx = 'SD';
          
        }else{

            $allsum = $SUM_PP1+$SUM_PP2;
            $allpp =  $ALL_PP1+$ALL_PP2;

            $satisPxProm = $allsum/$allpp;

            $satisPx = number_format($satisPxProm,2).'%';
        
        }
    
    }else{

        if($userUnid == 'FIFTY' AND $regionSel == 'FIFTY'){

            
            $SUM_PP1 = current($dbo->query("SELECT SUM(acumulado) FROM $tabsema WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS CLINICOS'  AND mesnum LIKE '%$periodoSel%'  ")->fetch());
            $SUM_PP2 = current($dbo->query("SELECT SUM(acumulado) FROM $tabsema WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS DE SOPORTE'  AND mesnum LIKE '%$periodoSel%'  ")->fetch());
            
            
            $ALL_PP1 = current($dbo->query("SELECT COUNT(acumulado) FROM $tabsema  WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS CLINICOS' AND mesnum LIKE '%$periodoSel%' ")->fetch());
            $ALL_PP2 = current($dbo->query("SELECT COUNT(acumulado) FROM $tabsema  WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS DE SOPORTE' AND mesnum LIKE '%$periodoSel%' ")->fetch());
        ECHO  $SUM_PP2;

            if($ALL_PP1 == 0 OR empty($ALL_PP1)){

                $satisPx = 'SD';
              
            }else{

                $allsum = $SUM_PP1+$SUM_PP2;
                $allpp =  $ALL_PP1+$ALL_PP2;

                $satisPxProm = $allsum/$allpp;

                $satisPx = number_format($satisPxProm,2).'%';
            
            }

        }else{


                      
            $SUM_PP1 = current($dbo->query("SELECT SUM(acumulado) FROM $tabsema WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS CLINICOS'  AND mesnum LIKE '%$periodoSel%' AND unidad LIKE '%$userUnid%' AND region LIKE '%$regionSel%' ")->fetch());
            $SUM_PP2 = current($dbo->query("SELECT SUM(acumulado) FROM $tabsema WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS DE SOPORTE'  AND mesnum LIKE '%$periodoSel%' AND unidad LIKE '%$userUnid%' AND region LIKE '%$regionSel%' ")->fetch());
            
            
            $ALL_PP1 = current($dbo->query("SELECT COUNT(acumulado) FROM $tabsema  WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS CLINICOS' AND mesnum LIKE '%$periodoSel%' AND unidad LIKE '%$userUnid%' AND region LIKE '%$regionSel%' ")->fetch());
            $ALL_PP2 = current($dbo->query("SELECT COUNT(acumulado) FROM $tabsema  WHERE  yearall LIKE '%$year%' AND activo = 'SI' AND concepto = 'SATISFACION DEL PACIENTE SERVICIOS DE SOPORTE' AND mesnum LIKE '%$periodoSel%' AND unidad LIKE '%$userUnid%' AND region LIKE '%$regionSel%' ")->fetch());
        

            if($ALL_PP1 == 0 OR empty($ALL_PP1)){

                $satisPx = 'SD';
            
            }else{

                $allsum = $SUM_PP1+$SUM_PP2;
                $allpp =  $ALL_PP1+$ALL_PP2;

                $satisPxProm = $allsum/$allpp;

                $satisPx = number_format($satisPxProm,2).'%';
            
            }
         
        }
    
    
    
    }

*/


 
