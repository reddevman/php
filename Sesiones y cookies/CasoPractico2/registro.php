<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <div>
        <h3>REGISTRO</h3>
        <form action="seguridad.php" method="post">
            <label for="email">E-mail</label>
            <input type="text" name="email" required>

            <label for="pass1">Contraseña</label>
            <input type="password" name="pass1" required>
            <label for="pass2">Repetir contraseña</label>
            <input type="password" name="pass2" required>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required>

            <input type="hidden" name="accion" value="registro">
            <input type="submit" value="REGISTRARSE">
        </form>
    </div>
</body>

</html>