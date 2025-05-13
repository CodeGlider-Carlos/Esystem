<?php
session_start();
require_once '../varSQL/db_risk.php';
require_once '../../../varSQL/bd.php';
require_once '../../../varSQL/var.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];


$mes = date('m');



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RISK_CED</title>
    
    <link rel="icon" type="favicon/x-icon" href="deodi50d/img/ICONOS/50D.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/print.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


    <link rel="stylesheet" type="text/css" href="css/print.css">
    <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
     <!-------------------------------ES UN SCRIPT PARA REDIRECCION POR DISPOSITIVO------------------------>
      <script type="text/javascript">   
        /*
       
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|android|samsung|nokia|oppo|lg|huawei/) > -1) {
            document.location = "movil/";
        }*/
    </script>



</head>

<body>

    <navleft id="navleft">



                

        <div class="bakBoton" id="bakBoton1">

            <img id="lognav1" src="../img/suite/dash.png" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexRisk.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

           
        </div>


        <div class="bakBoton">

            <img id="lognav2" src="../img/suite/registro.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../CED/" id="slognav2">

                <input type="submit" class="submit" >

            </form>
           
        </div>


        <div class="bakBoton">

            <img id="lognav3" src="../img/suite/risk.png" class="lognav">
            <div id="txt3" class="txttx"><strong>RIESGOS</strong></div>

            
            <form action="../risk/" id="slognav3">

                <input type="submit" class="submit" >

            </form>

        </div>



        <div class="bakBoton">

            <img id="lognav4" src="../img/suite/consulta.png" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="../CONS/" id="slognav4">

                <input type="submit" class="submit" >

            </form>

        </div>



        <div class="bakBoton">

            <img id="lognav5" src="../img/suite/print.png" class="lognav">
            <div id="txt5" class="txttx"><strong>IMPRESIONES</strong></div>


            <form action="print.php" id="slognav5">

                <input type="submit" class="submit" >

            </form>
            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img id="lognav6" src="../img/suite/cong.png" class="lognav">
            <div id="txt6" class="txttx"><strong>CONFIGURACION</strong></div>
        </div>



        <form action="/../../../loglog/logout.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../img/suite/salir.png"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>


    <navsup id="navsup">

        <div id="modname"><strong>IMPRESIONES</strong></div>

        <div id="backUser">



            <img id="lognav0" src="../img/suite/user.png" class="imagUser">

  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>
     



        </div>

    </navsup>



    <modseg  id="modprosp">



   
        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">TIPO</div>

         
                <form class="tabcpo" method="POST" action = "print.php" >
                
                    
                    <select name="tipo"  class="input4" required  >

                        <option value="" selected>...</option>
                        <option value="CEDULA" >FALLAS POTENCIALES</option>
                        <option value="DESEMPENO" >DESEMPEÑO DE PROCESOS</option>
                        <option value="MAPA" >MATRIZ DE RIESGOS</option>
                        <option value="EVALUADORES" >EVALUADORES</option>
                        <option value="REPORTE EJECUTIVO" >REPORTE EJECUTIVO</option>
                        
                    </select>
                    <div for="categoria" class="labelEta2">FILTROS</div>

                    <div for="categoria" class="label">Año</div>
                    <select id="year" name="year" class="input"  required> 
                        <option value="" selected >...</option>
                        <?php

                            $tabejer = "SELECT * FROM $tabyear";
                            $qtabejer = $dbo->query($tabejer);

                            foreach ( $qtabejer as $opciones){ ?>

                            <option value=<?php echo $opciones['num']?>><?php echo $opciones['completo']?></option>

                                <?php
                        
                            }
                        ?>
                    </select>

                    <div for="categoria" class="label">Mes</div>                    
                    <select name="mes" id="periodo" class="input" >
                        <option value="" selected class="optionSELECTED">...</option>
                        <option value=01>ENERO</option>
                        <option value=02>FEBRERO</option>
                        <option value=03>MARZO</option>
                        <option value=04>ABRIL</option>
                        <option value=05>MAYO</option>
                        <option value=06>JUNIO</option>
                        <option value=07>JULIO</option>
                        <option value=08>AGOSTO</option>
                        <option value=09>SEPTIEMBRE</option>
                        <option value=10>OCTUBRE</option>
                        <option value=11>NOVIEMBRE</option>
                        <option value=12>DICIEMBRE</option>

                    </select>

                    <div for="categoria" class="label">Unidad</div>

                    <select id="cliente" name="cliente" class="input"  required>  

                        <option value="" selected >...</option>
                        <?php

                            if($adminrol == $radmin ){

                                $tabunid = "SELECT * FROM $clirisk";
                                $qtabunid = $dbo->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            
                            }elseif($adminrol == $radreg){
                                $tabunid = "SELECT * FROM $clirisk WHERE region = '$userRegion'  ";
                                $qtabunid = $dbo->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            }elseif($adminrol == $radger){
                                $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                                $qtabunid = $dbo->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            }elseif($adminrol == $radger OR  $adminrol == $radman ){
                                $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                                $qtabunid = $dbo->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            }
                            
                        ?>
                    </select>

                    <div for="categoria" class="label">Departamento</div>
                    <select name="depto" id="depto" class="input"  >
                        <option value="" selected class="optionSELECTED">...</option>

                        <?php

                            if($adminrol == $radmin){

                                $tabfun = "SELECT * FROM $sresuall ";
                                $qtabfun = $dbo->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                                    <?php
                                }
                            
                            }elseif($adminrol == $radreg){

                                $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                                $qtabfun = $dbo->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                            
                                    <?php
                                }
                                
                            }elseif($adminrol == $radger){

                                $tabfun = "SELECT * FROM $sresuall WHERE userjefe LIKE  '%$userLog%' OR usuario LIKE  '%$userLog%'";
                                $qtabfun = $dbo->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                            
                                    <?php
                                }
                                
                            }elseif($adminrol == $radman ){

                                $tabfun = "SELECT * FROM $sresuall WHERE usuario =  '$userLog' ";
                                $qtabfun = $dbo->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                            
                                    <?php
                                }



                            }

                        ?> 

                    </select>


                    <datalist id="catpersonal">

                        <?php
                        
                        if($adminrol == $radmin){

                            $userstabla = "SELECT * FROM $personal ORDER BY nombreco ASC";

                        }elseif($adminrol == $radreg){

                            $userstabla = "SELECT * FROM $personal WHERE region = '$userAcroregion' ";

                        }elseif($adminrol == $radger){
                                $userstabla = "SELECT * FROM $personal WHERE dirger = '$userLog' ";
                            }else{
                                $userstabla = "SELECT * FROM $personal WHERE userjefe = '$userLog' ";
                            }

                    
                        $pusersselect = $dbo->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['nombreco']?>"><?php echo $opciones['unidad'].'/'.$opciones['nombre'].'/'. $opciones['nombreco']?></option>

                            <?php
                        }

                        ?> 
                    </datalist>   
                    <div for="categoria" class="label">Colaborador</div>         
                    <input type="list" name="trabaj" id="depto" list="catpersonal" class="input"  placeholder="...">
                
        

                    <div for="categoria" class="label">Estándar</div>

                    <select name="macro"  class="input"  >

                        <option value="" selected class="optionSELECTED">...</option>
                        <?php

                            $macrotabla = "SELECT * FROM $macro";
                            $macroselec = $dbo->query($macrotabla);

                            foreach ( $macroselec as $opciones){ ?>

                            <option value="<?php echo $opciones['macro'];?>" class="color"><?php echo $opciones['macro'].'/'.$opciones['nombre'];?></option>

                                <?php
                            }

                        ?> 

                    </select>
                    
                    <div for="categoria" class="label">Enfoques</div>

                    <datalist id="catenfx">
                        <?php
                        $userstabla = "SELECT * FROM $enfxtab";
                        $pusersselect = $dbo->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['enfoque'];?>"><?php echo $opciones['idenfx'].'/'. $opciones['enfoque'];?></option>

                            <?php
                        }

                        ?> 
                    </datalist>

                    <input type="list" name="enfcat" id="enfcat" list="catenfx"  class="input"  placeholder="...">

              

                    <div for="categoria" class="label">Presencia de Falla</div>

                    <select class="input" name="sino">
                        <option value="" selected >...</option>
                        <option value="SI" >SI</option>
                        <option value="NO" >NO</option>
                    </select>

                    <div for="categoria" class="label">Cuasifallas y Eventos</div>

                    <select class="input" name="evento" >
                        <option value="" selected >...</option>
                        <option value="CF" >Cuasi Falla</option>
                        <option value="EA" >Evento Adverso</option>
                        <option value="EC" >Evento Centinela</option>
                        <option value="EM" >Error de Medicación</option>
                        <option value="RAM" >Reacción Adversa a la Medicación</option>
                        <option value="RAT" >Reacción Aversa a la Transfusión</option>
                    </select>

                    <input type="submit" value="FILTRAR" id="savemod" name="buscarfa">

                </form>

            </div>
        
        </section>


        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3">.....</div>


            <div id="backtasky">

                <div id="backacciones">   
                    
                    <div class="namecotasky left"></div>

                  
                     

                        <?php
                            if (isset($_POST['buscarfa'])){

                                $tipo = $_POST['tipo'];


                                $year = $_POST['year'];     
                                $yearfx = $_POST['year'];                            
                                $periodo = $_POST['mes'];
                                $cliente = $_POST['cliente'];
                                $depto = $_POST['depto'];
                                $trabaj = $_POST['trabaj'];
                                
                                $macro = $_POST['macro'];

                                $formmacro = $_POST['macro'];
                                $enfcat = $_POST['enfcat'];
                                $enfoque = $_POST['enfcat'];
                                $sino = $_POST['sino'];
                                $evento = $_POST['evento'];

                        

                        ?>

                      

                        <?php

                            if($tipo == 'CEDULA' ){

                                ?>

                                    <section id="backcabe" >

                                        <div id="nombreformprint">  <?php

                                      
                                            echo 'CATALOGO DE FALLAS POTENCIALES/'.  $macro  .  '/' .  $enfcat ;
                                            ?>

                                        </div>


                                            <!--
                                            <section id="backprint">


                                                <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                                <script>

                                                    function imprimir(){

                                                        var contenedor = document.getElementById('backprint')
                                                        contenedor.style.display = 'none';
                                                        window.print ();
                                                        contenedor.style.display = 'block';
                                                    }

                                                </script>

                                            </section>
                                                -->
                                    </section>

                                    <section id="backTable">

                                    
                                        <table class="table" id="tableCed">


                                                <tr id="columnas">
                                                    <th  id="macro">MACRO</th>
                                                    <th  id="enfoque">ENFOQUE</th>
                                                    <th  id="falla">FALLA POTENCIAL</th>
                                                    <th  id="r">R</th>
                                                    <th  id="s">S</th>
                                                    <th  id="n">N</th>
                                                    <th  id="obs">OBSERVACIONES</th>

                                                </tr>

                                                <?php

                                                $pcat = "SELECT * FROM $tabcatllas WHERE macro LIKE '%$macro%' AND enfoque LIKE '%$enfcat%'";
                                                $printcat = $dbo->query($pcat);

                                                    while ($filareg = $printcat->fetch(PDO::FETCH_ASSOC)) {
                                                    
                                                        echo '<tr> 
                                                        <td class="center" id=macroo>' . $filareg['macro'] . '</td>
                                                        <td class="justify" id=enfoquee>' . $filareg['enfoque'] . '</td>
                                                        <td class="justify" id=fallaa>' . $filareg['falla'] . '</td>
                                                        <td id=rr></td>
                                                        <td id=ss></td>
                                                        <td id=nn></td>
                                                        <td id=obss></td>
                                                
                                                        </tr>';

                                                    } 
                                                    ?>
                                                    
                                                    <?php
                                                
                                                ?>
                                                    
                                        

                                    
                                                            
                                
                                        </table>

                                        

                                    </section>
                    
                        
                              <?php

                            }elseif($tipo == 'DESEMPENO' ){

                                ?>

                                    <section id="backcabe" >

                                        <div id="nombreformprint">  <?php

                 
                                             echo 'DESEMPEÑO DE PROCESOS/'.$year.'/'.$periodo.'/'.$cliente.'/'.$depto.'/'.$trabaj.'/'.  $macro  .  '/' .  $enfoque  .  '/' . $sino.  '/' . $evento;
                                             ?>

                                        </div>


                                        <!--
                                        <section id="backprint">


                                            <input type="image" src="../img/suite/print.png" id="printIcon" onclick="imprimir();">

                                            <script>

                                                function imprimir(){

                                                    var contenedor = document.getElementById('backprint')
                                                    contenedor.style.display = 'none';
                                                    window.print ();
                                                    contenedor.style.display = 'block';
                                                }

                                            </script>

                                        </section>
                                            -->
                                    </section>

                                    <section id="backTable">


                                        <?php
                                            
                                            if($adminrol == $radmin){
                                                $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%'")->fetch());
                                                
                                                $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%'")->fetch());
                                            }elseif($adminrol == $radreg){
                                                $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' ")->fetch());
                                                
                                                $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' ")->fetch());
                                            }elseif($adminrol == $radger){
                                                $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                AND macro LIKE '%$macro%' AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' ")->fetch());
                                                
                                                $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' ")->fetch());
                                            }elseif($adminrol == $radman){
                                                $casosNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$cliente%' AND periodo LIKE '%$periodo%' 
                                                AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%' AND riesgo = 'NO' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' ")->fetch());
                                                
                                                $casosdefalla = current($dbo->query("SELECT COUNT(*) FROM $regllas WHERE ejercicio LIKE '%$year%'  AND unidad LIKE '%$cliente%'AND periodo LIKE '$periodo%' 
                                                AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%'  AND riesgo = 'SI' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' ")->fetch());
                                            }
                                            
                                    
                                    
                                            $totalop = $casosNO + $casosdefalla;

                                            if ($totalop > 0) {
                                                $resul = (($totalop - $casosdefalla) * 100 / $totalop);
                                            }

                                        ?>

                                        <table class="desempResul">

                                            <tr>
                                                <th class="labelEta2">RESULTADOS</th>
                                            </tr>

                                            <tr><td class="center"><?php   echo 'FALLAS: ' . $casosdefalla;?></td></tr>

                                            <tr> <td class="center"><?php   echo 'OPORTUNIDADES: ' . $totalop ;?></td></tr>

                                            <tr>

                                                <td id="mestra" class="center">
                                                    <?php

                                                        $muestraactual = "SELECT * FROM $tabmuestrav";
                                                        $mueact = $dbo->query($muestraactual);

                                                        while ($fila = $mueact->fetch(PDO::FETCH_ASSOC)) {

                                                            $mact = $fila['muestravigente'];                    
                                                        }

                                                        if ($totalop >= $mact) {
                                                            echo 'MUESTRA SUFICIENTE';
                                                        } else {
                                                            echo 'MUESTRA NO SUFICIENTE';
                                                        }
                                                    ?>            

                                                </td>
    
                                            </tr>

                                            <tr>

                                                <td id="resultado" class="center">

                                                    
                                                    <?php
                                                        if ($totalop == 0) {
                                                            echo 'NO EVALUADO';
                                                        } else {
                                                            echo 'RESULTADO: ' . number_format($resul, 2) . '%' . '<br>';
                                                        }
                                                    ?>  

                                                </td>

                                            </tr>
                                            
                                        </table>

                                        <table class="table" id="tableCed">
                                            <tr id="columnas">
                                                
                                                <th id="fallaD">ENFOQUE</th>
                                                <th id="fallaD">CRITERIO OBSERVADO</th>
                                                <th id="existeD">¿EXISTE FALLA?</th>
                                                <th id="nombreD">NOMBRE</th>
                                            </tr>                               
                                    
                                            <?php


                                                    if($adminrol == $radmin){
                                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                        AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND tipo = '$evento' AND riesgo LIKE '%$sino%' ";
                                                        $qtabfall = $dbo->query($tabfall);

                                                    }elseif($adminrol == $radreg){
                                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                        AND macro LIKE '%$macro%'  AND dep LIKE '%$depto%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND region LIKE '%$userAcroregion%' AND tipo = '$evento' AND riesgo LIKE '%$sino%'  ";
                                                        $qtabfall = $dbo->query($tabfall);

                                                    }elseif($adminrol == $radger){
                                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%'
                                                        AND macro LIKE '%$macro%' AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo = '$evento' AND riesgo LIKE '%$sino%'  ";
                                                        $qtabfall = $dbo->query($tabfall);

                                                    }elseif($adminrol == $radman){
                                                        $tabfall = "SELECT * FROM $regllas WHERE  ejercicio LIKE '%$year%' AND periodo LIKE '%$periodo%' AND unidad LIKE '%$cliente%' 
                                                        AND macro LIKE '%$macro%'  AND trabajador LIKE '%$trabaj%' AND idenfx LIKE '%$enfoque%' AND userjefe = '$userLog' OR dep = '$userLog' AND tipo = '$evento' AND riesgo LIKE '%$sino%'  ";
                                                        $qtabfall = $dbo->query($tabfall);

                                                    }
                                                    while ($fila = $qtabfall->fetch(PDO::FETCH_ASSOC)) {
                                                        $trabajadorNAME = $fila['trabajador']; 
                                                        $idenfx = $fila['idenfx']; 


                                                        $fallafall = $fila['falla']; 
                                                        $riesg = $fila['riesgo']; 


                                                        $bdlyenfoq= "SELECT * FROM $enfxtab WHERE  idenfx = '$idenfx'  ";
                                                        $qbdlyenfoq = $dbo->query($bdlyenfoq);

                                                        while ($fila = $qbdlyenfoq->fetch(PDO::FETCH_ASSOC)) {
                                                            $enfoqueNAME = $fila['enfoque']; 

                                                        }


                                                            ?>
                                                                <tr>

                                                                    <td class="left"><?php echo $enfoqueNAME;  ?></td>  
                                                                    <td class="left"><?php echo $fallafall;  ?></td>                                              
                                                                    <td class="center"><?php echo $riesg;  ?></td>
                                                                    <td class="left"><?php echo $trabajadorNAME;  ?></td>      
                                                                
                                                                </tr>                                       
                                                                    
                                                            <?php

                                                    }


                                            ?>
                                                
                                        </table>


                                    </section>

                                <?php
                            }

                        ?>
                
                        <?php

                        }
                        ?>
                </div>

            </div>

        </section>

                
                
     
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>