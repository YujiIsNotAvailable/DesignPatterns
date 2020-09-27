<?php

namespace Yj\DesignPattern\Structure\Adapter;

class Stock
{
    protected string $ticker;
    public function __construct(string $ticker)
    {
        $this->ticker = $ticker;
    }
}