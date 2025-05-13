<?php
require_once '../../../varSQL/dbmysql.php';
session_start();
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_semafcal</title>

    <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/calcmuestras.css">
 
</head>
<body>


    <section>

        <form method="POST" action="calcm.php" autocomplete="off">

            <section id="backpob">

                <input type="text" id="filtros" value="MUESTRA PARA POBLACIONES INFINITAS" readonly >

                <div id="backmuestra">
                    <?php

                        $muestractual = "SELECT * FROM $tabmuestrav";
                        $qmuestractual = $dbo->query($muestractual);
                        while ($fila = $qmuestractual->fetch(PDO::FETCH_ASSOC)) {
                            $vigente = $fila['muestravigente'];
                        }
                        if(empty($vigente)){

                            $mvig = 'SIN REGISTRO';
                            
                        }else{
                            $mvig = $vigente;
                        }

                    ?>

               
                    <div id="filtrosB">MUESTA VIGENTE</div>
                    <div id="muvi"><?php  echo $mvig; ?></div>

                </div>

                <select id="probdes" name="p" class="formselect" number_format>

                        <option value="" selected class="optionSELECTED" >desempeño previo...</option>
                        <option value=1>100%</option>
                        <option value=0.99>99%</option>
                        <option value=0.98>98%</option>
                        <option value=0.97>97%</option>
                        <option value=0.96>96%</option>
                        <option value=0.95>95%</option>
                        <option value=0.94>94%</option>
                        <option value=0.93>93%</option>
                        <option value=0.92>92%</option>
                        <option value=0.91>91%</option>
                        <option value=0.9>90%</option>
                        <option value=0.89>89%</option>
                        <option value=0.88>88%</option>
                        <option value=0.87>87%</option>
                        <option value=0.86>86%</option>
                        <option value=0.85>85%</option>
                        <option value=0.84>84%</option>
                        <option value=0.83>83%</option>
                        <option value=0.82>82%</option>
                        <option value=0.81>81%</option>
                        <option value=0.8>80%</option>
                        <option value=0.79>79%</option>
                        <option value=0.78>78%</option>
                        <option value=0.77>77%</option>
                        <option value=0.76>76%</option>
                        <option value=0.75>75%</option>
                        <option value=0.74>74%</option>
                        <option value=0.73>73%</option>
                        <option value=0.72>72%</option>
                        <option value=0.71>71%</option>
                        <option value=0.7>70%</option>
                        <option value=0.69>69%</option>
                        <option value=0.68>68%</option>
                        <option value=0.67>67%</option>
                        <option value=0.66>66%</option>
                        <option value=0.65>65%</option>
                        <option value=0.64>64%</option>
                        <option value=0.63>63%</option>
                        <option value=0.62>62%</option>
                        <option value=0.61>61%</option>
                        <option value=0.6>60%</option>
                        <option value=0.59>59%</option>
                        <option value=0.58>58%</option>
                        <option value=0.57>57%</option>
                        <option value=0.56>56%</option>
                        <option value=0.55>55%</option>
                        <option value=0.54>54%</option>
                        <option value=0.53>53%</option>
                        <option value=0.52>52%</option>
                        <option value=0.51>51%</option>
                        <option value=0.5>50%</option>
                        <option value=0.49>49%</option>
                        <option value=0.48>48%</option>
                        <option value=0.47>47%</option>
                        <option value=0.46>46%</option>
                        <option value=0.45>45%</option>
                        <option value=0.44>44%</option>
                        <option value=0.43>43%</option>
                        <option value=0.42>42%</option>
                        <option value=0.41>41%</option>
                        <option value=0.4>40%</option>
                        <option value=0.39>39%</option>
                        <option value=0.38>38%</option>
                        <option value=0.37>37%</option>
                        <option value=0.36>36%</option>
                        <option value=0.35>35%</option>
                        <option value=0.34>34%</option>
                        <option value=0.33>33%</option>
                        <option value=0.32>32%</option>
                        <option value=0.31>31%</option>
                        <option value=0.3>30%</option>
                        <option value=0.29>29%</option>
                        <option value=0.28>28%</option>
                        <option value=0.27>27%</option>
                        <option value=0.26>26%</option>
                        <option value=0.25>25%</option>
                        <option value=0.24>24%</option>
                        <option value=0.23>23%</option>
                        <option value=0.22>22%</option>
                        <option value=0.21>21%</option>
                        <option value=0.2>20%</option>
                        <option value=0.19>19%</option>
                        <option value=0.18>18%</option>
                        <option value=0.17>17%</option>
                        <option value=0.16>16%</option>
                        <option value=0.15>15%</option>
                        <option value=0.14>14%</option>
                        <option value=0.13>13%</option>
                        <option value=0.12>12%</option>
                        <option value=0.11>11%</option>
                        <option value=0.1>10%</option>
                        <option value=0.09>9%</option>
                        <option value=0.08>8%</option>
                        <option value=0.07>7%</option>
                        <option value=0.06>6%</option>
                        <option value=0.05>5%</option>
                        <option value=0.04>4%</option>
                        <option value=0.03>3%</option>
                        <option value=0.02>2%</option>
                        <option value=0.01>1%</option>
                        <option value=0>0%</option>

                </select>

                <div id="tamuesI" ></div>
            
                <select id="cliente" name="cliente" required> 
                    <option value="" selected >unidad...</option>
                    <?php

                        $tabun = "SELECT * FROM $clirisk";
                        $qtabun = $dbo->query($tabun);

                        foreach ( $qtabun as $opciones){ ?>

                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="year" name="year" required> 

                    <option value="" selected >ejercicio...</option>
                    <?php

                        $tabejer = "SELECT * FROM $tabyear";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo']?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <div id="confianza">
                    <div id="filtrosB">N. DE CONFIANZA</div>
                    <label class="content-input po1">
                        <input type="radio" name="z"  value="<?php $conf1 = 2.58; echo $conf1; ?>" id="99" required>
                        <i></i>
                    </label>
                    <label class="content-input po2">
                        <input type="radio" name="z" value="<?php $conf2 = 2.38; echo $conf2; ?>" id="97" required>
                        <i></i>
                    </label>
                    <label class="content-input po3">
                        <input type="radio" name="z" value="<?php $conf3 = 1.96; echo $conf3; ?>" id="95" required>
                        <i></i>
                    </label>
                    <label class="content-input po4">
                        <input type="radio" name="z" value="<?php $conf4 = 1.76; echo $conf4; ?>" id="92" required>
                        <i></i>
                    </label>
                    <label class="content-input po5">
                        <input type="radio" name="z" value="<?php $conf5 = 1.645; echo $conf5; ?>" id="90" required>
                        <i></i>
                    </label>

                    <!--
                    <option value=2.58>99%</option>10
                    <option value=2.38>98%</option>
                    <option value=2.24>97.5%</option>
                    <option value=2.17>97%</option>
                    <option value=2.19>96.5%</option>
                    <option value=2.12>96%</option>
                    <option value=1.96>95%</option>5
                    <option value=1.89>94%</option>
                    <option value=1.955>93%</option>
                    <option value=1.76>92%</option>
                    <option value=1.7>91%</option>
                    <option value=1.645>90%</option> 1           
                    -->
                    <div class="nco1">99%</div>
                    <div class="nco2">97%</div>
                    <div class="nco3">95%</div>
                    <div class="nco4">92%</div>
                    <div class="nco5">90%</div>
                </div>
                <div id="errorest">
                    <div id="filtrosB">ERROR ESTIMADO</div>
                    <label class="content-input po1">
                        <input type="radio" name="e" value="<?php $err1 = 0.01; echo $err1; ?>" id="1">    
                        <i></i>                 
                    </label>

                    <label class="content-input po2">
                        <input type="radio" name="e" value="<?php $err2 = 0.03; echo $err2; ?>" id="3"> 
                        <i></i>           
                    </label>

                    <label class="content-input po3">
                        <input type="radio" name="e" value="<?php $err3 = 0.05; echo $err3; ?>" id="5"> 
                        <i></i>           
                    </label>

                    <label class="content-input po4">
                        <input type="radio" name="e" value="<?php $err4 = 0.08; echo $err4; ?>" id="8"> 
                        <i></i>
                    </label>

                    <label class="content-input po5">
                        <input type="radio" name="e" value="<?php $err5 = 0.1; echo $err5; ?>" id="10">
                        <i></i>
                    </label>
                    <!--
                    <option value=0.01>1%</option>
                    <option value=0.02>2%</option>
                    <option value=0.025>2.5%</option>
                    <option value=0.03>3%</option>
                    <option value=0.035>3.5%</option>
                    <option value=0.04>4%</option>
                    <option value=0.05>5%</option>
                    <option value=0.06>6%</option>
                    <option value=0.07>7%</option>
                    <option value=0.08>8%</option>
                    <option value=0.09>9%</option>
                    <option value=0.1>10%</option>          
                    -->

                    <div class="nco1">1%</div>
                    <div class="nco2">3%</div>
                    <div class="nco3">5%</div>
                    <div class="nco4">8%</div>
                    <div class="nco5">10%</div>
                </div>

                <input type="submit" id="buscarrisk" name="calcularinfinita" value="CALCULAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </section>

        </form>


    </section>

</body>
</html>