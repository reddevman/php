<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>

<body>
    <div>
        <h3>FORMULARIO LOGIN</h3>
        <form action="miperfil.php" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="pass">
            <input type="submit" value="ENTRAR">
        </form>
        <a href="registro.php">Registrarse</a>
    </div>
</body>

</html>