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


$idemp = $_POST['idemp'];
$person = $_POST['person'];

$useresp = $_POST['useresp'];

$valor = $_POST['valor'];

$fijo = $_POST['fijo'];
$estimado = $_POST['estimado'];
$precios = $_POST['precios'];
$paquetes = $_POST['paquetes'];
$honorarios = $_POST['honorarios'];
$bajoco = $_POST['bajoco'];
$equ = $_POST['equ'];
$red = $_POST['red'];
$acuerdo = $_POST['acuerdo'];
$otros = $_POST['otros'];
$obs = $_POST['obs'];

///////lista de precios a vincular
$listaprecios = $_POST['listaprecios'];

//////acuerdos con monto fijo
$ac1 = $_POST['ac1'];
$bene1 = $_POST['bene1'];
//////acuerdos SIN monto fijo
$ac2 = $_POST['ac2'];
$bene2 = $_POST['bene2'];
//////acuerdos con PRODUCTIVIDad MINIMA
$ac3 = $_POST['ac3'];
$bene3 = $_POST['bene3'];
$numin3 = $_POST['numin3'];
////ACUERDO POR FACTURACION TOTAL
$ac4 = $_POST['ac4'];
$bene4 = $_POST['bene4'];



////ACUERDO FECHAS VIGENCIAS

$fechai = $_POST['fechaini'];
$fechaiN= new DateTime( $fechai );
$fechaini = $fechaiN->format('Y-m-d');


$fechaf = $_POST['fechafin'];
$fechafI= new DateTime( $fechaf );
$fechafin = $fechafI->format('Y-m-d');

///////////////////////////////////////

if (isset($_POST['savetarj'])){
  $accion = $_POST['accion'];


  if($accion == 'ALTA'){


    $bdpros= "SELECT * FROM $crm_prosE WHERE id LIKE '%$idemp%' ";
    $qbdpros = $dbc->query($bdpros);         
                          
    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
        $Pidmed =$filpro['id'];
        $region =$filpro['region'];
        $unidad =$filpro['unidad'];
        $categoria =$filpro['categoria'];

        $categoriaEMP =$filpro['categoria'];
        $nombreEMP =$filpro['nombreco'];
        $acronimo =$filpro['acron'];
      }

      if(empty($ac1)){
        $umed1 = NULL;
        $val1 = NULL;
      }else{
        $tab_ac1= "SELECT * FROM $cat_acuerdos WHERE id = '$ac1' ";
        $qtab_ac1 = $dbc->query($tab_ac1);  
        while ($filpro = $qtab_ac1->fetch(PDO::FETCH_ASSOC)) {
            $unmed1 =$filpro['unmed'];
            $valor1 =$filpro['valor'];


            $umed1 = $unmed1;
            $val1 = $valor1;
          
        }
      }
      

      if(empty($ac2)){
        $umed2 = NULL;
        $val2 = NULL;
      }else{

        $tab_ac2= "SELECT * FROM $cat_acuerdos WHERE id  = '$ac2' ";
        $qtab_ac2 = $dbc->query($tab_ac2);                          
        while ($filpro = $qtab_ac2->fetch(PDO::FETCH_ASSOC)) {
            $unmed2 =$filpro['unmed'];
            $valor2 =$filpro['valor'];

                $umed2 = $unmed2;
            $val2 = $valor2;
        }
      }


      if(empty($ac3)){
        $umed3 = NULL;
        $val3 = NULL;
      }else{
        $tab_ac3= "SELECT * FROM $cat_acuerdos WHERE id = '$ac3' ";
        $qtab_ac3 = $dbc->query($tab_ac3);                          
        while ($filpro = $qtab_ac3->fetch(PDO::FETCH_ASSOC)) {
            $unmed3 =$filpro['unmed'];
            $valor3 =$filpro['valor'];

            $umed3 = $unmed3;
            $val3 = $valor3;
        }

      }
      
      if(empty($ac4)){
        $umed4 = NULL;
        $val4 = NULL;
      }else{
        $tab_ac4= "SELECT * FROM $cat_acuerdos WHERE id = '$ac4' ";
        $qtab_ac4 = $dbc->query($tab_ac4);                          
        while ($filpro = $qtab_ac4->fetch(PDO::FETCH_ASSOC)) {
            $unmed4 =$filpro['unmed'];
            $valor4 =$filpro['valor'];


            $umed4 = $unmed4;
            $val4 = $valor4;
            
        }
      }
    

      $valyred= "SELECT * FROM $cat_tarjetas_emp WHERE idemp = '$idemp' AND red = '$acronimo'  ";

      $qvalyred = $dbc->query($valyred); 
      while ($filpro = $qvalyred->fetch(PDO::FETCH_ASSOC)) {
        $valred =$filpro['red'];
      }


      if(empty($valred)){

      
      
          
            $insertar = "INSERT INTO $cat_tarjetas_emp VALUES (NULL,'$userAcroregion','$userAcronu','$categoria','$idemp',
            '$nombreEMP','$acronimo','$listaprecios','$valor', 'MXN','1','$fijo','$estimado','$precios','$paquetes',
            '$honorarios','$bajoco','$equ','$red','$acuerdo','$otros','$obs','$useresp',
            '$ac1','$bene1','$umed1','$val1','$ac2','$bene2','$umed2','$val2','$ac3','$bene3','$numin3','$umed3','$val3','$ac4','$bene4','$umed4','$val4',
            '$fechaini','$fechafin','$userLog','$fechahoy',NULL,NULL,'1' )";
            
            $ejecutar = $dbc->query($insertar);

            /*
            echo 'idemp: '.$idemp.'<br>';
            echo 'acronimo: '.$acronimo.'<br>';
            */
            $tabtarj= "SELECT * FROM $cat_tarjetas_emp WHERE idemp LIKE '%$idemp%' AND red LIKE '%$acronimo%'  ";

            $qtabtarj = $dbc->query($tabtarj);          

                                
            while ($filpro = $qtabtarj->fetch(PDO::FETCH_ASSOC)) {
                $idtarjemp =$filpro['id'];

            }

          

            

              if(empty($ac1)){

              }else{

                $tabac1= "SELECT * FROM $cat_acuerdos WHERE id = '$ac1' ";
                $qtabac1 = $dbc->query($tabac1);        
                
                                      
                while ($filpro = $qtabac1->fetch(PDO::FETCH_ASSOC)) {
                    $idmoda =$filpro['id'];
                    $idmod2a =$filpro['idmod2'];
                    $nombremoda =$filpro['nombremod'];
                    $unmeda =$filpro['unmed'];
                    $criterioa =$filpro['criterio'];
                    $critmin =$filpro['critmin'];
                    $valora =$filpro['valor'];
                    $autorizaa =$filpro['autoriza'];
                  }
                  $save = "INSERT INTO $cat_acuerdos_emp VALUES (NULL,'$userAcroregion','$userAcronu','$idtarjemp',
                  '$idmoda','$idmod2a','$nombremoda','$unmeda','$criterioa',NULL,'$valora','$bene1','$autorizaa','$fechahoy','1' )";
                  
                  $qsave  = $dbc->query($save );
          

              }
            if(empty($ac2)){
              
            }else{
                $tabac2= "SELECT * FROM $cat_acuerdos WHERE id = '$ac2' ";
                $qtabac2 = $dbc->query($tabac2);        
                
                                      
                while ($filpro = $qtabac2->fetch(PDO::FETCH_ASSOC)) {
                    $idmodb =$filpro['id'];
                    $idmod2b =$filpro['idmod2'];
                    $nombremodb =$filpro['nombremod'];
                    $unmedb =$filpro['unmed'];
                    $criteriob =$filpro['criterio'];
                    $critminb =$filpro['critmin'];
                    $valorb =$filpro['valor'];
                    $autorizab =$filpro['autoriza'];
                  }

                  $save2 = "INSERT INTO $cat_acuerdos_emp VALUES (NULL,'$userAcroregion','$userAcronu','$idtarjemp',
                  '$idmodb','$idmod2b','$nombremodb','$unmedb','$criteriob',NULL,'$valorb','$bene2','$autorizab','$fechahoy','1' )";
                  
                  $qsave2  = $dbc->query($save2 );
            }



            if(empty($ac3)){
              
            }else{
                $tabac3= "SELECT * FROM $cat_acuerdos WHERE id ='$ac3' ";
                $qtabac3 = $dbc->query($tabac3);        
                
                                      
                while ($filpro = $qtabac3->fetch(PDO::FETCH_ASSOC)) {
                    $idmodc =$filpro['id'];
                    $idmod2c =$filpro['idmod2'];
                    $nombremodc =$filpro['nombremod'];
                    $unmedc =$filpro['unmed'];
                    $criterioc =$filpro['criterio'];
                    $critminc =$filpro['critmin'];
                    $valorc =$filpro['valor'];
                    $autorizac =$filpro['autoriza'];
                  }

                  $save3 = "INSERT INTO $cat_acuerdos_emp VALUES (NULL,'$userAcroregion','$userAcronu','$idtarjemp',
                '$idmodc','$idmod2c','$nombremodc','$unmedc','$criterioc','$numin3','$valorc','$bene3','$autorizac','$fechahoy','1' )";
                  
                  $qsave3  = $dbc->query($save3 );
            }


            if(empty($ac4)){
                
            }else{
                $tabac4= "SELECT * FROM $cat_acuerdos WHERE id = '$ac4' ";
                $qtabac4 = $dbc->query($tabac4);        
                
                                      
                while ($filpro = $qtabac4->fetch(PDO::FETCH_ASSOC)) {
                    $idmodd =$filpro['id'];
                    $idmod2d =$filpro['idmod2'];
                    $nombremodd =$filpro['nombremod'];
                    $unmedd =$filpro['unmed'];
                    $criteriod =$filpro['criterio'];
                    $critmind =$filpro['critmin'];
                    $valord =$filpro['valor'];
                    $autorizad =$filpro['autoriza'];
                  }

                  $save4 = "INSERT INTO $cat_acuerdos_emp VALUES (NULL,'$userAcroregion','$userAcronu','$idtarjemp',
                  '$idmodd','$idmod2d','$nombremodd','$unmedd','$criteriod',NULL,'$valord','$bene4','$autorizad','$fechahoy','1' )";
                  
                  $qsave4  = $dbc->query($save4 );
            }
          


            

      }
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


        <form method="POST" action="tarjetas_emp.php" id="backregresar">

            <div id="backbackRegre">

          
                <input hidden type="text" value="<?php echo $person; ?>" name="person">

                <input hidden type="text" value="<?php echo $idemp; ?>" name="idemp">

             
                
                <img src="../../img/suite/regresar2.png" id="imagRegresar">

                <input type="submit" name="subback" id="subback">

              


                <div id="regresartxt">Datos guardados, regresar! </div>
              
               

            </div>

        </form>


  
      

        <div id="blockMod"></div>


    </modseg>

  

</body>

</html>