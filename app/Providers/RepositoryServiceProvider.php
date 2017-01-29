<?php

namespace CodeIMarket\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
          'CodeIMarket\Repositories\CategoryRepository',
          'CodeIMarket\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\MarketRepository',
          'CodeIMarket\Repositories\MarketRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\MarketImageRepository',
          'CodeIMarket\Repositories\MarketImageRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\OfferRepository',
          'CodeIMarket\Repositories\OfferRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\OfferItemRepository',
          'CodeIMarket\Repositories\OfferItemRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\ProductRepository',
          'CodeIMarket\Repositories\ProductRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\ProductImageRepository',
          'CodeIMarket\Repositories\ProductImageRepositoryEloquent'
        );

        $this->app->bind(
          'CodeIMarket\Repositories\UserRepository',
          'CodeIMarket\Repositories\UserRepositoryEloquent'
        );
    }
}
