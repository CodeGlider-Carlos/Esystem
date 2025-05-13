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


$idpx = $_POST['idpx'];
$person = $_POST['person'];
$tipopro = $_POST['tipopro'];
$useresp = $_POST['useresp'];
$accion = $_POST['accion'];
$valor = $_POST['valor'];


///////////////////////////////////////

if (isset($_POST['savetarj'])){



  if($accion == 'ALTA'){


    $bdpros= "SELECT * FROM $crm_prosPxLead WHERE nombre = '$person' ";
    $qbdpros = $dbc->query($bdpros);         
                          
    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
        $Pidpx =$filpro['id'];
        $region =$filpro['region'];
        $unidad =$filpro['unidad'];
        $procedimi =$filpro['procedimiento'];

        $especiali =$filpro['especialidad'];
        $nombrePX =$filpro['nombre'];
        $useresp =$filpro['useresp'];
      }

 
 

      $valyprecio= "SELECT * FROM $tabPrelead WHERE procedimiento = '$procedimi'  ";

      $qvalyprecio = $dbc->query($valyprecio); 
      while ($filpro = $qvalyprecio->fetch(PDO::FETCH_ASSOC)) {
        $preciohosp =$filpro['preciohosp'];
      }


     
      
          
            $insertar = "INSERT INTO $cat_tarjetas_leadpx VALUES (NULL,'$region','$unidad','$Pidpx','$nombrePX',
            '$procedimi','$especiali','$valor',NULL,'MXN','$userLog','$fechahoy',NULL,NULL,'1','$useresp','1' )";
            
            $ejecutar = $dbc->query($insertar);

          

  }elseif($accion == 'ELIMINAR'){

    $updetapa = "UPDATE $cat_tarjetas_emp SET activo='0' WHERE idemp='$idemp' ";
    $qupdetapa = $dbc->query($updetapa);
  }
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


            <form action="../PROSPECTOS/tarjetas.php" id="slognav2">

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


        <form method="POST" action="tarjetas_px.php" id="backregresar">

            <div id="backbackRegre">

          
             
                <input hidden type="text" value="<?php echo $person; ?>" name="person">
           
                <input hidden type="text" value="<?php echo $tipopro;?>" name="tipopro">
                
             <?php

             if(!empty($ejecutar)){
             
              ?>
                <div id="regresartxt">Datos guardados, regresar! </div>
              <?php

             }else{
              ?>
                <div id="regresartxt">Datos no guardados, regresar! </div>
              <?php
             }
             ?>
                
                <img src="../../img/suite/regresar2.png" id="imagRegresar">

                <input type="submit" name="subback" id="subback">

              


              
              
               

            </div>

        </form>


  
      

        <div id="blockMod"></div>


    </modseg>

  

</body>

</html>