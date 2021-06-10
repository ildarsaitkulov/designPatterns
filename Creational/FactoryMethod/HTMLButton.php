<?php

namespace Creational\FactoryMethod;

class HTMLButton implements Button
{

    public function render()
    {
        echo 'Rendered HTML' . PHP_EOL;
    }

    public function onClick(callable $callable)
    {
        echo 'onClick HTMLButton'  . PHP_EOL;
        call_user_func($callable);
    }
}