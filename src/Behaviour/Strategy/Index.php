<?php

namespace Yj\DesignPattern\Behaviour\Strategy;

use Yj\DesignPattern\Behaviour\Strategy\Vehicles\VehiclePublicTransport;
use Yj\DesignPattern\Behaviour\Strategy\Vehicles\VehicleTeleport;
use Yj\DesignPattern\Behaviour\Strategy\Vehicles\VehicleWalk;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Estratégia -> Permite que sejam separados algoritmos especificos da classe pai
     * Neste padrão o objetivo é ter em uma classe abstrata um método padrão, enquanto as classes concretas, a partir da extensão, pode modificar os métodos opcionais (que compõem o método principal).
     */
    public function run()
    {
       $routeCalculator = new MapRouter();

       $from = new Localization("-23.548397", "-46.646388");
       $to = new Localization("-23.552281", "-46.653454");
       
       Functions::print("If you want to go walking..", 2);
       $vehicle = new VehicleWalk();
       $route = $routeCalculator->calculateShortestRoute($from, $to, $vehicle);
       foreach ($route->steps() as $step) {
           Functions::print($step, 2);
       }
       
       Functions::print("___________________________________");

       Functions::print("If you want to go on public transport..", 2);
       $vehicle = new VehiclePublicTransport();
       $route = $routeCalculator->calculateShortestRoute($from, $to, $vehicle);
       foreach ($route->steps() as $step) {
           Functions::print($step, 2);
        }
        Functions::print("___________________________________");
        
       Functions::print("If you want to go with teleport..", 2);
       $vehicle = new VehicleTeleport();
       $route = $routeCalculator->calculateShortestRoute($from, $to, $vehicle);
       foreach ($route->steps() as $step) {
           Functions::print($step, 2);
       }
    }
}