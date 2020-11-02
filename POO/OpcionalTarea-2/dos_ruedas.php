<?php
    class Dos_ruedas extends Vehiculo
    {
        private $cilindrada;
        
        /**
         * GETTER SETTERS *
         */

        /**
         * Get the value of cilindrada
         */ 
        public function getCilindrada()
        {
                return $this->cilindrada;
        }

        /**
         * Set the value of cilindrada
         *
         * @return  self
         */ 
        public function setCilindrada($cilindrada)
        {
                $this->cilindrada = $cilindrada;

                return $this;
        }

        /**
         * FUNCIONES *
         */

         public function poner_gasolina($litros)
         {
             $litros *= 1;
             $peso = $this->getPeso();
             $peso += $litros;
             $this->setPeso($peso);
         }
    }
?>