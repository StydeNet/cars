<?php

namespace Cars\Providers;

use Illuminate\Support\ServiceProvider;
use Cars\Http\ViewComposers\MakeModelForm;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(
            ['components/dropdowns'],
            MakeModelForm::class
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
