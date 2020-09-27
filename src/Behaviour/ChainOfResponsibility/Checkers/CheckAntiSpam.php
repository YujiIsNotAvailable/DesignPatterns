<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers;


class CheckAntispam extends AbsChecker
{
    public function handle()
    {
        $commomSpamAddresses = [
            'spam@address.com.br',
            'another_spam@address.com.br',
        ];
        if ($this->mailbox->checkAntispam() && in_array($this->message->sender(), $commomSpamAddresses)) {
            return false;
        }
        return $this->next ? $this->next->handle() : true;
    }
}