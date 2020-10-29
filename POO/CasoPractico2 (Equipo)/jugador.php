<?php
    class Jugador {
        private $numeroJug;
        private $ptos;

        # Constructor con parámetro
        public function __construct ($numeroJug)
        {
            $this->numeroJug = $numeroJug;
            $this->ptos = 0;
        }

        public function getNumJug()
        {
            return $this->numeroJug;
        }

        public function setNumeroJug($numeroJug) {
            $this->$numeroJug = $numeroJug;
        }

        public function getPtos()
        {
            return $this->ptos;
        }

        public function setPtos($ptos) {
            $this->$ptos = $ptos;
        }

        # Función con condición si es mayor que 0 el punto pasado por parámetro
        public function addPtos ($ptos)
        {
            if ($ptos > 0) {
                $this->ptos += $ptos;
            }
        }

        # Función para dar info sobre cada jugador (tostring en Java)
        public function infoJug()
        {
            echo 'El jugador tiene el dorsal ' . $this->numeroJug . '.<br>';
            echo 'Y ha marcado ' . $this->ptos . ' puntos.<br>';
        }
    }
?>