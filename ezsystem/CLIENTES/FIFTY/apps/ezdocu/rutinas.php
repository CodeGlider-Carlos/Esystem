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
                        

                        
    
                        
                            <tr>
                                <th colspan="5" class="titblack"><?php echo 'RUTINAS: '. $macro.'/'.$enfcat.'/'.$tabdueno; ?></th>
                            </tr>

                            <tr>
                            <th class="colprocedi colproc1 center">ID</th>
                                <th class=" colprocedi colproc2 ">RUTINAS</th>
                                <th class=" colprocedi colproc3 ">MOMENTO</th>
                            </tr>

                                       

                     
                        <?php

                            
                          

                            $tabrutin = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND resptask LIKE '%$tabdueno%' AND (tipotxt = 'ETAPA' OR tipotxt = 'TAREA' ) ";
                            $qtabrutin = $db_docu->query($tabrutin);

                            while ($filaCed = $qtabrutin->fetch(PDO::FETCH_ASSOC)) {

                                $idid = $filaCed['id'];
                            
                                $idta = $filaCed['idta'];
                                $punto = $filaCed['punto'];
                                $idnum = $filaCed['idnum'];


                                $etapa = $filaCed['etapa'];
                                $tarea = $filaCed['tarea'];
                                $frecuencia = $filaCed['momento'];
                                $docapli = $filaCed['docapli'];



                               

                            ?>


                      

                                <tr>

                                    

                          
                                    <th class="titulo2  input center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                    <th class="titulo2 activi input left" ><p><strong><?php echo $tarea;?></strong></p></th>
                                    <th class="titulo2 activi input left" ><p><strong><?php echo $frecuencia;?></strong></p></th>
                                            

                                   


                                </tr>
                           
                                <?php

                          
                            }
                        ?>
                                    
                                

                    </table>      

                </div>
              