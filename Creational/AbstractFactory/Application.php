<?php


namespace Creational\AbstractFactory;

class Application
{

    public function __construct(GUIFactory $factory)
    {
        $factory->createButton()->paint();
        $factory->createCheckBox()->paint();
    }
}