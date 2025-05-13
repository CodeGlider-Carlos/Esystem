<?php
 session_start();
 require_once '../../varSQL/bd.php'; 
 require_once '../../varSQL/var.php'; 
 if (empty($_SESSION['usuario'])){
    session_destroy();
    header("Location: ../../../../../../../index.php");
}



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
    <title>ez modOp</title>
    
    <link rel="icon" type="favicon/x-icon" href="../../img/ICONOS/ezico.ico" />
    
    <!---------------------  LIBRERIAS JQUERY----------------------->
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
      <!---------------------  CONTROLADORES JS----------------------->

      <script type="text/javascript" src="js/idexdocu.js"></script>
     <!---------------------  LINK DE ESTILOS GENERALES----------------------->


     <link rel="stylesheet" type="text/css" href="css/allop.css">
    <link rel="stylesheet" type="text/css" href="css/idexdocu.css">
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


          

        <form action="../../suite.php" id="lognav7b"  class="bakBoton">
                
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
        <div class="txtmodop">MODELO OPERATIVO</div>
        <div class="linemodop"></div>
        
        <div id="backhome">

    
            <section id="backmenu">
                <img  src="img/menuHome.png" class="imgbackhome">  

                <img  src="../../img/logos/tulogo.png" class="img50d">  

                <form action="oP.php"  method="POST">
                    <input hidden type="text" name="grupo" value="DIRECCION Y ESTRATEGIA">
                    <input  class="boton" id="botonhome1" type="submit">
                    <div class="imgEsta" id="gld">DIRECCION Y ESTRATEGIA</div>

                </form>

                <form action="oP.php"  method="POST">
                    <input hidden type="text" name="grupo" value="GESTION FINANCIERA">
                    <input  class="boton" id="botonhome2" type="submit">
                    <div class="imgEsta" id="fin">GESTION FINANCIERA</div>
                </form>

                <form action="oP.php"  method="POST">
                    <input hidden type="text" name="grupo" value="GESTION DE PROVEEDORES Y SUMINISTROS">
                    <input  class="boton" id="botonhome3" type="submit">
                    <div class="imgEsta" id="prov">GESTION DE PROVEEDORES Y SUMINISTROS</div>
                </form>

                
                <form action=""  method="POST">
                    <input hidden type="text" name="grupo" value="GESTION COMERCIAL">
                    <input  class="boton" id="botonhome3b" type="submit">
                    <div class="imgEsta" id="vinc">GESTION COMERCIAL</div>
                </form>
                
                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="MEJORA DE LA CALIDAD Y SEGURIDAD DEL PACIENTE">
                    <input  class="boton" id="botonhome4" type="submit">
                    <div class="imgEsta" id="qps">MEJORA DE LA CALIDAD Y SEGURIDAD DEL PACIENTE</div>

                 
                </form>


                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="GESTION DE MEDICAMENTOS E INSUMOS CLINICOS">
                    <input  class="boton" id="botonhome5" type="submit">
                    <div class="imgEsta" id="mmu">GESTION DE MEDICAMENTOS E INSUMOS CLINICOS</div>


                </form>
                
                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="PREVENCION Y CONTROL DE INFECCIONES">
                    <input  class="boton" id="botonhome6" type="submit">
                    <div class="imgEsta" id="pci">PREVENCION Y CONTROL DE INFECCIONES</div>

                </form>

                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="GESTION Y SEGURIDAD DE INSTALACIONES">

                    <input  class="boton" id="botonhome7" type="submit">
                    <div class="imgEsta" id="fms">GESTION Y SEGURIDAD DE INSTALACIONES</div>

                </form>

                <form action="oP.php"  method="POST">

                    <input hidden type="text" name="grupo" value="GESTION DEL TALENTO HUMANO">

                    <input  class="boton" id="botonhome8" type="submit">
                     
                    <div  id="sqe" class="imgEsta">GESTION DEL TALENTO HUMANO</div>

                </form>

                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE">
                    <input  class="boton" id="botonhome9" type="submit">
                    <div class="imgEsta" id="misp">METAS INTERNACIONALES PARA LA SEGURIDAD DEL PACIENTE</div>

                </form>

                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="MANEJO DE LA COMUNICACION">
                    <input  class="boton" id="botonhome10" type="submit">
                    <div class="imgEsta" id="mci">MANEJO DE LA COMUNICACION</div>

                </form>

                <form action=""  method="POST">

                    <input hidden type="text" name="grupo" value="MANEJO DE LA INFORMACION">
                    <input  class="boton" id="botonhome11" type="submit">
                    <div class="imgEsta" id="ginf">MANEJO DE LA INFORMACION</div>

                </form>

                <form action="oP.php"  method="POST">
                    <input hidden type="text" name="grupo" value="ATENCION AL PACIENTE">
                    <input  class="boton" id="botonhome12" type="submit">
                    <div class="imgEsta" id="px">ATENCION AL PACIENTE</div>
                </form>

                <form action="cont">

                    <input  class="boton" id="botonhome13" type="submit">

                </form>

            </section>

        </div>
     

     

    </section>




</body>

</html>