<?php
    class Cuatro_ruedas extends Vehiculo
    {
        private $numero_puertas;

        /**
         * No se ha realizado un constructor para cada clase heredando el de vehiculo porque
         * no se pide en el ejercicio, sino se haría uso de la super clase mediante 
         * parent::__construct()
         */

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