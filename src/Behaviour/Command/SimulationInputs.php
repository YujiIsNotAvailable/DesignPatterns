<?php

namespace Yj\DesignPattern\Behaviour\Command;

use Yj\DesignPattern\Functions;

class SimulationInputs 
{
    // Simulate of receiving post data from Web
    public function web(): array
    {
        return [
            'name' => 'Yuji_web',
            'email_address' => 'somecool@email.com',
            'password' => 'securepasswordhere',
        ];
    }

    // Simulate of receiving post data as Api
    public function api(): array
    {
        return [
            'name' => 'Yuji_api',
            'email_address' => 'somecool@email.com',
            'password' => 'securepasswordhere',
        ];
    }

    // Simulate of receiving post data from Cli
    public function cli(): array
    {
        return [
            1 => 'Yuji_cli',
            2 => 'somecool@email.com',
            3 => 'securepasswordhere',
        ];
    }
}