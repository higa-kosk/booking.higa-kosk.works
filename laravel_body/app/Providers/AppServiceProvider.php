<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // for coreserver
        // これを追記（コアサーバーの絶対パスで指定）
        $this->app->bind('path.public', function () {
            return '/virtual/higakosk/domains/booking.higa-kosk.works/public_html';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
