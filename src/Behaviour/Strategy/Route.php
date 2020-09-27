<?php

namespace Yj\DesignPattern\Behaviour\Strategy;

class Route
{
    private array $steps;
    public function __construct()
    {
        $this->steps = [];    
    }

    public function addStep(RouteStep $step): self
    {
        $this->steps[] = $step;
        return $this;
    }
    
    public function steps(): array
    {
        return $this->steps;    
    }
}
