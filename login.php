<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<script>alert("Credenciales incorrectas.");</script>';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral</title>
    <link rel="stylesheet" href="estilos.css" />
    <script type="text/javascript" src="funciones.js"></script>
    <link rel="xml" type="text/xml" href="datos.xml">


</head>

<body>
    <div id="header">
        <div class="logo">
            <a href="index.php">CTSPV</a>
        </div>
    </div>
    <div id="login-box">
        <form id="loginForm" method="post" action="procesamieno.php">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" placeholder="Ingrese su usuario">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">

            <button onclick="login()">Iniciar Sesión</button>

            <a href="registro.php">Registrarse</a>
        </form>
    </div>
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
    </div>
    <style>
        body {
            background: #3399ff;
            overflow: hidden;
        }


        .circle {
            position: absolute;
            border-radius: 50%;
            background: white;
            animation: ripple 15s infinite;
            box-shadow: 0px 0px 1px 0px #508fb9;
        }

        .small {
            width: 200px;
            height: 200px;
            left: -100px;
            bottom: -100px;
        }

        .medium {
            width: 400px;
            height: 400px;
            left: -200px;
            bottom: -200px;
        }

        .large {
            width: 600px;
            height: 600px;
            left: -300px;
            bottom: -300px;
        }

        .xlarge {
            width: 800px;
            height: 800px;
            left: -400px;
            bottom: -400px;
        }

        .xxlarge {
            width: 1000px;
            height: 1000px;
            left: -500px;
            bottom: -500px;
        }

        .shade1 {
            opacity: 0.2;
        }

        .shade2 {
            opacity: 0.5;
        }

        .shade3 {
            opacity: 0.7;
        }

        .shade4 {
            opacity: 0.8;
        }

        .shade5 {
            opacity: 0.9;
        }

        @keyframes ripple {
            0% {
                transform: scale(0.8);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(0.8);
            }
        }

        @media (max-width: 1350px) {
            .ripple-background {
                display: none;
                /* Oculta la animación cuando el ancho de la pantalla sea menor que 1350px */
            }
        }
    </style>
</body>

</html>