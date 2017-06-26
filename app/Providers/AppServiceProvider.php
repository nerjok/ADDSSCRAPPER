<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            Schema::defaultStringLength(191);

            Validator::extend('baks', function ($attribute, $value, $parameters, $validator) {
                $sites = array('cvbankas.lt', 'dirba.lt', 'darbo.lt', 'cv.lt', 'cvkodas.lt','cvzona.lt', 'cvmarket.lt');
                    foreach ($sites as $site) {

                      //  if ((preg_match_all("/.{0,}{$site}.{0,}/", $value)) && @file_get_contents($value)) return true;
             if (preg_match_all("/.{0,}{$site}.{0,}/", $value)) return true;

                    }
             return false;
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
