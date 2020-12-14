<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de empleados</title>
</head>

<body>

    <?php
    include "lib/empresa.php";
    $bbdd = new Empresa();
    $listadoEmp = $bbdd->listaEmpleados();
    $listadoDpto = $bbdd->listaNumDptos();
    $listadoNumEmpleados = $bbdd->listaNumEmpleados();
    $listadoPuesto = $bbdd->listaNombrePuestos();
    $listadoJefes = $bbdd->listaJefes();
    ?>

    <h2>CRUD EMPLEADOS</h2>
    <form action="insertarEmp.php" method="post">
        <fieldset>
            <legend>Insertar un empleado</legend>
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"><br>

            <?php
            echo "<label for=\"puesto\">Puesto</label><br>";
            echo "<select name= \"puesto\">";
            if ($listadoPuesto != null) {
                foreach ($listadoPuesto as $list) {
                    $nombre = $list['puesto'];
                    echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>

            <?php
            echo "<label for=\"jefe\">Jefe</label><br>";
            echo "<select name= \"jefe\">";
            if ($listadoJefes != null) {
                foreach ($listadoJefes as $list) {
                    $num = $list['jefe'];
                    echo "<option value=\".$num.\">" . $num . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>

            <label for="fechaalta">Fecha de alta</label><br>
            <input type="text" name="fechaalta"><br>

            <label for="salario">Salario</label><br>
            <input type="text" name="salario"><br>

            <label for="comision">Comision</label><br>
            <input type="text" name="comision"><br>

            <?php
            echo "<label for=\"dpto\">Departamento</label><br>";
            echo "<select name= \"departamento\">";
            if ($listadoDpto != null) {
                foreach ($listadoDpto as $list) {
                    $num = $list['numero'];
                    echo "<option value=\".$num.\">" . $num . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>
            <input type="submit" value="INSERTAR EMPLEADO"><br><br>
            <p>NOTA: <i>El número de empleado será generado mediante autoincremento.</i></p>
        </fieldset>
    </form>
    <form action="actualizarEmp.php" method="post">
        <fieldset>
            <legend>Actualizar un empleado</legend>

            <?php
            echo "<label for=\"numeroEmp\">Nº de empleado</label><br>";
            echo "<select name= \"numeroEmpleado\">";
            if ($listadoNumEmpleados != null) {
                foreach ($listadoNumEmpleados as $list) {
                    $num = $list['numero'];
                    echo "<option value=\".$num.\">" . $num . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>

            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"><br>

            <?php
            echo "<label for=\"puesto\">Puesto</label><br>";
            echo "<select name= \"puesto\">";
            if ($listadoPuesto != null) {
                foreach ($listadoPuesto as $list) {
                    $nombre = $list['puesto'];
                    echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>

            <?php
            echo "<label for=\"jefe\">Jefe</label><br>";
            echo "<select name= \"jefe\">";
            if ($listadoJefes != null) {
                foreach ($listadoJefes as $list) {
                    $num = $list['jefe'];
                    echo "<option value=\".$num.\">" . $num . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>

            <label for="fechaalta">Fecha de alta</label><br>
            <input type="text" name="fechaalta"><br>

            <label for="salario">Salario</label><br>
            <input type="text" name="salario"><br>

            <label for="comision">Comision</label><br>
            <input type="text" name="comision"><br>

            <?php
            echo "<label for=\"dpto\">Departamento</label><br>";
            echo "<select name= \"departamento\">";
            if ($listadoDpto != null) {
                foreach ($listadoDpto as $list) {
                    $num = $list['numero'];
                    echo "<option value=\".$num.\">" . $num . "</option>";
                }
                echo "</select><br><br>";
            }
            ?>

            <input type="submit" value="ACTUALIZAR EMPLEADO"><br><br>
        </fieldset>
    </form>

    <!-- TABLA LISTADO EMPLEADOS -->
    <table>
        <tr>
            <th>Número de Empleado</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Jefe</th>
            <th>Fecha de Alta</th>
            <th>Salario</th>
            <th>Comisión</th>
            <th>Número de Dpto.</th>

        </tr>
        <?php
        include "lib/empresa.php";
        $bbdd = new Empresa();

        $listaEmpleados = $bbdd->listaEmpleados();

        if ($listaEmpleados != null) {
            foreach ($listaEmpleados as $lista) {
                echo "<tr>";
                echo "<td>" . $lista['numero'] . "</td>";
                echo "<td>" . $lista['nombre'] . "</td>";
                echo "<td>" . $lista['puesto'] . "</td>";
                echo "<td>" . $lista['jefe'] . "</td>";
                echo "<td>" . $lista['fechaalta'] . "</td>";
                echo "<td>" . $lista['salario'] . "</td>";
                echo "<td>" . $lista['comision'] . "</td>";
                echo "<td>" . $lista['dnumero'] . "</td>";
                echo "<td><a href='borrarDB.php?nombre=" . $lista['Nombre'] . "'>BORRAR</a></td>";
                echo "</tr>";
            }
        }
        ?>

    </table>
</body>

</html>