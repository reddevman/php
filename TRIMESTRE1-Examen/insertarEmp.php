<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar empleado</title>
</head>

<body>
    <?php
    include "lib/empresa.php";

    $nombre = $_POST['nombre'];
    $puesto = substr($_POST['puesto'],1, -1);
    $jefe = substr($_POST['jefe'],1, -1);
    $fechaAlta = $_POST['fechaalta'];
    $salario = $_POST['salario'];
    $comision = $_POST['comision'];
    $numDpto = substr($_POST['departamento'],1, -1);

    if (
        isset($nombre, $puesto, $jefe, $fechaAlta, $salario, $comision, $numDpto) &&
        !empty($nombre) && !empty($puesto) && !empty($jefe) && !empty($fechaAlta) &&
        !empty($salario) && !empty($comision) && !empty($numDpto)
    ) {
        $bbdd = new Empresa();
        $bbdd->insertarEmpleado($nombre, $puesto, $jefe, $fechaAlta, $salario, $comision, $numDpto);
    } else {
        echo "No se puede hacer la inserción de los datos del empleado";
    }
    ?>

    <h3>El último registro insertado es:</h3>

    <?php
        echo "<b>Nombre: </b>" . $nombre . "<br>";
        echo "<b>Puesto: </b>" . $puesto . "<br>";
        echo "<b>Jefe: </b>" . $jefe . "<br>";
        echo "<b>Fecha de Alta: </b>" . $fechaAlta . "<br>";
        echo "<b>Salario: </b>" . $salario . "<br>";
        echo "<b>Comisión: </b>" . $comision . "<br>";
        echo "<b>Número de Departamento: </b>" . $numDpto . "<br>";
    ?>
</body>

</html>