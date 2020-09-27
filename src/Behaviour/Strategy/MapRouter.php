<?php

namespace Yj\DesignPattern\Behaviour\Strategy;

use Yj\DesignPattern\Behaviour\Strategy\Vehicles\Vehicle;
use Yj\DesignPattern\Functions;

class MapRouter
{

    public function calculateShortestRoute(Localization $from, Localization $to, Vehicle $vehicle): Route
    {
        return $vehicle->shortestRoute($from, $to);
    }
}