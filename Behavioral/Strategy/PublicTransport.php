<?php

namespace Behavioral\Strategy;

class PublicTransport implements RouteStrategy
{

    public function buildRoute($a, $b)
    {
        echo "Building route for public transport\n";
    }
}