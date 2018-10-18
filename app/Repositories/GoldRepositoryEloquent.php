<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\goldRepository;
use App\Models\Gold;

/**
 * Class GoldRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class GoldRepositoryEloquent extends BaseRepository implements GoldRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Gold::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
