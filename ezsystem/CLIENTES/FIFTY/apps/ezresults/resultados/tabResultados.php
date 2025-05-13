<?php
require_once '../../../varSQL/bd.php';
require_once '../../../varSQL/var.php';
require_once '../varSQL/dbmysql.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userUnidadAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];



$messave =$periodo;


if($messave == '1'){
    $mescol = 'm1';
}elseif($messave == '2'){
    $mescol = 'm2';
}elseif($messave == '3'){
    $mescol = 'm3';
}elseif($messave == '4'){
    $mescol = 'm4';
}elseif($messave == '5'){
    $mescol = 'm5';
}elseif($messave == '6'){
    $mescol = 'm6';
}elseif($messave == '7'){
    $mescol = 'm7';
}elseif($messave == '8'){
    $mescol = 'm8';
}elseif($messave == '9'){
    $mescol = 'm9';
}elseif($messave == '10'){
    $mescol = 'm10';
}elseif($messave == '11'){
    $mescol = 'm11';
}elseif($messave == '12'){
    $mescol = 'm12';
}         

       

            ?>
                <div class="titleSection"><h5>RESULTADOS CLAVE: <?php echo $year.'/'.$periodo.'/'.$regiony .'/'.$clientesu.'/'.$serespy; ?></h5></div>
                <div id="backClick1">

                    <div class="barrclick"></div>
                    <div class="barrclick"></div>
                    <div class="barrclick"></div>
                    
                </div>
                <div id="backClick1b">
                    <div class="barrclick"></div>
                    <div class="barrclick"></div>
                    <div class="barrclick"></div>
                </div>


                <?php

              
             
                    $allAcum = current($dbo->query("SELECT SUM(acumulado) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI'  ")->fetch());
                    $allINdi = current($dbo->query("SELECT COUNT(acumulado) FROM $tabRes  WHERE  yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI'  ")->fetch());
                    
              

                    if(empty($serespy)){
                    }else{

                        ?>


                            <section id="backtablaINDI">

                                <table class="tablataINDI">
                                    
                                    <tr id="columnasindi">
                                        <th class="pondes"></th>
                                        <th class="pondes">PONDERACION</th>
                                        <th class="metas">META</th>
                                          
                                        <th class="logros">LOGRO</th>
                                        <th class="cumples">CUMPLE</th>
                                        <th class="result">RESULTADO</th>
                                       
                                        <th class="obse">OBSERVACIONES</th>
                                      
                                      

                                    </tr>

                                    <section id="semf">

                                        <?php 
                                            ///////////////////////////////////SEMAFORO VIGENT
                                            //////blue

                                            $seminblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                            $qseminblu = $dbo->query($seminblu);
                                            while ($filase= $qseminblu->fetch(PDO::FETCH_ASSOC)) {

                                                $minblu = $filase['liminferior'];

                                            }

                                            $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '1'";
                                            $qsemaxblu = $dbo->query($semaxblu);
                                            while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                                $maxblu = $filase['limsuperior'];

                                            }

                                            //////green

                                            $semingreen = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                            $qsemingreen = $dbo->query($semingreen);
                                            while ($filase= $qsemingreen->fetch(PDO::FETCH_ASSOC)) {

                                                $mingreen= $filase['liminferior'];

                                            }

                                            $semaxblu = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '2'";
                                            $qsemaxblu = $dbo->query($semaxblu);
                                            while ($filase= $qsemaxblu->fetch(PDO::FETCH_ASSOC)) {

                                                $maxgreen = $filase['limsuperior'];

                                            }

                                            //////yell

                                            $seminyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                            $qseminyell = $dbo->query($seminyell);
                                            while ($filase= $qseminyell->fetch(PDO::FETCH_ASSOC)) {

                                                $minyell= $filase['liminferior'];

                                            }

                                            $semaxyell = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '3'";
                                            $qsemaxyell = $dbo->query($semaxyell);
                                            while ($filase= $qsemaxyell->fetch(PDO::FETCH_ASSOC)) {

                                                $maxyell = $filase['limsuperior'];

                                            }

                                            //////red

                                            $seminred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                            $qseminred = $dbo->query($seminred);
                                            while ($filase= $qseminred->fetch(PDO::FETCH_ASSOC)) {

                                                $minred= $filase['liminferior'];

                                            }

                                            $semaxred = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '4'";
                                            $qsemaxred = $dbo->query($semaxred);
                                            while ($filase= $qsemaxred->fetch(PDO::FETCH_ASSOC)) {

                                                $maxred = $filase['limsuperior'];

                                            }

                                            //////guind

                                            $seminguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                            $qseminguind = $dbo->query($seminguind);
                                            while ($filase= $qseminguind->fetch(PDO::FETCH_ASSOC)) {

                                                $minguind= $filase['liminferior'];

                                            }

                                            $semaxguind = "SELECT * FROM $tabsemaf WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND intervalo = '5'";
                                            $qsemaxguind = $dbo->query($semaxguind);
                                            while ($filase= $qsemaxguind->fetch(PDO::FETCH_ASSOC)) {

                                                $maxguind = $filase['limsuperior'];

                                            }

                                        ?>

                                    </section>

                                    <?php


                                          
                                             
                                        $tabindi = "SELECT * FROM $tabRes WHERE  yearini LIKE '%$year%' AND activo = 'SI' AND useresp LIKE '%$serespy%' AND unidad LIKE '%$clientesu%'  ";
                                      
                                      
                                            $qtabindi = $dbo->query($tabindi);
                                        //////////////////impresion de tabla
                                        while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                    
                                            $indicador = $fila['nombre'];
                                            $unmed = $fila['unmed'];
                                         
                                            $meta = $fila['meta'];  
                                            $pond = $fila['pond'];      
                                            $acumulado = $fila['acumulado'];
                                            $promedio = $fila['promedio'];
                                            $cumple = $fila['cumple'];
                                            $resultado = $fila['resultado'];
                                            $idindi = $fila['idindi'];



                                            $obs1 = $fila['obs1']; 
                                            $obs2 = $fila['obs2']; 
                                            $obs3 = $fila['obs3']; 
                                            $obs4 = $fila['obs4']; 
                                            $obs5 = $fila['obs5']; 
                                            $obs6 = $fila['obs6']; 
                                            $obs7 = $fila['obs7']; 
                                            $obs8 = $fila['obs8']; 
                                            $obs9 = $fila['obs9']; 
                                            $obs10 = $fila['obs10']; 
                                            $obs11 = $fila['obs11']; 
                                            $obs12 = $fila['obs12']; 
                                         

                                            if(empty($periodo)){

                                            }else{
                                                $mesmes = $fila[''.$mescol.''];
                                            }

                                           
                                            
                                            $useresp = $fila['useresp']; 
                            
                                                ?>


                                                    <tr>
                                                        
                                                        <td><div class="idindi"><strong class="idinditxt"><?php echo $idindi?></strong></td>
                                                        <td id="ponderacio" class="input1 center">
                                                            <?php echo number_format($pond, 2) . '%'; ;?>
                                                        </td>

                                                        <td id="met" class="input1 center">
                                                            <?php

                                                                if($unmed == 'MONEDA'){
                                                                     echo '$'. number_format($meta); 
                                                                }
                                                                elseif($unmed == 'PORCENTAJE' OR $unmed == 'PROMEDIO'){
                                                                     echo number_format($meta, 2) . '%';
                                                                }
                                                                elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' ){
                                                                    echo $meta ;
                                                                }
                                                                elseif($unmed == 'DIAS PROMEDIO' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                  echo $meta.' días' ;
                                                                }
                                                            
                                                            ?>
                                                        </td>

                                                    
                                                        <td id="logr" class="input1 center">

                                                        
                                                                    <?php


                                                                    
                                                                        if(empty($mesmes)){


                                                                            if($promedio == NULL ){
                                                                               echo 'NE'; 
                                                                            }else{
                                                                                if($unmed == 'MONEDA' ){
                                                                                   echo '$'. number_format($promedio);
                                                                                }elseif($unmed == 'PORCENTAJE'){
                                                                                echo number_format($promedio, 2) . '%';
                                                                                }elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR 
                                                                                        $unmed == 'ROTACION' OR $unmed == 'PLAZO PROMEDIO' ){
                                                                                    echo $promedio ;
                                                                                }
                                                                                elseif($unmed == 'INDICE' OR $unmed == 'PROMEDIO'){
                                                                                   echo number_format($promedio, 1);
                                                                                }
                                                                            }
                                                                              
                                                                        }else{

                                                                     

                                                                            if($unmed == 'MONEDA' ){
                                                                                echo '$'. number_format($mesmes);
                                                                            }
                                                                            elseif($unmed == 'PORCENTAJE'){
                                                                              echo number_format($mesmes, 2) . '%';
                                                                            }
                                                                            elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR 
                                                                                    $unmed == 'ROTACION' OR $unmed == 'PLAZO PROMEDIO' ){
                                                                               echo $mesmes ;
                                                                            }
                                                                            elseif($unmed == 'INDICE' OR $unmed == 'PROMEDIO'){
                                                                               echo number_format($mesmes, 1);
                                                                            }
                                                                        }
                                                                    
                                                                    ?>
                                                        
                                                        </td>                                            
                                                        
                                                        <td id="cumple" class="input1 center">

                                                            
                                                                    <?php

                                                                    

                                                                        if($cumple ==  NULL){
                                                                            
                                                                             echo 'NE';     
                                                                        }else{
                                            
                                                                            

                                                                            if($cumple >= $minguind & $cumple <= $maxguind){
                                                                                 echo number_format($cumple, 2) . '%';                                
                                                                            }elseif($cumple >= $minred & $cumple <= $maxred){
                                                                                echo number_format($cumple, 2) . '%';                        
                                                                            }elseif($cumple >= $minyell & $cumple <= $maxyell){
                                                                               echo number_format($cumple, 2) . '%';                          
                                                                            }elseif($cumple >= $mingreen & $cumple <= $maxgreen){
                                                                               echo number_format($cumple, 2) . '%';                              
                                                                            }elseif($cumple >= $minblu){
                                                                                echo number_format($cumple, 2) . '%';                               
                                                                            }
                                                                        
                                                                        }                                        
                                                                    
                                                                    ?>
                                                        

                                                        </td>

                                                        <td id="desempen" class="input3 center">

                                                            <?php

                                                                
                                                                
                                                                if($resultado == NULL ){
                                                                                        
                                                                    echo 'NE'; 
                                                                }else{
                                                                  
                                                                

                                                                   echo number_format($resultado, 2) . '%';

                                                                
                                                                }
                                                            
                                                        
                                        
                                                            ?>

                                                        </td>

                                                        <td id="observ" rowspan="2" class="input4">
                                    
                                                              <?php
                                                              
                                                                if($mescol == 'm1'){
                                                                    echo  $obs1;
                                                                }elseif($mescol == 'm2'){
                                                                    echo  $obs2;
                                                                }elseif($mescol == 'm3'){
                                                                    echo  $obs3;
                                                                }elseif($mescol == 'm4'){
                                                                    echo  $obs4;
                                                                }elseif($mescol == 'm5'){
                                                                    echo  $obs5;
                                                                }elseif($mescol == 'm6'){
                                                                    echo  $obs6;
                                                                }elseif($mescol == 'm7'){
                                                                    echo  $obs7;
                                                                }elseif($mescol == 'm8'){
                                                                    echo  $obs8;
                                                                }elseif($mescol == 'm9'){
                                                                    echo  $obs9;
                                                                }elseif($mescol == 'm10'){
                                                                    echo  $obs10;
                                                                }elseif($mescol == 'm11'){
                                                                    echo  $obs11;
                                                                }elseif($mescol == 'm12'){
                                                                    echo  $obs12;
                                                                }
                                                              
                                                              
                                                           
                                                              ?>
                                                            
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td></td>
                                                        <td id="nomindi" colspan="5" class="input2 justify">
                                                           <?php echo $indicador ;?>
                                                        </td>

                                                        <!--
                                                        <td id="nomindi" colspan="5" class="input2">
                                                            <textarea class="textarea" readonly><?php echo $indicador ;?></textarea>
                                                        </td>
                                                            -->
                                                    </tr>

                                                    <tr>
                                                        <td></td>
                                                        <td  colspan="6"><div class="divdiv"></div></td>
                                                    </tr>

                                                <?php



                                        }



                                    
                                    ?>
                                        
                                </table>


                                <table id="tablataINDImes">
                                    <div class="ocucol"></div>    
                                    <tr id="columnasMEs">
                                        <th class="indiuser">URUARIO</th>
                                        <th class="indiik">INDICADOR</th>
                                        <th class="longmes">LOGRO</th>
                                        <th class="longmes">CUMPLE</th>
                                        <th class="longmes">RESULTADO</th>
                                        <th class="longmes">ENE</th>  
                                        <th class="longmes">FEB</th>  
                                        <th class="longmes">MAR</th>  
                                        <th class="longmes">ABR</th>  
                                        <th class="longmes">MAY</th>  
                                        <th class="longmes">JUN</th>  
                                        <th class="longmes">JUL</th>  
                                        <th class="longmes">AGO</th>  
                                        <th class="longmes">SEP</th>  
                                        <th class="longmes">OCT</th>  
                                        <th class="longmes">NOV</th>  
                                        <th class="longmes">DIC</th>  
                                    
                                    </tr>



                                    <?php


                                        if($tabdueno=='GER'){
                                            $tabindi = "SELECT * FROM $tabRes WHERE  yearini LIKE '%$year%' AND useresp LIKE '%$tabdueno%' AND activo = 'SI' AND region LIKE '%$tabregion%' ";
                                       
                                        }else{
                                            $tabindi = "SELECT * FROM $tabRes WHERE  yearini LIKE '%$year%' AND useresp LIKE '%$tabdueno%' AND activo = 'SI' AND unidad LIKE '%$clientesu%'  ";
                                       
                                        }
                                      $qtabindi = $dbo->query($tabindi);

                                        //////////////////impresion de tabla
                                        while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {

                                            $indicador = $fila['nombre'];
                                            $useresp = $fila['useresp'];
                                            $unmed = $fila['unmed'];
                                            $acumuladoPRI = $fila['acumulado'];
                                            $cumplePRI = $fila['cumple'];
                                            $cumplePRINT = number_format($cumplePRI,2).'%';


                                            $resultadoPRI = $fila['resultado'];
                                            $resultadoPRINT = number_format($resultadoPRI,2).'%';

                                            $rem1 = $fila['m1'];
                                            $rem2 = $fila['m2'];
                                            $rem3 = $fila['m3'];
                                            $rem4 = $fila['m4'];
                                            $rem5 = $fila['m5'];
                                            $rem6 = $fila['m6'];
                                            $rem7 = $fila['m7'];
                                            $rem8 = $fila['m8'];
                                            $rem9 = $fila['m9'];
                                            $rem10 = $fila['m10'];
                                            $rem11 = $fila['m11'];
                                            $rem12 = $fila['m12'];
                                        
                                            

                                            if($unmed == 'PORCENTAJE'){
                                                $acumuladoPRINT = number_format($acumuladoPRI,2).'%';
                                            }elseif($unmed == 'MONEDA'){
                                                $acumuladoPRINT = '$'. number_format($acumuladoPRI,2);
                                            }


                                                ?>
                                                    <tr>
                                                        <td class="center"><?php echo $useresp ;?></td>
                                                        <td id="indileft"><?php echo $indicador ;?></td>
                                                        <td class="center"><?php echo $acumuladoPRINT ;?></td>
                                                        <td class="center"><?php echo $cumplePRINT ;?></td>
                                                        <td class="center"><?php echo $resultadoPRINT ;?></td>
                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem1)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem1);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem1, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION' OR $indicador == 'PLAZO PROMEDIO' OR $unmed == 'PROMEDIO'){
                                                                        echo $rem1 ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem2)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem2);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem2, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem2 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem2.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem3)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem3);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem3, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR $unmed == 'PROMEDIO'){
                                                                        echo $rem3 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem3.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem4)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem4);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem4, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem4 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem4.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem5)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem5);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem5, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem5 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem5.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem6)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem6);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem6, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem6 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem6.' días' ;
                                                                    }
                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem7)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem7);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem7, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem7 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem7.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem8)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem8);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem8, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem8 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem8.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem9)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem9);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem9, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem9 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem9.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem10)){
                                                                    echo 'NE';

                                                                }else{
                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem10);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem10, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem10 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem10.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem11)){
                                                                    echo 'NE';

                                                                }else{

                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem11);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem11, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem11 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem11.' días' ;
                                                                    }


                                                                }

                                                            ?>

                                                        </td>

                                                        <td class="mesess">

                                                            <?php

                                                                if(empty($rem12)){
                                                                    echo 'NE';

                                                                }else{

                                                                
                                                                    if($unmed == 'MONEDA' ){
                                                                        echo '$'. number_format($rem12);
                                                                    }
                                                                    elseif($unmed == 'PORCENTAJE'){
                                                                        echo number_format($rem12, 2) . '%';
                                                                    }
                                                                    elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR $unmed == 'INDICE' OR
                                                                            $unmed == 'ROTACION'  OR $unmed == 'PROMEDIO'){
                                                                        echo $rem12 ;
                                                                    }
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO' OR $unmed == 'PLAZO PROMEDIO'){
                                                                        echo $rem12.' días' ;
                                                                    }

                                                                }

                                                            ?>

                                                        </td>

                                                    </tr>


                                                <?php



                                        }

                                        
                                    ?>
                                        
                                </table>
                                
                            </section>

            
                        <?php
                    }


    ?>