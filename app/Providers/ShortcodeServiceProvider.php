<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ShortcodeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('shortcode', function ($app) {
            return new \App\Services\ShortcodeService();
        });
    }

    public function boot()
    {
        Blade::directive('shortcode', function ($expression) {
            return "<?php echo app('shortcode')->render($expression); ?>";
        });
    }
	
}
