<?php
    /** PASOS PARA LA CREACIÓN DE LA CLASE PRINCIPAL QUE CONTIENE LA CONEXIÓN
     * - Variables que contendrán los datos requeridos para la conexión a la base de datos
     * - Variables de error para recoger futuros fallos
     * - Constructor que contendrá una instancia del objeto mysqli el cual lleva de parámetro
     *   las propiedades previamente definidas con su valor
     * - Funciones de recogidas de errores
     * - IMPORTANTE función que se encarga de las consultas que se irán haciendo en todos los métodos,
     *   hace uso del método query cuyo parámetro tendrá la consulta que creemos
     */

    class BBDD
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "nba";

        private $conexion;

        private $error = false; private $error_msj = "";

        function __construct()
        {
            $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

            if ($this->conexion->connect_errno) {
                $this->error =  true;
            }
        }

        function hayError()
        {
            return $this->error;
        }

        function msjError()
        {
            return $this->error_msj;
        }

        function realizarConsulta($consulta)
        {
            if (!$this->hayError()) {
                $resultado = $this->conexion->query($consulta);
                return $resultado;
            } else {
                $this->error_msj = "No se ha podido hacer la consulta" . $consulta;
                return null;
            }
        }
    }

?>