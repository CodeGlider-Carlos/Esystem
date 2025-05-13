            


<div id="conttabla">

    <table id="servbarras">

                <tr>
                    <th class="colmacro"></th>
                    <th class="colenfoq"></th>
                    <th class="colporce"></th>
                    <th id="longbarr"></th>
                </tr>

                
                <?php


                $tabmacX= "SELECT * FROM $tabmacro WHERE macro = 'MISP' ";
                
                $qtabmacX = $db_all->query($tabmacX);

                while ($fila = $qtabmacX->fetch(PDO::FETCH_ASSOC)) {
                    $idname =$fila['id'];
                    $namemac =$fila['macro'];
                    $nombremac =$fila['nombre'];

                 
                    /////////////////////////////////////////GRAFICO DE PROCESOS MISIONALES///////////////////////////////////////////////////////////

                        $tabmacXEnfx1= "SELECT * FROM $enfxtab WHERE macro = '$namemac' ";                
                        $qtabmacXEnfx1 = $dbo->query($tabmacXEnfx1);
        
                        while ($fila = $qtabmacXEnfx1->fetch(PDO::FETCH_ASSOC)) {
                            /////////////////////////////////////////GRAFICO DE PROCESOS MISIONALES///////////////////////////////////////////////////////////
                            $nombrenfoqc1 =$fila['enfoque'];
                            $ididenfx1 =$fila['idenfx'];

                            if($adminrol == $radmin){


                                $nop = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%'  ")->fetch());
                                $nosi = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }elseif($adminrol == $radreg){


                                $nop = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%'  AND region LIKE '%$userAcroregion%' ")->fetch());
                                $nosi = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%'  AND region LIKE '%$userAcroregion%' ")->fetch());
                            

                            }elseif($adminrol == $radger){


                                $nop = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'NO' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosi = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$depto%' AND riesgo = 'SI' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }elseif($adminrol == $radman OR $adminrol == $radsup){


                                $nop = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$userLog%' AND riesgo = 'NO' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%' ")->fetch());
                                $nosi = current($dbo->query("SELECT COUNT(*) FROM $tablaAp WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND idenfx =  '$ididenfx1' AND dep LIKE '%$userLog%' AND riesgo = 'SI' AND falla LIKE '%$namemac%' AND periodo LIKE '%$periodo%' ")->fetch());
                            

                            }

                            ?>

                                <tr>
                                    <td class="sombra center"> <?php echo $namemac; ?></td> 
                                    <td class="sombra "> <?php echo $nombrenfoqc1; ?></td> 
                                 

                                        <?php
                                        
                                        $servop = $nosi + $nop;

                                        if($servop >0){

                                            $DESOPtext =  (($servop-$nosi)*100)/$servop;

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

                }

                ?>

                    
    </table>

</div>