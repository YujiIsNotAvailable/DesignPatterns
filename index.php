<?php


require 'vendor/autoload.php';

use Yj\DesignPattern\Main;

$pattern = $argv[1];

$test = new Main();
$test->execute($pattern);