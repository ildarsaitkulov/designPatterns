<?php
namespace Creational\AbstractFactory;

interface GUIFactory
{
    public function createButton(): Button;
    
    public function createCheckBox(): Checkbox;
}