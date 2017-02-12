<?php

namespace CodeIMarket\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeIMarket\Repositories\OfferRepository;
use CodeIMarket\Models\Offer;
use CodeIMarket\Validators\OfferValidator;

/**
 * Class OfferRepositoryEloquent
 * @package namespace CodeIMarket\Repositories;
 */
class OfferRepositoryEloquent extends BaseRepository implements OfferRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Offer::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
