<?php
 require_once 'varSQL/dbmysql.php'; 
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php'; 
 session_start();


$adminrol=$_SESSION['rol'];
$userLog =$_SESSION['usuario'];
$userNom =$_SESSION['nombre'];
$userUnidad=$_SESSION['unidad'];
$userAcronu=$_SESSION['acronu'];
$userAcroregion=$_SESSION['acroregion'];
$userRegion=$_SESSION['region'];
$userUnidadAcronu=$_SESSION['acronu'];



$filtrarU = $_POST['filtrarU'];
$userUnid = $_POST['unidad'];
$unidadSel = $_POST['unidad'];
$year = $_POST['yearyearSel'];
$regionSel = $_POST['region'];


$periodo = isset($_POST['mes']) ? $_POST['mes'] : false;
$periodom = isset($_POST['mes']) ? $_POST['mes'] : false;
$messave =$periodo;
$clientesu = isset($_POST['unidad']) ? $_POST['unidad'] : false;
$tabdueno = isset($_POST['tabdueno']) ? $_POST['tabdueno'] : false;
$tabregion = isset($_POST['region']) ? $_POST['region'] : false;
$tabunidad = isset($_POST['unidad']) ? $_POST['unidad'] : false;



$periodoSel = isset($_POST['mes']) ? $_POST['mes'] : false;




if(empty($periodoSel)){
    $mesNA = '';
}elseif($periodoSel == '01'){
    $mesCO = 'm1';
    $mesNA = 'ENERO';
}elseif($periodoSel == '02'){
    $mesCO = 'm2';
    $mesNA = 'FEBRERO';
}elseif($periodoSel == '03'){
    $mesCO = 'm3';
    $mesNA = 'MARZO';
}elseif($periodoSel == '04'){
    $mesCO = 'm4';
    $mesNA = 'ABRIL';
}elseif($periodoSel == '05'){
    $mesCO = 'm5';
    $mesNA = 'MAYO';
}elseif($periodoSel == '06'){
    $mesCO = 'm6';
    $mesNA = 'JUNIO';
}elseif($periodoSel == '07'){
    $mesCO = 'm7';
    $mesNA = 'JULIO';
}elseif($periodoSel == '08'){
    $mesCO = 'm8';
    $mesNA = 'AGOSTO';
}elseif($periodoSel == '09'){
    $mesCO = 'm9';
    $mesNA = 'SEPTIEMBRE';
}elseif($periodoSel == '10'){
    $mesCO = 'm10';
    $mesNA = 'OCTUBRE';
}elseif($periodoSel == '11'){
    $mesCO = 'm11';
    $mesNA = 'NOVIEMBRE';
}elseif($periodoSel == '12'){
    $mesCO = 'm12';
    $mesNA = 'DICIEMBTE';
}


      

  $yearCompleto = date('Y');
  $yearhoy = date('y');
  $year = date('y');
  $mesme = date('m');
  $tabnemUNi= "SELECT * FROM $clirisk WHERE  acronu ='$userUnid'  ";
  $qtabnemUNi = $db_users->query($tabnemUNi);


  while ($filpto = $qtabnemUNi->fetch(PDO::FETCH_ASSOC)) {
          $unidadNa =$filpto['unidad'];
  }

 

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ RESULTS</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/ezresults.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="../../css/all.css">
    <link rel="stylesheet" type="text/css" href="css/idexresults.css">
    <link rel="stylesheet" type="text/css" href="css/estados.css">
    <link rel="stylesheet" type="text/css" href="css/okrs.css">
    <link rel="stylesheet" type="text/css" href="css/tableroResul.css">
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

            <img  src="img/dash.svg" class="lognav">
            <div id="txt1" class="txttx"><strong>DASHBOARD</strong></div>

            <form action="indexResults.php" >

                <input type="submit" class="submit" id="slognav1">

            </form>


        </div>

        <div class="bakBoton">

            <img  src="img/okrs.png" class="lognav">
            <div id="txt2" class="txttx"><strong>OKRS</strong></div>

            <form action="select_okrs.php" >

                <input type="submit" class="submit" id="slognav2" >

            </form>
            <div class="line1"></div>
        </div>


        <div class="bakBoton">

            <img  src="img/registro.png" class="lognav">
            <div id="txt3" class="txttx"><strong>REGISTRO</strong></div>

            <form action="select_registra.php" >

                <input type="submit" class="submit" id="slognav3" >

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

            <img id="lognav0" src="../../img/apps/apps/ezresults.png" class="imagUser">   
            <div id="nameuser"><div class="useruu"><?php echo $userNom;?></div></div>   

        </div>

        <div id="backMOD">
            <div class="botonmod" id="modcome">Comercial</div>
            <div class="botonmod" id="okrs">OKRs</div>
            <div class="botonmod" id="modest">Estado de Resultados</div>
            
        </div>
       

    </navsup>
 
    <div id="backallS"></div>

    <section id="backallres">


        <div id="granback_estados">

            <div id="estadosR">
                <div id="ingresos" class="botonesest">INGRESOS</div>
                <div id="costos"  class="botonesest">COSTOS</div>
                <div id="gastos"  class="botonesest">GASTOS</div>
                <div id="utilidad"  class="botonesest">UTILIDAD</div>
            </div>

            <div id="back_estado">

                

                <?php

                    if($adminrol == $radmin OR $adminrol == $radreg OR $adminrol == $radger ){

                    
                            require_once 'estados.php'; 
                        
                    
                    }
                ?>

                        

            
            </div>
           
            <div id="back_grafGast">
               
                <div id="contComCostos">
            
                    <table id="tablataRESventa" class="table">


                            <tr>
                        
                                <th class="hoyVEn"></th>                         
                            
                            </tr>




                            <?php

                        

                                $tacome1= "SELECT * FROM $estresu WHERE yearall LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%COSTO%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";
                                    
                            
                        

                                $qtacome1 = $dbo->query($tacome1);



                                while ($filpto = $qtacome1->fetch(PDO::FETCH_ASSOC)) {
                                    $comment1 =$filpto['comment1'];
                                    $comment2 =$filpto['comment2'];
                                    $comment3 =$filpto['comment3'];
                                    $comment4 =$filpto['comment4'];
                                    $comment5 =$filpto['comment5'];
                                    $comment6 =$filpto['comment6'];
                                    $comment7 =$filpto['comment7'];
                                    $comment8 =$filpto['comment8'];
                                    $comment9 =$filpto['comment9'];
                                    $comment10 =$filpto['comment10'];
                                    $comment11 =$filpto['comment11'];
                                    $comment12 =$filpto['comment12'];
                                    $idcommen =$filpto['id'];

                                    if($concepto1 == 'TOTAL COSTOS'){
                                        $claseCOLor = 'colorblue';
                                        $concepb ='TOTAL' ;
                                    }else{
                                        $claseCOLor = 'colorblack';
                                        $concepb =$concepto1 ;
                                    } 

                                    if($mesCO == 'm1'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment1;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm2'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment2;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm3'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment3;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm4'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment4;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm5'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment5;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm6'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment6;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm7'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment7;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm8'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment8;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm9'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment9;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm10'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment10;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm11'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment11;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm12'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment12;    ?></textarea>
                                                    
                                        <?php

                                    }

                              
                                            ?>
                                    
                                        </td>
                                    </tr>
                                    
                                        <?php
                                    
                                    
                                }

                            ?>



                    </table>
                </div>

                <div id="contComGastos">
            
                    <table id="tablataRESventa" class="table">


                            <tr>
                        
                                <th class="hoyVEn"></th>                         
                            
                            </tr>




                            <?php

                        

                                $tagast1= "SELECT * FROM $estresu WHERE yearco LIKE '%$year%' AND activo = 'SI'  AND tipodato LIKE '%GASTO%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";
                                    
                            
                        

                                $qtagast1 = $dbo->query($tagast1);



                                while ($filpto = $qtagast1->fetch(PDO::FETCH_ASSOC)) {
                                    $comment1 =$filpto['comment1'];
                                    $comment2 =$filpto['comment2'];
                                    $comment3 =$filpto['comment3'];
                                    $comment4 =$filpto['comment4'];
                                    $comment5 =$filpto['comment5'];
                                    $comment6 =$filpto['comment6'];
                                    $comment7 =$filpto['comment7'];
                                    $comment8 =$filpto['comment8'];
                                    $comment9 =$filpto['comment9'];
                                    $comment10 =$filpto['comment10'];
                                    $comment11 =$filpto['comment11'];
                                    $comment12 =$filpto['comment12'];
                                    $idcommen =$filpto['id'];

                                    if($concepto1 == 'TOTAL COSTOS'){
                                        $claseCOLor = 'colorblue';
                                        $concepb ='TOTAL' ;
                                    }else{
                                        $claseCOLor = 'colorblack';
                                        $concepb =$concepto1 ;
                                    } 

                                    if($mesCO == 'm1'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment1;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm2'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment2;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm3'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment3;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm4'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment4;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm5'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment5;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm6'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment6;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm7'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment7;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm8'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment8;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm9'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment9;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm10'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment10;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm11'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment11;    ?></textarea>
                                                    
                                        <?php

                                    }elseif($mesCO == 'm12'){
                                        ?>
                                            <textarea id="<?php echo 'com'. $idcommen;?>" class="<?php echo $claseCOLor;?> textarea3 colornopago" spellcheck="false"><?php  echo $comment12;    ?></textarea>
                                                    
                                        <?php

                                    }

                              
                                            ?>
                                    
                                        </td>
                                    </tr>
                                    
                                        <?php
                                    
                                    
                                }

                            ?>



                    </table>
                </div>
            </div>
                
       
        </div>

        <div id="granback_comercial">

                  
            <div id="back_comercial">

                <img id="lognav0" src="img/comercial<?php echo $periodoSel; ?>.png" class="imagcom">  


                <div id="backEstraBo">
                    <div id="avances" class="botonesest2">ESTRATEGIAS</div>
                 
                </div>
           
                <div id="estrategias">

                    <table class="tab_estrategias">


                        <?php

                            $tabtareas= "SELECT * FROM $estrateco WHERE yearco LIKE '%$year%' AND activo = '1'  AND mes LIKE '%$periodoSel%' AND region LIKE '%$regionSel%' AND unidad LIKE '%$unidadSel%'  ORDER BY id ASC ";

                            $qtabtareas = $dbo->query($tabtareas);

                            while ($filpto = $qtabtareas->fetch(PDO::FETCH_ASSOC)) {

                                $idtask =$filpto['id'];
                                $estrategia =$filpto['estrategia'];
                                ?>

                                    <tr>
                                        <td class="task"><strong><?php echo $idtask;?></strong></td>
                                        <td><?php echo $estrategia;?></td>
                                    </tr>
                                <?php

                            }
                        ?>
                      
                      
                    </table>

                </div>
                        


            </div>

           
        </div>

        <div id="granback_okrs" >

  

            <?php

                if($adminrol == $radmin OR $adminrol == $radreg OR $adminrol == $radger ){


                        require_once 'tableroRes.php'; 
                    

                }
            ?>

        </div>


        <div id="blockMod"></div>

    </section>





</body>

</html>