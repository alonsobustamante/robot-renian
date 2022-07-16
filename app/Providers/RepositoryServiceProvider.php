<?php

namespace App\Providers;

use App\Interfaces\CodeRepositoryInterface;
use App\Interfaces\DocumentoRepositoryInterface;
use App\Interfaces\PetRepositoryInterface;
use App\Interfaces\SuneduRepositoryInterface;
use App\Interfaces\SusaludRepositoryInterface;
use App\Repositories\CodeRepository;
use App\Repositories\DocumentoRepository;
use App\Repositories\PetRepository;
use App\Repositories\SuneduRepository;
use App\Repositories\SusaludRepository;
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
        $this->app->bind(DocumentoRepositoryInterface::class, DocumentoRepository::class);
        $this->app->bind(SusaludRepositoryInterface::class, SusaludRepository::class);
        $this->app->bind(SuneduRepositoryInterface::class, SuneduRepository::class);
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
