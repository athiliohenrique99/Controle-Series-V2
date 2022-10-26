<?php

namespace App\Providers;

use App\Models\Series;
use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Support\ServiceProvider;
// use SeriesRepository;

class SeriesRepositoriesProvider extends ServiceProvider
{
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    // public function register()
    // {
    //     $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //
    // }
}
