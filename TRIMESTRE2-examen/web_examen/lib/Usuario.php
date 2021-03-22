<?php
include "db.php";

class Usuario extends db
{

  function __construct()
  {
    parent::__construct();
  }

  public function userRegistro($user, $seguridad)
  {
    //COMPLETAR ESTA FUNCIÓN

    if (isset($_POST["accion"])) {
      if ($_POST["accion"] == "registro") {
        if (
          isset($_POST['nombreUsuario']) && !is_null($_POST['nombreUsuario']) &&
          isset($_POST['nombreCompleto']) && !is_null($_POST['nombreCompleto']) &&
          isset($_POST['email']) && !is_null($_POST['email']) &&
          isset($_POST['contraseña']) && !is_null($_POST['contraseña']) &&
          isset($_POST['confirmarContraseña']) && !is_null($_POST['confirmarContraseña'])
        ) {
          $user = $_POST['nombreUsuario'];

          if (($_POST['contraseña']) == $_POST['confirmarContraseña']) {
            $usuarioReg = $this->insertarUsuario($_POST['nombreCompleto'], $_POST['nombreUsuario'], $_POST['email'], sha1($_POST['contraseña']));
            if ($usuarioReg != null) {
              echo "<h2>Registro completado del usuario " . $_POST['nombreUsuario'] . "</h2>";
              return $seguridad->addUsuario($_POST['nombreUsuario'], $_POST['contraseña']);
            } else {
              echo "<h2>Ha habido un error en el registro</h2>";
            }
          } else {
            echo "<h2>Las contraseñas del usuario no son iguales</h2>";
          }
        }
        return $user;
      }
    }
  }

  public function userLogin($user, $seguridad)
  {
    //COMPLETAR ESTA FUNCIÓN
    if (isset($_POST["accion"])) {
      if ($_POST["accion"] == "login") {
        if (
          isset($_POST['nombre']) && !is_null($_POST['nombre']) &&
          isset($_POST['contraseña']) && !is_null($_POST['contraseña'])
        ) {

          if ($_POST['contraseña'] == sha1($_POST['contraseña'])) {
            $usuarioLogin = $this->buscarUsuario();
            $user = $_POST['nombre'];
            if ($usuarioLogin != null) {
              return $seguridad->addUsuario($_POST['nombre'], sha1($_POST['contraseña']));
            } else {
              echo "<h2>El usuario no existe, se redirigirá a la página de registro.</h2>";
              header("Location:registro.php");
            }
            return $user;
          } else {
            echo "<h2>Las contraseñas no coinciden</h2>";


            // header("Location:index.php");
          }
        }
      }
    }
  }

  public function insertarUsuario($fullname, $username, $email, $password)
  {
    if ($this->buscarUsuario()) {
      echo "<h2>El usuario ya existe</h2>";
    } else {
      $date = date('Y-m-d H:i:s');
      $sql = "INSERT INTO usuario (id, fullname, username, email, password, created_at) VALUES (NULL, '" . $fullname . "', '" . $username . "', '" . $email . "', '" . sha1($password) . "', '" . $date . "')";
      $resultado = $this->realizarConsulta($sql);
      if ($resultado != false) {
        $sql = "SELECT * from usuario ORDER BY id DESC";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != false) {
          return $resultado->fetch_assoc();
        } else {
          return null;
        }
      } else {
        return null;
      }
    }
  }

  public function buscarUsuario()
  {
    switch ($_POST["accion"]) {
      case 'login':
        $sql = "SELECT * from usuario WHERE email='" . $_POST["nombre"] . "' or username='" . $_POST["nombre"] . "'";
        break;
      case 'registro':
        $sql = "SELECT * from usuario WHERE email='" . $_POST["email"] . "' or username='" . $_POST["nombreUsuario"] . "'";
        break;
    }

    $resultado = $this->realizarConsulta($sql);
    if ($resultado != false) {
      return $resultado->fetch_assoc();
    } else {
      return null;
    }
  }
}
