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
        # Asignar a una variable un array de la consulta obtenida ya que query devuelve un resultado, ningún de string
        $resultadoTotalV1 = $resultadoV1->fetch_assoc();
            // SEMANA 2
        $resultadoV2 = $conMysql->query("SELECT ROUND(SUM(venta),2) as TotalVentas2 from ventas where num_semana='2'");
        $resultadoTotalV2 = $resultadoV2->fetch_assoc();

        // GASTOS
            // SEMANA 1
        $resultadoG1 = $conMysql->query("SELECT ROUND(SUM(gasto),2) as TotalGastos1 from gastos where num_semana='1'");
        $resultadoTotalG1 = $resultadoG1->fetch_assoc();
            // SEMANA 2
        $resultadoG2 = $conMysql->query("SELECT ROUND(SUM(gasto),2) as TotalGastos2 from gastos where num_semana='2'");
        $resultadoTotalG2 = $resultadoG2->fetch_assoc();


        echo "<h1>Los resultados de los totales de ventas por semana (1 y 2) son los siguientes:</h1>";
        echo "<h2>SEMANA 1</h2>";
        echo "<table><tr><th>VENTAS</th><th>GASTOS</th>";
        # Usamos como clave del array asociativo el alias que indicamos en el query de la consulta
        echo "<tr><td>" . $resultadoTotalV1['TotalVentas1'] . " euros</td><td>" . $resultadoTotalG1['TotalGastos1'] . " euros</td></tr></table>";

        echo "<h2>SEMANA 2</h2>";
        echo "<table><tr><th>VENTAS</th><th>GASTOS</th>";
        # Usamos como clave del array asociativo el alias que indicamos en el query de la consulta
        echo "<tr><td>" . $resultadoTotalV2['TotalVentas2'] . " euros</td><td>" . $resultadoTotalG2['TotalGastos2'] . " euros</td></tr></table>";
        
    ?>
    </main>
</body>
</html>