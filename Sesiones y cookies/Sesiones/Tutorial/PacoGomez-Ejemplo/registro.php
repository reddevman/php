<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>

<body>
    <div>
        <h2>Formulario de registro</h2>
        <form action="seguridad.php" method="post">
            <label for="fname">Nombre</label>
            <input type="text" name="nombre" placeholder="Introduce el nombre">

            <label for="lname">Apellidos</label>
            <input type="text" name="apellidos" placeholder="Introduce los apellidos">

            <label for="user">Usuario</label>
            <input type="text" name="usuario" placeholder="Introduce el usuario">

            <label for="pass1">Contraseña</label>
            <input type="password" name="pass1" placeholder="Contraseña">

            <label for="pass2">Repetir contraseña</label>
            <input type="password" name="pass2" placeholder="Contraseña">

            <input type="hidden" name="accion" value="registro">

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>