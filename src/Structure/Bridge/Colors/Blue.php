<?php

namespace Yj\DesignPattern\Structure\Bridge\Colors;

class Blue extends Color
{
    public function toRgb(): array
    {
        return [0, 0, 255];
    }
    
    public function toHex(): string
    {
        return '#0000FF';
    }
}