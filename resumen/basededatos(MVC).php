<?php
# Con MVC los archivos principales de conexión y consultas van en la carpeta /lib

/** PASOS PARA LA CREACIÓN DE LA CLASE PRINCIPAL QUE CONTIENE LA CONEXIÓN
 * - Variables que contendrán los datos requeridos para la conexión a la base de datos
 * - Variables de error para recoger futuros fallos
 * - Constructor que contendrá una instancia del objeto mysqli el cual lleva de parámetro
 *   las propiedades previamente definidas con su valor
 * - Funciones de recogidas de errores
 * - IMPORTANTE función que se encarga de las consultas que se irán haciendo en todos los métodos,
 *   hace uso del método query cuyo parámetro tendrá la consulta que creemos
 */

# Las sentencias básicas para la conexión son:

class db
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "nba";

    private $conexion;

    private $error = false;
    private $error_msj = "";

    function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if ($this->conexion->connect_errno) {
            $this->error =  true;
        }
    }

    function hayError()
    {
        return $this->error;
    }

    function msjError()
    {
        return $this->error_msj;
    }

    function realizarConsulta($consulta)
    {
        if (!$this->hayError()) {
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        } else {
            $this->error_msj = "No se ha podido hacer la consulta" . $consulta;
            return null;
        }
    }
}

?>

<!--------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------->


<?php
# El archivo de las consultas hereda del principal "db" y debe tener su include

/** PASOS CREACIÓN ARCHIVO DE CONSULTAS
 * - Herencia del constructor padre
 * - Funciones con las consultas:
 *      - Creación de la sentencia sql en una variable
 *      - Variable resultado que almacenará la consulta mediante el método padre realizarConsulta
 *      - Variable array que contendrá los campos de la consulta
 *      - Bucle while para recorrer la consulta mediante un array asociativo
 *      - Se le asigna a cada posición del array creado antes (y mientras haya datos) cada campo y su correspondiente
 *      registro para luego devolverlo con return una vez finalizada la función
 */

include "lib/db.php";
class Nba extends db
{
    # Herencia del constructor padre
    function __construct()
    {
        parent::__construct();
    }

    # FUNCIÓN INSERTAR
    function insertarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        # Creación de sentencia sql en una variables
        $sql = "INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division) VALUES
                ('" . $nombre . "','" . $ciudad . "','" . $conferencia . "','" . $division . "')";

        # Se realiza la sentencia sql en la base de datos (inserción en este caso)
        $this->conexion->query($sql);
    }


    # FUNCIÓN ACTUALIZAR
    function actualizarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $sql = "UPDATE equipos SET Ciudad = '" . $ciudad . "', Conferencia = '" . $conferencia . "', Division = '" . $division . "' 
                    WHERE Nombre = '" . $nombre . "'";
        $this->conexion->query($sql);
    }

    # FUNCION BORRAR
    function borrarEquipo($nombre)
    {
        if ($this->hayError() == false) {

            $sql = "DELETE FROM equipos WHERE Nombre = '" . $nombre . "'";
            if (!$this->conexion->query($sql)) {
                echo "Falló el borrado del equipo: (" . $this->conexion->connect_errno . ")" . $this->conexion->error;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    # FUNCION MOSTRAR EQUIPO INSERTADO
    # Devuelve un array
    function mostrarEquipo($nombre)
    {
        $sql = "SELECT * FROM equipos WHERE Nombre = '" . $nombre . "'";
        $resultado = $this->realizarConsulta($sql);
        $arrayEquipo = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayEquipo[] = $fila;
            }
            return $arrayEquipo;
        } else {
            return null;
        }
    }

    # Función que devuelve un array con las conferencias para el -option- en HTML
    function listaConferencias()
    {
        $sql = "SELECT DISTINCT Conferencia FROM equipos ORDER BY Conferencia";
        $resultado = $this->realizarConsulta($sql);
        $arrayConferencias = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayConferencias[] = $fila;
            }
            return $arrayConferencias;
        } else {
            return null;
        }
    }
    # Función que devuelve un array con las divisiones para el option en HTML
    function listaDivisiones()
    {
        $sql = "SELECT DISTINCT Division FROM equipos ORDER BY Division";
        $resultado = $this->realizarConsulta($sql);
        $arrayDivision = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayDivision[] = $fila;
            }
            return $arrayDivision;
        } else {
            return null;
        }
    }

    function listaEquipos()
    {
        $sql = "SELECT * FROM equipos ORDER BY Nombre";
        $resultado = $this->realizarConsulta($sql);
        $arrayDivision = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayDivision[] = $fila;
            }
            return $arrayDivision;
        } else {
            return null;
        }
    }
}
?>

<!--------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------->


<?php
/* PASOS CREACIÓN DE FILTRADO

- Creación de instancias del objeto principal que contiene las consultas
- Recogia de datos mediante $_POST y substring para recoger el campo adecuadamente
- Variable que recogerá el método que contendrá la sentencia sql con los resultados
- Comprobación mediante isset y empty
- Creación de la tabla dentro de un if que comprueba si los datos son null
- Bucle foreach para recorrer el array asociativo y mostrar cada campo en la tabla y sus celdas
*/

# Ejemplo de formulario completo (con select): 
?>

<?php
include "lib/equipo.php";
$bbdd = new Equipo();
$conferencia = $bbdd->listaConferencias();
$division = $bbdd->listaDivisiones();
?>

<form action="insertarDB.php" method="post">
    <fieldset>
        <legend>Añadir un equipo</legend>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>
        <label for="ciudad">Ciudad</label><br>
        <input type="text" name="ciudad"><br><br>

        <?php
        echo "<label for=\"confe\">Conferencias</label><br>";

        # SELECT para mostrar un listado
        echo "<select name= \"conferencia\">";
        if ($conferencia != null) {
            foreach ($conferencia as $confe) {
                $nombre = $confe['Conferencia'];
                echo "<option value=\".$nombre.\">" . $nombre . "</option>";
            }
            echo "</select><br><br>";
        }
        echo "<label for=\"divi\">Divisiones</label><br>";
        echo "<select name= \"division\">";
        if ($division != null) {
            foreach ($division as $divis) {
                $nombre = $divis['Division'];
                echo "<option value=\".$nombre.\">" . $nombre . "</option>";
            }
            echo "</select>";
        }
        ?>
        <br><br>
        <input type="submit" value="INSERTAR"><br><br>
    </fieldset>
</form>

<?php

# Enviar datos GET por una url a otra página para luego recogerlos mediante $_GET
echo "<a href='actualizar.php?nombre=" . $nombre . "'>Actualizar registro.</a>";
echo "<a href='borrarDB.php?nombre=" . $nombre . "'>BORRAR</a>";
?>
<!-- De este modo se recogería en un campo sin posibilidad de cambio -->
<input type="text" name="nombre" value="<?= $_REQUEST['nombre']; ?>" readonly><br><br>


<?php

# RECOGIDA DE DATOS
$bbdd = new Equipo();
$nombre = $_POST['nombre'];
/*$ciudad = $_POST['ciudad'];
$conferencia = substr($_POST['conferencia'], 1, -1);
$division = substr($_POST['division'], 1, -1);*/

# MOSTRAR UN DATO EN ARRAY EN BASE DE DATOS
$mostrar = $bbdd->mostrarEquipo($nombre);
if ($mostrar != null) {
    foreach ($mostrar as $nuevo) {
        echo "<b>Nombre: </b>" . $nuevo['Nombre'] . "<br>";
        echo "<b>Ciudad: </b>" . $nuevo['Ciudad'] . "<br>";
        echo "<b>Conferencia: </b>" . $nuevo['Conferencia'] . "<br>";
        echo "<b>División: </b>" . $nuevo['Division'] . "<br>";
    }
} else {
    echo "Error en la muestra de resultados.";
}
?>