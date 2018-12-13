<?php
    class Singelton
    {
        private $_instance;
        private function __construct() {}
        public static function get()
        {
            if ($this->_instance === null) {
                $this->_instance = new self();
            }
            return $this->_instance;
        }
    }