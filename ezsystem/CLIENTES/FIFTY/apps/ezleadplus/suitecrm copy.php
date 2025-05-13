<?php
session_start();
require_once 'varSQL/bd_lead.php';
require_once '../../varSQL/var.php';


$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];



if($adminrol== $radmin ){              

        $montEST = current($dbc->query("SELECT SUM(valorestimado) FROM $cat_tarjetas_leademp WHERE activo ='1'  ")->fetch()); 
        $montFIN = current($dbc->query("SELECT SUM(valorfin) FROM $cat_tarjetas_leademp WHERE activo ='1'  ")->fetch()); 

        $printEST = '$'.number_format($montEST,2);
        $printFIN = '$'.number_format($montFIN,2);
    }elseif($adminrol== $radger ){                     

        $montEST = current($dbc->query("SELECT SUM(valorestimado) FROM $cat_tarjetas_leademp WHERE  region LIKE '%$userAcroregion%' AND activo ='1'  ")->fetch()); 
       $montFIN = current($dbc->query("SELECT SUM(valorfin) FROM $cat_tarjetas_leademp WHERE  region LIKE '%$userAcroregion%' AND activo ='1'  ")->fetch()); 

        $printEST = '$'.number_format($montEST,2);
        $printFIN = '$'.number_format($montFIN,2);
    }else{                      

        $montEST = current($dbc->query("SELECT SUM(valorestimado) FROM $cat_tarjetas_leademp WHERE  useresp LIKE '%$userLog%' AND activo ='1'  ")->fetch()); 
        $montFIN = current($dbc->query("SELECT SUM(valorfin) FROM $cat_tarjetas_leademp WHERE  useresp LIKE '%$userLog%' AND activo ='1'  ")->fetch()); 

        $printEST = '$'.number_format($montEST,2);
        $printFIN = '$'.number_format($montFIN,2);
    }

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ LEAD+</title>
    
        
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/suitecrm.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->
        <link rel="stylesheet" type="text/css" href="../../css/all.css">
        <link rel="stylesheet" type="text/css" href="css/suitecrm.css">
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

            <img id="lognav1" src="img/suite/seg2.png" class="lognav">
            <div id="txt1" class="txttx"><strong>SEGUIMIENTO</strong></div>

            <form action="suitecrm.php" >

                <input type="submit" class="submit" id="slognav1">

            </form>

            <div class="line1"></div>
        </div>

        
        <div class="bakBoton">

            <img id="lognav2" src="img/suite/pros2.png" class="lognav">
            <div id="txt2" class="txttx"><strong>PROSPECTOS</strong></div>

            <form action="MODS/PROSPECTOS/prospect_px.php">

                <input type="submit" class="submit"  id="slognav2">

            </form>

        </div>

        
        <div class="bakBoton">

            <img id="lognav3" src="img/suite/tarj2.png" class="lognav">
            <div id="txt3" class="txttx"><strong>TARJETA DE CONTACTO</strong></div>

            
            <form action="MODS/TARJETAS/selectipo.php" >

                <input type="submit" class="submit" id="slognav3">

            </form>

        </div>

        
      

        
        <div class="bakBoton">

            <img id="lognav5" src="img/suite/dash.svg" class="lognav">
            <div id="txt5" class="txttx"><strong>DASHBOARD</strong></div>
 
            <form action="MODS/DASHBOARD/dash_lead.php" >

                <input type="submit" class="submit" id="slognav5">

            </form>
        </div>

          
        <div class="bakBoton">

            <img id="lognav6" src="../../img/suite/print.png" class="lognav">
            <div id="txt6" class="txttx"><strong>IMPRIMIR</strong></div>
 
            <form action="MODS/PRINT/print_lead.php" >

                <input type="submit" class="submit" id="slognav6">

            </form>
        </div>



        <form action="../../suite.php" id="lognav7"  class="bakBoton">
                
            <input type="image" src="img/suite/exit.svg"  class="lognav" name="exitdk">
            <div id="line1"></div>
            <div id="txt7" class="txttx"><strong>SALIR</strong></div>

        </form> 

    </navleft>


    <navsup id="navsup">

       

        <div id="backUser">

            <img id="lognav0" src="../../img/apps/apps/ezlead.png" class="imagUser">  
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

        <div id="backESTIM">
            <?php
  
                echo 'ESTIMADO:    '. $printEST.'     ACORDADO:   '.$printFIN;
            ?>
        </div>



    </navsup>

    <div id="backall"></div>

    <modseg  id="modseg">

        <section id="section1" class="sectionmod">

            <div class="namesect" id="namesect1">CONTACTOS</div>

            <div class="backbackTavle">
                
                <?php
                                 
                    
                    if($adminrol== $radmin ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE estatus ='1'  AND activo = '1' ";       
                        $qbdpros = $dbc->query($bdpros);

                   
                    }elseif($adminrol== $radger ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE region LIKE '%$userAcroregion%' AND estatus ='1'  AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);

                    }else{
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE useresp LIKE '%$userLog%' AND estatus ='1'  AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);

                    }


                    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                        $Pid =$filpro['id'];
                        $idmedy =$filpro['idemp'];
                        $Pnombre =$filpro['nombre'];
                        $Ptipomo =$filpro['tipomo'];
                        $valor =$filpro['valorestimado'];
                        $Pvalor = '$'. number_format($valor,2).' NMX';

                        $estatuscolor =$filpro['estatus'];

                        $Pcategoria =$filpro['categoria'];
                
                        $redNAMR =$filpro['red'];
                 
                        $Petapa =$filpro['estatus'];

                        if($Petapa == '1'){
                            $backcol = 'etpacolor1';
                        }elseif($Petapa == '2'){
                            $backcol = 'etpacolor2';
                        }elseif($Petapa == '3'){
                            $backcol = 'etpacolor3';
                        }elseif($Petapa == '4'){
                            $backcol = 'etpacolor5';
                        }

                        $idtarj =$filpro['id'];
                        

                    
                      
                            ?>

                            
                        <form class="tabcpo clipoLEAD" method="POST"  action="MODS/TRATOS/tratos.php">

                            <table class="clipo">

                                <tr>
                                    <th class="coltb1"></th>
                                    <th class="coltb2"></th>
                                    <th class="coltb3"></th>
                                </tr>


                                <tr>
                                    <td><div class="nameesttxtB"></div></td>                                            
                                    <td ></td>
                                    <td><div class="allpxtxt"></div></td>
                                    
                                </tr>

                                <tr>
                                    <td><div class="nameest"></div>
                                    <td></td>
                                    <td><div class="allpx"></div></td>                                        
                            
                                </tr>

                                <tr>

                                    <td rowspan="4"> 
                                        <div id="backfoto">

                                       

                                             
                                            <img id="imgPERSOsf" src="img/suite/emp.png" alt="Agregar Foto">
                                                
                                              

                                        </div>
                                    </td>

                                    <th><div class="namenomtxt"><sterong>Nombre</sterong></div></th>
                                    <td></td>
                                </tr>

                                <tr>
                                
                                    <td><div class="namenom"><?php echo $Pnombre;?></div></td>
                                    <td></td>
                                </tr>

                            
                            

                                <tr>

                            
                                    <th><div class="nameespetxt"><sterong>Tipo Organización</sterong></div></th>
                                    <td></td>
                                </tr>
                                
                                    


                                <tr>
                                    <td><div class="nameespe"><?php echo $Pcategoria;?></div></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><div class="redmed"><?php echo $redNAMR.'tj: '.$idtarj;?></div></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            
                                        
                                     

                                <tr>
                                    <td colspan="2"><div  class="valorcli"><?php echo $Pvalor;?></div></td>
                                    <td>
                                        <div class="backsub">
                                            <img id="imgabrirTarj" src="img/ICONOS/ir.png" >
                                            <input type="submit" id="submit">
                                            
                                            <input hidden type="text" name="Pid"value ="<?php echo $Pid;?>" > 
                                            <input hidden type="text" name="person"value ="<?php echo $Pnombre;?>" > 
                                            <input hidden type="text" name="tipotarj"value ="EMPRESA" > 

                                        </div>

                                    </td>
                                </tr>

                            


                            </table>

                        </form>

                            
                        <?php
                    }

              
                  
                  if($adminrol== $radmin ){
                      $bdpros= "SELECT * FROM $cat_tarjetas_leadpx WHERE estatus ='1'  AND activo = '1' ";       
                      $qbdpros = $dbc->query($bdpros);

                 
                  }elseif($adminrol== $radger ){
                      $bdpros= "SELECT * FROM $cat_tarjetas_leadpx WHERE region LIKE '%$userAcroregion%' AND estatus ='1'  AND activo = '1' ";
                      $qbdpros = $dbc->query($bdpros);

                  }else{
                      $bdpros= "SELECT * FROM $cat_tarjetas_leadpx WHERE useresp LIKE '%$userLog%' AND estatus ='1'  AND activo = '1' ";
                      $qbdpros = $dbc->query($bdpros);

                  }





                  while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                      $Pid =$filpro['id'];
                      $idmedy =$filpro['idpx'];
                      $Pnombre =$filpro['nombre'];
                      $Ptipomo =$filpro['tipomo'];
                      $valor =$filpro['valorestimado'];
                      $Pvalor = '$'. number_format($valor,2).' NMX';

                      $estatuscolor =$filpro['estatus'];
              
                      $procedimiento =$filpro['procedimiento'];
               
                      $Petapa =$filpro['estatus'];

                      if($Petapa == '1'){
                          $backcol = 'etpacolor1';
                      }elseif($Petapa == '2'){
                          $backcol = 'etpacolor2';
                      }elseif($Petapa == '3'){
                          $backcol = 'etpacolor3';
                      }elseif($Petapa == '4'){
                          $backcol = 'etpacolor5';
                      }

                      $idtarj =$filpro['id'];
                      

                  
                    
                        ?>

                            
                            <form class="tabcpo clipoLEAD" method="POST"  action="MODS/TRATOS/tratos.php">

                                <table class="clipo">

                                    <tr>
                                        <th class="coltb1"></th>
                                        <th class="coltb2"></th>
                                        <th class="coltb3"></th>
                                    </tr>


                                    <tr>
                                        <td><div class="nameesttxtB"></div></td>                                            
                                        <td ></td>
                                        <td><div class="allpxtxt"></div></td>
                                        
                                    </tr>

                                    <tr>
                                        <td><div class="nameest"></div>
                                        <td></td>
                                        <td><div class="allpx"></div></td>                                        
                                
                                    </tr>

                                    <tr>

                                        <td rowspan="4"> 
                                            <div id="backfoto">

                                            

                                                
                                                <img id="imgPERSOsf" src="img/suite/med.png" alt="Agregar Foto">
                                                    
                                                    

                                            </div>
                                        </td>

                                        <th><div class="namenomtxt"><sterong>Nombre de Paciente</sterong></div></th>
                                        <td></td>
                                    </tr>

                                    <tr>
                                    
                                        <td><div class="namenom"><?php echo $Pnombre;?></div></td>
                                        <td></td>
                                    </tr>

                                
                                

                                    <tr>

                                
                                        <th><div class="nameespetxt"><sterong>Procedimiento Interés</sterong></div></th>
                                        <td></td>
                                    </tr>
                                    
                                        


                                    <tr>
                                        <td><div class="nameespe"><?php echo $procedimiento;?></div></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td><div class="redmed"><?php echo $Pid.'tj: '.$idtarj;?></div></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                
                                            
                                        

                                    <tr>
                                        <td colspan="2"><div  class="valorcli"><?php echo $Pvalor;?></div></td>
                                        <td>
                                            <div class="backsub">
                                                <img id="imgabrirTarj" src="img/ICONOS/ir.png" >
                                                <input type="submit" id="submit">
                                                
                                                <input hidden type="text" name="Pid"value ="<?php echo $Pid;?>" > 
                                                <input hidden type="text" name="person"value ="<?php echo $Pnombre;?>" > 
                                                <input hidden type="text" name="tipotarj"value ="PACIENTE" > 
                                            
                                            </div>

                                        </td>
                                    </tr>

                                


                                </table>

                            </form>

                          
                        <?php
                  }
              ?>

            </div>

            

        </section>

        <section id="section2" class="sectionmod">

            <div class="namesect" id="namesect2">COTIZACIONES</div>

            <div class="backbackTavle">
                
                <?php

                    

                    if($adminrol== $radmin ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE  activo = '1' AND estatus ='2' OR estatus ='6' OR estatus ='7' ";
                        $qbdpros = $dbc->query($bdpros);
                    }elseif($adminrol== $radger ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE region LIKE '%$userAcroregion%' AND  activo = '1' AND estatus ='2'  OR estatus ='6' OR estatus ='7' ";
                        $qbdpros = $dbc->query($bdpros);
                    }else{
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE useresp LIKE '%$userLog%' AND activo = '1' AND estatus ='2'  OR estatus ='6' OR estatus ='7' ";
                        $qbdpros = $dbc->query($bdpros);
                    }





                    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                        $Pid =$filpro['id'];
                        $idmedy =$filpro['idemp'];
                        $Pnombre =$filpro['nombre'];
                        $Ptipomo =$filpro['tipomo'];
                        $valor =$filpro['valorestimado'];
                        $Pvalor = '$'. number_format($valor,2).' NMX';

                        $estatuscolor =$filpro['estatus'];

                        $Pcategoria =$filpro['categoria'];
                
                        $redNAMR =$filpro['red'];
                 
                        $Petapa =$filpro['estatus'];

                        if($Petapa == '1'){
                            $backcol = 'etpacolor1';
                        }elseif($Petapa == '2'){
                            $backcol = 'etpacolor2';
                        }elseif($Petapa == '3'){
                            $backcol = 'etpacolor3';
                        }elseif($Petapa == '4'){
                            $backcol = 'etpacolor5';
                        }

                        $idtarj =$filpro['id'];
                       
                     
                      
                  
                            ?>

                            
                        <form class="tabcpo clipoCOT" method="POST"  action="MODS/COTIZACIONES/coti.php">


                            <table class="clipo">

                                <tr>
                                    <th class="coltb1"></th>
                                    <th class="coltb2"></th>
                                    <th class="coltb3"></th>
                                </tr>


                                <tr>
                                    <td><div class="nameesttxtB"></div></td>                                            
                                    <td ></td>
                                    <td><div class="allpxtxt"></div></td>
                                    
                                </tr>

                                <tr>
                                    <td><div class="nameest"></div>
                                    <td></td>
                                    <td><div class="allpx"></div></td>                                        
                            
                                </tr>

                                <tr>

                                    <td rowspan="4"> 
                                        <div id="backfoto">

                                       

                                             
                                            <img id="imgPERSOsf" src="img/suite/emp.png" alt="Agregar Foto">
                                                
                                              

                                        </div>
                                    </td>

                                    <th><div class="namenomtxt"><sterong>Nombre</sterong></div></th>
                                    <td></td>
                                </tr>

                                <tr>
                                
                                    <td><div class="namenom"><?php echo $Pnombre;?></div></td>
                                    <td></td>
                                </tr>

                            
                            

                                <tr>

                            
                                    <th><div class="nameespetxt"><sterong>Tipo Organización</sterong></div></th>
                                    <td></td>
                                </tr>
                                
                                    


                                <tr>
                                    <td><div class="nameespe"><?php echo $Pcategoria;?></div></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><div class="redco"><?php echo $redNAMR.'tj: '.$idtarj;?></div></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            
                                        
                                     

                                <tr>
                                    <td colspan="2"><div  class="valorcli"><?php echo $Pvalor;?></div></td>
                                    <td>
                                        <div class="backsub">
                                            <img id="imgabrirTarj" src="img/ICONOS/ir.png" >
                                            <input type="submit" id="submit">
                                            
                                            <input hidden type="text" name="Pid"value ="<?php echo $Pid;?>" > 
                                            <input hidden type="text" name="person"value ="<?php echo $Pnombre;?>" > 
                                            <input hidden type="text" name="tipotarj"value ="EMPRESA" > 
                                        
                                        </div>

                                    </td>
                                </tr>

                            


                            </table>
                          

                        </form>

                            
                        <?php
                    }


                        
                  if($adminrol== $radmin ){
                    $bdpros= "SELECT * FROM $cat_tarjetas_leadpx WHERE estatus ='2'  AND activo = '1' ";       
                    $qbdpros = $dbc->query($bdpros);

               
                }elseif($adminrol== $radger ){
                    $bdpros= "SELECT * FROM $cat_tarjetas_leadpx WHERE region LIKE '%$userAcroregion%' AND estatus ='2'  AND activo = '1' ";
                    $qbdpros = $dbc->query($bdpros);

                }else{
                    $bdpros= "SELECT * FROM $cat_tarjetas_leadpx WHERE useresp LIKE '%$userLog%' AND estatus ='2'  AND activo = '1' ";
                    $qbdpros = $dbc->query($bdpros);

                }





                while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                    $Pid =$filpro['id'];
                    $idmedy =$filpro['idpx'];
                    $Pnombre =$filpro['nombre'];
                    $Ptipomo =$filpro['tipomo'];
                    $valor =$filpro['valorestimado'];
                    $Pvalor = '$'. number_format($valor,2).' NMX';

                    $estatuscolor =$filpro['estatus'];
            
                    $procedimiento =$filpro['procedimiento'];
             
                    $Petapa =$filpro['estatus'];

                    if($Petapa == '1'){
                        $backcol = 'etpacolor1';
                    }elseif($Petapa == '2'){
                        $backcol = 'etpacolor2';
                    }elseif($Petapa == '3'){
                        $backcol = 'etpacolor3';
                    }elseif($Petapa == '4'){
                        $backcol = 'etpacolor5';
                    }

                    $idtarj =$filpro['id'];
                    

                
                  
                      ?>

                          
                        <form class="tabcpo clipoCOT" method="POST"  action="MODS/COTIZACIONES/coti.php">

                              <table class="clipo">

                                  <tr>
                                      <th class="coltb1"></th>
                                      <th class="coltb2"></th>
                                      <th class="coltb3"></th>
                                  </tr>


                                  <tr>
                                      <td><div class="nameesttxtB"></div></td>                                            
                                      <td ></td>
                                      <td><div class="allpxtxt"></div></td>
                                      
                                  </tr>

                                  <tr>
                                      <td><div class="nameest"></div>
                                      <td></td>
                                      <td><div class="allpx"></div></td>                                        
                              
                                  </tr>

                                  <tr>

                                      <td rowspan="4"> 
                                          <div id="backfoto">

                                          

                                              
                                              <img id="imgPERSOsf" src="img/suite/med.png" alt="Agregar Foto">
                                                  
                                                  

                                          </div>
                                      </td>

                                      <th><div class="namenomtxt"><sterong>Nombre de Paciente</sterong></div></th>
                                      <td></td>
                                  </tr>

                                  <tr>
                                  
                                      <td><div class="namenom"><?php echo $Pnombre;?></div></td>
                                      <td></td>
                                  </tr>

                              
                              

                                  <tr>

                              
                                      <th><div class="nameespetxt"><sterong>Procedimiento Interés</sterong></div></th>
                                      <td></td>
                                  </tr>
                                  
                                      


                                  <tr>
                                      <td><div class="nameespe"><?php echo $procedimiento;?></div></td>
                                      <td></td>
                                  </tr>

                                  <tr>
                                      <td><div class="redco"><?php echo $Pid.'tj: '.$idtarj;?></div></td>
                                      <td></td>
                                      <td></td>
                                  </tr>

                              
                                          
                                      

                                  <tr>
                                      <td colspan="2"><div  class="valorcli"><?php echo $Pvalor;?></div></td>
                                      <td>
                                          <div class="backsub">
                                              <img id="imgabrirTarj" src="img/ICONOS/ir.png" >
                                              <input type="submit" id="submit">
                                              
                                              <input hidden type="text" name="Pid"value ="<?php echo $Pid;?>" > 
                                              <input hidden type="text" name="person"value ="<?php echo $Pnombre;?>" > 
                                              <input hidden type="text" name="tipotarj"value ="PACIENTE" > 
                                          
                                          </div>

                                      </td>
                                  </tr>

                              


                              </table>

                          </form>

                        
                      <?php
                }
                ?>

            </div>

        </section>

        <section id="section3" class="sectionmod">
            <div class="namesect" id="namesect3">NEGOCIACIONES</div>

           
            <div class="backbackTavle">
                
                <?php

                    

                    if($adminrol== $radmin ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE estatus ='3' OR estatus ='3b' AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);
                    }elseif($adminrol== $radger ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE region LIKE '%$userAcroregion%' AND estatus ='3' OR estatus ='3b'  AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);
                    }else{
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE useresp LIKE '%$userLog%' AND estatus ='3' OR estatus ='3b' AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);
                    }





                    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                        $Pid =$filpro['id'];
                        $idmedy3 =$filpro['idmed'];
                        $Pnombre =$filpro['nombre'];
                        $Ptipomo =$filpro['tipomo'];
                        $valor =$filpro['preciohosp'];
                        $Pvalor = $Ptipomo.' '.'$'. number_format($valor,2);

                        $estatuscolor =$filpro['estatus'];

                        $Pcategoria =$filpro['categoria'];
                
                        $Pespecialidad =$filpro['especialidad'];
                        $redNAMR =$filpro['red'];

                        $Petapa =$filpro['estatus'];

                        if($Petapa == '1'){
                            $backcol = 'etpacolor1';
                        }elseif($Petapa == '2'){
                            $backcol = 'etpacolor2';
                        }elseif($Petapa == '3'){
                            $backcol = 'etpacolor3';
                        }elseif($Petapa == '4'){
                            $backcol = 'etpacolor5';
                        }

                        $idtarj =$filpro['id'];
                                  
                        ///////TOTAL DE CIRUGIAS REALIZADAS
                        if($adminrol== $radmin ){              

                            $allcx3 = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE estatus ='5' AND idmed = '$idmedy3'  ")->fetch()); 
    
                            }elseif($adminrol== $radger ){                     
    
                                $allcx3 = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE  region LIKE '%$userAcroregion%' AND estatus ='5' AND idmed = '$idmedy3'  ")->fetch()); 
                            }else{                      
    
                                $allcx3 = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE  useresp LIKE '%$userLog%' AND estatus ='5' AND idmed = '$idmedy3'  ")->fetch()); 
                    
                            }
                      
                            ?>

                            
                        <form class="tabcpo clipoPROG" method="POST"  action="MODS/PROGRAMACION/prog.php">



                            <table class="clipo">


                                <tr>
                                    <th class="coltb1"></th>
                                    <th class="coltb2"></th>
                                    <th class="coltb3"></th>
                                </tr>


                               
                                <tr>
                                    <td><div class="nameesttxtB"></div></td>                                            
                                    <td ></td>
                                    <td><div class="allpxtxt"></div></td>
                                    
                                </tr>

                                <tr>
                                    <td><div class="nameest"></div>
                                    <td></td>
                                    <td><div class="allpx"><?php echo $allcx3;?></div></td>                                        
                            
                                </tr>

                                <tr>

                                    <td rowspan="4"> 
                                        <div id="backfoto">

                                        
                                                        <img id="imgPERSOsf" src="img/suite/med.png" alt="Agregar Foto">
                                           

                                        </div>

                                        </div>
                                    </td>

                                    <th><div class="namenomtxt"><sterong>Nombre</sterong></div></th>
                                    <td></td>
                                </tr>

                                <tr>
                                
                                    <td><div class="namenom"><?php echo $Pnombre;?></div></td>
                                    <td></td>
                                </tr>

                            
                            

                                <tr>

                            
                                    <th><div class="nameespetxt"><sterong>Especialidad</sterong></div></th>
                                    <td></td>
                                </tr>
                                
                                    


                                <tr>
                                    <td><div class="nameespe"><?php echo $Pespecialidad;?></div></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><div class="redpro"><?php echo $redNAMR.'tj: '.$idtarj;?></div></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            
                                     
                                <tr>
                                    <td colspan="2"><div  class="valorcli"><?php echo $Pvalor;?></div></td>
                                    <td>

   
                                        <div class="backsub">
                                            <img id="imgabrirTarj" src="img/ICONOS/ir.png" >
                                            <input type="submit" id="submit">
                                            
                                            <input hidden type="text" name="Pid"value ="<?php echo $Pid;?>" > 
                                            <input hidden type="text" name="person"value ="<?php echo $Pnombre;?>" > 
                                        
                                            
                                        </div>


                                    </td>
                                </tr>

                            


                            </table>

                        </form>

                            
                        <?php
                    }
                ?>

            </div>


        </section>

     

        <section id="section4" class="sectionmod">

            <div class="namesect" id="namesect5">CIERRE</div>

            
             
            <div class="backbackTavle">
                
                <?php

                    

                    if($adminrol== $radmin ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE estatus ='4'  AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);
                    }elseif($adminrol== $radger ){
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE region LIKE '%$userAcroregion%' AND estatus ='4'  AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);
                    }else{
                        $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE useresp LIKE '%$userLog%' AND estatus ='4'  AND activo = '1' ";
                        $qbdpros = $dbc->query($bdpros);
                    }





                    while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                        $Pid =$filpro['id'];
                        $idmedy4 =$filpro['idmed'];
                        $Pnombre =$filpro['nombre'];
                        $Ptipomo =$filpro['tipomo'];
                        $valor4 =$filpro['preciohosp'];
                        $Pvalor4 = $Ptipomo.' '.'$'. number_format($valor4,2);

                        $estatuscolor =$filpro['estatus'];

                        $Pcategoria =$filpro['categoria'];
                
                        $Pespecialidad =$filpro['especialidad'];
                        $redNAMR =$filpro['red'];

                        $Petapa =$filpro['estatus'];

                        if($Petapa == '1'){
                            $backcol = 'etpacolor1';
                        }elseif($Petapa == '2'){
                            $backcol = 'etpacolor2';
                        }elseif($Petapa == '3'){
                            $backcol = 'etpacolor3';
                        }elseif($Petapa == '4'){
                            $backcol = 'etpacolor5';
                        }

                        $idtarj =$filpro['id'];
                        ///////TOTAL DE CIRUGIAS REALIZADAS
                        if($adminrol== $radmin ){              

                            $allcx4 = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE estatus ='5' AND idmed = '$idmedy4'  ")->fetch()); 

                            }elseif($adminrol== $radger ){                     

                                $allcx4 = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE  region LIKE '%$userAcroregion%' AND estatus ='5' AND idmed = '$idmedy4'  ")->fetch()); 
                            }else{                      

                                $allcx4 = current($dbc->query("SELECT COUNT(activo) FROM $cat_tarjetas_med WHERE  useresp LIKE '%$userLog%' AND estatus ='5' AND idmed = '$idmedy4'  ")->fetch()); 
                    
                            }
                  
                            ?>

                            
                        <form class="tabcpo clipoCONC" method="POST"  action="MODS/CONCILIACION/end.php">



                            <table class="clipo">


                                <tr>
                                    <th class="coltb1"></th>
                                    <th class="coltb2"></th>
                                    <th class="coltb3"></th>
                                </tr>


                                <tr>
                                    <td><div class="nameesttxtB"></div></td>                                            
                                    <td ></td>
                                    <td><div class="allpxtxt"></div></td>
                                    
                                </tr>

                                <tr>
                                    <td><div class="nameest"></div>
                                    <td></td>
                                    <td><div class="allpx"><?php echo $allcx4;?></div></td>                                        
                            
                                </tr>

                                <tr>

                                    <td rowspan="4"> 
                                        <div id="backfoto">

                                       

                                             
                                                        <img id="imgPERSOsf" src="img/suite/med.png" alt="Agregar Foto">
                                                


                                            

                                        </div>
                                    </td>

                                    <th><div class="namenomtxt"><sterong>Nombre</sterong></div></th>
                                    <td></td>
                                </tr>

                                <tr>
                                
                                    <td><div class="namenom"><?php echo $Pnombre;?></div></td>
                                    <td></td>
                                </tr>

                            
                            

                                <tr>

                            
                                    <th><div class="nameespetxt"><sterong>Especialidad</sterong></div></th>
                                    <td></td>
                                </tr>
                                
                                    


                                <tr>
                                    <td><div class="nameespe"><?php echo $Pespecialidad;?></div></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><div class="redcie"><?php echo $redNAMR.'tj: '.$idtarj;?></div></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td colspan="2"><div  class="valorcli"><?php echo $Pvalor4;?></div></td>
                                    <td>
                                        <div class="backsub">
                                            <img id="imgabrirTarj" src="img/ICONOS/ir.png" >
                                            <input type="submit" id="submit">
                                            
                                            <input hidden type="text" name="Pid"value ="<?php echo $Pid;?>" > 
                                            <input hidden type="text" name="person"value ="<?php echo $Pnombre;?>" > 
                                        
                                           
                                        </div>

                                    </td>
                                </tr>

                            


                            </table>

                        </form>

                            
                        <?php
                    }
                ?>

            </div>


        </section>

        <div id="blockMod"></div>


    </modseg>



</body>

</html>