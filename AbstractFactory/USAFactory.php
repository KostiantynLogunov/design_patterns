<?php

class USAFactory implements TransportFactory
{

    public function createCar()
    {
        return new Porshe();
    }

    public function createAirCraft()
    {
        return new Boing747();
    }
}
