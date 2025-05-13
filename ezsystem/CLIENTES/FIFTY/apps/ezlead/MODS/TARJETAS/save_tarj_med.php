<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';


$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$fechahoy = date('Y-m-d');


$idmed = $_POST['idmed'];
$tarjemp = $_POST['tarjemp'];
$person = $_POST['person'];
$valor =$_POST['valor'];
$accion =$_POST['accion'];



$listaprecios = $_POST['listaprecios'];


$bred= "SELECT * FROM $cat_tarjetas_emp WHERE id LIKE '%$tarjemp%' ";
$qbred = $dbc->query($bred);          

                      
while ($filpro = $qbred->fetch(PDO::FETCH_ASSOC)) {
    $idtarjemp =$filpro['id'];
    $cetagoriared =$filpro['categoria'];
    $redName =$filpro['red'];
    $listapreciosSAVE =$filpro['listaprecios'];


    $ac1 =$filpro['ac1'];
    $bene1 =$filpro['bene1'];
    $unmed1 =$filpro['unmed1'];
    $valor1 =$filpro['valor1'];

    if(empty($ac1)){
        $p_ac1 = NULL;
        $p_bene1 = NULL;
        $p_unmed1 = NULL;
        $p_valor1 = NULL;
    }else{
        $p_ac1 = $ac1;
        $p_bene1 = $bene1;
        $p_unmed1 = $unmed1;
        $p_valor1 = $valor1;
    }


    $ac2 =$filpro['ac2'];
    $bene2 =$filpro['bene2'];
    $unmed2 =$filpro['unmed2'];
    $valor2 =$filpro['valor2'];

    if(empty($ac2)){
        $p_ac2 = NULL;
        $p_bene2 = NULL;
        $p_unmed2 = NULL;
        $p_valor2 = NULL;
    }else{
        $p_ac2 = $ac2;
        $p_bene2 = $bene2;
        $p_unmed2 = $unmed2;
        $p_valor2 = $valor2;
    }





    $ac3 =$filpro['ac3'];
    $bene3 =$filpro['bene3'];
    $numnin3 =$filpro['numin'];
    $unmed3 =$filpro['unmed3'];
    $valor3 =$filpro['valor3'];


    if(empty($ac3)){
        $p_ac3 = NULL;
        $p_bene3 = NULL;
        $p_numnin3 =NULL;
        $p_unmed3 = NULL;
        $p_valor3 = NULL;
    }else{
        $p_ac3 = $ac3;
        $p_bene3 = $bene3;
        $p_numnin3 =$numnin3;
        $p_unmed3 = $unmed3;
        $p_valor3 = $valor3;
    }




    $ac4 =$filpro['ac4'];
    $bene4 =$filpro['bene4'];
    $unmed4 =$filpro['unmed4'];
    $valor4 =$filpro['valor4'];


    if(empty($ac4)){
        $p_ac4 = NULL;
        $p_bene4 = NULL;
        $p_unmed4 = NULL;
        $p_valor4 = NULL;
    }else{
        $p_ac4 = $ac4;
        $p_bene4 = $bene4;
        $p_unmed4 = $unmed4;
        $p_valor4 = $valor4;
    }



}

$bdpros= "SELECT * FROM $crm_pros WHERE nombre LIKE '%$person%' ";

$qbdpros = $dbc->query($bdpros);          

                      
while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
    $Pidmed =$filpro['id'];
    $region =$filpro['region'];
    $unidad =$filpro['unidad'];
    $categoria =$filpro['categoria'];
    $socio =$filpro['socio'];
    $titulo =$filpro['titulo'];
    $nombreMED =$filpro['nombre'];
    $especialidad =$filpro['especialidad'];
    $rol =$filpro['rol'];
    $tipomo =$filpro['tipomo'];
    $useresp =$filpro['useresp'];

  }


  $valyred= "SELECT * FROM $cat_tarjetas_med WHERE idmed = '$idmed' AND idtarjemp = '$tarjemp'  ";

  $qvalyred = $dbc->query($valyred); 
  while ($filpro = $qvalyred->fetch(PDO::FETCH_ASSOC)) {
    $idTarj =$filpro['id'];
    $valred =$filpro['red'];

  }

    if($accion == 'VINCULAR' ){

      

        
        
            $insertar = "INSERT INTO $cat_tarjetas_med VALUES ( NULL,'$userAcroregion','$userAcronu','$categoria','$Pidmed',
            '$titulo','$nombreMED','$especialidad','$rol','$valor','MXN','$tarjemp','$cetagoriared',
            '$redName','$listapreciosSAVE','1','$p_ac1','$p_bene1','$p_unmed1','$p_valor1','$p_ac2','$p_bene2','$p_unmed2','$p_valor2',
            '$p_ac3','$p_bene3','$p_numnin3','$p_unmed3','$p_valor3','$p_ac4','$p_bene4','$p_unmed4','$p_valor4',
            NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
            NULL,NULL,NULL,NULL,'$userLog','$fechahoy',NULL,NULL,NULL,NULL,NULL,'$useresp','1' )";
            
            $ejecutar = $dbc->query($insertar);
            

       

    }elseif($accion == 'MODIFICAR' ){
        
        $update = "UPDATE $cat_tarjetas_med SET valor='$valor' WHERE id='$idTarj' ";
        $ejecutar = $dbc->query($update);
    }elseif($accion == 'ELIMINAR'){
        $update = "UPDATE $cat_tarjetas_med SET activo='0' WHERE id='$idTarj' ";
        $ejecutar = $dbc->query($update);
    }
  





  
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead+</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/tarjetas.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/tarjetas.css">
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

            <img id="lognav1" src="../../img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

        </div>


        <div class="bakBoton">

            <img id="lognav2" src="../../img/suite/pros2.png" class="lognav">
            <div id="txt2" class="txttx"><strong>PROSPECTOS</strong></div>


            <form action="../PROSPECTOS/prospect_med.php" id="slognav2">

                <input type="submit" class="submit" >

            </form>

            
        </div>


        <div class="bakBoton">

            <img id="lognav3" src="../../img/suite/tarj2.png" class="lognav">
            <div id="txt3" class="txttx"><strong>TARJETA DE CONTACTO</strong></div>


            <form action="../TARJETAS/selectipo.php" id="slognav3">

                <input type="submit" class="submit" >

            </form>
        
            <div class="line1"></div>
        </div>




        <form action="../../../../suite.php" id="lognav7"  class="bakBoton">

            <input type="image" src="../../img/suite/exit.svg"  class="lognav" name="exitdk">
    
        <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>


    <navsup id="navsup">
        <div id="backUser">

            <img id="lognav0" src="../../../../img/apps/apps/ezleadplus.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>

    <div id="backall"></div>




    <modseg  id="modprosp">



        <form method="POST" action="tarjetas_med.php" id="backregresar">

            <div id="backbackRegre">

          
                <input hidden type="text" value="<?php echo $person; ?>" name="person">

                <input hidden type="text" value="<?php echo $tarjemp; ?>" name="tarjemp">


                
                <img src="../../img/suite/regresar2.png" id="imagRegresar">

                <input type="submit" name="subback" id="subback">

                <?php


                if(!empty($ejecutar)){
                                    ?>
                        <div id="regresartxt">Datos guardados, regresar!</div>
                    <?php

                }else{

                    ?>
                        <div id="regresartxt">Datos NO guardados, regresar!</div>
                    <?php
                }


                ?>
               

            </div>

        </form>


  
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>