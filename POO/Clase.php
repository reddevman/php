<?php
    class Coche {
        private $color='Azul';
        private $tipo='Turismo';

        // Devuelve el valor de color para poder usarlo en una variable por ejemplo
        public function getColor(){
            return $this->color;
        }

        public function getTipo(){
            echo $this->tipo;
            echo '<br>';
        }

        public function mostrarColor(){
            echo 'El color del coche es ';
            echo $this->color;
            echo '<br>';
        }

    }
?>
