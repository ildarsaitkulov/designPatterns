<?php

namespace Creational\FactoryMethod;

class WindowsButton implements Button
{

    public function render()
    {
        echo 'Rendered WindowsButton' . PHP_EOL;
    }

    public function onClick(callable $callable)
    {
        echo 'onClick WindowsButton'  . PHP_EOL;
        
        call_user_func($callable);
    }
}