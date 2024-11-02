<?php

namespace App\Repository;

use App\Model\StarShip;

class StarshipRepository
{
    public function findAll(): array
    {
        return [
            new StarShip(1, 'Millennium Falcon', 'X-wing', 'Han Solo'),
            new StarShip(2, 'X-Wing', 'X-wing', 'Luke Skywalker'),
            new StarShip(3, 'TIE Defender', 'TIE', 'Han Solo'),
        ];
    }
}
