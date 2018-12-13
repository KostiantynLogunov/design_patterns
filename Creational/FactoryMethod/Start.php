<?php

//before
$geep = new Geep();
$geep->drive();
//after
$factory = CarSelector::getInstance();
$geep = $factory->getCar("OFF_ROAD");
$geep->drive();

//before
$porshe = new Porshe();
$porshe ->drive();
//after
$porshe = $factory->getCar("CITY");
