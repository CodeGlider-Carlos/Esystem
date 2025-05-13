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

    <link rel="stylesheet" type="text/css" href="css/intervalos.css">
 
</head>
<body>


    <section  >



            <form  method="POST" action="calcm.php" autocomplete="off">



                <section id="calctab">

                    <div id="backsem">
                        <input type="text" id="filtros" value="MODIFICAR INTERVALOS DE DESEMEPEÑO" readonly >

                        <?php 

                            $valdall = "SELECT * FROM $tabsemaf WHERE intervalo = '1'";
                            $qvaldall = $dbo->query($valdall);

                            while ($fila = $qvaldall->fetch(PDO::FETCH_ASSOC)) {
                                $idvayall = $fila['id'];  
                            }

                            if(empty($idvayall))
                            {

                            }else{
                        
                            ?>

                                <div id="backvig" class="backvig">

                                    <div class="textsem">
                                    
                                        <?php 

                                        

                                            $valydsem5 = "SELECT * FROM $tabsemaf WHERE intervalo = '5'";
                                            $qvalydsem5 = $dbo->query($valydsem5);
                                    
                                            while ($fila = $qvalydsem5->fetch(PDO::FETCH_ASSOC)) {
                                                $idvay5 = $fila['id'];  
                                                $interv5= $fila['limsuperior'];  
                                            }

                                            if(empty($idvay5)){
                                                $vig5 = 'NR';
                                                
                                            }else{
                                                $vig5 = $interv5;
                                            
                                            }

                                            ///////////////////////////////////////
                                            $valydsem4 = "SELECT * FROM $tabsemaf WHERE intervalo = '4'";
                                            $qvalydsem4 = $dbo->query($valydsem4);
                                    
                                            while ($fila = $qvalydsem4->fetch(PDO::FETCH_ASSOC)) {
                                                $idvay4 = $fila['id'];  
                                                $interv4= $fila['liminferior'];  
                                            }

                                            if(empty($idvay4)){
                                                $vig4 = 'NR';
                                                
                                            }else{
                                                $vig4 = $interv4;
                                            
                                            }

                                            ///////////////////////////////////////
                                            $valydsem3 = "SELECT * FROM $tabsemaf WHERE intervalo = '3'";
                                            $qvalydsem3 = $dbo->query($valydsem3);
                                    
                                            while ($fila = $qvalydsem3->fetch(PDO::FETCH_ASSOC)) {
                                                $idvay3 = $fila['id'];  
                                                $interv3= $fila['liminferior'];  
                                            }

                                            if(empty($idvay3)){
                                                $vig3 = 'NR';
                                                
                                            }else{
                                                $vig3 = $interv3;
                                            
                                            }

                                            ///////////////////////////////////////
                                            $valydsem2 = "SELECT * FROM $tabsemaf WHERE intervalo = '2'";
                                            $qvalydsem2 = $dbo->query($valydsem2);
                                    
                                            while ($fila = $qvalydsem2->fetch(PDO::FETCH_ASSOC)) {
                                                $idvay2 = $fila['id'];  
                                                $interv2= $fila['liminferior'];  
                                            }

                                            if(empty($idvay2)){
                                                $vig2 = 'NR';
                                                
                                            }else{
                                                $vig2 = $interv2;
                                            
                                            }

                                            ///////////////////////////////////////
                                            $valydsem1 = "SELECT * FROM $tabsemaf WHERE intervalo = '1'";
                                            $qvalydsem1 = $dbo->query($valydsem1);
                                    
                                            while ($fila = $qvalydsem1->fetch(PDO::FETCH_ASSOC)) {
                                                $idvay1 = $fila['id'];  
                                                $interv1= $fila['liminferior'];  
                                            }

                                            if(empty($idvay1)){
                                                $vig1 = 'NR';
                                                
                                            }else{
                                                $vig1 = $interv1;
                                            
                                            }
                                        /////////////////////////////////
                                        ?>
                                        <div class="porcj porc1"><?php echo '<'.number_format($vig5,0).'%'; ?></div>
                                        <div class="porcj porc2"><?php echo '>'.number_format($vig4,0).'%'; ?></div>
                                        <div class="porcj porc3"><?php echo '>'.number_format($vig3,0).'%'; ?></div>
                                        <div class="porcj porc4"><?php echo '>'.number_format($vig2,0).'%'; ?></div>
                                        <div class="porcj porc5"><?php echo '>'.number_format($vig1,0).'%'; ?></div>

                                    </div>

                                    <div class="contsemvi">

                                        <div  class="circlese red"></div>
                                        <div  class="circlese orange"></div>
                                        <div  class="circlese yell"></div>
                                        <div  class="circlese green"></div>
                                        <div  class="circlese blue"></div>                             

                                    </div>

                                    <div id="vigentext">VIGENTE</div> 

                                
                                </div>

                            <?php 
                            }
                        ?>

                        <div id="backsem1" class="backforma">

                            <div class="textsem">

                                <div class="porcj porc1"><?php echo '<75%'; ?></div>
                                <div class="porcj porc2"><?php echo '>75%'; ?></div>
                                <div class="porcj porc3"><?php echo '>85%'; ?></div>
                                <div class="porcj porc4"><?php echo '>95%'; ?></div>
                                <div class="porcj porc5"><?php echo '>100%'; ?></div>

                            </div>

                            <div class="contsem">

                                <div  class="circlese red"></div>
                                <div  class="circlese orange"></div>
                                <div  class="circlese yell"></div>
                                <div  class="circlese green"></div>
                                <div  class="circlese blue"></div>      

                            </div>
                            <label class="content-input">
                                <input type="radio" name="semafo" id="semafo1" value="uno" required>
                                <i></i>
                            </label>
                        </div>

                        <div id="backsem2" class="backforma">

                            <div class="textsem">

                                <div class="porcj porc1"><?php echo '<70%'; ?></div>
                                <div class="porcj porc2"><?php echo '>70%'; ?></div>
                                <div class="porcj porc3"><?php echo '>80%'; ?></div>
                                <div class="porcj porc4"><?php echo '>90%'; ?></div>
                                <div class="porcj porc5"><?php echo '>95%'; ?></div>

                            </div>

                            <div class="contsem">

                                <div  class="circlese red"></div>
                                <div  class="circlese orange"></div>
                                <div  class="circlese yell"></div>
                                <div  class="circlese green"></div>
                                <div  class="circlese blue"></div>                        
                                
                            </div>
                            <label class="content-input">
                                <input type="radio" name="semafo" id="semafo2" value="dos" required>
                                <i></i>
                            </label>
                        </div>

                        <div id="backsem3" class="backforma">

                            <div class="textsem">

                                <div class="porcj porc1"><?php echo '<65%'; ?></div>
                                <div class="porcj porc2"><?php echo '>65%'; ?></div>
                                <div class="porcj porc3"><?php echo '>75%'; ?></div>
                                <div class="porcj porc4"><?php echo '>85%'; ?></div>
                                <div class="porcj porc5"><?php echo '>90%'; ?></div>

                            </div>
                            <div class="contsem">
                                <div  class="circlese red"></div>
                                <div  class="circlese orange"></div>
                                <div  class="circlese yell"></div>
                                <div  class="circlese green"></div>
                                <div  class="circlese blue"></div>      
                        
                                
                            </div>
                            <label class="content-input">
                                <input type="radio" name="semafo" id="semafo3" value="tres" required>
                                <i></i>
                            </label>
                        </div>

            
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

                        <input type="submit" id="buscarrisk" name="savesem" value="CONTINUAR" >        
                        <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                        <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">

                    </div>
                </section>

                
            </form>


    </section>




</body>
</html>