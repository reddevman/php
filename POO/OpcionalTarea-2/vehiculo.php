<?php
    class Vehiculo 
    {
        private $color;
        private $peso;

        function __construct($color, $peso)
        {
            $this->color = $color;
            $this->peso = $peso;
        }

        /**
         * GETTERS SETTERS *
         */

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

        }

        /**
         * Get the value of peso
         */ 
        public function getPeso()
        {
                return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @return  self
         */ 
        public function setPeso($peso)
        {
                $this->peso = $peso;

        }

        /**
         * FUNCIONES *
         */

        public function circula()
        {
            echo 'El vehículo está circulando.';
        }

        public function anyadir_persona($pesoPersona)
        {
            $this->peso += $pesoPersona;
        }
    }

?>