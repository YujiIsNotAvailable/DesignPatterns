<?php

namespace Yj\DesignPattern\Behaviour\Observer;

use Yj\DesignPattern\Behaviour\Observer\Journals\SeeJournal;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Observador, Assinante de evento, Escutador
     * O famoso jornal SeeJournal pode receber subscribers. Para isso, basta utilizar o attach, e assim que houver novidades, os que estão inscritos receberão notificações. 
     */
    public function run()
    {
        $journal = new SeeJournal();
        
        $clients = [
            new Client('Hinatu'),
            new Client('Twoberto'),
            new Client('Rubal'),
        ];
        Functions::print("Registering clients on newsLetter..", 2);
        $journal->attach($clients[0]);
        $journal->attach($clients[1]);
        $journal->attach($clients[2]);

        Functions::print("On another day..", 2);

        $journal->detach($clients[1]);

        $journal->notify();
        foreach ($clients as $client) {
            Functions::print("Messages of {$client->getName()}", 2);
            $client->readMessages();
            Functions::print("__________________________________", 3);
        }
    }
}