<?php

namespace Yj\DesignPattern\Behaviour\Strategy\Vehicles;

use Yj\DesignPattern\Behaviour\Strategy\Localization;
use Yj\DesignPattern\Behaviour\Strategy\Route;
use Yj\DesignPattern\Behaviour\Strategy\RouteStep;
use Yj\DesignPattern\Functions;

class VehicleTeleport extends Vehicle
{

    public function shortestRoute(Localization $from, Localization $to): Route
    {
        // Here u can set up the algorithm to get the shortest route.
        $route = (new Route())
            ->addStep(new RouteStep('Think where you wanna go.'))
            ->addStep(new RouteStep('Put your forefinger on forehead.'))
            ->addStep(new RouteStep('(*) plim (*)'))
            ->addStep(new RouteStep('you\'ve reached!!'));
        return $route;
    }
}