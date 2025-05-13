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
$tipoUser=$_SESSION['tipouser'];

if (isset($_POST['subback'])){
    $nombremed = $_POST['nombremed']; ///NOMBRE ME MEDICO TRATANTE
    $idmedico = $_POST['idmedico']; 
    $idtarjeta = $_POST['idtarjeta'];  ////////////////////ID TARJETA DE MEDICO
    $redName = $_POST['redName']; 
    
}else{
    $nombremed = $_POST['nombremed']; ///NOMBRE ME MEDICO TRATANTE
    $idmedico = $_POST['idmedico']; /// ID MEDICO
    $idtarjeta = $_POST['idtarjeta'];  ////////////////////ID TARJETA DE MEDICO
    $redName = $_POST['redName']; 
    
}


if($adminrol== $radmin ){
    $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id =  '$idtarjeta'  ";
}elseif($adminrol== $radger ){
    $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE region LIKE '%$userAcroregion%' AND  id =  '$idtarjeta'  ";

}else{
    $bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE useresp LIKE '%$userLog%'  AND id =  '$idtarjeta'  ";

}


$qbdpros0 = $dbc->query($bdpros0);
  
while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
    $idtarj_med =$filpro0['id'];
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
    $idmed =$filpro0['idmed'];

    $useresp =$filpro0['useresp'];
}


if($adminrol== $radmin ){
    $bdpros1= "SELECT * FROM $crm_pros WHERE  id =  '$idtarjeta'  ";
}elseif($adminrol== $radger ){
    $bdpros1= "SELECT * FROM $crm_pros WHERE region LIKE '%$userAcroregion%' AND  id =  '$idtarjeta'  ";

}else{
    $bdpros1= "SELECT * FROM $crm_pros WHERE useresp LIKE '%$userLog%'  AND id =  '$idtarjeta'  ";
}


$qbdpros1 = $dbc->query($bdpros1);
  
while ($filpro = $qbdpros1->fetch(PDO::FETCH_ASSOC)) {
    $Pid =$filpro['id'];
   
    $Ptel1 =$filpro['tel1'];
    $Ptel2 =$filpro['tel2'];
    $Pemail =$filpro['email'];
    $Psocio0 =$filpro['socio'];
    $Pfuente =$filpro['fuente'];
    $Pfinterna =$filpro['finterna'];
    $Puseresp =$filpro['useresp'];
    $Pobs =$filpro['obs'];
}



///////////////////////VALIDAR QUE YA EXISTE UNA COTIZACION VINCULADA CON EL ID DE LA TARJETA

if($adminrol== $radmin ){
    $tabvalycot= "SELECT * FROM $cat_coti_med WHERE  idtarjmed  = '$idtarj_med' AND activo LIKE '%1%'  ";
}elseif($adminrol== $radger ){
    $tabvalycot= "SELECT * FROM $cat_coti_med WHERE region LIKE '%$userAcroregion%' AND idtarjmed  = '$idtarj_med' AND activo LIKE '%1%'  ";

}else{
    $tabvalycot= "SELECT * FROM $cat_coti_med WHERE useresp LIKE '%$userLog%' AND idtarjmed  = '$idtarj_med' AND activo LIKE '%1%'  ";
}



$qtabvalycot = $dbcot->query($tabvalycot);
  
while ($filpro = $qtabvalycot->fetch(PDO::FETCH_ASSOC)) {
    $idpaq =$filpro['idpaq'];
    $useraprueba =$filpro['useraprueba'];
    $userautoriza =$filpro['userautoriza'];
    $valypaqmed =$filpro['idtarjmed'];
    $paqname =$filpro['procedimiento']; 
    
      
}

///////////////////////VALIDAR USER LEAD PARA APROBACION Y AUTORIZACION

if($adminrol== $radmin ){
    $atbuserlead= "SELECT * FROM $users_lead   ";
}else{
    $atbuserlead= "SELECT * FROM $users_lead WHERE user  = '$userLog' AND activo = '1'  ";

}


$qatbuserlead = $dbcot->query($atbuserlead);
  
while ($filpro = $qatbuserlead->fetch(PDO::FETCH_ASSOC)) {
    $rolUserLead =$filpro['rol'];
    
      
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

      <script type="text/javascript" src="js/coti.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->



     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/coti.css">
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


              <?php


                    ?>

                    <div class="tabcpo" >

                                    

                        <div for="organizacion" class="label">Red Asociada</div>
                        <input  type="text" id="organizacion" name="organizacion" class="input" value="<?php echo $Pred0;?>" readonly>

                        <div for="socio" class="label">Afiliación a Socio</div>

                        <select id="socio" name="socio" class="select" readonly>
                            <option value="" selected><?php echo $Psocio0;?></option>
                        </select>

                        <div for="nombre" class="label">Nombre</div>
                        <input type="text" id="nombre" name="nombre" class="input" value="<?php echo $Pnombre0;?>" readonly>

                    

                        
                        <div for="especialidad" class="label">Especialidad</div>

                        <select id="especialidad" name="especialidad" class="select" readonly>
                            <option value="" selected><?php echo $Pespecialidad0;?></option>
                        </select>

                        <div for="obs" class="labelEta2">COTIZACION</div >
                        <input type="text" value="" class="input" readonly>
                        <input type="text" value="" class="inputAn" readonly>
                        

                        <table class="cotizac">
                        

                            <tr id="costo">
                                <th><input type="text" value="COSTO SIN FACTOR" class="nameCo" readonly></th>

                                            
                                <th><input type="text" value="" class="input2" readonly></th>
                               
                            
                            </tr>
                            
                            <tr>
                                <th><input type="text" value="PRECIO DE VENTA" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>

                            <tr>
                                <th><input type="text" value="IVA" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                            <tr>
                                <th><input type="text" value="TOTAL" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>

                            <tr id="%utilidad">
                                <th><input type="text" value="% UTILIDAD" class="nameCo" readonly></th>

                                            
                                <th><input type="text" value="" class="input2" readonly></th>
                                            
                                    

                            
                            </tr>


                            <tr id="$utilidad">
                                <th><input type="text" value="UTILIDAD" class="nameCo" readonly></th>

                                        
                                                
                                <th><input type="text" value="" class="input2" readonly></th>
                                                
                                  
                        
                            </tr>




                            <tr>
                                <td colspan="2"> <div class="namesect1b" id="namesect1b">DEDUCCIONES</div></td>
                            </tr>
                        
                            <tr>
                                <th><input type="text" value="PROMOCION" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                            <tr>
                
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                            <tr>
                                <th><input type="text" value="COMISION SOCIO" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                            <tr>
                                <th><input type="text" value="COMISION VC" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                            <tr>
                                <th><input type="text" value="COMISION OTROS" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                            <tr>
                                <th><input type="text" value="OTROS DESCUENTOS" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>

                            <tr>
                            

                                <th><input type="text" value="UTILIDAD FINAL" class="nameCo" readonly></th>
                                <th><input type="text" value="" class="input2" readonly></th>
                            </tr>
                        
                        </table>


                        <form class="tabcpo" method="POST"  action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >


                            <div for="obs" class="labelEta2">ETAPA ACTUAL</div >



                         
                            <input hidden type="text" value="<?php echo $idtarj_med?>" name="idtarj_med">

                
                            <?php
                                if(!empty($valypaqmed)){

                                    if($Pestatus0 == '1'){
                                        $etap = 'PROSPECCION';
                                    }elseif($Pestatus0 == '2'){
                                        $etap = 'COTIZACION';
                                    }elseif($Pestatus0 == '3'){
                                        $etap = 'PROGRAMACION';
                                    }elseif($Pestatus0 == '4'){
                                        $etap = 'CONCILIACION';
                                    }elseif($Pestatus0 == '6'){
                                        $etap = 'APROBADA';
                                    }elseif($Pestatus0 == '7'){
                                        $etap = 'AUTORIZADA';
                                    }else{
                                        $etap ='';
                                    }
                                    /*
                                    1 = PROSPECCION
                                    2 = COTIZACION
                                    3 = PROGRAMACION
                                    4 = CONCILIACION
                                    5 = CERRAR TARJETA
                                    6 = APROBADA
                                    7 = AUTORIZADA
                                    8 = RECHAZADA POR PRECIO
                                    9 = RECHAZADA POR OTROS MOTIVOS
                                    10 = CANCELADA
                                    */

                                    if($adminrol == $radmin){

                                        if(!empty($idpaq) & empty($useraprueba) & empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR APROBAR</option> 
                                                <option value="" ></option>                                     
                                            
                                           
                                                <option value="6" >APROBAR</option>                                              
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProbar">
                                        <?php

                                        }elseif(!empty($idpaq) & !empty($useraprueba) & empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR AUTORIZAR</option> 
                                                <option value="" ></option>    
                                                <option value="7" >AUTORIZAR</option>
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveAutorizar">
                                        <?php

                                        }elseif(!empty($idpaq) & !empty($useraprueba) & !empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR PROGRAMAR</option> 
                                               
                                            </select>
                                        <?php

                                        }
                                     
                                    }elseif($rolUserLead == 'GEM'){

                                        if(!empty($idpaq) & empty($useraprueba) & empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR APROBAR</option> 
                                                <option value="" ></option>                                     
                                            
                                           
                                                <option value="6" >APROBAR</option>                                              
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProbar">
                                        <?php

                                        }elseif(!empty($idpaq) & !empty($useraprueba) & !empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR PROGRAMAR</option> 
                                            </select>
                                        <?php

                                        }
                                       
                                    }elseif($rolUserLead == 'GEA'){
                                        if(!empty($idpaq) & !empty($useraprueba) & empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR AUTORIZAR</option> 
                                                <option value="" ></option>    
                                                <option value="7" >AUTORIZAR</option>
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveAutorizar">
                                        <?php

                                        }elseif(!empty($idpaq) & !empty($useraprueba) & !empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR PROGRAMAR</option> 
                                             
                                            </select>
                                        <?php

                                        }
                                    }else{
                                        if(!empty($idpaq) & empty($useraprueba) & empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR APROBAR</option> 
                                                <option value="" ></option>                                     
                                            
                                                        
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProbar">
                                        <?php

                                        }elseif(!empty($idpaq) & !empty($useraprueba) & empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR AUTORIZAR</option> 
                                                <option value="" ></option>    

                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveAutorizar">
                                        <?php

                                        }elseif(!empty($idpaq) & !empty($useraprueba) & !empty($userautoriza)){

                                            ?>
                                            <select id="useresp"  name="etapa" class="select left" required>
                                                <option value="" selected>POR PROGRAMAR</option> 
                                                <option value="" ></option>    

                                                <option value="3" >PROGRAMACION</option>    
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProg">
                                        <?php

                                        }
                                    }
                                   
                                }else{
                                    if($Pestatus0 == '1'){
                                        $etap = 'PROSPECCION';
                                    }elseif($Pestatus0 == '2'){
                                        $etap = 'COTIZACION';
                                    }elseif($Pestatus0 == '3'){
                                        $etap = 'PROGRAMACION';
                                    }elseif($Pestatus0 == '4'){
                                        $etap = 'CONCILIACION';
                                    }elseif($Pestatus0 == '6'){
                                        $etap = 'APROBADA';
                                    }elseif($Pestatus0 == '7'){
                                        $etap = 'AUTORIZADA';
                                    }else{
                                        $etap ='';
                                    }
                                    if($adminrol == $radmin){
                                        /*
                                        <select id="etapa"  name="etapa" class="select left" required>
                                                <option value="" selected>POR COTIZAR</option> 
                                                <option value="" ></option>                                     
                                                <option value="1" >PROSPECCION</option>
                                                <option value="2" >COTIZACION</option>
                                                <option value="3" >PROGRAMACION</option>
                                                <option value="4" >CONCILIACION</option>
                                                <option value="5" >CIERRE DE TARJETA</option>
                                                <option value="" ></option>  
                                                <option value="6" >APROBAR</option>
                                                <option value="7" >AUTORIZAR</option>
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                        */
                                        ?>

                                        
                                            <select id="etapa"  name="etapa" class="select left" required>
                                                <option value="" selected>POR COTIZAR</option> 
                                                <option value="" ></option>                                     
                                                <option value="1" >PROSPECCION</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveTRAcoti">
                                        <?php
                                    }elseif($adminrol == $radger ){

                                        if($useresp == $userLog){
                                            ?>
                                                <select id="etapa"  name="etapa" class="select left" required>
                                                    <option value="" selected>POR COTIZAR</option> 
                                                    <option value="" ></option>       
                                                    <option value="1" >PROSPECCION</option>
                                                    <option value="10" >CANCELAR</option>
                                                </select>
                                                <input type="submit" value="MOVER" id="savemod" name="saveTRAcoti">
                                            <?php
                                        }else{
                                            ?>
                                                <select id="etapa"  name="etapa" class="select left" required>
                                                    <option value="" selected></option> 
                                                 
                                                </select>
                                            <?php
                                        }
                                      
                                    }else{
                                        ?>
                                            <select id="etapa"  name="etapa" class="select left" required>
                                                <option value="" selected>POR COTIZAR</option> 
                                                <option value="" ></option>                                     
                                                <option value="1" >PROSPECCION</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveTRAcoti">
                                        <?php
                                    }

                                }
                            ?>
                         

                        </form>
                    </div>

                <?php
              
            ?>

        </section>


        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3coti">SEGUIMIENTO</div>
    
            <datalist id="cat_coti">

                <?php

                


                    if(!empty($valypaqmed)){

                        if($adminrol== $radmin ){
                            $tabcoti= "SELECT * FROM $cat_coti_med WHERE  idtarjmed  = '$idtarj_med' AND activo LIKE '%1%'  ";
                        }elseif($adminrol== $radger ){
                            $tabcoti= "SELECT * FROM $cat_coti_med WHERE region LIKE '%$userAcroregion%' AND idtarjmed  = '$idtarj_med' AND activo LIKE '%1%'  ";
    
                        }else{
                            $tabcoti= "SELECT * FROM $cat_coti_med WHERE useresp LIKE '%$userLog%' AND idtarjmed  = '$idtarj_med' AND activo LIKE '%1%'  ";
                        }
    
                    }else{                        
                        $tabcoti = "SELECT * FROM $cat_paq WHERE especialidad = '$Pespecialidad0' AND activo = 'SI'  ";
                    }
            

                    $qtabcoti = $dbc->query($tabcoti);
                    foreach ($qtabcoti as $opciones){ ?>

                    <option value="<?php echo $opciones['procedimiento'];?>"><?php echo $opciones['procedimiento'];?></option>

                        <?php
                    }

              
            

                ?> 
            </datalist>

           
    
            <div id="backcoti">
                <img id="botcot" src="../../img/suite/cot3.png" class="bottask">
                <div class="lineAC" id="lineAC3"></div>
            </div>

            <div id="backbottask">
                <img id="bottask" src="../../img/suite/tareas2.png" class="bottask">
                <div class="lineAC" id="lineAC1"></div>
            </div>
       

            <div id="backbotcomen">
                <img id="botcomen" src="../../img/suite/comentarios2.png" class="botcomen">
                <div class="lineAC" id="lineAC2"></div>
            </div>


            <div id="backtasky">

                <div id="backaccionesCot">   
                    
                    <div class="namecotasky left">Actividades Nuevas</div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                        <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                        <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                        <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">

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
                                <td colspan="1"><input type="submit" value="GUARDAR" id="editar" name="svaeTask"></td>
                            </tr>

                        </table>

                    



                
                    </form>
                
                </div>

                <div id="backahistorias">

                    <div class="namecotasky left">Bitácora de Actividades</div>
                    
                        <div id="backtab">


                        
                            
                            

                                <?php

                                  
                                    if($adminrol== $radmin ){
                                        $bdpros= "SELECT * FROM $tabtaskY WHERE nombremin = '$idtarj_med' AND tipominuta = '2' AND app = 'lead' AND activo = 'SI' ";
                                        $qbdpros = $db_task->query($bdpros);
                                    }elseif($adminrol== $radmin ){
                                        $bdpros= "SELECT * FROM $tabtaskY WHERE region LIKE '%$userAcroregion%'AND nombremin = '$idtarj_med' AND tipominuta = '2' AND app = 'lead' AND activo = 'SI' ";
                                        $qbdpros = $db_task->query($bdpros);
                                    }else{
                                        $bdpros= "SELECT * FROM $tabtaskY WHERE useresp LIKE '%$userLog%' AND nombremin = '$idtarj_med' AND tipominuta = '2' AND app = 'lead' AND activo = 'SI' ";
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

                                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


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

                <div id="backaccionesCot">
                    <div class="namecotasky left">Comentario</div>


                    <form method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                            
                        <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                    <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                    <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                    <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">

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
                                    $bdpros= "SELECT * FROM $hist_coment WHERE idtarjeta = '$idtarj_med' AND etapa = '2' AND activo = '1' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }elseif($adminrol== $radger ){
                                    $bdpros= "SELECT * FROM $hist_coment WHERE region LIKE '%$userAcroregion%'AND idtarjeta = '$idtarj_med' AND etapa = '2' AND activo = '1' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }else{
                                    $bdpros= "SELECT * FROM $hist_coment WHERE useresp LIKE '%$userLog%' AND idtarjeta = '$idtarj_med' AND etapa = '2' AND activo = '1' ";
                                    $qbdpros = $db_leadplus->query($bdpros);
                                }

                                
                                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                    $PidH =$filpro['id'];
                                    $fechacoment =$filpro['fechacoment'];                       
                                    $coment =$filpro['coment'];
                                  


                                    ?>

                                    <form id="formHist" method="POST" action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';">



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
                                                <td hidden><input type="text" value="<?php echo $PidH;?>" name="idcoment">   </td>
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

            <div id="backCotiza">

                <div id="backaccionesCot">   

                    <?php
                    ///////////////////////SI ESXISTE COTIZACION ASOCIADA A TARJETA DE MEDICO
                    if(!empty($valypaqmed)){

                        ?>
                        
                        <div class="namecotasky left">Cotizar</div>


                        <form method="POST" action="revimod.php" autocomplete="off" onkeydown="return event.key != 'Enter';">


                                <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                                <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                                    
                                <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                                <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                                <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                                <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">
                                <input hidden type="text" value="<?php echo $idtarj_med;?>" name="idtarj_med">


                            <table class="tableTASK">

                                <tr>
                                    
                                    <th class="label colco" colspan="4">Procedimiento</th>
                                    <th class="label colco5">Promoción</th>
                                    <th class="label colco6">Acción</th>
                                </tr>

                                <tr>
                                
                                    <td colspan="4">

                                        <select class="testareaobs" name="coti" required >
                                                                    
                                            <?php

                                        
                                                $tabcoti2 = "SELECT * FROM $cat_coti_med WHERE idtarjmed = '$valypaqmed' AND red = '$redName' AND activo = '1'  ";
                                                $qtabcoti2 = $dbcot->query($tabcoti2);

                                                foreach ($qtabcoti2 as $opciones){ ?>

                                                <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['procedimiento'];?></option>

                                                    <?php
                                                }

                                            ?> 
                                        </select>
                                     
                                        
                                    </td>

                                    <td>

                                        <select id="promo" name="promo"  class="input2b"> 
                                            <option value="" selected >...</option>

                                          

                                        </select>

                                    </td>
                                    <td>

                                    
                                        <select name="vincumod" class="input2b" required>
                                            <option value="" selected>...</option>
                                            <option value="REVISAR">REVISAR</option>
                                        </select>


                                    </td>

                                </tr>

                                <tr>
                                    
                                    <th class="label colco1"></th>
                                    <th class="label colco2"></th>
                                    <th class="label colco3"></th>
                                    <th class="label colco4"></th>
                                    <td class="label colco5"></td>
                                    <td class="label colco6"></td>
                                </tr>

                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                    <td ><input type="submit" value="CONTINUAR" id="editar" name="modPaq"></td>
                                </tr>
                            

                            </table>

                        



                    
                        </form>

                    <?php
               
                    }else{
                        //////////////////////SI NO ESXISTE COTIZACION ASOCIADA A TARJETA DE MEDICO
                        ?>
                        
                            <div class="namecotasky left">Cotizar</div>


                            <form method="POST" action="cotizacion.php" autocomplete="off" onkeydown="return event.key != 'Enter';">

                                <input hidden type="text" value="<?php echo $Pregion0;?>" name="Pregion0">
                                <input hidden type="text" value="<?php echo $Punidad0;?>" name="Punidad0">
                                    
                                <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                                <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                                <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                                <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">
                                <input hidden type="text" value="<?php echo $idtarj_med;?>" name="idtarj_med">
                                
                                <table class="tableTASK">

                                    <tr>
                                        
                                        <th class="label colco" colspan="4">Procedimiento</th>
                                        <th class="label colco5">Promoción</th>
                                        <th class="label colco6">Acción</th>
                                    </tr>

                                    <tr>
                                    
                                        <td colspan="4">
                                            
                                            <input type="list"  list="cat_coti" class="testareaobs" placeholder="Buscar Procedimiento a Cotizar" name="coti" required>

                                            
                                        </td>

                                        <td>

                                            <select id="promo" name="promo"  class="input2b"> 
                                                <option value="" selected >...</option>

                                                <?php

                                                    $tabpro = "SELECT * FROM $cat_prom WHERE tipo = '1'  ";
                                                    $qtabpro = $dbcot->query($tabpro);

                                                    foreach ($qtabpro as $opciones){ ?>

                                                    <option value="<?php echo $opciones['codsap']?>"><?php echo $opciones['nombre'];?></option>

                                                        <?php
                                                    
                                                        }
                                                ?>

                                            </select>

                                        </td>
                                        <td>

                                        
                                            <select name="vincumod" class="input2b" required>
                                                <option value="" selected>...</option>
                                                <option value="VINCULAR">INTEGRAR</option>
                                            </select>


                                        </td>

                                    </tr>

                                    <tr>
                                        
                                        <th class="label colco1"></th>
                                        <th class="label colco2"></th>
                                        <th class="label colco3"></th>
                                        <th class="label colco4"></th>
                                        <td class="label colco5"></td>
                                        <td class="label colco6"></td>
                                    </tr>

                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td ><input type="submit" value="CONTINUAR" id="editar" name="cotizar"></td>
                                    </tr>
                                

                                </table>

                            



                        
                            </form>

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