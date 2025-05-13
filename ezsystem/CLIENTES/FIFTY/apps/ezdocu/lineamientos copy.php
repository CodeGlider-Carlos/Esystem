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


$region = isset($_POST['region']) ? $_POST['region'] : false;
$unidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;
$macro = isset($_POST['macro']) ? $_POST['macro'] : false;
$enfcat = isset($_POST['enfcat']) ? $_POST['enfcat'] : false;
$tabdueno = isset($_POST['tabdueno']) ? $_POST['tabdueno'] : false;


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez document</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/idextask.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/idexdocu.css">
    <link rel="stylesheet" type="text/css" href="css/asignarcal.css">
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
            <div id="txt1" class="txttx"><strong>TAREAS</strong></div>

            <form action="indexDocu.php" >

                <input type="submit" class="submit" id="slognav1">

            </form>

            <div class="line1"></div>
        </div>

            


        <div class="bakBoton">

            <img  src="../../img/suite/print.png" class="lognav">
            <div id="txt4" class="txttx"><strong>IMPRIMIR</strong></div>

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

            <img id="lognav0" src="../../img/apps/apps/document.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">

       


                    
        
              <!--

                <section id="backGuardar">

                    <input type="submit" id="submit" value="GUARDAR" name="svaeTask">

                </section>           
                    
-->
                                
              

                <div id="back_asigcal">

                    
             

                    <table id="tableTask">
                        

                        <?php

                            $TABALCANCE = "SELECT * FROM $cat_lin WHERE region = '$region' AND unidad = '$unidad' AND enfoque LIKE '%$enfcat%' AND macro LIKE '%$macro%' AND alcance LIKE '%$tabdueno%'  ";
                            $qTABALCANCE = $db_docu->query($TABALCANCE);

                            while ($filaCed = $qTABALCANCE->fetch(PDO::FETCH_ASSOC)) {

                                $alcance = $filaCed['alcance'];
                                $idlinly = $filaCed['idlin'];
                            }

                            if($tabdueno == 'ALL'){
                                $alcancePrint = 'APLICABLE A TODOS';
                            }else{
                                if(empty($alcance)){
                                    $alcancePrint = 'SD';
                                }else{
                                    $alcancePrint = $alcance;
                                }
                              
                            }

                            if(empty($idlinly)){

                            }else{
                                if($tabdueno =='ALL' ){

                                    ?>
    
                                    
                                        <tr>
                                            <th colspan="2" class="titblack"><?php echo 'LINEAMIENTOS: '. $macro.'/'.$enfcat.'/'.$alcancePrint ?></th>
                                        </tr>
    
                                        <tr>
                                            <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl2s"></th>
                                        </tr>
    
                                    <?php
    
                                }else{
                                    ?>
    
                                        <tr>
                                            <th colspan="3" class="titblack"><?php echo 'LINEAMIENTOS: '. $macro.'/'.$enfcat.'/'.$alcancePrint ?></th>
                                        </tr>
    
                                        <tr>
                                            <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl1s"></th>
                                            <th class="anchoCOl2s"></th>
                                        </tr>
                                    <?php
                                }
                            }

                           

                        ?>


                    

                     
                        <?php


                            $consCed = "SELECT * FROM $cat_lin WHERE region = '$region' AND unidad = '$unidad' AND enfoque LIKE '%$enfcat%' AND macro LIKE '%$macro%' AND alcance LIKE '%$tabdueno%'  ";
                            $qconsCed = $db_docu->query($consCed);

                            while ($filaCed = $qconsCed->fetch(PDO::FETCH_ASSOC)) {

                                $idid = $filaCed['id'];
                                $tipotx = $filaCed['tipotxt'];
                                $idlin = $filaCed['idlin'];
                                $punto = $filaCed['punto'];
                                $num = $filaCed['num'];
                                $sangria = $filaCed['sangria'];
                                $lin = $filaCed['lin'];
                                $enfoquePR = $filaCed['enfoque'];
                           

                                if($sangria == '1' ){
                                    $class_sangria = 'sangria1';
                                }elseif($sangria == '2' ){
                                    $class_sangria = 'sangria2';
                                }elseif($sangria == '3' ){
                                    $class_sangria = 'sangria3';
                                }



                            ?>


                      

                                <tr>

                                    <?php

                                        if($tabdueno =='ALL' ){

                                            if($tipotx == 'TITULO' ){
                                                ?>
                                                    <th class="titulo1 <?php echo $class_sangria;?> inputDoc center" ><strong><?php echo $idlin;?></strong></th>
                                                    <td class="titulo1 <?php echo $class_sangria;?> inputDoc"><strong><?php echo $lin;?></strong></td>
                                                
                                                <?php
        
                                            }else{
                                                ?>
                                                    <th class="titulo2 <?php echo $class_sangria;?> inputDoc center"><strong><?php echo $idlin.$punto.$num;?></strong></th>
                                                    <td class="lineamiento <?php echo $class_sangria;?> inputDoc"><?php echo $lin;?></td>
                                                <?php
                                            }
                                            
                                        }else{
                                            if($tipotx == 'TITULO' ){
                                                ?>
                                                    <th class="titulo1 <?php echo $class_sangria;?> inputDoc center" ><strong><?php echo $idlin;?></strong></th>
                                                    <th class="titulo1 <?php echo $class_sangria;?> inputDoc center" ><strong><?php echo $enfoquePR;?></strong></th>
                                                    <td class="titulo1 <?php echo $class_sangria;?> inputDoc"><strong><?php echo $lin;?></strong></td>
                                                
                                                <?php
        
                                            }else{
                                                ?>
                                                    <th class="titulo2 <?php echo $class_sangria;?> input center"><strong><?php echo $idlin.$punto.$num;?></strong></th>
                                                    <th class="titulo1 <?php echo $class_sangria;?> input center" ><strong><?php echo $enfoquePR;?></strong></th>
                                                    <td class="lineamiento <?php echo $class_sangria;?> input"><?php echo $lin;?></td>
                                                <?php
                                            }
                                        }

                                   

                                    ?>

                                </tr>
                           
                                <?php

                                /*
                                echo '
                    
                                <tr class="fila0"> 

                                    
                                    <td hidden><input type="text" name="id_task[]" value="' . $filaCed['id'] . '"></td>
                                    <td colspan="3"  ></td>
                                </tr>

                                <tr>
                                    <td colspan="3"><div class="inputNUE">NUEVA TAREA</div></td>
                                </tr>

                                <tr class="fila1"> 

                                    <td colspan="1">
                                        <input type="list" class="input" list="cattrab" name="asigna[' . $filaCed['id'] . ']"  placeholder="Asigna..." spellcheck="false"  >
                                    </td>
                                    <td colspan="2">
                                        <input type="list" class="inputb" list="cattrab" name="verificador[' . $filaCed['id'] . ']"  placeholder="Verificará..." spellcheck="false"  >
                                    </td>
                                
                                </tr>

                                <tr class="fila2"> 

                                    <td colspan="1">
                                        <input type="list" list="catenfx" name="enfoque[' . $filaCed['id'] . ']" class="input" placeholder="Enfoque..." > 
                                    </td>
                                    <td colspan="2">
                                        <input type="list" class="inputb" list="cattrab" name="resptarea[' . $filaCed['id'] . ']"  placeholder="Responsable de Tarea..." spellcheck="false"  >
                                    </td>
                                
                                </tr>

                                <tr class="fila3"> 

                                    <td  colspan="1">
                                        <textarea name="tarea[' . $filaCed['id'] . ']" class="INPUTASK" spellcheck="false" placeholder="Tarea..."></textarea>
                                    </td>
                                    <td  colspan="1">
                                        <textarea name="obstask[' . $filaCed['id'] . ']" class="inputd" spellcheck="false" placeholder="Entregable u Observaciones..."></textarea>
                                    </td>

                                    <td  colspan="1">
                                        <input type="date" name="fechaco[' . $filaCed['id'] . ']" class="inputc" >
                                    </td>
                                    
                                </tr>

                                <tr>
                                  <td colspan="3" class="barraline" >BARRA</td>
                                </tr>

 
                                ';
                                */
                            }
                        ?>
                                    
                                

                    </table>      

                </div>
            