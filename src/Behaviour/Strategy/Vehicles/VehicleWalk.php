<?php

namespace Yj\DesignPattern\Behaviour\Strategy\Vehicles;

use Yj\DesignPattern\Behaviour\Strategy\Localization;
use Yj\DesignPattern\Behaviour\Strategy\Route;
use Yj\DesignPattern\Behaviour\Strategy\RouteStep;
use Yj\DesignPattern\Functions;

class VehicleWalk extends Vehicle
{

    public function shortestRoute(Localization $from, Localization $to): Route
    {
        // Here u can set up the algorithm to get the shortest route.
        $route = (new Route())
            ->addStep(new RouteStep('Go ahead on September Street until get October Street'))
            ->addStep(new RouteStep('Turn right on October Street'))
            ->addStep(new RouteStep('go ahead 2 blocks'))
            ->addStep(new RouteStep('you\'ve reached!!'));

        return $route;
    }
}