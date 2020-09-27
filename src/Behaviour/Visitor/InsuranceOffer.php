<?php

namespace Yj\DesignPattern\Behaviour\Visitor;

use Yj\DesignPattern\Behaviour\Visitor\Buildings\BankBuilding;
use Yj\DesignPattern\Behaviour\Visitor\Buildings\CoffeShopBuilding;
use Yj\DesignPattern\Behaviour\Visitor\Buildings\ResidentialBuilding;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class InsuranceOffer implements VisitorInterface
{
    public function visitBankBuilding(BankBuilding $building)
    {
        Functions::print("Visiting ". get_class($building) . "...", 3);
        Functions::print("Hmmmm... I guess... You need a medical insurance..", 2);
    }

    public function visitResidentialBuilding(ResidentialBuilding $building)
    {
        Functions::print("Visiting ". get_class($building) . "...", 3);
        Functions::print("Hmmmm... I guess... You need a steal insurance..", 2);
    }

    public function visitCoffeShopBuilding(CoffeShopBuilding $building)
    {
        Functions::print("Visiting ". get_class($building) . "...", 3);
        Functions::print("Hmmmm... I guess... You need a floods and fires insurance..", 2);
    }

}