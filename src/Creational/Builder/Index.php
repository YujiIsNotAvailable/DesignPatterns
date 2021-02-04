<?php

namespace Yj\DesignPattern\Creational\Builder;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Construtor
     * A partir de um objeto base, constrói-se seus componentes em partes, de forma independente
     */
    public function run()
    {
        $pizza1 = new Pizza();
        $pizza2 = new Pizza();
        $pizza1
            ->addPasta()
            ->addTomatoSauce()
            ->addOliveOil()
            ->addMozzarella()
            ->addCalabreza();
        Functions::print("Pizza 1 Finalized");
        Functions::print(json_encode($pizza1->toArray()));

        $pizza2
            ->addPasta()
            ->addTomatoSauce()
            ->addOliveOil()
            ->addMozzarella()
            ->addCheddar()
            ->addProvolone()
            ->addGorgonzola();
        Functions::print("Pizza 2 Finalized");
        Functions::print(json_encode($pizza2->toArray()));
    }
}