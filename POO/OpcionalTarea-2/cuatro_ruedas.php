<?php
    class Cuatro_ruedas extends Vehiculo
    {
        private $numero_puertas;

        /**
         * GETTER SETTERS *
         */

        /**
         * Get the value of numero_puertas
         */ 
        public function getNumero_puertas()
        {
                return $this->numero_puertas;
        }

        /**
         * Set the value of numero_puertas
         *
         * @return  self
         */ 
        public function setNumero_puertas($numero_puertas)
        {
                $this->numero_puertas = $numero_puertas;

        }

        /**
         * FUNCIONES *
         */

        public function repintar ($color)
        {
            $this->setColor($color);
        }
    }

?>