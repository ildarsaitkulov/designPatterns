<?php
namespace Creational\FactoryMethod;

interface Button
{

    public function render();

    public function onClick(callable $callable);
}