<?php


require_once '../varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];


$estatus = $_POST['estatus'];
$userUnidadAcronu=$_SESSION['acronu'];
$userRegion=$_SESSION['region'];
$userRegioAcronu=$_SESSION['acroregion'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_mtnprint</title>
  
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/reobjt.css">

</head>

<body>

    <section id="OBJETIVOS">

         

                    <section id="contForm">

                        <?php

                        if( $estatus == 'ALTA'){

                            if($adminrol == $radmin){
                                
                                    
                                
                                    $gerdir = $_POST['gerdir'];
                                 //   $clienteu = $_POST['cliente'];
                                    $year = $_POST['year'];
                                    $objasocdg = $_POST['objasocdg'];
                                    $objasocreg = $_POST['objasocreg'];
                                    $alcanceobj = $_POST['alcanceobj'];
                                    $region = $_POST['region'];
                                ?>

                                    <div id="cabecera">
                                        ALTA DE OBJETIVOS CLAVE
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


                                    <form id="backcont" method="POST" action="saveobj.php" onkeydown="return event.key != 'Enter';" autocomplete="off">

                                        <section id="backcabe3">

                                            <section id="backGuardar">

                                                <input type="image" src="../img/ICONOS/guardar.svg" id="guardar" >

                                                <input type="submit" src="../img/ICONOS/guardar.svg" id="submit" name="alta">
                                            </section>

                                        </section>

                                        <section id="backcontas">

                             
                                            
                                            <input hidden type="text" id="gerdir" name="gerdir" value="<?php  echo $gerdir; ?>" readonly>   
                                           
                                            <input hidden type="text" id="clien" name="alcanceobj" value="<?php  echo $alcanceobj; ?>" readonly>   
                                            <input hidden type="text" id="clien" name="objasocdg" value="<?php  echo $objasocdg; ?>" readonly>   
                                            <input hidden type="text" id="clien" name="objasocreg" value="<?php  echo $objasocreg; ?>" readonly>   
                                            <input hidden type="text" id="clien" name="region" value="<?php  echo $region; ?>" readonly>  

                                            <select id="dueno" name="dueno" required> 
                                                <?php




                                                    $tabejer = "SELECT * FROM $gedir WHERE id ='$gerdir' ";
                                                    $qtabejer = $dbo->query($tabejer);

                                                    foreach ( $qtabejer as $opciones){ ?>

                                                    <option value="<?php echo $opciones['clave']?>"><?php echo 'DUEÑO: '.$opciones['unidad'].'/'.$opciones['clave'].'/'.$opciones['nombre'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>

                                            <select id="dueno" name="idobjdg" required> 
                                                <?php

                                                    if($alcanceobj == 'UNIDAD' ){

                                                        ?>
                                                             <option value="<?php echo $objasocdg;?>"><?php echo $objasocdg;?></option>
                                                        <?php

                                                    }else{

                                                        if(empty($objasocdg)){

                                                            ?>  
                                                                <option value="NA">OBJETIVO CORPORATIVO</option>
                                                            <?php

                                                        }else{

                                                            $tabejer = "SELECT * FROM $tabojdg WHERE idobjdg ='$objasocdg' ";
                                                            $qtabejer = $dbo->query($tabejer);
        
                                                            foreach ( $qtabejer as $opciones){ ?>
        
                                                            <option value="<?php echo $opciones['idobjdg']?>"><?php echo $opciones['idobjdg'];?></option>
                                                            <option value=""><?php echo $opciones['objetivo'];?></option>
                                                                <?php
                                                        
                                                            }
                                                        }

                                                    }
                                                   
                                                ?>
                                            </select>

                                            <select id="dueno" name="idobjreg" required> 

                                                <?php

      

                                                    if(empty($objasocreg)){

                                                        ?>  
                                                            <option value="NA">OBJETIVO REGIONAL</option>
                                                        <?php

                                                    }else{

                                                        $tabejer = "SELECT * FROM $tabojreg WHERE idobjreg ='$objasocreg' ";
                                                        $qtabejer = $dbo->query($tabejer);
    
                                                        foreach ( $qtabejer as $opciones){ ?>
    
                                                        <option value="<?php echo $opciones['idobjreg']?>"><?php echo $opciones['idobjreg'];?></option>
                                                        <option value=""><?php echo $opciones['objetivo'];?></option>
                                                            <?php
                                                    
                                                        }
                                                    }


                                                   
                                                ?>
                                            </select>


                                        
                                            <div id="conttabobj">

                                                    <?php

                                                        if($alcanceobj == 'UNIDAD'){

                                                            ?>

                                                                <select id="unidadreg" name="unidadreg" required> 

                                                                    <option value="" selected >Unidad...</option>

                                                                    <?php


                                                                        if($adminrol == $radmin AND $userRegioAcronu == $radrol){

                                                                            $tabun = "SELECT * FROM $clirisk ORDER BY unidad ASC";
                                                                            $qtabun = $dbo->query($tabun);
                                                                        }else{

                                                                            if($adminrol == $radreg ){
                                                                                $tabun = "SELECT * FROM $clirisk WHERE region = '$userRegion' ORDER BY unidad ASC";
                                                                                $qtabun = $dbo->query($tabun);
                                                                            }else{
                                                                                $tabun = "SELECT * FROM $clirisk WHERE unidad = '$userUnidadAcronu'  ";
                                                                                $qtabun = $dbo->query($tabun);
                                                                            }

                                                                        }



                                                                        foreach ( $qtabun as $opciones){ ?>

                                                                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                                                            <?php

                                                                        }
                                                                    ?>
                                                                </select>

                                                            <?php

                                                        }

                                                    ?>



                                                <table id="tablataobj">

                                                    <tr id="columnasob">
                                                        <th id="col1" >s</th>
                                                        <th  id="col2">s</th>
                                                        <th  id="col3">s</th>
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

                                                                    <datalist id="accionini">

                                                                        <option>ALCANZAR</option>
                                                                        <option>CONTROLAR</option>
                                                                        <option>CUMPLIR</option>
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

                                                                  

                                                                    <?php 

                                                                    echo '

                                                                        <tr id="construc1"> 

                                                                            <td hidden><input type="text" name="idUpdate[]" value="' . $fila['id'] . '" ></td>
                                                                    
                                                                            <td ><input type="text" id="ididd"  readonly></td>

                                                                            
                                                                    
                                                                            <td>

                                                                                ';

                                                                                        if($alcanceobj == 'CORPORATIVO' ){

                                                                                        echo '
                                                                                                <select id="perspectiva" name="perspectiva[' . $fila['id'] . ']" readonly >

                                                                                                    <option value="NA"></o  ption>                                                                     
                                                                            
                                                                                                </select>

                                                                                        ';

                                                                                        }else{
                                                                                        
                                                                                            echo '
                                                                                            <select id="perspectiva" name="perspectiva[' . $fila['id'] . ']" readonly>

                                                                                                <option value="" selected >Enfoque...</option>
                                                                                                <option value="FINANCIERA">FINANCIERO</option>
                                                                                                <option value="PROCESOS">PROCESOS</option> 
                                                                                                <option value="CLIENTE">CLIENTE</option>
                                                                                                <option value="CRECIMIENTO">CRECIMIENTO Y DESARROLLO</option>                                                                         
                                                                                                <option value="PRODUCTIVIDAD">PRODUCTIVIDAD</option>  
                                                                                            </select>

                                                                                        ';
                                                                                        }
                                                                                        
                                                                           

                                                                                echo '


                                                                            </td>
                                                                    
                                                                        </tr>

                                                                        <tr id="construc2">

                                                                            <td>

                                                                                <input type="list" id=indiarti list="accionini" name="accionini[' . $fila['id'] . ']" placeholder="busca o escribe la acción en infinitivo..." spellcheck="false" style="text-transform: uppercase;" >

                                                                            </td>

                                                                            <td>

                                                                                <select id=articulo name="articulo[' . $fila['id'] . ']" >

                                                                                    <option value="" selected>artículo...</option>                                                                              
                                                                                    <option value="EL" >EL</option>   
                                                                                    <option value="LA" >LA</option>   
                                                                                    <option value="LOS" >LOS</option>   
                                                                                    <option value="LAS" >LAS</option>   
                                                                                    <option value="EN EL" >EN EL</option>   
                                                                                    <option value="EN LA" >EN LA</option>   
                                                                                    <option value="EN LOS" >EN LOS</option>   
                                                                                    <option value="EN LAS" >EN LAS</option>  
                                                                                    <option value="DEL" >DEL</option>   
                                                                                    <option value="DE" >DEL</option>  
                                                                                    <option value="CON" >CON</option> 
                                                                                    <option value="UN" >UN</option>    
                                                                                </select>
                                                                            </td>

                                                                            <td ><input type="list" id=indicadorr list="catobj" name="objetivo[' . $fila['id'] . ']" spellcheck="false" placeholder="descripción con mayúscula y sin acentos..." ></td>
                                                                        
                                                        
                                                                        </tr>

                                                                        <tr id="construc3">                                                    

                                                                            <td >

                                                                                <select id="medidaa" name="medidaa[' . $fila['id'] . ']" >
                                                                                    <option value="" selected>unidad de medida...</option>  
                                                                                    <option value="PORCENTAJE">PORCENTAJE</option>
                                                                                    <option value="PROMEDIO">PROMEDIO</option>
                                                                                    <option value="MONEDA">MONEDA</option>                                       
                                                                                    <option value="INDICE">INDICE</option>
                                                                                    <option value="TOTAL">NUMERO</option>
                                                                                </select>

                                                                            </td> 

                                                                            <td ><input type="text" id="metaa" step="0.01" name="metaa[' . $fila['id'] . ']" placeholder="meta (sin símbolos)"  ></td>
                                                                        
                                                                            <td ><input type="text" id=fechatext value="FECHA INICIAL" readonly></td>

                                                                            <td ><input type="date" id=fechini name="fechalta[' . $fila['id'] . ']" ></td>
                                                                
                                                                        </tr>

                                                                        <tr id="construc4">
                                        
                                                                            <td ><input type="text" id=ponde step="0.01" name="pondemod[' . $fila['id'] . ']" placeholder="ponderación (sin símbolos)"  ></td>
                                                                        
                                                                        
                                                                            <td ><input type="text" id=fechatexB value="VIGENCIA HASTA EL" readonly></td>

                                                                            <td ><input type="date" id=fechlimB name="fechlim[' . $fila['id'] . ']"  ></td>
                                                                
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
                                        <a href="selectmtn.php"><img src="../img/regresar2.svg" id="regresar"></a>
                                    </div>
                                    <section id="contdatsave">
                                        <div id="datsave"><?php echo '¡lo sentimos, acceso restringido!'; ?></div>
                                    </section>
                                    <?php
                            }
                            
                        }elseif($estatus == 'MODIFICA'){
                            $clienteu = $_POST['cliente'];
                            $gerdir = $_POST['gerdir'];
                            $perspectiva = $_POST['perspectiva'];
                            $year = $_POST['year'];


                            if($adminrol == $radmin){

                                $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year' AND activo = 'SI' AND unidad = '$clienteu' AND useresp = '$gerdir' AND perspectiva LIKE '%$perspectiva%'";
                                $qvaldobj = $dbo->query($valdobj);

                                while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                    $valydobj = $fila['id'];

                                }

                                }else{

                                $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year' AND activo = 'SI' AND unidad = '$clienteu' AND useresp = '$userLog' AND perspectiva LIKE '%$perspectiva%' ";
                                $qvaldobj = $dbo->query($valdobj);

                                while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                    $valydobj = $fila['id'];

                                    $useresp = $fila['useresp'];
                                
                                    $gerdir = $fila['gerdir'];
                                    $objetNAME = $fila['objetivo'];
                                    $idobj = $fila['idobj'];
                                    $clienteu = $fila['unidad'];
                                }

                            }

                            if(!empty($valydobj)){


                                if($adminrol == $radmin){

                                    ?>

                                     
                                        <div id="cabecera">
                                            MODIFICAR OBJETIVOS ESTRATEGICOS
                                        </div>
                                        <section id="backMod">

                                            <div id="backRegresar" class="navbot">
                                                <a href="selectmtn.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
                                            </div>
                                                
                                            <div id="reload">

                                                <input type="image" src="../img/recarga.svg" id="reloadIcon" onclick="location.reload();">

                                            </div> 
                                        </section>

                                        <form id="backcont"  method="POST" action="saveobj.php" onkeydown="return event.key != 'Enter';" autocomplete="off">

                                                <section id="backGuardar">

                                                    <input type="image" src="../img/ICONOS/guardar.svg" id="alta" name="modestra">

                                                </section>
                                                <section id="backcontas">

                                                <section id="backdatob">

                                                    <?php

                                                        if($adminrol == $radmin){

                                                            $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp LIKE '%$gerdir%' AND perspectiva LIKE '%$perspectiva%' ";
                                                            $qvaldobj = $dbo->query($valdobj);

                                                            while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                                                $valydobj = $fila['id'];

                                                                $useresp = $fila['useresp'];
                                                                $gerdir = $fila['gerdir'];
                                                                $objetNAME = $fila['objetivo'];
                                                                $idobj = $fila['idobj'];
                                                                $clienteu = $fila['unidad'];
                                                            }

                                                        }else{

                                                            $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year'  AND unidad = '$clienteu' AND useresp LIKE '%$userLog%' AND perspectiva LIKE '%$perspectiva%' ";
                                                            $qvaldobj = $dbo->query($valdobj);

                                                            while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                                                $valydobj = $fila['id'];

                                                                $useresp = $fila['useresp'];
                                                                $gerdir = $fila['gerdir'];
                                                                $objetNAME = $fila['objetivo'];
                                                                $idobj = $fila['idobj'];
                                                                $clienteu = $fila['unidad'];
                                                            }

                                                        }
                                                        $tabdueno = "SELECT * FROM $pfun WHERE acronimo = '$gerdir' ";
                                                        $qtabdueno = $dbo->query($tabdueno);

                                                        while ($fila = $qtabdueno->fetch(PDO::FETCH_ASSOC)) {
                                                            $nombreOb = $fila['nombre'];
                                                        }


                                                        ////VALIDACION DE PONDERACION
                                                    
                                                        if($adminrol == $radmin){

                                                            $sumadese = current($dbo->query("SELECT SUM(pond) FROM $smartobj WHERE yearini LIKE '%$year%'  AND unidad = '$clienteu' AND gerdir LIKE '%$gerdir%' AND activo = 'SI'")->fetch());
                                    
                                                        }else{
                                                            $sumadese = current($dbo->query("SELECT SUM(pond) FROM $smartobj WHERE yearini LIKE '%$year%'  AND unidad = '$clienteu' AND gerdir LIKE '%$gerdir%' AND activo = 'SI'")->fetch());
                                    
                                                        }
                                                        /////////

                                                    ?>

                                                    <input type="text" id="servdepMOD" value="<?php  echo $nombreOb; ?>" readonly> 

                                                    <?php

                                                        if($sumadese ==100){
                                                            ?>
                                                                <input type="text" id="nombreob" value="<?php  echo 'PONDERACION GLOBAL CORRECTA: '. number_format($sumadese, 2) .'%' ; ?>" readonly>   

                                                            <?php

                                                        }else{
                                                            ?>
                                                                <input type="text" id="nombreob" value="<?php  echo 'PONDERACION INSUFICIENTE: '. number_format($sumadese, 2) .'%' ; ?>" readonly>   

                                                            <?php

                                                        }

                                                    ?>     

                                                    <input hidden type="text" id="servdep" name="servdep" value="<?php  echo $useresp; ?>" readonly>   

                                                

                                                </section>
                                        
                                                <div id="conttabobj">

                                                    <table id="tablataobj">

                                                        <tr id="columnasob">
                                                            <th id="col1" >s</th>
                                                            <th  id="col2">s</th>
                                                            <th  id="col3">s</th>
                                                            <th  id="col4">s</th>                                        

                                                        </tr>

                                                        <?php


                                                                                                            
                                                                if($adminrol == $radmin){
                                                                    $tabobjya = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp LIKE '%$gerdir%' AND perspectiva LIKE '%$perspectiva%' ";
                                                                    $qtabobjya = $dbo->query($tabobjya);
                                                                }else{
                                                                    $tabobjya = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp LIKE '%$userLog%' AND perspectiva LIKE '%$perspectiva%' ";
                                                                    $qtabobjya = $dbo->query($tabobjya);
                                                                }

                                                                while ($fila = $qtabobjya->fetch(PDO::FETCH_ASSOC)) {
                                                                    $idup = $fila['id'];
                                                                    $num = $fila['num'];
                                                                    $activo = $fila['activo'];
                                                                    $objetivo = $fila['objetivo'];
                                                                    $metamod = $fila['meta'];
                                                                    $unmed = $fila['unmed'];


                                                                    $vigenciaini = $fila['fechalta'];
                                                                    $vigenciainii = new DateTime($vigenciaini);                          
                                                                    $vigenciainiii = $vigenciainii->format('d/m/y');

                                                                    $vigencia = $fila['vigencia'];
                                                                    $vigenciaa = new DateTime($vigencia);                          
                                                                    $vigenciaaa = $vigenciaa->format('d/m/y');

                                                                    ?>
                                                                        <tr>
                                                                            <td class="divicionb"></td>
                                                                            <td class="divicionb"></td>
                                                                            <td class="divicionb"></td>
                                                                            <td class="divicionb"></td>
                                                                        </tr>
                                                                    
                                                                        <tr id="construc1">
                                                                                <td hidden><input type="text" name="idupMod" value="<?php echo $idup; ?>" ></td>
                                                                                <td ><input type="text" id="ididdmod" value="<?php echo $num; ?>" readonly></td>
                                                                                <td ><input type="text" id="perspectivamod"  value="<?php echo $perspectiva; ?>" readonly></td>
                                                                                <td ><input type="text" id="activomod"  value="<?php echo 'activo: '. $activo; ?>" readonly></td>
                                                                        </tr>

                                                                        <tr id="construc2">
                                                                        </tr>   

                                                                        <tr id="construc3">  

                                                                            <?php
                                                                            
                                                                                echo '
                                                                        
                                                                                    <td hidden><input type="text" name="idmodu[]" value="' . $fila['id'] . '" ></td>
                                                                                    <td>

                                                                                        <input type="text" id="indicadorrmod"  name="nommod[' . $fila['id'] . ']"  placeholder ="' . $fila['objetivo'] . '"  >

                                                                                    </td>

                                                                                ';
                                                                            ?>
                                                                            <td ><input type="text" id="fechatextmod" value="FECHA INICIAL" readonly></td>

                                                                            <td ><input type="text" id="fechinigrmod" value="<?php echo $vigenciainiii; ?>" readonly></td>

                                                                        </tr>

                                                                        <tr id="construc4">

                                                                        

                                                                            <?php 
                                                                                echo '                                                                
                                                                                    <td ><input type="text" id="metamod" step="0.01" name="metamod[' . $fila['id'] . ']" placeholder="' .'meta:'. $fila['meta'] . '" ></td>
                                                                                    <td ><input type="text" id=pondemod step="0.01" name="ponde[' . $fila['id'] . ']" placeholder="' .'pond:'. $fila['pond'] . '"  ></td>

                                                                                    ';
                                                                            ?>
                                                                            <td ><input type="text" id="fechatexBmod" value="VIGENCIA HASTA EL" readonly></td>

                                                                            <td ><input type="text" id="fechlimagrmod" value="<?php echo $vigenciaaa; ?>" readonly></td>
                                                                
                                                                        </tr>

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
                                                <a href="selectmtn.php"><img src="../img/regresar2.svg" id="regresar"></a>
                                            </div>
                                            <section id="contdatsave">
                                                <div id="datsave"><?php echo 'si quieres modificar, solicitalo al ADMINISTRADOR DEL SISTEMA DE GESTIÓN'; ?></div>
                                            </section>
                                            
                                        <?php
                                }

                                
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

                        }elseif( $estatus == 'BAJA'){
                            
                            $clienteu = $_POST['cliente'];
                            $gerdir = $_POST['gerdir'];
                            $perspectiva = $_POST['perspectiva'];
                            $year = $_POST['year'];

                        
                            if($adminrol == $radmin){

                                $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp = '$gerdir' AND perspectiva LIKE '%$perspectiva%'";
                                $qvaldobj = $dbo->query($valdobj);

                                while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                    $valydobj = $fila['id'];

                                }

                                }else{

                                $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp = '$userLog' AND perspectiva LIKE '%$perspectiva%' ";
                                $qvaldobj = $dbo->query($valdobj);

                                while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                    $valydobj = $fila['id'];

                                    $useresp = $fila['useresp'];
                                    $gerdir = $fila['gerdir'];
                                    $objetNAME = $fila['objetivo'];
                                    $idobj = $fila['idobj'];
                                    $clienteu = $fila['unidad'];
                                }

                            }

                            if(!empty($valydobj)){

                                if($adminrol == $radmin){


                                    ?>

                                    
                                        <div id="cabecera">
                                            BAJA O ACTIVACION DE OBJETIVOS ESTRATEGICOS
                                        </div>
                                        <section id="backMod">

                                            <div id="backRegresar" class="navbot">
                                                <a href="selectmtn.php"><img src="../img/ICONOS/regresar.svg" id="regresar"></a>
                                            </div>
                                                
                                            <div id="reload">

                                                <input type="image" src="../img/recarga.svg" id="reloadIcon" onclick="location.reload();">

                                            </div> 
                                        </section>

                                        <form id="backcont"  method="POST" action="saveobj.php" onkeydown="return event.key != 'Enter';" autocomplete="off">

                                       

                                            <section id="backGuardar">

                                                <input type="image" src="../img/ICONOS/guardar.svg" id="alta" name="modebj">

                                            </section>

                                            <section id="backcontas">

                                                <section id="backdatob">

                                                    <?php 

                                                        if($adminrol == $radmin){

                                                            $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp = '$gerdir' AND perspectiva LIKE '%$perspectiva%'";
                                                            $qvaldobj = $dbo->query($valdobj);

                                                            while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                                                $valydobj = $fila['id'];

                                                                $useresp = $fila['useresp'];
                                                                $gerdir = $fila['gerdir'];
                                                                $objetNAME = $fila['objetivo'];
                                                                $idobj = $fila['idobj'];
                                                                $clienteu = $fila['unidad'];
                                                            }

                                                        }else{

                                                            $valdobj = "SELECT * FROM $smartobj WHERE yearini = '$year'  AND unidad = '$clienteu' AND useresp = '$userLog' AND perspectiva LIKE '%$perspectiva%' ";
                                                            $qvaldobj = $dbo->query($valdobj);

                                                            while ($fila = $qvaldobj->fetch(PDO::FETCH_ASSOC)) {                            
                                                                $valydobj = $fila['id'];

                                                                $useresp = $fila['useresp'];
                                                                $gerdir = $fila['gerdir'];
                                                                $objetNAME = $fila['objetivo'];
                                                                $idobj = $fila['idobj'];
                                                                $clienteu = $fila['unidad'];
                                                            }

                                                        }
                                                        $tabdueno = "SELECT * FROM $pfun WHERE acronimo = '$gerdir' ";
                                                        $qtabdueno = $dbo->query($tabdueno);

                                                        while ($fila = $qtabdueno->fetch(PDO::FETCH_ASSOC)) {
                                                            $nombreOb = $fila['nombre'];
                                                        }
                                                            
                                                    ?>
                                                    <option hidden value="<?php echo $opciones['idobj'];?>"><?php echo 'ACTIVO:'. $opciones['activo'].'/'.$opciones['objetivo'];?></option>

                                                    <input type="text" id="servdepMOD" value="<?php  echo $useresp; ?>" readonly>   
                                                    <input type="text" id="nombreob" value="<?php  echo $nombreOb; ?>" readonly> 
                                                    <input hidden type="text" id="servdep" name="servdep" value="<?php  echo $useresp; ?>" readonly>   

                                                

                                                </section>                                        
                                            
                                                <div id="conttabobj">

                                                    <table id="tablataobj">

                                                        <tr id="columnasob">
                                                            <th id="col1" >s</th>
                                                            <th  id="col2">s</th>
                                                            <th  id="col3">s</th>
                                                            <th  id="col4">s</th>                                        

                                                        </tr>

                                                        <?php

                                                                if($adminrol == $radmin){
                                                                    $tabobjya = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp = '$useresp' AND perspectiva LIKE '%$perspectiva%' ";
                                                                    $qtabobjya = $dbo->query($tabobjya);
                                                                }else{
                                                                    $tabobjya = "SELECT * FROM $smartobj WHERE yearini = '$year' AND unidad = '$clienteu' AND useresp = '$userLog' AND perspectiva LIKE '%$perspectiva%' ";
                                                                    $qtabobjya = $dbo->query($tabobjya);
                                                                }

                                                            
                                                                while ($fila = $qtabobjya->fetch(PDO::FETCH_ASSOC)) {
                                                                    $idup = $fila['id'];
                                                                    $num = $fila['num'];
                                                                    $perspok = $fila['perspectiva'];
                                                                    $activo = $fila['activo'];
                                                                    $objetivo = $fila['objetivo'];
                                                                    $metamod = $fila['meta'];
                                                                    $unmed = $fila['unmed'];

                                                                    $vigenciaini = $fila['fechalta'];
                                                                    $vigenciainii = new DateTime($vigenciaini);                          
                                                                    $vigenciainiii = $vigenciainii->format('d/m/y');

                                                                    $vigencia = $fila['vigencia'];
                                                                    $vigenciaa = new DateTime($vigencia);                          
                                                                    $vigenciaaa = $vigenciaa->format('d/m/y');

                                                                    ?>
                                                                        <tr>
                                                                            <td class="divicionb"></td>
                                                                            <td class="divicionb"></td>
                                                                            <td class="divicionb"></td>
                                                                            <td class="divicionb"></td>
                                                                        </tr>

                                                                        <tr id="construc1">
                                                                                
                                                                                <td ><input type="text" id="ididdmod" value="<?php echo $num; ?>" readonly></td>
                                                                                <td ><input type="text" id="perspectivamod"  value="<?php echo $perspok; ?>" readonly></td>
                                 
                                                                                <?php 

                                                                                echo '
                                                                                    <td hidden><input type="text" name="idobaju[]" value="' . $fila['id'] . '" value="'. $idup.'" class="readonly" ></td>
                                                                                    <td>
                                                                                        <select id="activomod"  name="activo[' . $fila['id'] . ']">
                                                                                            <option value="" selected>' .'¿activo?: '. $fila['activo'] . '</option> 
                                                                                            <option value="NO">DESACTIVAR</option>                                                                             
                                                                                            <option value="SI">REACTIVAR</option>    
                                                                                        </select>
                                                                                    
                                                                                    </td>
                                                                                    ';

                                                                                ?>
                                                                        </tr>

                                                                        <tr id="construc2">
                                                                        </tr>   

                                                                        <tr id="construc3">                                                   
                    
                                                                            <td>

                                                                                <input type="text" id="indicadorbj"  placeholder ="<?php echo $objetivo; ?>"  readonly>

                                                                            </td>

                                                                            <td ><input type="text" id="fechatextbj" value="FECHA INICIAL" readonly></td>

                                                                            <td ><input type="text" id="fechinibj" value="<?php echo $vigenciainiii; ?>" ></td>

                                                                        </tr>

                                                                        <tr id="construc4">

                                                                        
                                                                            <td ><input type="text" id="metaabaj" step="0.01" placeholder="<?php echo 'meta:'. $metamod; ?>" readonly></td>

                                                                            <td ><input type="text" id="fechatexBbj" value="VIGENCIA HASTA EL" readonly></td>

                                                                            <td ><input type="text" id="fechlimBbj" value="<?php echo $vigenciaaa; ?>"></td>
                                                                
                                                                        </tr>

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
                                        <a href="selectmtn.php"><img src="../img/regresar2.svg" id="regresar"></a>
                                    </div>
                                    <section id="contdatsave">
                                        <div id="datsave"><?php echo 'si quieres modificar, solicitalo al ADMINISTRADOR DEL SISTEMA DE GESTIÓN'; ?></div>
                                    </section>
                                    <?php
                                }

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


</body>
</html>


