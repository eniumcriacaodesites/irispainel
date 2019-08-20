<?php

namespace Iris\EniumPainel;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Iris\EniumPainel\Console\IrisMakeCommand;
use Iris\EniumPainel\Http\ViewComposers\IrisComposer;
use Iris\EniumPainel\Helpers\Iris;
class ServiceProvider extends BaseServiceProvider
{

    public function register()
    { }

    public function boot(
        Factory $view,
        Dispatcher $events,
        Repository $config
    ) {
        $this->loadViews();

        $this->loadTranslations();

        $this->publishConfig();

        $this->publishAssets();

        $this->publishHelpers();

        $this->registerCommands();

        $this->registerViewComposers($view);
    }

    private function loadViews()
    {
        $viewsPath = $this->packagePath('resources/views');

        $this->loadViewsFrom($viewsPath, 'irispainel');

        $this->publishes([
            $viewsPath => base_path('resources/views/vendor/irispainel'),
        ], 'views');
    }

    private function loadTranslations()
    {
        $translationsPath = $this->packagePath('resources/lang');

        $this->loadTranslationsFrom($translationsPath, 'irispainel');

        $this->publishes([
            $translationsPath => base_path('resources/lang/vendor/irispainel'),
        ], 'translations');
    }

    private function publishConfig()
    {
        $configPath = $this->packagePath('config/irispainel.php');

        $this->publishes([
            $configPath => config_path('irispainel.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'irispainel');
    }
    
    private function publishHelpers()
    {
        $configPath = $this->packagePath('src/Helpers/');

        $this->publishes([
            $configPath => base_path('app/'),
        ], 'app');

    }

    private function publishAssets()
    {
        $this->publishes([
            $this->packagePath('resources/assets') => public_path('vendor/irispainel'),
        ], 'assets');
    }

    private function packagePath($path)
    {
        return __DIR__ . "/../$path";
    }

    private function registerCommands()
    {
        $this->commands(IrisMakeCommand::class);
    }

    private function registerViewComposers(Factory $view)
    {
        $view->composer('irispainel::page', IrisComposer::class);
    }
}