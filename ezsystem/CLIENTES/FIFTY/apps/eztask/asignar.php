<?php
 require_once '../../varSQL/bd.php'; 
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
$tipoUser=$_SESSION['tipouser'];

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ TASK</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/idextask.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/idextask.css">
    <link rel="stylesheet" type="text/css" href="css/asignarcal.css">
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

            <img  src="img/asignar2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>ASIGNACION</strong></div>

            <form action="indexTask.php" >

                <input type="submit" class="submit" id="slognav1">

            </form>

        
          
        </div>
        

        <div class="bakBoton" id="bakBoton2">

            <img  src="img/ICONOS/calificar.png" class="lognavCal">
            <div id="txt2" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="evaluar.php" >

                <input type="submit" class="submit" id="slognav2">

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../../img/suite/dash.png" class="lognav">
            <div id="txt3" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="dash_task.php" >

                <input type="submit" class="submit" id="slognav3" >

            </form>

        </div>

        <div class="bakBoton">

            <img  src="../../img/suite/print.png" class="lognav">
           <div id="txt4" class="txttx"><strong>IMPRESIONES</strong></div>

            <form action="print_task.php" >

                <input type="submit" class="submit" id="slognav4" >

            </form>

        </div>

        <form action="../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>

    <navsup id="navsup">

        <div id="backUser">

            <img id="lognav0" src="../../img/apps/apps/eztask.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">

       


                    
            <form id="backForm" method="POST" autocomplete="off" action="save_task.php" method="POST" onkeydown="return event.key != 'Enter';">

                <?php

                    if($tipotask == 'GOB'){

                        ?>
                            <input hidden type="text"  value="<?php echo $tipotask;?>" name="tipotask" >
                            <section  class="inputTipotask">

                                <option><?php echo $tiptasky;?></option>

                            </section>
                        <?php


                    }elseif($tipotask == 'SEG'){
                        ?>
                          <input hidden type="text"  value="<?php echo $tipotask;?>" name="tipotask" >
                            <section  class="inputTipotask">

                                <option><?php echo $tiptasky;?></option>

                            </section>
                        <?php

                    }elseif($tipotask == 'COM'){
                        ?>
                            <select  class="inputTipotask2" name="tipotask" required>

                                <option value="" selected>Elije Comité...</option>
                                <option value="QPS" >Comité de Calidad y Seguridad del Paciente</option>
                                <option value="COEXP" >Comité de Expediente Clínico</option>
                                <option value="MMU" >Comité de Farmacia y Terapéutica</option>
                                <option value="PCI" >Comité de Detección y Prevención de Infecciones</option>
                                <option value="COMO" >Comité de Morbi-Mortalidad General</option>
                                <option value="COMET" >Comité de Medicina Transfusional</option>
                                <option value="COSEM" >Comité de Seguridad y Atención Médica en Caso de Desastres</option>
                                <option value="FMS" >Comité de Seguridad de las Instalaciones</option>
                            </select>
                        <?php
                    }

                ?>
                <textarea class="inputNametask" placeholder="NOMBRE Y FECHA DE REUNION ASOCIADA CON LAS TAREAS..." spellcheck="false" name="nombre"></textarea>
             

                <section id="backGuardar">

                    <input type="submit" id="submit" value="GUARDAR" name="svaeTask">

                </section>           
                    
           
                                
              

                <div id="back_asigcal">

                    <input hidden type="text"  value="<?php echo $year;?>" name="year" >
                    <input hidden type="text"  value="<?php echo $periodo;?>" name="periodo" >
                  
                    <input hidden type="text"  value="<?php echo $unidadSel;?>" name="ucliente" >
                    <input hidden type="text"  value="<?php echo $region;?>" name="region" >
                    
                    <table id="tableTask">

                        <tr>
                            <th class="anchoCOl1s"></th>
                            <th class="anchoCOl2s"></th>
                            <th class="anchoCOl3s"></th>
                        </tr>

                        
                        <datalist id="cattrab">

                            <?php

                                if($adminrol == $radmin){

                                $tabfun = "SELECT * FROM $sresuall ";
                                $qtabfun = $db_users->query($tabfun);

                              
                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                <?php
                            }
                            
                            }elseif($adminrol == $radreg){

                                $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                                $qtabfun = $db_users->query($tabfun);

                              
                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                <?php
                            }
                            }elseif($adminrol == $radger){

                                $tabfun = "SELECT * FROM $sresuall WHERE userjefe LIKE  '%$userLog%' OR usuario LIKE  '%$userLog%' ";
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                <?php
                            }
                                
                            }elseif($adminrol == $radman ){

                                $tabfun = "SELECT * FROM $sresuall WHERE usuario =  '$userLog' ";
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                        <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                    <?php
                                }



                            }




                            ?> 
                        </datalist>

                        <datalist id="cattrab2">

                            <?php

                                if($adminrol == $radmin){

                                $tabfun = "SELECT * FROM $sresuall ";
                                $qtabfun = $db_users->query($tabfun);

                              
                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                <?php
                            }
                            
                            }elseif($adminrol == $radreg){

                                $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                                $qtabfun = $db_users->query($tabfun);

                              
                                foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                <?php
                                }
                            }else{

                                $tabfun = "SELECT * FROM $sresuall WHERE acronu =  '$userUnidadAcronu' ";
                                $qtabfun = $db_users->query($tabfun);

                                foreach ($qtabfun as $opciones){ ?>

                                        <option value="<?php echo $opciones['nombre'];?>"><?php echo $opciones['acronu'].'/'. $opciones['nombre'];?></option>

                                    <?php
                                }



                            }




                            ?> 
                        </datalist>

                        <datalist id="catenfx">
                            <?php
                            $userstabla = "SELECT * FROM $enfxtab";
                            $pusersselect = $db_risk->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['enfoque'];?>"><?php echo $opciones['enfoque'];?></option>
                         
                                <?php
                            }
                           

                            ?> 
                               <option value="PROYECTOS">PROYECTOS</option>
                        </datalist>

                        <?php

                            $consCed = "SELECT * FROM $ceduform  ";
                            $qconsCed = $db_all->query($consCed);

                            while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {

                                $idid = $filaCed['id'];


                                echo '
                    
                                <tr class="fila0"> 

                                    
                                    <td hidden><input type="text" name="id_task[]" value="' . $filaCed['id'] . '"></td>
                                    <td colspan="3"  ></td>
                                </tr>

                                <tr>
                                    <td colspan="3"><div class="inputNUE">NUEVA TAREA</div></td>
                                </tr>

                                <tr class="fila1"> 

                                    <td colspan="1">
                                        <input type="list" class="input" list="cattrab" name="asigna[' . $filaCed['id'] . ']"  placeholder="Asigna..." spellcheck="false"  >
                                    </td>
                                    <td colspan="2">
                                        <input type="list" class="inputb" list="cattrab" name="verificador[' . $filaCed['id'] . ']"  placeholder="Verificará..." spellcheck="false"  >
                                    </td>
                                
                                </tr>

                                <tr class="fila2"> 

                                    <td colspan="1">
                                        <input type="list" list="catenfx" name="enfoque[' . $filaCed['id'] . ']" class="input" placeholder="Enfoque..." > 
                                    </td>
                                    <td colspan="2">
                                        <input type="list" class="inputb" list="cattrab2" name="resptarea[' . $filaCed['id'] . ']"  placeholder="Responsable de Tarea..." spellcheck="false"  >
                                    </td>
                                
                                </tr>

                                <tr class="fila3"> 

                                    <td  colspan="1">
                                        <textarea name="tarea[' . $filaCed['id'] . ']" class="INPUTASKasigna" spellcheck="false" placeholder="Tarea..."></textarea>
                                    </td>
                                    <td  colspan="1">
                                        <textarea name="obstask[' . $filaCed['id'] . ']" class="inputd" spellcheck="false" placeholder="Entregable u Observaciones..."></textarea>
                                    </td>

                                    <td  colspan="1">
                                        <input type="date" name="fechaco[' . $filaCed['id'] . ']" class="inputc" >
                                    </td>
                                    
                                </tr>

                                <tr>
                                  <td colspan="3" class="barraline" >BARRA</td>
                                </tr>

 
                                ';

                            }
                        ?>
                                    
                                

                    </table>      

                </div>
            
            </form> 

        
      


     
        <div id="blockMod"></div>

    </section>




</body>

</html>