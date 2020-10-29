<?php
class Coche
{
    private $tipoCombustible;
    private $cantidadCombustible;   // Cantidad de combustible que tiene
    private $velocidad;             // Velocidad a la que va
    private $deposito;              // Cúanta capacidad tiene el depósito
    private $reserva;               // Litros de reserva

    private $estado;                // Estado (arrancado/parado)

    function __construct($tipoCombustible, $cantidadCombustible, $velocidad, $deposito, $reserva)
    {
        $this->tipoCombustible = $tipoCombustible;
        $this->cantidadCombustible = $cantidadCombustible;
        $this->velocidad = $velocidad;
        $this->deposito = $deposito;
        $this->reserva = $reserva;
    }

    /****************************************
    **************** GET ********************
    *****************************************/

    public function getTipoCombustible()
    {
        return $this->tipoCombustible;
    }

    public function getCantidadCombustible()
    {
        return $this->cantidadCombustible;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function getDeposito()
    {
        return $this->deposito;
    }

    public function getReserva()
    {
        return $this->reserva;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    /****************************************
    **************** SET ********************
    *****************************************/

    public function setTipoCombustible($tipoCombustible)
    {
        $this->tipoCombustible = $tipoCombustible;

    }

    public function setCantidadCombustible($cantidadCombustible)
    {
        $this->cantidadCombustible = $cantidadCombustible;

    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

    }

    public function setDeposito($deposito)
    {
        $this->deposito = $deposito;

    }

    public function setReserva($reserva)
    {
        $this->reserva = $reserva;

    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

    }


    /****************************************/
    /*******////// FUNCIONES /////***********/
    /****************************************/

    // ARRANCA el coche
    public function arrancar()
    {
        echo "El coche ha arrancado. <br>";
        $this->estado = true;
    }

    // PARA el coche
    public function parar()
    {
        echo "El coche se ha parado.<br>";
        $this->estado = false;
    }

    // Comprueba si está en MOVIMIENTO
    public function comprobarEstado()
    {
        if ($this->velocidad > 0) {
            echo '<br>El coche sigue en movimiento.<br>';
        } else {
            echo '<br>El coche ya está parado, puedes repostar.<br>';
            $this->estado = false;
        }
    }

    // COMPRUEBA la reserva y el tanque de combustible
    public function comprobarReserva()
    {
        if ($this->cantidadCombustible == 0) {
            echo 'Coche en reserva. <br>';
            echo 'Le quedan ' . $this->reserva . ' litros de reserva. <br>';
        } else echo 'Aún le quedan ' . $this->cantidadCombustible . ' litros al tanque principal
        y ' . $this->reserva . ' litros de reserva.<br>';

        if ($this->reserva == 0) {
            echo ' Ya no queda nada de combustible, ve a la gasolinera.<br>';
        }
    }

    // ACELERA
    public function acelerar($aceleracion)
    {
        $this->velocidad += $aceleracion;
        return $this->velocidad;
    }

    // FRENA
    public function frenar($frenado)
    {
        if ($this->velocidad > 0)
        {
            $this->velocidad -= $frenado;    
        }
        return $this->velocidad;
    }

    // REPOSTAJE de gasolina
    public function repostaje($litros)
    {
        if ($this->cantidadCombustible < $this->deposito)
        {
            $this->cantidadCombustible += $litros;
        }
        return $this->cantidadCombustible;
    }

}
