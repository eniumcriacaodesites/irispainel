<?php

namespace Iris\EniumPainel;

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Iris\EniumPainel\Console\MakeIrisCommand;
use Iris\EniumPainel\Console\IrisMakeCommand;

class ServiceProvider extends BaseServiceProvider
{

    public function register()
    { }

    public function boot(
        Factory $view
    ) {
        $this->loadViews();

        $this->loadTranslations();

        $this->publishConfig();

        $this->publishAssets();

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