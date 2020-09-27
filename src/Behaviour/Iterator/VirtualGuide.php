<?php

namespace Yj\DesignPattern\Behaviour\Iterator;

use ArrayIterator;
use IteratorAggregate;
use Yj\DesignPattern\Functions;

class VirtualGuide
{
    public function startTour(TouristSpots $spots): void
    {
        Functions::print("Okay, lets start the tour", 2);
        foreach ($spots as $spot) {
            Functions::print($spot->visit(), 3);
        }
        Functions::print("Did u get a good tour ?");
    }
}