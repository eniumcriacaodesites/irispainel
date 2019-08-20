<?php

namespace Iris\EniumPainel\Http\ViewComposers;

use Illuminate\View\View;
use Iris\EniumPainel\Irispainel;

class IrisComposer
{
    /**
     * @var AdminLte
     */
    private $irispainel;

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