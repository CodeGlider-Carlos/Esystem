<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////LEAD PLUS
$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_lead';


try {
    $db_lead = new PDO("mysql:host=localhost;dbname=ezsystem_lead", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}


$dbc = $db_lead;

$dbcot =$db_lead;



////////////////////////////////////////////////////////////////////////////////////////////////////////////////TASK

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_task';


try {
    $db_task= new PDO("mysql:host=localhost;dbname=ezsystem_task", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////ALL

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_all';


try {
    $db_all = new PDO("mysql:host=localhost;dbname=ezsystem_all", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}
