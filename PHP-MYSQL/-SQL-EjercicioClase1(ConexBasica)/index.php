<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        table tr td {
            padding: 10px;
        }
    </style>
    <title>Consulta con MySQLi</title>
</head>

<body>
    <table border="1">
        <?php
            $conmysql = new mysqli("localhost", "root", "", "alumnos", 3306);
            if ($conmysql->connect_errno) {
                # Error en la base de datos si da true
                echo 'Fallo en la conexión: ' . $conmysql->connect_errno . ' ' . $conmysql->connect_error;
            } else {
                echo '<h3>Conexión realizada</h3><hr>';
            }
            echo $conmysql->host_info . '<br>';

            # CONSULTA
            $resultado = $conmysql->query("SELECT * FROM alumnos");

            echo 'El número de alumnos es: ' . $resultado->num_rows . '<br><br>';
            for ($i = 0; $i < $resultado->num_rows; $i++) {
                echo '<tr>';
                $fila = $resultado->fetch_assoc();
                echo "<td>Alumno " . $fila['id'] . "</td><td>" . $fila['nombre'] . "</td>";
                echo '</tr>';
            }
        ?>
    </table>
</body>

</html>