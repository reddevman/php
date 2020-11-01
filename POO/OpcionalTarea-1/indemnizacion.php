<?php
    require 'traits.php';
    class Indemnizacion extends Cliente
    {
        private $importeFactura;
        private $dniIndem;
        private $nombreIndem;
        private $apellidosIndem;

        function __construct($dni,$nombre,$apellidos)
        {
            $this->dniIndem = $dni;
            $this->nombreIndem = $nombre;
            $this->apellidosIndem = $apellidos;
        }

        /**
         * GETTER SETTERS
         */

        /**
         * Get the value of importeFactura
         */
        public function getImporteFactura()
        {
            return $this->importeFactura;
        }

        /**
         * Set the value of importeFactura
         *
         * @return  self
         */
        public function setImporteFactura($importeFactura)
        {
            $this->importeFactura = $importeFactura;
        }

        /**
         * Get the value of dniIndem
         */ 
        public function getDniIndem()
        {
                return $this->dniIndem;
        }

        /**
         * Set the value of dniIndem
         *
         * @return  self
         */ 
        public function setDniIndem($dniIndem)
        {
                $this->dniIndem = $dniIndem;

        }

        /**
         * Get the value of nombreIndem
         */ 
        public function getNombreIndem()
        {
                return $this->nombreIndem;
        }

        /**
         * Set the value of nombreIndem
         *
         * @return  self
         */ 
        public function setNombreIndem($nombreIndem)
        {
                $this->nombreIndem = $nombreIndem;

        }

        /**
         * Get the value of apellidosIndem
         */ 
        public function getApellidosIndem()
        {
                return $this->apellidosIndem;
        }

        /**
         * Set the value of apellidosIndem
         *
         * @return  self
         */ 
        public function setApellidosIndem($apellidosIndem)
        {
                $this->apellidosIndem = $apellidosIndem;

        }

        /**
         * USO DEL TRAIT CON LA INFO GENERAL USADAS EN LAS DOS CLASES
         */
        use mensajeDatos;

        public function indemnizado()
        {
            echo 'Los datos de la persona a indemnizar son:<br>';
            echo $this->dniIndem . '<br>';
            echo $this->nombreIndem . '<br>';
            echo $this->apellidosIndem . '<br>';
        }
    }
