<?php
require_once '../../varSQL/bd_lead.php';
require_once '../../../../varSQL/var.php';
require_once '../../../../varSQL/bd.php';


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/nego.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/nego.css">
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

            <form action="../PROSPECTOS/prospect_px.php" id="slognav2">

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

            <img id="lognav0" src="../../../../img/apps/apps/ezlead.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>


    </navsup>

    <div id="backall"></div>


    <modseg  id="modprosp">


        <?php
                if($tipotarj == 'EMPRESA' ){

                    
                        $bdpros0= "SELECT * FROM $cat_tarjetas_leademp WHERE id = '$Pid' ";
                        $qbdpros0 = $dbc->query($bdpros0);
                        
                        while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                            $Pid0 =$filpro0['id'];
                            $Pregion0 =$filpro0['region'];
                            $Punidad0 =$filpro0['unidad'];
                            $Pcategoria0 =$filpro0['categoria'];
                        
                        
                            $Pnombre0 =$filpro0['nombre'];
                        
                            

                            $Ptipomo0 =$filpro0['tipomo'];

                            $valor0 =$filpro0['valorestimado'];
                            $Pvalor0 = $Ptipomo0.' '.'$'. number_format($valor0,2);

                            $Pred0 =$filpro0['red'];
                            $Pestatus0 =$filpro0['estatus'];

                        }


                        $bdpros1= "SELECT * FROM $crm_prosElead WHERE acron  = '$Pnombre0' ";
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
                        <section id="section1" class="sectionmod">

                            <div class="namesect" id="namesectnew">DATOS GENERALES</div>


                            <div class="tabcpo" >

                                <div for="categoria" class="label">Categoria</div>

                                <select id="categoria" name="categoria" class="select" readonly>
                                    <option value="" selected><?php echo $Pcategoria0;?></option>
                                
                                </select>

                            


                                <div for="organizacion" class="label">Empresa</div>
                                <input  type="text" id="organizacion" name="organizacion" class="input" value="<?php echo $Pred0;?>" readonly>

                            

                                <div for="nombre" class="label">Acrónimo de la Empresa</div>
                                <input type="text" id="nombre" name="nombre" class="input" value="<?php echo $Pnombre0;?>" readonly>

                            


                                <div for="telefono" class="label">Teléfono de Contacto</div>
                                <input type="text" id="telefono" name="telefono" class="input" value="<?php echo $Ptel1;?>" readonly>

                                <div for="whats" class="label">Teléfono Celular Personal</div>
                                <input type="text" id="whats" name="whats" class="input" value="<?php echo $Ptel2;?>" readonly>

                                <div for="email" class="label">Correo Electrónico</div>
                                <input type="text" id="email" name="email" class="input" value="<?php echo $Pemail;?>" readonly>

                                <div for="valor" class="label">Valor Mensual Esperado</div>
                                <input type="text" id="valor" name="valor" class="input" value="<?php echo $Pvalor0;?>" readonly>

                                <div for="fuente" class="label">Fuente de Contacto</div >
                                <select id="fuente"  name="fuente" class="select">
                                    <option value="" selected><?php echo $Pfuente;?></option>
                                    <option value="REDES" >REDES SOCIALES</option>
                                    <option value="LLAMADA" >LLAMADA</option>
                                    <option value="RECEPCION" >RECEPCION</option>
                                    <option value="WHATSAPP" >WHATSAPP</option>
                                    <option value="CONSULTORIO" >VISITA A CONSULTORIO</option>
                                    <option value="ORGANIZACION" >VISITA A EMPRESA</option>
                                    <option value="OTRA" >OTRA</option>
                                </select>


                                <div for="finterna" class="label">Contacto Hospital</div >                           
                                <select id="finterna" name="finterna" class="select" >
                                    <option value="" selected><?php echo $Pfinterna;?></option>
                                    <?php

                                        if($adminrol == $radmin ){
                                            $tabuslead = "SELECT * FROM $users_leadlead";
                                        }elseif($adminrol == $radreg){
                                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                        }elseif($adminrol == $radcom){
                                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                        }else{
                                            $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                                        }

                                        
                                        $qtabuslead = $dbc->query($tabuslead);

                                        foreach ($qtabuslead as $opciones){ ?>

                                        <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                            <?php
                                    
                                        }
                                    ?>
                                        <option value="AYR" >ADMISION Y RELACIONES PUBLICAS</option>
                                </select>

                                <div for="useresp" class="label">Usuario Responsable</div>                      
                                <select id="useresp" name="useresp" class="select" >
                                    <option value="" selected><?php echo $Puseresp;?></option>

                                    <?php

                                        if($adminrol == $radmin ){
                                            $tabuslead = "SELECT * FROM $users_leadlead";
                                        }elseif($adminrol == $radreg){
                                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                        }elseif($adminrol == $radcom){
                                            $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                        }else{
                                            $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                                        }

                                        
                                        $qtabuslead = $dbc->query($tabuslead);

                                        foreach ($qtabuslead as $opciones){ ?>

                                        <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                            <?php
                                    
                                        }
                                    ?>
                                    
                                </select>

                                <div for="obs" class="label">Observaciones</div >
                                <textarea  id="obs"  name="obs" class="textarea justify" spellcheck="false" >
                                    <?php echo $Pobs;?>
                                </textarea>

                            
                            </div>

                            <form class="tabcpo" method="POST"  action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >


                                <div for="obs" class="labelEta">ETAPA ACTUAL</div >



                                <input hidden type="text" value="<?php echo $person;?>" name="person">
                                <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                                <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">

                                <select id="useresp"  name="etapa" class="select left" required>
                                    <option value="" selected>NEGOCIACION</option>
                                    <option value="" ></option>
                                    <option value="4" >CIERRE</option>
                                    <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                    <option value="10" >CANCELAR</option>
                                </select>
                                <input type="submit" value="MOVER" id="savemod" name="cambiar">

                            </form>

                        </section>

                    <?php

                }else{

                                        
                    $bdpros0= "SELECT * FROM $cat_tarjetas_leadpx WHERE id = '$Pid' ";
                    $qbdpros0 = $dbc->query($bdpros0);
                    
                    while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
                        $Pid0 =$filpro0['id'];
                        $Pregion0 =$filpro0['region'];
                        $Punidad0 =$filpro0['unidad'];
                    
                        $Pnombre0 =$filpro0['nombre'];
                    
                        

                        $Ptipomo0 =$filpro0['tipomo'];

                        $valor0 =$filpro0['valorestimado'];
                        $Pvalor0 = $Ptipomo0.' '.'$'. number_format($valor0,2);

                        $Pestatus0 =$filpro0['estatus'];

                    }


                    $bdpros1= "SELECT * FROM $crm_prosPxLead WHERE nombre  = '$Pnombre0' ";
                    $qbdpros1 = $dbc->query($bdpros1);
                    
                    while ($filpro = $qbdpros1->fetch(PDO::FETCH_ASSOC)) {
                        $Pid =$filpro['id'];
                    
                        $Ptel1 =$filpro['tel1'];

                    
                        $Puseresp =$filpro['useresp'];
                        $Pobs =$filpro['obs'];
                        

                        
                        $region =$filpro['region'];
                        $unidad =$filpro['unidad'];

                        $Pnombre =$filpro['nombre'];
                        $procedimiento =$filpro['procedimiento'];
                        $especialidad =$filpro['especialidad'];
                        $Pfuente =$filpro['fuente'];
                        

                    }
                    ?>
                        <section id="section1" class="sectionmod">

                            <div class="namesect" id="namesectnew">DATOS GENERALES</div>


                            <div class="tabcpo" >

                                    <div for="categoria" class="label">Región</div>

                                    <select id="region" name="region" class="select" >
                                        <option value="" selected><?php echo $region;?></option>
                                        <option value="" ></option>
                                        <option value="JAL" >JALISCO</option>
                                        <option value="PUE" >PUEBLA</option>

                                    </select>

                                    <div for="categoria" class="label">Unidad</div>                    

                                    <select id="region" name="unidad" class="select"  >  

                                        <option value="" selected ><?php echo $unidad;?></option>
                                        <option value="" ></option>
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

                                    <div for="NOM" class="label">Nombre</div>
                                    <input  type="text" id="organizacion" name="nombrepx" placeholder="<?php echo $Pnombre;?>" class="input" >

                                    <div for="whats" class="label">Teléfono de Contacto</div>
                                    <input type="text" id="whats" name="whats" class="input" placeholder="<?php echo $Ptel1;?>" >


                                    <div for="NOM" class="label">Procedimiento de interés</div>
                                    <input  type="text" id="procedimiento" name="procedimiento" placeholder="<?php echo $procedimiento;?>"  class="input" >

                                    <div for="especialidad" class="label">Especialidad</div>

                                    <select id="especialidad" name="especialidad" class="select" >     
                                        <option value="" ><?php echo $especialidad;?></option>
                                        <option value=""></option>                     
                                        <option value="CIRUGIA GENERAL" >CIRUGIA GENERAL</option>
                                        <option value="ORTOPEDIA Y TRAUMATOLOGIA" >ORTOPEDIA Y TRAUMATOLOGIA</option>
                                        <option value="NEUROCIRUGIA" >NEUROCIRUGIA</option>
                                        <option value="OTORRINOLARINGOLOGIA" >OTORRINOLARINGOLOGIA</option>
                                        <option value="GINECOLOGIA Y OBSTETRICIA" >GINECOLOGIA Y OBSTETRICIA</option>
                                        <option value="CIRUGIA BARIATRICA" >CIRUGIA BARIATRICA</option>
                                        <option value="CIRUGIA PEDIATRIA" >CIRUGIA PEDIATRIA</option>
                                        <option value="CIRUGIA ONCOLOGICA" >CIRUGIA ONCOLOGICA</option>
                                        <option value="CIRUGIA PLASTICA" >CIRUGIA PLASTICA</option>
                                        <option value="ODONTOLOGIA" >ODONTOLOGIA</option>
                                        <option value="OFTALMOLOGIA" >OFTALMOLOGIA</option>
                                        <option value="OTROS" >OTROS</option>

                                    </select>


                                
                                    <div for="fuente" class="label">Fuente de Contacto</div >
                                    <select id="fuente"  name="fuente" class="select">
                                        <option value="" ><?php echo $Pfuente;?></option>
                                        <option value=""></option>  
                                        <option value="REDES" >REDES SOCIALES</option>
                                        <option value="LLAMADA" >LLAMADA</option>
                                        <option value="RECEPCION" >RECEPCION</option>
                                        <option value="WHATSAPP" >WHATSAPP</option>
                                        <option value="CONSULTORIO" >VISITA A CONSULTORIO</option>
                                        <option value="ORGANIZACION" >VISITA A EMPRESA</option>
                                        <option value="OTRA" >OTRA</option>
                                    </select>


                                    <div for="useresp" class="label">Asesor</div>                      
                                    <select id="useresp" name="useresp" class="select" >
                                        <option value="" ><?php echo $Puseresp;?></option>
                                        <option value=""></option>  
                                        <?php

                                            if($adminrol == $radmin ){
                                                $tabuslead = "SELECT * FROM $users_leadlead";
                                            }elseif($adminrol == $radreg){
                                                $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                            }elseif($adminrol == $radcom){
                                                $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                            }else{
                                                $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                                            }

                                            
                                            $qtabuslead = $dbc->query($tabuslead);

                                            foreach ($qtabuslead as $opciones){ ?>

                                            <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                                <?php
                                        
                                            }
                                        ?>
                                    </select>


                                    <div for="obs" class="label">Observaciones</div >
                                    <textarea  id="obs"  name="obs" class="textarea" spellcheck="false"  placeholder="<?php echo $Pobs;?>">

                                    </textarea>

                                    <input hidden type="text" id="nombre" name="idupd" class="input" value="<?php  echo $Pid0;?>" >

                            
                            </div>
                            <form class="tabcpo" method="POST"  action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >


                                <div for="obs" class="labelEta">ETAPA ACTUAL</div >



                                <input hidden type="text" value="<?php echo $person;?>" name="person">
                                <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                                <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">


                                <select id="useresp"  name="etapa" class="select left" required>
                                    <option value="" selected>NEGOCIACION</option>
                                    <option value="" ></option>
                                    <option value="4" >CIERRE</option>
                                    <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                    <option value="10" >CANCELAR</option>
                                </select>
                                <input type="submit" value="MOVER" id="savemod" name="cambiar">

                            </form>
                        </section>
                    <?php
                }
        ?>
   
       <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3">NEGOCIACION</div>

            <section id="backnavboton">

                <div id="accname">ACCIONES</div>
                    
                <section id="backnavbot">
                
                

                    <div class="backbo">
                        <img id="boto1" src="../../img/suite/agenda.png" class="botco">
                        <div class="lineAC" id="lineAC1"></div>
                        <div class="txtbo" id="txtbo1">AGENDA</div>
                    </div>
            

                    <div class="backbo">
                        <img id="boto2" src="../../img/suite/video.png" class="botco">
                        <div class="lineAC" id="lineAC2"></div>
                        <div class="txtbo" id="txtbo2">VIDEO LLAMADA</div>
                    </div>

                
                    <div class="backbo">
                        <img id="boto3" src="../../img/suite/whats.png" class="botco">
                        <div class="lineAC" id="lineAC3"></div>
                        <div class="txtbo" id="txtbo3">WHATSAPP</div>
                    </div>

                    <div class="backbo">
                        <img id="boto4" src="../../img/suite/llamada.png" class="botco">
                        <div class="lineAC" id="lineAC4"></div>
                        <div class="txtbo" id="txtbo4">LLAMADA</div>
                    </div>

                    <div class="backbo">
                        <img id="boto5" src="../../img/suite/aqui.png" class="botco">
                        <div class="lineAC" id="lineAC5"></div>
                        <div class="txtbo" id="txtbo5">VISITA DEL CLIENTE</div>
                    </div>

                    <div class="backbo">
                        <img id="boto6" src="../../img/suite/alla.png" class="botco">
                        <div class="lineAC" id="lineAC6"></div>
                        <div class="txtbo" id="txtbo6">VISITA AL CLIENTE</div>
                    </div>

                    <div class="backbo">
                        <img id="boto7" src="../../img/suite/mascoment.png" class="botco">
                        <div class="lineAC" id="lineAC7"></div>
                        <div class="txtbo" id="txtbo7">OTROS</div>
                    </div>
                
                </section>
            
            </section>

            <div id="allcoment">

                <div id="backahistoriasComAll">

                    <div class="namecotasky left"><p>Bitácora</p></div>
                    
                    <div id="backtab">

                            <?php

                        
                            if($adminrol== $radmin ){
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0'   AND activo ='SI'  ORDER BY fechacoment  ";
                                $qbdpros = $dbc->query($bdpros);
                            }else{
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0'  AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ORDER BY fechacoment  ";
                                $qbdpros = $dbc->query($bdpros);
                            }
                            
                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                $PidH =$filpro['id'];
                                $idtarjetaH =$filpro['idtarjeta'];                       
                            
                                $accionH =$filpro['coment'];
                                $fechaproH =$filpro['fechacoment'];
                                $etapa =$filpro['etapa'];
                                    /*
                                            if( $etapa == '1'){

                                            }elseif(){

                                            }
                                    */
                                $tipocom =$filpro['tipocom'];
                                $fechc= new DateTime( $fechaproH );
                                $fechapro = $fechc->format('d-m-y');

                                ?>

                                    <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">

                                        <table class="tableHIST">

                                            <tr>

                                                <th class="label com1">Fecha</th>
                                                <th class="label com2 " >Tipo</th>
                                                <th class="label com3 " colspan="5" >Comentario</th>
                                            
                                            </tr>


                                            <tr>
                                                <td class="activ2"><?php echo $fechapro;?></td>
                                                <td class="activ2"><?php echo $tipocom;?></td>
                                                <td colspan="5" class="activ2"><?php echo $accionH;?></td>
                                            </tr>


                                            <tr>
                                                <td>    <div class="circom1"></div></td>
                                                
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                
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

            <div id="simcoti">

                <form id="simul" method="POST" action="coti.php">

                    <table class="tableTASK">
                        <tr>
                            <th>Servicio</th>
                            <th>Acuerdos</th>
                            <th>Acción</th>
                        </tr>
                        <tr>
                            <td>
                                <select class="input" name="servicios">
                                    <option value="" selected>...</option>
                                        <?php

                                            $tabverpre = "SELECT * FROM $tabPrelead  "; 
                                            $qtabverpre = $dbc->query($tabverpre);

                                            foreach ($qtabverpre as $opciones){ ?>

                                            <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['procedimiento'];?></option>

                                                <?php

                                            }

                                        ?>
                                    <option></option>
                                </select>
                            </td>
                            <td>
                                <select class="input" name="acuerdo">
                                    <option value="" selcted>...</option>
                                    <option value=0.05>5%</option>
                                    <option value=0.10>10%</option>
                                    <option value=0.15>15%</option>
                                    <option value=0.20>20%</option>
                                </select>
                            </td>
                            <td>
                                <input type="submit" value="SIMULAR" id="editar" name="simular">
                            </td>
                        </tr>
                        <input hidden type="text" value="<?php echo $person; ?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid; ?>" name="Pid">
                        <input hidden type="text" value="<?php echo $tipotarj; ?>" name="tipotarj">
                    </table>               

                </form>

                <?php

                    if(isset($_POST['simular'])){
                        $servicios = $_POST['servicios'];
                        $acuerdo = $_POST['acuerdo'];

                        
                        $tabpre= "SELECT * FROM $tabPrelead WHERE id LIKE '%$servicios%'";
                        $qtabpre = $dbc->query($tabpre);

                        while ($filpro = $qtabpre->fetch(PDO::FETCH_ASSOC)) {
                            $preciohosp =$filpro['preciohosp'];
                            $precioho = '$'. number_format($preciohosp,2);
                            $procedimiento =$filpro['procedimiento'];
                        }


                        $descuente = $preciohosp*$acuerdo;
                        $descue = '$'. number_format($descuente,2);
                        $prefin =  $preciohosp-$descuente;
                        $preciofin = '$'. number_format($prefin,2);


                        $porceacuerdo = $acuerdo * 1;
                        $porceacuer = number_format($porceacuerdo,2).'%';
                    ?>

                            <div   id="vercoti">

                                <div class="namesect" id="namesect3">SIMULACION</div>

                                <table  class="tableTASK">
                                    <tr>
                                        <th>Servicio</th>
                                    
                                    </tr>
                                    <tr >
                                        <td class="input"> <?php echo $procedimiento;?></td>
                                      
                                    </tr>
                                    <tr>
                                        <th>Precio Venta</th>
                                    
                                    </tr>
                                    <tr>
                                        <td class="input"> <?php echo $precioho;?></td>
                                    </tr>
                                    <tr>
                                        <th>Acuerdo</th>
                                    
                                    </tr>
                                    <tr>
                                        <td class="input"> <?php echo $porceacuer;?></td>
                                    </tr>
                                    <tr>
                                        <td class="input"> <?php echo $descue;?></td>
                                    </tr>
                                    <tr>
                                        <th>Precio Final</th>
                                    
                                    </tr>
                                    <tr>
                                    
                                        <td><input type="text" value="<?php echo $preciofin;?>" class="input inputfin" ></td>
                                    </tr>
                                </table>

                            </div>

                        <?php
                    }
                ?>

            </div>         

            <div id="backtasky">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left"><p><strong>TAREAS</strong></p></div>

                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa">
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Programada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="accion" spellcheck="false"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>

                            <tr>
                                
                                <th class="label colstav2">Responsable de tarea</th>
                                <th class="label colstav3">Prioridad</th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>
                            
                            <tr>
                                <td>
                                    <select id="useresp" name="useresp" class="input" required>
                                        <option value="" selected >...</option>
                                        <?php

                                            if($adminrol == $radmin ){
                                                $tabuslead = "SELECT * FROM $users_leadlead";
                                            }elseif($adminrol == $radreg){
                                                $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                            }elseif($adminrol == $radcom){
                                                $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                            }else{
                                                $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                                            }

                                            
                                            $qtabuslead = $dbc->query($tabuslead);

                                            foreach ($qtabuslead as $opciones){ ?>

                                            <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                                <?php
                                        
                                            }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select class="input" name="prio">
                                        <option value="" selected>...</option>
                                        <option value="ALTA" >ALTA</option>
                                        <option value="MEDIA" >MEDIA</option>
                                        <option value="BAJA" >BAJA</option>
                                    </select>
                                </td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeTask"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>
                <div class="namecotask2y left"><p>Bitácora de Tareas</p></div>
                <div id="backahistorias">

                      
                    
                        <div id="backtab">

                            

                                <?php

                                if($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $lead_task WHERE tipotarj = '$tipotarj' AND  idtarj = '$Pid0' AND etapa = '1'  AND activo ='SI' ";
                                    $qbdpros = $dbc->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $lead_task WHERE tipotarj = '$tipotarj' AND  idtarj = '$Pid0' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                    $qbdpros = $dbc->query($bdpros);
                                }

                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                    $accionH =$filpro['tarea'];
                                    $fechaproH =$filpro['fechaprogramada'];
                                    $fechacuH =$filpro['fechacumple'];
                                    $responsabletarea =$filpro['responsabletarea'];
                                    $estatusH =$filpro['estatus'];
                                    $prioridad =$filpro['prioridad'];
                                    $obsH =$filpro['observaciones'];

                                    $PuserespH =$filpro['usertask'];

                                    ?>

                                        <form id="formHist" method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                            <input hidden type="text" value="<?php echo $person;?>" name="person">
                                            <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                            <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
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
                                                    <th class="colstavh4" >Prioridad</th>
                                                    <th class="colstavh5"colspan="2" >Responsable</th>
                                                    <th class="colstavh2" >Fecha Cumple</th>
                                                    <th class="colstavh2" >Estatus</th>
                                                    <th class="colstavh3" >Acción</th>
                                                
                                                   
                                             
                                                </tr>




                                            <tr>
                                        
                                                <td class="center"><input type="text" class="activ" value="<?php echo $fechaproH;?>" readonly></td>
                                                <td class="colstavh1" ><input type="text" class="activ" value="<?php echo $prioridad;?>" readonly></td>
                                                <td class="colstavh1" colspan="2"><input type="text" class="activ" value="<?php echo $responsabletarea;?>" readonly></td>
                                       
                                               

                                                    <?php

                                                    echo '

                                                            <td hidden><input type="text" name="id_task[]" value="' . $filpro['id'] . '"></td>
                                                                
                                                            
                                                            <td>
                                                            <input type="date" name="fechaco[' . $filpro['id'] . ']" class="activ focus">
                                                            </td>

                                                            <td>
                                                                <select  class="enfoqueaccH" name="estatus[' . $filpro['id'] . ']">
                                                                    <option value=""  selected >' . $filpro['estatus'] . '</option>
                                                                
                                                                    <option value="">Cambiar Estatus a...</option>
                                                                    <option></option>

                                                                    <option value="EN CURSO" >EN CURSO</option>
                                                                    <option value="CUMPLIDA" >CUMPLIDA</option>
                                                                    <option value="CANCELADA" >CANCELADA</option>
                                                                    <option value="REPROGRAMADA" >REPROGRAMADA</option>

                                                                </select>
                                                            </td>
                                                
                                                   
                                              
                                            
                                                <td><input type="submit" value="GUARDAR" id="editar" name="savemod"></td>
                                             
                                            

                                            </tr>

                                            <tr>
                                                    <td class="colstavh1" colspan="4" >OBSERVACIONES</td>
                                                   <td class="colstavh1" colspan="3" >NOTAS</td>
                                                  
                                                </tr>
                                            <tr>
                                                <td colspan="4"><textarea class="textareaH "  spellcheck="false" placeholder="' . $filpro['observaciones'] . '" readonly></textarea></td>
                                   
                                                <td colspan="3"><textarea class="textareaH focus" name="obscu[' . $filpro['id'] . ']" spellcheck="false" ></textarea></td>
                                            </tr>

                                                    ';
                                                    ?>

                                            </table>

                                        </form>

                                        <div class="liendiv"></div>
                                
                                    <?php
                                
                                }


                                ?>
                            
                        </div>

                        <div class="espacioFin"></div>

                </div>

            </div>
            
            <div id="backVIDEO">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left"><p><strong>VIDEO LLAMADAS</strong></p></div>

                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa">


                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <input hidden type="text" value="VIDEOLLAMADA" name="tipocoment">
                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Realizada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="comment" autocomplete="off"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>

                            <tr>
                                
                                <th class="label colstav2"></th>
                                <th class="label colstav3"></th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left"><p>Bitácora de Videollamadas</p></div>
                    
                    <div id="backtab">

                            <?php

                        
                            if($adminrol== $radmin ){
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'VIDEOLLAMADA' AND etapa = '1'  AND activo ='SI' ";
                                $qbdpros = $dbc->query($bdpros);
                            }else{
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'VIDEOLLAMADA' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                $qbdpros = $dbc->query($bdpros);
                            }
                            
                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                $PidH =$filpro['id'];
                                $idtarjetaH =$filpro['idtarjeta'];                       
                            
                                $accionH =$filpro['coment'];
                                $fechaproH =$filpro['fechacoment'];
                            
                                $fechc= new DateTime( $fechaproH );
                                $fechapro = $fechc->format('d-m-y');

                                ?>

                                    <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                        <table class="tableHIST">

                                            <tr>

                                                <th class="label colstavh1">Id</th>
                                                <th class="label colstavh2b " colspan="6" >Comentario</th>
                                            
                                            </tr>


                                            <tr>
                                           
                                                <td class="activ2" ><?php echo $fechapro;?></td>
                                                <td class="activ2" colspan="6"><?php echo $accionH;?></td>
                                            </tr>

                                          
                    
                                            <tr>
                                                <td>    <div class="circom1"></div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                <td></td>
                                                <td></td>
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

            <div id="backwhats">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left"><p><strong>CONVERSACIÓN POR WHATSAPP</strong></p></div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" enctype="multipart/form-data">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa">
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <input hidden type="text" value="WHATSAPP" name="tipocoment">

                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Realizada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="comment"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>

                            
                            <tr>
                                
                                <th class="label colstav2"></th>
                                <th class="label colstav3">Caputuras</th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td>  <input type="file" name="fichero[]" id="fichero[]" class="file" value="" >
                                </td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="saveWhats"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left"><p>Bitácora de Conversaciones</p></div>
                    
                       <div id="backtab">

                                <?php

                            
                                if($adminrol== $radmin ){
                                    $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'WHATSAPP' AND etapa = '1'  AND activo ='SI' ";
                                    $qbdpros = $dbc->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'WHATSAPP' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                    $qbdpros = $dbc->query($bdpros);
                                }
                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                    $idtarjetaH =$filpro['idtarjeta'];                       
                                
                                    $accionH =$filpro['coment'];
                                    $fechaproH =$filpro['fechacoment'];
                             
                                    $rutaDo =$filpro['ruta'];
                                    $fechc= new DateTime( $fechaproH );
                                    $fechapro = $fechc->format('d-m-y');
                                    ?>

                                        <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                            <input hidden type="text" value="<?php echo $person;?>" name="person">
                                            <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                            <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                            <table class="tableHIST">

                                                <tr>

                                                    <th class="label colstavh1">Fecha</th>
                                                    <th class="label colstavh2b " colspan="3" >Comentario</th>
                                                    <th class="label colstavh2b " colspan="2" >Capturas</th>
                                                </tr>


                                                <tr>                                                  

                                                    
                                                    <td class="activ2" ><?php echo $fechapro;?></td>
                                                    <td class="activ2" colspan="3"><?php echo $accionH;?></td>
                                                    <td class="activ2" colspan="1"><embed id="embed" src="<?php echo $rutaDo;?>"></td>
                                                    <td class="activ2" colspan="1"><a href="<?php echo $rutaDo;?>" class="botmenu" id="verdoc" target="_blank">VER</a></td>
                                                </tr>


                                                <tr>
                                                <td>    <div class="circom1"></div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                <td></td>
                                                <td></td>
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

            <div id="backllamada">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left"><p><strong>LLAMADAS TELEFÓNICAS</strong></p></div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa">
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <input hidden type="text" value="LLAMADA" name="tipocoment">
                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Realizada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="comment"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>
                            
                            <tr>
                                
                                <th class="label colstav2"></th>
                                <th class="label colstav3"></th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>


                            

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left"><p>Llamadas telefónicas</p></div>
                    
                    <div id="backtab">

                            <?php

                        
                            if($adminrol== $radmin ){
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'LLAMADA' AND etapa = '1'  AND activo ='SI' ";
                                $qbdpros = $dbc->query($bdpros);
                            }else{
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'LLAMADA' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                $qbdpros = $dbc->query($bdpros);
                            }
                            
                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                $PidH =$filpro['id'];
                                $idtarjetaH =$filpro['idtarjeta'];                       
                            
                                $accionH =$filpro['coment'];
                                $fechaproH =$filpro['fechacoment'];
                            
                                $fechc= new DateTime( $fechaproH );
                                $fechapro = $fechc->format('d-m-y');

                                ?>

                                    <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                        <table class="tableHIST">

                                            <tr>

                                                <th class="label com1">Fecha</th>
                                                <th class="label com3 " colspan="6" >Comentario</th>
                                            
                                            </tr>


                                            <tr>
                                                <td class="activ2" ><?php echo $fechapro;?></td>
                                                <td class="activ2" colspan="6"><?php echo $accionH;?></td>
                                            </tr>


                                            <tr>
                                                <td>    <div class="circom1"></div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                <td></td>
                                                <td></td>
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

            <div id="backdelcliente">
           
                <div id="backaccionesTR">   
                <div class="namecotasky left"><p><strong>VISITAS DEL CLIENTE</strong></p></div>
                  


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa"> 
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <input hidden type="text" value="DEL CLIENTE" name="tipocoment">

                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Realizada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="comment"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>

                            
                            <tr>
                                
                                <th class="label colstav2"></th>
                                <th class="label colstav3"></th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>

                        </table>

                                    
                    </form>
                
                </div>

               
                <div id="backahistorias">

                    <div class="namecotasky left"><p>Visitas del Cliente</p></div>
                    
                    <div id="backtab">

                            <?php

                        
                            if($adminrol== $radmin ){
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'DEL CLIENTE' AND etapa = '1'  AND activo ='SI' ";
                                $qbdpros = $dbc->query($bdpros);
                            }else{
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'DEL CLIENTE' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                $qbdpros = $dbc->query($bdpros);
                            }
                            
                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                $PidH =$filpro['id'];
                                $idtarjetaH =$filpro['idtarjeta'];                       
                            
                                $accionH =$filpro['coment'];
                                $fechaproH =$filpro['fechacoment'];
                                $fechc= new DateTime( $fechaproH );
                                $fechapro = $fechc->format('d-m-y');


                                ?>

                                    <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                        <table class="tableHIST">

                                            <tr>

                                                <th class="label colstavh1">Id</th>
                                                <th class="label colstavh2b " colspan="6" >Comentario</th>
                                            
                                            </tr>


                                            <tr>
                                          
                                                <td class="activ2" ><?php echo $fechapro;?></td>
                                                <td class="activ2" colspan="6"><?php echo $accionH;?></td>
                                            </tr>

                                          
                                        

                                            <tr>
                                                <td>    <div class="circom1"></div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                <td></td>
                                                <td></td>
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

            <div id="backALcliente">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left"><p><strong>VISITAS AL CLIENTE</strong></p></div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa">   
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <input hidden type="text" value="OTROS" name="tipocoment">
                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Realizada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="comment"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>

                            
                            <tr>
                                
                                <th class="label colstav2"></th>
                                <th class="label colstav3"></th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left"><p>Visitas al Cliente</p></div>
                    
                    <div id="backtab">

                            <?php

                        
                            if($adminrol== $radmin ){
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'AL CLIENTE' AND etapa = '1'  AND activo ='SI' ";
                                $qbdpros = $dbc->query($bdpros);
                            }else{
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'AL CLIENTE' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                $qbdpros = $dbc->query($bdpros);
                            }
                            
                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                $PidH =$filpro['id'];
                                $idtarjetaH =$filpro['idtarjeta'];                       
                            
                                $accionH =$filpro['coment'];
                                $fechaproH =$filpro['fechacoment'];
                            
                                $fechc= new DateTime( $fechaproH );
                                $fechapro = $fechc->format('d-m-y');

                                ?>

                                    <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                        
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                        <input hidden type="text" value="AL CLIENTE" name="tipocoment">
                                        <table class="tableHIST">

                                            <tr>

                                                <th class="label colstavh1">Id</th>
                                                <th class="label colstavh2b " colspan="6" >Comentario</th>
                                            
                                            </tr>


                                            <tr>
                                                <td class="activ2" ><?php echo $fechapro;?></td>
                                                <td class="activ2" colspan="6"><?php echo $accionH;?></td>
                                            </tr>


                                            <tr>
                                                <td>    <div class="circom1"></div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                <td></td>
                                                <td></td>
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

            <div id="backotros">

                <div id="backaccionesTR">   
                    
                    <div class="namecotasky left"><p><strong>OTROS COMENTARIOS</strong></p></div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                        <input hidden type="text" value="1" name="etapa"> 
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">

                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                        <input hidden type="text" value="OTROS" name="tipocoment">
                        <table class="tableTASK">
                            <tr>
                                
                                <th class="label colstav2">Descripción</th>
                                <th class="label colstav3">Fecha Realizada</th>
                                <th colspan="2" class="label colstav4">Observaciones</th>
                            </tr>

                            <tr>
                               
                                <td>
                                
                                    <textarea class="testareaobs" name="comment" spellcheck="false"></textarea>
                                </td>
                                <td>
                                    <input type="date"class="date" name="fechapro">
                                </td>
                                <td colspan="2">

                                    <textarea class="testareaobs" name="obs" spellcheck="false"></textarea>
                                
                                </td>

                            </tr>

                            
                            <tr>
                                
                                <th class="label colstav2"></th>
                                <th class="label colstav3"></th>
                                <th colspan="2" class="label colstav4"></th>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="GUARDAR" id="editar" name="svaeCom"></td>
                            </tr>



                        </table>

                    



                
                    </form>
                
                </div>

              
                <div id="backahistorias">

                    <div class="namecotasky left"><p>Otros Comentarios</p></div>
                    
                    <div id="backtab">

                            <?php

                        
                            if($adminrol== $radmin ){
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'OTROS' AND etapa = '1'  AND activo ='SI' ";
                                $qbdpros = $dbc->query($bdpros);
                            }else{
                                $bdpros= "SELECT * FROM $hist_comentlead WHERE tipotarjeta = '$tipotarj' AND  idtarjeta = '$Pid0' AND tipocom = 'OTROS' AND etapa = '1' AND usertask LIKE '%$userLog%' OR usuarioregistra = '$userLog'  ";
                                $qbdpros = $dbc->query($bdpros);
                            }
                            
                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                $PidH =$filpro['id'];
                                $idtarjetaH =$filpro['idtarjeta'];                       
                            
                                $accionH =$filpro['coment'];
                                $fechaproH =$filpro['fechacoment'];
                            
                                $fechc= new DateTime( $fechaproH );
                                $fechapro = $fechc->format('d-m-y');

                                ?>

                                    <form id="formHist"  method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                                        <input hidden type="text" value="<?php echo $Pid0;?>" name="Pid0">
                                        <input hidden type="text" value="<?php echo $tipotarj;?>" name="tipotarj">
                                        <table class="tableHIST">

                                            <tr>

                                                <th class="label colstavh1">Id</th>
                                                <th class="label colstavh2b " colspan="6" >Comentario</th>
                                            
                                            </tr>


                                            <tr>
                                                <td class="activ2" ><?php echo $fechapro;?></td>
                                                <td class="activ2" colspan="6"><?php echo $accionH;?></td>
                                            </tr>

                                          
                                        

                    
                                            <tr>
                                                <td>    <div class="circom1"></div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>    <div class="circom2"></div></td>
                                                <td></td>
                                                <td></td>
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