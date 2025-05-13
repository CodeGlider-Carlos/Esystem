<?php

require_once '../varSQL/dbmysql.php';
session_start();
if (empty($_SESSION['usuario'])) :
    header("Location: ../../../suitelog.php");
endif;
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];
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
    <title>sy_selectmtn</title>

    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/selectmtn.css">
    <!---------------------  CONTROLADORES JS----------------------->
    <script type="text/javascript" src="js/dsmtn.js"></script>

</head>
<body>

    <section >

        <section id="fondoform">

            <form id="form1" method="POST" action="obj.php" autocomplete="off">

                <input type="text" id="filtros" value="OBJETIVOS CLAVE" readonly >
                <input hidden type="text" id="tipo" name="tipo" value="ESTRATEGICOS" readonly >


                <select id="tipobj" name="alcanceobj" required>
                    <option value="" selected >Alcance...</option>
                    
                    <?php
                        if($adminrol == $radmin){

                            ?>
                                <option value="CORPORATIVO">CORPORATIVO</option>
                            <?php

                        }
                    ?>
                
                    <option value="REGIONAL">REGIONAL</option>
                    <option value="UNIDAD">UNIDAD</option>
                    <option value="GERENCIAL">GERENCIAL</option>
                    <option value="FUNCIONAL">FUNCIONAL</option>
                    
                </select>

                <select id="region" name="region" required> 
                    <option value="" selected >Region...</option>
                    <option value="CORPORATIVO">CORPORATIVO</option>
                    <?php


                

                            $tabreg = "SELECT * FROM $catreg ORDER BY nombre ASC";
                            $qtabreg = $dbo->query($tabreg);
                     

                      

                        foreach ( $qtabreg as $opciones){ ?>

                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['nombre'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>
        


               

                <select id="year" name="year" required> 
                    <option value="" selected >Ejercicio...</option>
                    <?php

                        $tabejer = "SELECT * FROM $tabyear";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="estatus" name="estatus" required readonly>
                    <option value="ALTA">ALTA</option>
                </select>


                <select id="objasoc" name="objasocdg" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">Objetivo Corporativo Asociado...</option>
                    <option value=""  >NA</option>
                    <?php

                    

                            $userstabla = "SELECT * FROM $tabojdg WHERE alcanceobj = 'CORPORATIVO'  ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['idobjdg'];?>"><?php echo $opciones['unidad'].'/'.$opciones['useresp'].'/'.$opciones['objetivo'] ;?></option>

                                <?php
                            
                                }
                        
                    ?> 

                </select>

                <select id="objasoc" name="objasocreg" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">Objetivo Regional Asociado...</option>
                    <option value=""  >NA</option>
                    <?php



                            $userstabla = "SELECT * FROM $tabojreg WHERE alcanceobj = 'REGIONAL'  ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['idobjreg'];?>"><?php echo $opciones['region'].'/'.$opciones['useresp'].'/'.$opciones['objetivo'] ;?></option>

                                <?php
                            
                                }
                        
                    ?> 

                </select>

                <select id="objasoc"  class="servdepcom" name="objasocunid" required>

                    <option value="" selected class="optionSELECTED">Objetivo de Unidad Existente...</option>
                    <option value=""  >NA</option>
                    <?php



                            $userstabla = "SELECT * FROM $tabojunid WHERE alcanceobj = 'UNIDAD'  ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['idobjunid'];?>"><?php echo $opciones['unidad'].'/'.$opciones['useresp'].'/'.$opciones['objetivo'] ;?></option>

                                <?php
                            
                                }
                        
                    ?> 

                </select>

                <select id="gerdir" name="gerdir" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">responsable de objetivo...</option>

                    <?php

                        if($adminrol == $radmin){

                            $userstabla = "SELECT * FROM $gedir ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                            
                                }
                            }else{
                                ?>
                                <option value="<?php echo  $userLog; ?>"><?php echo  $userLog; ?></option>
                                <?php
                        }
                        
                    ?> 

                </select>
 
                <input type="submit" id="buscarrisk" name="estrat" value="CONTINUAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </form>


            <form id="form2" method="POST" action="resulVAR.php" autocomplete="off">

                <input type="text" id="filtros" value="RESULTADOS VARIOS" readonly >
                <input hidden type="text" id="tipo" name="tipoind" value="varios" readonly >



                <select id="estatus" name="estatus" required readonly>
                    <option value="ALTA">ALTA</option>
                </select>

                <select id="objasoc" name="objasoc" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">Objetivo Asociado...</option>

                    <?php

                     

                            $userstabla = "SELECT * FROM $tabojunid   ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['idobjunid'];?>"><?php echo $opciones['unidad'].'/'.$opciones['useresp'].'/'.$opciones['objetivo'] ;?></option>

                                <?php
                            
                                }
                          
                    ?> 

                </select>


                <input type="submit" id="buscarrisk" name="altainvar" value="CONTINUAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </form>

            <form id="form3" method="POST" action="resulPROC.php" autocomplete="off">

                <input type="text" id="filtros" value="RESULTADOS DE PROCESO" readonly >
                <input hidden type="text" name="tipoind" value="procesos" readonly >


                <select id="estatus" name="estatus" required readonly>
                    <option value="ALTA">ALTA</option>
                </select>

                <select id="objasoc" name="objasoc" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">Objetivo Asociado...</option>

                    <?php

                     

                            $userstabla = "SELECT * FROM $tabojunid WHERE perspectiva = 'PROCESOS' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['unidad'].'/'.$opciones['useresp'].'/'.$opciones['objetivo'] ;?></option>

                                <?php
                            
                                }
                          
                    ?> 

                </select>

                <input type="submit" id="buscarrisk" name="altainpro" value="CONTINUAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </form>

            <form id="form4" method="POST" action="resulPPTO.php" autocomplete="off">

                <input type="text" id="filtros" value="RESULTADOS/CON MULTIPLES METAS" readonly >
                <input hidden type="text" id="tipo" name="tipoind" value="varios" readonly >



                <select id="estatus" name="estatus" required readonly>
                    <option value="ALTA">ALTA</option>
                </select>


                <select id="objasoc" name="objasocUNID" class="servdepcom" >

                    <option value="" selected class="optionSELECTED">Objetivo Gerencial Asociado...</option>

                    <?php

                    

                            $userstabla = "SELECT * FROM $tabojunid WHERE perspectiva = 'FINANCIERA' OR  perspectiva = 'PRODUCTIVIDAD' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['idobjunid'];?>"><?php echo $opciones['unidad'].'/'.$opciones['useresp'].'/'.$opciones['objetivo'] ;?></option>

                                <?php
                            
                            }
                        
                        
                    ?> 

                </select>


                <input type="submit" id="buscarrisk" name="altainvar" value="CONTINUAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </form>




            <form id="form5" method="POST" action="obj.php" autocomplete="off">

                <input type="text" id="filtros" value="MANTENIMIENTO DE OBJETIVOS CLAVE" readonly >
                <input hidden type="text" id="tipo" name="tipo" value="ESTRATEGICOS" readonly >
                        
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

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="estatus" name="estatus" required>
                    <option value="" selected >estatus...</option>
                    <option value="MODIFICA">MODIFICA</option>
                    <option value="BAJA">BAJA O REACTIVACION</option>
                </select>

                <select id="perspectiva" name="perspectiva" >
                    <option value="" selected >perspectiva...</option>
                    <option value="FINANCIERA">FINANCIERA</option>
                    <option value="PROCESOS">PROCESOS</option> 
                    <option value="CLIENTE">CLIENTE</option>
                    <option value="CRECIMIENTO">APRENDIZAJE Y CRECIMIENTO</option>
                </select>

                <select id="gerdir" name="gerdir" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">reponsable de objetivo...</option>

                    <?php

                        if($adminrol == $radmin){

                            $userstabla = "SELECT * FROM $gedir ";
                            $pusersselect = $dbo->query($userstabla);
    
                            foreach ($pusersselect as $opciones){ ?>
    
                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>
    
                                <?php
                            
                            }
                            }else{
                                ?>
                                <option value="<?php echo  $userLog; ?>"><?php echo  $userLog; ?></option>
                                <?php
                        }
                    ?> 


                </select>

                <input type="submit" id="buscarrisk" name="estrat" value="CONTINUAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </form>


            <form id="form6" method="POST" action="indi.php" autocomplete="off">

                <input type="text" id="filtros" value="MANTENIMIENTO DE RESULTADOS" readonly >

                <input hidden type="text" name="tipoind" value="MODIFICA" readonly >
                
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

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="estatus" name="estatus" required>    
                    
                    <option value="" selected >estatus...</option>          
                    <option value="MODIFICA">MODIFICA</option>
                    <option value="BAJA">BAJA O REACTIVACION</option>   
                
                </select>

                <select name="depserv" id="depserv" required>

                    <option value="" selected class="optionSELECTED">usuario responsable...</option>
                
                    <?php

                        if($adminrol == $radmin OR $adminrol == $radmac){

                            $tabmis = "SELECT * FROM $pmis WHERE activo = 'SI' ";
                            $qtabmis = $dbo->query($tabmis);

                            foreach ($qtabmis as $opciones){ ?>

                            <option value="<?php echo $opciones['acronimo']?>"><?php echo $opciones['nombre']?></option>

                                <?php
                            }
                        
                            $tabfun = "SELECT * FROM $pfun WHERE activo = 'SI' ";
                            $qtabfun = $dbo->query($tabfun);

                            foreach ($qtabfun as $opciones){ ?>

                            <option value="<?php echo $opciones['acronimo']?>"><?php echo $opciones['nombre']?></option>

                                <?php
                            }
                        }

                        if($adminrol == $raddir){

                            $tabmis = "SELECT * FROM $pmis WHERE activo = 'SI' AND dir = '$userLog' ";
                            $qtabmis = $dbo->query($tabmis);

                            foreach ($qtabmis as $opciones){ ?>

                            <option value="<?php echo $opciones['acronimo']?>"><?php echo $opciones['nombre']?></option>

                                <?php
                            }
                        
                            $tabfun = "SELECT * FROM $pfun WHERE activo = 'SI' AND tipo = 'DEP' AND dir = '$userLog'";
                            $qtabfun = $dbo->query($tabfun);

                            foreach ($qtabfun as $opciones){ ?>

                            <option value="<?php echo $opciones['acronimo']?>"><?php echo $opciones['nombre']?></option>

                                <?php
                            }

                        }

                        if($adminrol == $radman OR $adminrol == $radsup){

                            ?>

                                <option value="<?php echo $userLog;?>"><?php echo $userLog;?></option>

                            <?php
                        }

                    ?> 

                </select>

                <input type="submit" id="buscarrisk" name="indimoda" value="CONTINUAR" >        
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

            </form>

            <section id="movslid">

                <div id="botmov1" class="botmov"><div id="slidTit1" class="tileslid">OBJETIVOS CLAVE</div></div>
       
                <div id="botmov2" class="botmov"><div id="slidTit2" class="tileslid">RESULTADOS/VARIOS</div></div>
                <div id="botmov3" class="botmov"><div id="slidTit3" class="tileslid">RESULTADOS DE PROCESO</div></div>
                <div id="botmov4" class="botmov"><div id="slidTit4" class="tileslid">MULTIPLES METAS</div></div>         
                <div id="botmov5" class="botmov"><div id="slidTit5" class="tileslid">MTN OBJETIVOS</div></div>
                <div id="botmov6" class="botmov"><div id="slidTit6" class="tileslid">MTN RESULTADOS</div></div>

            </section>

        </section>

    </section>
 

</body>
</html>