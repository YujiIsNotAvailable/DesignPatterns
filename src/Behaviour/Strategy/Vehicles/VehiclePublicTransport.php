<?php

namespace Yj\DesignPattern\Behaviour\Strategy\Vehicles;

use Yj\DesignPattern\Behaviour\Strategy\Localization;
use Yj\DesignPattern\Behaviour\Strategy\Route;
use Yj\DesignPattern\Behaviour\Strategy\RouteStep;
use Yj\DesignPattern\Functions;

class VehiclePublicTransport extends Vehicle
{

    public function shortestRoute(Localization $from, Localization $to): Route
    {
        // Here u can set up the algorithm to get the shortest route.
        $route = (new Route())
            ->addStep(new RouteStep('Get the L-873 line Paradise'))
            ->addStep(new RouteStep('Exit on second stop'))
            ->addStep(new RouteStep('you\'ve reached!!'));

        return $route;
    }
}