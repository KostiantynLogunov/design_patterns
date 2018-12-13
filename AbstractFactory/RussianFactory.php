<?php

class RussianFactory implements TransportFactory
{
    private static $_instance;

    public static function getInstace()
    {
        if (static::$_instance === null) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }

    private function __construct() {}
    private function __clone(){}
    private function __wakeup(){}

    public function createCar()
    {
        return new Niva();
    }

    public function createAirCraft()
    {
        return new TU134();
    }
}
