<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conMysql = new mysqli("localhost", "root", "","beneficios",3306);
        /**
         * SELECT ga.num_semana as semana_gastos_ventas,gasto,venta FROM
         * gastos as ga JOIN ventas as ve USING (num_semana)
         */
        if ($conMysql->connect_errno) {
            echo "Fallo en la conexión: " . $conMysql->connect_errno . " " . $conMysql->connect_error;
        }

        $resultado = $conMysql->query("SELECT ga.num_semana as semana_gastos_ventas,gasto,venta FROM
                                      gastos as ga JOIN ventas as ve USING (num_semana)");
        
    ?>
</body>
</html>