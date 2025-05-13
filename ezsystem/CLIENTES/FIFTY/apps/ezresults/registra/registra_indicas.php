<?php
 session_start();
 require_once '../../../varSQL/var.php'; 
 require_once '../../../varSQL/bd.php'; 
 require_once '../varSQL/dbmysql.php'; 
 if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../../index.php");
}
 $adminrol=$_SESSION['rol'];
 $userLog =$_SESSION['usuario'];
 $userNom =$_SESSION['nombre'];
 $userUnidad=$_SESSION['unidad'];
 $userAcronu=$_SESSION['acronu'];
 $userAcroregion=$_SESSION['acroregion'];
 $userRegion=$_SESSION['region'];
 $userUnidadAcronu=$_SESSION['acronu'];



 $year = isset($_POST['year']) ? $_POST['year'] : false;
 $periodoev = isset($_POST['periodo']) ? $_POST['periodo'] : false;
 $periodoevm = isset($_POST['periodo']) ? $_POST['periodo'] : false;
 $periodover = isset($_POST['periodo']) ? $_POST['periodo'] : false;
 $messave =$periodover;
 

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
 $clientesu = isset($_POST['clientesu']) ? $_POST['clientesu'] : false;
 
 $tabdueno = isset($_POST['tabdueno']) ? $_POST['tabdueno'] : false;
 $tabregion = isset($_POST['region']) ? $_POST['region'] : false;
 $tabunidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;
 
 $tabRes = $vartabindi.$tabdueno;

 
 $valyuser= "SELECT * FROM $sresuall WHERE tipouser = '$tabdueno' AND acronu LIKE '%$tabunidad%' ";
 $qvalyuser = $db_users->query($valyuser);
 while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {                                 
     $regionNAM = $fila['region'];
     $unidNAME = $fila['unidad'];
     $usuariotask = $fila['usuario'];
 }
 

 $namepos= "SELECT * FROM $userIndica WHERE tipouser = '$tabdueno' AND unidad LIKE '%$tabunidad%' ";
 $qnamepos = $dbo->query($namepos);
 while ($fila = $qnamepos->fetch(PDO::FETCH_ASSOC)) {                                 
     $pos = $fila['pos'];
 }
 
 ?>
 <div id="varibales_mes">
 
     <?php
 
         if($periodoevm == 1){
             $mesev = 'ENERO';   
         }elseif($periodoevm ==2){
             $mesev = 'FEBRERO';
         }elseif($periodoevm ==3){
             $mesev = 'MARZO';
         }elseif($periodoevm ==4){
             $mesev = 'ABRIL';
         }elseif($periodoevm ==5){
             $mesev = 'MAYO';
         }elseif($periodoevm ==6){
             $mesev = 'JUNIO';
         }elseif($periodoevm ==7){
             $mesev = 'JULIO';
         }elseif($periodoevm ==8){
             $mesev = 'AGOSTO';
         }elseif($periodoevm ==9){
             $mesev = 'SEPTIEMBRE';
         }elseif($periodoevm ==10){
             $mesev = 'OCTUBRE';
         }elseif($periodoevm ==11){
             $mesev = 'NOVIEMBRE';
         }elseif($periodoevm ==12){
             $mesev = 'DICIEMBRE';
         }
 
         if($periodoevm == "01"){
             $mesevp = '01';   
         }elseif($periodoevm =="02"){
             $mesevp = '02';
         }elseif($periodoevm =="03"){
             $mesevp = '03';
         }elseif($periodoevm =="04"){
             $mesevp = '04';
         }elseif($periodoevm =="05"){
             $mesevp = '05';
         }elseif($periodoevm =="06"){
             $mesevp = '06';
         }elseif($periodoevm =="07"){
             $mesevp = '07';
         }elseif($periodoevm =="08"){
             $mesevp = '08';
         }elseif($periodoevm =="09"){
             $mesevp = '09';
         }elseif($periodoevm =="10"){
             $mesevp = '10';
         }elseif($periodoevm =="11"){
             $mesevp = '11';
         }elseif($periodoevm =="12"){
             $mesevp = '12';
         }
 
 
         $mesevpCOL = 'm'.$mesevp;
 
 
         if($periodoevm == 1){
             $mesme= '1';   
         }elseif($periodoevm ==2){
             $mesme = '2';
         }elseif($periodoevm ==3){
             $mesme = '3';
         }elseif($periodoevm ==4){
             $mesme = '4';
         }elseif($periodoevm ==5){
             $mesme = '5';
         }elseif($periodoevm ==6){
             $mesme = '6';
         }elseif($periodoevm ==7){
             $mesme = '7';
         }elseif($periodoevm ==8){
             $mesme = '8';
         }elseif($periodoevm ==9){
             $mesme = '9';
         }elseif($periodoevm ==10){
             $mesme = '10';
         }elseif($periodoevm ==11){
             $mesme = '11';
         }elseif($periodoevm ==12){
             $mesme = '12';
         }
 
 
     ?>
 
 </div>
 
 

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez results</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="../js/ezresults.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/idexresults.css">
    <link rel="stylesheet" type="text/css" href="css/registra.css">
    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
     <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
      <script type="text/javascript">   
        /*
       
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|android|samsung|nokia|oppo|lg|huawei/) > -1) {
            document.location = "movil/";
        }*/
    </script>



</head>

<body>

    <navleft id="navleft">


        <div class="bakBoton" id="bakBoton1">

            <img  src="../img/iconos/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexResults.php" id="">

                <input type="submit" class="submit" id="slognav1">

            </form>

          
        </div>
        <div class="bakBoton">

            <img  src="../img/iconos/okrs.png" class="lognav">
            <div id="txt2" class="txttx"><strong>OKRS</strong></div>

            <form action="../select_okrs.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2" >

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../img/iconos/registro.png" class="lognav">
            <div id="txt3" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../select_registra.php" >

                <input type="submit" class="submit" id="slognav3" >

            </form>
            <div class="line1"></div>
        </div>

        <div class="bakBoton">

            <img  src="../img/iconos/config.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>CONFIGURACION</strong></div>

            <form action="" id="slognav3">

                <input type="submit" class="submit" id="lognav4" >

            </form>

        </div>

        <form action="../../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

     

        <div id="backUser">

            <img id="lognav0" src="../../../img/suite/ezsystem.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">

          <form id="plnCOm" method="POST" action="save_indicas.php" autocomplete="off">

  

          <input hidden type="text" value="<?php echo $year ;?>" name="year">
          <input hidden type="text" value="<?php echo $periodoev ;?>" name="periodo">
          <input hidden type="text" value="<?php echo $tabdueno ;?>" name="tabdueno">
          <input hidden type="text" value="<?php echo $tabregion ;?>" name="region">
          <input hidden type="text" value="<?php echo $tabunidad ;?>" name="unidad">

            <input hidden type="text" value="<?php echo $mesme ;?>" name="mesmeta">
            <input hidden type="text" value="<?php echo $tabRes ;?>" name="tabRes">


            <div id="conttabobj">

                <table id="tablataobj">

                    <tr>
                        <th colspan="5" class="nameReg">RESULTADOS CLAVE</th>
                    </tr>

                    <tr id="columnasob">
                        
                        <th  class="col1">MES</th>
                        <th  class="col2">RESULTADO</th> 
                        <th  class="col3">OBSERVACIONES</th>                                 
                        <th class="col4" colspan="2" >NOMBRE</th>
                    </tr>

                    <?php
                    

                               
                                $valdobj = "SELECT * FROM $tabRes WHERE useresp LIKE '%$usuariotask%' AND yearini LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$tabunidad%'  ";
                                                           
                                
                                $qvaldobj = $dbo->query($valdobj);

                                while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) { 
                                    
                                    $arearesultado = $fila['obs1'];
                                    $idindi = $fila['idindi'];
                                    $idenfoqx1 = $fila['enfx1'];
                                    $idenfoqx2 = $fila['enfx2'];
                                    $reg = $fila['reg'];

                                
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
                                

                                                       
                                    if($mescol == 'm1'){
                                       $printObser =  $obs1;
                                    }elseif($mescol == 'm2'){
                                        $printObser =  $obs2;
                                    }elseif($mescol == 'm3'){
                                        $printObser =  $obs3;
                                    }elseif($mescol == 'm4'){
                                        $printObser =  $obs4;
                                    }elseif($mescol == 'm5'){
                                        $printObser =  $obs5;
                                    }elseif($mescol == 'm6'){
                                        $printObser =  $obs6;
                                    }elseif($mescol == 'm7'){
                                        $printObser =  $obs7;
                                    }elseif($mescol == 'm8'){
                                        $printObser =  $obs8;
                                    }elseif($mescol == 'm9'){
                                        $printObser =  $obs9;
                                    }elseif($mescol == 'm10'){
                                        $printObser =  $obs10;
                                    }elseif($mescol == 'm11'){
                                        $printObser =  $obs11;
                                    }elseif($mescol == 'm12'){
                                        $printObser =  $obs12;
                                    }
                                  
                                    
                                    if(empty($idenfoqx2)){
                                        $idenfox2 ='VACIO';
                                    }else{

                                        $idenfox2 = $idenfoqx2;
                                    }

        

                                    if($reg == 'TASK'){

                                        $alltasky = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE yearfinpro LIKE '%$year%' AND unidad  LIKE '%$clientesu%'  AND usertask LIKE '%$usuariotask%' AND mesfinpro LIKE '%$mesevp%'  AND activo = 'SI' ")->fetch());
                                                
                        
                                        $servNO1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE yearfinpro LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND estatus LIKE '%ATRASADA%'  AND usertask LIKE '%$usuariotask%' AND mesfinpro LIKE '%$mesevp%' AND activo = 'SI'")->fetch());
                                        $servNO2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE yearfinpro LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND estatus LIKE '%NO_CUMPLIDA%' AND usertask LIKE '%$usuariotask%' AND mesfinpro LIKE '%$mesevp%' AND activo = 'SI'")->fetch());
                                        
                                        $servSI1 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE yearfinpro LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND estatus LIKE '%EN_FECHA%'  AND usertask LIKE '%$usuariotask%' AND mesfinpro LIKE '%$mesevp%' AND activo = 'SI'")->fetch());
                                        $servSI2 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE yearfinpro LIKE '%$year%' AND unidad LIKE '%$clientesu%' AND estatus LIKE '%DESPUES_DE_FECHA%'  AND usertask LIKE '%$usuariotask%' AND mesfinpro LIKE '%$mesevp%' AND activo = 'SI'")->fetch());
            
                                        $servSI3 = current($db_task->query("SELECT COUNT(*) FROM $tabtaskY  WHERE yearfinpro LIKE '%$year%' AND unidad  LIKE '%$clientesu%' AND estatus LIKE '%EN_CURSO%'  AND usertask LIKE '%$usuariotask%' AND mesfinpro LIKE '%$mesevp%' AND activo = 'SI'")->fetch());
            
                                        $servSI = $servSI1+$servSI2;
                                        $servNO =$servNO1+$servNO2+$servSI3;
            
                                        $servOP = $servNO+$servSI;


                                        if($alltasky >0){

                                            $logroTaS = $servSI*100/$alltasky;
                                            $logroTak1 = number_format($logroTaS, 2) ;
                                            $logroTak = number_format($logroTaS, 2) . '%' ;

                                        }else{
                                            $logroTaS = 'ST';
                                            $logroTak = 'ST';
                                            $logroTak1 = 'ST';
                                        }

                                    }elseif($reg == 'ENFOQUE'){

                                        if($tabdueno == $dirg  ){

                                            $allfallENFO1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  idenfx = '$idenfoqx1' AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());    
                                            $casosNOrEN1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND idenfx = '$idenfoqx1'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'    ")->fetch());     
                                            $casosdefallar1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND idenfx = '$idenfoqx1'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());
                                    

                                            $allfallENFO2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  idenfx = '$idenfox2' AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%' AND region LIKE '%$tabregion%'   ")->fetch());    
                                            $casosNOrEN2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND idenfx = '$idenfox2'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());     
                                            $casosdefallar2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND idenfx = '$idenfox2'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'    ")->fetch());
                                    
                                        }elseif($tabdueno == $dirm  OR $tabdueno == $dira  ){

                                            $allfallENFO1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  idenfx = '$idenfoqx1' AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'    ")->fetch());    
                                            $casosNOrEN1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND idenfx = '$idenfoqx1'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'    ")->fetch());     
                                            $casosdefallar1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND idenfx = '$idenfoqx1'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'   ")->fetch());
                                    

                                            $allfallENFO2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  idenfx = '$idenfox2' AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%' AND dirger LIKE '%$usuariotask%'   ")->fetch());    
                                            $casosNOrEN2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND idenfx = '$idenfox2'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'    ")->fetch());     
                                            $casosdefallar2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND idenfx = '$idenfox2'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'     ")->fetch());
                                    
                                        }else{
                                            $allfallENFO1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  idenfx = '$idenfoqx1' AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND userjefe LIKE '%$usuariotask%'    ")->fetch());    
                                            $casosNOrEN1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND idenfx = '$idenfoqx1'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND userjefe LIKE '%$usuariotask%'    ")->fetch());     
                                            $casosdefallar1 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND idenfx = '$idenfoqx1'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND userjefe LIKE '%$usuariotask%'   ")->fetch());
                                    

                                            $allfallENFO2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  idenfx = '$idenfox2' AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%' AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')   ")->fetch());    
                                            $casosNOrEN2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND idenfx = '$idenfox2'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')     ")->fetch());     
                                            $casosdefallar2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND idenfx = '$idenfox2'  AND unidad LIKE '%$clientesu%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')     ")->fetch());
                                    
                                        }

                                    
                                        $allfallENFO = $allfallENFO1+$allfallENFO2;
                                        $casosNOrEN =  $casosNOrEN1+ $casosNOrEN2;

                                        if($allfallENFO >0){

                                            $logroENF = $casosNOrEN*100/$allfallENFO;
                                            $fallarutm = number_format($logroENF, 2);

                                        }else{
                                            $logroENF = 'NS';
                                            $fallarutm = 'NS';
                                        }
                                    

                                    }elseif($reg == 'MACRO'){


                                        if($tabdueno == $dirg  ){
                                            $allfallmAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());     
                                            $casosNOrMAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'    ")->fetch());    
                                            $casosdefallaMAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());
                                    
                                        }elseif($tabdueno == $dirm  OR $tabdueno == $dira  ){
                                            $allfallmAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'   ")->fetch());     
                                            $casosNOrMAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'    ")->fetch());    
                                            $casosdefallaMAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'   ")->fetch());
                                    
                                        }else{
                                            $allfallmAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%') ")->fetch());     
                                            $casosNOrMAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%'  OR dep  LIKE '%$usuariotask%' )  ")->fetch());    
                                            $casosdefallaMAC = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND macro LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')   ")->fetch());
                                    
                                        }

                                    
                                        if($allfallmAC >0){

                                            $logroMAC = $casosNOrMAC*100/$allfallmAC;
                                            $DESMACRO = number_format($logroMAC, 2);

                                        }else{
                                            $logroMAC = 'NS';
                                            $DESMACRO = 'NS';
                                        }
                                    

                                    }elseif($reg == 'FALLA'){

                                        if($tabdueno == $dirg  ){
                                            $allfallFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  falla LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND  region LIKE '%$tabregion%'   ")->fetch());    
                                            $casosNOrFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND falla LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'    ")->fetch());    
                                            $casosdefallaFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND falla LIKE '%$idenfoqx1%'  AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'  ")->fetch());
                                    
                                        }elseif($tabdueno == $dirm  OR $tabdueno == $dira  ){
                                            $allfallFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  falla LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND  dirger LIKE '%$usuariotask%'    ")->fetch());    
                                            $casosNOrFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND falla LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'    ")->fetch());    
                                            $casosdefallaFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND falla LIKE '%$idenfoqx1%'  AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND dirger LIKE '%$usuariotask%'   ")->fetch());
                                        
                                        }else{
                                            $allfallFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  falla LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND  (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')    ")->fetch());    
                                            $casosNOrFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO' AND falla LIKE '%$idenfoqx1%' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')     ")->fetch());    
                                            $casosdefallaFALL = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND falla LIKE '%$idenfoqx1%'  AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND (userjefe LIKE '%$usuariotask%' OR dep  LIKE '%$usuariotask%')    ")->fetch());
                                        
                                        }

                                    
                                        if($allfallFALL >0){

                                            $logroFALL = $casosNOrFALL*100/$allfallFALL;
                                            $DESFALL= number_format($logroFALL, 2);

                                        }else{
                                            $logroFALL = 'NS';
                                            $DESFALL = 'NS';
                                        }
                                    

                                    }elseif($reg == 'ALL'){

                                        $allfallFALL2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE  unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());     


                                        $casosNOrFALL2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'NO'  AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'   ")->fetch());     

                                        $casosdefallaFALL2 = current($db_risk->query("SELECT COUNT(*) FROM $tablaAp  WHERE riesgo = 'SI' AND unidad LIKE '%$tabunidad%' AND periodo LIKE '%$mesevp%'  AND region LIKE '%$tabregion%'    ")->fetch());
                                
                                        if($allfallFALL2 >0){

                                            $logroFALL2 = $casosNOrFALL2*100/$allfallFALL2;
                                            $DESFALL2= number_format($logroFALL2, 2) ;

                                        }else{
                                            $logroFALL2 = 'NS';
                                            $DESFALL2 = 'NS';
                                        }
                                    
                                    }




                                    echo '
                                    
                                        <tr>
                                            <td hidden><input type="text" name="idUpdate[]" value="'. $fila['idindi'] .'" ></td>
                                            <td ><input type="text" id=mes  value="'. $mesev . '" class="selectREg" readonly></td>  
                                            ';

                                            if($reg == 'MANUAL'){

                                                echo '
                                                
                                                <td> <input type="number" step="0.01" name="resultado[' . $fila['idindi'] . ']" class="selectREg focus center"  placeholder="ESCRIBE SIN SIMBOLOS..."  > </td>
                                            
                                                ';

                                            }elseif($reg == 'ENFOQUE'){

                                                echo '

                            
                                                
                                                <td> <input type="number" step="0.01" name="resultado[' . $fila['idindi'] . ']" class="selectREg center focus"  value="'.$fallarutm.'"  > </td>
                                                ';

                                            }elseif($reg == 'TASK'){

                                                echo '

                                                <td><input type="number" step="0.01"  name="resultado[' . $fila['idindi'] . ']"  class=" selectREg center focus"  value="'.$logroTak1.'"  ></td>


                                            
                                                ';

                                            }elseif($reg == 'FALLA'){

                                                echo '


                                                
                                                <td> <input type="number" name="resultado[' . $fila['idindi'] . ']"   class=" selectREg center focus"  value="'.$DESFALL.'"  > </td>
                                            
                                                ';

                                            }elseif($reg == 'MACRO'){

                                                echo '

                                                
                                                <td> <input type="number" step="0.01" name="resultado[' . $fila['idindi'] . ']"   class=" selectREg center focus"  value="'.$DESMACRO.'"  > </td>
                                            
                                                ';

                                            }elseif($reg == 'ALL'){

                                                echo '


                                                
                                                
                                                <td> <input type="number" step="0.01" name="resultado[' . $fila['idindi'] . ']"   class=" selectREg center focus"  value="'.$DESFALL2.'"  > </td>
                                            
                                                ';

                                            }
                                            
                                            echo '

                                            <td><textarea name="obs[' . $fila['idindi'] . ']" class="selectREg" placeholder=" '. $printObser .'"></textarea></td>



                                            <td  colspan="2"><textarea  class="selectREg marginleft" placeholder="Observaciones..." readonly>'. $fila['nombre'] . '</textarea></td>
                                         
                                        </tr>
                                    
                                    
                                        
                                                
                                    ';



                                }



                    ?>

                    <tr>
                        <td colspan="2"><?php echo $pos?></td>
                  
                        <td></td>
                        <td></td>
                        <td> <input type="submit" id="submit" value="GUARDAR" name="saveMedibles"></td>
                        
               
                    </tr>

                </table>

            </div>

        </form>

        <div id="blockMod"></div>
    </section>




</body>

</html>