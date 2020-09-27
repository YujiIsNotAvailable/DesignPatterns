<?php

namespace Yj\DesignPattern\Behaviour\TemplateMethod\Miners;

class CsvDataMiner extends DataMiner
{
    private string $delimiter;
    public function __construct(string $filepath, $delimiter = ',')
    {
        parent::__construct($filepath);
        $this->delimiter = $delimiter;
    }

    public function extractData(): string
    {
        return file_get_contents($this->filepath);
    }

    public function parseData(string $rawData): JsonData
    {
        $arr = explode("\n", $rawData);
        $newArr = [];
        foreach ($arr as $k => $v) $newArr[$k] = explode($this->delimiter, $v);
        $jdata = new JsonData($arr);
        return $jdata;
    }
    
    public function analyze(JsonData $data): AnalyzedData
    {
        return new AnalyzedData($data);
    }

    public function closeFile(): void
    {
        return;
    }
}