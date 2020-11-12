<?php
# ARCHIVO PARA GESTIONAR LA CONEXIÓN A LA BASE DE DATOS

    class BBDD
    {
        // Propiedades para la conexión a la base de datos y a sql //
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "nba";

        // Variable de la conexión //
        private $conexion;

        // Propiedad para controlar posibles errores //
        private $error = false; private $error_msj = "";

        function __construct()
        {
            # Se establece la conexión con la instancia a mysqli y las propiedades anteriores
            $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db_name);

            # Si da error la conexión (método connect_errno) se cambia la propiedad error a true
            if ($this->conexion->connect_errno) {
                $this->error = true;
            }
        }



        /* Función que si hay error, la propiedad $error se habría establecido arriba a TRUE,
        va a devolver la propiedad para poder utilizarla en otra clase.
        */
        function hayError()
        {
            return $this->error;
        }

        /* Función que devolverá el mensaje de error que hayamos establecido en la función de 
        realizarConsulta(), si es que diera error dicha consulta y fuera necesario mostrarlo
        */
        function msjError()
        {
            return $this->error_msj;
        }


        // Función encargada de hacer la consulta a la base de datos, pasada por parámetro //
        function realizarConsulta($consulta)
        {
            # Si la funcion hayError() no nos devuelve ningún TRUE, es decir, si es FALSE

            /* Recordar que lo que hay dentro de un if es true, y para comprobar que sea false
            se indica la exclamación delante de la variable o función. También se podría hacer
            $this->hayError() == false
            */
            if (!$this->hayError()) {

                /* Se asigna a la variable resultado la conexión realizada, se llama al método 
                query con la "consulta" que hemos pasado como parámetro y que se ha definido en otro
                archivo php según las normas de la programación MVC
                */
                $resultado = $this->conexion->query($consulta);
                return $resultado;
            } else {
                $this->error_msj = "No se ha podido hacer la consulta" . $consulta;
                return null;
            }
        }
    }
?>