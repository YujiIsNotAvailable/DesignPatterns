<?php

namespace Yj\DesignPattern\Structure\Decorator;

use Yj\DesignPattern\Functions;

class NotifyByFacebook extends NotificationTypes
{
    public function send(string $event)
    {
        Functions::print("Sending notification by Facebook... EventReport: [{$event}]", 1);
        Functions::print(".", 1);
        Functions::print(".", 1);
        Functions::print("Facebook notificated successfully! :D", 1);
        parent::send($event);
    }
}