<?php

namespace Yj\DesignPattern\Behaviour\Visitor\Buildings;

use Yj\DesignPattern\Behaviour\Visitor\VisitorInterface;

interface Building 
{
    public function accept(VisitorInterface $visitor);
}
