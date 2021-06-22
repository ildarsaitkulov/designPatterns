<?php


namespace Behavioral\Command;

class Bulb
{

    public function turnOn()
    {
        echo "Лампочка загорелась!\n";
    }
    
    public function turnOff()
    {
        echo "Лампочка погасла!\n";
    }
}