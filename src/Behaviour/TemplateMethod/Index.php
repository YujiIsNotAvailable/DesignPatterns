<?php

namespace Yj\DesignPattern\Behaviour\TemplateMethod;

use Yj\DesignPattern\Behaviour\TemplateMethod\Miners\CsvDataMiner;
use Yj\DesignPattern\Behaviour\TemplateMethod\Miners\TxtDataMiner;
use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Método padrão -> Define um esqueleto de algoritmo
     * Neste padrão o objetivo é ter em uma classe abstrata um método padrão, enquanto as classes concretas, a partir da extensão, pode modificar os métodos opcionais (que compõem o método principal).
     */
    public function run()
    {
        Functions::print("Minerando dados de um arquivo CSV..");
        $miner = new CsvDataMiner(__DIR__.'/Data/some-report.csv');
        $miner->mine();
        sleep(2);
        Functions::print("Número de linhas: ". $miner->mine()->lines(), 2);

        Functions::print("Minerando dados de um arquivo TXT..");
        $miner = new TxtDataMiner(__DIR__.'/Data/some-log.txt');
        $miner->mine();
        sleep(2);
        Functions::print("Número de linhas: ". $miner->mine()->lines(), 2);
    }
}