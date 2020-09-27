<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers;


class CheckScl extends AbsChecker
{
    public function handle()
    {
        if ($this->message->scl() > 5) {
            return false;
        }
        return $this->next ? $this->next->handle() : true;
    }
}