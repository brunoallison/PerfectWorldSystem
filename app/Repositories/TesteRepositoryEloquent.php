<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TesteRepository;
use App\Entities\Teste;
use App\Validators\TesteValidator;

/**
 * Class TesteRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TesteRepositoryEloquent extends BaseRepository implements TesteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Teste::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
