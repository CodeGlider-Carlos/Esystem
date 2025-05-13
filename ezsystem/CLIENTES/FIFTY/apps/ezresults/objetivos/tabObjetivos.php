<?php 
require_once '../varSQL/dbmysql.php';

if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];
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

        $vadyoj = "SELECT * FROM $alobj WHERE yearini LIKE '%$year%' AND useresp LIKE '%$dueno%' AND activo = 'SI' ";
        $qvadyoj = $dbo->query($vadyoj);
        while ($fila= $qvadyoj->fetch(PDO::FETCH_ASSOC)) {

            $dydy = $fila['id'];
            $serespy = $fila['useresp'];
        }

        if(empty($serespy)){

            $nombreObj = 'SIN DATOS';
          
        }else{
            $nameUser = "SELECT * FROM $gedir WHERE clave LIKE '%$serespy%' ";
            $qnameUser = $dbo->query($nameUser);
            while ($fila= $qnameUser->fetch(PDO::FETCH_ASSOC)) {
    
                $nombreObj = $fila['nombre'];
                $nombrePrint = $fila['nombre'];
                $region = $fila['region'];
            }

            if(empty($nombreObj)){

                $nameUser = "SELECT * FROM $gejef WHERE clave LIKE '%$serespy%' ";
                $qnameUser = $dbo->query($nameUser);
                while ($fila= $qnameUser->fetch(PDO::FETCH_ASSOC)) {
        
                    $nombrePrint = $fila['nombre'];
                    $region = $fila['region'];
                }

            }
     
        }
        ?>


   
          
                    <div class="titleSection"><h5>OBJETIVOS CLAVE: <?php echo $year.'/'.$periodo.'/'.$region.'/'.$clientesu.'/'.$nombrePrint; ?></h5></div>
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

                    if(empty($serespy)){
                    }else{

                        ?>
                            


                            <section id="tablaINDI">

                                <table id="tablataINDI">
                                    
                                    <tr id="columnasindi">
                                        <th id="vacios"></th>
                                        <th id="pondes">POND</th>
                                        <th id="metas">META</th>
                                        <th id="logros">LOGRO</th>
                                        <th id="cumples">CUMPLE</th>
                                        <th id="deses">DESEMPEÑO</th>

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

                                 

                                        $tabindi = "SELECT * FROM $alobj WHERE  yearini LIKE '%$year%' AND activo = 'SI' AND useresp = '$dueno'";
                                        $qtabindi = $dbo->query($tabindi);
                                        //////////////////impresion de tabla
                                        while ($fila = $qtabindi->fetch(PDO::FETCH_ASSOC)) {
                                    
                                            $indicador = $fila['objetivo'];
                                            $unmed = $fila['unmed'];               
                                            $perspect = $fila['perspectiva'];
                                            $meta = $fila['meta'];  
                                            $pond = $fila['pond'];      
                                            $logro = $fila['acumulado'];
                                            $cumple = $fila['cumple'];
                                            $resultado = $fila['resultado'];

                                            $m1 = $fila['m1'];
                                            $m2 = $fila['m2'];
                                            $m3 = $fila['m3'];
                                            $m4 = $fila['m4'];
                                            $m5 = $fila['m5'];
                                            $m6 = $fila['m6'];
                                            $m7 = $fila['m7'];
                                            $m8 = $fila['m8'];
                                            $m9 = $fila['m9'];
                                            $m10 = $fila['m10'];
                                            $m11 = $fila['m11'];
                                            $m12 = $fila['m12'];


                                            if(empty($periodom)){

                                                $logroPri = $logro;

                                            }else{

                                                if($periodom == '01'){
                                                    $logroPri = $m1;
                                                }elseif($periodom == '02'){
                                                    $logroPri = $m2;
                                                }elseif($periodom == '03'){
                                                    $logroPri = $m3;
                                                }elseif($periodom == '04'){
                                                    $logroPri = $m4;
                                                }elseif($periodom == '05'){
                                                    $logroPri = $m5;
                                                }elseif($periodom == '06'){
                                                    $logroPri = $m6;
                                                }elseif($periodom == '07'){
                                                    $logroPri = $m7;
                                                }elseif($periodom == '08'){
                                                    $logroPri = $m8;
                                                }elseif($periodom == '09'){
                                                    $logroPri = $m9;
                                                }elseif($periodom == '10'){
                                                    $logroPri = $m10;
                                                }elseif($periodom == '11'){
                                                    $logroPri = $m11;
                                                }elseif($periodom == '12'){
                                                    $logroPri = $m12;
                                                }










                                            }


                                            if($alobj == $tabojb_dg){

                                                $idobj = $fila['idobjdg'];
                                                $varIdobj = 'idobjdg';

                                            }elseif($alobj == $tabojb_reg){

                                                $idobj = $fila['idobjreg'];
                                                $varIdobj = 'idobjreg';

                                            }elseif($alobj == $tabojb_unid){

                                                $idobj = $fila['idobjunid'];
                                                $varIdobj = 'idobjunid';

                                            }
                                       

                                            $useresp = $fila['useresp']; 
                            
                                                ?>


                                                    <tr>
                                                        <td class="divdiv" colspan="6"></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td id="servde">
                                                            <input type="text" id="servdepp" value="<?php echo  $perspect;  ?>" readonly>
                                                        </td>
                                                        <td id="ponderacio">
                                                            <input type="text" id="ponderacion" value="<?php echo number_format($pond, 2) . '%'; ;?>" readonly>
                                                        </td>

                                                        <td id="met">
                                                            <?php

                                                                if($unmed == 'MONEDA'){
                                                                    ?><input type="text" id="meta" value="<?php  echo '$'. number_format($meta); ?>" readonly><?php
                                                                }
                                                                elseif($unmed == 'PORCENTAJE' OR $unmed == 'PROMEDIO'){
                                                                    ?><input type="text" id="meta" value="<?php echo number_format($meta, 2) . '%';?>" readonly><?php
                                                                }
                                                                elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' ){
                                                                    ?><input type="text" id="meta" value="<?php echo $meta ;?>" readonly><?php
                                                                }
                                                                elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE'){
                                                                    ?><input type="text" id="meta" value="<?php echo $meta.' días' ;?>" readonly><?php
                                                                }
                                                            
                                                            ?>
                                                        </td>

                                                    
                                                        <td id="logr">

                                                        
                                                                    <?php



                                                                    
                                                                        if(empty($logroPri)){
                                                                        
                                                                            ?><input type="text" id="logro" class="seNE" value="<?php  echo 'NE'; ?>" readonly><?php       
                                                                        }else{

                                                                   

                                                                            if($unmed == 'MONEDA' ){
                                                                                ?><input type="text" id="logro" value="<?php echo '$'. number_format($logroPri);?>" readonly><?php
                                                                            }
                                                                            elseif($unmed == 'PORCENTAJE'){
                                                                                ?><input type="text" id="logro" value="<?php echo number_format($logroPri, 2) . '%';?>" readonly><?php
                                                                            }
                                                                            elseif($unmed == 'TOTAL' OR $unmed == 'NUMERO' OR 
                                                                                    $unmed == 'ROTACION' OR $unmed == 'PLAZO PROMEDIO DE' ){
                                                                                ?><input type="text" id="logro" value="<?php echo $logroPri ;?>" readonly><?php
                                                                            }
                                                                            elseif($unmed == 'INDICE' OR $unmed == 'PROMEDIO'){
                                                                                ?><input type="text" id="logro" value="<?php echo number_format($logroPri, 1);?>" readonly><?php
                                                                            }
                                                                        }
                                                                    
                                                                    ?>
                                                        
                                                        </td>
                                                        
                                                        <td id="cumple">

                                                            
                                                                    <?php

                                                                    

                                                                        if(empty($cumple)){
                                                                            
                                                                            ?><input type="text" id="resultado" class="seNE" value="<?php  echo 'NE'; ?>" readonly><?php                                    
                                                                        }else{
                                            
                                                                    

                                                                            if($cumple >= $minguind & $cumple <= $maxguind){
                                                                                ?><input type="text" id="resultado" class="seBlack" value="<?php  echo number_format($cumple, 2) . '%'; ?>" readonly><?php                                    
                                                                            }elseif($cumple >= $minred & $cumple <= $maxred){
                                                                                ?><input type="text" id="resultado" class="sePINKrojo" value="<?php  echo number_format($cumple, 2) . '%'; ?>" readonly><?php                                    
                                                                            }elseif($cumple >= $minyell & $cumple <= $maxyell){
                                                                                ?><input type="text" id="resultado" class="sePINK" value="<?php  echo number_format($cumple, 2) . '%'; ?>" readonly><?php                                    
                                                                            }elseif($cumple >= $mingreen & $cumple <= $maxgreen){
                                                                                ?><input type="text" id="resultado" class="seGREEN" value="<?php  echo number_format($cumple, 2) . '%'; ?>" readonly><?php                                    
                                                                            }elseif($cumple >= $minblu){
                                                                                ?><input type="text" id="resultado" class="seBLUE" value="<?php  echo number_format($cumple, 2) . '%'; ?>" readonly><?php                                    
                                                                            }
                                                                        
                                                                        }                                        
                                                                    
                                                                    ?>
                                                        

                                                        </td>

                                                        <td id="resul">

                                                            <?php

                                                                
                                                                
                                                                if(empty($resultado)){
                                                                                        
                                                                    ?><input type="text" id="desempeno" class="seNE" value="<?php  echo 'NE'; ?>" readonly><?php  
                                                                }else{
                                                                  
                                                                

                                                                    ?><input type="text"  id="desempeno" value="<?php echo number_format($resultado, 2) . '%';?>" readonly><?php

                                                                
                                                                }
                                                            
                                                        
                                        
                                                            ?>

                                                        </td>

                                                    </tr>
                                                    
                                                    <tr>
                                                        <td id="nomindi">
                                                            <textarea id="nomindic" readonly><?php echo $indicador ;?></textarea>
                                                        </td>

                                                        <td id="perspec">
                                                            <?php

                                                            
                                                                    if($perspect == 'CLIENTE'){
                                                                        $printper = 'ENFOQUE EN EL CLIENTE';
                                                                    }elseif($perspect == 'PROCESOS'){
                                                                        $printper = 'ENFOQUE DE PROCESOS';
                                                                    }elseif($perspect == 'FINANCIERA'){
                                                                        $printper = 'ENFOQUE FINANCIERO';
                                                                    }elseif($perspect == 'CRECIMIENTO'){
                                                                        $printper = 'ENFOQUE DE CRECIMIENTO';
                                                                    }elseif($perspect == 'DESARROLLO'){
                                                                        $printper = 'ENFOQUE DE DESARROLLO';
                                                                    }
                                                                
                                                                    ?>
                                                                <input type="text" id="perspecc"  value="<?php echo $printper;?>" readonly>
                                                                
                                                        </td>

                                                        <td></td> 
                                                        <td></td> 

                                                        <td id="idobj">

                                                            <input type="text" id="idobjet" value="<?php  echo $idobj;  ?>" readonly>

                                                        
                                                        </td> 

                                                        <td></td> 
                                                    </tr>



                                                <?php



                                        }

                                    
                                    ?>
                                        
                                </table>


                                <table id="tablataINDImes">
                                    <div class="ocucol"></div>    
                                    <tr id="columnasMEs">
                                     
                                        <th class="indiik">OBJETIVO</th>
                                 
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


                                    
                                        $tabindi2 = "SELECT * FROM $alobj WHERE yearini LIKE '%$year%' AND activo = 'SI' AND useresp = '$dueno' ";
                                        $qtabindi2 = $dbo->query($tabindi2);

                                        //////////////////impresion de tabla
                                        while ($fila = $qtabindi2->fetch(PDO::FETCH_ASSOC)) {
                                            $indicador = $fila['objetivo'];
                                            $useresp = $fila['useresp'];
                                            $unmed = $fila['unmed'];

                                            $acumuladop = $fila['acumulado'];
                                            $cumplep = $fila['cumple'];
                                            $resultadop = $fila['resultado'];

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
                                        



                                                ?>
                                                    <tr>
                                                        <td id="indileft"><?php echo $indicador ;?></td>
                                             
                                                        <td class="mesess"><?php echo $cumplep ;?></td>
                                                        <td class="mesess"><?php echo $resultadop ;?></td>
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
                                                                            $unmed == 'ROTACION' OR $indicador == 'PLAZO PROMEDIO DE INVENTARIOS' OR $unmed == 'PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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
                                                                    elseif($unmed == 'DIAS PROMEDIO DE' OR $unmed == 'PLAZO MAXIMO DE' OR $unmed == 'PLAZO PROMEDIO DE'){
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