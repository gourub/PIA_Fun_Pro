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
            <p>Etapa 2</p>
            <h2>Aplicacion de lenguaje PHP</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center"><p></p>
                    <h2>Presentacion acerca de variables, operadores, estructuras condicionales y bucles PHP</h2>
                </header>

                <!-- Image Gallery -->
                <?php
$imageNames = ['e2_1.jpg', 'e2_2.jpg', 'e2_3.jpg', 'e2_4.jpg', 'e2_5.jpg', 'e2_6.jpg', 'e2_7.jpg', 'e2_8.jpg', 'e2_9.jpg', 'e2_10.jpg'];

$imageCount = count($imageNames);

for ($i = 0; $i < $imageCount; $i++) {
    // Imprimir la imagen
    echo '<img src="ima/' . $imageNames[$i] . '" width="300" height="200" style="margin-right: 30px">';
    
    // Verificar si estamos en la tercera imagen de cada grupo de tres
    if (($i + 1) % 3 == 0 && $i + 1 < $imageCount) {
        // Agregar un salto de línea después de cada grupo de tres imágenes, excepto la última
        echo '<br><br>';
    }
}
?>



<br><br>
                <header class="align-center"><p></p>
                <h2>Uso de estructura condicionales if, switch y bucles while y for en lenguaje de PHP</h2>
							</header>
							<p>Estructuras condicionales</p>
							<p>• Estructura condicional IF = las estructuras if,else y  elseif  permiten condicionar la 
								ejecución de un bloque de sentencias a cumplimiento  de una condición, la expresión se evalúa siempre 
								si el resultado es TRUE  se ejecuta el bloque de sentencias y si el resultado es FALSE  no se ejecuta 
								el bloque de sentencias .
								<br><br>Ejemplos :
							<br><br>if(expresion_1){
								<br> bloque_de_sentencias_1
								<br>}elseif(expresion_2){
								<br> bloque_de_sentencias_2
								<br>}elseif(expresion_3){
								<br> bloque_de_sentencias_3
								<br>…..
								<br>elseif(expresion_n){
								<br> bloque_de_sentencias_n
								<br>}elseif {
								<br> bloque_de_sentencias_n+1
								<br>}
								</p>
                            <p>• Estructura condicional Switch = es equivalente a una construcción if… elseif… en las que las expresiones son comparaciones de igualdad de la misma expresión con valores distintos.
								<br><br>Ejemplos :
								<br><br>switch(expresion_1)
								<br>{
								<br>   case valor_1:
								<br>       bloque_de_sentencias_1;
								<br>break;
								<br>   case valor_2:
								<br>       bloque_de_sentencias_2;
								<br>break;
								<br>….
								<br>   case valor_n:
								<br>       bloque_de_sentencias_n;
								<br>break;
								<br>}
								</p>
							<p>Bucles</p>
							<p>• Ciclo While = la expresión se evalúa al principio de cada interacción si el resultado es TRUE  se ejecuta el bloque de sentencias,  si el resultado es FALSE el bucle se termina .
								<br><br>Sintaxis :
								<br><br>while (expresión)
								<br>{
								<br>   bloque_de_sentencias
								<br>}
								</p>
							<p>• Ciclo Do While = La expresión se evalúa al final de cada interacción si el resultado es TRUE se ejecuta el bloque de sentencias y el resultado es FALSE el bucle se termina.
								<br><br> Sintaxis :
								<br><br> do{
								<br>   bloque_de_sentencias
								<br>}while (expresión)
								</p>
							<p>• Ciclo For = La expresión inicial se evalúa siempre la expresión final se evalúa al principio de cada interacción si el resultado es TRUE se ejecuta el bloque de sentencias y la expresión de paso y se evalúa Realmente la expresión final si el resultado es FALSE el bucle se termina.
								<br><br>Sintaxis :
								<br><br> for(expresion_inicial; expresión_final; expresion_paso)
								<br>{
								<br>   bloque_de_sentencias
								<br>}
								</p>
							<p>• Ciclo For Each = el ciclo ejecuta el bloque de sentencias tantas veces como elementos que tenga la matrix $matrix y, en cada interacción, la variable $valor toma uno de los valores de la matrix .
								<br><br>Sintaxis :
								<br><br>Foreach($matriz as $valor)
								<br>{
								<br>   bloque_de_sentencias
								<br>}
								</p>
								<br><br>


                <!-- Random Number Generation -->
                <header class="align-center"><p></p>
								<h2>Imprime 10 numeros al aazar en un rango del 10 al 50,, muestra la suma de ellos y la
									 media de dicha muestra</h2>
							</header>


                            <h1>Generador de Números Aleatorios</h1>

<?php
// Función para generar números aleatorios y calcular la suma y el promedio
function generarNumerosAleatorios() {
    $numeros = [];
    $suma = 0;
    $cantidad = 10;
    $min = 10;
    $max = 50;

    // Generar 10 números aleatorios en el rango de 10 a 50
    for ($i = 0; $i < $cantidad; $i++) {
        $numero = rand($min, $max);
        $numeros[] = $numero;
        $suma += $numero;
    }

    // Calcular el promedio
    $promedio = $suma / $cantidad;

    return [
        'numeros' => $numeros,
        'suma' => $suma,
        'promedio' => $promedio
    ];
}

// Inicializar los números si aún no están establecidos en la sesión
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = generarNumerosAleatorios();
}

// Manejar el botón de reinicio
if (isset($_POST['reset'])) {
    $_SESSION['numeros'] = generarNumerosAleatorios();
}

// Obtener los números y resultados de la sesión
$numeros = $_SESSION['numeros'];
?>

<p><strong>Números generados:</strong> <?php echo implode(', ', $numeros['numeros']); ?></p>
<p><strong>Suma de los números:</strong> <?php echo $numeros['suma']; ?></p>
<p><strong>Promedio de la suma:</strong> <?php echo number_format($numeros['promedio'], 2); ?></p>

<form method="post">
    <button type="submit" name="reset">Reiniciar Números</button>
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
