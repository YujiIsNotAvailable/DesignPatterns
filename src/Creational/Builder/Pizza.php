<?php

namespace Yj\DesignPattern\Creational\Builder;

use Yj\DesignPattern\Functions;

class Pizza
{
    private array $filling =[];

    public function addPasta(): self
    {
        $this->filling[] = 'pasta';
        Functions::print("Filling added: pasta");
        return $this;
    }

    public function addTomatoSauce(): self
    {
        $this->filling[] = 'tomatoSauce';
        Functions::print("Filling added: tomatoSauce");
        return $this;
    }

    public function addOliveOil(): self
    {
        $this->filling[] = 'oliveOil';
        Functions::print("Filling added: oliveOil");
        return $this;
    }

    public function addMozzarella(): self
    {
        $this->filling[] = 'mozzarella';
        Functions::print("Filling added: mozzarella");
        return $this;
    }

    public function addCheddar(): self
    {
        $this->filling[] = 'cheddar';
        Functions::print("Filling added: cheddar");
        return $this;
    }

    public function addProvolone(): self
    {
        $this->filling[] = 'provolone';
        Functions::print("Filling added: provolone");
        return $this;
    }

    public function addGorgonzola(): self
    {
        $this->filling[] = 'gorgonzola';
        Functions::print("Filling added: gorgonzola");
        return $this;
    }

    public function addCalabreza(): self
    {
        $this->filling[] = 'calabreza';
        Functions::print("Filling added: calabreza");
        return $this;
    }

    public function toArray(): array
    {
        return $this->filling;
    }
}
