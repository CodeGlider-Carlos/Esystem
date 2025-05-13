<?php

$tipopro = $_POST['tipopro'];

if($tipopro == 'EMPRESA'){
    header("location:selectipo_emp.php");
}else{
    header("location:selectipo_px.php");
}
