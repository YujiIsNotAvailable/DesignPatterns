<?php

namespace Yj\DesignPattern\Structure\Proxy;

use Yj\DesignPattern\Functions;
use Yj\DesignPattern\Pattern;

class Index implements Pattern
{
    /**
     * @Proxy, Substituto
     * Provê um substituto. Este fará o controle de seu acesso
     */
    public function run()
    {
        // Ao utilizar MusicsServiceProxy, o retorno será cacheado dentro do proxy, agilizando assim o acesso aos dados, sem que o cliente saiba o que realmente acontece.
        $api = new MusicsServiceProxy();  // new MusicsService();

        Functions::print("The top 3 musics are: ");
        foreach ($api->getTop(3) as $m) Functions::print($m);
        
        Functions::print("Right.. Lets see again the top 3 musics: ");
        foreach ($api->getTop(3) as $m) Functions::print($m);
    }
}