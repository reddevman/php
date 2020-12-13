<?php


//POO básico

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