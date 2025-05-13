
<?php 


?>

            <section id="tablaMES">

                <ul id="grafmes">   

                    <?php   


                        if($adminrol == $radmin){
                            $mesNO1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%01%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%01%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%02%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%02%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%03%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%03%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%04%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%04%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%05%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%05%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%06%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%06%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%07%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%07%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%08%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%08%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%09%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%09%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%10%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%10%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%11%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%11%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%12%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%12%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                          
                        }elseif($adminrol == $radreg){
                            $mesNO1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%01%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%01%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%02%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%02%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%03%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%03%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%04%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%04%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%05%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%05%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%06%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%06%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%07%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%07%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%08%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%08%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%09%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%09%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%10%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%10%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%11%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%11%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesNO12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%12%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
                            $mesSI12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND periodo LIKE '%12%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' AND region LIKE '%$userAcroregion%'  ")->fetch());
    
                        }elseif($adminrol == $radger){
                            $mesNO1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%01%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%01%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%02%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%02%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%03%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%03%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%04%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%04%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%05%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%05%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%06%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%06%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%07%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%07%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%08%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%08%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%09%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%09%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%10%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%10%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%11%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%11%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesNO12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%12%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
                            $mesSI12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%12%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%'")->fetch());
    
                        }elseif($adminrol == $radman OR $adminrol == $radsup){
                            $mesNO1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%01%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI1 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%01%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%02%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI2 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%02%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%03%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI3 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%03%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%04%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI4 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%04%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%05%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI5 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%05%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%06%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI6 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%06%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%07%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI7 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%07%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%08%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI8 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%08%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%09%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI9 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%09%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%10%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI10 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%10%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%11%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI11 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%11%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesNO12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%12%' AND riesgo = 'NO' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
                            $mesSI12 = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userUnidadAcronu' AND periodo LIKE '%12%' AND riesgo = 'SI' AND dep LIKE '%$userLog%' AND macro LIKE '%$macro%' AND periodo LIKE '%$periodo%' ")->fetch());
    
    
                        }
                        
                    ?>

                        <div id="printdes">


                            <?php


                                $mesOP1 = $mesNO1+$mesSI1;

                                if($mesOP1 >0){
                                    $mesDESMP1 =  (($mesOP1-$mesSI1)*100)/$mesOP1;
                                }
                                if(empty($mesOP1) ){
                                    ?><div class="resmes1"><h4><?php echo '' ;?></h4></div>
                                    <div id="mes1" class="tabcinemes margin">01</div> <?php 
                                }else{

                                if($mesDESMP1 >= 0 & $mesDESMP1 <65){
                                    ?>
                                    <div id="mes1" class="taborredmes margin">01<div class="resmes1"><h4><?php echo number_format($mesDESMP1, 0).'%' ;?></h4></div></div>  <?php 
                                }elseif($mesDESMP1 >= 65 & $mesDESMP1 <75){
                                    ?>
                                    <div id="mes1" class="taborangemes margin">01<div class="resmes1"><h4><?php echo number_format($mesDESMP1, 0).'%'  ;?></h4></div></div>  <?php 
                                }elseif($mesDESMP1 >= 75 & $mesDESMP1 <85){
                                    ?>
                                    <div id="mes1" class="tabyellmes margin">01<div class="resmes1"><h4><?php echo number_format($mesDESMP1, 0).'%'  ;?></h4></div></div>  <?php 
                                }elseif($mesDESMP1 >= 85 & $mesDESMP1 <95){
                                    ?>
                                    <div id="mes1" class="tabgreenmes margin">01<div  class="resmes1"><h4><?php echo number_format($mesDESMP1, 0).'%'  ;?></h4></div></div>  <?php 
                                }elseif($mesDESMP1 >= 95){
                                    ?>
                                    <div id="mes1" class="tabbluemes margin">01<div class="resmes1"><h4><?php echo number_format($mesDESMP1, 0).'%'  ;?></h4></div></div>  <?php 
                                }} ?>

                        

                            <?php   
                            
                        
                                $mesOP2 = $mesNO2+$mesSI2;

                                if($mesOP2 >0){
                                    $mesDESMP2 =  (($mesOP2-$mesSI2)*100)/$mesOP2;
                                }
                                if(empty($mesOP2) ){
                                    ?><div class="resmes2"><h4><?php echo '' ;?></h4></div>
                                    <div id="mes2" class="tabcinemes margin">02</div> <?php 
                                }else{

                                if($mesDESMP2 >= 0 & $mesDESMP2 <65){
                                    ?>
                                    <div id="mes2" class="taborredmes margin">02<div class="resmes2"><h4><?php echo number_format($mesDESMP2, 0).'%'  ;?></h4></div></div> <?php 
                                }elseif($mesDESMP2 >= 65 & $mesDESMP2 <75){
                                    ?>
                                    <div id="mes2" class="taborangemes margin">02<div class="resmes2"><h4><?php echo number_format($mesDESMP2, 0).'%'  ;?></h4></div></div><?php 
                                }elseif($mesDESMP2 >= 75 & $mesDESMP2 <85){
                                    ?>
                                    <div id="mes2" class="tabyellmes margin">02<div class="resmes2"><h4><?php echo number_format($mesDESMP2, 0).'%'  ;?></h4></div></div> <?php 
                                }elseif($mesDESMP2 >= 85 & $mesDESMP2 <95){
                                    ?>
                                    <div id="mes2" class="tabgreenmes margin">02<div class="resmes2"><h4><?php echo number_format($mesDESMP2, 0).'%'  ;?></h4></div></div> <?php 
                                }elseif($mesDESMP2 >= 95){
                                    ?>
                                    <div id="mes2" class="tabbluemes margin">02<div class="resmes2"><h4><?php echo number_format($mesDESMP2, 0).'%'  ;?></h4></div></div> <?php 
                                }} ?>

                        
                            
                            <?php
                            
                                    $mesOP3 = $mesNO3+$mesSI3;

                                    if($mesOP3 >0){
                                        $mesDESMP3 =  (($mesOP3-$mesSI3)*100)/$mesOP3;
                                    }
                                    if(empty($mesOP3) ){
                                        ?><div class="resmes3"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes3" class="tabcinemes margin">03</div> <?php 
                                    }else{

                                    if($mesDESMP3 >= 0 & $mesDESMP3 <65){
                                        ?>
                                        <div id="mes3" class="taborredmes margin">03<div class="resmes3"><h4><?php echo number_format($mesDESMP3, 0).'%'  ;?></h4></div></div> <?php 
                                    }elseif($mesDESMP3 >= 65 & $mesDESMP3 <75){
                                        ?>
                                        <div id="mes3" class="taborangemes margin">03<div class="resmes3"><h4><?php echo number_format($mesDESMP3, 0).'%'  ;?></h4></div></div> <?php 
                                    }elseif($mesDESMP3 >= 75 & $mesDESMP3 <85){
                                        ?>
                                        <div id="mes3" class="tabyellmes margin">03<div  class="resmes3"><h4><?php echo number_format($mesDESMP3, 0).'%' ;?></h4></div></div> <?php 
                                    }elseif($mesDESMP3 >= 85 & $mesDESMP3 <95){
                                        ?>
                                        <div id="mes3" class="tabgreenmes margin">03<div class="resmes3"><h4><?php echo number_format($mesDESMP3, 0).'%'  ;?></h4></div></div> <?php 
                                    }elseif($mesDESMP3 >= 95){
                                        ?>
                                        <div id="mes3" class="tabbluemes margin">03<div class="resmes3"><h4><?php echo number_format($mesDESMP3, 0).'%' ;?></h4></div></div> <?php 
                                    }} ?>

                                


                            <?php   
                                
                                
                                    $mesOP4 = $mesNO4+$mesSI4;

                                    if($mesOP4 >0){
                                        $mesDESMP4 =  (($mesOP4-$mesSI4)*100)/$mesOP4;
                                    }
                                    if(empty($mesOP4) ){
                                        ?><div class="resmes4"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes4" class="tabcinemes margin">04</div>  <?php 
                                    }else{

                                    if($mesDESMP4 >= 0 & $mesDESMP4 <65){
                                        ?>
                                        <div id="mes4" class="taborredmes margin">04<div class="resmes4"><h4><?php echo number_format($mesDESMP4, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP4 >= 65 & $mesDESMP4 <75){
                                        ?>
                                        <div id="mes4" class="taborangemes margin">04<div class="resmes4"><h4><?php echo number_format($mesDESMP4, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP4 >= 75 & $mesDESMP4 <85){
                                        ?>
                                        <div id="mes4" class="tabyellmes margin">04<div class="resmes4"><h4><?php echo number_format($mesDESMP4, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP4 >= 85 & $mesDESMP4 <95){
                                        ?>
                                        <div id="mes4" class="tabgreenmes margin">04<div class="resmes4"><h4><?php echo number_format($mesDESMP4, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP4 >= 95){
                                        ?>
                                        <div id="mes4" class="tabbluemes margin">04<div class="resmes4"><h4><?php echo number_format($mesDESMP4, 0).'%'  ;?></h4></div> </div> <?php 
                                    }} ?>



                            <?php   
                                
                                
                                    $mesOP5 = $mesNO5+$mesSI5;

                                    if($mesOP5 >0){
                                        $mesDESMP5 =  (($mesOP5-$mesSI5)*100)/$mesOP5;
                                    }
                                    if(empty($mesOP5) ){
                                        ?><div class="resmes5"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes5"  class="tabcinemes margin">05</div>  <?php 
                                    }else{

                                    if($mesDESMP5 >= 0 & $mesDESMP5 <65){
                                        ?> 
                                        <div id="mes5"  class="taborredmes margin">05<div class="resmes5"><h4><?php echo number_format($mesDESMP5, 0).'%'  ;?></h4></div></div> <?php 
                                    }elseif($mesDESMP5 >= 65 & $mesDESMP5 <75){
                                        ?>
                                        <div id="mes5"  class="taborangemes margin">05<div class="resmes5"><h4><?php echo number_format($mesDESMP5, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP5 >= 75 & $mesDESMP5 <85){
                                        ?>
                                        <div id="mes5"  class="tabyellmes margin">05<div class="resmes5"><h4><?php echo number_format($mesDESMP5, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP5 >= 85 & $mesDESMP5 <95){
                                        ?> 
                                        <div id="mes5"  class="tabgreenmes margin">05<div class="resmes5"><h4><?php echo number_format($mesDESMP5, 0).'%'  ;?></h4></div></div> <?php 
                                    }elseif($mesDESMP5 >= 95){
                                        ?>
                                        <div id="mes5"  class="tabbluemes margin">05<div class="resmes5"><h4><?php echo number_format($mesDESMP5, 0).'%'  ;?></h4></div> </div> <?php 
                                    }} ?>

                                

                            <?php   
                                
                                
                                    $mesOP6 = $mesNO6+$mesSI6;

                                    if($mesOP6 >0){
                                        $mesDESMP6 =  (($mesOP6-$mesSI6)*100)/$mesOP6;
                                    }
                                    if(empty($mesOP6) ){
                                        ?><div class="resmes6"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes6" class="tabcinemes margin">06</div>  <?php 
                                    }else{

                                    if($mesDESMP6 >= 0 & $mesDESMP6 <65){
                                        ?>
                                        <div id="mes6" class="taborredmes margin">06<div class="resmes6"><h4><?php echo number_format($mesDESMP6, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP6 >= 65 & $mesDESMP6 <75){
                                        ?>
                                        <div id="mes6" class="taborangemes margin">06<div class="resmes6"><h4><?php echo number_format($mesDESMP6, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP6 >= 75 & $mesDESMP6 <85){
                                        ?>
                                        <div id="mes6" class="tabyellmes margin">06<div class="resmes6"><h4><?php echo number_format($mesDESMP6, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP6 >= 85 & $mesDESMP6 <95){
                                        ?>
                                        <div id="mes6" class="tabgreenmes margin">06<div class="resmes6"><h4><?php echo number_format($mesDESMP6, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP6 >= 95){
                                        ?>
                                        <div id="mes6" class="tabbluemes margin">06<div class="resmes6"><h4><?php echo number_format($mesDESMP6, 0).'%'  ;?></h4></div> </div> <?php 
                                    }} ?>

                            

                            <?php   
                            
                                    $mesOP7 = $mesNO7+$mesSI7;

                                    if($mesOP7 >0){
                                        $mesDESMP7 =  (($mesOP7-$mesSI7)*100)/$mesOP7;
                                    }
                                    if(empty($mesOP7) ){
                                        ?><div class="resmes7"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes7"  class="tabcinemes margin">07</div>  <?php 
                                    }else{

                                    if($mesDESMP7 >= 0 & $mesDESMP7 <65){
                                        ?>
                                        <div id="mes7"  class="taborredmes margin">07<div class="resmes7"><h4><?php echo number_format($mesDESMP7, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP7 >= 65 & $mesDESMP7 <75){
                                        ?>
                                        <div id="mes7"  class="taborangemes margin">07<div class="resmes7"><h4><?php echo number_format($mesDESMP7, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP7 >= 75 & $mesDESMP7 <85){
                                        ?>
                                        <div id="mes7"  class="tabyellmes margin">07<div class="resmes7"><h4><?php echo number_format($mesDESMP7, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP7 >= 85 & $mesDESMP7 <95){
                                        ?>
                                        <div id="mes7"  class="tabgreenmes margin">07<div class="resmes7"><h4><?php echo number_format($mesDESMP7, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP7 >= 95){
                                        ?>
                                        <div id="mes7"  class="tabbluemes margin">07<div class="resmes7"><h4><?php echo number_format($mesDESMP7, 0).'%'  ;?></h4></div></div>  <?php 
                                    }} ?>

                        

                            <?php   
                                
                                    $mesOP8 = $mesNO8+$mesSI8;

                                    if($mesOP8 >0){
                                        $mesDESMP8 =  (($mesOP8-$mesSI8)*100)/$mesOP8;
                                    }
                                    if(empty($mesOP8) ){
                                        ?><div class="resmes8"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes8" class="tabcinemes margin">08</div>   <?php 
                                    }else{

                                    if($mesDESMP8 >= 0 & $mesDESMP8 <65){
                                        ?>
                                        <div id="mes8" class="taborredmes margin">08<div class="resmes8"><h4><?php echo number_format($mesDESMP8, 0).'%'  ;?></h4></div></div>   <?php 
                                    }elseif($mesDESMP8 >= 65 & $mesDESMP8 <75){
                                        ?> 
                                        <div id="mes8" class="taborangemes margin">08<div class="resmes8"><h4><?php echo number_format($mesDESMP8, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP8 >= 75 & $mesDESMP8 <85){
                                        ?>
                                        <div id="mes8" class="tabyellmes margin">08<div class="resmes8"><h4><?php echo number_format($mesDESMP8, 0).'%'  ;?></h4></div> </div>  <?php 
                                    }elseif($mesDESMP8 >= 85 & $mesDESMP8 <95){
                                        ?>
                                        <div id="mes8" class="tabgreenmes margin">08<div class="resmes8"><h4><?php echo number_format($mesDESMP8, 0).'%'  ;?></h4></div></div>   <?php 
                                    }elseif($mesDESMP8 >= 95){
                                        ?>
                                        <div id="mes8" class="tabbluemes margin">08<div class="resmes8"><h4><?php echo number_format($mesDESMP8, 0).'%'  ;?></h4></div> </div>  <?php 
                                    }} ?>

                            

                            <?php   
                            
                                    $mesOP9 = $mesNO9+$mesSI9;

                                    if($mesOP9 >0){
                                        $mesDESMP9 =  (($mesOP9-$mesSI9)*100)/$mesOP9;
                                    }
                                    if(empty($mesOP9) ){
                                        ?><div class="resmes9"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes9" class="tabcinemes margin">09</div>   <?php 
                                    }else{

                                    if($mesDESMP9 >= 0 & $mesDESMP9 <65){
                                        ?>
                                        <div id="mes9" class="taborredmes margin">09<div class="resmes9"><h4><?php echo number_format($mesDESMP9, 0).'%'  ;?></h4></div></div>   <?php 
                                    }elseif($mesDESMP9 >= 65 & $mesDESMP9 <75){
                                        ?>
                                        <div id="mes9" class="taborangemes margin">09<div class="resmes9"><h4><?php echo number_format($mesDESMP9, 0).'%'  ;?></h4></div> </div>  <?php 
                                    }elseif($mesDESMP9 >= 75 & $mesDESMP9 <85){
                                        ?>
                                        <div id="mes9" class="tabyellmes margin">09<div class="resmes9"><h4><?php echo number_format($mesDESMP9, 0).'%'  ;?></h4></div> </div>  <?php 
                                    }elseif($mesDESMP9 >= 85 & $mesDESMP9 <95){
                                        ?>
                                        <div id="mes9" class="tabgreenmes margin">09<div class="resmes9"><h4><?php echo number_format($mesDESMP9, 0).'%'  ;?></h4></div></div>   <?php 
                                    }elseif($mesDESMP9 >= 95){
                                        ?>
                                        <div id="mes9" class="tabbluemes margin">09<div class="resmes9"><h4><?php echo number_format($mesDESMP9, 0).'%'  ;?></h4></div></div>   <?php 
                                    }} ?>

                            

                            <?php   
                                    
                                    $mesOP10 = $mesNO10+$mesSI10;


                        

                                    if($mesOP10 >0){
                                        $mesDESMP10 =  (($mesOP10-$mesSI10)*100)/$mesOP10;
                                    }
                                    if(empty($mesOP10) ){
                                        ?><div class="resmes10"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes10" class="tabcinemes margin">10</div>  <?php 
                                    }else{

                                    if($mesDESMP10 >= 0 & $mesDESMP10 <65){
                                        ?>
                                        <div  id="mes10" class="taborredmes margin">10<div class="resmes10"><h4><?php echo number_format($mesDESMP10, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP10 >= 65 & $mesDESMP10 <75){
                                        ?>
                                        <div id="mes10" class="taborangemes margin">10<div class="resmes10"><h4><?php echo number_format($mesDESMP10, 0).'%'  ;?></h4></div> </div> <?php 
                                    }elseif($mesDESMP10 >= 75 & $mesDESMP10 <85){
                                        ?>
                                        <div id="mes10" class="tabyellmes margin">10<div class="resmes10"><h4><?php echo number_format($mesDESMP10, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP10 >= 85 & $mesDESMP10 <95){
                                        ?>
                                        <div id="mes10" class="tabgreenmes margin">10<div class="resmes10"><h4><?php echo number_format($mesDESMP10, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP10 >= 95){
                                        ?>
                                        <div id="mes10" class="tabbluemes margin">10<div class="resmes10"><h4><?php echo number_format($mesDESMP10, 0).'%'  ;?></h4></div> </div> <?php 
                                    }} ?>

                            

                            <?php   
                                
                                    $mesOP11 = $mesNO11+$mesSI11;

                                    if($mesOP11 >0){
                                        $mesDESMP11 =  (($mesOP11-$mesSI11)*100)/$mesOP11;
                                    }
                                    if(empty($mesOP11) ){
                                        ?><div class="resmes11"><h4><?php echo '' ;?></h4></div>
                                        <div id="mes11" class="tabcinemes margin">11</div>   <?php 
                                    }else{

                                    if($mesDESMP11 >= 0 & $mesDESMP11 <65){
                                        ?> 
                                        <div  id="mes11" class="taborredmes margin">11<div class="resmes11"><h4><?php echo number_format($mesDESMP11, 0).'%'  ;?></h4></div></div>  <?php 
                                    }elseif($mesDESMP11 >= 65 & $mesDESMP11 <75){
                                        ?>
                                        <div id="mes11" class="taborangemes margin">11<div class="resmes11"><h4><?php echo number_format($mesDESMP11, 0).'%'  ;?></h4></div></div>   <?php 
                                    }elseif($mesDESMP11 >= 75 & $mesDESMP11 <85){
                                        ?>
                                        <div id="mes11" class="tabyellmes margin">11<div class="resmes11"><h4><?php echo number_format($mesDESMP11, 0).'%'  ;?></h4></div> </div>  <?php 
                                    }elseif($mesDESMP11 >= 85 & $mesDESMP11 <95){
                                        ?>
                                        <div id="mes11" class="tabgreenmes margin">11<div class="resmes11"><h4><?php echo number_format($mesDESMP11, 0).'%' ;?></h4></div></div>   <?php 
                                    }elseif($mesDESMP11 >= 95){
                                        ?>
                                        <div id="mes11" class="tabbluemes margin">11<div class="resmes11"><h4><?php echo number_format($mesDESMP11, 0).'%'  ;?></h4></div></div>   <?php 
                                    }} ?>

                            

                            <?php   
                        
                                $mesOP12 = $mesNO12+$mesSI12;

                                if($mesOP12 >0){
                                    $mesDESMP12 =  (($mesOP12-$mesSI12)*100)/$mesOP12;
                                }
                                if(empty($mesOP12) ){
                                    ?><div class="resmes12"><h4><?php echo '' ;?></h4></div> 
                                    <div id="mes12" class="tabcinemes margin">12</div>  <?php 
                                }else{

                                if($mesDESMP12 >= 0 & $mesDESMP12 <65){
                                    ?>
                                    <div id="mes12" class="taborredmes margin">12<div class="resmes12"><h4><?php echo number_format($mesDESMP12, 0).'%'  ;?></h4></div> </div>  <?php 
                                }elseif($mesDESMP12 >= 65 & $mesDESMP12 <75){
                                    ?>
                                    <div id="mes12" class="taborangemes margin">12<div class="resmes12"><h4><?php echo number_format($mesDESMP12, 0).'%'  ;?></h4></div></div>   <?php 
                                }elseif($mesDESMP12 >= 75 & $mesDESMP12 <85){
                                    ?>
                                    <div id="mes12" class="tabyellmes margin">12<div class="resmes12"><h4><?php echo number_format($mesDESMP12, 0).'%'  ;?></h4></div> </div>  <?php 
                                }elseif($mesDESMP12 >= 85 & $mesDESMP12 <95){
                                    ?>
                                    <div id="mes12" class="tabgreenmes margin">12<div class="resmes12"><h4><?php echo number_format($mesDESMP12, 0).'%'  ;?></h4></div></div>   <?php 
                                }elseif($mesDESMP12 >= 95){
                                    ?>
                                    <div id="mes12" class="tabbluemes margin">12<div class="resmes12"><h4><?php echo number_format($mesDESMP12, 0).'%'  ;?></h4></div></div>   <?php 
                                }} 
                                
                            ?>

                
                        </div>

            
                
                </ul>            

   


            </section>