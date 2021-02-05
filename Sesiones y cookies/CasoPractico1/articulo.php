<?php
class Articulo
{
    private $cantidad;

    function __construct($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function crearCookie()
    {
        setcookie($this->nombre, $this->cantidad, time() + 24 * 60 * 60);
    }

    public function sumarCantidad($cantidad)
    {
        $suma = 0;
        $suma += $cantidad;
        return $suma;
    }
}
