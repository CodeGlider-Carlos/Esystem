<?php


require_once '../varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

$estatus = $_POST['estatus'];
$tipoind = $_POST['tipoind'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_mtnprint</title>
  
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/indi_8.css">

</head>

<body>



                                                
    <section id="ALTA_PROCESOS">
    
        <?php

            if(isset($_POST['altainpro'])) {

                $objasoc = $_POST['objasoc'];
                ?>
                    <section id="contForm">

                        <?php

                            if($tipoind == 'procesos' AND $estatus == 'ALTA'){


                               
                                if($adminrol == $radmin){

                                    $valdobj = "SELECT * FROM $taboj WHERE id = '$objasoc' ";
                                    $qvaldobj = $dbo->query($valdobj);

                                    while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                        $valydobj = $fila['id'];

                                        $useresp = $fila['useresp'];
                                        $gerdir = $fila['gerdir'];
                                        $objetNAME = $fila['objetivo'];
                                        $idobjdg = $fila['idobjdg'];
                                        $idobjreg = $fila['idobjreg'];
                                        $idobjger = $fila['idobjger'];
                                        $clienteu = $fila['unidad'];
                                        $perspectiva = $fila['perspectiva'];
                                    }

                                }


                                    if(!empty($valydobj)){
                                        ?>
                                            
                                            <div id="cabecera">
                                                ALTA DE RESULTADOS CLAVE/PROCESOS 
                                            </div>

                                       
                                            <section id="backMod">

   
                                                <section id="backcabe2">

                                                    <div id="backRegresar">
                                                        <a href="selectmtn.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
                                                    </div>
                                                </section>

                                                <section id="backcabe1">


                                                    <div id="backRecarga">


                                                        <input type="image" src="../img/ICONOS/recarga.svg" id="recargar" onclick="location.reload();">
                                                    </div>



                                                </section>

                                            </section>


                                            <datalist id="catdueno">

                                                <?php
                                                    if($adminrol == $radmin){

                                                        $satstab = "SELECT * FROM $pfun";
                                                        $qsatstab = $dbo->query($satstab);

                                                        foreach ( $qsatstab as $opciones){ ?>

                                                        <option value="<?php echo $opciones['acronimo']?>"><?php echo $opciones['nombre']?></option>

                                                            <?php
                                                        
                                                        }
                                                    }
                                                    
                                                ?>
                                                
                                            </datalist>

                                            <form id="backcont"  method="POST" action="saveindi.php" autocomplete="off">

                                                <section id="backcabe3">


                                                <section id="backGuardar">

                                                    <input type="image" src="../img/ICONOS/guardar.svg" id="guardar" >
                                                    <input type="submit" src="../img/ICONOS/guardar.svg" id="submit" name="altapro">
                                                </section>



                                                </section>
                                                
                                                    <section id="backcontas">

                                                        <section id="backdatob">

                                               
                                                        
                                                            <select id="indicavige" name="objactual" class="readonly3" required>

                                                                <option value="<?php  echo $valydobj ; ?>" ><?php  echo  'OBJETIVO: '.$clienteu.'/'.$gerdir.'/ '. $objetNAME ; ?></option>


                                                            </select>
                                                        
                                                            <datalist id="catenfx">

                                                                <?php
                                                            
                                                                    $enfxx = "SELECT * FROM $enfxtab";
                                                                    $qenfxx = $dbo->query($enfxx);

                                                                    foreach ($qenfxx as $opciones){ ?>

                                                                    <option value="<?php echo $opciones['enfoque']?>"><?php echo $opciones['enfoque']?></option>

                                                                        <?php
                                                                    }

                                                                ?> 

                                                            </datalist>

                                                        
                                                        </section>

                                                        <div id="conttabobj">

                                                            <table id="tablataobj">

                                                                <tr id="columnasob">
                                                                    <th id="col1" >s</th>
                                                                    <th  id="col2">s</th>
                                                                    <th  id="col3">s</th>
                                                                    <th  id="col4">s</th>                                        
                                                                    <th  id="col5">s</th>  
                                                                </tr>

                                                                <?php

                                                                    $tabobjplant = "SELECT * FROM $plantgral";
                                                                    $qtabobjplant = $dbo->query($tabobjplant);

                                                                    while ($fila = $qtabobjplant->fetch(PDO::FETCH_ASSOC)) {

                                                                        ?>
                                                                            <tr>
                                                                                <td class="divicionb"></td>
                                                                                <td class="divicionb"></td>
                                                                                <td class="divicionb"></td>
                                                                                <td class="divicionb"></td>
                                                                                <td class="divicionb"></td>
                                                                            </tr>

                                                                        
                                                                        


                                                                        
                                                                            <?php

                                                                        
                                                                            echo '
                                                                                <tr id="construc1"> 
                                                                                    <td hidden><input type="text" name="idproa[]" value="' . $fila['id'] . '" ></td>
                                                                        
                                                                                
                                                                                    <td><input type="text" id=perspectivaP  value="' . $perspectiva. '"  readonly class="readonly"></td>
                                                                                    
                                                                                    <td>

                                                                                        <select id=tipoP name="tipo[' . $fila['id'] . ']" class="readonly3" >
                                                                                            <option value="" selected>tipo...</option>  
                                                                                            <option value="ESTRUCTURA">ESTRUCTURA</option>
                                                                                            <option value="PROCESO">PROCESO</option>
                                                                                            <option value="RESULTADO">RESULTADO</option>

                                                                                        </select>

                                                                                    </td>
                                                                                    
                                                                                    <td>
                                                                                    
                                                                                        <input type="list" list="catenfx" id=enfoqueP name="enfoque[' . $fila['id'] . ']" placeholder="Vincular enfoque..." spellcheck="false" class="readonly3" > 
                                                                                    
                                                                                    </td>
                                                                                </tr>

                                                                                <tr id="construc2">
                                                                    
                                                                                    <td>                                                                
                                                                                        <select id=indiartiP name="accionini[' . $fila['id'] . ']" class="readonly3">
                                                                                            <option value="" selected>inicio de nombre...</option>                                                         
                                                                                            <option value="INDICE DE">INDICE DE</option>  
                                                                                            <option value="PROMEDIO DE">PROMEDIO DE</option>                                                                       
                                                                                            <option value="NUMERO DE">NUMERO DE</option>                                                                    
                                                                                            <option value="PORCENTAJE DE">PORCENTAJE DE</option>
                                                                                            <option value="HORAS PROMEDIO DE">HORAS PROMEDIO DE</option>
                                                                                            <option value="DIAS PROMEDIO DE">DIAS PROMEDIO DE</option>
                                                                                        </select>
                                                                                    </td>

                                                                                    <td ><input type="list" list="catindi" class="readonly3" id=indicadorP name="indicador[' . $fila['id'] . ']" placeholder="nombre de indicador en mayúscula y sin acentos..." spellcheck="false"  > </td>
                                                                                </tr>

                                                                                <tr id="construc3">                                                    
                                                                                    <td ><input type="list" list="catdueno" id=duenoP class="readonly3" name="dueno[' . $fila['id'] . ']" placeholder="dueño del indicador..."  ></td>
                                                                            
                                                                                    <td ><input type="text" id=metaaP class="readonly3" step="0.01" name="metaa[' . $fila['id'] . ']" placeholder="meta (sin símbolos)"  ></td>

                                                                                    <td ><input type="text" id=pondeP class="readonly3" step="0.01" name="ponde[' . $fila['id'] . ']" placeholder="ponderación (sin símbolos)"  ></td>


                                                                                    <td ><input type="text" id=fechatextP class="readonly3" value="VIGENTE HASTA EL" readonly></td>

                                                                                    <td ><input type="date" id=fechlimP class="readonly3" name="fechlim[' . $fila['id'] . ']"  placeholder="enfoque..."></td>
                                                                        
                                                                                </tr>
                                                                                    
                                                                        
                                                                                
                                                                            ';
                                                                        ?>
                                                                            
                                                                            <tr>
                                                                                <td class="divicion"></td>
                                                                                <td class="divicion"></td>
                                                                                <td class="divicion"></td>
                                                                                <td class="divicion"></td>
                                                                                <td class="divicion"></td>
                                                                            </tr>
                                                                            
                                                                
                                                                
                                                                        <?php
                                                                    
                                                                                    
                                                                
                                                                    } 
                                                                    

                                                                ?>

                                                            </table>
                                                        </div>

                                                    </section>

                                                </form> 

                                            <?php

                                    }else{


                                        ?>
                                            <div id="backRegresarB" class="navbot">
                                                <a href="selectmtn.php"><img src="../img/regresar2.svg" id="regresar"></a>
                                            </div>
                                            <section id="contdatsaveB">
                                                <div id="datsave"><?php echo 'objetivo no registrado...'; ?></div>
                                            </section>
                                        
                                        <?php
                                    }
                            }
                        ?>

                    </section>
                    
                <?php 

            }

        ?>

    </section>


</body>
</html>


