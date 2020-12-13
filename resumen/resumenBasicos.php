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

$array = array(
    'clave1' => array('clave' => 'valor'),
    'clave2' => array('clave' => 'valor'),
    'clave3' => array('clave' => 'valor'),
    'clave4' => array('clave' => 'valor')
);


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

foreach ($productos as $valor) {
    echo $valor['paper'] . "<br>";
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
$numeroDados = rand(2, 7);

# Se crea un dado que será un array el cual contrendrá tiradas
$dado = array();

for ($i = 1; $i <= $numeroDados; $i++) {
    $dado[$i] = rand(1, 6);
}

foreach ($dado as $tirada) {
    echo "$tirada\n";
}

///// Matriz 5*6 con números aleatorios e indicar cuáles son ceros, positivos y negativos /////

define('TAM_FILAS', 5);
define('TAM_COLUMNAS', 6);
$array5_6 = [];
$ceros = 0;
$negativos = 0;
$positivos = 0;

for ($i = 0; $i < TAM_FILAS; $i++) {
    for ($j = 0; $j < TAM_COLUMNAS; $j++) {
        #Se crea un número aleatorio para cada columna, por eso va dentro del bucle
        $numeroRand = rand(-5, 5);
        $array5_6[$i][$j] = $numeroRand;

        if ($array5_6[$i][$j] == 0) {
            $ceros++;
        } else if ($array5_6[$i][$j] > 0) {
            $positivos++;
        } else {
            $negativos++;
        }
    }
}

echo "<table>";
for ($i = 0; $i < TAM_FILAS; $i++) {
    echo "<tr>";
    for ($j = 0; $j < TAM_COLUMNAS; $j++) {
        echo "<td>";
        echo $array5_6[$i][$j];
        echo "<td>";
    }
    echo "<tr>";
}
echo "</table>";


///// Array bidimensional sumar sus valores /////
/* array 3*4 (asociativo)
array ( 
    'basico'  => array (
        'inglés' => 1
        'francés' => 14
        'alemán' => 8
        'ruso' => 3
    )
    'medio' => array (
        inglés' => 6
        'francés' => 19
        'alemán' => 7
        'ruso' => 2
    )
    'perfeccionamiento' => array (
    inglés' => 3
    'francés' => 13
    'alemán' => 4
    'ruso' => 1
    )    
) */

$academia = array(
    'basico'  => array(
        'inglés' => 1,
        'francés' => 14,
        'alemán' => 8,
        'ruso' => 3
    ),
    'medio' => array(
        'inglés' => 6,
        'francés' => 19,
        'alemán' => 7,
        'ruso' => 2
    ),
    'perfeccionamiento' => array(
        'inglés' => 3,
        'francés' => 13,
        'alemán' => 4,
        'ruso' => 1
    )
);

$academia[0][0] = 1;
$academia[0][1] = 14;
$academia[0][2] = 8;
$academia[0][3] = 3;

$academia[1][0] = 6;
$academia[1][1] = 19;
$academia[1][2] = 7;
$academia[1][3] = 2;

$academia[2][0] = 3;
$academia[2][1] = 13;
$academia[2][2] = 4;
$academia[2][3] = 1;

$basico = 0;

# Accedemos de esta manera a los niveles sumamos su contenido
for ($columna = 0; $columna < 4; $columna++) {
    $basico += $academia[0][$columna];
}
$medio = 0;
for ($columna = 0; $columna < 4; $columna++) {
    $medio += $academia[1][$columna];
}

$perfeccionamiento = 0;
for ($columna = 0; $columna < 4; $columna++) {
    $perfeccionamiento += $academia[2][$columna];
}

$ingles = 0;
for ($filas = 0; $filas < 3; $filas++) {
    # Accedemos al idioma que está en la posición 0,1,2,3 dependiendo de la fila en la que estemos
    $ingles += $academia[$filas][0];
}

$frances = 0;
for ($filas = 0; $filas < 3; $filas++) {
    $frances += $academia[$filas][1];
}

$aleman = 0;
for ($filas = 0; $filas < 3; $filas++) {
    $aleman += $academia[$filas][2];
}

$ruso = 0;
for ($filas = 0; $filas < 3; $filas++) {
    $ruso += $academia[$filas][3];
}
echo '<h2>Número de alumnos por nivel</h2>';
echo 'Básico: ' . $basico . '<br>';
echo 'Medio: ' . $medio . '<br>';
echo 'Perfeccionamiento: ' . $perfeccionamiento . '<br>';

echo '<h2>Número de alumnos por idioma</h2>';
echo 'Inglés: ' . $ingles . '<br>';
echo 'Francés: ' . $frances . '<br>';
echo 'Alemán: ' . $aleman . '<br>';
echo 'Ruso: ' . $ruso . '<br>';


///// Crear un array asociativo con la siguiente estructura: /////
/*
Juan => [ altura=>175, pelo=>rubio, ojos=>azules ]
María=> [ altura=>168, pelo=>castaña, ojos=>marrones ]
Pedro => [ altura=>180, pelo=>castaño, ojos=>verdes ]

Mostrar por pantalla:
- La altura de Juan
- Los ojos de María
- El pelo de Pedro
*/

$personas = array(
    'Juan' => array('altura' => 175, 'pelo' => 'rubio', 'ojos' => 'azules'),
    'María' => array('altura' => 168, 'pelo' => 'castaña', 'ojos' => 'marrones'),
    'Pedro' => array('altura' => 180, 'pelo' => 'castaño', 'ojos' => 'verdes')
);

echo 'La altura de Juan es ' . $personas['Juan']['altura'] . ' cm <br>';
echo 'Los ojos de María son ' . $personas['María']['ojos'] . '<br>';
echo 'El pelo de Pedro es ' . $personas['Pedro']['pelo'];


///// ARRAY BIDIMENSIONAL CON MULTIPLOS DE 3 /////

$miArray = [];

$numero = 3;

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 4; $j++) {
        # En cada posición de la segunda dimensión o columna se introduce un valor
        $miArray[$i][$j] = $numero;
        $numero += 3;
    }
}

# Mostrar contenido del array multidimensional
foreach ($miArray as $matriz) {
    foreach ($matriz as $listado) {
        echo $listado;
    }
}

///// /////
/* Crear un array de 6x6 con números enteros en PHP, de forma que muestre por
pantalla el array en forma de tabla HTML y el número de la fila cuya suma sea
mayor que las demás. */

/* ********************************
  array (     1   2   3   4   5   6
    1 array (num,num,num,num,num,num),
    2 array (num,num,num,num,num,num),
    3 array (num,num,num,num,num,num),
    4 array (num,num,num,num,num,num),
    5 array (num,num,num,num,num,num),
    6 array (num,num,num,num,num,num)
      );
  ***********************************/

# Variables para asignar más adelante
$fila_maximo = 0;
$valor_maximo = 0;

# Recorrido del array
for ($fila = 0; $fila < 6; $fila++) {
    $suma = 0;
    # Se asigna a las posiciones los números aleatorios
    for ($columna = 0; $columna < 6; $columna++) {
        $matriz[$fila][$columna] = rand(0, 9);
        # Se suman los números de cada fila
        $suma += $matriz[$fila][$columna];
    }
    # Condicional para ver qué fila es la que tiene mayor suma y para mostrar el valor máximo de la misma
    if ($suma > $valor_maximo) {
        $valor_maximo = $suma;
        $fila_maximo = $fila;
    }
}

echo "<table border='1'>";

for ($fila = 0; $fila < 6; $fila++) {
    echo '<tr>';
    for ($columna = 0; $columna < 6; $columna++) {
        echo '<td>' . $matriz[$fila][$columna] . '</td>';
    }
    echo '</tr>';
}
