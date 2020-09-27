<?php

namespace Yj\DesignPattern\Behaviour\TemplateMethod\Miners;

class AnalyzedData
{
    private JsonData $content;
    public function __construct(JsonData $content)
    {
        $this->content = $content;
    }

    public function lines() :int
    {
        return count($this->content->toArray());    
    }

    public function mostFrequently(): string
    {
        return 'return here the most frequently data on content';
    }
    
    public function lessFrequently(): string
    {
        return 'return here the less frequently data on content';
    }



}