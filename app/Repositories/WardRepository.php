<?php

namespace App\Repositories;

use App\Models\Ward;
use App\Repositories\Interfaces\IWardRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class WardRepository extends LocationRepository implements IWardRepository
{
    protected Model $model;

    function __construct(Ward $model)
    {
        parent::__construct($model);
    }


    public function getByCondition(int $parentId): Collection
    {
        return $this->model->where('district_code', '=', $parentId)->select('code', 'name')->get();

    }
}
