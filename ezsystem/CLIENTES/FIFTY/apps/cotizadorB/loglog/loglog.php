<?php
require_once '../varSQL/dbmysql.php';

$sresuall = 'sresuall';
$sresualles = 'sresuall_sutatse';

$fechayh = date('d/m/y h:i:s A');
$usersu = isset($_POST['usersu']) ? $_POST['usersu'] : false;
$passw = isset($_POST['passw']) ? $_POST['passw'] : false;




if (isset($_POST['loglo'])) {

    $pass = "SELECT * FROM $sresuall WHERE usuario = '$usersu' AND contrasena = '$passw' AND activo = '1' ";
    $qpass = $dbo->query($pass);

    while ($datlog = $qpass->fetch(PDO::FETCH_ASSOC)) {
        $userLog = $datlog['usuario']; 
        $adminrol = $datlog['rol']; 
        $logsena= $datlog['contrasena'];
        $userRegion= $datlog['region'];
        $userAcroregion= $datlog['acroregion'];
        $userNom= $datlog['nombre'];
        $userUnidad= $datlog['unidad'];
        $userAcronu= $datlog['acronu'];
    }

        //////////DEMO
    if($userLog == $usersu AND  $logsena == $passw){
        $insertusers = "INSERT INTO $sresualles VALUES(NULL,'$userAcronu','$userNombre','$fechayh', '$userLog', 'DESK_ABIERTA', NULL)";
        $salve = $dbo->query($insertusers);///////////////////
        session_start();

        $_SESSION['usuario'] = $userLog;
        $_SESSION['rol'] = $adminrol;
        $_SESSION['nombre'] = $userNom;
        $_SESSION['region'] = $userRegion;
        $_SESSION['acroregion'] = $userAcroregion;
        $_SESSION['unidad'] = $userUnidad;
        $_SESSION['acronu'] = $userUnidadAcronu;
        $_SESSION["ultimoAcceso"] = date("H:i:s");
     
        header("location: ../suiteco.php");
    }else {
        header("location: ../index.php");
      }

}
