<?php

namespace Yj\DesignPattern\Structural\Adapter;

class Stock
{
    protected string $ticker;
    public function __construct(string $ticker)
    {
        $this->ticker = $ticker;
    }
}