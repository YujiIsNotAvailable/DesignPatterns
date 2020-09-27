<?php

namespace Yj\DesignPattern\Structure\Decorator;

abstract class NotificationTypes
{
    protected ?NotificationTypes $anotherNotification;
    public function __construct(NotificationTypes $notification = null)
    {
        $this->anotherNotification = $notification;
    }

    public function send(string $event)
    {
        if ($this->anotherNotification) $this->anotherNotification->send($event);
    }
}