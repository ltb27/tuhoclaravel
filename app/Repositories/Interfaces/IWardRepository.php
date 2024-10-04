<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface IWardRepository extends ILocationRepository
{
    public function getByCondition(int $parentId): Collection;
}
