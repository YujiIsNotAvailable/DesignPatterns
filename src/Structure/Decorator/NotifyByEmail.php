<?php

namespace Yj\DesignPattern\Structure\Decorator;

use Yj\DesignPattern\Functions;

class NotifyByEmail extends NotificationTypes
{
    public function send(string $event)
    {
        Functions::print("Sending notification by Email... EventReport: [{$event}]", 1);
        Functions::print(".", 1);
        Functions::print(".", 1);
        Functions::print("Email sended successfully! :D", 1);
        parent::send($event);
    }
}