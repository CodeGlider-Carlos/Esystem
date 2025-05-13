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



 $year = $_POST['year'];
 $periodo = $_POST['periodo'];
 $region = $_POST['region'];
 $unidad = $_POST['unidad'];


 $mesmeta = $_POST['mesmeta'];

 $colev = 'm'.$mesmeta;
 $coloBS = 'comment'.$mesmeta;
?>
 

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

            <form action="../indexResults.php" id="slognav1">

                <input type="submit" class="submit" id="">

            </form>

          
        </div>


        <div class="bakBoton">

            <img  src="../img/iconos/registro.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../select_registra.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2" >

            </form>
            <div class="line1"></div>
        </div>

        <div class="bakBoton">

            <img  src="../img/iconos/config.svg" class="lognav">
            <div id="txt3" class="txttx"><strong>CONFIGURACION</strong></div>

            <form action="" id="slognav3">

                <input type="submit" class="submit" id="lognav3" >

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

    <modseg  id="backkk">
   

        <form method="POST" action="../select_registra.php" id="backregresar">

        
            <img src="../../ezresults/img/ICONOS/regresar2.png" id="imagRegresar">

            <input type="submit" name="filtrarU" id="subback">



                <?php 

                   

                    foreach ($_POST['idUpdate'] as $idUpdate) {

                        $fechamod = date('Y-m-d');
                        $resultad = isset($_POST['resultado'][$idUpdate]) ? $_POST['resultado'][$idUpdate] : false;
                        $obs = isset($_POST['obs'][$idUpdate]) ? $_POST['obs'][$idUpdate] : false;

                        $qobs = (string) ($obs);

                                                

                        if(empty($resultad)){

                        }else{
                            $inresl = "UPDATE $estresu SET $colev  ='$resultad' WHERE id='$idUpdate'";
                            $qinresl = $db_result->query($inresl);
                        }

                            

                          
                         


                            /////ACTUALIAZR OBJETIVOS UNIDAD
                        



                            ////////AGREGAR ACUMULADO Y PROMEDIO

                            $valyidm2 = "SELECT * FROM $estresu WHERE  id = '$idUpdate' ";
                            $qvalyidm2 = $db_result->query($valyidm2);                            
                    
                            while($fila = $qvalyidm2->fetch(PDO::FETCH_ASSOC)) {
                                

                                $rem1 = $fila['m1'];
                                $rem2 = $fila['m2'];
                                $rem3 = $fila['m3'];
                                $rem4 = $fila['m4'];
                                $rem5 = $fila['m5'];
                                $rem6 = $fila['m6'];
                                $rem7 = $fila['m7'];
                                $rem8 = $fila['m8'];
                                $rem9 = $fila['m9'];
                                $rem10 = $fila['m10'];
                                $rem11 = $fila['m11'];
                                $rem12 = $fila['m12'];  



                                    /////SUMA DE TODOS LOS RESULTADOS

                                    $acumulado= $rem1+$rem2+$rem3+$rem4+$rem5+$rem6+$rem7+$rem8+$rem9+$rem10+$rem11+$rem12;

                                    ///// TOTAL DE MESES CON DATOS
                                    if(!empty($rem1)){
                                        $cuen1 = 1;
                                    }else{
                                        $cuen1 = 0;
                                    }
                                    if(!empty($rem2)){
                                        $cuen2 = 1;
                                    }else{
                                        $cuen2 = 0;
                                    }      
                                    if(!empty($rem3)){
                                        $cuen3 = 1;
                                    }else{
                                        $cuen3 = 0;
                                    }
                                    if(!empty($rem4)){
                                        $cuen4 = 1;
                                    }else{
                                        $cuen4 = 0;
                                    }
                                    if(!empty($rem5)){
                                        $cuen5 = 1;
                                    }else{
                                        $cuen5 = 0;
                                    }
                                    if(!empty($rem6)){
                                        $cuen6 = 1;
                                    }else{
                                        $cuen6 = 0;
                                    }
                                    if(!empty($rem7)){
                                        $cuen7 = 1;
                                    }else{
                                        $cuen7 = 0;
                                    }
                                    if(!empty($rem8)){
                                        $cuen8 = 1;
                                    }else{
                                        $cuen8 = 0;
                                    }
                                    if(!empty($rem9)){
                                        $cuen9 = 1;
                                    }else{
                                        $cuen9 = 0;
                                    }
                                    if(!empty($rem10)){
                                        $cuen10 = 1;
                                    }else{
                                        $cuen10 = 0;
                                    }
                                    if(!empty($rem11)){
                                        $cuen11 = 1;
                                    }else{
                                        $cuen11 = 0;
                                    }
                                    if(!empty($rem12)){
                                        $cuen12 = 1;
                                    }else{
                                        $cuen12 = 0;
                                    }
                                    /////SUMA DE TODOS LOS MESES CON DATOS
                                    $mesestot =  $cuen1+$cuen2+$cuen3+$cuen4+$cuen5+$cuen6+$cuen7+$cuen8+$cuen9+$cuen10+$cuen11+$cuen12;
                    

                                    ////// PROMEDIO DEL PERIODO
                                    if($mesestot >0){
                                        $pomedio=   $acumulado/$mesestot;
                                    }else{
                                        
                                        $pomedio = NULL;
                                    }

                            



                        }
                            

                        if(empty($resultad)){

                        }else{
                          
                                $inresl2 = "UPDATE $estresu SET acumulado  ='$acumulado' WHERE id='$idUpdate'";
                                $qinresl2 = $db_result->query($inresl2);

                        }

                        if(!empty($obs)){

                            $obsesav = "UPDATE $estresu SET $coloBS  ='$qobs' WHERE id='$idUpdate'";
                            $qobsesav = $db_result->query($obsesav);


                            
                            $saveco = "UPDATE $estresu SET catcomment  ='c' WHERE id='$idUpdate'";
                            $qsaveco = $db_result->query($saveco);
                        }

                        }
                        

                        ?>           

                        <input hidden type="text" value="<?php echo $year; ?>" name="yearyearSel">
                        <input hidden type="text" value="<?php echo $periodo; ?>" name="periodo">
                        <input hidden type="text" value="<?php echo $region; ?>" name="region">
                        <input hidden type="text" value="<?php echo $unidad; ?>" name="unidad">
                            

                        <?php
                    

                    
                    if(!empty($qinresl)){
                        ?>
                            <div id="regresartxt">Datos guardados, regresar!</div>
                        <?php

                    }else{

                        ?>
                            <div id="regresartxt">Datos NO guardados, regresar!</div>
                        <?php
                    }
                
                  

            ?>
            
        </form>       
      
    </modseg>

    <div id="blockMod"></div>



</body>

</html>