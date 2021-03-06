<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\SlideRepository::class, \App\Repositories\SlideRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\NewsRepository::class, \App\Repositories\NewsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EventRepository::class, \App\Repositories\EventRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BandRepository::class, \App\Repositories\BandRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\GenreRepository::class, \App\Repositories\GenreRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\FeedbackRepository::class, \App\Repositories\FeedbackRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MemberRepository::class, \App\Repositories\MemberRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\LocationRepository::class, \App\Repositories\LocationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ImageRepository::class, \App\Repositories\ImageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ItemRepository::class, \App\Repositories\ItemRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BandEventRepository::class, \App\Repositories\BandEventRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BandGenreRepository::class, \App\Repositories\BandGenreRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BandLocationRepository::class, \App\Repositories\BandLocationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ActRepository::class, \App\Repositories\ActRepositoryEloquent::class);
        //:end-bindings:
    }
}
