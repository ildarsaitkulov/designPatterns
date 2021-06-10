<?php

namespace Creational\FactoryMethod;

abstract class Dialog
{
    public function render()
    {
        $button = $this->createButton();
        $button->render();
        $button->onClick(function () {
            echo 'click' . PHP_EOL;
        });
    }

    abstract public function createButton(): Button;
}
