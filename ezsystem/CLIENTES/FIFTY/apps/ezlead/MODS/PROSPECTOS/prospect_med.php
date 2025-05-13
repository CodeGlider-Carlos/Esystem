<?php
session_start();
require_once '../../varSQL/bd_leadplus.php';
require_once '../../../../varSQL/var.php';
require_once '../../../../varSQL/bd.php';
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
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

      <script type="text/javascript" src="js/prospect.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/prospect.css">
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


            <form action="../PROSPECTOS/selectprospect.php" id="slognav2">

                <input type="submit" class="submit" >

            </form>

            <div class="line1"></div>
            
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

            <div class="namesect" id="namesect1">AGREGAR PROSPECTOS</div>

            <?php
                if (isset($_POST['modmed'])){

                    $idpros = $_POST['idpros'];

                    if($adminrol == $radmin ){
                        $tabprosmed = "SELECT * FROM $crm_pros WHERE id = '$idpros'  ";
                    }elseif($adminrol == $radger ){
                        $tabprosmed = "SELECT * FROM $crm_pros WHERE id = '$idpros'  ";
                    }else{
                        $tabprosmed = "SELECT * FROM $crm_pros WHERE id = '$idpros'  AND useralta = '$userLog' ";
                    }

                  
                    $qtabprosmed = $dbc->query($tabprosmed);                    


                    while ($fila = $qtabprosmed->fetch(PDO::FETCH_ASSOC)) {
                        $idupd = $fila['id'];  
                        $region = $fila['region'];  
                        $unidad = $fila['unidad'];  
                        $categoria = $fila['categoria'];                        
                        $socio = $fila['socio'];  
                        $titulo = $fila['titulo'];  
                        $nombre = $fila['nombre'];  
                        $especialidad = $fila['especialidad'];  
                        $tel1 = $fila['tel1'];  
                        $tel2 = $fila['tel2'];  
                        $email = $fila['email'];  
                        $rol = $fila['rol'];  
                        $fuente = $fila['fuente'];  
                        $finterna = $fila['finterna'];  
                        $useresp = $fila['useresp']; 
                        $obs = $fila['obs']; 
                    }


                    ?>
                        <form class="tabcpo" method="POST"  action="save_med.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >

                            <div for="categoria" class="label">Región</div>

                            <select id="region" name="region" class="select" required>
                                <option value="" selected><?php  echo $region;?></option>
                                <option value="JAL" >JALISCO</option>
                                <option value="PUE" >PUEBLA</option>
                            
                            </select>

                            <div for="categoria" class="label">Unidad</div>

                           
                            <select id="region" name="unidad"  class="select"  required>  

                                <option value="" selected >Unidad...</option>
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
                                        $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                                        $qtabunid = $db_users->query($tabunid);

                                        foreach ( $qtabunid as $opciones){ ?>

                                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                            <?php
                                    
                                        }
                                    }elseif($adminrol == $radman){
                                        $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$userUnidadAcronu'  ";
                                        $qtabunid = $db_users->query($tabunid);

                                        foreach ( $qtabunid as $opciones){ ?>

                                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                                            <?php
                                    
                                        }
                                    }
                                    
                                ?>
                            </select>


                            <div for="categoria" class="label">Categoria</div>
                            <select id="categoria" name="categoria" class="select" >
                                <option value="" selected><?php  echo $categoria;?></option>
                                <option value="SOCIO" >SOCIO</option>
                                <option value="AFILIADO" >AFILIADO</option>
                                <option value="PARTICULAR" >PARTICULAR</option>
                                <option value="NUCLEO MEDICO" >NUCLEO MEDICO</option>
                                <option value="RED SEGURO" >RED SEGURO</option>
                                <option value="RED EMPRESA" >RED EMPRESA</option>
                                <option value="RED HOSPITAL" >RED HOSPITAL</option>
                            </select>

                            <div for="socio" class="label">Afiliación a Socio</div>                         
                            <select id="socio" name="socio" class="select">
                                <option value="" selected><?php  echo $socio;?></option>
                                <?php

                                    $tabso = "SELECT * FROM $cat_socios";
                                  

                                   
                                    $qtabso = $dbc->query($tabso);

                                    foreach ($qtabso as $opciones){ ?>

                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombreco'];?></option>

                                        <?php
                                
                                    }
                                ?>
                            </select>

                            <div for="titulo" class="label">Título</div>

                            <select id="titulo" name="titulo" class="select">                              
                                <option value="" selected><?php  echo $titulo;?></option>
                                <option value="DR" >DR.</option>
                                <option value="DRA" >DRA.</option>
                        
                            </select>

                            <div for="nombre" class="label">NOMBRE</div>
                            <input type="text" id="nombre" name="nombre" class="input" placeholder="<?php  echo $nombre;?>" >

                            <div for="especialidad" class="label">Especialidad</div>
                            <select id="especialidad" name="especialidad" class="select">
                                <option value="" selected><?php  echo $especialidad;?></option>
                                <option value="NO APLICA" >NO APLICA</option>
                                <option value="CIRUGIA GENERAL" >CIRUGIA GENERAL</option>
                                <option value="ORTOPEDIA Y TRAUMATOLOGIA" >ORTOPEDIA Y TRAUMATOLOGIA</option>
                                <option value="NEUROCIRUGIA" >NEUROCIRUGIA</option>
                                <option value="OTORRINOLARINGOLOGIA" >OTORRINOLARINGOLOGIA</option>
                                <option value="GINECOLOGIA Y OBSTETRICIA" >GINECOLOGIA Y OBSTETRICIA</option>
                                <option value="CIRUGIA BARIATRICA" >CIRUGIA BARIATRICA</option>
                                <option value="CIRUGIA PEDIATRIA" >CIRUGIA PEDIATRIA</option>
                                <option value="CIRUGIA ONCOLOGICA" >CIRUGIA ONCOLOGICA</option>
                                <option value="CIRUGIA PLASTICA" >CIRUGIA PLASTICA</option>
                            
                            </select>

                            <div for="nombre" class="label">Rol</div>
                            <select id="rol" name="rol" class="select" >
                                <option value="" selected><?php  echo $rol;?></option>
                                <option value="MEDICO TRATANTE" >MEDICO TRATANTE</option>
                                <option value="MEDICO ANESTESIOLOGO" >MEDICO ANESTESIOLOGO</option>
                                <option value="PRIMER AYUDANTE" >PRIMER AYUDANTE</option>
                                <option value="SEGUNDO AYUDANTE" >SEGUNDO AYUDANTE</option>
                                <option value="PEDIATRA" >PEDIATRA</option>
                            
                            </select>

                            <div for="telefono" class="label">Teléfono de Contacto</div>
                            <input type="text" id="telefono" name="telefono" class="input" placeholder="<?php  echo $tel1;?>" >

                            <div for="whats" class="label">Teléfono Celular Personal</div>
                            <input type="text" id="whats" name="whats" class="input" placeholder="<?php  echo $tel2;?>">

                            <div for="email" class="label">Correo Electrónico</div>
                            <input type="text" id="email" name="email" class="input" placeholder="<?php  echo $email;?>">

                            <div for="fuente" class="label">Fuente de Contacto</div >
                            
                            <select id="fuente"  name="fuente" class="select">
                                <option value="" selected><?php  echo $fuente;?></option>
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
                                <option value="" selected><?php  echo $finterna;?></option>
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
                                  <option value="AYR" >ADMISION Y RELACIONES PUBLICAS</option>
                            </select>

                            <div for="useresp" class="label">Usuario Responsable</div>                      
                            <select id="useresp" name="useresp" class="select" >
                                <option value="" selected><?php  echo $useresp;?></option>
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

                            <div for="obs" class="label">Observaciones</div >
                            <textarea  id="obs"  name="obs" class="textarea justy" spellcheck="false" placeholder="<?php  echo $obs;?>">

                            </textarea>

                            <input hidden type="text" id="nombre" name="idupd" class="input" value="<?php  echo $idupd;?>" >


                            <input type="submit" value="GUARDAR" id="GUARDAR" name="updateprosp">
                                  
                        


                        </form>
                    <?php

                }else{
                    ?>
                        <form class="tabcpo" method="POST"  action="save_med.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >
                            
                            <div for="categoria" class="label">Región</div>

                            <select id="region" name="region" class="select" >
                                <option value="" selected>...</option>
                                <option value="JAL" >JALISCO</option>
                                <option value="PUE" >PUEBLA</option>

                            </select>

                            <div for="categoria" class="label">Unidad</div>

                            <select id="region" name="unidad" class="select" >
                                <option value="" selected>...</option>
                                <option value="ZR" >ZONA REAL</option>
                                <option value="TM2" >TORRES MEDICAS DOS</option>
                                <option value="CMP" >CENTRO MEDICO PLATINO</option>
                            </select>

                            <div for="categoria" class="label">Categoria</div>

                            <select id="categoria" name="categoria" class="select" required>
                                <option value="" selected>...</option>
                                <option value="SOCIO" >SOCIO</option>
                                <option value="AFILIADO" >AFILIADO</option>
                                <option value="PARTICULAR" >PARTICULAR</option>
                                <option value="NUCLEO MEDICO" >NUCLEO MEDICO</option>
                                <option value="RED SEGURO" >RED SEGURO</option>
                                <option value="RED EMPRESA" >RED EMPRESA</option>
                                <option value="RED HOSPITAL" >RED HOSPITAL</option>
                            </select>                    

                            <div for="socio" class="label">Afiliación a Socio</div>
                         

                            <select id="socio" name="socio" class="select">
                                <option value="" >NO APLICA</option>                             
                                <?php

                                    $tabso = "SELECT * FROM $cat_socios";
                                  

                                   
                                    $qtabso = $dbc->query($tabso);

                                    foreach ($qtabso as $opciones){ ?>

                                    <option value="<?php echo $opciones['id'];?>"><?php echo $opciones['nombreco'];?></option>

                                        <?php
                                
                                    }
                                ?>
                            </select>

                            <div for="titulo" class="label">Título</div>

                            <select id="titulo" name="titulo" class="select">
                                <option value="" selected>......</option>
                                <option value="DR" >DR.</option>
                                <option value="DRA" >DRA.</option>
                        
                            </select>

                            <div for="nombre" class="label">Nombre</div>
                            <input type="text" id="nombre" name="nombre" class="input" required>

                            <div for="especialidad" class="label">Especialidad</div>
                            <select id="especialidad" name="especialidad" class="select" required>
                            <option value="" selected>....</option>
                                <option value="CIRUGIA GENERAL" >CIRUGIA GENERAL</option>
                                <option value="ORTOPEDIA Y TRAUMATOLOGIA" >ORTOPEDIA Y TRAUMATOLOGIA</option>
                                <option value="NEUROCIRUGIA" >NEUROCIRUGIA</option>
                                <option value="OTORRINOLARINGOLOGIA" >OTORRINOLARINGOLOGIA</option>
                                <option value="GINECOLOGIA Y OBSTETRICIA" >GINECOLOGIA Y OBSTETRICIA</option>
                                <option value="CIRUGIA BARIATRICA" >CIRUGIA BARIATRICA</option>
                                <option value="CIRUGIA PEDIATRIA" >CIRUGIA PEDIATRIA</option>
                                <option value="CIRUGIA ONCOLOGICA" >CIRUGIA ONCOLOGICA</option>
                                <option value="CIRUGIA PLASTICA" >CIRUGIA PLASTICA</option>
                                <option value="NO APLICA" >NO APLICA</option>
                            
                            </select>

                            <div for="nombre" class="label">Rol</div>
                            <select id="rol" name="rol" class="select" required>
                                <option value="" selected >...</option> 
                                <option value="MEDICO TRATANTE" >MEDICO TRATANTE</option>
                                <option value="MEDICO ANESTESIOLOGO" >MEDICO ANESTESIOLOGO</option>
                                <option value="PRIMER AYUDANTE" >PRIMER AYUDANTE</option>
                                <option value="SEGUNDO AYUDANTE" >SEGUNDO AYUDANTE</option>
                                <option value="PEDIATRA" >PEDIATRA</option>
                            
                            </select>

                            <div for="telefono" class="label">Teléfono de Contacto</div>
                            <input type="text" id="telefono" name="telefono" class="input" required>

                            <div for="whats" class="label">Teléfono Celular Personal</div>
                            <input type="text" id="whats" name="whats" class="input">

                            <div for="email" class="label">Correo Electrónico</div>
                            <input type="text" id="email" name="email" class="input">

                            <div for="fuente" class="label">Fuente de Contacto</div required>
                            
                            <select id="fuente"  name="fuente" class="select">
                                <option value="" selected>...</option>
                                <option value="REDES" >REDES SOCIALES</option>
                                <option value="LLAMADA" >LLAMADA</option>
                                <option value="RECEPCION" >RECEPCION</option>
                                <option value="WHATSAPP" >WHATSAPP</option>
                                <option value="CONSULTORIO" >VISITA A CONSULTORIO</option>
                                <option value="ORGANIZACION" >VISITA A EMPRESA</option>
                                <option value="OTRA" >OTRA</option>
                            </select>

                            <div for="finterna" class="label">Contacto Hospital</div required>                           
                            <select id="finterna" name="finterna" class="select" required>
                                <option value="" selected >...</option>
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
                                  <option value="AYR" >ADMISION Y RELACIONES PUBLICAS</option>
                            </select>

                            <div for="useresp" class="label">Usuario Responsable</div>                      
                            <select id="useresp" name="useresp" class="select" required>
                                <option value="" selected >...</option>
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

                            <div for="obs" class="label">Observaciones</div >
                            <textarea  id="obs"  name="obs" class="textarea" spellcheck="false" >

                            </textarea>

                              
                            <input type="submit" value="GUARDAR" id="GUARDAR" name="savenuevoprosp">
                               

                        


                        </form>
                    <?php
                }
            ?>


           

        </section>

        <section id="section2" class="sectionmod">
          
            <input type="text" placeholder="BUSCAR..." class="namesect" id="Buscar">
            <div class="namesect" id="namesect3b">PROSPECTOS</div>

            <div id="backtable">

            
                <div id="backtab">


                    <table class="table">

                        <tr class="title">
                            <td>Unidad</td>   
                            <td>Categoría</td>                       
                            <td>Especialidad</td>   
                            <td>Nombre</td>
                            <td>Teléfono Contacto</td>
                            <td>Celular</td>
                           
                            <td>Estatus</td>
                            <td>Asesor</td>
                            <td>Acciones</td>
                        </tr>

                        <?php

                        if($adminrol== $radmin ){
                            $bdpros= "SELECT * FROM $crm_pros ";
                            $qbdpros = $dbc->query($bdpros);
                        }elseif($adminrol== $radger ){ $bdpros= "SELECT * FROM $crm_pros ";
                           $bdpros= "SELECT * FROM $crm_pros WHERE region LIKE '%$userAcroregion%' ";
                            $qbdpros = $dbc->query($bdpros);
                        }else{
                            $bdpros= "SELECT * FROM $crm_pros WHERE useresp LIKE '%$userLog%' ";
                            $qbdpros = $dbc->query($bdpros);
                        }

                        
                        while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                            $Pid =$filpro['id'];
                            $Punidad =$filpro['unidad'];  
                            $Pcategoria =$filpro['categoria'];           
                            $Pespecialidad =$filpro['especialidad'];                
                            $Pnombre =$filpro['nombre'];
                            $Ptel1 =$filpro['tel1'];
                            $Ptel2 =$filpro['tel2'];
                            $Ptipomo =$filpro['tipomo'];

                         
                        

                            $Petapa =$filpro['etapa'];

                            if($Petapa == '1'){
                                $backcol = 'etpacolor1';
                            }elseif($Petapa == '2'){
                                $backcol = 'etpacolor2';
                            }elseif($Petapa == '3'){
                                $backcol = 'etpacolor3';
                            }elseif($Petapa == '4'){
                                $backcol = 'etpacolor4';
                            }elseif($Petapa == '0'){
                                $backcol = "";
                            }


                            $Puseresp =$filpro['useresp'];

                            ?>
                                <tr class="fil">
                                    <td class="center"><?php echo $Punidad; ?></td>
                                    <td class="center"><?php echo $Pcategoria; ?></td>
                                    <td class="center"><?php echo $Pespecialidad; ?></td>
                                    <td class="center"><?php echo $Pnombre; ?></td>
                                    <td class="center"><?php echo $Ptel1; ?></td>
                                    <td class="center"><?php echo $Ptel2; ?></td>
                                    <td class="center <?php echo $backcol; ?>"></td>
                                    <td class="center"><?php echo $Puseresp; ?></td>
                                    <td class="center">

                                        <form method="POST"  action="prospect_med.php" autocomplete="off" onkeydown="return event.key != 'Enter';" >


                                            <input hidden type="text" value="<?php echo $Pid;?>" name="idpros">  <!--AGREGAR DATOS PHP--->

                                            <input type="submit" value="EDITAR" id="editar" name="modmed">
                                        </form>
                                    

                                    </td>
                                </tr>
                            <?php
                        
                        }


                        ?>

                    
                    </table>


                    
                </div>

            </div>

        </section>

        <div id="blockMod"></div>


    </modseg>



</body>

</html>