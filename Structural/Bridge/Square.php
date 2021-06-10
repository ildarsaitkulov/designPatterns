<?php


namespace Structural\Bridge;

class Square extends Figure
{

    public function draw()
    {
        echo "Drawing Square\n";
        $this->color->fillColor();
    }
}