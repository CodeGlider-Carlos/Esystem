<?php
/*
$servidor = 'localhost';
$usuario = 'dcommx1_xion';
$password = 'mareca13233';
$based = 'dcommx1_cotizador50d';



try {
    $dbo = new PDO("mysql:host=localhost;dbname=dcommx1_cotizador50d", $usuario, $password);

} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}


*/
/*VIGENCIA*/
$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'cotizador50d';


try {
    $dbo = new PDO("mysql:host=localhost;dbname=cotizador50d", $usuario, $password);

} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}

$sresuall = 'sresuall';
$sresualles = 'sresuall_sutatse';


///////////////////////////////////////////////////////////////////////////////////////////////////////////ROLES
$radmin = 'ADMIN';
$raddg = 'DIGC';
$radreg = 'REGIONAL';
$radger = 'GERENCIA';
$radrol = 'CORP';


$radman = 'MANDO';
$radmac = 'MACRO';
$radsup = 'SUPERVISOR';





$tabform ='plantilla_form' ;

$tabPre= 'cat_precios';


$tabproced= 'cat_procedimientos';


$cat_co= 'cat_ccotizacion';

$cat_coBA= 'cat_cotizacion_base';

$cat_paq= 'cat_paquetes';

$cat_paqBA= 'cat_paquetes_base';


$cat_prom= 'cat_promo';
$cat_util= 'cat_utilidad';

