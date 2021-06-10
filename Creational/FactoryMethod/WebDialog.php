<?php

namespace Creational\FactoryMethod;

class WebDialog extends Dialog
{

    function createButton(): Button
    {
        return new HTMLButton();
    }
}