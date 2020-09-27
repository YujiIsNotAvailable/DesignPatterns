<?php

namespace Yj\DesignPattern\Behaviour\State\DocumentStates;

use DomainException;

class Published extends DocumentState
{
    public function publish()
    {
        throw new DomainException("You cannot publish a already published document. :(");
    }
}