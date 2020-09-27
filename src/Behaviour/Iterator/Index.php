<?php

namespace Yj\DesignPattern\Behaviour\Iterator;

use Yj\DesignPattern\Behaviour\Iterator\Spots\BasilicaDeSaoPedro;
use Yj\DesignPattern\Behaviour\Iterator\Spots\Coliseu;
use Yj\DesignPattern\Behaviour\Iterator\Spots\Panteao;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Iterador
     * O método startTour executa um foreach utilizando um objeto. Onde voce não terá acesso direto aos itens do array. 
     */
    public function run()
    {
        Functions::print("C'mon lets visit the best Roma's Spots.. Count with me!", 1);
        $virtualGuide = new VirtualGuide();
        $touristSpots = (new TouristSpots())
            ->add(new Coliseu())
            ->add(new Panteao())
            ->add(new BasilicaDeSaoPedro());

        $virtualGuide->startTour($touristSpots);
    }
}