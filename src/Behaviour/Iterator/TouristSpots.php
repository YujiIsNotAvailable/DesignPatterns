<?php

namespace Yj\DesignPattern\Behaviour\Iterator;

use ArrayIterator;
use IteratorAggregate;
use Yj\DesignPattern\Behaviour\Iterator\Spots\Spot;

class TouristSpots implements IteratorAggregate
{
    private array $spots;
    public function __construct()
    {
        $this->spots = [];
    }

    public function add(Spot $item): self
    {
        $this->spots[] = $item;
        return $this;  
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->spots);    
    }
}