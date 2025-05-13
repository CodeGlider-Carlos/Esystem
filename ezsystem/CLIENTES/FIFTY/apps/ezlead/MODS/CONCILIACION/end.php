<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];


if (isset($_POST['subback'])){
    $person = $_POST['person'];
    $Pid = $_POST['Pid'];

    
}else{
    $person = $_POST['person'];
    $Pid = $_POST['Pid'];

}



$bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE id = '$Pid' ";
$qbdpros0 = $dbc->query($bdpros0);
  
while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
    $Pid0 =$filpro0['id'];
    $Pregion0 =$filpro0['region'];
    $Punidad0 =$filpro0['unidad'];
    $Pcategoria0 =$filpro0['categoria'];
 

    $Pnombre0 =$filpro0['nombre'];
    $Pespecialidad0 =$filpro0['especialidad'];
    $Prol0 =$filpro0['rol'];
    $procedimiento0 =$filpro0['procedimiento'];

    $Ptipomo0 =$filpro0['tipomo'];

    $valor0 =$filpro0['preciohosp'];
    $Pvalor0 = $Ptipomo0.' '.'$'. number_format($valor0,2);

    $Pred0 =$filpro0['red'];
    $Pestatus0 =$filpro0['estatus'];
    $nombrepx =$filpro0['nombrepx'];
}





$bdpros1= "SELECT * FROM $crm_pros WHERE nombre  = '$Pnombre0' ";
$qbdpros1 = $dbc->query($bdpros1);
  
while ($filpro = $qbdpros1->fetch(PDO::FETCH_ASSOC)) {
    $Pid =$filpro['id'];
   
    $Ptel1 =$filpro['tel1'];
    $Ptel2 =$filpro['tel2'];
    $Pemail =$filpro['email'];
  
    $Pfuente =$filpro['fuente'];
    $Pfinterna =$filpro['finterna'];
    $Puseresp =$filpro['useresp'];
    $Pobs =$filpro['obs'];


}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead+</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/end.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/end.css">
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

<body class="body_ezlead">

    <navleft id="navleft">


        <div class="bakBoton" id="bakBoton1">

            <img id="lognav1" src="../../img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img id="lognav2" src="../../img/suite/pros2.png" class="lognav">
            <div id="txt2" class="txttx"><strong>PROSPECTOS</strong></div>

            <form action="../PROSPECTOS/prospect_med.php" id="slognav2">

                <input type="submit" class="submit" >

            </form>

        </div>


        <div class="bakBoton">

            <img id="lognav3" src="../../img/suite/tarj2.png" class="lognav">
            <div id="txt3" class="txttx"><strong>TARJETA DE CONTACTO</strong></div>

            
            <form action="../TARJETAS/selectipo.php" id="slognav3">

                <input type="submit" class="submit" >

            </form>

        </div>



        <form action="../../../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="../../img/suite/exit.svg"  class="lognav" name="exitdk">

            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>


    <navsup id="navsup">

        <div id="backUser">

            <img id="lognav0" src="../../../../img/apps/apps/ezleadplus.png" class="imagUser">    
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>


    <div id="backall"></div>


    <modseg  id="modprosp">

   
        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">DATOS GENERALES</div>


            <div class="tabcpo" >


                <div for="organizacion" class="label">Procedimiento a Realizar</div>
                <input  type="text" id="organizacion"  class="input" value="<?php echo $procedimiento0;?>" readonly>

                <div for="socio" class="label">Precio de Venta</div>

                <select id="socio" name="socio" class="select" readonly>
                    <option value="" selected><?php echo $Pvalor0;?></option>
                </select>

                <div for="nombre" class="label">NOMBRE</div>
                <input type="text" id="nombre" name="nombre" class="input" value="<?php echo $Pnombre0;?>" readonly>

                <div for="especialidad" class="label">Nombre de Paciente</div>

                <select id="especialidad" name="especialidad" class="select" readonly>
                    <option value="" selected><?php echo $nombrepx;?></option>
                </select>


                <form class="tabcpo" method="POST"  action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >

                    <input hidden type="text" class="input" value="<?php echo $Pid0;?>" name="idtarj_med">

                
                    <input hidden type="text"  name="procedimiento0" class="input" value="<?php echo $procedimiento0;?>" readonly>

                    <div for="fechapro" class="label">Fecha de Procedimiento</div>
                    <input type="date" id="fechapro" name="fechapro" class="input" required>

                    
                    <div for="costo" class="label">Costo</div>
                    <input type="text" id="costo" name="costo" class="input" required>

                    <div for="venta" class="label">Precio Venta</div>
                    <input type="text" id="venta" name="venta" class="input" value=""  required>

                    <div for="utilporce" class="label">Márgen de Utilidad</div>
                    <input type="text" id="utilporce" name="utilporce" class="input" value="" placeholder="ej. 0.27"  required>

                    <div for="utilmon" class="label">Utilidad</div>
                    <input type="text" id="utilmon" name="utilmon" class="input" value=""  required>

                    <div for="email" class="label">Índice Satisfacción Médico</div>
                    <input type="text" id="satmed" name="satmed" class="input" value=""  required>

                    <div for="email" class="label">Índice Satisfacción Paciente</div>
                    <input type="text" id="utilmon" name="satpx" class="input" value=""  required>

                    <div for="email" class="label">Índice Satisfacción Hospital</div>
                    <input type="text" id="sathosp" name="sathosp" class="input" value=""  required>
              

                    <div for="obs" class="labelEta">ETAPA ACTUAL</div >



                    <input hidden type="text" value="<?php echo $person;?>" name="person">
                    <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

          

                    <select id="useresp"  name="etapa" class="select left" required>
                        <option value="" selected>CONCILIACION</option>
                        <option value="" ></option>
                        <option value="5" >CERRAR TARJETA</option>       
                        <option value="10" >CANCELAR</option>
                    </select>

                    <input type="submit" value="GUARDAR" id="savemod" name="savepROG">

                </form>
            </div>

        </section>


        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect4b">SEGUIMIENTO</div>


            <div id="backbottask">
                <img id="bottask" src="../../img/suite/tareas2.png" class="bottask">
                <div class="lineAC" id="lineAC1"></div>
            </div>
       

            <div id="backbotcomen">
                <img id="botcomen" src="../../img/suite/comentarios2.png" class="botcomen">
                <div class="lineAC" id="lineAC2"></div>
            </div>
            

            <div id="backtasky">

                <div id="backaccionesCONCILI">   
                    
                    <div class="namecotasky left">Actividades Nuevas</div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $person;?>" name="nombremed">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="idtarjeta">

                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Prog</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="accion"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeTask"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left">Bitácora de Actividades</div>
                    
                        <div id="backtab">                      
                            

                                <?php

                                  
                                    if($adminrol== $radmin ){
                                        $bdpros= "SELECT * FROM $tabtaskY WHERE idmin = '$Pid0' AND tipominuta = '4' AND app = 'lead' AND activo = 'SI' ";
                                        $qbdpros = $db_task->query($bdpros);
                                    }elseif($adminrol== $radmin ){
                                        $bdpros= "SELECT * FROM $tabtaskY WHERE region LIKE '%$userAcroregion%'AND idmin = '$Pid0' AND tipominuta = '4' AND app = 'lead' AND activo = 'SI' ";
                                        $qbdpros = $db_task->query($bdpros);
                                    }else{
                                        $bdpros= "SELECT * FROM $tabtaskY WHERE useresp LIKE '%$userLog%' AND idmin = '$Pid0' AND tipominuta = '4' AND app = 'lead' AND activo = 'SI' ";
                                        $qbdpros = $db_task->query($bdpros);
                                    }


                                    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                        $PidH =$filpro['id'];
                                        $idtarjetaH =$filpro['idmin'];                       
                                        $enfoqueH =$filpro['enfoquetask'];
                                        $accionH =$filpro['tarea'];
                                        $fechaproH =$filpro['fechaprogramada'];
                                        $fechacuH =$filpro['fechacumple'];

                                        $estatusH =$filpro['estatus'];

                                        $obsH =$filpro['observaciones'];

                                        $PuserespH =$filpro['usertask'];


                                    ?>

                                    <form id="formHist" method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                                            <table class="tableHIST">

                                                <tr>

                                                    <th class="label colstavh1">Id</th>
                                                    <th class="label colstavh2 " colspan="6" >Tarea</th>
                                                
                                                </tr>


                                                <tr>
                                                    <td> <input type="text" class="activ" value="<?php echo $PidH;?>" name='idtask' readonly>  </td>
                                                    <td colspan="6" ><input type="text" class="printask" value="<?php echo $accionH; ?>" ></td>
                                                </tr>

                                                <tr>
                                                    <th class="colstavh1" >Programado</th>
                                                    <th class="colstavh2" >Estatus</th>
                                                    <th class="colstavh3" >Acción</th>
                                                    <th class="colstavh4" ></th>
                                                    <th class="colstavh5" ></th>
                                                    <th class="colstavh6" ></th>
                                                    <th class="colstavh7" ></th>
                                                  
                                                </tr>




                                            <tr>
                                        
                                                <td class="center"><input type="text" class="activ" value="<?php echo $fechaproH;?>" readonly></td>
                                           
                                                
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
                                                <td class="colstavh1" ></td>
                                                <td class="colstavh1" ></td>
                                                <td class="colstavh1" ></td>
                                                <td class="colstavh1" ></td>
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

                <div id="backaccionesCONCILI">
                    <div class="namecotasky left">Comentario</div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $person;?>" name="nombremed">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="idtarjeta">

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
                                
                                    <textarea class="testareaobsC" name="comment"></textarea>
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


                      
                        <div id="backtab">


                        
                            
                            

                                <?php

                                if($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $hist_coment WHERE idtarjeta = '$Pid0' AND etapa = '4' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }elseif($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $hist_coment WHERE region LIKE '%$userAcroregion%'AND idtarjeta = '$Pid0' AND etapa = '4' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $hist_coment WHERE useresp LIKE '%$userLog%' AND idtarjeta = '$Pid0'  AND etapa = '4' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }

                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                    $fechacoment =$filpro['fechacoment'];                       
                                    $coment =$filpro['coment'];
                                  


                                    ?>

                                        <form id="formHist">


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


        </section>


        <div id="blockMod"></div>


    </modseg>



</body>

</html>