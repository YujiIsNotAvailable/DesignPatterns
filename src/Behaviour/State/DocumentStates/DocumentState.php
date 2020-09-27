<?php

namespace Yj\DesignPattern\Behaviour\State\DocumentStates;

use Yj\DesignPattern\Behaviour\State\Document;

abstract class DocumentState
{
    protected Document $document;
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    abstract public function publish();
}