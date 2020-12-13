<?php

trait mensajes {

    public function info($color) {
        echo "El color es " .  $color .  ".\n";
    }
}
class Coche {

    private $color;
    public function __construct ($color) {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    use mensajes;
}

class Moto {
    private $color;
    public function __construct ($color) {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    use mensajes;


}

$coche1 = new Coche('rojo');
$moto1 = new Moto ('azul');

$coche1->info($coche1->getColor());
$moto1->info($moto1->getColor());



?>