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
    

    $Ptipomo0 =$filpro0['tipomo'];

    $valor0 =$filpro0['valor'];
    $Pvalor0 = $Ptipomo0.' '.'$'. number_format($valor0,2);

    $Pred0 =$filpro0['red'];
    $Pestatus0 =$filpro0['estatus'];

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
    $socioID =$filpro['socio'];

    if(empty($socioID)){
        $socioPrint = 'NO SOCIO';
    }else{
        $socioPrint =  $socioID;
    }

}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ LEAD+</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/tratos.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/tratos.css">
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

                <div for="categoria" class="label">Categoria</div>

                <select id="categoria" name="categoria" class="select" readonly>
                    <option value="" selected><?php echo $Pcategoria0;?></option>
                  
                </select>

              


                <div for="organizacion" class="label">Red Asociada</div>
                <input  type="text" id="organizacion" name="organizacion" class="input" value="<?php echo $Pred0;?>" readonly>

                <div for="socio" class="label">Afiliación a Socio</div>

                <select id="socio" name="socio" class="select" readonly>
                    <option value="" selected><?php echo $socioPrint;?></option>
                </select>

                <div for="nombre" class="label">NOMBRE</div>
                <input type="text" id="nombre" name="nombre" class="input" value="<?php echo $Pnombre0;?>" readonly>

              

                
                <div for="especialidad" class="label">Especialidad</div>

                <select id="especialidad" name="especialidad" class="select" readonly>
                    <option value="" selected><?php echo $Pespecialidad0;?></option>
                </select>



                <div for="telefono" class="label">Teléfono de Contacto</div>
                <input type="text" id="telefono" name="telefono" class="input" value="<?php echo $Ptel1;?>" readonly>

                <div for="whats" class="label">Teléfono Celular Personal</div>
                <input type="text" id="whats" name="whats" class="input" value="<?php echo $Ptel2;?>" readonly>

                <div for="email" class="label">Correo Electrónico</div>
                <input type="text" id="email" name="email" class="input" value="<?php echo $Pemail;?>" readonly>

                <div for="valor" class="label">Valor Mensual Esperado</div>
                <input type="text" id="valor" name="valor" class="input" value="<?php echo $Pvalor0;?>" readonly>

                <div for="fuente" class="label">Fuente de Contacto</div required>
                <select id="fuente"  name="fuente" class="select">
                    <option value="" selected>...</option>
                    <option value="REDES" >REDES SOCIALES</option>
                    <option value="MXN" >LLAMADA</option>
                    <option value="MXN" >VISITA A CONSULTORIO</option>
                    <option value="MXN" >VISITA A ORGANIZACION</option>
                </select>


                <div for="finterna" class="label">Contacto Hospital</div required>
                <select id="finterna"  name="finterna" class="select">
                    <option value="" selected>...</option>
                    <option value="REDES" >VINCULACION COMERCIAL</option>
                    <option value="MXN" >GERENCIA REGIONAL</option>
                    <option value="MXN" >GERENCIA MEDICA</option>
                    <option value="MXN" >GERENCIA ADMINISTRATIVA</option>
                    <option value="MXN" >USUARIO DE CRM</option>
                </select>

                <div for="useresp" class="label">Usuario Responsable</div>

                <select id="useresp"  name="useresp" class="select" required>
                    <option value="" selected><?php echo $Puseresp;?></option>
                </select>

                <div for="obs" class="label">Observaciones</div >
                <textarea  id="obs"  name="obs" class="textarea justify" spellcheck="false" >
                    <?php echo $Pobs;?>
                </textarea>

                <form class="tabcpo" method="POST"  action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >


                    <div for="obs" class="labelEta">ETAPA ACTUAL</div >



                    <input hidden type="text" value="<?php echo $person;?>" name="person">
                    <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

          

                    <select id="useresp"  name="etapa" class="select left" required>
                        <option value="" selected>PROSPECCION</option>
                        <option value="" ></option>
                        <option value="2" >COTIZACION</option>
                        <option value="8" >RECHAZAR POR PRECIO</option>
                        <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                        <option value="10" >CANCELAR</option>
                    </select>
                    <input type="submit" value="MOVER" id="savemod" name="savemod">

                </form>
            </div>

        </section>


        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3">SEGUIMIENTO</div>


            <div id="backbottask">
                <img id="bottask" src="../../img/suite/tareas2.png" class="bottask">
                <div class="lineAC" id="lineAC1"></div>
            </div>
       

            <div id="backbotcomen">
                <img id="botcomen" src="../../img/suite/comentarios2.png" class="botcomen">
                <div class="lineAC" id="lineAC2"></div>
            </div>

        

          
         
            

            <div id="backtasky">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left">Actividades Nuevas</div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

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
                                    $bdpros= "SELECT * FROM $tabtaskY WHERE nombremin = '$Pid0' AND tipominuta = '1' AND app = 'lead' ";
                                    $qbdpros = $db_task->query($bdpros);
                                }elseif($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $tabtaskY WHERE region LIKE '%$userAcroregion%'AND nombremin = '$Pid0' AND tipominuta = '1' AND app = 'lead' ";
                                    $qbdpros = $db_task->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $tabtaskY WHERE useresp LIKE '%$userLog%' AND nombremin = '$Pid0' AND tipominuta = '1' AND app = 'lead' ";
                                    $qbdpros = $db_task->query($bdpros);
                                }

                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                    $idtarjetaH =$filpro['nombremin'];                       
                                    $enfoqueH =$filpro['enfoquetask'];
                                    $accionH =$filpro['tarea'];
                                    $fechaproH =$filpro['fechaprogramada'];
                                    $fechacuH =$filpro['fechacumple'];

                                    $estatusH =$filpro['estatus'];

                                    $obsH =$filpro['observaciones'];

                                    $PuserespH =$filpro['usertask'];

                                    ?>

                                        <form id="formHist">


                                            <table class="tableHIST">

                                                <tr>

                                                    <th class="label colstavh1">Id</th>
                                                    <th class="label colstavh2 " colspan="6" >Tarea</th>
                                                
                                                </tr>


                                                <tr>
                                                    <td> <input type="text" class="activ" value="<?php echo $PidH;?>" readonly>  </td>
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
                                                    <select  class="enfoqueaccH">
                                                        <option value="" selected><?php echo $estatusH; ?></option>
                                                        <option value="">Cambiar Estatus a...</option>
                                                        <option></option>
                                                
                                                        <option value="EN CURSO" >EN CURSO</option>
                                                        <option value="CUMPLIDA" >CUMPLIDA</option>
                                                        <option value="CANCELADA" >CANCELADA</option>
                                                        <option value="REPROGRAMADA" >REPROGRAMADA</option>
                                                
                                                    </select>
                                                </td>
                                            
                                                <td><input type="submit" value="CAMBIAR" id="editar"></td>
                                                <td class="colstavh1" ></td>
                                                <td class="colstavh1" ></td>
                                                <td class="colstavh1" ></td>
                                                <td class="colstavh1" ></td>
                                            </tr>

                                            <tr>
                                                    <td class="colstavh1" colspan="7" >OBSERVACIONES</td>
                                                  
                                                </tr>
                                            <tr>
                                                <td colspan="7"><textarea class="textareaH" spellcheck="false"><?php echo $obsH;?></textarea></td>
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

                <div id="backaccionesTR">
                    <div class="namecotasky left">Comentario</div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

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
                                    $bdpros= "SELECT * FROM $hist_coment WHERE idtarjeta = '$Pid0' AND etapa = '1' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }elseif($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $hist_coment WHERE region LIKE '%$userAcroregion%'AND idtarjeta = '$Pid0' AND etapa = '1' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $hist_coment WHERE useresp LIKE '%$userLog%' AND idtarjeta = '$Pid0'  AND etapa = '1' ";
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
                                                    <select  class="enfoqueaccH">
                                                        <option value="" selected>Estatus...</option>
                                                
                                                        <option value="ELIMINAR" >ELIMINAR</option>
                                                
                                                    </select>
                                                </td>
                                             
                                                <td><input type="submit" value="CAMBIAR" id="editar"></td>
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