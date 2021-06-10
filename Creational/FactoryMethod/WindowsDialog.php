<?php

namespace Creational\FactoryMethod;

class WindowsDialog extends Dialog
{

    function createButton(): Button
    {
        return new WindowsButton();
    }
}