<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\mailRepository;
use App\Entities\Mail;
use App\Validators\MailValidator;

/**
 * Class MailRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MailRepositoryEloquent extends BaseRepository implements MailRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Mail::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
