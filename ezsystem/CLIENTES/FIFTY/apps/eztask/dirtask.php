<?php
 session_start();
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php';
 if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../index.php");
}




$year = isset($_POST['year']) ? $_POST['year'] : false;
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : false;
$tipotask = isset($_POST['tipotask']) ? $_POST['tipotask'] : false;
$accionproy = isset($_POST['accion']) ? $_POST['accion'] : false;
$resptarea = isset($_POST['resptarea']) ? $_POST['resptarea'] : false;
$unidadSel = isset($_POST['unidadSel']) ? $_POST['unidadSel'] : false;
$region = isset($_POST['region']) ? $_POST['region'] : false;
$idproy = isset($_POST['idproy']) ? $_POST['idproy'] : false;

if($tipotask == 'GOB'){
    $tiptasky = 'TAREAS DE GOBIERNO';
}elseif($tipotask == 'SEG'){
    $tiptasky = 'TAREAS DE SEGUIMIENTO';
}elseif($tipotask == 'COM'){
    $tiptasky = 'TAREAS DE COMITÉ';
}elseif($tipotask == 'GEN'){  
    $tiptasky = 'MINUTA';
}elseif($tipotask == 'JO'){ 
    $tiptasky = 'JUNTA OPERATICA';
}elseif($tipotask == 'JP'){  
    $tiptasky = 'JUNTA DE PLANEACION QUIRURGICA';
}elseif($tipotask == 'RISK'){
    $tiptasky = 'GESTION DE RIESGOS';
}elseif($tipotask == 'VIC'){  
    $tiptasky = 'COMERCIAL';
}


    if($accionproy == 'ASIGNAR'){
        require_once 'asignar.php';
    }elseif($accionproy == 'EVALUAR'){
        require_once 'eval_task.php';
    }elseif($accionproy == 'CONSULTAR'){
        require_once 'consulta_task.php';
    }
    


?>