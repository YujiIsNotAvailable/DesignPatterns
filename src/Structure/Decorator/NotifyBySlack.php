<?php

namespace Yj\DesignPattern\Structure\Decorator;

use Yj\DesignPattern\Functions;

class NotifyBySlack extends NotificationTypes
{
    public function send(string $event)
    {
        Functions::print("Sending notification by Slack... EventReport: [{$event}]", 1);
        Functions::print(".", 1);
        Functions::print(".", 1);
        Functions::print("Slack notificated successfully! :D", 1);
        parent::send($event);
    }
}