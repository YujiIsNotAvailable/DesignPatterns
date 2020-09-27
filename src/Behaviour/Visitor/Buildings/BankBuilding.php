<?php

namespace Yj\DesignPattern\Behaviour\Visitor\Buildings;

use Yj\DesignPattern\Behaviour\Visitor\VisitorInterface;

class BankBuilding implements Building 
{
    public function accept(VisitorInterface $visitor) 
    {
        $visitor->visitBankBuilding($this);
    }
}
