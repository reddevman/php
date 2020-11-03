<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ala Pivots NBA</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            width: 60%;
            margin: 0 auto;
            text-align: center;
        }
        table {
            text-align: center;
        }
        tr:nth-child(even) {
            background: #ccc;
        }
    </style>
</head>

<body>
    <table class="table table-striped">
        <tr>
            <th class="text-primary">Posición</th>
            <th class="text-danger">Nombre</th>
            <th class="text-info">Equipo</th>
        </tr>
        <?php
        $conMysql = new mysqli("localhost", "root", "", "nba", 3306);
        if ($conMysql->connect_errno) {
            echo "Fallo en la conexión: " . $conMysql->connect_errno . " " . $conMysql->connect_error;
        } else echo "<h1 class='text-success'>Conexión realizada</h1><hr>";
        echo "<h4>Los aleros de la tabla NBA son los siguientes:</h4>";

        $resultado = $conMysql->query("SELECT Posicion,Nombre,Nombre_equipo FROM jugadores WHERE Posicion='F' ORDER BY Nombre");

        for ($i = 0; $i < $resultado->num_rows; $i++) {
            $fila = $resultado->fetch_assoc();
            echo '<tr>';
            echo "<td>" . $fila['Posicion'] . '</td>';
            echo "<td>" . $fila['Nombre'] . '</td>';
            echo "<td>" . $fila['Nombre_equipo'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>