<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility;

use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @CoR, Corrente de responsabilidade, Corrente de comando
     * Dentro do método receive, é criada uma cadeia de responsabilidades. Cada um faz o seu processamento pelo "handle", e decide se vai receber a mensagem ou verificar com o próximo. 
     * Ao settar o sender para um endereço de blacklist, ou antispam, ou alterar o level do SCL a mailbox pode não receber a mensagem.
     */
    public function run()
    {
        $message = new Message('user@coldmail.com', 'any subject here', '~_~ shake your body ._.');
        
        $mailbox = new Mailbox();
        $mailbox->receive($message);

        $mailbox->readMessages();
    }
}