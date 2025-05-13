<?php
session_start();
require_once '../../../varSQL/bd.php';
require_once '../varSQL/db_risk.php';
require_once '../../../varSQL/var.php';
if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../../index.php");
}
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];

$mes = date('m');



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez risk</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/ced.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/ced.css">
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

            <img  src="../img/suite/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="../indexRisk.php" id="slognav1">

                <input type="submit" class="submit" id="lognav1">

            </form>

           
        </div>


        <div class="bakBoton">

            <img  src="../img/suite/ced.png" class="lognav">
            <div id="txt2" class="txttx"><strong>REGISTRO</strong></div>

            <form action="../CED/ced.php" id="slognav2">

                <input type="submit" class="submit" id="">

            </form>
            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img  src="../img/suite/risk.svg" class="lognav">
            <div id="txt3" class="txttx"><strong>RIESGOS</strong></div>

            
            <form action="../RISK/risk.php" id="slognav3">

                <input type="submit" class="submit" id="lognav3">

            </form>

        </div>



        <div class="bakBoton">

            <img  src="../img/suite/bd.svg" class="lognav">
            <div id="txt4" class="txttx"><strong>EDITAR REGISTROS</strong></div>


            <form action="../CONS/cons.php" id="slognav4">

                <input type="submit" class="submit" id="lognav4">

            </form>

        </div>


        <div class="bakBoton">

            <img  src="../../../img/ICONOS/printok1.png" class="lognav">
            <div id="txt5" class="txttx"><strong>IMPRESIONES</strong></div>


            <form action="../PRINT/printy.php" id="slognav5">

                <input type="submit" class="submit" id="lognav5">

            </form>

        </div>

        <form action="../../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>



        </form> 

    </navleft>

    <navsup id="navsup">

      
        <div id="backUser">

            <img id="lognav0" src="../../../img/apps/apps/ezrisk.png" class="imagUser"> 
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

        

    </navsup>
    
    <div id="backall"></div>

    <modseg  id="modprosp">
   
        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">FILTROS</div>
         
                <form class="tabcpo" method="POST" action = "ced.php" >

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

                    <div for="categoria" class="label">Estándar</div>

                    <select name="macro"  class="input"  >

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

                    <input type="list" name="enfcat" id="enfcat" list="catenfx"  class="input"  placeholder="Selecciona el Enfoque...">

                

                    <input type="submit" value="FILTRAR" id="savemod" name="buscarfa">

                </form>

            </div>
        
        </section>


        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3">CEDULA DE EVALUACION</div>


            <div id="backtasky">

                <div id="backacciones">   
             

                    <datalist id="catfallapo">

                        <?php


                            if (isset($_POST['buscarfa'])){

                                $selectEnfx = $_POST['enfcat'];
                                $selectMacro = $_POST['macro'];


                                $userstabla = "SELECT * FROM  $tabcatllas WHERE macro LIKE '%$selectMacro%' AND  enfoque LIKE '%$selectEnfx%'  ";
                            }else{

                                $selectEnfx = '';
                                $selectMacro = '';

                                $userstabla = "SELECT * FROM  $tabcatllas  ";
                            }

                            

                            $pusersselect = $dbo->query($userstabla);
                            
                            foreach ( $pusersselect as $opciones){ ?>
                            <option value="<?php echo $opciones['falla']?>"></option>
                            <?php
                            }
                            
                        ?>

                    </datalist>

                    <datalist id="cattrab">
                        <?php


                            if (isset($_POST['buscarfa'])){

                                $cliente = $_POST['cliente'];

                                $tabplantper = "SELECT * FROM  $personal WHERE activo = 'SI' AND unidad = '$cliente' ";
                            }else{

                                $cliente = '';
                                if($adminrol == $radmin ){
                                    $tabplantper = "SELECT * FROM  $personal  ";
                                }elseif($adminrol == $radreg){
                                    $tabplantper = "SELECT * FROM  $personal  WHERE region = '$userAcroregion' ";
                                }elseif($adminrol == $radger){
                                    $tabplantper = "SELECT * FROM  $personal  WHERE unidad = '$userAcronu' ";
                                }else{
                                    $tabplantper = "SELECT * FROM  $personal  WHERE unidad = '$userAcronu' ";
                                }
                               
                            }


                           
                            $qtabplantper = $db_assess->query($tabplantper);

                            foreach ($qtabplantper as $opciones){ ?>

                            <option value="<?php echo $opciones['nombreco']?>"><?php echo $opciones['nombre'].' / '.$opciones['nombreco']?></option>

                                <?php
                            }

                        ?> 
                    </datalist>

                    <form id="backForm" method="POST" action="cedSAVE.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >

                        <section id="backcabe">

                            <section id="backDatos">

                                <input  hidden type="text" value="1" name="backy" >


                                <table class="tableced">

                                    <tr>
                                        <th class="label colstav2">FECHA DE REGISTRO</th>
                                        <th class="label colstav4">UNIDAD</th>
                                        <th class="label colstav3">FILTROS</th>
                                      
                                        <th class="label colstav5"></th>
                                        <th class="label colstav6"></th>
                                    </tr>

                                    <tr>
                                        <td ><input type="date" id="fechahoy" class="fechahoy input"  name="fechahoy" required></td>
                                        <td>
                                            <select name="cliente" class="fechahoy input" required>

                                                <?php
                                                    if(empty($cliente)){
                                                        ?>
                                                            <option value="" selected></option>
                                                        <?php

                                                    }else{
                                                        ?>
                                                        <option value="<?php echo $cliente; ?>"><?php echo $cliente; ?></option>
                                                    <?php
                                                    }
                                                ?>
                                              
                                            </select>
                                        </td>
                                        <td>
                                            <?php
                                                        echo    $selectEnfx  .'/'. $selectMacro.'/'. $cliente;
                                                          ?>
                                        </td>

                                       
                                        <td></td>
                                        <td><input type="submit" value="GUARDAR" id="guardar" name="saveFallas" ></td>

                                     
                                    </tr>

                                    
                                </table>


                             

                                
                                
                               
                                
                            
                            </section>



                        </section>

                        <section id="backTable">


                            <table class="table" id="tableCed">

                                <tr>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                    <th class="anchoCOl"></th>
                                </tr>
                        
                            
                    
                                <?php
                                
                            
                    
                                        $consCed = "SELECT * FROM $ceduform  ";
                                        $qconsCed = $db_all->query($consCed);
                    
                                        while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {
                    
                                            $idid = $filaCed['id'];
                    
                                            echo '
                                            
                                                <tr class="fila0"> 
                    
                                                    <td colspan="8"><input type="text" value=" '.'REGISTRO '. $filaCed['id'] .' " class="registro" readonly> </td>
                                                
                                                </tr>
                    
                    
                                                <tr class="fila1">
                    
                                                    <td hidden><input type="text"  name="idfx[]" value="' . $filaCed['id'] . '"></td>
                                                    <td><input type="text" placeholder="PERIODO..." name="periodo[' . $filaCed['id'] . ']" value="'.$mes.'" class="input"></td>
                                                    <td colspan="2"><input type="text" placeholder="USUARIO..." name="usuario[' . $filaCed['id'] . ']" value="'.$userLog.'" class="input"></td>
                                                    <td colspan="2">
        
                                                    
                                                        <select  id="misional" name="servicio[' . $filaCed['id'] . ']"  class="input">

                                                            <option value="" selected >Servicio...</option>
                                                               <option value="CONSULTA" >CONSULTA</option>
                                                                <option value="HOSPITALIZACION" >HOSPITALIZACION</option>                       
                                                                <option value="CIRUGIA" >CIRUGIA</option>
                                                                <option value="HEMODINAMIA" >HEMODINAMIA</option>
                                                                <option value="UCI" >UCI</option>
                                                                <option value="UCIN" >UCIN</option>
                                                                <option value="UCIP" >UCIP</option>
                                                                <option value="URGENCIAS" >URGENCIAS</option>
                                                                <option value="TOCOLOGIA" >TOCOLOGIA</option>
                                                                <option value="TOCOCIRUGIA" >TOCOCIRUGIA</option>
                                                                <option value="FARMACIA HOSPITALARIA" >FARMACIA</option>
                                                                <option value="NA" >NO APLICA</option>
                                                        </select>
                                                    </td>
                                            
                                                </tr>
                    
                                                <tr class="fila2">
                    
                                                    <td>
                                                        <select name="turno[' . $filaCed['id'] . ']" class="input">

                                                            <option value=""  selected >Turno...</option>
                                                            <option value="M">MATUTINO</option>
                                                            <option value="M">VESPERTINO</option>
                                                            <option value="N">NOCTUTNO</option>
                                                            <option value="MX">MIXTO</option>
                                                        </select>
                                                    </td>
                                                    <td colspan="7"><input type="list" list="cattrab" placeholder="TRABAJADOR INVOLUCRADO..." name="trab[' . $filaCed['id'] . ']" class="input"></td>
                                                </tr>
                    
                                                <tr class="fila3">
                    
                                                    <td colspan="8"><input type="list" list="catfallapo" placeholder="OPORTUNIDAD EVALUADA..." name="fallapo[' . $filaCed['id'] . ']" class="input"></td>
                                                </tr>

                                                <tr class="fila3b">
                    
                                                    <td colspan="8"><input type="text"  placeholder="ALCANCE" name="alcance[' . $filaCed['id'] . ']" class="input"></td>
                                              
                                                </tr>
                    
                                                <tr class="fila4">
                    
                                                    <td>
                    
                                                        <select name="riesgo[' . $filaCed['id'] . ']" class="input">>
                    
                                                            <option value="" selected>FALLA?</option>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                        </select>
                    
                                                    </td>
                    
                    
                                                    <td colspan="2">
                    
                                                        <select name="tipo[' . $filaCed['id'] . ']" class="input">>
                    
                                                    
                                                            <option value="" selected>TIPO...</option>
                                                            <option value="CF">CUASI FALLA</option>
                                                            <option value="EA">EVENTO ADVERSO</option>
                                                            <option value="EC">EVENTO CENTINELA</option>

                                                            <option value="RAT">REACCION ADVERSA A LA TRANSFUSION</option>
                                                            <option value="RAM">REACCION ADVERSA A LA MEDICACION</option>

                                                            <option value="TV">INCIDENTE DE TECNOVIGILANCIA</option>

                                                        
                                                            <option value="AI">ACTO INSEGURO</option>
                                                            <option value="CI">CONDICION INSEGURA</option>   

                                                            <option value="AT">ACCIDENTE DE TRABAJO</option>
                                                        
                                                            <option value="QJ">QUEJA</option>
                                                            
                                                        </select>
                    
                                                    </td>
                    
                                                    <td colspan="2">
                    
                                                        <select name="severidad[' . $filaCed['id'] . ']" class="input">>
                    
                                                            <option value="" selected>SEVERIDAD...</option>
                                                            <option value=0.357142857>FALLA SIN CONSENCUENCIAS</option>
                                                            <option value=0.714285714>FALLA SIN CONSECUENCIAS X INTERVENSION OPORTUNA</option>
                                                            <option value=1.071428571>FALLA CON AFECTACION MINIMA</option>
                                                            <option value=1.428571429>FALLA CON AFECTACION MODERADA</option>
                                                            <option value=1.785714286>FALLA CON AFECTACION GRAVE</option>
                                                            <option value=2.142857143>FALLA CON AFECTACION PERMANENTE</option>
                                                            <option value=2.5>FALLA CON AFECTACION TOTAL/MUERTE</option>
                                                        </select>
                    
                                                    </td>
                    
                    
                                                    <td colspan="2">
                    
                                                        <select name="nocumplecon[' . $filaCed['id'] . ']" class="input">
                    
                                                            <option value="" selected>INCUMPLE CON...</option>
                                                            <option value=0.357142857>POLITICAS INTERNAS</option>
                                                            <option value=0.714285714>NORMATIVIDAD VIGENTE</option>
                                                            <option value=1.071428571>AMBOS</option>
                    
                                                        </select>
                    
                                                    </td>
                    
                    
                                                    <td colspan="2" rowspan="2"><textarea placeholder="OBSERVACIONES..." name="obs[' . $filaCed['id'] . ']" class="textarea"></textarea> </td>
                    
                                                </tr>
                    
                                                <tr class="5">
                    
                                                    <td colspan="5"><input type="list" list="catevent" name="evento[' . $filaCed['id'] . ']" class="input" placeholder="ESCRIBE O BUSCA EL EVENTO..." "></td>
                                                    <td colspan="2"><input type="number" name="costo" step="0.01" class="input" name="costo[' . $filaCed['id'] . ']" placeholder="Costo..." ></td>
                                                </tr>
                    
                                             
                                            ';
                    
                                    
                    
                                        }
                                    
                                ?>
                        
                            
                        
                        
                            </table>

                                

                        </section>
                        
                    </form>

                </div>

            </div>

        </section>

        <div id="blockMod"></div>


    </modseg>



</body>

</html>