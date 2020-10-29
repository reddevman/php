<?php

class Dado
{
    private $minNumDado;
    private $maxNumDado;

    public function __construct($min, $max)
    {
        $this->setMinNumDado($min);
        $this->setMaxNumDado($max);

    }

    public function getMinNumDado()
    {
        return $this->minNumDado;
    }

    /* Si el mínimo que se establezca es mayor o igual que 0, se establece como valor,
    sino, minNumDado va a ser cero ya que es el mínimo que se pide en el ejercicio.
    */
    public function setMinNumDado($minimo)
    {
        //$this->minNumDado = 0;
        if ($minimo >= 0 && $minimo <= 12) {
            $this->minNumDado = $minimo;
        } else $this->minNumDado = 0;
    }

    public function getMaxNumDado()
    {
        return $this->maxNumDado;
    }

    public function setMaxNumDado($maximo)
    {
        //$this->maxNumDado = 0;
        if ($maximo <= 12 && $maximo >= 0) {
            $this->maxNumDado = $maximo;
        } else $this->maxNumDado = 12;
    }

    public function tirarDado()
    {
        $tirada = rand($this->minNumDado, $this->maxNumDado);
        return $tirada;
    }
}
