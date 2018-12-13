<?php

//factory for creating cars
class CarSelector
{
    protected $car;

    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance() : Singelton
    {
        if (static::$instance === null ) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct(){}
    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }
    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }

    //facttory method for needed car
    public function  getCar($roadType)
    {
        switch ($roadType) {
            case "CITY":
                $this->car= new Porshe();
                break;
            case "OFF_ROAD":
                $this->car= new Geep();
                break;
            case "GAZON":
                $this->car= new NewGeep();
                break;
            default: throw new Exception("Error type");
        }
        return $this->car;
    }
}
