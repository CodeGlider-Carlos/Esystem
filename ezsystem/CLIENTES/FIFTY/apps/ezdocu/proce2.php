<?php




$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];


$region = isset($_POST['region']) ? $_POST['region'] : false;
$unidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;
$macro = isset($_POST['macro']) ? $_POST['macro'] : false;
$enfcat = isset($_POST['enfcat']) ? $_POST['enfcat'] : false;
$tabdueno = isset($_POST['tabdueno']) ? $_POST['tabdueno'] : false;


?>


         

                <div class="nameENFOQ"><?php echo $enfcat; ?></div>
         
                <div id="back_proces">

                    <div id="backbackPro">
         
                        <table id="tableProc1" class="tableProc">

                        

                        
                            <?php


                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%'  ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];
                                    $flecha1 = $filaCed['flecha'];

                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];

                                        
                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;

                                    }



                                    $PrintRES = substr($prindResp, 0,-1); 

                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '1' ){

                                        

                                            ?>
                                                            
                                
                                            

                                                <?php

                                                    if($tipotxt == 'ENTRADA' ){
                                                    
                                                    }else{
                                                        ?>
                                                   
                                                            <th class="titulo2  inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                            <th class="titulo2 activi inputpro left paso" >
                                                                <p><strong><?php echo $tarea;?></strong></p>
                                                                <div class=" textDoc2  inputdocume1 center"><?php  echo $docapli;?></div>
                                                            </th>
                                                            <td class="  activiMAY  center respResp">
                                                                <p>

                                                                    <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                ?>

                                                <?php
                                                    if($flecha1 == 'de'){
                                                        ?>
                                                            <td><img  src="img/diag/derecha.png" class="derecha"> </td>

                                                        <?php

                                                    }elseif($flecha1 == 'baj'){
                                                        ?>
                                                            <td><img  src="img/diag/curvaDE2.png" class="abajoDE"> </td>

                                                        <?php

                                                    }elseif($flecha1 == 'ini'){
                                                        ?>
                                                            <td><img  src="img/diag/ini.png" class="derecha"> </td>

                                                        <?php

                                                    }
                                                ?>

                                            
                                        
                                            
                                                                            
                                            <?php

                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }
                            ?>
                                        
                                    

                        </table>     
                        
                        <?php

                            $classBloq2 = 'tableProc2a';
                           

                            $totaBloq2 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '2' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                            $totaBloqSAliz2 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '2' AND  flecha = 'saliz' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                        
                         
                            if($totaBloq2 == 2){
                                $classBloq2 = 'tableProc2_2';
                            }elseif($totaBloq2 == 3){
                                $classBloq2 = 'tableProc2_3';
                            }elseif($totaBloq2 == 4){

                                if($totaBloqSAliz2 == 1){
                                    $classBloq2 = 'tableProc2_4fin';
                                }else{
                                    $classBloq2 = 'tableProc2_4';
                                }
                                
                            }
                           
                        ?>
                        
                        <table id="<?php echo $classBloq2;?>" class="tableProc">
                            

                        
                            <?php


                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' ORDER BY id DESC ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];
                                    $flecha = $filaCed['flecha'];

                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];

                                 
                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;

                                    }
                                    $PrintRES = substr($prindResp, 0,-1); 
                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '2' ){

                                        
                                            ?>
                                                            
                                                
                                                <?php
                                                    if($flecha == 'de'){
                                                        ?>
                                                            <td><img  src="img/diag/derecha.png" class="derecha"> </td>

                                                        <?php

                                                    }elseif($flecha == 'iz'){
                                                        ?>
                                                            <td><img  src="img/diag/izquierda.png" class="izquierda"> </td>

                                                        <?php

                                                    }elseif($flecha == 'baj'){
                                                        ?>
                                                            <td><img  src="img/diag/abajo.png" class="abajoIZ"> </td>

                                                        <?php

                                                    }elseif($flecha == 'sal'){
                                                        ?>
                                                            <td><img  src="img/diag/sal.png" class="salsal"> </td>

                                                        <?php

                                                    }elseif($flecha == 'salde'){
                                                        ?>
                                                            <td><img  src="img/diag/salde.png" class="saldeiz"> </td>

                                                        <?php

                                                    }elseif($flecha == 'saliz'){
                                                        ?>
                                                            <td><img  src="img/diag/saliz.png" class="saldeiz"> </td>

                                                        <?php

                                                    }
                                                ?>

                                            
                                                <?php

                                                    if($tipotxt == 'SALIDA'){
                                                    
                                                    }else{
                                                        ?>
                                                        <th class="  inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                        <th class="titulo2 activi inputpro left paso" >
                                                            <p><strong><?php echo $tarea;?></strong></p>
                                                            <div class=" textDoc2  inputdocume2 center"><?php  echo $docapli;?></div>
                                                        </th>
                                                            <td class="  activiMAY  center respResp"><p>

                                                                <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                ?>
                                            
                                            
                                                                            
                                            <?php

                                            
                                        

                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }
                            ?>
                                        
                                    

                        </table>   

                        <?php
                            $classBloq3 = 'tableProc3_4';

                            $totaBloq3 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '3' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                            $totaBloqSAliz3 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '3' AND  flecha = 'saliz' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());


                            if($totaBloq3 == 2){
                                $classBloq3 = 'tableProc3_2';
                            }elseif($totaBloq3 == 3){
                                $classBloq3 = 'tableProc3_3';
                            }elseif($totaBloq3 == 4){

                                if($totaBloqSAliz3 == 1){
                                    $classBloq3 = 'tableProc3_4fin';
                                }else{
                                    $classBloq3 = 'tableProc3_4';
                                }
                                
                            }

                        ?>                     
                      
                        <table id="<?php echo $classBloq3;?>" class="tableProc">
                            
                        
                        
                            <?php


                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%'  ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];

                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];
                                    $flecha = $filaCed['flecha'];

                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;
                                    }
                                    $PrintRES = substr($prindResp, 0,-1); 
                                   
                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '3' ){

                                        
                                            ?>
                                                            
                                
                                            
                                                <?php

                                                    if($tipotxt == 'SALIDA'){
                                                
                                                    }else{
                                                        ?>
                                                            <th class="  inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                            <th class="titulo2 activi inputpro left paso" >
                                                                <p><strong><?php echo $tarea;?></strong></p>
                                                                <div class=" textDoc2  inputdocume3 center"><?php  echo $docapli;?></div>
                                                            </th>
                                                            <td class="  activiMAY  center respResp"><p>

                                                                <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                    ?>
                                                        <?php
                                                            if($flecha == 'de'){

                                                                if($totaBloq3 == 3){
                                                                    ?>
                                                                        <td><img  src="img/diag/derecha.png" class="derecha3_3"> </td>

                                                                    <?php
                                                                }elseif($totaBloq3 == 2){
                                                                    ?>
                                                                        <td><img  src="img/diag/derecha.png" class="derecha3_2"> </td>

                                                                    <?php
                                                                }elseif($totaBloq3 == 4){
                                                                    ?>
                                                                        <td><img  src="img/diag/derecha.png" class="derecha3_4"> </td>

                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                        <td><img  src="img/diag/derecha.png" class="derecha3"> </td>

                                                                    <?php
                                                                }
                                                                

                                                            }elseif($flecha == 'iz'){
                                                                ?>
                                                                    <td><img  src="img/diag/izquierda.png" class="derecha3"> </td>

                                                                <?php

                                                            }elseif($flecha == 'baj'){
                                                                ?>
                                                                    <td><img  src="img/diag/curvaDE2.png" class="abajoDE"> </td>

                                                                <?php

                                                            }elseif($flecha == 'sal'){
                                                                ?>
                                                                    <td><img  src="img/diag/sal.png" class="salsal"> </td>
            
                                                                <?php
            
                                                            }elseif($flecha == 'salde'){
                                                                ?>
                                                                    <td><img  src="img/diag/salde.png" class="saldeiz"> </td>
            
                                                                <?php
            
                                                            }elseif($flecha == 'saliz'){
                                                                ?>
                                                                    <td><img  src="img/diag/saliz.png" class="saldeiz"> </td>
            
                                                                <?php
            
                                                            }
                                                        ?>

                                            
                                                                            
                                            <?php

                                    
                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }
                            ?>
                                        
                                    

                        </table>   

                        <?php

                            $classBloq4 = 'tableProc4_4';
                            $totaBloq4 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '4' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                            $totaBloqSAliz4 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '4' AND  flecha = 'saliz' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());


                            if($totaBloq4 == 2){
                                $classBloq4 = 'tableProc4_2';
                            }elseif($totaBloq4 == 3){
                                $classBloq4 = 'tableProc4_3';
                            }elseif($totaBloq3 == 4){

                                if($totaBloqSAliz4 == 1){
                                    $classBloq4 = 'tableProc4_4fin';
                                }else{
                                    $classBloq4 = 'tableProc4_4';
                                }
                                
                            }

                        ?>

                        <table id="<?php echo $classBloq4;?>" class="tableProc">
                            
                        
                        
                            <?php


                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%'  ORDER BY id DESC ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];
                                    $flecha = $filaCed['flecha'];
                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];

                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;

                                    }
                                    $PrintRES = substr($prindResp, 0,-1); 
                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '4' ){

                                        
                                            
                                            if($flecha == 'de'){
                                                ?>
                                                    <td><img  src="img/diag/derecha.png" class="derecha"> </td>

                                                <?php

                                            }elseif($flecha == 'iz'){
                                                ?>
                                                    <td><img  src="img/diag/izquierda.png" class="izquierda"> </td>

                                                <?php

                                            }elseif($flecha == 'baj'){
                                                ?>
                                                    <td><img  src="img/diag/abajo.png" class="abajoIZ"> </td>

                                                <?php

                                            }elseif($flecha == 'sal'){
                                                ?>
                                                    <td><img  src="img/diag/sal.png" class="salsal"> </td>

                                                <?php

                                            }elseif($flecha == 'salde'){
                                                ?>
                                                    <td><img  src="img/diag/salde.png" class="saldeiz"> </td>

                                                <?php

                                            }elseif($flecha == 'saliz'){
                                                ?>
                                                    <td><img  src="img/diag/saliz.png" class="saldeiz"> </td>

                                                <?php

                                            }
                                        
                                            ?>
                                                            
                                
                                                <?php

                                                    if($tipotxt == 'SALIDA'){
                                                    
                                                    }else{
                                                        ?>
                                                        
                                                            <th class="  inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                            <th class="titulo2 activi inputpro left paso" >
                                                                <p><strong><?php echo $tarea;?></strong></p>
                                                                <div class=" textDoc2  inputdocume4 center"><?php  echo $docapli;?></div>
                                                            </th>
                                                            <td class="  activiMAY  center respResp"><p>

                                                                <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                ?>
                                            
                                            
                                                                            
                                            <?php

                                            
                                        

                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }
                            ?>
                                        
                                    

                        </table> 

                        <?php

                            $classBloq5 = 'tableProc5_4';
                            $totaBloq5 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '5' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                            $totaBloqSAliz5 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '5' AND  flecha = 'saliz' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());


                            if($totaBloq5 == 2){
                                $classBloq5 = 'tableProc5_2';
                            }elseif($totaBloq5 == 3){
                                $classBloq5 = 'tableProc5_3';
                            }elseif($totaBloq5 == 4){

                                if($totaBloqSAliz5 == 1){
                                    $classBloq5 = 'tableProc5_4fin';
                                }else{
                                    $classBloq5 = 'tableProc5_4';
                                }
                                
                            }

                        ?>

                        <table id="<?php echo $classBloq5;?>" class="tableProc">
                            
                            <?php

                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%'  ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];

                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];
                                    $flecha = $filaCed['flecha'];
                                        
                                
                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;

                                    }
                                    $PrintRES = substr($prindResp, 0,-1); 
                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '5' ){

                                        
                                            ?>
                                                            
                                
                                            
                                                <?php

                                                    if($tipotxt == 'SALIDA'){
                                                        ?>
                                                    
                                                
                                                    
                                                <?php
                                                    }else{
                                                        ?>
                                                            <th class=" inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                            <th class="titulo2 activi inputpro left paso" >
                                                                <p><strong><?php echo $tarea;?></strong></p>
                                                                <div class=" textDoc2  inputdocume5 center"><?php  echo $docapli;?></div>
                                                            </th>
                                                            <td class="  activiMAY  center respResp"><p>

                                                                <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                    ?>
                                                        <?php
                                                            if($flecha == 'de'){
                                                                ?>
                                                                    <td><img  src="img/diag/derecha.png" class="derecha5"> </td>

                                                                <?php

                                                            }elseif($flecha == 'iz'){
                                                                ?>
                                                                    <td><img  src="img/diag/izquierda.png" class="izquierda"> </td>

                                                                <?php

                                                            }elseif($flecha == 'baj'){
                                                                ?>
                                                                    <td><img  src="img/diag/curvaDE2.png" class="abajoDE"> </td>

                                                                <?php

                                                            }elseif($flecha == 'sal'){
                                                                ?>
                                                                    <td><img  src="img/diag/sal.png" class="salsal"> </td>
            
                                                                <?php
            
                                                            }elseif($flecha == 'salde'){
                                                                ?>
                                                                    <td><img  src="img/diag/salde.png" class="saldeiz"> </td>
            
                                                                <?php
            
                                                            }elseif($flecha == 'saliz'){
                                                                ?>
                                                                    <td><img  src="img/diag/saliz.png" class="saldeiz"> </td>
            
                                                                <?php
            
                                                            }
                                                        ?>

                                            
                                            
                                                                            
                                            <?php

                                    
                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }

                            ?>
                           
                        </table>                                              

                  
                        <?php

                            $classBloq6 = 'tableProc6_4';
                            $totaBloq6 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '6' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                            $totaBloqSAliz6 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '6' AND  flecha = 'saliz' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());


                            if($totaBloq6 == 2){
                                $classBloq6 = 'tableProc6_2';
                            }elseif($totaBloq6 == 3){
                                $classBloq6 = 'tableProc6_3';
                            }elseif($totaBloq6 == 4){

                                if($totaBloqSAliz6 == 1){
                                    $classBloq6 = 'tableProc6_4fin';
                                }else{
                                    $classBloq6 = 'tableProc6_4';
                                }
                                
                            }

                        ?>

                        <table id="<?php echo $classBloq6;?>" class="tableProc">
                            
                        
                        
                            <?php


                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%'  ORDER BY id DESC ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];
                                    $flecha = $filaCed['flecha'];
                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];

                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;

                                    }
                                    $PrintRES = substr($prindResp, 0,-1); 
                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '6' ){

                                        
                                            
                                            if($flecha == 'de'){
                                                ?>
                                                    <td><img  src="img/diag/derecha.png" class="derecha"> </td>

                                                <?php

                                            }elseif($flecha == 'iz'){
                                                ?>
                                                    <td><img  src="img/diag/izquierda.png" class="izquierda"> </td>

                                                <?php

                                            }elseif($flecha == 'baj'){
                                                ?>
                                                    <td><img  src="img/diag/abajo.png" class="abajoIZ"> </td>

                                                <?php

                                            }elseif($flecha == 'sal'){
                                                ?>
                                                    <td><img  src="img/diag/sal.png" class="salsal"> </td>

                                                <?php

                                            }elseif($flecha == 'salde'){
                                                ?>
                                                    <td><img  src="img/diag/salde.png" class="saldeiz"> </td>

                                                <?php

                                            }elseif($flecha == 'saliz'){
                                                ?>
                                                    <td><img  src="img/diag/saliz.png" class="saldeiz"> </td>

                                                <?php

                                            }
                                        
                                            ?>
                                                            
                                
                                                <?php

                                                    if($tipotxt == 'SALIDA'){
                                                    
                                                    }else{
                                                        ?>
                                                        
                                                            <th class="  inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                            <th class="titulo2 activi inputpro left paso" >
                                                                <p><strong><?php echo $tarea;?></strong></p>
                                                                <div class=" textDoc2  inputdocume4 center"><?php  echo $docapli;?></div>
                                                            </th>
                                                            <td class="  activiMAY  center respResp"><p>

                                                                <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                ?>
                                            
                                            
                                                                            
                                            <?php

                                            
                                        

                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }
                            ?>
                                        
                                    

                        </table> 

                        
                        <?php

                            $classBloq7 = 'tableProc7_4';
                            $totaBloq7 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '7' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());
                            $totaBloqSAliz7 = current($db_docu->query("SELECT COUNT(*) FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' AND bloque = '7' AND  flecha = 'saliz' AND (tipotxt LIKE '%ETAPA%' OR tipotxt LIKE '%TAREA%') ")->fetch());


                            if($totaBloq7 == 2){
                                $classBloq7 = 'tableProc7_2';
                            }elseif($totaBloq7 == 3){
                                $classBloq7 = 'tableProc7_3';
                            }elseif($totaBloq7 == 4){

                                if($totaBloqSAliz7 == 1){
                                    $classBloq7 = 'tableProc7_4fin';
                                }else{
                                    $classBloq7 = 'tableProc7_4';
                                }
                                
                            }

                        ?>

                        <table id="<?php echo $classBloq7;?>" class="tableProc">
                            
                            <?php

                                $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%'  ";
                                $qtabproced = $db_docu->query($tabproced);

                                while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                    $idid = $filaCed['id'];
                                
                                    $idta = $filaCed['idta'];
                                    $punto = $filaCed['punto'];
                                    $idnum = $filaCed['idnum'];
                                    $tipotxt = $filaCed['tipotxt'];
                                    $bloque = $filaCed['bloque'];
                                    $etapa = $filaCed['etapa'];
                                    $tarea = $filaCed['tarea'];
                                    $frecuencia = $filaCed['momento'];
                                    $docapli = $filaCed['docapli'];

                                    $resptask = $filaCed['resptask'];
                                    $resptask1 = $filaCed['resptask1'];
                                    $resptask2 = $filaCed['resptask2'];
                                    $resptask3 = $filaCed['resptask3'];
                                    $resptask4 = $filaCed['resptask4'];
                                    $resptask5 = $filaCed['resptask5'];
                                    $resptask6 = $filaCed['resptask6'];
                                    $resptask7 = $filaCed['resptask7'];
                                    $resptask8 = $filaCed['resptask8'];
                                    $resptask9 = $filaCed['resptask9'];
                                    $resptask10 = $filaCed['resptask10'];
                                    $flecha = $filaCed['flecha'];
                                        
                                
                                    if(empty($resptask2)){
                                        $prindResp = $resptask1.','.$resptask2;
                                    }elseif(empty($resptask3)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3;
                                    }elseif(empty($resptask4)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4;
                                    }elseif(empty($resptask5)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5;
                                    }elseif(empty($resptask6)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6;
                                    }elseif(empty($resptask7)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7;
                                    }elseif(empty($resptask8)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8;
                                    }elseif(empty($resptask9)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8;
                                    }elseif(empty($resptask10)){
                                        $prindResp = $resptask1.','.$resptask2.','.$resptask3.','.$resptask4.','.$resptask5.','.$resptask6.','.$resptask7.','.$resptask8.','.$resptask8.','.$resptask8;
                                    }else{
                                        $prindResp = $resptask1;

                                    }
                                    $PrintRES = substr($prindResp, 0,-1); 
                                    ?>
                                        
                                

                                        <?php

                                        if($bloque == '7' ){

                                        
                                            ?>
                                                            
                                
                                            
                                                <?php

                                                    if($tipotxt == 'SALIDA'){
                                                        ?>
                                                    
                                                
                                                    
                                                <?php
                                                    }else{
                                                        ?>
                                                            <th class=" inputIdp center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                                            <th class="titulo2 activi inputpro left paso" >
                                                                <p><strong><?php echo $tarea;?></strong></p>
                                                                <div class=" textDoc2  inputdocume5 center"><?php  echo $docapli;?></div>
                                                            </th>
                                                            <td class="  activiMAY  center respResp"><p>

                                                                <di><?php echo $PrintRES;?></di>


                                                                </p>
                                                            </td>
                                                        <?php
                                                    }
                                                    ?>
                                                        <?php
                                                            if($flecha == 'de'){
                                                                ?>
                                                                    <td><img  src="img/diag/derecha.png" class="derecha5"> </td>

                                                                <?php

                                                            }elseif($flecha == 'iz'){
                                                                ?>
                                                                    <td><img  src="img/diag/izquierda.png" class="izquierda"> </td>

                                                                <?php

                                                            }elseif($flecha == 'baj'){
                                                                ?>
                                                                    <td><img  src="img/diag/curvaDE2.png" class="abajoDE"> </td>

                                                                <?php

                                                            }elseif($flecha == 'sal'){
                                                                ?>
                                                                    <td><img  src="img/diag/sal.png" class="salsal"> </td>
            
                                                                <?php
            
                                                            }elseif($flecha == 'salde'){
                                                                ?>
                                                                    <td><img  src="img/diag/salde.png" class="saldeiz"> </td>
            
                                                                <?php
            
                                                            }elseif($flecha == 'saliz'){
                                                                ?>
                                                                    <td><img  src="img/diag/saliz.png" class="saldeiz"> </td>
            
                                                                <?php
            
                                                            }
                                                        ?>

                                            
                                            
                                                                            
                                            <?php

                                    
                                        }

                                        ?>

                                    
                                    <?php


                                

                                
                                }

                            ?>
                           
                        </table>                                              


                    </div>


                </div>

                <?php
              

                if($adminrol == $radmin){
                    ?>
                    <form method="POST" action="printProcess.php"  target="_blank">

                        <input hidden type="text" name="region"  value="<?php echo $region; ?>">
                        <input hidden type="text" name="unidad"  value="<?php echo $unidad; ?>">
                        <input hidden type="text" name="macro"  value="<?php echo $macro; ?>">
                        <input hidden type="text" name="enfcat"  value="<?php echo $enfcat; ?>">
                        <input hidden type="text" name="tabdueno"  value="<?php echo $tabdueno; ?>">
                        <input hidden type="text" name="grupo"  value="<?php echo $grupo; ?>">

                        <input type="submit" value="Ver en grande" id="printt">
                    </form>
                    <?php
                }

                ?>
               