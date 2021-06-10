<?php

namespace Creational\AbstractFactory;

class MacCheckbox implements Checkbox
{

    public function paint()
    {
        echo 'This is Mac OS checkbox'  . PHP_EOL;
    }
}