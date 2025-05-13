<?php

/*
$servidor = 'localhost';
$usuario = 'dcommx1_xion';
$password = 'mareca13233';
$based = 'dcommx1_ezsystem_users';



dcommx1_ezsystem_users


*/

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
////////////////////////////////////////////////////////////////////////////////////////////////////////////////ASSESS

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_assess';


try {
    $db_assess= new PDO("mysql:host=localhost;dbname=ezsystem_assess", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}


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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////RISK

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_results';


try {
    $db_result = new PDO("mysql:host=localhost;dbname=ezsystem_results", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////LEADPLUS

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_leadplus';


try {
    $db_leadplus = new PDO("mysql:host=localhost;dbname=ezsystem_leadplus", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}