<?php

namespace CodeIMarket\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeIMarket\Repositories\OfferItemRepository;
use CodeIMarket\Models\OfferItem;
use CodeIMarket\Validators\OfferItemValidator;

/**
 * Class OfferItemRepositoryEloquent
 * @package namespace CodeIMarket\Repositories;
 */
class OfferItemRepositoryEloquent extends BaseRepository implements OfferItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OfferItem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
