<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos Alumnos</title>
</head>
<body><!--
    INSERTAR ALUMNOS
    -->
    <form action="alumnoNuevo.php" method="post">
    <fieldset>
        <legend>Insertar un alumno</legend>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos"><br>
        <label for="edad">edad:</label><br>
        <input type="text" name="edad" value="18"><br><br>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <!-- 
    ACTUALIZAR ALUMNOS por ID
    <form action="alumnoNuevo.php" method="post">
        <label for="id">Introduce el id del alumno a modificar:</label><br>
        <input type="text" name="id"><br>
        <label for="nombreUp">Ahora el nombre por el que se quiere cambiar:</label><br>
        <input type="text" name="nombreUp"><br>
        <label for="apellidosUp">Apellidos:</label><br>
        <input type="text" name="apellidosUp"><br>
        <label for="edadUp">Edad:</label><br>
        <input type="text" name="edadUp"><br><br>
        <input type="submit" value="Enviar">
    </form>-->
</body>
</html>