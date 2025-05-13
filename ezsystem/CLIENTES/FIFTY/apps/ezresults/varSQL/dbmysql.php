<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////RESULTS

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_results';


try {
    $db_result= new PDO("mysql:host=localhost;dbname=ezsystem_results", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}

$dbo = $db_result;
