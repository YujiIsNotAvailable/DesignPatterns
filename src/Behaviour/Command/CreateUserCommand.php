<?php

namespace Yj\DesignPattern\Behaviour\Command;

use Yj\DesignPattern\Behaviour\Command\Receivers\ActiveDirectory;
use Yj\DesignPattern\Behaviour\Command\Receivers\Logger;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class CreateUserCommand implements CommandInterface
{
    private ActiveDirectory $ad;
    private Logger $logger;
    
    private string $name;
    private string $emailAddress;
    private string $password;

    public function __construct(ActiveDirectory $ad, Logger $logger)
    {
        $this->ad = $ad;
        $this->logger = $logger;

        $this->name = '';
        $this->emailAddress = '';
        $this->password = '';
    }

    public function execute()
    {
        if (!$this->ad->userExists($this->emailAddress)) {
            $result = $this->ad->createUser(
                $this->name, 
                $this->emailAddress,
                $this->password
            );
            if ($result) $this->logger->write("User created successfully.");
        }
    }


    public function setName(string $data): self
    {
        $this->name = $data;
        return $this;            
    }

    public function setEmailAddress(string $data): self
    {
        $this->emailAddress = $data;
        return $this;
    }

    public function setPassword(string $data): self
    {
        $this->password = $data;
        return $this;
    }
}