<?php

namespace Iris\EniumPainel\Console;

use Illuminate\Auth\Console\MakeAuthCommand;

class MakeIrisCommand extends MakeAuthCommand
{
    protected $signature = 'make:irispainel {--views : Only scaffold the authentication views}{--force : Overwrite existing views by default}';

    protected $description = 'Scaffold basic IrisPainel login and registration views and routes';

    protected $irisViews = [
        'auth/login.stub'           => 'auth/login.blade.php',
        'auth/register.stub'        => 'auth/register.blade.php',
        'auth/passwords/email.stub' => 'auth/passwords/email.blade.php',
        'auth/passwords/reset.stub' => 'auth/passwords/reset.blade.php',
        'home.stub'                 => 'home.blade.php',
    ];

    protected function exportViews()
    {
        parent::exportViews();

        foreach ($this->irisViews as $key => $value) {
            copy(
                __DIR__ . '/stubs/make/views/' . $key,
                base_path('resources/views/' . $value)
            );
        }
    }
}