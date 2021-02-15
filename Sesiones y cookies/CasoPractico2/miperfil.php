<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
</head>

<body>
    <div>
        <h3>MI PERFIL</h3>
        <?php
        require_once 'lib/bbdd.php';
        require_once 'lib/seguridad.php';

        // Objetos necesarios para la consulta y la seguridad
        $bbdd = new BBDD();
        $seguridad = new Seguridad();

        // Limpieza de seguridad para lo introducido en el formulario
        $user = $seguridad->sanearString($_POST['usuario']);
        $pass = $seguridad->sanearString($_POST['pass']);
        echo "<form action='actualizar_perfil.php' method='post'>";

        // Comprobación rutinaria de campos de formularios
        if (
            isset($_POST['usuario']) && !is_null($_POST['usuario']) &&
            isset($_POST['pass']) && !is_null($_POST['pass'])) {

            // Codificación de la contraseña tal cual fue insertada en la bbdd con anterioridad
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            // Buscar el usuario mediante el objeto de la base de datos ya que es un método de la misma
            $existUser = $bbdd->buscarUsuario($user, $pass_hash);

            if ($existUser != null) {

                // Saludo mediante la obtención del nombre del usuario
                echo "Bienvenido usuario " . $existUser->getNombre();

                $seguridad->addUsuario($user);

                // En los campos va a mostrar los datos antiguos
                
                echo "<label for='email'>e-mail</label>";
                echo "<input type='text' name='email' value='".$existUser->getEmail()."' readonly>";
                echo "<label for='nombre'>Nombre</label>";
                echo "<input type='text' name='nombre' value='".$existUser->getNombre()."' required>";
                echo "<label for='apellidos'>Apellidos</label>";
                echo "<input type='text' name='apellidos' value='".$existUser->getApellidos()."' required>";
                echo "<input type='submit' value='ACTUALIZAR'>";
                
            } else {
                echo "El usuario no existe en la base de datos";
                echo "<a href='index.php'>Pulsar para volver a la pantalla de login</a>";
            }
        } else {
            header('Location:index.php');
        }
        echo "</form>";
        ?>

    </div>
</body>

</html>