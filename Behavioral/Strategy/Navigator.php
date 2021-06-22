<?php

namespace Behavioral\Strategy;

class Navigator
{

    /**
     * @var RouteStrategy
     */
    private $routeStrategy;

    public function __construct(RouteStrategy $routeStrategy)
    {
        $this->routeStrategy = $routeStrategy;
    }

    public function buildRoute($a, $b)
    {
        $this->routeStrategy->buildRoute($a, $b);
    }

}