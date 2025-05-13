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

$grupo = isset($_POST['grupo']) ? $_POST['grupo'] : false;


?>
           

              
    <div class="nameENFOQ"><?php echo $enfcat; ?></div>

    <div id="back_asigcal">

        
        <section class="vacBloques">

            

            

            <?php



                
        
                    $printPro = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND tipotxt = 'ETAPA'  ";
                    $qprintPro = $db_docu->query($printPro);

                    while ($filaCed = $qprintPro->fetch(PDO::FETCH_ASSOC)) {

                        $etapa = $filaCed['etapa'];
                        $idetapa = $filaCed['idetapa'];
                    
                        $tarea = $filaCed['tarea'];
                        $frecuencia = $filaCed['momento'];

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
                    
                        $docapli = $filaCed['docapli'];
                            /*
                        $tabcolorUs = "SELECT * FROM $cat_colorU WHERE clave = '$resptask1' ";
                        $qtabcolorUs = $db_docu->query($tabcolorUs);        
                        while ($filaCed = $qtabcolorUs->fetch(PDO::FETCH_ASSOC)) {        
                            $claveUs = $filaCed['clave'];
                            $colorUs = $filaCed['color'];   
                        }

                        echo $resptask2;
                        
                        
                        
                        
                        
                    

                        
                        

                    
                            */
                        ?>
                        
                            

                    
                                <div class="bloque">
                                    <img  src="img/etapas.png" class="imgetapa">  
                                    <div class="numetapa"><strong><p><?php echo $idetapa; ?></p></strong>  </div>
                                
                                    <div id="<?php echo 'etapa'.$idetapa; ?>" class="etapatxt">
                                        <strong><p><?php echo $etapa; ?></p></strong>  
                                        <strong><p class="textDoc"><?php echo '/'. $docapli; ?></p></strong>  
                                    </div>

                                    <div id="<?php echo 'botrut'.$idetapa; ?>" class="boronrutinas"><img  src="img/ICONOS/rutinas.png" class="imgrutina">    </div>


                                    <?php   
                                        if(empty($resptask1)){

                                        }else{

                                            $tabcolorUs = "SELECT * FROM $cat_colorU WHERE clave = '$resptask1' ";
                                            $qtabcolorUs = $db_docu->query($tabcolorUs);        
                                            while ($filaCed = $qtabcolorUs->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs = $filaCed['clave'];
                                                $colorUs = $filaCed['color'];   
                                            }
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs;?> ;" id="resptask1"></div>
                                            <?php
                                        }

                                        if(empty($resptask2)){
                                        }else{
                                            $tabcolorUs2 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask2' ";
                                            $qtabcolorUs2 = $db_docu->query($tabcolorUs2);        
                                            while ($filaCed = $qtabcolorUs2->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs2 = $filaCed['clave'];
                                                $colorUs2 = $filaCed['color'];  
                                            }                    
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs2;?> ;" id="resptask2"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask3)){
                                        }else{
                                            $tabcolorUs3 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask3' ";
                                            $qtabcolorUs3 = $db_docu->query($tabcolorUs3);        
                                            while ($filaCed = $qtabcolorUs3->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs3 = $filaCed['clave'];
                                                $colorUs3 = $filaCed['color'];   
                                            }
        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs3;?> ;" id="resptask3"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask4)){
                                        }else{
                                            $tabcolorUs4 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask4' ";
                                            $qtabcolorUs4 = $db_docu->query($tabcolorUs4);        
                                            while ($filaCed = $qtabcolorUs4->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs4 = $filaCed['clave'];
                                                $colorUs4 = $filaCed['color'];   
                                            }

        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs4;?> ;" id="resptask4"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask5)){
                                        }else{
                                                
                                            $tabcolorUs5 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask5' ";
                                            $qtabcolorUs5 = $db_docu->query($tabcolorUs5);        
                                            while ($filaCed = $qtabcolorUs5->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs5 = $filaCed['clave'];
                                                $colorUs5 = $filaCed['color'];   
                                            }

        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs5;?> ;" id="resptask5"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask6)){
                                        }else{
                                                
                                            $tabcolorUs6 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask6' ";
                                            $qtabcolorUs6 = $db_docu->query($tabcolorUs6);        
                                            while ($filaCed = $qtabcolorUs6->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs6 = $filaCed['clave'];
                                                $colorUs6 = $filaCed['color'];   
                                            }

        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs6;?> ;" id="resptask6"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask7)){
                                        }else{
                                                
                                                
                                            $tabcolorUs7 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask7' ";
                                            $qtabcolorUs7 = $db_docu->query($tabcolorUs7);        
                                            while ($filaCed = $qtabcolorUs7->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs7 = $filaCed['clave'];
                                                $colorUs7 = $filaCed['color'];   
                                            }

        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs7;?> ;" id="resptask7"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask8)){
                                        }else{
                                                
                                                
                                            
                                            $tabcolorUs8 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask8' ";
                                            $qtabcolorUs8 = $db_docu->query($tabcolorUs8);        
                                            while ($filaCed = $qtabcolorUs8->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs8 = $filaCed['clave'];
                                                $colorUs8 = $filaCed['color'];   
                                            }

        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs8;?> ;" id="resptask8"></div>
                                            <?php
                                            
                                        }

                                        if(empty($resptask9)){
                                        }else{
                                                
                                                
                                                
                                            $tabcolorUs9 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask9' ";
                                            $qtabcolorUs9 = $db_docu->query($tabcolorUs9);        
                                            while ($filaCed = $qtabcolorUs9->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs9 = $filaCed['clave'];
                                                $colorUs9 = $filaCed['color'];   
                                            }                                                        
                                            
        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs9;?> ;" id="resptask9"></div>
                                            <?php
                                            
                                        }


                                        if(empty($resptask10)){
                                        }else{
                                                
                                                
                                            
                                            
                                            $tabcolorUs10 = "SELECT * FROM $cat_colorU WHERE clave = '$resptask10' ";
                                            $qtabcolorUs10 = $db_docu->query($tabcolorUs10);        
                                            while ($filaCed = $qtabcolorUs10->fetch(PDO::FETCH_ASSOC)) {        
                                                $claveUs10 = $filaCed['clave'];
                                                $colorUs10 = $filaCed['color'];   
                                            }
        
                                            ?>
                                                <div class="taskresp" style="background: <?php echo $colorUs10;?> ;" id="resptask10"></div>
                                            <?php
                                            
                                        }
                                    ?>
                                                
                                    
                                    
                                    
                                
                                    <div id="<?php echo 'rutinas'.$idetapa; ?>" class="rutinas">

                                        <table  class="tableTare">
                                            <tr>
                                                <tr>
                                                   
                                                    <th>MOMENTO</th>
                                                    <th>ACTIVIDAD</th>
                                                </tr>
                                                
                                               
                                                <td class="frecue"><p><?php echo $frecuencia;?></p></td>
                                                <td class="activi left"><p><?php echo $tarea;?></p></td>
                                            </tr>
                                            </table>    

                                    </div>
                                </div>

                                
                            
                            
                            
                            
                    
                        <?php
                            
                                    
                    
                }
            ?>
                

            
        </section>          


    </div>
              