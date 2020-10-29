<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <title>Tirada de dados</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        #container {
            width: 70%;
            margin: 0 auto;
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        table tr td {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Tirada de dados reutilizable.</h1>
        <h3>Ejercicio realizado por Alejandro Márquez Aragonés. &copy;</h3>
        <table border = "1">
            <tr>
        <?php
        // require para poder usar la clase dado.php
        require 'dado.php';
        //Creamos una nueva instancia/objeto de la clase Dado con números aleatorios
        $dado1 = new Dado(rand(-20, 20),rand(-30, 30));

        // Creación de un array donde irán las tiradas
        $tirada = array();

        /* Con el for introduce en cada posición del array (12) lo que sale de la función
            tirarDado() */
        for ($i = 0; $i < 12; $i++) {
            $tirada[$i] = $dado1->tirarDado();
        }

        // Mostrar el resultado
        foreach ($tirada as $numeros) {
            echo '<td>' . $numeros . '</td>';
        }
        ?>
            </tr>
        </table>
    </div>
</body>
</html>