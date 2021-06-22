<?php

namespace Behavioral\State;

class Draft implements State
{

    public function render()
    {
        echo "Draft render\n";
    }

    public function publish()
    {
        echo "Draft publish\n";
    }
}