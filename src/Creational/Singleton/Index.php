<?php

namespace Yj\DesignPattern\Creational\Singleton;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Singleton -> Única instância
     * Comumente utilizado em serviços que não possuem dependência de estado. A instância é cacheada em memória para que, 
     * de qualquer lugar, todos tenham o mesmo acesso;
     */
    public function run()
    {
        Functions::print("Criando a primeira instância:");
        $instance1 = Singleton::getInstance();
        Functions::print("Hash da instância 1: ".spl_object_hash($instance1), 2);
        
        Functions::print("Criando a segunda instância:");
        $instance2 = Singleton::getInstance();
        Functions::print("Hash da instância 2: ".spl_object_hash($instance2), 2);
        
        if ($instance1 === $instance2) {
            Functions::print("As instâncias são identicas :)");
        } else {
            Functions::print("As instâncias não são identicas :(");
        }

    }
}