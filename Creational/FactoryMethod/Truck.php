<?php

namespace Creational\FactoryMethod;

class Truck implements Vehicle
{

    public function go()
    {
        echo "Go by truck\n";
    }
}