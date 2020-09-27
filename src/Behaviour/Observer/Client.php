<?php

namespace Yj\DesignPattern\Behaviour\Observer;

use SplObserver;
use SplSubject;
use Yj\DesignPattern\Functions;

class Client implements SplObserver
{
    private string $name;
    private array $messages;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->messages = [];
    }

    public function readMessages(): void
    {
        if (!count($this->messages)) {
            Functions::print("There is no one message Mr(s) {$this->name}");
            return;
        }
        foreach ($this->messages as $key => $message) {
            Functions::print("Message #". ($key+1));
            Functions::print($message);
        }
    }

    public function getName(): string
    {
        return $this->name;    
    }

    public function update(SplSubject $journal)
    {
        $this->messages[] = $journal->getNews();
    }
}