<?php

namespace Yj\DesignPattern\Structure\Decorator;

use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Decorador, Envoltório, Wrapper
     * Com este padrão, é possível envolver diversas funcionalidades uma a outra, de forma independente. 
     * Evitando assim classes desnecessárias de combinações de funcionalidades.
     * Seu objetivo é: a partir de uma funcionalidade simples, poder adicionar novas, sem prejudicar o funcionamento das já existentes.
     */
    public function run()
    {
        $importantEvent = 'something::important';
        
        $notifyBySms = true;
        $notifyBySlack = true;
        $notifyByFacebook = true;

        $notify = new NotifyByEmail();
        if ($notifyBySms) {
            $notify = new NotifyBySms($notify); 
        }
        if ($notifyBySlack) {
            $notify = new NotifyBySlack($notify);
        }
        if ($notifyByFacebook) {
            $notify = new NotifyByFacebook($notify);
        }

        $notify->send($importantEvent);
    }
}