<?php

namespace App\Service;

class NameGenerator
{

    public function randomName()
    {
        $names = [
            'Mert',
            'Mehmet',
            'Hasan',
            'Su',
            'Türkü',
            'zeynep'
        ];

        $index = array_rand($names);

        return $names[$index];
    }
}
