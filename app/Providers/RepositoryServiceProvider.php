<?php

namespace App\Providers;

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
        /* Currency */
        $this->app->bind(
            'App\Interfaces\CurrencyInerface',
            'App\Repositories\CurrencyRepository'
        );

        /* Geteway */
        $this->app->bind(
            'App\Interfaces\GetewayInterface',
            'App\Repositories\GetewayRepository'
        );

        /* Geteway Setting */
        $this->app->bind(
            'App\Interfaces\GetewaySettingInterface',
            'App\Repositories\GetewaySettingRepository'
        );

        /* Paypal Geteway */
        $this->app->bind(
            'App\Interfaces\PaypalInterface',
            'App\Repositories\PaypalRepository'
        );

        /* Stripe Geteway */
        $this->app->bind(
            'App\Interfaces\StripeInterface',
            'App\Repositories\StripeRepository'
        );

        /* Fatoorah Geteway */
        $this->app->bind(
            'App\Interfaces\FatoorahInterface',
            'App\Repositories\FatoorahRepository'
        );

         /* Category */
         $this->app->bind(
             'App\Interfaces\CategoryInterface',
             'App\Repositories\CategoryRepository'
         );

         /* Sub Category */
         $this->app->bind(
             'App\Interfaces\SubCategoryInterface',
             'App\Repositories\SubCategoryRepository'
         );

         /* Child Category */
        $this->app->bind(
            'App\Interfaces\ChildCategoryInterface',
            'App\Repositories\ChildCategoryRepository'
        );

         /* Setting */
         $this->app->bind(
             'App\Interfaces\SettingInterface',
             'App\Repositories\SettingRepository'
         );
        // /* Unit */
        // $this->app->bind(
        //     'App\Interfaces\UnitInterface',
        //     'App\Repositories\UnitRepository'
        // );

        // /* Color */
        // $this->app->bind(
        //     'App\Interfaces\ColorInterface',
        //     'App\Repositories\ColorRepository'
        // );







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
