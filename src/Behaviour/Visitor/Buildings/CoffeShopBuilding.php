<?php

namespace Yj\DesignPattern\Behaviour\Visitor\Buildings;

use Yj\DesignPattern\Behaviour\Visitor\VisitorInterface;

class CoffeShopBuilding implements Building 
{
    public function accept(VisitorInterface $visitor) 
    {
        $visitor->visitCoffeShopBuilding($this);
    }
}
