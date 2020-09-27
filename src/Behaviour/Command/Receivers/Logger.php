<?php

namespace Yj\DesignPattern\Behaviour\Command\Receivers;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Logger
{
    public function write(string $data)
    {
        Functions::print("Data: {$data}", 2);
        // fwrite('register log..');    
    }
}