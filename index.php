<?php
session_set_cookie_params(0);
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="estilos.css" />
    <script type="text/javascript" src="funciones.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div id="header">
        <div class="logo">
            <a href="index.php">CTSPV</a>
        </div>
        <div class="menu-derecha">
            <?php
            if(isset($_SESSION['username'])){
                echo '<p>'.$_SESSION['username'].'</p>';
                echo '<a href="logout.php">Logout</a>';
            }else{
                echo'<a href="login.php">Login</a>';
            }
            ?>
        </div>
    </div>

    <!-- Menus y submenus -->

    <div id="sidebar">
        <a href="index.php">Inicio</a>
        <a href="#" onclick="Submenu('colegio')">Colegio</a>
        <ul id="colegioSubmenu">
            <li><a href="paginas_navegacion/pag_colegio/quienes_somos.php">¿Quiénes somos?</a></li>
            <li><a href="paginas_navegacion/pag_colegio/historios.php">Historia</a></li>
        </ul>
        <a href="#" onclick="Submenu('convenios')">Convenios</a>
        <ul id="conveniosSubmenu">
            <li><a href="paginas_navegacion/pag_convenios/con_quien.php">¿Con quién?</a></li>
            <li><a href="paginas_navegacion/pag_convenios/desde_cuando.php">¿Desde cuándo?</a></li>
            <li><a href="paginas_navegacion/pag_convenios/enlaces.php">Enlaces</a></li>
        </ul>
        <a href="#" onclick="Submenu('colegiacion')">Colegiación</a>
        <ul id="colegiacionSubmenu">
            <li><a href="paginas_navegacion/pag_colegiacion/razones.php">Razones</a></li>
            <li><a href="paginas_navegacion/pag_colegiacion/requisitos.php">Requisitos</a></li>
            <li><a href="paginas_navegacion/pag_colegiacion/inscripcion.php">Inscripción</a></li>
        </ul>
        <a href="#" onclick="Submenu('contrato')">Modelos de Contrato</a>
        <ul id="contratoSubmenu">
            <li><a href="paginas_navegacion/pag_modelos/temporal.php">Temporal</a></li>
            <li><a href="paginas_navegacion/pag_modelos/indefinido.php">Indefinido</a></li>
            <li><a href="paginas_navegacion/pag_modelos/practicas.php">Prácticas</a></li>
        </ul>
        <a href="#" onclick="Submenu('formacion')">Formación</a>
        <ul id="formacionSubmenu">
            <li><a href="paginas_navegacion/pag_formacion/cursos.php">Cursos</a></li>
            <li><a href="paginas_navegacion/pag_formacion/seminarios.php">Seminarios</a></li>
        </ul>
        <a href="#" onclick="Submenu('bolsa')">Bolsa de Empleo</a>
        <ul id="bolsaSubmenu">

            <li><a href="paginas_navegacion/pag_bolsa_empleo/ofertasTrabajo.php">Ofertas trabajo</a></li>
        </ul>



    </div>



    <div id="content">
        <!-- Contenido principal de la página -->
        <div class="titulo">
            <h2>¿Qué es el Colegio Técnico Superior Informático del País Vasco?</h2>
        </div>
        <div class="bloque-azul-claro-pri">
            <p>El Colegio Técnico Superior Informático del País Vasco, también conocido como CTSPV, es una institución
                que representa y promueve los intereses de los profesionales de la informática en la región del País
                Vasco, España.</p>
            <p>El CTSPV se estableció con el objetivo de proporcionar un espacio donde los técnicos superiores
                informáticos puedan colaborar, compartir conocimientos y experiencias, así como abogar por sus derechos
                laborales y profesionales.</p>

            <p>Entre las funciones del CTSPV se encuentran:</p>
            <ul>
                <li>Representar los intereses de los técnicos superiores informáticos ante entidades gubernamentales,
                    empresas y otras organizaciones.</li>
                <li>Promover la formación continua y el desarrollo profesional en el campo de la informática.</li>
                <li>Proporcionar recursos y herramientas para el crecimiento profesional de sus miembros.</li>
                <li>Fomentar la ética y la excelencia en el ejercicio de la profesión informática.</li>
            </ul>
            <p>En resumen, el Colegio Técnico Superior Informático del País Vasco es una comunidad dedicada a fortalecer
                y avanzar en el campo de la informática en la región, brindando apoyo y representación a los
                profesionales del sector.</p>
        </div>
        <div class="imagen-pri">
            <img src="images/imglogo.jpg">
        </div>

    </div>
</body>

</html>