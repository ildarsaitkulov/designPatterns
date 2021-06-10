<?php

namespace Creational\AbstractFactory;

class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckBox(): Checkbox
    {
        return new WinCheckbox();
    }
}