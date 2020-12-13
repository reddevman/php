<?php


//
// POO básico
//

class nombreClase
{

    private $propiedad1;
    private $propiedad2;

    public function __construct($parámetro1, $parámetro2)
    {
        $this->propiedad1 = $parámetro1;
        $this->propiedad2 = $parámetro2;
    }

    // SET
    public function setPropiedad1($parámetro1)
    {
        $this->propiedad1 = $parámetro1;
    }

    public function setPropiedad2($parámetro2)
    {
        $this->propiedad1 = $parámetro2;
    }

    // GET
    public function getPropiedad1()
    {
        return $this->propiedad1;
    }

    public function getPropiedad2()
    {
        return $this->propiedad2;
    }
}

$objeto = new nombreClase($parámetro1, $parámetro2);

?>



<?php

# Los TRAITS se usan para reutilizar código entre clases que compartan el mismo código, por ejemplo
# con mensajes que se repiten o reutilizan

# Declaración del trait
trait mensajes
{

    public function info($color)
    {
        echo "El color es $color.";
    }
}
class Coche
{

    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    # De esta manera la clase podrá usar el trait cuando se le llame en la instancia.
    use mensajes;
}

class Moto
{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    use mensajes;
}

$coche1 = new Coche('rojo');
$moto1 = new Moto('azul');

$coche1->info($coche1->getColor());
$moto1->info($moto1->getColor());


?>



<?php

//
// FORMULARIOS
//

# Comprobación de si está declarada la variable y no está vacía.
if (isset($_POST["nombre"], $_POST["apellidos"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"])) {
}

# Ejemplo de función que comprueba un valor mayor y que devuelve un array con 2 valores/posiciones
function notaMasAlta($notaProgram, $notaEntornos, $notaLenguajes, $notaBBDD)
{
    $mayor = $notaProgram;
    $nombre = 'Programación';
    if ($notaEntornos > $mayor) {
        $mayor = $notaEntornos;
        $nombre = 'Entornos de Desarrollo';
    } else if ($notaLenguajes > $mayor) {
        $mayor = $notaLenguajes;
        $nombre = 'Lenguajes de Marca';
    } else if ($notaBBDD > $mayor) {
        $mayor = $notaBBDD;
        $nombre = 'Bases de Datos';
    } else echo 'Todas las asignaturas tienen la misma nota.<br>';
    return array($mayor, $nombre);
}
?>

<html>

<!-- En un formulario se reciben los datos mediante las variables $_POST[] y $_GET[] usando
los valores encontrados en las etiquetas name de html-->

<!-- min y max para hacer un selector y step para controlar los pasos del selector -->
<input type="number" name="notaprog" min="0" max="10" step=".5" class="form-control mb-2" title="Introduzca valores del 1 al 10">

<!-- Uso de pattern para limitar en el input lo que se debe introducir -->
<input type="text" pattern="#[a-fA-F0-9]{6}" name="hexa" placeholder="#000000" value="#">

<select name="edad">
    <option value="15-26">15-26 años</option>
    <option value="26-35">26-35 años</option>
    <option value="36-45">36-45 años</option>
    <option value="+46">Más de 46 años</option>
</select>

</html>