<?php

namespace Yj\DesignPattern\Structure\Bridge;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;
use Yj\DesignPattern\Structure\Bridge\Colors\Blue;
use Yj\DesignPattern\Structure\Bridge\Colors\Red;
use Yj\DesignPattern\Structure\Bridge\Forms\Square;

class Index implements Pattern
{
    /**
     * @Ponte
     * Separa a abstração (Forma) da implementação (Cor).
     * A abstração armazena a implementação, e realiza suas operações, baseadas na interface da implementação.
     */
    public function run()
    {
       $form = new Square(new Red());
       Functions::print("I'm a {$form->label()}, with color: {$form->getColor()->label()}");

       Functions::print("Painting blue..", 2);
       $form->paint(new Blue());

       Functions::print("Now: I'm a {$form->label()}, with color: {$form->getColor()->label()}");
       Functions::print("HEX[{$form->getHex()}]");
    }
}