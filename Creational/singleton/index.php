<?php

final class Singelton
    {
        private static $_instance;
        public static function getInstance()
        {
            if (static::$_instance === null) {
                static::$_instance = new static();
            }
            return static::$_instance;
        }

        private function __construct() {}
        private function __call() {}
        private function __wakeup() {}
    }

    $obj = Singelton::getInstance();
    //code with one $obj
