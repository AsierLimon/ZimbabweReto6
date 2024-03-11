<?php
function login()
{
    // Cargar el archivo XML
    $xml = simplexml_load_file('datos.xml');
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar que los campos de usuario y contraseña no estén vacíos
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header('Location: login.php');
        exit;
    }



    if ($xml) {
        $encontrado = false;

        // Iterar a través de los usuarios en el archivo XML
        foreach ($xml->usuario as $usuario) {
            $nombre = (string) $usuario->nombre;
            $contrasena = (string) $usuario->contrasena;

            if ($username === $nombre && $password === $contrasena) {
                $encontrado = true;
                break;
            }
        }

        if ($encontrado) {
            session_start();
            $_SESSION['username'] = $username;

            // Redirigir al usuario a la página principal
            header('Location: index.php');
            exit;
        } else {
            header('Location: login.php?error=1');
            exit;



        }
    } else {
        echo '<script>alert("Error al cargar el archivo XML.")</script>';

    }
}

// Llamar a la función login si se envió un formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    login();
}
?>