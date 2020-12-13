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
