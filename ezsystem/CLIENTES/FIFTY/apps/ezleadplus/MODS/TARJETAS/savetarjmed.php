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
$red = $_POST['red'];


$bred= "SELECT * FROM $cat_segemp WHERE acronimo LIKE '%$red%' ";
$qbred = $dbc->query($bred);          

                      
while ($filpro = $qbred->fetch(PDO::FETCH_ASSOC)) {
    $cetagoriared =$filpro['categoria'];

}

$bdpros= "SELECT * FROM $crm_pros WHERE id LIKE '%$idmed%' ";

$qbdpros = $dbc->query($bdpros);          

                      
while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
    $Pidmed =$filpro['id'];
    $region =$filpro['region'];
    $unidad =$filpro['unidad'];
    $categoria =$filpro['categoria'];
    $socio =$filpro['socio'];
    $titulo =$filpro['titulo'];
    $nombre =$filpro['nombre'];
    $especialidad =$filpro['especialidad'];

  }





$insertar = "INSERT INTO $cat_tarjetas_med VALUES (

    NULL,'$userAcroregion','$userAcronu','$categoria','$socio',
    '$Pidmed','$titulo.','$nombre', '$especialidad','MEDICO TRATANTE','$cetagoriared',
    '$red','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
    '$userLog','$fechahoy',NULL,NULL


)";
    
    $ejecutar = $dbc->query($insertar);



  $person2 = $nombre;



  
  if(!empty($ejecutar)){

    ?>

    <script>

        alert('datos guardados');
    </script>

    <?php

    $rettorn = 'retorn';
  }

  

  if(!empty($rettorn)){

 
    header("location:tarjetas.php?person=$person");
  }else{

  }