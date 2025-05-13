<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$password = 'Lolador117';
$based = 'ezsystem_task';


try {
    $db_task= new PDO("mysql:host=localhost;dbname=ezsystem_task", $usuario, $password);
  
} catch (Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}
