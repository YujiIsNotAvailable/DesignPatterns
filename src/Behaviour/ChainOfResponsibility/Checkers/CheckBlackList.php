<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers;


class CheckBlackList extends AbsChecker
{
    public function handle()
    {
        $blackList = [
            'some@unsafe.com.br',
            'other@unsafe.com.br',
        ];
        if (in_array($this->message->sender(), $blackList)) {
            return false;
        }
        return $this->next ? $this->next->handle() : true;
    }
}