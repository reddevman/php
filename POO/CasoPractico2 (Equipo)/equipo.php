<?php
    require 'jugador.php';

    class Equipo {
        private $jugadores;

        public function __construct ()
        {
            $this->jugadores = array ();
        }

        public function addJug ($jugador)
        {
        /* Accede a cada posición del array "jugadores" [longitud del array],
        y en cada posición se le introduce un objeto (jugador)*/
            $this->jugadores[count($this->jugadores)] = $jugador;

            // Así lo va añadiendo también al array sin count
            // $this->jugadores[] = $jugador;
        }

        public function getJug ($numJugador)
        {
            // $this->jugadores = $numJugador;

            // * Comprobar en cada posición del array si el jugador que se está buscando y se ha pasado el dorsal como parámetro 
            for ($i=0; $i < count($this->jugadores); $i++) { 
                if ($this->jugadores[$i]->getNumJug() == $numJugador) {
                    return $this->jugadores[$i];
                }
            }
            return null;
        }

        public function getTotal ()
        {
            # Variable suma que almacenará las sumas de los puntos
            $suma = 0;

            # Bucle for para sumar todos los puntos que contiene el array
            for ($i=0; $i < count($this->jugadores); $i++) { 
                # Se debe acceder a la propiedad de los puntos de esta manera:
                
                /* Suma según obtiene de cada posición de $i del array, los puntos
                que obtiene con la función de la clase Jugador getPtos() */
                $suma += $this->jugadores[$i]->getPtos();
            }
            return $suma;
        }
    }
