<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h2>LOGIN</h2>
        <form action="seguridad.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="usuario" placeholder="Tu usuario...">
        
        <label for="pass1">Contraseña</label>
        <input type="password" name="pass1" placeholder="Contraseña..."> 
        
        <input type="hidden" name="accion" value="login">

        <input type="submit" value="LOGIN">
        
        </form>
    </div>
</body>
</html>