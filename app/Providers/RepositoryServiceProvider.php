<?php

namespace App\Providers;

use App\Interfaces\CodeRepositoryInterface;
use App\Interfaces\PetRepositoryInterface;
use App\Repositories\CodeRepository;
use App\Repositories\PetRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CodeRepositoryInterface::class, CodeRepository::class);
        $this->app->bind(PetRepositoryInterface::class, PetRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
