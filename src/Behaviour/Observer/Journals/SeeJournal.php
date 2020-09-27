<?php

namespace Yj\DesignPattern\Behaviour\Observer\Journals;

use SplObserver;
use SplSubject;
use Yj\DesignPattern\Behaviour\Observer\Client;
use Yj\DesignPattern\Functions;

class SeeJournal implements Journal
{
    private array $subscribers;

    public function __construct()
    {
        $this->subscribers = [];    
    }

    public function attach(SplObserver $client): void
    {
        if (!in_array($client, $this->subscribers)) $this->subscribers[] = $client;
    }

    public function detach(SplObserver $client): void
    {
        $key = array_search($client, $this->subscribers);
        if ($key) {
            unset($this->subscribers[$key]);
        }
    }

    public function notify()
    {
        Functions::print("Notifying the observers");
        foreach ($this->subscribers as $sub) {
            $sub->update($this);
        }    
    }

    public function getNews(): string
    {
        return "Hello dear, we have a batch of last iPhone version available for just 10 dollars, come here!!";
    }
}