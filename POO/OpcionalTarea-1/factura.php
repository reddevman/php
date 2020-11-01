<?php
        /**
         * require_once para que no salte error de que traits.php se usa más de una vez:
         * indemnizacion.php y factura.php
         */
    require_once 'traits.php';
    class Factura extends Cliente
    {
        private $importeFactura;
        private $numFactura;

        /**
         * Constructor que va a heredar de la super clase sus propiedades.
         * Se hace uso de parent::__construct() para poder heredar dichos atributos.
         */
        function __construct($dni,$nombre,$apellidos,$numFactura,$importeFactura)
        {
                parent::__construct($dni,$nombre,$apellidos);
                $this->numFactura = $numFactura;
                $this->importeFactura = $importeFactura;
        }

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
