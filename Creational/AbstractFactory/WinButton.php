<?php

namespace Creational\AbstractFactory;

class WinButton implements Button
{

    public function paint()
    {
        echo 'This is Windows button'  . PHP_EOL;
    }
}