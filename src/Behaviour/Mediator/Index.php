<?php

namespace Yj\DesignPattern\Behaviour\Mediator;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Mediador
     * O padrão Mediator é bastante similar ao Observer, a diferença fica na forma de comunicação entre as classes (Observer & Subject), além de sugerir o encapsulamento entre Mediador e seus Subjects.
     * Aqui, o a comunicação é bidirecional. O mediador é notificado de uma alteração, e assim se comunica com seus filhos.
     * Enquanto no padrão Observer, é uma comunicação unilateral: O subject notifica, e o Observer decide o que irá fazer a respeito.
     * 
     * No Mediator, o subject deve conhecer a classe concreta do Mediador.
     * ps: Esse padrão é muito pouco utilizado em PHP, por isso, o melhor exemplo que pude dar era pensando em uma interface gráfica. 
     * Por favor, tentem utilizar a imaginação aqui :V
     */
    public function run()
    {
        // Ao ter o botão de Next em um player de musica clicado, ele notifica o mediador (AudioPlayer) e este poderá tomar suas ações nos outros componentes sobre esse evento, como mudar o estado do botão de PlayPause para 'Tocando'
        $audioPlayer = new AudioPlayer();
        $audioPlayer->nextButton()->click();
    }
}