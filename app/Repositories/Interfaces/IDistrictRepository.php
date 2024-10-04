<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface IDistrictRepository extends ILocationRepository
{
    public function getByCondition(int $parentId): Collection;
}
