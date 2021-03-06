<?php

namespace Codanux\Components;

use Codanux\Components\Macros\ComponentMacros;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\ComponentAttributeBag;
use function Couchbase\defaultDecoder;

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
        $prefix = config('components.prefix');

        $files = File::files(__DIR__.'/../resources/views');

        $this->callAfterResolving(BladeCompiler::class, function () use ($prefix, $files) {

            foreach ($files as $file) {
                $name = $file->getFilenameWithoutExtension();
                $names = str_split($name, strpos($name, '.'));
                $alias = $names[0];

                Blade::component('components::'.$alias, $alias, $prefix);
            }
        });
    }
}
