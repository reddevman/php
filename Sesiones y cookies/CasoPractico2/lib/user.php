<?php
    class User {

        private $id;
        private $usuario;
        private $nombre;
        private $apellido;
        private $email;
        private $rol;
        private $pass;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set the value of id
         */ 
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
            return $this->usuario;
        }

        /**
         * Set the value of usuario
         */ 
        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         */ 
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * Set the value of apellido
         */ 
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Set the value of email
         */ 
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * Get the value of rol
         */ 
        public function getRol()
        {
            return $this->rol;
        }

        /**
         * Set the value of rol
         */ 
        public function setRol($rol)
        {
            $this->rol = $rol;
        }

        /**
         * Get the value of pass
         */ 
        public function getPass()
        {
            return $this->pass;
        }

        /**
         * Set the value of pass
         */ 
        public function setPass($pass)
        {
            $this->pass = $pass;
        }
    }
