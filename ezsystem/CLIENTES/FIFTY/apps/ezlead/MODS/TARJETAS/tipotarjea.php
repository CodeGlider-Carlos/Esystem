<?php

$tipopro = $_POST['tipopro'];

if($tipopro == 'MEDICO'){
    header("location:select_tarj_med.php");
}else{
    header("location:select_tarj_emp.php");
}
