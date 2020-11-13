<?php
    include 'lib/db.php';
    class Serie extends BBDD
    {
        function __construct()
        {
            parent::__construct();
        }

        public function listaActores()
        {
            $sql = "SELECT name, serie_name FROM cast";
            $resultado = $this->realizarConsulta($sql);
            if ($resultado != null) {
                $array = [];
                while ($fila = $resultado->fetch_assoc()) {
                    $array [] = $fila;
                }
                return $array;
            } else {
                return null;
            }
        }

        public function listaActoresTemporada()
        {
            $sql = "SELECT name, serie_name, episode, season FROM season_ep";
            $resultado = $this->realizarConsulta($sql);
            if ($resultado != null) {
                $array = [];
                while ($fila = $resultado->fetch_assoc()) {
                    $array [] = $fila;
                }
                return $array;
            } else {
                return null;
            }
        }

        public function resumenSerie()
        {
            $sql = "SELECT title, creators, season_start, season_end, plot FROM titles";
            $resultado = $this->realizarConsulta($sql);
            if ($resultado != null) {
                $array = [];
                while ($fila = $resultado->fetch_assoc()) {
                    $array [] = $fila;
                }
                return $array;
            } else {
                return null;
            }
        }
    }
?>