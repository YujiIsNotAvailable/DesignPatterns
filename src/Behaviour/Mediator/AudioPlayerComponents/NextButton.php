<?php

namespace Yj\DesignPattern\Behaviour\Mediator\AudioPlayerComponents;

use Yj\DesignPattern\Functions;

class NextButton extends AudioPlayerComponent
{
    public function click()
    {
        Functions::print("Okay, you clicked on Next Button!", 1);
        Functions::print("I'll comunicate to my mediator about this event..", 2);
        $this->player->trigger($this, 'click');    
    }
}