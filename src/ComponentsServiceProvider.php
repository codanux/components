<?php

namespace Codanux\Components;

use Codanux\Components\Macros\ComponentMacros;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\ComponentAttributeBag;

class ComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'components');

        $this->configureComponents();

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('components.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/components'),
            ], 'components-views');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'components');

        // Register the main class to use with the facade
        $this->app->singleton('components', function () {
            return new Components;
        });

        ComponentAttributeBag::mixin(new ComponentMacros);
    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function ()  {
            Blade::component('components::input', 'input');
            Blade::component('components::textarea', 'textarea');
            Blade::component('components::radio', 'radio');
            Blade::component('components::checkboxes', 'checkboxes');
            Blade::component('components::select', 'select');
        });
    }
}
