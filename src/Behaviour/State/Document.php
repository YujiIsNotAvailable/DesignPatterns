<?php

namespace Yj\DesignPattern\Behaviour\State;

use Yj\DesignPattern\Behaviour\State\DocumentStates\DocumentState;
use Yj\DesignPattern\Functions;

class Document
{
    private DocumentState $state;

    public function __construct()
    {
        $this->state = new DocumentStates\Draft($this);
    }

    public function publish()
    {
        return $this->state->publish();
    }

    public function state()
    {
        return $this->state;    
    }

    public function changeState(DocumentState $state)
    {
        $this->state = $state;
    }
}