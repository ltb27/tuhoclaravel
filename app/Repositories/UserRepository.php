<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use LaravelIdea\Helper\App\Models\_IH_User_C;

class UserRepository implements UserRepositoryInterface
{

    public function paginate($page): array|_IH_User_C|LengthAwarePaginator
    {
        // TODO: Implement paginate() method.
        return User::paginate($page);
    }
}

