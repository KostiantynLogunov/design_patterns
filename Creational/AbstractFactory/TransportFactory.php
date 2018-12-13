<?php

///factory fot creating different transport
interface TransportFactory
{
    public function createCar(); // for car
    public function createAirCraft(); //for AirCraft
}
