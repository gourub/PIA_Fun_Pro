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

    <!-- Header -->
    <header id="header">
        <div class="logo">
            <a href="index.php">VicTempest</a>
        </div>
        <a href="#menu">Menu</a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <?php
                // Array de páginas y nombres para el menú
                $pages = [
                    "index.php" => "Home",
                    "etapa1.php" => "Etapa 1",
                    "etapa2.php" => "Etapa 2",
                    "etapa3.php" => "Etapa 3",
                    "etapa4.php" => "Etapa 4"
                ];

                // Iterar sobre las páginas y generar enlaces
                foreach ($pages as $url => $title) {
                    echo "<li><a href=\"$url\">$title</a></li>";
                }
            ?>
        </ul>
    </nav>

    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Etapa 3</p>
                <h2>Formularios con PHP</h2>
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
                        <h2>Tabla de doble entrada de los métodos Get y Post para el uso de formularios con PHP con sus ventajas y desventajas</h2>
                    </header>
                    <img src="ima/e3_1.jpg" width="300" height="200" style="margin-right: 30px">
                    <img src="ima/e3_1.jpg" width="300" height="200" style="margin-right: 30px">
                    <img src="ima/e3_1.jpg" width="300" height="200" style="margin-right: 30px"><br><br>

                    <p>Ventajas y desventajas de Get y Post</p>

                    <?php
                        // Definir ventajas y desventajas de Get y Post como arrays asociativos
                        $ventajas = [
                            "GET" => [
                                "Visibilidad de datos = los parámetros enviados mediante GET son visibles en la URL, lo que puede facilitar la depuración y compartir enlaces.",
                                "Caché de resultados = los navegadores pueden cachear los resultados de las solicitudes GET, lo que puede mejorar el rendimiento.",
                                "Facilidad de implementación = es más fácil implementar y probar solicitudes GET, ya que pueden ser realizadas directamente desde la barra de direcciones del navegador o mediante formularios HTML simples.",
                                "Seguridad en lecturas = las solicitudes GET son importantes, lo que significa que repetir una solicitud GET no debería tener efectos secundarios."
                            ],
                            "POST" => [
                                "Envío de datos ocultos = los datos enviados mediante POST no son visibles en la URL y no quedan guardados en el historial del navegador ni en los registros del servidor.",
                                "Longitud de datos ilimitada = POST no tiene una limitación de longitud de datos como GET, por lo que es más adecuado para el envío de grandes cantidades de datos.",
                                "Seguridad mejorada = al ocultar los datos, POST puede proporcionar una capa adicional de seguridad para datos sensibles."
                            ]
                        ];

                        // Mostrar ventajas y desventajas de Get y Post
                        foreach ($ventajas as $metodo => $items) {
                            echo "<p>• Ventajas de $metodo</p>";
                            echo "<ul>";
                            foreach ($items as $item) {
                                echo "<li>$item</li>";
                            }
                            echo "</ul>";
                        }
                    ?>

                    <header class="align-center">
                        <p></p>
                        <h2>Selecciona tus Lenguajes de Programación Favoritos</h2>
                    </header>

                    <h2>Selecciona tus Lenguajes de Programación Favoritos</h2>

<?php
// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibió el nombre y al menos un lenguaje seleccionado
    if (isset($_POST["nombre"]) && isset($_POST["lenguajes"])) {
        $nombre = htmlspecialchars($_POST["nombre"]); // Obtener el nombre y sanitizarlo
        $lenguajes = $_POST["lenguajes"];

        // Mostrar la información capturada
        echo "<h3>Información:</h3>";
        echo "<p><strong>Nombre del Estudiante:</strong> $nombre</p>";
        echo "<p><strong>Lenguajes de Programación Favoritos:</strong></p>";
        echo "<ul>";
        foreach ($lenguajes as $lenguaje) {
            $lenguaje = htmlspecialchars($lenguaje); // Sanitizar cada lenguaje
            echo "<li>$lenguaje</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color: red;'>Por favor completa el formulario correctamente.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre del Estudiante:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label>Lenguajes de Programación:</label><br>
    <input type="checkbox" id="lenguaje1" name="lenguajes[]" value="JavaScript">
    <label for="lenguaje1">JavaScript</label><br>

    <input type="checkbox" id="lenguaje2" name="lenguajes[]" value="Python">
    <label for="lenguaje2">Python</label><br>

    <input type="checkbox" id="lenguaje3" name="lenguajes[]" value="Java">
    <label for="lenguaje3">Java</label><br>

    <input type="checkbox" id="lenguaje4" name="lenguajes[]" value="C++">
    <label for="lenguaje4">C++</label><br>

    <input type="checkbox" id="lenguaje5" name="lenguajes[]" value="HTML">
    <label for="lenguaje5">HTML</label><br>

    <input type="checkbox" id="lenguaje6" name="lenguajes[]" value="PHP">
    <label for="lenguaje6">PHP</label><br><br>

    <input type="submit" name="submit" value="Enviar">
</form>

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
