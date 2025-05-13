<?php
session_start();
/*
if (empty($_SESSION['usuario'])) :
    header("Location:index.php");
endif;
*/
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];


$tipocreacion = $_POST['tipocreacion'];
$paquete = $_POST['paquete'];


$lista = $_POST['lista'];

$region = $_POST['region'];
$unidad = $_POST['lista'];
$red = $_POST['red'];

$accion = '';

if($tipocreacion == 'CERO' ){
    require_once 'integrarpaq.php';
}elseif($tipocreacion=='EXISTE'){
    $accion = 'MOD';

    require_once 'integexiste.php';
}

