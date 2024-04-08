<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\SubCategoryRepositoryInterface;
use App\Repositories\SubCategoryRepository;
use App\Repositories\ImageRepositoryInterface;
use App\Repositories\ImageRepository;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\CountryRepositoryInterface;
use App\Repositories\CountryRepository;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\CityRepository;




use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class , UserRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class , CategoryRepository::class);
        $this->app->bind(SubCategoryRepositoryInterface::class , SubCategoryRepository::class);
        $this->app->bind(ImageRepositoryInterface::class , ImageRepository::class);
        $this->app->bind(PostRepositoryInterface::class , PostRepository::class);
        $this->app->bind(CountryRepositoryInterface::class , CountryRepository::class);
        $this->app->bind(CityRepositoryInterface::class , CityRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
