<?php

namespace Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents;

use Yj\DesignPattern\Behaviour\Mediator\AudioPlayer;
use Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\Enum\PlayPauseState;
use Yj\DesignPattern\Functions;

class PlayPauseButton extends AudioPlayerComponent
{
    private PlayPauseState $state;

    public function __construct(AudioPlayer $player)
    {
        parent::__construct($player);
        $this->state = PlayPauseState::PAUSED();
        Functions::print("The initial PlayPauseButton State is: {$this->state->get()}");
    }

    public function click()
    {
        Functions::print("Right! PlayPause clicked.", 2);
        $this->player->trigger($this, 'click');
    }

    public function changeState(PlayPauseState $state)
    {
        $this->state = $state;
        Functions::print("The new PlayPauseButton State is: {$this->state->get()}", 2);
    }
}