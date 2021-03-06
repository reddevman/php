<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Base de Datos PHP Beneficios</title>
</head>
<body>
<header>
        <div id="wrap-title">
            <ul>
                <li>Caso Práctico 3</li>
                <li>Base de datos Beneficios</li>
            </ul>
        </div>
        <nav>
            <ul>
                <li><a href="ben_2.php">Beneficios semana 2</a></li>
                <li><a href="ben_1.php">Beneficios semana 1</a></li>
                <li><a href="total.php">Total de ventas</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <?php
        $conMysql = new mysqli("localhost", "root", "","beneficios",3306);
        
        if ($conMysql->connect_errno) {
            echo "Fallo en la conexión: " . $conMysql->connect_errno . " " . $conMysql->connect_error;
        }

        // VENTAS
            // SEMANA 1
        # Se crea la consulta con el método query
        $resultadoV1 = $conMysql->query("SELECT ROUND(SUM(venta),2) as TotalVentas1 from ventas where num_semana='1'");
        # Asignar a una variable un array de la consulta obtenida ya que query devuelve un resultado, ningún string
        $resultadoTotalV1 = $resultadoV1->fetch_assoc();

        // GASTOS
            // SEMANA 1
        $resultadoG1 = $conMysql->query("SELECT ROUND(SUM(gasto),2) as TotalGastos1 from gastos where num_semana='1'");
        $resultadoTotalG1 = $resultadoG1->fetch_assoc();

        # Como no hace falta recorrer el array, basta con indicarle la posición del mismo con la que queremos trabajar
        # Al ser un array asociativo se relaciona la CLAVE con la variable que corresponga en SQL
        $beneficios1 = $resultadoTotalV1['TotalVentas1'] - $resultadoTotalG1['TotalGastos1'];

        echo "<h1>Los beneficios de la SEMANA 1 son:</h1>";
        echo "<h2>" . $beneficios1 . " euros</h2>";

    ?>
    </main>
</body>
</html>