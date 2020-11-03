<?php
    $conMysql = new mysqli("localhost","root","","nba",3306);
    if ($conMysql->connect_errno){
        echo "Fallo en la conexión: " . $conMysql->connect_errno . " " . $conMysql->connect_error;
    } else echo "<b>Conexión realizada</b><hr>";

    # Método con WHILE en vez de FOR
    $resultado;
    # Variable datos que contiene la consulta
                          #conexión o link  #consulta SQL
    $datos = mysqli_query($conMysql,"SELECT Posicion,Nombre,Nombre_equipo FROM jugadores WHERE Posicion='C'");

    /**
     * Con While, mientras la condición de true (es decir, que saca datos)
     * sigue mostrando echos con los datos de la tabla.
     * Cuando no haya más datos sale del while y se acaba la información.
     */
    while ($resultado = mysqli_fetch_assoc($datos)) {
        $fila = $datos->fetch_assoc();
        echo $fila['Posicion'] . '</br>';
        echo $fila['Nombre'] . '</br>';
        echo $fila['Nombre_equipo'] . '</br><br>';
    }





?>