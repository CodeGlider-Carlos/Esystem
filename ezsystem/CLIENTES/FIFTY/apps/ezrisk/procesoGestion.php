            


<div id="conttabla">

    <table id="servbarras">

                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th id="longbarr"></th>
                </tr>

                
                <?php


  
                    /////////////////////////////////////////GRAFICO DE PROCESOS MISIONALES///////////////////////////////////////////////////////////

                        $tabmacXEnfx1= "SELECT * FROM $enfxtab WHERE macro = 'GLD'  ";                
                        $qtabmacXEnfx1 = $dbo->query($tabmacXEnfx1);
        
                        while ($fila = $qtabmacXEnfx1->fetch(PDO::FETCH_ASSOC)) {
                            /////////////////////////////////////////GRAFICO DE PROCESOS MISIONALES///////////////////////////////////////////////////////////
                            $nombrenfoqc1 =$fila['enfoque'];
                            $ididenfx1 =$fila['idenfx'];
                            $namemacC =$fila['macro'];

                            if($adminrol == $radmin){


                                $nopGDL = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx LIKE  '%$ididenfx1%' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosiGDL = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx LIKE  '%$ididenfx1%' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' ")->fetch());
                               

                                
                            }elseif($adminrol == $radreg){


                                $nopGDL = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%'  AND region LIKE '%$userAcroregion%' ")->fetch());
                                $nosiGDL = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%' ")->fetch());
                            

                            }elseif($adminrol == $radger){


                                $nopGDL = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosiGDL = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }elseif($adminrol == $radman OR $adminrol == $radsup){


                                $nopGDL = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$userLog%' AND riesgo = 'NO' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosiGDL = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$userLog%' AND riesgo = 'SI' AND macro LIKE '%$namemacC%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }

                            ?>

                                <tr>
                                    <td class="sombra center"> <?php echo $namemacC; ?></td> 
                                    <td class="sombra"> <?php echo $nombrenfoqc1; ?></td> 
                                 

                                        <?php
                                        
                                        $servopGDL = $nosiGDL + $nopGDL;

                                        if($servopGDL >0){

                                            $DEGDLtext =  (($servopGDL-$nosiGDL)*100)/$servopGDL;

                                            if($DEGDLtext >= 0 & $DEGDLtext <65 ){
                                                ?>
                                                    <td class="sombra1 seBlack center">
                                                        <?php
                                                            echo number_format($DEGDLtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DEGDLtext >= 65 & $DEGDLtext <75 ){
                                                ?>
                                                    <td class="sombra2 sePINKrojo center">
                                                        <?php
                                                            echo number_format($DEGDLtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DEGDLtext >= 75 & $DEGDLtext <85 ){
                                                ?>
                                                    <td class="sombra3 sePINK center">
                                                        <?php
                                                            echo number_format($DEGDLtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DEGDLtext >= 85 & $DEGDLtext <95 ){
                                                ?>
                                                    <td class="sombra4 seGREEN center">
                                                        <?php
                                                            echo number_format($DEGDLtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DEGDLtext >= 95  ){
                                                ?>
                                                    <td class="sombra5 seBLUE center">
                                                        <?php
                                                            echo number_format($DEGDLtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }

                                        }else{

                                          
                                            ?>
                                            <td class="sombra center">
                                                <?php
                                                   echo 'NE';
                                                ?>                                            
                                            </td> 
                                        <?php
                                        }
                                            
                                        ?>


                                 
                                    <td>
                                        <?php
                                        
                                        $servopGDL = $nosiGDL + $nopGDL;
                                        if($servopGDL >0){
                                            $DESOPGDL =  (($servopGDL-$nosiGDL)*100)/$servopGDL;
                                        }

                                                    if(empty($servopGDL) ){
                                                        ?>

                                                            <div  class="agune seBlack varGuno"></div>

                                                        <?php
                                                    }else{

                                        
                                                    if($DESOPGDL >= 0 & $DESOPGDL <1){
                                                    
                                                        ?>

                                                            <div  class="aguj0s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOPGDL >= 1 & $DESOPGDL <5){

                                                        ?>

                                                            <div  class="aguj3s seBlack varGuno"></div>

                                                        <?php


                                                    }elseif($DESOPGDL >= 5 & $DESOPGDL <15){

                                                        ?>

                                                            <div  class="aguj10s seBlack varGuno"></div>

                                                        <?php


                                                    }elseif($DESOPGDL >= 15 & $DESOPGDL <25){

                                                        ?>

                                                            <div  class="aguj20s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOPGDL >= 25 & $DESOPGDL <35){

                                                        ?>

                                                        <div  class="aguj30s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOPGDL >= 35 & $DESOPGDL <45){

                                                        ?>

                                                            <div  class="aguj40s seBlack varGuno"></div>

                                                        <?php

                                                    
                                                    }elseif($DESOPGDL >= 45 & $DESOPGDL <55){

                                                        ?>

                                                            <div  class="aguj50s seBlack varGuno"></div>

                                                        <?php


                                                    }elseif($DESOPGDL >= 55 & $DESOPGDL <65){

                                                        ?>

                                                            <div  class="aguj60s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOPGDL >= 65 & $DESOPGDL <75){


                                                        ?>

                                                            <div  class="aguj70s seBlack varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOPGDL >= 75 & $DESOPGDL <85){


                                                        ?>

                                                            <div  class="aguj80s sePINKrojo varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOPGDL >= 85 & $DESOPGDL <95){

                                                        ?>

                                                            <div  class="aguj90s sePINK varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOPGDL >= 95 & $DESOPGDL <98){

                                                        ?>

                                                            <div  class="aguj97s seGREEN varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOPGDL >= 98){

                                                        ?>

                                                            <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                        <?php
                                                    }
                                            
                                            } ?>
                                        
                                        
                                    
                                    </td>
                                </tr>

                            <?php
                        }


                        ?>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                        <?php

                        $tabmacXEnfx2= "SELECT * FROM $enfxtab WHERE  macro = 'MCI' ";                
                        $qtabmacXEnfx2 = $dbo->query($tabmacXEnfx2);
        
                        while ($fila = $qtabmacXEnfx2->fetch(PDO::FETCH_ASSOC)) {
                            /////////////////////////////////////////GRAFICO DE PROCESOS MISIONALES///////////////////////////////////////////////////////////
                            $nombrenfoqc2 =$fila['enfoque'];
                            $ididenfx2 =$fila['idenfx'];
                            $namemacC2 =$fila['macro'];

                            if($adminrol == $radmin){


                                $nopB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosiB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }elseif($adminrol == $radreg){


                                $nopB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%'  AND region LIKE '%$userAcroregion%' ")->fetch());
                                $nosiB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%' ")->fetch());
                            

                            }elseif($adminrol == $radger){


                                $nopB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosiB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }elseif($adminrol == $radman OR $adminrol == $radsup){


                                $nopB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND idenfx =  '$ididenfx1' AND dep LIKE '%$userLog%' AND riesgo = 'NO' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosiB = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$unidadcli' AND idenfx =  '$ididenfx1' AND dep LIKE '%$userLog%' AND riesgo = 'SI' AND macro LIKE '%$namemacC2%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }

                            ?>

                                <tr>
                                    <td class="sombra center"> <?php echo $namemacC2; ?></td> 
                                    <td class="sombra"> <?php echo $nombrenfoqc2; ?></td> 
                                 

                                        <?php
                                        
                                        $servopB = $nosiB + $nopB;

                                        if($servopB >0){

                                            $DESOPtext =  (($servopB-$nosiB)*100)/$servopB;

                                            if($DESOPtext >= 0 & $DESOPtext <65 ){
                                                ?>
                                                    <td class="sombra1 seBlack center">
                                                        <?php
                                                            echo number_format($DESOPtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DESOPtext >= 65 & $DESOPtext <75 ){
                                                ?>
                                                    <td class="sombra2 sePINKrojo center">
                                                        <?php
                                                            echo number_format($DESOPtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DESOPtext >= 75 & $DESOPtext <85 ){
                                                ?>
                                                    <td class="sombra3 sePINK center">
                                                        <?php
                                                            echo number_format($DESOPtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DESOPtext >= 85 & $DESOPtext <95 ){
                                                ?>
                                                    <td class="sombra4 seGREEN center">
                                                        <?php
                                                            echo number_format($DESOPtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }elseif($DESOPtext >= 95  ){
                                                ?>
                                                    <td class="sombra5 seBLUE center">
                                                        <?php
                                                            echo number_format($DESOPtext,2).'%';
                                                        ?>                                            
                                                    </td> 
                                                <?php
                                            }

                                        }else{

                                          
                                            ?>
                                            <td class="sombra center">
                                                <?php
                                                   echo 'NE';
                                                ?>                                            
                                            </td> 
                                        <?php
                                        }
                                            
                                        ?>


                                 
                                    <td>
                                        <?php
                                        
                                        $servop = $nosi + $nop;
                                        if($servop >0){
                                            $DESOP =  (($servop-$nosi)*100)/$servop;
                                        }

                                                    if(empty($servop) ){
                                                        ?>

                                                            <div  class="agune seBlack varGuno"></div>

                                                        <?php
                                                    }else{

                                        
                                                    if($DESOP >= 0 & $DESOP <1){
                                                    
                                                        ?>

                                                            <div  class="aguj0s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOP >= 1 & $DESOP <5){

                                                        ?>

                                                            <div  class="aguj3s seBlack varGuno"></div>

                                                        <?php


                                                    }elseif($DESOP >= 5 & $DESOP <15){

                                                        ?>

                                                            <div  class="aguj10s seBlack varGuno"></div>

                                                        <?php


                                                    }elseif($DESOP >= 15 & $DESOP <25){

                                                        ?>

                                                            <div  class="aguj20s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOP >= 25 & $DESOP <35){

                                                        ?>

                                                        <div  class="aguj30s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOP >= 35 & $DESOP <45){

                                                        ?>

                                                            <div  class="aguj40s seBlack varGuno"></div>

                                                        <?php

                                                    
                                                    }elseif($DESOP >= 45 & $DESOP <55){

                                                        ?>

                                                            <div  class="aguj50s seBlack varGuno"></div>

                                                        <?php


                                                    }elseif($DESOP >= 55 & $DESOP <65){

                                                        ?>

                                                            <div  class="aguj60s seBlack varGuno"></div>

                                                        <?php

                                                    }elseif($DESOP >= 65 & $DESOP <75){


                                                        ?>

                                                            <div  class="aguj70s seBlack varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOP >= 75 & $DESOP <85){


                                                        ?>

                                                            <div  class="aguj80s sePINKrojo varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOP >= 85 & $DESOP <95){

                                                        ?>

                                                            <div  class="aguj90s sePINK varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOP >= 95 & $DESOP <98){

                                                        ?>

                                                            <div  class="aguj97s seGREEN varGuno"></div>

                                                        <?php
                                                    
                                                    }elseif($DESOP >= 98){

                                                        ?>

                                                            <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                        <?php
                                                    }
                                            
                                            } ?>
                                        
                                        
                                    
                                    </td>
                                </tr>

                            <?php
                        }
                ?>

                    
    </table>

</div>