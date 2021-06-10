<?php

namespace Creational\AbstractFactory;

class MacButton implements Button
{

    public function paint()
    {
        echo 'This is Mac OS button' . PHP_EOL;
    }
}