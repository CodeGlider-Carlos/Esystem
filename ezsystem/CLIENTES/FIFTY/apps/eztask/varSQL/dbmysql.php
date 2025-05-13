<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////RESULTS

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_results';


try {
    $db_results= new PDO("mysql:host=localhost;dbname=ezsystem_results", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}

$dbo = $db_results;



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



////////////////////////////////////////////////////////////////////////////////////////////////////////////////RISK

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_risk';


try {
    $db_risk = new PDO("mysql:host=localhost;dbname=ezsystem_risk", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////USERS

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_users';


try {
    $db_users = new PDO("mysql:host=localhost;dbname=ezsystem_users", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}
