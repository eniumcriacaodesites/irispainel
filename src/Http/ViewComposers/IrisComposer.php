<?php

namespace Iris\EniumPainel\Http\ViewComposers;

use Illuminate\View\View;
use JeroenNoten\LaravelAdminLte\AdminLte;

class IrisComposer
{
    /**
     * @var AdminLte
     */
    private $adminlte;

    public function __construct(
        Irispainel $irispainel
    ) {
        $this->irispainel = $irispainel;
    }

    public function compose(View $view)
    {
        $view->with('irispainel', $this->irispainel);
    }
}