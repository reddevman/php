<?php
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

