<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers;


class CheckWhiteList extends AbsChecker
{
    public function handle()
    {
        $whiteList = [
            'some@safe.com.br',
            'other@safe.com.br',
        ];
        if (in_array($this->message->sender(), $whiteList) || !$this->next) {
            return true;
        }
        return $this->next->handle();
    }
}