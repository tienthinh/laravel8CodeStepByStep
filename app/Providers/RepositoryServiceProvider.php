<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
    * define your repositories here
    */
    protected $repositories = [
        [
           \App\Repositories\Tag\TagEloquentRepositoryInterface::class,
           \App\Repositories\Tag\TagRepository::class,
        ],
    ];

    public function register()
    {
        foreach ($this->repositories as $repository) {
            $this->app->bind($repository[0], $repository[1]);
        }
    }
}
