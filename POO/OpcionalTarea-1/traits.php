<?php
    /**
     * TRAIT usado para compartir las funciones que van a usar en común las 2 clases
     * factura e indemnización
     */
    trait mensajeDatos 
    {
        public function datosCliente($dni){
            $this->dni = $dni;
            echo 'Los nombres y apellidos del cliente con dni: ' . $this->dni . ', son:<br>';
            echo $this->getNombre() . '<br>';
            echo $this->getApelidos() . '<br>';
        }

        public function totalSinIVA(){
            return $this->importeFactura;
        }

        public function calculaIVA($cantidad) {
            $importeFinal = $cantidad * 0.21;
            return $importeFinal;
        }
    }
?>
