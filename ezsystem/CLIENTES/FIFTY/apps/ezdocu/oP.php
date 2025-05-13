<?php
 session_start();
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php'; 

$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];

$grupo = isset($_POST['grupo']) ? $_POST['grupo'] : false;


if($grupo == 'DIRECCION Y ESTRATEGIA'){
    $bdtab_bd = 'ezsystem_docu_pro_dir';
}elseif($grupo == 'GESTION FINANCIERA'){
    $bdtab_bd = 'ezsystem_docu_pro_fin';
}elseif($grupo == 'GESTION DE PROVEEDORES Y SUMINISTROS'){
    $bdtab_bd = 'ezsystem_docu_pro_prov';
}elseif($grupo == 'GESTION COMERCIAL'){
    $bdtab_bd = 'ezsystem_docu_pro_vinc';
}elseif($grupo == 'MEJORA DE LA CALIDAD Y SEGURIDAD DEL PACIENTE'){
    $bdtab_bd = 'ezsystem_docu_pro_qps';
}elseif($grupo == 'GESTION DE MEDICAMENTOS E INSUMOS CLINICOS'){
    $bdtab_bd = 'ezsystem_docu_pro_mmud';
}elseif($grupo == 'PREVENCION Y CONTROL DE INFECCIONES'){
    $bdtab_bd = 'ezsystem_docu_pro_pci';
}elseif($grupo == 'GESTION Y SEGURIDAD DE INSTALACIONES'){
    $bdtab_bd = 'ezsystem_docu_pro_fms';
}elseif($grupo == 'GESTION DEL TALENTO HUMANO'){
    $bdtab_bd = 'ezsystem_docu_pro_sqe';
}elseif($grupo == 'METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE'){
    $bdtab_bd = 'ezsystem_docu_pro_misp';
}elseif($grupo == 'MANEJO DE LA COMUNICACION'){
    $bdtab_bd = 'ezsystem_docu_pro_mci';
}elseif($grupo == 'MANEJO DE LA INFORMACION'){
    $bdtab_bd = 'ezsystem_docu_pro_ginf';
}elseif($grupo == 'ATENCION AL PACIENTE'){
    $bdtab_bd = 'ezsystem_docu_pro_px';
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez modOp</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/idexdocu.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="css/allop.css">
    <link rel="stylesheet" type="text/css" href="css/idexdocu.css">
    <link rel="stylesheet" type="text/css" href="css/asignarcal.css">
    <link rel="stylesheet" type="text/css" href="css/procesos.css">
    <link rel="stylesheet" type="text/css" href="css/procedi.css">
    <link rel="stylesheet" type="text/css" href="css/procesos2.css">
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


          

        <form action="modOp.php" id="lognav7b"  class="bakBoton">
                
            <input type="image" src="img/regresarWhite.png"  class="lognav" name="exitdk">
            <div id="line1"></div>
           
        </form> 

    </navleft>

    <navsup id="navsup">



        <div id="backUser">
       
            <img id="lognav0" src="../../img/apps/apps/document.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">
        <div class="txtmodop">MODELO OPERATIVO/<?php echo $grupo;?></div>
        <div class="linemodop"></div>
        
        <div id="backbackEst">
    
                
            <section id="backmenuESTANDAR">

                <img  src="img/menuHome.png" class="imgbackhome">  

              <!--  <img  src="../../img/logos/50d_icoBlanco.png" class="img50db"> -->

            </section>

          

            <section id="backform">

                <form id="mod_Lin" method="POST" action="oP.php">

                    <input hidden type="text" value="<?php echo $grupo; ?>" name="grupo">

                    <div class="namesect">FILTROS</div>
                    <select name="tipomodelo" class="input">
                        <option value="" class="left" selected>Modelo...</option>
                        <option value="LINEAMIENTOS" >LINEAMIENTOS</option>
                    
                        <option value="PROCESOS2" >PROCESOS</option>
                        <option value="PROCEDI" >PROCEDIMIENTOS</option>
                        <option value="RESPONSABILIDADES" >RESPONSABILIDADES</option>
                        <option value="RUTINAS" >ACTIVIDADES CLAVE</option>
                    </select>
                
                    <select name="region" class="input">
                        <option value="" class="left" selected>Región...</option>
                        <option value="JAL" >JALISCO</option>
                        <option value="PUE" >PUEBLA</option>
                    </select>

                     <select id="unidad" name="unidad"  class="input"  required>  

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


               

                    <datalist id="catProc">
                        <?php
                        $userstabla = "SELECT * FROM $cat_procesos WHERE grupo = '$grupo' ";
                        $pusersselect = $db_docu->query($userstabla);

                        foreach ($pusersselect as $opciones){ ?>

                        <option value="<?php echo $opciones['nombrepro'];?>"><?php echo $opciones['macro'].'/'. $opciones['nombrepro'];?></option>

                            <?php
                        }

                        ?> 
                    </datalist>

                    

                    <input type="list" name="enfcat" id="enfcat" list="catProc"  autocomplete="off" class="inputx2"  placeholder="Selecciona el Enfoque...">

                    <select id="user" name="tabdueno" class="input"  > 
                    
                        <?php

                        if($adminrol == $radmin){

                            ?>
                                <option value="" selected >Responsable...</option>
                            <?php
                        
                            $tabus = "SELECT * FROM $userIndica  ";
                            $qtabus = $db_result->query($tabus);

                            foreach ( $qtabus as $opciones){ ?>

                            <option value="<?php echo $opciones['tipouser'];?>"><?php echo $opciones['region'].'/'. $opciones['unidad'].'/'. $opciones['pos'];?></option>

                                <?php

                            }
                        }elseif($adminrol == $radreg){        
                            
                                ?>
                                    <option value="" selected >Resultados de...</option>
                                <?php

                                $tabus = "SELECT * FROM $userIndica WHERE rol = '$rolRolDI' AND region  = '$userAcroregion' ";
                                $qtabus = $db_result->query($tabus);

                                foreach ( $qtabus as $opciones){ ?>
        
                                <option value="<?php echo $opciones['tipouser'];?>"><?php echo $opciones['region'].'/'. $opciones['unidad'].'/'. $opciones['pos'];?></option>
        
                                    <?php
        
                                }
                        }else{
                            ?>
                                <option value=""  selected>ACCESO RESTRINGIDO</option>
                            <?php
                        }
                        
                        
                        ?>
                         <option value="ALL"  >APLICABLES A TODOS</option>
                    </select>


                    <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">

                </form>
            </section>

        </div>



        <div id="backhomeESTAN">
    
            <?php

                if (isset($_POST['filtrarU'])){

            

                    $tipomodelo = isset($_POST['tipomodelo']) ? $_POST['tipomodelo'] : false;
                    $region = isset($_POST['region']) ? $_POST['region'] : false;
                    $unidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;
                    $macro = isset($_POST['macro']) ? $_POST['macro'] : false;
                    $enfcat = isset($_POST['enfcat']) ? $_POST['enfcat'] : false;
                    $tabdueno = isset($_POST['tabdueno']) ? $_POST['tabdueno'] : false;

                    ?>

                    <?Php


                    $grupo = isset($_POST['grupo']) ? $_POST['grupo'] : false;

                    if($tipomodelo == 'LINEAMIENTOS' ){

                        require_once 'lineamientos.php'; 

                    }elseif($tipomodelo == 'PROCESOS' ){


                    
                        require_once 'procesos.php'; 

                    }elseif($tipomodelo == 'PROCEDI' ){


                    
                        require_once 'procedi.php'; 

                    }elseif($tipomodelo == 'RUTINAS' ){


                    
                        require_once 'rutinas.php'; 

                    }elseif($tipomodelo == 'PROCESOS2' ){


                    
                        require_once 'proce2.php'; 

                    }


                }
            ?>
            

        </div>
     

    </section>




</body>

</html>