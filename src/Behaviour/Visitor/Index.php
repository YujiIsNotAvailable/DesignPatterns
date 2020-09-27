<?php

namespace Yj\DesignPattern\Behaviour\Visitor;

use Yj\DesignPattern\Behaviour\Visitor\Buildings\BankBuilding;
use Yj\DesignPattern\Behaviour\Visitor\Buildings\CoffeShopBuilding;
use Yj\DesignPattern\Behaviour\Visitor\Buildings\ResidentialBuilding;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Visitante -> Permite a adição de operações externas para toda um hierarquia de classe, sem mudar o codigo existente.
     * Neste padrão o objetivo é ter em uma interface de Visitante e um classe concreta que irá implementar a interface. A classe concreta concentrará a funcionalidade nova.
     * No exemplo abaixo, cada possível cliente aceitará a visita da "Oferta de seguros". E esta classe irá realizar a oferta, de acordo com o tipo de organização.
     */
    public function run()
    {
        $insuranceOffer = new InsuranceOffer();

        $possibleCustomers = [
            new ResidentialBuilding(),
            new BankBuilding(),
            new CoffeShopBuilding(),
        ];

        foreach ($possibleCustomers as $possibleCustomer) {
            $possibleCustomer->accept($insuranceOffer);
        }
        Functions::print("Yeah!! we got all these customers.");
    }
}