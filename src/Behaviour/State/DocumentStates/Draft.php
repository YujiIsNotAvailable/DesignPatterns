<?php

namespace Yj\DesignPattern\Behaviour\State\DocumentStates;

use Yj\DesignPattern\Functions;

class Draft extends DocumentState
{
    public function publish()
    {
        $this->document->changeState(new Moderation($this->document));
    }
}