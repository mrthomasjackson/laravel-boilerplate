<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('role', function($expression) {
            return "<?php if (Auth::user()->hasRole($expression)) : ?>";
        });
        Blade::directive('endrole', function() {
            return "<?php endif; ?>";
        });

        Blade::directive('permission', function($expression) {
            return "<?php if (Auth::user()->hasPermission($expression)) : ?>";
        });
        Blade::directive('endpermission', function() {
            return "<?php endif; ?>";
        });
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
