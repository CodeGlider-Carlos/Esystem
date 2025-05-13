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


    
}else{
    $person = $_POST['person'];

}



$bdpros0= "SELECT * FROM $crm_prosE WHERE acron  = '$person' ";
$qbdpros0 = $dbc->query($bdpros0);
  
while ($filpro = $qbdpros0->fetch(PDO::FETCH_ASSOC)) {
    $Pid0 =$filpro['id'];
    $Pcategoria0 =$filpro['categoria'];
    $acronimoQ =$filpro['acron'];

    $Pnombre0 =$filpro['nombreco'];
    $Pespecialidad0 =$filpro['especialidad'];
    $Ptel10 =$filpro['tel1'];
    $nombrecontacto =$filpro['nombrecontacto'];
    $Ptel20 =$filpro['tel2'];
    $Pemail0 =$filpro['email'];
    $Ptipomo0 =$filpro['tipomo'];

    $valor0 =$filpro['valor'];
    $Pvalor0 = $Ptipomo0.' '.'$'. number_format($valor0,2);

    $Pfuente0 =$filpro['fuente'];
    $Pfinterna0 =$filpro['finterna'];
    $Puseresp0 =$filpro['useresp'];
    $Pobs0 =$filpro['obs'];
}

$tabnamlead = "SELECT * FROM $users_lead WHERE user = '$Puseresp0' ";
$qtabnamlead = $dbc->query($tabnamlead);

while ($filpro = $qtabnamlead->fetch(PDO::FETCH_ASSOC)) {
    $nombreUser =$filpro['nombre'];
    $useres =$filpro['user'];
}


///////VALIDAR EXISTENCIA DE TARJETA

$valyred= "SELECT * FROM $cat_tarjetas_emp WHERE idemp = '$Pid0' AND red = '$acronimoQ'  ";

$qvalyred = $dbc->query($valyred); 
while ($filpro = $qvalyred->fetch(PDO::FETCH_ASSOC)) {
  $valyredy =$filpro['idemp'];

  $listaprecios  =$filpro['listaprecios'];
  $valor  =$filpro['valor'];

  $fechaini  =$filpro['fechaini'];
  $fechafin  =$filpro['fechafin'];


  $carac1  =$filpro['carac1'];
  $carac2  =$filpro['carac2'];
  $carac3  =$filpro['carac3'];
  $carac4  =$filpro['carac4'];
  $carac5  =$filpro['carac5'];
  $carac6  =$filpro['carac6'];
  $carac7  =$filpro['carac7'];
  $carac8  =$filpro['carac8'];
  $carac9  =$filpro['carac9'];
  $carac10  =$filpro['carac10'];
  $obs  =$filpro['obs'];

  $ac1  =$filpro['ac1'];
  $bene1  =$filpro['bene1'];

  $ac2  =$filpro['ac2'];
  $bene2  =$filpro['bene2'];

  $ac3  =$filpro['ac3'];
  $bene3  =$filpro['bene3'];

  $ac4  =$filpro['ac4'];
  $bene4  =$filpro['bene4'];

  $numin  =$filpro['numin'];
}



if(empty($valyredy)){

}else{
////////////////////////////////////////
$tabac1= "SELECT * FROM $cat_acuerdos WHERE id = '$ac1'  ";
$qtabac1 = $dbc->query($tabac1); 

while ($filpro = $qtabac1->fetch(PDO::FETCH_ASSOC)) {
  $nombremod1 =$filpro['nombremod'];
 }
 if(empty($nombremod1)){
    $acuerdo1 = 'SIN ACUERDO';
  }else{
    $acuerdo1 = $nombremod1;
  }





$tabbene1= "SELECT * FROM $cat_acuerdos_bene WHERE id = '$bene1'  ";
$qtabbene1 = $dbc->query($tabbene1); 
while ($filpro = $qtabbene1->fetch(PDO::FETCH_ASSOC)) {
  $nombrebene1 =$filpro['bene'];

}

if(empty($nombrebene1)){
    $benef1 = 'SIN BENEFICIARIO';
  }else{
    $benef1 = $nombrebene1;
  }

///////////////////////////////////////////////
$tabac2= "SELECT * FROM $cat_acuerdos WHERE id = '$ac2'  ";
$qtabac2 = $dbc->query($tabac2); 

while ($filpro = $qtabac2->fetch(PDO::FETCH_ASSOC)) {
  $nombremod2 =$filpro['nombremod'];
}
if(empty($nombremod2)){
    $acuerdo2 = 'SIN ACUERDO';
  }else{
    $acuerdo2 = $nombremod2;
  }





$tabbene2= "SELECT * FROM $cat_acuerdos_bene WHERE id = '$bene2'  ";
$qtabbene2 = $dbc->query($tabbene2); 
while ($filpro = $qtabbene2->fetch(PDO::FETCH_ASSOC)) {
  $nombrebene2 =$filpro['bene'];

}
if(empty($nombrebene2)){
    $benef2 = 'SIN BENEFICIARIO';
  }else{
    $benef2 = $nombrebene2;
  }


  ///////////////////////////////////////////////


$tabac3= "SELECT * FROM $cat_acuerdos WHERE id = '$ac3'  ";
$qtabac3 = $dbc->query($tabac3); 

while ($filpro = $qtabac3->fetch(PDO::FETCH_ASSOC)) {
  $nombremod3 =$filpro['nombremod'];

 }
 if(empty($nombremod3)){
    $acuerdo3 = 'SIN ACUERDO';
  }else{
    $acuerdo3 = $nombremod3;
  }


  if(empty($numin)){
    $numin3 = 'SIN DATOS';
  }else{
    $numin3 = $numin;
  }
  

  $tabbene3= "SELECT * FROM $cat_acuerdos_bene WHERE id = '$bene3'  ";
  $qtabbene3 = $dbc->query($tabbene3); 
  while ($filpro = $qtabbene3->fetch(PDO::FETCH_ASSOC)) {
    $nombrebene3 =$filpro['bene'];
  
  }

  if(empty($nombrebene3)){
    $benef3 = 'SIN BENEFICIARIO';
  }else{
    $benef3 = $nombrebene3;
  }

////////////////////////////////////
$tabac4= "SELECT * FROM $cat_acuerdos WHERE id = '$ac4'  ";
$Qtabac4 = $dbc->query($tabac4); 

while ($filpro = $Qtabac4->fetch(PDO::FETCH_ASSOC)) {
  $nombremod4 =$filpro['nombremod'];
 }
 if(empty($nombremod4)){
    $acuerdo4 = 'SIN ACUERDO';
  }else{
    $acuerdo4 = $nombremod4;
  }




  $tabbene4= "SELECT * FROM $cat_acuerdos_bene WHERE id = '$bene4'  ";
  $qtabbene4 = $dbc->query($tabbene4); 
  while ($filpro = $qtabbene4->fetch(PDO::FETCH_ASSOC)) {
    $nombrebene4 =$filpro['bene'];
  
  }


  if(empty($nombrebene4)){
    $benef4 = 'SIN BENEFICIARIO';
  }else{
    $benef4 = $nombrebene4;
  }

}

echo $cat_listas_precios;
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

      <script type="text/javascript" src="js/tarjetas.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/tarjetas.css">
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

            <img id="lognav1" src="../../img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

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
        
            <div class="line1"></div>
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
            <div class="namesect" id="namesect1">TARJETA DE CONVENIO</div>
           
            <div id="block0">

                <div id="backfotoname">
                    <div class="namesect" id="namesect1">RED</div>
                    <div id="backfotoALL">             

                        <div class="backfoto">
                            
                            <img id="imgPERSO" src="../../img/suite/emp.png" >

                        </div>

                        
                        <div class="labelTarj" id="nombreTXT">Nombre</div>
                        <div class="txtarj" id="nombreNAME"><strong><?php echo $Pnombre0;?></strong></div>

                        <div class="labelTarj" id="especialidadTXT">Categoría</div>
                        <div class="txtarj" id="especialidadNAME"><strong><?php echo $Pcategoria0;?></strong></div>


                    </div>
                    <div class="backNivel">


                        
                    
                        <img class="nivel" src="../../img/suite/N.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >

                    </div>

                    <div class="backSatsfacc">


                        <img class="nivel" src="../../img/suite/N.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >
                        <img class="nivel" src="../../img/suite/estrella2.png" >

                    </div>

                </div>   

                <div id="backValorPerson">

                    <div class="label center" >Estatus</div>

                    <input type="text" value="1era vez" class="input"  readonly  >
                

                    <div class="label center" >Atenciones Acumuladas</div>
                    <input type="text" value="" class="input"  readonly  >

                    
                    <div class="label center" >Atenciones del Mes</div>
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Última Atención</div>            
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Ticket Promedio Venta</div>            
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Utilidad Promedio</div>            
                    <input type="text" value="" class="input"  readonly  >

                    
                    <div class="label center" >Venta Acumulada</div>            
                    <input type="text" value="" class="input"  readonly  >

                    
                    <div class="label center" >Venta del Mes</div>            
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Comisiones Acumuladas</div>            
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Comisiones del Mes</div>            
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Descuentos Acumulados</div>            
                    <input type="text" value="" class="input"  readonly  >

                    <div class="label center" >Descuentos del Mes</div>            
                    <input type="text" value="" class="input"  readonly  >

                </div>

                <div id="backredEMP">

                    <?php

                    

                            ?>

                                <table class="tableredEM">


                                    <tr>
                                        <th class="redEmpCol"></th>
                                        <th  class="redEmpCol">CATEGORIA</th>
                                        <th >NOMBRE</th>
                                    </tr>

            


                                    <?php
                                                
                                        
                                            $bdpros= "SELECT * FROM $cat_tarjetas_emp WHERE red = '$person'  ";
                                            $qbdpros = $dbc->query($bdpros);

                                            
                                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                                $categoriaCA =$filpro['categoria'];
                                                $nombre =$filpro['nombre'];

                                                ?>

                                                <tr>
                                                    <td class="colcheck3">
                                                        <img class="checkw" src="../../img/suite/checkB.png" >
                                                    </td>
                                                    <td class="colcheck4"><?php echo $categoriaCA ?></td>
                                                    <td class="colcheck5"><?php echo $nombre ?></td>
                                                </tr>


                                                <?php

                                            }

                                        

                                    ?>


                                
                    
                                </table>
                                 

                            <?php

                        
                    ?>

                </div>

            </div>

        </section>

        

        <div id="MAS1">CREAR TARJETAS DE RED</div>

        <section id="section2" class="sectionmodVINC">

            <div class="namesect" id="namesect1">DATOS CONVENIO</div>


            <form class="tabcpo" method="POST" action="save_tarj_emp.php"  autocomplete="off" onkeydown="return event.key != 'Enter';" >

                <input hidden type="text" name="useresp"  value="" >

                <input hidden type="text" name="fijo"  value="" >
                <input hidden type="text" name="estimado"  value="" >
                <input hidden type="text" name="precios"  value="" >
                <input hidden type="text" name="paquetes"  value="" >
                <input hidden type="text" name="honorarios"  value="" >
                <input hidden type="text" name="bajoco"  value="" >
                <input hidden type="text" name="equ"  value="" >
                <input hidden type="text" name="red"  value="" >
                <input hidden type="text" name="acuerdo"  value="" >
                <input hidden type="text" name="otros"  value="" >
                <input hidden type="text" name="obs"  value="" >

                <input hidden type="text" name="ac1"  value="" >
                <input hidden type="text" name="bene1"  value="" >

                <input hidden type="text" name="ac2"  value="" >
                <input hidden type="text" name="bene2"  value="" >
              

                <input hidden type="text" name="ac3"  value="" >
                <input hidden type="text" name="bene3"  value="" >
                <input hidden type="text" name="numin3"  value="" >
               

                <input hidden type="text" name="ac4"  value="" >
                <input hidden type="text" name="bene4"  value="" >
            

                <datalist id="medicos">

                    <?php


                        if($adminrol== $radmin ){
                            $bdpros= "SELECT * FROM $crm_pros ";
                            $qbdpros = $dbc->query($bdpros);
                        }elseif($adminrol== $radmin ){
                            $bdpros= "SELECT * FROM $crm_pros WHERE region LIKE '%$userAcroregion%' ";
                            $qbdpros = $dbc->query($bdpros);
                        }else{
                            $bdpros= "SELECT * FROM $crm_pros WHERE useresp LIKE '%$userLog%' ";
                            $qbdpros = $dbc->query($bdpros);
                        }


                    
                        foreach ( $qbdpros as $opciones){ ?>
                        <option value="<?php echo $opciones['nombre']?>"></option>
                        <?php
                        }
                                        
                    ?>

                </datalist>

                <input hidden type="text" value="<?php echo $Pid0;?>" name="idemp">
                <input hidden type="text" value="<?php echo $person;?>" name="person">


                <?php

                        if(empty($valyredy)){

                            ?>

                                <div id="blokeUNO">               
                                
                                    <div for="categoria" class="label">Usuario responsable</div>                
                                    <select id="useresp" name="useresp" class="select" required>
                                        <option value="<?php echo $useres;?>" ><?php echo $nombreUser;?></option>
                                        <?php

                                            if($adminrol == $radmin ){
                                                $tabuslead = "SELECT * FROM $users_lead";
                                            }elseif($adminrol == $radreg){
                                                $tabuslead = "SELECT * FROM $users_lead WHERE region = '$userAcroregion' ";
                                            }elseif($adminrol == $radcom){
                                                $tabuslead = "SELECT * FROM $users_lead WHERE region = '$userAcroregion' ";
                                            }else{
                                                $tabuslead = "SELECT * FROM $users_lead WHERE unidad = '$userAcronu' ";
                                            }

                                            
                                            $qtabuslead = $dbc->query($tabuslead);

                                            foreach ($qtabuslead as $opciones){ ?>

                                            <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                                <?php
                                        
                                            }
                                        ?>
                                    </select>   

                                    <div for="categoria" class="label">Lista de precios a vincular</div>                
                                    <select id="listaprecios" name="listaprecios" class="select" requiered >
                                        <option value="" selected>...</option>
                                        <?php

                                            $tabuslead = "SELECT * FROM $cat_listas_precios";
                                        
                                            $qtabuslead = $dbcot->query($tabuslead);

                                            foreach ($qtabuslead as $opciones){ ?>

                                            <option value="<?php echo $opciones['nombrelista'];?>"><?php echo $opciones['nombrelista'];?></option>

                                                <?php
                                        
                                            }
                                        ?>
                                    </select>   
                                    
                                    <div for="valor" class="label">Estimación Mensual por Atenciones</div>
                                    <input type="text" id="valor" name="valor" class="input" placeholder="ej. 45000" required >
                                

                                    <div for="valor" class="label">Características</div>

                                    <table class="table">

                                                            
                                        <tr>
                                            <td ><div for="categoria" class="label nomtx">Monto mensual fijo</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="fijo"  value="MONTO MENSUAL FIJO" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td ><div for="categoria" class="label nomtx">Monto mensual estimado</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="estimado"  value="MONTO MENSUAL ESTIMADO" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>


                                        <tr>
                                        
                                            <td ><div for="categoria" class="label nomtx">Lista de precios exclusiva</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="precios"  value="LISTA DE PRECIOS EXCLUSIVA" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td ><div for="categoria" class="label nomtx">Paquetes personalizados</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="paquetes"  value="PAQUETES PERSONALIZADOS" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td ><div for="categoria" class="label nomtx">Paquetes con honorarios</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="honorarios"  value="PAQUETES CON HONORARIOS" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>



                                        <tr>
                                            <td ><div for="categoria" class="label nomtx">Medicamentos o insumos de bajo costo</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="bajoco"  value="MEDICAMENTOS O INSUMOS DE BAJO COSTO" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td ><div for="categoria" class="label nomtx">Proveedor de equipos de convenio</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="equ"  value="PROVEEDOR DE EQUIPOS DE CONVENIO" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td ><div for="categoria" class="label nomtx">Red médica exclusiva</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="red"  value="RED MEDICA EXCLUSIVA" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>





                                        <tr>
                                            <td ><div for="categoria" class="label nomtx">Incluye acuerdo</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="acuerdo"  value="ACUERDO" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td ><div for="categoria" class="label nomtx">Otros</div></td>
                                            <td>
                                                <label class="content-input" >
                                                    <input type="checkbox" name="otros"  value="OTROS" >
                                                    <i></i>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <textarea id="textarea" class="input2" name="obs" placeholder="observaciones..."></textarea>
                                            
                                            </td>
                                        </tr>


                                        

                                    </table>

                                </div>

                                <div id="blokeDOS">    
                                
                                    <div for="valor" class="label">Fecha de Inicio</div>
                                    <input type="date" class="input" name="fechaini" requiered>

                                    <div for="valor" class="label">Fecha Fin</div>
                                    <input type="date" class="input"  name="fechafin" requiered>

                            
                                            
                                    <table class="tablaca">

                                        <tr>
                                            <td> <div for="valor" class="label">Acuerdo convenios montos fijos</div></td>
                                        
                                        </tr>
                                        <tr>
                                            <td>
                                                <select id="comso" name="ac1" class="select">
                                                    <option value="" >...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '2'  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            
                                                <select id="comso" name="bene1" class="select bene" >
                                                    <option value="" >Beneficiario...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td> <div for="valor" class="label">Acuerdo convenios sin montos fijos</div></td>
                                        
                                        </tr>

                                        <tr>
                                            <td>
                                                <select id="comso" name="ac2" class="select">
                                                    <option value="" >...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '3'  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>
                                            </td>

                                        </tr>


                                        <tr>

                                            <td>

                                                                            
                                                <select id="comso" name="bene2" class="select bene" >
                                                    <option value="" >Beneficiario...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td> <div for="valor" class="label">Acuerdo a partir de productividad mínima</div></td>
                                        
                                        </tr>

                                        <tr>
                                            <td>
                                            
                                                <select id="comso" name="ac3" class="select">
                                                    <option value="" >...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '4'  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>

                                                <select id="comso" name="bene3" class="select bene" >
                                                    <option value="" >Beneficiario...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="text" id="valor" name="numin3" class="input" placeholder="número mínimo">
                                            </td>
                                            
                                        </tr>

                                        
                                        <tr>
                                            <td> <div for="valor" class="label">Acuerdo por facturación total</div></td>
                                        
                                        </tr>

                                        <tr>
                                            <td>
                                            
                                                <select id="comso" name="ac4" class="select">
                                                    <option value="" >...</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '5'  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>

                                            </td>

                                        </tr>


                                        <tr>

                                            <td>

                                            
                                                <select id="comso" name="bene4" class="select bene" >
                                                    <option value="" >...</option>
                                                    <option value="SOCIOS" >SOCIOS</option>
                                                    <?php

                                                        $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                        $qtacbac = $dbc->query($tacbac);

                                                        foreach ($qtacbac as $opciones){ ?>

                                                        <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                            <?php
                                                    
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>



                                    </table>

                                    <select class="select2" name="accion" requiered>
                                        <option value="" selected>acción...</option>
                                        <option value="ALTA">ALTA</option>
                                    </select>
                                    <input type="submit" value="CONTINUAR" id="GUARDARta" name="savetarj">  
                                
                                </div>

                            <?php

                        }else{

                            ?>

                            <div id="blokeUNO">               
                            
                                <div for="categoria" class="label">Usuario responsable</div>                
                                <select id="useresp" name="useresp" class="select" required>
                                    <option value="<?php echo $useres;?>" ><?php echo $nombreUser;?></option>
                                    <?php

                                        if($adminrol == $radmin ){
                                            $tabuslead = "SELECT * FROM $users_lead";
                                        }elseif($adminrol == $radreg){
                                            $tabuslead = "SELECT * FROM $users_lead WHERE region = '$userAcroregion' ";
                                        }elseif($adminrol == $radcom){
                                            $tabuslead = "SELECT * FROM $users_lead WHERE region = '$userAcroregion' ";
                                        }else{
                                            $tabuslead = "SELECT * FROM $users_lead WHERE unidad = '$userAcronu' ";
                                        }

                                        
                                        $qtabuslead = $dbc->query($tabuslead);

                                        foreach ($qtabuslead as $opciones){ ?>

                                        <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                            <?php
                                    
                                        }
                                    ?>
                                </select>   

                                <div for="categoria" class="label">Lista de precios a vincular</div>                
                                <select id="listaprecios" name="listaprecios" class="select" requiered >
                                    <option value="<?php echo $listaprecios;?>"><?php echo $listaprecios;?></option>
                                    <?php

                                        $tabuslead = "SELECT * FROM $cat_listas_precios";
                                    
                                        $qtabuslead = $dbcot->query($tabuslead);

                                        foreach ($qtabuslead as $opciones){ ?>

                                        <option value="<?php echo $opciones['nombrelista'];?>"><?php echo $opciones['nombrelista'];?></option>

                                            <?php
                                    
                                        }
                                    ?>
                                </select>   
                                
                                <div for="valor" class="label">Estimación Mensual por Atenciones</div>
                                <input type="text" id="valor" name="valor" class="input" placeholder="ej. 45000" value="<?php echo $valor;?>" required >
                            

                                <div for="valor" class="label">Características</div>

                                <table class="table">

                                                        
                                    <tr>
                                        <td ><div for="categoria" class="label nomtx">Monto mensual fijo</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="fijo"  value="MONTO MENSUAL FIJO" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td ><div for="categoria" class="label nomtx">Monto mensual estimado</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="estimado"  value="MONTO MENSUAL ESTIMADO" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>


                                    <tr>
                                    
                                        <td ><div for="categoria" class="label nomtx">Lista de precios exclusiva</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="precios"  value="LISTA DE PRECIOS EXCLUSIVA" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td ><div for="categoria" class="label nomtx">Paquetes personalizados</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="paquetes"  value="PAQUETES PERSONALIZADOS" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td ><div for="categoria" class="label nomtx">Paquetes con honorarios</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="honorarios"  value="PAQUETES CON HONORARIOS" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td ><div for="categoria" class="label nomtx">Medicamentos o insumos de bajo costo</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="bajoco"  value="MEDICAMENTOS O INSUMOS DE BAJO COSTO" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td ><div for="categoria" class="label nomtx">Proveedor de equipos de convenio</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="equ"  value="PROVEEDOR DE EQUIPOS DE CONVENIO" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td ><div for="categoria" class="label nomtx">Red médica exclusiva</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="red"  value="RED MEDICA EXCLUSIVA" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>





                                    <tr>
                                        <td ><div for="categoria" class="label nomtx">Incluye acuerdo</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="acuerdo"  value="ACUERDO" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td ><div for="categoria" class="label nomtx">Otros</div></td>
                                        <td>
                                            <label class="content-input" >
                                                <input type="checkbox" name="otros"  value="OTROS" >
                                                <i></i>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <textarea id="textarea" class="input2" name="obs" placeholder="<?php echo $carac1.','.$carac2.','.$carac3.','.$carac4.','.$carac5.','.$carac6.','.$carac7.','. $carac8.','.$carac9.','.$carac10.','.$obs;?>"></textarea>
                                        
                                        </td>
                                    </tr>


                                    

                                </table>

                            </div>

                            <div id="blokeDOS">    
                            
                                <div for="valor" class="label">Fecha de Inicio</div>
                                <input type="text" class="input" name="fechaini" value="<?php echo $fechaini; ?>" placeholder="registrar fecha ej. 2024-07-18" requiered>

                                <div for="valor" class="label">Fecha Fin</div>
                                <input type="text" class="input"  name="fechafin" value="<?php echo $fechafin; ?>"  placeholder="registrar fecha ej. 2024-07-18" requiered>

                        
                                        
                                <table class="tablaca">

                                    <tr>
                                        <td> <div for="valor" class="label">Acuerdo convenios montos fijos</div></td>
                                    
                                    </tr>
                                    <tr>
                                        <td>
                                            <select id="comso" name="ac1" class="select">
                                                <option value="" ><?php echo $acuerdo1; ?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '2'  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        
                                            <select id="comso" name="bene1" class="select bene" >
                                                <option value="" ><?php echo $benef1;?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <div for="valor" class="label">Acuerdo convenios sin montos fijos</div></td>
                                    
                                    </tr>

                                    <tr>
                                        <td>
                                            <select id="comso" name="ac2" class="select">
                                                <option value="" ><?php echo $acuerdo2; ?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '3'  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>
                                        </td>

                                    </tr>


                                    <tr>

                                        <td>

                                                                        
                                            <select id="comso" name="bene2" class="select bene" >
                                                <option value="" ><?php echo  $benef2;?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> <div for="valor" class="label">Acuerdo a partir de productividad mínima</div></td>
                                    
                                    </tr>

                                    <tr>
                                        <td>
                                        
                                            <select id="comso" name="ac3" class="select">
                                                <option value="" ><?php echo $acuerdo3; ?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '4'  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <select id="comso" name="bene3" class="select bene" >
                                                <option value="" ><?php echo  $benef3;?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="text" id="valor" name="numin3" class="input" placeholder="número mínimo" value="<?php echo  $numin3;?>">
                                        </td>
                                        
                                    </tr>

                                    
                                    <tr>
                                        <td> <div for="valor" class="label">Acuerdo por facturación total</div></td>
                                    
                                    </tr>

                                    <tr>
                                        <td>
                                        
                                            <select id="comso" name="ac4" class="select">
                                                <option value="" ><?php echo $acuerdo4; ?></option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos WHERE criterio = '5'  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombremod'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>

                                        </td>

                                    </tr>


                                    <tr>

                                        <td>

                                        
                                            <select id="comso" name="bene4" class="select bene" >
                                                <option value="" ><?php echo  $benef4;?></option>
                                                <option value="SOCIOS" >SOCIOS</option>
                                                <?php

                                                    $tacbac = "SELECT * FROM $cat_acuerdos_bene  ";                       
                                                    $qtacbac = $dbc->query($tacbac);

                                                    foreach ($qtacbac as $opciones){ ?>

                                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['bene'];?></option>

                                                        <?php
                                                
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>



                                </table>

                                <select class="select2" name="accion" requiered>
                                    <option value="" selected>acción...</option>
                                 
                                    <option value="ELIMINAR">ELIMINAR</option>
                                </select>
                                <input type="submit" value="CONTINUAR" id="GUARDARta" name="savetarj">  
                            
                            </div>

                        <?php


                        }

                ?>

            </form>

        </section>

   
       
      

        <div id="blockMod"></div>


    </modseg>



</body>

</html>


