<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AuthUserRepository;
use App\Entities\AuthUser;
use App\Validators\AuthUserValidator;

/**
 * Class AuthUserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AuthUserRepositoryEloquent extends BaseRepository implements AuthUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AuthUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
