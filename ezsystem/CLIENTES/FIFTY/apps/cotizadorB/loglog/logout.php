<?php
require_once '../varSQL/dbmysql.php';

$sresuall = 'sresuall';
$sresualles = 'sresuall_sutatse';


session_start();
$userend = $_SESSION['usuario'];
$lognombre = $_SESSION['nombre'];
$fechayhend = date('d/m/y h:i:s A'); 
$exitdk = isset($_POST['exitdk']) ? $_POST['exitdk'] : false;
$rolend =$_SESSION['rol'];


if(empty($exitdk)){


    $insertusers = "INSERT INTO $sresualles VALUES(NULL,'50d','$lognombre', NULL,'$userend','DESK_CERRADA','$fechayhend')";   
    $salve = $dbo->query($insertusers);  ///////////////////cambiar a bd de unidad
    session_destroy();
    
    header("location: ../");
    exit();
}

/*



*/