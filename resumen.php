<?php

// **************** //
// SINTAXIS BÁSICA  //
// **************** //

# Definir constante
define('CONSTANTE', 15);

# Bucle for (tiene un fin definido, en este caso hasta que tenga el valor de la constante)
for ($i = 0; $i < 'NOMBRE'; $i++) {
}

# Select en PHP
echo "<select name='numeros' id='numeros'>";
for ($i = 0; $i < CONSTANTE; $i++) {
    echo "<option value=$i> $i </option><br>";
}
echo "</select>";

# Tabla de multiplicar con bucle FOR
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>";
        echo $i . "*" . $j . "=" . $i * $j;
        echo "<td>";
    }
    echo "<tr>";
}
echo "</table>";

# Tabla de multiplicar con bucle WHILE
$i = 1;
$j = 1;

while ($i <= 10) {
    echo "<table>";
    while ($j <= 10) {
        echo $i . "*" . $j . "=" . $i * $j;
        $j++;
    }
    // Se reinicia la variable j para que vuelva a valer 1
    $j = 1;
    $i++;
}


// **************** //
//      ARRAYS      //
// **************** //

# Declararlos
$miArray = [];
$miArray2 = array();

$semana = array('Lunes', 'Martes', 'Miércoles');
$dias = [1, 2, 3];

# Ver valores
echo $semana[1];

# RECORRERLOS
# FOR NORMAL (uso de count para la longitud)
for ($i = 0; $i < count($semana); $i++) {
    echo $semana[$i];
}

# FOREACH ,mejorado, (uso de count para la longitud)
foreach ($dias as $dia) {
    echo $dia;
}

# Ordenar arrays
// De menor a mayor
sort($semana);

// De mayor a menor
rsort($dias);

# Array en un rango de valores
$numeros = range(2, 10);

# Mezcla los números
shuffle($numeros);

# Números aleatorios entre 1 y 100
$numeros1 = rand(1, 100);

# Mezclar arrays
$mezcla = array_merge($semana, $dias);

// **************************** //
//      ARRAYS ASOCIATIVOS      //
// **************************** //

$usuario = array('nombre' => 'alex', 'edad' => 38);
# echo $asociativo[clave] y muestra el valor de dicha clave
echo "Nombre: " . $usuario['nombre'];

// **************************** //
//     ARRAYS BIDIMENSIONAL     //
// **************************** //

$arrayBidi[0]['Nombre'] = 'Juan';
$longitud = count($arrayBidi);

# FOR NORMAL
for ($i = 0; $i < $longitud; $i++) {
    // Medimos la longitud de la primera dimensión del Array
    $longitud2 = count($arrayBidi[$i]);

    for ($j = 0; $j < $longitud2; $j++) {
        // Recorremos la segunda dimensión con la longitud ya definida
        echo $arrayBidi[$i]['Nombre'];
    }
}

# FOREACH
foreach ($arrayBidi as $bidi) {
    foreach ($bidi as $bidi1) {
        echo $bidi1;
    }
}

# Recorrer ARRAY BIDIMENSIONAL ASOCIATIVO
$productos = array(

    'paper' => array(

        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser'  => "Laser Printer",
        'photo'  => "Photographic Paper"
    ),

    'pens' => array(

        'ball'   => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"
    ),

    'misc' => array(

        'tape'   => "Sticky Tape",
        'glue'   => "Adhesives",
        'clips'  => "Paperclips"
    )
);

foreach ($productos as $seccion => $tipo) {
    foreach ($tipo as $clave => $valor) {
        echo "La sección de \t$seccion contiene \t$clave con \t$valor.<br>";
    }
}


// **************************** //
//        EJEMPLOS ARRAYS       //
// **************************** //

///// Introducir valores en un array mediante bucles /////
$arrayNumeros = [];

$numero = 0;

# CON BUCLE FOR, introducir los 10 PRIMEROS números pares (busca del 1 al 20 para sacar 10 pares)
for ($i = 0; $i < 20; $i++) {
    if ($numero % 2 == 0) {
        $arrayNumeros[$i] = $numero;
    }
    $numero++;
}

foreach ($arrayNumeros as $pares) {
    echo $pares . "<br>";
}

# CON BUCLE WHILE, introducir pares del 1 al 10 en el array
# El índice indica que deben ser 10 números los almacenados en el array
$indice = 0;
while ($indice < 10) {
    if ($numero % 2 == 0) {
        $arrayNumeros[$indice] = $numero;
        $indice++;
    }
    $numero++;
}


///// Dado tirada aleatoria /////
$aleatorio = rand(1, 6);

switch ($aleatorio) {
    case 1:
        echo "La tirada es UNO";
        break;
    case 2:
        echo "La tirada es DOS";
        break;
    case 3:
        echo "La tirada es TRES";
        break;
    case 4:
        echo "La tirada es CUATRO";
        break;
    case 5:
        echo "La tirada es CINCO";
        break;
    case 6:
        echo "La tirada es SEIS";
        break;
}
# Con array asociativo SIN usar switch:
$dado = [1 => 'Uno', 2 => 'Dos', 3 => 'Tres', 4 => 'Cuatro', 5 => 'Cinco', 6 => 'Seis'];
echo "Se ha obtenido un " . $dado[$aleatorio] . " en la tirada";


///// Dado tirada aleatoria 2 /////
/*Escriba un programa que muestre una tirada de un número de dados al azar
entre 2 y 7 (dados) e indique los valores.*/

#Se crean de forma aleatoria un número de dados
$numeroDados = rand(2,7);

# Se crea un dado que será un array el cual contrendrá tiradas
$dado = array();

for ($i=1; $i <= $numeroDados; $i++) { 
    $dado[$i] = rand(1,6);
}

foreach ($dado as $tirada) {
    echo "$tirada\n";
}

