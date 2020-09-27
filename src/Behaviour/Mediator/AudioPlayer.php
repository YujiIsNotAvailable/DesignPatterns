<?php

namespace Yj\DesignPattern\Behaviour\Mediator;

use Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\AudioPlayerComponent;
use Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\Enum\PlayPauseState;
use Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\NextButton;
use Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\PlayPauseButton;
use Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents\PreviousButton;
use Yj\DesignPattern\Functions;

class AudioPlayer
{
    private PlayPauseButton $playPauseButton;
    private PreviousButton $previousButton;
    private NextButton $nextButton;

    public function __construct()
    {
        $this->playPauseButton = new PlayPauseButton($this);
        $this->previousButton = new PreviousButton($this);
        $this->nextButton = new NextButton($this);    
    }

    public function playPauseButton()
    {
        return $this->playPauseButton;
    }

    public function previousButton()
    {
        return $this->previousButton;
    }

    public function nextButton()
    {
        return $this->nextButton;
    }

    public function trigger(AudioPlayerComponent $object, string $event)
    {
        if ($object === $this->nextButton) {
            Functions::print("<< Next button was clicked >> Changing to next music track and play", 2);
            $this->playPauseButton->changeState(PlayPauseState::PLAYING());
        } elseif ($object === $this->playPauseButton) {
            Functions::print(":D", 2);
        }
    }

}