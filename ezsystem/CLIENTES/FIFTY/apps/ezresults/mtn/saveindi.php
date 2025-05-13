
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
                      
                          $alcanceobj = $fila['alcanceobj'];
                          $idobjdg = $fila['idobjdg'];
                          $idobjreg = $fila['idobjreg'];
                          $idobjunid = $fila['idobjunid'];  
                         
                          $yearini = $fila['yearini'];  
                          $perspectiva = $fila['perspectiva'];  
                      }
                  
                      $valdobj2 = "SELECT * FROM $smartobj WHERE idobjunid = '$idobjunid' ";
                      $qvaldobj2 = $dbo->query($valdobj2);

                      while ($fila = $qvaldobj2->fetch(PDO::FETCH_ASSOC)) {                            
                      
                          $yearfin = $fila['yearfin'];
                          $mesfin = $fila['mesfin'];  
                      }

                        $fechalta = date('d/m/y');

                        foreach ($_POST['idUpdate'] as $idsave) {

                    
                            $enfoque = isset($_POST['enfoque'][$idsave]) ? $_POST['enfoque'][$idsave] : false;
                            $qenfoque = (string)($enfoque);

                            $tipo = isset($_POST['tipo'][$idsave]) ? $_POST['tipo'][$idsave] : false;
                            $qtipo = (string)($tipo);

                            $dueno = isset($_POST['dueno'][$idsave]) ? $_POST['dueno'][$idsave] : false;
                            $qdueno = (string)($dueno);

                            $mat = isset($_POST['mat'][$idsave]) ? $_POST['mat'][$idsave] : false;
                            $qmat = (string)($mat);

                            $indicador = isset($_POST['indicador'][$idsave]) ? $_POST['indicador'][$idsave] : false;
                            $qindicador = (string)($indicador);

                            $metaa = isset($_POST['metaa'][$idsave]) ? $_POST['metaa'][$idsave] : false ;  

                            $ponde = isset($_POST['ponde'][$idsave]) ? $_POST['ponde'][$idsave] : false ;   

                                            
                            /////// PERIODO FIN
                            $fechlim = isset($_POST['fechlim'][$idsave]) ? $_POST['fechlim'][$idsave] : false ; 
                            $qfechlim = new DateTime($fechlim);                          
                            $yearfin = $qfechlim->format('y');
                            $mesfin= $qfechlim->format('m');

                            ////ID OBJETIVO
                            $allobj = current($dbo->query("SELECT COUNT(num) FROM $smartindi  WHERE useresp = '$dueno' AND yearini LIKE '%$yearini%' ")->fetch());
                            $numobj = $allobj+1;

                            $idin = 'INDI.'.$dueno.'.'.$yearini.'.'.$numobj;
                            ////NOMBRE OBJETIVO
                            $nomindi = $qmat.' '.$qindicador;


                            if(!empty($indicador) AND !empty($metaa) AND !empty($dueno)
                            AND !empty($fechlim) AND  !empty($tipo) AND !empty($ponde) ){                            

                                $save= "INSERT INTO $smartindi VALUES (NULL,'$clienteu','$alcanceobj','$yearini','SI','$perspectiva','$idobjdg','$idobjreg',
                                '$idobjunid',NULL,NULL,'$qenfoque','$qtipo','$idin','$numobj','$nomindi','$metaa','$ponde','$qmat','$qdueno','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                '$fechlim','$yearfin','$mesfin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";




                                $qsave = $dbo->query($save);

                            
                            }
                        }
        
                    
                        if ($qsave == true) {

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
                            

                }elseif(isset($_POST['altapro'])) {


                    $objetivoasoc = $_POST['objactual'];
                               
              
                
                    ///Validacion de id completo estrategico           
                        
                    
                    $valdobj = "SELECT * FROM $taboj WHERE id = '$objetivoasoc' ";
                    $qvaldobj = $dbo->query($valdobj);

                    while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                    
                        $alcanceobj = $fila['alcanceobj'];
                        $clienteu = $fila['unidad'];
                        $idobjdg = $fila['idobjdg'];
                        $idobjreg = $fila['idobjreg'];
                        $idobjgery = $fila['idobjger'];  
                        $idobjger = $fila['idobjger']; 
                        $idobjfuny = $fila['idobjfun'];
                        $yearini = $fila['yearini'];  
                        $perspectiva = $fila['perspectiva'];  
                    }
                
                    $valdobj2 = "SELECT * FROM $smartobj WHERE idobjger = '$idobjgery' ";
                    $qvaldobj2 = $dbo->query($valdobj2);

                    while ($fila = $qvaldobj2->fetch(PDO::FETCH_ASSOC)) {                            
                    
                        $yearfin = $fila['yearfin'];
                        $mesfin = $fila['mesfin'];  
                    }

                    
                    $fechalta = date('d/m/y');                

                    
                    foreach ($_POST['idproa'] as $idproa) {


                        $tipo = isset($_POST['tipo'][$idproa]) ? $_POST['tipo'][$idproa] : false;
                        $qtipo = (string)($tipo);

                        $enfoque = isset($_POST['enfoque'][$idproa]) ? $_POST['enfoque'][$idproa] : false;
                        $qenfoque = (string)($enfoque);

                        $accionini = isset($_POST['accionini'][$idproa]) ? $_POST['accionini'][$idproa] : false;
                        $qaccionini = (string)($accionini);

                        $indicador = isset($_POST['indicador'][$idproa]) ? $_POST['indicador'][$idproa] : false;
                        $qindicador = (string)($indicador);

                        $dueno = isset($_POST['dueno'][$idproa]) ? $_POST['dueno'][$idproa] : false;
                        $qdueno = (string)($dueno);

                        $metaa = isset($_POST['metaa'][$idproa]) ? $_POST['metaa'][$idproa] : false ;  

                        $ponde = isset($_POST['ponde'][$idproa]) ? $_POST['ponde'][$idproa] : false ;   

                                        
                        /////// PERIODO FIN
                        $fechlim = isset($_POST['fechlim'][$idproa]) ? $_POST['fechlim'][$idproa] : false ; 
                        $qfechlim = new DateTime($fechlim);                          
                        $yearfin = $qfechlim->format('y');
                        $mesfin= $qfechlim->format('m');

                        ////ID OBJETIVO
                        $allobj = current($dbo->query("SELECT COUNT(*) FROM $smartindi  WHERE useresp = '$dueno' AND yearini LIKE '%$yearini%' ")->fetch());
                        $numobj = $allobj+1;

                        $idin = 'INDI.'.$dueno.'.'.$yearini.'.'.$numobj;
                        ////NOMBRE OBJETIVO
                        $nomindi = $qaccionini.' '.$qindicador;



                        $valyenfx = "SELECT * FROM $enfxtab WHERE enfoque = '$qenfoque' ";
                        $qvalyenfx = $dbo->query($valyenfx);
    
                        while ($fila = $qvalyenfx->fetch(PDO::FETCH_ASSOC)) {
                            $idenfx = $fila['idenfx'];
                            $namenfx = $fila['enfoque'];
                        }

                    

            
                        if(!empty($indicador) AND !empty($metaa) AND !empty($dueno)
                        AND !empty($fechlim) AND  !empty($tipo) AND !empty($ponde) ){                            

                            $save= "INSERT INTO $smartindi VALUES (NULL,'$clienteu','$alcanceobj','$yearini','SI','$perspectiva','$idobjdg','$idobjreg',
                            '$idobjger',NULL,'$idenfx','$namenfx','$qtipo','$idin','$numobj','$nomindi','$metaa','$ponde','$qaccionini','$qdueno','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                            '$fechlim','$yearfin','$mesfin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";




                            $qsave = $dbo->query($save);

                        
                        }
                        
                        
                        if ($qsave == true) {

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
                    /*
                    echo 'año: '. $yearini.'<br>';
                    echo 'perspobj: '. $perspobj.'<br>';
                    echo 'actual: '. $objetivoasoc.'<br>';
                    echo 'clienteu: '. $clienteu.'<br>';
                    echo 'objcompleto: '.  $idobest.'<br>';
                    echo  'obhglobal: '.$idglobj.'<br>';
                    echo  'objfglobal: '.$idglobf.'<br>';
                   */ 
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