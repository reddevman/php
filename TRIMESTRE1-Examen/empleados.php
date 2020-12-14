<?php
include "lib/empresa.php";

class Empleados extends Departamento
{
    private $numEmpleado;
    private $nombre;
    private $puesto;
    private $jefe;
    private $fechaAlta;
    private $salario;
    private $comision;
    private $numDpto;

    function __construct($numEmpleado, $nombre, $puesto, $jefe, $fechaAlta, $salario, $comision, $numDpto)
    {
        $this->numEmpleado = $numEmpleado;
        $this->nombre = $nombre;
        $this->puesto = $puesto;
        $this->jefe = $jefe;
        $this->fechaAlta = $fechaAlta;
        $this->salario = $salario;
        $this->comision = $comision;
        $this->numDpto = $numDpto;
    }

    /**
     * Get the value of numEmpleado
     */
    public function getNumEmpleado()
    {
        return $this->numEmpleado;
    }

    /**
     * Set the value of numEmpleado
     *
     * @return  self
     */
    public function setNumEmpleado($numEmpleado)
    {
        $this->numEmpleado = $numEmpleado;
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
     * Get the value of puesto
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set the value of puesto
     *
     * @return  self
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }

    /**
     * Get the value of jefe
     */
    public function getJefe()
    {
        return $this->jefe;
    }

    /**
     * Set the value of jefe
     *
     * @return  self
     */
    public function setJefe($jefe)
    {
        $this->jefe = $jefe;
    }

    /**
     * Get the value of fechaAlta
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set the value of fechaAlta
     *
     * @return  self
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * Get the value of comision
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set the value of comision
     *
     * @return  self
     */
    public function setComision($comision)
    {
        $this->comision = $comision;
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
}
