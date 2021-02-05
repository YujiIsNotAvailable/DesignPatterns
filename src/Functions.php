<?php 

namespace Yj\DesignPattern;

class Functions
{
    static function print(string $string, int $delay = 0): void
    {
        echo $string . PHP_EOL;
        sleep($delay);
    }
}