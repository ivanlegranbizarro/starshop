<?php

namespace App\Repository;

use App\Model\StarShip;

class StarshipRepository
{
    public function findAll(): array
    {
        return [
            new StarShip(1, 'Millennium Falcon', 'X-wing', 'YT-1300', 'Han Solo'),
            new StarShip(2, 'X-Wing', 'X-wing', 'T-65X', 'Leia Organa'),
            new StarShip(3, 'TIE Advanced x1', 'TIE', 'TIE Advanced x1', 'Han Solo'),
            new StarShip(4, 'TIE Silencer', 'TIE', 'TIE Silencer', 'Han Solo'),
        ];
    }

    public function find(int $id): ?StarShip
    {
        return $this->findAll()[$id - 1] ?? null;
    }
}
