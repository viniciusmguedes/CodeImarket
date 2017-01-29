<?php

namespace CodeIMarket\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeIMarket\Repositories\UserRepository;
use CodeIMarket\Models\User;
use CodeIMarket\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace CodeIMarket\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
