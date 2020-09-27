<?php

namespace Yj\DesignPattern\Behaviour\State\DocumentStates;

use Yj\DesignPattern\Functions;

class Moderation extends DocumentState
{
    public function publish()
    {
        if ($this->review()) {
            return $this->document->changeState(new Published($this->document));
        }
        return $this->document->changeState(new Draft($this->document));
    }

    private function review(): bool
    {
        return true;
    }
}