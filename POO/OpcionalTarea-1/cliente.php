<?php
        class Cliente
        {
                private $dni;
                private $nombre;
                private $apelidos;

                function __construct($dni,$nombre,$apellidos)
                {
                        $this->dni = $dni;
                        $this->nombre = $nombre;
                        $this->apelidos = $apellidos;
                }

                /**
                 * GETTER SETTERS
                 */

                /**
                 * Get the value of nombre
                 */
                public function getNombre()
                {
                        return $this->nombre;
                }

                /**
                 * Set the value of nombre
                 *
                 * @return  self
                 */
                public function setNombre($nombre)
                {
                        $this->nombre = $nombre;
                }

                /**
                 * Get the value of apelidos
                 */
                public function getApelidos()
                {
                        return $this->apelidos;
                }

                /**
                 * Set the value of apelidos
                 *
                 * @return  self
                 */
                public function setApelidos($apelidos)
                {
                        $this->apelidos = $apelidos;
                }

                /**
                 * Get the value of dni
                 */
                public function getDni()
                {
                        return $this->dni;
                }

                /**
                 * Set the value of dni
                 *
                 * @return  self
                 */
                public function setDni($dni)
                {
                        $this->dni = $dni;
                }
        }
?>