<?php

namespace Yj\DesignPattern\Behaviour\ChainOfResponsibility;

use Yj\DesignPattern\Functions;

class Message
{
    private string $sender;
    private string $subject;
    private string $body;

    public function __construct(string $sender, string $subject, string $body)
    {
        $this->sender = $sender;
        $this->subject = $subject;    
        $this->body = $body;    
    }

    public function sender(): string
    {
        return $this->sender;    
    }

    public function subject(): string
    {
        return $this->subject;    
    }

    public function body(): string
    {
        return $this->body;    
    }

    public function scl(): int
    {
        // calculate scl basedon this.
        return 5;
    }
}