<?php
session_start();
require_once '../../varSQL/bd.php';
require_once 'varSQL/db_risk.php';
require_once '../../varSQL/var.php';
if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../index.php");
}
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];




?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez risk</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/indexrisk.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/indexrisk.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">
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

            <img  src="img/suite/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="indexRisk.php" id="slognav1">

                <input type="submit" class="submit" id="">

            </form>

            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img  src="img/suite/ced.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="CED/ced.php" id="slognav2">

                <input type="submit" class="submit" id="lognav2" >

            </form>

        </div>


        <div class="bakBoton">

            <img  src="img/suite/risk.svg" class="lognav">
            <div id="txt3" class="txttx"><strong>RIESGOS</strong></div>

            
            <form action="RISK/risk.php" id="slognav3">

                <input type="submit" class="submit" id="lognav3">

            </form>

        </div>



        <div class="bakBoton">

            <img  src="img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="CONS/cons.php" id="slognav4">

                <input type="submit" class="submit" id="lognav4">

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../../img/ICONOS/printok1.png" class="lognav">
            <div id="txt5" class="txttx"><strong>IMPRESIONES</strong></div>


            <form action="PRINT/printy.php" id="slognav5">

                <input type="submit" class="submit" id="lognav5">

            </form>

        </div>


        <form action="../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

     

        <div id="backUser">

            <img id="lognav0" src="../../img/apps/apps/ezrisk.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
    
    <div id="backall"></div>
    <modseg  id="modprosp">
   
        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">FILTROS</div>


                <form class="tabcpo" method="POST" action = "indexRisk.php" >
                
                    
                   
                    <div for="categoria" class="label">Año</div>
                    <select id="year" name="year" class="input"  required> 
                        <option value="" selected >...</option>
                        <?php

                            $tabejer = "SELECT * FROM $tabyear";
                            $qtabejer = $db_all->query($tabejer);

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
                        <option value="07">JULIO</option>
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
                                $qtabunid = $db_users->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            
                            }elseif($adminrol == $radreg){
                                $tabunid = "SELECT * FROM $clirisk WHERE region = '$userRegion'  ";
                                $qtabunid = $db_users->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            }elseif($adminrol == $radger){
                                $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userAcronu'  ";
                                $qtabunid = $db_users->query($tabunid);

                                foreach ( $qtabunid as $opciones){ ?>

                                <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                    <?php
                            
                                }
                            }elseif($adminrol == $radman ){
                                $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userAcronu'  ";
                                $qtabunid = $db_users->query($tabunid);

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
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                                    <?php
                                }
                            
                            }elseif($adminrol == $radreg){

                                $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                            
                                    <?php
                                }
                                
                            }elseif($adminrol == $radger){

                                $tabfun = "SELECT * FROM $sresuall WHERE userjefe LIKE  '%$userLog%' OR usuario LIKE  '%$userLog%'";
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                            
                                    <?php
                                }
                                
                            }elseif($adminrol == $radman ){

                                $tabfun = "SELECT * FROM $sresuall WHERE usuario =  '$userLog' ";
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                            
                                    <?php
                                }



                            }

                        ?> 

                    </select>

        


                    <select hidden name="macro"  class="input"  >

                        <option value="" selected class="optionSELECTED">...</option>
                        <?php

                            $macrotabla = "SELECT * FROM $macro";
                            $macroselec = $db_all->query($macrotabla);

                            foreach ( $macroselec as $opciones){ ?>

                            <option value="<?php echo $opciones['macro'];?>" class="color"><?php echo $opciones['macro'].'/'.$opciones['nombre'];?></option>

                                <?php
                            }

                        ?> 

                    </select>
                    


                    <input hidden type="list" name="enfcat" id="enfcat" list="catenfx"  class="input"  placeholder="...">

            

                    <input type="submit" value="FILTRAR" id="savemod" name="buscarfa">

                </form>

            </div>
            
       
        </section>

        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3">DASHBOARD</div>

            <div id="backtab">
                <img id="bottab" src="img/suite/tab2.png" class="bottab">
                <div class="lineAC" id="lineAC3"></div>
            </div>

            <div id="backbottask">
                <img id="bottask" src="img/suite/tareas2.png" class="bottask">
                <div class="lineAC" id="lineAC1"></div>
            </div>
    

            <div id="backbotcomen">
                <img id="botcomen" src="img/suite/comentarios2.png" class="botcomen">
                <div class="lineAC" id="lineAC2"></div>
            </div>

        

            <div id="backtasky">

                <div id="backaccionesAct">   
                    
                    <div class="namecotasky0 left">Actividades Nuevas</div>

                    <datalist id="cattrab">

                        <?php

                            if($adminrol == $radmin){

                                $tavTasY = "SELECT * FROM $sresuall ";
                            

                            }elseif($adminrol == $radreg){

                                $tavTasY = "SELECT * FROM $sresuall ";
                            
                                
                            }elseif($adminrol == $radger){

                                $tavTasY = "SELECT * FROM $sresuall WHERE acronu  = '$userUnidadAcronu' OR acronu = '$userAcroregion' OR acronu = 'FIFTY'  ";
                            
                            }elseif($adminrol == $radman ){

                                $tavTasY = "SELECT * FROM $sresuall WHERE acronu  = '$userUnidadAcronu' OR acronu = '$userAcroregion' OR acronu = 'FIFTY'  ";
                            


                            }


                            $tavTas = $db_users->query($tavTasY);

                            foreach ($tavTas as $opciones){ ?>

                            <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                <?php
                            }


                        ?> 
                    </datalist>



                    <form method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">
                    
                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Responsable de Tarea</th>
                                <th class="label colstav3">Fecha Prog</th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>

                            <tr>
                            
                            
                                
                                <td><input type="list" list="cattrab" class="date" name="resptask"></td>
                            
                                <td>
                                    <input type="date" class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    
                                
                                </td>

                            </tr>

                            <tr>
                                <th class="label colstav2">Tarea</th>
                                <th></th>
                                <th></th>
                            </tr>
                            
                            <tr>
                                <td colspan="2">  <textarea class="testareaobs" spellcheck="false" name="tarea"></textarea></td>
                            
                            
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeTask"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left">Bitácora de Actividades</div>
                    
                        <div id="backtabTask">


                        
                            
                            

                                <?php

                                if($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $tabtaskY WHERE  activo = 'SI' AND app = 'risk'  ";
                                    $qbdpros = $db_task->query($bdpros);
                                }elseif($adminrol== $radreg ){
                                    $bdpros= "SELECT * FROM $tabtaskY WHERE region LIKE '%$userAcroregion%' AND activo = 'SI'  AND usuarioregistra = '$userLog' OR usertask = '$userLog' AND app = 'risk'  ";
                                    $qbdpros = $db_task->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $tabtaskY WHERE usertask LIKE '%$userLog%' AND activo = 'SI' AND usuarioregistra = '$userLog' OR usertask = '$userLog' AND app = 'risk'  ";
                                    $qbdpros = $db_task->query($bdpros);
                                }

                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                                        
                               
                                    $tareaH =$filpro['tarea'];
                                    $fechaproH =$filpro['fechaprogramada'];
                                    $fechacuH =$filpro['fechacumple'];

                                    $estatusH =$filpro['estatus'];


                                    $obsH =$filpro['observaciones'];



                                    $PuserespH =$filpro['usertask'];


                                    
                                    $valyuser = "SELECT * FROM $sresuall WHERE  usuario = '$PuserespH'  ";
                                    $qvalyuser = $db_users->query($valyuser);
                                    
                                    while ($fila = $qvalyuser->fetch(PDO::FETCH_ASSOC)) {
                                
                                        $userkaskLY = $fila['nombre'];  

                                    }

                                    ?>

                                        <form id="formHist" method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                                            <table class="tableHIST">

                                                <tr>

                                                    <th class="label colstavh1">Id</th>
                                                    <th class="label colstavh2 " colspan="6" >Tarea</th>
                                                
                                                </tr>


                                                <tr>
                                                    <td> <input type="text" class="activ" name="idtask" value="<?php echo $PidH;?>" readonly>  </td>
                                                    <td colspan="6" ><input type="text" class="printask" value="<?php echo $tareaH; ?>" ></td>
                                                </tr>

                                                <tr>
                                                    <th class="colstavh1" >Programado</th>
                                                    <th class=" center" colspan="3">Responsable de Tarea</th>
                                                
                                                    <th class="colstavh7" ></th>
                                                    <th class="colstavh2" >Estatus</th>
                                                    <th class="colstavh3" >Acción</th>
                                                    
                                                
                                                </tr>




                                                <tr>
                                            
                                                    <td class="center"><input type="text" class="activ" value="<?php echo $fechaproH;?>" readonly></td>
                                                    <td class="center" colspan="3"><input type="text" class="activRexp" value="<?php echo $userkaskLY;?>" readonly></td>
                                                
                                                    <td class="colstavh1" ></td>
                                                    
                                                    <td>
                                                        <select  class="enfoqueaccH" name="estatus">
                                                            <option value="" selected><?php echo $estatusH; ?></option>
                                                            <option value="">Cambiar Estatus a...</option>
                                                            <option></option>
                                                    
                                                            <option value="EN CURSO" >EN CURSO</option>
                                                            <option value="CUMPLIDA" >CUMPLIDA</option>
                                                            <option value="CANCELADA" >CANCELADA</option>
                                                            <option value="REPROGRAMADA" >REPROGRAMADA</option>
                                                    
                                                        </select>
                                                    </td>
                                                
                                                    <td><input type="submit" value="CAMBIAR" id="editar" name="update"></td>
                                                    
                                                </tr>

                                                <tr>
                                                    <td class="colstavh1" colspan="7" >OBSERVACIONES</td>
                                                
                                                </tr>

                                                <tr>
                                                    <td colspan="7"><textarea class="textareaH" spellcheck="false" name="obs"><?php echo $obsH;?></textarea></td>
                                                </tr>

                        

                                            </table>

                                        </form>

                                        <div class="liendiv"></div>
                                
                                    <?php
                                
                                }


                                ?>

                            
                        


                            
                        </div>

                



                </div>

            </div>

            <div id="backcommen">

                <div id="backaccionesAct">
                    <div class="namecotasky0 left">Comentario</div>


                    <form method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">
                      
                        <table class="tableComent">
                            <tr>
                                <th class="label colstav1C">Fecha de Registro</th>
                                <th class="label colstav2C" colspan="2">Comentario</th>
                                <th class="label colstav3C"></th>
                            
                            </tr>

                            <tr>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="3">
                                
                                    <textarea class="testareaobsC" name="comment" spellcheck="false" ></textarea>
                                </td>
                            

                            </tr>
                            
                            <tr>
                            
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>

                        </table>






                    </form>
                    
                </div>

                
                <div id="backahistorias">

                    <div class="namecotasky left">Bitácora de Comentarios</div>
                    
                        <div id="backtabTask">


                                <?php

                                if($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $tasky_hist_coment WHERE activo = '1' AND app = 'risk'  ";
                                    $qbdpros = $db_task->query($bdpros);
                                }elseif($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $tasky_hist_coment WHERE region LIKE '%$userAcroregion%'AND useralta = '$userLog' AND activo = '1' AND app = 'risk'  ";
                                    $qbdpros = $db_task->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $tasky_hist_coment WHERE  useralta = '$userLog'  AND activo = '1' AND app = 'risk'  ";
                                    $qbdpros = $db_task->query($bdpros);
                                }

                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                    $fechacoment =$filpro['fechacoment'];                       
                                    $coment =$filpro['coment'];
                                


                                    ?>

                                        <form id="formHist" method="POST" action="saveTASK.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                                            <table class="tableHIST">

                                            <tr>
                                                <th class="colstavh1"></th>
                                                <th class="colstavh2"></th>
                                                <th class="colstavh3"></th>
                                                <th class="colstavh4"></th>
                                                <th class="colstavh5"></th>
                                                <th class="colstavh6"></th>
                                                <th class="colstavh7"></th>
                                            </tr>

                                            <tr>
                                                <td colspan="7"><textarea class="textareaC" spellcheck="false"><?php echo $coment;?></textarea></td>
                                            </tr>


                                        
                                            <tr>
                                                <td hidden><input type="text" value="<?php echo $PidH;?>" name="idcoment">   </td>
                                                <td class="center"><?php echo $fechacoment; ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                                <td>
                                                    <select  class="enfoqueaccH" name="estatus">
                                                        <option value="" selected>Estatus...</option>
                                                
                                                        <option value="ELIMINAR" >ELIMINAR</option>
                                                
                                                    </select>
                                                </td>
                                            
                                                <td><input type="submit" value="CAMBIAR" id="editar" name="delco"></td>
                                            </tr>


                        

                                            </table>

                                        </form>

                                        <div class="liendiv"></div>
                                
                                    <?php
                                
                                }


                                ?>

                            
                        


                            
                        </div>
                    
                </div>


            </div>

            <div id="backRisk">

                <div id="backacciones">   
                    
                    <div class="namecotasky left"></div>


                    
                     <?php

                        if (isset($_POST['buscarfa'])){

                            $year = $_POST['year'];
                            $periodo = $_POST['mes'];
                            $unidadcli = $_POST['cliente'];
                            $depto = $_POST['depto'];
                            $macro = $_POST['macro'];
                            $enfcat = $_POST['enfcat'];
                    
                            require_once 'calculos.php';

                            ?>

                                    <!--DESEMPEÑO GENERAL-->
                                <div id="resultadoGENERAL" class="backtab">

                                    <div class="titleSection2"><h5>Desempeño</h5></div>
                               
                                    <div id="backAgj">

                                        <div id="backAguja">
                                
                                            <?php 

                                                if($adminrol == $radmin){
                                                    $calcaallNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND dep LIKE '%$depto%' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%'")->fetch());
                                                    $calcaallSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'SI' AND dep LIKE '%$depto%' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%'")->fetch());
                                                }elseif($adminrol == $radreg){

                                                    $calcaallNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%' AND region LIKE '%$userAcroregion%' ")->fetch());
                                                    $calcaallSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'SI' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%' AND region LIKE '%$userAcroregion%' ")->fetch());

                                                }elseif($adminrol == $radger){
                                                    $calcaallNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userAcronu' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%' AND dirger LIKE '%$userLog%' AND dep LIKE '%$depto%' ")->fetch());
                                                    $calcaallSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad = '$userAcronu' AND riesgo = 'SI' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%' AND dirger LIKE '%$userLog%' AND dep LIKE '%$depto%' ")->fetch());
                                                }elseif($adminrol == $radman OR $adminrol == $radsup){
                                                    $calcaallNO = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'NO' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%'   AND userjefe LIKE '%$userLog%'   OR dep LIKE '%$userLog%' ")->fetch());
                                                    $calcaallSI = current($dbo->query("SELECT COUNT(*) FROM $regllas  WHERE ejercicio LIKE '%$year%' AND unidad LIKE '%$unidadcli%' AND riesgo = 'SI' AND periodo LIKE '%$periodo%' AND macro LIKE '%$macro%' AND userjefe LIKE '%$userLog%'   OR dep LIKE '%$userLog%'  ")->fetch());
                                                
                                                }
                                            

                                                $calcalcOP = $calcaallNO+$calcaallSI;
                                                if($calcalcOP >0){
                                                    $calcalcDESMP =  (($calcalcOP-$calcaallSI)*100)/$calcalcOP;
                                                }
                                               // echo $calcaallNO;
                                                if(empty($calcalcOP) ){
                                                ?><img src="img/ICONOS/aguja.svg" id="aguja" class="agujAvin"><?php 
                                                ?><div class="destotal" ><?php echo 'GLOBAL: NE';?></div><?php
                                                }else{

                                            
                                                    if($calcalcDESMP >= 0 & $calcalcDESMP <5){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj015"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 5 & $calcalcDESMP <15){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj015"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 15 & $calcalcDESMP <25){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj1525"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 25 & $calcalcDESMP <35){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj2535"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 35 & $calcalcDESMP <45){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj3545"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 45 & $calcalcDESMP <55){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj4555"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 55 & $calcalcDESMP <65){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj5565"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 65 & $calcalcDESMP <75){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj6575"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 75 & $calcalcDESMP <85){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj7585"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 85 & $calcalcDESMP <95){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj8595"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }elseif($calcalcDESMP >= 95){
                                                        ?><img src="img/ICONOS/aguja.svg" id="aguja" class="aguj95100"><?php 
                                                        ?><div class="destotal" ><?php echo number_format($calcalcDESMP, 2) . '%';?></div><?php
                                                    }
                                                
                                                } ?>
                                        
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                    <!--ESTANDARES-->
                                <div id="NMXyESTANDARES">

                                    <div class="namecotasky"><h5>ESTANDARES</h5></div>

                                    <table id="nmxestandares1" class="tabres1">
                                        <tr>
                                            <td><img src="img/estandar/misp.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst" value="<?php echo $porcetxt_MISP?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/mmu.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_MMU?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/pci.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_PCI?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/FMS.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_FMS?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/sqe.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_SQE?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/qps.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_QPS?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/gld.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_GLD?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/acc.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_ACC?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/pfr.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_PFR?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/aop.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_AOP?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/sad.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_SAD?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/cop.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_COP?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/asc.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_ASC?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/pfe.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_PFE?>"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/estandar/mci.png"  class="imaestandar"></td>
                                            <td class ="resEst"><input type="text" class="porceEst"  value="<?php echo $porcetxt_MCI?>"></td>
                                        </tr>
                                    </table> 

                              

                                </div>

                                  <!--MESES-->

                                <div id="MESES" class="backtab">
                                    <div class="namecotasky"><h5>MESES</h5></div>
                                 
                                        <?php
                                        
                                           require_once 'meses.php'; 
                                            ?>

                                
                                </div>

                                <!--TIPO DE PROCESOS-->

                                <div id="TIPOPROCESOS">
                                  
                                    <div id="backpro1" class="backpro">


                                        <table id="servbarrasDash">

                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>OP</th>
                                                <th>FX</th>
                                                <th></th>
                                            </tr>

                                            <tr id="CLAVES">
                                                <td class="colclic"><img id="backmod1" src="img/suite/clic.png" class="loggclic"></td>
                                                <td class="colname" >CLAVES</td>
                                                <td class="colallop" ><?php echo $CLAVE_ALL; ?></td>
                                                <td class="colno" ><?php echo $CALVEFX; ?></td>
                                                <td class="colbarr">

                                                    <?php

                                                        if($porceCLAVE >= 0 & $porceCLAVE <1){
                                                        
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCLAVE >= 1 & $porceCLAVE <5){

                                                            ?>

                                                                <div  class="aguj3s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceCLAVE >= 5 & $porceCLAVE <15){

                                                            ?>

                                                                <div  class="aguj10s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceCLAVE >= 15 & $porceCLAVE <25){

                                                            ?>

                                                                <div  class="aguj20s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCLAVE >= 25 & $porceCLAVE <35){

                                                            ?>

                                                            <div  class="aguj30s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCLAVE >= 35 & $porceCLAVE <45){

                                                            ?>

                                                                <div  class="aguj40s seBlack varGuno"></div>

                                                            <?php

                                                        
                                                        }elseif($porceCLAVE >= 45 & $porceCLAVE <55){

                                                            ?>

                                                                <div  class="aguj50s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceCLAVE >= 55 & $porceCLAVE <65){

                                                            ?>

                                                                <div  class="aguj60s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCLAVE >= 65 & $porceCLAVE <75){


                                                            ?>

                                                                <div  class="aguj70s seBlack varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCLAVE >= 75 & $porceCLAVE <85){


                                                            ?>

                                                                <div  class="aguj80s sePINKrojo varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCLAVE >= 85 & $porceCLAVE <95){

                                                            ?>

                                                                <div  class="aguj90s sePINK varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCLAVE >= 95 & $porceCLAVE <98){

                                                            ?>

                                                                <div  class="aguj97s seGREEN varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCLAVE >= 98){

                                                            ?>

                                                                <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                            <?php
                                                        }
                                                    ?>

                                                </td>
                                            </tr>

                                            <tr id="METAS">
                                                <td class="colclic"><img id="backmod2" src="img/suite/clic.png" class="loggclic"></td>
                                                <td class="colname" >MISP</td>
                                                <td class="colallop" ><?php echo $MISP_ALL; ?></td>
                                                <td class="colno" ><?php echo $MISPFX; ?></td>

                                                <td class="colbarr">

                                                        <?php
                                                        if($MISP_ALL == 0){
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php
                                                        }elseif($porce_MISP >= 0 & $porce_MISP <1){
                                                        
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_MISP >= 1 & $porce_MISP <5){

                                                            ?>

                                                                <div  class="aguj3s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porce_MISP >= 5 & $porce_MISP <15){

                                                            ?>

                                                                <div  class="aguj10s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porce_MISP >= 15 & $porce_MISP <25){

                                                            ?>

                                                                <div  class="aguj20s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_MISP >= 25 & $porce_MISP <35){

                                                            ?>

                                                            <div  class="aguj30s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_MISP >= 35 & $porce_MISP <45){

                                                            ?>

                                                                <div  class="aguj40s seBlack varGuno"></div>

                                                            <?php

                                                        
                                                        }elseif($porce_MISP >= 45 & $porce_MISP <55){

                                                            ?>

                                                                <div  class="aguj50s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porce_MISP >= 55 & $porce_MISP <65){

                                                            ?>

                                                                <div  class="aguj60s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_MISP >= 65 & $porce_MISP <75){


                                                            ?>

                                                                <div  class="aguj70s seBlack varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_MISP >= 75 & $porce_MISP <85){


                                                            ?>

                                                                <div  class="aguj80s sePINKrojo varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_MISP >= 85 & $porce_MISP <95){

                                                            ?>

                                                                <div  class="aguj90s sePINK varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_MISP >= 95 & $porce_MISP <98){

                                                            ?>

                                                                <div  class="aguj97s seGREEN varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_MISP >= 98){

                                                            ?>

                                                                <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                            <?php
                                                        }
                                                    ?>

                                                </td>
                                            </tr>


                                            <tr id="CRITICOS">
                                                <td class="colclic"><img id="backmod3" src="img/suite/clic.png" class="loggclic"></td>
                                                <td class="colname">CRITICOS</td>
                                                <td class="colallop" ><?php echo $CRITICOS_ALL; ?></td>
                                                <td class="colno" ><?php echo $CRITICOSFX; ?></td>
                                                <td class="colbarr">

                                                        <?php
                                                        if($CRITICOS_ALL == 0){
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php
                                                        }elseif($porceCRITICOS >= 0 & $porceCRITICOS <1){
                                                        
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCRITICOS >= 1 & $porceCRITICOS <5){

                                                            ?>

                                                                <div  class="aguj3s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceCRITICOS >= 5 & $porceCRITICOS <15){

                                                            ?>

                                                                <div  class="aguj10s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceCRITICOS >= 15 & $porceCRITICOS <25){

                                                            ?>

                                                                <div  class="aguj20s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCRITICOS >= 25 & $porceCRITICOS <35){

                                                            ?>

                                                            <div  class="aguj30s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCRITICOS >= 35 & $porceCRITICOS <45){

                                                            ?>

                                                                <div  class="aguj40s seBlack varGuno"></div>

                                                            <?php

                                                        
                                                        }elseif($porceCRITICOS >= 45 & $porceCRITICOS <55){

                                                            ?>

                                                                <div  class="aguj50s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceCRITICOS >= 55 & $porceCRITICOS <65){

                                                            ?>

                                                                <div  class="aguj60s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceCRITICOS >= 65 & $porceCRITICOS <75){


                                                            ?>

                                                                <div  class="aguj70s seBlack varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCRITICOS >= 75 & $porceCRITICOS <85){


                                                            ?>

                                                                <div  class="aguj80s sePINKrojo varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCRITICOS >= 85 & $porceCRITICOS <95){

                                                            ?>

                                                                <div  class="aguj90s sePINK varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCRITICOS >= 95 & $porceCRITICOS <98){

                                                            ?>

                                                                <div  class="aguj97s seGREEN varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceCRITICOS >= 98){

                                                            ?>

                                                                <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                            <?php
                                                        }
                                                    ?>

                                                </td>
                                            </tr>

                                            <tr id="GESTION">
                                                <td class="colclic"><img id="backmod4" src="img/suite/clic.png" class="loggclic"></td>
                                                <td class="colname" >GESTION</td>
                                                <td class="colallop" ><?php echo $GESTION_ALL; ?></td>
                                                <td class="colno" ><?php echo $GESTIONFX; ?></td>
                                                <td class="colbarr">

                                                        <?php
                                                        if($GESTION_ALL == 0){
                                                            ?>

                                                            <div  class="aguj0s seBlack varGuno"></div>

                                                        <?php
                                                        }elseif($porceGESTION >= 0 & $porceGESTION <1){
                                                        
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceGESTION >= 1 & $porceGESTION <5){

                                                            ?>

                                                                <div  class="aguj3s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceGESTION >= 5 & $porceGESTION <15){

                                                            ?>

                                                                <div  class="aguj10s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceGESTION >= 15 & $porceGESTION <25){

                                                            ?>

                                                                <div  class="aguj20s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceGESTION >= 25 & $porceGESTION <35){

                                                            ?>

                                                            <div  class="aguj30s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceGESTION >= 35 & $porceGESTION <45){

                                                            ?>

                                                                <div  class="aguj40s seBlack varGuno"></div>

                                                            <?php

                                                        
                                                        }elseif($porceGESTION >= 45 & $porceGESTION <55){

                                                            ?>

                                                                <div  class="aguj50s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porceGESTION >= 55 & $porceGESTION <65){

                                                            ?>

                                                                <div  class="aguj60s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porceGESTION >= 65 & $porceGESTION <75){


                                                            ?>

                                                                <div  class="aguj70s seBlack varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceGESTION >= 75 & $porceGESTION <85){


                                                            ?>

                                                                <div  class="aguj80s sePINKrojo varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceGESTION >= 85 & $porceGESTION <95){

                                                            ?>

                                                                <div  class="aguj90s sePINK varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceGESTION >= 95 & $porceGESTION <98){

                                                            ?>

                                                                <div  class="aguj97s seGREEN varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porceGESTION >= 98){

                                                            ?>

                                                                <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                            <?php
                                                        }
                                                    ?>

                                                </td>
                                            </tr>

                                            <tr id="CALIDAD">
                                                <td class="colclic"><img id="backmod5" src="img/suite/clic.png" class="loggclic"></td>
                                                <td class="colname" >CALIDAD</td>
                                                <td class="colallop" ><?php echo $QPS_ALL; ?></td>
                                                <td class="colno" ><?php echo $QPSFX; ?></td>


                                                <td class="colbarr">

                                                        <?php
                                                        if($QPS_ALL == 0){
                                                            ?>

                                                            <div  class="aguj0s seBlack varGuno"></div>

                                                        <?php
                                                        }elseif($porce_QPS >= 0 & $porce_QPS <1){
                                                        
                                                            ?>

                                                                <div  class="aguj0s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_QPS >= 1 & $porce_QPS <5){

                                                            ?>

                                                                <div  class="aguj3s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porce_QPS >= 5 & $porce_QPS <15){

                                                            ?>

                                                                <div  class="aguj10s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porce_QPS >= 15 & $porce_QPS <25){

                                                            ?>

                                                                <div  class="aguj20s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_QPS >= 25 & $porce_QPS <35){

                                                            ?>

                                                            <div  class="aguj30s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_QPS >= 35 & $porce_QPS <45){

                                                            ?>

                                                                <div  class="aguj40s seBlack varGuno"></div>

                                                            <?php

                                                        
                                                        }elseif($porce_QPS >= 45 & $porce_QPS <55){

                                                            ?>

                                                                <div  class="aguj50s seBlack varGuno"></div>

                                                            <?php


                                                        }elseif($porce_QPS >= 55 & $porce_QPS <65){

                                                            ?>

                                                                <div  class="aguj60s seBlack varGuno"></div>

                                                            <?php

                                                        }elseif($porce_QPS >= 65 & $porce_QPS <75){


                                                            ?>

                                                                <div  class="aguj70s seBlack varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_QPS >= 75 & $porce_QPS <85){


                                                            ?>

                                                                <div  class="aguj80s sePINKrojo varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_QPS >= 85 & $porce_QPS <95){

                                                            ?>

                                                                <div  class="aguj90s sePINK varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_QPS >= 95 & $porce_QPS <98){

                                                            ?>

                                                                <div  class="aguj97s seGREEN varGuno"></div>

                                                            <?php
                                                        
                                                        }elseif($porce_QPS >= 98){

                                                            ?>

                                                                <div  class="aguj98s varGuno seBLUE" seBlack varGuno"></div>

                                                            <?php
                                                        }
                                                    ?>

                                                </td>
                                            </tr>
                                            

                                        </table>

                                    </div>



                                    <!--
                                

                                    
                                    </div>
                                   
                              
                                    

                                       


                                        <div id="backmod4" class="backmod">

                                            <div id="TitEse"  class="tittipro">INSUMOS+DISPOSITIVOS+SOPORTE</div>
                                            <div class="backcircle"></div>

                                            <?php 
                                            
                                        
                                                if($SOPORTE_ALL == 0){
                                                    ?>
                                                    <div></div>
                                                    <div class="global5">
                                                        <div class="allglbal">
                                                            <?php echo 'NE';?>
                                                        </div>
                                                        
                                                    </div>
                                            
                                                <?php
                                                }elseif($porce_QPS  >= 0 & $porce_QPS <5){

                                                    ?>
                                                        <div class="semafmod5">
                                                        </div>
                                                        <div class="global5">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porceSOPORTE,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    <?php

                                                }elseif($porce_QPS  >= 5 & $porce_QPS <26){

                                                    ?>
                                                        <div class="semafmod25">
                                                        </div>
                                                        <div class="global25">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porceSOPORTE,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    <?php

                                                }elseif($porce_QPS  >= 26 & $porce_QPS <56){

                                                    ?>
                                                        <div class="semafmod55"></div>
                                                        <div class="global55">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porceSOPORTE,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    <?php

                                                }elseif($porce_QPS >= 56 & $porce_QPS <76){

                                                    ?>
                                                        <div class="semafmod75">
                                                            <div class="semafmod75b"></div>
                                                        </div>
                                                        <div class="global75">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porceSOPORTE,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                    <?php

                                                }elseif($porce_QPS >= 76 & $porce_QPS <98){

                                                    ?>
                                                        <div class="semafmod95">
                                                        </div>
                                                        <div class="semafmod95b">
                                                        </div>
                                                        <div class="global95">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porceSOPORTE,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                    <?php

                                                }elseif($porce_QPS >= 98){

                                                    ?>
                                                        <div class="semafmod100"></div>
                                                        <div class="global100">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porceSOPORTE,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                    <?php

                                                }
                                            ?>


                                        </div>

                                    </div>

                                

                                    
                                      

                                        <div id="backmod6" class="backmod">

                                            <div id="TitEse"  class="tittipro">CALIDAD</div>
                                            <div class="backcircle"></div>

                                            <?php 
                                            
                                        
                                                if($QPS_ALL == 0){
                                                    ?>
                                                    <div></div>
                                                    <div class="global5">
                                                        <div class="allglbal">
                                                            <?php echo 'NE';?>
                                                        </div>
                                                        
                                                    </div>
                                            
                                                <?php
                                                }elseif($porce_QPS  >= 0 & $porce_QPS <5){

                                                    ?>
                                                        <div class="semafmod5">
                                                        </div>
                                                        <div class="global5">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porce_QPS,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    <?php

                                                }elseif($porce_QPS  >= 5 & $porce_QPS <26){

                                                    ?>
                                                        <div class="semafmod25">
                                                        </div>
                                                        <div class="global25">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porce_QPS,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    <?php

                                                }elseif($porce_QPS  >= 26 & $porce_QPS <56){

                                                    ?>
                                                        <div class="semafmod55"></div>
                                                        <div class="global55">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porce_QPS,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    <?php

                                                }elseif($porce_QPS >= 56 & $porce_QPS <76){

                                                    ?>
                                                        <div class="semafmod75">
                                                            <div class="semafmod75b"></div>
                                                        </div>
                                                        <div class="global75">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porce_QPS,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                    <?php

                                                }elseif($porce_QPS >= 76 & $porce_QPS <98){

                                                    ?>
                                                        <div class="semafmod95">
                                                        </div>
                                                        <div class="semafmod95b">
                                                        </div>
                                                        <div class="global95">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porce_QPS,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                    <?php

                                                }elseif($porce_QPS >= 98){

                                                    ?>
                                                        <div class="semafmod100"></div>
                                                        <div class="global100">
                                                            <div class="allglbal">
                                                                <?php echo number_format($porce_QPS,2) . '%';?>
                                                            </div>
                                                            
                                                        </div>
                                                    <?php

                                                }
                                            ?>


                                        </div>

                                 
                                            -->

                                </div>  

                                <!--ENFOQUESE-->
                                <div id="ENFOQUES">
                                    
                                            <!--GRAFICOS-->
                                    <div id="backClave" class="backtab">

                                        <div id="grafMisionales">
                                            <div class="namecotasky"><h5>Procesos Clave</h5></div>

                                            
                                            <div class="lineblue"></div>

                                            <?php
                                                require_once 'procesoClave.php';
                                            ?>
                                        </div>
                                    </div>

                                    <div id="backMetas" class="backtab">

                                        <div id="grafMisionales">
                                            <div class="namecotasky"><h5>Metas Internacionales</h5></div>
                                            <div class="lineblue"></div>

                                            <?php
                                                require_once 'procesoEsenciales.php';
                                            ?>
                                        </div>
                                    </div>

                                    <div id="backCrit" class="backtab">

                                        <div id="grafMisionales">
                                            <div class="namecotasky"><h5>Procesos Críticos</h5></div>
                                            <div class="lineblue"></div>
                                            <?php
                                                require_once 'procesoCriticos.php';
                                            ?>
                                        </div>
                                    </div>

                                    <div id="backSop" class="backtab">

                                        <div id="grafMisionales">
                                          
                                            <div class="namecotasky"><h5>Procesos de Soporte</h5></div>

                                            <?php
                                              //  require_once 'procesoSoporte.php';
                                            ?>
                                        </div>
                                    </div>

                                    <div id="backGestion" class="backtab">

                                        <div id="grafMisionales">
                                            <div class="namecotasky"><h5>Procesos de Gestión</h5></div>
                                            <?php
                                                require_once 'procesoGestion.php';
                                            ?>
                                        </div>
                                    </div>

                                    <div id="backCalid" class="backtab">

                                        <div id="grafMisionales">
                                            <div class="namecotasky"><h5>Procesos de Calidad</h5></div>

                                            <?php
                                                require_once 'procesoCalidad.php';
                                            ?>
                                        </div>
                                    </div>
                                </div>


                                <div id="filtrosbajo"><?php echo  $year.'/'.$periodo.'/'.$unidadcli.'/'.$depto.'/'.$macro.'/'.$enfcat;?></div>
              
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