<?php 

namespace Yj\DesignPattern;

class Functions
{
    static function print(string $string, int $sleep = 0): void
    {
        echo $string . PHP_EOL;
        sleep($sleep);
    }
}