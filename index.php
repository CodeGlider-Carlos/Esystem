<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ez system by 50d</title>

    <link rel="icon" type="favicon/x-icon" href="ezsystem/img/ICONOS/ezico.ico" />
    <link rel="stylesheet" type="text/css" href="css/new_loguin.css">

    <!-- General Css -->
    <link rel="stylesheet" type="text/css" href="css/slidebar.css">

    <!-- Librerías -->
    <script type="text/javascript" src="ezsystem/js/jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="ezsystem/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Redirección móvil
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|android|samsung|nokia|oppo|lg|huawei/) > -1) {
            // document.location = "MOVIL/index.php";
        }
    </script>
</head>

<body>
    <section id="login-container">
        <div class="login-left">
        <img id="ezabsC" src="img/EZSYSTEM_1.png">
            <form id="formloguin" method="POST" action="loglog/loglog.php" autocomplete="off">
                <div id="singin">Log In</div>
                <div id="backuser">
                    <img id="userOk" src="img/userOk.png">
                    <input type="text" placeholder="usuario" class="usuario" name="usersu">
                </div>
                <div id="backpass">
                    <img id="candado" src="img/candado.png">
                    <input type="password" placeholder="contraseña" class="pass" name="passw">
                </div>
                <strong><input type="submit" class="LOGIN" value="LOGIN" name="loglo"></strong>
            </form>
        </div>

        <div class="login-right">
            <!-- Imagen decorativa -->
            <img src="img/bg-login.png" alt="Imagen decorativa" class="login-image">
        </div>
    </section>

    <!-- Script SweetAlert si hay error -->
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get('error');

        if (error == 1) {
            Swal.fire({
                title: 'Error de acceso',
                text: 'Usuario o contraseña incorrectos',
                icon: 'error',
                background: '#111',
                color: '#fff',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Intentar de nuevo'
            });
        }

        // Limpiar parámetro de URL después de mostrar el error
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.pathname);
        }
    </script>

</body>

</html>