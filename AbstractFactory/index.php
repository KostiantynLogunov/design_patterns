<?php
$factory;
// some code
if ($factory) {
    $factory = RussianFactory::getInstace();
} else {
    $factory = USAFactory::getInstace();
}

 $aircraft = $factory->createAirCraft();
 $aircraft->flight();
