<?php

namespace Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents;
use Yj\DesignPattern\Behaviour\Mediator\AudioPlayer;

abstract class AudioPlayerComponent
{
    protected AudioPlayer $player;
    public function __construct(AudioPlayer $player)
    {
        $this->player = $player;
    }
}