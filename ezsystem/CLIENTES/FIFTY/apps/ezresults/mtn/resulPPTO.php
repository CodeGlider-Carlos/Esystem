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

$objasocUNID = $_POST['objasocUNID'];
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


    <section id="ALTA_PPTO">
     
        <?php
       

            ?>
                <section id="contForm">

                    <?php

                    

                        

                                if($adminrol == $radmin){

                                    $valdobj = "SELECT * FROM $tabojunid WHERE idobjunid = '$objasocUNID'";
                                    $qvaldobj = $dbo->query($valdobj);

                                    while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                        $valydobj = $fila['id'];

                                        $useresp = $fila['useresp'];
                                        $gerdir = $fila['gerdir'];
                                        $objetNAME = $fila['objetivo'];
                                        $idobjdg = $fila['idobjdg'];
                                        $idobjreg = $fila['idobjreg'];
                                        $clienteu = $fila['unidad'];
                                    }

                                }

                                $tabdueno = "SELECT * FROM $pfun WHERE acronimo = '$gerdir' ";
                                $qtabdueno = $dbo->query($tabdueno);

                                while ($fila = $qtabdueno->fetch(PDO::FETCH_ASSOC)) {
                                    $nombreOb = $fila['nombre'];
                                }
                            
                                if(!empty($valydobj)){

                                    ?>
                                
                                        <div id="cabecera">
                                            ALTA DE RESULTADOS CLAVE/PRESUPUESTO/PRODUCTIVIDAD 
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

                                        <form id="backcont" method="POST" action="saveindiPPTO.php" autocomplete="off">

                                            
    
                                            <section id="backcabe3">


                                                <section id="backGuardar">

                                                    <input type="image" src="../img/ICONOS/guardar.svg" id="guardar" >
                                                    <input type="submit" src="../img/ICONOS/guardar.svg" id="submit" name="altaindi">
                                                </section>



                                            </section>

                                        
                                            <section id="backcontas">

                                                <section id="backdatob">

                                                
                                                    <input type="text" id="servdepV" value="<?php  echo 'RESP: '.$clienteu.'/'. $nombreOb; ?>" readonly>   
                                                    
                                                    <select id="indicavigeVA" name="objactual" class="readonly3" required readonly>

                                                        <option value="<?php  echo $valydobj;?>" ><?php  echo $objetNAME;?></option>
                                
                                        
                                                        ?> 


                                                    </select>                                 
                                                    <input hidden type="text" id="servdep" name="servdep" value="<?php  echo $useresp; ?>" readonly>     
                                                    <input hidden type="text" id="clienteu" name="clienteu" value="<?php  echo $clienteu; ?>" readonly>   
                                                </section>
                                        
                                                <div id="conttabobj">

                                                    <table id="tablataobj">

                                                        <tr id="columnasob">
                                                            <th id="col1" >s</th>
                                                            <th  id="col2">s</th>
                                                            <th  id="col3">s</th>
                                                            <th  id="col4">s</th>                                        
                                                            <th  id="col4">s</th>  
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
                                                                        </tr>

                                                                        <datalist id="listsat">

                                                                            <?php
                                                                                if($adminrol == $radmin){

                                                                                    $satstab = "SELECT * FROM $pfun";
                                                                                    $qsatstab = $dbo->query($satstab);
                    
                                                                                    foreach ( $qsatstab as $opciones){ ?>
                    
                                                                                    <option value="<?php echo $opciones['acronimo']?>"><?php echo $opciones['nombre']?></option>
                    
                                                                                        <?php
                                                                                    
                                                                                    }
                                                                                }else{    

                                                                                    ?>

                                                                                        <option value="<?php echo $userLog; ?>"><?php echo $userLog; ?></option>

                                                                                    <?php
                                                                                
                                                                                }
                                                                                
                                                                            ?>
                                                                                
                                                                        </datalist>

                                                                        <datalist id="accionini">

                                                                            <option>ALCANZAR</option>
                                                                            <option>CONTROLAR</option>
                                                                            <option>DESARROLLAR</option>
                                                                            <option>DISEÑAR</option>
                                                                            <option>ELABORAR</option>
                                                                            <option>ESTABLECER</option>
                                                                            <option>IMPLEMENTAR</option>
                                                                            <option>INCREMENTAR</option>
                                                                            <option>MANTENER</option>
                                                                            <option>MEJORAR</option>
                                                                            <option>MINIMIZAR</option>
                                                                            <option>OPTIMIZAR</option>
                                                                            <option>OPTENER</option>
                                                                            <option>ADQUIRIR</option>
                                                                            <option>REDUCIR</option>


                                                                        </datalist>  

                                                                        <datalist id="enfindica">

                                                                            <option value="PRESUPUESTO">PRESUPUESTO</option>
                                                                            <option value="PRODUCTIVIDAD">PRODUCTIVIDAD</option>
                                                                            <option value="INVENTARIOS">INVENTARIOS</option>
                                                                            <option value="CAPACITACION">CAPACITACION</option>
                                                                            <option value="PROYECTOS">PROYECTOS</option>
                                                                            <option value="OTROS">OTROS</option>  

                                                                        </datalist>  

                                                                    <?php 
                
                                                                            echo '

                                                                                <tr id="construc1"> 

                                                                                    <td hidden><input type="text" name="idUpdate[]" value="' . $fila['id'] . '" ></td>
                                                                            
                                                                                    
                                                                                    <td>

                                                                                        <select id=perspectiva name="enfoque[' . $fila['id'] . ']" readonly>
                                                                                            <option value="" selected>enfoque...</option>
                                                                                            <option value="PRESUPUESTO">PRESUPUESTO</option>
                                                                                            <option value="PRODUCTIVIDAD">PRODUCTIVIDAD</option>
                                                                                                                                                                 
                                                                                        </select>

                                                                                    </td>

                                                                                    <td>

                                                                                        <select id=tipo name="accion[' . $fila['id'] . ']" readonly>
                                                                                            <option value="" selected>Acción...</option>
                                                                                            <option value="ALCANZAR">ALCANZAR</option>
                                                                                            <option value="MANTENER">MANTENER</option>
                                                                                            <option value="REDUCIR">REDUCIR</option>
                                                                                            <option value="INCREMENTAR">INCREMENTAR</option>
                                                                                        </select>

                                                                                    </td>

                    
                                                                                </tr>

                                                                                <tr id="construc2">

                                                                                    <td>

                                                                                        <input id=dueno type="list" list="listsat" name="dueno[' . $fila['id'] . ']" placeholder="responsable del resultado..." style="text-transform: uppercase;" >

                                                                                    </td>
                                                                                    <td>

                                                                                        <select id=mat name="mat[' . $fila['id'] . ']" >  
                                                                                            <option value="" selected>elige la opción...</option>
                                                                                        
                                                                                            <option value="COSTO">COSTO</option>                                                                                                                                                                             
                                                                                            <option value="GASTOS">GASTOS</option>
                                                                                            <option value="TOTAL">TOTAL</option>
                                                                                            <option value="VENTAS">VENTAS</option> 

                                                                                        
                                                                                            <option value="EBITDA">EBITDA</option>
                                                                                            <option value="EVA">EVA</option>          

                                                                                        </select>

                                                                                    </td>

                                                                                </tr>

                                                                                <tr id="construc3">
                                                                                    
                                                                                    <td>
                                                                                        
                                                                                        <input type="list" id=indicaname list="catind" name="indicador[' . $fila['id'] . ']" placeholder="busca o escribe le nombre del resultado..." >

                                                                                    </td> 
                                                                                    
                                                                                
                                                                                </tr>

                                                                                <tr id="construc4">                                                    
                                                            
                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa1[' . $fila['id'] . ']" placeholder="enero.. (sin símbolos)"  ></td>

                                                                                    <td ><input type="text" id=ponde step="0.01" name="ponde[' . $fila['id'] . ']" placeholder="ponderación (sin símbolos)"  ></td>

                                                                                    <td ><input type="text" id=fechatext value="VIGENTE HASTA EL" readonly></td>

                                                                                    <td ><input type="date" id=fechlim name="fechlim[' . $fila['id'] . ']"  placeholder="enfoque..."></td>
                                                                        
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa2[' . $fila['id'] . ']" placeholder="febrero... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa3[' . $fila['id'] . ']" placeholder="marzo... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                    <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa4[' . $fila['id'] . ']" placeholder="abril... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa5[' . $fila['id'] . ']" placeholder="mayo... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa6[' . $fila['id'] . ']" placeholder="junio... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>


                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa7[' . $fila['id'] . ']" placeholder="julio... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa8[' . $fila['id'] . ']" placeholder="agosto... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa9[' . $fila['id'] . ']" placeholder="septiembre... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa10[' . $fila['id'] . ']" placeholder="octubre... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa11[' . $fila['id'] . ']" placeholder="noviembre... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>

                                                                                <tr id="meses">

                                                                                    <td ><input type="text" id=metaa step="0.01" name="metaa12[' . $fila['id'] . ']" placeholder="diciembre... (sin símbolos)"  ></td>

                                                                                
                                                                                </tr>


                                                                            ';
                                                                        ?>

                                                                        <tr>
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
                                            <a href="selectmtn.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
                                        </div>
                                        <section id="contdatsaveB">
                                            <div id="datsave"><?php echo 'objetivo no registrado...'; ?></div>
                                        </section>
                                    
                                    <?php
                                }
                        
                    ?>

                </section>
                        
            <?php 


        ?>

    </section>


</body>
</html>


