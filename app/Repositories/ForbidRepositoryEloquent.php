<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ForbidRepository;
use App\Entities\Forbid;
use App\Validators\ForbidValidator;

/**
 * Class ForbidRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ForbidRepositoryEloquent extends BaseRepository implements ForbidRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Forbid::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
