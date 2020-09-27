<?php

namespace Yj\DesignPattern\Behaviour\TemplateMethod\Miners;

abstract class DataMiner
{
    protected $resource;
    protected string $filepath;
    public function __construct(string $filepath)
    {
        $this->filepath = $filepath;
    }
    
    public function openFile() :void
    {
        $this->resource = fopen($this->filepath, 'r') ?: null;
    }

    abstract public function extractData() :string;
    abstract public function parseData(string $data) :JsonData;
    abstract public function analyze(JsonData $parsedData) :AnalyzedData;

    public function closeFile() :void
    {
        $this->resource = $this->resource ? fclose($this->resource) : null;
    }

    public function mine(): AnalyzedData
    {
        $this->openFile();
        $rawData = $this->extractData();
        $this->closeFile();

        $data = $this->parseData($rawData);
        return $this->analyze($data);
    }
}