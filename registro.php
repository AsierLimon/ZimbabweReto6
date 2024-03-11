<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="estilos.css" />
    <script type="text/javascript" src="funciones.js"></script>
    <link rel="xml" type="text/xml" href="usuarios.xml">


</head>

<body>
    <div id="header">
        <div class="logo">
            <a href="index.php">CTSPV</a>
        </div>
    </div>
    <div id="login-box">
        <form id="loginForm" method="post" action="registro.php">
            <label for="username">Usuario: *</label>
            <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>

            <label for="username">Email: *</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su email" required>

            <label for="password">Contraseña: *</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>

            <label for="password">Repita su contraseña: *</label>
            <input type="password" id="password2" name="password2" placeholder="Repita su contraseña" required>

            <button onclick="agregar_usuario_xml()">Registrarse</button>
            <a href="login.php">Log in</a>
            </from>
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




<?php

function usuario_existe($username)
{
    $xml = new DOMDocument();
    $xml->load("datos.xml");

    $usuarios = $xml->getElementsByTagName("user");

    foreach ($usuarios as $usuario) {
        $nombre_usuario = $usuario->getElementsByTagName("username")->item(0);
        if ($nombre_usuario !== null && $nombre_usuario->nodeValue === $username) {
            return true; // El usuario ya existe
        }
    }

    return false; // El usuario no existe
}

function agregar_usuario_xml()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $password2 = htmlspecialchars($_POST["password2"]);
        // Verificar si las contraseñas coinciden
        if ($password != $password2) {
            echo '<script>alert("Las contraseñas no coinciden")</script>';

            return; // Salir de la función si las contraseñas no coinciden
        } else {

            if (usuario_existe($username)) {
                echo '<script>alert("El usuario ya existe")</script>';

                return; // Salir de la función si el usuario ya existe
            }
        }

        $email = htmlspecialchars($_POST["email"]);

        //Crear saltos de linea entre etiquetas
        $xml = new DOMDocument('1.0');
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = true;

        // Abrir el archivo XML existente o crear uno nuevo si no existe
        if (file_exists("datos.xml")) {
            $xml->load("datos.xml");
        } else {
            // Si el archivo no existe, crea la estructura básica del XML
            $root = $xml->createElement("users");
            $xml->appendChild($root);
        }

        // Crear un nuevo elemento usuario
        $user = $xml->createElement("usuario");
        $user->appendChild($xml->createElement("nombre", $username));
        $user->appendChild($xml->createElement("contrasena", $password));
        $user->appendChild($xml->createElement("email", $email));

        // Agregar el elemento usuario al elemento raíz
        $xml->documentElement->appendChild($user);

        // Guardar el archivo XML actualizado
        $xml->save("datos.xml");

        // Puedes enviar una respuesta al cliente si es necesario
        echo '<script>alert("Se ha registrado correctamente")</script>';

    }
}

// Llamar a la función
agregar_usuario_xml();

?>