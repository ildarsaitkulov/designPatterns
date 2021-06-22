<?php

namespace Behavioral\Strategy;

class Walking implements RouteStrategy
{

    public function buildRoute($a, $b)
    {
        echo "Building route for Walking\n";
    }
}