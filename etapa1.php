<!DOCTYPE HTML>
<html>
<head>
    <title>Tempest</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="subpage">

<?php
// Variables PHP para contenido dinámico
$pageTitle = "Introducción al lenguaje de PHP";
$introTitle = "Conceptos básicos de PHP, ventajas y desventajas, uso y tareas principales";
$advantages = [
    "Facilidad de aprendizaje" => "Es relativamente fácil de aprender, especialmente si ya tienes conocimientos de HTML.",
    "Amplia documentación" => "Existe una amplia documentación y recursos en línea disponibles para PHP.",
    "Integración con base de datos" => "Ofrece una excelente integración con sistemas de gestión de base de datos como MySQL, PostgreSQL, etc.",
    "Gran comunidad" => "Cuenta con una gran comunidad de desarrolladores, lo que significa muchos recursos y frameworks disponibles.",
    "Flexibilidad" => "Es un lenguaje flexible que puede ejecutarse en diferentes sistemas operativos y se integra fácilmente con otros lenguajes.",
    "Velocidad de desarrollo" => "La facilidad y rapidez con la que se puede escribir código en PHP acelera el desarrollo de proyectos web.",
    "Soporte de plataformas populares" => "Es compatible con una amplia gama de servidores web como Apache y Nginx.",
];

$disadvantages = [
    "Manejo de errores" => "Puede ser menos detallado y más difícil de depurar en comparación con otros lenguajes.",
    "Problemas de cohesión" => "Algunos argumentan que PHP carece de una estructura clara y promueve malos hábitos de programación.",
    "Escalabilidad limitada" => "Algunos desarrolladores sostienen que PHP puede no ser eficiente en situaciones de gran escala.",
    "Seguridad" => "PHP ha enfrentado críticas por problemas de seguridad, aunque muchos de estos se han abordado en versiones recientes.",
    "Rendimiento" => "En comparación con otros lenguajes compilados, PHP puede tener un rendimiento ligeramente inferior.",
    "Actualizaciones irregulares" => "Las actualizaciones pueden no ser tan regulares como en otros lenguajes.",
    "Herencia histórica" => "PHP ha evolucionado con el tiempo y algunas decisiones de diseño pueden considerarse menos ideales hoy en día.",
];

$uses = [
    "Desarrollo de sitios web dinámicos" => "PHP se utiliza ampliamente para el desarrollo de sitios web dinámicos.",
    "Gestión de sesión de usuario" => "PHP se utiliza para manejar sesiones de usuarios en aplicaciones web.",
    "Interacción con base de datos" => "PHP es compatible con varios sistemas de gestión de bases de datos para consultas y procesamiento de datos.",
    "Desarrollo de formularios web" => "PHP facilita la creación y procesamiento de formularios web.",
    "Desarrollo de aplicaciones de comercio electrónico" => "Muchas plataformas de comercio electrónico utilizan PHP para crear tiendas en línea.",
    "Desarrollo de Blogs y CMS" => "PHP se utiliza ampliamente en sistemas de gestión de contenidos como WordPress, Joomla y Drupal.",
    "Automatización de tareas" => "PHP se puede utilizar para automatizar tareas del servidor, como procesamiento de archivos y programación de tareas periódicas.",
];

$installationSteps = [
    "Descargar XAMPP" => "Deberás descargar e instalar XAMPP desde el sitio web oficial.",
    "Instalar XAMPP en Windows" => "Ejecuta el instalador de XAMPP y sigue los pasos de instalación en Windows.",
    "Configuración de Apache" => "Modifica la configuración de Apache para evitar conflictos de puertos, como cambiar el puerto 80 a 81.",
];

$imageFolder = "ima/";
$imageDescriptions = [
    "1.jpg" => "Deberemos buscar el instalador de XAMPP en el navegador y entrar en el link de descarga.",
    "2.jpg" => "Procederemos a buscar una versión compatible con Windows y la versión más reciente de XAMPP.",
    "3.jpg" => "Esperaremos a que se termine de descargar el instalador.",
    "4.jpg" => "Al terminar la descarga, abrimos el instalador y hacemos clic en 'next'.",
    "5.jpg" => "Seleccionamos los componentes que utilizaremos y damos clic en 'next'.",
    "6.jpg" => "Seleccionamos la carpeta de destino y damos clic en 'next'.",
    "7.jpg" => "Seleccionamos el lenguaje a utilizar y damos clic en 'next'.",
    "8.jpg" => "Al finalizar la configuración, hacemos clic en 'next'.",
    "9.jpg" => "Esperamos a que se complete la instalación y luego clic en 'finish' para abrir XAMPP.",
    "10.jpg" => "Una vez abierto XAMPP, vamos a la configuración y seleccionamos la primera opción que aparece.",
    "11.jpg" => "En la configuración, buscamos el número '80' y lo cambiamos por '81' para evitar problemas de conexión.",
    "12.jpg" => "Guardamos los cambios realizados en la configuración de Apache.",
    "13.jpg" => "Hacemos clic en 'start' y si el módulo Apache se muestra en verde, la configuración ha funcionado correctamente.",
];
?>

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.php">VicTempest</a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="etapa1.php">Etapa 1</a></li>
        <li><a href="etapa2.php">Etapa 2</a></li>
        <li><a href="etapa3.php">Etapa 3</a></li>
        <li><a href="etapa4.php">Etapa 4</a></li>
    </ul>
</nav>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Etapa 1</p>
            <h2><?php echo $pageTitle; ?></h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p></p>
                    <h2><?php echo $introTitle; ?></h2>
                </header>

                <!-- Mostrar ventajas de PHP -->
                <p>Ventajas:</p>
                <ul>
                    <?php foreach ($advantages as $title => $description) : ?>
                        <li><strong><?php echo $title; ?>:</strong> <?php echo $description; ?></li>
                    <?php endforeach; ?>
                </ul>

                <!-- Mostrar desventajas de PHP -->
                <p>Desventajas:</p>
                <ul>
                    <?php foreach ($disadvantages as $title => $description) : ?>
                        <li><strong><?php echo $title; ?>:</strong> <?php echo $description; ?></li>
                    <?php endforeach; ?>
                </ul>

                <!-- Usos del lenguaje PHP -->
                <p>Usos del lenguaje PHP:</p>
                <ul>
                    <?php foreach ($uses as $title => $description) : ?>
                        <li><strong><?php echo $title; ?>:</strong> <?php echo $description; ?></li>
                    <?php endforeach; ?>
                </ul>

                <!-- Pasos de instalación de XAMPP -->
                <h3>Pasos para la instalación de XAMPP:</h3>
                <ol>
                    <?php foreach ($installationSteps as $title => $description) : ?>
                        <li><strong><?php echo $title; ?>:</strong> <?php echo $description; ?></li>
                    <?php endforeach; ?>
                </ol>

                <!-- Mostrar imágenes con descripciones -->
                <?php 
                $index = 0;
                foreach ($imageDescriptions as $imageName => $description) : 
                    $index++;
                ?>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 20px;">
                        <?php if ($index % 2 !== 0) : // Imagen a la izquierda, texto a la derecha ?>
                            <img src="<?php echo $imageFolder . $imageName; ?>" alt="Imagen" style="max-width: 26%; height: 35%; border-radius: 8px; margin-right: 20px;">
                            <p style="flex: 1;"><?php echo $description; ?></p>
                        <?php else : // Imagen a la derecha, texto a la izquierda ?>
                            <p style="flex: 1; text-align: right;"><?php echo $description; ?></p>
                            <img src="<?php echo $imageFolder . $imageName; ?>" alt="Imagen" style="max-width: 26%; height: 35%; border-radius: 8px; margin-left: 20px;">
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <!-- Video -->
                <br>
                <header class="align-center">
                    <p></p>
                    <h2>Video sobre cómo se llevó a cabo la instalación y configuración correcta de un servidor local para trabajar con PHP</h2>
                </header>

                <video width="640" height="360" controls>
                    <source src="ins.mp4" type="video/mp4">
                </video>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>

