<?php

namespace Yj\DesignPattern\Behaviour\State;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Estado
     * Permite que, considerando um número finito de estados, cada um decida o que fazer em uma determinada ação.
     * Possui uma estrutura similar ao padrão Strategy, porém, no State os estados podem conhecer os seus similares e iniciar transições com os mesmos.
     */
    public function run()
    {
        Functions::print("Ok, lets create a new document..", 2);
        $document = new Document(); // initialize a document in Draft.
        Functions::print("Hm..Good... The document state is: " .get_class($document->state()), 3);
        Functions::print("What if we publish it ?", 2);
        $document->publish();
        Functions::print("Look, now the state is: " . get_class($document->state()));
        
        Functions::print("And now we can request a public publication..", 3);
        $document->publish();
        Functions::print("Look, now the state is:" . get_class($document->state()), 2);
        
        Functions::print("So.. can we publish again ?", 2);
        try {
            $document->publish();
        } catch (\Throwable $th) {
            Functions::print("Oh, I think it's not possible.. But thats okay. :D", 3);
            return;
        }
        Functions::print("Look, now the state is:" . get_class($document->state()), 2);
    }
}