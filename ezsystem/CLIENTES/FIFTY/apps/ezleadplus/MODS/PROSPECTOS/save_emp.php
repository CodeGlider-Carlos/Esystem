<?php
session_start();
require_once '../../varSQL/bd_lead.php';
require_once '../../../../varSQL/var.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$fechahoy = date('Y-m-d');


$categoria = $_POST['categoria'];
$region = $_POST['region'];
$unidad = $_POST['unidad'];
$organizacion = $_POST['organizacion'];
$acron = $_POST['acron'];

$especialidad = $_POST['especialidad'];
$tel1 = $_POST['telefono'];

$nombreco = $_POST['nombreco'];

$tel2 = $_POST['whats'];



$email = $_POST['email'];


$fuente = $_POST['fuente'];
$finterna = $_POST['finterna'];
$useresp = $_POST['useresp'];
$obs = $_POST['obs'];



if (isset($_POST['savenuevoprosp'])){

    $valyred= "SELECT * FROM $crm_prosElead WHERE nombreco = '$organizacion'   ";

    $qvalyred = $dbc->query($valyred); 
    while ($filpro = $qvalyred->fetch(PDO::FETCH_ASSOC)) {
      $valred =$filpro['nombreco'];
    }

    if(!empty($valred)){
    
    }else{
    
    
    
        $insertar = "INSERT INTO $crm_prosElead VALUES (
    
        NULL,'$region','$unidad','$categoria',NULL,'$organizacion','$acron',
        '$especialidad','$tel1','$nombreco','$tel2',
        '$email',NULL,'NMX','$fuente','$finterna',
        '$useresp','$obs','0','0','$userLog','$fechahoy',NULL,NULL,NULL,'1'
    
    )";
      
      
      $ejecutar = $dbc->query($insertar);
    
    }
    

}elseif (isset($_POST['updateprosp'])){
    $idupd = $_POST['idupd'];

    if(!empty($region)){

        $update0a = "UPDATE $crm_prosElead SET categoria='$region' WHERE id='$idupd' ";
        $qupdate0a = $dbc->query($update0a);
        
    }

    if(!empty($unidad)){

        $update0b = "UPDATE $crm_prosElead SET categoria='$unidad' WHERE id='$idupd' ";
        $qupdate0b = $dbc->query($update0b);
        
    }
    
    if(!empty($categoria)){

        $update = "UPDATE $crm_prosElead SET categoria='$categoria' WHERE id='$idupd' ";
        $qsqve = $dbc->query($update);
        
    }
    if(!empty($organizacion)){

        $update1 = "UPDATE $crm_prosElead SET nombreco='$organizacion' WHERE id='$idupd' ";
        $qsqve1 = $dbc->query($update1);

    }
    if(!empty($acron)){

        
        $update2 = "UPDATE $crm_prosElead SET acron='$acron' WHERE id='$idupd' ";
        $qsqve2 = $dbc->query($update2);

    }
    
    if(!empty($especialidad)){
        $update4 = "UPDATE $crm_prosElead SET especialidad='$especialidad' WHERE id='$idupd' ";
        $qsqve4 = $dbc->query($update4);
    }
    if(!empty($rol)){
        $update4b = "UPDATE $crm_prosElead SET nombrecontacto='$nombreco' WHERE id='$idupd' ";
        $qsqve4b = $dbc->query($update4b);
    }
    if(empty($tel1)){
      
    }else{
        $update5 = "UPDATE $crm_prosElead SET tel1='$tel1' WHERE id='$idupd' ";
        $qsqve5 = $dbc->query($update5);
    }
    if(!empty($tel2)){
        $update6 = "UPDATE $crm_prosElead SET tel2='$tel2' WHERE id='$idupd' ";
        $qsqve6 = $dbc->query($update6);
    }
    if(!empty($email)){
        $update7 = "UPDATE $crm_prosElead SET email='$email' WHERE id='$idupd' ";
        $qsqve7 = $dbc->query($update7);
    }
  
    if(!empty($fuente)){
        $update8 = "UPDATE $crm_prosElead SET fuente='$fuente' WHERE id='$idupd' ";
        $qsqve8 = $dbc->query($update8);
    }
    if(!empty($finterna)){
        $update9 = "UPDATE $crm_prosElead SET finterna='$finterna' WHERE id='$idupd' ";
        $qsqve9 = $dbc->query($update9);
    }
    if(!empty($useresp)){
        $update10 = "UPDATE $crm_prosElead SET useresp='$useresp' WHERE id='$idupd' ";
        $qsqve10 = $dbc->query($update10);
    }
    if(!empty($obs)){
        $update11 = "UPDATE $crm_prosElead SET obs='$obs' WHERE id='$idupd' ";
        $qsqve11 = $dbc->query($update11);
    }
}






  
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ LEAD+</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/prospect.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/prospect.css">
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


            <form action="../PROSPECTOS/selectprospect.php" id="slognav2">

                <input type="submit" class="submit" >

            </form>

            <div class="line1"></div>
            
        </div>


        <div class="bakBoton">

            <img id="lognav3" src="../../img/suite/tarj2.png" class="lognav">
            <div id="txt3" class="txttx"><strong>TARJETA DE CONTACTO</strong></div>


            <form action="../TARJETAS/selectipo.php" id="slognav3">

                <input type="submit" class="submit" >

            </form>

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



     


  
      

        <div id="blockMod"></div>


    </modseg>

    <form method="POST" action="prospect_emp.php" id="backregresar">

        <div id="backbackRegre">



            <img src="../../img/suite/regresar2.png" id="imagRegresar">

            <input type="submit" name="subback" id="subback">

         
                    <div id="regresartxt">Datos guardados, regresar!</div>
         
        
        </div>

    </form>

</body>

</html>