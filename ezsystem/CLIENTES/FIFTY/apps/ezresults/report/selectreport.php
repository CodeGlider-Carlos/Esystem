<?php
require_once '../../../varSQL/dbmysql.php';
session_start();
$userLog =$_SESSION['usuario'];
$adminrol=$_SESSION['rol'];

/////VALIDACION USUARIO
$valyUser = "SELECT * FROM $sresual WHERE usuario LIKE '%$userLog%' ";
$qvalyUser = $dbo->query($valyUser);
while ($fila= $qvalyUser->fetch(PDO::FETCH_ASSOC)) {

    $unidadLy = $fila['unidad'];
    $acronuLy = $fila['acronu'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_selecreport</title>
   
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->

    <link rel="stylesheet" type="text/css" href="css/selectreport.css">
    <!---------------------  CONTROLADORES JS----------------------->

    <script type="text/javascript" src="js/reportes.js"></script>
</head>

<body>
  

    <section >
    
        <section id="fondoform" >

            <form id="form1" method="POST" action="" autocomplete="off" >

                <input type="text" id="filtros" value="CATALOGO DE OBJETIVOS" readonly >

                <select id="cliente" name="clientesu" required> 
                    <option value="" selected >unidad...</option>
                    <?php

                        if($adminrol == $radmin OR $adminrol == $raddg){
                            $tabunid = "SELECT * FROM $clirisk";
                        }elseif($adminrol == $radreg){
                            $tabunid = "SELECT * FROM $clirisk WHERE acroregion = '$acronuLy' ";
                        }else{
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$acronuLy' ";
                        }

                    
                        $qtabunid = $dbo->query($tabunid);

                        foreach ( $qtabunid as $opciones){ ?>

                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="year" name="year" required> 
                    <option value="" selected >ejercicio...</option>
                    <?php

                        $tabejer = "SELECT * FROM $tabyear";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>
              
                <select id="servdepcom" name="gerdir" required>

                    <option value="" selected class="optionSELECTED">usuario de objetivo...</option>

                    <?php

                        if($adminrol == $radmin){

                            $userstabla = "SELECT * FROM $gedir ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }elseif($adminrol == $radreg){
                            $userstabla = "SELECT * FROM $gedir WHERE region = '$unidadLy' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                        }else{
                            $userstabla = "SELECT * FROM $gedir WHERE clave = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }
                        
                    ?> 


                </select>

                <input type="submit" id="buscarrisk" name="catobj" value="BUSCAR" >
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
            </form>   

            <form id="form2" method="POST" action="" autocomplete="off" >

                <input type="text" id="filtros" value="CATALOGO DE RESULTADOS CLAVE" readonly >



                <select id="cliente" name="clientesu" required> 
                    <option value="" selected >unidad...</option>
                    <?php

                        if($adminrol == $radmin OR $adminrol == $raddg){
                            $tabunid = "SELECT * FROM $clirisk";
                        }elseif($adminrol == $radreg){
                            $tabunid = "SELECT * FROM $clirisk WHERE acroregion = '$acronuLy' ";
                        }else{
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$acronuLy' ";
                        }

                    
                        $qtabunid = $dbo->query($tabunid);

                        foreach ( $qtabunid as $opciones){ ?>

                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="year" name="year" required> 
                    <option value="" selected >ejercicio...</option>
                    <?php

                        $tabejer = "SELECT * FROM $tabyear";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>




                <select id="servdepcom" name="servderpcom" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">usuario de resultados...</option>

                    <?php

                        if($adminrol == $radmin OR $adminrol == $raddg){

                            $tabdg = "SELECT * FROM $gejef ";
                            $qtabdg = $dbo->query($tabdg);

                            foreach ($qtabdg as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                            $tabdg2 = "SELECT * FROM $gedir  ";
                            $qtabdg2 = $dbo->query($tabdg2);

                            foreach ($qtabdg2 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }elseif($adminrol == $radreg){

                            $userstabla = "SELECT * FROM $gedir WHERE clave = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                            $userstabla0 = "SELECT * FROM $gedir WHERE userjefe = '$userLog' ";
                            $quserstabla0 = $dbo->query($userstabla0);

                            foreach ($quserstabla0 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }



                            $userstabla1 = "SELECT * FROM $gejef WHERE region = '$unidadLy' ";
                            $quserstabla1 = $dbo->query($userstabla1);

                            foreach ($quserstabla1 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                            
                        

                            

                        }elseif($adminrol == $radger){

                            $userstabla0 = "SELECT * FROM $gedir WHERE clave = '$userLog' ";
                            $quserstabla0 = $dbo->query($userstabla0);

                            foreach ($quserstabla0 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                            
                            $userstabla = "SELECT * FROM $gejef WHERE userjefe = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);
                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                        }elseif($adminrol == $radman OR $adminrol == $radsup){
                            $userstabla = "SELECT * FROM $gejef WHERE clave = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }
                        
                    ?> 


                </select>

                <input type="submit" id="buscarrisk" name="catindi" value="BUSCAR" >
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
            </form> 

            <form id="form3" method="POST" action="" autocomplete="off" >

                <input type="text" id="filtros" value="TABLERO DE OBJETIVOS" readonly >
                

                <select id="cliente" name="clientesu" required> 
                    <option value="" selected >unidad...</option>
                    <?php

                        if($adminrol == $radmin OR $adminrol == $raddg){
                            $tabunid = "SELECT * FROM $clirisk";
                        }elseif($adminrol == $radreg){
                            $tabunid = "SELECT * FROM $clirisk WHERE acroregion = '$acronuLy' ";
                        }else{
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$acronuLy' ";
                        }

                    
                        $qtabunid = $dbo->query($tabunid);

                        foreach ( $qtabunid as $opciones){ ?>

                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="year" name="year" required> 
                    <option value="" selected >ejercicio...</option>
                    <?php

                        $tabejer = "SELECT * FROM $tabyear";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>
              
                <select id="servdepcom" name="gerdir" required>

                    <option value="" selected class="optionSELECTED">usuario de objetivo...</option>

                    <?php

                        if($adminrol == $radmin){

                            $userstabla = "SELECT * FROM $gedir ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }elseif($adminrol == $radreg){
                            $userstabla = "SELECT * FROM $gedir WHERE region = '$unidadLy' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                        }else{
                            $userstabla = "SELECT * FROM $gedir WHERE clave = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }
                        
                    ?> 


                </select>

                <input type="submit" id="buscarrisk" name="tabobj" value="BUSCAR" >
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
            </form> 

            <form id="form4" method="POST" action="" autocomplete="off" >

                <input type="text" id="filtros" value="TABLERO DE RESULTADOS CALVE" readonly >
                
                <select id="cliente" name="clientesu" required> 
                    <option value="" selected >unidad...</option>
                    <?php

                        if($adminrol == $radmin OR $adminrol == $raddg){
                            $tabunid = "SELECT * FROM $clirisk";
                        }elseif($adminrol == $radreg){
                            $tabunid = "SELECT * FROM $clirisk WHERE acroregion = '$acronuLy' ";
                        }else{
                            $tabunid = "SELECT * FROM $clirisk WHERE acronu = '$acronuLy' ";
                        }

                    
                        $qtabunid = $dbo->query($tabunid);

                        foreach ( $qtabunid as $opciones){ ?>

                        <option value="<?php echo $opciones['acronu'];?>"><?php echo $opciones['unidad'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="year" name="year" required> 
                    <option value="" selected >ejercicio...</option>
                    <?php

                        $tabejer = "SELECT * FROM $tabyear";
                        $qtabejer = $dbo->query($tabejer);

                        foreach ( $qtabejer as $opciones){ ?>

                        <option value="<?php echo $opciones['num']?>"><?php echo $opciones['completo'];?></option>

                            <?php
                    
                        }
                    ?>
                </select>

                <select id="servdepcom" name="servderpcom" class="servdepcom" required>

                    <option value="" selected class="optionSELECTED">usuario de resultados...</option>

                    <?php

                        if($adminrol == $radmin OR $adminrol == $raddg){

                            $tabdg = "SELECT * FROM $gejef ";
                            $qtabdg = $dbo->query($tabdg);

                            foreach ($qtabdg as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                            $tabdg2 = "SELECT * FROM $gedir  ";
                            $qtabdg2 = $dbo->query($tabdg2);

                            foreach ($qtabdg2 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }elseif($adminrol == $radreg){

                            $userstabla = "SELECT * FROM $gedir WHERE clave = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                            $userstabla0 = "SELECT * FROM $gedir WHERE userjefe = '$userLog' ";
                            $quserstabla0 = $dbo->query($userstabla0);

                            foreach ($quserstabla0 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }



                            $userstabla1 = "SELECT * FROM $gejef WHERE region = '$unidadLy' ";
                            $quserstabla1 = $dbo->query($userstabla1);

                            foreach ($quserstabla1 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                            
                        

                            

                        }elseif($adminrol == $radger){

                            $userstabla0 = "SELECT * FROM $gedir WHERE clave = '$userLog' ";
                            $quserstabla0 = $dbo->query($userstabla0);

                            foreach ($quserstabla0 as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                            
                            $userstabla = "SELECT * FROM $gejef WHERE userjefe = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);
                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }

                        }elseif($adminrol == $radman OR $adminrol == $radsup){
                            $userstabla = "SELECT * FROM $gejef WHERE clave = '$userLog' ";
                            $pusersselect = $dbo->query($userstabla);

                            foreach ($pusersselect as $opciones){ ?>

                            <option value="<?php echo $opciones['clave'];?>"><?php echo $opciones['nombre'];?></option>

                                <?php
                
                            }
                        }
                        
                    ?> 


                </select>

                <input type="submit" id="buscarrisk" name="tabind" value="BUSCAR" >
                <input type="reset" id="resetrisk" name="resetrisk" value="BORRAR FILTRO" >
                <input type="button"  id="reloadIcon" value="CARGAR + DATOS" onclick="location.reload();">
            </form> 

            <section id="movslid">

                <div id="botmov1" class="botmov"><div id="slidTit1" class="tileslid">CATALOGO DE OBJETIVOS</div></div>
                <div id="botmov2" class="botmov"><div id="slidTit2" class="tileslid">CATALOGO DE RESULTADOS</div></div>
                <div id="botmov3" class="botmov"><div id="slidTit3" class="tileslid">TABLERO DE OBJETIVOS</div></div>
                <div id="botmov4" class="botmov"><div id="slidTit4" class="tileslid">RESULTADOS CLAVE</div></div>

            </section>

        </section>

    </section>



</body>

</html>