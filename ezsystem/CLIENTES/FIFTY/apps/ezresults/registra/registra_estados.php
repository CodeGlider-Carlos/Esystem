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

 $tabregion = isset($_POST['region']) ? $_POST['region'] : false;
 $tabunidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;
 

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

            <img  src="../img/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexResults.php" id="">

                <input type="submit" class="submit" id="slognav1">

            </form>

          
        </div>
        <div class="bakBoton">

            <img  src="../img/okrs.png" class="lognav">
            <div id="txt2" class="txttx"><strong>OKRS</strong></div>

            <form action="../select_okrs.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2" >

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../img/registro.png" class="lognav">
            <div id="txt3" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../select_registra.php" >

                <input type="submit" class="submit" id="slognav3" >

            </form>
            <div class="line1"></div>
        </div>

        <div class="bakBoton">

            <img  src="../img/config.svg" class="lognav">
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

          <form id="plnCOm" method="POST" action="save_estados.php" autocomplete="off">

  

            <input hidden type="text" value="<?php echo $year ;?>" name="year">
            <input hidden type="text" value="<?php echo $periodoev ;?>" name="periodo">
            <input hidden type="text" value="<?php echo $tabregion ;?>" name="region">
            <input hidden type="text" value="<?php echo $tabunidad ;?>" name="unidad">

                <input hidden type="text" value="<?php echo $mesme ;?>" name="mesmeta">


                <div id="conttabobj">

                    <table id="tablataobj">

                        <tr>
                            <th colspan="6" class="nameReg">ESTADO DE RESULTADOS</th>
                        </tr>

                        <tr id="columnasob">
                            
                            <th  class="col1ES">MES</th>
                            <th  class="col1ES">RESULTADO</th>                       
                            <th  class="col1ES">OBSERVACIONES</th> 
                            <th  class="col1ES">ACTUAL</th> 
                            <th  class="col1ES">OBSERVACIONES</th>                            
                            <th class="col4ES" >CRITERIO</th>
                        </tr>

    
                                       
                        <?php
                        

                                
                                    $tabesta = "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI' AND unidad LIKE '%$tabunidad%'  ";
                                                            
                                    
                                    $qtabesta = $db_result->query($tabesta);

                                    while ($fila = $qtabesta->fetch(PDO::FETCH_ASSOC)) { 
                                        
                                        $idindi = $fila['id'];
                                    
                                        $comment1 = $fila['comment1']; 
                                        $comment2 = $fila['comment2']; 
                                        $comment3 = $fila['comment3']; 
                                        $comment4 = $fila['comment4']; 
                                        $comment5 = $fila['comment5']; 
                                        $comment6 = $fila['comment6']; 
                                        $comment7 = $fila['comment7']; 
                                        $comment8 = $fila['comment8']; 
                                        $comment9 = $fila['comment9']; 
                                        $comment10 = $fila['comment10']; 
                                        $comment11 = $fila['comment11']; 
                                        $comment12 = $fila['comment12']; 
                                    

                                   
                                        if($mescol == 'm1'){
                                        $printObser =  $comment1;
                                        }elseif($mescol == 'm2'){
                                            $printObser =  $comment2;
                                        }elseif($mescol == 'm3'){
                                            $printObser =  $comment3;
                                        }elseif($mescol == 'm4'){
                                            $printObser =  $comment4;
                                        }elseif($mescol == 'm5'){
                                            $printObser =  $comment5;
                                        }elseif($mescol == 'm6'){
                                            $printObser =  $comment6;
                                        }elseif($mescol == 'm7'){
                                            $printObser =  $comment7;
                                        }elseif($mescol == 'm8'){
                                            $printObser =  $comment8;
                                        }elseif($mescol == 'm9'){
                                            $printObser =  $comment9;
                                        }elseif($mescol == 'm10'){
                                            $printObser =  $comment10;
                                        }elseif($mescol == 'm11'){
                                            $printObser =  $comment11;
                                        }elseif($mescol == 'm12'){
                                            $printObser =  $comment12;
                                        }
                                    
                                 
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
                                                        

                                        if($mescol == 'm1'){
                                            $printObser =  $m1;
                                            }elseif($mescol == 'm2'){
                                                $printMEs =  $m2;
                                            }elseif($mescol == 'm3'){
                                                $printMEs =  $m3;
                                            }elseif($mescol == 'm4'){
                                                $printMEs =  $m4;
                                            }elseif($mescol == 'm5'){
                                                $printMEs =  $m5;
                                            }elseif($mescol == 'm6'){
                                                $printMEs =  $m6;
                                            }elseif($mescol == 'm7'){
                                                $printMEs =  $m7;
                                            }elseif($mescol == 'm8'){
                                                $printMEs =  $m8;
                                            }elseif($mescol == 'm9'){
                                                $printMEs =  $m9;
                                            }elseif($mescol == 'm10'){
                                                $printMEs =  $m10;
                                            }elseif($mescol == 'm11'){
                                                $printMEs =  $m11;
                                            }elseif($mescol == 'm12'){
                                                $printMEs =  $m12;
                                            }
                                        
                                            $prinrMESnum = '$'. number_format($printMEs,2);

                                        echo '
                                        
                                            <tr>
                                                <td hidden><input type="text" name="idUpdate[]" value="'. $fila['id'] .'" ></td>
                                                <td ><input type="text" id=mes  value="'. $mesev . '" class="selectREg" readonly></td>  
                                              
                                                    
                                                <td> <input type="number" step="0.01" name="resultado[' . $fila['id'] . ']" class="selectREg focus center"  placeholder="SIN SIMBOLO DE MONEDA..."  > </td>
                                               <td  ><textarea  class="selectREg marginleft focus" name="obs[' . $fila['id'] . ']" ></textarea></td>
                                              

                                               <td ><input type="text" id=mes  value="'. $prinrMESnum . '"  placeholder="'. $prinrMESnum .'"  class="selectREg" readonly></td>  
                                              
                                             
                                                <td  ><textarea  class="selectREg marginleft focus"  placeholder="'. $printObser .'" readonly>'. $printObser .'</textarea></td>
                                                <td  ><textarea  class="selectREg marginleft justify" placeholder="'. $fila['concepto'] .'" readonly></textarea></td>
                                      
                                              
                                            </tr>
                                        
                                        
                                            
                                                    
                                        ';



                                    }



                        ?>

                        <tr>
                            <td></td>                    
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <input type="submit" id="submitEstados" value="GUARDAR" name="saveMedibles"></td>
                            
                
                        </tr>

                    </table>

                    </div>

        </form>

        <div id="blockMod"></div>
    </section>




</body>

</html>