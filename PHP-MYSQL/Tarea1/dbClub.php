<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Equipo de Baloncesto SQL</title>
    <style>
        body {font-family: 'Open Sans', sans-serif;}
        table {text-align: center;}
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Posición</th>
            <th>Número</th>
            <th>Edad</th>
        </tr>
    <?php
        $conMysql = new mysqli("localhost","root","","clubbasket",3306);
        if ($conMysql->connect_errno) {
            # Si es true da error en la base de datos y muestra mensaje
            echo 'Fallo en la conexión: ' . $conMysql->connect_errno . ' ' . $conMysql->connect_error;
        } else echo '<b>Conexión realizada</b><hr>';

        # Muestra la información del servidor
        echo 'Tipo de conexión:<br><i>' . $conMysql->host_info . '</i><br>';

        # CONSULTA A LA BASE DE DATOS
        # Mostramos todos los registros de la tabla "jugadores"
        $resultado = $conMysql->query("SELECT * FROM jugadores");

        # Mostrar cuántos filas (registros) hay en la tabla
        echo 'Hay ' . $resultado->num_rows . ' jugadores en el registro<br><br>';

        # Se puede hacer con WHILE: while($resultado=mysqli_fetch_assoc($datos))...
        # $datos=mysqli_query($conexion,"SELECT * FROM jugador");
        for ($i=0; $i < $resultado->num_rows; $i++) {

            # Obtenemos un array asociativo a partir de lo obtenido de la tabla
            $fila = $resultado->fetch_assoc();
            /**
             * Se asocia a cada clave del array asociativo creado, el nombre de un campo
             * de la tabla con la que se está trabajando. Su valor será el registro.
             */
            echo '<tr>';
            echo "<td>" . $fila['nombreJugador'] . '</td>';
            echo "<td>" . $fila['posicion'] . '</td>';
            echo "<td>" . $fila['numero'] . '</td>';
            echo "<td>" . $fila['edad'] . '</td>';
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>


