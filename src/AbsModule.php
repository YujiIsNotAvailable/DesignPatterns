<?php

namespace Yj\DesignPattern;

abstract class AbsModule
{
    abstract static public function initialize();
    abstract public function namespace(): string;

    public function search(string $pattern) // retorna um padrão de projeto ou null
    {
        $classname = $this->namespace() . '\\' . $pattern . '\\Index';
        if (class_exists($classname)) {
            $class = new $classname();
            if ($class instanceof Pattern) return $class;
        }
        return null;
    }
}