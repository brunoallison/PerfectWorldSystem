<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UsecashnowRepository;
use App\Entities\Usecashnow;
use App\Validators\UsecashnowValidator;

/**
 * Class UsecashnowRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UsecashnowRepositoryEloquent extends BaseRepository implements UsecashnowRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Usecashnow::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
