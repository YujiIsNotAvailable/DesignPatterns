<?php

namespace Yj\DesignPattern\Structure\Bridge\Colors;

abstract class Color
{
    public function label(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    abstract public function toRgb(): array;
    abstract public function toHex(): string;
}