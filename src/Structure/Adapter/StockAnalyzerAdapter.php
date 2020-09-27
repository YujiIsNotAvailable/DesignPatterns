<?php

namespace Yj\DesignPattern\Structure\Adapter;

class StockAnalyzerAdapter
{
    protected Stock $stock;
    protected StockAnalyzer $analyzer;
    public function __construct(Stock $stock)
    {
        $this->analyzer = new StockAnalyzer();    
        $this->stock = $stock;
    }
    
    public function top()
    {
        $this->analyzer->top();
    }
    
    public function bottom()
    {
        
    }
}