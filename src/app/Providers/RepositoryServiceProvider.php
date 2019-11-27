<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\RepositoryInterface;
use App\Repositories\FormRepository;
use App\Repositories\QuestionRepository;
use App\Models\Form;
use App\Models\Question;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, 
            new FormRepository(new Form)
        );

        $this->app->bind(RepositoryInterface::class,
            new QuestionRepository(new Question)
        );
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
