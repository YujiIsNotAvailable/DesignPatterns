<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility\Checkers;

use Yj\DesignPattern\Behaviour\ChainOfResponsibility\Mailbox;
use Yj\DesignPattern\Behaviour\ChainOfResponsibility\Message;

abstract class AbsChecker
{
    protected Mailbox $mailbox;
    protected Message $message;
    protected ?AbsChecker $next;
    public function __construct(Mailbox $mailbox, Message $message, AbsChecker $next = null)
    {
        $this->mailbox = $mailbox;
        $this->message = $message;
        $this->next = $next;
    }
    abstract public function handle();
}