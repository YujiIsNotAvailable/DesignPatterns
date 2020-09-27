<?php

namespace Yj\DesignPattern\Structure\Proxy;

use Yj\DesignPattern\Functions;

class MusicsServiceProxy extends MusicsService implements MusicsServiceInterface
{
    private array $top;

    public function __construct()
    {
        $this->top = [];
    }

    public function getTop(int $num): array
    {
        if (!isset($this->top[$num])) $this->top[$num] = parent::getTop($num);
        return $this->top[$num];
    }
}