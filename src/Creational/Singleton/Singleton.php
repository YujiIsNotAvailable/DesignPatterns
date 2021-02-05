<?php

namespace Yj\DesignPattern\Creational\Singleton;

class Singleton
{
    private static $_instance;
    private function __construct()
    {
    }

    static public function getInstance(): self
    {
        if (empty(self::$_instance)) self::$_instance = new self();
        return self::$_instance;
    }
}
