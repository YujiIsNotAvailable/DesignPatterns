<?php

namespace Yj\DesignPattern\Behaviour\Observer\Journals;

use SplSubject;
use Yj\DesignPattern\Behaviour\Observer\Client;

interface Journal extends SplSubject
{
    public function getNews();
}