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
$tipouser=$_SESSION['tipouser'];

/////////////////////////////////////////CREAR USUARIOS POR REGION Y UNIDAD
if($adminrol== $radmin ){
  $userReg = 'JAL';
  $userUN = 'ZAP1';
}else{
    $userReg = $userAcroregion;
    $userUN = $userAcronu;
}


if (isset($_POST['subback'])){
  
    $paquete = $_POST['coti'];///nombre procedimiento
    $promo = $_POST['promo'];
    $vincumod = $_POST['vincumod'];

    $nombremed = $_POST['nombremed']; ///NOMBRE ME MEDICO TRATANTE
    $idmedico = $_POST['idmedico']; 
    $idtarjeta = $_POST['idtarjeta'];   ////ID TARJETA DE EMPRESA
    $redName = $_POST['redName'];  
    $idtarj_med = $_POST['idtarj_med'];  /////ID TARJETA DE MEDICO
    
}else{

    $paquete = $_POST['coti'];
    $vincumod = $_POST['vincumod'];
    $promo = $_POST['promo'];
    $vincumod = $_POST['vincumod'];

    $nombremed = $_POST['nombremed']; ///NOMBRE ME MEDICO TRATANTE
    $idmedico = $_POST['idmedico']; 
    $idtarjeta = $_POST['idtarjeta'];   ////ID TARJETA DE EMPRESA
    $redName = $_POST['redName'];  
    $idtarj_med = $_POST['idtarj_med'];  /////ID TARJETA DE MEDICO

 

}

$bdpros0= "SELECT * FROM $cat_tarjetas_med WHERE  id = '$idtarj_med' ";
$qbdpros0 = $dbc->query($bdpros0);
  
while ($filpro0 = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
    $Pid0 =$filpro0['id'];
    $Pregion0 =$filpro0['region'];
    $Punidad0 =$filpro0['unidad'];
    $Pcategoria0 =$filpro0['categoria'];

    $Pnombre0 =$filpro0['nombre'];
    $Pespecialidad0 =$filpro0['especialidad'];
    $Prol0 =$filpro0['rol'];
   
    $idmed =$filpro0['idmed'];
    $Ptipomo0 =$filpro0['tipomo'];

    $valor0 =$filpro0['valor'];
    $Pvalor0 = $Ptipomo0.' '.'$'. number_format($valor0,2);

    $pREDmedica =$filpro0['red'];
    $Pestatus0 =$filpro0['estatus'];
    $listaprecios =$filpro0['listaprecios'];

    $idtarjemp =$filpro0['idtarjemp'];

    $useresp =$filpro0['useresp'];


    
    $ac1 =$filpro0['ac1'];
    $bene1 =$filpro0['bene1'];
    $unmed1 =$filpro0['unmed1'];
    $valor1 =$filpro0['valor1'];
    
    if(empty($ac1)){
        $p_ac1 = NULL;
        $p_bene1 = NULL;
        $p_unmed1 = NULL;
        $p_valor1 = NULL;
    }else{
        $p_ac1 = $ac1;
        $p_bene1 = $bene1;
        $p_unmed1 = $unmed1;
        $p_valor1 = $valor1;
    }


    $ac2 =$filpro0['ac2'];
    $bene2 =$filpro0['bene2'];
    $unmed2 =$filpro0['unmed2'];
    $valor2 =$filpro0['valor2'];

    if(empty($ac2)){
        $p_ac2 = NULL;
        $p_bene2 = NULL;
        $p_unmed2 = NULL;
        $p_valor2 = NULL;
    }else{
        $p_ac2 = $ac2;
        $p_bene2 = $bene2;
        $p_unmed2 = $unmed2;
        $p_valor2 = $valor2;
    }





    $ac3 =$filpro0['ac3'];
    $bene3 =$filpro0['bene3'];
    $numnin3 =$filpro0['numin'];
    $unmed3 =$filpro0['unmed3'];
    $valor3 =$filpro0['valor3'];


    if(empty($ac3)){
        $p_ac3 = NULL;
        $p_bene3 = NULL;
        $p_numnin3 =NULL;
        $p_unmed3 = NULL;
        $p_valor3 = NULL;
    }else{
        $p_ac3 = $ac3;
        $p_bene3 = $bene3;
        $p_numnin3 =$numnin3;
        $p_unmed3 = $unmed3;
        $p_valor3 = $valor3;
    }




    $ac4 =$filpro0['ac4'];
    $bene4 =$filpro0['bene4'];
    $unmed4 =$filpro0['unmed4'];
    $valor4 =$filpro0['valor4'];


    if(empty($ac4)){
        $p_ac4 = NULL;
        $p_bene4 = NULL;
        $p_unmed4 = NULL;
        $p_valor4 = NULL;
    }else{
        $p_ac4 = $ac4;
        $p_bene4 = $bene4;
        $p_unmed4 = $unmed4;
        $p_valor4 = $valor4;
    }



}

$bdpros1= "SELECT * FROM $crm_pros WHERE nombre  = '$nombremed' ";
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









$tabvalycot= "SELECT * FROM $cat_coti_med WHERE idtarjmed  = '$idtarj_med' AND activo ='1' ";
$qtabvalycot = $dbcot->query($tabvalycot);
  
while ($filpro = $qtabvalycot->fetch(PDO::FETCH_ASSOC)) {
    $idpaq =$filpro['id'];
    $idpaqBase =$filpro['idpaq'];
    $useraprueba =$filpro['useraprueba'];
    $userautoriza =$filpro['userautoriza'];
    $valypaqmed =$filpro['idtarjmed'];
    $paqname =$filpro['procedimiento'];
   
}
/*VALIDAR EXISTENCIA DE PAQUETE BASE*/

$namepaqq = "SELECT * FROM $cat_coti_med WHERE procedimiento = '$paqname'  ";
$qnamepaqq = $dbcot->query($namepaqq);                    


while ($fila = $qnamepaqq->fetch(PDO::FETCH_ASSOC)) {

    $namepaqq = $fila['procedimiento'];  
    $idpaq = $fila['id'];  ////cambiar al subir por id
    $regionPq = $fila['region'];  
    $unidadPq = $fila['unidad'];  
    $idpaqy = $fila['id']; 

    $valyProdced = $fila['procedimiento'];  
}


$tabpaqvent = "SELECT * FROM $tabproced WHERE procedimiento = '$paqname'  ";
$qtabpaqvent = $dbcot->query($tabpaqvent);                    


while ($fila = $qtabpaqvent->fetch(PDO::FETCH_ASSOC)) { 
    $preciohosp = $fila['preciohosp'];  
}

if(empty($preciohosp)){
    $prontFIFTprecio = 'SD';
}else{
    $prontFIFTprecio ='$'.number_format($preciohosp,2);
  
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
require_once 'acuerdosB.php';


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
                ////////////////////SI NO EXISTE PAQUETE BASE
            
                    ?>

                        <div class="tabcpo" >




                            <div for="organizacion" class="label">Red Asociada</div>
                            <input  type="text" id="organizacion" name="organizacion" class="input" value="<?php echo $pREDmedica;?>" readonly>                        

                            <div for="nombre" class="label">Nombre</div>
                            <input type="text" id="nombre" name="nombre" class="input" value="<?php echo $Pnombre0;?>" readonly>
                            
                            <div for="especialidad" class="label">Especialidad</div>

                            <select id="especialidad" name="especialidad" class="select" readonly>
                                <option value="" selected><?php echo $Pespecialidad0;?></option>
                            </select>

                           

                                
                            <div for="obs" class="labelEta2">COTIZACION</div >
                            <input type="text" value="<?php echo $namepaqq;?>" class="input" readonly>
                            <input type="text" value="<?php echo 'AJUSTE MED/INS AL: '. $PORCEaj;?>" class="inputAn" readonly>
                            

                            <table class="cotizac">
                            

                                <tr id="costo">
                                    <th><input type="text" value="COSTO SIN FACTOR" class="nameCo" readonly></th>

                                    <?php

                                        if($adminrol == 'COM'){

                                            ?>
                                                
                                                    <th><input type="text" value="" class="input2" readonly></th>
                                            

                                            <?php
                                            
                                        }else{

                                            ?>
                                                
                                                    <th><input type="text" value="<?php echo $precioSINFAC;?>" class="input2" readonly></th>
                                            

                                            <?php
                                        }
                                    ?>
                                
                                </tr>
                                <tr>
                                    <th><input type="text" value="PRECIO" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $pvVV;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                    <th><input type="text" value="PRECIO HOSPITAL" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $pfFF;?>" class="input2" readonly></th>
                                </tr>

                                <tr>
                                    <th><input type="text" value="IVA" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $precioIVA2;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                    <th><input type="text" value="TOTAL" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $precioTOT2;?>" class="input2" readonly></th>
                                </tr>

                                <tr id="%utilidad">
                                    <th><input type="text" value="% UTILIDAD" class="nameCo" readonly></th>

                                    <?php


                                    if($adminrol == 'COM'){

                                        ?>
                                            
                                                
                                                <th><input type="text" value="" class="input2" readonly></th>
                                                
                                        

                                        <?php

                                    }else{


                                        ?>
                                            
                                                
                                                <th><input type="text" value="<?php echo $MARGENutilidad2;?>" class="input2" readonly></th>
                                                
                                        


                                        <?php
                                    }

                                    ?>
                                
                                </tr>


                                <tr id="$utilidad">
                                    <th><input type="text" value="UTILIDAD" class="nameCo" readonly></th>

                                    <?php


                                        if($adminrol == 'COM'){

                                            ?>
                                            
                                                    
                                                    <th><input type="text" value="" class="input2" readonly></th>
                                                    
                                                

                                            <?php

                                        }else{


                                            ?>
                                            
                                                    <th><input type="text" value="<?php echo $utilidadFINMO;?>" class="input2" readonly></th>
                                                    
                                            


                                            <?php
                                        }

                                        ?>
                            
                                </tr>




                                <tr>
                                    <td colspan="2"> <div class="namesect1b" id="namesect1b">DEDUCCIONES</div></td>
                                </tr>
                            
                                <tr>
                                    <th><input type="text" value="PROMOCION" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $mnamepro;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                
                                    <th><input type="text" value="<?php echo $precioPROM;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                    <th><input type="text" value="ACUERDOS SOCIOS" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $comSOmo;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                    <th><input type="text" value="ACUERDOS NUEVOS MEDICOS" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $comVincMpRINT;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                    <th><input type="text" value="ACUERDOS VINCULACION " class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $comisionVCOTIZ;?>" class="input2" readonly></th>
                                </tr>
                                <tr>
                                    <th><input type="text" value="ACUERDO OTROS" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $comOTmo;?>" class="input2" readonly></th>
                                </tr>
                               

                                <tr>
                                

                                    <th><input type="text" value="UTILIDAD FINAL" class="nameCo" readonly></th>
                                    <th><input type="text" value="<?php echo $utilidadFINMO; ?>" class="input2" readonly></th>
                                </tr>
                            
                            </table>


                            <form class="tabcpo" method="POST"  action="saveTRA.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >


                                <div for="obs" class="labelEta2">ETAPA ACTUAL</div >



                                <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                                <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                                <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                                <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">



                                        <input hidden type="text" value="<?php echo $idtarj_med;?>" name="idtarj_med">
                            
                                        <input hidden type="text" value="<?php echo $Pregion0;?>" name="regionPq"> 
                                        <input hidden type="text" value="<?php echo $Punidad0;?>" name="unidadPq">
                                        <input hidden type="text" value="<?php echo $namepaqq;?>" name="namepaqq" >

                                        <input hidden type="text" value="<?php echo $preciosinfactor;?>" name="costo"> 
                                        <input hidden type="text" value="<?php echo $pv;?>" name="precio">
                                        <input hidden type="text" value="<?php echo $Aj;?>" name="ajmedin">
                                        <input hidden type="text" value="<?php echo $pf;?>" name="preciohosp">
                                        <input hidden type="text" value="<?php echo $iva2;?>" name="iva">
                                        <input hidden type="text" value="<?php echo $TOTALTOT2;?>" name="total">
                                        <input hidden type="text" value="<?php echo $margenU2;?>" name="utilidadpor">
                                        <input hidden type="text" value="<?php echo $utilidad2;?>" name="utilidadmo">
                                        <input hidden type="text" value="<?php echo $mnamepro;?>" name="mnamepro">
                                        <input hidden type="text" value="<?php echo $precioPROMO;?>" name="promopor">
                                        <input hidden type="text" value="<?php echo $comSOCios;?>" name="comso">
                                        <input hidden type="text" value="<?php echo $comisionVCo;?>" name="comvic">
                                        <input hidden type="text" value="<?php echo $comOT;?>" name="comOT">

                                      
                                        

                            <input hidden type="text" value="" name="person">
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
                                                <option value="" ></option>    
                                                <option value="3" >PROGRAMACION</option>
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProg">
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
                                                <option value="" ></option>    
                                                <option value="3" >PROGRAMACION</option>
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProg">
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
                                                <option value="" ></option>    
                                                <option value="3" >PROGRAMACION</option>
                                                <option value="8" >RECHAZAR POR PRECIO</option>
                                                <option value="9" >RECHAZAR POR OTROS MOTIVOS</option>
                                                <option value="10" >CANCELAR</option>
                                            </select>
                                            <input type="submit" value="MOVER" id="savemod" name="saveProg">
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
                                   
                                }
                            ?>
                                
                           
                            </form>
                        </div>

                    <?php
             

            ?>

        </section>
                      

        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect3coti">SEGUIMIENTO </div>
    
      

            <input type="image" src="../../img/suite/recarga2.png" id="reloadIcon" onclick="location.reload();">


            <form id="backReg" action="coti.php" method="POST">
                    <img id="botcot" src="../../img/suite/regresar2.png" class="bottask">
                    <div class="lineAC" id="lineAC3b"></div>
                    <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                    <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                    <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                    <input hidden type="text" value="<?php echo $idtarj_med;?>" name="idtarj_med">
                    <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">
               <input type="submit"  id="regresar">
            
            </form>
                       
            <form id="backprint" method="POST" action="printY.php" target="_blank" >

                <input hidden type="text" value="<?php echo $idpaq;?>" name="paquete" >
    
          
             
              
                <input hidden type="text" value="<?php echo $pf;?>" name="pf" >
                <input hidden type="text" value="<?php echo $iva2;?>" name="iva2" >
                <input hidden  type="text" value="<?php echo $TOTALTOT2;?>" name="TOTALTOT2" >
                <input hidden type="image" src="img/printOK2.png" id="modi">
              
                <input type="image"  src="../../../../img/ICONOS/print1.svg" id="printIcon" name="print" onclick="imprimir();">


            </form>
      
            <div id="backvERCotiza">

                <div id="backverCoti">   
                    
                    <div class="namecotasky left">Cotización</div>
            
                        <datalist id="cat_pre">
                            <?php
                            
                            $tabprec = "SELECT * FROM $tabPre";
                            $qtabprec = $dbcot->query($tabprec);

                            foreach ($qtabprec as $opciones){ ?>

                            <option value="<?php echo $opciones['descripcion'];?>"><?php echo $opciones['descripcion'];?></option>

                                <?php
                            }
                            $tabprec2 = "SELECT * FROM $tabPre";
                            $qtabprec2 = $dbcot->query($tabprec2);

                            foreach ($qtabprec2 as $opciones){ ?>

                            <option value="<?php echo $opciones['descripcion'];?>"><?php echo $opciones['idsap'];?></option>

                                <?php
                            }

                            ?> 

                        </datalist>


                        

                        <?php

                        if(empty($valyProdced)){

                        }else{
                         
                            if($vincumod == 'REVISAR' ){

                                ?>                          

                                    <form  method="POST" action="saveModpaq.php" autocomplete="off">
                                      
                                        <input hidden type="text" value="<?php echo $namepaqq;?>" name="namepaqq">
                                        <input hidden type="text" value="<?php echo $idpaqy;?>" name="idpaqy" >
                                        <input hidden type="text" value="<?php echo $Pespecialidad0;?>" name="especialidad0">
                                        <input hidden type="text" value="<?php echo $promo;?>" name="promo">
                                        <input hidden type="text" value="<?php echo $vincumod;?>" name="vincumod">
                                       



                                        <input hidden type="text" value="<?php echo $nombremed;?>" name="nombremed">
                                        <input hidden type="text" value="<?php echo $idmedico;?>" name="idmedico">
                                        <input hidden type="text" value="<?php echo $redName;?>" name="redName">
                                        <input hidden type="text" value="<?php echo $idtarjeta;?>" name="idtarjeta">
                                        <input hidden type="text" value="<?php echo $idtarj_med;?>" name="idtarj_med">
                                        
                                        
                                        <input hidden type="text" value="<?php echo $regionPq;?>" name="regionPq"> 
                                        <input hidden type="text" value="<?php echo $unidadPq;?>" name="unidadPq">




                                        
                                        
                                        <input type="submit" value="MODIFICAR" name="modPaq" id="vincularBoton">
                                            
                                        <table id="tablecotiz">

                                            <tr>
                                                <th class="col0">TIPO</th>
                                            
                                                <th class="col1">CANTIDAD</th>
                                                <th class="col2">ARTICULO O SERVICIO</th>
                                            
                                                <th class="col5"></th>
                                            </tr>

                                    

                                            <?php
                                           

                                                    ////////////////////////////////////////////////DATOS ARTICULOS
                                                    $tabpaqMed = "SELECT * FROM $cat_paquetes_med WHERE idpaq = '$idpaq' AND activo = '1'   ORDER BY tipo ASC ";
                                                    $qtabpaqMed = $dbcot->query($tabpaqMed);                    


                                                    while ($fila = $qtabpaqMed->fetch(PDO::FETCH_ASSOC)) {
                                                        $idlye = $fila['id'];    
                                                        $tipo = $fila['tipo'];      
                                                        $cantidad = $fila['cantidad'];  
                                                        $idsap = $fila['idsap']; 
                                                        $artiser = $fila['artiser'];/*
                                                        $costoP = $fila['costo'];
                                                        $factorP = $fila['factor'];*/
                                                        $tipo = $fila['tipo'];

                                                        $PRECIO = "SELECT * FROM $tabPre WHERE idsap = '$idsap' AND red ='$listaprecios'  ";
                                                        $QPRECIO = $dbcot->query($PRECIO);                    
                            
                            
                                                        while ($filas = $QPRECIO->fetch(PDO::FETCH_ASSOC)) {
                            
                                                            $costo = $filas['costo'];  
                                                            $factor = $filas['factor']; 
                                                            $precioventa = $filas['precioventa']; 
                                                            $artiser = $filas['descripcion']; 
                                                            $idsapLY = $filas['idsap']; 
                                                        }




                                                            echo '
                                                            
                                                            
                                                                <tr>
                                                                
                                                                

                                                    
                                                                    <td hidden><input type="text" name="id_mod[]" value="' . $fila['id'] . '"></td>


                                                                    <td hidden> <input type="text" class="center inputVCo" name="idlye[' . $fila['id'] .  ']" value="' . $idlye . '">  </td>
                                                                    <td hidden> <input type="text" class="center inputVCo" name="idsapLY[' . $fila['id'] .  ']" value="' . $idsapLY . '">  </td>

                                                                    <td > <input type="text" class="center inputVCo" name="tipoLY[' . $fila['id'] .  ']" value="' . $tipo . '">  </td>
                                                                    <td hidden> <input type="text"  class="center inputVCo" name="artiserLY[' . $fila['id'] .  ']" value="' . $artiser . '">  </td>
                                                                    <td hidden>
                                                                        <input type="number" class="center inputVCo" name="costoLY[' . $fila['id'] .  ']" value="' . $costo . '"> 
                                                                
                                                                    </td>
                                                                    <td hidden>
                                                                        <input type="number" class="center inputVCo" name="factorLY[' . $fila['id'] .  ']" value="' . $factor . '"> 
                                                                
                                                                    </td>

                                                                        <td hidden>
                                                                        <input type="number" class="center inputVCo" name="ventaLy[' . $fila['id'] .  ']" value="' . $precioventa . '"> 
                                                                
                                                                    </td>

                                                                
                                                                    <td >
                                                                        <input type="number" class="center inputVCo" name="cantidad[' . $fila['id'] .  ']" value="' . $cantidad . '"> 
                                                                
                                                                    </td>



                                                                    <td ><input type="text"  class="left inputVCo "  value="' . $artiser .  '" readonly></td>
                                                            
                                                                    

                                                                    ';


                                                                

                                                                    echo '
                                                                
                                                                
                                                                    <td class="center ">
                                                                        <select name="accionLy[' . $fila['id'] .  ']" class="inputVCo">

                                                                            <option value="" selected>MANTENER</option>
                                                                            <option value="MOD">MODIFICAR</option>
                                                                            <option value="ELIMINAR">ELIMINAR</option>
                                                                        
                                                                        </select>
                                                                    </td>
                                                                </tr>


                                                            
                                                            ';


                                        
                                                        
                                                        
                                                    }



                                                    
                                                    $consCed = "SELECT * FROM $tabform  WHERE hasta20";
                                                    $qconsCed = $db_all->query($consCed);

                                                    while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {

                                                        echo '
                                                
                                                
                                                                <tr class="fila2" id="bloqHAB"> 

                                                                    <td hidden><input type="text" name="id_ag[]" value="' . $filaCed['id'] . '"></td>


                                                                    <td>
                                                                        <select name="tipoC[' . $filaCed['id'] . ']" id=tipoMO class="inputVCo">
                                                                            <option value="" selected>Tipo...</option>
                                                                            <option value="HABITACION" >HABITACION</option>
                                                                            <option value="ATENCION QUIRURGICA" >ATENCION QUIRURGICA</option>
                                                                            <option value="INSUMOS" >INSUMOS</option>
                                                                            <option value="MEDICAMENTOS" >MEDICAMENTOS</option>
                                                                        </select>
                                                                    </td>
                                                                    <td colspan="1">
                                                                        <input type="number" class="cantidad center inputVCo"  step="0.01" name="cantidadC[' . $filaCed['id'] . ']"  placeholder="Cantidad" spellcheck="false"  >
                                                                    </td>

                                                                    <td colspan="1">
                                                                        <input type="list" list="cat_pre" name="articuloC[' . $filaCed['id'] . ']" class="articulo inputVCo" placeholder="Artículos o Servicios" "> 
                                                                    </td>

                                                                

                                                                    <td>
                                                                        <select name="agregarC[' . $filaCed['id'] . ']" id=tipoMO class="inputVCo">

                                                                            <option value="" selected>AGREGAR?</option>
                                                                            <option value="SI">SI</option>
                                                                        
                                                                        </select>
                                                                    </td>
                                                            
                                                                
                                                                </tr>
                                                        
                                                        
                                                        ';

                                                    }



                                                ?>





                                        </table>
                                            


                    
                                    </form>

                                <?php

                            }
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