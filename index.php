<?php


require 'vendor/autoload.php';

use Yj\DesignPattern\Main;

$pattern = $argv[1];
if (!$pattern) throw new DomainException("Insira um padrão de projeto.");
$test = new Main();
$test->execute($pattern);