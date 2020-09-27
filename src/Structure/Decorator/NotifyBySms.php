<?php

namespace Yj\DesignPattern\Structure\Decorator;

use Yj\DesignPattern\Functions;

class NotifyBySms extends NotificationTypes
{
    public function send(string $event)
    {
        Functions::print("Sending notification by Sms... EventReport: [{$event}]", 1);
        Functions::print(".", 1);
        Functions::print(".", 1);
        Functions::print("Sms sended successfully! :D", 1);
        parent::send($event);
    }
}