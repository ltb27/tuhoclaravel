<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface as IUserRepository;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use LaravelIdea\Helper\App\Models\_IH_User_C;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    private IUserRepository $userRepository;

    /**
     * @param IUserRepository $userRepository
     */
    function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function paginate($page): array|_IH_User_C|LengthAwarePaginator
    {
        return $this->userRepository->paginate($page);
    }
}
