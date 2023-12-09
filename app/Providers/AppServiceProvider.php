<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('aud', function () {
            $isAuth = false;
            // check if the user authenticated is teacher
            if (auth()->user() || auth()->user()->user_type == 1) {
                $isAuth = true;
            }
            return "<?php if (" . intval($isAuth) . ") { ?>";
        });
        Blade::directive('endaud', function () {
            return "<?php } ?>";
        });
    }
}
