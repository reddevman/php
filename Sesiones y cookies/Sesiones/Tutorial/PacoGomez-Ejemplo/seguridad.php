<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    require_once 'lib/usuario.php';
    require_once 'lib/Seguridad.php';
    $user = new Usuario();
    $seguridad = new Seguridad();
    // Control de acciones a realizar
    if (isset($_POST['accion'])) {

        // Registro de usuario
        if ($_POST['accion'] == 'registro') {
            if ($_POST['pass1'] == $_POST['pass2']) {
                $usuarioReg = $user->insertarUsuario($_POST['usuario'], $_POST['nombre'], $_POST['apellidos'], $_POST['pass1']);

                if ($usuarioReg != null) {
                    echo "<h2>Usuario registrado correctamente</h2><br>";
                    echo "<label for='nombre'>Nombre</label>";
                    echo "<input type='text' value=" . $usuarioReg['nombre'] . " readonly>";
                    echo "<label for='apellidos'>Apellidos</label>";
                    echo "<input type='text' value=" . $usuarioReg['apellidos'] . " readonly>";
                    echo "<label for='usuario'>Usuario</label>";
                    echo "<input type='text' value=" . $usuarioReg['usuario'] . " readonly>";
                    echo "<a href='login.php'>Ir al LOGIN</a>";
                } else {
                    echo "<h2>El usuario no ha sido insertado</h2>";
                    echo "<a href='registro.php'>Volver al formulario de registro</a>";
                }
            }
            // Login de usuario
        } elseif ($_POST['accion'] == 'login') {
            $usuarioReg = $user->buscarUsuario($_POST['usuario']);
            if ($usuarioReg!=null) {

                // Compara el password de la base de datos con el encriptado del POST del formulario
                if (password_verify($_POST['pass1'], $usuarioReg['pass'])) {
                    // echo "<h2>Usuario encontrado</h2>";
                    $seguridad->setUsuario($usuarioReg['usuario']);
                    header('Location: protegida.php');
                } else {
                    echo "<h2>Las contraseñas no coinciden</h2>";                    
                    echo "<a href='login.php'>Volver al formulario de Login</a>";
                }
            } else {
                echo "<h2>Usuario no encontrado</h2>";
            }
        } elseif ($_POST['accion'] == 'destroy') {
            $seguridad->logOut();
            echo "<h2>Sesión cerrada</h2>";
            echo "<a href='login.php'>Pulsa para volver a la página de LOGIN</a>";
        }
    }
    ?>
</body>

</html>