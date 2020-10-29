<?php
    class Equipo {
        private $nombre;
        public $posicion;

        public function mostrarEquipo (){
            echo ' El equipo es: <b>' . $this->nombre . '</b>';
            echo '<br>';
        }

        // Función que asigna a la propiedad nombre, la variable que asignemos
        public function ponerEquipo ($nombre){
            // $this para referenciar a la propiedad de la clase...
            // ...después le asignamos la variable que hemos definido en el parámetro
            $this->nombre = $nombre;
        }
    }
?>