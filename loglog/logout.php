<?php
session_start();
require_once '../ezsystem/varSQL/bd.php';
require_once '../ezsystem/varSQL/var.php';
$userend = $_SESSION['usuario'];
$lognombre = $_SESSION['nombre'];
$fechayhend = date('d/m/y h:i:s A'); 
$exitdk = isset($_POST['exitdk']) ? $_POST['exitdk'] : false;
$rolend =$_SESSION['rol'];


if(empty($exitdk)){


    $insertusers = "INSERT INTO $sresualles VALUES(NULL,NULL,'$lognombre', NULL,'$userend','DESK_CERRADA','$fechayhend')";   
    $salve = $db_users->query($insertusers);  ///////////////////cambiar a bd de unidad
    session_destroy();
    
    header("location: ../index.php");
    exit();
}

/*



*/