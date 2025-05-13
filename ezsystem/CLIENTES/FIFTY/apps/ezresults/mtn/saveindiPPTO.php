
   <?php


require_once '../varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_mtnprint</title>
  
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/save.css">

</head>
<body>

        <div id="backRegresar" class="navbot">
            <a href="selectmtn.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
        </div>
   
    
    <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">

        <section id="altaInd">
                                        
            <?php 

                if(isset($_POST['altaindi'])) {
                    
                    $objetivoasoc = $_POST['objactual'];
               
                    $clienteu = $_POST['clienteu'];

                     ///Validacion de id completo estrategico           
                        
                     $valdobj = "SELECT * FROM $tabojunid WHERE id = '$objetivoasoc' ";
                     $qvaldobj = $dbo->query($valdobj);

                     while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                         $valydobj = $fila['id'];
                         $alcanceobj = $fila['alcanceobj'];
                         $useresp = $fila['useresp'];
                         $gerdir = $fila['gerdir'];
                         $objetNAME = $fila['objetivo'];
                         $idobjdg = $fila['idobjdg'];
                         $idobjreg = $fila['idobjreg'];
                         $idobjunid = $fila['idobjunid'];
                         $unidadTab = $fila['unidad'];
                     }
                     echo $objetivoasoc;
                     $valdobj2 = "SELECT * FROM $smartobj WHERE idobjunid = '$idobjunid' ";
                     $qvaldobj2 = $dbo->query($valdobj2);

                        while ($fila = $qvaldobj2->fetch(PDO::FETCH_ASSOC)) {                            
                        
                            $yearini = $fila['yearini'];
                            $yearfin = $fila['yearfin'];
                            $mesfin = $fila['mesfin'];  
                        }


                        $fechalta = date('d/m/y');

                        foreach ($_POST['idUpdate'] as $idsave) {

                    
                            $enfoque = isset($_POST['enfoque'][$idsave]) ? $_POST['enfoque'][$idsave] : false;
                            $qenfoque = (string)($enfoque);

                            $accion = isset($_POST['accion'][$idsave]) ? $_POST['accion'][$idsave] : false;
                            $qaccion = (string)($accion);

                            $dueno = isset($_POST['dueno'][$idsave]) ? $_POST['dueno'][$idsave] : false;
                            $qdueno = (string)($dueno);

                            $mat = isset($_POST['mat'][$idsave]) ? $_POST['mat'][$idsave] : false;
                            $qmat = (string)($mat);

                            $indicador = isset($_POST['indicador'][$idsave]) ? $_POST['indicador'][$idsave] : false;
                            $qindicador = (string)($indicador);

                            $metaa1 = isset($_POST['metaa1'][$idsave]) ? $_POST['metaa1'][$idsave] : false ;  
                            $metaa2 = isset($_POST['metaa2'][$idsave]) ? $_POST['metaa2'][$idsave] : false ;  
                            $metaa3 = isset($_POST['metaa3'][$idsave]) ? $_POST['metaa3'][$idsave] : false ;  
                            $metaa4 = isset($_POST['metaa4'][$idsave]) ? $_POST['metaa4'][$idsave] : false ;  
                            $metaa5 = isset($_POST['metaa5'][$idsave]) ? $_POST['metaa5'][$idsave] : false ;  
                            $metaa6 = isset($_POST['metaa6'][$idsave]) ? $_POST['metaa6'][$idsave] : false ;  
                            $metaa7 = isset($_POST['metaa7'][$idsave]) ? $_POST['metaa7'][$idsave] : false ;  
                            $metaa8 = isset($_POST['metaa8'][$idsave]) ? $_POST['metaa8'][$idsave] : false ;  
                            $metaa9 = isset($_POST['metaa9'][$idsave]) ? $_POST['metaa9'][$idsave] : false ;  
                            $metaa10 = isset($_POST['metaa10'][$idsave]) ? $_POST['metaa10'][$idsave] : false ;  
                            $metaa11 = isset($_POST['metaa11'][$idsave]) ? $_POST['metaa11'][$idsave] : false ;  
                            $metaa12 = isset($_POST['metaa12'][$idsave]) ? $_POST['metaa12'][$idsave] : false ;  

                            $ponde = isset($_POST['ponde'][$idsave]) ? $_POST['ponde'][$idsave] : false ;   

                                          
                            /////// PERIODO FIN
                            $fechlim = isset($_POST['fechlim'][$idsave]) ? $_POST['fechlim'][$idsave] : false ; 
                            $qfechlim = new DateTime($fechlim);                          
                        

                            ////ID OBJETIVO
                            $allobj = current($dbo->query("SELECT COUNT(num) FROM $smartindi  WHERE useresp = '$dueno' AND yearini LIKE '%$yearini%' ")->fetch());
                            $numobj = $allobj+1;

                            $idin = 'INDI.'.$dueno.'.'.$yearini.'.'.$numobj;
                            ////NOMBRE OBJETIVO
                            $nomindi =  $qindicador;


                            if(!empty($indicador) AND !empty($dueno) AND  !empty($accion) AND !empty($ponde) ){                            

                                $save= "INSERT INTO $smartindi VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','SI','FINANCIERA','$idobjdg','$idobjreg',
                                '$idobjunid',NULL,NULL,'$qenfoque','$qaccion','$idin','$numobj','$nomindi',NULL,'$ponde','$qmat','$qdueno','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                '$fechlim','$yearfin','$mesfin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";

                                $qsave = $dbo->query($save);



                                if(!empty($metaa1)){

                                    $metames1= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','01','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','1','$nomindi','$metaa1') ";

                                    $qmetames1 = $dbo->query($metames1);
                                }

                                if(!empty($metaa2)){

                                    $metames2= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','02','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','2','$nomindi','$metaa2') ";

                                    $qmetames2 = $dbo->query($metames2);
                                }

                                if(!empty($metaa3)){

                                    $metames3= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','03','SI','FINANCIERA','$idobjdg','$idobjreg',
                                   '$idobjunid', NULL,'$qenfoque','$qaccion','$qmat','$idin','3','$nomindi','$metaa3') ";

                                    $qmetames3 = $dbo->query($metames3);
                                }

                                if(!empty($metaa4)){

                                    $metames4= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','04','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','4','$nomindi','$metaa4') ";

                                    $qmetames4 = $dbo->query($metames4);
                                }

                                if(!empty($metaa5)){

                                    $metames5= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','05','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','5','$nomindi','$metaa5') ";

                                    $qmetames5 = $dbo->query($metames5);
                                }

                                if(!empty($metaa6)){

                                    $metames6= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','06','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','6','$nomindi','$metaa6') ";

                                    $qmetames6 = $dbo->query($metames6);
                                }

                                if(!empty($metaa7)){

                                    $metames7= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','07','SI','FINANCIERA','$idobjdg','$idobjreg',
                                   '$idobjunid', NULL,'$qenfoque','$qaccion','$qmat','$idin','7','$nomindi','$metaa7') ";

                                    $qmetames7 = $dbo->query($metames7);
                                }

                                if(!empty($metaa8)){

                                    $metames8= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','08','SI','FINANCIERA','$idobjdg','$idobjreg',
                                   '$idobjunid', NULL,'$qenfoque','$qaccion','$qmat','$idin','8','$nomindi','$metaa8') ";

                                    $qmetames8 = $dbo->query($metames8);
                                }

                              
                                if(!empty($metaa9)){

                                    $metames9= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','09','SI','FINANCIERA','$idobjdg','$idobjreg',
                                   '$idobjunid', NULL,'$qenfoque','$qaccion','$qmat','$idin','9','$nomindi','$metaa9') ";

                                    $qmetames9 = $dbo->query($metames9);
                                }

                                if(!empty($metaa10)){

                                    $metames10= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','10','SI','FINANCIERA','$idobjdg','$idobjreg',
                                   '$idobjunid', NULL,'$qenfoque','$qaccion','$qmat','$idin','10','$nomindi','$metaa10') ";

                                    $qmetames10 = $dbo->query($metames10);
                                }

                                if(!empty($metaa11)){

                                    $metames11= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','11','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','11','$nomindi','$metaa11') ";

                                    $qmetames11 = $dbo->query($metames11);
                                }

                                if(!empty($metaa12)){

                                    $metames12= "INSERT INTO $tabmetppto VALUES (NULL,'$unidadTab','$alcanceobj','$yearini','12','SI','FINANCIERA','$idobjdg','$idobjreg',
                                    '$idobjunid',NULL,'$qenfoque','$qaccion','$qmat','$idin','12','$nomindi','$metaa12') ";

                                    $qmetames12 = $dbo->query($metames12);
                                }
                            
                            }
                        }
        
                    
                        if (!empty($qsave)) {
                               
                                ?>
                                    <section id="contdatsave">
                                        <div id="datsave"><?php echo 'datos guardados'.  $metaa12; ?></div>
                                    </section>
                                <?php
                                } else {
                    
                                ?>
                                    <section id="contdatsave">
                                        <div id="datsave"><?php echo 'datos no guardados'.unidadTab; ?></div>
                                    </section>

                                    
                            <?php


                        }
                            

                }elseif(isset($_POST['modifindi'])) {
                    
                    $servdep = $_POST['servdep'];    
                    $yearini = $_POST['yearini'];

                    foreach ($_POST['idupMod'] as $idmod) {

                            $fechamod = date('d/m/y');

                        
                            $enfoque = isset($_POST['enfoque'][$idmod]) ? $_POST['enfoque'][$idmod] : false;
                            $qenfoque = (string)($enfoque);
                            
                            $nombreindi = isset($_POST['nombreindi'][$idmod]) ? $_POST['nombreindi'][$idmod] : false;
                            $qnombreindi = (string)($nombreindi);

                            $metamod = isset($_POST['metamod'][$idmod]) ? $_POST['metamod'][$idmod] : false;

                            $pondemod = isset($_POST['pondemod'][$idmod]) ? $_POST['pondemod'][$idmod] : false;
                        
                            if(empty($enfoque)){

                            }else{

                                $savindi = "UPDATE $smartindi SET enfoque ='$qenfoque' WHERE id='$idmod'";
                                $qsavindi = $dbo->query($savindi);

                                $indfechact = "UPDATE $smartindi SET fechamod ='$fechamod' WHERE id='$idmod'";
                                $qindfechact = $dbo->query($indfechact);

                                $indusact = "UPDATE $smartindi SET usermod ='$userLog' WHERE id='$idmod'";
                                $qindusact = $dbo->query($indusact);
                            }

                            if(empty($nombreindi)){

                            }else{

                                $savindi2 = "UPDATE $smartindi SET indicador ='$qnombreindi' WHERE id='$idmod'";
                                $qsavindi2 = $dbo->query($savindi2);

                                $indfechact2 = "UPDATE $smartindi SET fechamod ='$fechamod' WHERE id='$idmod'";
                                $qindfechact2 = $dbo->query($indfechact2);

                                $indusact2 = "UPDATE $smartindi SET usermod ='$userLog' WHERE id='$idmod'";
                                $qindusact2 = $dbo->query($indusact2);
                            }

                            if(empty($metamod)){

                            }else{

                                $savindi3 = "UPDATE $smartindi SET meta ='$metamod' WHERE id='$idmod'";
                                $qsavindi3 = $dbo->query($savindi3);

                                $indfechact3 = "UPDATE $smartindi SET fechamod ='$fechamod' WHERE id='$idmod'";
                                $qindfechact3 = $dbo->query($indfechact3);

                                $indusact3 = "UPDATE $smartindi SET usermod ='$userLog' WHERE id='$idmod'";
                                $qindusact3 = $dbo->query($indusact3);
                            }

                            
                            if(empty($pondemod)){

                            }else{

                                $savindi4 = "UPDATE $smartindi SET pond ='$pondemod' WHERE id='$idmod'";
                                $qsavindi4 = $dbo->query($savindi4);

                                $indfechact4 = "UPDATE $smartindi SET fechamod ='$fechamod' WHERE id='$idmod'";
                                $qindfechact4 = $dbo->query($indfechact4);

                                $indusact4 = "UPDATE $smartindi SET usermod ='$userLog' WHERE id='$idmod'";
                                $qindusact4 = $dbo->query($indusact4);
                            }
                        
                        

                    }


                    if ($qsavindi == true OR $qsavindi2 == true OR $qsavindi3 == true OR $qsavindi4 == true) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                            <?php
                        
                            } else {
                
                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                        <?php
                    
                    }
                    

                }elseif(isset($_POST['bajaalta'])) {
                    
                
                    foreach ($_POST['idupBaja'] as $idbaj) {

                            $fechabaj = date('d/m/y');
                            
                            $baja = isset($_POST['activo'][$idbaj]) ? $_POST['activo'][$idbaj] : false;
                            $qbaja = (string)($baja);

                            if(empty($baja)){


                            }else{

                                $indact = "UPDATE $smartindi SET activo ='$qbaja' WHERE id='$idbaj'";
                                $qindact = $dbo->query($indact);

                                if($baja =='NO'){
                                    $indfechact = "UPDATE $smartindi SET fechabaja ='$fechabaj' WHERE id='$idbaj'";
                                    $qindfechact = $dbo->query($indfechact);

                                    $indusact = "UPDATE $smartindi SET userbaj ='$userLog' WHERE id='$idbaj'";
                                    $qindusact = $dbo->query($indusact);

                                }elseif($baja =='SI'){
                                    $indfechact = "UPDATE $smartindi SET fechalta ='$fechabaj' WHERE id='$idbaj'";
                                    $qindfechact = $dbo->query($indfechact);

                                    $indusact = "UPDATE $smartindi SET useralta ='$userLog' WHERE id='$idbaj'";
                                    $qindusact = $dbo->query($indusact);
                                }

                            
                            }

                    }

                    if ($qindact == true) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                            <?php
                            } else {
                
                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                        <?php
                    }
                        

                }
 
            ?>

        </section>

        <section id="borrarIndi">
                        
            <?php 

                if(isset($_POST['bajaborrar'])) {
                    
                
                    foreach ($_POST['idupBorrar'] as $idbaj) {

                            $fechabaj = date('d/m/y');
                            $baja = isset($_POST['activo'][$idbaj]) ? $_POST['activo'][$idbaj] : false;
                            $qbaja = (string)($baja);

                            if(empty($baja)){


                            }else{

                                $indact = "UPDATE $smartindi SET activo ='$qbaja' WHERE id='$idbaj'";
                                $qindact = $dbo->query($indact);

                                $indfechact = "UPDATE $smartindi SET fechabaja ='$fechabaj' WHERE id='$idbaj'";
                                $qindfechact = $dbo->query($indfechact);

                                $indusact = "UPDATE $smartindi SET userbaj ='$userLog' WHERE id='$idbaj'";
                                $qindusact = $dbo->query($indusact);


                            
                            }

                    }

                    if ($qindact == true) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                            <?php
                            } else {
                
                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                        <?php
                    }
                        

                }
    
            ?>

        </section>



 

</body>
</html>