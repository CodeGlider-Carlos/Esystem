
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
    <div id="reload">

    <input type="image" src="../img/ICONOS/recarga.svg" id="reloadIcon" onclick="location.reload();">

    </div> 
          
        <div id="backRegresar" class="navbot">
            <a href="selectmtn.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
        </div>

        
        <section id="ObjEST">

                                        
            <?php 

                if(isset($_POST['alta'])) {

                        $gerdirly = $_POST['gerdir'];
             
                        
                  
                        $alcanceobj = $_POST['alcanceobj'];

                        if($alcanceobj == "UNIDAD"){
                            $unidadreg = $_POST['unidadreg'];
                        }


                        $objasocdg = $_POST['objasocdg'];
                        $objasocreg = $_POST['objasocreg'];

                        $region = $_POST['region'];

                        $VALYNOM = "SELECT * FROM $gedir WHERE id = '$gerdirly' ";
                        $QVALYNOM = $dbo->query($VALYNOM);

                        while ($fila = $QVALYNOM->fetch(PDO::FETCH_ASSOC)) {                            
                            $gerdir = $fila['clave'];
                            $unidadname = $fila['unidad'];
                        }


                     

                  


                        foreach ($_POST['idUpdate'] as $idsave) {
                            
                    
                            $perspectiva = isset($_POST['perspectiva'][$idsave]) ? $_POST['perspectiva'][$idsave] : false;
                            $qperspectiva = (string)($perspectiva);

                            $accionini = isset($_POST['accionini'][$idsave]) ? $_POST['accionini'][$idsave] : false;
                            $qaccionini = (string)($accionini);

                            $articulo = isset($_POST['articulo'][$idsave]) ? $_POST['articulo'][$idsave] : false;
                            $qarticulo = (string)($articulo);

                            $objetivo = isset($_POST['objetivo'][$idsave]) ? $_POST['objetivo'][$idsave] : false;
                            $qobjetivo = (string)($objetivo);
                        
                            $metaa = isset($_POST['metaa'][$idsave]) ? $_POST['metaa'][$idsave] : false ;   
                            $pondee = isset($_POST['pondemod'][$idsave]) ? $_POST['pondemod'][$idsave] : false ;   
                        
                            $medidaa = isset($_POST['medidaa'][$idsave]) ? $_POST['medidaa'][$idsave] : false;
                            $qmedidaa = (string)($medidaa);

                            ////FECHA INI
                            $fechalta = isset($_POST['fechalta'][$idsave]) ? $_POST['fechalta'][$idsave] : false ; 
                            $qfechalta = (string)($fechalta);


                            $qfechalta = new DateTime($fechalta); 
                            $yearini = $qfechalta->format('y');
                        
                                            
                            /////// PERIODO FIN
                            $fechlim = isset($_POST['fechlim'][$idsave]) ? $_POST['fechlim'][$idsave] : false ; 
                        
                            $qfechlimD = new DateTime($fechlim);                          
                            $yearfin = $qfechlimD->format('y');
                            $mesfin= $qfechlimD->format('m');

                            /////// FECHA  FIN
                            $vigencia = isset($_POST['fechlim'][$idsave]) ? $_POST['fechlim'][$idsave] : false ; 
                            $qvigencia = (string)($vigencia);

                        
    
                        


                            if(!empty($perspectiva) AND!empty($accionini) AND !empty($objetivo) AND !empty($metaa)
                            AND !empty($pondee) AND !empty($medidaa) AND !empty($fechlim)){   
                        
                                if($alcanceobj == "CORPORATIVO"){
                                    ////ID OBJETIVO
                                    $allobj = current($dbo->query("SELECT COUNT(num) FROM $smartobj  WHERE unideg = 'CORPORATIVO' AND yearini = '$yearini' AND gerdir = '$gerdir' AND idobjdg LIKE '%dg%' AND alcanceobj = 'CORPORATIVO' ")->fetch());
                                    $numobj = $allobj+1;
                                    ////NOMBRE OBJETIVO
                                    $nomobj = $qaccionini.' '.$qarticulo.' '.$qobjetivo;

                                    $idobdg = $unidadname.'.'.'OBJEdg.'.$gerdir.'.'.$yearini.'.'.$numobj;

                                    
                                    $save= "INSERT INTO $smartobj VALUES (NULL,'CORPORATIVO','CORPORATIVO','$alcanceobj','$yearini','SI','$gerdir','CORPORATIVO',
                                    '$qperspectiva','$idobdg',NULL,NULL,NULL,'$numobj',
                                    '$nomobj','$metaa','$pondee','$qmedidaa','$gerdir','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                    '$vigencia','$yearfin','$mesfin')";
    
                                    $qsave = $dbo->query($save);
    
                                    $savetaboj = "INSERT INTO $tabojdg VALUES (NULL,'CORPORATIVO','$alcanceobj','$yearini','SI','$gerdir','$qperspectiva',
                                    '$qmedidaa','$idobdg','$nomobj','$metaa',
                                    '$pondee','$gerdir',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                                    $qsavetaboj = $dbo->query($savetaboj);

                                }elseif($alcanceobj == "REGIONAL"){

                                     

                                        ////ID OBJETIVO
                                        $allobj = current($dbo->query("SELECT COUNT(num) FROM $smartobj  WHERE region = '$region' AND yearini = '$yearini' AND gerdir = '$gerdir' AND idobjreg LIKE '%reg%' AND alcanceobj = 'REGIONAL' ")->fetch());
                                        $numobj = $allobj+1;
                                        ////NOMBRE OBJETIVO
                                        $nomobj = $qaccionini.' '.$qarticulo.' '.$qobjetivo;
                                        $idobREG = $unidadname.'.'.'OBJEreg.'.$gerdir.'.'.$yearini.'.'.$numobj;

                                        $save= "INSERT INTO $smartobj VALUES (NULL,'$region','$region','$alcanceobj','$yearini','SI','$gerdir','$region',
                                        '$qperspectiva','$objasocdg','$idobREG',NULL,NULL,'$numobj',
                                        '$nomobj','$metaa','$pondee','$qmedidaa','$gerdir','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                        '$vigencia','$yearfin','$mesfin')";
        
                                        $qsave = $dbo->query($save);
        
                                        $savetaboj = "INSERT INTO $tabojreg VALUES (NULL,'$region','$alcanceobj','$yearini','SI','$gerdir','$qperspectiva',
                                        '$qmedidaa','$objasocdg','$idobREG','$nomobj','$metaa',
                                        '$pondee','$gerdir',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                                        $qsavetaboj = $dbo->query($savetaboj);

                                }elseif($alcanceobj == "UNIDAD"){

                                     

                                    ////ID OBJETIVO
                                    $allobj = current($dbo->query("SELECT COUNT(num) FROM $smartobj  WHERE unidad = '$unidadreg' AND yearini = '$yearini' AND gerdir = '$gerdir' AND idobjunid LIKE '%unid%' AND alcanceobj = 'UNIDAD' ")->fetch());
                                    $numobj = $allobj+1;
                                    ////NOMBRE OBJETIVO
                                    $nomobj = $qaccionini.' '.$qarticulo.' '.$qobjetivo;
                                    $idobUNID = $unidadreg.'.'.'OBJEunid.'.$gerdir.'.'.$yearini.'.'.$numobj;

                                    $save= "INSERT INTO $smartobj VALUES (NULL,'$region','$unidadreg','$alcanceobj','$yearini','SI','$gerdir','$unidadreg',
                                    '$qperspectiva','$objasocdg','$objasocreg','$idobUNID',NULL,'$numobj',
                                    '$nomobj','$metaa','$pondee','$qmedidaa','$gerdir','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                    '$vigencia','$yearfin','$mesfin')";
    
                                    $qsave = $dbo->query($save);
    
                                    $savetaboj = "INSERT INTO $tabojunid VALUES (NULL,'$region','$unidadreg','$alcanceobj','$yearini','SI','$gerdir','$qperspectiva',
                                    '$qmedidaa','$objasocdg','$objasocreg','$idobUNID','$nomobj','$metaa',
                                    '$pondee','$gerdir',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                                    $qsavetaboj = $dbo->query($savetaboj);

                            }elseif($alcanceobj == "GERENCIAL"){

                                    $perspectiva = isset($_POST['perspectiva'][$idsave]) ? $_POST['perspectiva'][$idsave] : false;
                                    $qperspectiva = (string)($perspectiva);

                                        ////ID OBJETIVO
                                        $allobj = current($dbo->query("SELECT COUNT(num) FROM $smartobj  WHERE unidad = '$clienteu' AND yearini = '$yearini' AND gerdir = '$gerdir' AND idobjger LIKE '%ger%' ")->fetch());
                                        $numobj = $allobj+1;
                                        ////NOMBRE OBJETIVO
                                        $nomobj = $qaccionini.' '.$qarticulo.' '.$qobjetivo;

                                        $idobGE = $unidadname.'.'.'OBJEger.'.$gerdir.'.'.$yearini.'.'.$numobj;

                                        $save= "INSERT INTO $smartobj VALUES (NULL,'$clienteu','$alcanceobj','$yearini','SI','$gerdir',NULL,
                                        '$qperspectiva','$objasocdg','$objasocreg','$idobGE',NULL,'$numobj',
                                        '$nomobj','$metaa','$pondee','$qmedidaa','$gerdir','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                        '$vigencia','$yearfin','$mesfin')";
        
                                        $qsave = $dbo->query($save);
        
                                        $savetaboj = "INSERT INTO $taboj VALUES (NULL,'$clienteu','$alcanceobj','$yearini','SI','$gerdir','$qperspectiva',
                                        '$qmedidaa','$objasocdg','$objasocreg','$idobGE',NULL,'$nomobj','$metaa',
                                        '$pondee','$gerdir',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                                        $qsavetaboj = $dbo->query($savetaboj);
                                }
                                    
                              
                             

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
                                    <div id="datsave"><?php echo 'datos no guardados'. $accionini;; ?></div>
                                </section>
                        <?php
                    }
                        

                }elseif(isset($_POST['modestra'])) {                    

                    $fehoy   = date('d/m/y');

                    foreach ($_POST['idmodu'] as $idmodu) {

                    
                        $nommod = isset($_POST['nommod'][$idmodu]) ? $_POST['nommod'][$idmodu] : false;
                        $qnommod = (string)($nommod);

                        $metamod = isset($_POST['metamod'][$idmodu]) ? $_POST['metamod'][$idmodu] : false ;

                        $ponde = isset($_POST['ponde'][$idmodu]) ? $_POST['ponde'][$idmodu] : false ;

                        if(empty($nommod)){

                        }else{
                            
                            $snommod = "UPDATE $smartobj SET objetivo ='$qnommod' WHERE id='$idmodu'";
                            $qsnommod = $dbo->query($snommod);

                            $indfechact = "UPDATE $smartobj SET fechamod ='$fehoy' WHERE id='$idmodu'";
                            $qindfechact = $dbo->query($indfechact);

                            $indusact = "UPDATE $smartobj SET usermod ='$userLog' WHERE id='$idmodu'";
                            $qindusact = $dbo->query($indusact);
                        }

                        if(empty($metamod)){

                        }else{
                            
                        
                            $smetamod = "UPDATE $smartobj SET meta ='$metamod' WHERE id='$idmodu'";
                            $qsmetamod = $dbo->query($smetamod);

                            $indfechact2 = "UPDATE $smartobj SET fechamod ='$fehoy' WHERE id='$idmodu'";
                            $qindfechact2 = $dbo->query($indfechact2);

                            $indusact3 = "UPDATE $smartobj SET usermod ='$userLog' WHERE id='$idmodu'";
                            $qindusact3 = $dbo->query($indusact3);
                        }

                        if(empty($ponde)){

                        }else{
                            
                        
                            $spondemod = "UPDATE $smartobj SET pond ='$ponde' WHERE id='$idmodu'";
                            $qspondemod = $dbo->query($spondemod);

                            $indfechact4 = "UPDATE $smartobj SET fechamod ='$fehoy' WHERE id='$idmodu'";
                            $qindfechact4 = $dbo->query($indfechact4);

                            $indusact5 = "UPDATE $smartobj SET usermod ='$userLog' WHERE id='$idmodu'";
                            $qindusact5 = $dbo->query($indusact5);
                        }

                        if ($qsnommod == true OR $qsmetamod == true OR $qspondemod == true ) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                                <?php
                                }else{

                                ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                            <?php
                        }
                    }

                }elseif(isset($_POST['modebj'])) {                    

                    foreach ($_POST['idobaju'] as $idobaj) {

                    
                        $activo = isset($_POST['activo'][$idobaj]) ? $_POST['activo'][$idobaj] : false;
                        $qactivo = (string)($activo);

                        if(empty($activo)){

                        }else{
                            
                            $savactiv = "UPDATE $smartobj SET activo ='$qactivo' WHERE id='$idobaj'";
                            $qsavactiv = $dbo->query($savactiv);


                        }

                        if ($qsavactiv == true) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                                <?php
                                }else{

                                ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                            <?php
                        }
                    }

                }

            ?>

        </section>

        <section id="ObjFUN">

                                        
            <?php 

                if(isset($_POST['altafun'])) {
                    
                    
                        $tipoob = $_POST['tipoob'];
                        $idobj = $_POST['idobj'];                        
                        $gerdir = $_POST['gerdir'];
                        $clienteu = $_POST['clienteu']; 
                        $year = $_POST['year']; 
                        

                        $namesobj = "SELECT * FROM $smartobj WHERE idobj ='$idobj' AND unidad = '$clienteu' AND yearini = '$year'";
                        $qnamesobj = $dbo->query($namesobj);

                            while ($fila = $qnamesobj->fetch(PDO::FETCH_ASSOC)) {                            
                                $unideg = $fila['unideg'];
                                $idglob = $fila['idglobj'];
                            }

                            if(empty($unideg)){
                                $unidego =   'NA';
                            }else{
                                $unidego =   $unideg;
                            }

                        foreach ($_POST['idfun'] as $idfun) {

                    
                            $perspectiva = isset($_POST['perspectiva'][$idfun]) ? $_POST['perspectiva'][$idfun] : false;
                            $qperspectiva = (string)($perspectiva);
                            
                            $servdep = isset($_POST['servdep'][$idfun]) ? $_POST['servdep'][$idfun] : false;
                            $qservdep = (string)($servdep);
                                
                            $accionini = isset($_POST['accionini'][$idfun]) ? $_POST['accionini'][$idfun] : false;
                            $qaccionini = (string)($accionini);

                            $articulo = isset($_POST['articulo'][$idfun]) ? $_POST['articulo'][$idfun] : false;
                            $qarticulo = (string)($articulo);

                            $objetivo = isset($_POST['objetivo'][$idfun]) ? $_POST['objetivo'][$idfun] : false;
                            $qobjetivo = (string)($objetivo);
                        
                            $metaa = isset($_POST['metaa'][$idfun]) ? $_POST['metaa'][$idfun] : false ;   
                            $pondee = isset($_POST['ponde'][$idfun]) ? $_POST['ponde'][$idfun] : false ;   

                            $medidaa = isset($_POST['medidaa'][$idfun]) ? $_POST['medidaa'][$idfun] : false;
                            $qmedidaa = (string)($medidaa);

                            ////FECHA INI
                            $fechalta = isset($_POST['fechalta'][$idfun]) ? $_POST['fechalta'][$idfun] : false ; 
                            $qfechalta = (string)($fechalta);


                            $qfechalta = new DateTime($fechalta); 
                            $yearini = $qfechalta->format('y');
                        
                                            
                            /////// PERIODO FIN
                            $fechlim = isset($_POST['fechlim'][$idfun]) ? $_POST['fechlim'][$idfun] : false ; 
                        
                            $qfechlimD = new DateTime($fechlim);                          
                            $yearfin = $qfechlimD->format('y');
                            $mesfin= $qfechlimD->format('m');

                            /////// FECHA  FIN
                            $vigencia = isset($_POST['fechlim'][$idfun]) ? $_POST['fechlim'][$idfun] : false ; 
                            $qvigencia = (string)($vigencia);

                        
                            ////ID OBJETIVO
                            $allobj = current($dbo->query("SELECT COUNT(*) FROM $smartobjfun  WHERE unidad = '$clienteu' AND  yearini = '$yearini' AND useresp = '$servdep'")->fetch());
                            $numobj = $allobj+1;


                            $idob = 'OBJF.'.$qservdep.'.'.$yearini.'.'.$numobj;
                            ////NOMBRE OBJETIVO
                            $nomobj = $qaccionini.' '.$qarticulo.' '.$qobjetivo;

                          /////IDGLOBAL
                            $idglobf = 'OBJF.'.$qservdep.'.'.$yearini;

                            if(!empty($perspectiva) AND !empty($accionini) AND !empty($objetivo) AND !empty($metaa)
                            AND !empty($pondee) AND !empty($medidaa) AND !empty($fechlim)){                            

                                $save= "INSERT INTO $smartobjfun VALUES (NULL,'$clienteu', '$tipoob','$yearini','SI','$gerdir',
                                '$unidego','$qperspectiva','$idglob','$idglobf','$idob','$numobj',
                                '$nomobj','$metaa','$pondee','$qmedidaa','$qservdep','$fechalta','$userLog',NULL,NULL,NULL,NULL,
                                '$vigencia','$yearfin','$mesfin')";
                            
                                $qsave = $dbo->query($save);

                                $savetaboj = "INSERT INTO $taboj VALUES (NULL,'$clienteu','$yearini','$gerdir','$qperspectiva',
                                '$qmedidaa','$idglobf','$idob','$nomobj','$metaa',
                                '$pondee','$gerdir',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
                                $qsavetaboj = $dbo->query($savetaboj);
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

                }elseif(isset($_POST['modobfun'])) {                    

                    $fehoy   = date('d/m/y');

                    foreach ($_POST['idmoduf'] as $idmoduf) {

                    
                        $nommod = isset($_POST['nommod'][$idmoduf]) ? $_POST['nommod'][$idmoduf] : false;
                        $qnommod = (string)($nommod);

                        $metamod = isset($_POST['metamod'][$idmoduf]) ? $_POST['metamod'][$idmoduf] : false ;
                        $pondemod = isset($_POST['pondemod'][$idmoduf]) ? $_POST['pondemod'][$idmoduf] : false ;

                        if(empty($nommod)){

                        }else{
                            
                            $snommod = "UPDATE $smartobjfun SET objetivo ='$qnommod' WHERE id='$idmoduf'";
                            $qsnommod = $dbo->query($snommod);

                            $indfechact = "UPDATE $smartobjfun SET fechamod ='$fehoy' WHERE id='$idmoduf'";
                            $qindfechact = $dbo->query($indfechact);

                            $indusact = "UPDATE $smartobjfun SET usermod ='$userLog' WHERE id='$idmoduf'";
                            $qindusact = $dbo->query($indusact);
                        }

                        if(empty($metamod)){

                        }else{
                            
                        
                            $smetamod = "UPDATE $smartobjfun SET meta ='$metamod' WHERE id='$idmoduf'";
                            $qsmetamod = $dbo->query($smetamod);

                            $indfechact2 = "UPDATE $smartobjfun SET fechamod ='$fehoy' WHERE id='$idmoduf'";
                            $qindfechact2 = $dbo->query($indfechact2);

                            $indusact3 = "UPDATE $smartobjfun SET usermod ='$userLog' WHERE id='$idmoduf'";
                            $qindusact3 = $dbo->query($indusact3);
                        }

                        if(empty($pondemod)){

                        }else{
                            
                        
                            $spondemod = "UPDATE $smartobjfun SET pond ='$pondemod' WHERE id='$idmoduf'";
                            $qspondemod = $dbo->query($spondemod);

                            $indfechact4 = "UPDATE $smartobjfun SET fechamod ='$fehoy' WHERE id='$idmoduf'";
                            $qindfechact4 = $dbo->query($indfechact4);

                            $indusact5 = "UPDATE $smartobjfun SET usermod ='$userLog' WHERE id='$idmoduf'";
                            $qindusact5 = $dbo->query($indusact5);
                        }

                        if ($qsnommod == true OR $qsmetamod == true OR $qspondemod == true) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                                <?php
                                }else{

                                ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                            <?php
                        }
                    }

                }elseif(isset($_POST['modbjf'])) {                    

                    foreach ($_POST['idobajuf'] as $idobajuf) {

                    
                        $activo = isset($_POST['activo'][$idobajuf]) ? $_POST['activo'][$idobajuf] : false;
                        $qactivo = (string)($activo);

                        if(empty($activo)){

                        }else{
                            
                            $savactiv = "UPDATE $smartobjfun SET activo ='$qactivo' WHERE id='$idobajuf'";
                            $qsavactiv = $dbo->query($savactiv);


                        }

                        if ($qsavactiv == true) {

                            ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos guardados'; ?></div>
                                </section>
                                <?php
                                }else{

                                ?>
                                <section id="contdatsave">
                                    <div id="datsave"><?php echo 'datos no guardados'; ?></div>
                                </section>
                            <?php
                        }
                    }

                }
    
            ?>

        </section>



</body>
</html>