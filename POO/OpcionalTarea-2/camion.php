<?php
    class Camion extends Cuatro_ruedas
    {
        private $longitud;

        /**
         * GETTER SETTERS *
         */

        /**
         * Get the value of longitud
         */ 
        public function getLongitud()
        {
                return $this->longitud;
        }

        /**
         * Set the value of longitud
         *
         * @return  self
         */ 
        public function setLongitud($longitud)
        {
                $this->longitud = $longitud;

                return $this;
        }

        /**
         * FUNCTION *
         */

         public function anyadir_remolque($longitud_remolque)
         {
             $this->longitud += $longitud_remolque;
         }
    }
?>