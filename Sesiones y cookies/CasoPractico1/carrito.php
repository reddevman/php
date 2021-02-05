<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Boligrafos</th>
                <th>Gomas</th>
                <th>Lápices</th>
                <th>Papeles</th>
            </tr>
        </thead>
        <tr>
            <?php
            echo "<td>";
            // BOLIGRAFOS            
            $boligrafos = 0;
            if (isset($_COOKIE['boligrafo'])) {
                $boligrafos = $_COOKIE['boligrafo'];
                echo $_COOKIE['boligrafo'] . " uds.";
            } else {
                echo "0 uds.";
            }
            echo "</td>";

            // GOMAS
            echo "<td>";
            $gomas = 0;
            if (isset($_COOKIE['goma'])) {
                $gomas = $_COOKIE['goma'];
                echo $_COOKIE['goma'] . " uds.";
            } else {
                echo "0 uds.";
            }
            echo "</td>";

            // LAPICES
            echo "<td>";
            $lapices = 0;
            if (isset($_COOKIE['lapiz'])) {
                $lapices = $_COOKIE['lapiz'];
                echo $_COOKIE['lapiz'] . " uds.";
            } else {
                echo "0 uds.";
            }
            echo "</td>";

            // PAPELES
            echo "<td>";
            $papeles = 0;
            if (isset($_COOKIE['papel'])) {
                $papeles = $_COOKIE['papel'];
                echo $_COOKIE['papel'] . " uds.";
            } else {
                echo "0 uds.";
            }
            echo "</td>";
            ?>
        </tr>
        <tr>
        <td colspan="3">TOTAL:</td>
        <td>
        <?php
        if (isset($boligrafos) || ($gomas) || ($lapices) || ($papeles)) {
            $suma = 0;
            $suma += $boligrafos + $gomas + $lapices + $papeles;
            echo $suma . " uds.";
        }
        ?>
        </td>
        </tr>
    </table>

    <a href="./index.php">INICIO</a>

</body>

</html>