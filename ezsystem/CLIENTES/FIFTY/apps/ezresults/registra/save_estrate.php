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
 $coloBS = 'obs'.$mesmeta;
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

        <form action="../loglog/logout.php" id="lognav7"  class="bakBoton">
                
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

                    if(isset($_POST['save'])){

                        foreach ($_POST['idUpdate'] as $idUpdate) {

                            $fechamod = date('Y-m-d');
                            $estrategia = isset($_POST['estrategia'][$idUpdate]) ? $_POST['estrategia'][$idUpdate] : false;
                            $qestrategia = (string) ($estrategia);
    
                            $obs = isset($_POST['obs'][$idUpdate]) ? $_POST['obs'][$idUpdate] : false;
                            $qobs = (string) ($obs);
    
                       
                            if(empty($estrategia)){
    
                            }else{
                                $insertar = "INSERT INTO $estrateco VALUES (NULL, '$region','$unidad', '$year','$periodo','$qestrategia','$qobs','$userLog','$fechamod','1' )";
                                $qinresl = $db_result->query($insertar);
                            }
    
                              
                        }
                            
                        
                    }elseif(isset($_POST['modific'])){

                        foreach ($_POST['idUpdate'] as $idUpdate) {

                        
                            $estrategia = isset($_POST['estrategia'][$idUpdate]) ? $_POST['estrategia'][$idUpdate] : false;
                            $qestrategia = (string) ($estrategia);
    
                            $obs = isset($_POST['obs'][$idUpdate]) ? $_POST['obs'][$idUpdate] : false;
                            $qobs = (string) ($obs);

                            $mod = isset($_POST['mod'][$idUpdate]) ? $_POST['mod'][$idUpdate] : false;
                            $qmod = (string) ($mod);
    
                                                 
                            if($mod == 'MODIFICAR' ){

                                if(empty($estrategia)){
    
                                }else{
                                   
    
                                    $updobs = "UPDATE $estrateco SET estrategia='$qestrategia' WHERE id='$idUpdate' ";
                                    $qinresl = $db_result->query($updobs);
                                }
    
                                if(empty($obs)){
        
                                }else{
                                   
    
                                    $updobs2 = "UPDATE $estrateco SET obs='$qobs' WHERE id='$idUpdate' ";
                                    $qinresl2 = $db_result->query($updobs2);
                                }
        
                            }elseif($mod == 'ELIMINAR'){
                                $updobs = "UPDATE $estrateco SET activo='0' WHERE id='$idUpdate' ";
                                $qinresl = $db_result->query($updobs);
                            }
                       
                           
                              
                        }
                            
                        
                    }

                   

                        ?>           

                        <input hidden type="text" value="<?php echo $year; ?>" name="yearyearSel">
                        <input hidden type="text" value="<?php echo $periodo; ?>" name="periodo">
                        <input hidden type="text" value="<?php echo $region; ?>" name="region">
                        <input hidden type="text" value="<?php echo $unidad; ?>" name="unidad">
                            

                        <?php
                    

                    
                    if(!empty($qinresl) OR !empty($qinresl2)){
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