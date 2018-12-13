<?php
    class Singelton
    {
        private $_instance;
        public static function get()
        {
            if ($this->_instance === null) {
                $this->_instance = new self();
            }
            return $this->_instance;
        }

        private function __construct() {}
        private function __call() {}
        private function __wakeup() {}

    }
