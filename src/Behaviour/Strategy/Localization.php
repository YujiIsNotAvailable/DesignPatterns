<?php

namespace Yj\DesignPattern\Behaviour\Strategy;

use Yj\DesignPattern\Functions;

class Localization
{
    private string $x;
    private string $y;
    
    public function __construct(string $x, string $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}