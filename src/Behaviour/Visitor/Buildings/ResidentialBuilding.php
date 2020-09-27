<?php

namespace Yj\DesignPattern\Behaviour\Visitor\Buildings;

use Yj\DesignPattern\Behaviour\Visitor\VisitorInterface;

class ResidentialBuilding implements Building 
{
    public function accept(VisitorInterface $visitor) 
    {
        $visitor->visitResidentialBuilding($this);
    }
}
