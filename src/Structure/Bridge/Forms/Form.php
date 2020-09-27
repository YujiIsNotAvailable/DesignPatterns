<?php

namespace Yj\DesignPattern\Structure\Bridge\Forms;

use Yj\DesignPattern\Pattern;
use Yj\DesignPattern\Structure\Bridge\Colors\Color;

abstract class Form
{
    protected Color $color;

    public function label(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    public function __construct(Color $color)
    {
        $this->color = $color;
    }
    
    public function paint(Color $color)
    {
        $this->color = $color;
    }

    public function getColor(): Color
    {
        return $this->color;  
    }

    public function getRgb(): array
    {
        return $this->color->toRgb();    
    }

    public function getHex(): string
    {
        return $this->color->toHex();
    }
}