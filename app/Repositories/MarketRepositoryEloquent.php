<?php

namespace CodeIMarket\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeIMarket\Repositories\MarketRepository;
use CodeIMarket\Models\Market;
use CodeIMarket\Validators\MarketValidator;

/**
 * Class MarketRepositoryEloquent
 * @package namespace CodeIMarket\Repositories;
 */
class MarketRepositoryEloquent extends BaseRepository implements MarketRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Market::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
