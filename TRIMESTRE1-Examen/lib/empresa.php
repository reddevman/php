<?php
include "lib/db.php";

class Empresa extends db
{

    function __construct()
    {
        parent::__construct();
    }

    # FUNCIÓN INSERTAR EMPLEADO (INSERT)
    public function insertarEmpleado($nombre, $puesto, $jefe, $fechaAlta, $salario, $comision, $numDpto)
    {
        $sql = "INSERT INTO empleados (numero, nombre, puesto, jefe, fechaalta, salario, comision, dnumero) VALUES
                (NULL, '" . $nombre . "','" . $puesto . "','" . $jefe . "','" . $fechaAlta . "','" . $salario . "','" . $comision . "',
                '" . $numDpto . "')";
        $this->getConexion()->query($sql);
    }

    # FUNCIÓN MODIFICAR EMPLEADO (UPDATE)
    public function modificarEmpleado($numero, $nombre, $puesto, $jefe, $fechaAlta, $salario, $comision, $numDpto)
    {
        $sql = "UPDATE empleados SET nombre = '" . $nombre . "', puesto = '" . $puesto . "', jefe = '" . $jefe . "',
                fechaalta = '" . $fechaAlta . "', salario = '" . $salario . "', comision = '" . $comision . "', dnumero = '" . $numDpto . "' 
                WHERE numero = '" . $numero . "'";
        $this->getConexion()->query($sql);
    }

    # FUNCIÓN LISTADO DE EMPLEADOS (SELECT)
    public function listaEmpleados()
    {
        $sql = "SELECT * FROM empleados ORDER BY puesto ASC";
        $resultado = $this->realizarConsulta($sql);
        $arrayEmpleados = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayEmpleados[] = $fila;
            }
            return $arrayEmpleados;
        } else {
            return null;
        }
    }

    # FUNCIÓN LISTADO DE NUMEROS EMPLEADOS (SELECT)
    public function listaNumEmpleados()
    {
        $sql = "SELECT numero FROM empleados";
        $resultado = $this->realizarConsulta($sql);
        $arrayNumEmpleados = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayNumEmpleados[] = $fila;
            }
            return $arrayNumEmpleados;
        } else {
            return null;
        }
    }

    # FUNCIÓN LISTADO DE NOMBRE DE LOS PUESTOS (SELECT)
    public function listaNombrePuestos()
    {
        $sql = "SELECT DISTINCT puesto FROM empleados";
        $resultado = $this->realizarConsulta($sql);
        $arrayNomPuesto = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayNomPuesto[] = $fila;
            }
            return $arrayNomPuesto;
        } else {
            return null;
        }
    }


    # FUNCIÓN LISTADO DE -NOMBRES DEPARTAMENTOS- (SELECT)
    public function listaNombreDptos()
    {
        $sql = "SELECT nombre FROM departamentos";
        $resultado = $this->realizarConsulta($sql);
        $arrayDptos = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayDptos[] = $fila;
            }
            return $arrayDptos;
        } else {
            return null;
        }
    }

    # FUNCIÓN LISTADO DE -NÚMEROS DEPARTAMENTOS- (SELECT)
    public function listaNumDptos()
    {
        $sql = "SELECT numero FROM departamentos";
        $resultado = $this->realizarConsulta($sql);
        $arrayNumDptos = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayNumDptos[] = $fila;
            }
            return $arrayNumDptos;
        } else {
            return null;
        }
    }

    # FUNCIÓN LISTADO DE NOMBRE DE LOS PUESTOS (SELECT)
    public function listaJefes()
    {
        $sql = "SELECT DISTINCT jefe FROM empleados";
        $resultado = $this->realizarConsulta($sql);
        $arrayJefes = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayJefes[] = $fila;
            }
            return $arrayJefes;
        } else {
            return null;
        }
    }
}
