<?php

namespace App\Repositories;

use App\Models\District;
use App\Repositories\Interfaces\IDistrictRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class DistrictRepository extends LocationRepository implements IDistrictRepository
{
    protected Model $model;

    function __construct(District $model)
    {
        parent::__construct($model);
    }


    public function getByCondition(int $parentId): Collection
    {
        // TODO: Implement getByParentId() method.
        return $this->model->where('province_code', '=', $parentId)->select('code', 'name')->get();

    }
}
