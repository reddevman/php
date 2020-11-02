<?php
    class Coche extends Cuatro_ruedas
    {
        private $numero_cadenas_nieve = 0;

        /**
         * GETTERS SETTERS *
         */

        /**
         * Get the value of numero_cadenas_nieve
         */ 
        public function getNumero_cadenas_nieve()
        {
                return $this->numero_cadenas_nieve;
        }

        /**
         * Set the value of numero_cadenas_nieve
         *
         * @return  self
         */ 
        public function setNumero_cadenas_nieve($numero_cadenas_nieve)
        {
                $this->numero_cadenas_nieve = $numero_cadenas_nieve;

        }

        /**
         * FUNCIONES *
         */

         public function anyadir_cadenas_nieve($num)
         {
            $cadenas = $this->getNumero_cadenas_nieve(); 
            echo 'Tienes ' . $cadenas . ' cadenas puestas.<br>';

            if ($num >=1 && $num < 4) {
                if ($cadenas >= 0 && $cadenas < 4) $this->numero_cadenas_nieve += $num;
                else echo 'El vehículo es de 4 ruedas, no se pueden poner ' . $num . ' cadenas.';
            }
         }

         public function quitar_cadenas_nieve($num)
         {
             $this->numero_cadenas_nieve -= $num;
         }
    }
?>
