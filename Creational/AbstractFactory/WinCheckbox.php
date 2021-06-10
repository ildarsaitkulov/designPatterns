<?php

namespace Creational\AbstractFactory;

class WinCheckbox implements Checkbox
{

    public function paint()
    {
        echo 'This is Windows checkbox'  . PHP_EOL;
    }
}