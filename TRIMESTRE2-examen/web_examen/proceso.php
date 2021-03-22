<?php
include "lib/Usuario.php";
include "lib/Seguridad.php";
$seguridad = new Seguridad();
$user = $_SESSION["usuario"];
if (isset($user)) {
	$arrayCarro = $user;
	if (isset($_COOKIE['carro'])) {

		/*******************************************************************
			// AQUÍ FALTA DESERIALIZAR LA COOKIE carro
		 *******************************************************************/
		$arrayCarro = unserialize($_COOKIE['carro']);

		if ($arrayCarro["usuario"] == $_SESSION["usuario"]["usuario"]) {
			$_SESSION["usuario"] = $arrayCarro;
		}
	}
	if (isset($_SESSION["usuario"])) {
		if (isset($_POST["peras"])) {
			if (is_numeric($_POST["peras"])) {
				if (!isset($_SESSION["usuario"]["peras"])) {
					$_SESSION["usuario"]["peras"] = $_POST["peras"];
				} else {
					$_SESSION["usuario"]["peras"] += $_POST["peras"];
				}
			}
		}
		if (isset($_POST["platanos"])) {
			if (is_numeric($_POST["platanos"])) {
				if (!isset($_SESSION["usuario"]["platanos"])) {
					$_SESSION["usuario"]["platanos"] = $_POST["platanos"];
				} else {
					$_SESSION["usuario"]["platanos"] += $_POST["platanos"];
				}
			}
		}
	}
?>
	<!DOCTYPE html>
	<html lang="es" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="css/master.css">
	</head>

	<body>
		<ul>
			<li><b>MYAPP</b></li>
			<li><a href="compras.php">COMPRAS</a></li>
			<li><a href="">CARRITO</a></li>
			<li><a href="cerrar.php">CERRAR SESIÓN</a></li>
		</ul>
		<div class="contenido">
		<?php
		$user = $_SESSION["usuario"]["usuario"];
		echo "<h1>Carrito de $user</h1>";
		echo "<fieldset>";
		echo "<h2>Elementos adquiridos</h2>";
		echo "<table><th>Elemento</th><th>Cantidad</th>";
		foreach ($_SESSION["usuario"] as $key => $valor) {
			if ($key != 'usuario') {
				echo "<tr><td>" . $key . "</td><td>" . $valor . "</td></tr>";
			}
		}
		echo "</table>";
		$arrayCarro = $_SESSION["usuario"];
		echo "<br>";

		/*******************************************************************
		//AQUÍ FALTA ESTABLECER LA COOKIE carro SERIALIZADA Y DURANTE 1 HORA
		 *******************************************************************/
		setcookie("carro",serialize($arrayCarro), time()*60);
	}
		?>
		<form action="pago.php" method="post">
			<input type="submit" value="Pagar">
		</form>
		<br>
		</fieldset>
		</div>
	</body>

	</html>