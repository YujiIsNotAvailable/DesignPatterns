<?php

namespace Yj\DesignPattern\Behaviour\Iterator\Spots;

class BasilicaDeSaoPedro implements Spot
{
    public function visit(): string
    {
        return "Oh, welcome to ". self::class;    
    }
}