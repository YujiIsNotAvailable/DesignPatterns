<?php

namespace Yj\DesignPattern\Structure\Proxy;

interface MusicsServiceInterface
{
    public function getTop(int $num): array;
}
