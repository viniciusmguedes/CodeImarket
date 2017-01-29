<?php

namespace CodeIMarket\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeIMarket\Repositories\MarketImageRepository;
use CodeIMarket\Models\MarketImage;
use CodeIMarket\Validators\MarketImageValidator;

/**
 * Class MarketImageRepositoryEloquent
 * @package namespace CodeIMarket\Repositories;
 */
class MarketImageRepositoryEloquent extends BaseRepository implements MarketImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MarketImage::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
