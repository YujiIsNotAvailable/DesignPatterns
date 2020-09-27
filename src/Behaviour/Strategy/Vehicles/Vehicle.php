<?php

namespace Yj\DesignPattern\Behaviour\Strategy\Vehicles;

use Yj\DesignPattern\Behaviour\Strategy\Localization;
use Yj\DesignPattern\Behaviour\Strategy\Route;
use Yj\DesignPattern\Behaviour\Strategy\RouteStep;
use Yj\DesignPattern\Functions;

abstract class Vehicle
{

    abstract public function shortestRoute(Localization $from, Localization $to): Route;
}