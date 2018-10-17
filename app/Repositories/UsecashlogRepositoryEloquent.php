<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UsecashlogRepository;
use App\Entities\Usecashlog;
use App\Validators\UsecashlogValidator;

/**
 * Class UsecashlogRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UsecashlogRepositoryEloquent extends BaseRepository implements UsecashlogRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Usecashlog::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
