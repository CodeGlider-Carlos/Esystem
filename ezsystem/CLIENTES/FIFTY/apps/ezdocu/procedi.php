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
                                <th colspan="5" class="titblack"><?php echo 'PROCEDIMIENTO: '. $macro.'/'.$enfcat; ?></th>
                            </tr>

                            <tr>
                            <th class="colprocedi colproc1 center">ID</th>
                                <th class=" colprocedi colproc2 ">DESCRIPCION</th>
                                <th class=" colprocedi colproc3 center">RESPONSABLES</th>
                                <th class=" colprocedi colproc4 center">DOCUMENTO/PLANTILLA APLICABLE</th>
                            </tr>

                                       

                     
                        <?php


                            $tabproced = "SELECT * FROM $bdtab_bd WHERE region = '$region' AND unidad = '$unidad' AND nombrepro = '$enfcat'  AND dueno LIKE '%$tabdueno%' ";
                            $qtabproced = $db_docu->query($tabproced);

                            while ($filaCed = $qtabproced->fetch(PDO::FETCH_ASSOC)) {

                                $idid = $filaCed['id'];
                            
                                $idta = $filaCed['idta'];
                                $punto = $filaCed['punto'];
                                $idnum = $filaCed['idnum'];


                                $tipotxt = $filaCed['tipotxt'];
                                $etapa = $filaCed['etapa'];
                                $tarea = $filaCed['tarea'];
                                $frecuencia = $filaCed['momento'];
                                $docapli = $filaCed['docapli'];

                                $resptask = $filaCed['resptask'];

                                if($resptask= 'ALL'){
                                        $respRes = 'GERENTES, JEFES';
                                }else{
                                    $respRes =$resptask;
                                }

                                if($tipotxt == 'ETAPA' OR $tipotxt == 'TAREA'  ){

                             

                                ?>

                                <tr>                                   
                          
                                    <th class="titulo2  input center"><strong><?php echo $idta.$punto.$idnum;?></strong></th>
                                    <th class="titulo2 activi input left" ><p><strong><?php echo $tarea;?></strong></p></th>
                                    <td class="titulo2  activiMAY input center"><p>

                                        <di><?php echo $respRes;?></di>

                                        
                                        </p>
                                    </td>
                                    <td class="titulo2 textDoc2  input center"><?php  echo $docapli;?></td>
                                 
                                            

                                   


                                </tr>
                           
                                <?php
                                }
                             
                            }
                        ?>
                                    
                                

                    </table>      

                </div>
              