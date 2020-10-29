<?php
    class Conversion {
        private $euros;

        /**
         * Get the value of euros
         */ 
        public function getEuros()
        {
            return $this->euros;
        }

        /**
         * Set the value of euros
         *
         * @return  self
         */ 
        public function setEuros($euros)
        {
            $this->euros = $euros;
        }


        public function convertir ($euros) {
            $conversion = 0.9;
            $conversion *= $euros;
            return $conversion;
        }
    }
