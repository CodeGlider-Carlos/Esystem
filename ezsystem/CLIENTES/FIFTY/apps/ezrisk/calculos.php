


    <div id="NOMS">

        <?php

            if($adminrol == $radmin){

                $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%SSA%'")->fetch());
                $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%SSA%'")->fetch());
            

                $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%STPS%'")->fetch());
                $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%STPS%'")->fetch());
            
           
                $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%NOMXOT%'")->fetch());
                $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%NOMXOT%'")->fetch());
           
           
            }elseif($adminrol == $radreg){

                $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND region LIKE '%$userAcroregion%' AND nom LIKE '%SSA%'")->fetch());
                $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND region LIKE '%$userAcroregion%' AND nom LIKE '%SSA%'")->fetch());
            

                $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND region LIKE '%$userAcroregion%' AND nom LIKE '%STPS%'")->fetch());
                $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND region LIKE '%$userAcroregion%' AND nom LIKE '%STPS%'")->fetch());
            
           
                $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND region LIKE '%$userAcroregion%' AND nom LIKE '%NOMXOT%'")->fetch());
                $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND region LIKE '%$userAcroregion%' AND nom LIKE '%NOMXOT%'")->fetch());
           

            }elseif($adminrol == $radger){


                $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%SSA%'")->fetch());
                $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'   AND nom LIKE '%SSA%'")->fetch());
            

                $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'   AND nom LIKE '%STPS%'")->fetch());
                $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%STPS%'")->fetch());
            
           
                $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%NOMXOT%'")->fetch());
                $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND nom LIKE '%NOMXOT%'")->fetch());
           

            }elseif($adminrol == $radman OR $adminrol == $radsup){

                $SSA_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND nom LIKE '%SSA%'")->fetch());
                $SSA_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND nom LIKE '%SSA%'")->fetch());
            

                $STPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND nom LIKE '%STPS%'")->fetch());
                $STPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND nom LIKE '%STPS%'")->fetch());
            
           
                $NOMXOT_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND nom LIKE '%NOMXOT%'")->fetch());
                $NOMXOT_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND nom LIKE '%NOMXOT%'")->fetch());
           
            }

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

        ?>

    </div>


    <div id="%ESTANDARESYPROCESOS">
  

        <?php


            if($adminrol == $radmin){

                $AESP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%AESP%'")->fetch());
                $AESP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND macro LIKE '%AESP%'")->fetch());
            
                $MISP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MISP%'")->fetch());
                $MISP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MISP%'")->fetch());
                $MISPFX = $MISP_ALL-$MISP_NO;


                $MMU_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND macro LIKE '%MMU%'")->fetch());
                $MMU_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MMU%'")->fetch());
                    
                $PCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%PCI%'  ")->fetch());
                $PCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%PCI%' ")->fetch());
            
                $FMS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%FMS%'")->fetch());
                $FMS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%FMS%'")->fetch());
            
                $SQE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%SQE%'")->fetch());
                $SQE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%SQE%'")->fetch());
            
                $QPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%QPS%'")->fetch());
                $QPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND macro LIKE '%QPS%'")->fetch());
                $QPSFX = $QPS_ALL-$QPS_NO;



                $GLD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND macro LIKE '%GLD%'")->fetch());
                $GLD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%GLD%'")->fetch());
            
                $ACC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND macro LIKE '%ACC%'  ")->fetch());
                $ACC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%ACC%' ")->fetch());
               
                $PFR_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%PFR%'")->fetch());
                $PFR_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%PFR%'")->fetch());
            
                $AOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%AOP%'")->fetch());
                $AOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%AOP%'")->fetch());
                
                $SAD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%SAD%'")->fetch());
                $SAD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%SAD%'")->fetch());
            
                $COP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%COP%' ")->fetch());
                $COP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%COP%' ")->fetch());
                
                $ASC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%ASC%' ")->fetch());
                $ASC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%ASC%' ")->fetch());
            
                $PFE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%PFE%'")->fetch());
                $PFE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%PFE%'")->fetch());
            
                $MCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MCI%'")->fetch());
                $MCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MCI%'")->fetch());
            
                $MUD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MUD%'")->fetch());
                $MUD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%MUD%'")->fetch());
                
                $SOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%SOP%'")->fetch());
                $SOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%SOP%'")->fetch());
                
            }elseif($adminrol == $radreg){

                $AESP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%AESP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $AESP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND macro LIKE '%AESP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $MISP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND macro LIKE '%MISP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $MISP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%MISP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $MISPFX = $MISP_ALL-$MISP_NO;

                $MMU_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%MMU%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $MMU_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MMU%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                    
                $PCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%PCI%' AND macro LIKE '%PCI%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $PCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%PCI%' AND macro LIKE '%PCI%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $FMS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%FMS%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $FMS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%FMS%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $SQE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%SQE%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $SQE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SQE%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $QPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%QPS%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $QPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%QPS%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $QPSFX = $QPS_ALL-$QPS_NO;

                $GLD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%GLD%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $GLD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%GLD%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $ACC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%ACC%' AND macro LIKE '%ACC%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $ACC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ACC%' AND macro LIKE '%ACC%' AND region LIKE '%$userAcroregion%'  ")->fetch());

                $PFR_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFR%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $PFR_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFR%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $AOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%AOP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $AOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%AOP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                
                $SAD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SAD%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $SAD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SAD%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $COP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%COP%' AND macro LIKE '%COP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $COP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%COP%' AND macro LIKE '%COP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                
                $ASC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ASC%' AND macro LIKE '%ASC%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $ASC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ASC%' AND macro LIKE '%ASC%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $PFE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFE%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $PFE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFE%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $MCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MCI%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $MCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MCI%' AND region LIKE '%$userAcroregion%'  ")->fetch());
            
                $MUD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MUD%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $MUD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MUD%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                
                $SOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SOP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                $SOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SOP%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                

            }elseif($adminrol == $radger){

                $AESP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%AESP%'")->fetch());
                $AESP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%AESP%'")->fetch());
            
                $MISP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MISP%'")->fetch());
                $MISP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MISP%'")->fetch());
                $MISPFX = $MISP_ALL-$MISP_NO;

                $MMU_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MMU%'")->fetch());
                $MMU_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MMU%'")->fetch());
                    
                $PCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PCI%' AND macro LIKE '%PCI%' ")->fetch());
                $PCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PCI%' AND macro LIKE '%PCI%'")->fetch());
            
                $FMS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%FMS%'")->fetch());
                $FMS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%FMS%'")->fetch());
            
                $SQE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SQE%'")->fetch());
                $SQE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%'  AND falla LIKE '%SQE%'")->fetch());
            
                $QPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%QPS%'")->fetch());
                $QPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%QPS%'")->fetch());
                $QPSFX = $QPS_ALL-$QPS_NO;

                $GLD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%GLD%'")->fetch());
                $GLD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%GLD%'")->fetch());
            
                $ACC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ACC%' AND macro LIKE '%ACC%' ")->fetch());
                $ACC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ACC%' AND macro LIKE '%ACC%'")->fetch());

                $PFR_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFR%'")->fetch());
                $PFR_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFR%'")->fetch());
            
                $AOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%AOP%'")->fetch());
                $AOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%AOP%'")->fetch());
                
                $SAD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SAD%'")->fetch());
                $SAD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SAD%'")->fetch());
            
                $COP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%COP%' AND macro LIKE '%COP%'")->fetch());
                $COP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%COP%' AND macro LIKE '%COP%'")->fetch());
                
                $ASC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ASC%' AND macro LIKE '%ASC%'")->fetch());
                $ASC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%ASC%' AND macro LIKE '%ASC%'")->fetch());
            
                $PFE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFE%'")->fetch());
                $PFE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%PFE%'")->fetch());
            
                $MCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MCI%'")->fetch());
                $MCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MCI%'")->fetch());
            
                $MUD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MUD%'")->fetch());
                $MUD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%MUD%'")->fetch());
                
                $SOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SOP%'")->fetch());
                $SOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$depto%' AND falla LIKE '%SOP%'")->fetch());
                

            }elseif($adminrol == $radman){

                $AESP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%AESP%'")->fetch());
                $AESP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%AESP%'")->fetch());
            
                $MISP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%MISP%'")->fetch());
                $MISP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%MISP%'")->fetch());
                $MISPFX = $MISP_ALL-$MISP_NO;

                $MMU_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%MMU%'")->fetch());
                $MMU_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%MMU%'")->fetch());
                    
                $PCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%PCI%' AND macro LIKE '%PCI%' ")->fetch());
                $PCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%PCI%' AND macro LIKE '%PCI%'")->fetch());
            
                $FMS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%FMS%'")->fetch());
                $FMS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%FMS%'")->fetch());
            
                $SQE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%SQE%'")->fetch());
                $SQE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%SQE%'")->fetch());
            
                $QPS_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%QPS%'")->fetch());
                $QPS_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%QPS%'")->fetch());
                $QPSFX = $QPS_ALL-$QPS_NO;
                
                $GLD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%GLD%'")->fetch());
                $GLD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%GLD%'")->fetch());
            
                $ACC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%ACC%' AND macro LIKE '%ACC%' ")->fetch());
                $ACC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%ACC%' AND macro LIKE '%ACC%'")->fetch());

                $PFR_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%PFR%'")->fetch());
                $PFR_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%PFR%'")->fetch());
            
                $AOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%AOP%'")->fetch());
                $AOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%AOP%'")->fetch());
                
                $SAD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%' AND falla LIKE '%SAD%'")->fetch());
                $SAD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%SAD%'")->fetch());
            
                $COP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%COP%' AND macro LIKE '%COP%'")->fetch());
                $COP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%COP%' AND macro LIKE '%COP%'")->fetch());
                
                $ASC_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%ASC%' AND macro LIKE '%ASC%'")->fetch());
                $ASC_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%ASC%' AND macro LIKE '%ASC%'")->fetch());
            
                $PFE_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%PFE%'")->fetch());
                $PFE_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%PFE%'")->fetch());
            
                $MCI_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%MCI%'")->fetch());
                $MCI_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%MCI%'")->fetch());
            
                $MUD_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%MUD%'")->fetch());
                $MUD_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%MUD%'")->fetch());
                
                $SOP_ALL = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%SOP%'")->fetch());
                $SOP_NO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE  ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND dep LIKE '%$userLog%'  AND falla LIKE '%SOP%'")->fetch());
                
            }


            if($AESP_ALL== 0){
                $porcetxt_AESP = 'NE';
            }else{
                $porce_AESP =  $AESP_NO*100/$AESP_ALL;   
                $porcetxt_AESP = number_format($porce_AESP,2) ."%";
            }

            if($MISP_ALL== 0){
                $porcetxt_MISP = 'NE';
            }else{
                $porce_MISP =  $MISP_NO*100/$MISP_ALL;  
                $porcetxt_MISP = number_format($porce_MISP,2) ."%";
            }       

            if($MMU_ALL== 0){
                $porcetxt_MMU = 'NE';
            }else{
                $porce_MMU =  $MMU_NO*100/$MMU_ALL;
                $porcetxt_MMU = number_format($porce_MMU,2) ."%";
            }   
            
            if($PCI_ALL== 0){
                $porcetxt_PCI = 'NE';
            }else{
                $porce_PCI =  $PCI_NO*100/$PCI_ALL;
                $porcetxt_PCI = number_format($porce_PCI,2) ."%";
            }

            if($FMS_ALL== 0){
                $porcetxt_FMS = 'NE';
            }else{
                $porce_FMS =  $FMS_NO*100/$FMS_ALL;
                $porcetxt_FMS = number_format($porce_FMS,2) ."%";
            }

            if($SQE_ALL== 0){
                $porcetxt_SQE = 'NE';
            }else{
                $porce_SQE =  $SQE_NO*100/$SQE_ALL;
                $porcetxt_SQE = number_format($porce_SQE,2) ."%";
            }
            
            if($QPS_ALL== 0){
                $porcetxt_QPS = 'NE';
            }else{
                $porce_QPS =  $QPS_NO*100/$QPS_ALL;
                $porcetxt_QPS = number_format($porce_QPS,2) ."%";
            }
            
            if($GLD_ALL== 0){
                $porcetxt_GLD = 'NE';
            }else{
                $porce_GLD =  $GLD_NO*100/$GLD_ALL;
                $porcetxt_GLD = number_format($porce_GLD,2) ."%";
            }

            if($ACC_ALL== 0){
                $porcetxt_ACC = 'NE';
            }else{
                $porce_ACC =  $ACC_NO*100/$ACC_ALL;
                $porcetxt_ACC = number_format($porce_ACC,2) ."%";
            }
            

            if($PFR_ALL== 0){
                $porcetxt_PFR = 'NE';
            }else{
                $porce_PFR =  $PFR_NO*100/$PFR_ALL;
                $porcetxt_PFR = number_format($porce_PFR,2) ."%";
            }
            if($AOP_ALL== 0){
                $porcetxt_AOP = 'NE';
            }else{
                $porce_AOP =  $AOP_NO*100/$AOP_ALL;
                $porcetxt_AOP = number_format($porce_AOP,2) ."%";
            }
            
            if($SAD_ALL== 0){
                $porcetxt_SAD = 'NE';
            }else{
                $porce_SAD =  $SAD_NO*100/$SAD_ALL;
                $porcetxt_SAD = number_format($porce_SAD,2) ."%";
            }
            
            if($COP_ALL== 0){
                $porcetxt_COP = 'NE';
            }else{
                $porce_COP =  $COP_NO*100/$COP_ALL;
                $porcetxt_COP = number_format($porce_COP,2) ."%";
            }
            
            if($ASC_ALL== 0){
                $porcetxt_ASC = 'NE';
            }else{
                $porce_ASC =  $ASC_NO*100/$ASC_ALL;
                $porcetxt_ASC = number_format($porce_ASC,2) ."%";
            }
            
            if($PFE_ALL== 0){
                $porcetxt_PFE = 'NE';
            }else{
                $porce_PFE =  $PFE_NO*100/$PFE_ALL;
                $porcetxt_PFE = number_format($porce_PFE,2) ."%";
            }
            
            if($MCI_ALL== 0){
                $porcetxt_MCI = 'NE';
            }else{
                $porce_MCI =  $MCI_NO*100/$MCI_ALL;
                $porcetxt_MCI = number_format($porce_MCI,2) ."%";
            }

       
            if($MUD_ALL== 0){
                $porcetxt_MUD = 'NE';
            }else{
                $porce_MUD =  $MUD_NO*100/$MUD_ALL;
                $porcetxt_MUD = number_format($porce_MUD,2) ."%";
            }
        
            if($SOP_ALL== 0){
                $porcetxt_SOP = 'NE';
            }else{
                $porce_SOP =  $SOP_NO*100/$SOP_ALL;
                $porcetxt_SOP = number_format($porce_SOP,2) ."%";
            }
        ?>
    
    </div>


    <div id="PROCESOS">

        <?php


            ///////CLAVE

            $CLAVE_ALL =  $ACC_ALL+$PFR_ALL+$COP_ALL+$SAD_ALL+$AOP_ALL+$ASC_ALL+$PFE_ALL;
            $CLAVE_NO = $ACC_NO+$PFR_NO+$COP_NO+$SAD_NO+$AOP_NO+$ASC_NO+$PFE_NO;

     
            $CALVEFX = $CLAVE_ALL-$CLAVE_NO;

            if($CLAVE_ALL== 0){

                $porceCLAVE = '';

            }else{
                $porceCLAVE =  $CLAVE_NO*100/$CLAVE_ALL;   
               
            }
            ///////ESENCIALES



            ///////CRITICOS


            $CRITICOS_ALL =  $MMU_ALL+$PCI_ALL+$FMS_ALL+$SQE_ALL;
            $CRITICOS_NO = $MMU_NO+$PCI_NO+$FMS_NO+$SQE_NO;

            $CRITICOSFX = $CRITICOS_ALL-$CRITICOS_NO;
            if($CRITICOS_ALL== 0){

               
                $porceCRITICOS = '';

            }else{
                $porceCRITICOS =  $CRITICOS_NO*100/$CRITICOS_ALL;   
               
            }




            ///////SOPORTE


            $SOPORTE_ALL =  $MUD_ALL+$SOP_ALL;
            $SOPORTE_NO = $MUD_NO+$SOP_NO;


            if($SOPORTE_ALL== 0){

                $porceSOPORTE = '';

            }else{
                $porceSOPORTE =  $SOPORTE_NO*100/$SOPORTE_ALL;   
               
            }




            
            ///////GESTION


            $GESTION_ALL =  $GLD_ALL+$MCI_ALL;
            $GESTION_NO = $GLD_NO+$MCI_NO;

            $GESTIONFX = $GESTION_ALL-$GESTION_NO;
            if($GESTION_ALL== 0){

                $porceGESTION = '';

            }else{
                $porceGESTION =  $GESTION_NO*100/$GESTION_ALL;   
               
            }

        

            ///////CALIDAD




        ?>

    </div>


