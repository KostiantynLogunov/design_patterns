<?php

class RussianFactory implements TransportFactory
{

    public function createCar()
    {
        return new Niva();
    }

    public function createAirCraft()
    {
        return new TU134();
    }
}
