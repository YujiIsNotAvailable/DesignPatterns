<?php

namespace Yj\DesignPattern\Behaviour\TemplateMethod\Miners;

class JsonData
{
    private string $content;
    public function __construct(array $data)
    {
        $this->parse($data);
    }
    
    public function content(): string
    {
        return $this->content;    
    }

    private function parse(array $data)
    {
        $this->content = json_encode($data);
    }

    public function toArray(): array
    {
        return json_decode($this->content);
    }
}