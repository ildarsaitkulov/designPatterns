<?php

namespace Creational\FactoryMethod;

class Aircraft implements Vehicle
{

    public function go()
    {
        echo "Fly by aircraft\n";
    }
}