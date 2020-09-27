<?php

namespace Yj\DesignPattern\Behaviour\Command;

use Yj\DesignPattern\Behaviour\Command\Receivers\ActiveDirectory;
use Yj\DesignPattern\Behaviour\Command\Receivers\Logger;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Command
     * É criado uma classe para ser o invocador, e este receberá um Comando, e o executará. A responsabilidade da execuçao fica desacoplada do invocador.
     * Possui uma ideia similar a camada de Serviços de uma aplicação DDD / MVCS. A execução das ações solicitadas são centralizadas, podendo ser utilizadas de N origens.
     * A camada de serviços pode ser utilizada a partir da Controladora Web, Controladora API ou CLI, sem nenhuma implementação ou dificuldade a mais.
     */
    public function run()
    {
        $simulation = new SimulationInputs();
        
        $receiver1 = new ActiveDirectory();
        $receiver2 = new Logger();

        $command = new CreateUserCommand($receiver1, $receiver2);

        Functions::print("Creating user from web", 2);
        $data = $simulation->web();
        $command->setName($data['name'])
            ->setEmailAddress($data['email_address'])
            ->setPassword($data['password']);

        Functions::print("Executing command..", 2);
        $command->execute();
        Functions::print("_________________________", 2);
        
        Functions::print("Also creating user from api", 2);
        $data = $simulation->api();
        $command->setName($data['name'])
            ->setEmailAddress($data['email_address'])
            ->setPassword($data['password']);

        Functions::print("Executing command..", 2);
        $command->execute();
        
        Functions::print("_________________________", 2);
        Functions::print("Also creating user from cli", 2);
        $data = $simulation->cli();
        $command->setName($data[1])
            ->setEmailAddress($data[2])
            ->setPassword($data[3]);

        Functions::print("Executing command..", 2);
        $command->execute();
    }
}