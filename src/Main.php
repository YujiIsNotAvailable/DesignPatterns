<?php 

namespace Yj\DesignPattern;

use DirectoryIterator;
use DomainException;

class Main
{
    static private $modules = [];

    public function __construct()
    {
        $this->initializeModules();
    }

    static public function registerModule(AbsModule $module)
    {
        self::$modules[] = $module;
    }

    public function initializeModules()
    {
        $dir = new DirectoryIterator('./src');
        foreach ($dir as $fileInfo) {
            if ($fileInfo->isDir() && !$fileInfo->isDot()) {
                $class = __NAMESPACE__ . '\\' . $fileInfo->getFilename() . '\\Module';
                if (class_exists($class)) $class::initialize();
            }
        }
    }

    public function execute(string $stringPattern)
    {
        $pattern = null;
        foreach (self::$modules as $module) {
            $pattern = $module->search($stringPattern);
            if ($pattern) break;
        }
        if (!$pattern) throw new DomainException("Padrão de projeto \"{$stringPattern}\" não encontrado.", 1);
        $pattern->run();
    }
}