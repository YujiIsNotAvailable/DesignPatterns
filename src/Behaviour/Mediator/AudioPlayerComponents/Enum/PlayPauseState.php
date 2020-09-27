<?php

namespace Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\Enum;

class PlayPauseState
{
    protected string $state;

    private function __construct(string $state)
    {
        $this->state = $state;
    }

    public function get(): string
    {
        return $this->state;    
    }

    static public function PLAYING()
    {
        $self = new self('PLAYING');
        return $self;
    }

    static public function PAUSED()
    {
        $self = new self('PAUSED');
        return $self;
    }
}