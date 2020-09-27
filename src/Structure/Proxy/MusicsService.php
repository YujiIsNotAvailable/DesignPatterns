<?php

namespace Yj\DesignPattern\Structure\Proxy;

use Yj\DesignPattern\Functions;

class MusicsService implements MusicsServiceInterface
{
    public function getTop(int $num): array
    {
        $top = [
            'Por enquanto',
            'Dia especial',
            'Faz parte',
            'Partilhar',
            'Rap é compromisso',
            'Mun Rá',
            'Sede ao pote',
            'Quem diria',
            'Veraneio vascaina',
            'Temazcal',
            'Cadê',
        ];
        Functions::print('Calculating the top musics....', 5);
        return array_slice($top, 0, $num);
    }
}