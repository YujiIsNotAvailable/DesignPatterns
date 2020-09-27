<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility;

use Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers\CheckAntispam;
use Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers\CheckBlackList;
use Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers\CheckScl;
use Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers\CheckWhiteList;
use Yj\DesignPattern\Functions;

class Mailbox
{
    private array $messages;
    private bool $checkAntispam;

    public function __construct()
    {   
        $this->messages = [];
        $this->checkAntispam = true;
    }

    public function checkAntispam() :bool
    {
        return $this->checkAntispam;    
    }

    public function receive(Message $message)
    {
        $chain = 
            (new CheckWhiteList(
                $this, $message, 
                (new CheckBlackList($this, $message,
                    (new CheckAntispam($this, $message, 
                        (new CheckScl($this, $message))
                    )
                )
            )
        )));
        $canReceive = $chain->handle();

        if ($canReceive) {
            $this->messages[] = $message;
        }
    }

    public function readMessages()
    {
        if (!count($this->messages)) {
            Functions::print("There's no messages here. I'm sorry :(");
            return;
        }

        foreach ($this->messages as $message) {
            $this->read($message);
        }
    }

    public function read(Message $message)
    {
        Functions::print("_________");
        Functions::print("From: {$message->sender()}");
        Functions::print("Subject: {$message->subject()}");
        Functions::print("Body: {$message->body()}");
        Functions::print("_________");
    }
    
}