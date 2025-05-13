<?php
require_once '../ezsystem/varSQL/bd.php';
require_once '../ezsystem/varSQL/var.php';

session_start();

$fechayh = date('d/m/y h:i:s A');
$usersu = isset($_POST['usersu']) ? $_POST['usersu'] : false;
$passw = isset($_POST['passw']) ? $_POST['passw'] : false;

// Inicializamos variables para evitar warnings
$userLog = $adminrol = $logsena = $userRegion = $userAcroregion = $userNom = $userUnidad = $userUnidadAcronu = $tipoUser = $clienteUS = null;

if (isset($_POST['loglo'])) {
    $pass = "SELECT * FROM $sresuall WHERE usuario = '$usersu' AND contrasena = '$passw' AND activo = '1' ";
    $qpass = $db_users->query($pass);
    $datlog = $qpass->fetch(PDO::FETCH_ASSOC);

    if ($datlog) {
        $userLog = $datlog['usuario']; 
        $adminrol = $datlog['rol']; 
        $logsena = $datlog['contrasena'];
        $userRegion = $datlog['region'];
        $userAcroregion = $datlog['acroregion'];
        $userNom = $datlog['nombre'];
        $userUnidad = $datlog['unidad'];
        $userUnidadAcronu = $datlog['acronu'];
        $tipoUser = $datlog['tipouser'];

        // Obtener cliente
        $valyCliente = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu' ";
        $qvalyCliente = $db_users->query($valyCliente);
        $datCliente = $qvalyCliente->fetch(PDO::FETCH_ASSOC);
        if ($datCliente) {
            $clienteUS = $datCliente['cliente'];
        }

        // Validación final
        if ($userLog == $usersu && $logsena == $passw) {
            $insertusers = "INSERT INTO $sresualles VALUES(NULL,'$userUnidadAcronu','$userNom','$fechayh', '$userLog', 'DESK_ABIERTA', NULL)";
            $salve = $db_users->query($insertusers);

            $_SESSION['usuario'] = $userLog;
            $_SESSION['tipouser'] = $tipoUser;
            $_SESSION['rol'] = $adminrol;
            $_SESSION['nombre'] = $userNom;
            $_SESSION['region'] = $userRegion;
            $_SESSION['acroregion'] = $userAcroregion;
            $_SESSION['unidad'] = $userUnidad;
            $_SESSION['acronu'] = $userUnidadAcronu;
            $_SESSION["ultimoAcceso"] = date("H:i:s");

            if ($salve == true) {
                if ($clienteUS == 'FIFTY') {
                    header("location: ../ezsystem/CLIENTES/FIFTY/suite.php");
                    exit;
                } elseif ($clienteUS == 'DEMO') {
                    header("location: ../ezsystem/CLIENTES/DEMO/suite.php");
                    exit;
                }
            } else {
                header("location: ../index.php?error=1");
                exit;
            }
        } else {
            header("location: ../index.php?error=1");
            exit;
        }
    } else {
        // No encontró el usuario
        header("location: ../index.php?error=1");
        exit;
    }
} else {
    // Acceso sin enviar form
    header("location: ../index.php?error=1");
    exit;
}
