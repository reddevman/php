<?php
    require 'traits.php';
    class Factura extends Cliente
    {
        private $importeFactura;
        private $numFactura;

        /**
         * GETTERS SETTERS
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
         * Get the value of numFactura
         * Función pedida datosFactura() = get
         */ 
        public function datosFactura()
        {
                return $this->numFactura;
        }

        /**
         * Set the value of numFactura
         *
         * @return  self
         */ 
        public function setNumFactura($numFactura)
        {
                $this->numFactura = $numFactura;

        }

        /**
         * USO DEL TRAIT CON LA INFO GENERAL USADAS EN LAS DOS CLASES
         */
        use mensajeDatos;

    }
