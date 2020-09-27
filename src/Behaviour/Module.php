<?php 

namespace Yj\DesignPattern\Behaviour;

use Yj\DesignPattern\Main;
use Yj\DesignPattern\AbsModule;

class Module extends AbsModule
{
    static public function initialize()
    {
        Main::registerModule(new static);
    }

    public function namespace():string
    {
        return __NAMESPACE__;    
    }
}