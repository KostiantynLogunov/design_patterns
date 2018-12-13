<?php

class USAFactory implements TransportFactory
{
    private static $_instance;

    public static function getInstace()
    {
        if (static::$_instance === null) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }

    public function createCar()
    {
        return new Porshe();
    }

    public function createAirCraft()
    {
        return new Boing747();
    }
}
