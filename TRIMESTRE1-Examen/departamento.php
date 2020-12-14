<?php
include "lib/empresa.php";

class Departamento extends Empresa
{
    private $numDpto;
    private $nombre;
    private $ciudad;

    function __construct($numDpto, $nombre, $ciudad)
    {
        $this->numDpto = $numDpto;
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
    }

    /**
     * Get the value of numDpto
     */
    public function getNumDpto()
    {
        return $this->numDpto;
    }

    /**
     * Set the value of numDpto
     *
     * @return  self
     */
    public function setNumDpto($numDpto)
    {
        $this->numDpto = $numDpto;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
}
