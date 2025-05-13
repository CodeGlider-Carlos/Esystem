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


if (isset($_POST['subback'])){
    $person = $_POST['person'];
    $Pid = $_POST['Pid'];
    $tipotarj = $_POST['tipotarj'];
    
}elseif(isset($_POST['simular'])){
    $person = $_POST['person'];
    $Pid = $_POST['Pid'];
    $tipotarj = $_POST['tipotarj'];
    
}else{
    $person = $_POST['person'];
    $Pid = $_POST['Pid'];
    $tipotarj = $_POST['tipotarj'];
}

if($tipotarj == 'EMPRESA'){
    require_once 'nego_emp.php';
    $tipota = 'EMPRESA';

}else{
    require_once 'nego_emp.php';
    $tipota = 'PACIENTE';
}