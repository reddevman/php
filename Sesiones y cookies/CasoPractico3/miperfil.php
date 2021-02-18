<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Mi Perfil</title>
</head>

<body>
    <div>
        <h3>MI PERFIL</h3>
        <?php
        require_once 'lib/bbdd.php';
        require_once 'lib/seguridad.php';

        // Objetos necesarios para la consulta y la seguridad/sesión
        $bbdd = new BBDD();
        $seguridad = new Seguridad();
        $rol = $bbdd->recogerRoles();

        // Limpieza de seguridad para lo introducido en el formulario
        $user = $seguridad->sanearString($_POST['usuario']);
        $pass = $seguridad->sanearString($_POST['pass']);

        // Inicio del formulario
        echo "<form action='actualizar_perfil.php' method='post'>";

        // Comprobación rutinaria de campos de formularios
        if (
            isset($_POST['usuario']) && !is_null($_POST['usuario']) &&
            isset($_POST['pass']) && !is_null($_POST['pass'])
        ) {

            // Buscar el usuario mediante el objeto de la base de datos ya que es un método de la misma
            $existUser = $bbdd->buscarUsuario($_POST['usuario'], $pass);

            // Si la variable, es decir la búsqueda sql, no es false, se da la bienvenida
            if ($existUser != null) {

                // Saludo mediante la obtención del nombre del usuario
                echo "Bienvenido usuario " . $_POST['usuario'];

                // Se añade la variable user a la sesión en $_SESSION['nombre'];
                $seguridad->addUsuario($user);

                // En los campos va a mostrar los datos antiguos
                echo "<label for='email'>e-mail</label>";
                echo "<input type='text' name='email' value='" . $existUser->getEmail() . "' readonly>";
                echo "<label for='nombre'>Nombre</label>";
                echo "<input type='text' name='nombre' value='" . $existUser->getNombre() . "' required>";
                echo "<label for='apellidos'>Apellidos</label>";
                echo "<input type='text' name='apellidos' value='" . $existUser->getApellidos() . "' required>";
                echo "<label for=\"rol\">ROL</label><br>";
                echo "<select name=\"rol\">";
                if ($rol != null ){
                    foreach ($rol as $userRol) {
                        echo "<option value=" . $userRol['tipo']. ">" . $userRol['tipo'] . "</option>";
                    }
                    echo "</select><br>";
                }
                echo "<input type='submit' value='ACTUALIZAR'>";
                echo "</form>";
            } else {
                echo "El usuario no existe en la base de datos";
                echo "<a href='index.php'>Pulsar para volver a la pantalla de login</a>";
            }
        } else {
            header('Location:index.php');
        }
        ?>

    </div>
</body>

</html>