<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\compraRepository;
use App\Models\Compra;

/**
 * Class CompraRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CompraRepositoryEloquent extends BaseRepository implements CompraRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Compra::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
