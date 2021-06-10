<?php


namespace Structural\Bridge;

class Circle extends Figure
{

    public function draw()
    {
        echo "Drawing Circle\n";
        $this->color->fillColor();
    }
}