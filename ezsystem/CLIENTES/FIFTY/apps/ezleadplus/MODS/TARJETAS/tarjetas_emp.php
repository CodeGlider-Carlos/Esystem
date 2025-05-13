<?php
session_start();
require_once '../../varSQL/bd_lead.php';
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
    $tipopro = $_POST['tipopro'];

    
}else{
    $person = $_POST['person'];
    $tipopro = $_POST['tipopro'];
}


$bdpros0= "SELECT * FROM $crm_prosElead WHERE acron  = '$person' ";
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

$tabnamlead = "SELECT * FROM $users_leadlead WHERE user = '$Puseresp0' ";
$qtabnamlead = $dbc->query($tabnamlead);

while ($filpro = $qtabnamlead->fetch(PDO::FETCH_ASSOC)) {
    $nombreUser =$filpro['nombre'];
    $useres =$filpro['user'];
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez lead</title>
    
        
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


            <form action="../PROSPECTOS/selectprospect.php" id="slognav2">

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

            <div class="namesect" id="namesect1">TARJETA DE EMPRESA</div>
        
            
            <div id="block0">

                <div id="backfotoname">

                    <div class="namesect" id="namesect1">DATOS</div>
                
                    <div id="backfotoALL">


                

                        <div class="backfoto">
                        

                            <img id="imgPERSOsf" src="../../img/suite/emp.png" alt="Agregar Foto">
                            
                            

                        </div>

                        
                        <div class="labelTarj" id="nombreTXT">Nombre</div>
                        <div class="txtarj" id="nombreNAME"><strong><?php echo $Pnombre0;?></strong></div>

                        <div class="labelTarj" id="especialidadTXT">Especialidad</div>
                        <div class="txtarj" id="especialidadNAME"><strong><?php echo $Pespecialidad0;?></strong></div>
                        <div class="labelTarj" id="obstxt">Observaciones</div>
                        <textarea id="obs"><?php echo $Pobs0;?></textarea>


                    </div>
            
                





                </div>
            
                <div id="backredEMP">

                    <?php

                    

                            ?>

                                <table class="tablered">


                                    <tr>
                                        <th colspan="2">TARJETAS</th>
                                    </tr>

            


                                    <?php

                                            $bdpros= "SELECT * FROM $cat_tarjetas_leademp WHERE red  = '$person' ";
                                            $qbdpros = $dbc->query($bdpros);

                                            
                                            
                                            while ($filpro = $qbdpros->fetch(PDO::FETCH_ASSOC)) {
                                                $redprint =$filpro['nombre'];
                                                $tdtarj =$filpro['id'];
                                                $valorestimado =$filpro['valorestimado'];
                                                ?>

                                                <tr>
                                                    <td class="colcheck">
                                                        <img class="checkw" src="../../img/suite/checkB.png" >
                                                    </td>
                                                    <td><?php echo $tdtarj.'/'. $redprint ?></td>
                                                </tr>


                                                <?php

                                            }

                                    ?>


                                
                    
                                </table>
                            

                            <?php

                            

                        
                    ?>

                


                </div>


                <section id="section2" class="sectionmodVINCMED">

                    <div id="MAS1">+</div>

                    <form class="tabcposELECT" method="POST" action="save_tarj_emp.php"  autocomplete="off" onkeydown="return event.key != 'Enter';" >
                        

                    

                        <input hidden type="text" value="<?php echo $Pid0;?>" name="idemp">
                        <input hidden type="text" value="<?php echo $person;?>" name="person">
                        <input hidden type="text" value="<?php echo $tipopro;?>" name="tipopro">
                        
            
                        <div for="categoria" class="label">Asesor</div>                
                        <select id="useresp" name="useresp" class="select" required>
                            <option value="<?php echo $useres;?>" ><?php echo $nombreUser;?></option>
                            <option value=""></option>
                            <?php

                                if($adminrol == $radmin ){
                                    $tabuslead = "SELECT * FROM $users_leadlead";
                                }elseif($adminrol == $radreg){
                                    $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                }elseif($adminrol == $radcom){
                                    $tabuslead = "SELECT * FROM $users_leadlead WHERE region = '$userAcroregion' ";
                                }else{
                                    $tabuslead = "SELECT * FROM $users_leadlead WHERE unidad = '$userAcronu' ";
                                }

                                
                                $qtabuslead = $dbc->query($tabuslead);

                                foreach ($qtabuslead as $opciones){ ?>

                                <option value="<?php echo $opciones['user'];?>"><?php echo $opciones['nombre'];?></option>

                                    <?php
                            
                                }
                            ?>
                        </select>   

                        

                        <div for="valor" class="label">Estimación Mensual por Atenciones</div>
                        <input type="text" id="valor" name="valor" class="input" placeholder="ej. 45000" required>


                    
                        
                        <select name="accion" class="accion" required>
                            <option value="" selected>Acción...</option>
                            <option value="ALTA">CREAR</option>
                            <option value="MODIFICAR">MODIFICAR VALOR</option>
                            <option value="ELIMINAR">ELIMINAR TARJETA</option>
                        </select>

                        <input type="submit" value="GUARDAR" id="GUARDAR" name="savetarj">


                    </form>

                </section>
            </div>

        </section>





        <div id="blockMod"></div>


    </modseg>



</body>

</html>





