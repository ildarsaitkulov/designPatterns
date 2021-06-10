<?php

namespace Creational\AbstractFactory;

class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckBox(): Checkbox
    {
        return new MacCheckbox();
    }
}