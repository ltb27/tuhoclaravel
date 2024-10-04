<?php

namespace App\Repositories;

use App\Models\Province;
use App\Repositories\Interfaces\IProvinceRepository;

class ProvinceRepository extends LocationRepository implements IProvinceRepository
{
    function __construct(Province $model)
    {
        parent::__construct($model);
    }
}
