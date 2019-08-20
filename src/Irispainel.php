<?php

namespace Iris\EniumPainel;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;


class Irispainel
{
    protected $filters;

    protected $events;

    protected $container;

    public function __construct(
        array $filters,
        Dispatcher $events,
        Container $container
    ) {
        $this->filters = $filters;
        $this->events = $events;
        $this->container = $container;
    }


    protected function buildFilters()
    {
        return array_map([$this->container, 'make'], $this->filters);
    }
}