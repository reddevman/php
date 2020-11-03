<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Países del Mundo</title>
    <style>
        body {font-family: 'Open Sans', sans-serif;}
        table {text-align: center;}
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nº</th>
            <th>Nombre</th>
            <th>Continente</th>
        </tr>
        <?php
        $conMysql = new mysqli("localhost", "root", "", "paises", 3306);
        if ($conMysql->connect_errno) {
            echo 'Fallo en la conexión: ' . $conMysql->connect_errno . ' ' . $conMysql->connect_errno;
        } else echo '<b>Conexión realizada</b><hr>';

        echo 'Tipo de conexión:<br><i>' . $conMysql->host_info . '</i><br><br>';

        $resultado = $conMysql->query("SELECT * FROM pais");

        # Se puede hacer con WHILE: while($resultado=mysqli_fetch_assoc($datos))...
        # $datos=mysqli_query($conexion,"SELECT * FROM jugador");
        for ($i = 0; $i < $resultado->num_rows; $i++) {
            $fila = $resultado->fetch_assoc();
            echo '<tr>';
            echo "<td>" . $fila['id'] . '</td>';
            echo "<td>" . $fila['nombre'] . '</td>';
            echo "<td>" . $fila['continente'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>