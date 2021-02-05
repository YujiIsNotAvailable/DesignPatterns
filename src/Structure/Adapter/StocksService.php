<?php

namespace Yj\DesignPattern\Structural\Adapter;

class StocksService
{
    // simulate a intraday (24h)
    public function getIntraday(Stock $stock): array
    {
        return [
            '0' => '60.00',
            '1' => '60.00',
            '2' => '60.00',
            '3' => '60.00',
            '4' => '60.00',
            '5' => '60.00',
            '6' => '60.00',
            '7' => '60.00',
            '8' => '60.00',
            '9' => '58.21',
            '10' => '60.54',
            '11' => '62.31',
            '12' => '62.30',
            '13' => '62.59',
            '14' => '62.20',
            '15' => '63.01',
            '16' => '63.65',
            '17' => '62.15',
            '18' => '57.23',
            '19' => '56.34',
            '20' => '58.00',
            '21' => '59.29',
            '22' => '59.29',
            '23' => '59.29',
        ];
    }
} 