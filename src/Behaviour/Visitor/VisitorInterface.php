<?php

namespace Yj\DesignPattern\Behaviour\Visitor;

use Yj\DesignPattern\Behaviour\Visitor\Buildings\BankBuilding;
use Yj\DesignPattern\Behaviour\Visitor\Buildings\CoffeShopBuilding;
use Yj\DesignPattern\Behaviour\Visitor\Buildings\ResidentialBuilding;

interface VisitorInterface
{
    public function visitBankBuilding(BankBuilding $building);
    public function visitResidentialBuilding(ResidentialBuilding $building);
    public function visitCoffeShopBuilding(CoffeShopBuilding $building);
}