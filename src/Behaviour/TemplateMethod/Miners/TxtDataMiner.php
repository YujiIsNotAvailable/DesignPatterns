<?php

namespace Yj\DesignPattern\Behaviour\TemplateMethod\Miners;

class TxtDataMiner extends DataMiner
{
    public function extractData(): string
    {
        return file_get_contents($this->filepath);
    }

    public function parseData(string $rawData): JsonData
    {
        $arr = explode("\n", $rawData);
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