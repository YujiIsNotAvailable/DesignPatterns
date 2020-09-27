<?php

namespace Yj\DesignPattern\Structure\Bridge\Colors;

class Red extends Color
{
    public function toRgb(): array
    {
        return [255, 0, 0];
    }
    
    public function toHex(): string
    {
        return '#FF0000';
    }
}