<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro Completado</title>
</head>

<body>
    <?php
    require_once "lib/bbdd.php";
    require_once "lib/seguridad.php";

    // Creación del objeto de la base de datos para poder hacer la consulta
    $bbdd = new BBDD();
    $seguridad = new Seguridad();

    // Limpieza de seguridad para lo introducido en el formulario
    $email = $seguridad->sanearString($_POST['email']);
    $pass1 = $seguridad->sanearString($_POST['pass1']);
    $pass2 = $seguridad->sanearString($_POST['pass2']);
    $nombre = $seguridad->sanearString($_POST['nombre']);
    $apellidos = $seguridad->sanearString($_POST['apellidos']);

    // Comprobación de los datos insertados por el usuario
    if (
        isset($_POST['email']) && !is_null($_POST['email']) &&
        isset($_POST['pass1']) && !is_null($_POST['pass1']) &&
        isset($_POST['pass2']) && !is_null($_POST['pass2']) &&
        isset($_POST['nombre']) && !is_null($_POST['nombre']) &&
        isset($_POST['apellidos']) && !is_null($_POST['apellidos'])
    ) {

        // Comprobar que las dos contraseñas sean idénticas
        if ($_POST['pass1'] == $_POST['pass2']) {

            // Codificamos la contraseña
            // $pass1 = $seguridad->hashPass($pass1);
            echo "<div>";

            // Comprobar si existe el usuario, si da TRUE y lo encuentra, error
            if ($bbdd->buscarUsuario($email, null)) {
                $seguridad->setError("<h3>Error, ya existe el usuario</h3>");
                header("Location:registro.php");
            } else {

                // Se inserta un nuevo en la base de datos
                $newUser = $bbdd->insertarUsuario($email, $pass1, $nombre, $apellidos);

                // Mensaje de registro correcto
                if ($newUser != null) {
                    echo "<h3>Usuario Registrado.</h3>";
                    echo "<a href='index.php'>Pulsar para volver al LOGIN</a>";
                }
            }
        } else {
            $seguridad->setError("La contraseña no coincide");
            header('Location:registro.php');
        }
            echo "</div>";
    }
    ?>
    <footer>&copy; ALEJANDRO MÁRQUEZ ARAGONÉS</footer>
</body>

</html>