<?php

namespace Yj\DesignPattern\Structural\Adapter;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Adaptador, Wrapper
     */
    public function run()
    {
        $stocks = new StocksService();
        $weg = new Stock('WEG3');

        $stockAnalyzer = new StockAnalyzerAdapter($stock);
        $stockAnalyzer->top();
        $stockAnalyzer->bottom();
    }
}