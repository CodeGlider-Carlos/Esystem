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
$tipoUser=$_SESSION['tipouser'];


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

      <script type="text/javascript" src="js/suiteco.js"></script>
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

            <img id="lognav1" src="img/asignar2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>MAS</strong></div>

            <form action="../../suitecrm.php" id="slognav1">

                <input type="submit" class="submit" >

            </form>

            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img id="lognav2" src="img/verco.png" class="lognav">
            <div id="txt2" class="txttx"><strong>SIMULAR</strong></div>

            <form action="../PROSPECTOS/prospect_med.php" id="slognav2">

                <input type="submit" class="submit" >

            </form>

        </div>

        <div class="bakBoton">

            <img id="lognav3" src="img/modi.png" class="lognav">
            <div id="txt3" class="txttx"><strong>MODIFICAR</strong></div>

            <form action="../PROSPECTOS/selectprospect.php" id="slognav3">

                <input type="submit" class="submit" >

            </form>

        </div>


        <div class="bakBoton">

            <img id="lognav4" src="img/borrar.png" class="lognav">
            <div id="txt4" class="txttx"><strong>ELIMINAR</strong></div>

            
            <form action="../TARJETAS/selectipo.php" id="slognav4">

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

        <section id="back_filtrar">

        
            <form method="POST" action="tipocreacion.php">

                <div class="namesect">FILTRAR</div>
            
                <select name="region" class="input" required>
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

                <select id="comisionSo" name="tipocreacion" class="input"  required> 
                    <option value="" selected >Tipo creación...</option>
                    <option value="CERO"  >DESDE CERO</option>
                    <option value="EXISTE"  >A PARTIR DE PAQUETE EXISTENTE</option>
                </select>

                
                <select id="comisionSo" name="baseprecio" class="input"  required> 
                    <option value="" selected >Lista de Precios...</option>
                    <option value="precios_jal"  >A</option>
                    <option value="precios_jalb"  >B</option>
                    <option value="precios_jalc"  >C</option>
                </select>

                <select id="promo" name="paquete" class="input"  > 
                
                    <option value="" selected >Paquete Existente...</option>
                    <?php

                        $tabejer = "SELECT * FROM $cat_paq WHERE activo = 'SI' ";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['id']?>"><?php echo $opciones['empresa'].'/'.$opciones['procedimiento'];?></option>

                            <?php
                        
                            }
                        ?>
                </select>

                <input type="submit" value="CONTINUAR" name="filtrarU" id="continuar1">
            </form>
        

        </section>



        <div id="blockMod"></div>


    </modseg>



</body>

</html>