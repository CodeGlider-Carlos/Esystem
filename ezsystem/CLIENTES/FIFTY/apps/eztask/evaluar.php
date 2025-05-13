<?php
 session_start();
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php'; 
/*
 if (empty($_SESSION['usuario'])){
    session_destroy();
      header("Location: ../../../../../../../index.php");
}
*/
$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];


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

            <div class="line1"></div>
        </div>
        
        <div class="bakBoton">

            <img  src="../../img/suite/dash.png" class="lognav">
            <div id="txt3" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="DASH/dash_task.php" >

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

        <div id="back_filtrar">


  
                    
            <form  method="POST" action="dirtask.php" autocomplete="off">

                

                    <div class="namesect">SEGUIMIENTO DE TAREAS</div>
            
                    <select id="year" name="year" required class="input"> 
                        <option value="" selected >Ejercicio...</option>
                        <?php

                            $tabejer = "SELECT * FROM $tabyear";
                            $qtabejer = $db_all->query($tabejer);

                            foreach ( $qtabejer as $opciones){ ?>

                            <option value="<?php echo $opciones['num'];?>"><?php echo $opciones['completo'];?></option>

                                <?php
                        
                            }
                        ?>
                    </select>

                    <select name="periodo" id="periodo" class="input">
                        <option value="" selected class="optionSELECTED">Periodo</option>
                        <option value="01">ENERO</option>
                        <option value="02">FEBRERO</option>
                        <option value="03">MARZO</option>
                        <option value="04">ABRIL</option>
                        <option value="05">MAYO</option>
                        <option value="06">JUNIO</option>
                        <option value="07">JULIO</option>
                        <option value="08">AGOSTO</option>
                        <option value="09">SEPTIEMBRE</option>
                        <option value="10">OCTUBRE</option>
                        <option value="11">NOVIEMBRE</option>
                        <option value="12">DICIEMBRE</option>
                        

                    </select>
                 
                    <select name="region" id="tipotask" class="input" required>  
                        <option value="" selected>Región...</option>  
                        <option value="JAL" >JALISCO</option>
                        <option value="PUE" >PUEBLA</option>
                        
                    </select>

                    <select id="cliente" name="unidadSel"  class="input"  required>  

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

                 

                    <select name="tipotask" id="tipotask" class="input" >  
                        <option value="" selected>Tipo...</option>  
                        <option value="GOB" >GOBIERNO</option>
                        <option value="SEG" >SEGUIMIENTO</option>
                        <option value="COM" >COMITES</option>
                        <option value="GEN" >MINUTA</option>
                        <option value="JO" >JUNTA OPERATIVA</option>
                        <option value="JP" >JUNTA DE PLANEACION QUIRURGICA</option>
                        <option value="RISK" >GESTION DE RIESGOS</option>
                        <option value="VIC" >COMERCIAL</option>
                    </select>

                   

                    <select name="accion" required class="input">

                        <option value="" selected>Acción...</option>
                     
                        <option value="CONSULTAR" >CONSULTAR MIS TAREAS</option>
                        <option value="EVALUAR" >EVALUAR TAREAS</option>

                    </select>

                    
               

                                            
                    <select name="resptarea" id="resptarea" class="input" >


                            <option value="" selected class="optionSELECTED">Departamento...</option>
                            <option value=""  class="optionSELECTED">NA</option>
                            <?php

                                if($adminrol == $radmin){

                                    $tabfun = "SELECT * FROM $sresuall ";
                                    $qtabfun = $db_users->query($tabfun);

                                    foreach ($qtabfun as $opciones){ ?>

                                        <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>
                                        <?php
                                    }
                                
                                }elseif($adminrol == $radreg){

                                    $tabfun = "SELECT * FROM $sresuall WHERE acroregion =  '$userAcroregion' ";
                                    $qtabfun = $db_users->query($tabfun);

                                    foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>

                                        <?php
                                    }
                                    
                                }elseif($adminrol == $radger){

                                    $tabfun = "SELECT * FROM $sresuall WHERE userjefe LIKE  '%$userLog%' OR usuario LIKE  '%$userLog%'";
                                    $qtabfun = $db_users->query($tabfun);

                                    foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea']?></option>

                                        <?php
                                    }
                                    
                                }elseif($adminrol == $radman ){

                                    $tabfun = "SELECT * FROM $sresuall WHERE usuario =  '$userLog' ";
                                    $qtabfun = $db_users->query($tabfun);

                                    foreach ($qtabfun as $opciones){ ?>

                                    <option value="<?php echo $opciones['usuario']?>"><?php echo $opciones['acroregion'].'/'.$opciones['acronu'].'/'.$opciones['deparea'];?></option>

                                        <?php
                                    }



                                }

                            ?> 

                    </select>

        
                    <input type="submit" value="CONTINUAR" name="control" id="continuar1">
              

            </form>

        
        </div>


     
        <div id="blockMod"></div>

    </section>




</body>

</html>