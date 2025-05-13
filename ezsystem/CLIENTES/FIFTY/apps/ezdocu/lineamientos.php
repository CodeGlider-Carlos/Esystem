<?php
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php'; 



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
         

              

                <div id="back_asigcal">

                    
             

                    <table id="tableTask">
                        

                        <?php

                            $TABALCANCE = "SELECT * FROM $cat_lin WHERE region = '$region' AND unidad = '$unidad' AND enfoque LIKE '%$enfcat%' AND macro LIKE '%$macro%' AND alcance LIKE '%$tabdueno%'  ";
                            $qTABALCANCE = $db_docu->query($TABALCANCE);

                            while ($filaCed = $qTABALCANCE->fetch(PDO::FETCH_ASSOC)) {

                                $alcance = $filaCed['alcance'];
                                $idlinly = $filaCed['idlin'];
                         
                            }

                            if($tabdueno == 'ALL'){
                                $alcancePrint = 'APLICABLE A TODOS';
                            }else{
                                if(empty($alcance)){
                                    $alcancePrint = 'SD';
                                }else{
                                    $alcancePrint = $alcance;
                                }
                              
                            }

                            if(empty($idlinly)){

                            }else{
                                if($tabdueno =='ALL' ){

                                    ?>
    
                                    
                                        <tr>
                                            <th colspan="5" class="titblack"><?php echo 'LINEAMIENTOS: '. $macro.'/'.$enfcat.'/'.$alcancePrint ?></th>
                                        </tr>
    
                                        <tr>
                                        <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl2s"></th>
                                            <th class="anchoCOl1s" colspan="2"></th>
                                        </tr>
    
                                    <?php
    
                                }else{
                                    ?>
    
                                        <tr>
                                            <th colspan="5" class="titblack"><?php echo 'LINEAMIENTOS: '. $macro.'/'.$enfcat.'/'.$alcancePrint ?></th>
                                        </tr>
    
                                        <tr>
                                            <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl2s"></th>
                                            <th class="anchoCOl1s" colspan="2"></th>
                                        </tr>
                                    <?php
                                }
                            }

                           

                        ?>


                    

                     
                        <?php


                            $consCed = "SELECT * FROM $cat_lin WHERE region = '$region' AND unidad = '$unidad' AND enfoque LIKE '%$enfcat%' AND macro LIKE '%$macro%' AND alcance LIKE '%$tabdueno%'  ";
                            $qconsCed = $db_docu->query($consCed);

                            while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {

                                $idid = $filaCed['id'];
                                $tipotx = $filaCed['tipotxt'];
                                $idlin = $filaCed['idlin'];
                                $punto = $filaCed['punto'];
                                $num = $filaCed['num'];
                                $sangria = $filaCed['sangria'];
                                $lin = $filaCed['lin'];
                                $enfoquePR = $filaCed['enfoque'];
                                $nom = $filaCed['nom'];
                                $medible = $filaCed['medible'];

                                if($sangria == '1' ){
                                    $class_sangria = 'sangria1';
                                }elseif($sangria == '2' ){
                                    $class_sangria = 'sangria2';
                                }elseif($sangria == '3' ){
                                    $class_sangria = 'sangria3';
                                }



                            ?>


                      

                                <tr>

                                    <?php

                                        if($tabdueno =='ALL' ){

                                            if($tipotx == 'TITULO' ){
                                                ?>
                                                    <th class="titulo1 <?php echo $class_sangria;?> inputDoc center" ><strong><?php echo $idlin;?></strong></th>
                                                    <td colspan="3" class="titulo1 <?php echo $class_sangria;?> inputDoc"><strong><?php echo $lin;?></strong></td>
                                                
                                                <?php
        
                                            }else{
                                                ?>
                                                    <th class="titulo2 <?php echo $class_sangria;?> inputDoc center"><strong><?php echo $idlin.$punto.$num;?></strong></th>
                                                    <td class="lineamiento <?php echo $class_sangria;?> inputDoc"><?php echo $lin;?></td>
                                                    <td class="lineamiento <?php echo $class_sangria;?> inputDoc"><?php echo $nom;?></td>
                                                    <td class="lineamiento <?php echo $class_sangria;?> inputDoc"><?php echo $medible;?></td>
                                                <?php
                                            }
                                            
                                        }else{
                                            if($tipotx == 'TITULO' ){
                                                ?>
                                                    <th class="titulo1 <?php echo $class_sangria;?> inputDoc center" ><strong><?php echo $idlin;?></strong></th>
                                                    <th class="titulo1 <?php echo $class_sangria;?> inputDoc center" ><strong><?php echo $enfoquePR;?></strong></th>
                                                    <td class="titulo1 <?php echo $class_sangria;?> inputDoc"><strong><?php echo $lin;?></strong></td>
                                                
                                                <?php
        
                                            }else{
                                                ?>
                                                    <th class="titulo2 <?php echo $class_sangria;?> input center"><strong><?php echo $idlin.$punto.$num;?></strong></th>
                                                    <th class="titulo1 <?php echo $class_sangria;?> input center" ><strong><?php echo $enfoquePR;?></strong></th>
                                                    <td class="lineamiento <?php echo $class_sangria;?> input"><?php echo $lin;?></td>
                                                    <td class="lineamiento <?php echo $class_sangria;?> inputDoc"><?php echo $nom;?></td>
                                                    <td class="lineamiento <?php echo $class_sangria;?> inputDoc"><?php echo $medible;?></td>
                                                <?php
                                            }
                                        }

                                   

                                    ?>

                                </tr>
                           
                                <?php

                                /*
                                echo '
                    
                                <tr class="fila0"> 

                                    
                                    <td hidden><input type="text" name="id_task[]" value="' . $filaCed['id'] . '"></td>
                                    <td colspan="3"  ></td>
                                </tr>

                                <tr>
                                    <td colspan="3"><div class="inputNUE">NUEVA TAREA</div></td>
                                </tr>

                                <tr class="fila1"> 

                                    <td colspan="1">
                                        <input type="list" class="input" list="cattrab" name="asigna[' . $filaCed['id'] . ']"  placeholder="Asigna..." spellcheck="false"  >
                                    </td>
                                    <td colspan="2">
                                        <input type="list" class="inputb" list="cattrab" name="verificador[' . $filaCed['id'] . ']"  placeholder="Verificará..." spellcheck="false"  >
                                    </td>
                                
                                </tr>

                                <tr class="fila2"> 

                                    <td colspan="1">
                                        <input type="list" list="catenfx" name="enfoque[' . $filaCed['id'] . ']" class="input" placeholder="Enfoque..." > 
                                    </td>
                                    <td colspan="2">
                                        <input type="list" class="inputb" list="cattrab" name="resptarea[' . $filaCed['id'] . ']"  placeholder="Responsable de Tarea..." spellcheck="false"  >
                                    </td>
                                
                                </tr>

                                <tr class="fila3"> 

                                    <td  colspan="1">
                                        <textarea name="tarea[' . $filaCed['id'] . ']" class="INPUTASK" spellcheck="false" placeholder="Tarea..."></textarea>
                                    </td>
                                    <td  colspan="1">
                                        <textarea name="obstask[' . $filaCed['id'] . ']" class="inputd" spellcheck="false" placeholder="Entregable u Observaciones..."></textarea>
                                    </td>

                                    <td  colspan="1">
                                        <input type="date" name="fechaco[' . $filaCed['id'] . ']" class="inputc" >
                                    </td>
                                    
                                </tr>

                                <tr>
                                  <td colspan="3" class="barraline" >BARRA</td>
                                </tr>

 
                                ';
                                */
                            }
                        ?>
                                    
                                

                    </table>      

                </div>
              