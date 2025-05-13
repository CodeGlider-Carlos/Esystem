

    <div id="contenedorVENTAS">

        <div class="backCont">

            <div id="contUno">

                <table id="tablataRESventa" class="table">


                        <tr>
                    
                            <th class="hoyVEn"><?php echo '20'.$year; ?></th>                         
                        
                        </tr>




                        <?php

                    

                            $tabbpt0= "SELECT * FROM $estresu WHERE yearall LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%VENTAS%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";
                                
                        
                    

                            $qtabbpt0 = $dbo->query($tabbpt0);



                            while ($filpto = $qtabbpt0->fetch(PDO::FETCH_ASSOC)) {
                                $concepto1 =$filpto['concepto'];
                            

                                if($concepto1 == 'TOTAL VENTAS'){
                                  
                                    $concep ='TOTAL' ;
                                    $claseCOLor = 'colorblue';
                                }else{
                                   
                                    $concep =$concepto1 ;
                                    $claseCOLor = 'colorblack';
                                } 
                               
                             
                            ?>
                                
                                <tr>
                                    <td>
                                        <?php
                                            if($concepto1 == 'TOTAL VENTAS'){
                                                ?>
                                                    
                                                        <div class="<?php echo $claseCOLor;?>  textarea1" ><strong><?php  echo $concep;   ?></strong></div>
                                                <?php
                                                
                                            }else{
                                                ?>
                                                        <strong><textarea class="<?php echo $claseCOLor;?>  textarea1" spellcheck="false"><?php  echo $concep;   ?></textarea></strong>
                                                <?php
                                            }
                                        ?>
                                
                                    </td>
                                </tr>
                                
                                    <?php
                                
                                
                            }

                        ?>



                </table>

            </div>

            <div id="contDosA">

                <table id="tablataRESventa2" class="table">


                        <tr>
                        
                                                
                            <th class="mestab">ENE</th>
                            <th class="mestab">FEB</th>
                            <th class="mestab">MAR</th>
                            <th class="mestab">ABR</th>
                            <th class="mestab">MAY</th>
                            <th class="mestab">JUN</th>
                            <th class="mestab">JUL</th>
                            <th class="mestab">AGO</th>
                            <th class="mestab">SEP</th>
                            <th class="mestab">OCT</th>
                            <th class="mestab">NOV</th>
                            <th class="mestab">DIC</th>
                        </tr>




                        <?php

                    

                            $tabbpt0= "SELECT * FROM $estresu WHERE yearall LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%VENTAS%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";

                            $qtabbpt0 = $dbo->query($tabbpt0);

                            while ($filpto = $qtabbpt0->fetch(PDO::FETCH_ASSOC)) {
                                $concepto =$filpto['concepto'];
                                $acumulado =$filpto['acumulado'];
                                $unidadtxt =$filpto['unidad'];

                                $mes1 =$filpto['m1'];
                                $mesY1 = '$'. number_format($mes1,2);

                                $mes2 =$filpto['m2'];
                                $mesY2 = '$'. number_format($mes2,2);

                                $mes3 =$filpto['m3'];
                                $mesY3 = '$'. number_format($mes1,2);

                                $mes4 =$filpto['m4'];
                                $mesY4 = '$'. number_format($mes4,2);

                                $mes5 =$filpto['m5'];
                                $mesY5 = '$'. number_format($mes5,2);

                                $mes6 =$filpto['m6'];
                                $mesY6 = '$'. number_format($mes6,2);

                                $mes7 =$filpto['m7'];
                                $mesY7 = '$'. number_format($mes7,2);

                                $mes8 =$filpto['m8'];
                                $mesY8 = '$'. number_format($mes8,2);

                                $mes9 =$filpto['m9'];
                                $mesY9 = '$'. number_format($mes9,2);

                                $mes10 =$filpto['m10'];
                                $mesY10 = '$'. number_format($mes10,2);

                                $mes11 =$filpto['m11'];
                                $mesY11 = '$'. number_format($mes11,2);

                                $mes12 =$filpto['m12'];
                                $mesY12 = '$'. number_format($mes12,2);
                                            

                               

                                if($mesCO ==  'm1'){
                                    $claseCOLor1 = 'colormes';
                                }else{
                                    $claseCOLor1 = 'colorblack';
                                }

                                if($mesCO ==  'm2'){
                                    $claseCOLor2 = 'colormes';
                                }else{
                                    $claseCOLor2 = 'colorblack';
                                }
                                if($mesCO ==  'm3'){
                                    $claseCOLor3 = 'colormes';
                                }else{
                                    $claseCOLor3 = 'colorblack';
                                }
                                if($mesCO ==  'm4'){
                                    $claseCOLor4 = 'colormes';
                                }else{
                                    $claseCOLor4 = 'colorblack';
                                }
                                if($mesCO ==  'm5'){
                                    $claseCOLor5 = 'colormes';
                                }else{
                                    $claseCOLor5 = 'colorblack';
                                }
                                if($mesCO ==  'm6'){
                                    $claseCOLor6 = 'colormes';
                                }else{
                                    $claseCOLor6 = 'colorblack';
                                }
                                if($mesCO ==  'm7'){
                                    $claseCOLor7 = 'colormes';
                                }else{
                                    $claseCOLor7 = 'colorblack';
                                }




                                if($mesCO ==  'm8'){
                                    $claseCOLor8 = 'colormes';
                                }else{
                                    $claseCOLor8 = 'colorblack';
                                }
                                if($mesCO ==  'm9'){
                                    $claseCOLor9 = 'colormes';
                                }else{
                                    $claseCOLor9 = 'colorblack';
                                }
                                if($mesCO ==  'm10'){
                                    $claseCOLor10 = 'colormes';
                                }else{
                                    $claseCOLor10 = 'colorblack';
                                }
                                if($mesCO ==  'm11'){
                                    $claseCOLor11 = 'colormes';
                                }else{
                                    $claseCOLor11 = 'colorblack';
                                }
                                if($mesCO ==  'm12'){
                                    $claseCOLor12 = 'colormes';
                                }else{
                                    $claseCOLor12 = 'colorblack';
                                }




                                if($mesCO ==  'm1'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }

                                if($mesCO ==  'm2'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor2 = 'colorblack';
                                }
                                if($mesCO ==  'm3'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm4'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm5'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm6'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm7'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }




                                if($mesCO ==  'm8'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm9'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm10'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm11'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm12'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                
                                if($concepto == 'TOTAL VENTAS'){
                                    ?>

                                        <tr>
                                            <td> <div class="<?php echo $claseCOLor1;?>  textarea2" ><strong><?php  echo $mesY1;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor2;?>  textarea2" ><strong><?php  echo $mesY2;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor3;?>  textarea2" ><strong><?php  echo $mesY3;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor4;?>  textarea2" ><strong><?php  echo $mesY4;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor5;?>  textarea2" ><strong><?php  echo $mesY5;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor6;?>  textarea2" ><strong><?php  echo $mesY6;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor7;?>  textarea2" ><strong><?php  echo $mesY7;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor8;?>  textarea2" ><strong><?php  echo $mesY8;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor9;?>  textarea2" ><strong><?php  echo $mesY9;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor10;?>  textarea2" ><strong><?php  echo $mesY10;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor11;?>  textarea2" ><strong><?php  echo $mesY11;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor12;?>  textarea2" ><strong><?php  echo $mesY12;   ?></strong></div></td>


                                        </tr>

                                    <?php
                                }else{
                                    ?>
    
                                        <tr>
                                            
                                            

                                            <td><textarea class="<?php echo $claseCOLor1;?> textarea2" spellcheck="false"><?php  echo  $mesY1;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor2;?> textarea2" spellcheck="false"><?php  echo $mesY2;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor3;?> textarea2" spellcheck="false"><?php  echo $mesY3;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor4;?> textarea2" spellcheck="false"><?php  echo $mesY4;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor5;?> textarea2" spellcheck="false"><?php  echo $mesY5;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor6;?> textarea2" spellcheck="false"><?php  echo $mesY6;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor7;?> textarea2" spellcheck="false"><?php  echo $mesY7;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor8;?> textarea2" spellcheck="false"><?php  echo $mesY8;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor9;?> textarea2" spellcheck="false"><?php  echo $mesY9;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor10;?> textarea2" spellcheck="false"><?php  echo $mesY10;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor11;?> textarea2" spellcheck="false"><?php  echo $mesY11;    ?></textarea></td>
                                            <td><textarea class="<?php echo $claseCOLor12;?> textarea2" spellcheck="false"><?php  echo $mesY12;    ?></textarea></td>


                                        
                                        </tr>
                            
                                    <?php
                                }
                            ?>
                            
                                    <?php
                                
                                
                            }

                        ?>


                
                </table>
            </div>


        </div>

        <div id="backBotones">
            <div id="eneroA" class="botonmes"><strong>01</strong></div>
            <div id="febreroA" class="botonmes"><strong>02</strong></div>
            <div id="marzoA" class="botonmes"><strong>03</strong></div>
            <div id="abrilA" class="botonmes"><strong>04</strong></div>
            <div id="mayoA" class="botonmes"><strong>05</strong></div>
            <div id="junioA" class="botonmes"><strong>06</strong></div>
            <div id="julioA" class="botonmes"><strong>07</strong></div>
            <div id="agostoA" class="botonmes"><strong>08</strong></div>
            <div id="septiembreA" class="botonmes"><strong>09</strong></div>
            <div id="octubreA" class="botonmes"><strong>10</strong></div>
            <div id="noviembreA" class="botonmes"><strong>11</strong></div>
            <div id="diciembreA" class="botonmes"><strong>12</strong></div>
        </div>

    
        

    </div>

    <div id="contenedorCOSTOS">

        <div class="backCont">

            <div id="contUno">

                <table id="tablataRESventa" class="table">


                        <tr>
                    
                            <th class="hoyVEn"><?php echo '20'.$year; ?></th>                         
                        
                        </tr>




                        <?php

                  

                            $tabbpt0b= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%COSTO%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";
                                
                        
                    

                            $qtabbpt0b = $dbo->query($tabbpt0b);



                            while ($filpto = $qtabbpt0b->fetch(PDO::FETCH_ASSOC)) {
                                $concepto1 =$filpto['concepto'];
                            

                                if($concepto1 == 'TOTAL COSTOS'){
                                    $claseCOLorIN = 'colorblue';
                                    $concepb ='TOTAL' ;
                                }else{
                                    $claseCOLorIN = 'colorblack';
                                    $concepb =$concepto1 ;
                                } 


                            ?>
                                
                                <tr>
                                    <td>
                                        <?php
                                            if($concepto1 == 'TOTAL COSTOS'){
                                                ?>
                                                    
                                                        <div class="<?php echo $claseCOLorIN;?>  textarea1" ><strong><?php  echo $concepb;   ?></strong></div>
                                                <?php
                                                
                                            }else{
                                                ?>
                                                        <strong><textarea class="<?php echo $claseCOLorIN;?>  textarea1" spellcheck="false"><?php  echo $concepb;   ?></textarea></strong>
                                                <?php
                                            }
                                        ?>
                                
                                    </td>
                                </tr>
                                
                                    <?php
                                
                                
                            }

                        ?>

                                <tr>
                                    <td class="ocultarcol">K</td>
                                </tr>

                </table>

            </div>

            <div id="contDos">

                <table id="tablataRESventa2" class="table">


                        <tr>
                        
                                                
                            <th class="mestab">ENE</th>
                            <th class="mestab">FEB</th>
                            <th class="mestab">MAR</th>
                            <th class="mestab">ABR</th>
                            <th class="mestab">MAY</th>
                            <th class="mestab">JUN</th>
                            <th class="mestab">JUL</th>
                            <th class="mestab">AGO</th>
                            <th class="mestab">SEP</th>
                            <th class="mestab">OCT</th>
                            <th class="mestab">NOV</th>
                            <th class="mestab">DIC</th>
                        </tr>




                        <?php


                            $tabbpt0ba= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%COSTO%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";

                            $qtabbptba = $dbo->query($tabbpt0ba);

                            while ($filpto = $qtabbptba->fetch(PDO::FETCH_ASSOC)) {

                                $idcommen =$filpto['id'];
                                $concepto =$filpto['concepto'];
                                $acumulado =$filpto['acumulado'];
                                $unidadtxt =$filpto['unidad'];
                                $comment1 =$filpto['comment1'];
                                $comment2 =$filpto['comment2'];
                                $comment3 =$filpto['comment3'];
                                $comment4 =$filpto['comment4'];
                                $comment5 =$filpto['comment5'];
                                $comment6 =$filpto['comment6'];
                                $comment7 =$filpto['comment7'];
                                $comment8 =$filpto['comment8'];
                                $comment9 =$filpto['comment9'];
                                $comment10 =$filpto['comment10'];
                                $comment11 =$filpto['comment11'];
                                $comment12 =$filpto['comment12'];


                                $pago =$filpto['catcomment'];

                                $mes1 =$filpto['m1'];
                                $mesY1 = '$'. number_format($mes1,2);

                             

                                $mes2 =$filpto['m2'];
                                $mesY2 = '$'. number_format($mes2,2);

                                $mes3 =$filpto['m3'];
                                $mesY3 = '$'. number_format($mes1,2);

                                $mes4 =$filpto['m4'];
                                $mesY4 = '$'. number_format($mes4,2);

                                $mes5 =$filpto['m5'];
                                $mesY5 = '$'. number_format($mes5,2);

                                $mes6 =$filpto['m6'];
                                $mesY6 = '$'. number_format($mes6,2);

                                $mes7 =$filpto['m7'];
                                $mesY7 = '$'. number_format($mes7,2);

                                $mes8 =$filpto['m8'];
                                $mesY8 = '$'. number_format($mes8,2);

                            

                                $mes9 =$filpto['m9'];
                                $mesY9 = '$'. number_format($mes9,2);

                                $mes10 =$filpto['m10'];
                                $mesY10 = '$'. number_format($mes10,2);

                                $mes11 =$filpto['m11'];
                                $mesY11 = '$'. number_format($mes11,2);

                                $mes12 =$filpto['m12'];
                                $mesY12 = '$'. number_format($mes12,2);
                                            
                                
                                if($concepto == 'TOTAL COSTOS'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';                                 
                                }




                                if($mesCO ==  'm1'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }

                                if($mesCO ==  'm2'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor2 = 'colorblack';
                                }
                                if($mesCO ==  'm3'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm4'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm5'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm6'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm7'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }




                                if($mesCO ==  'm8'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm9'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm10'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm11'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }
                                if($mesCO ==  'm12'){
                                    $claseCOLor = 'colormes';
                                }else{
                                    $claseCOLor = 'colorblack';
                                }




                                if($pago == 'p'OR $pago == 'c'){
                                    if($concepto == 'TOTAL COSTOS'){
                                        ?>
    
                                        <tr>
                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY1;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm1'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        



                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY2;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm2'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        

                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY3;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm3'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        



                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY4;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm4'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        

                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY5;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm5'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        

                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY6;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm6'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        

                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY7;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm7'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        


                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY8;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm8'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>                                          
                                           
                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY9;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm9'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>    
                                            
                                            
                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY10;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm10'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>   
                                            
                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY11;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm11'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>     
                                            
                                            <td> 
                                                <div class="<?php echo $claseCOLor;?>  textarea2" >
                                                    <strong><?php  echo $mesY12;   ?></strong>
                                                    <?php
                                                    if($mesCO == 'm12'){
                                                        ?>
                                                            <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                        <?php

                                                    }
                                                ?>
                                                </div>
                                            </td>        

                                        </tr>

                                    <?php
                                    }else{
                                        ?>
        
                                            <tr>
                                                
                                               
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor1;?> textarea2 " spellcheck="false"><?php  echo  $mesY1;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm1'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor2;?> textarea2 " spellcheck="false"><?php  echo $mesY2;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm2'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor3;?> textarea2 " spellcheck="false"><?php  echo $mesY3;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm3'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor4;?> textarea2 " spellcheck="false"><?php  echo $mesY4;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm4'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor5;?> textarea2 " spellcheck="false"><?php  echo $mesY5;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm5'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor6;?> textarea2 " spellcheck="false"><?php  echo $mesY6;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm6'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor7;?> textarea2 " spellcheck="false"><?php  echo $mesY7;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm7'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor8;?> textarea2 " spellcheck="false"><?php  echo $mesY8;    ?></textarea>

                                                    <?php
                                                        if($mesCO == 'm8'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                 
                                                </td>
                                              
                                                <td>
                                                    <?php
                                                            if($concepto == 'Anestesia y Sedacion'){
                                                                ?>
                                                                
                                                                    <textarea class="colorAnes textarea2 " spellcheck="false"><?php  echo $mesY9;    ?></textarea>
                                        
                                                                <?php
                                                                
                                                            }elseif($concepto == 'Esterilizacion de Instrumental Medico'){
                                                                ?>
                                                                
                                                                    <textarea class="colorCeye textarea2 " spellcheck="false"><?php  echo $mesY9;    ?></textarea>
                                        
                                                                <?php
                                                            }else{
                                                                ?>

                                                                    <textarea class="<?php echo $claseCOLor9;?> textarea2 " spellcheck="false"><?php  echo $mesY9;    ?></textarea>
                                          
                                                                <?php
                                                            }
                                                        ?>
                                               <?php
                                                        if($mesCO == 'm9'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor10;?> textarea2 " spellcheck="false"><?php  echo $mesY10;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm10'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor11;?> textarea2 " spellcheck="false"><?php  echo $mesY11;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm11'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor12;?> textarea2 " spellcheck="false"><?php  echo $mesY12;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm12'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
    
                                            </tr>
                                
                                        <?php
                                    }
                                }else{
                                    if($concepto == 'TOTAL COSTOS'){
                                        ?>
    
                                            <tr>
                                                <td> <div class="<?php echo $claseCOLor1;?>  textarea2" ><strong><?php  echo $mesY1;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor2;?>  textarea2" ><strong><?php  echo $mesY2;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor3;?>  textarea2" ><strong><?php  echo $mesY3;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor4;?>  textarea2" ><strong><?php  echo $mesY4;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor5;?>  textarea2" ><strong><?php  echo $mesY5;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor6;?>  textarea2" ><strong><?php  echo $mesY6;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor7;?>  textarea2" ><strong><?php  echo $mesY7;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor8;?>  textarea2" ><strong><?php  echo $mesY8;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor9;?>  textarea2" ><strong><?php  echo $mesY9;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor10;?>  textarea2" ><strong><?php  echo $mesY10;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor11;?>  textarea2" ><strong><?php  echo $mesY11;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor12;?>  textarea2" ><strong><?php  echo $mesY12;   ?></strong></div></td>
    
    
                                            </tr>
    
                                        <?php
                                    }else{
                                        ?>
        
                                            <tr>
                                                
                                                
    
                                                <td><textarea class="<?php echo $claseCOLor1;?> textarea2" spellcheck="false"><?php  echo  $mesY1;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor2;?> textarea2" spellcheck="false"><?php  echo $mesY2;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor3;?> textarea2" spellcheck="false"><?php  echo $mesY3;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor4;?> textarea2" spellcheck="false"><?php  echo $mesY4;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor5;?> textarea2" spellcheck="false"><?php  echo $mesY5;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor6;?> textarea2" spellcheck="false"><?php  echo $mesY6;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor7;?> textarea2" spellcheck="false"><?php  echo $mesY7;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor8;?> textarea2" spellcheck="false"><?php  echo $mesY8;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor9;?> textarea2" spellcheck="false"><?php  echo $mesY9;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor10;?> textarea2" spellcheck="false"><?php  echo $mesY10;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor11;?> textarea2" spellcheck="false"><?php  echo $mesY11;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor12;?> textarea2" spellcheck="false"><?php  echo $mesY12;    ?></textarea></td>
    
    
                                            
                                            </tr>
                                
                                        <?php
                                    }
                                }

                              
                            ?>
                            
                                    <?php
                                
                                
                            }

                        ?>


                    <tr>
                        
                                                
                        <th class="mestab">ENE</th>
                        <th class="mestab">FEB</th>
                        <th class="mestab">MAR</th>
                        <th class="mestab">ABR</th>
                        <th class="mestab">MAY</th>
                        <th class="mestab">JUN</th>
                        <th class="mestab">JUL</th>
                        <th class="mestab">AGO</th>
                        <th class="mestab">SEP</th>
                        <th class="mestab">OCT</th>
                        <th class="mestab">NOV</th>
                        <th class="mestab">DIC</th>
                    </tr>
                
                </table>

              
            </div>


            
        </div>

        <div id="backBotones">
            <div id="enero" class="botonmes"><strong>01</strong></div>
            <div id="febrero" class="botonmes"><strong>02</strong></div>
            <div id="marzo" class="botonmes"><strong>03</strong></div>
            <div id="abril" class="botonmes"><strong>04</strong></div>
            <div id="mayo" class="botonmes"><strong>05</strong></div>
            <div id="junio" class="botonmes"><strong>06</strong></div>
            <div id="julio" class="botonmes"><strong>07</strong></div>
            <div id="agosto" class="botonmes"><strong>08</strong></div>
            <div id="septiembre" class="botonmes"><strong>09</strong></div>
            <div id="octubre" class="botonmes"><strong>10</strong></div>
            <div id="noviembre" class="botonmes"><strong>11</strong></div>
            <div id="diciembre" class="botonmes"><strong>12</strong></div>
        </div>



    </div>
           
    <div id="contenedorGASTOS">

        <div class="backCont">

            <div id="contUno">

                <table id="tablataRESventa" class="table">


                        <tr>
                    
                            <th class="hoyVEn"><?php echo '20'.$year; ?></th>                         
                        
                        </tr>




                        <?php

                    

                            $tabbpt4= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%GASTO%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";
                                
                        
                    

                            $qtabbpt4 = $dbo->query($tabbpt4);



                            while ($filpto = $qtabbpt4->fetch(PDO::FETCH_ASSOC)) {
                                $concepto1c =$filpto['concepto'];
                              

                                if($concepto1c == 'TOTAL GASTO'){
                                    $claseCOLorb = 'colorblue';
                                    $concepc ='TOTAL' ;
                                }else{
                                    $claseCOLorb = 'colorblack';
                                    $concepc =$concepto1c ;
                                } 

                            ?>
                                
                                <tr>
                                    <td>
                                        <?php
                                            if($concepto1c == 'TOTAL GASTO'){
                                                ?>
                                                    
                                                        <div class="<?php echo $claseCOLorb;?>  textarea1" ><strong><?php  echo $concepc;   ?></strong></div>
                                                <?php
                                                
                                            }else{ 
                                             
                                                ?>
                                                        <strong><textarea class="<?php echo $claseCOLorb;?>  textarea1" spellcheck="false"><?php  echo $concepc;   ?></textarea></strong>
                                                <?php
                                            }
                                        ?>
                                
                                    </td>
                                 
                                </tr>
                              
                                
                                    <?php
                                
                                
                            }

                        ?>

                                <tr>
                                    <td class="ocultarcol">K</td>
                                </tr>

                </table>

            </div>

            <div id="contDosC">

                <table id="tablataRESventa2" class="table">


                        <tr>
                        
                                                
                            <th class="mestab">ENE</th>
                            <th class="mestab">FEB</th>
                            <th class="mestab">MAR</th>
                            <th class="mestab">ABR</th>
                            <th class="mestab">MAY</th>
                            <th class="mestab">JUN</th>
                            <th class="mestab">JUL</th>
                            <th class="mestab">AGO</th>
                            <th class="mestab">SEP</th>
                            <th class="mestab">OCT</th>
                            <th class="mestab">NOV</th>
                            <th class="mestab">DIC</th>
                        </tr>




                        <?php

                    

                            $tabbpt06= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%GASTO%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";

                            $qtabbpt06 = $dbo->query($tabbpt06);

                            while ($filpto = $qtabbpt06->fetch(PDO::FETCH_ASSOC)) {
                             
                                $idcommen =$filpto['id'];
                                $concepto =$filpto['concepto'];
                                $acumulado =$filpto['acumulado'];
                                $unidadtxt =$filpto['unidad'];
                                $comment1 =$filpto['comment1'];
                                $comment2 =$filpto['comment2'];
                                $comment3 =$filpto['comment3'];
                                $comment4 =$filpto['comment4'];
                                $comment5 =$filpto['comment5'];
                                $comment6 =$filpto['comment6'];
                                $comment7 =$filpto['comment7'];
                                $comment8 =$filpto['comment8'];
                                $comment9 =$filpto['comment9'];
                                $comment10 =$filpto['comment10'];
                                $comment11 =$filpto['comment11'];
                                $comment12 =$filpto['comment12'];


                                $pago =$filpto['catcomment'];

                                $pago =$filpto['catcomment'];

                                $mes1 =$filpto['m1'];
                                $mesY1 = '$'. number_format($mes1,2);

                             

                                $mes2 =$filpto['m2'];
                                $mesY2 = '$'. number_format($mes2,2);

                                $mes3 =$filpto['m3'];
                                $mesY3 = '$'. number_format($mes1,2);

                                $mes4 =$filpto['m4'];
                                $mesY4 = '$'. number_format($mes4,2);

                                $mes5 =$filpto['m5'];
                                $mesY5 = '$'. number_format($mes5,2);

                                $mes6 =$filpto['m6'];
                                $mesY6 = '$'. number_format($mes6,2);

                                $mes7 =$filpto['m7'];
                                $mesY7 = '$'. number_format($mes7,2);

                                $mes8 =$filpto['m8'];
                                $mesY8 = '$'. number_format($mes8,2);

                            

                                $mes9 =$filpto['m9'];
                                $mesY9 = '$'. number_format($mes9,2);

                                $mes10 =$filpto['m10'];
                                $mesY10 = '$'. number_format($mes10,2);

                                $mes11 =$filpto['m11'];
                                $mesY11 = '$'. number_format($mes11,2);

                                $mes12 =$filpto['m12'];
                                $mesY12 = '$'. number_format($mes12,2);
    
                                if($concepto == 'TOTAL GASTO'){
                                    $claseCOLor = 'colorblue';
                                }else{
                                    $claseCOLor = 'colorblack';                                 
                                }




                                if($mesCO ==  'm1'){
                                    $claseCOLor1 = 'colormes';
                                }else{
                                    $claseCOLor1 = 'colorblack';
                                }

                                if($mesCO ==  'm2'){
                                    $claseCOLor2 = 'colormes';
                                }else{
                                    $claseCOLor2 = 'colorblack';
                                }
                                if($mesCO ==  'm3'){
                                    $claseCOLor3 = 'colormes';
                                }else{
                                    $claseCOLor3 = 'colorblack';
                                }
                                if($mesCO ==  'm4'){
                                    $claseCOLor4 = 'colormes';
                                }else{
                                    $claseCOLor4 = 'colorblack';
                                }
                                if($mesCO ==  'm5'){
                                    $claseCOLor5 = 'colormes';
                                }else{
                                    $claseCOLor5 = 'colorblack';
                                }
                                if($mesCO ==  'm6'){
                                    $claseCOLor6 = 'colormes';
                                }else{
                                    $claseCOLor6 = 'colorblack';
                                }
                                if($mesCO ==  'm7'){
                                    $claseCOLor7 = 'colormes';
                                }else{
                                    $claseCOLor7 = 'colorblack';
                                }




                                if($mesCO ==  'm8'){
                                    $claseCOLor8 = 'colormes';
                                }else{
                                    $claseCOLor8 = 'colorblack';
                                }
                                if($mesCO ==  'm9'){
                                    $claseCOLor9 = 'colormes';
                                }else{
                                    $claseCOLor9 = 'colorblack';
                                }
                                if($mesCO ==  'm10'){
                                    $claseCOLor10 = 'colormes';
                                }else{
                                    $claseCOLor10 = 'colorblack';
                                }
                                if($mesCO ==  'm11'){
                                    $claseCOLor11 = 'colormes';
                                }else{
                                    $claseCOLor11 = 'colorblack';
                                }
                                if($mesCO ==  'm12'){
                                    $claseCOLor12 = 'colormes';
                                }else{
                                    $claseCOLor12 = 'colorblack';
                                }


                                if($pago == 'p'OR $pago == 'c'){

                                    if($concepto == 'TOTAL GASTO'){
                                        
                                        ?>
    
                                            <tr>
                                                <td> 
                                                    <div class="<?php echo $claseCOLor1;?>  textarea2" >
                                                        <strong><?php  echo $mesY1;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm1'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        



                                                <td> 
                                                    <div class="<?php echo $claseCOLor2;?>  textarea2" >
                                                        <strong><?php  echo $mesY2;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm2'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        

                                                <td> 
                                                    <div class="<?php echo $claseCOLor3;?>  textarea2" >
                                                        <strong><?php  echo $mesY3;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm3'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        



                                                <td> 
                                                    <div class="<?php echo $claseCOLor4;?>  textarea2" >
                                                        <strong><?php  echo $mesY4;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm4'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        

                                                <td> 
                                                    <div class="<?php echo $claseCOLor5;?>  textarea2" >
                                                        <strong><?php  echo $mesY5;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm5'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        

                                                <td> 
                                                    <div class="<?php echo $claseCOLor6;?>  textarea2" >
                                                        <strong><?php  echo $mesY6;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm6'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        

                                                <td> 
                                                    <div class="<?php echo $claseCOLor7;?>  textarea2" >
                                                        <strong><?php  echo $mesY7;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm7'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        


                                                <td> 
                                                    <div class="<?php echo $claseCOLor8;?>  textarea2" >
                                                        <strong><?php  echo $mesY8;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm8'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>                                          
                                               
                                                <td> 
                                                    <div class="<?php echo $claseCOLor9;?>  textarea2" >
                                                        <strong><?php  echo $mesY9;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm9'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>    
                                                
                                                
                                                <td> 
                                                    <div class="<?php echo $claseCOLor10;?>  textarea2" >
                                                        <strong><?php  echo $mesY10;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm10'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>   
                                                
                                                <td> 
                                                    <div class="<?php echo $claseCOLor11;?>  textarea2" >
                                                        <strong><?php  echo $mesY11;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm11'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>     
                                                
                                                <td> 
                                                    <div class="<?php echo $claseCOLor12;?>  textarea2" >
                                                        <strong><?php  echo $mesY12;   ?></strong>
                                                        <?php
                                                        if($mesCO == 'm12'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                    </div>
                                                </td>        
    
                                            </tr>
    
                                        <?php
                                    }else{
                                        ?>
        
                                            <tr>
                                                
                                               
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor1;?> textarea2 " spellcheck="false"><?php  echo  $mesY1;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm1'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor2;?> textarea2 " spellcheck="false"><?php  echo $mesY2;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm2'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor3;?> textarea2 " spellcheck="false"><?php  echo $mesY3;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm3'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor4;?> textarea2 " spellcheck="false"><?php  echo $mesY4;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm4'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor5;?> textarea2 " spellcheck="false"><?php  echo $mesY5;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm5'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor6;?> textarea2 " spellcheck="false"><?php  echo $mesY6;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm6'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor7;?> textarea2 " spellcheck="false"><?php  echo $mesY7;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm7'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor8;?> textarea2 " spellcheck="false"><?php  echo $mesY8;    ?></textarea>

                                                    <?php
                                                        if($mesCO == 'm8'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                 
                                                </td>
                                              
                                                <td> 
                                                    <?php
                                                        if($concepto == 'Renta de inmuebles'){
                                                            ?>
                                                                <textarea class="colorblus textarea2 " spellcheck="false"><?php  echo $mesY9;    ?></textarea>
                                                            <?php
                                                            
                                                        }else{
                                                            ?>
                                                                <textarea class="<?php echo $claseCOLor9;?> textarea2 " spellcheck="false"><?php  echo $mesY9;    ?></textarea>
                                                            <?php
                                                        }
                                                    ?>
                                                    
                                                <?php
                                                        if($mesCO == 'm9'){

                                                            
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor10;?> textarea2 " spellcheck="false"><?php  echo $mesY10;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm10'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor11;?> textarea2 " spellcheck="false"><?php  echo $mesY11;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm11'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <textarea class="<?php echo $claseCOLor12;?> textarea2 " spellcheck="false"><?php  echo $mesY12;    ?></textarea>
                                                    <?php
                                                        if($mesCO == 'm12'){
                                                            ?>
                                                                <div id="<?php echo 'botCom'. $idcommen;?>" class="cobtomMas"><strong>+</strong></div>
                                                            <?php

                                                        }
                                                    ?>
                                                </td>
    
                                            </tr>
                                
                                        <?php
                                    }
                                }else{
                                    if($concepto == 'TOTAL GASTO'){
                                        ?>
    
                                            <tr>
                                                <td> <div class="<?php echo $claseCOLor1;?>  textarea2" ><strong><?php  echo $mesY1;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor2;?>  textarea2" ><strong><?php  echo $mesY2;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor3;?>  textarea2" ><strong><?php  echo $mesY3;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor4;?>  textarea2" ><strong><?php  echo $mesY4;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor5;?>  textarea2" ><strong><?php  echo $mesY5;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor6;?>  textarea2" ><strong><?php  echo $mesY6;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor7;?>  textarea2" ><strong><?php  echo $mesY7;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor8;?>  textarea2" ><strong><?php  echo $mesY8;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor9;?>  textarea2" ><strong><?php  echo $mesY9;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor10;?>  textarea2" ><strong><?php  echo $mesY10;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor11;?>  textarea2" ><strong><?php  echo $mesY11;   ?></strong></div></td>
                                                <td> <div class="<?php echo $claseCOLor12;?>  textarea2" ><strong><?php  echo $mesY12;   ?></strong></div></td>
    
    
                                            </tr>
    
                                        <?php
                                    }else{
                                        ?>
        
                                            <tr>
                                                
                                                
    
                                                <td><textarea class="<?php echo $claseCOLor1;?> textarea2" spellcheck="false"><?php  echo  $mesY1;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor2;?> textarea2" spellcheck="false"><?php  echo $mesY2;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor3;?> textarea2" spellcheck="false"><?php  echo $mesY3;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor4;?> textarea2" spellcheck="false"><?php  echo $mesY4;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor5;?> textarea2" spellcheck="false"><?php  echo $mesY5;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor6;?> textarea2" spellcheck="false"><?php  echo $mesY6;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor7;?> textarea2" spellcheck="false"><?php  echo $mesY7;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor8;?> textarea2" spellcheck="false"><?php  echo $mesY8;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor9;?> textarea2" spellcheck="false"><?php  echo $mesY9;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor10;?> textarea2" spellcheck="false"><?php  echo $mesY10;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor11;?> textarea2" spellcheck="false"><?php  echo $mesY11;    ?></textarea></td>
                                                <td><textarea class="<?php echo $claseCOLor12;?> textarea2" spellcheck="false"><?php  echo $mesY12;    ?></textarea></td>
    
    
                                            
                                            </tr>
                                
                                        <?php
                                    }
                                }




                            ?>
                            
                                    <?php
                                
                                
                            }

                        ?>


                
                    <tr>
                        
                                                
                        <th class="mestab">ENE</th>
                        <th class="mestab">FEB</th>
                        <th class="mestab">MAR</th>
                        <th class="mestab">ABR</th>
                        <th class="mestab">MAY</th>
                        <th class="mestab">JUN</th>
                        <th class="mestab">JUL</th>
                        <th class="mestab">AGO</th>
                        <th class="mestab">SEP</th>
                        <th class="mestab">OCT</th>
                        <th class="mestab">NOV</th>
                        <th class="mestab">DIC</th>
                    </tr>
                </table>
            </div>


        </div>

        <div id="backBotones">
            <div id="eneroC" class="botonmes"><strong>01</strong></div>
            <div id="febreroC" class="botonmes"><strong>02</strong></div>
            <div id="marzoC" class="botonmes"><strong>03</strong></div>
            <div id="abrilC" class="botonmes"><strong>04</strong></div>
            <div id="mayoC" class="botonmes"><strong>05</strong></div>
            <div id="junioC" class="botonmes"><strong>06</strong></div>
            <div id="julioC" class="botonmes"><strong>07</strong></div>
            <div id="agostoC" class="botonmes"><strong>08</strong></div>
            <div id="septiembreC" class="botonmes"><strong>09</strong></div>
            <div id="octubreC" class="botonmes"><strong>10</strong></div>
            <div id="noviembreC" class="botonmes"><strong>11</strong></div>
            <div id="diciembreC" class="botonmes"><strong>12</strong></div>
        </div>

    
        

    </div>

     <div id="contenedorUTILIDAD">

        <div class="backCont">

            <div id="contUno">

                <table id="tablataRESventa" class="table">


                        <tr>
                    
                            <th class="hoyVEn"><?php echo '20'.$year; ?></th>                         
                        
                        </tr>




                        <?php

                    

                            $tabbpt5= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%UTILIDAD%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";
                                
                        
                    

                            $qtabbpt5 = $dbo->query($tabbpt5);



                            while ($filpto = $qtabbpt5->fetch(PDO::FETCH_ASSOC)) {
                                $concepto1cg =$filpto['concepto'];
                            


                            ?>
                                
                                <tr>
                                    <td>
                                      
                                          
                                                    
                                        <div class="<?php echo $claseCOLor;?>  textarea1" ><strong><?php  echo $concepto1cg;   ?></strong></div>
                                            
                                       
                                
                                    </td>
                                </tr>
                                
                                    <?php
                                
                                
                            }

                        ?>



                </table>

            </div>

            <div id="contDosD">

                <table id="tablataRESventa2" class="table">


                        <tr>
                        
                                                
                            <th class="mestab">ENE</th>
                            <th class="mestab">FEB</th>
                            <th class="mestab">MAR</th>
                            <th class="mestab">ABR</th>
                            <th class="mestab">MAY</th>
                            <th class="mestab">JUN</th>
                            <th class="mestab">JUL</th>
                            <th class="mestab">AGO</th>
                            <th class="mestab">SEP</th>
                            <th class="mestab">OCT</th>
                            <th class="mestab">NOV</th>
                            <th class="mestab">DIC</th>
                        </tr>




                        <?php

                    

                            $tabbpt08= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%UTILIDAD%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";

                            $qtabbpt08 = $dbo->query($tabbpt08);

                            while ($filpto = $qtabbpt08->fetch(PDO::FETCH_ASSOC)) {
                                $concepto4 =$filpto['concepto'];
                                $acumulado =$filpto['acumulado'];
                                $unidadtxt =$filpto['unidad'];

                                $mes1 =$filpto['m1'];
                                $mesY1 = '$'. number_format($mes1,2);

                                $mes2 =$filpto['m2'];
                                $mesY2 = '$'. number_format($mes2,2);

                                $mes3 =$filpto['m3'];
                                $mesY3 = '$'. number_format($mes1,2);

                                $mes4 =$filpto['m4'];
                                $mesY4 = '$'. number_format($mes4,2);

                                $mes5 =$filpto['m5'];
                                $mesY5 = '$'. number_format($mes5,2);

                                $mes6 =$filpto['m6'];
                                $mesY6 = '$'. number_format($mes6,2);

                                $mes7 =$filpto['m7'];
                                $mesY7 = '$'. number_format($mes7,2);

                                $mes8 =$filpto['m8'];
                                $mesY8 = '$'. number_format($mes8,2);

                                $mes9 =$filpto['m9'];
                                $mesY9 = '$'. number_format($mes9,2);

                                $mes10 =$filpto['m10'];
                                $mesY10 = '$'. number_format($mes10,2);

                                $mes11 =$filpto['m11'];
                                $mesY11 = '$'. number_format($mes11,2);

                                $mes12 =$filpto['m12'];
                                $mesY12 = '$'. number_format($mes12,2);
                                            

                                if($mesCO ==  'm1'){
                                    $claseCOLor1 = 'colormes';
                                }else{
                                    $claseCOLor1 = 'colorblack';
                                }

                                if($mesCO ==  'm2'){
                                    $claseCOLor2 = 'colormes';
                                }else{
                                    $claseCOLor2 = 'colorblack';
                                }
                                if($mesCO ==  'm3'){
                                    $claseCOLor3 = 'colormes';
                                }else{
                                    $claseCOLor3 = 'colorblack';
                                }
                                if($mesCO ==  'm4'){
                                    $claseCOLor4 = 'colormes';
                                }else{
                                    $claseCOLor4 = 'colorblack';
                                }
                                if($mesCO ==  'm5'){
                                    $claseCOLor5 = 'colormes';
                                }else{
                                    $claseCOLor5 = 'colorblack';
                                }
                                if($mesCO ==  'm6'){
                                    $claseCOLor6 = 'colormes';
                                }else{
                                    $claseCOLor6 = 'colorblack';
                                }
                                if($mesCO ==  'm7'){
                                    $claseCOLor7 = 'colormes';
                                }else{
                                    $claseCOLor7 = 'colorblack';
                                }




                                if($mesCO ==  'm8'){
                                    $claseCOLor8 = 'colormes';
                                }else{
                                    $claseCOLor8 = 'colorblack';
                                }
                                if($mesCO ==  'm9'){
                                    $claseCOLor9 = 'colormes';
                                }else{
                                    $claseCOLor9 = 'colorblack';
                                }
                                if($mesCO ==  'm10'){
                                    $claseCOLor10 = 'colormes';
                                }else{
                                    $claseCOLor10 = 'colorblack';
                                }
                                if($mesCO ==  'm11'){
                                    $claseCOLor11 = 'colormes';
                                }else{
                                    $claseCOLor11 = 'colorblack';
                                }
                                if($mesCO ==  'm12'){
                                    $claseCOLor12 = 'colormes';
                                }else{
                                    $claseCOLor12 = 'colorblack';
                                }
                                ?>  



                                        <tr>
                                            <td> <div class="<?php echo $claseCOLor1;?>  textarea2" ><strong><?php  echo $mesY1;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor2;?>  textarea2" ><strong><?php  echo $mesY2;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor3;?>  textarea2" ><strong><?php  echo $mesY3;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor4;?>  textarea2" ><strong><?php  echo $mesY4;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor5;?>  textarea2" ><strong><?php  echo $mesY5;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor6;?>  textarea2" ><strong><?php  echo $mesY6;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor7;?>  textarea2" ><strong><?php  echo $mesY7;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor8;?>  textarea2" ><strong><?php  echo $mesY8;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor9;?>  textarea2" ><strong><?php  echo $mesY9;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor10;?>  textarea2" ><strong><?php  echo $mesY10;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor11;?>  textarea2" ><strong><?php  echo $mesY11;   ?></strong></div></td>
                                            <td> <div class="<?php echo $claseCOLor12;?>  textarea2" ><strong><?php  echo $mesY12;   ?></strong></div></td>


                                        </tr>

                            
                            
                            
                                    <?php
                                
                                
                            }

                        ?>


                
                </table>
            </div>

        </div>

        <div id="backBotones">
            <div id="eneroCd" class="botonmes"><strong>01</strong></div>
            <div id="febreroCd" class="botonmes"><strong>02</strong></div>
            <div id="marzoCd" class="botonmes"><strong>03</strong></div>
            <div id="abrilCd" class="botonmes"><strong>04</strong></div>
            <div id="mayoCd" class="botonmes"><strong>05</strong></div>
            <div id="junioCd" class="botonmes"><strong>06</strong></div>
            <div id="julioCd" class="botonmes"><strong>07</strong></div>
            <div id="agostoCd" class="botonmes"><strong>08</strong></div>
            <div id="septiembreCd" class="botonmes"><strong>09</strong></div>
            <div id="octubreCd" class="botonmes"><strong>10</strong></div>
            <div id="noviembreCd" class="botonmes"><strong>11</strong></div>
            <div id="diciembreCd" class="botonmes"><strong>12</strong></div>
        </div>

    
        

    </div>



