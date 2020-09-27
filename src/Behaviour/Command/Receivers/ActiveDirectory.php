<?php

namespace Yj\DesignPattern\Behaviour\Command\Receivers;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class ActiveDirectory
{
    public function userExists(string $emailAddress): bool
    {
        return false;
    }

    public function createUser(string $name, string $emailAddress, string $password): bool
    {
        // $attempt = (new Request(CreateUserRequest($name, $emailAddress, $password)))->call();
        return true;
    }
}