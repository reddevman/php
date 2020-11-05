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
            // SEMANA 2
        $resultadoV2 = $conMysql->query("SELECT ROUND(SUM(venta),2) as TotalVentas2 from ventas where num_semana='2'");
        $resultadoTotalV2 = $resultadoV2->fetch_assoc();

        // GASTOS
            // SEMANA 2
        $resultadoG2 = $conMysql->query("SELECT ROUND(SUM(gasto),2) as TotalGastos2 from gastos where num_semana='2'");
        $resultadoTotalG2 = $resultadoG2->fetch_assoc();

        $beneficios2 = $resultadoTotalV2['TotalVentas2'] - $resultadoTotalG2['TotalGastos2'];

        echo "<h1>Los beneficios de la SEMANA 1 son:</h1>";
        echo "<h2>" . $beneficios2 . " euros</h2>";

    ?>
    </main>
</body>
</html>