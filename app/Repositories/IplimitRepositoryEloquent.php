<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\IplimitRepository;
use App\Entities\Iplimit;
use App\Validators\IplimitValidator;

/**
 * Class IplimitRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class IplimitRepositoryEloquent extends BaseRepository implements IplimitRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Iplimit::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
