<?php

namespace Yj\DesignPattern\Behaviour\Strategy;

class RouteStep
{
    private string $step;

    public function __construct(string $step)
    {
        $this->step = $step;
    }

    public function __toString()
    {
        return $this->step;
    }
}
