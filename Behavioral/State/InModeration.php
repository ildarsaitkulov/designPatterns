<?php


namespace Behavioral\State;

class InModeration implements State
{

    public function render()
    {
        echo "InModeration render\n";
    }

    public function publish()
    {
        echo "InModeration publish\n";
    }
}